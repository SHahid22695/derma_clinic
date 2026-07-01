<?php
// _SESSION بدأ الجلسة عشان نقدر نستخدم $
session_start();
include "config/db.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
} else {
    header("Location: login.php?error=please fill all fields");
    exit();
}
if (empty($email)) {
    header("Location: login.php?error=email is empty");
    exit();
}
if (empty($password)) {
    header("Location: login.php?error=password is empty");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 1) {
   
    $row = $result->fetch_assoc();
  
    if (password_verify($password, $row["password"])) {
        $_SESSION['email'] = $row["email"];
        $_SESSION['name'] = $row["name"];
        $_SESSION['role'] = $row["role"];
        $_SESSION['id'] = $row["id"];
        $_SESSION['logged'] = TRUE;
       
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'doctor') {
            header("Location: admin/dashboard.php");
            exit();
        } else {  
            header("Location: index.php");
            exit(); 
        }
    } else {
        header("Location: login.php?error=incorrect password");
        exit();
    }
} else {
    header("Location: login.php?error=not registered");
    exit();
}
?>