<?php
    include '../config.php';
 
    $_SESSION["quiz-ckue-results"] = array();

    // Get quiz data
    $quizData = qchris_data();
    $pageData = $quizData['report'];

    // Session object: Update number of achieved points
    // var_dump($_POST);
    if(isset ($_POST['radio'])){
        $_SESSION['achievedPoints'] = $_SESSION['achievedPoints'] + $_POST['radio'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="bgimg-1">
        <div class="caption">
            <span class="border">
            <?php
                echo '<a href="/index.php">' . $pageData['title'] . '</a>';
                //echo '<p>' . $pageData['feedback_80'] . '</p>';
                if ($_SESSION['achievedPoints'] >= 3 ){
                    echo "<p>super!</p>";
                } else if ($_SESSION['achievedPoints'] == 5){
                    echo "<p>Perfect!!!wawwwwwwwwwww</p>";
                } else {
                    echo "<p>ooooopst you lost</p>";
                }
                
                echo '<p>You have answered ' . $_SESSION['achievedPoints'] . ' question(s) correctly.</p>';
            ?></span>
        </div>
    </div>
</body>

</html>