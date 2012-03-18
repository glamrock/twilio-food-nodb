<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Say>Phil abundance is the best place to get updated information on food banks in the greater Philadelphia area. 215.339.0900.</Say>';
	}
	# @start snippet
	else if ($user_pushed == 2)
	{
		echo '<Gather action="handle-extension.php" numDigits="5">';
		echo "<Say>Please enter your five-digit zip code.</Say>";
		echo '</Gather>';
		echo "<Say>Sorry, I didn't get your response.</Say>";
		echo '<Redirect method="GET">handle-incoming-call.xml</Redirect>';
	}
	# @end snippet
	else {
		echo "<Say>Sorry, I didn't get that.</Say>";
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}

	echo '</Response>';
?>
