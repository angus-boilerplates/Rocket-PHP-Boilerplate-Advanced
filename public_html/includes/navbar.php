<?php
/*
 * This is the Navbar file, this will be your navbar
 * for the whole site, updating this file will change
 * the navbar for all pages
 */

/*
 ===============
 This function adds the "currentNavItem"
 to the approprirate page ID, ensuring the active
 page is displayed on the navigation bar ie. has the green colour
 ===============
 */
function isCurrent($pageName){
	global $NAV_PAGE;
	//If the global matches the argument set as current
	if ($NAV_PAGE == $pageName){
		echo "currentNavItem";
	}
}
?>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="/">Rocket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#rocketNavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="rocketNavbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a id="<?php isCurrent('index')?>" class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a id="<?php isCurrent('page_2')?>" class="nav-link" href="/page_2.php">Page 2</a>
      </li>
      <li class="nav-item">
        <a id="<?php isCurrent('page_3')?>" class="nav-link" href="/page_3.php">Page 3</a>
      </li>
    </ul>
  </div>
</nav>