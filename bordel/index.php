<?php 	session_start(); 
setcookie('pseudo', 'Charles', time() + 3600, null,null,false,true);
setcookie('age', '26', time() + 3600, null,null,false,true);
?>
<?php include("navi.php");?>
<?php 
$monfichier = fopen('compteur.txt', 'r+');
fputs($monfichier, 'test de con');
fclose($monfichier);
?>	
<p><?php echo $_COOKIE['pseudo']; ?></p>
<p><?php echo $_COOKIE['age']; ?></p>
<form method="post" action="cible.php" class="form-horizontal" enctype="multipart/form-data"></form>
<?php include("footer.php"); ?>