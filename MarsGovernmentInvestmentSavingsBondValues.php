<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mars Government Savings Bond Values</title>
</head>
<body>
<h3 style="color:red">Central Government of the Planet of Mars Savings Bond Value Chart</h3>
<p>
	The Central Government of the Planet of Mars offers Martian Dollar savings bonds that grow 5% in value every Martian year, compounded annually.  Use this handy chart to calculate the value of each dollar invested over time.
</p>
<table>
<tr>
	<th>
		Year
	</th>
	<th>
		Interest Earned
	</th>
	<th>
		Final Value
	</th>
</tr>
<?php
	// Display a Central Government of the Planet of Mars Savings Bond Value Chart Row for a specific year, given the applicable interest paid that year and the resulting value of the bond.
	function DisplayBondValueRow($year, $interestPaidThisYear, $value)
	{
		//Open the Table Row.
		print "<tr>";
		/* Display Year */
		print "<td>";
		print $year;
		print "</td>";
		/* Display Interest Paid This Year */
		print "<td>MAR ";
		print $interestPaidThisYear;
		print "</td>";
		/* Display Value */
		print "<td>MAR ";
		print $value;
		print "</td>";
		//Close the Table Row.
		print "</tr>";
	}
	function DisplayBondValueChart()
	{
		//Initialize values
		$interestRate = .05;
		$value=1.0;
		//Don't declare $interestPaidThisYear here because we don't need to declare variables in advance.
		//DisplayBondValueRow(1,1,1);
		//Initialize a counter.
		$yearsFromNow = 1;
		while ($yearsFromNow < 100)
		{
			//Calculate the current year's interest.
			$interestPaidThisYear = $interestRate * $value;
			$value += $interestPaidThisYear;
			DisplayBondValueRow($yearsFromNow, $interestPaidThisYear, $value);
			$yearsFromNow ++;
		}
	}
	DisplayBondValueChart();
	
?>

<p>
	<a href="index.php">Home</a>
</p>
</body>
</html>