<?php 
 include "conn.php";

 if(isset($_POST["add_submit"])){

    $pn = $_POST ['pn'];
    $price = $_POST ['price'];
    $qty = $_POST ['qty'];

    $insert = mysqli_query($conn, "INSERT INTO products 
    VALUES ('0', '$pn' , '$price', '$qty')");

    if($insert == TRUE){

        ?>
            <script>
                alert("Product Added Successfully");
                window.location.href="view.php";
            </script>    

        <?php
        
    }else{
        ?>
        <script>
            alert("error");
            window.location.href="index.php";
        </script>    

        <?php
    }

 }




?>