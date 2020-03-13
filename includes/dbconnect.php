<?php
    $host='localhost';
    $user='isteitnu_ifest';
    $password='Evenparity2';
    $database='isteitnu_ifest';
    $connection=mysqli_connect($host,$user,$password,$database);
    if(!$connection)
    {
        echo mysqli_error($connection);
        echo "error";
        
    }
    
 ?>