<?php
session_start();
include("config.inc.php");
$insertPayment = "INSERT INTO shop_payment(order_id, payment_status, payment_response)VALUES('".order_id."', '".$payment_status."','".$payment_response."')";
$updateOrder = "UPDATE shop_order set order_status = 'PAID' where id = ". $_SESSION["orderId"];
        mysql_query($mysqli_conn, $updateOrder) or die("database error:"). mysqli_error($mysql_conn);