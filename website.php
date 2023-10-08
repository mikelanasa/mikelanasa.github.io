<?php
// website.php - Website Landing Page

// Start Session, Set session variables
include('utility/session.php');				// Start Sessions

// Common Variables, Functions
include('varaibles/global_variables.php');		// Variable Declarations 
include('functions/functions.php');  			// Function Library
include('utility/mysqli_connect.php'); 					// Connect to Database

// Variables
$online 	= TRUE;					// Set to FALSE to bring website down
$landing 	= TRUE;					// Set variable for page authentication

// Get Input
if (isset($_GET['p']))				$p = $_GET['p'];
$page =  "pages/$p.php";
$title = "$p";

if (array_key_exists($title, $pages)) {
	// Display the corresponding value
	$title = $pages[$title];
} else {
	// Handle the case where there is no match
	echo "No match found for '$title'";
}

if (!file_exists($page))			$page = 'pages/home.php';
if (!$online)						$page = 'components/offline.php';

// Output Page
include('components/header.php');	 			// Page Header 
include('components/navbar.php');				// Navigation Bar
echo "<table class='content' align='center' width='$width' style='$page_style'><tr><td>\n";
include($page);									// Page Content
echo "</td></tr></table>";
include('components/footer.php');				// Page Footer
