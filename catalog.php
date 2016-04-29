<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Mars Store</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<script type="text/javascript" src="catalog.js"></script>
<h1>The following items are available for purchase:</h1>
<p>
The Martian Store accepts most forms of payment methods.  Jupiter Dollar cash is not accepted.  All beings from outside the local group of galaxies must provide a credit reference unless their total is paid in full in acceptable currency.  No credit extended to Alpha Centaurians.
</p>
<form method="post" action="confirm.php" onsubmit="return ValidateAjax()">
<p>
<?php
function SessionExists()
{
	return array_key_exists("name", $_SESSION);
}
function ProcessNameAndAge()
{
	session_start();
	if (SessionExists())
	{
		$name = $_SESSION["name"];
		$age = $_SESSION["age"];
		print "Welcome back, $name.  I hope an $age year old such as yourself is interested in buying more of our products.";
	}
	else
	{
		print "<label>Please enter your name: <input type=\"text\" size=\"10\" name=\"name\" id=\"name\"/></label></p><p><label>Please enter your age:<input type=\"text\" name=\"age\" id=\"age\"/></label>";
	}
}
ProcessNameAndAge();
?>

</p>
<script type="text/javascript">
function ValidateAjax()
{
	if (document.getElementById('submit').style.display == 'none')
	{
		//Button is hidden, input not acceptable.
		alert('You must choose a valid product.');
		return false;
	}
	//Input was acceptable.
	return true;
}
function handleInput(input)
{
	if ('' == input)
	{
		//User didn't enter anything.
		return;
	}
	//Provide for cross-browser compatibility.
	var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	xhr.onreadystatechange = function ()
										{
											//alert('state ' + xhr.readyState);
											//alert('status ' + xhr.status);
											if (xhr.readyState == 4 && xhr.status == 200)
											{
												//alert(xhr.responseText);
												var returnValue = xhr.responseText;
												if (returnValue != '')
												{
													//We got a match.
													document.getElementById("description").innerHTML = 'The item you have selected has the following description: ' + returnValue + '.  If you wish to purchase this item, please click Checkout, otherwise click home or Clear Form.';
													document.getElementById("submit").style.display="";
												}
												else
												{
													//No match.
													//Hide the button.  The button might have been shown previously and the user then entered more data that invalidated the match.
													document.getElementById("submit").style.display="none";
													//Clear the description.
													document.getElementById("description").innerHTML = '';
												}
											}
										};
	xhr.open('GET','ajaxHandle.php?input=' + input, true);
	xhr.send(null);
}

</script>
<p>
	<label>Please start typing your desired item here.  The input you enter must match an item in our records.  If you would like to order using our old catalog page, click <a href="catalogOld.php">here</a>: <input type="text" id="choice" name="choice" onkeyup="handleInput(this.value)"/></label>
</p>
<p id="description"></p>
<p>
<input type="submit" id="submit" value="Checkout" style="display:none"/>
<input type="reset" value="Clear form"/>
</p>
</form>




<p>
<a href="index.php">Home</a>
</p>


</body>
</html>