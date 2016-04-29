<html>
<head>
<title>Input form</title></head>
<body>
<form action="" onsubmit="Validate()">
<p>
<h3 style="color:blue">Welcome to the funds transfer page.  Please enter your banking information and the desired monetary amount to transfer funds to me.  Please give me at least a hundred dollars.
</h3>
<label>Bank Account Number (25 digits, first digit must be 1 or 2)<input type="text" id="accountNo"/></label>
<label style="color:green">
	Money to Transfer
	<select id="moneyAmount">
		<option value="1">$1</option>
		<option value="10">$10</option>
		<option value="100">$100</option>
		<option value="1000">$1,000</option>
	</select>
</label>
<label>Check here for expedited funds transfer (only available when sending at least $1,000)<input type="checkbox" id="expeditedFundsTransfer"/></label>
<script type="text/javascript">
function Validate()
{
	var moneyAmount = document.getElementById("moneyAmount").value;
	return ValidateAccountNumber(document.getElementById("accountNo").value) && ValidateMoneyAmount(moneyAmount) && ValidateExpeditedFundsTransfer(document.getElementById("expeditedFundsTransfer").checked,moneyAmount);
}
function ValidateAccountNumber(string)
{
	if (ValidateIsWholeNumber(string) && ValidateLengthEquals(string,25))
	{
		if ((string.charAt(0) == "1") || (string.charAt(0) == "2"))
		{
			return true;
		}
		else
		{
			alert("First digit of account number must be 1 or 2.");
			return false;
		}

	}
	else
	{
		alert("Account number must be a 25 digit whole number.");
	}
}

function ValidateMoneyAmount(provided)
{
	if (provided < 100)
	{
		alert("That's not enough money!  I want at least a hundred dollars!");
		return false;
	}
	return true;
}
function ValidateExpeditedFundsTransfer(checkOption, moneyAmount)
{
	if ((!checkOption) || (moneyAmount >= 1000))
	{
		return true;
	}
	else
	{
		alert("Expedited Funds Transfers are only available when sending more than $1,000.")
	}
}
function ValidateIsWholeNumber(provided)
{
	var regularExpressionForWholeNumber = /^[0-9]+$/;
	return regularExpressionForWholeNumber.test(provided);
}
function ValidateLengthEquals(provided, allowableLength)
{
	return (provided.length == allowableLength);
}	
	
</script>
<input type="submit" name="Send money"/>
<input type="reset" name="reset"/>
</form>
</body>
</html>