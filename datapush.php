<?php
    include "dbConnection.php";
    $name=$_POST["fname"];
    $email=$_POST["em"];
    $pass=$_POST["psw"];
    $sql="INSERT INTO users(Name,Email,Password) VALUES (`$name`,`$email`,`$pass`)";
    if($db->query($sql)===True){
        echo "Records inserted";
    }
    else{
        echo "not done";
    }
    $db->close();
?>