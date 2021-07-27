<?php

    //PHP - data inputs
    require_once "header/header.php";

    //HTML - web design
    require_once "html/index.html";

    //PHOP - data outputs
    if(isset($username) && isset($password) && isset($name) && isset($email)){
        echo "$username <br />$password <br />$name<br />$email<br />$comment<br />$gender";
        echo "<br /><hr />";
        foreach($pets as $value){
            echo "$value <br />";
        }
        echo "<br /><hr />";
        foreach($country as $value){
            echo "$value <br />";
        }
    }
?>