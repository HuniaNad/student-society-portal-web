<?php

    $id = $_POST["id"];
    $name =  $_POST["name"];
    $role =  $_POST["role"];
    $regno =  $_POST["regNo"];
    $email =  $_POST["email"];
    $pno =  $_POST["phone"];

    $target_file = basename($_FILES["image"]["name"]);
    $code = uniqid();

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

    if (!empty($_FILES["image"]["name"])) {
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], "../../assets/img/uploads/".$target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

            $sql = "UPDATE executive SET name='$name', role='$role', registration_no='$regno', email='$email', contact='$pno', image='$target_file', password='$code' WHERE id = $id";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
    }
    else{
        $sql = "UPDATE executive SET name='$name', role='$role', registration_no='$regno', email='$email', contact='$pno', password='$code' WHERE id = $id";
    }

    
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        // $to_email = "nadeem.h9696@gmail.com";
        // $subject = "Simple Email Test via PHP";
        // $body = "Hi,nn This is test email send by PHP Script";
        // $headers = "From: fhemv66@gmail.com";
        
        // if (mail($to_email, $subject, $body, $headers)) {
        //     echo "Email successfully sent to $to_email...";
        // } else {
        //     echo "Email sending failed...";
        // }
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    header("Location: http://localhost/Projects/Student_Society/admin-panel/excom.php");


?>