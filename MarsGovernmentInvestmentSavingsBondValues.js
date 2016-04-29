//Initialize the dollar amount.
var interestRate = .05;
var value = 1.0;
var interestPaidThisYear;
for(var yearsFromNow = 1; yearsFromNow < 100 ; yearsFromNow++)
{
	//calculate interest
	interestPaidThisYear= value * interestRate;
	//add the interest to the principal
	value += interestPaidThisYear;
	document.write("<tr>");
	//write the year value.
	document.write("<td>" + yearsFromNow + "</td>");
	//write the interest earned value.
	document.write("<td>MAR " + interestPaidThisYear + "</td>");
	//write the year value.
	document.write("<td>MAR " + value + "</td>");
	document.write("</tr>");
}