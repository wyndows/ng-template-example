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

					<div class="col-xs-12">
						<div class="jumbotron text-center">
							<i class="fa fa-paw fa-5x"></i>
							<h1>Welcome to the MeowApp!</h1>
							<p class="lead">Modernize feeding times. Mandate more naps.</p>
							<div>
								<button class="btn btn-primary btn-lg"><i class="fa fa-sign-in"></i>&nbsp;Log In</button>
								<a href="/~rlewis37/ng-template-example/public_html/sign-up" class="btn btn-primary btn-lg"><i class="fa fa-paw"></i>&nbsp;Sign Up</a>
							</div>
						</div>
					</div>

				</div>
			</main>

		</div><!--/.sfooter-content-->
		<footer class="p-y-4">
			<div class="container">
				<div class="row">
					<div class="col-md-6 m-b-2">
						<strong>=^. .^=</strong>
					</div>
					<div class="col-md-6 m-b-2 text-right-md-up">
						&copy;&nbsp;2016 Romulan Star Empire
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>