<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include_once '../php_servers/db_server.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $newEmail = $_POST["email"];
    $newPassword = $_POST["password"];  

    $currentUserEmail = $_SESSION['email'];

    if (updateUserInfo($currentUserEmail, $firstName, $lastName, $newEmail, $newPassword)) {

        session_destroy();

        session_start();

        $_SESSION['email'] = $newEmail;

        header("Location: profile.php");
        exit();
    } else {
        echo "Failed to update user information.";
    }
}

if (isset($_GET['category']) && isset($_GET['model'])) {
    $email = $_SESSION['email']; 

    $result = deleteWishlist($email, $_GET['category'], $_GET['model']);

    if ($result) {
        $updatedWishlists = getWishlistsByEmail($email);
        
            echo '<link rel="stylesheet"  href="../css/profile.css" />';
            echo '<div class="wishlist-head">';
            echo        '<img src="../images/wishlist-icon.png" alt="wishList-icon">';
            echo        '<span>My Wishlist</span>';
            echo  '</div>';
            echo  '<div class="user-wishlist">';

                foreach ($updatedWishlists as $wishlistItem) {
                echo '<div class="Wishlist-item">';
                echo '<span>' . htmlspecialchars($wishlistItem->category) . '</span>';
                echo '<span class="model">' . htmlspecialchars($wishlistItem->model) . '</span>';
                echo '<i class="fa-regular fa-trash-can" onclick="deleteWishlistItem(\'' . $wishlistItem->category . '\', \'' . $wishlistItem->model . '\')"></i>';
                echo '</div>';
                }
            echo  '</div>';
    } else {
        echo "Error deleting wishlist item.";
    }
} else {
    echo "Invalid wishlist item deletion.";
}


?>