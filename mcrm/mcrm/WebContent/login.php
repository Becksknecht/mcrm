
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
		<h1>Login</h1>


		<div class="jumbotron" id="loginbox">



			<form action=php/einloggen.php method="post">
				<div class="form-group">
					<div class="form-group">
						<label for="user" class="col-sm-2 topmargin large">Benutzername</label>
						<div class="col-sm-10">
							<input type="text" class="form-control input-lg topmargin"
								placeholder="Benutzername" name="user" />
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 topmargin large">Passwort</label>
						<div class="col-sm-10 topmargin">
							<input type="password" class="form-control input-lg"
								placeholder="Passwort" name="password" />
						</div>
					</div>

					<div class="form-group col-sm-offset-2 topmargin">

						<input type="submit" name="submit" class="btn btn-success btn-lg"
							id="loginbutton" value="Login!" />

					</div>

					
				</div>
			</form>
		</div>
	</div>







</body>
</html>