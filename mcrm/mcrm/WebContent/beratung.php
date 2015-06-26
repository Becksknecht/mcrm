<!-- Login Status �berpr�fen, Wenn nicht eingeloggt, dann Weiterleitung zur LogIn-Ansicht -->
<?php include 'php/loginstatus.php'?>
<?php include 'navigation.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Multichannel CRM</title>
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

	<div class="container">
		<div class="row" id="top">
			<div class="col-xs-9">
				<h1>Beratungsgespräch mit: "KUNDE"</h1>
			</div>
			<div class="col-xs-2">
				<button class="btn btn-success btn-block"
					style="margin-top: 20px; margin-bottom: 20px">Beratung
					abgeschlossen</button>
			</div>
		</div>


		<div class="row" id="kundeninformationen">
			<div class="col-xs-12" id="overview">
				<div class="col-xs-8" style="position: relative; left: -15px">
					<div class="jumbotron" id="kunde">
						<!-- <div class="row">
								<div class="col-xs-3">
									
								</div>
								<div class="row">
									<div class="col-xs-2"> Name	</div>
									<div class="col-xs-3"> Peter Pan</div>
								</div>
							</div>-->
						<div class="row">

							<div class="col-xs-3" style="border: solid grey 1px">
								<div class="pict" style="margin-left: 5px">Kundenfoto</div>
							</div>
							<div class="col-xs-9" style="border: solid grey 1px">rvhjk</div>
							<div class="row" style="border: solid grey 1px">
								<div class="col-xs-2">asdf</div>
								<div class="col-xs-6">adkfjkw</div>
							</div>


							<div class="row" style="border: solid grey 1px">def</div>

						</div>
					</div>
				</div>






				<div class="col-xs-4">
					<div class="jumbotron" id="rabatte"
						style="position: relative; left: 15px">weitere individuelle
						Preisnachlässe</div>
				</div>
			</div>
		</div>

		<div class="row" id="vorschlaege">
			<div class="col-xs-12">
				<div class="jumbotron" id="profil" style="height: 300px">
					<div class="row">
						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-2">Bez.:</div>
								<div class="col-xs-10">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

						<div class="col-xs-3">
							<div class="row">
								<div class="col-xs-3 pict">BILD</div>
							</div>
							<div class="row">
								<div class="col-xs-1">Bez.:</div>
								<div class="col-xs-2">&nbsp;ARTIKELNAME</div>
							</div>
							<div class="row">
								<div class="col-xs-1 col-xs-offset-2">XX.XX€</div>
							</div>
							<div class="row">
								<div class="col-xs-3">Artikelnummer:</div>
							</div>
							<div class="row lastline">
								<div class="col-xs-3">1234567890</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-xs-4">
				<div class="jumbotron">weitere individuelle Preisnachlässe/Aktionen
				</div>
			</div>
			<div class="col-xs-8">
				<div class="jumbotron">weitere Kundeninformationen</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="jumbotron"></div>
			</div>
		</div>



	</div>







</body>
</html>