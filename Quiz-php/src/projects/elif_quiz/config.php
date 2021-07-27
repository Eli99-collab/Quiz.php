<?php 
// Start the session and initialize the result array
session_start();

// Preset path to include folder
$incpaths = $_SERVER['DOCUMENT_ROOT'] . '/php';
$incpaths .= PATH_SEPARATOR;
$incpaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/elif_quiz/php';

set_include_path($incpaths);

// Page includes
include 'auth.php';
include 'db-access.php';
?>



