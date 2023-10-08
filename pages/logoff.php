<?PHP
// logoff.php - Website Logoff

// Verify that program was called from Landing Page
	require('landing.php');

// Logoff by unsetting session variables  
	if (!$logon) $sname = "Guest";  
	session_unset();
	$logon = FALSE;
 
// LOGOFF SCREEN
  echo "<table width='1014' align='center' cellspacing='5' class='text'>
		<tr><td>&nbsp;</td></tr>
		<tr><td align='center'><b><font size='+2'>$sname Logged Off</font></b></td></tr>
		<tr><td align='center'><a href='$pgm?p=logon'>Return to Log In</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		</table>\n";
?>