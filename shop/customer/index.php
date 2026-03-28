<?php 
include "../conn.php";
session_start();


if(empty($_SESSION)){
    ?>
        <script>
            alert("Please Login!!");
            window.location.href="../index.php";
        </script>
    <?php  

}else{

    $myemail = $_SESSION['myemail'];

    $get_name = mysqli_query($conn, "SELECT * FROM customers WHERE Email ='$myemail' ");

    while ($row = mysqli_fetch_object($get_name)){

    $fn = $row -> FirstName;
    $ln = $row -> LastName;

    }
  
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fn, " ", $ln; ?></title>
</head>
<body>
    <h1>Welcome <?php echo $fn, " ", $ln; ?> !! </h1>

    <a href ="../logout.php">Logout</a>
</body>
</html>