   <?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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

<?php page_header("Résultats"); ?>
		
<div id="content">

<div id="sidebar">
<?php page_menu_full(); ?>
</div>

<div id="mainbar" class="mainbarstyle">



<?php //******************************************************************** ?>

<h1>Statistiques de participation 2015</h1>

<p>L'édition 2015 du concours Castor Informatique français a été un grand succès !</p>

<ul class="resultats-summary">
<li>Le concours s'est déroulé du 14 au 21 novembre 2015.</li>
<li><span class="resultats-important">345023 élèves</span> ont participé, dont 49% de filles.</li>
<li><span class="resultats-important">2286 établissements</span> ont pris part au concours.</li>
</ul>


<p style="text-align: center"><input class="plateforme-button" type="button" value="Rejouer tous les sujets du concours Castor" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'"></p>

<h1 id="classement">Classements</h1>

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé individuellement dans la catégorie 6ème et que vous avez obtenu 388 points, vous pouvez voir dans le tableau que vous êtes classé(e) 248ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 4 élèves sont ex-aequo à la première place dans la catégorie 6ème avec un score de 480 points.
</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2015_castor.php"); ?>
</div>

<h1 style="clear:both">Qualification à Algoréa</h1>
   
   <p>
      Les 10% meilleurs classés de chaque niveau scolaire et chaque type de participation (individuelle ou par binôme) ont été sélectionnés pour l'étape suivante&nbsp;:
   </p>
   <p style="text-align:center;font-weight:bold">
      le premier tour du concours <a href="http://www.algorea.org">Algoréa</a>, s'est déroulé du 1er au 7 février 2016.
   </p>
   <p>
      Les finalistes de ce concours gagnaient un stage d'une semaine à Paris et des lots offerts par les sponsors.
   </p>
   <p>
   <span style="font-weight:bold">Score minimal pour se qualifier à Algoréa 2016 :</span>
   </p>
   <table class="thresholds">
      <tr style="font-weight:bold">
         <td>Type de participation</td>
         <td>CM1</td>
         <td>CM2</td>
         <td>6ème</td>
         <td>5ème</td>
         <td>4ème</td>
         <td>3ème</td>
         <td>2nde</td>
         <td>1ère</td>
         <td>Tale</td>
         <td>2nde<br/>pro</td>
         <td>1ère<br/>pro</td>
         <td>Tale<br/>pro</td>
      </tr>
      <tr>
         <td>Individuelle</td>
         <td>266</td>
         <td>299</td>
         <td>322</td>
         <td>350</td>
         <td>373</td>
         <td>390</td>
         <td>415</td>
         <td>440</td>
         <td>456</td>
         <td>359</td>
         <td>373</td>
         <td>404</td>
      </tr>
      <tr>
         <td>Binôme</td>
         <td>280</td>
         <td>310</td>
         <td>338</td>
         <td>366</td>
         <td>387</td>
         <td>406</td>
         <td>426</td>
         <td>450</td>
         <td>456</td>
         <td>392</td>
         <td>383</td>
         <td>410</td>
      </tr>
   </table>
   <br/>

<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
