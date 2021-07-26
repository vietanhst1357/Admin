<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    ob_start();
    include('control.php');
    $get_data=new data();
    $id=$_GET['del'];
    $del=$get_data -> del_booking($id);
        if($del)
        header('Location: list.php');
        // echo("<script>alert('Deleted');</script>");
        else
        echo("<script>alert('Error');</script>");
?>
</body>
</html>