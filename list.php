<?php
require 'control.php';
$get_data = new data();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Home</title>
    <style>
        .container {
            overflow-x: auto;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">BOOKING FORM</div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li class="active">
                <a href="#" class="form-btn">FORM
                    <span class="fas fa-caret-down rotation"></span>
                </a>
                <ul class="form-show">
                    <li><a href="booking.php">New booking</a></li>
                    <li><a href="list.php">Table list</a></li>
                </ul>
            </li>
            <li>
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
                <div class="title" style="margin-bottom: 20px;">List booking</div>
                <table class="custom">
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Business</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip code</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Artwork</th>
                        <th>Image</th>
                        <th colspan="2">edit&del</th>
                    </tr>
                    <?php
                    $select = $get_data->select_booking();
                    foreach ($select as $se) {
                    ?>
                        <tr>
                            <td><?php echo $se['id_book']; ?></td>
                            <td><?php echo $se['firstname']; ?></td>
                            <td><?php echo $se['lastname']; ?></td>
                            <td><?php echo $se['business']; ?></td>
                            <td><?php echo $se['add1']; ?></td>
                            <td><?php echo $se['add2']; ?></td>
                            <td><?php echo $se['city']; ?></td>
                            <td><?php echo $se['state']; ?></td>
                            <td><?php echo $se['zipcode']; ?></td>
                            <td><?php echo $se['country']; ?></td>
                            <td><?php echo $se['email']; ?></td>
                            <td><?php echo $se['phone']; ?></td>
                            <td><?php echo $se['artwork']; ?></td>
                            <td><img src="./image/<?php echo $se['img']; ?>" alt="" width="50px" height="50px"></td>
                            <td><a href="edit_book.php?edit=<?php echo $se['id_book']; ?>">Edit</a></td>
                            <td><a href="del_book.php?del=<?php echo $se['id_book']; ?>" onclick="return confirm('Are you sure?');">Del</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
    <script>
        $('nav ul .form-show').toggleClass("show");
        $('nav ul .rotation').toggleClass("rotate");
        $('.btn').toggleClass("click");
        $('.sidebar').toggleClass("show");
        $('section').toggleClass("fit");
        $('.btn').click(function() {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
            $('section').toggleClass("fit");
        });
        $('.form-btn').click(function() {
            $('nav ul .form-show').toggleClass("show");
            $('nav ul .rotation').toggleClass("rotate");
        });
        $('.country-btn').click(function() {
            $('nav ul .country-show').toggleClass("show1");
            $('nav ul .rotation2').toggleClass("rotate");
        });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
</body>

</html>