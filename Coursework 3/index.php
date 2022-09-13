<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Credit Card transaction scheme</title>
<link rel='stylesheet' href='css/pageformats.css' type='text/css' />
<script src="js/cardValidation.js"></script>
</head>

<body>

<header>
<h2>
Payment Options
</h2>
</header>

<div id="credit">
<h3 id="credith3" class="change">
Debit/Credit Card
</h3>
<img class="change" src="image/mastercard.jpg" alt="Mastercard Logo" width="80px" />
</div>

<div class="mail">

<form name="form1" action="page2.php" method="post" required onsubmit="return theBigPic(document.form1.Cardno,document.form1.month,document.form1.Year)">
<ul>
<li><label for="Cardno">Card Number</label><input type='text' name='Cardno' maxlength="19" id="input1"/></li>
<li>&nbsp;</li>
<li>
<label for="month">Expiration Date</label>

<select name="month" value="Month" required>
<option selected disabled>Month</option>/*Selected ensures it as pre-selected on loadup(title) however
since it is disabled it is not actually a real selectable value*/
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>

<select name="Year" value="Year" required>
<option selected disabled>Year</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>
</li>
<li>&nbsp;</li>
<li><label for="seccode">Security Code</label><input type="text" name="seccode" maxlength="4" id="input2" required></input></li>
<li id="liRandom">&nbsp;</li>
<li id="message">(3-4 digit code normally on the back of your card)</li>
<li>&nbsp;</li>
<li ><input id="submitbutton" type="submit" name="submit" value="Continue" onclick="cardNumberValidator(document.form1.Cardno)"/></li>

</ul>
</form>

</div>

</body>

</html>
