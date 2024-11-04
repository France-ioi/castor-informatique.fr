<?php include("common.php"); ?>
<!DOCTYPE html>
<html>

<head>
<?php page_includes(); ?>
<title>Résultats Alkindi 2019</title>

<script src="bower_components/highcharts/highcharts.js" type="text/javascript"></script>
<script>
var iFrameLoaded = false;
function loadIFrame() {
   if (iFrameLoaded) {
      return;
   }
   iFrameLoaded = true;
   $('#map_etablissements').contents().find('html').html("<div style='width:100%; text-align:center; font-size:large; font-weight:bold; cursor:hand' onclick='parent.loadMap()'><p>Cliquez dans ce cadre pour afficher la carte des établissements participants</p><img src='img/map_small.png' height=150 /></div>");
}

</script>

</head>

<body>
<center>
<div id="content">
<div id="mainbar" class="mainbarstyle">


<style>
.qualificationTable {
   margin: 20px;
}
.qualificationTable tr td {
   border: solid black 1px;
   padding: 10px;
}
.qualificationTable tr:first-child td {
   font-weight: bold;
}
</style>

<h1 id="classement">Nombres de participants</h1>

<table class="qualificationTable">
<tr><td>Classe</td><td>Participants</td></tr>
<tr><td>4ème</td><td>23831</td></tr>
<tr><td>3ème</td><td>23693</td></tr>
<tr><td>Seconde</td><td>16787</td></tr>
<tr><td>Seconde pro</td><td>454</td></tr>
<tr><td>4ème Segpa</td><td>164</td></tr>
<tr><td>3ème Segpa</td><td>137</td></tr>
<tr><td>Total</td><td>65066</td></tr>
</table>


<h1 id="classement">Classements</h1>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2019_alkindi.php"); ?>
</div>

<h1 id="classement">Académies et établissements</h1>

<iframe src="alkindiSchoolResults.html" style="width:760px;height:100vh;"></iframe>


</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
