<?php

    $id = $_POST["id"];
    $name =  $_POST["name"];
    $role =  $_POST["role"];
    $regno =  $_POST["regNo"];
    $email =  $_POST["email"];
    $pno =  $_POST["phone"];

    $target_file = basename($_FILES["profilePhoto"]["name"]);

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

    if (!empty($_FILES["profilePhoto"]["name"])) {
        
        if (move_uploaded_file($_FILES["profilePhoto"]["tmp_name"], "../../assets/img/uploads/".$target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profilePhoto"]["name"])). " has been uploaded.";

            $sql = "UPDATE executive SET name='$name', role='$role', registration_no='$regno', email='$email', contact='$pno', image='$target_file' WHERE id = $id";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
    }
    else{
        $sql = "UPDATE executive SET name='$name', role='$role', registration_no='$regno', email='$email', contact='$pno' WHERE id = $id";
    }

    
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
	header("Location: http://localhost/Projects/Student_Society/admin-panel/profile.php");

?>