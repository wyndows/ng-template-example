<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Angular Template";

/*load head-utils.php - edit path as needed*/
require_once("php/partials/head-utils.php");
?>

			<?php require_once("php/partials/header.php");?>

			<main class="p-y-4">
				<div class="container">

					<div ng-view></div>

				</div>
			</main>

		</div><!--/.sfooter-content-->
		<?php require_once ("php/partials/footer.php");?>
	</body>
</html>