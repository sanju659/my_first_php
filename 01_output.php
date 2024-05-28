<?php 
    /*echo 'hello world <br>';
    echo 345;
    echo '<h1>Hello world</h1>';

    print_r('Hello world <br>');
    print_r([10, 20, 30]);*/

    /*var_dump('hello world <br>');
    var_dump([10, 20, 30]);*/

    echo "Today's date is :" . "\n";
    $today = date("d/m/Y");
    echo $today . "<br>";

    echo date("d.M.Y/D") . "<br>";
    echo date("d/m/Y") . "\n" . "<br>";
    echo date("d-m-Y") . "\n" . "<br>";
    echo date("d.m.Y") . "\n" . "<br>";

    $timestamp = time();
    echo ($timestamp);
    echo " " . "<br>";
    echo(date("F d, Y h:i:s A", $timestamp));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_output</title>
</head>
<body>
    <h2>
        <?php 
            echo 'Hello world'
        ?>
    </h2>
</body>
</html>