<?php
// home.php - Home Page
// Verify that program was called from xx.php
require('landing.php');

$query = "SELECT * FROM recipe ORDER BY RecipeID LIMIT 10";
// change to order by likes
$result = mysqli_query($mysqli, $query);

?>
<div style='<?php echo $flex_container; ?>justify-content:center'>
	<div style='text-align:center;'>
		<br>
		<b>Welcome <?php echo $sname; ?>!</b>
		<br>
		<i><?php echo $desc_long; ?></i>
		<br>
		<br>
	</div>
</div>

<div style='<?php echo $flex_container; ?>'>
	<div style='width:70%;text-align:left;<?php echo $round_border; ?>'>
		<table>
			<tr>
				<td style='text-decoration:underline;<?php echo $home_sub_hdr; ?>'>
					Top 10 Recipes
				</td>
			</tr>
		</table>
		<br>
		<table style='width:100%;'>
			<?php
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
			?>
		</table>
	</div>
	<div style='width:30%;text-align:right;margin-left:5px;<?php echo $round_border; ?>'>
		<table>
			<tr>
				<td style='<?php echo $home_sub_hdr; ?>text-decoration:underline;'>
					Top 10 Users
				</td>
			</tr>
		</table>
		<br>
		<table style='width:100%;'>
			<?php
			foreach ($top_ten_users as $user) {
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
	function showRecipe() {
		window.alert("Coming Soon");
	}
</script>