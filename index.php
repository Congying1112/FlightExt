<?php
require_once 'includes.php';
require_once 'test/TestRoute.php';

date_default_timezone_set("Asia/Shanghai");

Logger::getLogger('Route')->debug(Flight::request());

//temop to org
assert_options(ASSERT_CALLBACK, 'my_assert_handler');
function my_assert_handler($file, $line, $code, $desc=null)
{
	$message = "Assertion Failed: Line {$line} in {$file}: $code";
	$message .= $desc ? "[desc]".$desc : "";
	Flight::sendRouteResult(false, null, $message, 402);
}

try{
	Flight::start();
}
catch(Exception $e){
	Flight::sendRouteResult(false, null, $e->getMessage(), 401);
}
?>
