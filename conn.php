<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $database='database';
    $conn=mysqli_connect($hostname,$username,$password,$database);
    mysqli_query($conn,'setnames"utf8"');
?>