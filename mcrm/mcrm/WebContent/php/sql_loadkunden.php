<?php
#Einbinden der Datenbankverbindung
include 'dbconnect.php';

/*
 * SQL statement zum abrufen aller aktiven Kunden. Sp�ter sollte, hier die Zutrittskontrolle (zb. 
 *Gesichtserkennung in Verbindung mit NFC) daf�r sorgen, dass zum einen neue Kunden in die Datenbank
 *eingetragen werden und zum anderen, dass das Attribut "Kunde_inStore" beim betreten auf 1 gesetzt wird
 *und beim Verlassen wieder auf 0. Solange dieses System nicht eingebunden ist, werden einfach Stumpf alle
 *Kunden mit Kunde_inStore=1 in die DB eingetragen.
 *Weiterhin werden die Kunden aufsteigend nach Priorit�t "Kundenklasse" geordnet.
*/
$sql = "SELECT * From Kunde WHERE Kunde_inStore = 1 ORDER BY Kundenklasse_Kundenklasse ASC";

#INSTORE wird wnen man kunde annimt auf 0 gesetzt



# Durchf�hren des SQL befehls und speichern des Ergenisses in $res
$res = mysql_query($sql);
# Erstellen des Arrays reply mit den Kunden-Objekten aus der Datenbank
while ($row = mysql_fetch_assoc($res)) {
		$reply[]=$row;
	
}


#Das Array via json an die Ladenansicht.js zur�ckgeben, dort wird das Ergebniss mit Ajax weiterverarbeitet
echo json_encode($reply);
?>