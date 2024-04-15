<?php
declare(strict_types= 1);
namespace app\quiz\controller;
use app\quiz\model\Quiz;


class ApiController
{
    
    public static function Quiz(){
        header ('Content-Type: application/json; charset=utf-8');
        $liste = Quiz::lister();
        echo json_encode($liste);
    }
}