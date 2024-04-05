<?php
namespace app\quiz\model;

class Question
{
private string $_title;



public function __construct(string $title)
    {
        $this->title = $title;
       
    }

    
    public function getTitle(): string
    {
        return $this->title;
    }

}

