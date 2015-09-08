<?php
/*
**
**	Poll PHP OOP MVC
**	/index.php
**  
*/
error_reporting( E_ALL );
ini_set("display_errors", 1);
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Buiding and processing HTML forms with PHP";
$pageData->content = "<nav>will soon show a navigation....</nav>";
$pageData->content .= "<div>...and a form here</div>";
$page = include_once "templates/page.php";
echo $page;