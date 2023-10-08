<?php
// page3.php - Page 3

// Verify that program was called from Landing Page and LOGON
require('landing.php');

$query = "SELECT * FROM recipe WHERE Creator = $suser";

$result = mysqli_query($mysqli, $query);

?>

<div style='<?php echo $flex_container ?>'>
	<div style='text-align:left;float:left;margin:10px;font-size:200%;'>
		Hello <?php echo $sname ?>
	</div>
</div>

<table style='width:100%;'>
	<tr>
		<td style='
				border-style:solid;
				border-width:1px;
				border-radius:4px;
				padding:10px 5px 5px 10px;
				display: flex; 
				flex-direction: column; 
				justify-content: space-between; 
				min-height: 25vh;
				min-width: 50vw;
				'>
			<?php echo $sdescription ?>
			<div style='text-align:right;'>
				<button onclick='editProfileDescription()'>Edit Profile</button>
			</div>
		</td>
		<td>
			<img style='border-radius:4px;height:25vh;' src='<?php echo "$pixdir/default_user.png"; ?>' />
			<div style='text-align:center;'>
				<button onclick='changeProfilePicture()'>Change Picture</button>
			</div>
		</td>
	</tr>
</table>

<div style='<?php echo $flex_container ?>'>
	<div style='width:70%;text-align:left;<?php echo $round_border ?>'>
		<table style='width:100%;'>
			<tr>
				<td style='text-decoration:underline;<?php echo $home_sub_hdr ?>'>
					<div style='display:flex;justify-content:space-between;align-items:center;'>
						Your Cookbook
						<div>
							<form action='<?php echo $pgm; ?>' id='addRecipe' method='GET'>
								<input type='text' name='p' value='add_recipe' style='display:none;'>
								<button type='submit' style='cursor:pointer'>Add Recipe</button>
							</form>
						</div>
					</div>
					<br>
				</td>
			</tr>
		</table>

		<table style='width:100%;'>
			<?php
			if (mysqli_num_rows($result) > 0) {
				$counter = 0;
				while ($row = mysqli_fetch_assoc($result)) {
					if ($counter % 2 == 0) {
						echo "<tr>"; // Start a new row for every even index
					}

					echo "<td style='width:50%;'>
							<div style=\"
								$round_border 
								$recipe_container
								background-image: url('$pixdir/{$row['RecipeImage']}');
								\">
								<div style='$round_border $recipe_title'>
									{$row['RecipeName']}
								</div>
								<div style='
											margin:10px;
											padding:5px;
											
											'>
									<img src='$pixdir/menu.png' 
									onclick='showRecipe()'
									style='$menu_burger'>
								</div>
							</div>
						</td>";

					if ($counter % 2 == 1 || $counter == mysqli_num_rows($result) - 1) {
						echo "</tr>"; // End the row for every odd index or at the last row
					}

					$counter++;
				}
			} else {
				echo "<tr>
						<td style='text-align:center;'>No recipes created yet. Get started by clicking Add Recipe!</td>
					</tr>";
			}
			?>
		</table>
	</div>
	<div style='width:30%;text-align:right;margin-left:5px;<?php echo $round_border ?>'>
		<table>
			<tr>
				<td style='<?php echo $home_sub_hdr ?> text-decoration:underline;'>
					Following
				</td>
			</tr>
		</table>
		<br>
		<table style='width:100%;'>
			<?php
			$counter = 0;
			foreach ($top_ten_users as $user) {
				$counter++;
				if ($counter > 5) {
					echo "<tr>
							<td style='text-align:center;'>
								<button onclick='seeAllFollowing()' style='margin-top:10px;'>See All</button>
							</td>
						</tr>";
					break;
				}
				echo "<tr>
						<td style='$round_border width:100%;'>
							<div>
								<img src='{$user['url']}' style='$round_border width:5vw;float:left;margin:4px;'>
								<div style='float:right;margin:5px 5px 0px 0px;'>
									<b>{$user['name']}</b><br>
									Recipes: {$user['recipes']}
								</div>
								<div style='clear: both;'></div>
							</div>
						</td>
					</tr>";
			}
			?>
		</table>
	</div>
</div>

<script>
	function editProfileDescription() {
		window.alert("Coming Soon");
	}

	function changeProfilePicture() {
		window.alert("Coming Soon");
	}

	function seeAllFollowing() {
		window.alert("Coming Soon");
	}

	function showRecipe() {
		window.alert("Coming Soon");
	}

	function forgotPW() {
		window.alert("Under Construction");
	}
</script>