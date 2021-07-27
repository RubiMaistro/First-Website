<?php
    function data_test($str){
        $str = trim($str);
        $str = strip_tags($str);
        $str = stripcslashes($str);
        return $str;
    }

    $usernameErr=$passwordErr=$nameErr=$emailErr="";
    $commnet=$gender="";
    $pets=array();
    $country=array();

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(isset($_POST['username']) && !empty($_POST['username']) && data_test($_POST['username']) == $_POST['username'] && preg_match("/^[a-zA-Z]*$/", $_POST['username']) && strlen($_POST['username']) <= 40){
            $username = $_POST['username'];
        }else{
            $usernameErr = "Hibás felhasználónév";
        }

        if(isset($_POST['password']) && !empty($_POST['password']) && data_test($_POST['password']) == $_POST['password'] && strlen($_POST['password']) <= 40 && strlen($_POST['password']) >= 10){
            $password = $_POST['password'];
        }else{
            $passwordErr = "Hibás jelszó";
        }

        if(isset($_POST['name']) && !empty($_POST['name']) && data_test($_POST['name']) == $_POST['name'] && preg_match("/^[a-zA-ZáéíóöőúüűÁÉÍÓÖÚÜŰ\s]*$/u",($_POST['name'])) && strlen($_POST['name']) <=50){
            $name = $_POST['name'];
        }else{
            $nameErr = "Hibás név";
        }

        if(isset($_POST['email']) && !empty($_POST['email']) && data_test($_POST['email']) == $_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        }else{
            $emailErr = "Hibás email";
        }

        if(isset($_POST['comment'])){
            $comment = $_POST['comment'];
        }

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }

        if(isset($_POST['pets'])){
            $pets = $_POST['pets'];
        }

        if(isset($_POST['country'])){
            $country = $_POST['country'];
        }
    }
?>