<?php

use app\quiz\model\Reponse;
use app\quiz\model\ReponseCollection;
use PHPUnit\Framework\TestCase;

class ReponseCollectionTest extends TestCase
{
    public function testAddReponse(): void
    {
        $reponse1 = new Reponse('Réponse 1', true); 
        $reponse2 = new Reponse('Réponse 2', false);

        $collection = new ReponseCollection();
        $collection->addReponse($reponse1);
        $collection->addReponse($reponse2);

        $this->assertCount(2, $collection);
    }
}
