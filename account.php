<?php
require_once("const.php");
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
   $_SESSION['error'] = "You must login"; //display an error msg
  die(header("Location:" . PAGE_LOGIN));
}

print "<!doctype html>";
print "<html lang='en'>";
print"<head>";
print"<link href='css/commonElements.css' rel='stylesheet'>";
print"<link href='css/quoteanimation.css' rel='stylesheet'>";
print"<meta charset='utf-8'>";
print"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
print"<title>My Account</title>";
print"</head>";
print "<body>\n";
//Adding nav section 
print"<header class='headerSectionForNav'>";
print"<nav>";
print"<div class='logo'>";
print"<a href=\"" . PAGE_HOME . "\">";
print"<img src='img/pistachsecure_logo.png' alt='pistachsecure'>"; //clicking logo directs to homepage
print"</a>";
print"</div>";
print"<ul>";
print"<li><a href=\"" . PAGE_HOME . "\">Home</a></li>";
print"<li><a href=\"" . PAGE_BOOKMARK . "\">Bookmark</a></li>";
print"<li><a href=\"" . PAGE_ACCOUNT . "\" class='active'>Account</a></li>";
print"</ul>";
print"<div>";
print"<a href=\"" . ACTION_LOGOUT . "\" class='logout'>Logout</a>";
print"</div>";
print"</nav>";
print"</header>";
//end to nav sec
//Adding few format changes to existing code
print"<section class='hero2'>";
print"<div class='container'>";
print"<div class='row'>";
print "<div><h2>Welcome to your account</h2></div>\n";
print"</div>";
print"</div>";
print"</section>";  
print "</body>\n";
print "</html>\n";
?>
