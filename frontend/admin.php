<?php
include('adminDB_configuration.php');
session_start();
$error = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        echo "signed in";
        header('Location: adminHome.html');
        exit();
    } else {
        $error[] = 'incorrect username or password';
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | IT Discover Hub</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>

<body>

    <div class="container">

        <div class="box1">
            <div class="details">
                <h2>Admin</h2>
                <p>"Welcome to the heart of innovation at IT Discover Hub, where cutting-edge technology converges! As the admin, you play a pivotal role in guiding our users through a seamless journey of exploring, comparing, and discovering the latest gadgets. Your expertise is invaluable in shaping an enriched experience for tech enthusiasts worldwide."</p>
            </div>
        </div>


        <div class="box2">
            <div class="input-group">
                <form action="" method="POST">
                    <img src="../frontend/css/images/logo1.png" alt="logo"> <br>
                    <h2>Log in</h2>
                    <div class="inputs">
                        <input type="" name="username" placeholder="Enter your admin name" required> <br>
                        <!-- <img class="image-inside-textbox" src="css/images/Signup images/email.png" alt="Image"> -->

                        <input type="password" name="password" placeholder="Enter your password" required> <br>
                        <div class="error-class">
                            <?php
                            if (!empty($error)) {
                                foreach ($error as $errorMsg) {
                                    echo '<span class="error-mgs">' . $errorMsg . '</span>';
                                }
                            }
                            ?>
                        </div>
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>