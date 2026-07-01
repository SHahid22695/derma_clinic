<?php
session_start();
include "config/db.php";
require_once "validation.php";
//  فقط طلبات POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // تنظيف المدخلات
    $name     = validate($_POST["name"]);
    $email    = validate_email(validate($_POST["email"]));
    //    فحص صيغة الإيميل + التأكد من عدم التكرار
    if (!$email) {
         header("Location: signup.php?error=invalidEmail");
         exit();
    }
    $stmt_check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt_check->bind_param('s', $email);
    $stmt_check->execute();
    if ($stmt_check->get_result()->num_rows > 0) {
        header("Location: signup.php?error=emailExists");
        exit();
    }
    
    $password = validate_password($_POST["password"]);
    if (!$password) {
         header("Location: signup.php?error=invalidPassword");
         exit();
    } 
    else {
         
         $password = password_hash($password, PASSWORD_DEFAULT);
    }
  
    $phone    = validate_phone($_POST["phone"]);
    if (!$phone) {
         header("Location: signup.php?error=invalidphone");
         exit();
    }
    $age = isset($_POST["age"]) ? intval(validate($_POST["age"])) : 0;
    
    $role = $_POST['role'] ?? 'client';
    $specialty = trim($_POST['specialty'] ?? '');
   
    if ($role === 'doctor' && empty($specialty)) {
        header("Location: signup.php?error=missingSpecialty");
        exit();
    }
  
    $db_role = ($role === 'doctor') ? 'admin' : $role;
   
    $sql_user = "INSERT INTO users (name, email, password, role, phone, age) VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql_user);
    $statement->bind_param('ssssis', $name, $email, $password, $db_role, $phone, $age);
    
    if ($statement->execute()) {
        $user_id = $conn->insert_id;

      
        if ($role === 'doctor') {
            $stmt_doc = $conn->prepare("INSERT INTO doctors (name, specialty) VALUES (?, ?)");
            $stmt_doc->bind_param("ss", $name, $specialty);
            $stmt_doc->execute();
        }
       
        $_SESSION['email']  = $email;
        $_SESSION['name']   = $name;
        $_SESSION['role']   = $db_role;
        $_SESSION['id']     = $user_id;
        $_SESSION['logged'] = TRUE;
      
        if ($db_role == 'admin') {
            header("Location: admin/dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit(); 
    } else {
         header("Location: signup.php?error=error");
         exit();
    }
}
$conn->close();
?>