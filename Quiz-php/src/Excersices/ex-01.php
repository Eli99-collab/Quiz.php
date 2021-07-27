<?php
    function fullGreet() {
        $satzteil = [
            ['Howdy ', 'Hello ', 'Yo, what up ', 'Greetings ', 'Salutations ', 'Ah, here you are ', 'Hail and well met '],
            ['partner', 'friend', 'my homie', 'fellow traveller', 'honorable guest', 'my dove', 'my good sir or madam'],
            ['! ', '!!! ', '? ', '. ', '...? ', '...'],
            ["How ya doin'? ", "So good to see you! ", "How's it hangin'? ", "How goes the journey? ", "How fare you? ", "Where have you been hiding?", "What news have you? "],
            "As you can tell from my vernacular, I am ",
            ["a cowboy!", "a person!", "obviously a cool dude!", "definitely a human.", "a fancy lad.", "definitely not creepy", "am from ye Olden Tymes."]
        ];
        //var_dump($satzteil);array()

        $greeting = $satzteil[0][rand(0,6)];
        $name = $satzteil[1][rand(0,6)];
        $ending = $satzteil[2][rand(0,4)];
        $smallTalk = $satzteil[3][rand(0,6)];
        $declaration = $satzteil[4];
        $person = $satzteil[5][rand(0,6)];
        
        echo "<h1>" . $greeting . $name . $ending . "</h1><h3>". $smallTalk . "</h3><p>" . $declaration . $person . "</p>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3: echo mit Variablen </title>
    <style>
        form {
            width: 50vw;
            background-color: #445166;
            color: white;
            border-radius: 5px;
            font-size: 1.5rem;
            line-height: 1.75em;
            margin: 10px auto;
            
        }

        .game {
            padding: 20px;
        }
        
        label {
            padding-bottom: 100px;
        }

        input {
            width: 75%;
            line-height: 1.75em;
        }

        button {
            margin: 100px 10px 10pxx 10px;
            padding: 10px;
            width: 300px;
            height: 90px;
            border-radius: 10px;
            color: #14535e;
            background-color: #63b1bf;
            font-size: 24px;
        }

        .storytime {
            line-height: 2rem;
            width: 50vw;
            font-family: monospace;
            font-size: 1.75rem;
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <?php
       fullGreet();
        ?>
    <h1>Let's play a game!</h1>
    <br>
    <form class="game" action="ex3-kate.php" method="POST">
       <label for="adj1">Enter an Adjective:</label><br>
            <input class="entry" type="text" name="adj1"><br>

       <label for="size1">Enter Size Descriptor:</label><br>
            <input class="entry" type="text" name="size1"><br>

       <label for="animal">Enter an Animal:</label><br>
            <input class="entry" type="text" name="animal"><br>

       <label for="city">Enter a City Name:</label><br>
            <input class="entry" type="text" name="city"><br>

       <label for="emotion1">Enter an Emotion:</label><br>
            <input class="entry" type="text" name="emotion1"><br>

       <label for="activity">Enter a Fun Activity:</label><br>
            <input class="entry" type="text" name="activity"><br>

       <label for="purpose">Enter a Purpose for the Activity:</label><br>
            <input class="entry" type="text" name="purpose"><br>

        <label for="size2">Enter Another Size Descriptor:</label><br>
            <input class="entry" type="text" name="size2"><br>
            
        <label for="object">Enter an Object of Desire:</label><br>
            <input class="entry" type="text" name="object"><br>

        <label for="emotion2">Enter Another Emotion:</label><br>
            <input class="entry" type="text" name="emotion2"><br>

       <label for="action">Enter a Past Tense Verb:</label><br>
            <input class="entry" type="text" name="action"><br>

       <label for="adj2">Enter Another Adjective:</label><br>
            <input class="entry" type="text" name="adj2"><br>

       <label for="intensity">Enter an Intensifier:</label><br>
            <input class="entry" type="text" name="intensity"><br>

        <label for="hero">Enter a Legendary Name for the Animal:</label><br>
            <input class="entry" type="text" name="hero"><br>
      

       <button type="submit" value="Submit">Submit</button>
    </form>
<?php


if ($_POST) {
    $adj1 = $_POST['adj1'];
    $size1 = $_POST['size1'];
    $animal = $_POST['animal'];
    $city = $_POST['city'];
    $emotion1 = $_POST['emotion1'];
    $activity = $_POST['activity'];
    $purpose = $_POST['purpose'];
    $size2 = $_POST['size2'];
    $object = $_POST['object'];
    $animal = $_POST['animal'];
    $emotion2 = $_POST['emotion2'];
    $action = $_POST['action'];
    $adj2 = $_POST['adj2'];
    $intensity = $_POST['intensity'];
    $hero = $_POST['hero'];


echo "<div class='storytime'><p>Once upon a time, a " . $adj1 . " " . $size1 . " " . $animal . " lived in " . $city . ". The "
. $animal . " was feeling " . $emotion1 . " one day, and it decided to " . $activity . " to " . $purpose . 
". When it turned a corner, it saw a " . $size2 . " " . $object . "! The " . $animal . " was so " . $emotion2 . 
", and it " . $action . " the whole thing in its " . $adj2 . " teeth, and dragged it all the way home. It was a " 
. $intensity . " day for the " . $animal . ". And that was the day the " . $animal . " became " . $hero . "! </p></div><br>";
echo "<button type='reset'>Reset</button>"; 
    
}
?>

<button type="button"><a href="/exercises/ex4-kate.php">Go to Exercise 4</a></button>

       
</body>
</html>