<?php 
session_start();
session_destroy();



header("Location: http://localhost/webcontent/startseite.php");
echo 'Sie wurden ausgeloggt';
?>