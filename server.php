<?php
require 'functions.php';
require 'lib/nusoap.php';
$server = new nusoap_server();
$server->configureWSDL("soapexercise", "urn:soapexercise");
$server->register("fetchstudent", array("admission_no" => 'xsd:integer'), array("return" => 'xsd:string'),);

// $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

// $server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
