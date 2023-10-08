<?php
// variables.php - Common Website Variables

// Set Default PHP Options
date_default_timezone_set('America/New_York');
error_reporting(E_ALL);

// Variables
$p 					= 'home';							// Page to include for content
$pgm				= 'website.php';					// Landing Page
$width 				= '1024';							// Page width
$pixdir 			= 'images';							// Image directory
$domain				= 'recipeworks.com';				// Domain Name
$sitename			= 'RecipeWorks';					// Website Name	
$webmaster 			= 'Mike LaNasa';					// Webmaster Name
$email				= "webmaster@$domain";				// Webmaster Email
$desc_short			= 'RecipeWorks';					// Short Website Description
$desc_long			= 'Check out today`s Top 10:';		// Long Website Description 
$year				= date('Y');						// Current Year	
$logo				= 'logo.jpg';						// Logo image filename 

// MySQL Database
$myserver			= 'localhost';
$myuserid			= 'root';
$mypassword			= NULL;
$mydatabase			= 'recipeworks';

// Navbar Variables
$pages				= array(
	// ADD NEW PAGES HERE
	'search_recipe'		=> 'Search Recipe',
	'add_recipe'    	=> 'Add Recipe',
	'logoff'			=> 'Log Off',
	'register'			=> 'Register',
	// DO NOT TOUCH LAST 5 ITEMS
	'home'				=> 'Home',
	'logon'				=> 'Log In',
	'check_profile'		=> 'My Profile',
	'about' 			=> 'About',
	'advanced_search' 	=> 'Advanced Search',
	// ADD ANY NEW PAGES TO THE START OF THE ARRAY
);
$restricted 		= array(NULL);
$role_reqrd			= array(NULL);
$role_name			= array(NULL);
$nb_text_color		= 'red';
$nb_text_color2		= 'yellow';
$nav_style			= 'color:white;   
						   background-color:white;     
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;';

// Page Styles	
$body 				= 'background-image: url("images/background.jpg");';
$pic_border			= 'border-radius:  10px 10px 10px 10px;';
$pg_color			= 'white';													// Default page text color
$pg_bgcolor			= '#EF6C00';												// Default page text background color
$page_style			= "color:$pg_color;
						   background-color:$pg_bgcolor;
						   font-size:100%; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;";

// Header
$hdr_style			= "color:white;   
						   background-color:#EF6C00;    
						   font-size:200%;  
						   font-weight:bold; 
						   font-style:italic;
						   font-family:Arial,Helvetica;
						   text-align: left;
						   border-radius: 10px 0px 0px 0px;";
$hdr_style2			= "color:white;  
						   background-color:#EF6C00;    
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica;
						   text-align: right;
						   padding-right: 10px;
						   padding-bottom: 5px;
						   vertical-align: bottom;
						   border-radius: 0px 10px 0px 0px;";
$hdr_style3			= "color:black;  
						   background-color:yellow;    
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";
$logo_style			= "margin:10px 10px 0px 10px; 
							border-radius:50%; 
							width:50px; 
							height:50px;";

// Footer	
$footer				= "&copy; $year - $desc_short";								// Footer Message	
$ftr_color			= 'black';													// Footer Text Color
$ftr_bgcolor		= 'grey';													// Footer Backbround Color
$ftr_style			= "color:$ftr_color; 
						   background-color:$ftr_bgcolor; 
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;
						   border-radius: 0px 0px 10px 10px;";
// New Vars
$round_border 		= "border-style:solid;
							border-width:1px;
							border-radius:4px;";
$flex_container		= 	"display: flex;";
						//justify-content: center;";

// Home
$home_sub_hdr		= 	"font-size:150%;  
							font-weight:bold; 
							font-style:italic;";
$recipe_container	= 	"height: 25vh;
							background-size: cover;
							display: flex; 
							flex-direction: row; 
							justify-content: space-between;";
$recipe_title		= 	"overflow-wrap:break-word;
							width:auto;
							height: fit-content;
							color:black;
							background-color:#E0E0E0;
							text-align:left;
							margin:10px;
							padding:5px;";
$menu_burger		= 	"border-style:solid;
							border-width:1px;
							border-radius:6px;
							color:black;
							width:1.5vw;
							height:3vh;
							cursor:pointer;";
$top_ten_users		= [
	['name' => "Larry Schmitt", 'url' => "$pixdir/default_user.png", 'recipes' => "6"],
	['name' => "Claudette Mayo", 'url' => "$pixdir/default_user.png", 'recipes' => "5"],
	['name' => "Rae Gallegos", 'url' => "$pixdir/default_user.png", 'recipes' => "7"],
	['name' => "Antione Charles", 'url' => "$pixdir/default_user.png", 'recipes' => "12"],
	['name' => "Roderick Floyd", 'url' => "$pixdir/default_user.png", 'recipes' => "6"],
	['name' => "Cleo Moyer", 'url' => "$pixdir/default_user.png", 'recipes' => "7"],
	['name' => "Emmett Carr", 'url' => "$pixdir/default_user.png", 'recipes' => "8"],
	['name' => "Raleigh Watson", 'url' => "$pixdir/default_user.png", 'recipes' => "5"],
	['name' => "Joan Russo", 'url' => "$pixdir/default_user.png", 'recipes' => "4"],
	['name' => "Saul Ferguson", 'url' => "$pixdir/default_user.png", 'recipes' => "3"],
];

// Developer Info
$s_domain 			= "@farmingdale.edu";
$developers 		= [
	['name' => "Laura Bauer", 'email' => "BAUEL$s_domain"],
	['name' => "Irem Gungormez", 'email' => "GUNGI$s_domain"],
	['name' => "Michael LaNasa", 'email' => "LANAMD$s_domain"],
	['name' => "Priyal Patel", 'email' => "PATEPY$s_domain"],
	['name' => "Leona Zavala", 'email' => "ZAVALM$s_domain"],
];

// Add Recipe Page Variables 
$input_spacer   = "margin-top:10px;";

$mealTypeOptions = [
	"Breakfast",
	"Lunch",
	"Dinner",
	"Snack",
	"Dessert",
	"Beverage",
	"Sides/Appetizers",
	"Salad",
	"Soup",
];

$cuisineOptions = [
	"None/Unknown",
	"African",
	"Asian",
	"Australian",
	"European",
	"North American",
	"South American",
	"US Regional",
	"Brazilian",
	"British",
	"Cuban",
	"Chinese",
	"Ethiopian",
	"French",
	"German",
	"Greek",
	"Hispanic",
	"Indian",
	"Irish",
	"Italian",
	"Jamaican",
	"Korean",
	"Mediterranean",
	"Mexican",
	"Polish",
	"Portuguese",
	"Puerto Rican",
	"Spanish",
	"Thai",
	"Vietnamese",
	"Fusion Food",
	"Other",
];

$occasionOptions = [
	"None/Unknown",
	"Arbor Day",
	"Anniversary",
	"Bat Mitzvah",
	"BBQ",
	"Chinese New Year",
	"Christmas",
	"Dilwali",
	"Easter",
	"Eid",
	"Enagagement",
	"Father's Day",
	"Funeral",
	"Get Well Soon",
	"Graduation",
	"Halloween",
	"Hanukkah",
	"Housewarming",
	"Kid's Birthday",
	"Kwanza",
	"Mother's Day",
	"New Years",
	"Passover",
	"Pregnancy",
	"Quinceanera",
	"Ramadan",
	"St. Patrick's Day",
	"Super Bowl",
	"Tailgating",
	"Thanksgiving",
	"Valentines Day",
	"Veteran's Day",
	"Wedding",
	"4th of July",
	"21st Birthday"
];

$dietOptions = [
	"None/Unknown",
	"Halal",
	"Keto",
	"Kosher",
	"Low FODMAP",
	"Paleo",
	"Pescatarian",
	"Soft Foods",
	"Vegan",
	"Vegetarian",
];

$spiceLevels = [
	"0 none",
	"1 mild",
	"2 mild",
	"3 mild",
	"4 medium",
	"5 medium",
	"6 hot",
	"7 hot",
	"8 very hot",
	"9 very hot",
	"10 extreme",
];

$allergenOptions = [
	"Eggs",
	"Milk/Dairy",
	"Tree Nuts",
	"Sesame",
	"Shellfish",
	"Gluten",
	"Other",
];

// Advanced Search Page Variables
$mainIngredients = [
    "Poultry",
    "Beef",
    "Pork",
    "Noodles",
    "Fish",
    "Lamb",
    "Sausages",
    "Seafood",
    "Plant Based Protein",
    "Fruit",
    "Vegetable",
    "Japanese",
    "Beans",
    "Pasta",
    "Rice and Grain",
    "Portuguese",
    "Puerto Rican",
    "Nuts and Seeds",
    "Eggs, Cheese, & Milk"
];

$timeOptions = [
	"Under 10 Minutes",
	"10 Minutes",
	"20 Minutes",
	"30 Minutes",
	"60 Minutes",
	"Over 60 Minutes"
];

// Search Recipe Page Variables
$search_img_container = "height:25vh;
							width:25vw;
							border-radius:4px;
							margin:5px;";
