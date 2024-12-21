<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method="get">
        <label type="text">Quantity</label></br>
        <input type ="text" name ="quantity">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 10.99;
    $quantity = $_GET["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have entered {$quantity} x {$item} <br>";
    echo "The total is \${$total}";
?>