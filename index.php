<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Electro - HTML Ecommerce Template</title>

		<!-- Styles -->
		<?php require ("layouts/styles.php") ?>

    </head>
	<body>
		<!-- HEADER -->
		<?php require ("layouts/headers.php") ?> 
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<?php require ("layouts/navigations.php") ?>
		<!-- /NAVIGATION -->

		<main>
			<?php
				if(isset($_GET['pages'])){
					include ('pages/account/'.$_GET['pages'].'.php');
				}elseif(isset($_GET['pages'])){
					include ('pages/wishlist/'.$_GET['pages'].'.php');
				}elseif (isset($_GET['pages'])) {
					include ('pages/yourcard/'.$_GET['pages'].'.php');
				} elseif(isset($_GET['pages'])) {
					include ('pages/login/'.$_GET['pages'].'.php'); 
				}else{
					require ("layouts/mains.php"); 
				}

			?>
			
		</main>

		<!-- FOOTER -->
		<?php require ("layouts/footers.php") ?>
		<!-- /FOOTER -->
		 
		<!-- jQuery Plugins -->
		 <?php require ("layouts/script.php") ?>

	</body>
</html>
