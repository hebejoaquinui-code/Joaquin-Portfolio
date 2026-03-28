<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> INVENTORY</h1>
    <a href ="index.php"> Add Products </a> 
        &nbsp; | &nbsp; 
    <a href ="view.php"> View Products </a> 
    </p></p>

    <h2> PRODUCT LIST</h2>

    <table border ="2px solid" >
        <tr>
            <th> PRODUCT NAME </th>
            <th> PRICE </th>
            <th> QUANTITY</th>
            <th> ACTION 1</th>
            <th> ACTION 2</th>
        </tr>

        <?php 
            include "conn.php";
            
            $get_data = mysqli_query($conn, "SELECT * FROM products");
            while($row = mysqli_fetch_array($get_data)){
                ?>
                    <tr>
                        <td><?php echo $row ['PH'];  ?></td>
                        <td><?php echo $row ['PRICE'];  ?></td>
                        <td><?php echo $row ['QTY'];  ?></td>
                        <td><a href ="update.php?id=<?php echo $row['ID']; ?>">UPDATE</a></td>
                        <td><a href ="delete.php?id=<?php echo $row['ID']; ?>">DELETE</a></td>
                    </tr>

                <?php

            }
        ?>

    </table>

    

    
</body>
</html>