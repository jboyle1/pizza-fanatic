<?php 

// connect to the database
$conn = mysqli_connect('localhost', 'jed', 'test1234', 'pizza_fanatic');

// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

?>