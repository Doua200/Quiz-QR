<?php
namespace app\quiz\model;

class Quiz
{
    private string $title;
    private int $_id;
    private QuestionCollection $_questions;
    private ReponseCollection $_reponses;
public function __construct(string $title = 'No title choosen', int $id=0)
    {
        $this->title = $title;
        $this->_questions = new QuestionCollection();
        $this->_reponses = new ReponseCollection();
        $this->_id = $id;
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
            foreach ($questionJson->responses as $key => $value) {
                $reponse = new Reponse($value->text,$value->isValid);
                $question->addReponse($reponse);
                };
                        
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

    public static function filter (string $texte) : \ArrayObject {
        $liste = new \ArrayObject();
        $statement = Database::getInstance()-> getConnexion()->prepare("select * from Quiz where title like : textSearched;");
        $statement->execute(['textSearched'=>'%'.$texte.'%']);
        while ($row = $statement->fetch()) {
            $liste[] = new Quiz (id:$row['id'], title:$row['title']);
        }
        return $liste;
    }
    public static function findById(int $id)
    {
        $statement = Database::getInstance()-> getConnexion()->prepare('select * from 
        Quiz where id =:id;');
        $statement->execute(['id'=>$id]);  
        if ($row = $statement -> fetch()) 
        return new Quiz (id:$row['id'], title:$row['title']);
    return null ;
    }

   }
