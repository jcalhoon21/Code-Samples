<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Assignment 3</title>
<link rel="stylesheet" type="text/css" href="css/KingLib_3.css" />
</head>

<body>

<div id="logo">
<a href="assignment_3_register.php"><img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" height="84" width="800" align="left" /></a><br />
</div>


<div id="patron">
<table border="1">
<tr>
	<th>Last Name</th>
    <th>First Name</th>
    <th>Email</th>
    <th>Birth Year</th>
    <th>City</th>
</tr>

<?php


		$filename = 'data/'.'patrons.txt';

$display = "";
$line_ctr = 0;

$fp = fopen($filename, 'r');   //opens the file for reading

while(true)
{
	$line = fgets($fp);

	if (feof($fp))
	{
		break;
	}

	$line_ctr++;

	$line_ctr_remainder = $line_ctr % 2;

	if ($line_ctr_remainder == 0)
	{
		$style = "style='background-color: #FFFFCC;'";
	} else {
		$style = "style='background-color: white;'";
	}

	list($LastName, $FirstName, $Email, $BirthYear, $ResidenceChoice) = explode('|', $line);

	$display .= "<tr $style>";
		$display .= "<td>".$LastName."</td>";
		$display .= "<td>".$FirstName."</td>";
		$display .= "<td>".$Email."</td>";
		$display .= "<td>".$BirthYear."</td>";
		$display .= "<td>".$ResidenceChoice."</td>";
	$display .= "</tr>\n";  //added newline
}

fclose($fp);

print $display;   //This prints the table rows
?>
</table>
</div>
</body>
</html>