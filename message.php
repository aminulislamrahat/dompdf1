<?php
	session_start();
	require_once("connect.php");
?>

<!doctype html>
<html>
<head>
	<title> print to pdf </title>
</head>

<body>
	
	
	
	
	<div >
		<form method="POST" action="savedata_core.php">
			<table style="width:75%";>
				
				<tr>
					<td><label for="Text_message">Message : </label><br></td>
					<td></td>
					<td><textarea id="Text_message" name="Text_message" rows="4" cols="50"></textarea><br></td>
				</tr>
				
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="print" value="print"></td>
					
				</tr>
			</table>
		</form>
	</div>
	
	
		
	
		
	
	
	

</body>
</html>