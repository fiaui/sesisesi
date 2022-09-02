<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location:form.php");
}
echo "Ini Beranda";
echo "<br />";
echo "Id :"; echo $_SESSION['id'];
echo "<br />";
echo "Username :"; echo $_SESSION['username'];
echo "<br />";
echo "Password :"; echo $_SESSION['password'];
echo "<br />";
