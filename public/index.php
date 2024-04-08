<?php
declare (strict_types=1);
require_once dirname(__DIR__) . "/vendor/autoload.php";
use  app\quiz\model\Quiz;
echo "SALUT";
//var_dump ($_SERVER);
//var_dump ($_GET);
// try
// {
//     $connexion = new PDO ('mysql:host=mysql-srv; dbname=quiz_db', 'db_user', 'password');
//     $statement = $connexion -> prepare ('select* from Quiz;');
//     $statement->execute();
//     while ($row = $statement->fetch()) {
//         print_r($row);
//     }
// }

// catch (PDOException  $e) {
//     echo "error:" .$e -> getMessage();
// }



//le code en dessous est aussi important, j'ai juste mis en commentaire pour observer le try

// $json = file_get_contents('Quiz.json'); 
// $json_data = json_decode($json); 
// $quiz = Quiz::create($json_data);



// foreach ($quiz->getQuestions() as $question) {
//     echo "Question : " . $question->getText() . "\n";
//     echo "Réponses :\n";

//     foreach ($question->getReponses() as $response) {
//         echo "- " . $response->getText() . "\n";
//     }

// }

try
{
    $liste = Quiz::findById(1);
    var_dump($liste);
}

catch (PDOException  $e) {
        echo "error:" .$e -> getMessage();
}
echo "YOLOO<br>";
var_dump(Quiz::findById(1));