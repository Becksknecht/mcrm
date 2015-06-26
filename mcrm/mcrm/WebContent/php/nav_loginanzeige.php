<?php
// Anzeige für die Navigationsleiste, ob ein user eingeloggt ist, bzw welcher
IF (isset ( $_SESSION )) {
	echo "Eingeloggt als: " . $_SESSION ['user'] ['Nutzername'];
	$eingeloggt=1;
	if($_SESSION['admin']==1){
		$role=1;	
	}else{
		$role=0;
	}
	echo('<script type="text/javascript">var rolle='.$role.';</script>');	
} else {
	echo "nicht eingeloggt";
	$eingeloggt=0;
	echo('<script type="text/javascript">$("#menuLogut").hide();</script>');
}
echo ('<script type="text/javascript"> var eingeloggt='.$eingeloggt.';</script>');

?>