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
<form method="post" action="confirm.php" onsubmit="return ValidateInput()">
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
<table border="1">
<tr>
<th>
Chosen
</th>
<th>
Item
</th>
<th>
Description
</th>
<th>
Image
</th>
<th>
Price (USD)
</th>
</tr>
<tr>
<td>
<label>chosen
<input type="radio" name="choice" value="poster" id="poster"/>
</label>
</td>
<td>
Mars Poster
</td>

<td class="description">
A nice poster of Mars
</td>
<td>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Water_ice_clouds_hanging_above_Tharsis_PIA02653.jpg/250px-Water_ice_clouds_hanging_above_Tharsis_PIA02653.jpg" alt="Image from Wikipedia"/>
</td>
<td>
$3
</td>
</tr>
<tr>
<td>
<label>chosen
<input type="radio" name="choice" value="globe" id="globe"/>
</label>
</td>
<td>
Mars Globe
</td>

<td class="description">
A physical globe of Mars that is approximately one meter in diameter
</td>
<td>
<img src="http://cdn0.cosmosmagazine.com/wp-content/uploads/tech_mars_spun.jpg" alt="Image from Cosmos Magazine" />
</td>
<td>
$65
</td>
</tr>
<tr>
<td>
<label>chosen
<input type="radio" name="choice" value="princess" id="princess"/>
</label>
</td>
<td>
Paperback copy of A Princess of Mars by Edgar Rice Burroughs
</td>

<td class="description">
A copy of the classic book
</td>
<td>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Princess_of_Mars_large.jpg/250px-Princess_of_Mars_large.jpg" alt="Image from Wikipedia" />
</td>
<td>
$7.99
</td>
</tr>
<tr>
<td>
<label>chosen
<input type="radio" name="choice" value="observatory" id="observatory"/>
</label>
</td>
<td>
Observatory trip
</td>

<td class="description">
A tour of an observatory led by a professional astronomer who will also provide a lecture on Mars and allow visitors to view Mars through a telescope if the weather permits it
</td>
<td>
<img src="http://neffj.people.cofc.edu/WWW/observatory/Pics/observatory2_sm.gif" alt="Image from Neff, J. E., College of Charleston" />
</td>
<td>
$500
</td>
</tr>
<tr>
<td>
<label>chosen
<input type="radio" name="choice" value="ticket" id="ticket"/>
</label>
</td>
<td>
Ticket to Mars
</td>

<td class="description">
A flight to Mars on an interplanetary spacecraft
</td>
<td>
<img src="http://www.nasa.gov/images/content/145958main1_NTR_borowskii_smweb.jpg" alt="Image from NASA"/>
</td>
<td>
$555,322,556,553
</td>
</tr>
</table>
<p>
<input type="submit" value="Checkout"/>
<input type="reset" value="Clear form"/>
</p>
</form>




<p>
<a href="index.php">Home</a>
</p>


</body>
</html>