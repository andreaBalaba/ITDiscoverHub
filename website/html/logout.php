<?php
    // this PHP file logs out the user
    // it clears the $_SESSION array that contains session information such as email, first name, and last name
    // and call the session_destroy() function
    // then redirects the user to home.php

    session_start();

    $_SESSION = array();

    session_destroy();

    header("Location: home.php");

    exit();
?>
