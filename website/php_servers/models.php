<?php
    // this PHP file contains all the data models
    // uses class to represent the data models

    class User {
        public $firstName;
        public $lastName;
        public $email;
        public $password;

        public function __construct($firstName, $lastName, $email, $password) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
        }        
    }

    class Smartphone {
        public $brand;
        public $model;
        public $screen;
        public $os;
        public $chipset;
        public $gpu;
        public $ram;
        public $storage;
        public $price;
        public $imageFileName;

        public function __construct($brand, $model, $screen, $os, $chipset, $gpu, $ram, $storage, $price, $imageFileName) {
            $this->brand = $brand;
            $this->model = $model;
            $this->screen = $screen;
            $this->os = $os;
            $this->chipset = $chipset;
            $this->gpu = $gpu;
            $this->ram = $ram;
            $this->storage = $storage;
            $this->price = $price;
            $this->imageFileName = $imageFileName;
        } 
    }
    class Laptop {
        public $brand;
        public $model;
        public $os;
        public $processor;
        public $ram;
        public $storage;
        public $price;

        public function __construct($brand, $model, $os, $processor, $ram, $storage, $price) {
            $this->brand = $brand;
            $this->model = $model;
            $this->os = $os;
            $this->processor = $processor;
            $this->ram = $ram;
            $this->storage = $storage;
            $this->price = $price;
        } 
    }
    class Tablet {
        public $brand;
        public $model;
        public $screen;
        public $processor;
        public $ram;
        public $storage;
        public $batteryLife;
        public $os;
        public $price;

        public function __construct($brand, $model, $screen, $processor, $ram, $storage, $batteryLife, $os, $price) {
            $this->brand = $brand;
            $this->model = $model;
            $this->screen = $screen;
            $this->processor = $processor;
            $this->ram = $ram;
            $this->storage = $storage;
            $this->batteryLife = $batteryLife;
            $this->os = $os;
            $this->price = $price;
        } 
    }

    class Wishlist {
        public $email;
        public $category;
        public $model;

        public function __construct($email, $category, $model) {
            $this->email = $email;
            $this->category = $category;
            $this->model = $model;
        } 
    }
?>