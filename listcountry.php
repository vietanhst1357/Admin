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
    <title>Home</title>
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
                        <li><a href="booking.php">New booking</a></li>
                        <li><a href="list.php">Table list</a></li>
                    </ul>
                </li>
                <li class="active">
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
            <div class="title" style="margin-bottom: 20px;">List Country</div>
            <table class="custom">
            <tr>
                <th>ID</th>
                <th>Contry name</th>
                <th colspan="2">Edit & Delete</th>
            </tr>
            <?php
            $select=$get_data->select_country();
            foreach($select as $se)
            {
            ?>
            <tr>
                <td><?php echo $se['id_country']; ?></td>
                <td><?php echo $se['namecountry']; ?></td>
                <td><a href="edit_country.php?edit=<?php echo $se['id_country'];?>">Edit</a></td>
                <td><a href="del_country.php?del=<?php echo $se['id_country'];?>" onclick="return confirm('Are you sure?');">Del</a></td>
            </tr>
            <?php
            }
            ?>
            </table>
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
</body>
</html>