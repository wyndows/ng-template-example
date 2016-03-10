<!DOCTYPE html>
<html lang="en" ng-app="NgMeow">
	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs. -->
		<base href="/~rlewis37/ng-template-example/public_html/">

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!--FontAweseom-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- My Custom CSS rlewis37@cnm.edu -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!--Angular JS Libraries-->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-messages.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-route.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.2.1/ui-bootstrap-tpls.min.js"></script>

		<!--Angular app files-->
		<script type="text/javascript" src="angular/app.js"></script>

		<title>Meow Template!</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

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
						<div class="well"><h2>Bring change to the Romulan Senate Today!</h2></div>
						<form method="post" action="" class="col-xs-12 col-sm-6 col-md-12 col-lg-12" id="user-signup-form">
							<div class="row">
								<div class="col-md-5">
									<h4>Required Fields</h4>
									<div class="form-group">
										<label for="txtUserNameFirst">First Name</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
											</div>
											<input type="text" class="form-control" id="txtUserNameFirst" placeholder="First Name" name="txtUserNameFirst">
										</div>
									</div>
									<div class="form-group">
										<label for="txtUserNameLast">Last Name</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
											</div>
											<input type="text" class="form-control" id="txtUserNameLast" placeholder="Last Name" name="txtUserNameLast">
										</div>
									</div>
									<div class="form-group">
										<label for="emailUserEmail">Email</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
											</div>
											<input type="email" class="form-control" id="emailUserEmail" placeholder="Email Address" name="emailUserEmail">
										</div>
									</div>
									<div class="form-group">
										<label for="txtUserHandle">Choose a User Handle</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="custom-icon" aria-hidden="true">@</span>
											</div>
											<input type="text" class="form-control" id="txtUserHandle" placeholder="Choose Your User Handle" name="txtUserHandle">
										</div>
									</div>
									<div class="form-group">
										<label for="txtUserPass">Choose a Password</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
											</div>
											<input type="password" class="form-control" id="txtUserPass" placeholder="Password" name="txtUserPass">
										</div>
										<div class="help-block">Password must be at least 8 characters in length.</div>
									</div>
									<div class="form-group">
										<label for="txtUserPassCheck">Confirm Password</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
											</div>
											<input type="password" class="form-control" id="txtUserPassCheck" placeholder="Password" name="txtUserPassCheck">
										</div>
									</div>
									<div class="form-group">
										<label for="radioPrivacySetting">Select Public or Private Profile</label>
										<div class="row">
											<div class="col-xs-12">
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoPrivacy" id="rdoPrivacyPublic" value="0">
														Public
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoPrivacy" id="rdoPrivacyPrivate" value="1">
														Private
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5 col-md-offset-2">
									<h4>The following fields are optional.</h4>
									<div class="form-group">
										<label for="txtUserPhone">Enter a phone number.</label>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
											</div>
											<input type="text" class="form-control" id="txtUserPhone" placeholder="Phone Number" name="txtUserPhone">
										</div>
										<div class="help-block">US phone numbers only. <em>Example: (505) 555-1212</em></div>
									</div>
									<div class="form-group">
										<label for="radioPrivacySetting">Select Your Gender Identity</label>
										<div class="row">
											<div class="col-xs-12">
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoGender" id="rdoGenderMale" value="01">
														Male
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoGender" id="rdoGenderFemale" value="02">
														Female
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoGender" id="rdoGenderOther" value="03">
														Other
													</label>
												</div>
												<div class="radio-inline">
													<label>
														<input type="radio" name="rdoGender" id="rdoGenderNone" value="00">
														I decline to state.
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="txtareaProfileText" class="control-label">Add something for your profile.</label>
										<textarea id="txtareaProfileText" rows="10" class="form-control" maxlength="250" placeholder="250 characters max." name="txtareaProfileText"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<h4>Ready to Roll? :D</h4>
										<button type="reset" class="btn btn-default"><i class="fa fa-ban"></i>&nbsp;Reset Form</button>
										<button id="user-submit" type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>&nbsp;Submit</button>
									</div>
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
						<div id="output-area"></div>
					</div><!--/.col-xs-12-->

				</div><!--/.container-->
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