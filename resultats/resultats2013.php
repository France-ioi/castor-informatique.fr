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

<!--<li>171932 élèves ont participé, dont 48% de filles.</li>
<li>1289 établissements ont pris part au concours.</li>
-->

      <div id='results'>
         <ul><li><a href='#tabs-27'>6ème-5ème</a></li><li><a href='#tabs-30'>4ème-3ème</a></li><li><a href='#tabs-28'>Seconde</a></li><li><a href='#tabs-29'>Première-Terminale</a></li></ul><div id='tabs-27'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème-5ème : 82722 élèves</h2>
            <i>Score maximum atteignable : 205</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-27' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-27' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>205</td><td>1</td></tr><tr><td>202</td><td>81</td></tr><tr><td>200</td><td>84</td></tr><tr><td>198</td><td>97</td></tr><tr><td>197</td><td>107</td></tr><tr><td>196</td><td>114</td></tr><tr><td>195</td><td>122</td></tr><tr><td>194</td><td>199</td></tr><tr><td>193</td><td>298</td></tr><tr><td>192</td><td>303</td></tr><tr><td>191</td><td>325</td></tr><tr><td>190</td><td>354</td></tr><tr><td>189</td><td>441</td></tr><tr><td>188</td><td>505</td></tr><tr><td>187</td><td>522</td></tr><tr><td>186</td><td>542</td></tr><tr><td>185</td><td>575</td></tr><tr><td>184</td><td>625</td></tr><tr><td>183</td><td>768</td></tr><tr><td>182</td><td>838</td></tr><tr><td>181</td><td>869</td></tr><tr><td>180</td><td>933</td></tr><tr><td>179</td><td>1039</td></tr><tr><td>178</td><td>1242</td></tr><tr><td>177</td><td>1315</td></tr><tr><td>176</td><td>1379</td></tr><tr><td>175</td><td>1482</td></tr><tr><td>174</td><td>1588</td></tr><tr><td>173</td><td>1711</td></tr><tr><td>172</td><td>1857</td></tr><tr><td>171</td><td>1958</td></tr><tr><td>170</td><td>2045</td></tr><tr><td>169</td><td>2183</td></tr><tr><td>168</td><td>2377</td></tr><tr><td>167</td><td>2658</td></tr><tr><td>166</td><td>2800</td></tr><tr><td>165</td><td>2931</td></tr><tr><td>164</td><td>3128</td></tr><tr><td>163</td><td>3435</td></tr><tr><td>162</td><td>3611</td></tr><tr><td>161</td><td>3786</td></tr><tr><td>160</td><td>4026</td></tr><tr><td>159</td><td>4243</td></tr><tr><td>158</td><td>4444</td></tr><tr><td>157</td><td>4697</td></tr><tr><td>156</td><td>4897</td></tr><tr><td>155</td><td>5106</td></tr><tr><td>154</td><td>5350</td></tr><tr><td>153</td><td>5646</td></tr><tr><td>152</td><td>6003</td></tr><tr><td>151</td><td>6254</td></tr><tr><td>150</td><td>6566</td></tr><tr><td>149</td><td>6887</td></tr><tr><td>148</td><td>7234</td></tr><tr><td>147</td><td>7554</td></tr><tr><td>146</td><td>7932</td></tr><tr><td>145</td><td>8294</td></tr><tr><td>144</td><td>8574</td></tr><tr><td>143</td><td>9005</td></tr><tr><td>142</td><td>9389</td></tr><tr><td>141</td><td>9751</td></tr><tr><td>140</td><td>10197</td></tr><tr><td>139</td><td>10539</td></tr><tr><td>138</td><td>10923</td></tr><tr><td>137</td><td>11318</td></tr><tr><td>136</td><td>11808</td></tr><tr><td>135</td><td>12306</td></tr><tr><td>134</td><td>12754</td></tr><tr><td>133</td><td>13143</td></tr><tr><td>132</td><td>13699</td></tr><tr><td>131</td><td>14219</td></tr><tr><td>130</td><td>14645</td></tr><tr><td>129</td><td>15199</td></tr><tr><td>128</td><td>15742</td></tr><tr><td>127</td><td>16268</td></tr><tr><td>126</td><td>16790</td></tr><tr><td>125</td><td>17321</td></tr><tr><td>124</td><td>17893</td></tr><tr><td>123</td><td>18456</td></tr><tr><td>122</td><td>19017</td></tr><tr><td>121</td><td>19585</td></tr><tr><td>120</td><td>20163</td></tr><tr><td>119</td><td>20716</td></tr><tr><td>118</td><td>21365</td></tr><tr><td>117</td><td>22030</td></tr><tr><td>116</td><td>22682</td></tr><tr><td>115</td><td>23351</td></tr><tr><td>114</td><td>24005</td></tr><tr><td>113</td><td>24629</td></tr><tr><td>112</td><td>25281</td></tr><tr><td>111</td><td>25983</td></tr><tr><td>110</td><td>26660</td></tr><tr><td>109</td><td>27342</td></tr><tr><td>108</td><td>28103</td></tr><tr><td>107</td><td>28839</td></tr><tr><td>106</td><td>29470</td></tr><tr><td>105</td><td>30261</td></tr><tr><td>104</td><td>31006</td></tr><tr><td>103</td><td>31763</td></tr><tr><td>102</td><td>32503</td></tr><tr><td>101</td><td>33345</td></tr><tr><td>100</td><td>34107</td></tr><tr><td>99</td><td>34857</td></tr><tr><td>98</td><td>35710</td></tr><tr><td>97</td><td>36513</td></tr><tr><td>96</td><td>37290</td></tr><tr><td>95</td><td>38133</td></tr><tr><td>94</td><td>38966</td></tr><tr><td>93</td><td>39872</td></tr><tr><td>92</td><td>40655</td></tr><tr><td>91</td><td>41573</td></tr><tr><td>90</td><td>42508</td></tr><tr><td>89</td><td>43340</td></tr><tr><td>88</td><td>44134</td></tr><tr><td>87</td><td>44932</td></tr><tr><td>86</td><td>45805</td></tr><tr><td>85</td><td>46635</td></tr><tr><td>84</td><td>47572</td></tr><tr><td>83</td><td>48434</td></tr><tr><td>82</td><td>49244</td></tr><tr><td>81</td><td>50122</td></tr><tr><td>80</td><td>51038</td></tr><tr><td>79</td><td>51925</td></tr><tr><td>78</td><td>52793</td></tr><tr><td>77</td><td>53700</td></tr><tr><td>76</td><td>54603</td></tr><tr><td>75</td><td>55476</td></tr><tr><td>74</td><td>56411</td></tr><tr><td>73</td><td>57281</td></tr><tr><td>72</td><td>58087</td></tr><tr><td>71</td><td>58984</td></tr><tr><td>70</td><td>59925</td></tr><tr><td>69</td><td>60778</td></tr><tr><td>68</td><td>61618</td></tr><tr><td>67</td><td>62464</td></tr><tr><td>66</td><td>63377</td></tr><tr><td>65</td><td>64153</td></tr><tr><td>64</td><td>65043</td></tr><tr><td>63</td><td>65882</td></tr><tr><td>62</td><td>66622</td></tr><tr><td>61</td><td>67344</td></tr><tr><td>60</td><td>68242</td></tr><tr><td>59</td><td>69021</td></tr><tr><td>58</td><td>69737</td></tr><tr><td>57</td><td>70521</td></tr><tr><td>56</td><td>71376</td></tr><tr><td>55</td><td>72055</td></tr><tr><td>54</td><td>72846</td></tr><tr><td>53</td><td>73486</td></tr><tr><td>52</td><td>74130</td></tr><tr><td>51</td><td>74870</td></tr><tr><td>50</td><td>75425</td></tr><tr><td>49</td><td>76697</td></tr><tr><td>48</td><td>77167</td></tr><tr><td>47</td><td>77604</td></tr><tr><td>46</td><td>78185</td></tr><tr><td>45</td><td>78632</td></tr><tr><td>44</td><td>78975</td></tr><tr><td>43</td><td>79420</td></tr><tr><td>42</td><td>80020</td></tr><tr><td>41</td><td>80249</td></tr><tr><td>40</td><td>80524</td></tr><tr><td>39</td><td>80926</td></tr><tr><td>38</td><td>81100</td></tr><tr><td>37</td><td>81358</td></tr><tr><td>36</td><td>81717</td></tr><tr><td>35</td><td>81794</td></tr><tr><td>34</td><td>81938</td></tr><tr><td>33</td><td>82308</td></tr><tr><td>32</td><td>82347</td></tr><tr><td>31</td><td>82497</td></tr><tr><td>30</td><td>82506</td></tr><tr><td>29</td><td>82511</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 624 premiers ayant un score supérieur ou égal à 185 sont listés ci-dessous.
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
            <td>Paul D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Stephane G.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Samir B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Guillaume F.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Anthony L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Tristan H.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège-Lycée Saint- Martin, Amiens</td>
         </tr>
         <tr>
            <td>Eric D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Aurèle M.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Gatien A.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Ignacio V.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Victor S.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Cité, Narbonne</td>
         </tr>
         <tr>
            <td>Samuël R.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Jacques Brel, Villers Bretonneux</td>
         </tr>
         <tr>
            <td>Eléo B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Jacques Brel, Villers Bretonneux</td>
         </tr>
         <tr>
            <td>Yu-Chi L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Marion V.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Guénael A.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Bastien T.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Madison S.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Christian P.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Robert Surcouf, Saint-Malo</td>
         </tr>
         <tr>
            <td>Killian P.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Robert Surcouf, Saint-Malo</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre Mendès France, Méru</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Jacques Mercusot, Sombernon</td>
         </tr>
         <tr>
            <td>Gurcan K.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Simon F.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Grégoire S.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Albert V.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Lucie Aubrac, Bueil</td>
         </tr>
         <tr>
            <td>Robin B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Lucie Aubrac, Bueil</td>
         </tr>
         <tr>
            <td>Diane B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Antoine J.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Evan L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Zélie H.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Bouteille D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
         <tr>
            <td>Margaux P.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Zoé J.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Sacré Coeur, Breteuil</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Félix B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Rifat K.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Loan L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Dami V.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Titi R.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Marie-Blanche L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Mathilde I.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Agomar D.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Sarah F.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Adèle D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Valentin Q.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Enseignant T.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
         <tr>
            <td>Océane A.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Anna M.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Nicolas F.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Alex D.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège la Durantiere, Nantes</td>
         </tr>
         <tr>
            <td>Mathis W.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Thibaut G.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Pierre et Marie Curie, Neufchâteau</td>
         </tr>
         <tr>
            <td>Marine B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège René Gaillard, Bénaménil</td>
         </tr>
         <tr>
            <td>Annaëlle D.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Aurore W.</td>
            <td>205</td>
            <td>1</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Stanislas Cannes, Cannes</td>
         </tr>
         <tr>
            <td>Anthony R.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Mathéo A.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Delphine S.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Michel Bégon, Blois</td>
         </tr>
         <tr>
            <td>Eponine R.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Chloé V.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Thomas K.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Romane C.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Coralie L.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Charly B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Gaston Ramon, Ville Ne l'Archevêque</td>
         </tr>
         <tr>
            <td>Isaac K.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Gaston Ramon, Ville Ne l'Archevêque</td>
         </tr>
         <tr>
            <td>Maëlle G.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Loris B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Lea M.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Indiana B.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Melinda N.</td>
            <td>205</td>
            <td>1</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Alisea R.</td>
            <td>202</td>
            <td>81</td>
            <td>Collège Marie Rivier, Sorgues</td>
         </tr>
         <tr>
            <td>Auriana W.</td>
            <td>202</td>
            <td>81</td>
            <td>Collège Marie Rivier, Sorgues</td>
         </tr>
         <tr>
            <td>Ess T.</td>
            <td>202</td>
            <td>81</td>
            <td>Collège Jean Jaurès, Bourbourg</td>
         </tr>
         <tr>
            <td>Lucie E.</td>
            <td>200</td>
            <td>84</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Bao Nhi N.</td>
            <td>200</td>
            <td>84</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Charlotte S.</td>
            <td>200</td>
            <td>84</td>
            <td>Lycée Français Saint-Louis, Stockholm</td>
         </tr>
         <tr>
            <td>Tasnime D.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Félicien Joly, Escaudain</td>
         </tr>
         <tr>
            <td>Oceane B.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Félicien Joly, Escaudain</td>
         </tr>
         <tr>
            <td>Yara G.</td>
            <td>200</td>
            <td>84</td>
            <td>Lycée Franco-Libanais Nahr Ibrahim, Jounieh</td>
         </tr>
         <tr>
            <td>Fitiavana A.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Juliette Dodu, Saint-Denis</td>
         </tr>
         <tr>
            <td>Gustave D.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Juliette Dodu, Saint-Denis</td>
         </tr>
         <tr>
            <td>Claire P.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Emilie J.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Elodie S.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Délia T.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Lauryn Z.</td>
            <td>200</td>
            <td>84</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Livia L.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Jean de la Varende, Bourg-Achard</td>
         </tr>
         <tr>
            <td>Martin L.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Jean de la Varende, Bourg-Achard</td>
         </tr>
         <tr>
            <td>Kyllian B.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Langevin Wallon, Blainville sur Orne</td>
         </tr>
         <tr>
            <td>Rémi D.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Langevin Wallon, Blainville sur Orne</td>
         </tr>
         <tr>
            <td>Edgar G.</td>
            <td>198</td>
            <td>97</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Jack L.</td>
            <td>198</td>
            <td>97</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Lucie L.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Albert Ball, Annoeullin</td>
         </tr>
         <tr>
            <td>Remi D.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Langevin Wallon, Blainville sur Orne</td>
         </tr>
         <tr>
            <td>Kyllian B.</td>
            <td>198</td>
            <td>97</td>
            <td>Collège Langevin Wallon, Blainville sur Orne</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Louis A.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Magdalena A.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Jeanne C.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Lola L.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Rémi B.</td>
            <td>197</td>
            <td>107</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Adèle J.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Lyna B.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Celia A.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Anais B.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Eléa C.</td>
            <td>196</td>
            <td>114</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Axelle W.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Alyssa D.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Alexandre M.</td>
            <td>196</td>
            <td>114</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Lina C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Léa S.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Aoife H.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Cléonie S.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Charles C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Madeleine W.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Nemo R.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de la Riviere, Etel</td>
         </tr>
         <tr>
            <td>Matteo S.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de la Riviere, Etel</td>
         </tr>
         <tr>
            <td>Lucile N.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Julie C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Corentin Q.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean de la Varende, Bourg-Achard</td>
         </tr>
         <tr>
            <td>Thomas H.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean de la Varende, Bourg-Achard</td>
         </tr>
         <tr>
            <td>Louane L.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Catherine R.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Emma B.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Eloïse P.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Cité, Narbonne</td>
         </tr>
         <tr>
            <td>Korantin A.</td>
            <td>195</td>
            <td>122</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>195</td>
            <td>122</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Clara D.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Rudy S.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Justine D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Louis Pasteur, Carvin</td>
         </tr>
         <tr>
            <td>Sophie G.</td>
            <td>195</td>
            <td>122</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Eliane L.</td>
            <td>195</td>
            <td>122</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Javier D.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Nina G.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Estéban C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Fab M.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Emile A.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint Joseph Sainte Ursule, Dijon</td>
         </tr>
         <tr>
            <td>Manon T.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Mélissa C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège René Barthélemy, Nangis</td>
         </tr>
         <tr>
            <td>Marc H.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Sören E.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Ryan E.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Aymeric C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Marion D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Maïna G.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Gauthier J.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Arnaud n.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Chloé V.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Amelyne M.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Clara M.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Clémence D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Amaury L.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Aymerick C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Tenette R.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Marine C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Jean D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Antonin C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Theo R.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège de la Pyramide, Lieusaint</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Sarah T.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Clotilde V.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Julien G.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Landry B.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Louane C.</td>
            <td>195</td>
            <td>122</td>
            <td>Le Pré Des Roures, Le Rouret</td>
         </tr>
         <tr>
            <td>Jade P.</td>
            <td>195</td>
            <td>122</td>
            <td>Le Pré Des Roures, Le Rouret</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Karl O.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Victor Hugo, Port Gentil</td>
         </tr>
         <tr>
            <td>Alexandre P.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Victor Hugo, Port Gentil</td>
         </tr>
         <tr>
            <td>Lucas T.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Jules S.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Saint-Laurent, La Bresse</td>
         </tr>
         <tr>
            <td>Mina A.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Elina D.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Hoël P.</td>
            <td>195</td>
            <td>122</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Titouan B.</td>
            <td>195</td>
            <td>122</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Maxence G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Ugo G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Manar B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Lina K.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Anaëlle P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ferdinand Sarrien, Bourbon-Lancy</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ferdinand Sarrien, Bourbon-Lancy</td>
         </tr>
         <tr>
            <td>Léo P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jacques Cartier, Chauny</td>
         </tr>
         <tr>
            <td>Thomas J.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Robin P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Mathilde V.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Mohamed B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Margaux L.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Evelyne W.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Nathan V.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Alizée H.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Marianne T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Lilas T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jacques Prévert, Coutances</td>
         </tr>
         <tr>
            <td>Laura O.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Libertaire Rutigliano, Nantes Cedex 03</td>
         </tr>
         <tr>
            <td>Emilie D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Libertaire Rutigliano, Nantes Cedex 03</td>
         </tr>
         <tr>
            <td>Selma S.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Capucine S.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège le Puits de la Roche, Richelieu</td>
         </tr>
         <tr>
            <td>Killian E.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Albert Camus, Soufflenheim</td>
         </tr>
         <tr>
            <td>Esteban G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Albert Camus, Soufflenheim</td>
         </tr>
         <tr>
            <td>Julien O.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Matthieu M.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Axel B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Tanguy L.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>194</td>
            <td>199</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Samuel B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jules Verne, Neuville en Ferrain</td>
         </tr>
         <tr>
            <td>Ada R.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Charles de Gaulle, Ploemeur</td>
         </tr>
         <tr>
            <td>Tara C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Charles de Gaulle, Ploemeur</td>
         </tr>
         <tr>
            <td>Loup A.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège le Cèdre, Canteleu</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège le Cèdre, Canteleu</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Quintefeuille, Courseulles sur Mer</td>
         </tr>
         <tr>
            <td>Kevin E.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Quintefeuille, Courseulles sur Mer</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Gaétan C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Emma T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Matthieu T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Lisa P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Emma S.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Sam B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Camille Saint-Saens, Lizy sur Ourcq</td>
         </tr>
         <tr>
            <td>Albert L.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Camille Saint-Saens, Lizy sur Ourcq</td>
         </tr>
         <tr>
            <td>Yann T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège André Maurois, Limoges</td>
         </tr>
         <tr>
            <td>Aymeric B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège André Maurois, Limoges</td>
         </tr>
         <tr>
            <td>Antoine F.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Anatole France, Noeux-les-Mines</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Anatole France, Noeux-les-Mines</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Matéo C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Steph M.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Ilhan O.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Des Flandres, Hazebrouck</td>
         </tr>
         <tr>
            <td>Ella B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Céline H.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Eva R.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Jade S.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Idrissi J.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Callens T.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Tristan A.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Timothee D.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Lou D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Iris K.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Alice P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Eva G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Lauralie B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Emma K.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Jean Rostand, Armentières</td>
         </tr>
         <tr>
            <td>Joshua T.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Marcel Pagnol, Sérignan</td>
         </tr>
         <tr>
            <td>Pauline B.</td>
            <td>194</td>
            <td>199</td>
            <td>Le Pré Des Roures, Le Rouret</td>
         </tr>
         <tr>
            <td>Lucie L.</td>
            <td>194</td>
            <td>199</td>
            <td>Le Pré Des Roures, Le Rouret</td>
         </tr>
         <tr>
            <td>Andréa G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Fanny D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Antoine J.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Lise P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège René Gaillard, Bénaménil</td>
         </tr>
         <tr>
            <td>Sacha H.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Des Trois Pays, Hegenheim</td>
         </tr>
         <tr>
            <td>Quentin S.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Des Trois Pays, Hegenheim</td>
         </tr>
         <tr>
            <td>Hannah D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Marco D.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Quentin P.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Mathieu B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Jiarui W.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Thibaut F.</td>
            <td>194</td>
            <td>199</td>
            <td>Cité Scolaire Emile Zola, Wattrelos</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Bernard Palissy, Paris</td>
         </tr>
         <tr>
            <td>Marièle I.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Mathis A.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Maxence I.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Mme d'Epinay, Alnoy Lez Valenciennes</td>
         </tr>
         <tr>
            <td>Hadrien L.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Lea Z.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Honorine B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Chloé G.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Oxana C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Elio B.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Romain S.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Louison F.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ste Jeanne d'Arc, Laventie</td>
         </tr>
         <tr>
            <td>Pierre S.</td>
            <td>194</td>
            <td>199</td>
            <td>Collège Ste Jeanne d'Arc, Laventie</td>
         </tr>
         <tr>
            <td>Sandro D.</td>
            <td>194</td>
            <td>199</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Cloé C.</td>
            <td>193</td>
            <td>298</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>193</td>
            <td>298</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Hugo C.</td>
            <td>193</td>
            <td>298</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Agathe M.</td>
            <td>193</td>
            <td>298</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Alisée C.</td>
            <td>193</td>
            <td>298</td>
            <td>Collège Calypso, Montreuil-Bellay</td>
         </tr>
         <tr>
            <td>Lisa M.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Myriam B.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Camille S.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Des Roseuax, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Blandine M.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Des Roseuax, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Maeven R.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège le Carré Ste-Honorine, Taverny</td>
         </tr>
         <tr>
            <td>Nolhan B.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège le Carré Ste-Honorine, Taverny</td>
         </tr>
         <tr>
            <td>Malik B.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Martin R.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Alexandre M.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Grégoire L.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Emma K.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Juliette S.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Alicia B.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Antonin L.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège René Cassin, Athis de l'Orne</td>
         </tr>
         <tr>
            <td>Noé P.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège René Cassin, Athis de l'Orne</td>
         </tr>
         <tr>
            <td>Luciano M.</td>
            <td>192</td>
            <td>303</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Aurelien P.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Ste Jeanne d'Arc, Laventie</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Ste Jeanne d'Arc, Laventie</td>
         </tr>
         <tr>
            <td>Nino G.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Artem S.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Killian G.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>192</td>
            <td>303</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Raphael M.</td>
            <td>191</td>
            <td>325</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Axel V.</td>
            <td>191</td>
            <td>325</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Alban D.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Firmin C.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Flora L.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Célia F.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Charline B.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Yoann P.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Jeremy T.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Eloise A.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Lucie O.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Ines M.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Nicolas Tronchon, Saint-Soupplets</td>
         </tr>
         <tr>
            <td>Emilie A.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Nicolas Tronchon, Saint-Soupplets</td>
         </tr>
         <tr>
            <td>Marie L.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Saint-Exupéry, Alençon</td>
         </tr>
         <tr>
            <td>Morgane D.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Saint-Exupéry, Alençon</td>
         </tr>
         <tr>
            <td>Capucine M.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Ajed B.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Julie R.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Angéline A.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Lucie G.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Lou B.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Jules V.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre et Marie Curie, Neufchâteau</td>
         </tr>
         <tr>
            <td>Herve F.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Pierre et Marie Curie, Neufchâteau</td>
         </tr>
         <tr>
            <td>Sarah B.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Jade C.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Victor Schoelcher, Champagney</td>
         </tr>
         <tr>
            <td>Alix C.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Loréna G.</td>
            <td>191</td>
            <td>325</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Tristan H.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Nicolas H.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Marine C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Elise C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Rémi T.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Pierre de Ronsard, Mornant</td>
         </tr>
         <tr>
            <td>Mathilde J.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Lycée Jeanne d'Arc, Gourin</td>
         </tr>
         <tr>
            <td>Morgane L.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Lycée Jeanne d'Arc, Gourin</td>
         </tr>
         <tr>
            <td>Matteo D.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Claire B.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Mathieu V.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Adrien G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Jules B.</td>
            <td>190</td>
            <td>354</td>
            <td>Roupnel, Dijon</td>
         </tr>
         <tr>
            <td>Pierrick B.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Aissou M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Solène G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Eliot C.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Jade S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Marine R.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Paco B.</td>
            <td>190</td>
            <td>354</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Ervin D.</td>
            <td>190</td>
            <td>354</td>
            <td>Pasteur, Somain</td>
         </tr>
         <tr>
            <td>Anna F.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Joséphine E.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Aymeric M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Roger Salengro, Houplines</td>
         </tr>
         <tr>
            <td>Clémence S.</td>
            <td>190</td>
            <td>354</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Carla S.</td>
            <td>190</td>
            <td>354</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Agathe L.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de Fontenay, Chartres de Bretagne</td>
         </tr>
         <tr>
            <td>Glen C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de Fontenay, Chartres de Bretagne</td>
         </tr>
         <tr>
            <td>Clément S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Lucien B.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Français de Gavà, Gavà</td>
         </tr>
         <tr>
            <td>Hélène M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de la Forêt, Traînou</td>
         </tr>
         <tr>
            <td>Marine M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de la Forêt, Traînou</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Gaelle P.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Laura A.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Charlotte Q.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Saint-Pierre, Port-Louis</td>
         </tr>
         <tr>
            <td>Cassie H.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Saint-Pierre, Port-Louis</td>
         </tr>
         <tr>
            <td>Bastien S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Anouk C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Manon R.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Serena E.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jules Michelet, Tours</td>
         </tr>
         <tr>
            <td>Oukherfellah J.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Nunez H.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Nils R.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Jean-Batiste S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Jordan J.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Rico R.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège la Durantiere, Nantes</td>
         </tr>
         <tr>
            <td>Léo T.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Matthieu V.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Fatimata A.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Noémie P.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Yves J.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Nelson Mandela, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>Tom A.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Nelson Mandela, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>Cosyn E.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Boudjelal M.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Lucie et Raymond Aubrac, Paris</td>
         </tr>
         <tr>
            <td>Sébastien Z.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Lucie et Raymond Aubrac, Paris</td>
         </tr>
         <tr>
            <td>Juliette R.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Mona B.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Emeline G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>David S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Sarah C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Stéphie E.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Canelle T.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Agnès D.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Liam T.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Nassim A.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Simon A.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Maurice Maeterlinck, Luneray</td>
         </tr>
         <tr>
            <td>Oscar L.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Anna de Noailles, Larche</td>
         </tr>
         <tr>
            <td>Maxime T.</td>
            <td>190</td>
            <td>354</td>
            <td>Pierre et Marie Curie, Pont-Audemer</td>
         </tr>
         <tr>
            <td>Matteo M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Vassili M.</td>
            <td>190</td>
            <td>354</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Théa R.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée International Alexandre Dumas, Alger</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Clara C.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Marine F.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Lisa P.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Mira H.</td>
            <td>190</td>
            <td>354</td>
            <td>Lycée Franco-Libanais Nahr Ibrahim, Jounieh</td>
         </tr>
         <tr>
            <td>Luca G.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Camille Saint-Saëns, Chaumont</td>
         </tr>
         <tr>
            <td>Gerard M.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Dali S.</td>
            <td>190</td>
            <td>354</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Emilie B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Lauren B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Matheo B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège David Marcelle, Billy-Montigny</td>
         </tr>
         <tr>
            <td>Rémi B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège David Marcelle, Billy-Montigny</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>189</td>
            <td>441</td>
            <td>Lycée Français de Gavà, Gavà</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>189</td>
            <td>441</td>
            <td>Lycée Français de Gavà, Gavà</td>
         </tr>
         <tr>
            <td>Ch A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Ad C.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Maxe G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Clément Marot, Lyon</td>
         </tr>
         <tr>
            <td>Jeanne G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Clément Marot, Lyon</td>
         </tr>
         <tr>
            <td>Thibaut B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Pierre et Marie Curie, Neufchâteau</td>
         </tr>
         <tr>
            <td>Marilyne A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Mathys M.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Mona B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège la Ponétie, Aurillac</td>
         </tr>
         <tr>
            <td>Margaux P.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Cassandre M.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Roqua, Aubenas</td>
         </tr>
         <tr>
            <td>Assina L.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Roqua, Aubenas</td>
         </tr>
         <tr>
            <td>Lola P.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Elisa G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Dorian A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
         <tr>
            <td>Solal S.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Rafael O.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Baptiste R.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Raphaël B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Clement B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Maëlle D.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Maguelone D.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Margaux I.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Mathilde L.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Cécile G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Agathe S.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Léo G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Célien L.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Alain Fournier, Orsay</td>
         </tr>
         <tr>
            <td>Kenzo B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Hugo C.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Félix Tisserand, Nuits-Saint-Georges</td>
         </tr>
         <tr>
            <td>Flavien J.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Prévert, Gaillard</td>
         </tr>
         <tr>
            <td>Vincent Z.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Prévert, Gaillard</td>
         </tr>
         <tr>
            <td>Jude H.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Protestant Français, Beyrouth</td>
         </tr>
         <tr>
            <td>Anthony B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Anna de Noailles, Larche</td>
         </tr>
         <tr>
            <td>Victor G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Anna de Noailles, Larche</td>
         </tr>
         <tr>
            <td>Claire M.</td>
            <td>189</td>
            <td>441</td>
            <td>Don Bosco Landser, Landser</td>
         </tr>
         <tr>
            <td>Mathilde S.</td>
            <td>189</td>
            <td>441</td>
            <td>Don Bosco Landser, Landser</td>
         </tr>
         <tr>
            <td>Franck B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Lena A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Chantaco, St Jean de Luz</td>
         </tr>
         <tr>
            <td>Lorea Z.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Chantaco, St Jean de Luz</td>
         </tr>
         <tr>
            <td>Olivia D.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Henri Lefeuvre, Arnage</td>
         </tr>
         <tr>
            <td>Océane B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Henri Lefeuvre, Arnage</td>
         </tr>
         <tr>
            <td>Louise A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Clara D.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Lucie Aubrac, Bueil</td>
         </tr>
         <tr>
            <td>Ewenn A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Lucie Aubrac, Bueil</td>
         </tr>
         <tr>
            <td>Erwan L.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Rayane B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Elisa A.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Goscinny, Valdoie</td>
         </tr>
         <tr>
            <td>Adil S.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Goscinny, Valdoie</td>
         </tr>
         <tr>
            <td>Zoé K.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Jules Ferry, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Yzéa D.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Victor Hugo, Lugny</td>
         </tr>
         <tr>
            <td>Julien N.</td>
            <td>189</td>
            <td>441</td>
            <td>Collège Victor Hugo, Lugny</td>
         </tr>
         <tr>
            <td>Maeva P.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Mathilde D.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Félix N.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Athénaïs S.</td>
            <td>188</td>
            <td>505</td>
            <td>La Tilloye, Compiègne</td>
         </tr>
         <tr>
            <td>Juliette D.</td>
            <td>188</td>
            <td>505</td>
            <td>La Tilloye, Compiègne</td>
         </tr>
         <tr>
            <td>Elodie F.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Albert Ball, Annoeullin</td>
         </tr>
         <tr>
            <td>Bleiz L.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège de Kerentrech, Lorient</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège de Kerentrech, Lorient</td>
         </tr>
         <tr>
            <td>Sébastien V.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Dorian R.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
         <tr>
            <td>Thibaud R.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Ernest Renan, Minihy Tréguier</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Yves Coppens, Malestroit</td>
         </tr>
         <tr>
            <td>Raphael C.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Aurelien J.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Anthony L.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Anatole France, Gerzat</td>
         </tr>
         <tr>
            <td>Alexis V.</td>
            <td>188</td>
            <td>505</td>
            <td>Collège Anatole France, Gerzat</td>
         </tr>
         <tr>
            <td>Alice M.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Antoine de Saint Exupéry, Lesneven</td>
         </tr>
         <tr>
            <td>Anaëlle J.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Antoine de Saint Exupéry, Lesneven</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>187</td>
            <td>522</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Carson S.</td>
            <td>187</td>
            <td>522</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Jade T.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Damira Asperti, Penne d'Agenais</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Damira Asperti, Penne d'Agenais</td>
         </tr>
         <tr>
            <td>Thibault A.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Charles de Gaulle, Montcornet</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Charles de Gaulle, Montcornet</td>
         </tr>
         <tr>
            <td>Nathan A.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Noé R.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Anton G.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Matthieu M.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Melvin T.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Alexis L.</td>
            <td>187</td>
            <td>522</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Astrid S.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Victoria C.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Cfrb n.</td>
            <td>187</td>
            <td>522</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Marawan E.</td>
            <td>186</td>
            <td>542</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Ali C.</td>
            <td>186</td>
            <td>542</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Julian G.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Ampère, Oyonnax</td>
         </tr>
         <tr>
            <td>Bastien R.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Ampère, Oyonnax</td>
         </tr>
         <tr>
            <td>Rémi P.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Marteroy, Vesoul</td>
         </tr>
         <tr>
            <td>Gabriel G.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Marteroy, Vesoul</td>
         </tr>
         <tr>
            <td>Amandine P.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Monsieur UP2A P.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Anatole France, Les Pavillons Sous Bois</td>
         </tr>
         <tr>
            <td>Eva C.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Jean Dauzié, Saint Mamet</td>
         </tr>
         <tr>
            <td>Jeanne C.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Jean Dauzié, Saint Mamet</td>
         </tr>
         <tr>
            <td>Maewenn J.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège de la Riviere, Etel</td>
         </tr>
         <tr>
            <td>Tiên San S.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège de la Riviere, Etel</td>
         </tr>
         <tr>
            <td>Antoine S.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège le Devoir, Chalon sur Saône</td>
         </tr>
         <tr>
            <td>Pénélope B.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège David Marcelle, Billy-Montigny</td>
         </tr>
         <tr>
            <td>Katarina V.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège David Marcelle, Billy-Montigny</td>
         </tr>
         <tr>
            <td>Léo L.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Sainte Ursule, Saint Pol de Léon</td>
         </tr>
         <tr>
            <td>Vincent M.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Sainte Ursule, Saint Pol de Léon</td>
         </tr>
         <tr>
            <td>Justine W.</td>
            <td>186</td>
            <td>542</td>
            <td>Lycée Français, Düsseldorf</td>
         </tr>
         <tr>
            <td>Estelle D.</td>
            <td>186</td>
            <td>542</td>
            <td>Lycée Français, Düsseldorf</td>
         </tr>
         <tr>
            <td>Pierrick D.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège les Dentelliers, Calais</td>
         </tr>
         <tr>
            <td>Clemence F.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Jessica S.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Lucie C.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Des Flandres, Hazebrouck</td>
         </tr>
         <tr>
            <td>Margot D.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Sidonie J.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Coline C.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège de la Forêt, Traînou</td>
         </tr>
         <tr>
            <td>Evangéline B.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège de la Forêt, Traînou</td>
         </tr>
         <tr>
            <td>Fabrice A.</td>
            <td>186</td>
            <td>542</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Mathilde T.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Claude Monet, Saint Nicolas d'Aliermont</td>
         </tr>
         <tr>
            <td>Marie D.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège Claude Monet, Saint Nicolas d'Aliermont</td>
         </tr>
         <tr>
            <td>Juliette B.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
         <tr>
            <td>Brunehilde C.</td>
            <td>186</td>
            <td>542</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
         <tr>
            <td>Manon C.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Monge, Beaune</td>
         </tr>
         <tr>
            <td>Charles C.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Valentin L.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Zazie G.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Clara C.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Sylvain Q.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Mattéo M.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Kerrian L.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège St Stanislas, St Renan</td>
         </tr>
         <tr>
            <td>Yann B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège St Stanislas, St Renan</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>185</td>
            <td>575</td>
            <td>Louis Aragon, Jarny</td>
         </tr>
         <tr>
            <td>Nino M.</td>
            <td>185</td>
            <td>575</td>
            <td>Louis Aragon, Jarny</td>
         </tr>
         <tr>
            <td>Nassim R.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Gilles P.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Enzo B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Théodore C.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Sarah G.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Sarah P.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Laura G.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français de Gavà, Gavà</td>
         </tr>
         <tr>
            <td>Chloe M.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français de Gavà, Gavà</td>
         </tr>
         <tr>
            <td>Noémie H.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Margot H.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Louise B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Marie M.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Tom R.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Nelson Mandela, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>Léna C.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Auriane A.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Tony H.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège les Saints Anges, Pontivy</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège les Saints Anges, Pontivy</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Mylan B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Jean Renoir, Grand Couronne</td>
         </tr>
         <tr>
            <td>Alexia W.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Jean Renoir, Grand Couronne</td>
         </tr>
         <tr>
            <td>Coralie D.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Candice H.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Souillat B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Ferdinand Sarrien, Bourbon-Lancy</td>
         </tr>
         <tr>
            <td>Fanny S.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Ferdinand Sarrien, Bourbon-Lancy</td>
         </tr>
         <tr>
            <td>Charline R.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Ferdinand Sarrien, Bourbon-Lancy</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Axel D.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Jana F.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Mikaela N.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Kéann B.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Emma T.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Zia B.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Albane L.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Joe G.</td>
            <td>185</td>
            <td>575</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Louis Z.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Henri Matisse, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Willy M.</td>
            <td>185</td>
            <td>575</td>
            <td>Collège Henri Matisse, Issy les Moulineaux</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-30'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème-3ème : 59492 élèves</h2>
            <i>Score maximum atteignable : 233</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-30' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-30' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>233</td><td>1</td></tr><tr><td>230</td><td>63</td></tr><tr><td>229</td><td>67</td></tr><tr><td>228</td><td>79</td></tr><tr><td>227</td><td>93</td></tr><tr><td>226</td><td>95</td></tr><tr><td>225</td><td>112</td></tr><tr><td>224</td><td>146</td></tr><tr><td>223</td><td>155</td></tr><tr><td>222</td><td>170</td></tr><tr><td>221</td><td>180</td></tr><tr><td>220</td><td>192</td></tr><tr><td>219</td><td>214</td></tr><tr><td>218</td><td>220</td></tr><tr><td>217</td><td>272</td></tr><tr><td>216</td><td>298</td></tr><tr><td>215</td><td>332</td></tr><tr><td>214</td><td>375</td></tr><tr><td>213</td><td>415</td></tr><tr><td>212</td><td>430</td></tr><tr><td>211</td><td>476</td></tr><tr><td>210</td><td>514</td></tr><tr><td>209</td><td>562</td></tr><tr><td>208</td><td>603</td></tr><tr><td>207</td><td>649</td></tr><tr><td>206</td><td>691</td></tr><tr><td>205</td><td>749</td></tr><tr><td>204</td><td>808</td></tr><tr><td>203</td><td>874</td></tr><tr><td>202</td><td>943</td></tr><tr><td>201</td><td>997</td></tr><tr><td>200</td><td>1072</td></tr><tr><td>199</td><td>1139</td></tr><tr><td>198</td><td>1230</td></tr><tr><td>197</td><td>1314</td></tr><tr><td>196</td><td>1400</td></tr><tr><td>195</td><td>1490</td></tr><tr><td>194</td><td>1622</td></tr><tr><td>193</td><td>1722</td></tr><tr><td>192</td><td>1818</td></tr><tr><td>191</td><td>1990</td></tr><tr><td>190</td><td>2104</td></tr><tr><td>189</td><td>2232</td></tr><tr><td>188</td><td>2390</td></tr><tr><td>187</td><td>2510</td></tr><tr><td>186</td><td>2638</td></tr><tr><td>185</td><td>2780</td></tr><tr><td>184</td><td>2915</td></tr><tr><td>183</td><td>3053</td></tr><tr><td>182</td><td>3243</td></tr><tr><td>181</td><td>3387</td></tr><tr><td>180</td><td>3569</td></tr><tr><td>179</td><td>3794</td></tr><tr><td>178</td><td>3966</td></tr><tr><td>177</td><td>4143</td></tr><tr><td>176</td><td>4359</td></tr><tr><td>175</td><td>4514</td></tr><tr><td>174</td><td>4758</td></tr><tr><td>173</td><td>4968</td></tr><tr><td>172</td><td>5153</td></tr><tr><td>171</td><td>5397</td></tr><tr><td>170</td><td>5604</td></tr><tr><td>169</td><td>5866</td></tr><tr><td>168</td><td>6090</td></tr><tr><td>167</td><td>6296</td></tr><tr><td>166</td><td>6591</td></tr><tr><td>165</td><td>6874</td></tr><tr><td>164</td><td>7146</td></tr><tr><td>163</td><td>7437</td></tr><tr><td>162</td><td>7706</td></tr><tr><td>161</td><td>7932</td></tr><tr><td>160</td><td>8214</td></tr><tr><td>159</td><td>8510</td></tr><tr><td>158</td><td>8794</td></tr><tr><td>157</td><td>9129</td></tr><tr><td>156</td><td>9443</td></tr><tr><td>155</td><td>9736</td></tr><tr><td>154</td><td>10061</td></tr><tr><td>153</td><td>10445</td></tr><tr><td>152</td><td>10801</td></tr><tr><td>151</td><td>11139</td></tr><tr><td>150</td><td>11490</td></tr><tr><td>149</td><td>11852</td></tr><tr><td>148</td><td>12139</td></tr><tr><td>147</td><td>12499</td></tr><tr><td>146</td><td>12861</td></tr><tr><td>145</td><td>13272</td></tr><tr><td>144</td><td>13643</td></tr><tr><td>143</td><td>14074</td></tr><tr><td>142</td><td>14484</td></tr><tr><td>141</td><td>14883</td></tr><tr><td>140</td><td>15248</td></tr><tr><td>139</td><td>15678</td></tr><tr><td>138</td><td>16077</td></tr><tr><td>137</td><td>16503</td></tr><tr><td>136</td><td>16936</td></tr><tr><td>135</td><td>17356</td></tr><tr><td>134</td><td>17719</td></tr><tr><td>133</td><td>18140</td></tr><tr><td>132</td><td>18540</td></tr><tr><td>131</td><td>18983</td></tr><tr><td>130</td><td>19452</td></tr><tr><td>129</td><td>19908</td></tr><tr><td>128</td><td>20344</td></tr><tr><td>127</td><td>20792</td></tr><tr><td>126</td><td>21287</td></tr><tr><td>125</td><td>21807</td></tr><tr><td>124</td><td>22318</td></tr><tr><td>123</td><td>22799</td></tr><tr><td>122</td><td>23326</td></tr><tr><td>121</td><td>23758</td></tr><tr><td>120</td><td>24270</td></tr><tr><td>119</td><td>24784</td></tr><tr><td>118</td><td>25264</td></tr><tr><td>117</td><td>25752</td></tr><tr><td>116</td><td>26241</td></tr><tr><td>115</td><td>26766</td></tr><tr><td>114</td><td>27303</td></tr><tr><td>113</td><td>27842</td></tr><tr><td>112</td><td>28338</td></tr><tr><td>111</td><td>28882</td></tr><tr><td>110</td><td>29441</td></tr><tr><td>109</td><td>29966</td></tr><tr><td>108</td><td>30486</td></tr><tr><td>107</td><td>31029</td></tr><tr><td>106</td><td>31621</td></tr><tr><td>105</td><td>32174</td></tr><tr><td>104</td><td>32691</td></tr><tr><td>103</td><td>33274</td></tr><tr><td>102</td><td>33818</td></tr><tr><td>101</td><td>34365</td></tr><tr><td>100</td><td>34845</td></tr><tr><td>99</td><td>35418</td></tr><tr><td>98</td><td>35954</td></tr><tr><td>97</td><td>36555</td></tr><tr><td>96</td><td>37097</td></tr><tr><td>95</td><td>37628</td></tr><tr><td>94</td><td>38146</td></tr><tr><td>93</td><td>38733</td></tr><tr><td>92</td><td>39262</td></tr><tr><td>91</td><td>39813</td></tr><tr><td>90</td><td>40311</td></tr><tr><td>89</td><td>40808</td></tr><tr><td>88</td><td>41354</td></tr><tr><td>87</td><td>41889</td></tr><tr><td>86</td><td>42401</td></tr><tr><td>85</td><td>42880</td></tr><tr><td>84</td><td>43406</td></tr><tr><td>83</td><td>43938</td></tr><tr><td>82</td><td>44391</td></tr><tr><td>81</td><td>44824</td></tr><tr><td>80</td><td>45319</td></tr><tr><td>79</td><td>45835</td></tr><tr><td>78</td><td>46280</td></tr><tr><td>77</td><td>46786</td></tr><tr><td>76</td><td>47210</td></tr><tr><td>75</td><td>47646</td></tr><tr><td>74</td><td>48131</td></tr><tr><td>73</td><td>48572</td></tr><tr><td>72</td><td>49032</td></tr><tr><td>71</td><td>49435</td></tr><tr><td>70</td><td>49900</td></tr><tr><td>69</td><td>50306</td></tr><tr><td>68</td><td>50691</td></tr><tr><td>67</td><td>51120</td></tr><tr><td>66</td><td>51551</td></tr><tr><td>65</td><td>51919</td></tr><tr><td>64</td><td>52286</td></tr><tr><td>63</td><td>52667</td></tr><tr><td>62</td><td>53025</td></tr><tr><td>61</td><td>53346</td></tr><tr><td>60</td><td>53613</td></tr><tr><td>59</td><td>53961</td></tr><tr><td>58</td><td>54228</td></tr><tr><td>57</td><td>54545</td></tr><tr><td>56</td><td>54856</td></tr><tr><td>55</td><td>55149</td></tr><tr><td>54</td><td>55410</td></tr><tr><td>53</td><td>55673</td></tr><tr><td>52</td><td>55984</td></tr><tr><td>51</td><td>56221</td></tr><tr><td>50</td><td>56459</td></tr><tr><td>49</td><td>57213</td></tr><tr><td>48</td><td>57445</td></tr><tr><td>47</td><td>57609</td></tr><tr><td>46</td><td>57810</td></tr><tr><td>45</td><td>58057</td></tr><tr><td>44</td><td>58202</td></tr><tr><td>43</td><td>58312</td></tr><tr><td>42</td><td>58538</td></tr><tr><td>41</td><td>58638</td></tr><tr><td>40</td><td>58700</td></tr><tr><td>39</td><td>58819</td></tr><tr><td>38</td><td>58977</td></tr><tr><td>37</td><td>59009</td></tr><tr><td>36</td><td>59020</td></tr><tr><td>35</td><td>59200</td></tr><tr><td>34</td><td>59232</td></tr><tr><td>33</td><td>59250</td></tr><tr><td>32</td><td>59289</td></tr><tr><td>31</td><td>59405</td></tr><tr><td>29</td><td>59411</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 475 premiers ayant un score supérieur ou égal à 212 sont listés ci-dessous.
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
            <td>Emma N.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Morgane S.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Tom H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Albin P.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jean Moulin, Artenay</td>
         </tr>
         <tr>
            <td>Armand D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jean Moulin, Artenay</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
         <tr>
            <td>Gaëtan D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
         <tr>
            <td>Jad A.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Nour E.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Yakob K.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Lazaro, Marcq en Baroeul</td>
         </tr>
         <tr>
            <td>Rachel L.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Zouheir N.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Franco-Qatarien Voltaire, Doha</td>
         </tr>
         <tr>
            <td>Christophe R.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Jeremy M.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Marvin H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Ophelie W.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Vinetou B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Franck S.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Laura F.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Sainte-Apolline, Courdimanche</td>
         </tr>
         <tr>
            <td>Florine B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Ivan F.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Andreas R.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Boucansaud T.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Baptiste P.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Théo H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Nicolas E.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Plastre Q.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Miguel M.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Jimi B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Kelly G.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Michael F.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Brandon C.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Dylan H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Cindy M.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Tessie H.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Léo M.</td>
            <td>233</td>
            <td>1</td>
            <td>Anjou, Sable</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>233</td>
            <td>1</td>
            <td>Anjou, Sable</td>
         </tr>
         <tr>
            <td>Matéo D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Bertrand C.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Jesuane O.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Maxence D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Clara G.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Ambre B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Alexia L.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Armand B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Camille L.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Emilie T.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Ali S.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Seif K.</td>
            <td>233</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Marc B.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Thomas Q.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Elric R.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège du Grand Ried, Sundhouse</td>
         </tr>
         <tr>
            <td>Dorian C.</td>
            <td>233</td>
            <td>1</td>
            <td>Collège du Grand Ried, Sundhouse</td>
         </tr>
         <tr>
            <td>Steven H.</td>
            <td>230</td>
            <td>63</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Ziad E.</td>
            <td>230</td>
            <td>63</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Marion G.</td>
            <td>230</td>
            <td>63</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Simon G.</td>
            <td>230</td>
            <td>63</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège de Rhuys, Sarzeau</td>
         </tr>
         <tr>
            <td>Julie G.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège de Rhuys, Sarzeau</td>
         </tr>
         <tr>
            <td>Eugénie E.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Alfred Manessier, Flixecourt</td>
         </tr>
         <tr>
            <td>Emilie D.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Alfred Manessier, Flixecourt</td>
         </tr>
         <tr>
            <td>Titouan D.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Pierre-Carlo V.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Bernard G.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
         <tr>
            <td>Benjamin D.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
         <tr>
            <td>Gérald L.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège Georges Pompidou, Champtoceaux</td>
         </tr>
         <tr>
            <td>Mélane S.</td>
            <td>229</td>
            <td>67</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Marie M.</td>
            <td>229</td>
            <td>67</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
         <tr>
            <td>Maeva H.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Dune A.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Romane T.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Ariane, Vernon</td>
         </tr>
         <tr>
            <td>Eva P.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Ariane, Vernon</td>
         </tr>
         <tr>
            <td>Lino K.</td>
            <td>228</td>
            <td>79</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Max B.</td>
            <td>228</td>
            <td>79</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Lucas F.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Jean Moulin, Montceau les Mines</td>
         </tr>
         <tr>
            <td>Juan A.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Jean Moulin, Montceau les Mines</td>
         </tr>
         <tr>
            <td>Logan G.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Maël T.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Brice H.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Chloé R.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Chloé L.</td>
            <td>228</td>
            <td>79</td>
            <td>Collège Jean Rostand, Doullens</td>
         </tr>
         <tr>
            <td>Geoffrey P.</td>
            <td>227</td>
            <td>93</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Sofiane R.</td>
            <td>227</td>
            <td>93</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Florence M.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Lazaro, Marcq en Baroeul</td>
         </tr>
         <tr>
            <td>Eliott K.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Clairs Soleils, Besançon</td>
         </tr>
         <tr>
            <td>Erwan D.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège le Parc Des Chaumes, Avallon</td>
         </tr>
         <tr>
            <td>Olivier P.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège le Parc Des Chaumes, Avallon</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège du Bredenarde, Audruicq</td>
         </tr>
         <tr>
            <td>Cyril M.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège du Bredenarde, Audruicq</td>
         </tr>
         <tr>
            <td>Philippe G.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Victor Hugo, Gassin</td>
         </tr>
         <tr>
            <td>Enzo G.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Victor Hugo, Gassin</td>
         </tr>
         <tr>
            <td>Bastien M.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Emeric P.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Juliette T.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Lucie C.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Gaelle B.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Nolan M.</td>
            <td>226</td>
            <td>95</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Marion C.</td>
            <td>226</td>
            <td>95</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Maxime S.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Yohann B.</td>
            <td>226</td>
            <td>95</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Remi C.</td>
            <td>225</td>
            <td>112</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Romen S.</td>
            <td>225</td>
            <td>112</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Mélanie L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Héloïse A.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège la Gautrais, Plouasne</td>
         </tr>
         <tr>
            <td>Edouard C.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège la Gautrais, Plouasne</td>
         </tr>
         <tr>
            <td>Julien M.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Paul Langevin, Hennebont</td>
         </tr>
         <tr>
            <td>Kilian L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Theodore L.</td>
            <td>225</td>
            <td>112</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Charly N.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Baptiste S.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège de Terre Sainte, Saint-Pierre</td>
         </tr>
         <tr>
            <td>Adrien R.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège de Terre Sainte, Saint-Pierre</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Charlotte L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Mervenn D.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Adam T.</td>
            <td>225</td>
            <td>112</td>
            <td>Victor Grignard, Lyon</td>
         </tr>
         <tr>
            <td>Océane G.</td>
            <td>225</td>
            <td>112</td>
            <td>Victor Grignard, Lyon</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Mathieu L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Julien D.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Ulric L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Julien P.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Killian D.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Valentin M.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Yazid M.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Christophe D.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Jean Bouin, L'Isle sur la Sorgue</td>
         </tr>
         <tr>
            <td>Django L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Jean Bouin, L'Isle sur la Sorgue</td>
         </tr>
         <tr>
            <td>Antoine F.</td>
            <td>225</td>
            <td>112</td>
            <td>Cité Scolaire Emile Zola, Wattrelos</td>
         </tr>
         <tr>
            <td>Madeleine F.</td>
            <td>225</td>
            <td>112</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Léana L.</td>
            <td>225</td>
            <td>112</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Naoufel B.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Clément P.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
         <tr>
            <td>Alexis B.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Irène Joliot Curie, Fontenilles</td>
         </tr>
         <tr>
            <td>Nathanaël S.</td>
            <td>224</td>
            <td>146</td>
            <td>Claude Chappe, Paris</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Cécile G.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Nicolas O.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège François Rabelais, Neris les Bains</td>
         </tr>
         <tr>
            <td>Nathan S.</td>
            <td>224</td>
            <td>146</td>
            <td>Collège François Rabelais, Neris les Bains</td>
         </tr>
         <tr>
            <td>Kevin V.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Jean Vilar, Angres</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
         <tr>
            <td>Corentin D.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège François Mauriac, Houdan</td>
         </tr>
         <tr>
            <td>Lea L.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Laurine D.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Oscar D.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Leo D.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Célien C.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Ombline L.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Alexis F.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>David D.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Abigail R.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Victor Hugo, Gassin</td>
         </tr>
         <tr>
            <td>Julie B.</td>
            <td>223</td>
            <td>155</td>
            <td>Collège Victor Hugo, Gassin</td>
         </tr>
         <tr>
            <td>Emil P.</td>
            <td>223</td>
            <td>155</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>François-Xavier B.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
         <tr>
            <td>Alban D.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
         <tr>
            <td>Aysenur A.</td>
            <td>222</td>
            <td>170</td>
            <td>Victor Grignard, Lyon</td>
         </tr>
         <tr>
            <td>Inés S.</td>
            <td>222</td>
            <td>170</td>
            <td>Lycée André Malraux, Molina de Segura</td>
         </tr>
         <tr>
            <td>Nicolas H.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Simon G.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Adèle D.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Audrey C.</td>
            <td>222</td>
            <td>170</td>
            <td>Collège Guy de Maupassant, Gareoult</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Jean Vilar, Angres</td>
         </tr>
         <tr>
            <td>Stefen D.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège de Kéranroux, Brest</td>
         </tr>
         <tr>
            <td>Auriane G.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Marie H.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Yohan R.</td>
            <td>221</td>
            <td>180</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Mai Ly L.</td>
            <td>221</td>
            <td>180</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Abdelhakim B.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Gérard Philipe, Pessac</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Gérard Philipe, Pessac</td>
         </tr>
         <tr>
            <td>Julie T.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Julien M.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Jean Mermoz, Marly</td>
         </tr>
         <tr>
            <td>Théo P.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Fleurot d'Hérival, Le Val d'Ajol</td>
         </tr>
         <tr>
            <td>Clara T.</td>
            <td>221</td>
            <td>180</td>
            <td>Collège Des Bréguières, Cagnes sur Mer</td>
         </tr>
         <tr>
            <td>Elise M.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Flore B.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Lucas I.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Corentin M.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Flo R.</td>
            <td>220</td>
            <td>192</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
         <tr>
            <td>Dimitri R.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Léon-Marie Fournet, Jassans Riottier</td>
         </tr>
         <tr>
            <td>Laura M.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Aline C.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Darius Milhaud, Sartrouville</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>220</td>
            <td>192</td>
            <td>Julien Franck, Champigneulles</td>
         </tr>
         <tr>
            <td>Gabriel S.</td>
            <td>220</td>
            <td>192</td>
            <td>Julien Franck, Champigneulles</td>
         </tr>
         <tr>
            <td>Mina B.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Yélène E.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Manon B.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Sarah B.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Alexis J.</td>
            <td>220</td>
            <td>192</td>
            <td>Lycée et Lp Marie Curie, Nogent sur Oise</td>
         </tr>
         <tr>
            <td>Théo F.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Agathe J.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège Denecourt, Bois le Roi</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège St Antoine, Caussade</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>220</td>
            <td>192</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>220</td>
            <td>192</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
         <tr>
            <td>Mary-Lou P.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Carla M.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Madison D.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Anais B.</td>
            <td>219</td>
            <td>214</td>
            <td>Collège Irène Joliot Curie, Mehun sur Yèvre</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>218</td>
            <td>220</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Loïc P.</td>
            <td>218</td>
            <td>220</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Hélène B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Alexis J.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Victor Hugo, Narbonne</td>
         </tr>
         <tr>
            <td>Corentin H.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Armentières</td>
         </tr>
         <tr>
            <td>Abel V.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Armentières</td>
         </tr>
         <tr>
            <td>Hélène Z.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Privé de Marcq-en-Baroeul, Marcq-en-Baroeul Cedex</td>
         </tr>
         <tr>
            <td>Alix S.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Privé de Marcq-en-Baroeul, Marcq-en-Baroeul Cedex</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Julien P.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Axel A.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Dorian T.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Lola S.</td>
            <td>218</td>
            <td>220</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Paul Langevin, Hennebont</td>
         </tr>
         <tr>
            <td>Mael M.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Liam R.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>William D.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Audric B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Emilie S.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Mathias C.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Typhanie P.</td>
            <td>218</td>
            <td>220</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
         <tr>
            <td>Kyliann R.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Nils L.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Etienne S.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Pierre H.</td>
            <td>218</td>
            <td>220</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Carlo A.</td>
            <td>218</td>
            <td>220</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Margot P.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Delphine M.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Urbain D.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Sonia Delaunay, Paris</td>
         </tr>
         <tr>
            <td>Antonin Y.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Sonia Delaunay, Paris</td>
         </tr>
         <tr>
            <td>Annie L.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Camille Saint-Saëns, Chaumont</td>
         </tr>
         <tr>
            <td>Célia B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Eve B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Clara P.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Isaac de Razilly, Saint Jean de Sauves</td>
         </tr>
         <tr>
            <td>Cantin C.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Isaac de Razilly, Saint Jean de Sauves</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Alix M.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Marion M.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Louis Pasteur, Moree</td>
         </tr>
         <tr>
            <td>Justine M.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Louis Pasteur, Moree</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Adrien J.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Théo P.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Sainte-Marguerite-Marie, Josselin</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Sainte-Marguerite-Marie, Josselin</td>
         </tr>
         <tr>
            <td>Sophie T.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Marine B.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Robin S.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Gérard Philipe, Villeparisis</td>
         </tr>
         <tr>
            <td>Alexandre A.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Gérard Philipe, Villeparisis</td>
         </tr>
         <tr>
            <td>Eline D.</td>
            <td>218</td>
            <td>220</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>218</td>
            <td>220</td>
            <td>Institution Saint Joseph du Moncel, Pont Sainte Maxence</td>
         </tr>
         <tr>
            <td>Fanny R.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Aurore M.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Clement D.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Mathieu P.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Floriska P.</td>
            <td>217</td>
            <td>272</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Anne-Florence G.</td>
            <td>217</td>
            <td>272</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Jonathan L.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège René Gaillard, Bénaménil</td>
         </tr>
         <tr>
            <td>Yoan H.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège René Gaillard, Bénaménil</td>
         </tr>
         <tr>
            <td>Elliott L.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Manon P.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Elodie R.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Julien S.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Hugo S.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Peter S.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Romain D.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Juliette F.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège du Val d'Oudon, Le Lion d'Angers</td>
         </tr>
         <tr>
            <td>Suzanne B.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Léa C.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Mayeul U.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Louis S.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Florian P.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Marie M.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Sainte Marie, Montpellier</td>
         </tr>
         <tr>
            <td>Mathis B.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Louis Pasteur, Saint Mars la Jaille</td>
         </tr>
         <tr>
            <td>Manoé K.</td>
            <td>217</td>
            <td>272</td>
            <td>Collège Louis Pasteur, Saint Mars la Jaille</td>
         </tr>
         <tr>
            <td>Arnaud H.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Benjamin U.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Maurine B.</td>
            <td>216</td>
            <td>298</td>
            <td>Lycée Franco-Libanais Nahr-Ibrahim, Jounieh</td>
         </tr>
         <tr>
            <td>Matéo S.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Mathieu R.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Trang Uyen N.</td>
            <td>216</td>
            <td>298</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Quynh Trang P.</td>
            <td>216</td>
            <td>298</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Kemo P.</td>
            <td>216</td>
            <td>298</td>
            <td>Skolaj Diwan Bro-Dreger, Plijidi</td>
         </tr>
         <tr>
            <td>Yoloboy Z.</td>
            <td>216</td>
            <td>298</td>
            <td>Skolaj Diwan Bro-Dreger, Plijidi</td>
         </tr>
         <tr>
            <td>David R.</td>
            <td>216</td>
            <td>298</td>
            <td>Total French School, Aberdeen</td>
         </tr>
         <tr>
            <td>Clara D.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Alain Fournier, Paris</td>
         </tr>
         <tr>
            <td>Hélène B.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Alain Fournier, Paris</td>
         </tr>
         <tr>
            <td>Justine F.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Fiona H.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Paul Harel, Remalard</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Alix B.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Maugan G.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Nicolas C.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Dulcie September, Arcueil</td>
         </tr>
         <tr>
            <td>Mathieu L.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Sara M.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Noémie L.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Mathis G.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège de l'Estey, Saint Jean d'Illac</td>
         </tr>
         <tr>
            <td>Alfonso F.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Elias L.</td>
            <td>216</td>
            <td>298</td>
            <td>La Tilloye, Compiègne</td>
         </tr>
         <tr>
            <td>Charles D.</td>
            <td>216</td>
            <td>298</td>
            <td>La Tilloye, Compiègne</td>
         </tr>
         <tr>
            <td>Louis A.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Emeric A.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Victor F.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Simon M.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Julien N.</td>
            <td>216</td>
            <td>298</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Aurélien B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Simin Palay, Lescar</td>
         </tr>
         <tr>
            <td>Morgane M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Jacques Cartier, Chauny</td>
         </tr>
         <tr>
            <td>Alice B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Elise L.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Jean Dauzié, Saint Mamet</td>
         </tr>
         <tr>
            <td>Marion M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Jean Dauzié, Saint Mamet</td>
         </tr>
         <tr>
            <td>Huu Tan M.</td>
            <td>215</td>
            <td>332</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>John-Rémi G.</td>
            <td>215</td>
            <td>332</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Tim B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Loris B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Maël B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Maxime P.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Thomas Z.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Célian S.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Pierre D.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Angel U.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Duncan O.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Marie-Linh G.</td>
            <td>215</td>
            <td>332</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>My Lan R.</td>
            <td>215</td>
            <td>332</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Alexis G.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Matthias D.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Tom G.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Hugo T.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Dorian D.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Notre Dame, La Salle de Vihiers</td>
         </tr>
         <tr>
            <td>Mickael M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Georges Pompidou, Champtoceaux</td>
         </tr>
         <tr>
            <td>Ornella M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Georges Pompidou, Champtoceaux</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Clément J.</td>
            <td>215</td>
            <td>332</td>
            <td>Pierre et Marie Curie, Pont-Audemer</td>
         </tr>
         <tr>
            <td>Morgan V.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Fénelon Sainte Marie, Paris</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Fénelon Sainte Marie, Paris</td>
         </tr>
         <tr>
            <td>Elie C.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Grimaux, Rochefort</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Grimaux, Rochefort</td>
         </tr>
         <tr>
            <td>Charles I.</td>
            <td>215</td>
            <td>332</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Maud L.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Désirée Y.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Tom M.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Christopher H.</td>
            <td>215</td>
            <td>332</td>
            <td>Collège International Marie de France, Montréal (Québec)</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Vianney C.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Ludivine G.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Jacques Grüber, Colombey les Belles</td>
         </tr>
         <tr>
            <td>Mathilde N.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Jacques Grüber, Colombey les Belles</td>
         </tr>
         <tr>
            <td>Julie T.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Clara A.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Etang Saint Paul, Saint Paul</td>
         </tr>
         <tr>
            <td>Cécile D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Yasmine D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Chloé R.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Alycia S.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Arthis L.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège François Truffaut, Longué</td>
         </tr>
         <tr>
            <td>Dylan P.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège François Truffaut, Longué</td>
         </tr>
         <tr>
            <td>Julien O.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Emilio-Kodjo B.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Thibault H.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Carmen P.</td>
            <td>214</td>
            <td>375</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Vitaline M.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Paul Harel, Remalard</td>
         </tr>
         <tr>
            <td>Romuald V.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>William P.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Marion B.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Marin D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Pierre Larousse, Toucy</td>
         </tr>
         <tr>
            <td>Nathanaël J.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Pierre Larousse, Toucy</td>
         </tr>
         <tr>
            <td>Mehdi T.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Nina B.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège André Marie, Barentin</td>
         </tr>
         <tr>
            <td>Amélie L.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège André Marie, Barentin</td>
         </tr>
         <tr>
            <td>Alexis L.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Damien P.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Pauline L.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Victorine H.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Agathe R.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège François Rabelais, Montpellier</td>
         </tr>
         <tr>
            <td>Salomé C.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège François Rabelais, Montpellier</td>
         </tr>
         <tr>
            <td>Lisa H.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Luana K.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Adèle D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège du Pilat, Bourg-Argental</td>
         </tr>
         <tr>
            <td>Ulysse L.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège du Pilat, Bourg-Argental</td>
         </tr>
         <tr>
            <td>Jonathan D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>214</td>
            <td>375</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Victor P.</td>
            <td>213</td>
            <td>415</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Jules C.</td>
            <td>213</td>
            <td>415</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Léocadie M.</td>
            <td>213</td>
            <td>415</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Carlotta B.</td>
            <td>213</td>
            <td>415</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Lucien B.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Sacré-Coeur, Evron</td>
         </tr>
         <tr>
            <td>Coline B.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Germain Pensivy, Rosporden</td>
         </tr>
         <tr>
            <td>Anne L.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Germain Pensivy, Rosporden</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Agathe G.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Magali S.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Cyril P.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Alexis K.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Florent G.</td>
            <td>213</td>
            <td>415</td>
            <td>Collège Jean Charcot, Joinville le Pont</td>
         </tr>
         <tr>
            <td>Margaux C.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Justine D.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jean Brunet, Avignon</td>
         </tr>
         <tr>
            <td>Raphaël G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jacques Cartier, Chauny</td>
         </tr>
         <tr>
            <td>Camille P.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jacques Cartier, Chauny</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège le Puits de la Roche, Richelieu</td>
         </tr>
         <tr>
            <td>Gwendolyn H.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jean Rostand, Armentières</td>
         </tr>
         <tr>
            <td>Anouchka P.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Chayma M.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Armelle L.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Justine L.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Margot L.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Nail F.</td>
            <td>212</td>
            <td>430</td>
            <td>Lycée International Alexandre Dumas, Alger</td>
         </tr>
         <tr>
            <td>Danil C.</td>
            <td>212</td>
            <td>430</td>
            <td>Lycée International Alexandre Dumas, Alger</td>
         </tr>
         <tr>
            <td>Juliette D.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Fanchon J.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Arno P.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Lucas H.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Estelle A.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Lucie B.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Alix L.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Valentin H.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Vincent L.</td>
            <td>212</td>
            <td>430</td>
            <td>Cesar Franck, Paris</td>
         </tr>
         <tr>
            <td>Allan C.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Germain Pensivy, Rosporden</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Germain Pensivy, Rosporden</td>
         </tr>
         <tr>
            <td>Théo-Gabriel G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jacques Prévert, Migennes</td>
         </tr>
         <tr>
            <td>Alexis G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jacques Prévert, Migennes</td>
         </tr>
         <tr>
            <td>Gwendal D.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Commynes, Tours</td>
         </tr>
         <tr>
            <td>Alexandre M.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Philippe de Commynes, Tours</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
         <tr>
            <td>Aurelien K.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Vendôme, Lyon</td>
         </tr>
         <tr>
            <td>Solenn G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Alice F.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Sacha D.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
         <tr>
            <td>Gaëtan R.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège la Cote Radieuse, Canet en Roussillon</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
         <tr>
            <td>Théo H.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
         <tr>
            <td>Anne-Sophie D.</td>
            <td>212</td>
            <td>430</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Maelle D.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Anaelle C.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Valentin G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège le Puits de la Roche, Richelieu</td>
         </tr>
         <tr>
            <td>Juliette C.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Mathieu F.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Thomas S.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Poincaré Saverne, Saverne</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Anaïs G.</td>
            <td>212</td>
            <td>430</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-28'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde : 15779 élèves</h2>
            <i>Score maximum atteignable : 229</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-28' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-28' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>229</td><td>1</td></tr><tr><td>225</td><td>6</td></tr><tr><td>224</td><td>9</td></tr><tr><td>222</td><td>13</td></tr><tr><td>221</td><td>15</td></tr><tr><td>220</td><td>19</td></tr><tr><td>218</td><td>21</td></tr><tr><td>217</td><td>23</td></tr><tr><td>215</td><td>24</td></tr><tr><td>214</td><td>25</td></tr><tr><td>213</td><td>26</td></tr><tr><td>211</td><td>31</td></tr><tr><td>210</td><td>37</td></tr><tr><td>208</td><td>38</td></tr><tr><td>207</td><td>44</td></tr><tr><td>206</td><td>49</td></tr><tr><td>205</td><td>50</td></tr><tr><td>203</td><td>57</td></tr><tr><td>202</td><td>61</td></tr><tr><td>201</td><td>64</td></tr><tr><td>200</td><td>73</td></tr><tr><td>199</td><td>77</td></tr><tr><td>198</td><td>80</td></tr><tr><td>197</td><td>96</td></tr><tr><td>196</td><td>103</td></tr><tr><td>195</td><td>107</td></tr><tr><td>194</td><td>116</td></tr><tr><td>193</td><td>126</td></tr><tr><td>192</td><td>132</td></tr><tr><td>191</td><td>137</td></tr><tr><td>190</td><td>146</td></tr><tr><td>189</td><td>155</td></tr><tr><td>188</td><td>173</td></tr><tr><td>187</td><td>192</td></tr><tr><td>186</td><td>207</td></tr><tr><td>185</td><td>220</td></tr><tr><td>184</td><td>243</td></tr><tr><td>183</td><td>259</td></tr><tr><td>182</td><td>282</td></tr><tr><td>181</td><td>298</td></tr><tr><td>180</td><td>317</td></tr><tr><td>179</td><td>335</td></tr><tr><td>178</td><td>347</td></tr><tr><td>177</td><td>371</td></tr><tr><td>176</td><td>405</td></tr><tr><td>175</td><td>422</td></tr><tr><td>174</td><td>447</td></tr><tr><td>173</td><td>476</td></tr><tr><td>172</td><td>494</td></tr><tr><td>171</td><td>511</td></tr><tr><td>170</td><td>543</td></tr><tr><td>169</td><td>578</td></tr><tr><td>168</td><td>608</td></tr><tr><td>167</td><td>643</td></tr><tr><td>166</td><td>679</td></tr><tr><td>165</td><td>720</td></tr><tr><td>164</td><td>774</td></tr><tr><td>163</td><td>818</td></tr><tr><td>162</td><td>873</td></tr><tr><td>161</td><td>922</td></tr><tr><td>160</td><td>961</td></tr><tr><td>159</td><td>1015</td></tr><tr><td>158</td><td>1079</td></tr><tr><td>157</td><td>1120</td></tr><tr><td>156</td><td>1196</td></tr><tr><td>155</td><td>1249</td></tr><tr><td>154</td><td>1309</td></tr><tr><td>153</td><td>1352</td></tr><tr><td>152</td><td>1415</td></tr><tr><td>151</td><td>1484</td></tr><tr><td>150</td><td>1540</td></tr><tr><td>149</td><td>1607</td></tr><tr><td>148</td><td>1665</td></tr><tr><td>147</td><td>1741</td></tr><tr><td>146</td><td>1837</td></tr><tr><td>145</td><td>1913</td></tr><tr><td>144</td><td>1995</td></tr><tr><td>143</td><td>2080</td></tr><tr><td>142</td><td>2158</td></tr><tr><td>141</td><td>2245</td></tr><tr><td>140</td><td>2355</td></tr><tr><td>139</td><td>2443</td></tr><tr><td>138</td><td>2544</td></tr><tr><td>137</td><td>2642</td></tr><tr><td>136</td><td>2768</td></tr><tr><td>135</td><td>2891</td></tr><tr><td>134</td><td>3003</td></tr><tr><td>133</td><td>3109</td></tr><tr><td>132</td><td>3231</td></tr><tr><td>131</td><td>3353</td></tr><tr><td>130</td><td>3513</td></tr><tr><td>129</td><td>3631</td></tr><tr><td>128</td><td>3774</td></tr><tr><td>127</td><td>3904</td></tr><tr><td>126</td><td>4042</td></tr><tr><td>125</td><td>4193</td></tr><tr><td>124</td><td>4335</td></tr><tr><td>123</td><td>4490</td></tr><tr><td>122</td><td>4646</td></tr><tr><td>121</td><td>4826</td></tr><tr><td>120</td><td>4982</td></tr><tr><td>119</td><td>5158</td></tr><tr><td>118</td><td>5362</td></tr><tr><td>117</td><td>5513</td></tr><tr><td>116</td><td>5680</td></tr><tr><td>115</td><td>5848</td></tr><tr><td>114</td><td>6023</td></tr><tr><td>113</td><td>6211</td></tr><tr><td>112</td><td>6415</td></tr><tr><td>111</td><td>6612</td></tr><tr><td>110</td><td>6806</td></tr><tr><td>109</td><td>7025</td></tr><tr><td>108</td><td>7219</td></tr><tr><td>107</td><td>7391</td></tr><tr><td>106</td><td>7532</td></tr><tr><td>105</td><td>7714</td></tr><tr><td>104</td><td>7863</td></tr><tr><td>103</td><td>8057</td></tr><tr><td>102</td><td>8258</td></tr><tr><td>101</td><td>8428</td></tr><tr><td>100</td><td>8648</td></tr><tr><td>99</td><td>8832</td></tr><tr><td>98</td><td>9043</td></tr><tr><td>97</td><td>9214</td></tr><tr><td>96</td><td>9421</td></tr><tr><td>95</td><td>9605</td></tr><tr><td>94</td><td>9772</td></tr><tr><td>93</td><td>9960</td></tr><tr><td>92</td><td>10120</td></tr><tr><td>91</td><td>10306</td></tr><tr><td>90</td><td>10439</td></tr><tr><td>89</td><td>10636</td></tr><tr><td>88</td><td>10762</td></tr><tr><td>87</td><td>10936</td></tr><tr><td>86</td><td>11108</td></tr><tr><td>85</td><td>11293</td></tr><tr><td>84</td><td>11470</td></tr><tr><td>83</td><td>11627</td></tr><tr><td>82</td><td>11827</td></tr><tr><td>81</td><td>11956</td></tr><tr><td>80</td><td>12172</td></tr><tr><td>79</td><td>12289</td></tr><tr><td>78</td><td>12423</td></tr><tr><td>77</td><td>12545</td></tr><tr><td>76</td><td>12685</td></tr><tr><td>75</td><td>12813</td></tr><tr><td>74</td><td>12920</td></tr><tr><td>73</td><td>13063</td></tr><tr><td>72</td><td>13166</td></tr><tr><td>71</td><td>13323</td></tr><tr><td>70</td><td>13434</td></tr><tr><td>69</td><td>13574</td></tr><tr><td>68</td><td>13696</td></tr><tr><td>67</td><td>13791</td></tr><tr><td>66</td><td>13899</td></tr><tr><td>65</td><td>13974</td></tr><tr><td>64</td><td>14099</td></tr><tr><td>63</td><td>14192</td></tr><tr><td>62</td><td>14323</td></tr><tr><td>61</td><td>14404</td></tr><tr><td>60</td><td>14496</td></tr><tr><td>59</td><td>14575</td></tr><tr><td>58</td><td>14647</td></tr><tr><td>57</td><td>14725</td></tr><tr><td>56</td><td>14790</td></tr><tr><td>55</td><td>14872</td></tr><tr><td>54</td><td>14919</td></tr><tr><td>53</td><td>15009</td></tr><tr><td>52</td><td>15067</td></tr><tr><td>51</td><td>15123</td></tr><tr><td>50</td><td>15155</td></tr><tr><td>49</td><td>15424</td></tr><tr><td>48</td><td>15463</td></tr><tr><td>47</td><td>15501</td></tr><tr><td>46</td><td>15525</td></tr><tr><td>45</td><td>15549</td></tr><tr><td>44</td><td>15574</td></tr><tr><td>43</td><td>15599</td></tr><tr><td>42</td><td>15618</td></tr><tr><td>41</td><td>15633</td></tr><tr><td>40</td><td>15650</td></tr><tr><td>39</td><td>15673</td></tr><tr><td>38</td><td>15684</td></tr><tr><td>37</td><td>15698</td></tr><tr><td>36</td><td>15705</td></tr><tr><td>35</td><td>15717</td></tr><tr><td>34</td><td>15723</td></tr><tr><td>33</td><td>15742</td></tr><tr><td>32</td><td>15746</td></tr><tr><td>31</td><td>15753</td></tr><tr><td>30</td><td>15757</td></tr><tr><td>29</td><td>15761</td></tr><tr><td>28</td><td>15766</td></tr><tr><td>27</td><td>15769</td></tr><tr><td>26</td><td>15775</td></tr><tr><td>25</td><td>15776</td></tr><tr><td>23</td><td>15777</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 131 premiers ayant un score supérieur ou égal à 193 sont listés ci-dessous.
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
            <td>Rémy A.</td>
            <td>229</td>
            <td>1</td>
            <td>Fernand Darchicourt, Hénin Beaumont</td>
         </tr>
         <tr>
            <td>Julien F.</td>
            <td>229</td>
            <td>1</td>
            <td>Fernand Darchicourt, Hénin Beaumont</td>
         </tr>
         <tr>
            <td>Thélio D.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
         <tr>
            <td>Álvaro A.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Pierrick T.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Hors C.</td>
            <td>225</td>
            <td>6</td>
            <td>Lycée Anatole France, Lillers</td>
         </tr>
         <tr>
            <td>Louise T.</td>
            <td>225</td>
            <td>6</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Julie P.</td>
            <td>225</td>
            <td>6</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Salomé D.</td>
            <td>224</td>
            <td>9</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Inès S.</td>
            <td>224</td>
            <td>9</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>224</td>
            <td>9</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Laurent N.</td>
            <td>224</td>
            <td>9</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Eloi B.</td>
            <td>222</td>
            <td>13</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Basile D.</td>
            <td>222</td>
            <td>13</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Henri C.</td>
            <td>221</td>
            <td>15</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Charbel E.</td>
            <td>221</td>
            <td>15</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Rami A.</td>
            <td>221</td>
            <td>15</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Cyril B.</td>
            <td>221</td>
            <td>15</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>220</td>
            <td>19</td>
            <td>Lycée Paul Sabatier, Carcassonne</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>220</td>
            <td>19</td>
            <td>Lycée Paul Sabatier, Carcassonne</td>
         </tr>
         <tr>
            <td>Solal G.</td>
            <td>218</td>
            <td>21</td>
            <td>Lycée Jean Baptiste Say, Paris</td>
         </tr>
         <tr>
            <td>Clément D.</td>
            <td>218</td>
            <td>21</td>
            <td>Lycée Jean Baptiste Say, Paris</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>217</td>
            <td>23</td>
            <td>Lycée Cordouan, Royan</td>
         </tr>
         <tr>
            <td>Marius C.</td>
            <td>215</td>
            <td>24</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Bogdan M.</td>
            <td>214</td>
            <td>25</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Matoug O.</td>
            <td>213</td>
            <td>26</td>
            <td>Lycée Jacques Cartier, Saint Malo</td>
         </tr>
         <tr>
            <td>Maureen G.</td>
            <td>213</td>
            <td>26</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Danae O.</td>
            <td>213</td>
            <td>26</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Tristan F.</td>
            <td>213</td>
            <td>26</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Matthieu B.</td>
            <td>213</td>
            <td>26</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Marius M.</td>
            <td>211</td>
            <td>31</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
         <tr>
            <td>Florian N.</td>
            <td>211</td>
            <td>31</td>
            <td>Lycée Voltaire, Wingles</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>211</td>
            <td>31</td>
            <td>Lycée Voltaire, Wingles</td>
         </tr>
         <tr>
            <td>Enzo R.</td>
            <td>211</td>
            <td>31</td>
            <td>Lycée Robert de Luzarches, Amiens</td>
         </tr>
         <tr>
            <td>Yann F.</td>
            <td>211</td>
            <td>31</td>
            <td>Lycée Robert de Luzarches, Amiens</td>
         </tr>
         <tr>
            <td>Lloyd L.</td>
            <td>211</td>
            <td>31</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Joris M.</td>
            <td>210</td>
            <td>37</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
         <tr>
            <td>Marc T.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Apolline D.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Grandmont, Tours</td>
         </tr>
         <tr>
            <td>Yoann L.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Michaël L.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Marie G.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Notre Dame de Bonnes Nouvelles, Beaupreau</td>
         </tr>
         <tr>
            <td>Henrik H.</td>
            <td>208</td>
            <td>38</td>
            <td>Lycée Notre Dame de Bonnes Nouvelles, Beaupreau</td>
         </tr>
         <tr>
            <td>Godefroy H.</td>
            <td>207</td>
            <td>44</td>
            <td>Lycée Val de Garonne, Marmande</td>
         </tr>
         <tr>
            <td>Alban V.</td>
            <td>207</td>
            <td>44</td>
            <td>Lycée Val de Garonne, Marmande</td>
         </tr>
         <tr>
            <td>Max H.</td>
            <td>207</td>
            <td>44</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Cyril C.</td>
            <td>207</td>
            <td>44</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>207</td>
            <td>44</td>
            <td>Lycée Alain René Lesage, Vannes</td>
         </tr>
         <tr>
            <td>Nans D.</td>
            <td>206</td>
            <td>49</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
         <tr>
            <td>Tom G.</td>
            <td>205</td>
            <td>50</td>
            <td>Lycée Anita Conti, Bruz</td>
         </tr>
         <tr>
            <td>Malo C.</td>
            <td>205</td>
            <td>50</td>
            <td>Lycée Anita Conti, Bruz</td>
         </tr>
         <tr>
            <td>Milène A.</td>
            <td>205</td>
            <td>50</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Cécile B.</td>
            <td>205</td>
            <td>50</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Adrien F.</td>
            <td>205</td>
            <td>50</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>205</td>
            <td>50</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Dorian C.</td>
            <td>205</td>
            <td>50</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Léa L.</td>
            <td>203</td>
            <td>57</td>
            <td>Lycée Georges Duby, Luynes</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>203</td>
            <td>57</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Nessim K.</td>
            <td>203</td>
            <td>57</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>203</td>
            <td>57</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>202</td>
            <td>61</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Alice G.</td>
            <td>202</td>
            <td>61</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Aurélien G.</td>
            <td>202</td>
            <td>61</td>
            <td>Lycée Boucher de Perthes, Abbeville</td>
         </tr>
         <tr>
            <td>Lucie C.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Pierre Forest de Maubeuge, Maubeuge</td>
         </tr>
         <tr>
            <td>Justine F.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Pierre Forest de Maubeuge, Maubeuge</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Martin R.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Baudimont St Charles, Arras</td>
         </tr>
         <tr>
            <td>Rémi B.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Yukio C.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Tony Z.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Maxime N.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Gaspard Monge, Savigny sur Orge</td>
         </tr>
         <tr>
            <td>Elise G.</td>
            <td>201</td>
            <td>64</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Antoine T.</td>
            <td>200</td>
            <td>73</td>
            <td>Lycée Val de Garonne, Marmande</td>
         </tr>
         <tr>
            <td>Marie S.</td>
            <td>200</td>
            <td>73</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Claire T.</td>
            <td>200</td>
            <td>73</td>
            <td>Collège Lycée d'Arsonval, Brive</td>
         </tr>
         <tr>
            <td>Benjamin D.</td>
            <td>200</td>
            <td>73</td>
            <td>Lycée Boucher de Perthes, Abbeville</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>199</td>
            <td>77</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Océane H.</td>
            <td>199</td>
            <td>77</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>199</td>
            <td>77</td>
            <td>Lycée Docteur Lacroix, Narbonne</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Ugo M.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Irenn C.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Amandine N.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Marine P.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Bryan H.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Jean-Baptiste P.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Aurélien M.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Alain René Lesage, Vannes</td>
         </tr>
         <tr>
            <td>Carl S.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Stanislas P.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Aurélien L.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Voltaire, Wingles</td>
         </tr>
         <tr>
            <td>Tahiri I.</td>
            <td>198</td>
            <td>80</td>
            <td>Lycée Voltaire, Wingles</td>
         </tr>
         <tr>
            <td>Lancelot L.</td>
            <td>198</td>
            <td>80</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Ludovic R.</td>
            <td>197</td>
            <td>96</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Clément G.</td>
            <td>197</td>
            <td>96</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Benjamin M.</td>
            <td>197</td>
            <td>96</td>
            <td>Lycée Renè Cassin, Arpajon</td>
         </tr>
         <tr>
            <td>Alexanrde M.</td>
            <td>197</td>
            <td>96</td>
            <td>Lycée Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Alexis V.</td>
            <td>197</td>
            <td>96</td>
            <td>Lycée Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>197</td>
            <td>96</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Gelel R.</td>
            <td>197</td>
            <td>96</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Simon R.</td>
            <td>196</td>
            <td>103</td>
            <td>Lycée Grandmont, Tours</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>196</td>
            <td>103</td>
            <td>Lycée Grandmont, Tours</td>
         </tr>
         <tr>
            <td>Maël G.</td>
            <td>196</td>
            <td>103</td>
            <td>Lycée Pablo Néruda, Dieppe</td>
         </tr>
         <tr>
            <td>Noé C.</td>
            <td>196</td>
            <td>103</td>
            <td>Lycée Georges Duby, Luynes</td>
         </tr>
         <tr>
            <td>Valentine F.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Mel P.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Anatole de Monzie, Bazas</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Anatole de Monzie, Bazas</td>
         </tr>
         <tr>
            <td>Kemal Y.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Edouard Belin, Vesoul</td>
         </tr>
         <tr>
            <td>Matéo M.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Tituan A.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Colin R.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Sacré Coeur, Yssingeaux</td>
         </tr>
         <tr>
            <td>Quentin P.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Sacré Coeur, Yssingeaux</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>195</td>
            <td>107</td>
            <td>Lycée Pierre Mendes France, Peronne</td>
         </tr>
         <tr>
            <td>Nadim I.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Abdel Kader, Beyrouth</td>
         </tr>
         <tr>
            <td>Sara M.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Abdel Kader, Beyrouth</td>
         </tr>
         <tr>
            <td>Amaury D.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Nathan F.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Cédric F.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Olivier R.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Gustave Eiffel, Bordeaux</td>
         </tr>
         <tr>
            <td>Jade L.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Louis I.</td>
            <td>194</td>
            <td>116</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Paul I.</td>
            <td>193</td>
            <td>126</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Simon T.</td>
            <td>193</td>
            <td>126</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Max B.</td>
            <td>193</td>
            <td>126</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Emilien R.</td>
            <td>193</td>
            <td>126</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Sébastien Y.</td>
            <td>193</td>
            <td>126</td>
            <td>École Européenne de Strasbourg, Strasbourg</td>
         </tr>
         <tr>
            <td>Aladdin G.</td>
            <td>193</td>
            <td>126</td>
            <td>Lycée Racine, Paris</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première-Terminale : 13939 élèves</h2>
            <i>Score maximum atteignable : 229</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>229</td><td>1</td></tr><tr><td>226</td><td>18</td></tr><tr><td>225</td><td>19</td></tr><tr><td>222</td><td>26</td></tr><tr><td>221</td><td>34</td></tr><tr><td>219</td><td>38</td></tr><tr><td>218</td><td>42</td></tr><tr><td>217</td><td>46</td></tr><tr><td>216</td><td>49</td></tr><tr><td>214</td><td>52</td></tr><tr><td>213</td><td>63</td></tr><tr><td>212</td><td>66</td></tr><tr><td>211</td><td>67</td></tr><tr><td>210</td><td>69</td></tr><tr><td>208</td><td>74</td></tr><tr><td>207</td><td>76</td></tr><tr><td>206</td><td>84</td></tr><tr><td>205</td><td>89</td></tr><tr><td>204</td><td>95</td></tr><tr><td>203</td><td>98</td></tr><tr><td>202</td><td>101</td></tr><tr><td>201</td><td>107</td></tr><tr><td>200</td><td>114</td></tr><tr><td>199</td><td>116</td></tr><tr><td>198</td><td>120</td></tr><tr><td>197</td><td>125</td></tr><tr><td>196</td><td>137</td></tr><tr><td>195</td><td>143</td></tr><tr><td>194</td><td>154</td></tr><tr><td>193</td><td>163</td></tr><tr><td>192</td><td>166</td></tr><tr><td>191</td><td>175</td></tr><tr><td>190</td><td>184</td></tr><tr><td>189</td><td>189</td></tr><tr><td>188</td><td>192</td></tr><tr><td>187</td><td>202</td></tr><tr><td>186</td><td>214</td></tr><tr><td>185</td><td>225</td></tr><tr><td>184</td><td>238</td></tr><tr><td>183</td><td>243</td></tr><tr><td>182</td><td>263</td></tr><tr><td>181</td><td>278</td></tr><tr><td>180</td><td>289</td></tr><tr><td>179</td><td>319</td></tr><tr><td>178</td><td>336</td></tr><tr><td>177</td><td>345</td></tr><tr><td>176</td><td>371</td></tr><tr><td>175</td><td>391</td></tr><tr><td>174</td><td>416</td></tr><tr><td>173</td><td>423</td></tr><tr><td>172</td><td>441</td></tr><tr><td>171</td><td>460</td></tr><tr><td>170</td><td>483</td></tr><tr><td>169</td><td>523</td></tr><tr><td>168</td><td>552</td></tr><tr><td>167</td><td>572</td></tr><tr><td>166</td><td>610</td></tr><tr><td>165</td><td>632</td></tr><tr><td>164</td><td>668</td></tr><tr><td>163</td><td>716</td></tr><tr><td>162</td><td>741</td></tr><tr><td>161</td><td>790</td></tr><tr><td>160</td><td>844</td></tr><tr><td>159</td><td>911</td></tr><tr><td>158</td><td>947</td></tr><tr><td>157</td><td>1000</td></tr><tr><td>156</td><td>1031</td></tr><tr><td>155</td><td>1106</td></tr><tr><td>154</td><td>1138</td></tr><tr><td>153</td><td>1193</td></tr><tr><td>152</td><td>1266</td></tr><tr><td>151</td><td>1335</td></tr><tr><td>150</td><td>1391</td></tr><tr><td>149</td><td>1445</td></tr><tr><td>148</td><td>1506</td></tr><tr><td>147</td><td>1569</td></tr><tr><td>146</td><td>1641</td></tr><tr><td>145</td><td>1717</td></tr><tr><td>144</td><td>1790</td></tr><tr><td>143</td><td>1870</td></tr><tr><td>142</td><td>1960</td></tr><tr><td>141</td><td>2040</td></tr><tr><td>140</td><td>2149</td></tr><tr><td>139</td><td>2247</td></tr><tr><td>138</td><td>2315</td></tr><tr><td>137</td><td>2405</td></tr><tr><td>136</td><td>2518</td></tr><tr><td>135</td><td>2618</td></tr><tr><td>134</td><td>2726</td></tr><tr><td>133</td><td>2859</td></tr><tr><td>132</td><td>2967</td></tr><tr><td>131</td><td>3095</td></tr><tr><td>130</td><td>3192</td></tr><tr><td>129</td><td>3307</td></tr><tr><td>128</td><td>3448</td></tr><tr><td>127</td><td>3572</td></tr><tr><td>126</td><td>3706</td></tr><tr><td>125</td><td>3833</td></tr><tr><td>124</td><td>3981</td></tr><tr><td>123</td><td>4110</td></tr><tr><td>122</td><td>4265</td></tr><tr><td>121</td><td>4401</td></tr><tr><td>120</td><td>4546</td></tr><tr><td>119</td><td>4704</td></tr><tr><td>118</td><td>4889</td></tr><tr><td>117</td><td>5042</td></tr><tr><td>116</td><td>5215</td></tr><tr><td>115</td><td>5367</td></tr><tr><td>114</td><td>5486</td></tr><tr><td>113</td><td>5647</td></tr><tr><td>112</td><td>5814</td></tr><tr><td>111</td><td>5967</td></tr><tr><td>110</td><td>6129</td></tr><tr><td>109</td><td>6302</td></tr><tr><td>108</td><td>6460</td></tr><tr><td>107</td><td>6630</td></tr><tr><td>106</td><td>6830</td></tr><tr><td>105</td><td>6993</td></tr><tr><td>104</td><td>7170</td></tr><tr><td>103</td><td>7347</td></tr><tr><td>102</td><td>7508</td></tr><tr><td>101</td><td>7657</td></tr><tr><td>100</td><td>7786</td></tr><tr><td>99</td><td>7970</td></tr><tr><td>98</td><td>8129</td></tr><tr><td>97</td><td>8279</td></tr><tr><td>96</td><td>8444</td></tr><tr><td>95</td><td>8597</td></tr><tr><td>94</td><td>8789</td></tr><tr><td>93</td><td>8951</td></tr><tr><td>92</td><td>9114</td></tr><tr><td>91</td><td>9279</td></tr><tr><td>90</td><td>9433</td></tr><tr><td>89</td><td>9613</td></tr><tr><td>88</td><td>9798</td></tr><tr><td>87</td><td>9948</td></tr><tr><td>86</td><td>10099</td></tr><tr><td>85</td><td>10227</td></tr><tr><td>84</td><td>10378</td></tr><tr><td>83</td><td>10521</td></tr><tr><td>82</td><td>10655</td></tr><tr><td>81</td><td>10787</td></tr><tr><td>80</td><td>10931</td></tr><tr><td>79</td><td>11074</td></tr><tr><td>78</td><td>11210</td></tr><tr><td>77</td><td>11321</td></tr><tr><td>76</td><td>11459</td></tr><tr><td>75</td><td>11581</td></tr><tr><td>74</td><td>11684</td></tr><tr><td>73</td><td>11816</td></tr><tr><td>72</td><td>11921</td></tr><tr><td>71</td><td>12010</td></tr><tr><td>70</td><td>12109</td></tr><tr><td>69</td><td>12215</td></tr><tr><td>68</td><td>12318</td></tr><tr><td>67</td><td>12407</td></tr><tr><td>66</td><td>12502</td></tr><tr><td>65</td><td>12617</td></tr><tr><td>64</td><td>12703</td></tr><tr><td>63</td><td>12776</td></tr><tr><td>62</td><td>12839</td></tr><tr><td>61</td><td>12913</td></tr><tr><td>60</td><td>12975</td></tr><tr><td>59</td><td>13062</td></tr><tr><td>58</td><td>13116</td></tr><tr><td>57</td><td>13160</td></tr><tr><td>56</td><td>13208</td></tr><tr><td>55</td><td>13262</td></tr><tr><td>54</td><td>13302</td></tr><tr><td>53</td><td>13344</td></tr><tr><td>52</td><td>13394</td></tr><tr><td>51</td><td>13429</td></tr><tr><td>50</td><td>13469</td></tr><tr><td>49</td><td>13645</td></tr><tr><td>48</td><td>13666</td></tr><tr><td>47</td><td>13698</td></tr><tr><td>46</td><td>13723</td></tr><tr><td>45</td><td>13745</td></tr><tr><td>44</td><td>13771</td></tr><tr><td>43</td><td>13790</td></tr><tr><td>42</td><td>13804</td></tr><tr><td>41</td><td>13822</td></tr><tr><td>40</td><td>13834</td></tr><tr><td>39</td><td>13842</td></tr><tr><td>38</td><td>13857</td></tr><tr><td>37</td><td>13874</td></tr><tr><td>36</td><td>13883</td></tr><tr><td>35</td><td>13886</td></tr><tr><td>34</td><td>13889</td></tr><tr><td>33</td><td>13899</td></tr><tr><td>32</td><td>13907</td></tr><tr><td>31</td><td>13914</td></tr><tr><td>30</td><td>13918</td></tr><tr><td>29</td><td>13919</td></tr><tr><td>27</td><td>13926</td></tr><tr><td>26</td><td>13928</td></tr><tr><td>25</td><td>13930</td></tr><tr><td>24</td><td>13934</td></tr><tr><td>22</td><td>13936</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 115 premiers ayant un score supérieur ou égal à 200 sont listés ci-dessous.
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
            <td>Maxime T.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Victor P.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Loïc J.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Léo J.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Blaise C.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Thibaut P.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Sofiane E.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Pascal P.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Sylvain C.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>229</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>François B.</td>
            <td>226</td>
            <td>18</td>
            <td>Lycée Jacques Cartier, Saint Malo</td>
         </tr>
         <tr>
            <td>Mathieu V.</td>
            <td>225</td>
            <td>19</td>
            <td>Lycée Alexis de Tocqueville, Grasse</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>225</td>
            <td>19</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>225</td>
            <td>19</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Kévin B.</td>
            <td>225</td>
            <td>19</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Robin B.</td>
            <td>225</td>
            <td>19</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Alex J.</td>
            <td>225</td>
            <td>19</td>
            <td>La Fontaine Des Eaux, Dinan</td>
         </tr>
         <tr>
            <td>Martin H.</td>
            <td>225</td>
            <td>19</td>
            <td>La Fontaine Des Eaux, Dinan</td>
         </tr>
         <tr>
            <td>Boris F.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Antoine S.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Marlioz, Aix-les-Bains</td>
         </tr>
         <tr>
            <td>Bastien R.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Marlioz, Aix-les-Bains</td>
         </tr>
         <tr>
            <td>Mélody L.</td>
            <td>222</td>
            <td>26</td>
            <td>Edouard Herriot, Lyon</td>
         </tr>
         <tr>
            <td>Martin S.</td>
            <td>222</td>
            <td>26</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>222</td>
            <td>26</td>
            <td>Lycée Anita Conti, Bruz</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>221</td>
            <td>34</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Fabien L.</td>
            <td>221</td>
            <td>34</td>
            <td>Lycée Marlioz, Aix-les-Bains</td>
         </tr>
         <tr>
            <td>Eloik E.</td>
            <td>221</td>
            <td>34</td>
            <td>Lycée Des Mascareignes, Moka</td>
         </tr>
         <tr>
            <td>Iliana C.</td>
            <td>221</td>
            <td>34</td>
            <td>Lycée Des Mascareignes, Moka</td>
         </tr>
         <tr>
            <td>Robin G.</td>
            <td>219</td>
            <td>38</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>219</td>
            <td>38</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>John B.</td>
            <td>219</td>
            <td>38</td>
            <td>Lycée Eugène Ionesco, Issy-les-Moulineaux</td>
         </tr>
         <tr>
            <td>Adrien L.</td>
            <td>219</td>
            <td>38</td>
            <td>Lycée Eugène Ionesco, Issy-les-Moulineaux</td>
         </tr>
         <tr>
            <td>Jules B.</td>
            <td>218</td>
            <td>42</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Florian R.</td>
            <td>218</td>
            <td>42</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Clement B.</td>
            <td>218</td>
            <td>42</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Kévin E.</td>
            <td>218</td>
            <td>42</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Bryan G.</td>
            <td>217</td>
            <td>46</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Riwan D.</td>
            <td>217</td>
            <td>46</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Pierre D.</td>
            <td>217</td>
            <td>46</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Lionel H.</td>
            <td>216</td>
            <td>49</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Luc H.</td>
            <td>216</td>
            <td>49</td>
            <td>Lycée Français Marcel Pagnol, Asuncion</td>
         </tr>
         <tr>
            <td>Alex J.</td>
            <td>216</td>
            <td>49</td>
            <td>Lycée Français Marcel Pagnol, Asuncion</td>
         </tr>
         <tr>
            <td>Jason C.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Libano-Allemand (Deutsche Schule Jounieh), Jounieh</td>
         </tr>
         <tr>
            <td>Arthur N.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Caroline H.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Fabien G.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Clément C.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Clémence Q.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Gustave Eiffel, Cachan</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Pablo Picasso, Perpignan</td>
         </tr>
         <tr>
            <td>Benjamin G.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Cuvier, Montbeliard</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Cuvier, Montbeliard</td>
         </tr>
         <tr>
            <td>Noe F.</td>
            <td>214</td>
            <td>52</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Olivier B.</td>
            <td>213</td>
            <td>63</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Pierre P.</td>
            <td>213</td>
            <td>63</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Palmyre B.</td>
            <td>213</td>
            <td>63</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Romain H.</td>
            <td>212</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Charbonnières les Bains</td>
         </tr>
         <tr>
            <td>Arthur F.</td>
            <td>211</td>
            <td>67</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Karim A.</td>
            <td>211</td>
            <td>67</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>210</td>
            <td>69</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Sarah C.</td>
            <td>210</td>
            <td>69</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Mathilde J.</td>
            <td>210</td>
            <td>69</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Sacha P.</td>
            <td>210</td>
            <td>69</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Tanguy R.</td>
            <td>210</td>
            <td>69</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>208</td>
            <td>74</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Robin P.</td>
            <td>208</td>
            <td>74</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Paul F.</td>
            <td>207</td>
            <td>76</td>
            <td>Edouard Herriot, Lyon</td>
         </tr>
         <tr>
            <td>Miléna S.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Pierre de Coubertin, Bolbec</td>
         </tr>
         <tr>
            <td>Corentin D.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Jeanne d'Albret, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Cédric T.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Jeanne d'Albret, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Baptiste B.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Issa N.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Killian H.</td>
            <td>207</td>
            <td>76</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Ketil G.</td>
            <td>206</td>
            <td>84</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Samuel D.</td>
            <td>206</td>
            <td>84</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>206</td>
            <td>84</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Charles D.</td>
            <td>206</td>
            <td>84</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>206</td>
            <td>84</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Guillaume O.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Lucassi R.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Nicolassi K.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Marguerite B.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Benoît J.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Florian H.</td>
            <td>205</td>
            <td>89</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>204</td>
            <td>95</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Nhat T.</td>
            <td>204</td>
            <td>95</td>
            <td>Lycée Jean Baptiste Say, Paris</td>
         </tr>
         <tr>
            <td>Ines J.</td>
            <td>204</td>
            <td>95</td>
            <td>Lycée Jean Baptiste Say, Paris</td>
         </tr>
         <tr>
            <td>Barnabé C.</td>
            <td>203</td>
            <td>98</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Maël D.</td>
            <td>203</td>
            <td>98</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Lucas G.</td>
            <td>203</td>
            <td>98</td>
            <td>Carnot, Dijon</td>
         </tr>
         <tr>
            <td>Alex R.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Marcelin Berthelot, Questembert</td>
         </tr>
         <tr>
            <td>Alexis Q.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Marcelin Berthelot, Questembert</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Jordane P.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>202</td>
            <td>101</td>
            <td>Lycée Germaine Tillion, Sain Bel</td>
         </tr>
         <tr>
            <td>Thibault S.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Etienne B.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Edwin G.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Blaise Pascal, Charbonnières les Bains</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Pierre Corneille, Rouen</td>
         </tr>
         <tr>
            <td>Vincent R.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Pierre Corneille, Rouen</td>
         </tr>
         <tr>
            <td>Simon C.</td>
            <td>201</td>
            <td>107</td>
            <td>Lycée Camille Claudel, Pontault Combault</td>
         </tr>
         <tr>
            <td>Lorenzo Si F.</td>
            <td>200</td>
            <td>114</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Moana J.</td>
            <td>200</td>
            <td>114</td>
            <td>Lycée St Jean Baptiste de Lasalle, Nantes</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div></div>
