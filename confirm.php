<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Order Confirmation</title>
</head>
<body>
<p>
<?php

//Sets up the page to use session state and processes session and post values.
function ProcessSession()
{
	session_start();
	if (SessionExists())
	{
	}
	else
	{
		//Get data from post values and enter it into session state.
		$_SESSION["name"] = $_POST["name"];
		$_SESSION["age"] = $_POST["age"];
	}
}

function SessionExists()
{
	return array_key_exists("name", $_SESSION);
}




function ProcessConfirmation($name, $age, $product)
{
	$currentDate = date("Y M d");
	PrintConfirmation($currentDate, $name, $age, $product);
	$saveRow = GetSaveRow($currentDate, $name, $age, $product);
	SaveContent($saveRow);
}
function PrintConfirmation($currentDate, $name, $age, $product)
{
	print "Thank you, $name.  Your order for a/an $product was received on $currentDate.  Your order will be shipped out by Mars Post along with advertisements targeted at people who are $age years old.";
}
//Escapes a delimiter value in a value string to ensure that instances of the delimiter in the value do not interfere with parsing the value.  For each instance of the delimiter found, the delimiter will be doubled.
function EscapeValue($value, $delimiter)
{
	return str_replace($delimiter,$delimiter . $delimiter, $value);
}
//Gets a comma delimited row of comma-escaped input values with a newline at the end, suitable for saving.
function GetSaveRow($date, $name, $age, $item)
{
	$itemDelimiter = ",";
	return EscapeValue($date, $itemDelimiter) . $itemDelimiter . EscapeValue($name, $itemDelimiter) . $itemDelimiter . EscapeValue($age, $itemDelimiter) . $itemDelimiter . EscapeValue($item, $itemDelimiter) . "\r\n";
}
//Saves a data row to the log file, creating the log file if it exists.
function SaveContent($content)
{
	//Information about how to do this obtained from http://php.net/manual/en/function.file-put-contents.php
	file_put_contents("confirmLog.txt", $content, FILE_APPEND);
}
//ProcessConfirmation($_POST["name"], $_POST["age"], $_POST["choice"]);
ProcessSession();
ProcessConfirmation($_SESSION["name"], $_SESSION["age"], $_POST["choice"]);

?>
</p>
<p>
<a href="index.php">Go back home</a>
</p>
</body>
</html>