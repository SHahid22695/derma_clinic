<?php
$conn = new mysqli("localhost", "root", "", "derma_clinic");
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
 ?> 