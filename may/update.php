<?php
    include "conn.php";

    $id = $_GET ['id'];

    $delete = mysqli_query ($conn, "DELETE FROM products WHERE ID = '$id'");

    if($delete == TRUE){
        ?>
        <script>
            alert("1 Product Is Updated!!");
            window.location.href="view.php";
        </script>    

    <?php

    }


?>
