<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sums and Products</title>
</head>
<body>
<script type="text/javascript">
function SumThreeNumbers(first, second, third)
{
	return first + second + third;
}
function MultiplyThreeNumbers(first, second, third)
{
	return first * second * third;
}
function Main()
{
	var first = prompt("Please provide the first number", "");
	var second = prompt("Please provide the second number", "");
	var third = prompt("Please provide the third number", "");
	first = parseInt(first);
	second = parseInt(second);
	third = parseInt(third);
	alert("The sum of " + first + " and " + second + " and " + third + " is " + SumThreeNumbers(first, second, third));
	alert("The product of " + first + " and " + second + " and " + third + " is " + MultiplyThreeNumbers(first, second, third));
}
Main();
</script>
</body>
</html>