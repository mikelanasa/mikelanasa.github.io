<?php
// add_recipe.php - Add Recipe

// Verify that program was called from Landing Page and LOGON
require('landing.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Retrieve and sanitize form data
  $recipeName = mysqli_real_escape_string($mysqli, $_POST['RecipeName']);
  $mealType = mysqli_real_escape_string($mysqli, $_POST['MealType']);
  $cuisine = mysqli_real_escape_string($mysqli, $_POST['Cuisine']);
  $occasion = mysqli_real_escape_string($mysqli, $_POST['Occasion']);
  $diet = mysqli_real_escape_string($mysqli, $_POST['Diet']);
  $cookTime = intval($_POST['CookTime']);
  $servings = intval($_POST['Servings']);
  $spiceLevel = intval($_POST['SpiceLevel']);
  $ingredients = mysqli_real_escape_string($mysqli, $_POST['Ingredients']);
  $instructions = mysqli_real_escape_string($mysqli, $_POST['Instructions']);
  $other = mysqli_real_escape_string($mysqli, $_POST['Other']);
  $allergens = isset($_POST['Allergens']) ? implode(", ", $_POST['Allergens']) : "";

  // Handle file upload
  $recipeImage = "";
  if ($_FILES['RecipeImage']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'images/';
    $uploadFile = $uploadDir . basename($_FILES['RecipeImage']['name']);
    if (move_uploaded_file($_FILES['RecipeImage']['tmp_name'], $uploadFile)) {
      // File uploaded successfully
      $recipeImage = basename($_FILES['RecipeImage']['name']);
    }
  }

  if(!$recipeImage) {
    $recipeImage = "recipe_placeholder.png";
  }

  // Insert data into the database
  $query = "INSERT INTO recipe 
    (RecipeName, MealType, Cuisine, Occasion, Diet,
    CookTime, Servings, SpiceLevel, Ingredients, 
    Instructions, Other, Allergens, RecipeImage, Creator)
    VALUES ('$recipeName', '$mealType', '$cuisine',
      '$occasion', '$diet', $cookTime, $servings, 
      $spiceLevel, '$ingredients', '$instructions',
      '$other', '$allergens', '$recipeImage', $suser)";

  $result = mysqli_query($mysqli, $query);

  if ($result) {
    // Success
    echo "Recipe added successfully!";
  } else {
    // Error
    echo "Error adding recipe: " . mysqli_error($mysqli);
  }
}

// Close the database connection
mysqli_close($mysqli);
?>

<style>
  h1 {
    /* color: #8EC470; */
    border: 0px solid black;
    font-size: 2.25em;
  }

  h2 {
    /* color: #8EC470; */
    border: 0px solid black;
    font-size: 1.75em;
    text-decoration: underline;
  }

  body {
    font-family: "Times New Roman", Times, serif;
    /* background-image: url("pinkpat.png");
    background: cream; */
  }

  p {
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 1 em;
    color: black;
    font-weight: bold;
  }
</style>

<div style="margin-left:10px;min-height:70vh;">
  <h2>Upload Your New Recipe</h2>
  <form action="website.php?p=add_recipe" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td> <label for="RecipeName">Recipe Name:</label> </td>
        <td><input type="text" name="RecipeName" required='required'><br></td>
      </tr>

      <!--make drop down selection in color green not blue and fix font 
  
   <p> 
    <label for=="Date">Date Created   :</label>
    <input type = "date" name = "Date" required='required'><br>
  </p> 
  
  https://wordcounter.net/alphabetize 
  -->
      <tr>
        <td>
          <label for="MealType">Meal Type:</label>
        </td>
        <td>
          <select name='MealType' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($mealTypeOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="Cuisine">Cuisine:</label>
        </td>
        <td>
          <select name='Cuisine' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($cuisineOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="Occasion">Occasion:</label>
        </td>
        <td>
          <select name='Occasion' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($occasionOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="Diet">Diet:</label>
        </td>
        <td>
          <select name='Diet' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($dietOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="CookTime">Cook Time:</label>
        </td>
        <td>
          <input type="number" id="CookTime" name="CookTime" min="0" max="180" step="5" value="10" style='<?php echo $input_spacer; ?>'> Minutes
        </td>
      </tr>

      <tr>
        <td>
          <label for="Servings">Servings:</label>
        </td>
        <td>
          <input type="number" id="Servings" name="Servings" min="0" max="100" step="1" value="4" style='<?php echo $input_spacer; ?>'> Adults
        </td>
      </tr>

      <tr>
        <td>
          <label for="SpiceLevel">Spice Level:</label>
        </td>
        <td>
          <select name='SpiceLevel' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($spiceLevels); ?>
          </select>
        </td>
      </tr>

    </table>

    <br>
    <div>
      <label for="Ingredients">Ingredients:</label><br>
      <textarea name="Ingredients" rows="5" cols="50"></textarea>
    </div>

    <br>
    <div>
      <label for="Instructions">Instructions:</label><br>
      <textarea name="Instructions" rows="10" cols="50"></textarea>
    </div>

    <br>
    <div>
      <label for="Other">Other:</label><br>
      <textarea name="Other" rows="3" cols="50"></textarea>
    </div>

    <br>
    <div>
      <label style="text-decoration:underline;">Allergens:</label><br>
      <?php
      foreach ($allergenOptions as $option) {
        echo "<input type='checkbox' name='Allergens[]' value='$option'>$option<br>";
      }
      ?>
    </div>

    <br>
    <div>
      <label for="RecipeImage">Upload Recipe Photo (JPG, GIF, PNG, or TIF File): </label><br>
      <input type='file' name='RecipeImage' size='20'>
    </div>

    <br>
    <input type="submit" name='submitRecipe' value='Submit Recipe'>

  </form>
</div>