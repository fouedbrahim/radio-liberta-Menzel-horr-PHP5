<?php
include("config.php");

$req='Delete from `forum_sujets` where id="'.$_GET['id'].'";';
if(mysql_query($req))
{

header('Location:gest_forum.php');
}
else 
	echo 'not Done';
?>
