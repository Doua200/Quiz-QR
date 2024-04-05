<?php

use PHPUnit\Framework\TestCase;
use app\quiz\model\Question;
use app\quiz\model\QuestionCollection;

class QuestionCollectionTest extends TestCase
{
    public function testAddQuestion()
    {
        $question1 = new Question("Question 1", true);
        $question2 = new Question("Question 2", false);

        $collection = new QuestionCollection();
        $collection[] = $question1;
        $collection[] = $question2;

        $this->assertCount(2, $collection);
    }

    public function testAccessQuestion()
    {
        $question1 = new Question("Question 1", true);

        $collection = new QuestionCollection();
        $collection[] = $question1;

        $this->assertEquals($question1, $collection[0]);
    }

    public function testRemoveQuestion()
    {
        $question1 = new Question("Question 1", true);

        $collection = new QuestionCollection();
        $collection[] = $question1;

        unset($collection[0]);

        $this->assertCount(0, $collection);
    }
}
