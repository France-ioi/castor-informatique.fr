<?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concours Castor Informatique Français</title>
<?php page_includes(); ?>

<script>
var generating = false;
function initQuestionFrame(id) {
   $("#" + id).contents().find("body").css("border", "none").css("padding", 0).css("width", "680px").css("margin", "0");
}        

</script>

<?php page_tracker(); ?>

</head>

<body>
<center>

<?php page_header(""); 
 // Concours français collège et lycée ?>

<div id="content">

<div id="sidebar">

<?php page_menu_full(); ?>

<?php //******************************************************************** ?>
<div class="submenu">

<h1>Réseaux</h1>
Rejoignez-nous sur :
<table width="100%">
<tr>
  <td align="center">
    <a href="http://www.facebook.com/groups/141186436023922/">
      <img width="50px" height="50px" src="img/facebook.png">
	<div style="font-size:12px">Facebook</div>
    </a>
  </td>
  <td align="center">
    <a href="https://twitter.com/ConcoursCastor">
      <img width="50px" height="50px" src="img/twitter.png">
	<div style="font-size:12px">Twitter</div>
    </a>
  </td>
</tr>
<tr>
<td align="center" colspan="2">
   <a href="http://experimentation.viaeduc.fr/group/344">
      <img height="35px" src="img/viaeduc.png">
   </a>   
</table>
</div>

<div class="submenu">
<h1>Organisateurs</h1>
<a href="http://www.ens-cachan.fr/" class="menu-logo"><img width="75%" src="img/logo_ensc_bleu.png" alt="stef-ENS" class="logo-img"></a>
<a href="http://www.france-ioi.org" class="menu-logo"><img width="80%" src="img/logo_franceioi.jpg"  alt="france-ioi" class="logo-img"></a>
<a href="http://www.inria.fr" class="menu-logo"><img width="95%" src="img/logo_inria.png" alt="inria" class="logo-img" style="margin-bottom:15px;"></a>
</div>

<div class="submenu">
<h1>Partenaires</h1>
<a href="http://www.capmaths.fr/" class="menu-logo"><img width="50%" src="img/logo_capmaths.png" alt="CapMaths" class="logo-img" style="padding-bottom: 15px"></a>
<a href="http://www.gouvernement.fr/les-investissements-d-avenir" class="menu-logo"><img width="60%" src="img/logo_investissements_davenir.png" alt="investissements d'avenir" class="logo-img"></a>
<a href="http://www.assopascaline.fr" class="menu-logo"><img width="95%" src="img/logo_pascaline.jpg" alt="pascaline" class="logo-img"></a>
<a href="http://www.cnrs.fr/ins2i/" class="menu-logo"><img width="55%" src="img/logo_cnrs.gif" alt="cnrs" class="logo-img"></a>
<a href="http://www.systematic-paris-region.org/" class="menu-logo"><img width="55%" src="img/logo_systematic.jpg" alt="Systematic Paris Region" class="logo-img" ></a>
<a href="http://tour123.wordpress.com/" class="menu-logo"><img width="70%" src="img/logo_tour123.png" alt="Tour 123" class="logo-img" ></a>
</div>


</div><!--sidebar-->

<div id="mainbar" class="mainbarstyle">

<?php //******************************************************************** ?>
<div>

   <div style='float:right; text-align: center; margin-left:1em'>
      <span style='font-size: normal'>Nombre de participants au concours Castor</span><br />
      <a href='resultats.php'><img src='img/participation.png' alt='Cliquez pour accéder aux statistiques détaillées.' width='340' height='151' style='margin-top:0.5em' /> </a>
      <!--  -->
   </div>
      <?php //   width='375' height='176' ?>
      
   <p style='font-weight: bold'>Le concours Castor vise à faire découvrir aux jeunes l'informatique et les sciences du numérique.</p>
   <p>
   Le concours est organisé tous les ans, vers le début du mois de novembre. Il se déroule 
   sous la supervision d'un enseignant, en salle informatique.
   <!-- L'édition 2013 a été un grand succès, avec près de <span class='index-important'>180&nbsp;000&nbsp;participants</span> répartis
   dans 1700&nbsp;collèges et lycées de toute la France.-->
   <?php if (contest_phase() == 'contest-soon'):?>
      </p><p><span class='index-important'>L'édition 2015 se prépare ! Elle aura lieu du samedi 14 novembre à 7h au samedi 21 novembre à 20h, heure de Paris.</span>
   <?php elseif (contest_phase() == 'contest-running'):?>
      </p><p><span class='index-important'>L'édition 2015 est en cours ! Elle se déroule du samedi 14 novembre à 7h au samedi 21 novembre à 20h, heure de Paris.</span>
   <?php elseif (contest_phase() == 'contest-over'):?>
      </p><p><span class='index-important'>L'édition 2015 vient de se terminer.</span> 
      <p>
      <span style="color:red">Le calcul de tous les scores va demander un peu de temps. Les résultats seront disponibles dans les jours à venir.</span>
   <?php elseif (contest_phase() == 'contest-results-temp'):?>
      </p><p><span class='index-important' style='color:red'>L'édition 2015 a été un grand succès, avec plus de 340 000 participants</span>  dans près de 2300 établissements&nbsp;!</p> 
      <p>
      <span class='index-important'>Les coordinateurs peuvent consulter les scores sur leur <a href="http://coordinateur.castor-informatique.fr">interface coordinateur</a></span>, et corriger les éventuelles erreurs dans les noms des participants ou marquer les participations hors classement.
      </p>
      <p>
      Le classement définitif sera annoncé vers le 10 décembre, le temps pour les coordinateurs de faire les corrections nécessaires.
      </p>
   <?php elseif (contest_phase() == 'contest-results'):?>
   <?php endif; ?>
   </p>

   <p style="text-align: center">
<!--      <input class="plateforme-button" type="submit" value="Aller au concours" onclick="document.location = 'http://concours.castor-informatique.fr'"> 
      <?php if (contest_phase() == 'contest-results-temp'):?>
      <input class="plateforme-button" type="submit" value="Accès aux résultats de l'édition 2013" onclick="document.location = 'resultats.php'">
      <?php endif; ?>-->
      <?php if (true):?>
      <input class="plateforme-button" type="submit" value="S'entraîner sur les sujets passés" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'">
      <?php endif; ?>
   </p>

</div>

<?php //******************************************************************** ?>
<?php if (contest_phase() == 'contest-results-temp' || contest_phase() == 'contest-results'):?>

   <h1>Résultats 2015</h1>

   <p><span class='index-important'>
      L'édition 2015 a été un grand succès, avec plus de <span class='index-important'>345 000 participants</span>  dans 2286 établissements&nbsp;!</span>
   </p>
   <p>
   Les participants peuvent <a href="http://concours.castor-informatique.fr?tab=continue">accéder à leur score</a> en utilisant leur code d'accès personnel fourni au début du concours.</p>
   <p>
   Les coordinateurs peuvent accéder aux scores de tous leurs élèves sur <a href="http://coordinateur.castor-informatique.fr">l'interface coordinateur</a>.
   </p>
   <p>
   Les 10% meilleurs de chaque catégorie sont qualifiés pour le 1er tour du <a href="http://algorea.org">concours Algoréa</a>,<br/>qui se déroulera <span style="font-weight:bold">du 1er au 7 février 2016</span>.
   </p>
   <p style="text-align:center">
      <input class="plateforme-button" type="submit" value="Accès aux résultats du Castor 2015" onclick="document.location = 'resultats.php'">
   </p>
<!--
      <p style="float:clear">8200 élèves classés parmi les 10% meilleurs du Castor 2014 ont participé au concours <a href="http://algorea.org">Algoréa 2015</a>, et ont progressé au fil des 4 tours du concours, jusqu'à la finale, à laquelle 19 élèves de la 6ème à la 1ère ont été invités.</p>
-->
<?php endif; ?>


<!--
<div style="text-align:center">
   <div style="border: 2px solid gray;padding:0.5em;margin:0.5em;font-size:110%">
   <p>En attendant l'édition 2015 du Castor, apprenez la programmation sur <a href="http://www.france-ioi.org/">France-ioi.org</a>&nbsp;!
   </div>
</div>
-->
<?php //******************************************************************** ?>
<h1>Participer à l'édition 2016</h1>

<?php if (contest_phase() == 'contest-soon' || contest_phase() == 'contest-running'):?>
   <p>La prochaine édition du concours Castor aura lieu du 14 au 21 novembre 2015.</p>
   <ul>
   <li>
   Si vous êtes enseignant, <a href="http://coordinateur.castor-informatique.fr">inscrivez-vous</a>
   dès maintenant comme coordinateur. La création des groupes sera bientôt ouverte.
   </li>
   <li>
   Si vous êtes élève, parlez du concours à un enseignant, par
   exemple votre professeur de mathématiques ou de technologie.
   </ul>
<?php else:?>
   <p>La prochaine édition du concours Castor aura lieu en novembre 2016.</p>
   <p>Si vous êtes enseignant, <a href="http://coordinateur.castor-informatique.fr">inscrivez-vous</a>
   dès maintenant comme coordinateur.</p>

   <p>En attendant l'édition 2016 du Castor, vous pouvez <a href='http://concours.castor-informatique.fr?tab=home'>rejouer les concours passés</a> ou apprendre la programmation sur <a href="http://www.france-ioi.org/">France-ioi.org</a>.

   <!--<p>En attendant, il est possible de <a href='http://concours.castor-informatique.fr?tab=home'>rejouer les concours passés</a>.</p>-->
<?php endif; ?>
<!--
<p>En attendant le concours, <a href='http://concours.castor-informatique.fr?tab=home'>rejouez les concours passés</a> ou apprenez la programmation<br/>sur <a href="http://www.france-ioi.org/">France-ioi.org</a>&nbsp;!
-->

<!--
   <h1>Après le Castor : Concours Algoréa 2015</h1>
   <p>
   Les 10% meilleurs participants du concours Castor 2014 étaient qualifiés pour le premier tour du concours <a href="http://www.algorea.org">Algoréa</a>, qui s'est déroulé du 2 au 8 février. Plus de 8200 élèves ont participé, pour la plupart dans leur établissement. La suite est sur <a href="http://www.algorea.org">algorea.org</a>
   </p>
   -->
   <!--
   <p><b>Le concours est ouvert jusqu'au 6 février 18h pour la participation dans l'établissement. Il se déroule sur <a href="http://concours.castor-informatique.fr">concours.castor-informatique.fr</a>.</p>
   <p>La participation de chez soi sera ouverte du vendredi 6 février 18h au dimanche 8 février minuit.</p>
   -->

<?php //******************************************************************** ?>
<h1>Principe du concours Castor</h1>
<p>
Le concours couvre
divers aspects de l'informatique : information et représentation,
pensée algorithmique, utilisation des applications, structures de
données, jeux de logique, informatique et société.</p>
<p>
<!--Points clés à retenir :-->
<ul>
<li>Le concours dure <font class='index-important'>45 minutes</font> et comporte environ 12 questions interactives.</li>
<li>Il est <font class='index-important'>gratuit</font> et ne requiert <font class='index-important'>aucune connaissance préalable</font>  en informatique.</li>
<li>Le concours est ouvert du CM1 à la terminale, et s'adapte au niveau des élèves.</li>
<li>Les élèves participent seuls ou par binômes, en salle informatique.</li>
<li>Le concours se déroule sur une semaine, au mois de novembre. <!--du 12 au 19 novembre inclus.--></li>
<li>Il peut être effectué à n'importe quel moment de cette semaine.</li>
<li>Des corrections détaillées sont proposées peu après la clôture.</li>
<li>Des diplômes sont offerts aux participants selon leur score.</li>
<li>Les 10% meilleurs de chaque niveau sont qualifiés pour le <a href="http://www.algorea.org">concours Algoréa</a>.</li>
<li>Les sujets du concours peuvent être rejoués en ligne toute l'année.</li>
</ul>
</p>

<?php if (false): ?>
   <p>
   Des informations détaillées sont disponibles dans le 
   <a href="manuel.php">manuel du concours</a>.
   </p>
<?php endif; ?>

<?php if (true):
?>
<?php //******************************************************************** ?>
<!--<h1>Exemple de sujet</h1>

<div style="font-size: 1.25em; color: black; font-weight: bold; font-family: arial; margin-top: 1em">Traverser le pont</div>
<iframe style="width: 750px; height: 420px;" class="question-frame" id="questionFrame2" onload="initQuestionFrame('questionFrame2')" src="questions/2014/2014-FR-06-bridge/index.html
?options=%7B%22difficulty%22%3A%22easy%22%2C%20%22hideTitle%22%3A1%7D"></iframe>-->
<?php endif; ?>


<?php //******************************************************************** ?>
<h1>Rejouer les concours</h1>

<p style="text-align: center"><input class="plateforme-button" type="submit" value="Accès à tous les sujets du concours Castor" onclick="document.location = 'http://concours.castor-informatique.fr?tab=home'"></p>


<?php //******************************************************************** ?>
<h1>Au delà du concours</h1>

<p>
Le Castor n'est qu'un premier pas vers la découverte de
l'informatique. Pour continuer, nous vous recommandons&nbsp;
<a href="http://www.france-ioi.org/">France-ioi</a>
et <a href="http://javascool.gforge.inria.fr/">Java's Cool</a>,
qui proposent de nombreux cours et exercices pour progresser dans les
domaines de la programmation et de l'algorithmique.
Par ailleurs,
<a href="http://interstices.info/">Interstices</a> vous permet de 
découvrir les sciences du numérique.
</p>

<?php //******************************************************************** ?>
<h1>À propos du Castor</h1>

<p>Le Castor Informatique a été créé en Lituanie en 2004, et est <a href="http://www.bebras.org/">organisé dans 36 pays</a>, dont la France depuis 2011. Chaque pays organise le concours indépendamment la même semaine, en suivant des règles communes. Les pays se réunissent chaque année pour préparer un ensemble de questions, parmi lesquelles chacun effectue sa propre sélection d'une trentaine de sujets, dont certains sont communs à plusieurs niveaux.
Environ 929 000 élèves ont participé à l'épreuve 2014 dans le monde.
</p>
<p>L'édition Française est organisée par l'association <a href="http://www.france-ioi.org">France-ioi</a>, <a href="http://www.inria.fr">Inria</a> et l'<a href="http://www.ens-cachan.fr">ENS Cachan</a>, grâce à la contribution de <a href="organisation.php">nombreuses personnes</a>.

<h1>Affiches</h1>
<p>Pour faire connaîre le concours autour de vous, vous pouvez imprimer les affiches suivantes :</p>
<p>
<table style="text-align:center;font-weight:bold">
<tr><td>Affiche CM1/CM2</td><td>Affiche collège</td><td>Affiche lycée</td></tr>
<tr>
   <td style="padding:10px"><a href="documents/poster_castor_2015_primaire.pdf" target="new"><img src="img/poster_castor_2015_primaire.png" style="width:100%;margin:10px"></a></td>
   <td style="padding:10px"><a href="documents/poster_castor_2015_college.pdf" target="new"><img src="img/poster_castor_2015_college.png" style="width:100%;margin:10px"></a></td>
   <td style="padding:10px"><a href="documents/poster_castor_2015_lycee.pdf" target="new"><img src="img/poster_castor_2015_lycee.png" style="width:100%;margin:10px"></a></td>
</tr>
</table>
</p>
<?php page_footer(); ?>

</div><!--mainbar-->
</div><!--content-->

</center>
</body>
</html>