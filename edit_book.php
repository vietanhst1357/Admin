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
    <title>New booking</title>
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
                        <span class="fas fa-caret-down rotation1"></span>
                    </a>
                    <ul class="form-show">
                        <li><a href="booking.php" class="booking">New booking</a></li>
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
            <div class="title" style="margin-bottom: 20px;">Booking form</div>
            <form action="" method="post" enctype="multipart/form-data">
            <?php
            $select=$get_data->select1ob_booking($_GET['edit']);
            foreach($select as $se)
            {
            ?>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="Enter your first name" name="firstname" value="<?php echo $se['firstname']; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Enter your last name" name="lastname" value="<?php echo $se['lastname']; ?>">
                    </div>
                </div>
                <div class="user-details1">
                    <div class="input-box">
                        <span class="details">Business name</span>
                        <input type="text" placeholder="Enter your business name" name="business" value="<?php echo $se['business']; ?>">
                    </div>
                <div class="input-box">
                        <span class="details">Address</span>
                        <h6>Street address</h6>
                        <input type="text" placeholder="Enter your street address" name="address1" value="<?php echo $se['add1']; ?>">
                        <h6>Street address line 2</h6>
                        <input type="text" placeholder="Enter your street address line 2" name="address2" value="<?php echo $se['add2']; ?>">

                    <div class="flex">
                        <div class="wrap">
                        <h6>City</h6>
                        <input type="text" placeholder="Enter your city" name="city" value="<?php echo $se['city']; ?>">
                        </div>
                        <div class="wrap">
                        <h6>State</h6>
                        <input type="text" placeholder="Enter your state" name="state" value="<?php echo $se['state']; ?>">
                        </div>
                        <div class="wrap">
                            <h6>Zip code</h6>
                            <input type="text" placeholder="Enter your zip code" name="zip" value="<?php echo $se['zipcode']; ?>">
                        </div>
                        <div class="wrap">
                            <h6>Country</h6>
                            <select name="country" id="">
                            <?php
							$select = $get_data -> select_country();
                            foreach($select as $se_user)
                            {
							?>
                                <option value="<?php echo $se_user['namecountry']; ?>"><?php echo $se_user['namecountry']; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" value="<?php echo $se['email']; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" placeholder="Enter your phone number" name="phone" value="<?php echo $se['phone']; ?>">
                    </div>
                    <div>
                        <span style=" font-weight: 500;">Artwork</span> <br>
                        <input type="radio" name="artwork" id="" value="i will supply my own artwork"> I will supply my own artwork <br>
                        <input type="radio" name="artwork" id="" value="i will need artwork prepared"> I will need artwork prepared 
                    </div>
                    <div class="input-box">
                        <span class="details">Upload artwork</span>
                        <input type="file" name="img" id="">
                        <img src="./image/<?php echo $se['img']; ?>" alt="img" width="60px" height="60px">
                    </div>
                    <div class="input-box">
                        <span class="details">Comments</span>
                        <textarea name="cmt"><?php echo $se['firstname']; ?></textarea>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="button">
                    <input type="submit" name="submit" value="Book">
                </div>
            </form>
        </div>
    </div>
    </section>
    <script>
        $('nav ul .form-show').toggleClass("show");
        $('nav ul .rotation').toggleClass("rotate");
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
            $('nav ul .rotation1').toggleClass("rotate");
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
    if(isset($_POST['submit']))
    {
        $id=$_GET['edit'];
        $fn=$_POST['firstname'];
        $ln=$_POST['lastname'];
        $business=$_POST['business'];
        $add1=$_POST['address1'];
        $add2=$_POST['address2'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $country=$_POST['country'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $art=$_POST['artwork'];
        $cmt=$_POST['cmt'];
        $file = $_FILES['img']['tmp_name'];    // tên file tạm
		$img = $_FILES['img']['name'];		   // tên file
        $path="./image/";
        //$insert = $get_data -> insert_booking($fn,$ln,$business,$add1,$add2,$city,$state,$zip,$country,$email,$phone,$art,$img,$cmt);
        //echo $insert;
        if(empty($fn)||empty($ln)||empty($business)||empty($add1)||empty($city)||empty($state)||empty($zip)||empty($country)||empty($email)||empty($phone)||empty($art)||empty($img))
        {
            echo("<script>alert('data empty');</script>");
        }
        else
        {
            $update = $get_data -> edit_booking($id,$fn,$ln,$business,$add1,$add2,$city,$state,$zip,$country,$email,$phone,$art,$img,$cmt);
            if($update)
                {
					$u=move_uploaded_file($file,$path.$img);
					if($u)
					{
						echo("<script>alert('Successfull');</script>");
					}
					else
					{
						echo("<script>alert('Unsuccessfull image');</script>");
					}
                }
            else
            {
                echo("<script>alert('Unsuccessfull');</script>");
            }
        }
    }
    ?>
</body>
</html>