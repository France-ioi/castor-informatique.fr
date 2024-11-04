<?php include("common.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concours Castor Informatique Français</title>
<script>
var checked = false;
if(window.location.protocol != 'https:') {
  try {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      if (window.location.hostname != '127.0.0.1') {
         window.location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
      } else {
         checked = true;     
      }
    }
    xhr.open('GET', 'https://static4.castor-informatique.fr/contestAssets/https_test.txt');
    xhr.send();
  } catch(e) {
      checked = true;     
  }
} else {
   checked = true;     
}

function loadBody() {
   if (checked) {
      var body = document.getElementById("body");
      body.style.display = "block";
   } else {
      setTimeout(loadBody, 100);
   }
}

</script>
<?php page_includes(); ?>

<script>
var generating = false;
function initQuestionFrame(id) {
   $("#" + id).contents().find("body").css("border", "none").css("padding", 0).css("width", "680px").css("margin", "0");
}        

</script>

<?php page_tracker(); ?>

</head>

<body style='display:none' id='body' onload='loadBody()'>
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
</table>
</div>

<div class="submenu">
<h1>Organisateur</h1>
<a href="http://www.france-ioi.org" class="menu-logo"><img width="80%" src="img/logo_franceioi_200px.png"  alt="france-ioi" class="logo-img"></a>
</div>

<div class="submenu">
<h1>Partenaires</h1>
<a href="http://www.inria.fr" class="menu-logo"><img width="95%" src="img/logo_inria.png" alt="inria" class="logo-img" style="margin-bottom:15px;"></a>
<a href="http://www.ens-cachan.fr/" class="menu-logo"><img width="95%" src="img/logo_ens_paris_saclay.png" alt="ENS Paris-Saclay" class="logo-img"></a>
</div>

<div class="submenu">
<h1>Sponsors</h1>
<!--
<a href="https://www.fondation-blaise-pascal.org/" class="menu-logo"  target="_blank"><img width="100%" src="img/logo_blaise_pascal.png" alt="Fondation Blaise Pascal" class="logo-img"></a>
<br/>
<a href="https://www.alstom.com/fr" class="menu-logo"  target="_blank"><img width="100%" src="img/logo_alstom.png" alt="Alstom France" class="logo-img"></a>
<br/>
<a href="https://www.gouvernement.fr/programme-investissements-avenir/commissariat-general-investissement" class="menu-logo" target="_blank"><img width="50%" src="img/logo_pia.png" alt="Programme Investissements d' Avenir" class="logo-img"></a>
-->
<!--<a href="http://www.agence-nationale-recherche.fr/" class="menu-logo"  target="_blank"><img width="70%" src="img/logo_anr.png" alt="Agence Nationale de la Recherche" class="logo-img" ></a>-->
<br/>
<a href="https://talentsdunumerique.com" class="menu-logo"  target="_blank"><img width="100%" src="img/logo_talents_numerique.png" alt="pascaline" class="logo-img"></a>
<!--<a href="http://tour123.wordpress.com/" class="menu-logo"  target="_blank"><img width="60%" src="img/logo_tour123.png" alt="Tour 123" class="logo-img" ></a>-->
</div>


</div><!--sidebar-->

<div id="mainbar" class="mainbarstyle">

<?php //******************************************************************** ?>
<div>

<div style="background-color:#FFF0F0;border:solid black 1px;padding:5px">
<!--
<p>Le concours Castor 2023 est terminé. Les <a href="resultats.php">résultats sont disponibles</a>.</p>
<p>L'étape suivante est le concours <a href="https://algorea.org">Algorea</a>. L'épreuve du premier tour se déroule <a href="https://concours.castor-informatique.fr">ici</a>.</p>

<p>La demi-finale du concours <a href="http://algorea.org" target="_blank">Algoréa</a> est terminée. 24 élèves ont été invités à la finale à Paris et ont déjà été contactés. Ceux qui ont fait la demi-finale peuvent voir leur résultat en se reconnectant sur <a href="http://concours.algorea.org" target="_blank">concours.algorea.org</a> et vérifier s'ils sont qualifiés pour la finale en ligne (du 15 juillet au 31 août). Les coordinateurs ont aussi accès aux résultats.</p>
-->
<!--
<p>Le concours Castor Informatique 2023 est <a href="https://concours.castor-informatique.fr">en cours</a>. Il est ouvert jusqu'au au 22 décembre 2023.</p>
-->
<p>Le concours Castor Informatique 2024 se déroulera du 10 novembre au 21 décembre 2024.</p>
<p>Plus de 700 000 participants sont attendus.</p>
<p>Les enseignants peuvent inscrire leurs classes et organiser des entraînements sur leur <a href="https://coordinateur.castor-informatique.fr">interface coordinateur</a>.</p>
</div>
<br/>
<!--
   <div style='float:right; text-align: center; margin-left:1em'>
      <span style='font-size: normal'>Nombre de participants au concours Castor</span><br />
      <a href='resultats.php'><img src='img/participation.png' alt='Cliquez pour accéder aux statistiques détaillées.' width='340' style='margin-top:0.5em' /> </a>
   </div>
      <?php //   width='375' height='176' ?>
-->  

   <p style='font-weight: bold'>Le concours Castor vise à faire découvrir aux jeunes l'informatique et les sciences du numérique.</p>
   <p>
   Le concours est organisé tous les ans, au mois de novembre. Il se déroule 
   sous la supervision d'un enseignant, en salle informatique.
   <!-- L'édition 2013 a été un grand succès, avec près de <span class='index-important'>180&nbsp;000&nbsp;participants</span> répartis
   dans 1700&nbsp;collèges et lycées de toute la France.-->
   <?php if (contest_phase() == 'contest-soon'):?>
      <!--</p><p><span class='index-important'>L'édition 2021 se prépare ! Elle aura lieu du dimanche 7 novembre à 8h au dimanche 5 décembre à 23h, heure de Paris.</span>-->
   <?php elseif (contest_phase() == 'contest-running'):?>
      </p><p><span class='index-important'>L'édition 2023 est en cours ! Elle se déroule sur <a href="https://concours.castor-informatique.fr">concours.castor-informatique.fr</a> du dimanche 12 novembre au vendredi 22 décembre à 23h, heure de Paris.</span>
   <?php elseif (contest_phase() == 'contest-over'):?>
      </p><p><span class='index-important'>L'édition 2020 vient de se terminer, avec plus de 520 000 participants !</span> </p>
      <br/>
<!--
      <p>
      Les scores définitifs et qualifications <a href="http://algorea.org">au concours Algoréa</a> sont <a href="resultats.php">disponibles</a>.
      </p>
      -->
      <!--
	  <ul>
      <li><p><span style="color:red">Les coordinateurs ont accès aux scores, classements, diplômes et à la liste des élèves qualifiés au <a href="http://www.algorea.org">1er tour Algoréa</a> dans leur établissement.</p></li>
	  <li><p>Les sujets du Castor 2016 et leurs corrections sont en accès public.</p></li>
	  <li><p>La synthèse des résultats sera disponible dans le courant de la semaine.</p></li>
	  <li><p>Des parcours de <a href='http://preparation.algorea.org' target='_blank'>préparation au 1er tour Algoréa</a> sont disponibles.</p></li>
	  <li><p>Le 1er tour Algoréa aura lieu du 3 au 17 Janvier, les coordinateurs peuvent déjà créer leurs groupes pour permettre aux qualifiés de participer.</p></li>
	  </ul>
     -->
   <?php elseif (contest_phase() == 'contest-results-temp'):?>
      </p><p><span class='index-important' style='color:red'>L'édition 2016 a été un grand succès, avec 474 903 participants</span>  dans 2885 établissements&nbsp;!</p> 
      <p>
      <span class='index-important'>Les coordinateurs peuvent consulter les scores sur leur <a href="https://coordinateur.castor-informatique.fr">interface coordinateur</a></span>, et corriger les éventuelles erreurs dans les noms des participants ou marquer les participations hors classement.
      </p>
      <p>
      Le classement définitif sera annoncé vers le 10 décembre, le temps pour les coordinateurs de faire les corrections nécessaires.
      </p>
   <?php elseif (contest_phase() == 'contest-results'):?>
   <?php endif; ?>
   </p>

   <p style="text-align: center">
      <input class="plateforme-button" type="submit" value="Accès au concours" onclick="document.location = 'https://concours.castor-informatique.fr'">
	  <!--
      <?php if (contest_phase() == 'contest-results-temp'):?>
      <input class="plateforme-button" type="submit" value="Accès aux résultats de l'édition 2013" onclick="document.location = 'resultats.php'">
      <?php endif; ?>
      <?php if (true):?>
      <input class="plateforme-button" type="submit" value="S'entraîner sur les sujets passés" onclick="document.location = 'https://concours.castor-informatique.fr'">
      <?php endif; ?>
	  -->
   </p>

</div>

<?php //******************************************************************** ?>
<?php if (contest_phase() == 'contest-results-temp' || contest_phase() == 'contest-results'):?>

   <h1>Résultats 2023</h1>

   <p><span class='index-important'>
      L'édition 2023 a été un grand succès, avec <span class='index-important'>688&nbsp;837 participants</span>  dans 3810 établissements&nbsp;!</span>
   </p>
<!--
   <p>
   Les participants peuvent <a href="https://concours.castor-informatique.fr?tab=continue">accéder à leur score</a> en utilisant leur code d'équipe fourni au début du concours, ou leur code de participant.</p>
-->
   <p>
   Les coordinateurs peuvent accéder aux scores et classements de tous leurs élèves sur <a href="https://coordinateur.castor-informatique.fr">l'interface coordinateur</a>.
   </p>
   <!--
   <p>
   Les meilleurs de chaque catégorie sont qualifiés pour le 1er tour du <a href="http://algorea.org">concours Algoréa</a>,<br/>qui se déroulera <span style="font-weight:bold">du 3 au 17 janvier 2017</span>.
   </p>
   -->
   <p style="text-align:center">
      <input class="plateforme-button" type="submit" value="Accès aux résultats du Castor 2022" onclick="document.location = 'resultats.php'">
   </p>
<!--
      <p style="float:clear">8200 élèves classés parmi les meilleurs du Castor 2014 ont participé au concours <a href="http://algorea.org">Algoréa 2015</a>, et ont progressé au fil des 4 tours du concours, jusqu'à la finale, à laquelle 19 élèves de la 6ème à la 1ère ont été invités.</p>
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
<h1>Participer à l'édition 2024</h1>

<?php if (contest_phase() == 'contest-soon' || contest_phase() == 'contest-running'):?>
   <p>L'édition 2024 du concours Castor se déroule du 10 novembre au 21 décembre 2024, sur <a href="https://concours.castor-informatique.fr">concours.castor-informatique.fr</a>.</p>
   <ul>
   <li>
   Si vous êtes enseignant, vous pouvez vous <a href="https://coordinateur.castor-informatique.fr">inscrire</a>
   comme coordinateur.
   </li>
   <li>
   Si vous êtes élève, parlez du concours à un enseignant, par
   exemple votre professeur de mathématiques ou de technologie.
   </ul>
<?php else:?>
   <p>La prochaine édition du concours Castor aura lieu du 10 novembre au 21 décembre 2024.</p>
   <p>Si vous êtes enseignant, <a href="https://coordinateur.castor-informatique.fr">inscrivez-vous</a>
   dès maintenant comme coordinateur.</p>

   <p>En attendant l'édition 2024 du Castor, vous pouvez <a href='https://concours.castor-informatique.fr?tab=home'>rejouer les concours passés</a> ou apprendre la programmation sur <a href="http://www.france-ioi.org/">France-ioi.org</a>.

   <!--<p>En attendant, il est possible de <a href='https://concours.castor-informatique.fr?tab=home'>rejouer les concours passés</a>.</p>-->
<?php endif; ?>
<!--
<p>En attendant le concours, <a href='https://concours.castor-informatique.fr?tab=home'>rejouez les concours passés</a> ou apprenez la programmation<br/>sur <a href="http://www.france-ioi.org/">France-ioi.org</a>&nbsp;!
-->

<!--
   <h1>Après le Castor : Concours Algoréa 2015</h1>
   <p>
   Les meilleurs participants du concours Castor 2014 étaient qualifiés pour le premier tour du concours <a href="http://www.algorea.org">Algoréa</a>, qui s'est déroulé du 2 au 8 février. Plus de 8200 élèves ont participé, pour la plupart dans leur établissement. La suite est sur <a href="http://www.algorea.org">algorea.org</a>
   </p>
   -->
   <!--
   <p><b>Le concours est ouvert jusqu'au 6 février 18h pour la participation dans l'établissement. Il se déroule sur <a href="https://concours.castor-informatique.fr">concours.castor-informatique.fr</a>.</p>
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
<li>Le concours dure <font class='index-important'>45 minutes</font> et comporte environ 10 questions interactives, chacune déclinée en 4 versions de difficulté croissante.</li>
<li>Il est <font class='index-important'>gratuit</font> et ne requiert <font class='index-important'>aucune connaissance préalable</font>  en informatique.</li>
<li>Le concours est ouvert du CM1 à la terminale, et s'adapte au niveau des élèves.</li>
<li>Les élèves participent seuls ou par binômes, en salle informatique.</li>
<li>Le concours se déroule sur quatre semaines, entre novembre et décembre.</li>
<li>Il peut être effectué à n'importe quel moment de cette période.</li>
<li>Des corrections détaillées sont proposées peu après la clôture.</li>
<li>Des diplômes sont offerts aux participants selon leur score.</li>
<li>Chacun pourra participer au <a href="http://www.algorea.org">concours Algoréa</a>, dans une catégorie qui dépendra de son résultat.</li>
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

<p style="text-align: center"><input class="plateforme-button" type="submit" value="Accès à tous les sujets du concours Castor" onclick="document.location = 'https://concours.castor-informatique.fr'"></p>


<?php //******************************************************************** ?>
<h1>Au delà du concours Castor</h1>

<p>
Le Castor n'est qu'un premier pas vers la découverte de
l'informatique.
</p>
<p>
L'étape suivante est le concours <a href="http://algorea.org">Algoréa</a>, ouvert à partir du mois janvier, destiné à accompagner les élèves au fil de leur apprentissage de la programmation et de l'algorithmique, en langages Blockly, Scratch ou Python.
</p>
<p>
Pour progresser au fil de l'année et entre les différentes étapes du concours, <a href="http://www.france-ioi.org/">France-ioi</a> propose de nombreux cours et exercices dans les domaines de la programmation et l'algorithmique. Des contenus adaptés aux plus jeunes sont actuellement en préparation.
</p>

<?php //******************************************************************** ?>
<h1>À propos du Castor</h1>

<p>Le Castor Informatique a été créé en Lituanie en 2004, et est <a href="http://www.bebras.org/">organisé dans 79 pays</a>, dont la France depuis 2011. Chaque pays organise le concours indépendamment à la même période, en suivant des règles communes. Les pays se réunissent chaque année pour préparer un ensemble de questions, parmi lesquelles chacun effectue sa propre sélection de sujets. Près de 4 millions d'élèves ont participé à diverses éditions du concours Castor 2024 dans le monde.
</p>
<p>L'édition Française est organisée par l'association <a href="http://www.france-ioi.org">France-ioi</a> en partenariat avec <a href="http://www.inria.fr">Inria</a> et l'<a href="http://www.ens-cachan.fr">ENS Paris-Saclay</a>, grâce à la contribution de <a href="organisation.php">nombreuses personnes</a>.

<h1>Affiche</h1>
<!--
<p>Une affiche du concours 2024 sera disponible en début d'année scolaire 2024-2025.
-->
<p>Voici une affiche que vous pouvez télécharger et imprimer pour faire connaître le concours 2024 :</p>
<p>
<center>
<a href="documents/poster_castor_2024.pdf" target="new"><img src="img/poster_castor_2024.png" style="width:300px"></a>

<!--
&nbsp;&nbsp;&nbsp;

<a href="documents/poster_castor_2020_nb.pdf" target="new"><img src="img/poster_castor_2020_nb.png" style="width:300px"></a>-->
</center>
</p>
<!--
<table style="text-align:center;font-weight:bold">
<tr><td>Affiche CM1/CM2</td><td>Affiche collège</td><td>Affiche lycée</td></tr>
<tr>
   <td style="padding:10px"><a href="documents/poster_castor_2016_primaire.pdf" target="new"><img src="img/poster_castor_2016_primaire.png" style="width:100%;margin:10px"></a></td>
   <td style="padding:10px"><a href="documents/poster_castor_2016_college.pdf" target="new"><img src="img/poster_castor_2016_college.png" style="width:100%;margin:10px"></a></td>
   <td style="padding:10px"><a href="documents/poster_castor_2016_lycee.pdf" target="new"><img src="img/poster_castor_2016_lycee.png" style="width:100%;margin:10px"></a></td>
</tr>
</table>
-->
</p>

<?php page_footer(); ?>

</div><!--mainbar-->
</div><!--content-->

</center>
</body>
</html>
