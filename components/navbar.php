<?php
// navbar.php - Navigation Bar

// Variables
	$td_width = floor($width/(count($pages)+1)); 

// Output	
	echo "<table width='$width' align='center' style='$nav_style' rules='all' cellpadding='0' cellspacing='0'>\n
		  <tr>\n";

	$pagesCount = count($pages);
	$excludeCount = $pagesCount - 5;
		  
	foreach($pages as $key => $value) {
		if ($excludeCount > 0) {
			$excludeCount--;
			continue; // Skip the current iteration
		}
		if (($key == 'logon') AND ($logon))	$key = $value = 'logoff';		// If Logon Page and Logged On, Make it the Logoff Page
		
// Check conditions to show page as an active link or not		
		$active = TRUE;
		if (!$online)		$active = FALSE;
		if ($p == $key)		$active = FALSE;
		// if ($key == 'logoff' || $key == 'register') $active = FALSE;
		if (array_key_exists($key, $restricted) AND (!$logon)) $active = FALSE;
		if (array_key_exists($key, $role_reqrd) AND ($role != $role_name)) $active = FALSE;
		
// Output
		$pagey = ucwords(strtr($value, array('_' => ' ')));
		if ($active) echo "<td align='center' width='$td_width' style='border-width:0px;'><a href='$pgm?p=$key'>$pagey</a></td>\n";
		else {
			if ($p == $key) $color = $nb_text_color; else $color = $nb_text_color2;
				echo "<td align='center' width='$td_width' style='color:$color;border-width:0px;'>$pagey</td>\n";
			}
		}
	
	echo "<td align='center' width='$td_width' style='border-top: 1px solid black;border-bottom: 1px solid black;'>
			<form action='$pgm' id='searchForm' method='GET' onsubmit='return validateForm()'>
				<div style='display: inline-flex; align-items: center;'>
				<input type='text' name='p' value='search_recipe' style='display: none;'>
				<input type='text' id='searchName' name='searchName' style='margin:5px 5px;'>
				<button type='submit' style='cursor:pointer'>Search</button>
				</div>
			</form>
		</td>\n";

	echo '</tr></table>';
?>

<script>
function validateForm() {
            var searchName = document.getElementById('searchName').value;
            if (searchName.trim() === '') {
                alert('Search bar cannot be empty');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
</script>