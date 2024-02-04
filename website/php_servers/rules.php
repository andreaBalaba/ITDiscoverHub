<?php
    // this contains the business rules or logics
    // this is the only PHP file that uses db_service.php, which is a PHP file that directly connects and fetches data from the database

    include_once 'db_server.php';  // imports db_service.php

    $users = getUsers();
    $smartphones = getSmartphones();
    $laptops = getLaptops();
    $tablets = getTablets();

    // this checks if the email from the parameter already exists
    // this is used when a user wants to register
    function isEmailExists($email) {
        global $users;  // accesses the global variable $users
        $isExists = false;

        foreach ($users as $user) {
            if ($user->email === $email) {
                $isExists = true;
                break;
            }
        }

        return $isExists;
    }

    // this is used in registering a new user
    function registerUser($firstName, $lastName, $email, $password) {
        $result = createNewUser($firstName, $lastName, $email, $password);

        return $result;
    }

    // this is used in login
    // it returns a user data (User object) based on the email and password
    function getUser($email, $password) {
        global $users;  // accesses the global variable $users
        $foundUser = null; 

        foreach ($users as $user) {
            if ($user->email === $email && $user->password === $password) {
                $foundUser = $user;
                break;
            }
        }

        return $foundUser; 
    }

    // gets a smartphone data by model
    function getSmartphoneByModel($model) {
        global $smartphones;    // accesses the global variable $smartphones
        $foundSmartphone = null;

        foreach ($smartphones as $smartphone) {
            if ($smartphone->model == $model) {
                $foundSmartphone = $smartphone;
                break;
            }
        }

        return $foundSmartphone;
    }

    
    // gets array of smartphone based on filters
    // this is used in advanced filter functionality in catalog page
    function getSmartphonesByFilter($brand, $os, $ram, $storage, $price) {
        global $smartphones;
        $foundSmartphones = null;

        foreach ($smartphones as $smartphone) {
            if (strpos($smartphone->brand, $brand) !== false && strpos($smartphone->os, $os) !== false
            && strpos($smartphone->ram, $ram) !== false && strpos($smartphone->storage, $storage) !== false
            && $smartphone->price < $price) {
                $foundSmartphones[] = $smartphone;
            }
        }

        return $foundSmartphones;
    }

    // gets a laptop data by model
    function getLaptopByModel($model) {
        global $laptops;    // accesses the global variable $laptops
        $foundLaptop = null;

        foreach ($laptops as $laptop) {
            if ($laptop->model == $model) {
                $foundLaptop = $laptop;
                break;
            }
        }

        return $foundLaptop;
    }

    // gets array of laptops based on filters
    // this is used in advanced filter functionality in catalog page
    function getLaptopsByFilter($brand, $os, $ram, $storage, $price) {
        global $laptops;
        $foundLaptops = null;

        foreach ($laptops as $laptop) {
            if (strpos($laptop->brand, $brand) !== false && strpos($laptop->os, $os) !== false
            && strpos($laptop->ram, $ram) !== false && strpos($laptop->storage, $storage) !== false
            && $laptop->price < $price) {
                $foundLaptops[] = $laptop;
            }
        }
        
        return $foundLaptops;
    }

    // gets a tablet data by model parameter
    // returns a Tablet object
    function getTabletByModel($model) {
        global $tablets; 
        $foundTablet = null; 

        foreach ($tablets as $tablet) {
            if ($tablet->model == $model) {
                $foundTablet = $tablet;
                break;
            }
        }

        return $foundTablet;
    }

    // gets array of tablets based on filters
    // this is used in advanced filter functionality in catalog page
    function getTabletsByFilter($brand, $os, $ram, $storage, $price) {
        global $tablets;
        $foundTablets = null;

        foreach ($tablets as $tablet) {
            if (strpos($tablet->brand, $brand) !== false && strpos($tablet->os, $os) !== false
            && strpos($tablet->ram, $ram) !== false && strpos($tablet->storage, $storage) !== false
            && $tablet->price < $price) {
                $foundTablets[] = $tablet;
            }
        }
        
        return $foundTablets;
    }

    // createWishlist() function from the db_service.php is used to add a new wishlist data to the database
    function addWishlist($email, $category, $model) {
        $result = createWishlist($email, $category, $model);

        return $result; 
    }

    // this gets all the wishlists data of a specific user based on the its email 
    function getUserWishlists($email) {
        $foundWishlists = getWishlistsByEmail($email);

        return $foundWishlists; 
    }

    // this checks whether a certain wishlist record already exists in the database
    // this is to avoid duplicate wish list for user
    function isInUserWishlists($email, $category, $model) {
        $userWishlist = getUserWishlists($email);
        $isFound = false;
        
        foreach ($userWishlist as $wishlist) {
            if ($wishlist->category === $category && $wishlist->model === $model) {
                $isFound = true;
                break;
            }
        }

        return $isFound;
    }

    // delete a wishlist record from the database
    function removeWishlist($email, $category, $model) {
        $result = deleteWishlist($email, $category, $model);

        return $result;
    }

    function compareCatalogItemsByDate($catalogItem1, $catalogItem2) {
        return $catalogItem2->releaseDate <=> $catalogItem1->releaseDate;
    }
?>