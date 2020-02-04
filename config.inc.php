<?php
$db_username        = 'root'; //MySql database username
$db_password        = 'admin'; //MySql dataabse password
$db_name            = 'mitienda'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP

$currency			= '&euro; '; //currency symbol
$shipping_cost		= 2.50; //shipping cost
$taxes				= array( //List your Taxes percent here.
							'IVA' => 10, 
							'Service Tax' => 2,
							'Other Tax' => 0
							);

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}