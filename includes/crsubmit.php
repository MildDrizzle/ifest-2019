<?php
    include("dbconnect.php");
    if(isset($_POST['submit-form']))
    {
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $number=mysqli_real_escape_string($connection,$_POST['phone']);
        $collegeid=mysqli_real_escape_string($connection,$_POST['collegeid']);
        $query="INSERT INTO college_ambassador (caname,caemail,caphone,cacollegeid) VALUES('$name','$email',$number,'$collegeid');";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die(mysqli_error($connection));
        }   
        else
        {
            ?><script>alert("Your request for College Ambassador has been accepted");</script>
            <?php 
            header("Location:../index.php");
        }
    }
 ?>