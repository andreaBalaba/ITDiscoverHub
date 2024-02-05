<?php
    // this PHP file is used to fetch a particular catalog product (ex. Samsung Galaxy S23 Ultra) from the database

    include_once 'rules.php';

    $category = $_GET['category'];  // determines what category to search into (either smartphone, tablets, or laptops)
    $model = $_GET['model'];    // determines what to search from the category

    $foundItem = null;  // will contain the found item, which will be echoed later as JSON

    // if $category is smartphones, finds the item in $smartphones variable from rules.php that contains all smartphones data
    if ($category == "smartphones") {
        foreach ($smartphones as $smartphone) {
            if ($model === $smartphone->model) {
                $foundItem = $smartphone;
            }
        }
    }

    // if $category is laptops, finds the item in $laptops variable from rules.php that contains all laptops data
    if ($category == "laptops") {
        foreach ($laptops as $laptop) {
            if ($model === $laptop->model) {
                $foundItem = $laptop;
            }
        }
    }

    // if $category is tablets, finds the item in $tablets variable from rules.php that contains all tablets data
    if ($category == "tablets") {
        foreach ($tablets as $tablet) {
            if ($model === $tablet->model) {
                $foundItem = $tablet;
            }
        }
    }

    echo json_encode($foundItem);
?>