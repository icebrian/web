<?php
	
require_once('./connect.php');

$query = "SELECT name, email, message FROM form1";

$response = mysqli_query($dbc, $query);

if($response) {
	
	echo '<table align="left"
	cellspacing ="5" cellpadding="8">
	
	<tr>
	<td align="left"><b>Name:</b></td>
	<td align="left"><b>Email:</b></td>
	<td align="left"><b>Message</b></td>
	</tr>';
	
	while($row = mysqli_fetch_array($response)) {
		
		echo '<tr><td aligh=left">' .
		$row['name'] . '</td><td align="left">' .
		$row['email'] . '</td><td align="left">' .
		$row['message'] . '</td><td align="left">' ;
		
		echo '</tr>';
	}
	
	echo '</table>';
	
} else {
	
	echo "Could not issue databse query";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);
	
?>
