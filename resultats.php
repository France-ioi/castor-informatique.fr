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
<?php if (contest_phase() == 'contest-running'):?>

<h1>Résultats</h1>

<p>Le concours se déroule du 14 au 21 novembre. <span style='font-weight:bold'>Les résultats seront annoncés après la fin du concours.</span></p>

<?php endif; if (contest_phase() == 'contest-over'):?>

<h1>Résultats</h1>

<p>Le concours est désormais terminé. <span style='font-weight:bold'>Les résultats seront accessibles dans les jours à venir.</span></p>

<?php endif;

if (contest_phase() == 'contest-results-temp' || contest_phase() == 'contest-results'): ?>

<h1>Consultez les résultats</h1>

<table class="results-table">
<tr>
<td style="border-right: solid 1px gray; width: <?php if (contest_phase() == 'contest-results-temp') { echo "50%"; } else { echo "60%"; } ?>;">

   <p class="results-table-title">Accès élève</p>

   <p>Pour consulter votre score et accéder aux corrections, 
   allez sur la <a href="http://concours.castor-informatique.fr?tab=continue">plate-forme du concours</a> et utilisez le code que vous avez noté au moment de commencer le concours.
   </p>
   <!--
   <div class="login-results">
   <span style="font-weight: bold;">Code personnel :</span>
   <input name="result_eleve_code" type="text" style="width:8em">
   <input name="result_eleve_submit" type="submit" value="Accéder à mes résultats">
   </div>
   -->

   <p>
   Si vous avez perdu votre code, contactez votre coordinateur.
   </p>

</td>
<td>
   <p class="results-table-title">Accès coordinateur</p>

   <p>Les coordinateurs peuvent consulter les résultats et classements de tous leurs élèves sur la <a href="http://coordinateur.castor-informatique.fr">plate-forme coordinateur</a>.</p>
   <br/>

   <?php if (contest_phase() == 'contest-results-temp'): ?>
   <p><span class='index-important'>Avant le 29 Novembre</span>, vérifiez et corrigez si nécessaire les noms de vos élèves, et signalez nous toute anomalie qui pourrait influencer les scores.</p>
   <?php endif; ?>

</td>
</tr>
</table>

<?php endif; ?>

<?php if (contest_phase() == 'contest-results-temp'): ?>

<h1>Classement et diplômes</h1>

<p>Les coordinateurs ont accès au classement des élèves depuis leur interface coordinateur. La liste des élèves récompensés par un lot, ainsi que la sélection des élèves pour le concours Algoréa sera bientôt disponible, de même que la possibilité d'imprimer les diplômes.</p>

<?php endif; ?>


<?php if (contest_phase() == 'contest-results' || contest_phase() == 'contest-soon'): ?>

<h1>Statistiques de participation</h1>

<p>L'édition 2014 du concours Castor Informatique français a été un grand succès !</p>

<ul class="resultats-summary">
<li>Le concours s'est déroulé du 12 au 19 novembre 2014.</li>
<li><span class="resultats-important">228324 élèves</span> ont participé, dont 49% de filles.</li>
<li><span class="resultats-important">1543 établissements</span> ont pris part au concours.</li>
</ul>


<p style="text-align: center"><input class="plateforme-button" type="button" value="Rejouer tous les sujets du concours Castor" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'"></p>

<h1>Établissements participants</h1>

<center><iframe scrolling="no" id="map_etablissements" src="about:blank" onload="loadIFrame()"></iframe></center>

<h1>Diplômes, lots et concours Algoréa</h1>

<table><tr><td style='vertical-align:top; padding-right: 1em'>
   <p>
   À l'issue du concours, des diplômes pour chacun des participants peuvent être imprimés les coordinateurs.
   </p>
   <p>
   Par ailleurs, les 10% meilleurs classés de chaque niveau scolaire seront sélectionnés pour l'étape suivante : le premier tour du concours <a href="http://www.algorea.org">Algoréa</a>. Les finalistes de ce concours gagnent un stage d'une semaine à Paris et des lots offerts par les sponsors.
   </p>
   <p>
   Jusqu'en 2014, des clés USB à l'effigie du Castor étaient distribués aux élèves les mieux classés du concours Castor. Avec l'augmentation du nombre de participants, nous ne pouvions récompenser qu'un demi pourcent des participants, soit moins d'un lot par établissement. Pour que le concours reste gratuit, nous laissons désormais les établissements qui le souhaitent offrir eux-mêmes des lots aux mieux classés.
   </p>
</td><td>
   <img src="img/diplome_castor_small.png" width="200">
   <!--<img src="img/cle_2012.png" width="200">-->
</td></tr></table>

<h1 id="classement">Classements</h1>

<p>
À l'issue du concours, un classement des meilleurs de chaque niveau scolaire sera publié, et chaque élève pourra connaître son rang au sein de son niveau ainsi que parmi l'ensemble des participants. Les coordinateurs auront également accès aux classements de l'ensemble de leurs élèves.
</p>
<p>
Le classement n'est publié que jusqu'au début de l'année scolaire suivante.
</p>

<!--<p>Le classement correspondant à chaque score sera disponible prochainement.</p>-->
<?php 
/********************BEGIN TEMP*********************/
if (false): ?>

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé dans la catégorie 6ème/5ème et que vous avez obtenu 186 points, vous pouvez voir dans le tableau que vous êtes classé(e) 542ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 21 élèves sont ex-aequo à la première place dans la catégorie 6ème/5ème avec un score de 177 points.
</p>

<p>
Les élèves dont le nom est listé dans leur catégorie sont ceux qui recevront une clé USB à l'effigie du Castor, via leur coordinateur.
</p>

<p><span style="font-weight:bold">Attention :</span> nous remarquons que quelques établissements sont présents de manière disproportionnée parmi ceux recevant des lots. Quelle qu'en soit la raison, et pour mieux répartir les lots, à partir de l'année prochaine nous fixerons une limite (restant à déterminer et liée au nombre d'élèves participants) sur le nombre de lots que peut recevoir un établissement.</p>  

<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2014.php"); ?>
</div>

<p>
Vous pouvez également consulter le <a href='img/scores_castor_2014.pdf'>taux de réussite</a> des participants sujet par sujet.
</p>
<?php endif;
/********************END TEMP*********************/
?>

<?php endif; ?>


<?php //******************************************************************** ?>
<h1>Historique</h1>

<p>Nombre d'élèves et d'établissements participants :</p>
<table class="resultats-histo">

<tr>
<td width="33%">Année</td>
<td width="33%">Élèves</td>
<td width="33%">Établissements</td>
</tr>

<tr>
<td>2014</td>
<td>228.324</td>
<td>1543</td>
</tr>

<tr>
<td>2013</td>
<td>171.932</td>
<td>1289</td>
</tr>

<tr>
<td>2012</td>
<td>90.794</td>
<td>721</td>
</tr>

<tr>
<td>2011</td>
<td>46.380</td>
<td>478</td>
</tr>
</table>

<p>Détails du nombre de participants par niveau :</p>

<table class="resultats-histo">

<tr>
<td width="20%">Année</td>
<td width="20%">6ème-5ème</td>
<td width="20%">4ème-3ème</td>
<td width="20%">Seconde</td>
<td width="20%">1ère-Term.</td>
</tr>

<tr>
<td>2014</td>
<td>107319</td>
<td>81414</td>
<td>20884</td>
<td>18013</td>
</tr>

<tr>
<td>2013</td>
<td>82722</td>
<td>59492</td>
<td>15779</td>
<td>13939</td>
</tr>

<tr>
<td>2012</td>
<td>43647</td>
<td>32017</td>
<td>7266</td>
<td>7867</td>
</tr>

<tr>
<td>2011</td>
<td>21287</td>
<td>17412</td>
<td>4186</td>
<td>3495</td>
</tr>

</table>


<?php //******************************************************************** ?>
<h1>Lien utiles</h1>

<ul class="useful-links">
<li>Apprendre à programmer sur <a href="http://www.france-ioi.org/">France-IOI</a></li>
<li>Apprendre à programmer sur <a href="http://javascool.gforge.inria.fr/">Java's Cool</a></li>
<li>Découvrir les sciences du numérique sur <a href="http://interstices.info/">Interstices</a></li>
</ul>



<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
