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

<!--<li>8203 élèves ont participé, dont 33% de filles.</li>
<li>427 établissements ont pris part au concours.</li>
-->

      <div id='results'>
         <ul><li><a href='#tabs-51-6'>6ème</a></li><li><a href='#tabs-51-7'>5ème</a></li><li><a href='#tabs-51-8'>4ème</a></li><li><a href='#tabs-51-9'>3ème</a></li><li><a href='#tabs-51-10'>Seconde</a></li><li><a href='#tabs-51-11'>Première</a></li><li><a href='#tabs-51-12'>Terminale</a></li><li><a href='#tabs-51--3'>Pas encore au collège</a></li><li><a href='#tabs-51--4'>Autre</a></li></ul><div id='tabs-51-6'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème : 1081 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-6' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-6' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>105</td><td>1</td></tr><tr><td>102</td><td>4</td></tr><tr><td>94</td><td>6</td></tr><tr><td>93</td><td>8</td></tr><tr><td>91</td><td>9</td></tr><tr><td>89</td><td>10</td></tr><tr><td>88</td><td>13</td></tr><tr><td>87</td><td>14</td></tr><tr><td>86</td><td>16</td></tr><tr><td>85</td><td>17</td></tr><tr><td>84</td><td>18</td></tr><tr><td>83</td><td>22</td></tr><tr><td>82</td><td>24</td></tr><tr><td>81</td><td>27</td></tr><tr><td>80</td><td>31</td></tr><tr><td>79</td><td>35</td></tr><tr><td>78</td><td>42</td></tr><tr><td>77</td><td>47</td></tr><tr><td>76</td><td>51</td></tr><tr><td>75</td><td>58</td></tr><tr><td>74</td><td>66</td></tr><tr><td>73</td><td>72</td></tr><tr><td>72</td><td>89</td></tr><tr><td>71</td><td>97</td></tr><tr><td>70</td><td>112</td></tr><tr><td>69</td><td>129</td></tr><tr><td>68</td><td>140</td></tr><tr><td>67</td><td>157</td></tr><tr><td>66</td><td>171</td></tr><tr><td>65</td><td>190</td></tr><tr><td>64</td><td>221</td></tr><tr><td>63</td><td>237</td></tr><tr><td>62</td><td>252</td></tr><tr><td>61</td><td>289</td></tr><tr><td>60</td><td>310</td></tr><tr><td>59</td><td>348</td></tr><tr><td>58</td><td>374</td></tr><tr><td>57</td><td>397</td></tr><tr><td>56</td><td>447</td></tr><tr><td>55</td><td>472</td></tr><tr><td>54</td><td>503</td></tr><tr><td>53</td><td>524</td></tr><tr><td>52</td><td>558</td></tr><tr><td>51</td><td>589</td></tr><tr><td>50</td><td>624</td></tr><tr><td>49</td><td>665</td></tr><tr><td>48</td><td>690</td></tr><tr><td>47</td><td>719</td></tr><tr><td>46</td><td>751</td></tr><tr><td>45</td><td>788</td></tr><tr><td>44</td><td>804</td></tr><tr><td>43</td><td>831</td></tr><tr><td>42</td><td>843</td></tr><tr><td>41</td><td>861</td></tr><tr><td>40</td><td>876</td></tr><tr><td>39</td><td>888</td></tr><tr><td>38</td><td>922</td></tr><tr><td>37</td><td>950</td></tr><tr><td>36</td><td>959</td></tr><tr><td>35</td><td>972</td></tr><tr><td>34</td><td>983</td></tr><tr><td>33</td><td>993</td></tr><tr><td>32</td><td>999</td></tr><tr><td>31</td><td>1003</td></tr><tr><td>30</td><td>1013</td></tr><tr><td>29</td><td>1021</td></tr><tr><td>28</td><td>1027</td></tr><tr><td>27</td><td>1031</td></tr><tr><td>26</td><td>1035</td></tr><tr><td>25</td><td>1038</td></tr><tr><td>24</td><td>1042</td></tr><tr><td>23</td><td>1046</td></tr><tr><td>22</td><td>1052</td></tr><tr><td>21</td><td>1056</td></tr><tr><td>19</td><td>1059</td></tr><tr><td>18</td><td>1060</td></tr><tr><td>17</td><td>1061</td></tr><tr><td>15</td><td>1064</td></tr><tr><td>14</td><td>1067</td></tr><tr><td>13</td><td>1068</td></tr><tr><td>9</td><td>1070</td></tr><tr><td>4</td><td>1072</td></tr><tr><td>0</td><td>1073</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 128 premiers ayant un score supérieur ou égal à 70 sont listés ci-dessous.
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
            <td>Solène C.</td>
            <td>105</td>
            <td>1</td>
            <td>Hergé, Gondecourt</td>
         </tr>
         <tr>
            <td>Michael N.</td>
            <td>105</td>
            <td>1</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Aelle V.</td>
            <td>105</td>
            <td>1</td>
            <td>Hors établissement, 'aelle' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Tess T.</td>
            <td>102</td>
            <td>4</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Octave G.</td>
            <td>102</td>
            <td>4</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Anahide H.</td>
            <td>94</td>
            <td>6</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>94</td>
            <td>6</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Ulysse L.</td>
            <td>93</td>
            <td>8</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Philéas D.</td>
            <td>91</td>
            <td>9</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Antoine F.</td>
            <td>89</td>
            <td>10</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Raluca-Ioana F.</td>
            <td>89</td>
            <td>10</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Eva D.</td>
            <td>89</td>
            <td>10</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Charlotte B.</td>
            <td>88</td>
            <td>13</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Laura L.</td>
            <td>87</td>
            <td>14</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Elise T.</td>
            <td>87</td>
            <td>14</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>86</td>
            <td>16</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Tom P.</td>
            <td>85</td>
            <td>17</td>
            <td>Collège Jean-Pierre Vernant, Toulouse</td>
         </tr>
         <tr>
            <td>Lou-Anne J.</td>
            <td>84</td>
            <td>18</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Jean S.</td>
            <td>84</td>
            <td>18</td>
            <td>Collège Emile Gallé, Essey les Nancy</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>84</td>
            <td>18</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
         <tr>
            <td>Erwan T.</td>
            <td>84</td>
            <td>18</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Marco T.</td>
            <td>83</td>
            <td>22</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>83</td>
            <td>22</td>
            <td>École MLF/PSA de Wuhan, Wuhan</td>
         </tr>
         <tr>
            <td>Naël R.</td>
            <td>82</td>
            <td>24</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>William R.</td>
            <td>82</td>
            <td>24</td>
            <td>Collège Champagne, Thonon-les-Bains</td>
         </tr>
         <tr>
            <td>Thelma N.</td>
            <td>82</td>
            <td>24</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Valentin K.</td>
            <td>81</td>
            <td>27</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>81</td>
            <td>27</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>81</td>
            <td>27</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
         <tr>
            <td>Amandine P.</td>
            <td>81</td>
            <td>27</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Léo K.</td>
            <td>80</td>
            <td>31</td>
            <td>Lycée Marie Curie, Gockhausen</td>
         </tr>
         <tr>
            <td>Eliott V.</td>
            <td>80</td>
            <td>31</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Paul H.</td>
            <td>80</td>
            <td>31</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Jolan P.</td>
            <td>80</td>
            <td>31</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Ehouarn L.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège les Korrigans, Carnac</td>
         </tr>
         <tr>
            <td>Ioen D.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Blandine B.</td>
            <td>79</td>
            <td>35</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Camille F.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>79</td>
            <td>35</td>
            <td>Collège Paul Langevin, Avion</td>
         </tr>
         <tr>
            <td>Zina C.</td>
            <td>78</td>
            <td>42</td>
            <td>Collège les Champs Philippe, La Garenne Colombes</td>
         </tr>
         <tr>
            <td>Tayssir B.</td>
            <td>78</td>
            <td>42</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>78</td>
            <td>42</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Mattéo B.</td>
            <td>78</td>
            <td>42</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Ethan S.</td>
            <td>78</td>
            <td>42</td>
            <td>Hergé, Gondecourt</td>
         </tr>
         <tr>
            <td>Florian M.</td>
            <td>77</td>
            <td>47</td>
            <td>Collège Félix Tisserand, Nuits-Saint-Georges</td>
         </tr>
         <tr>
            <td>Leo P.</td>
            <td>77</td>
            <td>47</td>
            <td>Collège Colbert, Cholet</td>
         </tr>
         <tr>
            <td>Adrien C.</td>
            <td>77</td>
            <td>47</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Jeremy Q.</td>
            <td>77</td>
            <td>47</td>
            <td>Collège Albert Camus, Frontenay Rohan-Rohan</td>
         </tr>
         <tr>
            <td>Enz P.</td>
            <td>76</td>
            <td>51</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Michal R.</td>
            <td>76</td>
            <td>51</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Gabin V.</td>
            <td>76</td>
            <td>51</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Aurélien S.</td>
            <td>76</td>
            <td>51</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Maxime J.</td>
            <td>76</td>
            <td>51</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Ignacio G.</td>
            <td>76</td>
            <td>51</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Vincent D.</td>
            <td>76</td>
            <td>51</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Emma G.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Achille T.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Oliver D.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège- lycée Maurice Ravel, Paris</td>
         </tr>
         <tr>
            <td>Evan L.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège le Carré Ste-Honorine, Taverny</td>
         </tr>
         <tr>
            <td>Ludo M.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège du Puy d'Issolud, Vayrac</td>
         </tr>
         <tr>
            <td>Noah M.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège du Puy d'Issolud, Vayrac</td>
         </tr>
         <tr>
            <td>Henri D.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Lucie C.</td>
            <td>75</td>
            <td>58</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
         <tr>
            <td>Ugo S.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège Frison-Roche, La Broque</td>
         </tr>
         <tr>
            <td>Aurora R.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège Marteroy, Vesoul</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège de Rhuys, Sarzeau</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège Moliere, Beaumont</td>
         </tr>
         <tr>
            <td>Eloann L.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège Jacques Prévert, Flavy le Martel</td>
         </tr>
         <tr>
            <td>Elwann T.</td>
            <td>74</td>
            <td>66</td>
            <td>Collège Léon Tolstoi, Le Mans</td>
         </tr>
         <tr>
            <td>Marwan N.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège François Mitterrand, Moissac</td>
         </tr>
         <tr>
            <td>Francois-Louis F.</td>
            <td>73</td>
            <td>72</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Marianne D.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Stanislas D.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Aloïs T.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Pauline L.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Mark A.</td>
            <td>73</td>
            <td>72</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Yassine T.</td>
            <td>73</td>
            <td>72</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Lahcen A.</td>
            <td>73</td>
            <td>72</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Amélie C.</td>
            <td>73</td>
            <td>72</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Nathan C.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Nassim K.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Saskia C.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège- lycée Maurice Ravel, Paris</td>
         </tr>
         <tr>
            <td>Lecaille G.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Baptiste L.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège François Mitterrand, Creon</td>
         </tr>
         <tr>
            <td>Mathis V.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège François Mitterrand, Creon</td>
         </tr>
         <tr>
            <td>Alban T.</td>
            <td>73</td>
            <td>72</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>François L.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Barnabé C.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Roqua, Aubenas</td>
         </tr>
         <tr>
            <td>Quentin M.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Marièle I.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Gambetta, Arras Cédex</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Eva M.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Alanis V.</td>
            <td>72</td>
            <td>89</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Santorin Y.</td>
            <td>72</td>
            <td>89</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Kacper Z.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Flavien C.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Romain D.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège du Pays de l'Herbasse, St Donat sur l'Herbasse</td>
         </tr>
         <tr>
            <td>Toundé Michel-Arnaud A.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Lisa B.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège les Rives du Leman, Evian les Bains</td>
         </tr>
         <tr>
            <td>Julien V.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Bachelard, Dijon</td>
         </tr>
         <tr>
            <td>Roman L.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Loujaïna R.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Pierre Auguste Renoir, Ferrières en Gatinais</td>
         </tr>
         <tr>
            <td>Pauline H.</td>
            <td>71</td>
            <td>97</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Wandrille L.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>71</td>
            <td>97</td>
            <td>École MLF/PSA de Wuhan, Wuhan</td>
         </tr>
         <tr>
            <td>Mara K.</td>
            <td>71</td>
            <td>97</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>71</td>
            <td>97</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Guillaume T.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Pauline F.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Jan J.</td>
            <td>70</td>
            <td>112</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Cédric M.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Leï Garrus, Saint Maxi</td>
         </tr>
         <tr>
            <td>Louis A.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Hilel L.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Elsa Triolet, Paris</td>
         </tr>
         <tr>
            <td>Cyprien B.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Bx Charles de Foucauld, Puteaux</td>
         </tr>
         <tr>
            <td>Romane F.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Gambetta, Arras Cédex</td>
         </tr>
         <tr>
            <td>Nathan E.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Pierre Corneille, Le Neubourg</td>
         </tr>
         <tr>
            <td>Damien M.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Charlotte S.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Paul Langevin, Avesnes Lez Aubert</td>
         </tr>
         <tr>
            <td>Lilian D.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Font de Fillol, Six Fours les Plages</td>
         </tr>
         <tr>
            <td>Bruno G.</td>
            <td>70</td>
            <td>112</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Kerfontaine, Pluneret</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège de l'Evre, Montrevault</td>
         </tr>
         <tr>
            <td>Gabriel P.</td>
            <td>70</td>
            <td>112</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>70</td>
            <td>112</td>
            <td>Collège Mont-Miroir, Maiche</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-7'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème : 2644 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-7' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-7' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>106</td><td>1</td></tr><tr><td>105</td><td>2</td></tr><tr><td>103</td><td>4</td></tr><tr><td>102</td><td>5</td></tr><tr><td>101</td><td>6</td></tr><tr><td>98</td><td>7</td></tr><tr><td>97</td><td>10</td></tr><tr><td>95</td><td>13</td></tr><tr><td>94</td><td>14</td></tr><tr><td>93</td><td>16</td></tr><tr><td>92</td><td>17</td></tr><tr><td>91</td><td>19</td></tr><tr><td>90</td><td>22</td></tr><tr><td>89</td><td>25</td></tr><tr><td>88</td><td>34</td></tr><tr><td>87</td><td>48</td></tr><tr><td>86</td><td>53</td></tr><tr><td>85</td><td>63</td></tr><tr><td>84</td><td>78</td></tr><tr><td>83</td><td>85</td></tr><tr><td>82</td><td>92</td></tr><tr><td>81</td><td>109</td></tr><tr><td>80</td><td>117</td></tr><tr><td>79</td><td>125</td></tr><tr><td>78</td><td>143</td></tr><tr><td>77</td><td>159</td></tr><tr><td>76</td><td>186</td></tr><tr><td>75</td><td>214</td></tr><tr><td>74</td><td>235</td></tr><tr><td>73</td><td>253</td></tr><tr><td>72</td><td>281</td></tr><tr><td>71</td><td>309</td></tr><tr><td>70</td><td>348</td></tr><tr><td>69</td><td>382</td></tr><tr><td>68</td><td>421</td></tr><tr><td>67</td><td>474</td></tr><tr><td>66</td><td>527</td></tr><tr><td>65</td><td>594</td></tr><tr><td>64</td><td>658</td></tr><tr><td>63</td><td>718</td></tr><tr><td>62</td><td>788</td></tr><tr><td>61</td><td>896</td></tr><tr><td>60</td><td>974</td></tr><tr><td>59</td><td>1072</td></tr><tr><td>58</td><td>1133</td></tr><tr><td>57</td><td>1198</td></tr><tr><td>56</td><td>1329</td></tr><tr><td>55</td><td>1386</td></tr><tr><td>54</td><td>1477</td></tr><tr><td>53</td><td>1540</td></tr><tr><td>52</td><td>1611</td></tr><tr><td>51</td><td>1671</td></tr><tr><td>50</td><td>1743</td></tr><tr><td>49</td><td>1826</td></tr><tr><td>48</td><td>1887</td></tr><tr><td>47</td><td>1934</td></tr><tr><td>46</td><td>1973</td></tr><tr><td>45</td><td>2043</td></tr><tr><td>44</td><td>2087</td></tr><tr><td>43</td><td>2140</td></tr><tr><td>42</td><td>2178</td></tr><tr><td>41</td><td>2221</td></tr><tr><td>40</td><td>2259</td></tr><tr><td>39</td><td>2279</td></tr><tr><td>38</td><td>2317</td></tr><tr><td>37</td><td>2358</td></tr><tr><td>36</td><td>2393</td></tr><tr><td>35</td><td>2422</td></tr><tr><td>34</td><td>2443</td></tr><tr><td>33</td><td>2464</td></tr><tr><td>32</td><td>2479</td></tr><tr><td>31</td><td>2487</td></tr><tr><td>30</td><td>2514</td></tr><tr><td>29</td><td>2529</td></tr><tr><td>28</td><td>2542</td></tr><tr><td>27</td><td>2546</td></tr><tr><td>26</td><td>2553</td></tr><tr><td>25</td><td>2557</td></tr><tr><td>24</td><td>2561</td></tr><tr><td>23</td><td>2564</td></tr><tr><td>22</td><td>2574</td></tr><tr><td>21</td><td>2577</td></tr><tr><td>20</td><td>2581</td></tr><tr><td>19</td><td>2583</td></tr><tr><td>17</td><td>2584</td></tr><tr><td>15</td><td>2594</td></tr><tr><td>9</td><td>2602</td></tr><tr><td>6</td><td>2603</td></tr><tr><td>4</td><td>2605</td></tr><tr><td>0</td><td>2606</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 280 premiers ayant un score supérieur ou égal à 73 sont listés ci-dessous.
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
            <td>Sofya T.</td>
            <td>106</td>
            <td>1</td>
            <td>Hors établissement, 'soniatar' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Léonard C.</td>
            <td>105</td>
            <td>2</td>
            <td>Collège Saint Aubin la Salle, Saint Sylvain d'Anjou</td>
         </tr>
         <tr>
            <td>Solal S.</td>
            <td>105</td>
            <td>2</td>
            <td>Hors établissement, 'solal_stern' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Albin T.</td>
            <td>103</td>
            <td>4</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Corinne C.</td>
            <td>102</td>
            <td>5</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Gabriel R.</td>
            <td>101</td>
            <td>6</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Brice G.</td>
            <td>98</td>
            <td>7</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Manel W.</td>
            <td>98</td>
            <td>7</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>98</td>
            <td>7</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Justin C.</td>
            <td>97</td>
            <td>10</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>97</td>
            <td>10</td>
            <td>Collège Sainte-Marie, Meaux</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>97</td>
            <td>10</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Théa F.</td>
            <td>95</td>
            <td>13</td>
            <td>Collège "George Sand", La Motte Servolex</td>
         </tr>
         <tr>
            <td>Jack L.</td>
            <td>94</td>
            <td>14</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Gaétan D.</td>
            <td>94</td>
            <td>14</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Maelle D.</td>
            <td>93</td>
            <td>16</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>92</td>
            <td>17</td>
            <td>Collège du Marquenterre, Rue</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>92</td>
            <td>17</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Eliott A.</td>
            <td>91</td>
            <td>19</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Audrey V.</td>
            <td>91</td>
            <td>19</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Hippolyte R.</td>
            <td>91</td>
            <td>19</td>
            <td>Hors établissement, 'legadrieng' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Gabriel M.</td>
            <td>90</td>
            <td>22</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Elise M.</td>
            <td>90</td>
            <td>22</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Nicolas W.</td>
            <td>90</td>
            <td>22</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Mathieu P.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège le Revard, Grésy sur Aix</td>
         </tr>
         <tr>
            <td>Ivan G.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Milo R.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Raphaël C.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Justine B.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Loris F.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>David E.</td>
            <td>89</td>
            <td>25</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Dimitri C.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Laura L.</td>
            <td>89</td>
            <td>25</td>
            <td>Collège Jean-Pierre Vernant, Toulouse</td>
         </tr>
         <tr>
            <td>Erwann C.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Omar A.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Natân B.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Wissam L.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Emile H.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Gaspard P.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Smy A.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Hector P.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Martin S.</td>
            <td>88</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>88</td>
            <td>34</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Marius D.</td>
            <td>88</td>
            <td>34</td>
            <td>Collège Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Tim K.</td>
            <td>88</td>
            <td>34</td>
            <td>Collège Frison-Roche, La Broque</td>
         </tr>
         <tr>
            <td>Jérémi M.</td>
            <td>88</td>
            <td>34</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Enzo G.</td>
            <td>87</td>
            <td>48</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>87</td>
            <td>48</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Anais E.</td>
            <td>87</td>
            <td>48</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>87</td>
            <td>48</td>
            <td>Collège le Cèdre, Canteleu</td>
         </tr>
         <tr>
            <td>Paul P.</td>
            <td>87</td>
            <td>48</td>
            <td>Collège Jean Rostand, St Germain du Puy</td>
         </tr>
         <tr>
            <td>Elisa R.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Ismail K.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Ahmadou A.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Fanchon Y.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Damien F.</td>
            <td>86</td>
            <td>53</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Arthur F.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Henri Dunant, Royan</td>
         </tr>
         <tr>
            <td>Mathis C.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Alex Mézenc, Le Pouzin</td>
         </tr>
         <tr>
            <td>Jessy G.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
         <tr>
            <td>Théodore D.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Gwenaelle G.</td>
            <td>86</td>
            <td>53</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>85</td>
            <td>63</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Maxime N.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Erine H.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Sarah F.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Olivier B.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Stanislas Cannes, Cannes</td>
         </tr>
         <tr>
            <td>Alexis H.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Lucien P.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Solal A.</td>
            <td>85</td>
            <td>63</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Natan S.</td>
            <td>85</td>
            <td>63</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Ugo C.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Carla S.</td>
            <td>85</td>
            <td>63</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>François B.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Paul Langevin, Avesnes Lez Aubert</td>
         </tr>
         <tr>
            <td>Maeva J.</td>
            <td>85</td>
            <td>63</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Noah Q.</td>
            <td>84</td>
            <td>78</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>84</td>
            <td>78</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Julien M.</td>
            <td>84</td>
            <td>78</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Lucas Z.</td>
            <td>84</td>
            <td>78</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Christal D.</td>
            <td>84</td>
            <td>78</td>
            <td>Collège Léon Tolstoi, Le Mans</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>84</td>
            <td>78</td>
            <td>Hors établissement, 'adrienmarcazzan' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Artus C.</td>
            <td>84</td>
            <td>78</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Adil W.</td>
            <td>83</td>
            <td>85</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Loïs D.</td>
            <td>83</td>
            <td>85</td>
            <td>Collège Sainte Stéphanie, Saint Galmier</td>
         </tr>
         <tr>
            <td>Evan M.</td>
            <td>83</td>
            <td>85</td>
            <td>Collège de Rhuys, Sarzeau</td>
         </tr>
         <tr>
            <td>Lucas T.</td>
            <td>83</td>
            <td>85</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Ilyes T.</td>
            <td>83</td>
            <td>85</td>
            <td>Lycée Français Alioune Blondin Beye, Luanda</td>
         </tr>
         <tr>
            <td>Cordelia L.</td>
            <td>83</td>
            <td>85</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>83</td>
            <td>85</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Joséphine T.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Sonia T.</td>
            <td>82</td>
            <td>92</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Timothé B.</td>
            <td>82</td>
            <td>92</td>
            <td>Lycée Français Alioune Blondin Beye, Luanda</td>
         </tr>
         <tr>
            <td>Adam M.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Forlen, Saint-Louis</td>
         </tr>
         <tr>
            <td>Célio C.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Charles Peguy, Vauvillers</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège André Miclot, Portbail</td>
         </tr>
         <tr>
            <td>Urban P.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Enzo R.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Lis Isclo d'Or, Pierrelatte</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Lis Isclo d'Or, Pierrelatte</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>82</td>
            <td>92</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Gaëtan L.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Mael C.</td>
            <td>82</td>
            <td>92</td>
            <td>Hors établissement, 'maelcouscous' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Aymane M.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Guy Moquet, Villejuif</td>
         </tr>
         <tr>
            <td>Tom E.</td>
            <td>82</td>
            <td>92</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Ayman M.</td>
            <td>81</td>
            <td>109</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Anissa L.</td>
            <td>81</td>
            <td>109</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Maël H.</td>
            <td>81</td>
            <td>109</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Sébastien V.</td>
            <td>81</td>
            <td>109</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Mateo C.</td>
            <td>81</td>
            <td>109</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Léa B.</td>
            <td>81</td>
            <td>109</td>
            <td>Lycée Français Alioune Blondin Beye, Luanda</td>
         </tr>
         <tr>
            <td>Eliott A.</td>
            <td>81</td>
            <td>109</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Théo D.</td>
            <td>81</td>
            <td>109</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Robin F.</td>
            <td>80</td>
            <td>117</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Jessica B.</td>
            <td>80</td>
            <td>117</td>
            <td>Collège Pompidou, Pouilley-les-Vignes</td>
         </tr>
         <tr>
            <td>Aurélien J.</td>
            <td>80</td>
            <td>117</td>
            <td>Collège Pompidou, Pouilley-les-Vignes</td>
         </tr>
         <tr>
            <td>Ben B.</td>
            <td>80</td>
            <td>117</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Yann G.</td>
            <td>80</td>
            <td>117</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>80</td>
            <td>117</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Felix H.</td>
            <td>80</td>
            <td>117</td>
            <td>Gymnase Lucie Berger, Strasbourg</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>80</td>
            <td>117</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Eva G.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Pasteur, Lavelanet</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>79</td>
            <td>125</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Aurélien H.</td>
            <td>79</td>
            <td>125</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Aymeric C.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Bastien F.</td>
            <td>79</td>
            <td>125</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Eden L.</td>
            <td>79</td>
            <td>125</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>79</td>
            <td>125</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Maria A.</td>
            <td>79</td>
            <td>125</td>
            <td>Lycée Antoine et Consuelo de Saint Exupéry, Santa Tecla</td>
         </tr>
         <tr>
            <td>Marcos B.</td>
            <td>79</td>
            <td>125</td>
            <td>Lycée Jules Verne, Fraijanes</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Hubert Robert, Méréville</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>79</td>
            <td>125</td>
            <td>Lycée Francais de Stavanger, Stavanger</td>
         </tr>
         <tr>
            <td>Bastien D.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Nour P.</td>
            <td>79</td>
            <td>125</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Teva V.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>79</td>
            <td>125</td>
            <td>Hors établissement, 'alexis.d' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Hugo J.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Estéban L.</td>
            <td>79</td>
            <td>125</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Carlos D.</td>
            <td>78</td>
            <td>143</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Quentin A.</td>
            <td>78</td>
            <td>143</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Joséphine D.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Diane D.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Yavuz G.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Joseph T.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège de Rhuys, Sarzeau</td>
         </tr>
         <tr>
            <td>Maÿliss C.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Jean Lurçat, Villejuif</td>
         </tr>
         <tr>
            <td>Vincent K.</td>
            <td>78</td>
            <td>143</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Mathis A.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Niels B.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège du Clos Jouvin, Jarrie</td>
         </tr>
         <tr>
            <td>Lysa B.</td>
            <td>78</td>
            <td>143</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Alexandre Z.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Florian K.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège Jean Monnet, Coulogne</td>
         </tr>
         <tr>
            <td>Gregoire L.</td>
            <td>78</td>
            <td>143</td>
            <td>Hors établissement, 'lecorre' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>78</td>
            <td>143</td>
            <td>Collège André Marie, Barentin</td>
         </tr>
         <tr>
            <td>Kai S.</td>
            <td>77</td>
            <td>159</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Noa B.</td>
            <td>77</td>
            <td>159</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Loïc L.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean Lurçat, Frouard</td>
         </tr>
         <tr>
            <td>Bastien H.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège du Grand Ried, Sundhouse</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Gaël T.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean-Pierre Vernant, Toulouse</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>77</td>
            <td>159</td>
            <td>Lasalle Passy Buzenval, Rueil Malmaison</td>
         </tr>
         <tr>
            <td>Titouan L.</td>
            <td>77</td>
            <td>159</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Charlotte D.</td>
            <td>77</td>
            <td>159</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Louis T.</td>
            <td>77</td>
            <td>159</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Alexis S.</td>
            <td>77</td>
            <td>159</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Sovanna V.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Vivien G.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Henri Dunant, Royan</td>
         </tr>
         <tr>
            <td>Jeremy R.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Pierre-Armand B.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Forlen, Saint-Louis</td>
         </tr>
         <tr>
            <td>Aline D.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Zoé B.</td>
            <td>77</td>
            <td>159</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Francois B.</td>
            <td>77</td>
            <td>159</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Nathan P.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>Ferdinand S.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Tristan J.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Font de Fillol, Six Fours les Plages</td>
         </tr>
         <tr>
            <td>Ludwig T.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Loan R.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean Lacaze, Grisolles</td>
         </tr>
         <tr>
            <td>Victor C.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Luc D.</td>
            <td>77</td>
            <td>159</td>
            <td>Collège Jean Monnet, Coulogne</td>
         </tr>
         <tr>
            <td>Willemot M.</td>
            <td>76</td>
            <td>186</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Jalila T.</td>
            <td>76</td>
            <td>186</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Pauline G.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Sainte-Marie, Meaux</td>
         </tr>
         <tr>
            <td>Helene H.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
         <tr>
            <td>Angel B.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Manon Cormier, Bassens</td>
         </tr>
         <tr>
            <td>Jules H.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Villey Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Baptiste S.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Notre Dame, Billom</td>
         </tr>
         <tr>
            <td>Olivier G.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Louise T.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Jules Verne, Varces Allières-et-Risset</td>
         </tr>
         <tr>
            <td>Océana R.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Leï Garrus, Saint Maxi</td>
         </tr>
         <tr>
            <td>Emeline L.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Jean Fernel, Clermont</td>
         </tr>
         <tr>
            <td>Sophie G.</td>
            <td>76</td>
            <td>186</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Mathieu M.</td>
            <td>76</td>
            <td>186</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Marie C.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Maxence V.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Diane B.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Aurelien D.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Manon D.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Arnaud L.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Germain P.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Nayel V.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Mont-Miroir, Maiche</td>
         </tr>
         <tr>
            <td>Mathis F.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Marina G.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Emeline G.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Anthony M.</td>
            <td>76</td>
            <td>186</td>
            <td>Collège Lycée Saint Martin Quartier Sainte Geneviève, Rennes</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>75</td>
            <td>214</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Marine P.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Corentin R.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège du Pays de l'Herbasse, St Donat sur l'Herbasse</td>
         </tr>
         <tr>
            <td>Sebastian M.</td>
            <td>75</td>
            <td>214</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Lilou B.</td>
            <td>75</td>
            <td>214</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Emile M.</td>
            <td>75</td>
            <td>214</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Simon R.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Claude Debussy, Margny les Compiègne</td>
         </tr>
         <tr>
            <td>Eve M.</td>
            <td>75</td>
            <td>214</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Enzo J.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Octave Mirbeau, Trevieres</td>
         </tr>
         <tr>
            <td>Yasmine M.</td>
            <td>75</td>
            <td>214</td>
            <td>Lycée Français Alioune Blondin Beye, Luanda</td>
         </tr>
         <tr>
            <td>Anaïs T.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Adulphe Delegorgue, Courcelles-les-Lens</td>
         </tr>
         <tr>
            <td>Marine D.</td>
            <td>75</td>
            <td>214</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Faustine G.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Nathan T.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Kévin C.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Alexandre E.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>Rémi H.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Albert Camus, Frontenay Rohan-Rohan</td>
         </tr>
         <tr>
            <td>Elisa C.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Saint Exupery, Avize</td>
         </tr>
         <tr>
            <td>Juliette N.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Teddy C.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Norbert Casteret, Ruelle</td>
         </tr>
         <tr>
            <td>Emie V.</td>
            <td>75</td>
            <td>214</td>
            <td>Collège Denecourt, Bois le Roi</td>
         </tr>
         <tr>
            <td>Sasha A.</td>
            <td>74</td>
            <td>235</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Roxane D.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Sarah C.</td>
            <td>74</td>
            <td>235</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Kévin C.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Claude Debussy, Margny les Compiègne</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
         <tr>
            <td>Liam L.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Maxime A.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège François Truffaut, Charly sur Marne</td>
         </tr>
         <tr>
            <td>Alexandre S.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Frison-Roche, La Broque</td>
         </tr>
         <tr>
            <td>Antoine R.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Maëlle G.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Hugo T.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Paul Dangla, Agen</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Paul Dangla, Agen</td>
         </tr>
         <tr>
            <td>Arthur P.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Dounia A.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jean Lacaze, Grisolles</td>
         </tr>
         <tr>
            <td>Romain D.</td>
            <td>74</td>
            <td>235</td>
            <td>Collège Jean Dauzié, Saint Mamet</td>
         </tr>
         <tr>
            <td>Dylan D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Elio N.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Manon Cormier, Bassens</td>
         </tr>
         <tr>
            <td>Julie Q.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Louis Bouilhet, Cany-Barville</td>
         </tr>
         <tr>
            <td>Gaël E.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Côme V.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Gaston D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège "George Sand", La Motte Servolex</td>
         </tr>
         <tr>
            <td>Yaël D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Alexandre Q.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Florimond C.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège St-Exupéry, Lesneven</td>
         </tr>
         <tr>
            <td>Alex G.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Mathieu T.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Ismaël B.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Louis Joseph Soulas, Bazoches les Gallerandes</td>
         </tr>
         <tr>
            <td>Grigori D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Notre Dame de la Paix, Lille</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Florent F.</td>
            <td>73</td>
            <td>253</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>73</td>
            <td>253</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Jeanne G.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Claire S.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Baptiste P.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Bryan D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Pauline D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Oriane D.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Glorian J.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>Thibault F.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Clémence C.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Lucien S.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Mathis L.</td>
            <td>73</td>
            <td>253</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-8'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème : 1104 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-8' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-8' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>105</td><td>8</td></tr><tr><td>104</td><td>17</td></tr><tr><td>103</td><td>18</td></tr><tr><td>102</td><td>19</td></tr><tr><td>101</td><td>22</td></tr><tr><td>100</td><td>24</td></tr><tr><td>99</td><td>25</td></tr><tr><td>98</td><td>30</td></tr><tr><td>97</td><td>31</td></tr><tr><td>96</td><td>35</td></tr><tr><td>95</td><td>40</td></tr><tr><td>94</td><td>46</td></tr><tr><td>93</td><td>50</td></tr><tr><td>92</td><td>54</td></tr><tr><td>91</td><td>60</td></tr><tr><td>90</td><td>67</td></tr><tr><td>89</td><td>72</td></tr><tr><td>88</td><td>81</td></tr><tr><td>87</td><td>92</td></tr><tr><td>86</td><td>99</td></tr><tr><td>85</td><td>118</td></tr><tr><td>84</td><td>122</td></tr><tr><td>83</td><td>136</td></tr><tr><td>82</td><td>145</td></tr><tr><td>81</td><td>150</td></tr><tr><td>80</td><td>163</td></tr><tr><td>79</td><td>174</td></tr><tr><td>78</td><td>195</td></tr><tr><td>77</td><td>219</td></tr><tr><td>76</td><td>235</td></tr><tr><td>75</td><td>262</td></tr><tr><td>74</td><td>280</td></tr><tr><td>73</td><td>307</td></tr><tr><td>72</td><td>343</td></tr><tr><td>71</td><td>353</td></tr><tr><td>70</td><td>384</td></tr><tr><td>69</td><td>409</td></tr><tr><td>68</td><td>444</td></tr><tr><td>67</td><td>480</td></tr><tr><td>66</td><td>507</td></tr><tr><td>65</td><td>534</td></tr><tr><td>64</td><td>569</td></tr><tr><td>63</td><td>599</td></tr><tr><td>62</td><td>633</td></tr><tr><td>61</td><td>661</td></tr><tr><td>60</td><td>679</td></tr><tr><td>59</td><td>707</td></tr><tr><td>58</td><td>739</td></tr><tr><td>57</td><td>760</td></tr><tr><td>56</td><td>801</td></tr><tr><td>55</td><td>822</td></tr><tr><td>54</td><td>849</td></tr><tr><td>53</td><td>861</td></tr><tr><td>52</td><td>878</td></tr><tr><td>51</td><td>894</td></tr><tr><td>50</td><td>903</td></tr><tr><td>49</td><td>921</td></tr><tr><td>48</td><td>943</td></tr><tr><td>47</td><td>954</td></tr><tr><td>46</td><td>969</td></tr><tr><td>45</td><td>984</td></tr><tr><td>44</td><td>989</td></tr><tr><td>43</td><td>1000</td></tr><tr><td>42</td><td>1013</td></tr><tr><td>41</td><td>1017</td></tr><tr><td>40</td><td>1026</td></tr><tr><td>39</td><td>1031</td></tr><tr><td>38</td><td>1040</td></tr><tr><td>37</td><td>1043</td></tr><tr><td>36</td><td>1048</td></tr><tr><td>35</td><td>1053</td></tr><tr><td>34</td><td>1055</td></tr><tr><td>33</td><td>1059</td></tr><tr><td>32</td><td>1060</td></tr><tr><td>31</td><td>1064</td></tr><tr><td>30</td><td>1068</td></tr><tr><td>29</td><td>1073</td></tr><tr><td>28</td><td>1079</td></tr><tr><td>27</td><td>1085</td></tr><tr><td>26</td><td>1087</td></tr><tr><td>25</td><td>1089</td></tr><tr><td>23</td><td>1091</td></tr><tr><td>22</td><td>1092</td></tr><tr><td>21</td><td>1093</td></tr><tr><td>20</td><td>1094</td></tr><tr><td>19</td><td>1096</td></tr><tr><td>8</td><td>1097</td></tr><tr><td>4</td><td>1098</td></tr><tr><td>0</td><td>1100</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 173 premiers ayant un score supérieur ou égal à 80 sont listés ci-dessous.
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
            <td>Clara W.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Kléber, Haguenau</td>
         </tr>
         <tr>
            <td>Sabri B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Pierre Mendes France, Tunis El Mahrajene</td>
         </tr>
         <tr>
            <td>Florian J.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Jean Prevost, Villard de Lans</td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'adrien88390' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Jean Z.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'smeagol' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>105</td>
            <td>8</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Alice L.</td>
            <td>105</td>
            <td>8</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>105</td>
            <td>8</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>105</td>
            <td>8</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Pierre A.</td>
            <td>105</td>
            <td>8</td>
            <td>Hors établissement, 'shadowsmaster' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Guillaume N.</td>
            <td>105</td>
            <td>8</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Laure T.</td>
            <td>105</td>
            <td>8</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
         <tr>
            <td>Christopher N.</td>
            <td>105</td>
            <td>8</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>105</td>
            <td>8</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Mathieu J.</td>
            <td>104</td>
            <td>17</td>
            <td>Hors établissement, 'dimensio' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Victor C.</td>
            <td>103</td>
            <td>18</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Aurélien B.</td>
            <td>102</td>
            <td>19</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Etienne R.</td>
            <td>102</td>
            <td>19</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>102</td>
            <td>19</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Alice R.</td>
            <td>101</td>
            <td>22</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Dorian H.</td>
            <td>101</td>
            <td>22</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>100</td>
            <td>24</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Marwane T.</td>
            <td>99</td>
            <td>25</td>
            <td>Lycée Pierre Mendes France, Tunis El Mahrajene</td>
         </tr>
         <tr>
            <td>Clément D.</td>
            <td>99</td>
            <td>25</td>
            <td>Collège Marie Curie, Arras</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>99</td>
            <td>25</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Oriane D.</td>
            <td>99</td>
            <td>25</td>
            <td>Collège Sainte-Marie de la Providence, Rochefort sur Mer</td>
         </tr>
         <tr>
            <td>Adrien G.</td>
            <td>99</td>
            <td>25</td>
            <td>Hergé, Gondecourt</td>
         </tr>
         <tr>
            <td>Estéban C.</td>
            <td>98</td>
            <td>30</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Géraud V.</td>
            <td>97</td>
            <td>31</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Mattéo M.</td>
            <td>97</td>
            <td>31</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>97</td>
            <td>31</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Titouan T.</td>
            <td>97</td>
            <td>31</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Louis G.</td>
            <td>96</td>
            <td>35</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Gauthier V.</td>
            <td>96</td>
            <td>35</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Eric L.</td>
            <td>96</td>
            <td>35</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Timothée B.</td>
            <td>96</td>
            <td>35</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Aurelie M.</td>
            <td>96</td>
            <td>35</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Maelle G.</td>
            <td>95</td>
            <td>40</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Manon G.</td>
            <td>95</td>
            <td>40</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Jade S.</td>
            <td>95</td>
            <td>40</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Gabriel F.</td>
            <td>95</td>
            <td>40</td>
            <td>Hors établissement, 'gabrielfaraut' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Aymeric C.</td>
            <td>95</td>
            <td>40</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Omeyr A.</td>
            <td>95</td>
            <td>40</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Oscar D.</td>
            <td>94</td>
            <td>46</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Axel P.</td>
            <td>94</td>
            <td>46</td>
            <td>Collège Champagnat, L'Arbresle</td>
         </tr>
         <tr>
            <td>Bastien T.</td>
            <td>94</td>
            <td>46</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Balthazar P.</td>
            <td>94</td>
            <td>46</td>
            <td>Institution Stanislas Nice, Nice</td>
         </tr>
         <tr>
            <td>Rémy D.</td>
            <td>93</td>
            <td>50</td>
            <td>Collège St Joseph, Le Puy en Velay</td>
         </tr>
         <tr>
            <td>Thibaud D.</td>
            <td>93</td>
            <td>50</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Erwan M.</td>
            <td>93</td>
            <td>50</td>
            <td>Collège Jean Prevost, Villard de Lans</td>
         </tr>
         <tr>
            <td>Elouan C.</td>
            <td>93</td>
            <td>50</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
         <tr>
            <td>Heimanu C.</td>
            <td>92</td>
            <td>54</td>
            <td>Collège de Punaauia, Punaauia</td>
         </tr>
         <tr>
            <td>Luc M.</td>
            <td>92</td>
            <td>54</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>92</td>
            <td>54</td>
            <td>Collège Gerard Holder, Cayenne</td>
         </tr>
         <tr>
            <td>Cédric M.</td>
            <td>92</td>
            <td>54</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Armand P.</td>
            <td>92</td>
            <td>54</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>92</td>
            <td>54</td>
            <td>Hors établissement, 'pir' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Tanguy P.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Addison J.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège Henri Morat, Recey sur Ource</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
         <tr>
            <td>Theodore P.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège Georges Braque, Paris</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Yanis T.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Malory L.</td>
            <td>91</td>
            <td>60</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Louis F.</td>
            <td>90</td>
            <td>67</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Oumeima-Arij B.</td>
            <td>90</td>
            <td>67</td>
            <td>Lycée Pierre Mendes France, Tunis El Mahrajene</td>
         </tr>
         <tr>
            <td>Elodie M.</td>
            <td>90</td>
            <td>67</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Antoine S.</td>
            <td>90</td>
            <td>67</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Louis G.</td>
            <td>90</td>
            <td>67</td>
            <td>Collège Sainte-Marie de la Providence, Rochefort sur Mer</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège Kléber, Haguenau</td>
         </tr>
         <tr>
            <td>Raphaël C.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège Claude Debussy, Margny les Compiègne</td>
         </tr>
         <tr>
            <td>Jaleel A.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège les Rives du Leman, Evian les Bains</td>
         </tr>
         <tr>
            <td>Pierre F.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Mévéna M.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège Hutinel, Gretz-Armainvilliers</td>
         </tr>
         <tr>
            <td>Loïc H.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège La Neustrie, Bouguenais</td>
         </tr>
         <tr>
            <td>Adèle D.</td>
            <td>89</td>
            <td>72</td>
            <td>Hors établissement, 'kawette' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Etienne C.</td>
            <td>89</td>
            <td>72</td>
            <td>Hors établissement, 'brikben' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Shania B.</td>
            <td>89</td>
            <td>72</td>
            <td>Collège de l'Europe, Ardres</td>
         </tr>
         <tr>
            <td>Joséphine B.</td>
            <td>88</td>
            <td>81</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Nicolas F.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Lis Isclo d'Or, Pierrelatte</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Arthur M.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Saint Just, Soissons</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Saint Just, Soissons</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Alexis M.</td>
            <td>88</td>
            <td>81</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Clément D.</td>
            <td>88</td>
            <td>81</td>
            <td>Collège Anne Frank, Morieres les Avignon</td>
         </tr>
         <tr>
            <td>Matteo L.</td>
            <td>88</td>
            <td>81</td>
            <td>Hors établissement, 'matteox1' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Timothée R.</td>
            <td>88</td>
            <td>81</td>
            <td>Hors établissement, 'lakaross' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Maxime M.</td>
            <td>87</td>
            <td>92</td>
            <td>Collège des Missions - Blotzheim, Blotzheim</td>
         </tr>
         <tr>
            <td>Fabien M.</td>
            <td>87</td>
            <td>92</td>
            <td>Collège Notre Dame, Billom</td>
         </tr>
         <tr>
            <td>Federico Jose A.</td>
            <td>87</td>
            <td>92</td>
            <td>Lycée Antoine et Consuelo de Saint Exupéry, Santa Tecla</td>
         </tr>
         <tr>
            <td>Sofiane B.</td>
            <td>87</td>
            <td>92</td>
            <td>Collège Robert Lasneau, Vendôme</td>
         </tr>
         <tr>
            <td>Samuel L.</td>
            <td>87</td>
            <td>92</td>
            <td>Collège Louis Arbogast, Mutzig</td>
         </tr>
         <tr>
            <td>Jérémy S.</td>
            <td>87</td>
            <td>92</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Clement H.</td>
            <td>87</td>
            <td>92</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Wilfried D.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Nolan T.</td>
            <td>86</td>
            <td>99</td>
            <td>Roupnel, Dijon</td>
         </tr>
         <tr>
            <td>Fabrice M.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Thibault P.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Nicolas C.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Simon V.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Henri Iv, Bergerac</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Saint Exupery, Avize</td>
         </tr>
         <tr>
            <td>Adrien P.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Sullivan F.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège la Champagne, Brochon</td>
         </tr>
         <tr>
            <td>Valentin G.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Robert Schuman, 45200</td>
         </tr>
         <tr>
            <td>Nicolas R.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Alexandre V.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège Frédéric Mistral, Saint-Maurice l'Exil</td>
         </tr>
         <tr>
            <td>Nora H.</td>
            <td>86</td>
            <td>99</td>
            <td>Hors établissement, 'f-22_raptor' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Elisa D.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>86</td>
            <td>99</td>
            <td>Hors établissement, 'lucas89' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Sylvain M.</td>
            <td>86</td>
            <td>99</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Louis J.</td>
            <td>86</td>
            <td>99</td>
            <td>Hors établissement, 'louis.jan' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>85</td>
            <td>118</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Anaïs V.</td>
            <td>85</td>
            <td>118</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Halil E.</td>
            <td>85</td>
            <td>118</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Jérémy V.</td>
            <td>85</td>
            <td>118</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Leah D.</td>
            <td>84</td>
            <td>122</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Grégoire P.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Colbert, Cholet</td>
         </tr>
         <tr>
            <td>Benjamin B.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Colbert, Cholet</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Rémi T.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Jules Verne, Neuville en Ferrain</td>
         </tr>
         <tr>
            <td>Nicolas D.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Jules Verne, Neuville en Ferrain</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Morgane D.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Eva A.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Luca S.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Jean Moulin, Meudon la Forêt</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>84</td>
            <td>122</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>84</td>
            <td>122</td>
            <td>Collège Robert Schuman, 45200</td>
         </tr>
         <tr>
            <td>Álvaro R.</td>
            <td>84</td>
            <td>122</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Chales C.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Jules R.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Miguel O.</td>
            <td>83</td>
            <td>136</td>
            <td>Lycée André Malraux, Molina de Segura</td>
         </tr>
         <tr>
            <td>Zoé S.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         <tr>
            <td>Florian S.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Thibaut F.</td>
            <td>83</td>
            <td>136</td>
            <td>Groupe Scolaire Fénelon Elbeuf, Elbeuf sur Seine</td>
         </tr>
         <tr>
            <td>Benjamin H.</td>
            <td>83</td>
            <td>136</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Emma B.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Arnaud T.</td>
            <td>83</td>
            <td>136</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Lola B.</td>
            <td>82</td>
            <td>145</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Lise S.</td>
            <td>82</td>
            <td>145</td>
            <td>Collège Saint-Exupéry, Vélizy</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>82</td>
            <td>145</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Sofiane E.</td>
            <td>82</td>
            <td>145</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Victor S.</td>
            <td>82</td>
            <td>145</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Gwendal D.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Colbert, Cholet</td>
         </tr>
         <tr>
            <td>Hjalmar B.</td>
            <td>81</td>
            <td>150</td>
            <td>Lycée Français Saint-Louis, Stockholm</td>
         </tr>
         <tr>
            <td>Pierre-Antoine N.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Champagnat, L'Arbresle</td>
         </tr>
         <tr>
            <td>Theo S.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Tamaiti D.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Sean P.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Robin M.</td>
            <td>81</td>
            <td>150</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Lilou W.</td>
            <td>81</td>
            <td>150</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>81</td>
            <td>150</td>
            <td>Hors établissement, 'ender2552' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>81</td>
            <td>150</td>
            <td>Institution Stanislas Nice, Nice</td>
         </tr>
         <tr>
            <td>Jade K.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Guillaume S.</td>
            <td>81</td>
            <td>150</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Tony V.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Samara F.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Clément T.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Dimitri L.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Anna M.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Stephane G.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Adam B.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Henri E.</td>
            <td>80</td>
            <td>163</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Tom B.</td>
            <td>80</td>
            <td>163</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-9'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème : 1700 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-9' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-9' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>106</td><td>17</td></tr><tr><td>105</td><td>18</td></tr><tr><td>104</td><td>29</td></tr><tr><td>103</td><td>30</td></tr><tr><td>102</td><td>34</td></tr><tr><td>101</td><td>45</td></tr><tr><td>100</td><td>50</td></tr><tr><td>99</td><td>54</td></tr><tr><td>98</td><td>56</td></tr><tr><td>97</td><td>65</td></tr><tr><td>96</td><td>74</td></tr><tr><td>95</td><td>75</td></tr><tr><td>94</td><td>83</td></tr><tr><td>93</td><td>95</td></tr><tr><td>92</td><td>104</td></tr><tr><td>91</td><td>110</td></tr><tr><td>90</td><td>120</td></tr><tr><td>89</td><td>140</td></tr><tr><td>88</td><td>152</td></tr><tr><td>87</td><td>167</td></tr><tr><td>86</td><td>183</td></tr><tr><td>85</td><td>199</td></tr><tr><td>84</td><td>226</td></tr><tr><td>83</td><td>246</td></tr><tr><td>82</td><td>267</td></tr><tr><td>81</td><td>295</td></tr><tr><td>80</td><td>331</td></tr><tr><td>79</td><td>365</td></tr><tr><td>78</td><td>407</td></tr><tr><td>77</td><td>438</td></tr><tr><td>76</td><td>478</td></tr><tr><td>75</td><td>521</td></tr><tr><td>74</td><td>550</td></tr><tr><td>73</td><td>597</td></tr><tr><td>72</td><td>629</td></tr><tr><td>71</td><td>658</td></tr><tr><td>70</td><td>714</td></tr><tr><td>69</td><td>744</td></tr><tr><td>68</td><td>787</td></tr><tr><td>67</td><td>857</td></tr><tr><td>66</td><td>901</td></tr><tr><td>65</td><td>944</td></tr><tr><td>64</td><td>988</td></tr><tr><td>63</td><td>1025</td></tr><tr><td>62</td><td>1070</td></tr><tr><td>61</td><td>1118</td></tr><tr><td>60</td><td>1152</td></tr><tr><td>59</td><td>1197</td></tr><tr><td>58</td><td>1231</td></tr><tr><td>57</td><td>1258</td></tr><tr><td>56</td><td>1304</td></tr><tr><td>55</td><td>1331</td></tr><tr><td>54</td><td>1366</td></tr><tr><td>53</td><td>1387</td></tr><tr><td>52</td><td>1415</td></tr><tr><td>51</td><td>1440</td></tr><tr><td>50</td><td>1457</td></tr><tr><td>49</td><td>1482</td></tr><tr><td>48</td><td>1504</td></tr><tr><td>47</td><td>1516</td></tr><tr><td>46</td><td>1530</td></tr><tr><td>45</td><td>1547</td></tr><tr><td>44</td><td>1562</td></tr><tr><td>43</td><td>1585</td></tr><tr><td>42</td><td>1588</td></tr><tr><td>41</td><td>1602</td></tr><tr><td>40</td><td>1606</td></tr><tr><td>39</td><td>1610</td></tr><tr><td>38</td><td>1619</td></tr><tr><td>37</td><td>1626</td></tr><tr><td>36</td><td>1635</td></tr><tr><td>35</td><td>1640</td></tr><tr><td>34</td><td>1642</td></tr><tr><td>33</td><td>1648</td></tr><tr><td>32</td><td>1650</td></tr><tr><td>31</td><td>1654</td></tr><tr><td>30</td><td>1655</td></tr><tr><td>29</td><td>1660</td></tr><tr><td>28</td><td>1663</td></tr><tr><td>27</td><td>1667</td></tr><tr><td>26</td><td>1669</td></tr><tr><td>25</td><td>1670</td></tr><tr><td>23</td><td>1672</td></tr><tr><td>21</td><td>1678</td></tr><tr><td>17</td><td>1679</td></tr><tr><td>16</td><td>1681</td></tr><tr><td>15</td><td>1682</td></tr><tr><td>13</td><td>1685</td></tr><tr><td>11</td><td>1687</td></tr><tr><td>8</td><td>1688</td></tr><tr><td>5</td><td>1689</td></tr><tr><td>0</td><td>1690</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 364 premiers ayant un score supérieur ou égal à 80 sont listés ci-dessous.
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
            <td>Gaétan K.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Thibault H.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Lounes L.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Diego P.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Valentin R.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Jonas P.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Georges D.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Guy Mareschal, Amiens</td>
         </tr>
         <tr>
            <td>Maths P.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'toto13530' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'arthur_leonard' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège-Lycée Notre Dame de Toutes Aides, Nantes</td>
         </tr>
         <tr>
            <td>Matthieu F.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Lecomte A.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Saint-Laurent, La Bresse</td>
         </tr>
         <tr>
            <td>Neven V.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'neven' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Robin T.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'antoine311200' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Bastien C.</td>
            <td>106</td>
            <td>17</td>
            <td>Collège Pierre Corneille, Le Neubourg</td>
         </tr>
         <tr>
            <td>Hugo T.</td>
            <td>105</td>
            <td>18</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>105</td>
            <td>18</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>105</td>
            <td>18</td>
            <td>Hors établissement, 'paul2000' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>105</td>
            <td>18</td>
            <td>Hors établissement, 'collignont' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Theophane V.</td>
            <td>105</td>
            <td>18</td>
            <td>Hors établissement, 'theophanev' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Axel S.</td>
            <td>105</td>
            <td>18</td>
            <td>Collège Mathy, Luxeuil les Bains</td>
         </tr>
         <tr>
            <td>Julie T.</td>
            <td>105</td>
            <td>18</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Laure R.</td>
            <td>105</td>
            <td>18</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Etienne L.</td>
            <td>105</td>
            <td>18</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Liam P.</td>
            <td>105</td>
            <td>18</td>
            <td>Collège Emile Honnoraty, Annot</td>
         </tr>
         <tr>
            <td>Elianor H.</td>
            <td>105</td>
            <td>18</td>
            <td>Hors établissement, 'linka' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Loïc T.</td>
            <td>104</td>
            <td>29</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Maria M.</td>
            <td>103</td>
            <td>30</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>103</td>
            <td>30</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Alessandro M.</td>
            <td>103</td>
            <td>30</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Deborah L.</td>
            <td>103</td>
            <td>30</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Logan G.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Côme S.</td>
            <td>102</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Clémence B.</td>
            <td>102</td>
            <td>34</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Coraline J.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Mehdi T.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Louis Pasteur, Nesle</td>
         </tr>
         <tr>
            <td>Marie H.</td>
            <td>102</td>
            <td>34</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Marie C.</td>
            <td>102</td>
            <td>34</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Léa R.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Joris C.</td>
            <td>102</td>
            <td>34</td>
            <td>Collège Georges Braque, Paris</td>
         </tr>
         <tr>
            <td>Jad A.</td>
            <td>102</td>
            <td>34</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Jean C.</td>
            <td>101</td>
            <td>45</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Matthieu B.</td>
            <td>101</td>
            <td>45</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>101</td>
            <td>45</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Jeremy F.</td>
            <td>101</td>
            <td>45</td>
            <td>Groupe Scolaire Sainte-Anne Saint-Joseph, Lure</td>
         </tr>
         <tr>
            <td>Cyril O.</td>
            <td>101</td>
            <td>45</td>
            <td>Groupe Scolaire Sainte-Anne Saint-Joseph, Lure</td>
         </tr>
         <tr>
            <td>Emma V.</td>
            <td>100</td>
            <td>50</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>François D.</td>
            <td>100</td>
            <td>50</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Marine B.</td>
            <td>100</td>
            <td>50</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>100</td>
            <td>50</td>
            <td>Collège Lamartine, Tours</td>
         </tr>
         <tr>
            <td>Thomas Q.</td>
            <td>99</td>
            <td>54</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>99</td>
            <td>54</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Achil M.</td>
            <td>98</td>
            <td>56</td>
            <td>Collège Paul Eluard, Gennes</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>98</td>
            <td>56</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Leo D.</td>
            <td>98</td>
            <td>56</td>
            <td>Collège Blanqui, Bordeaux</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>98</td>
            <td>56</td>
            <td>Collège François Mitterrand, Moissac</td>
         </tr>
         <tr>
            <td>Eliott A.</td>
            <td>98</td>
            <td>56</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Miguel M.</td>
            <td>98</td>
            <td>56</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>98</td>
            <td>56</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Khalil B.</td>
            <td>98</td>
            <td>56</td>
            <td>Hors établissement, 'shakenova' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>98</td>
            <td>56</td>
            <td>Collège Robert Beltz, Soultz</td>
         </tr>
         <tr>
            <td>Juliette F.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Alexandre R.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Loïc M.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège la Chataigneraie, Autun</td>
         </tr>
         <tr>
            <td>Tanguy D.</td>
            <td>97</td>
            <td>65</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Camille L.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Maxime P.</td>
            <td>97</td>
            <td>65</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Thomas S.</td>
            <td>97</td>
            <td>65</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Hélène H.</td>
            <td>96</td>
            <td>74</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Maxime S.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège les Rives du Leman, Evian les Bains</td>
         </tr>
         <tr>
            <td>Léonie O.</td>
            <td>95</td>
            <td>75</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Arnaud M.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège Leï Garrus, Saint Maxi</td>
         </tr>
         <tr>
            <td>Louis S.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège Manon Cormier, Bassens</td>
         </tr>
         <tr>
            <td>Clarisse H.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Gautier P.</td>
            <td>95</td>
            <td>75</td>
            <td>Hors établissement, 'gaugau17' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège Léonard de Vinci, Bois-Guillaume</td>
         </tr>
         <tr>
            <td>Arthur V.</td>
            <td>95</td>
            <td>75</td>
            <td>Collège Denecourt, Bois le Roi</td>
         </tr>
         <tr>
            <td>Julien D.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Joliot Curie, Aigues-Mortes</td>
         </tr>
         <tr>
            <td>Aymeric S.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Allan D.</td>
            <td>94</td>
            <td>83</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Jérémy M.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Gabriel E.</td>
            <td>94</td>
            <td>83</td>
            <td>Coysevox, Paris</td>
         </tr>
         <tr>
            <td>Wilmouth W.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Ruben T.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Chloé L.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Anatole R.</td>
            <td>94</td>
            <td>83</td>
            <td>Collège Kerfontaine, Pluneret</td>
         </tr>
         <tr>
            <td>Lancelot B.</td>
            <td>94</td>
            <td>83</td>
            <td>Hors établissement, 'lancelotbla' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Imade B.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Château Forbin, Marseille</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>93</td>
            <td>95</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Guelque H.</td>
            <td>93</td>
            <td>95</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Lou-Ann M.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Justin B.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Jonas P.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Léo R.</td>
            <td>93</td>
            <td>95</td>
            <td>Collège Jean-Jacques Waltz, Marckolsheim</td>
         </tr>
         <tr>
            <td>Nicolas H.</td>
            <td>92</td>
            <td>104</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Andréa R.</td>
            <td>92</td>
            <td>104</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>92</td>
            <td>104</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Gabrielle G.</td>
            <td>92</td>
            <td>104</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Théo S.</td>
            <td>92</td>
            <td>104</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>92</td>
            <td>104</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Luc E.</td>
            <td>91</td>
            <td>110</td>
            <td>Roupnel, Dijon</td>
         </tr>
         <tr>
            <td>Juliette H.</td>
            <td>91</td>
            <td>110</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Sacha B.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Chloé S.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Elise R.</td>
            <td>91</td>
            <td>110</td>
            <td>Collège Henri Morat, Recey sur Ource</td>
         </tr>
         <tr>
            <td>Joe T.</td>
            <td>91</td>
            <td>110</td>
            <td>Lycée Français Marcel Pagnol, Asuncion</td>
         </tr>
         <tr>
            <td>Jesús F.</td>
            <td>90</td>
            <td>120</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Emmanuelle D.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Laura D.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Thibaut R.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Tom S.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège André Duchesne, L'Ile Bouchard</td>
         </tr>
         <tr>
            <td>Anas T.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Aimie R.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Andréa D.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Sacha B.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Madeleine T.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Álvaro G.</td>
            <td>90</td>
            <td>120</td>
            <td>Lycée Français de Castilla Y León, Laguna de Duero</td>
         </tr>
         <tr>
            <td>Pierre-Louis L.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Simon V.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Sylvain M.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>90</td>
            <td>120</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Gwendal L.</td>
            <td>90</td>
            <td>120</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Valentine R.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Adrien F.</td>
            <td>90</td>
            <td>120</td>
            <td>Hors établissement, 'adri1n1' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Axel S.</td>
            <td>90</td>
            <td>120</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>89</td>
            <td>140</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Colin V.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Nicolas D.</td>
            <td>89</td>
            <td>140</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Daria L.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Loic W.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         <tr>
            <td>Dominique S.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Daniel Argote, Orthez</td>
         </tr>
         <tr>
            <td>Maria G.</td>
            <td>89</td>
            <td>140</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Laure G.</td>
            <td>89</td>
            <td>140</td>
            <td>Collège Jean-Baptiste Carpeaux, Valenciennes</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>89</td>
            <td>140</td>
            <td>Hors établissement, 'torlokichop' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Tom N.</td>
            <td>89</td>
            <td>140</td>
            <td>Hors établissement, 'zdimension' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Victor S.</td>
            <td>89</td>
            <td>140</td>
            <td>Hors établissement, 'victorsausset' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Mael R.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Jean Zay, Cenon</td>
         </tr>
         <tr>
            <td>Benjamin T.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège la Chataigneraie, Autun</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Timothé D.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Axel V.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Descartes Montaigne, Lievin</td>
         </tr>
         <tr>
            <td>Ana C.</td>
            <td>88</td>
            <td>152</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>William M.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Pauline M.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Musa A.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Jean Rostand, Châtenois</td>
         </tr>
         <tr>
            <td>Clothilde P.</td>
            <td>88</td>
            <td>152</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Benoît L.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège René Cassin, Athis de l'Orne</td>
         </tr>
         <tr>
            <td>Coraline G.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Gabriel G.</td>
            <td>88</td>
            <td>152</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Jules P.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Jean Lurçat, Frouard</td>
         </tr>
         <tr>
            <td>Ylane G.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Juliette T.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Louis Joseph Soulas, Bazoches les Gallerandes</td>
         </tr>
         <tr>
            <td>Matthieu B.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Gambetta, Arras Cédex</td>
         </tr>
         <tr>
            <td>Emilie S.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Henri Lefeuvre, Arnage</td>
         </tr>
         <tr>
            <td>Rachel B.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Henri Lefeuvre, Arnage</td>
         </tr>
         <tr>
            <td>Gauthier W.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Franz S.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Nil S.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège du Val d'Aure, Isigny sur Mer</td>
         </tr>
         <tr>
            <td>Benjamin S.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Enora N.</td>
            <td>87</td>
            <td>167</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Valentin M.</td>
            <td>87</td>
            <td>167</td>
            <td>Hors établissement, 'val632000' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Loïc B.</td>
            <td>87</td>
            <td>167</td>
            <td>Hors établissement, 'croal' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Xavier C.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Tristan P.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Thibaut A.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Paul M.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Nathan L.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Jules E.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Leï Garrus, Saint Maxi</td>
         </tr>
         <tr>
            <td>Marin C.</td>
            <td>86</td>
            <td>183</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>86</td>
            <td>183</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Carole E.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Léa B.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Clara P.</td>
            <td>86</td>
            <td>183</td>
            <td>Cité Scolaire Renoir, Angers</td>
         </tr>
         <tr>
            <td>Evan M.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>86</td>
            <td>183</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Loris D.</td>
            <td>86</td>
            <td>183</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>86</td>
            <td>183</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Stanislas L.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Alice P.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Victor A.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Matthis F.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Chloé L.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Clément F.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Camille P.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Armand L.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Bruce K.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Thomas Z.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Tristan G.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Hugo F.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Clement D.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Guy Liard, Mondeville</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Juline T.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Mattéo B.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Marc T.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Luis J.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Modigliani, Paris</td>
         </tr>
         <tr>
            <td>Guilhem V.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>85</td>
            <td>199</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Vincent B.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège le Bois de l'Enclume, Trilport</td>
         </tr>
         <tr>
            <td>Martin G.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège les Bruyères, Valentigney</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>85</td>
            <td>199</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Roberto W.</td>
            <td>85</td>
            <td>199</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Guilhem M.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Némo M.</td>
            <td>85</td>
            <td>199</td>
            <td>Collège Anne Frank, Morieres les Avignon</td>
         </tr>
         <tr>
            <td>Benoît R.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Lucas F.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Ingwiller, Ingwiller</td>
         </tr>
         <tr>
            <td>Julian M.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Robin D.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Mattéo C.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège François Truffaut, Longué</td>
         </tr>
         <tr>
            <td>Laure V.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Mathis S.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Nicolas C.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège les Bruyères, Valentigney</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Julien A.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Colin t.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Lucas K.</td>
            <td>84</td>
            <td>226</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Eva R.</td>
            <td>84</td>
            <td>226</td>
            <td>Hors établissement, 'ergz' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Corentin E.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Delia B.</td>
            <td>84</td>
            <td>226</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>84</td>
            <td>226</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège du Marquenterre, Rue</td>
         </tr>
         <tr>
            <td>Adam A.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Amine B.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Hugo T.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Fabien D.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Stanislas Cannes, Cannes</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Ingwiller, Ingwiller</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>83</td>
            <td>246</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Alexis M.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Descartes Montaigne, Lievin</td>
         </tr>
         <tr>
            <td>Diego R.</td>
            <td>83</td>
            <td>246</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Coline D.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Robert Doisneau, Chalon sur Saône</td>
         </tr>
         <tr>
            <td>Théo D.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Amaury R.</td>
            <td>83</td>
            <td>246</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Thibault R.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Sami A.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Mehdi A.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Jean Baptiste Clément, Paris</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Zoé D.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Gauthier D.</td>
            <td>83</td>
            <td>246</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Hadrien R.</td>
            <td>83</td>
            <td>246</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>83</td>
            <td>246</td>
            <td>Hors établissement, 'simon.bier' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Flavy P.</td>
            <td>83</td>
            <td>246</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Joliot Curie, Aigues-Mortes</td>
         </tr>
         <tr>
            <td>Atakan B.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Jean Zay, Cenon</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Fabien V.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Elisa S.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Justine C.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Ewen P.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Dorine A.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Alexis T.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Paul Eluard, Gennes</td>
         </tr>
         <tr>
            <td>Elliot M.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Paul Eluard, Gennes</td>
         </tr>
         <tr>
            <td>Martin C.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Saint-Martin, Marquise</td>
         </tr>
         <tr>
            <td>Nathan E.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Daniel Argote, Orthez</td>
         </tr>
         <tr>
            <td>Mathieu L.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Lucas H.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Darius M.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Jean-Henri Fabre, Nice</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Lucie-Valentine L.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Louis Pasteur, Nesle</td>
         </tr>
         <tr>
            <td>Camille Q.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Eva P.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Megane P.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Jules V.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Jessy B.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège de l'Europe, Ardres</td>
         </tr>
         <tr>
            <td>Amaury C.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Saint-Laurent, La Bresse</td>
         </tr>
         <tr>
            <td>Fabien D.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège de l'Evre, Montrevault</td>
         </tr>
         <tr>
            <td>Benjamin R.</td>
            <td>82</td>
            <td>267</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Lysa L.</td>
            <td>82</td>
            <td>267</td>
            <td>Collège Saint Tremeur, Carhaix Plouguer</td>
         </tr>
         <tr>
            <td>Léa M.</td>
            <td>82</td>
            <td>267</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Dries M.</td>
            <td>81</td>
            <td>295</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Clement G.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Alexandre B.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège le Grand Champ, Pont-de-Chéruy</td>
         </tr>
         <tr>
            <td>Henri P.</td>
            <td>81</td>
            <td>295</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Emilien B.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Robin M.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Brandon D.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Marion F.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Henri Iv, Bergerac</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>81</td>
            <td>295</td>
            <td>Bienvenu-Martin, Auxerre</td>
         </tr>
         <tr>
            <td>Elwan V.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Cacault, Clisson</td>
         </tr>
         <tr>
            <td>Chloé P.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Gauthier M.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Ayoub T.</td>
            <td>81</td>
            <td>295</td>
            <td>Internat d'Excellence de Montpellier, Montpellier</td>
         </tr>
         <tr>
            <td>Hamza M.</td>
            <td>81</td>
            <td>295</td>
            <td>Internat d'Excellence de Montpellier, Montpellier</td>
         </tr>
         <tr>
            <td>Adrien F.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Eric M.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Koraline H.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Elise H.</td>
            <td>81</td>
            <td>295</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Nolan B.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Saint Just, Soissons</td>
         </tr>
         <tr>
            <td>Max S.</td>
            <td>81</td>
            <td>295</td>
            <td>Groupe Scolaire Sainte-Anne Saint-Joseph, Lure</td>
         </tr>
         <tr>
            <td>Yassine B.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Léon Jouhaux, Livry-Gargan</td>
         </tr>
         <tr>
            <td>Alexis P.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Henri Morat, Recey sur Ource</td>
         </tr>
         <tr>
            <td>Antonin R.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Henri Morat, Recey sur Ource</td>
         </tr>
         <tr>
            <td>Aurélien G.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Axel B.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Jonathan V.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Gérard Philipe, Massy</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Jean Perrin, Saint Paul Trois Châteaux</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Maximin C.</td>
            <td>81</td>
            <td>295</td>
            <td>Hergé, Gondecourt</td>
         </tr>
         <tr>
            <td>Alexis M.</td>
            <td>81</td>
            <td>295</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Maël C.</td>
            <td>81</td>
            <td>295</td>
            <td>Louis Aragon, Jarny</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Eva S.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Anthony D.</td>
            <td>81</td>
            <td>295</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Caroline M.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Joséphine C.</td>
            <td>80</td>
            <td>331</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Laurentiu B.</td>
            <td>80</td>
            <td>331</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Gabriel M.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège le Parc de Villeroy, Mennecy</td>
         </tr>
         <tr>
            <td>Marie B.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Florian M.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Alexandre B.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Jules Michelet, Beauvais</td>
         </tr>
         <tr>
            <td>Ugo O.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Lilian S.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         <tr>
            <td>Pierre D.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Hugo S.</td>
            <td>80</td>
            <td>331</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Lamia E.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Calmette, Wasquehal</td>
         </tr>
         <tr>
            <td>Emma D.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Solenn G.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Malvina T.</td>
            <td>80</td>
            <td>331</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Manon L.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Manon T.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège la Noë Lambert, Nantes</td>
         </tr>
         <tr>
            <td>Morgann S.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Cameron M.</td>
            <td>80</td>
            <td>331</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Fabien H.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Louis Pasteur, Nesle</td>
         </tr>
         <tr>
            <td>Tony S.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Victoria Y.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Audrey L.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Jean-Jacques Waltz, Marckolsheim</td>
         </tr>
         <tr>
            <td>Isaure R.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Baptiste J.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège François d'Assise, Cerizay</td>
         </tr>
         <tr>
            <td>Aïda G.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Léon Jouhaux, Livry-Gargan</td>
         </tr>
         <tr>
            <td>Cyriac C.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Jean-Baptiste Carpeaux, Valenciennes</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Modigliani, Paris</td>
         </tr>
         <tr>
            <td>Hugo R.</td>
            <td>80</td>
            <td>331</td>
            <td>Hergé, Gondecourt</td>
         </tr>
         <tr>
            <td>Remi J.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège de la Voie Châtelaine, Arcis-sur-Aube</td>
         </tr>
         <tr>
            <td>Claire D.</td>
            <td>80</td>
            <td>331</td>
            <td>Collège Jacques Mercusot, Sombernon</td>
         </tr>
         <tr>
            <td>Samer A.</td>
            <td>80</td>
            <td>331</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-10'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde : 857 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-10' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-10' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>106</td><td>24</td></tr><tr><td>105</td><td>25</td></tr><tr><td>104</td><td>54</td></tr><tr><td>102</td><td>55</td></tr><tr><td>101</td><td>67</td></tr><tr><td>100</td><td>73</td></tr><tr><td>99</td><td>79</td></tr><tr><td>98</td><td>86</td></tr><tr><td>97</td><td>99</td></tr><tr><td>96</td><td>110</td></tr><tr><td>95</td><td>113</td></tr><tr><td>94</td><td>124</td></tr><tr><td>93</td><td>147</td></tr><tr><td>92</td><td>161</td></tr><tr><td>91</td><td>173</td></tr><tr><td>90</td><td>196</td></tr><tr><td>89</td><td>208</td></tr><tr><td>88</td><td>227</td></tr><tr><td>87</td><td>245</td></tr><tr><td>86</td><td>266</td></tr><tr><td>85</td><td>277</td></tr><tr><td>84</td><td>288</td></tr><tr><td>83</td><td>310</td></tr><tr><td>82</td><td>316</td></tr><tr><td>81</td><td>336</td></tr><tr><td>80</td><td>357</td></tr><tr><td>79</td><td>370</td></tr><tr><td>78</td><td>398</td></tr><tr><td>77</td><td>418</td></tr><tr><td>76</td><td>439</td></tr><tr><td>75</td><td>458</td></tr><tr><td>74</td><td>474</td></tr><tr><td>73</td><td>493</td></tr><tr><td>72</td><td>504</td></tr><tr><td>71</td><td>517</td></tr><tr><td>70</td><td>543</td></tr><tr><td>69</td><td>549</td></tr><tr><td>68</td><td>565</td></tr><tr><td>67</td><td>583</td></tr><tr><td>66</td><td>588</td></tr><tr><td>65</td><td>604</td></tr><tr><td>64</td><td>617</td></tr><tr><td>63</td><td>625</td></tr><tr><td>62</td><td>650</td></tr><tr><td>61</td><td>668</td></tr><tr><td>60</td><td>683</td></tr><tr><td>59</td><td>694</td></tr><tr><td>58</td><td>703</td></tr><tr><td>57</td><td>707</td></tr><tr><td>56</td><td>714</td></tr><tr><td>55</td><td>717</td></tr><tr><td>54</td><td>728</td></tr><tr><td>53</td><td>735</td></tr><tr><td>52</td><td>743</td></tr><tr><td>51</td><td>747</td></tr><tr><td>50</td><td>754</td></tr><tr><td>49</td><td>763</td></tr><tr><td>48</td><td>765</td></tr><tr><td>47</td><td>773</td></tr><tr><td>46</td><td>782</td></tr><tr><td>45</td><td>788</td></tr><tr><td>44</td><td>794</td></tr><tr><td>43</td><td>802</td></tr><tr><td>42</td><td>804</td></tr><tr><td>41</td><td>808</td></tr><tr><td>40</td><td>811</td></tr><tr><td>39</td><td>813</td></tr><tr><td>38</td><td>819</td></tr><tr><td>37</td><td>822</td></tr><tr><td>36</td><td>823</td></tr><tr><td>35</td><td>826</td></tr><tr><td>34</td><td>827</td></tr><tr><td>33</td><td>830</td></tr><tr><td>32</td><td>834</td></tr><tr><td>31</td><td>836</td></tr><tr><td>30</td><td>837</td></tr><tr><td>29</td><td>840</td></tr><tr><td>23</td><td>841</td></tr><tr><td>17</td><td>844</td></tr><tr><td>15</td><td>846</td></tr><tr><td>9</td><td>847</td></tr><tr><td>8</td><td>849</td></tr><tr><td>6</td><td>850</td></tr><tr><td>4</td><td>851</td></tr><tr><td>0</td><td>852</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 287 premiers ayant un score supérieur ou égal à 85 sont listés ci-dessous.
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
            <td>Aurélien L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Thomas A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Josué H.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Mathieu R.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Paul R.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Paco R.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Léo K.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Eugène Woillez, Montreuil sur Mer</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Eliott K.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Ledoux, Besançon</td>
         </tr>
         <tr>
            <td>Philippe A.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'philippoa' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Benoît P.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Pierre Emile Martin, Bourges</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'vretsss' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Benoit G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Yohann P.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Albert G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Vincent M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Isla M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Benjamin P.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'nibenel' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Reynes J.</td>
            <td>106</td>
            <td>24</td>
            <td>Lycée Lamartine, Mâcon</td>
         </tr>
         <tr>
            <td>Clarence M.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Quentin W.</td>
            <td>105</td>
            <td>25</td>
            <td>Cité Scolaire Alfred Kastler, Stenay</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Cyril D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Clara L.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Thibaut D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Raphaël C.</td>
            <td>105</td>
            <td>25</td>
            <td>Sainte Thérèse, Qumiper</td>
         </tr>
         <tr>
            <td>Thibault P.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Mathis F.</td>
            <td>105</td>
            <td>25</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Sidoine A.</td>
            <td>105</td>
            <td>25</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>105</td>
            <td>25</td>
            <td>Sainte Thérèse, Qumiper</td>
         </tr>
         <tr>
            <td>Elias S.</td>
            <td>105</td>
            <td>25</td>
            <td>Hors établissement, 'egregius' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Yakob K.</td>
            <td>105</td>
            <td>25</td>
            <td>Hors établissement, 'ykahane' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>105</td>
            <td>25</td>
            <td>Hors établissement, 'blebegout' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Sylvain V.</td>
            <td>105</td>
            <td>25</td>
            <td>Hors établissement, 'gnomino' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Lysiane B.</td>
            <td>105</td>
            <td>25</td>
            <td>La Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Ilyes W.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Liam D.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Loic P.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Malo R.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Killian D.</td>
            <td>105</td>
            <td>25</td>
            <td>Hors établissement, 'dengreville' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Jean-Christophe A.</td>
            <td>105</td>
            <td>25</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Tom K.</td>
            <td>105</td>
            <td>25</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Gregory M.</td>
            <td>104</td>
            <td>54</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Mathieu J.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Julianna D.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée Victor Hugo, Port Gentil</td>
         </tr>
         <tr>
            <td>Guillaume N.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée Chevrollier, Angers</td>
         </tr>
         <tr>
            <td>Prunier S.</td>
            <td>102</td>
            <td>55</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Eliott P.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Erwan S.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Mondhor C.</td>
            <td>102</td>
            <td>55</td>
            <td>Hors établissement, 'mondhor' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Adrien R.</td>
            <td>102</td>
            <td>55</td>
            <td>Hors établissement, '-adrien-' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Thibault A.</td>
            <td>102</td>
            <td>55</td>
            <td>Hors établissement, 'tib92' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>102</td>
            <td>55</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Mathilde D.</td>
            <td>102</td>
            <td>55</td>
            <td>Hors établissement, 'eichhornchen' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Romain I.</td>
            <td>102</td>
            <td>55</td>
            <td>Lycée Henri Matisse, Vence</td>
         </tr>
         <tr>
            <td>Anthony B.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Julien S.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Clément B.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée Auguste Chevalier, Domfront</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Aurélien F.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>101</td>
            <td>67</td>
            <td>Lycée Charles-François Lebrun, Coutances</td>
         </tr>
         <tr>
            <td>Luc V.</td>
            <td>100</td>
            <td>73</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Théo P.</td>
            <td>100</td>
            <td>73</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Rémi L.</td>
            <td>100</td>
            <td>73</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Elliot G.</td>
            <td>100</td>
            <td>73</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Axel R.</td>
            <td>100</td>
            <td>73</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Bastien L.</td>
            <td>100</td>
            <td>73</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Méline Z.</td>
            <td>99</td>
            <td>79</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Titouan M.</td>
            <td>99</td>
            <td>79</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Maxence D.</td>
            <td>99</td>
            <td>79</td>
            <td>Lycée Pasteur, Hénin-Beaumont</td>
         </tr>
         <tr>
            <td>Vincent D.</td>
            <td>99</td>
            <td>79</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>99</td>
            <td>79</td>
            <td>Hors établissement, 'theo468' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Valentin V.</td>
            <td>99</td>
            <td>79</td>
            <td>Lycée Alain Chartier, Bayeux</td>
         </tr>
         <tr>
            <td>Céline Yiran D.</td>
            <td>99</td>
            <td>79</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>98</td>
            <td>86</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Anthony A.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Louise G.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>98</td>
            <td>86</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>98</td>
            <td>86</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Mickaël O.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Xavier B.</td>
            <td>98</td>
            <td>86</td>
            <td>Hors établissement, 'azertx' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Jean D.</td>
            <td>98</td>
            <td>86</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Mathilde A.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Kimberly D.</td>
            <td>98</td>
            <td>86</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Jean Baptiste le Taillandier, Fougères</td>
         </tr>
         <tr>
            <td>Hector G.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Cédric R.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Léopold M.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Dorian H.</td>
            <td>97</td>
            <td>99</td>
            <td>La Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Enzo N.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Pasteur, Hénin-Beaumont</td>
         </tr>
         <tr>
            <td>Fabien S.</td>
            <td>97</td>
            <td>99</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Aline C.</td>
            <td>97</td>
            <td>99</td>
            <td>Hors établissement, 'alinouca' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Kevin T.</td>
            <td>97</td>
            <td>99</td>
            <td>Hors établissement, 'ticubius' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>97</td>
            <td>99</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Damien G.</td>
            <td>96</td>
            <td>110</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Louis T.</td>
            <td>96</td>
            <td>110</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Mathieu B.</td>
            <td>96</td>
            <td>110</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Gillian M.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Jules Ferry, Cannes</td>
         </tr>
         <tr>
            <td>Raphael B.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Florian R.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Rodrigue R.</td>
            <td>95</td>
            <td>113</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Jade C.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Français de Pondichéry, Pondicherry</td>
         </tr>
         <tr>
            <td>Lucas K.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Gaspard B.</td>
            <td>95</td>
            <td>113</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Nathan C.</td>
            <td>95</td>
            <td>113</td>
            <td>Cité Scolaire Emile Zola, Wattrelos</td>
         </tr>
         <tr>
            <td>Loïc G.</td>
            <td>95</td>
            <td>113</td>
            <td>Lycée Vangogh, Aubergenville</td>
         </tr>
         <tr>
            <td>Lucien P.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Kastler Guitton, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Sébastien M.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Kastler Guitton, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Antoine H.</td>
            <td>94</td>
            <td>124</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Cordouan, Royan</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>94</td>
            <td>124</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Paolo S.</td>
            <td>94</td>
            <td>124</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Nicolas O.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Alexandre O.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Natan M.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Renè Cassin, Arpajon</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Maine Dev Biran, Bergerac</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Guillaume A.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Alexis V.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Gwendal M.</td>
            <td>94</td>
            <td>124</td>
            <td>Sainte Thérèse, Qumiper</td>
         </tr>
         <tr>
            <td>Perrine M.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Gregoire S.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Elias M.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Balzac, Paris</td>
         </tr>
         <tr>
            <td>Aurélien L.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Marcel F.</td>
            <td>94</td>
            <td>124</td>
            <td>Hors établissement, 'marcel98' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Alex K.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>94</td>
            <td>124</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Samuel G.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Fabien Y.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Paulin V.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Mathilde S.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Yassine B.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Maxence M.</td>
            <td>93</td>
            <td>147</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Raphael G.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée Maupertuis, Saint-Malo</td>
         </tr>
         <tr>
            <td>Gauthier F.</td>
            <td>93</td>
            <td>147</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>93</td>
            <td>147</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Lucien V.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Alexandre H.</td>
            <td>93</td>
            <td>147</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Tim G.</td>
            <td>93</td>
            <td>147</td>
            <td>Hors établissement, 'tibu3838' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Vincent G.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Emeric K.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Alice D.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>92</td>
            <td>161</td>
            <td>Sainte Thérèse, Qumiper</td>
         </tr>
         <tr>
            <td>Nathan C.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Bruno B.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Henri R.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Lamartine, Paris</td>
         </tr>
         <tr>
            <td>Benjamin G.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Pierre Corneille, Rouen</td>
         </tr>
         <tr>
            <td>Luigi M.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Lamartine, Mâcon</td>
         </tr>
         <tr>
            <td>Alban C.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Charles-François Lebrun, Coutances</td>
         </tr>
         <tr>
            <td>Solène J.</td>
            <td>92</td>
            <td>161</td>
            <td>Hors établissement, 'boodstar' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Laura M.</td>
            <td>92</td>
            <td>161</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Logan P.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Victor Bérard, Morez</td>
         </tr>
         <tr>
            <td>Antoine B.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Arnold L.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Simon K.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Clara G.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Pierrick M.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Guillaume L.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Joris A.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Chevrollier, Angers</td>
         </tr>
         <tr>
            <td>Sacha O.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Jim M.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Renè Cassin, Arpajon</td>
         </tr>
         <tr>
            <td>Laura A.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Renè Cassin, Arpajon</td>
         </tr>
         <tr>
            <td>Brieuc J.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Renè Cassin, Arpajon</td>
         </tr>
         <tr>
            <td>Esteban B.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Léa M.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Tariq M.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Français de Pondichéry, Pondicherry</td>
         </tr>
         <tr>
            <td>Lyam D.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Florian R.</td>
            <td>91</td>
            <td>173</td>
            <td>Hors établissement, 'flopirate' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée Jean de Lattre de Tassigny, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Youenn P.</td>
            <td>91</td>
            <td>173</td>
            <td>Lycée St-Joseph de Bruz, Bruz</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>91</td>
            <td>173</td>
            <td>Hors établissement, 'platicraft' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Jean D.</td>
            <td>91</td>
            <td>173</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Nathaël C.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Ismaël L.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Théo J.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Victor Hugo, Port Gentil</td>
         </tr>
         <tr>
            <td>Pierre-Julien F.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Léa G.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Henri Bergson, Angers</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Sébastien D.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Sylvain V.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Luc C.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Etienne O.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Michèle L.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Maxime E.</td>
            <td>90</td>
            <td>196</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Frédéric G.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Guillaume H.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Delamare Debouteville, Forges les Eaux</td>
         </tr>
         <tr>
            <td>Alexis P.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Kastler Guitton, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Tobie A.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Jules V.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Timothée A.</td>
            <td>89</td>
            <td>208</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>89</td>
            <td>208</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Guillem P.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Alexandre V.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Corentin F.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Eloi P.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Antoine R.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Pierre Lagourgue, Le Tampon</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Henri Matisse, Vence</td>
         </tr>
         <tr>
            <td>Gwendoline C.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Jean de Lattre de Tassigny, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>89</td>
            <td>208</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Tiago F.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Victor Bérard, Morez</td>
         </tr>
         <tr>
            <td>Lucie P.</td>
            <td>88</td>
            <td>227</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Kastler Guitton, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Fantin F.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Imane H.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>88</td>
            <td>227</td>
            <td>Test Mathias, Ville</td>
         </tr>
         <tr>
            <td>Sylvain R.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Bryan D.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée de l'Europe, Dunkerque</td>
         </tr>
         <tr>
            <td>Charbel B.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Hadrien G.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Yanis B.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>88</td>
            <td>227</td>
            <td>La Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Clémentine H.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Constantin B.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Malo G.</td>
            <td>88</td>
            <td>227</td>
            <td>Hors établissement, 'snorny' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Diderot, Carvin</td>
         </tr>
         <tr>
            <td>Théo F.</td>
            <td>88</td>
            <td>227</td>
            <td>Lycée Jean de Lattre de Tassigny, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Jean-Michel R.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Paul Vincensini, Bastia</td>
         </tr>
         <tr>
            <td>Baptiste P.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Savinien L.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Jules B.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Fabien H.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Marouane B.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Amine E.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Abderrahim K.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Anton F.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Jules R.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Eugène Woillez, Montreuil sur Mer</td>
         </tr>
         <tr>
            <td>Maxence H.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Corentin G.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Français de Castilla Y León, Laguna de Duero</td>
         </tr>
         <tr>
            <td>Jean R.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Brendan D.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Hikmet A.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>87</td>
            <td>245</td>
            <td>Hors établissement, 'izzy_tom' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Raphaelle H.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Julie L.</td>
            <td>87</td>
            <td>245</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Alex M.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Pierre Larousse, Toucy</td>
         </tr>
         <tr>
            <td>Léa L.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Arielle M.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Balzac, Paris</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Ruben F.</td>
            <td>86</td>
            <td>266</td>
            <td>Hors établissement, 'rfo' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Sara D.</td>
            <td>86</td>
            <td>266</td>
            <td>Hors établissement, 'saturne' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Baudouin F.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Ambroise Paré, Laval</td>
         </tr>
         <tr>
            <td>Robin S.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Stéphane Hessel, Vaison la Romaine</td>
         </tr>
         <tr>
            <td>Irvine R.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Jean de Lattre de Tassigny, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Guy B.</td>
            <td>86</td>
            <td>266</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Louis H.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Delamare Debouteville, Forges les Eaux</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Zacharie C.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Sébyann P.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Coralie L.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Emeline P.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Alexandre G.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Mathilde B.</td>
            <td>85</td>
            <td>277</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Héloïse C.</td>
            <td>85</td>
            <td>277</td>
            <td>Hors établissement, 'heloise1' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Brevalan U.</td>
            <td>85</td>
            <td>277</td>
            <td>Hors établissement, 'chrom0s' sur france-ioi.org</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-11'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première : 367 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-11' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-11' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>105</td><td>43</td></tr><tr><td>104</td><td>77</td></tr><tr><td>102</td><td>83</td></tr><tr><td>101</td><td>94</td></tr><tr><td>100</td><td>102</td></tr><tr><td>99</td><td>106</td></tr><tr><td>98</td><td>115</td></tr><tr><td>97</td><td>123</td></tr><tr><td>96</td><td>132</td></tr><tr><td>95</td><td>134</td></tr><tr><td>94</td><td>137</td></tr><tr><td>93</td><td>153</td></tr><tr><td>92</td><td>158</td></tr><tr><td>91</td><td>170</td></tr><tr><td>90</td><td>178</td></tr><tr><td>89</td><td>184</td></tr><tr><td>88</td><td>196</td></tr><tr><td>87</td><td>203</td></tr><tr><td>86</td><td>214</td></tr><tr><td>85</td><td>219</td></tr><tr><td>84</td><td>226</td></tr><tr><td>83</td><td>232</td></tr><tr><td>82</td><td>238</td></tr><tr><td>81</td><td>249</td></tr><tr><td>80</td><td>256</td></tr><tr><td>79</td><td>258</td></tr><tr><td>78</td><td>264</td></tr><tr><td>77</td><td>269</td></tr><tr><td>76</td><td>275</td></tr><tr><td>75</td><td>278</td></tr><tr><td>74</td><td>283</td></tr><tr><td>73</td><td>291</td></tr><tr><td>72</td><td>295</td></tr><tr><td>71</td><td>300</td></tr><tr><td>70</td><td>303</td></tr><tr><td>69</td><td>307</td></tr><tr><td>68</td><td>309</td></tr><tr><td>67</td><td>315</td></tr><tr><td>66</td><td>316</td></tr><tr><td>65</td><td>319</td></tr><tr><td>64</td><td>322</td></tr><tr><td>63</td><td>323</td></tr><tr><td>62</td><td>325</td></tr><tr><td>60</td><td>330</td></tr><tr><td>59</td><td>331</td></tr><tr><td>58</td><td>334</td></tr><tr><td>57</td><td>336</td></tr><tr><td>56</td><td>339</td></tr><tr><td>55</td><td>340</td></tr><tr><td>54</td><td>342</td></tr><tr><td>53</td><td>343</td></tr><tr><td>52</td><td>345</td></tr><tr><td>51</td><td>346</td></tr><tr><td>50</td><td>347</td></tr><tr><td>49</td><td>349</td></tr><tr><td>48</td><td>351</td></tr><tr><td>46</td><td>352</td></tr><tr><td>45</td><td>354</td></tr><tr><td>44</td><td>358</td></tr><tr><td>43</td><td>359</td></tr><tr><td>39</td><td>360</td></tr><tr><td>35</td><td>361</td></tr><tr><td>32</td><td>362</td></tr><tr><td>25</td><td>364</td></tr><tr><td>6</td><td>366</td></tr><tr><td>0</td><td>367</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 183 premiers ayant un score supérieur ou égal à 90 sont listés ci-dessous.
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
            <td>Alvaro A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Jules B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Aymeric G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Clément B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Dumont d'Urville, Caen</td>
         </tr>
         <tr>
            <td>Tituan A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Gauthier L.</td>
            <td>108</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Pierrick T.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Arthur M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Gauthier F.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Joseph Vallot, Lodeve</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Defourné T.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Carnot, Bruay la Buissière</td>
         </tr>
         <tr>
            <td>Clément N.</td>
            <td>108</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Ambroise R.</td>
            <td>108</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Félix B.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'azelef' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Maxime P.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'maxime3011' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'baptistecollet' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Cyril B.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'landryl' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>108</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>José M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Quentin J.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Rene Perrin, Ugine</td>
         </tr>
         <tr>
            <td>Noriane C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Bogdan M.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Eloi B.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'eloiboutillon' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>108</td>
            <td>1</td>
            <td>Notre Dame Campostal, Rostrenen</td>
         </tr>
         <tr>
            <td>Johyn P.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'johynpapin' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Gilles D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Gaëtan B.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'mindstan' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Solenn C.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'bouboule1330' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Alban P.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'alban_p' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Rémi D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Armand R.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Elise G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Jean-Loup D.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Fabien K.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Fernand Darchicourt, Henin Beaumont</td>
         </tr>
         <tr>
            <td>Mathis G.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Sébastien B.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Vincent H.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Eulalie C.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Thep-Ananh V.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Alison P.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Guillaume R.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Duncan J.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Marlioz, Aix-les-Bains</td>
         </tr>
         <tr>
            <td>Chloé D.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Thibaut H.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Eliot V.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Julie P.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Justin D.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Clement L.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Joseph Vallot, Lodeve</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Joseph Vallot, Lodeve</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Emmanuel Mounier, Grenoble Cedex 02</td>
         </tr>
         <tr>
            <td>Zoé D.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Emmanuel Mounier, Grenoble Cedex 02</td>
         </tr>
         <tr>
            <td>Julie L.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Frida Walle T.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Alain Chartier, Bayeux</td>
         </tr>
         <tr>
            <td>Mikaël B.</td>
            <td>105</td>
            <td>43</td>
            <td>Institution Saint Francois, La Cote Saint Andre</td>
         </tr>
         <tr>
            <td>Lilian B.</td>
            <td>105</td>
            <td>43</td>
            <td>Institution Saint Francois, La Cote Saint Andre</td>
         </tr>
         <tr>
            <td>Cyprien L.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Zacchary S.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Adrien T.</td>
            <td>105</td>
            <td>43</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Théophane B.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Benoît H.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Poyvalent Eugène Ionesco, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Mattéo V.</td>
            <td>105</td>
            <td>43</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Thibault A.</td>
            <td>105</td>
            <td>43</td>
            <td>Hors établissement, 'alvin' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Timothée B.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Thanh Mai N.</td>
            <td>105</td>
            <td>43</td>
            <td>Hors établissement, 'penghaha' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Tristan G.</td>
            <td>105</td>
            <td>43</td>
            <td>Lycée Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>105</td>
            <td>43</td>
            <td>Hors établissement, 'g.cauty' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Simon G.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Achille H.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Louis F.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Stephane L.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Rose H.</td>
            <td>104</td>
            <td>77</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Alexis P.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Enzo A.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Amandine D.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Clément V.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Albert de Mun, Paris</td>
         </tr>
         <tr>
            <td>Adrien F.</td>
            <td>102</td>
            <td>83</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Thibaut C.</td>
            <td>102</td>
            <td>83</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Julien F.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Fernand Darchicourt, Henin Beaumont</td>
         </tr>
         <tr>
            <td>Rémy A.</td>
            <td>102</td>
            <td>83</td>
            <td>Lycée Fernand Darchicourt, Henin Beaumont</td>
         </tr>
         <tr>
            <td>Alice B.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Matthieu H.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Corentin V.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Benoit R.</td>
            <td>101</td>
            <td>94</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Nils R.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Nicolas R.</td>
            <td>101</td>
            <td>94</td>
            <td>Hors établissement, 'thorn' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Armelle J.</td>
            <td>101</td>
            <td>94</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>100</td>
            <td>102</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Mathias/Nicolas G.</td>
            <td>100</td>
            <td>102</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Salomé M.</td>
            <td>100</td>
            <td>102</td>
            <td>Lycée Alain Chartier, Bayeux</td>
         </tr>
         <tr>
            <td>Alice J.</td>
            <td>100</td>
            <td>102</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Dan F.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Xavier T.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Fabien C.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Louis T.</td>
            <td>99</td>
            <td>106</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Pierre J.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Carl S.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Matthieu C.</td>
            <td>99</td>
            <td>106</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Lucie G.</td>
            <td>99</td>
            <td>106</td>
            <td>Hors établissement, 'luxotora' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>98</td>
            <td>115</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Louis R.</td>
            <td>98</td>
            <td>115</td>
            <td>Lycée Lucie Aubrac, Davaye</td>
         </tr>
         <tr>
            <td>Yanis B.</td>
            <td>98</td>
            <td>115</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>98</td>
            <td>115</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Maxime T.</td>
            <td>98</td>
            <td>115</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Emile S.</td>
            <td>98</td>
            <td>115</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Claire T.</td>
            <td>98</td>
            <td>115</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Alexandre T.</td>
            <td>98</td>
            <td>115</td>
            <td>Hors établissement, 'xeland' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Elie M.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Erwan K.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Corentin E.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Tugdual G.</td>
            <td>97</td>
            <td>123</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Margaux M.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Alain Chartier, Bayeux</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Alban O.</td>
            <td>97</td>
            <td>123</td>
            <td>Lycée Français de Pondichéry, Pondicherry</td>
         </tr>
         <tr>
            <td>Gaspard M.</td>
            <td>97</td>
            <td>123</td>
            <td>LPO E.J. MAREY, Beaune</td>
         </tr>
         <tr>
            <td>Aurélien R.</td>
            <td>97</td>
            <td>123</td>
            <td>Hors établissement, 'epharos' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Arnaud P.</td>
            <td>96</td>
            <td>132</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Mathieu C.</td>
            <td>96</td>
            <td>132</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Saad B.</td>
            <td>95</td>
            <td>134</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Maxim L.</td>
            <td>95</td>
            <td>134</td>
            <td>Lycée Dumont d'Urville, Caen</td>
         </tr>
         <tr>
            <td>Guillaume R.</td>
            <td>95</td>
            <td>134</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Julien K.</td>
            <td>94</td>
            <td>137</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Samy D.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Baptiste B.</td>
            <td>94</td>
            <td>137</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Olivier C.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Yann D.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Matéo M.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Marlioz, Aix-les-Bains</td>
         </tr>
         <tr>
            <td>Lukas F.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Corentin S.</td>
            <td>94</td>
            <td>137</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Clément B.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Cyprien C.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Gautier R.</td>
            <td>94</td>
            <td>137</td>
            <td>Hors établissement, 'gautrob' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Juliette G.</td>
            <td>94</td>
            <td>137</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Raphaël P.</td>
            <td>94</td>
            <td>137</td>
            <td>Hors établissement, 'rpeim' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Fabien B.</td>
            <td>93</td>
            <td>153</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Valentin G.</td>
            <td>93</td>
            <td>153</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>93</td>
            <td>153</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Alexis R.</td>
            <td>93</td>
            <td>153</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>93</td>
            <td>153</td>
            <td>Lycée Edouard Belin, Vesoul</td>
         </tr>
         <tr>
            <td>Arnaud R.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Marc-Antoine G.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>92</td>
            <td>158</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Coline D.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Jeanne d'Arc, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Alban F.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Manon C.</td>
            <td>92</td>
            <td>158</td>
            <td>LPO E.J. MAREY, Beaune</td>
         </tr>
         <tr>
            <td>Chloé G.</td>
            <td>92</td>
            <td>158</td>
            <td>LPO E.J. MAREY, Beaune</td>
         </tr>
         <tr>
            <td>Femke D.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Ledoux, Besançon</td>
         </tr>
         <tr>
            <td>Florian P.</td>
            <td>92</td>
            <td>158</td>
            <td>Hors établissement, 'aa4658' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Vianney T.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Anthony D.</td>
            <td>92</td>
            <td>158</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Adrien R.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Paul Vincensini, Bastia</td>
         </tr>
         <tr>
            <td>Lucas R.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Jean-Baptiste F.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Pierre-Axel C.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Guillaume I.</td>
            <td>91</td>
            <td>170</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Florian F.</td>
            <td>91</td>
            <td>170</td>
            <td>Hors établissement, 'farow' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Cyriel L.</td>
            <td>91</td>
            <td>170</td>
            <td>Hors établissement, 'lion' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Léo N.</td>
            <td>90</td>
            <td>178</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Florian A.</td>
            <td>90</td>
            <td>178</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>90</td>
            <td>178</td>
            <td>Lycée Dumont d'Urville, Caen</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>90</td>
            <td>178</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Yungyu S.</td>
            <td>90</td>
            <td>178</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Adrien C.</td>
            <td>90</td>
            <td>178</td>
            <td>Hors établissement, 'ktz' sur france-ioi.org</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51-12'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale : 435 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51-12' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51-12' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>105</td><td>54</td></tr><tr><td>104</td><td>80</td></tr><tr><td>103</td><td>85</td></tr><tr><td>102</td><td>88</td></tr><tr><td>101</td><td>103</td></tr><tr><td>100</td><td>119</td></tr><tr><td>99</td><td>129</td></tr><tr><td>98</td><td>137</td></tr><tr><td>97</td><td>154</td></tr><tr><td>96</td><td>171</td></tr><tr><td>95</td><td>176</td></tr><tr><td>94</td><td>184</td></tr><tr><td>93</td><td>203</td></tr><tr><td>92</td><td>204</td></tr><tr><td>91</td><td>213</td></tr><tr><td>90</td><td>226</td></tr><tr><td>89</td><td>233</td></tr><tr><td>88</td><td>240</td></tr><tr><td>87</td><td>246</td></tr><tr><td>86</td><td>258</td></tr><tr><td>85</td><td>266</td></tr><tr><td>84</td><td>277</td></tr><tr><td>83</td><td>279</td></tr><tr><td>82</td><td>280</td></tr><tr><td>81</td><td>295</td></tr><tr><td>80</td><td>306</td></tr><tr><td>79</td><td>315</td></tr><tr><td>78</td><td>324</td></tr><tr><td>77</td><td>328</td></tr><tr><td>76</td><td>335</td></tr><tr><td>75</td><td>342</td></tr><tr><td>74</td><td>345</td></tr><tr><td>73</td><td>355</td></tr><tr><td>72</td><td>359</td></tr><tr><td>71</td><td>362</td></tr><tr><td>70</td><td>369</td></tr><tr><td>69</td><td>372</td></tr><tr><td>68</td><td>378</td></tr><tr><td>67</td><td>386</td></tr><tr><td>66</td><td>388</td></tr><tr><td>65</td><td>393</td></tr><tr><td>64</td><td>399</td></tr><tr><td>63</td><td>400</td></tr><tr><td>62</td><td>403</td></tr><tr><td>61</td><td>406</td></tr><tr><td>60</td><td>408</td></tr><tr><td>59</td><td>411</td></tr><tr><td>58</td><td>413</td></tr><tr><td>56</td><td>414</td></tr><tr><td>54</td><td>416</td></tr><tr><td>52</td><td>419</td></tr><tr><td>51</td><td>423</td></tr><tr><td>48</td><td>425</td></tr><tr><td>46</td><td>426</td></tr><tr><td>45</td><td>428</td></tr><tr><td>33</td><td>429</td></tr><tr><td>31</td><td>430</td></tr><tr><td>24</td><td>431</td></tr><tr><td>21</td><td>432</td></tr><tr><td>7</td><td>433</td></tr><tr><td>0</td><td>434</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 183 premiers ayant un score supérieur ou égal à 95 sont listés ci-dessous.
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
            <td>Thomas D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Côme P.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Vincent F.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jules Ferry, Cannes</td>
         </tr>
         <tr>
            <td>Lucas G.</td>
            <td>108</td>
            <td>1</td>
            <td>Ensemble Scolaire Marie Immaculée, Sées</td>
         </tr>
         <tr>
            <td>Augustin V.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Antoine J.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Lionel H.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Raphaël W.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Edouard Herriot, Lyon</td>
         </tr>
         <tr>
            <td>Etienne C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Maine Dev Biran, Bergerac</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Florian A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Thomas T.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Baptiste F.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Martin B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Benjamin C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Alexandre G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>108</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Robin P.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Josselin P.</td>
            <td>108</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Louis J.</td>
            <td>108</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Julien A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Zoey S.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'zsuzu' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Rodolphe J.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Victor C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Andy D.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Gay Lussac, Chauny</td>
         </tr>
         <tr>
            <td>Maïlys G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean Guéhenno, Flers</td>
         </tr>
         <tr>
            <td>Yohan G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Azzedine G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Valérian C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Octave H.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'mande18rot' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Thomas A.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Vangogh, Aubergenville</td>
         </tr>
         <tr>
            <td>Erwan M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée St-Joseph de Bruz, Bruz</td>
         </tr>
         <tr>
            <td>Kévin B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Robin B.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Louis S.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée St-Joseph de Bruz, Bruz</td>
         </tr>
         <tr>
            <td>Noé T.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Renaudeau, Cholet</td>
         </tr>
         <tr>
            <td>Christophe H.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Paul Cezanne, Aix en Provence</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'paul.guillier' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'klafyvel' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Benjamin P.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Lucie V.</td>
            <td>108</td>
            <td>1</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Luca G.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Gay Lussac, Chauny</td>
         </tr>
         <tr>
            <td>Bertille F.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Constance L.</td>
            <td>108</td>
            <td>1</td>
            <td>Lycée Jean Guéhenno, Flers</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Jean Favard, Gueret</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Axel K.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Bilal P.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Albert de Mun, Paris</td>
         </tr>
         <tr>
            <td>Pierrick L.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Anguier, Eu</td>
         </tr>
         <tr>
            <td>Alrick H.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Claire L.</td>
            <td>105</td>
            <td>54</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Laurent D.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Guillaume H.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Amaury G.</td>
            <td>105</td>
            <td>54</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Valentin T.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée la Fontaine Des Eaux, Dinan</td>
         </tr>
         <tr>
            <td>Francis K.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Poyvalent Eugène Ionesco, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Léa G.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Européen Charles de Gaulle, Dijon</td>
         </tr>
         <tr>
            <td>Rémi M.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée les Eucalyptus, Nice</td>
         </tr>
         <tr>
            <td>Gwennaël M.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée les Eucalyptus, Nice</td>
         </tr>
         <tr>
            <td>Pauline J.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Louis Lapicque, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Gustave P.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Alexis M.</td>
            <td>105</td>
            <td>54</td>
            <td>Gustave Flaubert, Rouen</td>
         </tr>
         <tr>
            <td>Wassim E.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
         <tr>
            <td>Paul F.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Européen Charles de Gaulle, Dijon</td>
         </tr>
         <tr>
            <td>Bastien C.</td>
            <td>105</td>
            <td>54</td>
            <td>Lycée Paul Cezanne, Aix en Provence</td>
         </tr>
         <tr>
            <td>Christopher J.</td>
            <td>104</td>
            <td>80</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>104</td>
            <td>80</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>104</td>
            <td>80</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>104</td>
            <td>80</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>104</td>
            <td>80</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>David P.</td>
            <td>103</td>
            <td>85</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Hyonjun J.</td>
            <td>103</td>
            <td>85</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Toni C.</td>
            <td>103</td>
            <td>85</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Sylvain B.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Mathieu C.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée H. Carnot, 42300</td>
         </tr>
         <tr>
            <td>Manon H.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Sacha D.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Marcelin Berthelot, Questembert</td>
         </tr>
         <tr>
            <td>Maxime L.</td>
            <td>102</td>
            <td>88</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>102</td>
            <td>88</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Vincent T.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Guillaume S.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Ludovic C.</td>
            <td>102</td>
            <td>88</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Sigvine D.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>102</td>
            <td>88</td>
            <td>Lycée Camille Saint Saëns, Rouen</td>
         </tr>
         <tr>
            <td>Theodore W.</td>
            <td>101</td>
            <td>103</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Noémie P.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Jason S.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Jean Favard, Gueret</td>
         </tr>
         <tr>
            <td>Denis C.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Ugo D.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Marguerite de Navarre, Bourges</td>
         </tr>
         <tr>
            <td>Félix C.</td>
            <td>101</td>
            <td>103</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Arnaud M.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Français de Pondichéry, Pondicherry</td>
         </tr>
         <tr>
            <td>Benjamin T.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Solène S.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Maxime L.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Jean Guéhenno, Flers</td>
         </tr>
         <tr>
            <td>Antoine V.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Pierre Forest de Maubeuge, Maubeuge</td>
         </tr>
         <tr>
            <td>Romane L.</td>
            <td>101</td>
            <td>103</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Bastien B.</td>
            <td>101</td>
            <td>103</td>
            <td>Hors établissement, 'uxor' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>101</td>
            <td>103</td>
            <td>Hors établissement, 'sl-prog' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Arthur T.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Jacky T.</td>
            <td>100</td>
            <td>119</td>
            <td>Lp Jacques Durand, Saint Omer</td>
         </tr>
         <tr>
            <td>Quentin E.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Louis Lachenal, Argonay - Pringy</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Younès R.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Julien F.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Aymeric M.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Guillaume L.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         <tr>
            <td>Oriane S.</td>
            <td>100</td>
            <td>119</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Yohann C.</td>
            <td>100</td>
            <td>119</td>
            <td>Lycée Paul Cezanne, Aix en Provence</td>
         </tr>
         <tr>
            <td>Loïc L.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Boris F.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Alec D.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Louis Lachenal, Argonay - Pringy</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Alix V.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Marie Curie, Gockhausen</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Nathan K.</td>
            <td>99</td>
            <td>129</td>
            <td>Lycée Notre Dame de Grace, Maubeuge</td>
         </tr>
         <tr>
            <td>Carole P.</td>
            <td>98</td>
            <td>137</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Tom G.</td>
            <td>98</td>
            <td>137</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Valentin P.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Louis Lachenal, Argonay - Pringy</td>
         </tr>
         <tr>
            <td>Alix S.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Benjamin B.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Pierre-Francois A.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         <tr>
            <td>Clémence F.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Jeanne d'Arc, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Bryan R.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Loïc O.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>François P.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Clément M.</td>
            <td>98</td>
            <td>137</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>98</td>
            <td>137</td>
            <td>Hors établissement, 'pythonneur_59' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>98</td>
            <td>137</td>
            <td>Hors établissement, 'scientifix' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Mathieu G.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Renaudeau, Cholet</td>
         </tr>
         <tr>
            <td>Alice R.</td>
            <td>98</td>
            <td>137</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Maxime E.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Lucas G.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Florent D.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>La'win A.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Damien D.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Marguerite de Navarre, Bourges</td>
         </tr>
         <tr>
            <td>Michael D.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Paul Vincensini, Bastia</td>
         </tr>
         <tr>
            <td>Benjamin B.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Elie D.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Anguier, Eu</td>
         </tr>
         <tr>
            <td>Adrien C.</td>
            <td>97</td>
            <td>154</td>
            <td>Institution Saint Francois, La Cote Saint Andre</td>
         </tr>
         <tr>
            <td>Léonie V.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Eloïse L.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Jean Guéhenno, Flers</td>
         </tr>
         <tr>
            <td>Océane O.</td>
            <td>97</td>
            <td>154</td>
            <td>Hors établissement, 'oouillon' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Michael S.</td>
            <td>97</td>
            <td>154</td>
            <td>Hors établissement, 'etendu' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Emeric M.</td>
            <td>97</td>
            <td>154</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Lucas R.</td>
            <td>96</td>
            <td>171</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Florian A.</td>
            <td>96</td>
            <td>171</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>96</td>
            <td>171</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Tiphaine M.</td>
            <td>96</td>
            <td>171</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Romain D.</td>
            <td>96</td>
            <td>171</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>95</td>
            <td>176</td>
            <td>Lp Jacques Durand, Saint Omer</td>
         </tr>
         <tr>
            <td>Théo V.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Déodat de Séverac, Céret</td>
         </tr>
         <tr>
            <td>Jean V.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Martin T.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Adam S.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Elodie L.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Jean Guéhenno, Flers</td>
         </tr>
         <tr>
            <td>Martin W.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Cyprien H.</td>
            <td>95</td>
            <td>176</td>
            <td>Lycée Sainte-Marie, Lyon</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51--3'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Pas encore au collège : 1 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51--3' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51--3' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>105</td><td>1</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 1 premiers ayant un score supérieur ou égal à 70 sont listés ci-dessous.
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
            <td>Aubine D.</td>
            <td>105</td>
            <td>1</td>
            <td>Hors établissement, 'oricet' sur france-ioi.org</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-51--4'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Autre : 14 élèves</h2>
            <i>Score maximum atteignable : 108</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-51--4' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-51--4' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>108</td><td>1</td></tr><tr><td>97</td><td>3</td></tr><tr><td>92</td><td>4</td></tr><tr><td>91</td><td>5</td></tr><tr><td>87</td><td>7</td></tr><tr><td>84</td><td>8</td></tr><tr><td>76</td><td>9</td></tr><tr><td>70</td><td>10</td></tr><tr><td>55</td><td>11</td></tr><tr><td>54</td><td>12</td></tr><tr><td>50</td><td>13</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 3 premiers ayant un score supérieur ou égal à 95 sont listés ci-dessous.
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
            <td>Camille L.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'versipellis' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Sébastien T.</td>
            <td>108</td>
            <td>1</td>
            <td>Hors établissement, 'arkandias' sur france-ioi.org</td>
         </tr>
         <tr>
            <td>Matthieu S.</td>
            <td>97</td>
            <td>3</td>
            <td>Hors établissement, 'squall' sur france-ioi.org</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div></div>
