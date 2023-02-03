<?php

    $id = $_POST["id"];
    $code = $_POST["password"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_society_portal";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql =  "UPDATE executive SET password='$code' WHERE id = $id";
    $result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
	header("Location: http://localhost/Projects/Student_Society/admin-panel/profile.php");
?>