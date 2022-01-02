<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db TestProject_db
		require('./resource/TestProject_db/custom/StudentCustom.php');
		require('./resource/TestProject_db/Student.php');
		require('./resource/TestProject_db/custom/UserCustom.php');
		require('./resource/TestProject_db/User.php');
	

$app->run();


?>
