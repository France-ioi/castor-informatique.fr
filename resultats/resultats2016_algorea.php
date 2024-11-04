<script type="text/javascript">
function displayCharts(src, dst)
{
   var chart;
   var options = {
      chart: {
         renderTo: dst,
         type: 'line'
      },
      title: {
         text: null,
      },
      xAxis:{
         title: {
            text: 'Rang',
            //align:"high"
         },
         labels: {
            formatter: function() {
               return this.value;
            }
         }
      },
      yAxis: {
         title: {
            text: 'Score',
            //rotation: 0,
            //align:"high",
            //offset:0
         },
         tickInterval:20,
         //startOnTick:false,
         //endOnTick:false
      },
      plotOptions: {
         spline: {
            marker: {
              radius: 40,
              lineColor: '#666666',
              lineWidth: 1
            }
         }
      },
      tooltip: {
         formatter: function() {
            var s = "";
            if (this.x == 1)
               s += "1er";
            else
               s += this.x +'ème';
            s += ' : '+ this.y + ' points';
            return s;
         }
      },
      legend: {
         enabled:false,   
      },
      credits: {
         enabled:false,
      },
      series: [{
         name: 'Curve',
         marker: {
            radius: 0,
            lineWidth: 2,
            lineColor:"#4572A7"
         }
      }]
   };
   
    
   var scores = [];
   var ranks = [];
   var scoreMin = 0, scoreMax = 0;
   $("#"+src).find("tr:not(:first)").each(function(){
      var score = parseInt($(this).find("td:first").text());
      var rank = parseInt($(this).find("td:last").text());
      scores.push([rank, score]);
      ranks.push(rank);
      scoreMin = Math.min(scoreMin, score);
      scoreMax = Math.max(scoreMax, score);
   });
   options.yAxis.min = scoreMin;
   options.yAxis.max = scoreMax;
   options.series[0].data = scores;
   chart = new Highcharts.Chart(options);   
}


$(function () {
   $("div[id^=ranks]").each(function(){
      var id = $(this).attr('id').replace('ranks-', '');
      displayCharts("ranks-"+id, "graph-"+id); 
   });

   $("#results").tabs();
   $("#results").show();
});
</script> 

<!--<li>24813 élèves ont participé, dont 38% de filles.</li>
<li>1495 établissements ont pris part au concours.</li>
-->

      <div id='results'>
         <ul><li class='nbContestants1' id='link-829202546979569397-4-1'><a href='#tabs-829202546979569397-4-1'>CM1</a></li><li class='nbContestants1' id='link-829202546979569397-5-1'><a href='#tabs-829202546979569397-5-1'>CM2</a></li><li class='nbContestants1' id='link-829202546979569397-6-1'><a href='#tabs-829202546979569397-6-1'>6ème</a></li><li class='nbContestants1' id='link-829202546979569397-7-1'><a href='#tabs-829202546979569397-7-1'>5ème</a></li><li class='nbContestants1' id='link-829202546979569397-8-1'><a href='#tabs-829202546979569397-8-1'>4ème</a></li><li class='nbContestants1' id='link-829202546979569397-9-1'><a href='#tabs-829202546979569397-9-1'>3ème</a></li><li class='nbContestants1' id='link-829202546979569397-10-1'><a href='#tabs-829202546979569397-10-1'>Seconde</a></li><li class='nbContestants1' id='link-829202546979569397-11-1'><a href='#tabs-829202546979569397-11-1'>Première</a></li><li class='nbContestants1' id='link-829202546979569397-12-1'><a href='#tabs-829202546979569397-12-1'>Terminale</a></li><li class='nbContestants1' id='link-829202546979569397-13-1'><a href='#tabs-829202546979569397-13-1'>Seconde pro.</a></li><li class='nbContestants1' id='link-829202546979569397-14-1'><a href='#tabs-829202546979569397-14-1'>Première pro.</a></li><li class='nbContestants1' id='link-829202546979569397-15-1'><a href='#tabs-829202546979569397-15-1'>Terminale pro.</a></li></ul><div id='tabs-829202546979569397-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 648 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>232</td><td>1</td></tr><tr><td>210</td><td>2</td></tr><tr><td>200</td><td>3</td></tr><tr><td>190</td><td>6</td></tr><tr><td>180</td><td>7</td></tr><tr><td>170</td><td>10</td></tr><tr><td>160</td><td>17</td></tr><tr><td>156</td><td>27</td></tr><tr><td>150</td><td>28</td></tr><tr><td>146</td><td>39</td></tr><tr><td>140</td><td>40</td></tr><tr><td>130</td><td>72</td></tr><tr><td>126</td><td>112</td></tr><tr><td>120</td><td>113</td></tr><tr><td>114</td><td>161</td></tr><tr><td>112</td><td>162</td></tr><tr><td>110</td><td>164</td></tr><tr><td>102</td><td>211</td></tr><tr><td>100</td><td>212</td></tr><tr><td>92</td><td>241</td></tr><tr><td>90</td><td>242</td></tr><tr><td>80</td><td>305</td></tr><tr><td>70</td><td>338</td></tr><tr><td>60</td><td>416</td></tr><tr><td>54</td><td>450</td></tr><tr><td>52</td><td>451</td></tr><tr><td>50</td><td>452</td></tr><tr><td>40</td><td>512</td></tr><tr><td>30</td><td>558</td></tr><tr><td>20</td><td>587</td></tr><tr><td>0</td><td>615</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 71 premiers ayant un score supérieur ou égal à 140 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Jonathan F.</td>
            <td>232</td>
            <td>1</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>210</td>
            <td>2</td>
            <td>École Élémentaire, Ouveillan</td>
         </tr>
         <tr>
            <td>Pierre-Louis M.</td>
            <td>200</td>
            <td>3</td>
            <td>École Publique de Ker Avel, PLOUGASTEL- DAOULAS</td>
         </tr>
         <tr>
            <td>Justine C.</td>
            <td>200</td>
            <td>3</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Elliot D.</td>
            <td>200</td>
            <td>3</td>
            <td>École Élémentaire, Ouveillan</td>
         </tr>
         <tr>
            <td>Maël C.</td>
            <td>190</td>
            <td>6</td>
            <td>École Élémentaire Saint Georges, Villeneuve Loubet</td>
         </tr>
         <tr>
            <td>Whitney G.</td>
            <td>180</td>
            <td>7</td>
            <td>École de Quevauvillers, Quevauvillers</td>
         </tr>
         <tr>
            <td>Tristan H.</td>
            <td>180</td>
            <td>7</td>
            <td>École René Fallet, Trevol</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>180</td>
            <td>7</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>170</td>
            <td>10</td>
            <td>École Elementaire Sallier, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Léa F.</td>
            <td>170</td>
            <td>10</td>
            <td>École Élémentaire Saint Georges, Villeneuve Loubet</td>
         </tr>
         <tr>
            <td>Eugène S.</td>
            <td>170</td>
            <td>10</td>
            <td>Lycée Marcelin Berthelot, Pantin</td>
         </tr>
         <tr>
            <td>Matis N.</td>
            <td>170</td>
            <td>10</td>
            <td>Lycée Jean Renoir - école primaire, Munich</td>
         </tr>
         <tr>
            <td>Pierre P.</td>
            <td>170</td>
            <td>10</td>
            <td>École Élémentaire Camille Souchu, Cérans-Foulletourte</td>
         </tr>
         <tr>
            <td>Aurélien A.</td>
            <td>170</td>
            <td>10</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>170</td>
            <td>10</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Lana T.</td>
            <td>160</td>
            <td>17</td>
            <td>Collège Jules Valles, Fontaine</td>
         </tr>
         <tr>
            <td>Quentin T.</td>
            <td>160</td>
            <td>17</td>
            <td>Lycée Denis Diderot, Nairobi</td>
         </tr>
         <tr>
            <td>Justin F.</td>
            <td>160</td>
            <td>17</td>
            <td>École Élémentaire Gaston Serpette, Nantes</td>
         </tr>
         <tr>
            <td>Martial C.</td>
            <td>160</td>
            <td>17</td>
            <td>École du Moulin, Digne les Bains</td>
         </tr>
         <tr>
            <td>Yann R.</td>
            <td>160</td>
            <td>17</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
         <tr>
            <td>Maelys P.</td>
            <td>160</td>
            <td>17</td>
            <td>École Élémentaire, Ouveillan</td>
         </tr>
         <tr>
            <td>Joshua G.</td>
            <td>160</td>
            <td>17</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Aylan C.</td>
            <td>160</td>
            <td>17</td>
            <td>École Philippe Bovin, Poulainville</td>
         </tr>
         <tr>
            <td>Clement C.</td>
            <td>160</td>
            <td>17</td>
            <td>École Élémentaire, Abbéville</td>
         </tr>
         <tr>
            <td>Nino G.</td>
            <td>160</td>
            <td>17</td>
            <td>École Philippe Bovin, Poulainville</td>
         </tr>
         <tr>
            <td>Muzon R.</td>
            <td>156</td>
            <td>27</td>
            <td>Lycée Gaspard Monge - La Chauvinière, Nantes</td>
         </tr>
         <tr>
            <td>Laura E.</td>
            <td>150</td>
            <td>28</td>
            <td>École Primaire, Jebsheim</td>
         </tr>
         <tr>
            <td>Lucio D.</td>
            <td>150</td>
            <td>28</td>
            <td>École Élémentaire, Abbéville</td>
         </tr>
         <tr>
            <td>Valentin J.</td>
            <td>150</td>
            <td>28</td>
            <td>École Henri Barbusse, Bagnolet</td>
         </tr>
         <tr>
            <td>Noah L.</td>
            <td>150</td>
            <td>28</td>
            <td>École Élémentaire, Clermont-en-Genevois</td>
         </tr>
         <tr>
            <td>Côme A.</td>
            <td>150</td>
            <td>28</td>
            <td>Gymnase Lucie Berger, Strasbourg</td>
         </tr>
         <tr>
            <td>Clothilde L.</td>
            <td>150</td>
            <td>28</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Inès R.</td>
            <td>150</td>
            <td>28</td>
            <td>École de Varennes, Varennes</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>150</td>
            <td>28</td>
            <td>École la Plaine, Taverny</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>150</td>
            <td>28</td>
            <td>École Primaire Centre, Allauch</td>
         </tr>
         <tr>
            <td>Lucie B.</td>
            <td>150</td>
            <td>28</td>
            <td>École Élémentaire, Abbéville</td>
         </tr>
         <tr>
            <td>Garance F.</td>
            <td>150</td>
            <td>28</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>146</td>
            <td>39</td>
            <td>École Elementaire la Camargue, St Genies Des Mourgues</td>
         </tr>
         <tr>
            <td>Selena B.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire, La Cambe</td>
         </tr>
         <tr>
            <td>Rachel A.</td>
            <td>140</td>
            <td>40</td>
            <td>École Élémentaire Malet Isaac, Guyancourt</td>
         </tr>
         <tr>
            <td>Esteve B.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Léo R.</td>
            <td>140</td>
            <td>40</td>
            <td>École Camille Claudel, Rennes</td>
         </tr>
         <tr>
            <td>Evariste D.</td>
            <td>140</td>
            <td>40</td>
            <td>École Paul Arène, Antibes</td>
         </tr>
         <tr>
            <td>Arnauld C.</td>
            <td>140</td>
            <td>40</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Tom V.</td>
            <td>140</td>
            <td>40</td>
            <td>École Sainte Thérèse, Fauquissart</td>
         </tr>
         <tr>
            <td>Percy V.</td>
            <td>140</td>
            <td>40</td>
            <td>École Camille Claudel, Rennes</td>
         </tr>
         <tr>
            <td>Titouan P.</td>
            <td>140</td>
            <td>40</td>
            <td>Rpi les Petits Morins, Rebecques</td>
         </tr>
         <tr>
            <td>Damien S.</td>
            <td>140</td>
            <td>40</td>
            <td>École Élémentaire Malet Isaac, Guyancourt</td>
         </tr>
         <tr>
            <td>Aurélien A.</td>
            <td>140</td>
            <td>40</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Jeanne C.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire Publique du Val Laizon, Magny-la-Campagne</td>
         </tr>
         <tr>
            <td>Anais S.</td>
            <td>140</td>
            <td>40</td>
            <td>École du P'Tit Sentier, Arzviller</td>
         </tr>
         <tr>
            <td>Martin J.</td>
            <td>140</td>
            <td>40</td>
            <td>École Elementaire Sallier, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Gaël C.</td>
            <td>140</td>
            <td>40</td>
            <td>Institution Immaculée Conception, Villeurbanne</td>
         </tr>
         <tr>
            <td>Julie G.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Jean Renoir - école primaire, Munich</td>
         </tr>
         <tr>
            <td>Auburn B.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Français de Stavanger, Stavanger</td>
         </tr>
         <tr>
            <td>Lenny L.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire, Jebsheim</td>
         </tr>
         <tr>
            <td>Cyriane G.</td>
            <td>140</td>
            <td>40</td>
            <td>École Publique Arc en Ciel, La Séauve sur Semène</td>
         </tr>
         <tr>
            <td>Ruben B.</td>
            <td>140</td>
            <td>40</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Marie M.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire Brancourt le Grand, Brancourt le Grand</td>
         </tr>
         <tr>
            <td>Tom D.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire, Chémery sur Bar</td>
         </tr>
         <tr>
            <td>Margaux K.</td>
            <td>140</td>
            <td>40</td>
            <td>École du P'Tit Sentier, Arzviller</td>
         </tr>
         <tr>
            <td>Elias G.</td>
            <td>140</td>
            <td>40</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>140</td>
            <td>40</td>
            <td>École Élémentaire Malet Isaac, Guyancourt</td>
         </tr>
         <tr>
            <td>Louise B.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire, Jebsheim</td>
         </tr>
         <tr>
            <td>Amandine A.</td>
            <td>140</td>
            <td>40</td>
            <td>École Primaire, Jebsheim</td>
         </tr>
         <tr>
            <td>Mia B.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Hadi T.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Français Saint-Louis, Stockholm</td>
         </tr>
         <tr>
            <td>Charlotte M.</td>
            <td>140</td>
            <td>40</td>
            <td>École Élémentaire Marie Thérèse Sudre, Murviel lès Montpellier</td>
         </tr>
         <tr>
            <td>Lucie D.</td>
            <td>140</td>
            <td>40</td>
            <td>École Boris Vian (Joseph Bara), Cavin</td>
         </tr>
         <tr>
            <td>Nikolas P.</td>
            <td>140</td>
            <td>40</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 924 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>230</td><td>2</td></tr><tr><td>210</td><td>3</td></tr><tr><td>200</td><td>6</td></tr><tr><td>190</td><td>13</td></tr><tr><td>186</td><td>23</td></tr><tr><td>180</td><td>24</td></tr><tr><td>170</td><td>32</td></tr><tr><td>162</td><td>44</td></tr><tr><td>160</td><td>47</td></tr><tr><td>156</td><td>72</td></tr><tr><td>150</td><td>73</td></tr><tr><td>142</td><td>103</td></tr><tr><td>140</td><td>104</td></tr><tr><td>136</td><td>175</td></tr><tr><td>134</td><td>176</td></tr><tr><td>130</td><td>177</td></tr><tr><td>126</td><td>243</td></tr><tr><td>122</td><td>244</td></tr><tr><td>120</td><td>246</td></tr><tr><td>116</td><td>330</td></tr><tr><td>112</td><td>332</td></tr><tr><td>110</td><td>337</td></tr><tr><td>102</td><td>433</td></tr><tr><td>100</td><td>434</td></tr><tr><td>92</td><td>493</td></tr><tr><td>90</td><td>495</td></tr><tr><td>80</td><td>613</td></tr><tr><td>74</td><td>650</td></tr><tr><td>72</td><td>651</td></tr><tr><td>70</td><td>652</td></tr><tr><td>60</td><td>742</td></tr><tr><td>50</td><td>774</td></tr><tr><td>40</td><td>814</td></tr><tr><td>34</td><td>853</td></tr><tr><td>30</td><td>854</td></tr><tr><td>20</td><td>874</td></tr><tr><td>0</td><td>895</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 71 premiers ayant un score supérieur ou égal à 160 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Flore G.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Liam L.</td>
            <td>230</td>
            <td>2</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Fred C.</td>
            <td>210</td>
            <td>3</td>
            <td>École Temps Des Cerises, Evry</td>
         </tr>
         <tr>
            <td>Robin P.</td>
            <td>210</td>
            <td>3</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Maxime S.</td>
            <td>210</td>
            <td>3</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Darren K.</td>
            <td>200</td>
            <td>6</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>200</td>
            <td>6</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Benedikt P.</td>
            <td>200</td>
            <td>6</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Rami K.</td>
            <td>200</td>
            <td>6</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Noah C.</td>
            <td>200</td>
            <td>6</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Axel B.</td>
            <td>200</td>
            <td>6</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>200</td>
            <td>6</td>
            <td>École Lesseps, Paris</td>
         </tr>
         <tr>
            <td>Adrien A.</td>
            <td>190</td>
            <td>13</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Nicolas A.</td>
            <td>190</td>
            <td>13</td>
            <td>École Baudricourt A, Paris</td>
         </tr>
         <tr>
            <td>Axelle P.</td>
            <td>190</td>
            <td>13</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Adrien D.</td>
            <td>190</td>
            <td>13</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Arthur T.</td>
            <td>190</td>
            <td>13</td>
            <td>École Elémentaire d'Ayguesvives, Ayguesvives</td>
         </tr>
         <tr>
            <td>Gwendoline H.</td>
            <td>190</td>
            <td>13</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Giovanni M.</td>
            <td>190</td>
            <td>13</td>
            <td>Lycée Rochambeau French International School, Bethesda</td>
         </tr>
         <tr>
            <td>Tony C.</td>
            <td>190</td>
            <td>13</td>
            <td>École Baudricourt A, Paris</td>
         </tr>
         <tr>
            <td>Carmen G.</td>
            <td>190</td>
            <td>13</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Lise-Laure L.</td>
            <td>190</td>
            <td>13</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Manel T.</td>
            <td>186</td>
            <td>23</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Ainhoa B.</td>
            <td>180</td>
            <td>24</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>180</td>
            <td>24</td>
            <td>Pôle Scolaire de Margut, Margut</td>
         </tr>
         <tr>
            <td>Manon Z.</td>
            <td>180</td>
            <td>24</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>180</td>
            <td>24</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Tomas M.</td>
            <td>180</td>
            <td>24</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Bastien D.</td>
            <td>180</td>
            <td>24</td>
            <td>École Aragon-Prévert, Le Houlme</td>
         </tr>
         <tr>
            <td>Rachid T.</td>
            <td>180</td>
            <td>24</td>
            <td>École Molière, Casablanca</td>
         </tr>
         <tr>
            <td>Amélis K.</td>
            <td>180</td>
            <td>24</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Didier S.</td>
            <td>170</td>
            <td>32</td>
            <td>Lycée Condorcet - The French School of Sydney, Maroubra. NSW</td>
         </tr>
         <tr>
            <td>Sarah D.</td>
            <td>170</td>
            <td>32</td>
            <td>Lycée Jean Renoir - école primaire, Munich</td>
         </tr>
         <tr>
            <td>Maëlle K.</td>
            <td>170</td>
            <td>32</td>
            <td>École Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Karina G.</td>
            <td>170</td>
            <td>32</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Clara G.</td>
            <td>170</td>
            <td>32</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Sasha M.</td>
            <td>170</td>
            <td>32</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Etienne G.</td>
            <td>170</td>
            <td>32</td>
            <td>École Elémentaire Ouest, Dijon</td>
         </tr>
         <tr>
            <td>Yanis E.</td>
            <td>170</td>
            <td>32</td>
            <td>Groupe Scolaire Claude Monet, Mohammedia</td>
         </tr>
         <tr>
            <td>Noah S.</td>
            <td>170</td>
            <td>32</td>
            <td>École Élémentaire, La Roche de Glun</td>
         </tr>
         <tr>
            <td>Leissou L.</td>
            <td>170</td>
            <td>32</td>
            <td>Collège Ste Madeleine, Nantes</td>
         </tr>
         <tr>
            <td>Enzo C.</td>
            <td>170</td>
            <td>32</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Marie-Lou M.</td>
            <td>170</td>
            <td>32</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Clément T.</td>
            <td>162</td>
            <td>44</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Raphaël B.</td>
            <td>162</td>
            <td>44</td>
            <td>École de Saint-Lizier, Saint-Lizier</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>162</td>
            <td>44</td>
            <td>École Alain Chartier, Bayeux</td>
         </tr>
         <tr>
            <td>Lou Jane H.</td>
            <td>160</td>
            <td>47</td>
            <td>École Elementaire Sallier, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Maïa S.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire de Westhalten, Westhalten</td>
         </tr>
         <tr>
            <td>Milo C.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Mahéno L.</td>
            <td>160</td>
            <td>47</td>
            <td>École Elémentaire du Cariot, Valenciennes</td>
         </tr>
         <tr>
            <td>Isabella A.</td>
            <td>160</td>
            <td>47</td>
            <td>Lycée Antoine et Consuelo de Saint Exupéry, Santa Tecla</td>
         </tr>
         <tr>
            <td>Delphine F.</td>
            <td>160</td>
            <td>47</td>
            <td>École Lesseps, Paris</td>
         </tr>
         <tr>
            <td>Clelia C.</td>
            <td>160</td>
            <td>47</td>
            <td>Lycée Français International A.F.L.E.C. de Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Thibaut R.</td>
            <td>160</td>
            <td>47</td>
            <td>École Primaire Publique du Val Laizon, Magny-la-Campagne</td>
         </tr>
         <tr>
            <td>Kenza W.</td>
            <td>160</td>
            <td>47</td>
            <td>Groupe Scolaire Louis Massignon - Site du Val d'Anfa, Casablanca</td>
         </tr>
         <tr>
            <td>Marine P.</td>
            <td>160</td>
            <td>47</td>
            <td>VALINES - Ecole primaire, Valines</td>
         </tr>
         <tr>
            <td>Lilas L.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire, Abbéville</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Zaza A.</td>
            <td>160</td>
            <td>47</td>
            <td>École Elémentaire d'Ayguesvives, Ayguesvives</td>
         </tr>
         <tr>
            <td>Adrien P.</td>
            <td>160</td>
            <td>47</td>
            <td>École Baudricourt A, Paris</td>
         </tr>
         <tr>
            <td>Arthur V.</td>
            <td>160</td>
            <td>47</td>
            <td>École Jules Ferry, Meyzieu</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire les Prévoyants, Aulnay Sous Bois</td>
         </tr>
         <tr>
            <td>Salim C.</td>
            <td>160</td>
            <td>47</td>
            <td>École Pierre et Marie Curie, Roissy-en-Brie</td>
         </tr>
         <tr>
            <td>Eve S.</td>
            <td>160</td>
            <td>47</td>
            <td>Lycée Chateaubriand, Rome</td>
         </tr>
         <tr>
            <td>Coumba T.</td>
            <td>160</td>
            <td>47</td>
            <td>École Pierre et Marie Curie, Roissy-en-Brie</td>
         </tr>
         <tr>
            <td>Carl M.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire de Westhalten, Westhalten</td>
         </tr>
         <tr>
            <td>Alice L.</td>
            <td>160</td>
            <td>47</td>
            <td>Collège Jean Rostand, Auchy les Hesdin</td>
         </tr>
         <tr>
            <td>Ludovica M.</td>
            <td>160</td>
            <td>47</td>
            <td>Lycée Chateaubriand, Rome</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>160</td>
            <td>47</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Clara G.</td>
            <td>160</td>
            <td>47</td>
            <td>École Élémentaire de Westhalten, Westhalten</td>
         </tr>
         <tr>
            <td>Chloé A.</td>
            <td>160</td>
            <td>47</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème (participation individuelle) : 5795 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>220</td><td>5</td></tr><tr><td>212</td><td>13</td></tr><tr><td>210</td><td>14</td></tr><tr><td>202</td><td>25</td></tr><tr><td>200</td><td>27</td></tr><tr><td>196</td><td>73</td></tr><tr><td>194</td><td>76</td></tr><tr><td>192</td><td>78</td></tr><tr><td>190</td><td>85</td></tr><tr><td>184</td><td>150</td></tr><tr><td>182</td><td>153</td></tr><tr><td>180</td><td>161</td></tr><tr><td>176</td><td>275</td></tr><tr><td>174</td><td>279</td></tr><tr><td>172</td><td>285</td></tr><tr><td>170</td><td>300</td></tr><tr><td>166</td><td>474</td></tr><tr><td>164</td><td>479</td></tr><tr><td>162</td><td>486</td></tr><tr><td>160</td><td>504</td></tr><tr><td>156</td><td>787</td></tr><tr><td>154</td><td>794</td></tr><tr><td>152</td><td>798</td></tr><tr><td>150</td><td>826</td></tr><tr><td>146</td><td>1205</td></tr><tr><td>144</td><td>1218</td></tr><tr><td>142</td><td>1234</td></tr><tr><td>140</td><td>1267</td></tr><tr><td>136</td><td>1853</td></tr><tr><td>134</td><td>1864</td></tr><tr><td>132</td><td>1878</td></tr><tr><td>130</td><td>1922</td></tr><tr><td>126</td><td>2557</td></tr><tr><td>124</td><td>2567</td></tr><tr><td>122</td><td>2576</td></tr><tr><td>120</td><td>2612</td></tr><tr><td>116</td><td>3179</td></tr><tr><td>114</td><td>3192</td></tr><tr><td>112</td><td>3203</td></tr><tr><td>110</td><td>3244</td></tr><tr><td>106</td><td>3897</td></tr><tr><td>104</td><td>3904</td></tr><tr><td>102</td><td>3912</td></tr><tr><td>100</td><td>3925</td></tr><tr><td>96</td><td>4230</td></tr><tr><td>94</td><td>4233</td></tr><tr><td>92</td><td>4246</td></tr><tr><td>90</td><td>4265</td></tr><tr><td>86</td><td>4765</td></tr><tr><td>84</td><td>4767</td></tr><tr><td>82</td><td>4768</td></tr><tr><td>80</td><td>4773</td></tr><tr><td>76</td><td>4913</td></tr><tr><td>74</td><td>4923</td></tr><tr><td>72</td><td>4931</td></tr><tr><td>70</td><td>4944</td></tr><tr><td>60</td><td>5285</td></tr><tr><td>56</td><td>5390</td></tr><tr><td>54</td><td>5392</td></tr><tr><td>52</td><td>5393</td></tr><tr><td>50</td><td>5398</td></tr><tr><td>40</td><td>5542</td></tr><tr><td>34</td><td>5601</td></tr><tr><td>32</td><td>5602</td></tr><tr><td>30</td><td>5604</td></tr><tr><td>20</td><td>5642</td></tr><tr><td>0</td><td>5672</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 72 premiers ayant un score supérieur ou égal à 200 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Raphael U.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Pol_Louis B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Augustin B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Alec L.</td>
            <td>240</td>
            <td>1</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Martin E.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège de Taiohae, Taiohae</td>
         </tr>
         <tr>
            <td>Jean-Pierre T.</td>
            <td>220</td>
            <td>5</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Daphné L.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Nina P.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège Nicolas Tronchon, Saint-Soupplets</td>
         </tr>
         <tr>
            <td>Shirine K.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège Michelet, Vanves</td>
         </tr>
         <tr>
            <td>Cyprien D.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Séverin G.</td>
            <td>220</td>
            <td>5</td>
            <td>Collège le Marchioux, Parthenay</td>
         </tr>
         <tr>
            <td>Bruno M.</td>
            <td>212</td>
            <td>13</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Matthieu D.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Clement H.</td>
            <td>210</td>
            <td>14</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Maxence P.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Marcel Pagnol, Vernouillet</td>
         </tr>
         <tr>
            <td>Camille P.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège la Coutancière, La Chapelle sur Erdre</td>
         </tr>
         <tr>
            <td>Constant Noé E.</td>
            <td>210</td>
            <td>14</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Raoul Dufy, Nice</td>
         </tr>
         <tr>
            <td>Theo F.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Thaïs P.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Des 7 Arpents, Souffelweyersheim</td>
         </tr>
         <tr>
            <td>Clémentine A.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège d'Istrie, Prayssac</td>
         </tr>
         <tr>
            <td>Liberty E.</td>
            <td>210</td>
            <td>14</td>
            <td>Lycée International Franco-Américain, San Francisco</td>
         </tr>
         <tr>
            <td>Matthias H.</td>
            <td>210</td>
            <td>14</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Elian C.</td>
            <td>202</td>
            <td>25</td>
            <td>Collège le Rochat, Les Rousses</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>202</td>
            <td>25</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Timéo C.</td>
            <td>200</td>
            <td>27</td>
            <td>École Élémentaire Camille Claudel, Rennes</td>
         </tr>
         <tr>
            <td>Alice F.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Mathis M.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Arnaud A.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège la Ponétie, Aurillac</td>
         </tr>
         <tr>
            <td>Celia L.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Jean-Pierre Vernant, Toulouse</td>
         </tr>
         <tr>
            <td>Victor C.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Aurore L.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Coralie P.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Jules L.</td>
            <td>200</td>
            <td>27</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Marie Curie, Paris</td>
         </tr>
         <tr>
            <td>Isaure G.</td>
            <td>200</td>
            <td>27</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Anne Sara T.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Frédéric C.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Nathan R.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Jean Mermoz, Nozay</td>
         </tr>
         <tr>
            <td>Candela C.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège de Sèvres, Sèvres</td>
         </tr>
         <tr>
            <td>William Q.</td>
            <td>200</td>
            <td>27</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Basile P.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Chantenay, Nantes</td>
         </tr>
         <tr>
            <td>Rémi L.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège du Verger, Auray</td>
         </tr>
         <tr>
            <td>Mihnea P.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Ste Madeleine, Nantes</td>
         </tr>
         <tr>
            <td>Soledad N.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Jules Ferry, Quimperlé</td>
         </tr>
         <tr>
            <td>Tom V.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Cyprien C.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Fénelon Sainte Marie, Paris</td>
         </tr>
         <tr>
            <td>Eliott E.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Gérard de Nerval, Village-Neuf</td>
         </tr>
         <tr>
            <td>Léa H.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Léa P.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Nicolas Haxo, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Anaïs D.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Oscar G.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Céliane D.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Olivera B.</td>
            <td>200</td>
            <td>27</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Gabriel V.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français de Stavanger, Stavanger</td>
         </tr>
         <tr>
            <td>Arthur G.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Bastien A.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Louis Leprince Ringuet, Genas</td>
         </tr>
         <tr>
            <td>Béatrice O.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège la Ponétie, Aurillac</td>
         </tr>
         <tr>
            <td>Justine C.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Zacharie M.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège le Parc Des Chaumes, Avallon</td>
         </tr>
         <tr>
            <td>Zoé F.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège G Pompidou, Claix</td>
         </tr>
         <tr>
            <td>Emmanuelle C.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Marius R.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Mathias L.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Haute Bruche, Schirmeck</td>
         </tr>
         <tr>
            <td>Louise F.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège la Ponétie, Aurillac</td>
         </tr>
         <tr>
            <td>Rayan B.</td>
            <td>200</td>
            <td>27</td>
            <td>Collège Martial Taugourdeau, Dreux</td>
         </tr>
         <tr>
            <td>Leanne D.</td>
            <td>200</td>
            <td>27</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème (participation individuelle) : 4901 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>234</td><td>4</td></tr><tr><td>230</td><td>5</td></tr><tr><td>226</td><td>8</td></tr><tr><td>222</td><td>10</td></tr><tr><td>220</td><td>12</td></tr><tr><td>216</td><td>25</td></tr><tr><td>214</td><td>27</td></tr><tr><td>212</td><td>29</td></tr><tr><td>210</td><td>33</td></tr><tr><td>206</td><td>64</td></tr><tr><td>204</td><td>65</td></tr><tr><td>202</td><td>68</td></tr><tr><td>200</td><td>74</td></tr><tr><td>196</td><td>152</td></tr><tr><td>192</td><td>156</td></tr><tr><td>190</td><td>168</td></tr><tr><td>186</td><td>345</td></tr><tr><td>184</td><td>349</td></tr><tr><td>182</td><td>361</td></tr><tr><td>180</td><td>389</td></tr><tr><td>176</td><td>623</td></tr><tr><td>174</td><td>633</td></tr><tr><td>172</td><td>644</td></tr><tr><td>170</td><td>672</td></tr><tr><td>166</td><td>1004</td></tr><tr><td>164</td><td>1016</td></tr><tr><td>162</td><td>1030</td></tr><tr><td>160</td><td>1062</td></tr><tr><td>156</td><td>1452</td></tr><tr><td>154</td><td>1463</td></tr><tr><td>152</td><td>1477</td></tr><tr><td>150</td><td>1513</td></tr><tr><td>146</td><td>1953</td></tr><tr><td>144</td><td>1970</td></tr><tr><td>142</td><td>1992</td></tr><tr><td>140</td><td>2023</td></tr><tr><td>136</td><td>2582</td></tr><tr><td>134</td><td>2596</td></tr><tr><td>132</td><td>2611</td></tr><tr><td>130</td><td>2639</td></tr><tr><td>126</td><td>3107</td></tr><tr><td>124</td><td>3115</td></tr><tr><td>122</td><td>3126</td></tr><tr><td>120</td><td>3149</td></tr><tr><td>116</td><td>3556</td></tr><tr><td>114</td><td>3572</td></tr><tr><td>112</td><td>3580</td></tr><tr><td>110</td><td>3607</td></tr><tr><td>106</td><td>3958</td></tr><tr><td>104</td><td>3962</td></tr><tr><td>102</td><td>3965</td></tr><tr><td>100</td><td>3973</td></tr><tr><td>96</td><td>4183</td></tr><tr><td>94</td><td>4186</td></tr><tr><td>92</td><td>4189</td></tr><tr><td>90</td><td>4200</td></tr><tr><td>84</td><td>4425</td></tr><tr><td>82</td><td>4426</td></tr><tr><td>80</td><td>4428</td></tr><tr><td>76</td><td>4502</td></tr><tr><td>74</td><td>4505</td></tr><tr><td>72</td><td>4506</td></tr><tr><td>70</td><td>4509</td></tr><tr><td>62</td><td>4639</td></tr><tr><td>60</td><td>4640</td></tr><tr><td>56</td><td>4677</td></tr><tr><td>52</td><td>4679</td></tr><tr><td>50</td><td>4683</td></tr><tr><td>40</td><td>4755</td></tr><tr><td>32</td><td>4777</td></tr><tr><td>30</td><td>4778</td></tr><tr><td>20</td><td>4794</td></tr><tr><td>0</td><td>4823</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 63 premiers ayant un score supérieur ou égal à 210 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Guilhem G.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
         <tr>
            <td>Philéas D.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Mahel B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Sébastien J.</td>
            <td>234</td>
            <td>4</td>
            <td>Lycée Français de Saint Domingue, Saint Domingue</td>
         </tr>
         <tr>
            <td>Tristan G.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Cecile A.</td>
            <td>230</td>
            <td>5</td>
            <td>Collège Jean-Philippe Rameau, Versailles</td>
         </tr>
         <tr>
            <td>Gwendoline V.</td>
            <td>230</td>
            <td>5</td>
            <td>Collège Jean Jaurès, Castanet-Tolosan</td>
         </tr>
         <tr>
            <td>Alan H.</td>
            <td>226</td>
            <td>8</td>
            <td>Collège Raoul Blanchard, Annecy</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>226</td>
            <td>8</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Ulysse L.</td>
            <td>222</td>
            <td>10</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Esteban V.</td>
            <td>222</td>
            <td>10</td>
            <td>Collège Baudelaire, Roubaix</td>
         </tr>
         <tr>
            <td>Amélie M.</td>
            <td>220</td>
            <td>12</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Lucas K.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Clément B.</td>
            <td>220</td>
            <td>12</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Manutéa S.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège Jean Jacques Rousseau, Thiant</td>
         </tr>
         <tr>
            <td>Octave G.</td>
            <td>220</td>
            <td>12</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Mathis C.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège Pierre Dubois, Seyssinet - Pariset</td>
         </tr>
         <tr>
            <td>Juliette A.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège du Pays de l'Herbasse, St Donat sur l'Herbasse</td>
         </tr>
         <tr>
            <td>Mathis A.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège Des Missions, Blotzheim</td>
         </tr>
         <tr>
            <td>Aelle V.</td>
            <td>220</td>
            <td>12</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Erwan T.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Lilian D.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Lou-Anne J.</td>
            <td>220</td>
            <td>12</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Matthieu C.</td>
            <td>216</td>
            <td>25</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Camille H.</td>
            <td>216</td>
            <td>25</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Alexandre A.</td>
            <td>214</td>
            <td>27</td>
            <td>Collège Jean Moulin, Artenay</td>
         </tr>
         <tr>
            <td>Elliot D.</td>
            <td>214</td>
            <td>27</td>
            <td>Collège le Rochat, Les Rousses</td>
         </tr>
         <tr>
            <td>Agathe D.</td>
            <td>212</td>
            <td>29</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Romain A.</td>
            <td>212</td>
            <td>29</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Séléna P.</td>
            <td>212</td>
            <td>29</td>
            <td>Collège Anatole France, Cadillac</td>
         </tr>
         <tr>
            <td>Eliott V.</td>
            <td>212</td>
            <td>29</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Elodie G.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>210</td>
            <td>33</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Aristide U.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Marcel Aymé, Masannay la Côte</td>
         </tr>
         <tr>
            <td>Léopold R.</td>
            <td>210</td>
            <td>33</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Lucine B.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Saint Exupéry, Bellegarde sur Valserine</td>
         </tr>
         <tr>
            <td>Alexdandre P.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Zélig L.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Paul Louis Courier, Tours</td>
         </tr>
         <tr>
            <td>Antoine Q.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Jean Perrin, Lyon</td>
         </tr>
         <tr>
            <td>Roméo R.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Raoul Blanchard, Annecy</td>
         </tr>
         <tr>
            <td>Camille M.</td>
            <td>210</td>
            <td>33</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
         <tr>
            <td>Antonin T.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Jean Paul Guyot, Mandeure</td>
         </tr>
         <tr>
            <td>Lucy M.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Jean Moulin, Tomblaine</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Thiban C.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège du Clos Jouvin, Jarrie</td>
         </tr>
         <tr>
            <td>Cyril R.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Roqua, Aubenas</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>210</td>
            <td>33</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Ricco F.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
         <tr>
            <td>Victor G.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Lycée Saint Thomas d'Aquin, Saint Jean de Luz</td>
         </tr>
         <tr>
            <td>Raphael H.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Léon Gambetta, Riedisheim</td>
         </tr>
         <tr>
            <td>Marwan N.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège François Mitterrand, Moissac</td>
         </tr>
         <tr>
            <td>Charlie D.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège de Péranche, Saint Georges d'Esperanche</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
         <tr>
            <td>Alex A.</td>
            <td>210</td>
            <td>33</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>210</td>
            <td>33</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Jérémy Q.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Albert Camus, Frontenay Rohan-Rohan</td>
         </tr>
         <tr>
            <td>Sophie J.</td>
            <td>210</td>
            <td>33</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Isabelle E.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Alanis V.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Axel D.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Jean Monnet, Luisant</td>
         </tr>
         <tr>
            <td>Thomas H.</td>
            <td>210</td>
            <td>33</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
         <tr>
            <td>Félicia D.</td>
            <td>210</td>
            <td>33</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème (participation individuelle) : 4386 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>236</td><td>28</td></tr><tr><td>232</td><td>30</td></tr><tr><td>230</td><td>34</td></tr><tr><td>224</td><td>48</td></tr><tr><td>222</td><td>52</td></tr><tr><td>220</td><td>56</td></tr><tr><td>216</td><td>112</td></tr><tr><td>214</td><td>120</td></tr><tr><td>212</td><td>123</td></tr><tr><td>210</td><td>133</td></tr><tr><td>206</td><td>215</td></tr><tr><td>204</td><td>221</td></tr><tr><td>202</td><td>226</td></tr><tr><td>200</td><td>242</td></tr><tr><td>196</td><td>402</td></tr><tr><td>194</td><td>412</td></tr><tr><td>192</td><td>427</td></tr><tr><td>190</td><td>452</td></tr><tr><td>186</td><td>723</td></tr><tr><td>184</td><td>742</td></tr><tr><td>182</td><td>757</td></tr><tr><td>180</td><td>804</td></tr><tr><td>176</td><td>1145</td></tr><tr><td>174</td><td>1158</td></tr><tr><td>172</td><td>1177</td></tr><tr><td>170</td><td>1211</td></tr><tr><td>166</td><td>1572</td></tr><tr><td>164</td><td>1590</td></tr><tr><td>162</td><td>1606</td></tr><tr><td>160</td><td>1645</td></tr><tr><td>156</td><td>2046</td></tr><tr><td>154</td><td>2061</td></tr><tr><td>152</td><td>2073</td></tr><tr><td>150</td><td>2122</td></tr><tr><td>146</td><td>2486</td></tr><tr><td>144</td><td>2497</td></tr><tr><td>142</td><td>2504</td></tr><tr><td>140</td><td>2536</td></tr><tr><td>136</td><td>2941</td></tr><tr><td>134</td><td>2949</td></tr><tr><td>132</td><td>2958</td></tr><tr><td>130</td><td>2990</td></tr><tr><td>126</td><td>3283</td></tr><tr><td>124</td><td>3291</td></tr><tr><td>122</td><td>3299</td></tr><tr><td>120</td><td>3317</td></tr><tr><td>116</td><td>3571</td></tr><tr><td>114</td><td>3583</td></tr><tr><td>112</td><td>3591</td></tr><tr><td>110</td><td>3609</td></tr><tr><td>106</td><td>3834</td></tr><tr><td>104</td><td>3838</td></tr><tr><td>102</td><td>3839</td></tr><tr><td>100</td><td>3849</td></tr><tr><td>96</td><td>3956</td></tr><tr><td>94</td><td>3960</td></tr><tr><td>92</td><td>3963</td></tr><tr><td>90</td><td>3973</td></tr><tr><td>86</td><td>4096</td></tr><tr><td>82</td><td>4097</td></tr><tr><td>80</td><td>4099</td></tr><tr><td>76</td><td>4135</td></tr><tr><td>74</td><td>4140</td></tr><tr><td>72</td><td>4142</td></tr><tr><td>70</td><td>4147</td></tr><tr><td>66</td><td>4222</td></tr><tr><td>60</td><td>4223</td></tr><tr><td>54</td><td>4244</td></tr><tr><td>50</td><td>4245</td></tr><tr><td>40</td><td>4272</td></tr><tr><td>34</td><td>4292</td></tr><tr><td>30</td><td>4293</td></tr><tr><td>20</td><td>4306</td></tr><tr><td>0</td><td>4319</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 111 premiers ayant un score supérieur ou égal à 220 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Lou C.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Agathe S.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Joliot-Curie, Longueau</td>
         </tr>
         <tr>
            <td>Emir M.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Salut T.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Clémence G.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>André P.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Marc Sangnier, Seyssins</td>
         </tr>
         <tr>
            <td>Félix T.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>George D.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Loric R.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Gabin M.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Zéphyr G.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Olivier L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Jean Jaurès, Castanet-Tolosan</td>
         </tr>
         <tr>
            <td>Anais L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège André Citroën, Paris</td>
         </tr>
         <tr>
            <td>Aristide L.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Liam D.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège le Parc de Villeroy, Mennecy</td>
         </tr>
         <tr>
            <td>Luc C.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Guillaume Apollinaire, Plaisir</td>
         </tr>
         <tr>
            <td>Alexis P.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>h,c H.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Jhgujg H.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Achille T.</td>
            <td>240</td>
            <td>1</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Neil S.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Leonard de Vinci, Carvin</td>
         </tr>
         <tr>
            <td>Mateo B.</td>
            <td>236</td>
            <td>28</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Erwin D.</td>
            <td>236</td>
            <td>28</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Ayoub M.</td>
            <td>232</td>
            <td>30</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Amandine L.</td>
            <td>232</td>
            <td>30</td>
            <td>Collège Lis Isclo d'Or, Pierrelatte</td>
         </tr>
         <tr>
            <td>Alice C.</td>
            <td>232</td>
            <td>30</td>
            <td>Collège de Clagny, Versailles</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>232</td>
            <td>30</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Aurèle G.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège le Marchioux, Parthenay</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Robin D.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège André Citroën, Paris</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Nicolas Haxo, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Oscar C.</td>
            <td>230</td>
            <td>34</td>
            <td>Lycée Français Saint-Louis, Stockholm</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>230</td>
            <td>34</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Nicolas F.</td>
            <td>230</td>
            <td>34</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Gabriel R.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Baudelaire, Roubaix</td>
         </tr>
         <tr>
            <td>Plozion Y.</td>
            <td>230</td>
            <td>34</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège F. MITTERRAND du Haut-Morvan, Montsauche-les-Settons</td>
         </tr>
         <tr>
            <td>Esteban P.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Damien L.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Louise de Savoie, Chambéry</td>
         </tr>
         <tr>
            <td>Solal S.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Amaury V.</td>
            <td>230</td>
            <td>34</td>
            <td>Collège Jules Ferry, Coudekerque-Branche</td>
         </tr>
         <tr>
            <td>Victor O.</td>
            <td>224</td>
            <td>48</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Nathel H.</td>
            <td>224</td>
            <td>48</td>
            <td>Collège Louise de Savoie, Chambéry</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>224</td>
            <td>48</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Youane K.</td>
            <td>224</td>
            <td>48</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Raphaël M.</td>
            <td>222</td>
            <td>52</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Justin C.</td>
            <td>222</td>
            <td>52</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>222</td>
            <td>52</td>
            <td>Collège Raoul Dufy, Nice</td>
         </tr>
         <tr>
            <td>Mohamed A.</td>
            <td>222</td>
            <td>52</td>
            <td>Groupe Scolaire Louis Massignon, Casablanca</td>
         </tr>
         <tr>
            <td>Gabriel H.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Manon F.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Florian K.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège André Maurois, Bischwiller</td>
         </tr>
         <tr>
            <td>Mathilde D.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Anatole le Braz, Saint Brieuc Cedex 1</td>
         </tr>
         <tr>
            <td>MrBboy45 Y.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Pascal E.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Laëticia L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Matthias H.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège André Boulloche, Bart</td>
         </tr>
         <tr>
            <td>Aurelien C.</td>
            <td>220</td>
            <td>56</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Sainte Marie, Blois</td>
         </tr>
         <tr>
            <td>Bastien U.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Lucien Pougué, Remilly</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Eric L.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Alexandre V.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Aristide L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Byslide A.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Sven M.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Foch, Strasbourg</td>
         </tr>
         <tr>
            <td>Octave H.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Louis G.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jacques Callot, Vandœuvre-lès-Nancy</td>
         </tr>
         <tr>
            <td>Ambroise R.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Couperin, Paris</td>
         </tr>
         <tr>
            <td>Jerome F.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Matteo P.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Notre Dame - Saint Sigisbert, Nancy</td>
         </tr>
         <tr>
            <td>Astrid P.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Louis-Guillaume B.</td>
            <td>220</td>
            <td>56</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Hugo G.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Hans Baldung Grien, Hoerdt</td>
         </tr>
         <tr>
            <td>Marine L.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Alexis H.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Daniel S.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Marius D.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Léonard C.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Albert Camus, Soufflenheim</td>
         </tr>
         <tr>
            <td>Virgile M.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Louise de Savoie, Chambéry</td>
         </tr>
         <tr>
            <td>Lkdf J.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Margaux S.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Louise de Savoie, Chambéry</td>
         </tr>
         <tr>
            <td>Lucas G.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Condorcet - The French School of Sydney, Maroubra. NSW</td>
         </tr>
         <tr>
            <td>Test 4.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Manel W.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Nolwenn L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Matilda H.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée International Franco-Américain, San Francisco</td>
         </tr>
         <tr>
            <td>Evelyne L.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Eden L.</td>
            <td>220</td>
            <td>56</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Benjamin F.</td>
            <td>220</td>
            <td>56</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>220</td>
            <td>56</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Benjamin B.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Joliot-Curie, Longueau</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Monnet, Coulogne</td>
         </tr>
         <tr>
            <td>Malo C.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Desdevises du Dézert, Lessay</td>
         </tr>
         <tr>
            <td>Louis R.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Geoffroy L.</td>
            <td>220</td>
            <td>56</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Tom S.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Lizzie A.</td>
            <td>220</td>
            <td>56</td>
            <td>Collège Guy de Maupassant, Gareoult</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème (participation individuelle) : 3444 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>236</td><td>25</td></tr><tr><td>232</td><td>28</td></tr><tr><td>230</td><td>30</td></tr><tr><td>226</td><td>61</td></tr><tr><td>224</td><td>63</td></tr><tr><td>222</td><td>67</td></tr><tr><td>220</td><td>71</td></tr><tr><td>216</td><td>149</td></tr><tr><td>214</td><td>158</td></tr><tr><td>212</td><td>164</td></tr><tr><td>210</td><td>179</td></tr><tr><td>206</td><td>296</td></tr><tr><td>204</td><td>304</td></tr><tr><td>202</td><td>309</td></tr><tr><td>200</td><td>338</td></tr><tr><td>196</td><td>568</td></tr><tr><td>194</td><td>578</td></tr><tr><td>192</td><td>589</td></tr><tr><td>190</td><td>638</td></tr><tr><td>186</td><td>916</td></tr><tr><td>184</td><td>936</td></tr><tr><td>182</td><td>948</td></tr><tr><td>180</td><td>988</td></tr><tr><td>176</td><td>1341</td></tr><tr><td>174</td><td>1353</td></tr><tr><td>172</td><td>1368</td></tr><tr><td>170</td><td>1410</td></tr><tr><td>166</td><td>1722</td></tr><tr><td>164</td><td>1731</td></tr><tr><td>162</td><td>1749</td></tr><tr><td>160</td><td>1780</td></tr><tr><td>156</td><td>2066</td></tr><tr><td>154</td><td>2076</td></tr><tr><td>152</td><td>2084</td></tr><tr><td>150</td><td>2106</td></tr><tr><td>146</td><td>2385</td></tr><tr><td>144</td><td>2397</td></tr><tr><td>142</td><td>2409</td></tr><tr><td>140</td><td>2434</td></tr><tr><td>136</td><td>2644</td></tr><tr><td>134</td><td>2648</td></tr><tr><td>132</td><td>2654</td></tr><tr><td>130</td><td>2665</td></tr><tr><td>126</td><td>2849</td></tr><tr><td>124</td><td>2852</td></tr><tr><td>122</td><td>2855</td></tr><tr><td>120</td><td>2865</td></tr><tr><td>116</td><td>2998</td></tr><tr><td>114</td><td>3000</td></tr><tr><td>112</td><td>3003</td></tr><tr><td>110</td><td>3005</td></tr><tr><td>106</td><td>3108</td></tr><tr><td>104</td><td>3109</td></tr><tr><td>102</td><td>3110</td></tr><tr><td>100</td><td>3113</td></tr><tr><td>96</td><td>3181</td></tr><tr><td>94</td><td>3184</td></tr><tr><td>92</td><td>3186</td></tr><tr><td>90</td><td>3194</td></tr><tr><td>84</td><td>3267</td></tr><tr><td>80</td><td>3268</td></tr><tr><td>76</td><td>3291</td></tr><tr><td>72</td><td>3292</td></tr><tr><td>70</td><td>3294</td></tr><tr><td>62</td><td>3338</td></tr><tr><td>60</td><td>3339</td></tr><tr><td>54</td><td>3360</td></tr><tr><td>50</td><td>3361</td></tr><tr><td>40</td><td>3374</td></tr><tr><td>30</td><td>3386</td></tr><tr><td>20</td><td>3393</td></tr><tr><td>0</td><td>3400</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 60 premiers ayant un score supérieur ou égal à 230 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Emile A.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Dorian H.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Géraud V.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Nathan K.</td>
            <td>240</td>
            <td>1</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Antoine I.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Cacault, Clisson</td>
         </tr>
         <tr>
            <td>Iris T.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Alex Mézenc, Le Pouzin</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Croix Menée, Le Creusot</td>
         </tr>
         <tr>
            <td>Adrien L.</td>
            <td>240</td>
            <td>1</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Alexandre I.</td>
            <td>240</td>
            <td>1</td>
            <td>Institution Stanislas Nice, Nice</td>
         </tr>
         <tr>
            <td>Clara W.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Kléber, Haguenau</td>
         </tr>
         <tr>
            <td>Adrien G.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Matthieu D.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Anne Frank, Morieres les Avignon</td>
         </tr>
         <tr>
            <td>Mattéo M.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Félix H.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Sull F.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Luc F.</td>
            <td>236</td>
            <td>25</td>
            <td>Collège Joseph-Anglade, Lézignan-Corbières</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>236</td>
            <td>25</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Florian G.</td>
            <td>236</td>
            <td>25</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Balthazar P.</td>
            <td>232</td>
            <td>28</td>
            <td>Institution Stanislas Nice, Nice</td>
         </tr>
         <tr>
            <td>Ronan T.</td>
            <td>232</td>
            <td>28</td>
            <td>Collège Paul Chevallier, Le Grand-Lucé</td>
         </tr>
         <tr>
            <td>Etienne R.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Matteo S.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Gérard Philipe, Massy</td>
         </tr>
         <tr>
            <td>Davide P.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Esteban C.</td>
            <td>230</td>
            <td>30</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>230</td>
            <td>30</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Clément T.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Carlos T.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Floriane M.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Zachary T.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège François Rabelais, Montpellier</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Saint Exupery, Avize</td>
         </tr>
         <tr>
            <td>Nolan T.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Gaston Roupnel, Dijon</td>
         </tr>
         <tr>
            <td>Margaux B.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège-Lycée Notre Dame Des Oiseaux, Paris</td>
         </tr>
         <tr>
            <td>Oumeima-Arij B.</td>
            <td>230</td>
            <td>30</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Ruben S.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Corentin D.</td>
            <td>230</td>
            <td>30</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Léo A.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Camille S.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
         <tr>
            <td>Alice B.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Robert Lasneau, Vendôme</td>
         </tr>
         <tr>
            <td>Liliane-Marie F.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Pauline G.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Louise Michel, Chagny</td>
         </tr>
         <tr>
            <td>Sébastien C.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Jean Emond, Vendôme</td>
         </tr>
         <tr>
            <td>Jean D.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Caroline G.</td>
            <td>230</td>
            <td>30</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Nicolas F.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Ismael V.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Pierre-Jean de Béranger, Paris</td>
         </tr>
         <tr>
            <td>Rémi T.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Aristide Briand, Saint-Etienne</td>
         </tr>
         <tr>
            <td>Matthieu D.</td>
            <td>230</td>
            <td>30</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Guillaume H.</td>
            <td>230</td>
            <td>30</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Jean Z.</td>
            <td>230</td>
            <td>30</td>
            <td>Hors établissement, </td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde (participation individuelle) : 2701 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>236</td><td>43</td></tr><tr><td>234</td><td>46</td></tr><tr><td>232</td><td>49</td></tr><tr><td>230</td><td>59</td></tr><tr><td>226</td><td>121</td></tr><tr><td>224</td><td>135</td></tr><tr><td>222</td><td>140</td></tr><tr><td>220</td><td>163</td></tr><tr><td>216</td><td>279</td></tr><tr><td>214</td><td>287</td></tr><tr><td>212</td><td>296</td></tr><tr><td>210</td><td>324</td></tr><tr><td>206</td><td>487</td></tr><tr><td>204</td><td>495</td></tr><tr><td>202</td><td>506</td></tr><tr><td>200</td><td>537</td></tr><tr><td>196</td><td>756</td></tr><tr><td>194</td><td>768</td></tr><tr><td>192</td><td>775</td></tr><tr><td>190</td><td>805</td></tr><tr><td>186</td><td>1070</td></tr><tr><td>184</td><td>1084</td></tr><tr><td>182</td><td>1094</td></tr><tr><td>180</td><td>1126</td></tr><tr><td>176</td><td>1381</td></tr><tr><td>174</td><td>1388</td></tr><tr><td>172</td><td>1395</td></tr><tr><td>170</td><td>1419</td></tr><tr><td>166</td><td>1622</td></tr><tr><td>164</td><td>1631</td></tr><tr><td>162</td><td>1637</td></tr><tr><td>160</td><td>1658</td></tr><tr><td>156</td><td>1850</td></tr><tr><td>154</td><td>1858</td></tr><tr><td>152</td><td>1864</td></tr><tr><td>150</td><td>1876</td></tr><tr><td>146</td><td>2035</td></tr><tr><td>144</td><td>2040</td></tr><tr><td>142</td><td>2044</td></tr><tr><td>140</td><td>2053</td></tr><tr><td>136</td><td>2181</td></tr><tr><td>134</td><td>2183</td></tr><tr><td>132</td><td>2187</td></tr><tr><td>130</td><td>2191</td></tr><tr><td>126</td><td>2293</td></tr><tr><td>124</td><td>2295</td></tr><tr><td>122</td><td>2298</td></tr><tr><td>120</td><td>2301</td></tr><tr><td>116</td><td>2386</td></tr><tr><td>114</td><td>2388</td></tr><tr><td>112</td><td>2390</td></tr><tr><td>110</td><td>2392</td></tr><tr><td>102</td><td>2478</td></tr><tr><td>100</td><td>2484</td></tr><tr><td>92</td><td>2539</td></tr><tr><td>90</td><td>2540</td></tr><tr><td>86</td><td>2582</td></tr><tr><td>82</td><td>2583</td></tr><tr><td>80</td><td>2584</td></tr><tr><td>72</td><td>2601</td></tr><tr><td>70</td><td>2604</td></tr><tr><td>60</td><td>2629</td></tr><tr><td>50</td><td>2643</td></tr><tr><td>40</td><td>2653</td></tr><tr><td>30</td><td>2664</td></tr><tr><td>20</td><td>2665</td></tr><tr><td>0</td><td>2671</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 120 premiers ayant un score supérieur ou égal à 230 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Hakim C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Anthony D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Eusebia H.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français d'Agadir, Agadir</td>
         </tr>
         <tr>
            <td>Alan D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Owen P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Damien L.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Gabriel T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Paris</td>
         </tr>
         <tr>
            <td>Serge L.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Brian S.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Maximilien T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Axel J.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Mathias Q.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint François d'Assise, La Roche-sur-Yon Cedex</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Mathieu J.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée du Parc, Lyon</td>
         </tr>
         <tr>
            <td>Stéphane B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Mathilde H.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Elior M.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Paul V.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Roberto W.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Marie-Sixtine D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Amaya I.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Neven V.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Paul S.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Mickaël D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Alexis R.</td>
            <td>240</td>
            <td>1</td>
            <td>Collège Saint Pierre, Brunoy Cedex</td>
         </tr>
         <tr>
            <td>Valentin M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Anthony N.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Brieuc B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Lény N.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Ange V.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Maxime S.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Yves Thépot, Quiper</td>
         </tr>
         <tr>
            <td>Benjamin A.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Enzo G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Baptiste B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Cyprien R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>Manuel D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Malo J.</td>
            <td>236</td>
            <td>43</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Marion P.</td>
            <td>236</td>
            <td>43</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Paco B.</td>
            <td>236</td>
            <td>43</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Andrea L.</td>
            <td>234</td>
            <td>46</td>
            <td>Les Cordeliers - Notre Dame de la Victoire, Dinan</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>234</td>
            <td>46</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Amaury M.</td>
            <td>234</td>
            <td>46</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Gwénaëlle B.</td>
            <td>232</td>
            <td>49</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Manuel L.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>232</td>
            <td>49</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>232</td>
            <td>49</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Nataël B.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Jean-Guillaume H.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Benjamin Franklin, Auray</td>
         </tr>
         <tr>
            <td>Clément V.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Yann D.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Yves Thépot, Quiper</td>
         </tr>
         <tr>
            <td>Maxime M.</td>
            <td>232</td>
            <td>49</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Pierre Bourdieu, Fronton</td>
         </tr>
         <tr>
            <td>Rémi V.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Mathieu G.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Jules Verne, Nantes</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Vangogh, Aubergenville</td>
         </tr>
         <tr>
            <td>Thiebault J.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Owen P.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Dylan P.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Pierre et Marie Curie, Menton</td>
         </tr>
         <tr>
            <td>Emeline R.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Gael H.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>230</td>
            <td>59</td>
            <td>Ensemble Scolaire Saint Adrien, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Mathieu G.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Kevin D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Shayan P.</td>
            <td>230</td>
            <td>59</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Dorian R.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée la Prat's, Cluny</td>
         </tr>
         <tr>
            <td>Georges-Emile B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Pacome S.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Julien Wittmer, Charolles</td>
         </tr>
         <tr>
            <td>Justin L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée F. Chopin, Nancy</td>
         </tr>
         <tr>
            <td>Gautier B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Ludovic P.</td>
            <td>230</td>
            <td>59</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Clara S.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Aurélie L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Pierre Beghin, Moirans</td>
         </tr>
         <tr>
            <td>Cédric P.</td>
            <td>230</td>
            <td>59</td>
            <td>Internat d'Excellence de Montpellier, Montpellier</td>
         </tr>
         <tr>
            <td>Mathis D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Notre Dame, Le Mans</td>
         </tr>
         <tr>
            <td>Theo L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Chloé D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Notre Dame, Le Mans</td>
         </tr>
         <tr>
            <td>Samuel B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Erkan B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Camille Claudel, Blain</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>230</td>
            <td>59</td>
            <td>Cité Scolaire Gaston Fébus, Orthez</td>
         </tr>
         <tr>
            <td>Baptiste R.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Robert L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Laurine A.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Stéphane Hessel, Vaison la Romaine</td>
         </tr>
         <tr>
            <td>Lauranne G.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Saint François d'Assise, La Roche-sur-Yon Cedex</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Léo J.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>230</td>
            <td>59</td>
            <td>Collège Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Rémi P.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Killian G.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>230</td>
            <td>59</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Jade B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Mathis L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Basile W.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Flo B.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Pierre Bourdieu, Fronton</td>
         </tr>
         <tr>
            <td>Théophile C.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Téo M.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Tristan R.</td>
            <td>230</td>
            <td>59</td>
            <td>Cité Scolaire Jules Verne, Nantes</td>
         </tr>
         <tr>
            <td>Emma C.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée David d'Angers, Angers</td>
         </tr>
         <tr>
            <td>Lucas T.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Colbert de Torcy, Sablé-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Nicolas F.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Notre Dame, Le Mans</td>
         </tr>
         <tr>
            <td>Damien Q.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Pauline K.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Jason C.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Silvia Monfort, Luisant</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>230</td>
            <td>59</td>
            <td>Centre Scolaire Jb de la Salle, Lyon</td>
         </tr>
         <tr>
            <td>Malik R.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>230</td>
            <td>59</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première (participation individuelle) : 1146 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>236</td><td>47</td></tr><tr><td>234</td><td>51</td></tr><tr><td>232</td><td>52</td></tr><tr><td>230</td><td>61</td></tr><tr><td>226</td><td>142</td></tr><tr><td>224</td><td>148</td></tr><tr><td>222</td><td>152</td></tr><tr><td>220</td><td>167</td></tr><tr><td>216</td><td>243</td></tr><tr><td>214</td><td>246</td></tr><tr><td>212</td><td>255</td></tr><tr><td>210</td><td>276</td></tr><tr><td>206</td><td>397</td></tr><tr><td>204</td><td>403</td></tr><tr><td>202</td><td>405</td></tr><tr><td>200</td><td>423</td></tr><tr><td>196</td><td>546</td></tr><tr><td>194</td><td>551</td></tr><tr><td>192</td><td>557</td></tr><tr><td>190</td><td>576</td></tr><tr><td>186</td><td>702</td></tr><tr><td>184</td><td>705</td></tr><tr><td>182</td><td>710</td></tr><tr><td>180</td><td>721</td></tr><tr><td>176</td><td>815</td></tr><tr><td>174</td><td>816</td></tr><tr><td>172</td><td>822</td></tr><tr><td>170</td><td>831</td></tr><tr><td>166</td><td>891</td></tr><tr><td>164</td><td>894</td></tr><tr><td>162</td><td>897</td></tr><tr><td>160</td><td>904</td></tr><tr><td>154</td><td>953</td></tr><tr><td>152</td><td>956</td></tr><tr><td>150</td><td>959</td></tr><tr><td>144</td><td>1004</td></tr><tr><td>142</td><td>1005</td></tr><tr><td>140</td><td>1007</td></tr><tr><td>132</td><td>1051</td></tr><tr><td>130</td><td>1052</td></tr><tr><td>122</td><td>1080</td></tr><tr><td>120</td><td>1082</td></tr><tr><td>114</td><td>1103</td></tr><tr><td>112</td><td>1104</td></tr><tr><td>110</td><td>1105</td></tr><tr><td>104</td><td>1118</td></tr><tr><td>100</td><td>1119</td></tr><tr><td>92</td><td>1127</td></tr><tr><td>90</td><td>1128</td></tr><tr><td>80</td><td>1137</td></tr><tr><td>70</td><td>1141</td></tr><tr><td>60</td><td>1142</td></tr><tr><td>50</td><td>1145</td></tr><tr><td>40</td><td>1146</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 51 premiers ayant un score supérieur ou égal à 233 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Matthieu F.</td>
            <td>240</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Jean-Christophe A.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Tolotra R.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Benoit G.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Laurie R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Amanda R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Schoelcher, Fort-de-France</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Romain G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Eliott K.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Ledoux, Besançon</td>
         </tr>
         <tr>
            <td>Nico O.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Maël L.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Gaspard T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Nicolas O.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Maël L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Paco R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Oriane T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint-Dominique, Saint-Herblain</td>
         </tr>
         <tr>
            <td>Vincent D.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Ibrahim T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Pierre Mendès France, Tunis</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>240</td>
            <td>1</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Eliott Q.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Mickael O.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Ivory F.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Baptiste J.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Gaëtan C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Eric D.</td>
            <td>240</td>
            <td>1</td>
            <td>Taipei European School, Taipei</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Philippe A.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>240</td>
            <td>1</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Jean H.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Ilyes W.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Quentin P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Sophie L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée de l'Emperi, Salon de Provence</td>
         </tr>
         <tr>
            <td>Timothée L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Alice B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>240</td>
            <td>1</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Corentin M.</td>
            <td>240</td>
            <td>1</td>
            <td>Gymnase Lucie Berger, Strasbourg</td>
         </tr>
         <tr>
            <td>Elouan L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Yohann P.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Gaspard B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Williaham H.</td>
            <td>236</td>
            <td>47</td>
            <td>Lycée Germaine Tillion, Sain Bel</td>
         </tr>
         <tr>
            <td>Hugo J.</td>
            <td>236</td>
            <td>47</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Pierrick M.</td>
            <td>236</td>
            <td>47</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Antoine B.</td>
            <td>236</td>
            <td>47</td>
            <td>Lycée Douanier Rousseau, Laval</td>
         </tr>
         <tr>
            <td>Elias S.</td>
            <td>234</td>
            <td>51</td>
            <td>Hors établissement, </td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale (participation individuelle) : 667 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>236</td><td>61</td></tr><tr><td>234</td><td>63</td></tr><tr><td>232</td><td>64</td></tr><tr><td>230</td><td>78</td></tr><tr><td>226</td><td>144</td></tr><tr><td>224</td><td>148</td></tr><tr><td>222</td><td>154</td></tr><tr><td>220</td><td>170</td></tr><tr><td>216</td><td>238</td></tr><tr><td>214</td><td>239</td></tr><tr><td>212</td><td>240</td></tr><tr><td>210</td><td>261</td></tr><tr><td>206</td><td>330</td></tr><tr><td>204</td><td>331</td></tr><tr><td>202</td><td>336</td></tr><tr><td>200</td><td>351</td></tr><tr><td>196</td><td>421</td></tr><tr><td>194</td><td>423</td></tr><tr><td>192</td><td>427</td></tr><tr><td>190</td><td>438</td></tr><tr><td>186</td><td>501</td></tr><tr><td>184</td><td>503</td></tr><tr><td>182</td><td>506</td></tr><tr><td>180</td><td>512</td></tr><tr><td>174</td><td>556</td></tr><tr><td>172</td><td>558</td></tr><tr><td>170</td><td>562</td></tr><tr><td>164</td><td>587</td></tr><tr><td>162</td><td>588</td></tr><tr><td>160</td><td>595</td></tr><tr><td>156</td><td>606</td></tr><tr><td>154</td><td>607</td></tr><tr><td>150</td><td>608</td></tr><tr><td>144</td><td>620</td></tr><tr><td>142</td><td>621</td></tr><tr><td>140</td><td>622</td></tr><tr><td>132</td><td>632</td></tr><tr><td>130</td><td>633</td></tr><tr><td>120</td><td>640</td></tr><tr><td>116</td><td>647</td></tr><tr><td>112</td><td>648</td></tr><tr><td>110</td><td>650</td></tr><tr><td>100</td><td>654</td></tr><tr><td>90</td><td>658</td></tr><tr><td>80</td><td>661</td></tr><tr><td>70</td><td>662</td></tr><tr><td>60</td><td>664</td></tr><tr><td>40</td><td>666</td></tr><tr><td>0</td><td>667</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 63 premiers ayant un score supérieur ou égal à 234 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Tomy R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Stephane L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Said M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Adrien D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         <tr>
            <td>Jacques C.</td>
            <td>240</td>
            <td>1</td>
            <td>Institution Immaculée Conception, Villeurbanne</td>
         </tr>
         <tr>
            <td>Guillaume A.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Georges Duby, Luynes</td>
         </tr>
         <tr>
            <td>Léo M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Guillian T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Elise G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Sainte-Marie, Lyon</td>
         </tr>
         <tr>
            <td>Corentin M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Sainte Marie Grand Lebrun, Bordeaux</td>
         </tr>
         <tr>
            <td>Stanislaw P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Vangogh, Aubergenville</td>
         </tr>
         <tr>
            <td>Jean M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Dann D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Sylvain P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Saad B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Clément A.</td>
            <td>240</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Gabriel Z.</td>
            <td>240</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Petru F.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>240</td>
            <td>1</td>
            <td>Hors établissement, </td>
         </tr>
         <tr>
            <td>Théo O.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Boutet de Monvel, Luneville</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Thibault D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Shane L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée la Bourdonnais, Forest Side</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Hamza Q.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Buffon, Paris</td>
         </tr>
         <tr>
            <td>Eloi L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Simon G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Thomas A.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Charles le Chauve, Roissy en Brie</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>240</td>
            <td>1</td>
            <td>Cité Scolaire - collège Jean Maumus-Lycée L. Bertrand, Briey</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Buffon, Paris</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Alex W.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Axel L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Bastien T.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Claude Fauriel, Saint Etienne</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Theo M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Lucas H.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jean-Baptiste Schwilgué, Sélestat</td>
         </tr>
         <tr>
            <td>Louis-Antoine D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Sainte-Marie, Lyon</td>
         </tr>
         <tr>
            <td>Guy L.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>240</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Clément N.</td>
            <td>240</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Christian C.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée l'Essouriau, Les Ulis</td>
         </tr>
         <tr>
            <td>Emilie D.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Nicolas R.</td>
            <td>240</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Quentin M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Coline V.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Guy de Maupassant, Colombes</td>
         </tr>
         <tr>
            <td>Tomy S.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Madeleine B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Tristan G.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Jean Joly, La Rivière Saint Louis</td>
         </tr>
         <tr>
            <td>Léonard B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Mathieu P.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Salim B.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Rayan M.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Romane L.</td>
            <td>236</td>
            <td>61</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>236</td>
            <td>61</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>234</td>
            <td>63</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro. (participation individuelle) : 121 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>230</td><td>5</td></tr><tr><td>224</td><td>13</td></tr><tr><td>220</td><td>14</td></tr><tr><td>210</td><td>16</td></tr><tr><td>200</td><td>18</td></tr><tr><td>194</td><td>21</td></tr><tr><td>190</td><td>22</td></tr><tr><td>180</td><td>32</td></tr><tr><td>170</td><td>34</td></tr><tr><td>160</td><td>39</td></tr><tr><td>150</td><td>44</td></tr><tr><td>146</td><td>55</td></tr><tr><td>140</td><td>56</td></tr><tr><td>130</td><td>68</td></tr><tr><td>120</td><td>78</td></tr><tr><td>116</td><td>84</td></tr><tr><td>112</td><td>85</td></tr><tr><td>110</td><td>86</td></tr><tr><td>100</td><td>89</td></tr><tr><td>90</td><td>93</td></tr><tr><td>80</td><td>99</td></tr><tr><td>70</td><td>100</td></tr><tr><td>60</td><td>103</td></tr><tr><td>50</td><td>108</td></tr><tr><td>40</td><td>111</td></tr><tr><td>30</td><td>112</td></tr><tr><td>20</td><td>115</td></tr><tr><td>0</td><td>116</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 20 premiers ayant un score supérieur ou égal à 200 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Sandy R.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Corentin S.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Thomas W.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Haar O.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Simon C.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Charly L.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Marvin D.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Alexandre F.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Remi F.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Mathis L.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Lucas A.</td>
            <td>230</td>
            <td>5</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Lucien B.</td>
            <td>224</td>
            <td>13</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Margaux B.</td>
            <td>220</td>
            <td>14</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Guillaume L.</td>
            <td>220</td>
            <td>14</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Geoffrey B.</td>
            <td>210</td>
            <td>16</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>210</td>
            <td>16</td>
            <td>Lycée Julien de Balleure, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Simon C.</td>
            <td>200</td>
            <td>18</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Lucas A.</td>
            <td>200</td>
            <td>18</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Rémi D.</td>
            <td>200</td>
            <td>18</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première pro. (participation individuelle) : 56 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>220</td><td>2</td></tr><tr><td>210</td><td>4</td></tr><tr><td>200</td><td>6</td></tr><tr><td>180</td><td>9</td></tr><tr><td>172</td><td>10</td></tr><tr><td>170</td><td>11</td></tr><tr><td>160</td><td>12</td></tr><tr><td>150</td><td>14</td></tr><tr><td>140</td><td>20</td></tr><tr><td>130</td><td>23</td></tr><tr><td>126</td><td>28</td></tr><tr><td>110</td><td>29</td></tr><tr><td>102</td><td>30</td></tr><tr><td>100</td><td>31</td></tr><tr><td>90</td><td>37</td></tr><tr><td>80</td><td>39</td></tr><tr><td>70</td><td>40</td></tr><tr><td>60</td><td>45</td></tr><tr><td>50</td><td>47</td></tr><tr><td>40</td><td>48</td></tr><tr><td>30</td><td>52</td></tr><tr><td>0</td><td>53</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 8 premiers ayant un score supérieur ou égal à 200 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Tristan W.</td>
            <td>240</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Thomas W.</td>
            <td>220</td>
            <td>2</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Tristan W.</td>
            <td>220</td>
            <td>2</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Justin Willy M.</td>
            <td>210</td>
            <td>4</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Loic G.</td>
            <td>210</td>
            <td>4</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Burr J.</td>
            <td>200</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>200</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Joris K.</td>
            <td>200</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-829202546979569397-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale pro. (participation individuelle) : 24 élèves</h2>
            <i>Score maximum atteignable : 240</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-829202546979569397-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-829202546979569397-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>230</td><td>1</td></tr><tr><td>220</td><td>2</td></tr><tr><td>210</td><td>3</td></tr><tr><td>200</td><td>4</td></tr><tr><td>190</td><td>5</td></tr><tr><td>182</td><td>6</td></tr><tr><td>180</td><td>7</td></tr><tr><td>170</td><td>8</td></tr><tr><td>160</td><td>10</td></tr><tr><td>150</td><td>11</td></tr><tr><td>140</td><td>13</td></tr><tr><td>130</td><td>16</td></tr><tr><td>120</td><td>17</td></tr><tr><td>100</td><td>18</td></tr><tr><td>90</td><td>19</td></tr><tr><td>0</td><td>21</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 4 premiers ayant un score supérieur ou égal à 200 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style='height:200px;width:100%;overflow-y:scroll'>
         <table border=1 cellspacing=0 style='width:100%'>
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>230</td>
            <td>1</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Benjamin H.</td>
            <td>220</td>
            <td>2</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Morgan F.</td>
            <td>210</td>
            <td>3</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Raphaël R.</td>
            <td>200</td>
            <td>4</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div></div>
