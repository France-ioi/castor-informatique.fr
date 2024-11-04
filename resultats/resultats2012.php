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


      <div id="results">
         <ul>
                        <li><a href="#tabs-6">6ème-5ème</a></li>
                        <li><a href="#tabs-7">4ème-3ème</a></li>
                        <li><a href="#tabs-8">Seconde</a></li>
                        <li><a href="#tabs-9">Première-Terminale</a></li>
                     </ul>
                  <div id="tabs-6">
            <table width=650>
                  <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème-5ème : 43647 élèves</h2>
            <i>Score maximum atteignable : 182</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id="graph-6" style="width:480px;height:320px"></div>
         </td>
         <td>
            <div id="ranks-6" style="height:300px;width:120px;overflow-y:scroll">
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr>
                           <tr><td>182</td><td>1</td></tr>
                           <tr><td>178</td><td>97</td></tr>
                           <tr><td>174</td><td>103</td></tr>
                           <tr><td>173</td><td>164</td></tr>
                           <tr><td>170</td><td>168</td></tr>
                           <tr><td>167</td><td>382</td></tr>
                           <tr><td>166</td><td>384</td></tr>
                           <tr><td>165</td><td>476</td></tr>
                           <tr><td>162</td><td>478</td></tr>
                           <tr><td>161</td><td>669</td></tr>
                           <tr><td>159</td><td>678</td></tr>
                           <tr><td>158</td><td>679</td></tr>
                           <tr><td>157</td><td>997</td></tr>
                           <tr><td>156</td><td>998</td></tr>
                           <tr><td>155</td><td>999</td></tr>
                           <tr><td>154</td><td>1000</td></tr>
                           <tr><td>153</td><td>1280</td></tr>
                           <tr><td>152</td><td>1294</td></tr>
                           <tr><td>150</td><td>1296</td></tr>
                           <tr><td>149</td><td>1575</td></tr>
                           <tr><td>148</td><td>1608</td></tr>
                           <tr><td>147</td><td>1609</td></tr>
                           <tr><td>146</td><td>1610</td></tr>
                           <tr><td>145</td><td>2109</td></tr>
                           <tr><td>144</td><td>2135</td></tr>
                           <tr><td>143</td><td>2140</td></tr>
                           <tr><td>142</td><td>2147</td></tr>
                           <tr><td>141</td><td>2634</td></tr>
                           <tr><td>140</td><td>2666</td></tr>
                           <tr><td>139</td><td>2675</td></tr>
                           <tr><td>138</td><td>2678</td></tr>
                           <tr><td>137</td><td>3253</td></tr>
                           <tr><td>136</td><td>3305</td></tr>
                           <tr><td>135</td><td>3310</td></tr>
                           <tr><td>134</td><td>3311</td></tr>
                           <tr><td>133</td><td>4058</td></tr>
                           <tr><td>132</td><td>4096</td></tr>
                           <tr><td>131</td><td>4110</td></tr>
                           <tr><td>130</td><td>4126</td></tr>
                           <tr><td>129</td><td>4851</td></tr>
                           <tr><td>128</td><td>4917</td></tr>
                           <tr><td>127</td><td>4938</td></tr>
                           <tr><td>126</td><td>4946</td></tr>
                           <tr><td>125</td><td>5792</td></tr>
                           <tr><td>124</td><td>5890</td></tr>
                           <tr><td>123</td><td>5910</td></tr>
                           <tr><td>122</td><td>5929</td></tr>
                           <tr><td>121</td><td>6993</td></tr>
                           <tr><td>120</td><td>7077</td></tr>
                           <tr><td>119</td><td>7103</td></tr>
                           <tr><td>118</td><td>7123</td></tr>
                           <tr><td>117</td><td>8179</td></tr>
                           <tr><td>116</td><td>8305</td></tr>
                           <tr><td>115</td><td>8374</td></tr>
                           <tr><td>114</td><td>8390</td></tr>
                           <tr><td>113</td><td>9553</td></tr>
                           <tr><td>112</td><td>9692</td></tr>
                           <tr><td>111</td><td>9750</td></tr>
                           <tr><td>110</td><td>9790</td></tr>
                           <tr><td>109</td><td>11266</td></tr>
                           <tr><td>108</td><td>11426</td></tr>
                           <tr><td>107</td><td>11498</td></tr>
                           <tr><td>106</td><td>11537</td></tr>
                           <tr><td>105</td><td>12898</td></tr>
                           <tr><td>104</td><td>13037</td></tr>
                           <tr><td>103</td><td>13157</td></tr>
                           <tr><td>102</td><td>13196</td></tr>
                           <tr><td>101</td><td>14724</td></tr>
                           <tr><td>100</td><td>14879</td></tr>
                           <tr><td>99</td><td>14988</td></tr>
                           <tr><td>98</td><td>15034</td></tr>
                           <tr><td>97</td><td>16726</td></tr>
                           <tr><td>96</td><td>16880</td></tr>
                           <tr><td>95</td><td>16993</td></tr>
                           <tr><td>94</td><td>17057</td></tr>
                           <tr><td>93</td><td>18839</td></tr>
                           <tr><td>92</td><td>19038</td></tr>
                           <tr><td>91</td><td>19177</td></tr>
                           <tr><td>90</td><td>19252</td></tr>
                           <tr><td>89</td><td>21064</td></tr>
                           <tr><td>88</td><td>21283</td></tr>
                           <tr><td>87</td><td>21429</td></tr>
                           <tr><td>86</td><td>21485</td></tr>
                           <tr><td>85</td><td>23310</td></tr>
                           <tr><td>84</td><td>23470</td></tr>
                           <tr><td>83</td><td>23616</td></tr>
                           <tr><td>82</td><td>23690</td></tr>
                           <tr><td>81</td><td>25681</td></tr>
                           <tr><td>80</td><td>25887</td></tr>
                           <tr><td>79</td><td>26054</td></tr>
                           <tr><td>78</td><td>26144</td></tr>
                           <tr><td>77</td><td>27880</td></tr>
                           <tr><td>76</td><td>28062</td></tr>
                           <tr><td>75</td><td>28240</td></tr>
                           <tr><td>74</td><td>28324</td></tr>
                           <tr><td>73</td><td>30138</td></tr>
                           <tr><td>72</td><td>30292</td></tr>
                           <tr><td>71</td><td>30474</td></tr>
                           <tr><td>70</td><td>30565</td></tr>
                           <tr><td>69</td><td>32368</td></tr>
                           <tr><td>68</td><td>32526</td></tr>
                           <tr><td>67</td><td>32668</td></tr>
                           <tr><td>66</td><td>32734</td></tr>
                           <tr><td>65</td><td>34312</td></tr>
                           <tr><td>64</td><td>34424</td></tr>
                           <tr><td>63</td><td>34590</td></tr>
                           <tr><td>62</td><td>34665</td></tr>
                           <tr><td>61</td><td>36178</td></tr>
                           <tr><td>60</td><td>36308</td></tr>
                           <tr><td>59</td><td>36460</td></tr>
                           <tr><td>58</td><td>36536</td></tr>
                           <tr><td>57</td><td>37861</td></tr>
                           <tr><td>56</td><td>37962</td></tr>
                           <tr><td>55</td><td>38099</td></tr>
                           <tr><td>54</td><td>38165</td></tr>
                           <tr><td>53</td><td>39314</td></tr>
                           <tr><td>52</td><td>39420</td></tr>
                           <tr><td>51</td><td>39526</td></tr>
                           <tr><td>50</td><td>39603</td></tr>
                           <tr><td>49</td><td>40505</td></tr>
                           <tr><td>48</td><td>40616</td></tr>
                           <tr><td>47</td><td>40727</td></tr>
                           <tr><td>46</td><td>40771</td></tr>
                           <tr><td>45</td><td>41518</td></tr>
                           <tr><td>44</td><td>41574</td></tr>
                           <tr><td>43</td><td>41642</td></tr>
                           <tr><td>42</td><td>41686</td></tr>
                           <tr><td>41</td><td>42197</td></tr>
                           <tr><td>40</td><td>42236</td></tr>
                           <tr><td>39</td><td>42290</td></tr>
                           <tr><td>38</td><td>42325</td></tr>
                           <tr><td>37</td><td>42742</td></tr>
                           <tr><td>36</td><td>42766</td></tr>
                           <tr><td>35</td><td>42811</td></tr>
                           <tr><td>34</td><td>42826</td></tr>
                           <tr><td>33</td><td>43144</td></tr>
                           <tr><td>32</td><td>43158</td></tr>
                           <tr><td>31</td><td>43183</td></tr>
                           <tr><td>30</td><td>43198</td></tr>
                           <tr><td>29</td><td>43399</td></tr>
                           <tr><td>28</td><td>43404</td></tr>
                           <tr><td>27</td><td>43421</td></tr>
                           <tr><td>26</td><td>43424</td></tr>
                           <tr><td>25</td><td>43518</td></tr>
                           <tr><td>24</td><td>43523</td></tr>
                           <tr><td>23</td><td>43531</td></tr>
                           <tr><td>22</td><td>43533</td></tr>
                           <tr><td>21</td><td>43621</td></tr>
                           <tr><td>20</td><td>43623</td></tr>
                           <tr><td>18</td><td>43628</td></tr>
                        </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 167 premiers ayant un score supérieur ou égal à 173 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style="height:200px;width:100%;overflow-y:scroll">
         <table border=1 cellspacing=0 style="width:100%">
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
                  <tr>
            <td>Aymeric C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Jean-Noel D.</td>
            <td>182</td>
            <td>1</td>
            <td>Jean Rostand, Balma</td>
         </tr>
                  <tr>
            <td>Sylvain F.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Dierot, Aubervilliers</td>
         </tr>
                  <tr>
            <td>Clément R.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Gustave Violet, Prades</td>
         </tr>
                  <tr>
            <td>Riad R.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Gustave Violet, Prades</td>
         </tr>
                  <tr>
            <td>Lise C.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français de Stavanger, Stavanger</td>
         </tr>
                  <tr>
            <td>Gabin D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
                  <tr>
            <td>Lucas B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
                  <tr>
            <td>Robin L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
                  <tr>
            <td>Eliot B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Etienne Dolet, Orléans</td>
         </tr>
                  <tr>
            <td>Adam A.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Etienne Dolet, Orléans</td>
         </tr>
                  <tr>
            <td>Felix L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Maxence V.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Marion C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Laurie B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Marie K.</td>
            <td>182</td>
            <td>1</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
                  <tr>
            <td>Pauline O.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Voltaire, Wattignies</td>
         </tr>
                  <tr>
            <td>Maxime D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Voltaire, Wattignies</td>
         </tr>
                  <tr>
            <td>Nathan C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Théo B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Pierre C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Eline D.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français International A.F.L.E.C. de Dubaï, Dubaï</td>
         </tr>
                  <tr>
            <td>Gwendal Z.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Julien G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Arno P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Joachim W.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Charles P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
                  <tr>
            <td>Hadrien R.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
                  <tr>
            <td>Leah D.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français de Prague, Praha 5</td>
         </tr>
                  <tr>
            <td>Rémi G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
                  <tr>
            <td>Mathieu L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
                  <tr>
            <td>Lucas D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
                  <tr>
            <td>Jules F.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Moulin, La Queue en Brie</td>
         </tr>
                  <tr>
            <td>Nathan L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Moulin, La Queue en Brie</td>
         </tr>
                  <tr>
            <td>Clément M.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
                  <tr>
            <td>Eddy D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
                  <tr>
            <td>Hana G.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français International A.F.L.E.C. de Dubaï, Dubaï</td>
         </tr>
                  <tr>
            <td>Hilal K.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fosses</td>
         </tr>
                  <tr>
            <td>Lou-Ann B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fosses</td>
         </tr>
                  <tr>
            <td>Axel V.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Descartes Montaignes, Lievin</td>
         </tr>
                  <tr>
            <td>Briag F.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Anatole France, Sartilly</td>
         </tr>
                  <tr>
            <td>Mag C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Diderot, Alès</td>
         </tr>
                  <tr>
            <td>Martin D.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
                  <tr>
            <td>Abigail A.</td>
            <td>182</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
                  <tr>
            <td>Timothée M.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse Cedex</td>
         </tr>
                  <tr>
            <td>Aymeric P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse Cedex</td>
         </tr>
                  <tr>
            <td>Clément D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
                  <tr>
            <td>Malory L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Adrien N.</td>
            <td>182</td>
            <td>1</td>
            <td>Institution Saint Joseph du Moncel, Pont Sainte Maxence</td>
         </tr>
                  <tr>
            <td>Théo P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Forlen, Saint-Louis</td>
         </tr>
                  <tr>
            <td>Léonard P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
                  <tr>
            <td>Vincent T.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
                  <tr>
            <td>Camille P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège le Parc Des Chaumes, Avallon</td>
         </tr>
                  <tr>
            <td>Axel G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège le Parc Des Chaumes, Avallon</td>
         </tr>
                  <tr>
            <td>Guillaume G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
                  <tr>
            <td>Léopold B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
                  <tr>
            <td>Alrick D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
                  <tr>
            <td>Pierre B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège J. PREVERT, Pontvallain</td>
         </tr>
                  <tr>
            <td>Sylvestre B.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège J. PREVERT, Pontvallain</td>
         </tr>
                  <tr>
            <td>Antoine H.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Dunois, Orleans</td>
         </tr>
                  <tr>
            <td>Marc H.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Dunois, Orleans</td>
         </tr>
                  <tr>
            <td>Elena J.</td>
            <td>182</td>
            <td>1</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
                  <tr>
            <td>Justin S.</td>
            <td>182</td>
            <td>1</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
                  <tr>
            <td>Eliot S.</td>
            <td>182</td>
            <td>1</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
                  <tr>
            <td>Kenji T.</td>
            <td>182</td>
            <td>1</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
                  <tr>
            <td>Aurélien D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
                  <tr>
            <td>Lucie R.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Triolo, Villeneuve d'Ascq</td>
         </tr>
                  <tr>
            <td>Salim K.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
                  <tr>
            <td>Charlotte L.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
                  <tr>
            <td>Elouan C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jean Monnet, Marigny</td>
         </tr>
                  <tr>
            <td>Cyrielle M.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
                  <tr>
            <td>Audric G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège G.Sand, Bethune</td>
         </tr>
                  <tr>
            <td>Erwan M.</td>
            <td>182</td>
            <td>1</td>
            <td>clg P. de Ronsard, Saint-Maur</td>
         </tr>
                  <tr>
            <td>Théo D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Ariane, Guyancourt</td>
         </tr>
                  <tr>
            <td>Hugo P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Ariane, Guyancourt</td>
         </tr>
                  <tr>
            <td>Théo A.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fosses</td>
         </tr>
                  <tr>
            <td>Anna W.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fosses</td>
         </tr>
                  <tr>
            <td>Marius H.</td>
            <td>182</td>
            <td>1</td>
            <td>clg P. de Ronsard, Saint-Maur</td>
         </tr>
                  <tr>
            <td>Hugo D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Jules Michelet, Beauvais</td>
         </tr>
                  <tr>
            <td>Arthur A.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Pasteur, La Celle Saint Cloud</td>
         </tr>
                  <tr>
            <td>Nassim C.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louis Pasteur, La Celle Saint Cloud</td>
         </tr>
                  <tr>
            <td>Matthieu H.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège le Marin, Allonnes</td>
         </tr>
                  <tr>
            <td>Théo D.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège le Marin, Allonnes</td>
         </tr>
                  <tr>
            <td>Erwan F.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Thibault G.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Cécile P.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
                  <tr>
            <td>Hermine T.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
                  <tr>
            <td>Camille V.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Georges Duhamel, Herblay</td>
         </tr>
                  <tr>
            <td>Eva R.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Georges Duhamel, Herblay</td>
         </tr>
                  <tr>
            <td>Erty L.</td>
            <td>182</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnieres-sur-Seine</td>
         </tr>
                  <tr>
            <td>Mackiller T.</td>
            <td>182</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnieres-sur-Seine</td>
         </tr>
                  <tr>
            <td>Thomas A.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Pierre et Marie Curie, Neufchateau</td>
         </tr>
                  <tr>
            <td>Rémi D.</td>
            <td>182</td>
            <td>1</td>
            <td>Dorgeles, Paris</td>
         </tr>
                  <tr>
            <td>Emile G.</td>
            <td>182</td>
            <td>1</td>
            <td>Dorgeles, Paris</td>
         </tr>
                  <tr>
            <td>Syndel W.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Brice J.</td>
            <td>182</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
                  <tr>
            <td>Teddy W.</td>
            <td>178</td>
            <td>97</td>
            <td>Civ, Sophia Antipolis</td>
         </tr>
                  <tr>
            <td>Xavier C.</td>
            <td>178</td>
            <td>97</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
                  <tr>
            <td>Lorynn M.</td>
            <td>178</td>
            <td>97</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
                  <tr>
            <td>Anthony A.</td>
            <td>178</td>
            <td>97</td>
            <td>Romain Rolland, Hersin-Coupigny</td>
         </tr>
                  <tr>
            <td>Jules D.</td>
            <td>178</td>
            <td>97</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
                  <tr>
            <td>Matias P.</td>
            <td>178</td>
            <td>97</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
                  <tr>
            <td>Julien M.</td>
            <td>174</td>
            <td>103</td>
            <td>clg P. de Ronsard, Saint-Maur</td>
         </tr>
                  <tr>
            <td>Charles L.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Elsa Triolet, Paris</td>
         </tr>
                  <tr>
            <td>Mohamed D.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Elsa Triolet, Paris</td>
         </tr>
                  <tr>
            <td>Rayane T.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
                  <tr>
            <td>Matteo B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
                  <tr>
            <td>Romain S.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Charles Péguy, Wittelsheim</td>
         </tr>
                  <tr>
            <td>Gregory L.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Charles Péguy, Wittelsheim</td>
         </tr>
                  <tr>
            <td>Guilhem M.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
                  <tr>
            <td>Rémi R.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
                  <tr>
            <td>Hélie B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
                  <tr>
            <td>Julien G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
                  <tr>
            <td>Antoine M.</td>
            <td>174</td>
            <td>103</td>
            <td>Michel Vignaud, Morangis</td>
         </tr>
                  <tr>
            <td>Matéo F.</td>
            <td>174</td>
            <td>103</td>
            <td>Michel Vignaud, Morangis</td>
         </tr>
                  <tr>
            <td>Antonin M.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
                  <tr>
            <td>Victor M.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
                  <tr>
            <td>Juliette G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Quentin G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Onslow, Lezoux</td>
         </tr>
                  <tr>
            <td>Coralie F.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Onslow, Lezoux</td>
         </tr>
                  <tr>
            <td>Thomas S.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
                  <tr>
            <td>Timothée D.</td>
            <td>174</td>
            <td>103</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
                  <tr>
            <td>Hélène H.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
                  <tr>
            <td>Yourko S.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Saint Exupéry, Bourges</td>
         </tr>
                  <tr>
            <td>Ihab E.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Saint Exupéry, Bourges</td>
         </tr>
                  <tr>
            <td>Nicolas C.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
                  <tr>
            <td>Nelson P.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
                  <tr>
            <td>Sarah T.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Adèle B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
                  <tr>
            <td>Martin G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
                  <tr>
            <td>Guillaume G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
                  <tr>
            <td>Adam B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
                  <tr>
            <td>Antonin F.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
                  <tr>
            <td>Dylan D.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Samuel T.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Cyrielle N.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Pierre-Gilles de Gennes, Petite Foret</td>
         </tr>
                  <tr>
            <td>Nawal A.</td>
            <td>174</td>
            <td>103</td>
            <td>École Européenne de Strasbourg, Strasbourg</td>
         </tr>
                  <tr>
            <td>Lucie D.</td>
            <td>174</td>
            <td>103</td>
            <td>École Européenne de Strasbourg, Strasbourg</td>
         </tr>
                  <tr>
            <td>Jaime A.</td>
            <td>174</td>
            <td>103</td>
            <td>École Européenne de Strasbourg, Strasbourg</td>
         </tr>
                  <tr>
            <td>Hugo B.</td>
            <td>174</td>
            <td>103</td>
            <td>École Européenne de Strasbourg, Strasbourg</td>
         </tr>
                  <tr>
            <td>Thomas D.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jacques Prévert, Domfront</td>
         </tr>
                  <tr>
            <td>Jocelyn L.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jacques Prévert, Domfront</td>
         </tr>
                  <tr>
            <td>Arthur G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collègelouise Michel, Ganges</td>
         </tr>
                  <tr>
            <td>Alyosha R.</td>
            <td>174</td>
            <td>103</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
                  <tr>
            <td>Julia R.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Marc D.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Teo L.</td>
            <td>174</td>
            <td>103</td>
            <td>Nicolas Tronchon, St Soupplets</td>
         </tr>
                  <tr>
            <td>Félix L.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Claude Massé, Ambares et Lagrave</td>
         </tr>
                  <tr>
            <td>Tabatha D.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jean Moulin, Saint Amand Montrond</td>
         </tr>
                  <tr>
            <td>Blandine G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jean Moulin, Saint Amand Montrond</td>
         </tr>
                  <tr>
            <td>Alizée A.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
                  <tr>
            <td>Camille A.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
                  <tr>
            <td>Camille G.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Julia S.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Tristan L.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Louis Pasteur, La Celle Saint Cloud</td>
         </tr>
                  <tr>
            <td>Remy B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
                  <tr>
            <td>Lorinda H.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jean Moulin, Gacé</td>
         </tr>
                  <tr>
            <td>Lorna B.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Jean Moulin, Gacé</td>
         </tr>
                  <tr>
            <td>Pauline M.</td>
            <td>174</td>
            <td>103</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnieres-sur-Seine</td>
         </tr>
                  <tr>
            <td>Eugenie H.</td>
            <td>174</td>
            <td>103</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnieres-sur-Seine</td>
         </tr>
                  <tr>
            <td>Juliette E.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Gérard Philipe, Massy</td>
         </tr>
                  <tr>
            <td>Maryse R.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Gérard Philipe, Massy</td>
         </tr>
                  <tr>
            <td>Chr A.</td>
            <td>174</td>
            <td>103</td>
            <td>Collège Alexandre Stellio, Les Anses d'Arlet</td>
         </tr>
                  <tr>
            <td>Morgane C.</td>
            <td>173</td>
            <td>164</td>
            <td>Collège Pasteur, Yvré l'Evêque</td>
         </tr>
                  <tr>
            <td>Nina L.</td>
            <td>173</td>
            <td>164</td>
            <td>Collège Pasteur, Yvré l'Evêque</td>
         </tr>
                  <tr>
            <td>Lucien B.</td>
            <td>173</td>
            <td>164</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
                  <tr>
            <td>Julien L.</td>
            <td>173</td>
            <td>164</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
                  </table>
         </div>
         </td>
      </tr>
                  </table>
         </div>
                  <div id="tabs-7">
            <table width=650>
                  <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème-3ème : 32017 élèves</h2>
            <i>Score maximum atteignable : 176</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id="graph-7" style="width:480px;height:320px"></div>
         </td>
         <td>
            <div id="ranks-7" style="height:300px;width:120px;overflow-y:scroll">
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr>
                           <tr><td>176</td><td>1</td></tr>
                           <tr><td>172</td><td>22</td></tr>
                           <tr><td>168</td><td>24</td></tr>
                           <tr><td>165</td><td>35</td></tr>
                           <tr><td>164</td><td>37</td></tr>
                           <tr><td>160</td><td>50</td></tr>
                           <tr><td>156</td><td>116</td></tr>
                           <tr><td>154</td><td>161</td></tr>
                           <tr><td>152</td><td>164</td></tr>
                           <tr><td>151</td><td>218</td></tr>
                           <tr><td>148</td><td>224</td></tr>
                           <tr><td>147</td><td>372</td></tr>
                           <tr><td>144</td><td>378</td></tr>
                           <tr><td>143</td><td>560</td></tr>
                           <tr><td>142</td><td>564</td></tr>
                           <tr><td>141</td><td>567</td></tr>
                           <tr><td>140</td><td>573</td></tr>
                           <tr><td>139</td><td>748</td></tr>
                           <tr><td>138</td><td>763</td></tr>
                           <tr><td>137</td><td>775</td></tr>
                           <tr><td>136</td><td>779</td></tr>
                           <tr><td>135</td><td>1020</td></tr>
                           <tr><td>134</td><td>1040</td></tr>
                           <tr><td>133</td><td>1049</td></tr>
                           <tr><td>132</td><td>1066</td></tr>
                           <tr><td>131</td><td>1396</td></tr>
                           <tr><td>130</td><td>1422</td></tr>
                           <tr><td>129</td><td>1446</td></tr>
                           <tr><td>128</td><td>1454</td></tr>
                           <tr><td>127</td><td>1834</td></tr>
                           <tr><td>126</td><td>1865</td></tr>
                           <tr><td>125</td><td>1877</td></tr>
                           <tr><td>124</td><td>1899</td></tr>
                           <tr><td>123</td><td>2306</td></tr>
                           <tr><td>122</td><td>2360</td></tr>
                           <tr><td>121</td><td>2390</td></tr>
                           <tr><td>120</td><td>2419</td></tr>
                           <tr><td>119</td><td>3014</td></tr>
                           <tr><td>118</td><td>3078</td></tr>
                           <tr><td>117</td><td>3129</td></tr>
                           <tr><td>116</td><td>3168</td></tr>
                           <tr><td>115</td><td>3812</td></tr>
                           <tr><td>114</td><td>3906</td></tr>
                           <tr><td>113</td><td>3978</td></tr>
                           <tr><td>112</td><td>4026</td></tr>
                           <tr><td>111</td><td>4730</td></tr>
                           <tr><td>110</td><td>4834</td></tr>
                           <tr><td>109</td><td>4908</td></tr>
                           <tr><td>108</td><td>4981</td></tr>
                           <tr><td>107</td><td>5840</td></tr>
                           <tr><td>106</td><td>5977</td></tr>
                           <tr><td>105</td><td>6085</td></tr>
                           <tr><td>104</td><td>6154</td></tr>
                           <tr><td>103</td><td>7040</td></tr>
                           <tr><td>102</td><td>7177</td></tr>
                           <tr><td>101</td><td>7265</td></tr>
                           <tr><td>100</td><td>7376</td></tr>
                           <tr><td>99</td><td>8465</td></tr>
                           <tr><td>98</td><td>8622</td></tr>
                           <tr><td>97</td><td>8757</td></tr>
                           <tr><td>96</td><td>8868</td></tr>
                           <tr><td>95</td><td>10119</td></tr>
                           <tr><td>94</td><td>10271</td></tr>
                           <tr><td>93</td><td>10421</td></tr>
                           <tr><td>92</td><td>10539</td></tr>
                           <tr><td>91</td><td>11759</td></tr>
                           <tr><td>90</td><td>11926</td></tr>
                           <tr><td>89</td><td>12072</td></tr>
                           <tr><td>88</td><td>12180</td></tr>
                           <tr><td>87</td><td>13510</td></tr>
                           <tr><td>86</td><td>13685</td></tr>
                           <tr><td>85</td><td>13838</td></tr>
                           <tr><td>84</td><td>13942</td></tr>
                           <tr><td>83</td><td>15307</td></tr>
                           <tr><td>82</td><td>15486</td></tr>
                           <tr><td>81</td><td>15651</td></tr>
                           <tr><td>80</td><td>15754</td></tr>
                           <tr><td>79</td><td>17101</td></tr>
                           <tr><td>78</td><td>17266</td></tr>
                           <tr><td>77</td><td>17449</td></tr>
                           <tr><td>76</td><td>17554</td></tr>
                           <tr><td>75</td><td>18941</td></tr>
                           <tr><td>74</td><td>19123</td></tr>
                           <tr><td>73</td><td>19275</td></tr>
                           <tr><td>72</td><td>19357</td></tr>
                           <tr><td>71</td><td>20742</td></tr>
                           <tr><td>70</td><td>20901</td></tr>
                           <tr><td>69</td><td>21041</td></tr>
                           <tr><td>68</td><td>21143</td></tr>
                           <tr><td>67</td><td>22493</td></tr>
                           <tr><td>66</td><td>22627</td></tr>
                           <tr><td>65</td><td>22745</td></tr>
                           <tr><td>64</td><td>22843</td></tr>
                           <tr><td>63</td><td>24109</td></tr>
                           <tr><td>62</td><td>24215</td></tr>
                           <tr><td>61</td><td>24323</td></tr>
                           <tr><td>60</td><td>24388</td></tr>
                           <tr><td>59</td><td>25629</td></tr>
                           <tr><td>58</td><td>25724</td></tr>
                           <tr><td>57</td><td>25831</td></tr>
                           <tr><td>56</td><td>25897</td></tr>
                           <tr><td>55</td><td>27045</td></tr>
                           <tr><td>54</td><td>27138</td></tr>
                           <tr><td>53</td><td>27212</td></tr>
                           <tr><td>52</td><td>27268</td></tr>
                           <tr><td>51</td><td>28214</td></tr>
                           <tr><td>50</td><td>28303</td></tr>
                           <tr><td>49</td><td>28385</td></tr>
                           <tr><td>48</td><td>28483</td></tr>
                           <tr><td>47</td><td>29352</td></tr>
                           <tr><td>46</td><td>29415</td></tr>
                           <tr><td>45</td><td>29466</td></tr>
                           <tr><td>44</td><td>29513</td></tr>
                           <tr><td>43</td><td>30168</td></tr>
                           <tr><td>42</td><td>30209</td></tr>
                           <tr><td>41</td><td>30242</td></tr>
                           <tr><td>40</td><td>30278</td></tr>
                           <tr><td>39</td><td>30790</td></tr>
                           <tr><td>38</td><td>30827</td></tr>
                           <tr><td>37</td><td>30843</td></tr>
                           <tr><td>36</td><td>30862</td></tr>
                           <tr><td>35</td><td>31239</td></tr>
                           <tr><td>34</td><td>31256</td></tr>
                           <tr><td>33</td><td>31264</td></tr>
                           <tr><td>32</td><td>31281</td></tr>
                           <tr><td>31</td><td>31531</td></tr>
                           <tr><td>30</td><td>31550</td></tr>
                           <tr><td>29</td><td>31564</td></tr>
                           <tr><td>28</td><td>31575</td></tr>
                           <tr><td>27</td><td>31774</td></tr>
                           <tr><td>26</td><td>31776</td></tr>
                           <tr><td>25</td><td>31778</td></tr>
                           <tr><td>24</td><td>31788</td></tr>
                           <tr><td>22</td><td>31914</td></tr>
                           <tr><td>21</td><td>31917</td></tr>
                           <tr><td>20</td><td>31918</td></tr>
                           <tr><td>19</td><td>31997</td></tr>
                           <tr><td>17</td><td>31998</td></tr>
                           <tr><td>16</td><td>32002</td></tr>
                        </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 163 premiers ayant un score supérieur ou égal à 154 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style="height:200px;width:100%;overflow-y:scroll">
         <table border=1 cellspacing=0 style="width:100%">
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
                  <tr>
            <td>Aimeric J.</td>
            <td>176</td>
            <td>1</td>
            <td>Lycée Louis Massignon, Abu Dhabi</td>
         </tr>
                  <tr>
            <td>Jérémy A.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
                  <tr>
            <td>Mariana C.</td>
            <td>176</td>
            <td>1</td>
            <td>Lycée Français de Porto, Porto</td>
         </tr>
                  <tr>
            <td>Simon G.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
                  <tr>
            <td>Arthur R.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
                  <tr>
            <td>Chanelle M.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Jacques Monod, Caen</td>
         </tr>
                  <tr>
            <td>Cléa M.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
                  <tr>
            <td>Mathilde J.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
                  <tr>
            <td>Alexis L.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
                  <tr>
            <td>Renan B.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
                  <tr>
            <td>Nicolas P.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Adrien J.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Kesson W.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
                  <tr>
            <td>Léo D.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
                  <tr>
            <td>Dylan A.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Maxence L.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Louis Pasteur, La Celle Saint Cloud</td>
         </tr>
                  <tr>
            <td>Rim H.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Triolo, Villeneuve d'Ascq</td>
         </tr>
                  <tr>
            <td>Camil L.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Triolo, Villeneuve d'Ascq</td>
         </tr>
                  <tr>
            <td>Pierre L.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Jacques Grüber, Colombey les Belles</td>
         </tr>
                  <tr>
            <td>Maëlle V.</td>
            <td>176</td>
            <td>1</td>
            <td>Collège Jacques Grüber, Colombey les Belles</td>
         </tr>
                  <tr>
            <td>Álvaro A.</td>
            <td>176</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
                  <tr>
            <td>Arthur E.</td>
            <td>172</td>
            <td>22</td>
            <td>Fleming, Orsay</td>
         </tr>
                  <tr>
            <td>Simon D.</td>
            <td>172</td>
            <td>22</td>
            <td>Fleming, Orsay</td>
         </tr>
                  <tr>
            <td>Martin T.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
                  <tr>
            <td>Jérôme K.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
                  <tr>
            <td>Yann R.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège G.Sand, Bethune</td>
         </tr>
                  <tr>
            <td>Kevin J.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège G.Sand, Bethune</td>
         </tr>
                  <tr>
            <td>Mathilde B.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
                  <tr>
            <td>Lison C.</td>
            <td>168</td>
            <td>24</td>
            <td>Romain Rolland, Hersin-Coupigny</td>
         </tr>
                  <tr>
            <td>Camille A.</td>
            <td>168</td>
            <td>24</td>
            <td>clg P. de Ronsard, Saint-Maur</td>
         </tr>
                  <tr>
            <td>Lucas C.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Baptiste H.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>William L.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Pasteur, Yvré l'Evêque</td>
         </tr>
                  <tr>
            <td>Valentin G.</td>
            <td>168</td>
            <td>24</td>
            <td>Collège Pasteur, Yvré l'Evêque</td>
         </tr>
                  <tr>
            <td>Sébastien F.</td>
            <td>165</td>
            <td>35</td>
            <td>Collège Ariane, Guyancourt</td>
         </tr>
                  <tr>
            <td>Samy A.</td>
            <td>165</td>
            <td>35</td>
            <td>Collège Ariane, Guyancourt</td>
         </tr>
                  <tr>
            <td>Alban V.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
                  <tr>
            <td>Dorian V.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
                  <tr>
            <td>Corentin R.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
                  <tr>
            <td>Benjamin T.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Grégoire B.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Viviane R.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Bastien J.</td>
            <td>164</td>
            <td>37</td>
            <td>Georges Pompidou, Champtoceaux</td>
         </tr>
                  <tr>
            <td>Emile M.</td>
            <td>164</td>
            <td>37</td>
            <td>Georges Pompidou, Champtoceaux</td>
         </tr>
                  <tr>
            <td>Cécile G.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
                  <tr>
            <td>Francois W.</td>
            <td>164</td>
            <td>37</td>
            <td>Romain Rolland, Hersin-Coupigny</td>
         </tr>
                  <tr>
            <td>Adrien J.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Yanis A.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège la Vallée, Avon</td>
         </tr>
                  <tr>
            <td>Pierre L.</td>
            <td>164</td>
            <td>37</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
                  <tr>
            <td>Luc L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
                  <tr>
            <td>Corentin M.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Stendhal, Besancon</td>
         </tr>
                  <tr>
            <td>Nathan M.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Stendhal, Besancon</td>
         </tr>
                  <tr>
            <td>Naoki K.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Francais de Berlin, Berlin</td>
         </tr>
                  <tr>
            <td>Charlotte M.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Francais de Berlin, Berlin</td>
         </tr>
                  <tr>
            <td>Corentin B.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
                  <tr>
            <td>Christopher H.</td>
            <td>160</td>
            <td>50</td>
            <td>Cimf, Montréal (Québec)</td>
         </tr>
                  <tr>
            <td>Théo F.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Corentin P.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Xu Z.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Pasteur, Créteil</td>
         </tr>
                  <tr>
            <td>Alice R.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
                  <tr>
            <td>Rita D.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Français de Porto, Porto</td>
         </tr>
                  <tr>
            <td>Tom G.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de Bourtzwiller, Mulhouse</td>
         </tr>
                  <tr>
            <td>Aurélien R.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de Bourtzwiller, Mulhouse</td>
         </tr>
                  <tr>
            <td>Robin S.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
                  <tr>
            <td>Thomas L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
                  <tr>
            <td>Arthur R.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de Heiligenstein2, Barr</td>
         </tr>
                  <tr>
            <td>Arthur M.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de Heiligenstein2, Barr</td>
         </tr>
                  <tr>
            <td>Antoine G.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Marteroy, Vesoul</td>
         </tr>
                  <tr>
            <td>Paul T.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Marteroy, Vesoul</td>
         </tr>
                  <tr>
            <td>Mathieu S.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
                  <tr>
            <td>Théo S.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège du Houlme, Briouze</td>
         </tr>
                  <tr>
            <td>Thomas A.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège du Houlme, Briouze</td>
         </tr>
                  <tr>
            <td>Gurvan L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège F.R. DE CHATEAUBRIAND, Combourg</td>
         </tr>
                  <tr>
            <td>Allan C.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège F.R. DE CHATEAUBRIAND, Combourg</td>
         </tr>
                  <tr>
            <td>Mathis H.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
                  <tr>
            <td>Luc P.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Pierre-Gilles de Gennes, Petite Foret</td>
         </tr>
                  <tr>
            <td>Noemie L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Grigory N.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Pierre M.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
                  <tr>
            <td>Rachel L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
                  <tr>
            <td>Chloé H.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
                  <tr>
            <td>Delfin K.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Monge, Beaune</td>
         </tr>
                  <tr>
            <td>Antonin F.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Monge, Beaune</td>
         </tr>
                  <tr>
            <td>Noémie T.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Quentin G.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Alexandre P.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Théo L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
                  <tr>
            <td>Corentin F.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
                  <tr>
            <td>Julien B.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
                  <tr>
            <td>Paul M.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Stendhal - Milan, Milano</td>
         </tr>
                  <tr>
            <td>Eliott G.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Stendhal - Milan, Milano</td>
         </tr>
                  <tr>
            <td>Thomas P.</td>
            <td>160</td>
            <td>50</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
                  <tr>
            <td>Ludovic D.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Ste Madeleine, Nantes</td>
         </tr>
                  <tr>
            <td>Aymeric L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
                  <tr>
            <td>Pierre G.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
                  <tr>
            <td>Hugo J.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
                  <tr>
            <td>Tom F.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège George Onslow, Lezoux</td>
         </tr>
                  <tr>
            <td>Ambre B.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
                  <tr>
            <td>Violette G.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
                  <tr>
            <td>Corentin P.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Privé Saint Pierre Sainte Anne, Yssingeaux</td>
         </tr>
                  <tr>
            <td>Quentin P.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Privé Saint Pierre Sainte Anne, Yssingeaux</td>
         </tr>
                  <tr>
            <td>Théo M.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Notre Dame du Mas, Le Bois d'Oingt</td>
         </tr>
                  <tr>
            <td>Enzo S.</td>
            <td>160</td>
            <td>50</td>
            <td>Le Hague-Dike, Beaumont-Hague</td>
         </tr>
                  <tr>
            <td>Jarod S.</td>
            <td>160</td>
            <td>50</td>
            <td>Le Hague-Dike, Beaumont-Hague</td>
         </tr>
                  <tr>
            <td>Marine M.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Stendhal - Milan, Milano</td>
         </tr>
                  <tr>
            <td>Eline B.</td>
            <td>160</td>
            <td>50</td>
            <td>Lycée Stendhal - Milan, Milano</td>
         </tr>
                  <tr>
            <td>Matéo S.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
                  <tr>
            <td>Mathieu R.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
                  <tr>
            <td>Mikaël L.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Samy J.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Arthur B.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
                  <tr>
            <td>Grégoire F.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
                  <tr>
            <td>Lucas D.</td>
            <td>160</td>
            <td>50</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
                  <tr>
            <td>Astrid J.</td>
            <td>160</td>
            <td>50</td>
            <td>Nicolas Tronchon, St Soupplets</td>
         </tr>
                  <tr>
            <td>Camille R.</td>
            <td>160</td>
            <td>50</td>
            <td>Nicolas Tronchon, St Soupplets</td>
         </tr>
                  <tr>
            <td>Gaïa L.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège de Bras Panon, Bras Panon</td>
         </tr>
                  <tr>
            <td>Léon A.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège de Bras Panon, Bras Panon</td>
         </tr>
                  <tr>
            <td>Oriane G.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Johanna S.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Jean T.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Vincent D.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Maxime L.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
                  <tr>
            <td>Enzo H.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Etienne Dolet, Orléans</td>
         </tr>
                  <tr>
            <td>Maxime F.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Etienne Dolet, Orléans</td>
         </tr>
                  <tr>
            <td>Corentin L.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
                  <tr>
            <td>Louis F.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
                  <tr>
            <td>Sarah B.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
                  <tr>
            <td>Lena L.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Clara P.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
                  <tr>
            <td>Théodore L.</td>
            <td>156</td>
            <td>116</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
                  <tr>
            <td>Sarah H.</td>
            <td>156</td>
            <td>116</td>
            <td>Lycée Français International A.F.L.E.C. de Dubaï, Dubaï</td>
         </tr>
                  <tr>
            <td>Simon S.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
                  <tr>
            <td>Nicolas D.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
                  <tr>
            <td>Louis D.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Justine M.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
                  <tr>
            <td>Audrey C.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
                  <tr>
            <td>Manon Q.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
                  <tr>
            <td>Thomas M.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Kilian S.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
                  <tr>
            <td>Manon L.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Grimaux, Rochefort</td>
         </tr>
                  <tr>
            <td>Ana R.</td>
            <td>156</td>
            <td>116</td>
            <td>Liceo Franco Hondureno, Tegucigalpa</td>
         </tr>
                  <tr>
            <td>Arnaud P.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Monge, Beaune</td>
         </tr>
                  <tr>
            <td>Victor W.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
                  <tr>
            <td>Elodie R.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Charles de Gaulle, Bu</td>
         </tr>
                  <tr>
            <td>Joshua M.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
                  <tr>
            <td>Rémi W.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
                  <tr>
            <td>Thomas L.</td>
            <td>156</td>
            <td>116</td>
            <td>Institution Saint Joseph du Moncel, Pont Sainte Maxence</td>
         </tr>
                  <tr>
            <td>Lucas I.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Privé Saint Pierre Sainte Anne, Yssingeaux</td>
         </tr>
                  <tr>
            <td>Sandrine A.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
                  <tr>
            <td>Théo V.</td>
            <td>156</td>
            <td>116</td>
            <td>Jean Rostand, Balma</td>
         </tr>
                  <tr>
            <td>Hugo R.</td>
            <td>156</td>
            <td>116</td>
            <td>Jean Rostand, Balma</td>
         </tr>
                  <tr>
            <td>Noémie B.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
                  <tr>
            <td>Matthieu G.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Emile Zola, Audun-le-Tiche</td>
         </tr>
                  <tr>
            <td>Arthur P.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Fantin Latour, Grenoble</td>
         </tr>
                  <tr>
            <td>Armel G.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Fantin Latour, Grenoble</td>
         </tr>
                  <tr>
            <td>Nathan S.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Fantin Latour, Grenoble</td>
         </tr>
                  <tr>
            <td>Isabelle M.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Sylvain P.</td>
            <td>156</td>
            <td>116</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
                  <tr>
            <td>Kevin M.</td>
            <td>156</td>
            <td>116</td>
            <td>Nicolas Tronchon, St Soupplets</td>
         </tr>
                  <tr>
            <td>Arthur P.</td>
            <td>156</td>
            <td>116</td>
            <td>Nicolas Tronchon, St Soupplets</td>
         </tr>
                  <tr>
            <td>Margaux L.</td>
            <td>154</td>
            <td>161</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
                  <tr>
            <td>Jade D.</td>
            <td>154</td>
            <td>161</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
                  <tr>
            <td>Amélie G.</td>
            <td>154</td>
            <td>161</td>
            <td>Collège St Pierre Chanel, Thionville</td>
         </tr>
                  </table>
         </div>
         </td>
      </tr>
                  </table>
         </div>
                  <div id="tabs-8">
            <table width=650>
                  <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde : 7266 élèves</h2>
            <i>Score maximum atteignable : 179</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id="graph-8" style="width:480px;height:320px"></div>
         </td>
         <td>
            <div id="ranks-8" style="height:300px;width:120px;overflow-y:scroll">
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr>
                           <tr><td>179</td><td>1</td></tr>
                           <tr><td>178</td><td>6</td></tr>
                           <tr><td>175</td><td>8</td></tr>
                           <tr><td>171</td><td>13</td></tr>
                           <tr><td>167</td><td>16</td></tr>
                           <tr><td>163</td><td>26</td></tr>
                           <tr><td>162</td><td>50</td></tr>
                           <tr><td>160</td><td>55</td></tr>
                           <tr><td>159</td><td>56</td></tr>
                           <tr><td>158</td><td>64</td></tr>
                           <tr><td>155</td><td>65</td></tr>
                           <tr><td>154</td><td>81</td></tr>
                           <tr><td>153</td><td>84</td></tr>
                           <tr><td>152</td><td>85</td></tr>
                           <tr><td>151</td><td>89</td></tr>
                           <tr><td>150</td><td>129</td></tr>
                           <tr><td>149</td><td>133</td></tr>
                           <tr><td>147</td><td>134</td></tr>
                           <tr><td>146</td><td>163</td></tr>
                           <tr><td>145</td><td>169</td></tr>
                           <tr><td>143</td><td>176</td></tr>
                           <tr><td>142</td><td>205</td></tr>
                           <tr><td>141</td><td>219</td></tr>
                           <tr><td>140</td><td>222</td></tr>
                           <tr><td>139</td><td>224</td></tr>
                           <tr><td>138</td><td>298</td></tr>
                           <tr><td>137</td><td>306</td></tr>
                           <tr><td>136</td><td>315</td></tr>
                           <tr><td>135</td><td>320</td></tr>
                           <tr><td>134</td><td>385</td></tr>
                           <tr><td>133</td><td>400</td></tr>
                           <tr><td>132</td><td>411</td></tr>
                           <tr><td>131</td><td>416</td></tr>
                           <tr><td>130</td><td>491</td></tr>
                           <tr><td>129</td><td>525</td></tr>
                           <tr><td>128</td><td>539</td></tr>
                           <tr><td>127</td><td>544</td></tr>
                           <tr><td>126</td><td>663</td></tr>
                           <tr><td>125</td><td>692</td></tr>
                           <tr><td>124</td><td>706</td></tr>
                           <tr><td>123</td><td>726</td></tr>
                           <tr><td>122</td><td>830</td></tr>
                           <tr><td>121</td><td>877</td></tr>
                           <tr><td>120</td><td>905</td></tr>
                           <tr><td>119</td><td>923</td></tr>
                           <tr><td>118</td><td>1041</td></tr>
                           <tr><td>117</td><td>1079</td></tr>
                           <tr><td>116</td><td>1108</td></tr>
                           <tr><td>115</td><td>1131</td></tr>
                           <tr><td>114</td><td>1238</td></tr>
                           <tr><td>113</td><td>1294</td></tr>
                           <tr><td>112</td><td>1330</td></tr>
                           <tr><td>111</td><td>1367</td></tr>
                           <tr><td>110</td><td>1462</td></tr>
                           <tr><td>109</td><td>1549</td></tr>
                           <tr><td>108</td><td>1592</td></tr>
                           <tr><td>107</td><td>1626</td></tr>
                           <tr><td>106</td><td>1764</td></tr>
                           <tr><td>105</td><td>1843</td></tr>
                           <tr><td>104</td><td>1882</td></tr>
                           <tr><td>103</td><td>1925</td></tr>
                           <tr><td>102</td><td>2075</td></tr>
                           <tr><td>101</td><td>2177</td></tr>
                           <tr><td>100</td><td>2245</td></tr>
                           <tr><td>99</td><td>2287</td></tr>
                           <tr><td>98</td><td>2435</td></tr>
                           <tr><td>97</td><td>2544</td></tr>
                           <tr><td>96</td><td>2618</td></tr>
                           <tr><td>95</td><td>2665</td></tr>
                           <tr><td>94</td><td>2805</td></tr>
                           <tr><td>93</td><td>2939</td></tr>
                           <tr><td>92</td><td>3007</td></tr>
                           <tr><td>91</td><td>3059</td></tr>
                           <tr><td>90</td><td>3173</td></tr>
                           <tr><td>89</td><td>3323</td></tr>
                           <tr><td>88</td><td>3418</td></tr>
                           <tr><td>87</td><td>3477</td></tr>
                           <tr><td>86</td><td>3614</td></tr>
                           <tr><td>85</td><td>3770</td></tr>
                           <tr><td>84</td><td>3856</td></tr>
                           <tr><td>83</td><td>3918</td></tr>
                           <tr><td>82</td><td>4077</td></tr>
                           <tr><td>81</td><td>4249</td></tr>
                           <tr><td>80</td><td>4334</td></tr>
                           <tr><td>79</td><td>4410</td></tr>
                           <tr><td>78</td><td>4534</td></tr>
                           <tr><td>77</td><td>4677</td></tr>
                           <tr><td>76</td><td>4759</td></tr>
                           <tr><td>75</td><td>4811</td></tr>
                           <tr><td>74</td><td>4938</td></tr>
                           <tr><td>73</td><td>5086</td></tr>
                           <tr><td>72</td><td>5168</td></tr>
                           <tr><td>71</td><td>5223</td></tr>
                           <tr><td>70</td><td>5339</td></tr>
                           <tr><td>69</td><td>5474</td></tr>
                           <tr><td>68</td><td>5578</td></tr>
                           <tr><td>67</td><td>5620</td></tr>
                           <tr><td>66</td><td>5719</td></tr>
                           <tr><td>65</td><td>5882</td></tr>
                           <tr><td>64</td><td>5966</td></tr>
                           <tr><td>63</td><td>5997</td></tr>
                           <tr><td>62</td><td>6072</td></tr>
                           <tr><td>61</td><td>6180</td></tr>
                           <tr><td>60</td><td>6254</td></tr>
                           <tr><td>59</td><td>6289</td></tr>
                           <tr><td>58</td><td>6338</td></tr>
                           <tr><td>57</td><td>6440</td></tr>
                           <tr><td>56</td><td>6510</td></tr>
                           <tr><td>55</td><td>6530</td></tr>
                           <tr><td>54</td><td>6569</td></tr>
                           <tr><td>53</td><td>6666</td></tr>
                           <tr><td>52</td><td>6729</td></tr>
                           <tr><td>51</td><td>6757</td></tr>
                           <tr><td>50</td><td>6781</td></tr>
                           <tr><td>49</td><td>6847</td></tr>
                           <tr><td>48</td><td>6912</td></tr>
                           <tr><td>47</td><td>6938</td></tr>
                           <tr><td>46</td><td>6966</td></tr>
                           <tr><td>45</td><td>6999</td></tr>
                           <tr><td>44</td><td>7033</td></tr>
                           <tr><td>43</td><td>7045</td></tr>
                           <tr><td>42</td><td>7056</td></tr>
                           <tr><td>41</td><td>7088</td></tr>
                           <tr><td>40</td><td>7123</td></tr>
                           <tr><td>39</td><td>7133</td></tr>
                           <tr><td>38</td><td>7144</td></tr>
                           <tr><td>37</td><td>7171</td></tr>
                           <tr><td>36</td><td>7188</td></tr>
                           <tr><td>35</td><td>7195</td></tr>
                           <tr><td>34</td><td>7197</td></tr>
                           <tr><td>33</td><td>7205</td></tr>
                           <tr><td>32</td><td>7219</td></tr>
                           <tr><td>31</td><td>7222</td></tr>
                           <tr><td>30</td><td>7223</td></tr>
                           <tr><td>29</td><td>7227</td></tr>
                           <tr><td>28</td><td>7242</td></tr>
                           <tr><td>26</td><td>7248</td></tr>
                           <tr><td>25</td><td>7252</td></tr>
                           <tr><td>24</td><td>7262</td></tr>
                           <tr><td>21</td><td>7263</td></tr>
                           <tr><td>17</td><td>7265</td></tr>
                        </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 49 premiers ayant un score supérieur ou égal à 163 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style="height:200px;width:100%;overflow-y:scroll">
         <table border=1 cellspacing=0 style="width:100%">
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
                  <tr>
            <td>Mathis P.</td>
            <td>179</td>
            <td>1</td>
            <td>Lycée Angellier, Dunkerque</td>
         </tr>
                  <tr>
            <td>Brice G.</td>
            <td>179</td>
            <td>1</td>
            <td>Civ, Sophia Antipolis</td>
         </tr>
                  <tr>
            <td>Melvin C.</td>
            <td>179</td>
            <td>1</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Benjamin L.</td>
            <td>179</td>
            <td>1</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Romain B.</td>
            <td>179</td>
            <td>1</td>
            <td>Lycée Amiral de Grasse, Grasse</td>
         </tr>
                  <tr>
            <td>Gaëtan B.</td>
            <td>178</td>
            <td>6</td>
            <td>Chevrollier, Angers</td>
         </tr>
                  <tr>
            <td>Vincent H.</td>
            <td>178</td>
            <td>6</td>
            <td>Chevrollier, Angers</td>
         </tr>
                  <tr>
            <td>Loic D.</td>
            <td>175</td>
            <td>8</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
                  <tr>
            <td>Titouan M.</td>
            <td>175</td>
            <td>8</td>
            <td>Lycée Atlantique, Luçon</td>
         </tr>
                  <tr>
            <td>Augustin S.</td>
            <td>175</td>
            <td>8</td>
            <td>Lycée Atlantique, Luçon</td>
         </tr>
                  <tr>
            <td>Baptiste M.</td>
            <td>175</td>
            <td>8</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
                  <tr>
            <td>Gwenc'hlan V.</td>
            <td>175</td>
            <td>8</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
                  <tr>
            <td>Simon C.</td>
            <td>171</td>
            <td>13</td>
            <td>Lycée Camille Claudel, Pontault Combault</td>
         </tr>
                  <tr>
            <td>Michaël N.</td>
            <td>171</td>
            <td>13</td>
            <td>Lycée Camille Claudel, Pontault Combault</td>
         </tr>
                  <tr>
            <td>Guillaume B.</td>
            <td>171</td>
            <td>13</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>William F.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
                  <tr>
            <td>Florian O.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée la Baronnerie, Saint Sylvain d'Anjou</td>
         </tr>
                  <tr>
            <td>Sergio T.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
                  <tr>
            <td>Fernando R.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
                  <tr>
            <td>Thibault B.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
                  <tr>
            <td>Adrien D.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
                  <tr>
            <td>Elies L.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
                  <tr>
            <td>Awéna R.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Valentin C.</td>
            <td>167</td>
            <td>16</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Juliette P.</td>
            <td>167</td>
            <td>16</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>Nathan P.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
                  <tr>
            <td>Thomas B.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
                  <tr>
            <td>Clara B.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée C-F Lebrun, Coutances</td>
         </tr>
                  <tr>
            <td>Julien D.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
                  <tr>
            <td>Quentin D.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
                  <tr>
            <td>Mathieu G.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Jules Ferry, Versailles</td>
         </tr>
                  <tr>
            <td>Rémi T.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Jules Ferry, Versailles</td>
         </tr>
                  <tr>
            <td>Wassim E.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
                  <tr>
            <td>Vincent L.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Levenez R.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
                  <tr>
            <td>Franek J.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
                  <tr>
            <td>Adrien K.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Grandmont, Tours</td>
         </tr>
                  <tr>
            <td>Corentin S.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Grandmont, Tours</td>
         </tr>
                  <tr>
            <td>Baptiste F.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
                  <tr>
            <td>Thomas L.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Jacques Callot, Vandoeuvre les Nancy</td>
         </tr>
                  <tr>
            <td>Merwan B.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Jacques Callot, Vandoeuvre les Nancy</td>
         </tr>
                  <tr>
            <td>Simon B.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée de Cornouaille, Quimper</td>
         </tr>
                  <tr>
            <td>Germain L.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée de Cornouaille, Quimper</td>
         </tr>
                  <tr>
            <td>Valentin P.</td>
            <td>163</td>
            <td>26</td>
            <td>Chevrollier, Angers</td>
         </tr>
                  <tr>
            <td>Théo V.</td>
            <td>163</td>
            <td>26</td>
            <td>Chevrollier, Angers</td>
         </tr>
                  <tr>
            <td>Gwendoline G.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
                  <tr>
            <td>Alain D.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
                  <tr>
            <td>Pacome D.</td>
            <td>163</td>
            <td>26</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>Thomas B.</td>
            <td>163</td>
            <td>26</td>
            <td>Lycée Blaise Pascal, Charbonnieres les Bains</td>
         </tr>
                  </table>
         </div>
         </td>
      </tr>
                  </table>
         </div>
                  <div id="tabs-9">
            <table width=650>
                  <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première-Terminale : 7867 élèves</h2>
            <i>Score maximum atteignable : 191</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id="graph-9" style="width:480px;height:320px"></div>
         </td>
         <td>
            <div id="ranks-9" style="height:300px;width:120px;overflow-y:scroll">
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr>
                           <tr><td>191</td><td>1</td></tr>
                           <tr><td>190</td><td>33</td></tr>
                           <tr><td>187</td><td>35</td></tr>
                           <tr><td>183</td><td>39</td></tr>
                           <tr><td>182</td><td>41</td></tr>
                           <tr><td>179</td><td>42</td></tr>
                           <tr><td>178</td><td>82</td></tr>
                           <tr><td>175</td><td>83</td></tr>
                           <tr><td>174</td><td>155</td></tr>
                           <tr><td>173</td><td>159</td></tr>
                           <tr><td>172</td><td>162</td></tr>
                           <tr><td>171</td><td>164</td></tr>
                           <tr><td>170</td><td>172</td></tr>
                           <tr><td>169</td><td>177</td></tr>
                           <tr><td>167</td><td>180</td></tr>
                           <tr><td>166</td><td>209</td></tr>
                           <tr><td>165</td><td>211</td></tr>
                           <tr><td>164</td><td>214</td></tr>
                           <tr><td>163</td><td>219</td></tr>
                           <tr><td>162</td><td>312</td></tr>
                           <tr><td>161</td><td>320</td></tr>
                           <tr><td>160</td><td>322</td></tr>
                           <tr><td>159</td><td>324</td></tr>
                           <tr><td>158</td><td>410</td></tr>
                           <tr><td>157</td><td>422</td></tr>
                           <tr><td>156</td><td>426</td></tr>
                           <tr><td>155</td><td>427</td></tr>
                           <tr><td>154</td><td>473</td></tr>
                           <tr><td>153</td><td>498</td></tr>
                           <tr><td>152</td><td>502</td></tr>
                           <tr><td>151</td><td>506</td></tr>
                           <tr><td>150</td><td>620</td></tr>
                           <tr><td>149</td><td>645</td></tr>
                           <tr><td>148</td><td>647</td></tr>
                           <tr><td>147</td><td>655</td></tr>
                           <tr><td>146</td><td>799</td></tr>
                           <tr><td>145</td><td>830</td></tr>
                           <tr><td>144</td><td>838</td></tr>
                           <tr><td>143</td><td>844</td></tr>
                           <tr><td>142</td><td>964</td></tr>
                           <tr><td>141</td><td>1003</td></tr>
                           <tr><td>140</td><td>1009</td></tr>
                           <tr><td>139</td><td>1018</td></tr>
                           <tr><td>138</td><td>1150</td></tr>
                           <tr><td>137</td><td>1198</td></tr>
                           <tr><td>136</td><td>1214</td></tr>
                           <tr><td>135</td><td>1223</td></tr>
                           <tr><td>134</td><td>1377</td></tr>
                           <tr><td>133</td><td>1417</td></tr>
                           <tr><td>132</td><td>1449</td></tr>
                           <tr><td>131</td><td>1464</td></tr>
                           <tr><td>130</td><td>1622</td></tr>
                           <tr><td>129</td><td>1668</td></tr>
                           <tr><td>128</td><td>1699</td></tr>
                           <tr><td>127</td><td>1714</td></tr>
                           <tr><td>126</td><td>1914</td></tr>
                           <tr><td>125</td><td>2007</td></tr>
                           <tr><td>124</td><td>2025</td></tr>
                           <tr><td>123</td><td>2046</td></tr>
                           <tr><td>122</td><td>2223</td></tr>
                           <tr><td>121</td><td>2310</td></tr>
                           <tr><td>120</td><td>2338</td></tr>
                           <tr><td>119</td><td>2357</td></tr>
                           <tr><td>118</td><td>2521</td></tr>
                           <tr><td>117</td><td>2632</td></tr>
                           <tr><td>116</td><td>2676</td></tr>
                           <tr><td>115</td><td>2714</td></tr>
                           <tr><td>114</td><td>2900</td></tr>
                           <tr><td>113</td><td>3040</td></tr>
                           <tr><td>112</td><td>3130</td></tr>
                           <tr><td>111</td><td>3169</td></tr>
                           <tr><td>110</td><td>3346</td></tr>
                           <tr><td>109</td><td>3471</td></tr>
                           <tr><td>108</td><td>3568</td></tr>
                           <tr><td>107</td><td>3616</td></tr>
                           <tr><td>106</td><td>3802</td></tr>
                           <tr><td>105</td><td>3943</td></tr>
                           <tr><td>104</td><td>4034</td></tr>
                           <tr><td>103</td><td>4097</td></tr>
                           <tr><td>102</td><td>4264</td></tr>
                           <tr><td>101</td><td>4396</td></tr>
                           <tr><td>100</td><td>4469</td></tr>
                           <tr><td>99</td><td>4530</td></tr>
                           <tr><td>98</td><td>4659</td></tr>
                           <tr><td>97</td><td>4759</td></tr>
                           <tr><td>96</td><td>4880</td></tr>
                           <tr><td>95</td><td>4935</td></tr>
                           <tr><td>94</td><td>5079</td></tr>
                           <tr><td>93</td><td>5226</td></tr>
                           <tr><td>92</td><td>5340</td></tr>
                           <tr><td>91</td><td>5407</td></tr>
                           <tr><td>90</td><td>5488</td></tr>
                           <tr><td>89</td><td>5585</td></tr>
                           <tr><td>88</td><td>5698</td></tr>
                           <tr><td>87</td><td>5750</td></tr>
                           <tr><td>86</td><td>5866</td></tr>
                           <tr><td>85</td><td>5994</td></tr>
                           <tr><td>84</td><td>6079</td></tr>
                           <tr><td>83</td><td>6136</td></tr>
                           <tr><td>82</td><td>6214</td></tr>
                           <tr><td>81</td><td>6299</td></tr>
                           <tr><td>80</td><td>6373</td></tr>
                           <tr><td>79</td><td>6424</td></tr>
                           <tr><td>78</td><td>6518</td></tr>
                           <tr><td>77</td><td>6617</td></tr>
                           <tr><td>76</td><td>6696</td></tr>
                           <tr><td>75</td><td>6743</td></tr>
                           <tr><td>74</td><td>6807</td></tr>
                           <tr><td>73</td><td>6862</td></tr>
                           <tr><td>72</td><td>6918</td></tr>
                           <tr><td>71</td><td>6947</td></tr>
                           <tr><td>70</td><td>6990</td></tr>
                           <tr><td>69</td><td>7061</td></tr>
                           <tr><td>68</td><td>7110</td></tr>
                           <tr><td>67</td><td>7143</td></tr>
                           <tr><td>66</td><td>7198</td></tr>
                           <tr><td>65</td><td>7241</td></tr>
                           <tr><td>64</td><td>7300</td></tr>
                           <tr><td>63</td><td>7338</td></tr>
                           <tr><td>62</td><td>7368</td></tr>
                           <tr><td>61</td><td>7420</td></tr>
                           <tr><td>60</td><td>7450</td></tr>
                           <tr><td>59</td><td>7482</td></tr>
                           <tr><td>58</td><td>7509</td></tr>
                           <tr><td>57</td><td>7543</td></tr>
                           <tr><td>56</td><td>7564</td></tr>
                           <tr><td>55</td><td>7584</td></tr>
                           <tr><td>54</td><td>7602</td></tr>
                           <tr><td>53</td><td>7624</td></tr>
                           <tr><td>52</td><td>7642</td></tr>
                           <tr><td>51</td><td>7656</td></tr>
                           <tr><td>50</td><td>7670</td></tr>
                           <tr><td>49</td><td>7699</td></tr>
                           <tr><td>48</td><td>7726</td></tr>
                           <tr><td>47</td><td>7737</td></tr>
                           <tr><td>46</td><td>7744</td></tr>
                           <tr><td>45</td><td>7766</td></tr>
                           <tr><td>44</td><td>7778</td></tr>
                           <tr><td>43</td><td>7782</td></tr>
                           <tr><td>42</td><td>7785</td></tr>
                           <tr><td>41</td><td>7795</td></tr>
                           <tr><td>40</td><td>7802</td></tr>
                           <tr><td>39</td><td>7808</td></tr>
                           <tr><td>38</td><td>7811</td></tr>
                           <tr><td>37</td><td>7823</td></tr>
                           <tr><td>36</td><td>7827</td></tr>
                           <tr><td>35</td><td>7833</td></tr>
                           <tr><td>34</td><td>7834</td></tr>
                           <tr><td>33</td><td>7843</td></tr>
                           <tr><td>32</td><td>7846</td></tr>
                           <tr><td>30</td><td>7847</td></tr>
                           <tr><td>29</td><td>7848</td></tr>
                           <tr><td>28</td><td>7852</td></tr>
                           <tr><td>25</td><td>7854</td></tr>
                           <tr><td>22</td><td>7856</td></tr>
                           <tr><td>21</td><td>7857</td></tr>
                           <tr><td>17</td><td>7864</td></tr>
                           <tr><td>13</td><td>7867</td></tr>
                        </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 38 premiers ayant un score supérieur ou égal à 187 sont listés ci-dessous.
            </p>
         </td>
      </tr>
      <tr>
         <td colspan=2>
         <div style="height:200px;width:100%;overflow-y:scroll">
         <table border=1 cellspacing=0 style="width:100%">
         <tr>
            <td><b>Élève</b></td>
            <td width=80><b>Score</b></td>
            <td><b>Rang</b></td>
            <td><b>Établissement</b></td>
         </tr>
                  <tr>
            <td>Aymeric L.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Lunel</td>
         </tr>
                  <tr>
            <td>Emmanuel V.</td>
            <td>191</td>
            <td>1</td>
            <td>Civ, Sophia Antipolis</td>
         </tr>
                  <tr>
            <td>Bastien V.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
                  <tr>
            <td>Thibaut P.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
                  <tr>
            <td>Bergue J.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
                  <tr>
            <td>Joseph B.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Lamarck, Albert</td>
         </tr>
                  <tr>
            <td>Quentin C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Paul Claudel, Laon</td>
         </tr>
                  <tr>
            <td>Guillaume L.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Saint-Rémi, Roubaix</td>
         </tr>
                  <tr>
            <td>Robin T.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Saint-Rémi, Roubaix</td>
         </tr>
                  <tr>
            <td>Yannis V.</td>
            <td>191</td>
            <td>1</td>
            <td>Frlycée Vaucanson, Tours</td>
         </tr>
                  <tr>
            <td>Alexandre L.</td>
            <td>191</td>
            <td>1</td>
            <td>Frlycée Vaucanson, Tours</td>
         </tr>
                  <tr>
            <td>Maxime D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
                  <tr>
            <td>Pierre-Alexandre M.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
                  <tr>
            <td>Julien V.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
                  <tr>
            <td>Eliot G.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Montaigu</td>
         </tr>
                  <tr>
            <td>Benjamin C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Montaigu</td>
         </tr>
                  <tr>
            <td>Thibaud C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
                  <tr>
            <td>Pierre J.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
                  <tr>
            <td>Martin S.</td>
            <td>191</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>Ronan P.</td>
            <td>191</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>Erwan E.</td>
            <td>191</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
                  <tr>
            <td>Jean-Loup C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
                  <tr>
            <td>Romain M.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
                  <tr>
            <td>Arthur R.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
                  <tr>
            <td>Antoine L.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Jules Ferry, Versailles</td>
         </tr>
                  <tr>
            <td>Fleur B.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Matti D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Joffre, Montpellier</td>
         </tr>
                  <tr>
            <td>Alexis V.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Saint François, Ville la Grand</td>
         </tr>
                  <tr>
            <td>Mael D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Elliott V.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée le Dantec, Lannion</td>
         </tr>
                  <tr>
            <td>Corentin M.</td>
            <td>191</td>
            <td>1</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
                  <tr>
            <td>Michaël P.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée de Cornouaille, Quimper</td>
         </tr>
                  <tr>
            <td>Duclos E.</td>
            <td>190</td>
            <td>33</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
                  <tr>
            <td>Cousin Q.</td>
            <td>190</td>
            <td>33</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
                  <tr>
            <td>Bastien L.</td>
            <td>187</td>
            <td>35</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
                  <tr>
            <td>Xavier K.</td>
            <td>187</td>
            <td>35</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
                  <tr>
            <td>Baptiste M.</td>
            <td>187</td>
            <td>35</td>
            <td>Lycée Jean Mace, Lanester</td>
         </tr>
                  <tr>
            <td>Arthur B.</td>
            <td>187</td>
            <td>35</td>
            <td>Lycée Jean Mace, Lanester</td>
         </tr>
                  </table>
         </div>
         </td>
      </tr>
                  </table>
         </div>
               </div>
      

