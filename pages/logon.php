<?PHP
// logon.php - Website Logon

// Verify that program was called from xx.php
require('landing.php');

// Variables  
$msg = NULL;			// Error Message

// Get Form Input  
if (isset($_POST['logon'])) {
	$userid = trim($_POST['userid']);
	$pword = trim($_POST['password']);
	if ($userid == NULL) 			$msg = "USERID is missing";
	if ($pword == NULL) 			$msg = "PASSWORD is missing";
	if (($userid == NULL) and ($pword == NULL)) $msg = "USERID & PASSWORD are missing";
	if ($msg == NULL) {

		// Bypass Verify USERID/PASSWORD against table
		if ($userid == 'bypass') {
			$id 			= 1;
			$firstname 		= 'Test';
			$lastname 		=  'User';
			$password		= $pword;
			$role			= 'Member';
			$description 	= 'Test';
		}
		// Verify USERID/PASSWORD against table
		else {
			$query = "SELECT id, firstname, lastname, password, role, description FROM users WHERE userid='$userid'";
			$result = mysqli_query($mysqli, $query);
			if (!$result) echo "Error accessing User Table " . mysqli_error($mysqli);
			if (mysqli_num_rows($result) > 0) {
				list($id, $firstname, $lastname, $password, $role, $description) = mysqli_fetch_row($result);
			} else $msg = "USERID is invalid";
		}
		if (($msg == NULL) and ($pword == $password)) {
			$_SESSION['user'] = $id;
			$_SESSION['name'] = $name = "$firstname $lastname";
			$_SESSION['role'] = $role;
			$_SESSION['description'] = ($description !== null && $description !== '') ? $description : 'Add a user bio here!';
			$logon = TRUE;
			$msg = "<font color='green'><b>$name Logon Successful!</b></font>";
			$location = 'location: website.php?p=check_profile';
			header($location);
			exit;
		} else $msg = "Invalid Password";
	}
}

// Logon Screen
$td = "width='20%' align='right'";
$tf = "width='80%' align='left'";
if ($msg == NULL)  	$msg = "Log in or register to access more features!";
else if ($logon == FALSE) $msg = "$msg, please try again";
echo "<form action='website.php?p=logon' method='post'>\n
		  <table width='1014' align='center' cellspacing='5' class='text'>
		  <tr><td $td>&nbsp;	</td><td $td>&nbsp;</td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf><b>$sitename Logon</b></td></tr>
		  <tr><td $td>&nbsp;	</td><td $td>&nbsp;</td></tr>
		  <tr><td $td>User ID	</td><td $tf><input type='text' name='userid' size='60' maxlength='80' value=''></td></tr>
		  <tr><td $td>Password	</td><td $tf><input type='password' name='password' size='12' maxlength='12' value=''></td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf>&nbsp;</td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf><input type='submit' name='logon'    value='Log In' style='background-color:lightgreen;font-weight:bold;cursor:pointer'>
		  									<button style='background-color: lightblue; font-weight: bold; color: black;'>
												<a href='website.php?p=register' style='color: inherit; text-decoration: none;'>Register</a>
											</button>
											<a onclick='forgotPW()' class='light-hover' style='cursor:pointer;'>Forgot Password?</a></td></tr>\n
		  <tr><td $td>&nbsp;	</td><td $tf>&nbsp;</td></tr>
		  <tr><td $td>			</td><td $tf><b>$msg<b></td></tr>\n
		  </table>\n
		  </form>\n";

?>

<script>
	function forgotPW() {
		window.alert("Under Construction");
	}
</script>