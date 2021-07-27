
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/yasser_quiz/css/main.css">
</head>

<body>
    <div class="bgimg-1">
    <div class="caption">
        <span class="border">
        <a href="index.phph">My Frist Quiz Introduction</a></span>
        <from action="question.phph" method="post">
            <input type="hidden" name="questionID"
                value="1">
            <input type="submit" value="START">
        </from>
            <?php 
                echo '<a href="/yasser_Quiz/quiz-ckue/introduction.php">INTRODUCTION</a>'; 
            ?>
        </span>
    </div>
    </div>
</body>

</html>