<?php 

// connect to the database
// $conn = mysqli_connect('localhost', 'jed', 'test1234', 'pizza_fanatic');

/*CREATE TABLE IF NOT EXISTS `department` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) DEFAULT NULL,
    `locationID` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;*/

$cd_host = "eu-cdbr-west-03.cleardb.net";
	$cd_port = 3306;
	$cd_socket = "";
	$cd_user = "bb21441781ad47"; // user name
	$cd_password = "b41d4264"; // password
	$cd_dbname = "heroku_26efcd604d3fd5f"; // database name

$conn = new mysqli($cd_host, $cd_user, $cd_password, $cd_dbname, $cd_port, $cd_socket);

	if (mysqli_connect_errno()) {
		
		$output['status']['code'] = "300";
		$output['status']['name'] = "failure";
		$output['status']['description'] = "database unavailable";
		$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
		$output['data'] = [];

		mysqli_close($conn);

		echo json_encode($output);

		exit;

    }	

// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

?>