<?php
        
        define('TRACE_DB_ACCESS', true);
        
        

        if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false) {

            define('DB_NAME', getenv('DB_NAME'));
            define('DB_USER', getenv('DB_USER'));
            define('DB_PASSWORD', getenv('DB_PASSWORD'));
            define('DB_HOST', getenv('DB_HOST'));
        }
        else {
            /*
            define('DB_NAME', getenv('DB_NAME'));
            define('DB_USER', getenv('DB_USER'));
            define('DB_PASSWORD', getenv('DB_PASSWORD'));
            define('DB_HOST', getenv('DB_HOST'));
            */
        }


    function DBConnection() {
        // if(isset($_DBconnection)) return $_DBconnection;

        try {
            $connection = new PDO(
                'mysql:host=' . DB_HOST . ';DBname=' . DB_NAME . ';charset=utf8', 
                DB_USER, 
                DB_PASSWORD
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo '<p>DB_connection_failed:' . $e->getMessage() . '</p>';

            echo 'HTTP_HOST'. $_SERVER['HTTP_HOST']. '<br>';

            echo 'DB_NAME' . DB_NAME . '<p>';
            echo 'DB_USER' . DB_USER . '<p>';
            echo 'DB_PASSWORD' . DB_PASSWORD . '<p>';
            echo 'DB_HOST' . DB_HOST . '<p>';
            exit;
        }
       
        return $connection;
    }
 
        function introductionDataFromDB($quizID){
            if (TRACE_DB_ACCESS) print "<h1>INTRODUCTION DATA</H1>";

            $query = DBConnection()->prepare("SELECT * FROM Introduction WHERE quizID = ?");
            $query->bindValue(1, $quizID); //er gibt/issues 
            $query->execute(); 

            $introduction = $query->fetchALL(PDO::FETCH_ASSOC);

            if (TRACE_DB_ACCESS) {
                var_dump($introduction);
                echo '<p> ........................</p>';
            }

            return  $data;


        }
        
    ?>