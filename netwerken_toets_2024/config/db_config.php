<?php

$dbhost = 'localhost';
$dbuser = 'net24sruesink_net_user_2024	';
$dbpass = 'netwerken2024!';
$dbname = 'net24sruesink_netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>