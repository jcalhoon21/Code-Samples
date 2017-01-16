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
<p>Please sign up</p>

<form method="post" action="assignment_3_add_patron.php">

<p>
		First Name:<br />
		<input type="text" name="firstname" size="30" />
	</p>

	<p>
		Last Name:<br />
		<input type="text" name="lastname" size="30" />
	</p>
    
    <p>
    	Email:<br />
        <input type="text" name="email" size="40" />
   	</p>
    
    <p>
    	Birth Year:<br />
        <input type="text" name="birthyear" size="4" />
   	</p>
    
    <p>
    	City of Residence:<br />
        <select name="residencechoice" size="1">
        	<option value="-">-</option>
        	<?php
		$filename = 'data/'.'cities.txt';

		$lines_in_file = count(file($filename));

		$fp = fopen($filename, 'r');   //opens the file for reading

		for ($ii = 1; $ii <= $lines_in_file; $ii++)
		{
			$line = fgets($fp);  //Reads one line from the file
			$city = trim($line);

			print '<option value="'.$city.'">'.$city.'</option>';
		}

		fclose($fp);

	?>
       	</select>
    </p>
    <p>
      <input type="submit" value="Submit Information">
    </p>
</form>

<p>For Admin Use Only: <a href="assignment_3_view_patrons.php">View Patrons</a></p>





</body>
</html>
