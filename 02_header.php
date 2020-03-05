<?php
ob_start();
?>
<!DOCTYPE html>
<!--
Header
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Hello World Web Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>This is php</h1>
        <?php
        header("Content-Type: text/plain");
        header("Content-Disposition:attachment;filename=header");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header('Refresh: 10; url=http:/www.google.ca'); 
        echo 'You will be redirected in 10 seconds'; 
//        header("Location: http://www.google.ca");
        // This is a comment line
        # This is another comment line
        /* This is the third comment line */
        echo "<h1>Hello, World!</h1>";
        ob_flush();
        ?>
        <p>Another line</p>
    </body>
</html>