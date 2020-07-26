<?php include_once($_SERVER['DOCUMENT_ROOT']."/core/a_config.php");?>
<?php
//Include secret keys
include_once dirname($_SERVER["DOCUMENT_ROOT"])."/private_data/keys.php";
$secret_key = secret_key_1();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Head tags -->
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/head-tags.php");?>
</head>

<body>
	<!-- Navbar -->
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/navbar.php");?>
	<!-- Title bar -->
	<div class="jumbotron jumbotron-fluid">
	  <div class="container text-center">
	    <h1 class="display-4">Welcome</h1>
	    <p class="lead">This is the Rocket PHP boilerplate <span class="badge badge-secondary">Advanced</span></p>
	  </div>
	</div>
	<!-- Content -->
	<div id="wrapper">
		<div class="card w-75 mx-auto">
			<!--Download card -->
		  <div class="card-body text-center">
		    <p class="card-text">An example of serving files to a user</p>
		    <form action="/download-files" action="post" class="mx-auto">
		    	<button type="submit" class="btn btn-primary">Example Download</button>
		    </form>
		  </div>
		</div>
		<div class="card w-75 mx-auto mt-4">
		  <!--Keys card -->
		  <div class="card-body text-center">
		    <p class="card-text">An example of retrieving a secret key from the server</p>
		    <p>Secret key: <b><?=$secret_key?></b></p>
		  </div>
		</div>

		
	</div>
	<!-- Footer -->
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/footer.php");?>
</body>
</html>