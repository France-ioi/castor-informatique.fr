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

<?php page_header("Résultats 2020"); ?>
		
<div id="content">

<div id="sidebar">
<?php page_menu_full(); ?>
</div>

<div id="mainbar" class="mainbarstyle">



<?php //******************************************************************** ?>

<h1>Résultats 2020</h1>

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score.</p>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats/resultats2020_castor.php"); ?>
</div>


<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
