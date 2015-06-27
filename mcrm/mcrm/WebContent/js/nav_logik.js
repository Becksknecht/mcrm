
	
		//dynamische Anzeige der Navigationselemente:	
		//Adminansicht: Nutzerverwaltung sichtbar - für andere Nutzer unsichtbar
		
		$("#menuLogut").hide();
		$("#menuLadenansicht").hide();
		$("#menuBeratung").hide();
		$("#menuNutzerverwaltung").hide();
		
		 if (rolle==0){
			 $("#menuNutzerverwaltung").hide();
		 } else {
			 $("#menuNutzerverwaltung").show();			 
		 }
	
		//Eingeloggte Nutzer sehen Logut, nicht eingeloggte den Login-Button:
		
		
		 if (eingeloggt==0){
			 $("#menuLogut").hide();
			 $("#menuLadenansicht").hide();
			 $("#menuBeratung").hide();
		 } else {
			 $("#menuLogut").show();
			 $("#menuLadenansicht").show();
			 $("#menuBeratung").show();
		 }
		 		 
		//Hinterlege aktive Seite in der Navigationsleiste mit Farbe:
		/*	1. Bestimme Pfad
			2. Extrahiere Dateinamen
			3. Entferne Dateierweiterung (.php)
			4. Erstelle MenüID
			5. Highlighte entsprechenden Menüpunkt*/

		//1. Bestimme Pfad:
		var path = window.location.pathname;
		//2. Extrahiere Dateinamen:
		var patt = /[a-z]*.php/ig; //Regulärer Ausdruck - matcht auf Zeichenketten, die dem Muster folgen /<beliebige Buchstabenfolge>.php
		var page = patt.exec(path); //Sucht im Dateipfad nach diesem Muster und extrahiert den String aus dem Pfad
		//3. Entferne Dateierweiterung: 
		var strPage = String(page); //Umwandeln des Obejektes in String
		var p = strPage.indexOf("."); //Stelle des Punktes herausfinden
		var pageID = strPage.slice(0,p); //.php abschneiden 
		//4. Erstelle MenüID
		pageID = "#menu"+pageID.substring(0,1).toUpperCase() + pageID.substring(1).toLowerCase(); //Erstelle String, der auf Navigationselemente referenziert
		//5. Highlighte Menüeintrag der aktiven Seite
		$(pageID).addClass("active");

