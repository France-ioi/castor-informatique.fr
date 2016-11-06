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

<p>Le concours se déroule du 5 au 19 novembre. <span style='font-weight:bold'>Les résultats seront annoncés après la fin du concours.</span></p>

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

   <p>Pour consulter votre score et <!--accéder aux corrections, --> revoir vos réponses, 
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

   <p>Les coordinateurs peuvent consulter les scores de tous leurs élèves sur la <a href="http://coordinateur.castor-informatique.fr">plate-forme coordinateur</a>.</p>
   <br/>

   <?php if (contest_phase() == 'contest-results-temp'): ?>
   <p><span class='index-important'>Avant le 8 Décembre</span>, veuillez vérifier et corriger si nécessaire les noms de vos élèves, et nous signaler toute anomalie qui pourrait influencer les scores.</p>
   <?php endif; ?>

</td>
</tr>
</table>

<?php endif; ?>

<?php if (contest_phase() == 'contest-results-temp'): ?>

<h1>Classement et diplômes</h1>

Les classements seront publiés vers le 10 décembre. Les coordinateurs pourront alors voir quels élèves sont qualifiés pour le concours Algoréa, et imprimer des diplômes pour l'ensemble des participants.

<!--
<p>Les coordinateurs ont accès au classement des élèves depuis leur interface coordinateur. La liste des élèves récompensés par un lot, ainsi que la sélection des élèves pour le concours Algoréa sera bientôt disponible, de même que la possibilité d'imprimer les diplômes.</p>
-->
<?php endif; ?>


<?php if (contest_phase() == 'contest-results' || contest_phase() == 'contest-soon'): ?>

<h1>Statistiques de participation</h1>

<p>L'édition 2015 du concours Castor Informatique français a été un grand succès !</p>

<ul class="resultats-summary">
<li>Le concours s'est déroulé du 14 au 21 novembre 2015.</li>
<li><span class="resultats-important">345023 élèves</span> ont participé, dont 49% de filles.</li>
<li><span class="resultats-important">2286 établissements</span> ont pris part au concours.</li>
</ul>


<p style="text-align: center"><input class="plateforme-button" type="button" value="Rejouer tous les sujets du concours Castor" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'"></p>
<!--
<h1>Établissements participants</h1>

<center><iframe scrolling="no" id="map_etablissements" src="about:blank" onload="loadIFrame()"></iframe></center>
-->
<h1 id="classement">Classements</h1>

<!--
<p>
À l'issue du concours, un classement des meilleurs de chaque niveau scolaire sera publié, et chaque élève pourra connaître son rang au sein de son niveau ainsi que parmi l'ensemble des participants. Les coordinateurs auront également accès aux classements de l'ensemble de leurs élèves.
</p>
<p>
Le classement n'est publié que jusqu'au début de l'année scolaire suivante.
</p>-->

<!--<p>Le classement correspondant à chaque score sera disponible prochainement.</p>-->

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé individuellement dans la catégorie 6ème et que vous avez obtenu 388 points, vous pouvez voir dans le tableau que vous êtes classé(e) 248ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 4 élèves sont ex-aequo à la première place dans la catégorie 6ème avec un score de 480 points.
</p>

<!--<p>
Les élèves dont le nom est listé dans leur catégorie sont ceux qui recevront une clé USB à l'effigie du Castor, via leur coordinateur.
</p>-->
  <p>Notez que certains enfants de primaire ou collège ont leur participation rattachée à un lycée. Nous allons vérifier au cas par cas si l'établissement est le bon.</p>

<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2015_castor.php"); ?>
</div>
<!--
<p>
Vous pouvez également consulter le <a href='img/scores_castor_2014.pdf'>taux de réussite</a> des participants sujet par sujet.
</p>
-->
<?php endif; ?>

<h1>Diplômes</h1>

   <img src="img/diplome_castor_small.png" width="200" style="float:right">

   <p>
   À l'issue du concours, des diplômes pour chacun des participants peuvent être imprimés par les coordinateurs.
   </p>
   <br/>
   <p>
   Jusqu'en 2014, des clés USB à l'effigie du Castor étaient distribués aux élèves les mieux classés du concours Castor. Avec l'augmentation du nombre de participants, nous ne pouvions récompenser qu'un demi pourcent des participants, soit moins d'un lot par établissement. Pour que le concours reste gratuit, nous laissons désormais les établissements qui le souhaitent offrir eux-mêmes des lots aux mieux classés.
   </p>

<h1 style="clear:both">Qualification à Algoréa</h1>
   
   <p>
      Les 10% meilleurs classés de chaque niveau scolaire et chaque type de participation (individuelle ou par binôme) sont sélectionnés pour l'étape suivante&nbsp;:
   </p>
   <!--
   <p style="text-align:center;font-weight:bold">
      le premier tour du concours <a href="http://www.algorea.org">Algoréa</a>, du 1er au 7 février 2016.
   </p>
   <p>
      Les finalistes de ce concours gagnent un stage d'une semaine à Paris et des lots offerts par les sponsors.
   </p>
   <p>
   <span style="font-weight:bold">Score minimal pour se qualifier à Algoréa :</span>
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
   -->
   <p>
      Notez qu'il est aussi possible de se qualifier en résolvant au moins 12 exercices sur <a href="http://www.france-ioi.org">france-ioi.org</a>.
   </p>


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
<td>2015</td>
<td>344 923</td>
<td>2286</td>
</tr>

<tr>
<td>2014</td>
<td>228 324</td>
<td>1543</td>
</tr>

<tr>
<td>2013</td>
<td>171 932</td>
<td>1289</td>
</tr>

<tr>
<td>2012</td>
<td>90 794</td>
<td>721</td>
</tr>

<tr>
<td>2011</td>
<td>46 380</td>
<td>478</td>
</tr>
</table>

<p>Détails du nombre de participants par classe :</p>

<table class="resultats-histo">

<tr>
<td>Année</td>
<td>CM1</td>
<td>CM2</td>
<td>6<sup>e</sup></td>
<td>5<sup>e</sup></td>
<td>4<sup>e</sup></td>
<td>3<sup>e</sup></td>
<td>2<sup>nde</sup></td>
<td>1<sup>ère</sup></td>
<td>T<sup>ale</sup></td>
</tr>

<tr>
<td>2015</td>
<td>6&nbsp;305</td>
<td>10&nbsp;048</td>
<td>79&nbsp;072</td>
<td>72&nbsp;839</td>
<td>61&nbsp;191</td>
<td>54&nbsp;338</td>
<td>36&nbsp;183</td>
<td>14&nbsp;457</td>
<td>10&nbsp;490</td>
</tr>

<tr>
<td>2014</td>
<td colspan=2>&nbsp;</td>
<td colspan=2>107 319</td>
<td colspan=2>81 414</td>
<td>20 884</td>
<td colspan=2>18 013</td>
</tr>

<tr>
<td>2013</td>
<td colspan=2>&nbsp;</td>
<td colspan=2>82 722</td>
<td colspan=2>59 492</td>
<td>15 779</td>
<td colspan=2>13 939</td>
</tr>

<tr>
<td>2012</td>
<td colspan=2>&nbsp;</td>
<td colspan=2>43 647</td>
<td colspan=2>32 017</td>
<td>7 266</td>
<td colspan=2>7 867</td>
</tr>

<tr>
<td>2011</td>
<td colspan=2>&nbsp;</td>
<td colspan=2>21 287</td>
<td colspan=2>17 412</td>
<td>4 186</td>
<td colspan=2>3 495</td>
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
