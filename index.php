<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <input type="text" placeholder="your name" name="name">
    <input type="submit" name="submit">
    </form>
    <h1><?php echo 'hello '.$name ?></php></h1>

</body>

</html>