<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Multichannel CRM</title>


<!-- INCLUDED FILES -->
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!-- Einbinden des Stylesheets -->
<link rel="stylesheet" href="css/mcrmstyle.css">

</head>

<body>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand"> mCRM </a>
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only"> Toggle Navigation</span> <span
						class="icon-bar"> </span> <span class="icon-bar"> </span> <span
						class="icon-bar"> </span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li id="menuLadenansicht"><a href="ladenansicht.php"><span
							class="glyphicon glyphicon-tasks big"> </span> Kunden
							ausw&auml;hlen</a></li>
					<li id="menuBeratung"><a href="beratung.php"><span
							class="glyphicon glyphicon-comment big"> </span> Kunden beraten</a>
					</li>

					<li id="menuNutzerverwaltung"><a href="nutzerverwaltung.php"><span
							class="glyphicon glyphicon-cog big"> </span> Nutzer verwalten</a></li>
					<li id="menuLogut"><a href="php/logout.php"><span
							class="glyphicon glyphicon-off big"> </span> Logut</a>
					
					<li id="menuLogin"><a href="login.php"><span
							class="glyphicon glyphicon-user big"> </span> Login</a></li>
					<li id="menuLoginstatus"><?php include 'php/nav_loginanzeige.php'?></li>
				</ul>
			</div>
		</div>
	</div>


	<script>
	
		//dynamische Anzeige der Navigationselemente:	
		//Adminansicht: Nutzerverwaltung sichtbar - für andere Nutzer unsichtbar
		
		
		 if (rolle==0){
			 $("#menuNutzerverwaltung").hide();
		 } else {
			 $("#menuNutzerverwaltung").show();			 
		 }
		 
		//Eingeloggte Nutzer sehen Logut, nicht eingeloggte den Login-Button:
		
		
		 if (eingeloggt==0){
			 $("#menuLogin").show();
			 $("#menuLogut").hide();
			 $("#menuLadenansicht").hide();
			 $("#menuBeratungsansicht").hide();
		 } else {
			 $("#menuLogin").hide();
			 $("#menuLogut").show();
			 $("#menuLadenansicht").show();
			 $("#menuBeratungsansicht").show();
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

	</script>
</body>
</html>