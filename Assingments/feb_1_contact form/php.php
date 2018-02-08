<?php
if (isset($_POST ['submit'])) {
    echo $_POST['name'];
    echo <br > ;
echo $_POST['email'];
echo <br > ;
echo $_POST ['phone'];
if (empty($_POST['name'])){
echo "Name is Required";
}
if (empty($_POST['email'])) {
    echo "Email is Required";
}
}
?>
/*
 * Created by PhpStorm.
 * User: still
 * Date: 2/7/2018
 * Time: 8:48 PM
 */