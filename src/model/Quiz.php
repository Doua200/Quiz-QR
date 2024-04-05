<?php
namespace app\quiz\model;
class Quiz
{
    private string $title;

public function __construct(string $title = 'No title choosen')
    {
        $this->title = $title;
       
    }

    
    public function getTitle(): string
    {
        return $this->title;
    }

    public static function create($pJsonObject) :Quiz
    {
        
    }

   }
