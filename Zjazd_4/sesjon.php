<?php

session_start();
$myLogin= "login";
$myPassword= "haslo";

if(isset($_POST['logowanie']))
{
    $LOGIN= $_POST['login'];
    $PASSWORD= $_POST['haslo'];
    if($myPassword==$PASSWORD and $myLogin==$LOGIN){
        setcookie('login',$LOGIN,time());
        session_start();
        $_SESSION['login'] =$LOGIN;

        header('location: hi.php');
    }
    else{
        echo("invalid login or password");
    }
}else{
    header("location: localhost:8080//zjazd4/index.php");
}
?>