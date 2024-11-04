   <?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php page_includes(); ?>
<title>Concours Castor Informatique Français</title>



<script src="ext/highcharts/js/highcharts.js" type="text/javascript"></script>
<script>
var iFrameLoaded = false;
function loadIFrame() {
   if (iFrameLoaded) {
      return;
   }
   iFrameLoaded = true;
}

function loadMap() {
}
</script>

<?php page_tracker(); ?>
</head>

<body>
<center>

<?php page_header("Résultats du premier tour Algoréa'2015"); ?>
		
<div id="content">

<div id="sidebar">
<?php page_menu_full(); ?>
</div>

<div id="mainbar" class="mainbarstyle">



<?php //******************************************************************** ?>
<?php
$contest_phase = 'contest-results';
if ($contest_phase == 'contest-running'):?>

<h1>Résultats</h1>

<p>Le concours se déroule du 12 au 19 novembre. <span style='font-weight:bold'>Les résultats seront annoncés après la fin du concours.</span></p>

<?php endif; if ($contest_phase == 'contest-over'):?>

<h1>Résultats</h1>

<p>Le concours est désormais terminé. <span style='font-weight:bold'>Les résultats seront accessibles dans les jours à venir.</span></p>

<?php endif; if ($contest_phase == 'contest-results-temp' || $contest_phase == 'contest-results' || $contest_phase == 'contest-soon'): ?>

<h1>Résultats du premier tour Algoréa 2015</h1>

Pour les résultats du premier tour Algoréa 2016, allez sur <a href="resultats_algorea2016.php">cette page</a>

<table class="results-table">
<tr>
<td style="border-right: solid 1px gray; width: <?php if ($contest_phase == 'contest-results-temp') { echo "50%"; } else { echo "60%"; } ?>;">

   <p class="results-table-title">Accès élève</p>

   <p>Pour consulter votre score et accéder aux corrections, 
   allez sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a> et utilisez le code que vous avez noté au moment de commencer le concours.
   </p>
   <!--
   <div class="login-results">
   <span style="font-weight: bold;">Code personnel :</span>
   <input name="result_eleve_code" type="text" style="width:8em">
   <input name="result_eleve_submit" type="submit" value="Accéder à mes résultats">
   </div>
   -->

   <p>
   Si vous avez perdu votre code, contactez votre coordinateur, sauf si vous vous étiez qualifiés via france-ioi.org, auquel cas vous pouvez retrouver votre code en vous connectant sur france-ioi et allant sur la page algorea.org.
   </p>

</td>
<td>
   <p class="results-table-title">Accès coordinateur</p>

   <p>Les coordinateurs peuvent consulter les résultats et classements de leurs élèves sur la <a href="http://coordinateur.castor-informatique.fr">plateforme coordinateur</a> lorsque les élèves ont participé en classe avec un code de groupe.</p>
   <br/>

   <?php if ($contest_phase == 'contest-results-temp'): ?>
   <p><span class='index-important'>Avant le 29 Novembre</span>, vérifiez et corrigez si nécessaire les noms de vos élèves, et signalez nous toute anomalie qui pourrait influencer les scores.</p>
   <?php endif; ?>

</td>
</tr>
</table>

<?php endif; ?>

<?php if ($contest_phase == 'contest-results-temp'): ?>

<h1>Classement et diplômes</h1>

<p>Les coordinateurs ont accès au classement des élèves depuis leur interface coordinateur. La liste des élèves récompensés par un lot, ainsi que la sélection des élèves pour le concours Algoréa sera bientôt disponible, de même que la possibilité d'imprimer les diplômes.</p>

<?php endif; ?>


<?php if ($contest_phase == 'contest-results' || $contest_phase == 'contest-soon'): ?>


<h1 id="classement">Classements et sélection au 2ème tour</h1>

<!--<p>Le classement correspondant à chaque score sera disponible prochainement.</p>-->
<?php 
/********************BEGIN TEMP*********************/
if (true): ?>

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé dans la catégorie 6ème et que vous avez obtenu 70 points, vous pouvez voir dans le tableau que vous êtes classé(e) 58ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 3 élèves sont ex-aequo à la première place dans la catégorie 6ème avec un score de 105 points.
</p>

<p>
Les élèves dont le nom est listé dans leur catégorie sont ceux qui sont qualifiés automatiquement pour le 2ème tour Algoréa, qui aura lieu début mai. La manière dont vous pourrez participer sera décrite très bientôt sur algorea.org.
</p>

<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2015_algorea.php"); ?>
</div>

<?php endif;
/********************END TEMP*********************/
?>

<?php endif; ?>


<?php page_footer(); ?>
</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>
