<?php
namespace app\quiz\model;

class Quiz
{
    private string $title;
    private QuestionCollection $_questions;
    private ReponseCollection $_reponses;
public function __construct(string $title = 'No title choosen')
    {
        $this->title = $title;
        $this->_questions = new QuestionCollection();
        $this->_reponses = new ReponseCollection();
    }

    
    public function getTitle(): string
    {
        return $this->title;
    }

    public static function create($pJsonObject) :Quiz
    {
        $quiz = new Quiz($pJsonObject->title);
        foreach ($pJsonObject->questions as $key => $questionJson) {
            $question = new Question($questionJson->text);

            $quiz->addQuestion($question);
            # code...
        }
        return $quiz;

    }
    public function getQuestions():QuestionCollection
    {
        return $this->_questions;
    }
    public function addQuestion(Question $question)
    {
        $this->_questions[]=$question;
    }


   }
