<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<body>
<form action="index.php" method="POST">
    Rice : <input type="text" name="rice">
    <br/>
    Vegetable : <input type="text" name="vegetable">
    <br/>
    Fish :<input type="text" name="fish">
    Meat :<input type="text" name="meat">
    Vat :<input type="text" name="vat">

    <br/>
    <input type="submit" value="Show Below" name="showButton">
    <br/>
</form>

</body>
</html>
<?php
require 'MealBill.php';
$meal_bill=new MealBill();

if (isset($_POST["rice"]) && isset($_POST["vegetable"]) &&isset($_POST["fish"]) &&isset($_POST["meat"]) &&isset($_POST["vat"])) {

    $meal_bill = new MealBill();

    $meal_bill->rice = $_POST["rice"];
    $meal_bill->vegetable = $_POST["vegetable"];
    $meal_bill->fish = $_POST["fish"];
    $meal_bill->meat = $_POST["meat"];
    $meal_bill->vat = $_POST["vat"];


    echo "GrossTotal: " . $meal_bill->getGrossTotal();
    echo "TotalAmount: " . $meal_bill->getTotalAmount();
}
?>
