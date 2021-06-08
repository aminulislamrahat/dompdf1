	<?php
		session_start();
		require_once("connect.php");
		
		$Message = "";
		
		
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$Message = validity($_POST["Text_message"]);
			}
			function validity($data)
			{
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		

		$insertQuery = "INSERT INTO pdf (messages) VALUES ('$Message')";
		$runQuery = mysqli_query($connect,$insertQuery);
			if($runQuery == true)
			{
				header("location: message.php?action=true");
			}
			else
			{
				header("location: message.php?action=false");
			}	
		
	?>