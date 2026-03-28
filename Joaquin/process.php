<?php
include "conn.php";
session_start();


if(isset($_POST['register_button'])){ 

    $name=$_POST['nm'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pn=$_POST['pn'];



    $insertusers=mysqli_query($conn, "INSERT INTO users VALUES('0','$name','$email','$password','$pn')");

    if($insertusers==true){
        ?>
        <script>
            alert( "Your Registration was successful!");
            window.location.href="index.php";
        </script>
       <?php 
    }else{
        
        echo ("Error Registration\nTry Again!");
        

    }

}


if(isset($_POST['login'])){

    $email=$_POST['login_email'];
    $pass=$_POST['login_pass'];

    $check=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass'");

    $num=mysqli_num_rows($check);

    if($num >=1){

        $_SESSION['email']=$email;
        ?>
        <script>
            alert("Your Registration was successful!");
            window.location.href="index.php";
        </script>
       <?php

      }else{
        ?>
        <script>
            alert("Error Registration\nTry Again!");
            window.location.href="reg.php";
        </script>
       <?php
  

    }

}



?>

