<?php

var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_REQUEST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="get">
    <input type="hidden" name="id" value="43324234234">
   <label> First Name: <input type="text" name="first_name"></label><br>
    <label>Last Name: <input type="text" name="last_name"></label><br>


    Password: <input type="password" name="password"><br>

    Fav1: <input type="checkbox" checked name="fav1" value="1">
    Fav2: <input type="checkbox" checked name="fav2" value="1">
<br>
    male: <input type="radio" checked name="g" value="m">
    female: <input type="radio" name="g" value="f">

    <textarea name="note"></textarea>

<select name="city">
    <option value="msh">Mashhad</option>
    <option value="shz">Shiraz</option>
    <option selected value="teh">Tehran</option>
</select>

    <input type="reset" onclick="return confirm('reset the form???!!!')" >
    <input type="image" src="">
    <input type="submit" value="Send">
</form>
</body>
</html>
