<?php
    require 'control.php';
    $get_data=new data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="./jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>New country</title>
</head>
<body>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">BOOKING FORM</div>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li>
                    <a href="#" class="form-btn">FORM
                        <span class="fas fa-caret-down rotation"></span>
                    </a>
                    <ul class="form-show">
                        <li><a href="booking.php" class="booking">New booking</a></li>
                        <li><a href="list.php">Table list</a></li>
                    </ul>
                </li>
                <li  class="active">
                    <a href="#" class="country-btn">FORM COUNTRY
                        <span class="fas fa-caret-down rotation2"></span>
                    </a>
                    <ul class="country-show">
                        <li><a href="country.php" class="country">New Country</a></li>
                        <li><a href="listcountry.php">Table list</a></li>
                    </ul>
                </li>
            </ul>
    </nav>
    <section>
    <div id="cover">
        <div class="container">
            <div class="title" style="margin-bottom: 20px;">Add country</div>
            <form action="" method="post">
                <div class="user-details1" style="padding-bottom:10px;">
                    <div class="input-box">
                        <span class="details">Country name</span>
                        <input type="text"  placeholder="Enter country name" name="countryname">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="add" value="ADD NEW">
                </div>
            </form>
        </div>
    </div>
    </section>
    <script>
        $('nav ul .country-show').toggleClass("show1");
        $('nav ul .rotation2').toggleClass("rotate");
        $('.btn').toggleClass("click");
        $('.sidebar').toggleClass("show");
        $('section').toggleClass("fit");
        $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
            $('section').toggleClass("fit");
        });
        $('.booking').click(function(){
            $('#cover').toggleClass("show");
        });
        $('.form-btn').click(function(){
            $('nav ul .form-show').toggleClass("show");
            $('nav ul .rotation').toggleClass("rotate");
        });
        $('.country-btn').click(function(){
            $('nav ul .country-show').toggleClass("show1");
            $('nav ul .rotation2').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
    <?php
    if(isset($_POST['add']))
    {
        $name=$_POST['countryname'];
        $insert=$get_data -> insert_country($name);
        if($insert)
        {
            echo("<script>alert('Successful');</script>");
        }
        else
        {
            echo("<script>alert('Unsuccessful');</script>");
        }
    }
    ?>
</body>
</html>