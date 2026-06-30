<?php

session_start();

if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php?error=access denied");
    exit();
}
include "../config/db.php";
$sql = "SELECT appointments.id, users.name AS client_name, services.title AS service_name, appointments.appointment_date, appointments.appointment_time, appointments.status 
        FROM appointments
        JOIN patients ON appointments.patient_id = patients.id
        JOIN users ON patients.user_id = users.id
        LEFT JOIN services ON appointments.service_id = services.id
        ORDER BY appointments.id DESC";
$result = mysqli_query($conn, $sql);

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

<!-- شريط التنقل العلوي -->
<nav class="navbar navbar-dark navbar-admin px-4 py-3">
    <a class="navbar-brand fw-bold" href="#">لوحة تحكم عيادة سبارليكس (Admin)</a>
    <span class="text-white">أهلاً بكِ، Admin</span>
</nav>

<div class="container mt-5">
    <h2 class="mb-4 text-secondary">إدارة مواعيد العيادة الحالية</h2>

    <div class="card card-box p-4 bg-white">
        <div class="table-responsive">
           <table class="table table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>رقم الحجز</th>
            <th>اسم الزبون</th>
            <th>الخدمة المطلوبة</th> 
            <th>التاريخ</th>
            <th>التوقيت</th>
            <th>الحالة</th>
            <th>الإجراءات</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['client_name']) . "</td>";
                
                echo "<td>" . htmlspecialchars($row['service_name'] ?? 'General Treatment') . "</td>"; 
                echo "<td>" . htmlspecialchars($row['appointment_date']) . "</td>";
                echo "<td>" . htmlspecialchars($row['appointment_time']) . "</td>";
                
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
            
            echo "<tr><td colspan='7' class='text-center py-4'>لا توجد مواعيد حالياً!</td></tr>";
        }
        ?>
    </tbody>
</table>

        </div>
    </div>
</div>

</body>
</html>
