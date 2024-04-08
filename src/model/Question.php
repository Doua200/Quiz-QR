<?php
namespace app\quiz\model;

class Question
{
private string $_text;
private ReponseCollection $_reponses;
private int $_id;


public function __construct(string $text,int $id)
    {
        $this->_text = $text;
        $this->_reponses =  new ReponseCollection();
        $this->_id = $id;
    }

    
    public function getText(): string
    {
        return $this->_text;
    }
public function getReponses(): ReponseCollection {

    return $this->_reponses;
}
public function addReponse(Reponse $reponse)
{
    $this->_reponses[]=$reponse;
}

}

