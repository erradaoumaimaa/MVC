<?php
    require_once "../config/config.php";
    require_once "../database/Database.php";
    require_once "../models/User.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        // extract($_POST);
        $name = $_POST['name'];
        $age = $_POST['age'];

        $user= new User() ;
    
        $user->insert($name,$age);

        echo "inserst OK";
    }

