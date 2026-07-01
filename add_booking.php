<?php
session_start();
include "config/db.php";
require_once "validation.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php?error=please login first");
    exit();
}

$user_id          = $_SESSION['id'];
$doctor_id        = intval($_POST['doctor_id'] ?? 0); 
$service_id       = intval($_POST['service_id'] ?? 0);
$appointment_date = validate($_POST['appointment_date'] ?? '');
$appointment_time = validate($_POST['appointment_time'] ?? '');


if ($doctor_id < 1 || $service_id < 1 || empty($appointment_date) || empty($appointment_time)) {
    header("Location: index.php?error=missingData");
    exit();
}

$check = $conn->prepare("SELECT id FROM services WHERE id = ?");
$check->bind_param("i", $service_id);
$check->execute();
if ($check->get_result()->num_rows === 0) {
    header("Location: index.php?error=invalidService");
    exit();
}

$check = $conn->prepare("SELECT id FROM doctors WHERE id = ?");
$check->bind_param("i", $doctor_id);
$check->execute();
if ($check->get_result()->num_rows === 0) {
    header("Location: index.php?error=invalidDoctor");
    exit();
}

$sql = "INSERT INTO appointments (user_id, doctor_id, service_id, appointment_date, appointment_time, status) 
        VALUES (?, ?, ?, ?, ?, 'pending')";
$statement = $conn->prepare($sql);

if ($statement) {
    $statement->bind_param("iiiss", $user_id, $doctor_id, $service_id, $appointment_date, $appointment_time);
    if ($statement->execute()) {
      
        header("Location: index.php?success=booked");
        exit();
    } else {
      
        error_log("Booking Error: " . $statement->error);
        header("Location: index.php?error=bookingFailed");
        exit();
    }
} else {
    error_log("Prepare Error: " . $conn->error);
    header("Location: index.php?error=bookingFailed");
    exit();
}
$conn->close();
?>