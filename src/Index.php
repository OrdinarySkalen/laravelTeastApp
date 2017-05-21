<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="Index.php" method="POST">
    Balls in user's basket: <input type="number" name="userBasketCount" value=100 /><br><br>
    Count of baskets: <input type="number" name="basketCount" value=30 /><br><br>
    <input type="submit" value="Try again">
</form>
<div>
<?php
include "Basket.php";
include "Comparator.php";

$userBasketCount = 100;
$basketCount = 31;

if(isset($_POST['userBasketCount'])) $userBasketCount = $_POST['userBasketCount'];
if (isset($_POST['basketCount'])) $basketCount = $_POST['basketCount'];

$taskB="";
$taskC="";
$userBasket = new Basket();
$userBasket->fillBasket($userBasketCount);
$userBasket->printBasket("User basket");
print "<br>";
for ($i=1; $i<$basketCount+1;$i++)
{
	$basket = new Basket();
	$basket->fillBasket(rand(1, 9));
	$basket->printBasket("Basket $i");
	
	if (existAllElements($basket->balls, $userBasket->balls)===1)
	{$taskB.="#$i ";}
	//print existAllElements($basket->balls, $userBasket->balls);
	if (existSingleElement($basket->balls, $userBasket->balls)===1)
	{$taskC.="#$i ";}
	//print existSingleElement($basket->balls, $userBasket->balls);
}

print "<br><br>Contained in User's basket: $taskB";
print "<br>Have only one element from User basket: $taskC";
?>
</div>
</body>
</html>