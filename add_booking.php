<?php
session_start();
include "config/db.php";
require_once "validation.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php?error=please login first");
    exit();
}

$patient_id       = $_SESSION['id'];

$service_id       = !empty($_POST['service_id']) ? validate($_POST['service_id']) : 1;
$appointment_date = validate($_POST['appointment_date']);
$appointment_time = validate($_POST['appointment_time']);


$sql = "INSERT INTO appointments (patient_id, service_id, appointment_date, appointment_time, status) 
        VALUES (?, ?, ?, ?, 'pending')";

$statement = $conn->prepare($sql);

if ($statement) {
    
    $statement->bind_param("iiss", $patient_id, $service_id, $appointment_date, $appointment_time);

    if ($statement->execute()) {
        
        header("Location: index.php?success=appointment booked");
        exit();
    } else {
        echo "حدث خطأ أثناء تنفيذ الحجز: " . $statement->error;
    }
} else {
    echo "فشل في تجهيز الاستعلام: " . $conn->error;
}
$conn->close();
?>
