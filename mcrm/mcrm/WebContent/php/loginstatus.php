<?php
session_start();
if (array_key_exists ( 'login', $_SESSION ) == 0) {
	# User ist nicht eingeloggt, also Formular anzeigen, die Datenbank
	# schliessen und das Programm beenden
	
	header ( 'location: login.php' );
	mysql_close ( $link );
	exit ();
} else {
	#header('location: ladenansicht.php');
	
	//Prüfen ob Admin, wenn ja: Variable an navigationsleiste übergeben => Anzeige LOgin/Logut entsprechend + Nutzervaltwund wenn Admin
	
	//Prüfen ob Admin, wenn ja: Variable an navigationsleiste übergeben => Anzeige LOgin/Logut entsprechend + Nutzervaltwund wenn Admin
	
	//Prüfen ob Admin, wenn ja: Variable an navigationsleiste übergeben => Anzeige LOgin/Logut entsprechend + Nutzervaltwund wenn Admin
}

?>