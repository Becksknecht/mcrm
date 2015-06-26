<?php
#Einbinden der Datenbankverbindung
include 'dbconnect.php';

/*
 * SQL Abfrage für die Nutzer, diese sind bei uns untypischer weiße in der Tabelle Verkäufer gespeichert
 */
$sql = "SELECT * From Verkäufer";




# Durchführen des SQL befehls und speichern des Ergenisses in $res
$res = mysql_query($sql);
# Erstellen des Arrays reply mit den Kunden-Objekten aus der Datenbank
while ($row = mysql_fetch_assoc($res)) {
	$reply[]=$row;

}


#Das Array via json an die Ladenansicht.js zurückgeben, dort wird das Ergebniss mit Ajax weiterverarbeitet
echo json_encode($reply);
?>