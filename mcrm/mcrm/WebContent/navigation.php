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
					<li id="menuBeratungsansicht"><a href="beratung.php"><span
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
		 var admin=1; //hier musst du dann die php variable übergeben, alles weitere sollte so passen
		 if (admin==0){
			 $("#menuNutzerverwaltung").hide();
		 } else {
			 $("#menuNutzerverwaltung").show();			 
		 }
		 
		//Eingeloggte Nutzer sehen Logut, nicht eingeloggte den Login-Button:
		 var eingeloggt=1; //hier analog dann die "eingeloggt" variable aus php übergeben -> Annahme: 0 = nicht eingeloggt, 1 = eingeloggt
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
		var activePage = 2;
					/* 	Bedeutungen: 
						0:= login-Seite
						1:= Ladenansicht (Kundenauswahl)
						2:= Beratungsansicht (Kundengespräch)
						3:= Nutzerverwaltung
						(vorerst zum Testen - evtl später anpassen?)
					*/
		var pageID;
						
			/*	1. Der grade überprüften Seite die ID des entsprechenden Menü-Elementes zuweisen
				2. Überprüfe ob zu testende Seite der aktiven Seite entspricht
				Wenn ja: 
				3. 	Füge Klasse "active" hinzu (Sorgt für Hinterlegung des Menüelementes)
				Wenn nein:
				3. 	Entferne Klasse "active"
			Alle Seiten durchgehen, wenn aktive Seite gefunden markieren, Class "active" hinzugfügen, bei allen anderen class active entfernen*/			
		for (var i=0;i<=3;i++){
			//1. Seite den Element-IDs der Navigation zuordnen
			switch(i){
				case 0: pageID="#menuLogin";
				break;
				case 1: pageID="#menuLadenansicht";
				break;
				case 2: pageID="#menuBeratungsansicht";
				break;
				case 3: pageID="#menuNutzerverwaltung";
				break;
			}	
				
			//2. Überprüfe ob es sich um die aktive Seite handelt
			if (i==activePage){ 
				//Klasse zum hervorheben hinzufügen
				$(pageID).addClass("active");
			} else
				//Klasse zum hervorheben entfernen
				$(pageID).removeClass("active");
		}

	</script>
</body>
</html>