<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <style>
        body{
            text-align: center;
           margin-top: 120px;
        }
        #pizza,#burger{
padding: 15px 20px;
font-size: 15px;
border-radius: 20px;
        }
        </style>
<form action="index.php" method="post">

    <label for="">TOTAL PIZZAS:</label><br>
    <input type="number" name="pizza"placeholder="Quantity Number of Pizzas" id="pizza" ><br><br>
    <label for="">TOTAL BURGERS:</label><br>
    <input type="number" name="burger"placeholder="Quantity Number of Burgers" id="burger"><br><br>
<input type="submit" value="Give Price">
</form>
</body>
</html>

<?php
$pizza = $_POST["pizza"];
$burger = $_POST["burger"];
$pprice = 130;
$bprice = 65;
$totalp = null;
$totalb = null;
$total = null;

$totalp = $pizza * $pprice;
$totalb = $burger * $bprice;
$total = $totalp + $totalb;
if($pizza > 100 || $burger > 100){
    echo "SORRY WE ARE UNABLE TO GIVE."."<br>";
}

echo "Total Price of Pizzas is = {$totalp}TK"."<br>";
echo "Total Price of Burgers is = {$totalb}TK"."<br>";
echo "Overall Price is = {$total }TK"."<br>";

    ?>