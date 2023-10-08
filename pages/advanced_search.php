<?php
// page5.php - Page 4

// Verify that program was called from Landing Page
require('landing.php');

?>

<!-- <head>

Author: Laura Bauer
Date:   September 25, 2023
BCS 430W Senior Project
Filename: rw_filterPage.html

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale="1">
<title>RecipeWorks</title>
<link href="rw_reset.css" rel="stylesheet">
<link href="styles/rw_styles.css" rel="stylesheet">
<link href="styles/rw_forms.css" rel="stylesheet">
<script src="rw_formsubmit.js"></script>
</head> 

 <body>
<header>
<img src="images/rw_logo2.png" alt="RecipeWorks" id="logoimg">
</header> -->

<div style="margin-left:10px;min-height:70vh;">
  <h2 style="font-size: 1.75em;text-decoration:underline;"><i>Use the filters below to find your perfect recipe!</i></h2>
  <form action="website.php?p=advanced_search" method="GET" onsubmit='return false'> <!-- EDIT ONSUBMIT BEFORE ATTEMPTING TO SUBMIT FORM -->
    <table>
      <tr>
        <td>
          <label for="MealType">Meal Type :</label>
        </td>
        <td>
          <select name='MealType' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($mealTypeOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="Cuisine">Cuisine :</label>
        </td>
        <td>
          <select name='Cuisine' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($cuisineOptions); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="MainIngredient">Main Ingredient:</label>
        </td>
        <td>
          <select name='MainIngredient' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($mainIngredients); ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <label for="Time">Time:</label>
        </td>
        <td>
          <select name='Time' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($timeOptions); ?>
          </select>
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

      <tr>
        <td>
          <label for="AllergenFree">Allergen Free:</label>
        </td>
        <td>
          <select name='AllergenFree' size='1' style='<?php echo $input_spacer; ?>'>
            <?php loopSelectOptions($allergenOptions); ?>
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

    </table>

    <div style="margin:5vh 0vh;">
      <input type="text" name="text" class="search" placeholder="Search Keyword">
      <!-- <input type="submit" name="submitSearch" value="Search"> -->
      <button onclick='search()'>Search</button>
    </div>

  </form>
</div>

<script>
  function search() {
    window.alert("Under Construction");
  }
</script>

<!-- <footer>
<h1>CUSTOMER SERVICE</h1>
<a href="#">Email Us</a> <a href="#">FAQs</a>
<br><br>

<h1>MY ACCOUNT</h1>
<a href="#">Create an Account</a> <a href="#">Sign In</a>
<br><br>

<h1>POLICIES</h1>
<a href="#">Privacy Policy</a> <a href="#">Terms of Use</a>
<br><br><br><br><br><br><br><br>
<h1>ADDRESS</h1>RecipeWorks
<br>1000 Melville Road
<br>Farmingdale, NY 11735
<br>(631) 555-1212
</footer>
</body> -->