 <?php
	// Einbinden der Datenbankverbindung
	include 'dbconnect.php';
	
	// �berpr�fen ob Login-Daten eingegeben wurden
	if (! empty ( $_POST ["submit"] )) {
		
		// nurzum debuggen foreach($_POST as $k=>$v) echo $k . ' -> ' . $v."<br />";
		
		/*
		 * Die im Login eingegeben Daten sollten "escaped" bzw.
		 * maskiert werden um beispielswei�e SQL Injections
		 * entgegenzuwirken
		 */
		$username = mysql_real_escape_string ( $_POST ["user"] );
		$passwort = mysql_real_escape_string ( $_POST ["password"] );
		
		// SQL Statement zum �berpr�fen des Logins
		$sql = "SELECT * FROM Verk�ufer WHERE Nutzername='$username' AND Passwort='$passwort' LIMIT 1";
		
		// Durchf�hren der �berpr�fung
		$res = mysql_query ( $sql, $link );
		// Anzahl der Reihen aus der SQL-Anfrage wird in $Anzahl gespeichert
		$anzahl = @mysql_num_rows ( $res );
		
		// nur zum debuggen echo "Anzahl: ".$anzahl."<br />";
		
		// Wenn Anzahl = 0, dann gibt es keinen User, der den Anmeldedaten entspricht, sonst war der Login erfolgreich
		if ($anzahl > 0) {
			
			// Speichern des Login-Status in der Session
			$_SESSION ["login"] = 1;
			
			// Den Eintrag vom User in der Session speichern !
			$_SESSION ["user"] = mysql_fetch_array ( $res, MYSQL_ASSOC );
			
			// Anwesenheit des Verk�ufers auf 1 setzen; wird f�r die Verf�gbarkeit von Verk�ufern in der Ladenansicht ben�tigt
			$sql = "UPDATE Verk�ufer SET InStore=1 WHERE Mitarbeiternummer=" . $_SESSION ["user"] ["Mitarbeiternummer"];
			mysql_query ( $sql, $link );
			
			// �berpr�fen ob der User administrationsberechtigt ist
			if ($_SESSION ['user'] ['Rolle_Rollennummer'] == 1) {
				$_SESSION ["admin"] = 1;
			} else {
				$_SESSION ["admin"] = 0;
			}
			
			header ( 'location: ../ladenansicht.php' );
		} else {
			// Generiert ein und verwei�t zur�ck auf die Login-Seite.
			// Nicht unbedingt elegant, aber funktioniert :D
			echo '<script type="text/javascript">alert("Die Login-Daten waren nicht korrekt!");window.history.go(-1);</script>';
		}
	}
	
	// Datenbankverbindung wieder schliessen
	mysql_close ( $link );
	?> 