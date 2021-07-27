<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <a href="/exercises/ex-01.php">Exercise 1</a>
    <h1>Zeichenketten verbinden in php (String concatenation)</h1>
    <?php 
    $name = 'Elif';
    $str = 'Ich heisse ' . $name . '.';

    echo "\$str = 'Ich heisse Elif' . \$name . '.'" . '<br>';
    echo $str . '<br>';                         

    

    ?>
</body>

</html>