<?php
namespace app\quiz\model;
class Reponse
{
    private string $_text;
    private bool $_isValid;

    public function __construct(string $text, bool $isValid,int $id)
    {
        $this->_text = $text;
        $this->_isValid = $isValid;
    }

    
    public function getText(): string
    {
        return $this->_text;
    }
   
   
    public function isValid(): bool
    {
        return $this->_isValid;
    }

}
