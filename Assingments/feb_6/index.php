<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact form</title>
<link href="endpoint.php" rel="php">
    <link href="style.css" rel="stylesheet">
</head>

<body>
        <form action="index.php" method="get" >
        </form>
        <form action="endpoint.php" method="post">
        </form>

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

</body>
</html>
