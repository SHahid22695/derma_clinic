<?php
include "config/db.php";

$services_sql = "SELECT * FROM services";
$services_result = mysqli_query($conn, $services_sql);

session_start();
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== TRUE) {
    header("Location: login.php?error=please login first");
    exit();
}
$page = 'booking.php';
$nav_class = 'ftco-navbar-light-2';

include "inc/header.php"; 


?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Book Appointment</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Appointment</span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card p-5 shadow-sm border-0" style="border-radius: 15px;">
              <h3 class="text-center mb-4">Book Your Treatment</h3>
              <form action="add_booking.php" method="POST">
                <div class="form-group">
  <label>(Select Service)</label>
  <select name="service_id" class="form-control" required style="text-align: start !important;">
    <option value="" disabled selected>-- اختر من الخدمات المتاحة --</option>
    <?php 
    
    if (mysqli_num_rows($services_result) > 0) {
        while($service_row = mysqli_fetch_assoc($services_result)) {
            echo "<option value='" . $service_row['id'] . "'>" . htmlspecialchars($service_row['title']) . " (" . $service_row['price'] . " ILS)</option>";
        }
    } else {
        
        echo "<option value='1'>العناية بالبشرة (Skin Care)</option>";
        echo "<option value='2'>تدليك الجسم (Body Massage)</option>";
        echo "<option value='3'>العلاج بالروائح (Aromatherapy)</option>";
        echo "<option value='4'>السبا العشبي (Herbal Spa)</option>";
    }
    ?>
  </select>
</div>
<div class="form-group">
  <label>(Select Specialist)</label>
  <select name="doctor_id" class="form-control" required style="text-align: start !important;">
  <option value="" disabled selected>-- اختر الطبيب/ة --</option>
    <option value="1">Dr. Sarah (Skincare Specialist)</option>
    <option value="2">Dr. Emily (Massage Therapist)</option>
  </select>
</div>


                <div class="form-group">
                  <label>Appointment Date</label>
                  <input type="date" name="appointment_date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Appointment Time</label>
                  <input type="time" name="appointment_time" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary py-3 px-5 w-100">Confirm Booking</button>
              </form>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <div class="card p-4 shadow-sm border-0" style="border-radius: 15px;">
              <h4 class="text-center mb-4">My Appointments</h4>
              <div class="table-responsive">
                <table class="table table-bordered text-center align-middle">
                  <thead class="table-dark">
                    <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "config/db.php";
                    $current_user_id = $_SESSION['id'];
                    $stmt_p = $conn->prepare("SELECT id FROM patients WHERE user_id = ?");
                    $stmt_p->bind_param("i", $current_user_id);
                    $stmt_p->execute();
                    $res_p = $stmt_p->get_result();
                    $p_row = $res_p->fetch_assoc();
                    $patient_id = $p_row['id'] ?? 0;
      
$query_user = "SELECT * FROM appointments WHERE patient_id = ? ORDER BY id DESC";
$stmt_user = $conn->prepare($query_user);

if ($stmt_user) {
    
    $stmt_user->bind_param("i", $_SESSION['id']);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
    }
                    if(mysqli_num_rows($result_user) > 0) {
                        while($user_row = mysqli_fetch_assoc($result_user)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($user_row['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($user_row['appointment_date']) . "</td>";
                            echo "<td>" . htmlspecialchars($user_row['appointment_time']) . "</td>";
                            if($user_row['status'] == 'pending') {
                                echo "<td><span class='badge bg-warning text-dark p-2'>Pending</span></td>";
                            } elseif($user_row['status'] == 'approved') {
                                echo "<td><span class='badge bg-success p-2'>Approved</span></td>";
                            } else {
                                echo "<td><span class='badge bg-danger p-2'>Canceled</span></td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-muted py-3'>No appointments yet!</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include "inc/footer.php"; ?>
