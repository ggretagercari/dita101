<?php


var_dump($_POST);
echo '<pre>' . var_export($_POST, true) . '</pre>';

if(isset($_POST['submit'])){
    $name = $_POST['name'] ;
    $surname =$_POST['surname'] ;
    $username =$_POST['username'] ;
    $email =$_POST['email'] ;
    $temPass =$_POST['password'] ;
    $password = password_hash($temPass, PASSWORD_DEFAULT);

    if(empty($name)  || empty($username) || empty($email) || empty($temPass)){
echo"Please fill all the fields!";
header("refresh:3; url=register.php");
    }
}
