<html>
<head>
<title>nepeters form</title>
</head>
<body>
<?php
	
if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['name'])){
		
		$data_missing[] = 'name';
	} else {
		
		$name = trim($_POST['name']);
	}
	
	if(empty($_POST['email'])){
		
		$data_missing[] = 'email';
	} else {
		
		$email = trim($_POST['email']);
	}
	
	if(empty($_POST['message'])){
		
		$data_missing[] = 'message';
	} else {
		
		$message = trim($_POST['message']);
	}
	
	if(empty($data_missing)){
		
		require_once('./connect.php');
		
		$query = "INSERT INTO nepetersForm (name, email, message) VALUES (?,?,?)";
		$stmt = mysqli_prepare($dbc, $query);
		
		if ($stmt === FALSE) {
			
			die(mysqli_error($dbc)); 
		} 
		
		mysqli_stmt_bind_param($stmt, "sss", $name,$email,$message);
		mysqli_stmt_execute($stmt);
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		If ($affected_rows == 1) {
			
			mysqli_stmt_close($stmt);
			
			mysqli_close($dbc);
		} else {
			
			echo 'Error Occoured<br />';
			echo mysqli_error();
			
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		}
	} else {
		
		echo "Data Missing";
	}
}				
				
?>
</body>
</html>	