<?php
Flight::route('GET /', function(){
	print_r("Hello FlightExt");
});

Flight::route('GET /sample', function(){
	Flight::sendRouteResult(true, null, "for test");
});
?>