function hide()
{
	var mars = document.getElementById('mars');
	hideElement(mars);
	//Show it again in two seconds.
	setTimeout(show, 2000);
}

//Pick a location, move Mars there, and show it.
function show()
{
	var mars = document.getElementById('mars');
	moveRandom(mars);
	showElement(mars);
}

//Moves an element to a random location and sets its positioning to absolute.
function moveRandom(element)
{
	//Determine how much space we have.
	var maxLeftPosition = window.innerWidth - element.width;
	var maxTopPosition = window.innerHeight - element.height;
	var newLeftPosition = Math.random() * maxLeftPosition;
	var newTopPosition = Math.random() * maxTopPosition;
	element.style.position='absolute';
	element.style.left = newLeftPosition + 'px';
	element.style.top = newTopPosition + 'px';
}

//Hides an element.
function hideElement(element)
{
	element.style.display='none';
}

function showElement(element)
{
	element.style.display='';
}
