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
                <li class="active"><a href="index.php">HOME</a></li>
                <li>
                    <a href="#" class="form-btn">FORM
                        <span class="fas fa-caret-down rotation"></span>
                    </a>
                    <ul class="form-show">
                        <li><a href="booking.php" class="booking">New booking</a></li>
                        <li><a href="list.php">Table list</a></li>
                    </ul>
                    <li>
                    <a href="#" class="country-btn">FORM COUNTRY
                        <span class="fas fa-caret-down rotation2"></span>
                    </a>
                    <ul class="country-show">
                        <li><a href="country.php" class="country">New Country</a></li>
                        <li><a href="listcountry.php">Table list</a></li>
                    </ul>
                </li>
                </li>
            </ul>
    </nav>
    <section>
    <!-- <div id="cover">
        <div class="container">
            <div class="title">Booking form</div>
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="Enter your first name" name="firstname">
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Enter your last name" name="lastname">
                    </div>
                </div>
                <div class="user-details1">
                    <div class="input-box">
                        <span class="details">Business name</span>
                        <input type="text" placeholder="Enter your business name" name="business">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <h6>Street address</h6>
                        <input type="text" placeholder="Enter your street address" name="address1">
                        <h6>Street address line 2</h6>
                        <input type="text" placeholder="Enter your street address line 2" name="address2">

                        <div class="flex">
                        <div class="wrap">
                        <h6>City</h6>
                        <input type="text" placeholder="Enter your city" name="city">
                        </div>
                        <div class="wrap">
                        <h6>State</h6>
                        <input type="text" placeholder="Enter your state" name="state">
                        </div>
                        <div class="wrap">
                            <h6>Zip code</h6>
                            <input type="text" placeholder="Enter your zip code" name="zip">
                        </div>
                        <div class="wrap">
                            <h6>Country</h6>
                            <select name="country" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" placeholder="Enter your phone number" name="phone">
                    </div>
                    <div>
                        <span style=" font-weight: 500;">Artwork</span> <br>
                        <input type="radio" name="artwork" id="" value="i will supply my own artwork"> I will supply my own artwork <br>
                        <input type="radio" name="artwork" id="" value="i will need artwork prepared"> I will need artwork prepared 
                    </div>
                    <div class="input-box">
                        <span class="details">Upload artwork</span>
                        <input type="file" name="img" id="">
                    </div>
                </div>
                    <div class="input-box">
                        <span class="details">Comments</span> <br>
                        <textarea name="cmt" id="" cols="50" rows="5"></textarea>
                    </div>
                <div class="button">
                    <input type="submit" value="Book">
                </div>
            </form>
        </div>
    </div> -->
    </section>
    <script>
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
    
</body>
</html>