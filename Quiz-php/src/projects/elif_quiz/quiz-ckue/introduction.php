<?php
  
  include '../config.php';

  
    if(isset($_GET['q1'])) {
        $quizID = 1;
        $quizID = $_GET['q1'];
    }
    
    else {
        $quizID =1;
    }
    $_SESSION['quizID'] = $quizID;
    
    $pageData = introductionDataFromDB($quizID);


    // Initialize achieved number of points
    $_SESSION['achievedPoints'] = 0;
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
          <img src="<?php echo $pageData['imageURL'];?>" width="600px">
         
            <span class="border">
            <?php
                echo '<a href="/index.php">' . $pageData['title'] . '</a>'; 
            ?></span>
            <form action="<?php echo $pageData['nextAction']; ?>" method="post">
                <input type="hidden" name="questionID" 
                       value="<?php echo $pageData['questionID']; ?>">
                <input type="submit" value="START">
            </form>
        </div>
    </div>
</body>


<!Doctype html>
</html>