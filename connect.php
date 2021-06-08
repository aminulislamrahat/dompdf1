	<?php
		
	
		// data base connection 
		$Host = "localhost";
		$DbUser = "root";
		$DbPass = "";
		$DbName = "dompdf";
		
		$connect = mysqli_connect ($Host,$DbUser,$DbPass,$DbName);
		if ($connect == false)
		{
			echo "something is wrong in database connection";
		}
		
	
	?>