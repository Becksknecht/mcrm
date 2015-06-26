<!-- Login Status überprüfen, Wenn nicht eingeloggt, dann Weiterleitung zur LogIn-Ansicht -->
<?php include 'php/loginstatus.php'?>
<?php include 'navigation.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1 user-scalable=no">
<title>Multichannel CRM</title>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!--  Einbinden des Javascripts, welches die Kundenliste aus der DB generiert-->

<script type="text/javascript" src="js/ladenansicht.js"></script>
<style type="text/css">
	.jumbotron{
		background-color: #F8F8F8;
		border: solid #FFD48E 2px;		
	}
	
	.big{
		font-size:110%;
	}
	
	#loginbutton{
		margin-top: 7px;
		margin-left: 15px;
	}
	
	.topmargin{
		margin-top: 7px;
	}
	
	.form-control:focus{
		border-color: #FFFD7C;
		box-shadow: inset 0 1px 1px rgba(255, 212, 142, 0.075), 0 0 8px rgba(255, 212, 142, 0.6);
	}
	
	.large{
		font-size:120%;
	}	
	
	#listendiv{
		overflow: scroll;
		height: 350px;
	}
	
	.kundenliste{
		margin-top: 10px;
		margin-bottom: 3px;
	}
	
	.framed{
		border-top: solid 1px #FFD48E;
		border-bottom: solid 1px #FFD48E;
		
	}
		
	.badge{
		background-color: #FFD48E;
		color: #F8F8F8;
		margin-top: 2px;
	}
	
	#verkaeuferVerfuegbar{
		margin-top: 25px;
		padding: 10px;
		margin-left: 15px;
		margin-right: 15px;
	}
	
	
	
</style>
</head>
<body>

	
	
	
	
	<div class="container">
	<h2> Kunden ausw&auml;hlen</h2>
	
		<div class="jumbotron" id="listendiv">
		

			
		</div>	
		
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<button type="button" class="btn btn-warning" id="verkaeuferToggle"> Weitere Verk&auml;ufer verf&uuml;gbar? </button>
			</div>		
		</div>
		<div class="row">
			<div class="jumbotron" id="verkaeuferVerfuegbar"> weitere Verk&auml;ufer anzeigen </div>			
		</div>	
				
	</div>
		
		<script>
		$("#verkaeuferVerfuegbar").hide();
				
		$("#verkaeuferToggle").click(function(){
			$("#verkaeuferVerfuegbar").slideToggle();
			
		});
		</script>


</body>
</html>