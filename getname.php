<?php
 session_start();


require 'dbconn.inc.php';
$email = $_SESSION['email'];

 // $sql = "SELECT email FROM usr WHERE email=?";
 $sql = "SELECT name FROM usr WHERE email=?";
 $stmt = mysqli_stmt_init($conn);

 if (!mysqli_stmt_prepare($stmt, $sql)){
	  header("Location: login.php?error=wrongusername");
	  echo "Cannot access database";
	  exit();
	  }
	  else {
		  mysqli_stmt_bind_param ($stmt, "s", $email);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_store_result($stmt);
		  $resultCheck = mysqli_stmt_num_rows($stmt);
		  
		  if ($resultCheck >= 1) {
				$_SESSION['login'] = "validated";
				$_SESSION['email'] = $email;
				$result = mysqli_stmt_get_result($stmt);
				$result_row =  mysqli_stmt_fetch($stmt);
			   	
				
				echo $result
				
				mysqli_stmt_close($stmt);
        
				$_SESSION['login'] = "validated";
				
				
			  
		  }
		  else {
			  
		  }

	  }


?>
