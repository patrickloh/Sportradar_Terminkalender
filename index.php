<!DOCTYPE html>
<?php

require("vendor/autoload.php");
use src\DatabaseReader;

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

    <!-- Bootstrap File -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Core CSS File -->
    <link href="./res/css/style.css" rel="stylesheet">

</head>
<body>
<main id="main">
    <h1>Terminkalnder für Sportevents</h1>
    <div id="container">
        <div id="buttons">
            <button>Filter</button>
        </div>
        <div id="buttons">
            <button><< Previous Week</button>
            <button>Next Week >></button>
        </div>

        <div id="container">
            <table id="table">
                <tr>
                    <th>Datum</th>
                    <th>Sportart</th>
                    <th>Event</th>
                    <th>Teams</th>
                </tr>
                <?php
                $databaseReader = new DatabaseReader();
                $result = $databaseReader->getEntries();

                /** @var src\Models\Calender $match */
                if($result != null)
                {
                    foreach ($result as $match)
                    {
                        echo "<tr>";
                        echo "<td>{$match->getDate()}</td>";
                        echo "<td>{$match->getSportTyp()}</td>";
                        echo "<td>{$match->getEventName()}</td>";
                        echo "<td><a>".$match->getParticipantOneName()."</a> vs <a>".$match->getParticipantTwoName()."</a></td>";
                        echo "</tr>";
                    }
                }
                else
                {
                    echo "<tr>";
                    echo "<td>no data found</td>";
                    echo "<td>no data found</td>";
                    echo "<td>no data found</td>";
                    echo "<td>no data found</td>";
                    echo "</tr>";
                }

                ?>
            </table>
        </div>
    </div>
</main>

