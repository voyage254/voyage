<?php
		include('dbcon.php');
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];
		/* student */
			$query = $conn->query("SELECT * FROM members WHERE email='$email' AND password='$password'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['member_id'];
		echo 'true';	
		}else{ 
				echo 'false';
		}	
				
		?>