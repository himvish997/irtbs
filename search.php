<?php
	$date=$_POST['date'];
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	
	// Delimiters may be slash, dot, or hyphen
	//$date = "04/30/1973";
	list($year, $month, $day) = split('[/.-]', $date);
	echo "Month: $month; Day: $day; Year: $year<br />\n";

?>