<?php
use PHPUnit\Framework\TestCase;
use app\quiz\model\Quiz;
class QuizTest extends TestCase
{
    public function test_1()
    {
        $quiz = new Quiz();
        $this->assertSame('No title choosen', $quiz->getTitle());
    }
    public function test_2()
    {
        $quiz = new Quiz('Quizz about PHP');
        $this->assertSame('Quizz about PHP', $quiz->getTitle());
    }

}