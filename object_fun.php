<?php
    class student
    {
        var $roll=10;
        var $name="Ruturaj";
        function display(){
            echo "Student Records";
    echo "Roll No".$this->roll;
    echo "Name".$this->name;
        }
    }
    $std= new student();
    $std->display();

?>