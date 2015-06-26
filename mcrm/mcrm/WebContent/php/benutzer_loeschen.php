<?php
include 'dbconnect.php';

if (! empty ( $_POST ["submit"] )) {
	
	/*
	 * escapen der übergegebenen daten
	 */
	$username = mysql_real_escape_string ( $_POST ["user"] );
	
	// SQL zum Überprüfen ob der Nutzer existiert
	$sql = "SELECT * FROM Verkäufer WHERE Nutzername='$username'";
	$res = mysql_query ( $sql, $link );
	$anzahl = @mysql_num_rows ( $res );
	
	// Überprüfen ob nutzer existiert
	if ($anzahl == 0) {
		echo '<script type="text/javascript">alert("Dieser Nutzer existiert nicht!");window.history.go(-2);</script>';
	} else {
		
		// Verhindern, dass findige administratoren sich selbst löschen
		if ($_SESSION ['user'] ['Nutzername'] == $username) {
			echo '<script type="text/javascript">alert("Computer says no: pls don\'t suicide!");window.history.go(-1);</script>';
		} else {
			// SQL Statement zum löschen des angegebenen benutzers
			$sql = "DELETE FROM Verkäufer WHERE Nutzername='$username'";
			
			// Ausführen des Löschbefehls
			$del = mysql_query ( $sql, $link );
			
			header ( 'location: ../nutzerverwaltung.php' );
		}
	}
} else {
	echo "Fehler beim submit";
}
?>