<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Item List </h1>

<table border="2pcx solid" style="width: 100;">
   <tr>
       <th> Picture </th>
       <th> Item name </th>
       <th> Action </th>
   </tr>

   <?php
   include "conn.php";
   $getData = mysqli_query($conn, "SELECT * FROM items");
   while($row = mysqli_fetch_array($getData)){
       ?>
   <tr>
       <td> <img src="items_pic/<?php echo $row['Picture']; ?>"width="100px"> </td>
       <td> <?php echo $row['Item_Nam']; ?> </td>
       <td> DELETE </td>
   </tr>
    
   <?php
   }
 ?>
</table>
</body>
</html>