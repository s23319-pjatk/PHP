<?php
session_start();
echo "Witamy " .$_SESSION['login'];
echo "<br> cookie" . $_COOKIE['login'];
?>