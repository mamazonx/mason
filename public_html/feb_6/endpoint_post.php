<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Endpoint</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php session_start();
/**
 * Created by PhpStorm.
 * User: still
 * Date: 2/12/2018
 * Time: 8:57 PM
 */
if (isset($_POST['name'], $_POST['email'], $_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo "welcome" .$name;
    echo "<br/>"
echo "Please verify that your email address is: ".$email;
echo "and that your phone is: " .$phone;
}

foreach($_POST as $key => $value) {
    if ($key === 'method' || $key === 'submit') {
        continue;
    }
    echo "<tr>
                    <td>{$key}</td>
                    <td>{$value}</td>
                  </tr> 
                  

?>
</html>
