<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = $_POST["Product"];
    $price = $_POST["Price"];
    $discount = $_POST["Discount"];
    $discountAmount = $price*$discount*0.1;
    $discountPrice = $price - $discountAmount;
}
?>
<form method="post">
<h1>Product Discount Calculator</h1><br>
<label>Product Description:</label>
<span><?php echo $product ?></span><br>
<label>List Price:</label>
<span><?php echo $price ?></span><br>
<label>Discount Percent:</label>
<span><?php echo $discount ?></span>(%)<br>
<label>Discount Amount:</label>
<span><?php echo $discountAmount ?></span><br>
<label>Discount Price:</label>
<span><?php echo $discountPrice ?></span><br>
<a href="discountCalculator.php">
    <input type="" onclick="" value="Calculate Discount">
</a>
</form>
