<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php pdo intro</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="images/babyYoda.gif" alt="cute baby yoda animation" class="center">
        <?php


        define('DB_NAME', 'yasser_quiz');//getenv('DB_NAME')
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASSWORD', getenv('DB_PASSWORD'));
        define('DB_HOST', getenv('DB_HOST'));

        //PHP Data Objects Extentions (PDO)
        //https ://www.php.net/manual/debook.bdo.php
        $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
        
        //Define the quiz to play: Set temporalily < static var

        $quizID = 1;
        $questionID = 0;

        //introduction DATA
        
        print "<h1>INTRODUCTION DATA</H1>";
        //prepare, bind abnd excute select statement
        $query  = $connection->prepare("SELECT * FROM Question WHERE quizID = ? AND id = ?");
        $query->bindValue(1, $quizID);
        $query->bindValue(2, $questionID);
        $query->execute(); 
        //fetch the question's record (whole row) as assoc array 
        
        $question = $query->fetch(PDO::FETCH_ASSOC);
        
        var_dump   ($question);
        echo '<p> ........................</p>';// echo separator line
        
        exit;
        
       //Answer Data -----------------------
    
        

        ?>
    </body>
</html>