<?php
    include_once 'models.php';

    $servername = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "itdiscoverhub";

	$conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }    

    function getAllUsers() {
        global $conn;
        $stmt = $conn->prepare("SELECT `firstName`, `lastName`, `email`, `password` FROM user");

        $result = $stmt->execute();

        $users = [];

        if ($result) {
            
            $stmt->bind_result($firstName, $lastName, $email, $password);

            while ($stmt->fetch()) {
                $user = new Profile($firstName, $lastName, $email, $password);
                $users[] = $user;
            }
        } 
        else {
            echo $stmt->error;
        }

        $stmt->close();

        return $users;
    }

    function insertNewUser($firstName, $lastName, $email, $password) {
        global $conn;
        
        $sql = "INSERT INTO user (`firstName`, `lastName`, `email`, `password`) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "')";
	    $result = $conn->query($sql);

        echo mysqli_error($conn);

        return $result;
    }
?>