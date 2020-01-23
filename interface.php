<?php
    interface myIn{
        public function getName();
        public function getAge();
    }
    class myClass implements myIn
    {
        public function getName()
        {
            echo "My Name is Ruturaj";
        }
        public function getAge()
        {
            echo "My age is 22";
        }
        
    }
    $obj = new myClass();
    $obj->getName();
    $obj->getAge();

?>