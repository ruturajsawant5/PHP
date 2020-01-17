<?php

    $my_array = array("red","green","blue");

    echo "<h1>Original Array</h1>";
    foreach($my_array as $a)
    echo $a."</br>";

    array_push($my_array,"yellow");

    echo "<h1>Push</h1>";
    foreach($my_array as $a)
    echo $a."</br>";

    array_pop($my_array);

    echo "<h1>Pop</h1>";
    foreach($my_array as $a)
    echo $a."</br>";

    array_unshift($my_array,"yellow");

    echo "<h1>Unshift</h1>";
    foreach($my_array as $a)
    echo $a."</br>";


    array_shift($my_array);

    echo "<h1>Shift</h1>";
    foreach($my_array as $a)
    echo $a."</br>";

    $my_array_2 = array("orange","violet");

    $merged_array = array_merge($my_array,$my_array_2);

    echo "<h1>Merged Array</h1>";
    foreach($merged_array as $a)
    echo $a."</br>";

    $keys = array_keys($merged_array);
    // echo "<h1>Keys</h1>";
    // for ($x = 0; $x <= 4; $x++) {
    //     echo "The key is:". $keys[$x]." <br>";
    // }
    // echo $a."</br>";

    $values = array_values($merged_array);
    echo "<h1>Key - Values</h1>";
    for ($x = 0; $x <= 4; $x++) {
        echo "The key-values is:".$keys[$x]."-". $values[$x]." <br>";
    }


    shuffle($merged_array);
    
    echo "<h1>Shuffleded Array</h1>";
    foreach($merged_array as $a)
    echo $a."</br>";

?>