(function() {

	$
			.ajax({
				type : "POST",
				url : "php/loadnutzerverw.php",
				dataType : "json",
				/*
				 * data: { mail: $("input[name="mail"]").val(), message:
				 * $("textarea[name="message"]").val(), }, damit könnte man
				 * variablen übergeben (so im vgl. wie der post bei login)
				 */
				success : function(data) {
					/*
					 * Erzeugen der Listenelemente mittels einer Schleife, die
					 * wiederum die jeweileigen Daten aus dem Daten array
					 * verwendet und im die passenden divs einsetzt. Leider sehr
					 * unübersichtlich, aber es funktioniert :D
					 */
					for (var i = 0; i < data.length; i++) {

						var div = '<div class="row nutzerliste">	<div class="col-xs-2"> <img src="pics/dummy.jpg"/> </div><div class="col-xs-8 framed"><div class="row"><div class="col-xs-2"> Name:  </div>	<div class="col-xs-6"> '
								+ data[i].Vorname
								+ ' '
								+ data[i].Nachname
								+ '  </div></div><div class="row"><div class="col-xs-2"> Username: </div><div class="col-xs-6">  '
								+ data[i].Nutzername
								+ ' </div>	</div></div><div class="col-xs-2"> <a href="nutzerPasswort.php"> <button class="btn btn-success btn-lg"> Passwort ändern </button> </a></div>'

						// Anhängen des jeweils erzeugten Elements via jquery an
						// das div mit der entsprechenden id
						jQuery("#nutzerContainer").append(div);

					}
				}
			});

})();

/*
 * 1. übergebe ID in session speichern 2. Neue Seite öffnen 3. auf der neuen
 * Seite sofrt-funktion (so wie dies js hier nur neue datei) die je nach Session
 * ID sql ausführt 4. daten zurück
 */