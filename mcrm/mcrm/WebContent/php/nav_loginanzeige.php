<?php
// Anzeige für die Navigationsleiste, ob ein user eingeloggt ist, bzw welcher
IF (isset ( $_SESSION )) {
	echo "Eingeloggt als: " . $_SESSION ['user'] ['Nutzername'];
} else {
	echo "nicht eingeloggt";
}
?>