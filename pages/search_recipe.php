<?php
$msg = "";
// Retrieve the searchName value from the form
if (isset($_GET['searchName']) && $_GET['searchName'] != '') {
    $searchName = $_GET['searchName'];

    $query = "SELECT * FROM recipe WHERE RecipeName LIKE '%$searchName%'";

    $result = mysqli_query($mysqli, $query);

    // Display the results
    if (mysqli_num_rows($result) > 0) {
        
        $msg .= "<div style='margin:0 5vw;'>";
        $msg .= "<h2 style='margin-bottom:0;'>You Searched: $searchName</h2>";
        $msg .= mysqli_num_rows($result) . " Results Found:<br><br>";
        foreach ($result as $row) {
            if(!$row['RecipeImage']) {
                $row['RecipeImage'] = "recipe_placeholder.png";
            }
            $query_ = "SELECT firstname, lastname FROM users WHERE id = {$row['Creator']}";
            $result_ = mysqli_query($mysqli, $query_);
            
            if ($result_) {
                list( $firstname, $lastname ) = mysqli_fetch_row($result_);
                $name = "$firstname $lastname";
            } else {
                $name = "Unknown User";
            }

            $msg .= "<div style='background-color:#33691E;$round_border'> 
                        <table>
                            <tr>
                            <td><img src='$pixdir/{$row['RecipeImage']}' style='$search_img_container'></td>
                            <td style='padding-left:1vw;line-height:1.5;'>
                                Recipe: {$row['RecipeName']}<br>
                                By: $name<br>
                                Meal Type: {$row['MealType']}<br>
                                Cuisine: {$row['Cuisine']}<br>
                                Cook Time: {$row['CookTime']} Minutes<br>
                                Spice Level: {$row['SpiceLevel']}<br>
                            </td>
                            </tr>
                        </table>
                    </div>";
            //$row['RecipeName']; // Display the result data
            $msg .= "<br>";
        }
        $msg .=  "</div>";
    } else {
        $msg = "<div style='display: flex; justify-content: center; align-items: center; padding: 20vh;'>
                    <div style='$round_border padding:10vh;background-color:#FF3D00;'>
                        No results found for '$searchName'
                    </div>
                </div>";
    }
} else {
    $msg = "How did you get here?";
}

?>

<?php echo $msg ?>
