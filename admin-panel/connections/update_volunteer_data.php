<?php

    $id = $_POST["id"];
    $btn_type = $_POST["submit"];
    $name =  $_POST["name"];
    $team =  $_POST["team"];
    $regno =  $_POST["regNo"];
    $email =  $_POST["email"];
    $pno =  $_POST["contact"];

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

    if($btn_type=="reject"){
        $sql = "DELETE FROM volunteer WHERE id = $id";

    }
    elseif($btn_type=="update"){
        $sql = $sql = "UPDATE volunteer SET name='$name', registration_no='$regno', email='$email', contact='$pno', team='$team' WHERE id = $id";
    }
    else{
        $sql = "UPDATE volunteer SET pending=0 WHERE id=$id";
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

    header("Location: http://localhost/Projects/Student_Society/admin-panel/volunteers.php");

?>