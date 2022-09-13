function theBigPic(var1,var2,var3)/*3 placeholder values to be passed on to further functions inside */{

var inputtxt = var1;
var formelement1 = var2;
var formelement2 = var3;

function cardNumberValidator(inputtxt)//function which compares user input cc number to actual credit card number formats
{
var masterCard = /^(?:5[1-5][0-9]{14})$/;//variable containing the format for a mastercard number
var visa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;//variable containing the format for a visa number
var americanExpress = /^(?:3[47][0-9]{13})$/;//variable containing the format for an american Express number
var dinersClub = /^(?:3(?:0[0-5]|[68][0-9])[0-9]{11})$/;//variable containing the format for dinersclub number
var discover = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;//variable containing the format for a discover number
var jcb = /^(?:(?:2131|1800|35\d{3})\d{11})$/;//variable containing the format for a jcb number
if(inputtxt.value.match(masterCard) || inputtxt.value.match(visa) || inputtxt.value.match(americanExpress)//if the user input cc number matches
	|| inputtxt.value.match(dinersClub) || inputtxt.value.match(discover) || inputtxt.value.match(jcb))//any of these variable formats
{
return true;
}
else
{
alert("ERROR CODE 69! Invalid credit/debit card number!");
return false;
}
}

function formValidation(formelement1,formelement2){//function to validate whether month and year select fields have been chosen 
	if(formelement1.value == "Month" || formelement2.value == "Year"){//if the select fields still have original pre-selected values
		alert("ERROR! You haven't filled out all of the fields!");
		return false;//then return false i.e the select fields have not been selected by user
	}
}

formValidation(formelement1,formelement2);//call made to functions
cardNumberValidator(inputtxt);

if (formValidation(formelement1,formelement2) == false || cardNumberValidator(inputtxt) == false){
	return false;//if any of the called functions return false, then return false as a whole for the entire function
}
}