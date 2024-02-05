<?php
    // this PHP file is the one that directly connects and fetches data from the database

    include_once 'models.php';

    $servername = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "itdiscoverhub";

    // database connection
	$conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }    

    // gets all the users from the user table 
    function getUsers() {
        global $conn;

        $sql = "SELECT `firstName`, `lastName`, `email`, `password` FROM user";
        $result = $conn->query($sql);

        $users = [];    // will be array of User objects

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // creates User object from the result, then adds to the $users array that will be returned
                $user = new User($row['firstName'], $row['lastName'], $row['email'], $row['password']);
                $users[] = $user;
            }
        } 
        else {
            echo $conn->error;
        }

        return $users;
    }

    // inserts new user data to the database
    // this is used in user registration
    function createNewUser($firstName, $lastName, $email, $password) {
        global $conn;
        
        $sql = "INSERT INTO user (`firstName`, `lastName`, `email`, `password`) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "')";
	    $result = $conn->query($sql);

        echo mysqli_error($conn);

        return $result;
    }

    // gets all the smartphones data from the database
    function getSmartphones() {
        global $conn;

        $sql = "SELECT `brand`, `model`, `screen`, `os`, `chipset`, `GPU`, `RAM`, `storage`, `price`, `imageFileName` FROM tblsmartphone";
        $result = $conn->query($sql);

        $smartphones = [];  // will be array of Smartphone objects

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // creates Smartphone object from the result, then adds to the $smartphones array that will be returned
                $smartphone = new Smartphone($row['brand'], $row['model'], $row['screen'], $row['os'], $row['chipset'], $row['GPU'], $row['RAM'], $row['storage'], $row['price'], $row['imageFileName']);
                $smartphones[] = $smartphone;
            }
        } 
        else {
            echo $conn->error;
        }

        return $smartphones;
    }

    // gets all the laptops data from the database
    function getLaptops() {
        global $conn;

        $sql = "SELECT `brand`, `model`, `os`, `processor`, `RAM`, `storage`, `price`, `releaseDate` FROM tbllaptop";
        $result = $conn->query($sql);

        $laptops = [];  // will be array of Laptop objects

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // creates Laptop object from the result, then adds to the $laptops array that will be returned
                $laptop = new Laptop($row['brand'], $row['model'], $row['os'], $row['processor'], $row['RAM'], $row['storage'], $row['price'], $row['releaseDate']);
                $laptops[] = $laptop;
            }
        } 
        else {
            echo $conn->error;
        }

        return $laptops;
    }

    // gets all the tablets data from the database
    function getTablets() {
        global $conn;

        $sql = "SELECT `brand`, `model`, `screen`, `processor`, `RAM`, `storage`, `batteryLife`, `os`, `price` FROM tbltablet";
        $result = $conn->query($sql);

        $tablets = [];  // will be array of Tablet objects

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // creates Tablet object from the result, then adds to the $tablets array that will be returned
                $tablet = new Tablet($row['brand'], $row['model'], $row['screen'], $row['processor'], $row['RAM'], $row['storage'], $row['batteryLife'], $row['os'], $row['price']);
                $tablets[] = $tablet;
            }
        } 
        else {
            echo $conn->error;
        }

        return $tablets;
    }

    // inserts new user wish list data to the database
    function createWishlist($email, $category, $model) {
        global $conn;
        
        $sql = "INSERT INTO userWishlist (`email`, `category`, `model`) VALUES ('" . $email . "', '" . $category . "', '" . $model . "')";
	    $result = $conn->query($sql);

        echo mysqli_error($conn);

        return $result;
    }

    // gets all the wishlists data from the userWishList table based on the user's email
    function getWishlistsByEmail($email) {
        global $conn;

        $sql = "SELECT `email`, `category`, `model` FROM userwishlist WHERE email='" . $email . "'";
        $result = $conn->query($sql);

        $wishlists = [];    // will be array of Wishlist objects

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // creates Wishlist object from the result, then adds to the $wishlists array that will be returned
                $wishlist = new Wishlist($row['email'], $row['category'], $row['model']);
                $wishlists[] = $wishlist;
            }
        } 
        else {
            echo $conn->error;
        }

        return $wishlists;
    }

    // deletes a user wish list data in the database
    function deleteWishlist($email, $category, $model) {
        global $conn;
        
        $sql = "DELETE FROM userWishlist WHERE email='" . $email . "'AND category='" . $category . "'AND model='" . $model . "'";
	    $result = $conn->query($sql);

        echo mysqli_error($conn);

        return $result; 
    }

    function updateUserInfo($email, $firstName, $lastName, $newemail, $password) {
        global $conn;
    
        $sql = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', email = '$newemail', password = '$password' WHERE email = '$email'";
        $result = $conn->query($sql);
    
        return $result;
    }
?>