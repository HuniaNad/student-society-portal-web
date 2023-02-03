<?php

    $name =  $_POST["name"];
    $date =  date("d/m/Y", strtotime($_POST["date"]));
    $time =  date("g:i a", strtotime($_POST["time"]));
    $speaker =  $_POST["speaker"];
    $venue =  $_POST["venue"];
    $desc =  $_POST["description"];
    $status =  $_POST["status"];
    if($status=="hide"){
        $status = 1;
    }
    else{
        $status = 0;
    }
    $target_file = basename($_FILES["image"]["name"]);

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
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], "../../assets/img/events/".$target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

            $sql = "INSERT INTO event (name, date, time, speaker, venue, description, image, hide) VALUES ('$name', '$date', '$time', '$speaker', '$venue', '$desc', '$target_file', $status)";
            // echo "upload file query executed <br>";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
    }
    else{
        $sql = "INSERT INTO event (name, date, time, speaker, venue, description, image, hide) VALUES ('$name', '$date', '$time', '$speaker', '$venue', '$desc', 'nothing_to_display.png', $status)";
        // echo "file not uploaded query executed <br>";
    }


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
    header("Location: http://localhost/Projects/Student_Society/admin-panel/events.php");


?>