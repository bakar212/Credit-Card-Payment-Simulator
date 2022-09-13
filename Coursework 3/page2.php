<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Credit Card transaction update</title>
<link rel='stylesheet' href='css/pageformats.css' type='text/css' />
</head>

<body>

<header>
<h2>
You have successfully entered your credit card details
</h2>
</header>

<div id="credit">
<h3 id="credith3" class="change">
Debit/Credit Card
</h3>
<?php 

$cardno = $_POST["Cardno"];
$month = $_POST["month"];
$year = $_POST["Year"];
$seccode = $_POST["seccode"];

$sqlDate = $year."-".$month."-01";//date in sql format,integrated from previous variables containg month and year


$cardNoLength = strlen($cardno);//returns the length of the card number
if($cardNoLength>4){
$startingDigits = substr($cardno,0,$cardNoLength-4);//retrieves dighits before last 4 digits of the card
$last4Digits = substr($cardno,$cardNoLength-4);//retrieves last 4 digits of the card number, given its length is greater than 4
}
else{
	$last4Digits = $cardno;//otherwise returns the cardNo as it is
}

$ccAsterisk = str_repeat("*",$cardNoLength-4);//repeats asterisk for every digit in the card number except last 4 digits
$maskedCardNum = str_replace($startingDigits,$ccAsterisk,$cardno);//new variable which replaces the card number to (*) values except last 4
?>
<img class="change" src="image/mastercard.jpg" alt="Mastercard Logo" width="80px" />
<h3 id="updateMsg">Your credit card number ends in <?php echo $maskedCardNum ?></h3>
</div>

<div class="mail">



</div>
<div>
<?php 
include 'includes/phpincludefile.php';
?>
</div>
</body>

</html>
