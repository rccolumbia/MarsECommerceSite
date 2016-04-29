<?php

function EstablishProductArray()
{
	$products = array("poster" => "A nice poster of Mars",
						"globe" => "A physical globe of Mars that is approximately one meter in diameter",
						"princess" => "A copy of the classic book",
						"observatory" => "A tour of an observatory led by a professional astronomer who will also provide a lecture on Mars and allow visitors to view Mars through a telescope if the weather permits it",
						"ticket" => "A flight to Mars on an interplanetary spacecraft");
	return $products;
}

function Process()
{
	$products = EstablishProductArray();
	header("Content-Type: text/plain");
	$input = $_GET["input"];
	if (array_key_exists($input, $products))
	{
		print $products[$input];
	}
	else
	{
		print "";
	}
}
Process();
?>