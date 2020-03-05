<!DOCTYPE html>
<!--
Demonstration of a few features of PHP variables
-->
<?php
# Variable declarations are here
$a = "I'm a String!";   # String
$b = rand(1, 10);       # int
$c = 45.6 - $b;         # float
$d = true;              # boolean
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Variables</title>
        <link rel="stylesheet" href="css/default.css">
        <style>
            #var_dumps {
                margin-left:20px;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<h1>Your first variable contains: " . $a . "</h1>";
        ?>

        <h1>
            <?php
            echo "Your second variable contains: $b <br>";
            echo 'Your second variable with single quote contains: $b<br>';
            echo 'slash \\<br>';
            echo 'quote \'';
            ?>
        </h1>
        <h6> ?=  vs ?php <br>
            <?php echo '?=$d ' ?><br>
            <?= $d ?><br>
            <?php echo '?php $d ' ?><br>
            <?php $d ?><br>
            <?php echo '"<"?php echo $d' ?><br>
            <?php echo $d ?><br>
        </h6>
        <h6>
            <?php print_r(getdate()) ?><br>

            <?php
//            echo var_dump(getdate());
            $today = getdate();
            foreach ($today as $key => $value) {
                echo $key . " : " . $value . "<br>";
            }
            ?>       
            <?= rand(1, 10) ?>

        </h6>

        <h1>Your third variable contains <?= $c ?></h1>

        <h1>
            <?php
            if ($d) {
                echo "Your fourth variable was TRUE!";
            } else {
                echo "Your fourth variable was FALSE!";
            }
            ?>
        </h1>
        <h1>Here are the var_dumps...</h1>

        //The var_dump() function is used to display structured information
        //(type and value) about one or more variables.

        <div id="var_dumps">
            <?= var_dump($a) ?><br>
            <?= var_dump($b) ?><br>
            <?= var_dump($c) ?><br>
            <?= var_dump($d) ?><br>
        </div>

        <div>
            Variable variables
            https://www.php.net/manual/en/language.variables.variable.php
            <br>
            <?php
            //You can even add more Dollar Signs

            $Bar = "a";
            $Foo = "Bar";
            $World = "Foo";
            $Hello = "World";
            $a = "Hello";

            echo $a; //Returns Hello
            echo $$a; //Returns World
            echo $$$a; //Returns Foo
            echo $$$$a; //Returns Bar
            echo $$$$$a; //Returns a

            echo $$$$$$a; //Returns Hello
            echo $$$$$$$a; //Returns World
            //... and so on ...//
            ?>
            <br>
            <?php
// Given these variables ...
            $nameTypes = array("first", "last", "company");
            $name_first = "John";
            $name_last = "Doe";
            $name_company = "PHP.net";

// Then this loop is ...
            foreach ($nameTypes as $type)
                print ${"name_$type"} . "\n";

// ... equivalent to this print statement.
            print "$name_first\n$name_last\n$name_company\n";
            ?>
            <br>
            <?php
            class foo {
                var $bar = 'I am bar.';
                var $arr = array('I am A.', 'I am B.', 'I am C.');
                var $r = 'I am r.';
            }

            $foo = new foo();
            $bar = 'bar';
            $baz = array('foo', 'bar', 'baz', 'quux');
            echo $foo->$bar . "\n";
            echo $baz[1]."\n";  //bar
            echo "{$baz[1]}"."\n"; //bar
            echo $foo->{$baz[1]} . "\n"; // ->bar
            echo $foo->bar . "\n";

            $start = 'b';
            $end = 'ar';
            echo $foo->{$start . $end} . "\n"; //->bar

            $arr = 'arr';
            echo $arr[1] . "\n";   //get the element of the string
            echo $foo->{$arr[1]} . "\n";
            ?>
        </div>

    </body>
</html>