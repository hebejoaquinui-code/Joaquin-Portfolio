<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>
<body>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <label> Picture </label> </br>
        <input type="file" name="pic" required accept="png, jpg, jfif, webp, jpeg, gif"></p>

        <label> Item Name </label> </br>
        <input type="text" name="in" required> </p>


        <input type="submit" name="add_item" value="ADD ITEM">

    </for>
    
</body>

</html>