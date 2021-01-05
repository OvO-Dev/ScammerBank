<?php
	ini_set('display_errors', 1);
	ini_set("default_charset", 'utf-8');

	session_start();

	require __DIR__ . '/../components/router.php';
    require_once __DIR__ . "/../components/class/CFG.php";
    require_once __DIR__ . "/../components/class/URL.php";


    $router = new AltoRouter();
    
    //Backend
        #dashboard
        $router->map( 'GET', URL::backend_dashboard, function() {
			require __DIR__ . "/../src/views/dashboard/home.php";
        });

        #Send Money
        $router->map( 'GET', URL::backend_send, function() {
			require __DIR__ . "/../src/views/account/send.php";
        });

         #Contact
         $router->map( 'GET', URL::backend_contact, function() {
			require __DIR__ . "/../src/views/contact/contact.php";
        });


        #Login
		$router->map( 'GET', URL::auth_login, function() {
			require __DIR__ . "/../src/views/auth/login.php";
        });

        #Sign UP
		$router->map( 'GET', URL::auth_create, function() {
			require __DIR__ . "/../src/views/auth/register.php";
        });

	//Home
		$router->map( 'GET', '/', function() {
			require __DIR__ . '/../src/views/home.php';
        });



	// match current request url
	$match = $router->match();

	
	// call closure or throw 404 status
	if( is_array($match) && is_callable( $match['target'] ) ) {
		call_user_func_array( $match['target'], $match['params'] ); 
	} else {

		#echo $_SESSION["loggedin"];

		//404
		echo json_encode(["status" => 404]);
		//http_response_code(404);
	}
	