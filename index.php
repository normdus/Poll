<?php
/*
**	Frontcontroller
**	Poll PHP OOP MVC
**	/index.php
**  
*/
error_reporting( E_ALL );
ini_set("display_errors", 1);
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Buiding and processing HTML forms with PHP";
$pageData->content = include_once "views/navigation.php";

$pageData->content .= "<div>...and a form here</div>";
// Load any view requested requested by site visitor
$navigationIsClicked = isset($_GET['page']);
if ( $navigationIsClicked ) {
	$fileToLoad = $_GET['page'];
} else {
	$fileToLoad = "search";
}
$pageData->content .=include_once "views/$fileToLoad.php";

$page = include_once "templates/page.php";
echo $page;