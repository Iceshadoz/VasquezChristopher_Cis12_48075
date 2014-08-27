<?PHP
	/*
		Christopher Vasquez
		August 27th, 2014
		Pupose: Comments/Variables/Strings
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings and Variables</title>
</head>

<body>
	<?PHP
		// Declare Variables
		$hours=40; // Worked 40 hours
		$payrate=9; // 9* s/hours
		//Calculate The Paycheck
		$grossPay=$hours*$payrate; 
		//Output the result
		echo "<p>Hours worked = $hours (hrs) </p>" ;
		echo '<p>Pay Rate = $$payrate </p> ';
		echo "<P>Pay Check =  $".$grossPay. ' </P>' ;
	?>
</body>
</html>