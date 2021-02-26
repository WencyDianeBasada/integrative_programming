<?php
    class User {
        // properties
        public $name;
        public $username;
        public $email;

        // methods
        function addFriend($name, $username, $email){
            $this->name = $name;
            echo "{$this->name} added a friend.";
            echo "<br>";
        }
        function postStatus($name, $username, $email){
            $this->name = $name;
            echo "{$this->name} posted a status.";
        }
 
    }
    $example = new User();
    $example->addfriend('Diane', 'Wency Diane Basada', 'basadawencydiane03.com');
    $example->postStatus('Diane', 'Wency Diane Basada', 'basadawencydiane03.com');


    
    
?>
