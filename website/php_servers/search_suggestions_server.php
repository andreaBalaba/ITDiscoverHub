<?php
    include_once 'rules.php';

    $category = $_GET['category'];  // determines what category to search into (either smartphone, tablets, or laptops)
    $model = $_GET['model'];    // determines what model to search from the category

    $searchWords = str_word_count($model, 1);   // gets every word from the $model, and places them in an array
    $searchSuggestions = [];    // initialize search suggestions array that will be echoed later as JSON

    // if $category is smartphones
    if ($category == "smartphones") {

        foreach ($smartphones as $smartphone) {
            $containsAllWords = true;   // this is so that only models that contains all the words from the $model will be echoed as JSON
    
            foreach ($searchWords as $word) {
                // if at least one word from $searchWords is not in a model of a $category item,
                // the item will not be included in the $searchSuggestions array
                if (stripos($smartphone->model, $word) === false) {  
                    $containsAllWords = false;                          
                    break;
                }
            }
    
            if ($containsAllWords === true) {
                $searchSuggestions[] = $smartphone->model;
            }
        }
    }
    
    // if $category is laptops
    if ($category == "laptops") {
        foreach ($laptops as $laptop) {
            $containsAllWords = true;   // this is so that only models that contains all the words from the $model will be echoed as JSON
    
            foreach ($searchWords as $word) {
                // if at least one word from $searchWords is not in a model of a $category item,
                // the item will not be included in the $searchSuggestions array
                if (stripos($laptop->model, $word) === false) {  
                    $containsAllWords = false;                          
                    break;
                }
            }
    
            if ($containsAllWords === true) {
                $searchSuggestions[] = $laptop->model;
            }
        }
    }

    // if $category is tablets
    if ($category == "tablets") {
        foreach ($tablets as $tablet) {
            $containsAllWords = true;   // this is so that only models that contains all the words from the $model will be echoed as JSON
    
            foreach ($searchWords as $word) {
                // if at least one word from $searchWords is not in a model of a $category item,
                // the item will not be included in the $searchSuggestions array
                if (stripos($tablet->model, $word) === false) {  
                    $containsAllWords = false;                          
                    break;
                }
            }
    
            if ($containsAllWords === true) {
                $searchSuggestions[] = $tablet->model;
            }
        }
    }

    echo json_encode($searchSuggestions);
?>
