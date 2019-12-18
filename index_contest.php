<?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
   <title>Concours Castor Informatique Français</title>

   <link href="style.css?v=3" rel="stylesheet" type="text/css">
   <style>
	p {
	   font-size: 22px;
	}
	</style>
</head>
<body style="margin: 20px">
   <?php page_header("");?>
<script>   
if(window.location.protocol != 'https:') {
  try {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (window.location.hostname != '127.0.0.1') {
         window.location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
      }
    }
    xhr.open('GET', 'https://static4.castor-informatique.fr/contestAssets/https_test.txt');
    xhr.send();
  } catch(e) {}
}
</script>
<div style="text-align:center">
   <div style='background-color:#F0F0F0;border:1px solid;padding:20px;width:800px;color:black;font-family:"Open Sans", sans-serif;margin:auto'>
   <p>
   Le concours Castor se déroule du 10 novembre au 14 décembre 2019.
   <!--Le 3e tour du concours Algoréa 2019 est en cours.-->
   </p><br/>
   <p>
   Vous pouvez accéder aux pages de présentation<br/>
   du <a href="http://castor-informatique.fr/home.php" style='color:#2482bf;font-weight:bold'>concours Castor</a> et du
   <a href="http://www.algorea.org" style='color:#2482bf;font-weight:bold'>concours Algoréa</a>.
   </p>
   </div>
   <br/><br/>
   <div style='background-color:#2482bf;color:white;padding:20px;font-size:20px;font-family:"Open Sans", sans-serif;width:600px;margin:auto'>
   <p>
   <a href="https://concours.castor-informatique.fr" style='color:white;font-weight:bold'>Cliquez ici pour commencer le concours Castor</a>
   </p>
   </div>
</div>
</body>
</html>