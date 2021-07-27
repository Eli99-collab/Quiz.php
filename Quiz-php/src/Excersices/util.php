<?
session_start();
//j 
/*
$x = 'Paradise Lost';

function prettyPrint($x)
{

    return 'John Milton wrote ' . $x;
}
echo '<pre>';
print_r(prettyPrint($x)) . '<br><br>';
echo '</pre>';

//k

$_SESSION['favouriteColour'] = 'blue';
$_SESSION['favouriteAnimal'] = 'Horse';
$_SESSION['favouriteMusic'] = 'Country';
$_SESSION['favouriteFilm'] = 'Flashback';

$dump = $_SESSION;
function sessionDump($dump)
{
    return $dump;
}
echo '<pre>';
print_r(sessionDump($dump)) . '<br><br>';
echo '</pre>';

//l

*/ 

function prettyPrint ($x) 

{ 

echo "<pre>";
// print_r($x);
print_r ($x);
echo "</pre>";

}

$blumen = array("rose" , "lilien" , "Kaktus");
prettyPrint ($blumen);

echo $blumen [0]; 
echo '<br><br>'; 
echo $blumen [2]; 

function countTogether ($var1, $var2)
{
    /*
    echo $var1;
    $countTogether = ($var1 + $var2);
    echo $var2;
    */

    $var1 = 10;
    $var2 = 5;
    $countTogether = $var1 + $var2;
    echo "countTogether: $countTogether";
}
   
    //Dice-game sample:

    $rolls = 0;

    do {
    $numroll = rand(1, 6);
    echo ' I rolled ' . $numroll . ' <br>';
    $rolls++;
}   while ($numroll != 6);

    echo 'I finally rolled a ' . $numroll . '. It took me ' . $rolls . ' rolls! <br><br>';



    for ($numroll = 0, $rolls = 0; $numroll != 6; $rolls++) {
    $numroll = rand(1, 6);
    echo ' I rolled ' . $numroll . ' <br>';
}
    echo 'I finally rolled a ' . $numroll . '. It took me ' . $rolls . ' rolls! <br><br>';




/*
$array = array(
"blumen" => "lilien",

);

*/ 