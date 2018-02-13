<?php session_start();

/**
 * Created by PhpStorm.
 * User: still
 * Date: 2/12/2018
 * Time: 6:35 PM
 */
$_SESSION('name')="";
$_SESSION('email')="";
$_SESSION('phone')="";

$name= $_GET('name');
$email= $_GET('email');
$phone= $_GET('phone');

echo "welcome" .$name;
echo "<br/>"
echo "Please verify that your email address is: ".$email;
echo <br/> "and that your phone is: " .$phone;
?>