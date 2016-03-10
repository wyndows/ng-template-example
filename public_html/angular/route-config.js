// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider
	// route for the home page
		.when('/', {
			controller  : 'mainController',
			templateUrl : 'angular/pages/home.php'
		})

		// route for the about page
		.when('/about', {
			controller  : 'aboutController',
			templateUrl : 'angular/pages/about.php'
		})

		// route for the sign up page
		.when('/sign-up', {
			controller  : 'signUpController',
			templateUrl : 'angular/pages/sign-up.php'
		})

		// route for the about page
		.when('/toys', {
			controller  : 'toysController',
			templateUrl : 'angular/pages/toys.php'
		})

		// route for the about page
		.when('/treats', {
			controller  : 'treatsController',
			templateUrl : 'angular/pages/treats.php'
		})

		.otherwise({
			redirectTo: "/"
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});