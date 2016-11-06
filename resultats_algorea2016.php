<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<link href="style.css?v=3" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bower_components/jquery-ui/themes/base/jquery-ui.min.css" />
<script src='bower_components/jquery/dist/jquery.min.js'></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<title>Concours Algoréa 2016</title>
<style>
.threshold {
	width: 100%;
}

.threshold td {
	border: solid black 1px;
	padding : 3px;
	text-align: center;
}

strong {
	font-weight: bold;
}
</style>

<script src="bower_components/highcharts/highcharts.js" type="text/javascript"></script>

</head>

<body>
<center>

<div id="content">

<div id="mainbar" class="mainbarstyle">

<h1>Résultats du 1er tour Algoréa 2016</h1>
<p>
24813 élèves du CM1 à la terminale ont participé au 1er tour du concours Algoréa 2016.
</p>
<p>
Sont qualifiés pour le 2ème tour les élèves dont le score est au moins celui indiqué ci-dessous :
<table class='threshold'>
<tr><td><strong>Classe</strong></td><td>CM1</td><td>CM2</td><td>6ème</td><td>5ème</td><td>4ème</td><td>de 3ème à terminale<br/>(dont classes pro)</td></tr>
<tr><td><strong>Score minimum pour se qualifier<br/>au 2ème tour</strong></td><td>114</td><td>126</td><td>146</td><td>166</td><td>176</td><td>180</td></tr>
</table>
</p>
<p>
Félicitations à tous les élèves qualifiés !
</p>
<p>Le 2ème tour sera une épreuve de 2h30, à faire entre le 28 mars et le 23 avril 2016. Pour vous y préparer, nous vous invitons à résoudre un maximum
d'exercices de programmation sur <a href="http://www.france-ioi.org">france-ioi.org</a>
</p>
<p>
Pour connaître votre score :
</p>
<table class="results-table">
<tr>
<td style="border-right: solid 1px gray; width: 50%">

   <p class="results-table-title">Accès élève</p>

   <p>Pour consulter votre score et accéder aux corrections, 
   allez sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours Castor</a> et utilisez le code que vous avez noté au moment de commencer le concours.
   </p>
   <p>
   Si vous avez perdu votre code, contactez votre coordinateur, sauf si vous vous étiez qualifiés via france-ioi.org, auquel cas vous pouvez retrouver votre code en vous connectant sur france-ioi et allant sur la page algorea.org.
   </p>

</td>
<td>
   <p class="results-table-title">Accès coordinateur</p>

   <p>Les coordinateurs peuvent consulter les résultats et classements de leurs élèves sur la <a href="http://coordinateur.castor-informatique.fr">plateforme coordinateur</a> lorsque les élèves ont participé en classe avec un code de groupe.</p>
   <br/>

</td>
</tr>
</table>

<h1 id="classement">Classements</h1>

<p>
Les graphes et tableaux ci-dessous vous permettent de déterminer le classement à partir du score. Par exemple, si vous avez participé dans la catégorie 6ème et que vous avez obtenu 70 points, vous pouvez voir dans le tableau que vous êtes classé(e) 58ème parmi tous les élèves de votre catégorie.
Notez qu'il y a souvent des ex-aequo. Par exemple 3 élèves sont ex-aequo à la première place dans la catégorie 6ème avec un score de 105 points.
</p>
<p>Rappel : vous pouvez obtenir votre score et voir le détail de vos résultats à l'aide de votre code personnel sur la <a href="http://concours.castor-informatique.fr?tab=continue">plateforme du concours</a>.</p>

<div class="resultats-graphiques" style="margin-top:0.5em;margin-bottom:1em">
<?php include("resultats2016_algorea.php"); ?>
</div>

<h1>Les récompenses offertes par nos partenaires</h1>
<style>
.awards tr td {
  padding: 0 6px;
  width: 25%;
  border-left: 1px solid gray;
  vertical-align: top;
}
.awards tr td:first-child,
.awards table tr td {
  border: none;
}
.awards tr:nth-of-type(1) td, .awards tr:nth-of-type(3) td {
  text-align: center;
  vertical-align: middle;
}
.awards tr:nth-child(3) td {
  padding-top: 40px;
}
</style>

<p>
Grâce à nos partenaires, Epita, iMakr.com, Casio, My mini factory, les éditions Eyrolles et Apycat, de très belles récompenses sont prévues cette année pour les meilleurs demi-finalistes et finalistes.
</p>
<p>
Entraînez-vous sur <a href="http://www.france-ioi.org">france-ioi.org</a> pour réussir les étapes suivantes et avoir une chance d'emporter l'un des lots prévus !
</p>
<p>
Notez qu'afin de laisser une chance à tous, les participants ayant déjà été classés parmi les 2 gagnants lors d'une édition précédente du concours, ou ayant fait partie de l'équipe de France aux ioi participeront à la finale en hors classement et ne pourront pas recevoir de lots.
</p>

<table class="awards">
   <tr>
      <td>
         <a href="http://www.epita.fr" target="_blank"><img src="awards/logo_epita.png" style="width: 100px;"/></a>
      </td>
	  <td>
		 <a href="http://www.imakr.com" target="_blank"><img src="awards/logo_imakr.png" style="width:80px;"/></a>
	  </td>
      <td>
         <a href="http://www.casio-education.fr" target="_blank"><img src="awards/logo_casio.png" style="width: 140px;"/></a>
      </td>
   </tr>
   <tr>
      <td>
         <p>
            La participation gratuite, hébergement compris, au stage et à la finale pour les 12 meilleurs demi-finalistes.
         </p>
      </td>
	  <td>
		 <p>
			Une imprimante 3D Cubicon Style pour le grand gagnant de la finale.
		 </p>
         <img src="awards/prix_printer.png" style="width: 120px;margin: 0 auto;display:block"/>
	  </td>
      <td>
         <p>
            Des places supplémentaires en finale, hébergement compris.
         </p>
         <p>Des calculatrices programmables</p>
         <table> <tr>
            <td> <img src="awards/prix_fxcp400.jpg" style="width: 100%;"/> </td>
            <td> <img src="awards/prix_graph75.jpg" style="width: 100%;"/> </td>
            <td> <img src="awards/prix_graph35.jpg" style="width: 100%;"/> </td>
         </tr> </table>
      </td>
	</tr>
	<tr>
	  <td>
         <a href="http://www.myminifactory.com/fr/" target="_blank"><img src="awards/logo_mmf.png" style="width: 100px;"/></a>
	  </td>
      <td>
         Les éditions<br/>
         <a href="http://www.editions-eyrolles.com/" target="_blank"><img src="awards/logo_eyrolles.png" style="width: 100px;"/></a>
      </td>
      <td>
         <a href="http://apycat.com" target="_blank"><img src="awards/logo_apycat.png" style="width: 100px;"/></a>
      </td>
	</tr>
	<tr>
	  <td>
	     <p>
		    Deux places supplémentaires en finale, hébergement compris.
		 </p>
		 <p>
			Cinq objets 3D imprimés à choisir parmi une collection.
	     </p>
		 <a href="http://www.myminifactory.com/fr/" target="_blank"><img src="awards/prix_objets3d.png" style="width:120px;margin: 0 auto; display:block"/></a>
	  </td>
      <td>
         <p>
            Des livres d'informatique pour les finalistes.
         </p>
		 <p>
		 </p>
         <div style="text-align: center;">
            <img src="awards/prix_memento.png" style="width: 40px;"/>
            <img src="awards/prix_programmer_cpp.png" style="width: 80px;"/>
         </div>
      </td>
      <td>
         <p>
            Une tablette tactile pour le deuxième de la finale.
         </p>
         <img src="awards/prix_galaxy.png" style="width: 80px;margin: 0 auto;display:block"/>
      </td>
   </tr>
</table>


</div><!--mainbar-->

</div><!--content-->

</center>
</body>
</html>