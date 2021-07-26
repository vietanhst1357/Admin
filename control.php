<?php
include('conn.php');
class data
{
    public function insert_booking($fn,$ln,$business,$add1,$add2,$city,$state,$zipcode,$country,$email,$phone,$artwork,$img,$cmt)
    {
        global $conn;
        $sql="insert into booking(firstname,lastname,business,add1,add2,city,state,zipcode,country,email,phone,artwork,img,cmt) values('$fn','$ln','$business','$add1','$add2','$city','$state','$zipcode','$country','$email','$phone','$artwork','$img','$cmt')";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function insert_country($name)
    {
        global $conn;
        $sql="insert into country(namecountry) values('$name')";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_booking()
    {
        global $conn;
        $sql="select * from booking";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select1ob_booking($id)
    {
        global $conn;
        $sql="select * from booking where id_book='$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function select_country()
    {
        global $conn;
        $sql="select * from country";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function edit_booking($id,$fn,$ln,$business,$add1,$add2,$city,$state,$zipcode,$country,$email,$phone,$artwork,$img,$cmt)
    {
        global $conn;
        $sql="update booking set firstname='$fn',lastname='$ln',business='$business',add1='$add1',add2='$add2',city='$city',state='$state',zipcode='$zipcode',country='$country',email='$email',phone='$phone',artwork='$artwork',img='$img',cmt='$cmt' where id_book='$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function del_booking($id)
    {
        global $conn;
        $sql="delete from booking where id_book = '$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function del_country($id)
    {
        global $conn;
        $sql="delete from country where id_country='$id'";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
}
?>