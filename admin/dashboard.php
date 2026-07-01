<?php
session_start();

if (!isset($_SESSION['id']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'doctor')) {
    header("Location: ../login.php?error=access denied");
    exit();
}
include "../config/db.php";

$sql = "SELECT 
            appointments.id, 
            users.name AS client_name, 
            doctors.name AS doctor_name, 
            services.title AS service_name, 
            appointments.appointment_date, 
            appointments.appointment_time, 
            appointments.status 
        FROM appointments
        JOIN users ON appointments.user_id = users.id
        LEFT JOIN doctors ON appointments.doctor_id = doctors.id
        LEFT JOIN services ON appointments.service_id = services.id
        ORDER BY appointments.id DESC";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("خطأ في الاستعلام: " . mysqli_error($conn) . "<br>تأكد من استيراد قاعدة البيانات بشكل صحيح.");
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة تحكم المسؤول - إدارة العيادة</title>
    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .navbar-admin { background-color: #343a40; }
        .card-box { border-radius: 10px; border: none; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
<!--  شريط التنقل العلوي -->
<nav class="navbar navbar-dark navbar-admin px-4 py-3 d-flex justify-content-between">
    <a class="navbar-brand fw-bold" href="#">لوحة تحكم عيادة سبارليكس</a>
    <div>
        <span class="text-white ms-3">أهلاً بكِ، <?php echo htmlspecialchars($_SESSION['name']); ?></span>
        <a href="../logout.php" class="btn btn-outline-light btn-sm ms-3">تسجيل خروج</a>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="mb-4 text-secondary">إدارة مواعيد العيادة الحالية</h2>

    <div class="card card-box p-4 bg-white">
        <div class="table-responsive">
           <table class="table table-hover align-middle">
    <!--  رؤوس الجدول -->
    <thead class="table-dark">
        <tr>
            <th>رقم الحجز</th>
            <th>اسم الزبون</th>
            <th>اسم الدكتور</th>
            <th>الخدمة المطلوبة</th> 
            <th>التاريخ</th>
            <th>التوقيت</th>
            <th>الحالة</th>
            <th>الإجراءات</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // عرض المواعيد
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['client_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['doctor_name'] ?? 'N/A') . "</td>";
                echo "<td>" . htmlspecialchars($row['service_name'] ?? 'General Treatment') . "</td>"; 
                echo "<td>" . htmlspecialchars($row['appointment_date']) . "</td>";
                echo "<td>" . htmlspecialchars($row['appointment_time']) . "</td>";
                //  شارة الحالة مع لون
                if($row['status'] == 'pending') {
                    echo "<td><span class='badge bg-warning text-dark'>قيد الانتظار</span></td>";
                } elseif($row['status'] == 'approved') {
                    echo "<td><span class='badge bg-success'>مقبول</span></td>";
                } else {
                    echo "<td><span class='badge bg-danger'>مرفوض</span></td>";
                }
                echo "<td>
                        <a href='update_status.php?id=" . urlencode($row['id']) . "&action=approve' class='btn btn-sm btn-success me-1'>موافقة</a>
                        <a href='update_status.php?id=" . urlencode($row['id']) . "&action=reject' class='btn btn-sm btn-danger'>رفض</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8' class='text-center py-4'>لا توجد مواعيد حالياً!</td></tr>";
        }
        ?>
    </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>