<?php
include 'dbconnect.php';

if (! empty ( $_POST ["submit"] )) {
	
	/*
	 * escapen der �bergegebenen daten
	 */
	$username = mysql_real_escape_string ( $_POST ["user"] );
	
	// SQL zum �berpr�fen ob der Nutzer existiert
	$sql = "SELECT * FROM Verk�ufer WHERE Nutzername='$username'";
	$res = mysql_query ( $sql, $link );
	$anzahl = @mysql_num_rows ( $res );
	
	// �berpr�fen ob nutzer existiert
	if ($anzahl == 0) {
		echo '<script type="text/javascript">alert("Dieser Nutzer existiert nicht!");window.history.go(-2);</script>';
	} else {
		// SQL Statement zum l�schen des angegebenen benutzers
		$sql = "DELETE FROM Verk�ufer WHERE Nutzername='$username'";
		
		// Ausf�hren des L�schbefehls
		$del = mysql_query ( $sql, $link );
		
	
		
		header('location: ../nutzerverwaltung.php');
	}
} else {
	echo "Fehler beim submit";
}
?>