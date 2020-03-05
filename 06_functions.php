<!DOCTYPE html>
<!--
Demonstration of a few features of PHP functions
-->
<?php
function repeat($num, $list) {
    echo "<ul>Repeat $num Times";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$list</li>";
    }
    echo "</ul>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Repeat Functions</title>
        <link rel="stylesheet" href="css/default.css">
    </head>
    <body>
        <h1>Repeat Function</h1>
        <?= repeat(3, "Not again..."); ?>
    </body>
</html>
