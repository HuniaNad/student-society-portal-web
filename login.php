<?php 
	
	if (isset($_POST['login']) && !empty($_POST['email'])  && !empty($_POST['password'])) {
		$email = $_POST["email"];
		$pass = $_POST["password"];
		
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
		var_dump($email, $pass);
		$sql = "SELECT * FROM executive WHERE email='$email' AND password='$pass' LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			echo $row["name"];
			ob_start();
			session_start();
			$_SESSION['valid'] = true;
			$_SESSION['timeout'] = time();
			$_SESSION['name'] = $row["name"];
			$_SESSION['image'] = $row["image"];
			$_SESSION['id'] = $row["id"];
			
			header("Location: http://localhost/Projects/Student_Society/admin-panel/index.php");
		} else {
			header("Location: http://localhost/Projects/Student_Society/user-panel/index.php");
		}
		$conn->close();
		
	} else {
		header("Location: http://localhost/Projects/Student_Society/user-panel/index.php");
	}
	