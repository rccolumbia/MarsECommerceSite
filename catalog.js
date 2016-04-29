function ValidateInput()
{
	var usernameAcceptable= ValidateName(document.getElementById('name').value);
	var ageAcceptable= ValidateAge(document.getElementById('age').value);
	var selectionAcceptable = ValidateSelection();
	if (usernameAcceptable && ageAcceptable && selectionAcceptable)
	{
		alert('Thank you.  Your order has been placed.');
		return true;
	}
	else
	{
		return false;
	}
}

function ValidateSelection()
{
	//Check poster globe princess observatory ticket
	if ((document.getElementById('poster').checked)
		|| (document.getElementById('globe').checked)
		|| (document.getElementById('princess').checked)
		|| (document.getElementById('observatory').checked)
		|| (document.getElementById('ticket').checked)
		)
		{
			return true;
		}
		else
		{
			alert('You must choose a product.');
			return false;
		}
}

//Check if a Name input is acceptable.
function ValidateName(userInput)
{
	//Accept any string other than empty string.
	if (userInput.length > 0)
	{
		return true;
	}
	else
	{
		alert('You must enter a name.');
		return false;
	}
}
//Check if an Age input is acceptable.
function ValidateAge(userInput)
{
	if (!(IsWholeNumber(userInput)))
	{
		alert('Age must be a whole number between 18 and 110.  You did not enter a whole number.');
		return false;
	}
	if (userInput.length > 3)
	{
		alert('Age must be a whole number between 18 and 110.  You entered a number with more than three digits.');
		return false;
	}
	//We have checked to confirm that the user's input consists solely of digits and that it is three or less in length.  This should be safe to parse to int.
	var parsedInt = parseInt(userInput);
	if ((parsedInt < 18) || (parsedInt > 110))
	{
		alert('Age must be a whole number between 18 and 110.  You entered a number that was less than 18 or greater than 110.');
		return false;
	}
	//Success.
	return true;
}
//Determines if userInput represents a whole number.
function IsWholeNumber(userInput)
{
	var regex = /^[0-9]+$/;
	return regex.test(userInput);
}