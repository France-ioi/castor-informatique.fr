<?php error_reporting(E_ALL); ?>

<?php /* echo "<pre>"; print_r($_SERVER); echo "</pre>"; */ ?>


<?php //******************************************************************** ?>
<?php 

//TODO: utiliser une fonction pour factoriser les liens vers la plateforme

require_once("config.php");

function contest_current_phase() {
   return 'contest-running';
   // one of: 'contest-running', 'contest-soon', 'contest-running', 'contest-over', 'contest-results-temp', 'contest-results'
}

function contest_phase() {
   return contest_current_phase();
   // only for debugging:
   // return (isset($_GET['phase'])) ? $_GET['phase'] : contest_current_phase();
}

?>
<?php //******************************************************************** ?>
<?php function page_includes() { ?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<link href="style.css?v=3" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bower_components/jquery-ui/themes/base/jquery-ui.min.css" />
<script src='bower_components/jquery/dist/jquery.min.js'></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<?php page_tracker(); ?>

<?php } ?>
<?php //******************************************************************** ?>
<?php function page_header($subtitle) { 
   // Note: $subtitle n'est pas utilisé pour l'instant;  // echo $subtitle; 
?> 

<a name="top" id="top"></a>
<div id="header">
   <table style="width:100%">
      <tr>
         <td style="width:10%"><img src="img/castor_small.png" style="height:100px; padding-top:5px; padding-right: 10px;"></td>
         <td>
            <h1 id="page-title"><a href="index.php">Castor Informatique France</a></h1>
            <h2></h2> 
             <?php // <h2>Concours français collège et lycée</h2> ?>
         </td>
      </tr>
   </table>
</div>

<?php } ?>
<?php //******************************************************************** ?>
<?php function page_footer() { ?>

<br/>
<br/><br/>

<?php } ?>
<?php //******************************************************************** ?>
<?php
function page_menu_full() { ?>


<div class="submenu">
<h1>Menu</h1>
  <a name="menu_item" href="index.php">Présentation</a>
  <a name="menu_item" href="http://concours.castor-informatique.fr">Accès aux sujets</a>
  <a name="menu_item" href="resultats.php">Accès aux résultats</a>
  <a name="menu_item" href="http://coordinateur.castor-informatique.fr">Accès coordinateur</a>
</div>

<div class="submenu">
  <a name="menu_item" href="manuel.php">Manuel du concours</a>
  <a name="menu_item" href="organisation.php">Qui sommes nous ?</a>
  <a name="menu_item" href="contact.php">Contact</a>
  <a name="menu_item" href="infos_legales.php">Informations légales</a>
</div>

<script type="text/javascript">
  (function() {
    var mi = document.getElementsByName('menu_item');
    var page = "<?php echo basename($_SERVER['SCRIPT_NAME']) ?>";    
    for (var i=0; i<mi.length; i++) {
       var cur = mi[i];
       if (page == cur.getAttribute("href")) 
         cur.setAttribute("class", "menu-selected-item");
    }
  })();
</script>

<?php } ?>
<?php //******************************************************************** ?>
<?php function page_menu_light() { ?>

<div class="submenu">
<h1>Menu</h1>
  <?php page_menu_top(); ?>
</div>

<?php } ?>
<?php //******************************************************************** ?>
<?php function page_tracker() { 
   global $useTracker;
   if (false):   
?> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24298685-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php 
   endif;
} 
?>
<?php //******************************************************************** ?>


