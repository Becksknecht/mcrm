
<?php
//DB Mitarbeiternr muss auf AUTO INCREMENT umgestellt werdne


// Einbinden der Datenbankverbindung
include 'dbconnect.php';

// Überprüfen ob Login-Daten eingegeben wurden
if (! empty ( $_POST ["submit"] )) {
	
	foreach ( $_POST as $k => $v )
		echo $k . ' -> ' . $v . "<br />";
		
		/*
	 * Die im Login eingegeben Daten sollten "escaped" bzw.
	 * maskiert werden um beispielsweiße SQL Injections
	 * entgegenzuwirken
	 */
	$username = mysql_real_escape_string ( $_POST ["user"] );
	$passwort = mysql_real_escape_string ( $_POST ["password"] );
	$vorname = mysql_real_escape_string ( $_POST ["fname"] );
	$nachname = mysql_real_escape_string ( $_POST ["lname"] );
	$role = mysql_real_escape_string ( $_POST ["role"] );
	
	
	// SQL Statement zum anlegen eines neuen Nutzers
	$sql = "INSERT INTO `mCRM_Database`.`Verkäufer` ( `Nutzername`, `Passwort`, `Vorname`, `Nachname`, `InStore`, `Abteilung_Abteilungsnummer`, `Rolle_Rollennummer`) VALUES ('mulbrick', NULL, 'Max', 'Ulbrick', 0, 1, 0)";
	
	// Durchführen der Überprüfung
	$res = mysql_query ( $sql, $link );
	// Anzahl der Reihen aus der SQL-Anfrage wird in $Anzahl gespeichert
	$anzahl = @mysql_num_rows ( $res );
	

} else {
	echo "fehler assi";
}
?>		