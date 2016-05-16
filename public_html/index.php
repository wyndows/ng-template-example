<!-- insert <head> tag -->
<?php require_once("php/partials/head-utils.php");?>

<body class="sfooter" ng-controller="mainController">
	<div class="sfooter-content">

		<!-- insert header -->
		<?php require_once("php/partials/header.php");?>

		<main class="p-y-4">
			<div class="container">

				<!-- Angular directive -->
				<div ng-view></div>

			</div>
		</main>

	</div><!--/.sfooter-content-->

	<!-- insert footer -->
	<?php require_once ("php/partials/footer.php");?>
</body>
</html>