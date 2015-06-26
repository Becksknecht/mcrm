<?php
session_start();
# UNBEDINGT NOCH INSTORE auf 0 setzen
#löschen der user user session 
session_destroy();

header('Location: ../login.php');

?>