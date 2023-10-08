<?php
// page3.php - Page 3

// Verify that program was called from Landing Page and LOGON
	require('landing.php');

	if(!$logon) {		
		include("guest_profile.php");
	}
	else {
        include("my_profile.php");
	}

?>