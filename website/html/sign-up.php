<?php
  include '../php_servers/rules.php';

  session_start();

  // checks if the user is logged in, by checking if $_SESSION['isLoggedIn'] is set
  // if true, the user will be redirected to home.html
  // this ensures that if the user is logged in, it does not sign-up
  if (isset($_SESSION['isLoggedIn'])) {
      header("Location: home.html");
  }

  // handles the sign up form
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["Fname"];
    $lastName = $_POST["Lname"];
    $email = $_POST["emailAddress"];
    $password = $_POST["password"];
    
    // checks if the email already exists in the database
    // if true, the user will not be registered
    if (isEmailExists($email)) {
      $error = "Username already exists.";  // this variable for error is accessed by the html below
    }
    // if the email is not yet used by other users in the database, will proceed to registering the user
    // that is, create new user data in the database
    else {
      // $result is a boolean, whether the registration is successful or not
      $result = registerUser($firstName, $lastName, $email, $password);

      // if true, the user is logged in;
      // its information, such as email, first name, and last name is stored in the superglobal array $_SESSION;
      // then redirected to home.html
      if ($result) { 
        $_SESSION['email'] = $email;
        $_SESSION['firstName'] = $user->firstName;
        $_SESSION['lastName'] = $user->lastName;
        $_SESSION['isLoggedIn'] = true;
        header("Location: home.html");
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/sign-up.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="left-container">
        <h2 class="text1">Sign up</h2>
        <p class="text2">
          Please enter your details to sign up <br />and be part of our great
          team.
        </p>
        <p class="text3">Already have an account?</p>
        <a href="#" target="_blank">Sign In</a>
      </div>
      <div class="right-container">
        <form method="POST" class="signIn-form">
          <div class="name-inputs">
            <div class="input-group">
              <label for="Fname-label">FIRST NAME</label>
              <input type="text" name="Fname" required />
            </div>
            <div class="input-group">
              <label for="Lname-label">LAST NAME</label>
              <input type="text" name="Lname" required />
            </div>
          </div>

          <div class="email-inputs">
            <label for="email-label">EMAIL ADDRESS</label><br />
            <div class="input-with-icons">
              <input
                type="email"
                name="emailAddress"
                class="emailAddress"
                required
              />
              <i class="bx bxs-envelope"></i><br />
            </div>
            <!-- display the $error in the page using 'p' tag if $error is set, that is if email already exists -->
            <?php if (isset($error)): ?>
              <p style="color: red; margin-top: .5rem;"><?php echo $error; ?></p>
            <?php endif; ?>
          </div>

          <div class="password-inputs">
            <label for="password-label">PASSWORD</label><br />
            <div class="input-with-icons">
              <input
                type="password"
                name="password"
                class="password"
                id="passwordField"
                required
              />
              <i
                class="bx bxs-hide"
                id="togglePassword"
                onclick="togglePasswordVisible()"
              ></i
              ><br />
            </div>
          </div>

          <div class="button">
            <button class="signIn" type="submit">Sign Up</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function togglePasswordVisible() {
        let inputPassword = document.getElementById("passwordField");
        if (inputPassword.type === "password") {
          inputPassword.type = "text";
        } else {
          inputPassword.type = "password";
        }
      }
    </script>
  </body>
</html>
