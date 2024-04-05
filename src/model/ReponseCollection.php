<?php

namespace app\quiz\model;

class ReponseCollection implements \Countable, \IteratorAggregate
{
    private array $reponses = [];

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
}
