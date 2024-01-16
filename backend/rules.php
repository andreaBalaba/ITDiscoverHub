<?php
    include_once 'models.php';
    include_once 'sqlData.php';

    $users = getAllUsers();

    function isEmailExists($email) {
        global $users;
        $isExists = false;

        foreach ($users as $user) {
            if ($user->email === $email) {
                $isExists = true;
                break;
            }
        }

        return $isExists;
    }

    function isUserExists($email, $password) {
        global $users;
        $isExists = false;

        foreach ($users as $user) {
            if ($user->email === $email && $password === $password) {
                $isExists = true;
                break;
            }
        }

        return $isExists;
    }

    function registerUser($firstName, $lastName, $email, $password) {
        $result = insertNewUser($firstName, $lastName, $email, $password);
        return $result;
    }
?>