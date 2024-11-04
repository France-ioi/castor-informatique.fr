<?php include("common.php"); ?>
<!DOCTYPE html>
<html>

<head>
<?php page_includes(); ?>
<title>Concours Castor Informatique Français</title>



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

function loadMap() {
   $('#map_etablissements').attr("src", "map/map2014.html").css("height", "810px");
}
</script>

<?php page_tracker(); ?>
</head>

<body>
<center>

<?php page_header("Résultats 2023"); ?>
		
<div id="content">

<div id="sidebar">
<?php page_menu_full(); ?>
</div>

<div id="mainbar" class="mainbarstyle">



<?php //******************************************************************** ?>

<h1>Résultats 2023</h1>

<ul class="resultats-summary">
<li>Le concours s'est déroulé du 10 novembre au 22 décembre 2023.</li>
<li><span class="resultats-important">688&nbsp;837 élèves</span> ont participé.</li>
<li><span class="resultats-important">3&nbsp;810 établissements</span> ont pris part au concours.</li>
</ul>

Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé individuellement dans la catégorie 6<sup>e</sup> et que vous avez obtenu 200 points, vous pouvez voir dans le tableau que vous êtes classé(e) 2457<sup>e</sup> parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 746 élèves sont ex-aequo à la 2457<sup>e</sup> place dans la catégorie 6<sup>e</sup> avec un score de 200 points.
</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats/resultats2023_castor.php"); ?>
</div>

<!--
<h2>Participations par académies et établissements.

<iframe src="schoolResults.html" style="width:760px;height:100vh;"></iframe>-->


<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
