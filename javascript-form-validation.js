var $ = function (id)
{
	return document.getElementById(id);
}

function validateItems()
{
	var firstName = $("firstname").value;
	var lastName = $("lastname").value;
	var email = $("email").value;
	var city = $("city").value;
	var donation = $("donation").value;
var array=[];


	var firstNameError = $("firstnameerror");
	var lastNameError = $("lastnameerror");
	var emailError = $("emailerror");
	var cityError = $("cityerror");
	var donationError = $("donationerror");


	if(firstName == "")
	{
		firstNameError.firstChild.nodeValue = "Enter First Name";
		$("firstnameerror").style.color = "red";
	} else {
		firstNameError.firstChild.nodeValue = "*";
		$("firstnameerror").style.color = "black";
		array.push(1);
	}

	if(lastName == "")
	{
		lastNameError.firstChild.nodeValue = "Enter Last Name";
		$("lastnameerror").style.color = "red";
	} else {
		lastNameError.firstChild.nodeValue = "*";
		$("lastnameerror").style.color = "black";
		array.push(1);
	}

	if(email == "")
	{
		emailError.firstChild.nodeValue = "Enter Email";
		$("emailerror").style.color = "red";
	} else {
		emailError.firstChild.nodeValue = "*";
		$("emailerror").style.color = "black";
		array.push(1);
	}

	if(city == "-")
	{
		cityError.firstChild.nodeValue = "Select a City from the list";
		$("cityerror").style.color = "red";
	} else {
		cityError.firstChild.nodeValue = "*";
		$("cityerror").style.color = "black";
		array.push(1);
	}

	if(donation == "")
	{
		donationError.firstChild.nodeValue = "Enter Donation Amount"
		$("donationerror").style.color = "red";
	} else if(isNaN(donation))
	{
		donationError.firstChild.nodeValue = "Amount must be numeric";
		$("donationerror").style.color = "red";
	} else
	{
			donationError.firstChild.nodeValue = "*";
			$("donationerror").style.color = "black";
			array.push(1);
	}

console.log(array.length);
var allValidValues = array.length;
	if(allValidValues == 5)
	{
		return true;
	} else
	{
		return false;
	}
	console.log(allValidValues);



}

// reset the form
function clearFields() {

    var inputs = document.getElementsByTagName("input");
 
    for(var i = 0; i < inputs.length; i++) {
 
        if(inputs[i].type == "text") 
		{
            inputs[i].value = "";	
        }
    }

  
	
	$("firstnameerror").firstChild.nodeValue = "*";
		$("firstnameerror").style.color = "black";
		
	$("lastnameerror").firstChild.nodeValue = "*";
		$("lastnameerror").style.color = "black";
	
	$("emailerror").firstChild.nodeValue = "*";
		$("emailerror").style.color = "black";
		
	$("cityerror").firstChild.nodeValue = "*";
		$("cityerror").style.color = "black";
			$("city").value = "-";
			
	$("donationerror").firstChild.nodeValue = "*";
		$("donationerror").style.color = "black";
		
	$("endmessage").firstChild.nodeValue = "";

}

window.onload=function(){
	$("addpatron").onclick = addPatron;
    
    // add click listener to clearfields button
    $("clearfields").onclick = clearFields;

}
//document.getElementById("addpatron").onclick = addPatron;

function addPatron()
{
	var isValid = validateItems();
	console.log(isValid);

	if(isValid == true){
			$('myform').submit();
	} else if(isValid == false){
		$("endmessage").firstChild.nodeValue = "Patron Not Added!";
		$("endmessage").style.color = "red";
	}
}
