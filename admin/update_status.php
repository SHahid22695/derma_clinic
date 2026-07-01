<?php
session_start();

if (!isset($_SESSION['id']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'doctor')) {
    header("Location: ../login.php?error=access denied");
    exit();
}
include "../config/db.php";

if (isset($_GET['id']) && isset($_GET['action'])) {
    $appointment_id = $_GET['id'];
    $action = $_GET['action'];
   
    if ($action == 'approve') {
        $new_status = 'approved'; 
    } elseif ($action == 'reject') {
        $new_status = 'canceled'; 
    } else {
        header("Location: dashboard.php");
        exit();
    }
  
    $stmt = $conn->prepare("UPDATE appointments SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $appointment_id);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "حدث خطأ أثناء تحديث الحالة: " . $conn->error;
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>