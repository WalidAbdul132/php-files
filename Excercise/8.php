<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Calculating Total Price</h1>

    <form action="#" method="get">
        <p>Enter item name</p>
        <input type="text" name="name" />
        <p>Enter quality</p>
        <input type="number" name="quantity" />
        <p>Enter price</p>
        <input type="number" name="price" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['name'])){
        $name = $_GET['name'];
        $quantity = $_GET['quantity'];
        $price = $_GET['price'];
        $total = $price * $quantity;
        echo "You purchased a: ".$name;
        echo "<br/>";
        echo "Your Total is: ".$total;

    } else {
        echo "";
    }
        
        
?>
</body>
</html>
