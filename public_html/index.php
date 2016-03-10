<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Angular Template";

/*load head-utils.php - edit path as needed*/
require_once("php/partials/head-utils.php");
?>

			<header>
				<div class="container">
					<nav class="navbar navbar-inverse">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/~rlewis37/ng-template-example/public_html/">MeowApp</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/~rlewis37/ng-template-example/public_html/about">About</a></li>
								<li><a href="/~rlewis37/ng-template-example/public_html/toys">Toys</a></li>
								<li><a href="/~rlewis37/ng-template-example/public_html/treats">Kitty Treats</a></li>
								<li><a href="https://senator-arlo.bowtied.io/" target="_blank">Feel the Fuzzy</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!--/.container-->
			</header>

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