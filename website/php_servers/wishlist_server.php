<?php 
    include_once 'rules.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $category = $_POST['category'];
        $model = $_POST['model'];

        $success = addWishlist($email, $category, $model);

        echo $success;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $email = $_GET['email'];
        $category = $_GET['category'];
        $model = $_GET['model'];

        $success = removeWishlist($email, $category, $model);
    
        echo $success;
    }
?>