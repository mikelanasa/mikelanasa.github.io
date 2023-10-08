<?php
// session.php - Check for Logon and Load Session Variables

  session_start();
  
  if (isset($_SESSION['user'])) {
    $logon 			= TRUE;
	$sname 			= $_SESSION['name'];
	$suser 			= $_SESSION['user'];
	$srole 			= $_SESSION['role']; 
	$sdescription 	= $_SESSION['description'];
	}
	
	else {
	  $logon = FALSE;
	  $sname = $suser = 'Guest';
	  $srole = 'Public';
	  }
?>