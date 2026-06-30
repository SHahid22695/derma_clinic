<?php
session_start();

include "config/db.php";
require_once "validation.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
  
    $name     = validate($_POST["name"]);
    $email    = validate_email(validate($_POST["email"]));
    if (!$email) {
         header("Location: signup.php?error=invalidEmail");
         exit();
    }

    $password = validate_password($_POST["password"]);
    if (!$password) {
         header("Location: signup.php?error=invalidPassword");
         exit();
    } else {
         $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $phone    = validate_phone($_POST["phone"]);
    if (!$phone) {
         header("Location: signup.php?error=invalidphone");
         exit();
    }
    
    $age      = isset($_POST["age"]) ? intval(validate($_POST["age"])) : 0;

    
    $fileDist = "default.png";
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
        $file         = $_FILES["image"];
        $fileName     = $file["name"];
        $filetmpName  = $file["tmp_name"];
        $fileSize     = $file["size"];
        $fileExt      = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowed      = ["jpg", "jpeg", "png", "gif"];

        if (in_array($fileExt, $allowed) && $fileSize < 5000000) {
            $newfilename = uniqid("user_", true) . "." . $fileExt;
            $fileDes = "uploads/" . $newfilename;
            if (move_uploaded_file($filetmpName, $fileDes)) {
                $fileDist = $newfilename;
            }
        }
    }
    
    
    $sql_user = "INSERT INTO users (name, email, password, role, phone, age) VALUES (?, ?, ?, 'client', ?, ?)";
    $statement = $conn->prepare($sql_user);
    $statement->bind_param('ssssi', $name, $email, $password, $phone, $age);
    $result = $statement->execute();

    if ($result === TRUE) {
        $user_id = $conn->insert_id;
        

        $sql_patient = "INSERT INTO patients (user_id, phone, age, image_path) VALUES (?, ?, ?, ?)";
        $statement_patient = $conn->prepare($sql_patient);
        $statement_patient->bind_param('isis', $user_id, $phone, $age, $fileDist);
        $statement_patient->execute();

      
        $_SESSION['email']  = $email;
        $_SESSION['name']   = $name;
        $_SESSION['role']   = 'client';
        $_SESSION['id']     = $user_id;
        $_SESSION['image']  = $fileDist;
        $_SESSION['logged'] = TRUE;
        
        header("Location: index.php");
        exit(); 
    } else {
         header("Location: signup.php?error=error");
         exit();
    }
}
$conn->close();
?>
