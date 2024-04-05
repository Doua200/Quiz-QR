<?php
declare (strict_types=1);
require_once dirname(__DIR__) . "/vendor/autoload.php";
use  app\quiz\model;
echo "SALUT";
var_dump ($_SERVER);
var_dump ($_GET);


$json = file_get_contents('Quiz.json'); 
$json_data = json_decode($json,true); 
$quiz = Quiz::create($json_data );
