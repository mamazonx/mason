<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact form</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

<form action="endpoint_get.php" method="get">

<h2>Contact Form</h2>
<p><span class="error">* required field.</span></p>

Name: <input type="text" name="name" id="name" >
<span class="error">*
<br/>
E-mail: <input type="text" name="email" id="email" >
<span class="error">*
<br/>
Phone <input type="text" name="phone" id="phone" >
<span class="error">*
<br/>
Comment: <textarea name="comment" rows="5" cols="40" id="comment"></textarea>

<input type="reset" name="reset" id="reset">
<input type="submit" name="submit" id="submit">
</form>



</body>

</html>
