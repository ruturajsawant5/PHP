<?php
    class student
    {
        var $roll=10;
        var $name="Ruturaj";
    }
    $std= new student();
    echo "Student Records";
    echo "Roll No".$std->roll;
    echo "Name".$std->name;

?>