<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $database='kiemtra';
    $conn=mysqli_connect($hostname,$username,$password,$database);
    mysqli_query($conn,'setnames"utf8"');
?>