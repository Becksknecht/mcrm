<?php
#Einbinden der Datenbankverbindung
include 'dbconnect.php';

/*
 * SQL Abfrage f�r die Nutzer, diese sind bei uns untypischer wei�e in der Tabelle Verk�ufer gespeichert
 */
$sql = "SELECT * From Verk�ufer";




# Durchf�hren des SQL befehls und speichern des Ergenisses in $res
$res = mysql_query($sql);
# Erstellen des Arrays reply mit den Kunden-Objekten aus der Datenbank
while ($row = mysql_fetch_assoc($res)) {
	$reply[]=$row;

}


#Das Array via json an die Ladenansicht.js zur�ckgeben, dort wird das Ergebniss mit Ajax weiterverarbeitet
echo json_encode($reply);
?>