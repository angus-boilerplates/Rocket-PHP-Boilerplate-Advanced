<?php
/*
 * This is the config file, this is the first script loaded for every web page
 * on your site, it will setup any global variables needed etc.
 *
 * -------- GLOBAL VARIABLES ---------
 *
 * NAV_PAGE: The global variable indicating the currently selected navigation link
 * CURRENT_PAGE: The currently loaded page (for use in code; not displayed)
 * PAGE_TITLE: The title which is displayed in the Browser tab
 * PAGE_DESCRIPTION: The description of the page (appears in search results)
 * PAGE_CANONICAL: The canonical tag that is used for page directs and SEO
 * 
 * -----------------------------------
 * 
 * The comment below will appear at the top of every page on your site
 */
?>
<!--Rocket PHP Boilerplate, created by Angus Goody 07/2020-->

<?php

//Setup Global defaults to avoid undefined errors (These will get overwritten)
$NAV_PAGE="index";
$CURRENT_PAGE="index";
$PAGE_TITLE="Home";
$PAGE_DESCRIPTION="Welcome to Rocket Boilerplate";


//Find the path of the current page
$full_path = $_SERVER["PHP_SELF"];
$first_parent = dirname($full_path);
$file_base = basename($full_path);
//If the current file is in root folder we don't need it's parent directory
if ($first_parent == "/"){
	$first_parent = $full_path;
}

//Create the Canonical Tag (Change protocols etc to suit your server)
$PAGE_CANONICAL="https://".$_SERVER['SERVER_NAME'].$full_path;
//Uncomment to remove .php from canonical
//$PAGE_CANONICAL="https://".$_SERVER['SERVER_NAME'].preg_replace('/\\.[^.\\s]{3,4}$/', '', $full_path);



//Switch statement for pages
switch ($first_parent) {

	//Page 2
	case '/page_2.php':
		$NAV_PAGE="page_2";
		$CURRENT_PAGE="page_2";
		$PAGE_TITLE="Page 2 | Rocket Boilerplate";
		$PAGE_DESCRIPTION="This is a description for Page 2";
		break;

	//Page 3
	case '/page_3.php':
		$NAV_PAGE="page_3";
		$CURRENT_PAGE="page_3";
		$PAGE_TITLE="Page 3 | Rocket Boilerplate";
		$PAGE_DESCRIPTION="This is a description for Page 3";
		break;

	//Subpage Example (This example site does not have subpages, delete if not needed)
	case '/subpages':
		$NAV_PAGE="subpages";
		$CURRENT_PAGE="subpages";
		$PAGE_TITLE="Subpage Home | Rocket Boilerplate";
		$PAGE_DESCRIPTION="This is a description for The index of subpages_1";
		//A seperate switch for the subpages of this folder
		switch ($file_base) {
			case 'sub_page_2.php':
				$CURRENT_PAGE="subpages/sub_page_2";
				$PAGE_TITLE="Subpage 2 | Rocket Boilerplate";
				$PAGE_DESCRIPTION="This is the second subpage on the site";
				break;
			case 'sub_page_3.php':
				$CURRENT_PAGE="subpages/sub_page_3";
				$PAGE_TITLE="Subpage 3 | Rocket Boilerplate";
				$PAGE_DESCRIPTION="This is the third subpage on the site";
				break;
		}
		break;
	
	//index.php (Home page)
	case '/index.php':
		$NAV_PAGE="index";
		$CURRENT_PAGE="index";
		$PAGE_TITLE="Home | Rocket Boilerplate";
		$PAGE_DESCRIPTION="Welcome to Rocket Boilerplate";
		break;

	//Default (If page not defined above)
	default:
		$NAV_PAGE="default";
		$CURRENT_PAGE="default";
		$PAGE_TITLE="Rocket Boilerplate";
		$PAGE_DESCRIPTION="Welcome to Rocket Boilerplate";
		break;
}

?>
