<?php

    class A{}
    class student extends A
    {
        public $name;
        public function student($name1)
        {
            $this->name=$name1;
        }
        public function display(){
            echo "Student Records";
            echo "Name".$this->name;
        }
    }
    class test extends student
    {
        public function display1(){
            echo "Welcome";
            
        }
    }
    $std= new test("Ruturaj");
    $std->display1();
            $std->display();


?>