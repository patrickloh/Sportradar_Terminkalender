<!DOCTYPE html>
<?php

require("vendor/autoload.php");
use src\DatabaseReader;

//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //Prevent the rest of the script from executing.
    exit;
}

//Start session on start
session_start();

$_SESSION["timeout"] = time();
//if 100 seconds have passed since creating session delete it.
if(time() - $_SESSION["timeout"] > 2){
    session_unset();
}
?>

<html lang="en">
<head>

    <title>Terminkalender für Sportevents</title>
    <link rel="icon" href="./res/img/icon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Patrick Loh">

    <!-- Core CSS File -->
    <link href="./res/css/style.css" rel="stylesheet">

</head>
<body>
<main id="main">
    <div>

    </div>
</main>

