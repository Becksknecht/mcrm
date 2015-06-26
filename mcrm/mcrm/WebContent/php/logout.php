<?php
session_start();

#löschen der user user session 
session_destroy();

header('Location: ../login.php');

?>