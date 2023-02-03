<?php

    $id = $_POST["delete_image"];
    $file_target = $_POST["image_name"];

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


    $sql = "DELETE FROM event_highlights WHERE id = $id";
    $file_pointer = "../../assets/img/event_highlights/".$file_target;

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        // Use unlink() function to delete a file
        if (!unlink($file_pointer)) {
            echo ("$file_pointer cannot be deleted due to an error");
        }
        else {
            echo ("$file_pointer has been deleted");
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();

    header("Location: http://localhost/Projects/Student_Society/admin-panel/events.php");

?>