<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 0)
	{
		echo '<Say>Taking you back to the main menu</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 19104)
	{
		echo '<Say>Your nearest food bank is St. Marys food pantry is located at 38th and Spruce. 215.555.1234.</Say>';
	}
	# @end snippet
	else if ($user_pushed == 19143)
	{
		echo '<Say>Philabundance can give more information about this area. 215.339.0900. </Say>';
	}
	else {
		echo "<Say>Sorry, we don't recognize that zip code. Please try again or call Philabundance at 215.339.0900.</Say>";
		echo '<Redirect method="GET">handle-user-input.php</Redirect>';
	}

	echo '</Response>';
?>
