<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Assignment 3_ADD PATRON</title>
<link rel="stylesheet" type="text/css" href="css/KingLib_3.css" />
</head>

<body>

<div id="logo">
<a href="assignment_3_register.php"><img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" height="84" width="800" align="left" /></a><br />
</div>


<div id="patron">
<?php




$filename = 'data/'.'patrons.txt';
	
	$FirstName = $_POST['firstname'];

$LastName = $_POST['lastname'];

$Email = $_POST['email'];

$BirthYear = $_POST['birthyear'];

$ResidenceChoice = $_POST['residencechoice'];

$FullName = $FirstName.' '.$LastName;

$current_year = date('Y');

$length_of_year = strlen($BirthYear);

$errorFoundFlag = 'N';



if ($errorFoundFlag = 'Y')
{
	if (empty($FirstName))
	{
	print "<br>Error: You must enter a First Name";
	}
	
	if (empty($LastName))
	{
		print "<br>Error: You must enter a Last Name";
	}

	if (empty($Email))
	{
		print "<br>Error: You must enter your email";
	}

	if (empty($BirthYear))
	{
		print "<br>Error: You must enter your Birth Year";
	} else if(!is_numeric($BirthYear)) {
		print "<br><br>Error: Your Birth Year must be numeric";
	} elseif ($length_of_year != 4){
		print "<br><br>Error: Your Birth Year must be exaclty four numbers";			
	}

	if ($ResidenceChoice == '-')
	{
		print "<br>Error: You must select a City";
		print "<br><br>Go BACK and make corrections";
		exit;
	}
}



if($errorFoundFlag = 'N')
{
	
//***************************************
//Add Name Information to File
//***************************************

$fp = fopen($filename, 'a');   //opens the file for appending

$output_line = $LastName.'|'.$FirstName.'|'.$Email.'|'.$BirthYear.'|'.$ResidenceChoice.'|'."\n";

fwrite($fp, $output_line);

fclose($fp);

	
	print "<p>Thank You for Registering!</p>";
	print "<p>Name: $FullName</p>";
	print "<p>Email: $Email</p>";
	print "<p>City: $ResidenceChoice</p>";
	if (($current_year - $BirthYear) < 15){
		print "<p>Section: Children</p>";
	} else if (($current_year - $BirthYear) > 16 && ($current_year - $BirthYear) < 56) {
		print "<p>Section: Adult</p>";
	} else if (($current_year - $BirthYear) > 55) {
		print "<p>Section: Senior</p>";
	}
	print "<p>For Admin Use Only: <a href=\"assignment_3_view_patrons.php\">View Patrons</a></p>";
}
?>

</div>
</body>
</html>