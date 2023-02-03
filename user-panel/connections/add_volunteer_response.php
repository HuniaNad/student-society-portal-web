<?php

    $name =  $_POST["name"];
    $team =  $_POST["team"];
    $regno =  $_POST["regNo"];
    $email =  $_POST["email"];
    $pno =  $_POST["contact"];
    $desc =  $_POST["pastExperience"];
    $pending = 1; 

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

    $sql = "INSERT INTO volunteer (name, team, registration_no, email, contact, goodfit_description, pending) VALUES ('$name', '$team', '$regno', '$email', '$pno', '$desc', $pending)";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    header("Location: http://localhost/Projects/Student_Society/user-panel/volunteer-register-form.html");


?>