<?php
session_start();
# UNBEDINGT NOCH INSTORE auf 0 setzen
#l�schen der user user session 
session_destroy();

header('Location: ../login.php');

?>