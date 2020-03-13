<?php 
include("dbconnect.php");
if(isset($_POST['submit-form']))
{
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $brand=mysqli_real_escape_string($connection,$_POST['brand']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone']);
    $mail=mysqli_real_escape_string($connection,$_POST['email']);
    $website=mysqli_real_escape_string($connection,$_POST['website']);
    $question=mysqli_real_escape_string($connection,$_POST['message']);
    $query="INSERT INTO sponsorquote (name,brand,phone,email,website,message) VALUES ('$name','$brand',$phone,'$mail','$website','$question')";
    $result=mysqli_query($connection,$query);
    //die($query);
    if(!$result)
    {
        echo mysqli_error($connection);
    }
    else
    {
        header("Location:../index.php");
    }
}

?>