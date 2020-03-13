<?php 
include("dbconnect.php");
if(isset($_POST['Submit']))
{
    $name=mysqli_real_escape_string($connection,$_POST['name']);
    $mail=mysqli_real_escape_string($connection,$_POST['email']);
    $question=mysqli_real_escape_string($connection,$_POST['message']);
    $query="INSERT INTO contactform (name,email,message) VALUES ('$name','$mail','$question')";
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