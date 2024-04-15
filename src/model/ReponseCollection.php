<?php

namespace app\quiz\model;

class ReponseCollection implements \Countable, \IteratorAggregate,\ArrayAccess
{

    private int $_position = 0;
    private array $reponses = [];
    private int $_id;

    public function offsetExists($offset): bool
    {
        return isset($this->reponses[$offset]);
    }

    public function offsetGet($offset): Question
    {
        return $this->reponses[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        if (!($value instanceof Reponse)) {
            throw new \InvalidArgumentException("Must be a Response");
        }

        if ($offset === null) {
            $this->reponses[] = $value;
        } else {
            $this->reponses[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->reponses[$offset]);
    }
    public function addReponse(Reponse $reponse): void
    {
        $this->reponses[] = $reponse;
    }

    public function count(): int
    {
        return count($this->reponses);
    }

    public function getReponses(): array
    {
        return $this->reponses;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->reponses);
    }


    public static function listById (int $idQuestion) : ReponseCollection {
        $reponse = new ReponseCollection();
        $statement = Database::getInstance()-> getConnexion()->prepare("select * from 
        Reponse where numQuestion=:numQuestion;");
        $statement->execute(['numQuestion'=>$idQuestion]);
        while ($row = $statement->fetch()) {
            $reponse[] = new Reponse (id:$row['id'], text:$row['text'],isValid:$row['isValid']);
        }
        return $reponse;
    }


    
}
