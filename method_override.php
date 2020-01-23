<?php
    class student
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
        public function display(){
            echo "Welcome";
            
        }
    }
    $std= new test("Ruturaj");
    $std->display();
            $std->display();


?>