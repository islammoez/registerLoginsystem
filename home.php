<?php
include('dbconn.php');
session_start();
if(!$_SESSION['username']){
    header("location:login.php");
}



echo $_SESSION['username'] . " " . $_SESSION['password'] ;

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
<a href="logout.php">logout</a>
</body>
</html>
