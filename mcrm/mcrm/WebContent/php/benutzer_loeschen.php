<?php
include 'dbconnect.php';

if (! empty ( $_POST ["submit"] )) {

	// nurzum debuggen foreach($_POST as $k=>$v) echo $k . ' -> ' . $v."<br />";

	/*
	 * Die im Login eingegeben Daten sollten "escaped" bzw.
	 * maskiert werden um beispielsweiße SQL Injections
	 * entgegenzuwirken
	 */
	$username = mysql_real_escape_string ( $_POST ["username"] );
	echo $username;
}
else{
	echo "geht net";
}
?>