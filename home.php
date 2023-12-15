<?php
/*
	Assignment Requirements:
	1.  Determine the names of the two new files (hint: const.php has this answer).
	2.  Create each of the new pages, ensuring that the user is logged in before allowing them to view the page.  
		Make sure that there is valid HTML on all execution paths (hint: there are two execution paths and only one path will show HTML, 
		the other path will redirect to the login form).
	3.  Update "account.php" to have hyperlinks to each of the other pages and to logout.php 
		(hint: the version that Prof has uploaded for this lab does not include a link to logout but it should.)  
		Note that there is no prescribed layout.
	4.  Validate execution paths on the files that Prof has provided to ensure that the provided code works and produces valid HTML.
*/
require_once("const.php");
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	$_SESSION['error'] = "You must login"; //display an error msg
  die(header("Location:" . PAGE_LOGIN));
}

print"<!doctype html>";
print"<html>";
print"<head>";
print"<link href='css/commonElements.css' rel='stylesheet'>";
print"<link href='css/quoteanimation.css' rel='stylesheet'>";
print"<meta charset='utf-8'>";
print"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
print"<title>PistachSecure-Home</title>";
print"</head>";
print"<body>";
//Adding nav section 
print"<header class='headerSectionForNav'>";
print"<nav>";
print"<div class='logo'>";
print"<a href=\"" . PAGE_HOME . "\" >";
print"<img src='img/pistachsecure_logo.png' alt='pistachsecure'>"; //clicking logo directs to homepage
print"</a>";
print"</div>";
print"<ul>";
print"<li><a href=\"" . PAGE_HOME . "\" class='active'>Home</a></li>";
print"<li><a href=\"" . PAGE_BOOKMARK . "\">Bookmark</a></li>";
print"<li><a href=\"" . PAGE_ACCOUNT . "\">Account</a></li>";
print"</ul>";
print"<div>";
print"<a href=\"" . ACTION_LOGOUT . "\" class='logout'>Logout</a>";
print"</div>";
print"</nav>";
print"</header>";
//end to nav section
print"<!-- Home Page -->";
print"<section class='hero'>";
print"<img src='img/secureImg.jpg' alt='secureImg'>";
print"<div class='container'>";
print"<div class='row'>";
print"<div class='col-lg-10'>";
print"<h2>Welcome to PistachSecure</h2>";
print"<p>";
print"<span>";
print"<i>A Place That Ensures Your Privacy is The Top Priority...</i>";
print"</span>";
print"</p>";
print"</div>";
print"</div>";
print"</div>";
print"</section>";  
print"</body>";
print"</html>";
?>