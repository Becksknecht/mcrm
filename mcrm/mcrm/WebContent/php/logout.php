<?php
session_start();

#l�schen der user user session 
session_destroy();

header('Location: ../login.php');

?>