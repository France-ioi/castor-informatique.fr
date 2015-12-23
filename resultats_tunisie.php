   <?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php page_includes(); ?>
<title>Concours Castor Informatique Tunisie</title>



<script src="ext/highcharts/js/highcharts.js" type="text/javascript"></script>

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

<h1>Consultez les résultats</h1>

<table class="results-table">
<tr>
<td style="border-right: solid 1px gray; width: <?php if (contest_phase() == 'contest-results-temp') { echo "50%"; } else { echo "60%"; } ?>;">

   <p class="results-table-title">Accès élève</p>

   <p>Pour consulter votre score et <!--accéder aux corrections, --> revoir vos réponses, 
   allez sur la <a href="http://tunisie.castor-informatique.fr?tab=continue">plate-forme du concours</a> et utilisez le code que vous avez noté au moment de commencer le concours.
   </p>
   <p>
   Si vous avez perdu votre code, contactez votre coordinateur.
   </p>

</td>
<td>
   <p class="results-table-title">Accès coordinateur</p>

   <p>Les coordinateurs peuvent consulter les scores de tous leurs élèves sur la plate-forme coordinateur</a>.</p>
   <br/>
</td>
</tr>
</table>


<p style="text-align: center"><input class="plateforme-button" type="button" value="Rejouer tous les sujets du concours Castor" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'"></p>

<h1>Diplômes</h1>

<p>
À l'issue du concours, des diplômes pour chacun des participants peuvent être imprimés les coordinateurs.
</p>

<h1 id="classement">Classements</h1>

<p>
À l'issue du concours, un classement des meilleurs de chaque niveau scolaire sera publié, et chaque élève pourra connaître son rang au sein de son niveau ainsi que parmi l'ensemble des participants. Les coordinateurs auront également accès aux classements de l'ensemble de leurs élèves.
</p>
<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score.
</p>

<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://tunisie.castor-informatique.fr?tab=continue">plateforme du concours tunisien</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2015_tunisie.php"); ?>
</div>



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
