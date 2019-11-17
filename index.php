<!DOCTYPE html>
<?php

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
    <h1>Terminkalender für Sportevents</h1>
    <!-- Page Content -->
    <div id="container">
        <div id="buttons_options">
            <button id="button_option">Filter Matches</button>
            <button id="button_option">Live Ticker</button>
        </div>
        <button id="button_prev"> < Previous Week</button>
        <button id="button_next">Next Week > </button>

        <table id="table">
            <tr>
                <th>Datum</th>
                <th>Sportart</th>
                <th>Encounter</th>
            </tr>
            <?php
            $sportDataFormatter = new \src\DatabaseAccess();
            $matches = $sportDataFormatter->getAllDiaries();

            foreach ($matches as $match) {
                /** @var src\Models\Diary $match */
                $teamHome = $match->getParticipantOne();
                $teamAway = $match->getParticipantTwo();

                echo "<tr>";
                echo "<td>{$match->getDate()}</td>";
                echo "<td><a href='#'>{$match->getSportType()}</a></td>";
                echo "<td><a href='#'>" . $teamHome . '</a> vs ' . "<a href='#'>" . $teamAway . "</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>

