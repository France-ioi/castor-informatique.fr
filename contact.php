<?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concours Castor Informatique Français</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php page_tracker(); ?>
</head>

<body>
<center>

<?php page_header("Nous contacter"); ?>
		
<div id="content">

<div id="sidebar">
<?php page_menu_full(); ?>
</div>

<div id="mainbar" class="mainbarstyle">

<h1>Poser une question</h1> 

<p>
Si vous avez une question, vérifiez d'abord que la réponse n'est pas donnée dans <a href="manuel.php">le manuel</a>, puis contactez-nous par e-mail à <a  href="mailto:info@castor-informatique.fr">info@castor-informatique.fr</a>.
</p>

<h1>Réseaux sociaux</h1> 

<p>
Nous diffusons diverses annonces sur la préparation, le déroulement et les résultats du concours sur des réseaux sociaux :
<center>
<div class="contact-network">
   <a href="http://www.facebook.com/groups/141186436023922/">
      <img width="50px" src="img/facebook.png">
	   <div>Facebook</div>
   </a>
</div>
<div class="contact-network">
   <a href="https://twitter.com/ConcoursCastor">
      <img width="50px" src="img/twitter.png">
	   <div>Twitter</div>
   </a>
</div>
<!--
<div class="contact-network">
   <a href="http://www.viaeduc.fr/group/344">
       <img height="35px" src="img/viaeduc.png">
	   <div>Viaeduc</div>
   </a>
</div>
-->
</center>
</p>

<?php page_footer(); ?>
</div><!--mainbar-->
</div><!--content-->

</center>
</body>
</html>
