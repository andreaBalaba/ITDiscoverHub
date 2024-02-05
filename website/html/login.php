<?php
    include_once '../php_servers/rules.php';

    session_start();

    // checks if the user is logged in, by checking if $_SESSION['isLoggedIn'] is set
    // if true, the user will be redirected to home.html
    // this ensures that if the user is already logged in, it does not login
    if (isset($_SESSION['isLoggedIn'])) {
        header("Location: home.php");
    }

    // handles the login form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // gets the user data; the function returns a User object
        $user = getUser($email, $password);

        // if $user is not null, that is if exists, the user will be logged-in,
        // and its information, such as email, first name, and last name will be stored in the superglobal array $_SESSION;
        // then, the user will be redirected to home.html
        if ($user !== null) {
            $_SESSION['email'] = $email;
            $_SESSION['firstName'] = $user->firstName;
            $_SESSION['lastName'] = $user->lastName;
            $_SESSION['isLoggedIn'] = true;
            header("Location: home.php");
        }
        else {
            $error = "Invalid username or password.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST">
        <label for="email">Username:</label>
        <input type="text" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
