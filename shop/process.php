<?php
include "conn.php";
session_start();

if (isset($_POST['reg'])){

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $check =mysqli_query ($conn, "SELECT * FROM customers WHERE Email = '$email' ");

    $num_email = mysqli_num_rows($check);

    if($num_email <= 0){

    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0', '$fn', '$ln', '$email', '$pass')");
    if($insert == TRUE){
        ?>
        <script>
            alert("Successfull Registration!!");
            window.location.href="index.php";
        </script>
        <?php    
    } else {
        ?>
        <script>
            alert(" Error Registration!!");
            window.location.href="index.php";
        </script>
        <?php  
    }

}else{
    ?>
        <script>
            alert("Email Already Exist!!");
            window.location.href="index.php";
        </script>
    <?php   

}


}

if(isset($_POST['log'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check =mysqli_query($conn, "SELECT * FROM customers WHERE Email ='$email' AND Password ='$pass' ");

    $num_email = mysqli_num_rows($check);

    if ($num_email >= 1){
        $_SESSION['myemail'] = $email

        ?>
        <script>
            alert("Login Successfull!!");
            window.location.href="customer/index.php";
        </script>
        <?php    

    }else{
        ?>
        <script>
            alert("INVALID!!");
            window.location.href="index.php";
        </script>
        <?php    
    }


    
}


?>
