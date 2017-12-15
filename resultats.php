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

<!--<p>Le concours est désormais terminé. <span style='font-weight:bold'>Les résultats seront accessibles dans les jours à venir.</span></p>-->

<p>L'édition 2017 du concours Castor est terminée. Plus de 598 000 élèves ont participé !</p>

<p>Les coordinateurs ont accès à tous les scores et qualifications à <a href="http://www.algorea.org" target="_blank">Algoréa</a> de leurs élèves depuis leur interface coordinateur.</p>

<p>Chaque élève peut revoir son score et sa participation en entrant son code d'équipe sur <a href="http://concours.castor-informatique.fr" target="_blank">concours.castor-informatique.fr</a>. Si vous avez perdu votre code d'équipe, votre coordinateur pourra vous transmettre vos résultats.</p>

<p>Les seuils de qualifications au 1er tour du <a href="http://www.algorea.org" target="_blank">concours Algoréa</a> sont les suivants :</p>
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
<table class="qualificationTable" cellspacing=0 cellpadding=0><tr><td>Score au concours Castor</td><td>Qualification à Algoréa</td></tr>
<tr><td>Moins de 300 points</td><td>Oui, en catégorie blanche</td></tr>
<tr><td>Entre 300 et 399 points</td><td>Oui, en catégorie jaune</td></tr>
<tr><td>400 points ou plus</td><td>Oui, en catégorie orange</td></tr>
</table>
<p>
Contrairement aux éditions précédentes, tous les participants au concours Castor sont qualifiés pour le concours Algoréa, dont le but et d'accompagner chacun dans son apprentissage de la programmation. Le score au Castor détermine la catégorie de départ.
</p>
<p>
Pour plus d'informations sur les catégories et le concours Algoréa, rendez-vous sur <a href="http://www.algorea.org" target="_blank">algorea.org</a>
</p>
<p>
Les classements, diplômes et statistiques diverses sur le concours Castor 2017 seront publiés fin décembre ou début janvier. Nous laissons un peu de temps pour permettre aux coordinateurs d'effectuer des corrections et de nous signaler toute anomalie, par exemple sur la classe de chaque élève.
</p>
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

<p>L'édition 2016 du concours Castor Informatique français a été un grand succès !</p>

<ul class="resultats-summary">
<li>Le concours s'est déroulé du 5 au 19 novembre 2016.</li>
<li><span class="resultats-important">474&nbsp;903 élèves</span> ont participé.</li>
<li><span class="resultats-important">2&nbsp;885 établissements</span> ont pris part au concours.</li>
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
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé individuellement dans la catégorie 6ème et que vous avez obtenu 300 points, vous pouvez voir dans le tableau que vous êtes classé(e) 1052ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 497 élèves sont ex-aequo à la 1052ème place dans la catégorie 6ème avec un score de 300 points.
</p>

<p>Notez que certains élèves se sont trompés en indiquant leur classe, et que les coordinateurs n'ont pas encore corrigé. Les corrections pourront entraîner des changementsmineurs dans les classements.</p>

<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2016_castor.php"); ?>
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
   Une fois les classements rendus définitifs, des diplômes pour chacun des participants peuvent être imprimés par les coordinateurs.
   </p>
   <br/>
   <p>
    Le concours étant gratuit, et avec plus d'un demi-million de praticipants, nous ne proposons pas de lots pour les participants au concours Castor. Nous laissons désormais les établissements qui le souhaitent offrir eux-mêmes des lots aux mieux classés.</p>
    <p>Les récompenses sont le diplôme à imprimer par les coordinateurs et la qualification au concours de programmation <a href="http://www.algorea.org" target="_blank">Algoréa</a>. 
   </p>
<!--
<h1 style="clear:both">Qualification à Algoréa</h1>
   
   <p>
      Les participants au concours Castor peuvent ensuite participer au concours <a href="http://www.algorea.org">Algoréa</a>, dont l'objectif est de les accompagner dans leur apprentissage de la programmation. Chaque élève pourra participer dans une catégorie qui dépendra du score obtenu au concours Castor.
   </p>
   <p style="text-align:center;font-weight:bold">
      Le premier tour du concours <a href="http://www.algorea.org">Algoréa</a> aura lieu du 7 au 20 janvier 2018.
   </p>
   <p>
      Les finalistes de ce concours gagnent un stage d'une semaine à Paris et des lots offerts par les sponsors.
   </p>
   <p>
      Pour ceux qui n'ont pas pu participer au concours Castor, d'autres modes de qualifications sont proposés.
   </p>
   <p>
	  Des parcours de préparation au concours Algoréa sont disponibles sur <a href="http://algorea.org" target="_blank">algorea.org</a>.
   </p>
   -->
<!--
   <p>
   <span style="font-weight:bold">Score minimal pour se qualifier à Algoréa 2017 :</span>
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
         <td>220</td>
         <td>250</td>
         <td>260</td>
         <td>290</td>
         <td>310</td>
         <td>325</td>
         <td>350</td>
         <td>350</td>
         <td>380</td>
         <td>300</td>
         <td>310</td>
         <td>325</td>
      </tr>
      <tr>
         <td>Binôme</td>
         <td>230</td>
         <td>255</td>
         <td>280</td>
         <td>300</td>
         <td>320</td>
         <td>340</td>
         <td>350</td>
         <td>350</td>
         <td>390</td>
         <td>320</td>
         <td>320</td>
         <td>340</td>
      </tr>
   </table>
   <br/>
   -->
<!--
<h1 style="clear:both">Participation par établissement</h1>
<p>
Ci-dessous, vous pouvez consulter pour chaque académie, la liste des établissements qui ont participé à cette édition, et le nombre de participants par catégorie.
</p>

<iframe src="schoolResults.html" style="width:760px;height:100vh;"></iframe>
-->
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
<td>2016</td>
<td>474 903</td>
<td>2885</td>
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
<td>2016</td>
<td>8&nbsp;310</td>
<td>13&nbsp;359</td>
<td>110&nbsp;648</td>
<td>100&nbsp;083</td>
<td>86&nbsp;949</td>
<td>78&nbsp;786</td>
<td>45&nbsp;581</td>
<td>18&nbsp;830</td>
<td>12&nbsp;355</td>
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
-->

<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
