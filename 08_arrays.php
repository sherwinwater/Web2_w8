<!DOCTYPE html>
<!--
Demonstration of numeric and associative arrays.
-->
<?php
// An array with integer keys 0-2
$array1 = array("PHP", "is", "cool!");
$array1["end"] = "the end";

// An array with string keys
$array2 = array("subject" => "PHP", "verb" => "is", "adjective" => "cool");
$array2["punctuation"] = "!";

// An array with integer keys, mixing types
$array3 = array();
$array3[0] = 23;
$array3[1] = 45.3;
$array3[2] = "php";

// An array containing the date
$date = getdate();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Arrays</title>
        <link rel="stylesheet" href="css/default.css">
        <style>
            h2 {
                font-size: 15px;
            }
            aside {
                margin-left: 20px;
                color: darkblue;
            }
            #var_dumps {
                margin-left:20px;
            }
        </style>
    </head>
    <body>
        <h1>$array1</h1>
        <p>size: <?= count($array1) ?></p>
        <p>$array1[1] = <?= $array1[1] ?></p>
        <aside>
            <h2>Result of a foreach on $array1</h2>
            <p>
                <?php
                for ($i=0; $i<count($array1); $i++) {
                    echo " { $array1[$i] } ";  
// cannot echo the last element, undefined offset 3 .
                }
                echo "<br><br>";
                foreach ($array1 as $num) {
                    echo $num . " ";
                }
                ?>
            </p>
        </aside>
        
        <h1>$array2</h1>
        <p>size: <?= count($array2) ?></p>
        <?php
            echo "The verb is '{$array2["verb"]}'.</p>";
        ?>
        <aside>
            <h2>Result of a foreach on $array2 including keys</h2>
            <p>
                <?php
                foreach ($array2 as $key => $word) {
                    echo "$key($word) ";
                }
                ?>
            </p>
        </aside> 

        <h1>$array3</h1>
        <p>size: <?= count($array3) ?></p>
        <p>$array3[1] = <?= $array3[1] ?></p>

        <h1>$date</h1>
        <p>It is now <?= $date["hours"] ?>:<?= $date["minutes"] ?> on a <?= $date["weekday"] ?></p>

        <h1>Here are the var_dumps...</h1>
        <div id="var_dumps">
            <p>$array1: <?= var_dump($array1) ?></p>
            <p>$array2: <?= var_dump($array2) ?></p>
            <p>$array3: <?= var_dump($array3) ?></p>
            <p>$date: <?= var_dump($date) ?></p>
        </div>
    </body>
</html>