<?php
// For Events Datatable
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

    $sql = "SELECT * FROM event";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    } else {
        echo "0 results";
    }
    $conn->close();
?>