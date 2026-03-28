<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
</head>
<body>
    <h1> INVENTORY</h1>
    <a href ="index.php"> Add Products </a> 
        &nbsp; | &nbsp; 
    <a href ="view.php"> View Products </a> 
    </p></p>


    <form action ="process.php" method="Post" >

        <label> Product Name</label><br>
        <input type ="text" name = "pn" required
        placeholder= "Enter Product Name " ></p>

        <label> Price</label><br>
        <input type ="number" name = "price" required ></p>

        <label> Quantity</label><br>
        <input type ="number" name = "qty" required></p>

        <input type = "submit" name = "add_submit" value =" ADD PRODUCT">

    
    
</body>
</html>