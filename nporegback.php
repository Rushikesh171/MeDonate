<?php
//error_reporting(0);
include 'connection.php';


    $na = $_POST['name'];
    $numb =$_POST['email'];
    $com =$_POST['pass'];
    $mess =$_POST['re_pass'];



    $query = "INSERT INTO npo_register (name,email,password,repassword) VALUES ('$na','$numb','$com','$mess')";

    $data =  mysqli_query($conn,$query);
   
   
    if($data)
    {
        echo "<script> alert('Data submitted successfully');window.location='/Hackthaon/nposign.php'  </script>";
    }
    
    else{
        echo "<script> alert('Error');window.location='/Hackthaon/nporeg.php'   </script>";
    }





  ?> 