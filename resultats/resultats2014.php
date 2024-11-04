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

<!--<li>228364 élèves ont participé, dont 49% de filles.</li>
<li>1543 établissements ont pris part au concours.</li>
-->

      <div id='results'>
         <ul><li><a href='#tabs-32'>6ème-5ème</a></li><li><a href='#tabs-33'>4ème-3ème</a></li><li><a href='#tabs-34'>Seconde</a></li><li><a href='#tabs-35'>Première-Terminale</a></li><li><a href='#tabs-36'>Seconde pro</a></li><li><a href='#tabs-37'>Première-Terminale pro</a></li></ul><div id='tabs-32'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème-5ème : 107319 élèves</h2>
            <i>Score maximum atteignable : 177</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-32' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-32' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>177</td><td>1</td></tr><tr><td>176</td><td>22</td></tr><tr><td>175</td><td>26</td></tr><tr><td>174</td><td>38</td></tr><tr><td>173</td><td>53</td></tr><tr><td>172</td><td>64</td></tr><tr><td>171</td><td>77</td></tr><tr><td>170</td><td>95</td></tr><tr><td>169</td><td>114</td></tr><tr><td>168</td><td>131</td></tr><tr><td>167</td><td>145</td></tr><tr><td>166</td><td>156</td></tr><tr><td>165</td><td>171</td></tr><tr><td>164</td><td>181</td></tr><tr><td>163</td><td>196</td></tr><tr><td>162</td><td>209</td></tr><tr><td>161</td><td>227</td></tr><tr><td>160</td><td>266</td></tr><tr><td>159</td><td>279</td></tr><tr><td>158</td><td>315</td></tr><tr><td>157</td><td>357</td></tr><tr><td>156</td><td>375</td></tr><tr><td>155</td><td>398</td></tr><tr><td>154</td><td>441</td></tr><tr><td>153</td><td>489</td></tr><tr><td>152</td><td>528</td></tr><tr><td>151</td><td>571</td></tr><tr><td>150</td><td>620</td></tr><tr><td>149</td><td>663</td></tr><tr><td>148</td><td>743</td></tr><tr><td>147</td><td>821</td></tr><tr><td>146</td><td>897</td></tr><tr><td>145</td><td>975</td></tr><tr><td>144</td><td>1054</td></tr><tr><td>143</td><td>1124</td></tr><tr><td>142</td><td>1209</td></tr><tr><td>141</td><td>1311</td></tr><tr><td>140</td><td>1429</td></tr><tr><td>139</td><td>1571</td></tr><tr><td>138</td><td>1726</td></tr><tr><td>137</td><td>1883</td></tr><tr><td>136</td><td>2048</td></tr><tr><td>135</td><td>2183</td></tr><tr><td>134</td><td>2346</td></tr><tr><td>133</td><td>2513</td></tr><tr><td>132</td><td>2716</td></tr><tr><td>131</td><td>2871</td></tr><tr><td>130</td><td>3065</td></tr><tr><td>129</td><td>3319</td></tr><tr><td>128</td><td>3605</td></tr><tr><td>127</td><td>3919</td></tr><tr><td>126</td><td>4258</td></tr><tr><td>125</td><td>4603</td></tr><tr><td>124</td><td>4965</td></tr><tr><td>123</td><td>5350</td></tr><tr><td>122</td><td>5699</td></tr><tr><td>121</td><td>6172</td></tr><tr><td>120</td><td>6612</td></tr><tr><td>119</td><td>7006</td></tr><tr><td>118</td><td>7473</td></tr><tr><td>117</td><td>8072</td></tr><tr><td>116</td><td>8682</td></tr><tr><td>115</td><td>9304</td></tr><tr><td>114</td><td>9920</td></tr><tr><td>113</td><td>10622</td></tr><tr><td>112</td><td>11224</td></tr><tr><td>111</td><td>11902</td></tr><tr><td>110</td><td>12821</td></tr><tr><td>109</td><td>13823</td></tr><tr><td>108</td><td>14557</td></tr><tr><td>107</td><td>15446</td></tr><tr><td>106</td><td>16365</td></tr><tr><td>105</td><td>17303</td></tr><tr><td>104</td><td>18313</td></tr><tr><td>103</td><td>19366</td></tr><tr><td>102</td><td>20323</td></tr><tr><td>101</td><td>21309</td></tr><tr><td>100</td><td>22539</td></tr><tr><td>99</td><td>23775</td></tr><tr><td>98</td><td>24883</td></tr><tr><td>97</td><td>26018</td></tr><tr><td>96</td><td>27296</td></tr><tr><td>95</td><td>28551</td></tr><tr><td>94</td><td>29851</td></tr><tr><td>93</td><td>31102</td></tr><tr><td>92</td><td>32368</td></tr><tr><td>91</td><td>33758</td></tr><tr><td>90</td><td>35214</td></tr><tr><td>89</td><td>36658</td></tr><tr><td>88</td><td>38050</td></tr><tr><td>87</td><td>39434</td></tr><tr><td>86</td><td>40825</td></tr><tr><td>85</td><td>42277</td></tr><tr><td>84</td><td>43869</td></tr><tr><td>83</td><td>45381</td></tr><tr><td>82</td><td>46933</td></tr><tr><td>81</td><td>48433</td></tr><tr><td>80</td><td>50064</td></tr><tr><td>79</td><td>51547</td></tr><tr><td>78</td><td>53048</td></tr><tr><td>77</td><td>54568</td></tr><tr><td>76</td><td>56052</td></tr><tr><td>75</td><td>57521</td></tr><tr><td>74</td><td>59091</td></tr><tr><td>73</td><td>60569</td></tr><tr><td>72</td><td>62114</td></tr><tr><td>71</td><td>63681</td></tr><tr><td>70</td><td>65059</td></tr><tr><td>69</td><td>66472</td></tr><tr><td>68</td><td>67799</td></tr><tr><td>67</td><td>69152</td></tr><tr><td>66</td><td>70791</td></tr><tr><td>65</td><td>72003</td></tr><tr><td>64</td><td>73319</td></tr><tr><td>63</td><td>74965</td></tr><tr><td>62</td><td>76227</td></tr><tr><td>61</td><td>77476</td></tr><tr><td>60</td><td>78562</td></tr><tr><td>59</td><td>79745</td></tr><tr><td>58</td><td>81029</td></tr><tr><td>57</td><td>82201</td></tr><tr><td>56</td><td>83375</td></tr><tr><td>55</td><td>84823</td></tr><tr><td>54</td><td>85873</td></tr><tr><td>53</td><td>86945</td></tr><tr><td>52</td><td>87919</td></tr><tr><td>51</td><td>88776</td></tr><tr><td>50</td><td>89612</td></tr><tr><td>49</td><td>90735</td></tr><tr><td>48</td><td>91748</td></tr><tr><td>47</td><td>92622</td></tr><tr><td>46</td><td>93355</td></tr><tr><td>45</td><td>94426</td></tr><tr><td>44</td><td>95102</td></tr><tr><td>43</td><td>95971</td></tr><tr><td>42</td><td>96597</td></tr><tr><td>41</td><td>97199</td></tr><tr><td>40</td><td>97731</td></tr><tr><td>39</td><td>98654</td></tr><tr><td>38</td><td>99188</td></tr><tr><td>37</td><td>99872</td></tr><tr><td>36</td><td>100382</td></tr><tr><td>35</td><td>101037</td></tr><tr><td>34</td><td>101413</td></tr><tr><td>33</td><td>101920</td></tr><tr><td>32</td><td>102241</td></tr><tr><td>31</td><td>102638</td></tr><tr><td>30</td><td>102932</td></tr><tr><td>29</td><td>103475</td></tr><tr><td>28</td><td>103670</td></tr><tr><td>27</td><td>104317</td></tr><tr><td>26</td><td>104550</td></tr><tr><td>25</td><td>104732</td></tr><tr><td>24</td><td>104883</td></tr><tr><td>23</td><td>105176</td></tr><tr><td>22</td><td>105322</td></tr><tr><td>21</td><td>105567</td></tr><tr><td>20</td><td>105624</td></tr><tr><td>19</td><td>105716</td></tr><tr><td>18</td><td>105818</td></tr><tr><td>17</td><td>106419</td></tr><tr><td>16</td><td>106450</td></tr><tr><td>15</td><td>106504</td></tr><tr><td>14</td><td>106538</td></tr><tr><td>13</td><td>106576</td></tr><tr><td>12</td><td>106590</td></tr><tr><td>11</td><td>106614</td></tr><tr><td>10</td><td>106632</td></tr><tr><td>9</td><td>106768</td></tr><tr><td>8</td><td>106781</td></tr><tr><td>7</td><td>106807</td></tr><tr><td>6</td><td>106815</td></tr><tr><td>5</td><td>106822</td></tr><tr><td>4</td><td>106824</td></tr><tr><td>2</td><td>106831</td></tr><tr><td>1</td><td>106836</td></tr><tr><td>0</td><td>106844</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 619 premiers ayant un score supérieur ou égal à 151 sont listés ci-dessous.
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
            <td>Rémi D.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Quentin P.</td>
            <td>177</td>
            <td>1</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Gabriel R.</td>
            <td>177</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Gautier D.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Anaïs D.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Nathanael M.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Justin C.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Colin B.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Tom H.</td>
            <td>177</td>
            <td>1</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Geoffrey D.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Jules M.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Éric G.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Tom H.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Jean Monnet, Coulogne</td>
         </tr>
         <tr>
            <td>Léane M.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Julie F.</td>
            <td>177</td>
            <td>1</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
         <tr>
            <td>Bastien S.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Edgar B.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Mallia L.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>A C.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Jonathan P.</td>
            <td>177</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Lou Anne C.</td>
            <td>176</td>
            <td>22</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Olivier B.</td>
            <td>176</td>
            <td>22</td>
            <td>Collège Stanislas Cannes, Cannes</td>
         </tr>
         <tr>
            <td>Camille M.</td>
            <td>176</td>
            <td>22</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Laura G.</td>
            <td>176</td>
            <td>22</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>175</td>
            <td>26</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Octave G.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Katheesan J.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Pierre F.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Paul Dangla, Agen</td>
         </tr>
         <tr>
            <td>Corentin J.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Matiss F.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Jason V.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Noé P.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Hugo C.</td>
            <td>175</td>
            <td>26</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Colombe D.</td>
            <td>175</td>
            <td>26</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Clara C.</td>
            <td>175</td>
            <td>26</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Jerome S.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Frison-Roche, La Broque</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Théophile V.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Adrien D.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Teodora S.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Lou-Ana M.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Marièle I.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Gambetta, Arras Cédex</td>
         </tr>
         <tr>
            <td>Henri L.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Millevoye, Abbeville</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Nathan C.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Heloise V.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Melody C.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Emmanuel P.</td>
            <td>174</td>
            <td>38</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Eléo B.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège Jacques Brel, Villers Bretonneux</td>
         </tr>
         <tr>
            <td>Olivier D.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège-Lycée Bon Sauveur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Guillaume M.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège Roger Ruel, St Didier en Velay</td>
         </tr>
         <tr>
            <td>Martin C.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège Roger Ruel, St Didier en Velay</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>173</td>
            <td>53</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Yann G.</td>
            <td>173</td>
            <td>53</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Theo M.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Tom P.</td>
            <td>173</td>
            <td>53</td>
            <td>Malraux, Granville</td>
         </tr>
         <tr>
            <td>Corinne C.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Nathalie G.</td>
            <td>173</td>
            <td>53</td>
            <td>Les Sables Blancs, Concarneau</td>
         </tr>
         <tr>
            <td>Ehouarn L.</td>
            <td>173</td>
            <td>53</td>
            <td>Collège les Korrigans, Carnac</td>
         </tr>
         <tr>
            <td>Loris F.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Mathis B.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Tanguy L.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Roxane D.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Eliott B.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Kawrantin L.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Lea P.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Emilie F.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>172</td>
            <td>64</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Léonard C.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Saint Aubin la Salle, Saint Sylvain d'Anjou</td>
         </tr>
         <tr>
            <td>Loïc C.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Joseph-Anglade, Lézignan-Corbières</td>
         </tr>
         <tr>
            <td>Melvin T.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Henri Durez, Estaires</td>
         </tr>
         <tr>
            <td>Timothé B.</td>
            <td>171</td>
            <td>77</td>
            <td>Lycée Français Alioune Blondin Beye de Luanda, Luanda</td>
         </tr>
         <tr>
            <td>Raphaël P.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Henri Matisse, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Stéphane J.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Henri Matisse, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Louise H.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Jean Rostand, Auchy les Hesdin</td>
         </tr>
         <tr>
            <td>Marc V.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>171</td>
            <td>77</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Dimitri C.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Amir h.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Océane D.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Giacometti, Paris</td>
         </tr>
         <tr>
            <td>Noam B.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Giacometti, Paris</td>
         </tr>
         <tr>
            <td>Blanche S.</td>
            <td>171</td>
            <td>77</td>
            <td>Lycée Français de San Francisco, San Francisco</td>
         </tr>
         <tr>
            <td>Alexis C.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>171</td>
            <td>77</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Romain G.</td>
            <td>170</td>
            <td>95</td>
            <td>Pablo Picasso, Vallauris</td>
         </tr>
         <tr>
            <td>Maxime J.</td>
            <td>170</td>
            <td>95</td>
            <td>Pablo Picasso, Vallauris</td>
         </tr>
         <tr>
            <td>Lisa F.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Ambrune D.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Pierrot D.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Mathis J.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Tom B.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Michael N.</td>
            <td>170</td>
            <td>95</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Nicolas C.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Marie S.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Salomé M.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Des Roseaux, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Océane F.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Des Roseaux, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Darel P.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Yohann M.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Forlen, Saint-Louis</td>
         </tr>
         <tr>
            <td>Miriam H.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Elif G.</td>
            <td>170</td>
            <td>95</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Amaury G.</td>
            <td>169</td>
            <td>114</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Ralf E.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Pierre Mendès France, Parthenay</td>
         </tr>
         <tr>
            <td>Fabien L.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Pierre Mendès France, Parthenay</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Léo L.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège André Marie, Barentin</td>
         </tr>
         <tr>
            <td>Philéas D.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Maeva M.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Thomas A.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Eloïse D.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Voltaire, Besançon</td>
         </tr>
         <tr>
            <td>Ewan F.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège le Parc de Villeroy, Mennecy</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège le Parc de Villeroy, Mennecy</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Kenza E.</td>
            <td>169</td>
            <td>114</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Yohan C.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Rayan D.</td>
            <td>169</td>
            <td>114</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Alice P.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Medhi G.</td>
            <td>168</td>
            <td>131</td>
            <td>Internat d'Excellence de Montpellier, Montpellier</td>
         </tr>
         <tr>
            <td>Léa S.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Ivan G.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège Paul Bert, Malakoff</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège du Marquenterre, Rue</td>
         </tr>
         <tr>
            <td>Hippolyte R.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Esteban F.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Camilo M.</td>
            <td>168</td>
            <td>131</td>
            <td>Lycée Louis Pasteur, Bogota</td>
         </tr>
         <tr>
            <td>Manuela C.</td>
            <td>168</td>
            <td>131</td>
            <td>Lycée Louis Pasteur, Bogota</td>
         </tr>
         <tr>
            <td>Sarah A.</td>
            <td>168</td>
            <td>131</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Lori B.</td>
            <td>168</td>
            <td>131</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Anais E.</td>
            <td>168</td>
            <td>131</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>168</td>
            <td>131</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Clément F.</td>
            <td>168</td>
            <td>131</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Clara M.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Léon Tolstoi, Le Mans</td>
         </tr>
         <tr>
            <td>Noé M.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Clara M.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Maëva P.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Clara J.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Manon D.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Judicael M.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Flore W.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Kenzo W.</td>
            <td>167</td>
            <td>145</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Noé B.</td>
            <td>167</td>
            <td>145</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Jacques Prévert, Bourg sur Gironde</td>
         </tr>
         <tr>
            <td>Ugo F.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Jacques Prévert, Bourg sur Gironde</td>
         </tr>
         <tr>
            <td>Yohan V.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Jean Lurçat, Villejuif</td>
         </tr>
         <tr>
            <td>Mathilde L.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Gabriel M.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Mohamed R.</td>
            <td>166</td>
            <td>156</td>
            <td>Lycée Abdel Kader, Beyrouth</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Tania P.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Enzo N.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège François Mitterrand, Moissac</td>
         </tr>
         <tr>
            <td>Marwan N.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège François Mitterrand, Moissac</td>
         </tr>
         <tr>
            <td>Arthur F.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Jacques Cartier, Chauny</td>
         </tr>
         <tr>
            <td>Valentin R.</td>
            <td>166</td>
            <td>156</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Djemila G.</td>
            <td>166</td>
            <td>156</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Nolwenn P.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Valentin C.</td>
            <td>166</td>
            <td>156</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Maeva V.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Vassili M.</td>
            <td>165</td>
            <td>171</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Bbb B.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Téva V.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Florian K.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Salima A.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Margot M.</td>
            <td>165</td>
            <td>171</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Candice G.</td>
            <td>165</td>
            <td>171</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Agathe G.</td>
            <td>165</td>
            <td>171</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Philippe R.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Gerard Holder, Cayenne</td>
         </tr>
         <tr>
            <td>Chloé L.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Anissia B.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Adam B.</td>
            <td>164</td>
            <td>181</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Macéo M.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Tudual D.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Matys D.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Louise R.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Fernand Léger, Le Petit Quevilly</td>
         </tr>
         <tr>
            <td>Shakira M.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Fernand Léger, Le Petit Quevilly</td>
         </tr>
         <tr>
            <td>Mathilde T.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Anna H.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Léa L.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Emma P.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège Simon Wiesenthal, Saint Vallier de Thiey</td>
         </tr>
         <tr>
            <td>Rida O.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège André Chêne, Fleury-les-Aubrais</td>
         </tr>
         <tr>
            <td>Aimery P.</td>
            <td>164</td>
            <td>181</td>
            <td>Collège André Chêne, Fleury-les-Aubrais</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>163</td>
            <td>196</td>
            <td>Moliere, Beaumont</td>
         </tr>
         <tr>
            <td>Maxime F.</td>
            <td>163</td>
            <td>196</td>
            <td>Moliere, Beaumont</td>
         </tr>
         <tr>
            <td>Rémy G.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Billy C.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Jean Monnet, Aubigny en Artois</td>
         </tr>
         <tr>
            <td>Marwan C.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Forlen, Saint-Louis</td>
         </tr>
         <tr>
            <td>Corentin F.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Gaston A.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Saad A.</td>
            <td>163</td>
            <td>196</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Manuel N.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Rémi B.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Maël L.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Guy de Maupassant, Saint Martin de Fontenay</td>
         </tr>
         <tr>
            <td>Alizée B.</td>
            <td>163</td>
            <td>196</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Juliette J.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Kassandra B.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Jean Monnet, Janze</td>
         </tr>
         <tr>
            <td>Julien T.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Albane B.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Nathan P.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>Elias N.</td>
            <td>162</td>
            <td>209</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Kamil S.</td>
            <td>162</td>
            <td>209</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Solal A.</td>
            <td>162</td>
            <td>209</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Bastien F.</td>
            <td>162</td>
            <td>209</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Francois B.</td>
            <td>162</td>
            <td>209</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Léopold R.</td>
            <td>162</td>
            <td>209</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>François L.</td>
            <td>162</td>
            <td>209</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Margot G.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège de la Vallée de l'Ouanne, Château-Renard</td>
         </tr>
         <tr>
            <td>Pascal G.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Paul Langevin, Ville-la-Grand</td>
         </tr>
         <tr>
            <td>Gautier B.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Baptiste P.</td>
            <td>162</td>
            <td>209</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Tesse B.</td>
            <td>162</td>
            <td>209</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Clemence D.</td>
            <td>162</td>
            <td>209</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Adrien C.</td>
            <td>161</td>
            <td>227</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Julie P.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Camille R.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Hélène B.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Rene Cassin, Lillers</td>
         </tr>
         <tr>
            <td>Bastien H.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège du Grand Ried, Sundhouse</td>
         </tr>
         <tr>
            <td>Camille M.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Maël P.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Corélian S.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Laïna T.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Bastien L.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Amand Brionne, Saint Aubin d'Aubigne</td>
         </tr>
         <tr>
            <td>Maria V.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Georges Charpak, Goussainville</td>
         </tr>
         <tr>
            <td>Claudie R.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Elsa H.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Silvio V.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Raphaël M.</td>
            <td>161</td>
            <td>227</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Laroche J.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Maelys V.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Margot V.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Gurvan E.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Paul Langevin, Hennebont</td>
         </tr>
         <tr>
            <td>Sonia T.</td>
            <td>161</td>
            <td>227</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Carla S.</td>
            <td>161</td>
            <td>227</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège André Miclot, Portbail</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Albert Camus, Frontenay Rohan-Rohan</td>
         </tr>
         <tr>
            <td>Zoe E.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Dane B.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Justine C.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Yanis A.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Camille M.</td>
            <td>161</td>
            <td>227</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
         <tr>
            <td>Alexa B.</td>
            <td>161</td>
            <td>227</td>
            <td>Lycée Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Helene F.</td>
            <td>161</td>
            <td>227</td>
            <td>Lycée Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Brieuc M.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>François B.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Paul Langevin, Avesnes Lez Aubert</td>
         </tr>
         <tr>
            <td>Natân S.</td>
            <td>161</td>
            <td>227</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Provisoire de Montévrain, Serris</td>
         </tr>
         <tr>
            <td>Benjamin R.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Provisoire de Montévrain, Serris</td>
         </tr>
         <tr>
            <td>Roxane M.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Jeanne V.</td>
            <td>161</td>
            <td>227</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Clara L.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Jacques Mercusot, Sombernon</td>
         </tr>
         <tr>
            <td>Eloann L.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Jacques Prévert, Flavy le Martel</td>
         </tr>
         <tr>
            <td>Sayed A.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Paul Eluard, Chatillon</td>
         </tr>
         <tr>
            <td>Emma R.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Cécile N.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Ulysse L.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Marianne D.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>160</td>
            <td>266</td>
            <td>Lycée la Bourdonnais, Forest Side</td>
         </tr>
         <tr>
            <td>Zoe P.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Jordane G.</td>
            <td>160</td>
            <td>266</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Anthony L.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Anatole France, Gerzat</td>
         </tr>
         <tr>
            <td>Antea P.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Arnaud W.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Des Racines et Des Ailes, Drulingen</td>
         </tr>
         <tr>
            <td>Jeremy A.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Des Racines et Des Ailes, Drulingen</td>
         </tr>
         <tr>
            <td>Marc N.</td>
            <td>159</td>
            <td>279</td>
            <td>Lycée Alphonse de Lamartine, Tripoli</td>
         </tr>
         <tr>
            <td>Romain M.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jacques Monod, Caen</td>
         </tr>
         <tr>
            <td>Dylan N.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jean Lacaze, Grisolles</td>
         </tr>
         <tr>
            <td>Giraud G.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jean Lacaze, Grisolles</td>
         </tr>
         <tr>
            <td>Aurélien H.</td>
            <td>159</td>
            <td>279</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Allan A.</td>
            <td>159</td>
            <td>279</td>
            <td>Lycée Descartes, Rabat</td>
         </tr>
         <tr>
            <td>Quentin F.</td>
            <td>159</td>
            <td>279</td>
            <td>Lycée Descartes, Rabat</td>
         </tr>
         <tr>
            <td>Gregory M.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Corentin G.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Emilien R.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jean Mermoz, Angers</td>
         </tr>
         <tr>
            <td>Enzo B.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jean Mermoz, Angers</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Michel Bégon, Blois</td>
         </tr>
         <tr>
            <td>Ouassim M.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Gaël T.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Jean-Pierre Vernant, 31500</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Dylan L.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Louis Bouilhet, Cany-Barville</td>
         </tr>
         <tr>
            <td>Brice G.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Voltaire, Remoulins</td>
         </tr>
         <tr>
            <td>Tom P.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Mathis L.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Agathe C.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège les Dentelliers, Calais</td>
         </tr>
         <tr>
            <td>Juliens S.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège André Malraux, Louvres</td>
         </tr>
         <tr>
            <td>Kilian L.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège André Malraux, Louvres</td>
         </tr>
         <tr>
            <td>Elena B.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Revesz-Long, Crest</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
         <tr>
            <td>Cyril S.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
         <tr>
            <td>Gabrielle B.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Hugo F.</td>
            <td>159</td>
            <td>279</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Sebastien C.</td>
            <td>159</td>
            <td>279</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Jeanne P.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Ambre G.</td>
            <td>159</td>
            <td>279</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Max V.</td>
            <td>159</td>
            <td>279</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Jean Rostand, Le Cateau-Cambresis</td>
         </tr>
         <tr>
            <td>Grégoire D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Jean Rostand, Le Cateau-Cambresis</td>
         </tr>
         <tr>
            <td>Lucile D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Gaetan D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Henri D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Jérémie M.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège C.A. Gérard, Masevaux</td>
         </tr>
         <tr>
            <td>Cristina S.</td>
            <td>158</td>
            <td>315</td>
            <td>Lycée Français de Valence, Paterna</td>
         </tr>
         <tr>
            <td>Lucas J.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Ilona P.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Clarine P.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Lilian J.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Adrien P.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Melvin M.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Mont-Miroir, Maiche</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Mont-Miroir, Maiche</td>
         </tr>
         <tr>
            <td>Grégoire R.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Sainte-Marie, Meaux</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Sainte-Marie, Meaux</td>
         </tr>
         <tr>
            <td>Mateo M.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Côme J.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Joffre, Montpellier</td>
         </tr>
         <tr>
            <td>Inès C.</td>
            <td>158</td>
            <td>315</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Maiwenn G.</td>
            <td>158</td>
            <td>315</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Augustin G.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Giroud de Villette, Clamecy</td>
         </tr>
         <tr>
            <td>Roman B.</td>
            <td>158</td>
            <td>315</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Heloise D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Albert Ball, Annoeullin</td>
         </tr>
         <tr>
            <td>Guillaume D.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Albert Ball, Annoeullin</td>
         </tr>
         <tr>
            <td>Justine L.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Jean Rostand, Auchy les Hesdin</td>
         </tr>
         <tr>
            <td>Laurine Y.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Jean Rostand, St Germain du Puy</td>
         </tr>
         <tr>
            <td>Ludovic V.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Louison B.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Juan L.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Léo R.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Louise Michel, Maringues</td>
         </tr>
         <tr>
            <td>Mathieu G.</td>
            <td>158</td>
            <td>315</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Maxence W.</td>
            <td>158</td>
            <td>315</td>
            <td>Lycée Bonaparte, Doha</td>
         </tr>
         <tr>
            <td>Eva B.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Thaïs A.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Tiphaine B.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Medric P.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège St Antoine, Caussade</td>
         </tr>
         <tr>
            <td>Daniel V.</td>
            <td>158</td>
            <td>315</td>
            <td>Lycée Louis Pasteur, Bogota</td>
         </tr>
         <tr>
            <td>Léa G.</td>
            <td>158</td>
            <td>315</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Henri Dunant, Merville</td>
         </tr>
         <tr>
            <td>Grosselin C.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
         <tr>
            <td>Matheo T.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Maxime N.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Victor C.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Gabin V.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Thais F.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Paul P.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Jean Rostand, St Germain du Puy</td>
         </tr>
         <tr>
            <td>Elliot O.</td>
            <td>157</td>
            <td>357</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Dorian R.</td>
            <td>157</td>
            <td>357</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Tic T.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège la Durantiere, Nantes</td>
         </tr>
         <tr>
            <td>Romane C.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Joseph Delteil, Limoux</td>
         </tr>
         <tr>
            <td>Félix D.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Joseph Delteil, Limoux</td>
         </tr>
         <tr>
            <td>Sébastien B.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Swann P.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Roger Semet, Digoin</td>
         </tr>
         <tr>
            <td>Franck F.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Roger Semet, Digoin</td>
         </tr>
         <tr>
            <td>Nawid F.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Fevrier J.</td>
            <td>157</td>
            <td>357</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Gaëtan L.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège du Sacré-Coeur, Langres</td>
         </tr>
         <tr>
            <td>Colin O.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Aldo D.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Louis Sandras, Anizy le Chateau</td>
         </tr>
         <tr>
            <td>Mathis J.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Louis Sandras, Anizy le Chateau</td>
         </tr>
         <tr>
            <td>Morgane B.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège les Cités Unies, Combs-la-Ville</td>
         </tr>
         <tr>
            <td>Cassioppée P.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège les Cités Unies, Combs-la-Ville</td>
         </tr>
         <tr>
            <td>Baptiste L.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Blaise Pascal, Longuenesse Cedex</td>
         </tr>
         <tr>
            <td>Tom D.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Blaise Pascal, Longuenesse Cedex</td>
         </tr>
         <tr>
            <td>Erwan T.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Martin L.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Lucas V.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Guy Liard, Mondeville</td>
         </tr>
         <tr>
            <td>Guillermo C.</td>
            <td>156</td>
            <td>375</td>
            <td>Lycée Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Federico C.</td>
            <td>156</td>
            <td>375</td>
            <td>Lycée Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Alice G.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Hilel L.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Elsa Triolet, Paris</td>
         </tr>
         <tr>
            <td>Nicolas V.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Agathe A.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Sfeir J.</td>
            <td>156</td>
            <td>375</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Vaccher E.</td>
            <td>156</td>
            <td>375</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Augustin L.</td>
            <td>156</td>
            <td>375</td>
            <td>Collège Mitterrand, Arras</td>
         </tr>
         <tr>
            <td>Vianney G.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Matthieu H.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Evolene H.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
         <tr>
            <td>Yaëlle L.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
         <tr>
            <td>Liam L.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Anthony M.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Eliot F.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Luc V.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Lise D.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
         <tr>
            <td>Jérémy C.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
         <tr>
            <td>Lauryne K.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Denis Diderot, Dainville</td>
         </tr>
         <tr>
            <td>Teddy C.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Norbert Casteret, Ruelle</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Norbert Casteret, Ruelle</td>
         </tr>
         <tr>
            <td>Quentin Z.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Mathias H.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Gauthier F.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Urban P.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         <tr>
            <td>Clémence L.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Boris Vian, St Priest</td>
         </tr>
         <tr>
            <td>Alaric T.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Boris Vian, St Priest</td>
         </tr>
         <tr>
            <td>Edgar G.</td>
            <td>155</td>
            <td>398</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Jack L.</td>
            <td>155</td>
            <td>398</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Malo V.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Louis L.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège la Roche, Saint Eloy les Mines</td>
         </tr>
         <tr>
            <td>Mathis B.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège la Roche, Saint Eloy les Mines</td>
         </tr>
         <tr>
            <td>Colin B.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Louise Weiss, Strasbourg</td>
         </tr>
         <tr>
            <td>Florian M.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Louise Weiss, Strasbourg</td>
         </tr>
         <tr>
            <td>Kevin C.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège la Vanlée, Bréhal</td>
         </tr>
         <tr>
            <td>Yaara W.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège du Pays de l'Herbasse, St Donat sur l'Herbasse</td>
         </tr>
         <tr>
            <td>Lucas V.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Ingwiller, Ingwiller</td>
         </tr>
         <tr>
            <td>Lou-Ann C.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Hugo V.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Wandrille B.</td>
            <td>155</td>
            <td>398</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Adrien D.</td>
            <td>155</td>
            <td>398</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Victor F.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Antonin T.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Lo Trentanel, Gignac</td>
         </tr>
         <tr>
            <td>Hiroki T.</td>
            <td>155</td>
            <td>398</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Santorin Y.</td>
            <td>155</td>
            <td>398</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Manuela L.</td>
            <td>155</td>
            <td>398</td>
            <td>Lycée Louis Pasteur, Bogota</td>
         </tr>
         <tr>
            <td>Ramzi T.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Aimé M.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Louis Pasteur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Gautier A.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Charlotte G.</td>
            <td>155</td>
            <td>398</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Tania S.</td>
            <td>154</td>
            <td>441</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Gustave Flaubert, Pont l'Evêque</td>
         </tr>
         <tr>
            <td>Louis P.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Gustave Flaubert, Pont l'Evêque</td>
         </tr>
         <tr>
            <td>Raphaëlle D.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Angéline M.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Timothé D.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Jean Monnet, Coulogne</td>
         </tr>
         <tr>
            <td>Etienne K.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège le Bois de l'Enclume, Trilport</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège le Bois de l'Enclume, Trilport</td>
         </tr>
         <tr>
            <td>Julie P.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Ines B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Jacques Daviel, La Barre en Ouche</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Jacques Daviel, La Barre en Ouche</td>
         </tr>
         <tr>
            <td>Matthieu B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Nathan G.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Olivier L.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Martin Schongauer, Ostwald</td>
         </tr>
         <tr>
            <td>Liam B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Martin Schongauer, Ostwald</td>
         </tr>
         <tr>
            <td>Lucas V.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Joseph-Anglade, Lézignan-Corbières</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Joseph-Anglade, Lézignan-Corbières</td>
         </tr>
         <tr>
            <td>Florian C.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège David Marcelle, Billy-Montigny</td>
         </tr>
         <tr>
            <td>Alexis H.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Louise D.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Maëva M.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Saint-Simon, Jouars-Pontchartrain</td>
         </tr>
         <tr>
            <td>Marius D.</td>
            <td>154</td>
            <td>441</td>
            <td>Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Tristan G.</td>
            <td>154</td>
            <td>441</td>
            <td>Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Margaux K.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Pirithika S.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Eline B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Irène B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Victor Hugo, Besançon</td>
         </tr>
         <tr>
            <td>Aurélien D.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Julien F.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Villey-Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Jules H.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Villey-Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Benjamin R.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Lucas J.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Nils S.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Proudhon, Besancon</td>
         </tr>
         <tr>
            <td>Aurèle B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Saint Dominique, Chalon sur Saône</td>
         </tr>
         <tr>
            <td>Hugo N.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Saint Dominique, Chalon sur Saône</td>
         </tr>
         <tr>
            <td>Julia E.</td>
            <td>154</td>
            <td>441</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Mathias B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Tom A.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Clement B.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Charlemagne, Lesquin</td>
         </tr>
         <tr>
            <td>Bastien R.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Charlemagne, Lesquin</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>154</td>
            <td>441</td>
            <td>Landowski, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Sébastien S.</td>
            <td>154</td>
            <td>441</td>
            <td>Landowski, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Jolan G.</td>
            <td>154</td>
            <td>441</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Emiliano B.</td>
            <td>154</td>
            <td>441</td>
            <td>Lycée Franco-Péruvien, Lima 33</td>
         </tr>
         <tr>
            <td>Louis-Melchior G.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Gabriel B.</td>
            <td>153</td>
            <td>489</td>
            <td>Jean Jaures, Montfermeil</td>
         </tr>
         <tr>
            <td>Théodore D.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Titus R.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Louis Pasteur, Nesle</td>
         </tr>
         <tr>
            <td>Eliott-Isaac F.</td>
            <td>153</td>
            <td>489</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>William H.</td>
            <td>153</td>
            <td>489</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Capucine B.</td>
            <td>153</td>
            <td>489</td>
            <td>La Neustrie, Bouguenais</td>
         </tr>
         <tr>
            <td>Florence S.</td>
            <td>153</td>
            <td>489</td>
            <td>La Neustrie, Bouguenais</td>
         </tr>
         <tr>
            <td>Lison T.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Corisande M.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Paul T.</td>
            <td>153</td>
            <td>489</td>
            <td>Saint Joseph de la Salle, Auxerre</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>153</td>
            <td>489</td>
            <td>Saint Joseph de la Salle, Auxerre</td>
         </tr>
         <tr>
            <td>Theodore C.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Aigremont, Roulans</td>
         </tr>
         <tr>
            <td>Anthony H.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Valentin K.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Des Trois Pays, Hegenheim</td>
         </tr>
         <tr>
            <td>Victor B.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Des Trois Pays, Hegenheim</td>
         </tr>
         <tr>
            <td>Jules V.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Corentin D.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Pierre Suc, Saint Sulpice</td>
         </tr>
         <tr>
            <td>Titouan L.</td>
            <td>153</td>
            <td>489</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>David E.</td>
            <td>153</td>
            <td>489</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Robin H.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Noé P.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Léonard de Vinci, Saint-Marcel</td>
         </tr>
         <tr>
            <td>Cyril C.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Tom L.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Noah Q.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Corentin R.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège du Pays de l'Herbasse, St Donat sur l'Herbasse</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Alex Mézenc, Le Pouzin</td>
         </tr>
         <tr>
            <td>Léo G.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Alex Mézenc, Le Pouzin</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège François Rabelais, Montpellier</td>
         </tr>
         <tr>
            <td>Theodore B.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège François Rabelais, Montpellier</td>
         </tr>
         <tr>
            <td>Melchior P.</td>
            <td>153</td>
            <td>489</td>
            <td>Les Cordeliers - Notre Dame de la Victoire, Dinan</td>
         </tr>
         <tr>
            <td>Lou L.</td>
            <td>153</td>
            <td>489</td>
            <td>Les Cordeliers - Notre Dame de la Victoire, Dinan</td>
         </tr>
         <tr>
            <td>Tom B.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Camerone M.</td>
            <td>153</td>
            <td>489</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Arnaud L.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Jolan P.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Jules G.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Lou Redounet, Uzes</td>
         </tr>
         <tr>
            <td>Rayan D.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Youssef F.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Maxime J.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Jeanne d'Arc, Orléans</td>
         </tr>
         <tr>
            <td>Clemence C.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Maéva C.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Alexandre Z.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège André Malraux, Paris</td>
         </tr>
         <tr>
            <td>Xuan B.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Pierre-Alexandre S.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Paul T.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
         <tr>
            <td>Paulin L.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
         <tr>
            <td>Luc A.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Tom E.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Manon T.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Maiwenn L.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Madeleine Renaud, Serris</td>
         </tr>
         <tr>
            <td>Eliott E.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         <tr>
            <td>Théo R.</td>
            <td>152</td>
            <td>528</td>
            <td>Stéphane Piobetta, Aubigny</td>
         </tr>
         <tr>
            <td>Ewan P.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Zoé W.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Amiral Lejeune, Amiens</td>
         </tr>
         <tr>
            <td>Célia U.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Amiral Lejeune, Amiens</td>
         </tr>
         <tr>
            <td>Lou N.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Maurine P.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Zohra A.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Tom G.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Jeremy M.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Victor Schoelcher, Torcy</td>
         </tr>
         <tr>
            <td>Mathieu V.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Clara L.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Lucine J.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Voltaire, Besançon</td>
         </tr>
         <tr>
            <td>Léonie M.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Choiseul, Amboise</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Saint Joseph, Le Havre</td>
         </tr>
         <tr>
            <td>Dorian D.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Saint Joseph, Le Havre</td>
         </tr>
         <tr>
            <td>F M.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Seï P.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Theo L.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Axel P.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Benjamin T.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Totoff G.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Marilyne A.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Max L.</td>
            <td>152</td>
            <td>528</td>
            <td>Lycée Français de San Francisco, San Francisco</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>152</td>
            <td>528</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Léo F.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Denecourt, Bois le Roi</td>
         </tr>
         <tr>
            <td>Inès B.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Robert Schuman, Reims</td>
         </tr>
         <tr>
            <td>Pauline D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Robert Schuman, Reims</td>
         </tr>
         <tr>
            <td>Sébastien V.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Pierrick S.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jeanne d'Arc, Orléans</td>
         </tr>
         <tr>
            <td>Samuel C.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Edouard Branly, Nogent-sur-Marne</td>
         </tr>
         <tr>
            <td>Ophelia B.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège le Grand Champ, Pont-de-Chéruy</td>
         </tr>
         <tr>
            <td>Camille L.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège le Grand Champ, Pont-de-Chéruy</td>
         </tr>
         <tr>
            <td>Emile M.</td>
            <td>151</td>
            <td>571</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège les Saints Anges, Pontivy</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège les Saints Anges, Pontivy</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Antoine R.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Laurent M.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Mattéo P.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jennepin, Cousolre</td>
         </tr>
         <tr>
            <td>Tanina T.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Emmie R.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Bastien D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jean Rostand, Trélazé</td>
         </tr>
         <tr>
            <td>Tristan D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jean Rostand, Trélazé</td>
         </tr>
         <tr>
            <td>Noan D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Matteo D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Lucas K.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Tanguy R.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Joakim V.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège le Herapel, Cocheren</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Jean Jaurès, Calais</td>
         </tr>
         <tr>
            <td>Solenn D.</td>
            <td>151</td>
            <td>571</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Eliott A.</td>
            <td>151</td>
            <td>571</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Nathan K.</td>
            <td>151</td>
            <td>571</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Ilona C.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Do Mistrau, Suze la Rousse</td>
         </tr>
         <tr>
            <td>Naïs A.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Do Mistrau, Suze la Rousse</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>151</td>
            <td>571</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Simon R.</td>
            <td>151</td>
            <td>571</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Tom A.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Gérard Philipe, Aubigny-sur-Nère</td>
         </tr>
         <tr>
            <td>Amandine G.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Gérard Philipe, Aubigny-sur-Nère</td>
         </tr>
         <tr>
            <td>Mbemba S.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Voltaire, Besançon</td>
         </tr>
         <tr>
            <td>Lucie B.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Léa F.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Victor F.</td>
            <td>151</td>
            <td>571</td>
            <td>Villey Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Arthur H.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Voltaire, Remoulins</td>
         </tr>
         <tr>
            <td>Victor G.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Fernand Lechanteur, Caen</td>
         </tr>
         <tr>
            <td>Maureen D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège de la Vallée de l'Ouanne, Château-Renard</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>151</td>
            <td>571</td>
            <td>Lasalle Passy Buzenval, Rueil Malmaison</td>
         </tr>
         <tr>
            <td>Eliaz B.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Emile D.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Emma M.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         <tr>
            <td>Marie-Camille P.</td>
            <td>151</td>
            <td>571</td>
            <td>Collège Notre Dame de France, Abbeville</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-33'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème-3ème : 81414 élèves</h2>
            <i>Score maximum atteignable : 188</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-33' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-33' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>188</td><td>1</td></tr><tr><td>187</td><td>46</td></tr><tr><td>186</td><td>107</td></tr><tr><td>185</td><td>154</td></tr><tr><td>184</td><td>273</td></tr><tr><td>183</td><td>369</td></tr><tr><td>182</td><td>479</td></tr><tr><td>181</td><td>574</td></tr><tr><td>180</td><td>684</td></tr><tr><td>179</td><td>766</td></tr><tr><td>178</td><td>851</td></tr><tr><td>177</td><td>917</td></tr><tr><td>176</td><td>990</td></tr><tr><td>175</td><td>1093</td></tr><tr><td>174</td><td>1211</td></tr><tr><td>173</td><td>1351</td></tr><tr><td>172</td><td>1491</td></tr><tr><td>171</td><td>1636</td></tr><tr><td>170</td><td>1759</td></tr><tr><td>169</td><td>1904</td></tr><tr><td>168</td><td>2057</td></tr><tr><td>167</td><td>2208</td></tr><tr><td>166</td><td>2360</td></tr><tr><td>165</td><td>2518</td></tr><tr><td>164</td><td>2696</td></tr><tr><td>163</td><td>2888</td></tr><tr><td>162</td><td>3166</td></tr><tr><td>161</td><td>3415</td></tr><tr><td>160</td><td>3635</td></tr><tr><td>159</td><td>3907</td></tr><tr><td>158</td><td>4143</td></tr><tr><td>157</td><td>4419</td></tr><tr><td>156</td><td>4667</td></tr><tr><td>155</td><td>4878</td></tr><tr><td>154</td><td>5115</td></tr><tr><td>153</td><td>5386</td></tr><tr><td>152</td><td>5715</td></tr><tr><td>151</td><td>6123</td></tr><tr><td>150</td><td>6514</td></tr><tr><td>149</td><td>6902</td></tr><tr><td>148</td><td>7322</td></tr><tr><td>147</td><td>7693</td></tr><tr><td>146</td><td>8118</td></tr><tr><td>145</td><td>8526</td></tr><tr><td>144</td><td>8937</td></tr><tr><td>143</td><td>9315</td></tr><tr><td>142</td><td>9760</td></tr><tr><td>141</td><td>10306</td></tr><tr><td>140</td><td>10847</td></tr><tr><td>139</td><td>11492</td></tr><tr><td>138</td><td>12163</td></tr><tr><td>137</td><td>12861</td></tr><tr><td>136</td><td>13480</td></tr><tr><td>135</td><td>14174</td></tr><tr><td>134</td><td>14831</td></tr><tr><td>133</td><td>15445</td></tr><tr><td>132</td><td>16050</td></tr><tr><td>131</td><td>16699</td></tr><tr><td>130</td><td>17341</td></tr><tr><td>129</td><td>18128</td></tr><tr><td>128</td><td>19179</td></tr><tr><td>127</td><td>20259</td></tr><tr><td>126</td><td>21189</td></tr><tr><td>125</td><td>22163</td></tr><tr><td>124</td><td>23300</td></tr><tr><td>123</td><td>24304</td></tr><tr><td>122</td><td>25132</td></tr><tr><td>121</td><td>26027</td></tr><tr><td>120</td><td>27070</td></tr><tr><td>119</td><td>28047</td></tr><tr><td>118</td><td>28983</td></tr><tr><td>117</td><td>29833</td></tr><tr><td>116</td><td>30804</td></tr><tr><td>115</td><td>31857</td></tr><tr><td>114</td><td>32814</td></tr><tr><td>113</td><td>33727</td></tr><tr><td>112</td><td>34691</td></tr><tr><td>111</td><td>35695</td></tr><tr><td>110</td><td>36705</td></tr><tr><td>109</td><td>37522</td></tr><tr><td>108</td><td>38337</td></tr><tr><td>107</td><td>39295</td></tr><tr><td>106</td><td>40302</td></tr><tr><td>105</td><td>41191</td></tr><tr><td>104</td><td>42031</td></tr><tr><td>103</td><td>43003</td></tr><tr><td>102</td><td>44041</td></tr><tr><td>101</td><td>44941</td></tr><tr><td>100</td><td>45873</td></tr><tr><td>99</td><td>46789</td></tr><tr><td>98</td><td>47696</td></tr><tr><td>97</td><td>48555</td></tr><tr><td>96</td><td>49378</td></tr><tr><td>95</td><td>50162</td></tr><tr><td>94</td><td>50997</td></tr><tr><td>93</td><td>51823</td></tr><tr><td>92</td><td>52682</td></tr><tr><td>91</td><td>53467</td></tr><tr><td>90</td><td>54273</td></tr><tr><td>89</td><td>55085</td></tr><tr><td>88</td><td>55823</td></tr><tr><td>87</td><td>56555</td></tr><tr><td>86</td><td>57215</td></tr><tr><td>85</td><td>57928</td></tr><tr><td>84</td><td>58603</td></tr><tr><td>83</td><td>59253</td></tr><tr><td>82</td><td>59860</td></tr><tr><td>81</td><td>60663</td></tr><tr><td>80</td><td>61531</td></tr><tr><td>79</td><td>62283</td></tr><tr><td>78</td><td>62907</td></tr><tr><td>77</td><td>63567</td></tr><tr><td>76</td><td>64171</td></tr><tr><td>75</td><td>64775</td></tr><tr><td>74</td><td>65374</td></tr><tr><td>73</td><td>65869</td></tr><tr><td>72</td><td>66392</td></tr><tr><td>71</td><td>66899</td></tr><tr><td>70</td><td>67461</td></tr><tr><td>69</td><td>68022</td></tr><tr><td>68</td><td>68547</td></tr><tr><td>67</td><td>69107</td></tr><tr><td>66</td><td>69633</td></tr><tr><td>65</td><td>70077</td></tr><tr><td>64</td><td>70497</td></tr><tr><td>63</td><td>70915</td></tr><tr><td>62</td><td>71322</td></tr><tr><td>61</td><td>71732</td></tr><tr><td>60</td><td>72104</td></tr><tr><td>59</td><td>72500</td></tr><tr><td>58</td><td>72859</td></tr><tr><td>57</td><td>73249</td></tr><tr><td>56</td><td>73577</td></tr><tr><td>55</td><td>73910</td></tr><tr><td>54</td><td>74227</td></tr><tr><td>53</td><td>74561</td></tr><tr><td>52</td><td>74844</td></tr><tr><td>51</td><td>75115</td></tr><tr><td>50</td><td>75377</td></tr><tr><td>49</td><td>75666</td></tr><tr><td>48</td><td>75894</td></tr><tr><td>47</td><td>76115</td></tr><tr><td>46</td><td>76357</td></tr><tr><td>45</td><td>76590</td></tr><tr><td>44</td><td>76801</td></tr><tr><td>43</td><td>77060</td></tr><tr><td>42</td><td>77250</td></tr><tr><td>41</td><td>77473</td></tr><tr><td>40</td><td>77682</td></tr><tr><td>39</td><td>77856</td></tr><tr><td>38</td><td>78070</td></tr><tr><td>37</td><td>78230</td></tr><tr><td>36</td><td>78391</td></tr><tr><td>35</td><td>78522</td></tr><tr><td>34</td><td>78648</td></tr><tr><td>33</td><td>78764</td></tr><tr><td>32</td><td>78854</td></tr><tr><td>31</td><td>79047</td></tr><tr><td>30</td><td>79168</td></tr><tr><td>29</td><td>79272</td></tr><tr><td>28</td><td>79386</td></tr><tr><td>27</td><td>79467</td></tr><tr><td>26</td><td>79553</td></tr><tr><td>25</td><td>79626</td></tr><tr><td>24</td><td>79704</td></tr><tr><td>23</td><td>79771</td></tr><tr><td>22</td><td>79832</td></tr><tr><td>21</td><td>79875</td></tr><tr><td>20</td><td>79933</td></tr><tr><td>19</td><td>79995</td></tr><tr><td>18</td><td>80131</td></tr><tr><td>17</td><td>80191</td></tr><tr><td>16</td><td>80227</td></tr><tr><td>15</td><td>80266</td></tr><tr><td>14</td><td>80283</td></tr><tr><td>13</td><td>80304</td></tr><tr><td>12</td><td>80319</td></tr><tr><td>11</td><td>80359</td></tr><tr><td>10</td><td>80375</td></tr><tr><td>9</td><td>80394</td></tr><tr><td>8</td><td>80410</td></tr><tr><td>7</td><td>80559</td></tr><tr><td>6</td><td>80564</td></tr><tr><td>5</td><td>80567</td></tr><tr><td>4</td><td>80569</td></tr><tr><td>2</td><td>80572</td></tr><tr><td>1</td><td>80575</td></tr><tr><td>0</td><td>80580</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 478 premiers ayant un score supérieur ou égal à 183 sont listés ci-dessous.
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
            <td>Allan D.</td>
            <td>188</td>
            <td>1</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Louise S.</td>
            <td>188</td>
            <td>1</td>
            <td>Jean Macé, Chatellerault</td>
         </tr>
         <tr>
            <td>Théoline D.</td>
            <td>188</td>
            <td>1</td>
            <td>Jean Macé, Chatellerault</td>
         </tr>
         <tr>
            <td>Marine D.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Samantha B.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Albert L.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Plaisance, Creteil</td>
         </tr>
         <tr>
            <td>Jonas P.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Jade S.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Maëlle G.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Léa R.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Jean Moulin, Artenay</td>
         </tr>
         <tr>
            <td>Alexandre S.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Jean Moulin, Artenay</td>
         </tr>
         <tr>
            <td>Baptiste V.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Villey-Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Cédric R.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Villey-Desmeserets, Caen</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Félix C.</td>
            <td>188</td>
            <td>1</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>188</td>
            <td>1</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Adren B.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Emeran R.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Gilles V.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Elisa S.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Gabriel G.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Louis F.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Alex D.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Benoit P.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Emma T.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Laurine C.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Ethan R.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Anaël T.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Cedric H.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Hadrien R.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Charles P.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Mathilde M.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Logan G.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège Beaufeuillage, Saint-Brieuc</td>
         </tr>
         <tr>
            <td>Marie V.</td>
            <td>188</td>
            <td>1</td>
            <td>Gaston Jollet, Salbris</td>
         </tr>
         <tr>
            <td>Eloïse L.</td>
            <td>188</td>
            <td>1</td>
            <td>Gaston Jollet, Salbris</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Thomas I.</td>
            <td>188</td>
            <td>1</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>188</td>
            <td>1</td>
            <td>Ensemble Saint Joseph-la Providence, Forbach</td>
         </tr>
         <tr>
            <td>Bastien S.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Solène K.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Nolwenn C.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Loïc T.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Hugo T.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Descartes, Rabat</td>
         </tr>
         <tr>
            <td>Matthieu W.</td>
            <td>187</td>
            <td>46</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>187</td>
            <td>46</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Théo O.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Gérard Philipe, Villeparisis</td>
         </tr>
         <tr>
            <td>Alexandre H.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Gérard Philipe, Villeparisis</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Estelle R.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Gauthier H.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Isabelle H.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Albert Ball, Annoeullin</td>
         </tr>
         <tr>
            <td>Antonin Y.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Sonia Delaunay, Paris</td>
         </tr>
         <tr>
            <td>Dhuan G.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Sonia Delaunay, Paris</td>
         </tr>
         <tr>
            <td>Ingrid R.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Français de San Francisco, San Francisco</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Chloé G.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Inès G.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Yvon F.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Des Roseaux, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Sofiane B.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Robert Lasneau, Vendôme</td>
         </tr>
         <tr>
            <td>Henisse F.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Bouillon T.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Chrystal L.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Matéo P.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Daniel Argote, Orthez</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Daniel Argote, Orthez</td>
         </tr>
         <tr>
            <td>Yassine T.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Anaïs D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Jad A.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Thomas V.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Sami E.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Garance C.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Jeanne E.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Clara S.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Ines V.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Térence M.</td>
            <td>187</td>
            <td>46</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Yiheng C.</td>
            <td>187</td>
            <td>46</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège les Bruyères, Valentigney</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Antoine W.</td>
            <td>187</td>
            <td>46</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Simon T.</td>
            <td>187</td>
            <td>46</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Gérard Philipe, Villeparisis</td>
         </tr>
         <tr>
            <td>Adrien L.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Saint-Laurent, La Bresse</td>
         </tr>
         <tr>
            <td>Amaury C.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Saint-Laurent, La Bresse</td>
         </tr>
         <tr>
            <td>Zou T.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Brune L.</td>
            <td>187</td>
            <td>46</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Anna-Blue H.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Juliette Dodu, Saint-Denis</td>
         </tr>
         <tr>
            <td>Eliot T.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Juliette Dodu, Saint-Denis</td>
         </tr>
         <tr>
            <td>Idriss A.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Mathieu V.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Baptiste F.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Mathilde G.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Privé Institution Jeanne D Arc, Bayeux</td>
         </tr>
         <tr>
            <td>Olivier F.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Neven V.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Emmanuelle D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Laura D.</td>
            <td>187</td>
            <td>46</td>
            <td>Collège les Frères Lenain, Laon</td>
         </tr>
         <tr>
            <td>Manon L.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Charles de Gaulle, Bû</td>
         </tr>
         <tr>
            <td>Dylan C.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Gilles V.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Mattéo J.</td>
            <td>186</td>
            <td>107</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Dimitri D.</td>
            <td>186</td>
            <td>107</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Gabriel M.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège le Parc de Villeroy, Mennecy</td>
         </tr>
         <tr>
            <td>Felipe P.</td>
            <td>186</td>
            <td>107</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Maximilien M.</td>
            <td>186</td>
            <td>107</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Robin A.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Chater T.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Alexis B.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Norbert Casteret, Ruelle</td>
         </tr>
         <tr>
            <td>Geoffrey J.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Norbert Casteret, Ruelle</td>
         </tr>
         <tr>
            <td>Gaspard S.</td>
            <td>186</td>
            <td>107</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Mehdi T.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Matis B.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Freddy S.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège André Malraux, Louvres</td>
         </tr>
         <tr>
            <td>Aurelie I.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège André Malraux, Louvres</td>
         </tr>
         <tr>
            <td>Benjamin T.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège la Chataigneraie, Autun</td>
         </tr>
         <tr>
            <td>Alexis D.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Guido S.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Jean M.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Alouette, Pessac</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Alouette, Pessac</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Caroline M.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Guillaume N.</td>
            <td>186</td>
            <td>107</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Fanny F.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Emilie R.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Damien L.</td>
            <td>186</td>
            <td>107</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Arthur F.</td>
            <td>186</td>
            <td>107</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Mathilde I.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Manon B.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Saint-Etienne, Sens</td>
         </tr>
         <tr>
            <td>Louis L.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Baptiste V.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Gaétan K.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Pierre-Galaad N.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>186</td>
            <td>107</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Hugo W.</td>
            <td>186</td>
            <td>107</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Bérénice V.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Millevoye, Abbeville</td>
         </tr>
         <tr>
            <td>Adam S.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Titouan M.</td>
            <td>186</td>
            <td>107</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Baptiste F.</td>
            <td>186</td>
            <td>107</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Clara D.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Clémentine B.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Juliette F.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Mona R.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Robert Géant, Vézelise</td>
         </tr>
         <tr>
            <td>Alice V.</td>
            <td>186</td>
            <td>107</td>
            <td>Collège Robert Géant, Vézelise</td>
         </tr>
         <tr>
            <td>Roberto W.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Albin C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jules Michelet, Tours</td>
         </tr>
         <tr>
            <td>Chloé B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Téotime A.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Sibylle J.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jules Verne, Angoulême</td>
         </tr>
         <tr>
            <td>Alexandra O.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jules Verne, Angoulême</td>
         </tr>
         <tr>
            <td>Guilhem V.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Cyrille T.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Marine C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Hélène H.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Boris Vian, Lille</td>
         </tr>
         <tr>
            <td>Samuel N.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Alexandre Stellio, Les Anses d'Arlet</td>
         </tr>
         <tr>
            <td>Morgan L.</td>
            <td>185</td>
            <td>154</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Achille R.</td>
            <td>185</td>
            <td>154</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Clément F.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège de la Chesnoye, Saint-Gobain</td>
         </tr>
         <tr>
            <td>Elodie M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Godi M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Clara W.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Kléber, Haguenau</td>
         </tr>
         <tr>
            <td>Coraline G.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Toomas R.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Sebastien Brant, Eschau</td>
         </tr>
         <tr>
            <td>Titouan B.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Julie C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Gaëtan L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Sarah L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège de la Voie Châtelaine, Arcis-sur-Aube</td>
         </tr>
         <tr>
            <td>Jules V.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Jp E.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Albert Camus, Soufflenheim</td>
         </tr>
         <tr>
            <td>Malory L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Zelda F.</td>
            <td>185</td>
            <td>154</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Tindir T.</td>
            <td>185</td>
            <td>154</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Vincent H.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Colin H.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Antonio M.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Rodrigue L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Eddie R.</td>
            <td>185</td>
            <td>154</td>
            <td>Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Capucine K.</td>
            <td>185</td>
            <td>154</td>
            <td>Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Guillaume G.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Robin M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Maxime L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Nicolas D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège la Croix Blanche, Bondues</td>
         </tr>
         <tr>
            <td>Lilian M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège la Croix Blanche, Bondues</td>
         </tr>
         <tr>
            <td>Noé B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Mathis D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Jaehyun S.</td>
            <td>185</td>
            <td>154</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Nikolas T.</td>
            <td>185</td>
            <td>154</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Camille B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Pauline B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Yohann C.</td>
            <td>185</td>
            <td>154</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Anatole France, Sartilly</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Anatole France, Sartilly</td>
         </tr>
         <tr>
            <td>Jeanne B.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée International Alexandre Dumas, Alger</td>
         </tr>
         <tr>
            <td>Woo-Seok L.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français Jmg le Clézio, Port-Vila</td>
         </tr>
         <tr>
            <td>Gaëtan P.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Léa M.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Victor Hugo, Francfort sur le Main</td>
         </tr>
         <tr>
            <td>Anna M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Clémence A.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Marcelle Pardé, Dijon</td>
         </tr>
         <tr>
            <td>Pastol M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Vergely O.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Flora L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Justine T.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Cassandre B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Calypso B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Leonie O.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Geoffroy D.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Grégoire V.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Maud L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Mattéo C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Dilan S.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Leonid O.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
         <tr>
            <td>Pierre-Louis L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Simon V.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Félix Buhot, Valognes</td>
         </tr>
         <tr>
            <td>Gabriel M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Clara C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Manuel B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Aymeric S.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Alexis M.</td>
            <td>185</td>
            <td>154</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Francisco O.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Alan W.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Sacha G.</td>
            <td>185</td>
            <td>154</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Michel P.</td>
            <td>185</td>
            <td>154</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Christopher N.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Marc K.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Axel L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Julie T.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Laurie C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Olivier B.</td>
            <td>185</td>
            <td>154</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Marc T.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Johann A.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Bérénice B.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Marie S.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Laura M.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Daviel, La Barre en Ouche</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jacques Daviel, La Barre en Ouche</td>
         </tr>
         <tr>
            <td>Lucas H.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Barnave, St Egreve</td>
         </tr>
         <tr>
            <td>Titouan R.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pont Rousseau, Reze</td>
         </tr>
         <tr>
            <td>Gabriel F.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Emile G.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Andréa S.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Flore I.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Clara S.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Anthony N.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
         <tr>
            <td>David P.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Attigny-Machault, Attigny</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>185</td>
            <td>154</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Ike L.</td>
            <td>185</td>
            <td>154</td>
            <td>Iles de Loire, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Nathan V.</td>
            <td>185</td>
            <td>154</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Lucie D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Yannick N.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>185</td>
            <td>154</td>
            <td>Collège-Lycée Notre Dame de Toutes Aides, Nantes</td>
         </tr>
         <tr>
            <td>Mickael H.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Jeanne d'Arc, Orléans</td>
         </tr>
         <tr>
            <td>Matthieu H.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège la Croix Blanche, Bondues</td>
         </tr>
         <tr>
            <td>Augustin C.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège la Croix Blanche, Bondues</td>
         </tr>
         <tr>
            <td>Sébastien B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Robin M.</td>
            <td>184</td>
            <td>273</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>184</td>
            <td>273</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Damian C.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Mathis F.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Charloun Rieu, St Martin de Crau</td>
         </tr>
         <tr>
            <td>Emilien L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Joseph G.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Joris B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint-Louis, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Adelaide S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Eva S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Anouk B.</td>
            <td>184</td>
            <td>273</td>
            <td>Julien Franck, Champigneulles</td>
         </tr>
         <tr>
            <td>Pauline B.</td>
            <td>184</td>
            <td>273</td>
            <td>Julien Franck, Champigneulles</td>
         </tr>
         <tr>
            <td>Marie L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Alésia, Venarey-les-Laumes</td>
         </tr>
         <tr>
            <td>Marion G.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Voltaire, Remoulins</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Voltaire, Remoulins</td>
         </tr>
         <tr>
            <td>Alexandre S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Henri Meck, Molsheim</td>
         </tr>
         <tr>
            <td>Lucas J.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Henri Meck, Molsheim</td>
         </tr>
         <tr>
            <td>Simon V.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Henri Iv, Bergerac</td>
         </tr>
         <tr>
            <td>Yoann L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Jean-François Champollion, Voisins le Bretonneux</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Remy B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Camille S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Des Roseaux, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Lola W.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Des Roseaux, Illkirch-Graffenstaden</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Alice et Jean Olibo, Saint Cyprien</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Agustin R.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Pedro R.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français Jules Supervielle, Montevideo</td>
         </tr>
         <tr>
            <td>Justin N.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Jules R.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Jakub H.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Marius H.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Louis Armand, Golbey</td>
         </tr>
         <tr>
            <td>Erika Z.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Julien M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Margaux R.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Luc P.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Clara M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège les Rives du Leman, Evian les Bains</td>
         </tr>
         <tr>
            <td>Leïla O.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège les Rives du Leman, Evian les Bains</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Irène Y.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Nathan D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Grégoire S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Clement D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Julie T.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Louise D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Millevoye, Abbeville</td>
         </tr>
         <tr>
            <td>Léna M.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Fustel de Coulanges, Yaoundé</td>
         </tr>
         <tr>
            <td>Alexis N.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Fustel de Coulanges, Yaoundé</td>
         </tr>
         <tr>
            <td>Jeremy F.</td>
            <td>184</td>
            <td>273</td>
            <td>Groupe Scolaire Sainte-Anne Saint-Joseph, Lure</td>
         </tr>
         <tr>
            <td>Oceane G.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Quentin D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Lamartine, Soissons</td>
         </tr>
         <tr>
            <td>Camille M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Laurie L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Eléna G.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Julie W.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre Larousse, Toucy</td>
         </tr>
         <tr>
            <td>Loïs T.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pierre Larousse, Toucy</td>
         </tr>
         <tr>
            <td>Adrien L.</td>
            <td>184</td>
            <td>273</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Chang-Yon A.</td>
            <td>184</td>
            <td>273</td>
            <td>Eabjm, Paris</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Arnaud S.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Georges D.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Guy Mareschal, 80000</td>
         </tr>
         <tr>
            <td>Dorian B.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Geoffroy P.</td>
            <td>184</td>
            <td>273</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Paul-Adrien K.</td>
            <td>184</td>
            <td>273</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>184</td>
            <td>273</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Anselme M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Maxime P.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Emilien B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Diderot, Alès</td>
         </tr>
         <tr>
            <td>Victor M.</td>
            <td>184</td>
            <td>273</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Joséphine B.</td>
            <td>184</td>
            <td>273</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Marie C.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Marie H.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Louis G.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Sainte-Marie de la Providence, Rochefort sur Mer</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Stevan M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Gustave Flaubert, Pont l'Evêque</td>
         </tr>
         <tr>
            <td>Mathieu C.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Gustave Flaubert, Pont l'Evêque</td>
         </tr>
         <tr>
            <td>Rémi L.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Stephane T.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Matthieu M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Emile A.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Inès B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Cécile E.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Salomé G.</td>
            <td>184</td>
            <td>273</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Maïa M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Mont-Miroir, Maiche</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège François Mauriac, St Médard en Jalles</td>
         </tr>
         <tr>
            <td>Lisa M.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Amine B.</td>
            <td>184</td>
            <td>273</td>
            <td>Collège Albert Châtelet, Douai</td>
         </tr>
         <tr>
            <td>Dylan D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Aimen B.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège les Champs Philippe, La Garenne Colombes</td>
         </tr>
         <tr>
            <td>Hadrien T.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège les Champs Philippe, La Garenne Colombes</td>
         </tr>
         <tr>
            <td>Benoit R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Ilya F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Hjalmar B.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Français Saint-Louis, Stockholm</td>
         </tr>
         <tr>
            <td>Sofia P.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Matilde A.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Chloé A.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
         <tr>
            <td>Anthony V.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Français Albert Camus, Conakry</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Rocroi-Maubert, Rocroi</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Guillaume M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Florian M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège François Truffaut, Rive de Gier</td>
         </tr>
         <tr>
            <td>Jules E.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Leï Garrus, 83470</td>
         </tr>
         <tr>
            <td>Arnaud M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Leï Garrus, 83470</td>
         </tr>
         <tr>
            <td>Marie L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Océane D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Nicolas A.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Loic C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Guillaume V.</td>
            <td>183</td>
            <td>369</td>
            <td>Lamartine, Tours</td>
         </tr>
         <tr>
            <td>Philippe C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Yohann C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Mathy, Luxeuil les Bains</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Mathy, Luxeuil les Bains</td>
         </tr>
         <tr>
            <td>Moïra S.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Stéphanie M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Saint Jude, Armentières</td>
         </tr>
         <tr>
            <td>Héloïse P.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Saint Jude, Armentières</td>
         </tr>
         <tr>
            <td>Sara B.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège les Prunais, 94350</td>
         </tr>
         <tr>
            <td>Valentine R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Anne S.</td>
            <td>183</td>
            <td>369</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Clothilde P.</td>
            <td>183</td>
            <td>369</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Benoît M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Sainte Marie de Nevers, Toulouse</td>
         </tr>
         <tr>
            <td>Mathilde B.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Clairs Soleils, Besançon</td>
         </tr>
         <tr>
            <td>Anaïs R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Clairs Soleils, Besançon</td>
         </tr>
         <tr>
            <td>Lorene D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Multisite, Vouziers</td>
         </tr>
         <tr>
            <td>Nunzia R.</td>
            <td>183</td>
            <td>369</td>
            <td>Cesar Franck, Paris</td>
         </tr>
         <tr>
            <td>Chloé V.</td>
            <td>183</td>
            <td>369</td>
            <td>Cesar Franck, Paris</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Pierre de Ronsard, Saint-Maur</td>
         </tr>
         <tr>
            <td>Théotime Q.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Robin V.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Thomas Q.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Noémie G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Félix Tisserand, Nuits-Saint-Georges</td>
         </tr>
         <tr>
            <td>Gaëlle S.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Félix Tisserand, Nuits-Saint-Georges</td>
         </tr>
         <tr>
            <td>Romane B.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Sarah G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Joseph Paul-Boncour, St Aignan</td>
         </tr>
         <tr>
            <td>Ewen L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Notre Dame de la Clarte, Baud</td>
         </tr>
         <tr>
            <td>Simon J.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Notre Dame de la Clarte, Baud</td>
         </tr>
         <tr>
            <td>Julien A.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Enzo L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Elisa M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Lucie M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Jacques Prévert, Pontvallain</td>
         </tr>
         <tr>
            <td>Lucas H.</td>
            <td>183</td>
            <td>369</td>
            <td>Arthur Rimbaud, Saint Julien en Genevois</td>
         </tr>
         <tr>
            <td>Heimanu C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de Punaauia, Punaauia</td>
         </tr>
         <tr>
            <td>Vincent M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de Punaauia, Punaauia</td>
         </tr>
         <tr>
            <td>Samer A.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Andrea M.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Ian R.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Maxime T.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège François Truffaut, Longué</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège François Truffaut, Longué</td>
         </tr>
         <tr>
            <td>Killian F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Victor Hugo, Puiseaux</td>
         </tr>
         <tr>
            <td>Lisa R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Flora Tristan, Lherm</td>
         </tr>
         <tr>
            <td>Mélanie F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Flora Tristan, Lherm</td>
         </tr>
         <tr>
            <td>Mohamed Aziz D.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Alexandre A.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Yohan G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Alfred Mauguin, Gradignan</td>
         </tr>
         <tr>
            <td>Etienne L.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Constance S.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Sterenn D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Amaury F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège du Marquenterre, Rue</td>
         </tr>
         <tr>
            <td>Emilie S.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Henri Lefeuvre, Arnage</td>
         </tr>
         <tr>
            <td>Martin G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège les Bruyères, Valentigney</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>183</td>
            <td>369</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>183</td>
            <td>369</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Lilou C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Cel le Gaucher, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Roux M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Blanqui, Bordeaux</td>
         </tr>
         <tr>
            <td>Leo D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Blanqui, Bordeaux</td>
         </tr>
         <tr>
            <td>Paolo H.</td>
            <td>183</td>
            <td>369</td>
            <td>Lycée Antoine et Consuelo de Saint Exupéry, Santa Tecla</td>
         </tr>
         <tr>
            <td>Léa L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Vauguyon, Le Mans</td>
         </tr>
         <tr>
            <td>Chloë N.</td>
            <td>183</td>
            <td>369</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Alizée D.</td>
            <td>183</td>
            <td>369</td>
            <td>COLLEGE NOTRE DAME - SAINT SIGISBERT, Nancy</td>
         </tr>
         <tr>
            <td>Geoffrey A.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Eugène C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Nathan K.</td>
            <td>183</td>
            <td>369</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Louis K.</td>
            <td>183</td>
            <td>369</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Alexandre R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Alex M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège René Nicklès, Dommartemont</td>
         </tr>
         <tr>
            <td>Yoan C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Kilian C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Nathalie G.</td>
            <td>183</td>
            <td>369</td>
            <td>Les Sables Blancs, Concarneau</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Augustin F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Emilien H.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Fabien M.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Notre Dame, Billom</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Notre Dame, Billom</td>
         </tr>
         <tr>
            <td>Theo W.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Watteau, Valenciennes</td>
         </tr>
         <tr>
            <td>Souad A.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Pablo Neruda, Aulnay-Sous-Bois</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Camus, Genlis</td>
         </tr>
         <tr>
            <td>Louis L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Albert Camus, Genlis</td>
         </tr>
         <tr>
            <td>Tom S.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège André Duchesne, L'Ile Bouchard</td>
         </tr>
         <tr>
            <td>Gabriel L.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège André Duchesne, L'Ile Bouchard</td>
         </tr>
         <tr>
            <td>Luke G.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Fernand Lechanteur, Caen</td>
         </tr>
         <tr>
            <td>Corentin F.</td>
            <td>183</td>
            <td>369</td>
            <td>Collège Boris Vian, Marck</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-34'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde : 20884 élèves</h2>
            <i>Score maximum atteignable : 181</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-34' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-34' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>181</td><td>1</td></tr><tr><td>180</td><td>8</td></tr><tr><td>179</td><td>20</td></tr><tr><td>178</td><td>35</td></tr><tr><td>177</td><td>61</td></tr><tr><td>176</td><td>70</td></tr><tr><td>175</td><td>91</td></tr><tr><td>174</td><td>101</td></tr><tr><td>173</td><td>106</td></tr><tr><td>172</td><td>114</td></tr><tr><td>171</td><td>117</td></tr><tr><td>170</td><td>129</td></tr><tr><td>169</td><td>134</td></tr><tr><td>168</td><td>148</td></tr><tr><td>167</td><td>165</td></tr><tr><td>166</td><td>186</td></tr><tr><td>165</td><td>201</td></tr><tr><td>164</td><td>229</td></tr><tr><td>163</td><td>254</td></tr><tr><td>162</td><td>263</td></tr><tr><td>161</td><td>285</td></tr><tr><td>160</td><td>307</td></tr><tr><td>159</td><td>325</td></tr><tr><td>158</td><td>349</td></tr><tr><td>157</td><td>391</td></tr><tr><td>156</td><td>429</td></tr><tr><td>155</td><td>472</td></tr><tr><td>154</td><td>505</td></tr><tr><td>153</td><td>541</td></tr><tr><td>152</td><td>564</td></tr><tr><td>151</td><td>599</td></tr><tr><td>150</td><td>629</td></tr><tr><td>149</td><td>675</td></tr><tr><td>148</td><td>715</td></tr><tr><td>147</td><td>752</td></tr><tr><td>146</td><td>799</td></tr><tr><td>145</td><td>849</td></tr><tr><td>144</td><td>884</td></tr><tr><td>143</td><td>919</td></tr><tr><td>142</td><td>970</td></tr><tr><td>141</td><td>1031</td></tr><tr><td>140</td><td>1105</td></tr><tr><td>139</td><td>1150</td></tr><tr><td>138</td><td>1233</td></tr><tr><td>137</td><td>1304</td></tr><tr><td>136</td><td>1368</td></tr><tr><td>135</td><td>1433</td></tr><tr><td>134</td><td>1504</td></tr><tr><td>133</td><td>1586</td></tr><tr><td>132</td><td>1646</td></tr><tr><td>131</td><td>1716</td></tr><tr><td>130</td><td>1795</td></tr><tr><td>129</td><td>1889</td></tr><tr><td>128</td><td>2023</td></tr><tr><td>127</td><td>2105</td></tr><tr><td>126</td><td>2230</td></tr><tr><td>125</td><td>2324</td></tr><tr><td>124</td><td>2419</td></tr><tr><td>123</td><td>2539</td></tr><tr><td>122</td><td>2636</td></tr><tr><td>121</td><td>2777</td></tr><tr><td>120</td><td>2959</td></tr><tr><td>119</td><td>3123</td></tr><tr><td>118</td><td>3273</td></tr><tr><td>117</td><td>3414</td></tr><tr><td>116</td><td>3558</td></tr><tr><td>115</td><td>3695</td></tr><tr><td>114</td><td>3841</td></tr><tr><td>113</td><td>3974</td></tr><tr><td>112</td><td>4121</td></tr><tr><td>111</td><td>4338</td></tr><tr><td>110</td><td>4532</td></tr><tr><td>109</td><td>4784</td></tr><tr><td>108</td><td>4999</td></tr><tr><td>107</td><td>5197</td></tr><tr><td>106</td><td>5382</td></tr><tr><td>105</td><td>5558</td></tr><tr><td>104</td><td>5759</td></tr><tr><td>103</td><td>5931</td></tr><tr><td>102</td><td>6122</td></tr><tr><td>101</td><td>6328</td></tr><tr><td>100</td><td>6689</td></tr><tr><td>99</td><td>6985</td></tr><tr><td>98</td><td>7237</td></tr><tr><td>97</td><td>7477</td></tr><tr><td>96</td><td>7707</td></tr><tr><td>95</td><td>7951</td></tr><tr><td>94</td><td>8184</td></tr><tr><td>93</td><td>8400</td></tr><tr><td>92</td><td>8622</td></tr><tr><td>91</td><td>8841</td></tr><tr><td>90</td><td>9230</td></tr><tr><td>89</td><td>9698</td></tr><tr><td>88</td><td>9970</td></tr><tr><td>87</td><td>10253</td></tr><tr><td>86</td><td>10573</td></tr><tr><td>85</td><td>10871</td></tr><tr><td>84</td><td>11100</td></tr><tr><td>83</td><td>11304</td></tr><tr><td>82</td><td>11595</td></tr><tr><td>81</td><td>11875</td></tr><tr><td>80</td><td>12156</td></tr><tr><td>79</td><td>12489</td></tr><tr><td>78</td><td>12784</td></tr><tr><td>77</td><td>13070</td></tr><tr><td>76</td><td>13331</td></tr><tr><td>75</td><td>13563</td></tr><tr><td>74</td><td>13778</td></tr><tr><td>73</td><td>13998</td></tr><tr><td>72</td><td>14256</td></tr><tr><td>71</td><td>14506</td></tr><tr><td>70</td><td>14745</td></tr><tr><td>69</td><td>14977</td></tr><tr><td>68</td><td>15218</td></tr><tr><td>67</td><td>15442</td></tr><tr><td>66</td><td>15661</td></tr><tr><td>65</td><td>15856</td></tr><tr><td>64</td><td>16031</td></tr><tr><td>63</td><td>16221</td></tr><tr><td>62</td><td>16375</td></tr><tr><td>61</td><td>16583</td></tr><tr><td>60</td><td>16733</td></tr><tr><td>59</td><td>16935</td></tr><tr><td>58</td><td>17121</td></tr><tr><td>57</td><td>17303</td></tr><tr><td>56</td><td>17443</td></tr><tr><td>55</td><td>17591</td></tr><tr><td>54</td><td>17743</td></tr><tr><td>53</td><td>17886</td></tr><tr><td>52</td><td>18003</td></tr><tr><td>51</td><td>18107</td></tr><tr><td>50</td><td>18267</td></tr><tr><td>49</td><td>18433</td></tr><tr><td>48</td><td>18561</td></tr><tr><td>47</td><td>18669</td></tr><tr><td>46</td><td>18805</td></tr><tr><td>45</td><td>18906</td></tr><tr><td>44</td><td>19008</td></tr><tr><td>43</td><td>19077</td></tr><tr><td>42</td><td>19169</td></tr><tr><td>41</td><td>19271</td></tr><tr><td>40</td><td>19355</td></tr><tr><td>39</td><td>19426</td></tr><tr><td>38</td><td>19503</td></tr><tr><td>37</td><td>19590</td></tr><tr><td>36</td><td>19667</td></tr><tr><td>35</td><td>19740</td></tr><tr><td>34</td><td>19810</td></tr><tr><td>33</td><td>19859</td></tr><tr><td>32</td><td>19916</td></tr><tr><td>31</td><td>19963</td></tr><tr><td>30</td><td>20038</td></tr><tr><td>29</td><td>20093</td></tr><tr><td>28</td><td>20136</td></tr><tr><td>27</td><td>20175</td></tr><tr><td>26</td><td>20227</td></tr><tr><td>25</td><td>20262</td></tr><tr><td>24</td><td>20286</td></tr><tr><td>23</td><td>20323</td></tr><tr><td>22</td><td>20360</td></tr><tr><td>21</td><td>20398</td></tr><tr><td>20</td><td>20416</td></tr><tr><td>19</td><td>20431</td></tr><tr><td>18</td><td>20483</td></tr><tr><td>17</td><td>20498</td></tr><tr><td>16</td><td>20512</td></tr><tr><td>15</td><td>20526</td></tr><tr><td>14</td><td>20540</td></tr><tr><td>13</td><td>20552</td></tr><tr><td>12</td><td>20562</td></tr><tr><td>11</td><td>20572</td></tr><tr><td>10</td><td>20577</td></tr><tr><td>9</td><td>20621</td></tr><tr><td>8</td><td>20627</td></tr><tr><td>6</td><td>20638</td></tr><tr><td>5</td><td>20641</td></tr><tr><td>4</td><td>20644</td></tr><tr><td>2</td><td>20647</td></tr><tr><td>0</td><td>20649</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 116 premiers ayant un score supérieur ou égal à 172 sont listés ci-dessous.
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
            <td>Anthony A.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Philippe A.</td>
            <td>181</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Nathaël C.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Savinien L.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Christoph S.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Libano-Allemand (Deutsche Schule Jounieh), Jounieh</td>
         </tr>
         <tr>
            <td>Jad N.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Libano-Allemand (Deutsche Schule Jounieh), Jounieh</td>
         </tr>
         <tr>
            <td>Noé E.</td>
            <td>181</td>
            <td>1</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Matthew C.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Des Mascareignes, Moka</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Des Mascareignes, Moka</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Benjamin P.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Adrien R.</td>
            <td>180</td>
            <td>8</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Emma H.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Sonya C.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>180</td>
            <td>8</td>
            <td>Lycée Pierre Emile Martin, Bourges</td>
         </tr>
         <tr>
            <td>Eva R.</td>
            <td>180</td>
            <td>8</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Andréane B.</td>
            <td>180</td>
            <td>8</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Joseph Z.</td>
            <td>180</td>
            <td>8</td>
            <td>Collège Notre-Dame de Jamhour, Jamhour</td>
         </tr>
         <tr>
            <td>Alain A.</td>
            <td>180</td>
            <td>8</td>
            <td>Collège Notre-Dame de Jamhour, Jamhour</td>
         </tr>
         <tr>
            <td>Léo K.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Eugène Woillez, Montreuil sur Mer</td>
         </tr>
         <tr>
            <td>Benoit G.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Yohann P.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Loïc R.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Jules Ferry, Versailles</td>
         </tr>
         <tr>
            <td>Victor T.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Jules Ferry, Versailles</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>179</td>
            <td>20</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Dylan D.</td>
            <td>179</td>
            <td>20</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Julien P.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Gabriel B.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Jean Baptiste le Taillandier, Fougères</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Jean Baptiste le Taillandier, Fougères</td>
         </tr>
         <tr>
            <td>Alexia L.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Polyvalent Jean-Jacques Henner, Altkirch</td>
         </tr>
         <tr>
            <td>Aurélien F.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Yohan C.</td>
            <td>179</td>
            <td>20</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Salem E.</td>
            <td>178</td>
            <td>35</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Jean A.</td>
            <td>178</td>
            <td>35</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Nicolas P.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Paul R.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Annika S.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Louise B.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Olivier F.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Cyprien B.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Hector G.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Jean-Pierre Vernant, Sèvres</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>178</td>
            <td>35</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Vincent G.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Frederic G.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Alexandre H.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Maël S.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Gabriel R.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Camille Claudel, Palaiseau</td>
         </tr>
         <tr>
            <td>Antony O.</td>
            <td>178</td>
            <td>35</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Florian R.</td>
            <td>178</td>
            <td>35</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée de l'Emperi, Salon de Provence</td>
         </tr>
         <tr>
            <td>Monsieur E.</td>
            <td>178</td>
            <td>35</td>
            <td>Collège de Taiohae, Taiohae</td>
         </tr>
         <tr>
            <td>Tijani B.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Pape-Demba D.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Guillaume D.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Mickaël O.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Luca M.</td>
            <td>178</td>
            <td>35</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Lise M.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Daudet, Nîmes</td>
         </tr>
         <tr>
            <td>Julianna D.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Victor Hugo, Port Gentil</td>
         </tr>
         <tr>
            <td>Malo R.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Cédric R.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Benoît P.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Florian V.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Loé S.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Jeanne P.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Maceo B.</td>
            <td>177</td>
            <td>61</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Gordan Kristian S.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Radhwane K.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Maureen G.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Emma A.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Allan P.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Aurelien L.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Stéphane B.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
         <tr>
            <td>Etienne O.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Damien R.</td>
            <td>176</td>
            <td>70</td>
            <td>Cité Scolaire Alfred Kastler, Stenay</td>
         </tr>
         <tr>
            <td>Quentin W.</td>
            <td>176</td>
            <td>70</td>
            <td>Cité Scolaire Alfred Kastler, Stenay</td>
         </tr>
         <tr>
            <td>Manuel S.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Liyam L.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Tristan B.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Marine A.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée François Mauriac, Bordeaux</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Polyvalent le Mans-Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Rémi L.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Marc Bloch, Sérignan</td>
         </tr>
         <tr>
            <td>Ruben F.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Simone Weil, Saint-Priest-en-Jarez</td>
         </tr>
         <tr>
            <td>Dorian H.</td>
            <td>176</td>
            <td>70</td>
            <td>La Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Gildas B.</td>
            <td>176</td>
            <td>70</td>
            <td>La Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>176</td>
            <td>70</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Justine L.</td>
            <td>175</td>
            <td>91</td>
            <td>École Internationale Paca, Manosque</td>
         </tr>
         <tr>
            <td>Raphael L.</td>
            <td>175</td>
            <td>91</td>
            <td>Carnot, Dijon</td>
         </tr>
         <tr>
            <td>Renaud G.</td>
            <td>175</td>
            <td>91</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Jean Michel E.</td>
            <td>175</td>
            <td>91</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Marc B.</td>
            <td>175</td>
            <td>91</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>175</td>
            <td>91</td>
            <td>Lycée Robert Garnier, La Ferte Bernard</td>
         </tr>
         <tr>
            <td>Ramzi C.</td>
            <td>175</td>
            <td>91</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Maria H.</td>
            <td>175</td>
            <td>91</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Ludovic W.</td>
            <td>175</td>
            <td>91</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Mathis G.</td>
            <td>175</td>
            <td>91</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Vincent D.</td>
            <td>174</td>
            <td>101</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Gaspard B.</td>
            <td>174</td>
            <td>101</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Maria H.</td>
            <td>174</td>
            <td>101</td>
            <td>Collège de la Sainte Famille, Fanar</td>
         </tr>
         <tr>
            <td>Estaban M.</td>
            <td>174</td>
            <td>101</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Leonard T.</td>
            <td>174</td>
            <td>101</td>
            <td>Lycée Nord Bassin, Andernos-les-Bains</td>
         </tr>
         <tr>
            <td>Johan T.</td>
            <td>173</td>
            <td>106</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Cédric B.</td>
            <td>173</td>
            <td>106</td>
            <td>Les Iscles, Manosque</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Josué H.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Amadis L.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Loritz, Nancy</td>
         </tr>
         <tr>
            <td>Marion B.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Alison B.</td>
            <td>173</td>
            <td>106</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Jimmy R.</td>
            <td>172</td>
            <td>114</td>
            <td>Lycée Lamartine, Mâcon</td>
         </tr>
         <tr>
            <td>Luigi M.</td>
            <td>172</td>
            <td>114</td>
            <td>Lycée Lamartine, Mâcon</td>
         </tr>
         <tr>
            <td>Tobie A.</td>
            <td>172</td>
            <td>114</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-35'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première-Terminale : 18013 élèves</h2>
            <i>Score maximum atteignable : 191</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-35' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-35' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>191</td><td>1</td></tr><tr><td>190</td><td>40</td></tr><tr><td>189</td><td>66</td></tr><tr><td>188</td><td>106</td></tr><tr><td>187</td><td>165</td></tr><tr><td>186</td><td>204</td></tr><tr><td>185</td><td>224</td></tr><tr><td>184</td><td>251</td></tr><tr><td>183</td><td>272</td></tr><tr><td>182</td><td>286</td></tr><tr><td>181</td><td>302</td></tr><tr><td>180</td><td>320</td></tr><tr><td>179</td><td>353</td></tr><tr><td>178</td><td>383</td></tr><tr><td>177</td><td>434</td></tr><tr><td>176</td><td>463</td></tr><tr><td>175</td><td>488</td></tr><tr><td>174</td><td>515</td></tr><tr><td>173</td><td>543</td></tr><tr><td>172</td><td>570</td></tr><tr><td>171</td><td>586</td></tr><tr><td>170</td><td>606</td></tr><tr><td>169</td><td>643</td></tr><tr><td>168</td><td>676</td></tr><tr><td>167</td><td>724</td></tr><tr><td>166</td><td>798</td></tr><tr><td>165</td><td>842</td></tr><tr><td>164</td><td>875</td></tr><tr><td>163</td><td>919</td></tr><tr><td>162</td><td>963</td></tr><tr><td>161</td><td>1006</td></tr><tr><td>160</td><td>1032</td></tr><tr><td>159</td><td>1076</td></tr><tr><td>158</td><td>1115</td></tr><tr><td>157</td><td>1179</td></tr><tr><td>156</td><td>1253</td></tr><tr><td>155</td><td>1340</td></tr><tr><td>154</td><td>1406</td></tr><tr><td>153</td><td>1479</td></tr><tr><td>152</td><td>1535</td></tr><tr><td>151</td><td>1608</td></tr><tr><td>150</td><td>1668</td></tr><tr><td>149</td><td>1718</td></tr><tr><td>148</td><td>1783</td></tr><tr><td>147</td><td>1833</td></tr><tr><td>146</td><td>1930</td></tr><tr><td>145</td><td>2021</td></tr><tr><td>144</td><td>2121</td></tr><tr><td>143</td><td>2217</td></tr><tr><td>142</td><td>2331</td></tr><tr><td>141</td><td>2424</td></tr><tr><td>140</td><td>2521</td></tr><tr><td>139</td><td>2613</td></tr><tr><td>138</td><td>2701</td></tr><tr><td>137</td><td>2782</td></tr><tr><td>136</td><td>2869</td></tr><tr><td>135</td><td>2978</td></tr><tr><td>134</td><td>3125</td></tr><tr><td>133</td><td>3276</td></tr><tr><td>132</td><td>3419</td></tr><tr><td>131</td><td>3537</td></tr><tr><td>130</td><td>3629</td></tr><tr><td>129</td><td>3750</td></tr><tr><td>128</td><td>3830</td></tr><tr><td>127</td><td>3932</td></tr><tr><td>126</td><td>4071</td></tr><tr><td>125</td><td>4216</td></tr><tr><td>124</td><td>4368</td></tr><tr><td>123</td><td>4542</td></tr><tr><td>122</td><td>4758</td></tr><tr><td>121</td><td>4923</td></tr><tr><td>120</td><td>5085</td></tr><tr><td>119</td><td>5243</td></tr><tr><td>118</td><td>5387</td></tr><tr><td>117</td><td>5519</td></tr><tr><td>116</td><td>5663</td></tr><tr><td>115</td><td>5813</td></tr><tr><td>114</td><td>6014</td></tr><tr><td>113</td><td>6338</td></tr><tr><td>112</td><td>6549</td></tr><tr><td>111</td><td>6706</td></tr><tr><td>110</td><td>6920</td></tr><tr><td>109</td><td>7099</td></tr><tr><td>108</td><td>7247</td></tr><tr><td>107</td><td>7372</td></tr><tr><td>106</td><td>7533</td></tr><tr><td>105</td><td>7753</td></tr><tr><td>104</td><td>7959</td></tr><tr><td>103</td><td>8173</td></tr><tr><td>102</td><td>8467</td></tr><tr><td>101</td><td>8705</td></tr><tr><td>100</td><td>8894</td></tr><tr><td>99</td><td>9082</td></tr><tr><td>98</td><td>9267</td></tr><tr><td>97</td><td>9444</td></tr><tr><td>96</td><td>9589</td></tr><tr><td>95</td><td>9755</td></tr><tr><td>94</td><td>9948</td></tr><tr><td>93</td><td>10324</td></tr><tr><td>92</td><td>10583</td></tr><tr><td>91</td><td>10776</td></tr><tr><td>90</td><td>10944</td></tr><tr><td>89</td><td>11096</td></tr><tr><td>88</td><td>11242</td></tr><tr><td>87</td><td>11405</td></tr><tr><td>86</td><td>11560</td></tr><tr><td>85</td><td>11745</td></tr><tr><td>84</td><td>11957</td></tr><tr><td>83</td><td>12234</td></tr><tr><td>82</td><td>12477</td></tr><tr><td>81</td><td>12652</td></tr><tr><td>80</td><td>12819</td></tr><tr><td>79</td><td>12997</td></tr><tr><td>78</td><td>13141</td></tr><tr><td>77</td><td>13302</td></tr><tr><td>76</td><td>13447</td></tr><tr><td>75</td><td>13644</td></tr><tr><td>74</td><td>13882</td></tr><tr><td>73</td><td>14061</td></tr><tr><td>72</td><td>14269</td></tr><tr><td>71</td><td>14454</td></tr><tr><td>70</td><td>14609</td></tr><tr><td>69</td><td>14725</td></tr><tr><td>68</td><td>14831</td></tr><tr><td>67</td><td>14968</td></tr><tr><td>66</td><td>15098</td></tr><tr><td>65</td><td>15221</td></tr><tr><td>64</td><td>15353</td></tr><tr><td>63</td><td>15493</td></tr><tr><td>62</td><td>15625</td></tr><tr><td>61</td><td>15730</td></tr><tr><td>60</td><td>15811</td></tr><tr><td>59</td><td>15927</td></tr><tr><td>58</td><td>15996</td></tr><tr><td>57</td><td>16082</td></tr><tr><td>56</td><td>16189</td></tr><tr><td>55</td><td>16263</td></tr><tr><td>54</td><td>16337</td></tr><tr><td>53</td><td>16408</td></tr><tr><td>52</td><td>16484</td></tr><tr><td>51</td><td>16553</td></tr><tr><td>50</td><td>16612</td></tr><tr><td>49</td><td>16700</td></tr><tr><td>48</td><td>16744</td></tr><tr><td>47</td><td>16820</td></tr><tr><td>46</td><td>16897</td></tr><tr><td>45</td><td>16963</td></tr><tr><td>44</td><td>17008</td></tr><tr><td>43</td><td>17060</td></tr><tr><td>42</td><td>17099</td></tr><tr><td>41</td><td>17148</td></tr><tr><td>40</td><td>17179</td></tr><tr><td>39</td><td>17232</td></tr><tr><td>38</td><td>17300</td></tr><tr><td>37</td><td>17333</td></tr><tr><td>36</td><td>17365</td></tr><tr><td>35</td><td>17409</td></tr><tr><td>34</td><td>17459</td></tr><tr><td>33</td><td>17484</td></tr><tr><td>32</td><td>17504</td></tr><tr><td>31</td><td>17524</td></tr><tr><td>30</td><td>17546</td></tr><tr><td>29</td><td>17566</td></tr><tr><td>28</td><td>17595</td></tr><tr><td>27</td><td>17623</td></tr><tr><td>26</td><td>17642</td></tr><tr><td>25</td><td>17660</td></tr><tr><td>24</td><td>17670</td></tr><tr><td>23</td><td>17696</td></tr><tr><td>22</td><td>17704</td></tr><tr><td>21</td><td>17712</td></tr><tr><td>20</td><td>17724</td></tr><tr><td>19</td><td>17733</td></tr><tr><td>18</td><td>17744</td></tr><tr><td>17</td><td>17756</td></tr><tr><td>16</td><td>17776</td></tr><tr><td>15</td><td>17781</td></tr><tr><td>14</td><td>17800</td></tr><tr><td>13</td><td>17809</td></tr><tr><td>12</td><td>17814</td></tr><tr><td>11</td><td>17821</td></tr><tr><td>10</td><td>17825</td></tr><tr><td>9</td><td>17826</td></tr><tr><td>8</td><td>17832</td></tr><tr><td>7</td><td>17867</td></tr><tr><td>5</td><td>17869</td></tr><tr><td>0</td><td>17870</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 105 premiers ayant un score supérieur ou égal à 189 sont listés ci-dessous.
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
            <td>Corentin B.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Gautier D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Descartes, Montigny le Bretonneux</td>
         </tr>
         <tr>
            <td>Zoey S.</td>
            <td>191</td>
            <td>1</td>
            <td>Notre Dame Campostal, Rostrenen</td>
         </tr>
         <tr>
            <td>Noé T.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Aurélien F.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Claude Gellee, Epinal Cedex</td>
         </tr>
         <tr>
            <td>Damon M.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Arthur R.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Pierre H.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Jean-Baptiste C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Louis R.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
         <tr>
            <td>Clément J.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
         <tr>
            <td>Tristan D.</td>
            <td>191</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>191</td>
            <td>1</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Ambroise R.</td>
            <td>191</td>
            <td>1</td>
            <td>Aux Lazaristes, 69005</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Alexandre F.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Alvaro A.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Théo B.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Maine Dev Biran, Bergerac</td>
         </tr>
         <tr>
            <td>Pierrick T.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Emile Littré, Avranches</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Des Portes de l'Oisans, Vizille</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Des Portes de l'Oisans, Vizille</td>
         </tr>
         <tr>
            <td>Yohan G.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Arthur N.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Touchard-Washington, Le Mans</td>
         </tr>
         <tr>
            <td>Olympia D.</td>
            <td>191</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Claire L.</td>
            <td>191</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Josselin P.</td>
            <td>191</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Louis J.</td>
            <td>191</td>
            <td>1</td>
            <td>Le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Lucas R.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Thibault S.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>L D.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Guillot G.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Douanier Rousseau, Laval</td>
         </tr>
         <tr>
            <td>Jules B.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Tituan A.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Matéo M.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Louis G.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Benoît H.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Poyvalent Eugène Ionesco, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Quentin J.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Rene Perrin, 73400</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>191</td>
            <td>1</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Hugo R.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Manuel D.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Eloi B.</td>
            <td>190</td>
            <td>40</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Judith G.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Enora A.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Nicolas L.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Simon T.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Martin A.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Bertille F.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Laëtitia B.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Touchard-Washington, Le Mans</td>
         </tr>
         <tr>
            <td>Colin D.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Marc D.</td>
            <td>190</td>
            <td>40</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Tarek A.</td>
            <td>190</td>
            <td>40</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Louis M.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Malo M.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Benjamin Franklin, Auray</td>
         </tr>
         <tr>
            <td>Loic R.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Athénaïs H.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Pierre J.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Guillaume O.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Elise G.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Théodore Deck, Guebwiller</td>
         </tr>
         <tr>
            <td>Axel K.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Adrien K.</td>
            <td>190</td>
            <td>40</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Bogdan M.</td>
            <td>189</td>
            <td>66</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>189</td>
            <td>66</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>189</td>
            <td>66</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Benjamin C.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Salvador Allende, Hérouville St-Clair</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Antoine J.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Boris F.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Armand R.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Arthur E.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Benoît L.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Adam P.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Anita Conti, Bruz</td>
         </tr>
         <tr>
            <td>Louri N.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Anita Conti, Bruz</td>
         </tr>
         <tr>
            <td>Grégoire B.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Victor Hugo, Lunel</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Eric P.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Jean T.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Sacré-Coeur, Angers</td>
         </tr>
         <tr>
            <td>Félix H.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Sacré-Coeur, Angers</td>
         </tr>
         <tr>
            <td>Salomé G.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Camille Claudel, Blain</td>
         </tr>
         <tr>
            <td>Océane O.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Yen Ba V.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Lionel H.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Guy Moquet - Étienne Lenoir , Chateaubriant</td>
         </tr>
         <tr>
            <td>Alexis R.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Clément E.</td>
            <td>189</td>
            <td>66</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Inès D.</td>
            <td>189</td>
            <td>66</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Carl S.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Chanzy, Charleville-Mézières</td>
         </tr>
         <tr>
            <td>Héloïse C.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Clément B.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Dumont d'Urville, Caen</td>
         </tr>
         <tr>
            <td>Morgan D.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Dumont d'Urville, Caen</td>
         </tr>
         <tr>
            <td>Timothée B.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Polyvalent Jean-Jacques Henner, Altkirch</td>
         </tr>
         <tr>
            <td>Anna L.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Gwenaël V.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>189</td>
            <td>66</td>
            <td>Notre Dame Campostal, Rostrenen</td>
         </tr>
         <tr>
            <td>Benjamin K.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>François C.</td>
            <td>189</td>
            <td>66</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-36'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro : 364 élèves</h2>
            <i>Score maximum atteignable : 177</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-36' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-36' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>150</td><td>1</td></tr><tr><td>149</td><td>3</td></tr><tr><td>148</td><td>6</td></tr><tr><td>146</td><td>11</td></tr><tr><td>143</td><td>12</td></tr><tr><td>142</td><td>13</td></tr><tr><td>140</td><td>15</td></tr><tr><td>137</td><td>18</td></tr><tr><td>136</td><td>20</td></tr><tr><td>135</td><td>22</td></tr><tr><td>134</td><td>24</td></tr><tr><td>133</td><td>26</td></tr><tr><td>132</td><td>31</td></tr><tr><td>131</td><td>32</td></tr><tr><td>130</td><td>33</td></tr><tr><td>129</td><td>40</td></tr><tr><td>128</td><td>45</td></tr><tr><td>127</td><td>48</td></tr><tr><td>126</td><td>50</td></tr><tr><td>125</td><td>57</td></tr><tr><td>124</td><td>59</td></tr><tr><td>123</td><td>60</td></tr><tr><td>122</td><td>64</td></tr><tr><td>121</td><td>66</td></tr><tr><td>120</td><td>68</td></tr><tr><td>119</td><td>70</td></tr><tr><td>118</td><td>75</td></tr><tr><td>117</td><td>79</td></tr><tr><td>116</td><td>86</td></tr><tr><td>115</td><td>89</td></tr><tr><td>113</td><td>95</td></tr><tr><td>112</td><td>100</td></tr><tr><td>111</td><td>103</td></tr><tr><td>110</td><td>107</td></tr><tr><td>108</td><td>110</td></tr><tr><td>107</td><td>114</td></tr><tr><td>106</td><td>120</td></tr><tr><td>105</td><td>126</td></tr><tr><td>104</td><td>130</td></tr><tr><td>103</td><td>132</td></tr><tr><td>102</td><td>136</td></tr><tr><td>101</td><td>137</td></tr><tr><td>100</td><td>141</td></tr><tr><td>99</td><td>148</td></tr><tr><td>98</td><td>152</td></tr><tr><td>97</td><td>157</td></tr><tr><td>96</td><td>162</td></tr><tr><td>95</td><td>166</td></tr><tr><td>94</td><td>173</td></tr><tr><td>93</td><td>182</td></tr><tr><td>92</td><td>186</td></tr><tr><td>91</td><td>192</td></tr><tr><td>90</td><td>196</td></tr><tr><td>89</td><td>201</td></tr><tr><td>88</td><td>204</td></tr><tr><td>87</td><td>210</td></tr><tr><td>86</td><td>219</td></tr><tr><td>85</td><td>222</td></tr><tr><td>84</td><td>224</td></tr><tr><td>83</td><td>226</td></tr><tr><td>82</td><td>230</td></tr><tr><td>81</td><td>237</td></tr><tr><td>80</td><td>239</td></tr><tr><td>79</td><td>243</td></tr><tr><td>78</td><td>248</td></tr><tr><td>77</td><td>253</td></tr><tr><td>76</td><td>259</td></tr><tr><td>75</td><td>271</td></tr><tr><td>74</td><td>272</td></tr><tr><td>73</td><td>274</td></tr><tr><td>72</td><td>278</td></tr><tr><td>71</td><td>285</td></tr><tr><td>70</td><td>288</td></tr><tr><td>69</td><td>291</td></tr><tr><td>68</td><td>295</td></tr><tr><td>66</td><td>297</td></tr><tr><td>65</td><td>307</td></tr><tr><td>64</td><td>310</td></tr><tr><td>63</td><td>311</td></tr><tr><td>62</td><td>313</td></tr><tr><td>61</td><td>316</td></tr><tr><td>59</td><td>327</td></tr><tr><td>58</td><td>331</td></tr><tr><td>57</td><td>333</td></tr><tr><td>56</td><td>335</td></tr><tr><td>55</td><td>337</td></tr><tr><td>54</td><td>342</td></tr><tr><td>52</td><td>343</td></tr><tr><td>51</td><td>344</td></tr><tr><td>50</td><td>345</td></tr><tr><td>49</td><td>346</td></tr><tr><td>47</td><td>347</td></tr><tr><td>46</td><td>348</td></tr><tr><td>45</td><td>349</td></tr><tr><td>44</td><td>350</td></tr><tr><td>42</td><td>351</td></tr><tr><td>41</td><td>352</td></tr><tr><td>39</td><td>354</td></tr><tr><td>37</td><td>355</td></tr><tr><td>34</td><td>356</td></tr><tr><td>33</td><td>358</td></tr><tr><td>32</td><td>360</td></tr><tr><td>28</td><td>361</td></tr><tr><td>27</td><td>362</td></tr><tr><td>24</td><td>363</td></tr><tr><td>9</td><td>364</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 2 premiers ayant un score supérieur ou égal à 150 sont listés ci-dessous.
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
            <td>Valentin T.</td>
            <td>150</td>
            <td>1</td>
            <td>Lp Maryse Bastié, Hayange</td>
         </tr>
         <tr>
            <td>Laura L.</td>
            <td>150</td>
            <td>1</td>
            <td>Lp Maryse Bastié, Hayange</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-37'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première-Terminale pro : 370 élèves</h2>
            <i>Score maximum atteignable : 188</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-37' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-37' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>186</td><td>1</td></tr><tr><td>185</td><td>2</td></tr><tr><td>181</td><td>3</td></tr><tr><td>180</td><td>4</td></tr><tr><td>178</td><td>5</td></tr><tr><td>171</td><td>6</td></tr><tr><td>167</td><td>8</td></tr><tr><td>166</td><td>10</td></tr><tr><td>164</td><td>11</td></tr><tr><td>163</td><td>14</td></tr><tr><td>162</td><td>17</td></tr><tr><td>161</td><td>18</td></tr><tr><td>160</td><td>20</td></tr><tr><td>159</td><td>21</td></tr><tr><td>157</td><td>22</td></tr><tr><td>155</td><td>24</td></tr><tr><td>154</td><td>25</td></tr><tr><td>153</td><td>26</td></tr><tr><td>151</td><td>27</td></tr><tr><td>149</td><td>30</td></tr><tr><td>148</td><td>32</td></tr><tr><td>147</td><td>35</td></tr><tr><td>146</td><td>38</td></tr><tr><td>145</td><td>43</td></tr><tr><td>144</td><td>44</td></tr><tr><td>143</td><td>47</td></tr><tr><td>142</td><td>51</td></tr><tr><td>141</td><td>54</td></tr><tr><td>140</td><td>55</td></tr><tr><td>139</td><td>64</td></tr><tr><td>138</td><td>67</td></tr><tr><td>137</td><td>71</td></tr><tr><td>136</td><td>72</td></tr><tr><td>135</td><td>74</td></tr><tr><td>134</td><td>77</td></tr><tr><td>133</td><td>87</td></tr><tr><td>132</td><td>93</td></tr><tr><td>131</td><td>99</td></tr><tr><td>130</td><td>103</td></tr><tr><td>129</td><td>105</td></tr><tr><td>128</td><td>109</td></tr><tr><td>127</td><td>113</td></tr><tr><td>126</td><td>117</td></tr><tr><td>125</td><td>119</td></tr><tr><td>124</td><td>127</td></tr><tr><td>123</td><td>133</td></tr><tr><td>122</td><td>138</td></tr><tr><td>121</td><td>144</td></tr><tr><td>120</td><td>159</td></tr><tr><td>119</td><td>163</td></tr><tr><td>118</td><td>165</td></tr><tr><td>117</td><td>171</td></tr><tr><td>116</td><td>174</td></tr><tr><td>115</td><td>178</td></tr><tr><td>114</td><td>184</td></tr><tr><td>113</td><td>189</td></tr><tr><td>112</td><td>192</td></tr><tr><td>111</td><td>196</td></tr><tr><td>110</td><td>202</td></tr><tr><td>109</td><td>208</td></tr><tr><td>108</td><td>210</td></tr><tr><td>107</td><td>213</td></tr><tr><td>106</td><td>214</td></tr><tr><td>105</td><td>218</td></tr><tr><td>104</td><td>225</td></tr><tr><td>103</td><td>228</td></tr><tr><td>102</td><td>237</td></tr><tr><td>101</td><td>239</td></tr><tr><td>99</td><td>244</td></tr><tr><td>98</td><td>249</td></tr><tr><td>97</td><td>253</td></tr><tr><td>96</td><td>257</td></tr><tr><td>95</td><td>259</td></tr><tr><td>94</td><td>264</td></tr><tr><td>93</td><td>269</td></tr><tr><td>92</td><td>270</td></tr><tr><td>91</td><td>272</td></tr><tr><td>90</td><td>274</td></tr><tr><td>89</td><td>280</td></tr><tr><td>88</td><td>283</td></tr><tr><td>87</td><td>285</td></tr><tr><td>86</td><td>286</td></tr><tr><td>85</td><td>290</td></tr><tr><td>84</td><td>295</td></tr><tr><td>83</td><td>299</td></tr><tr><td>82</td><td>302</td></tr><tr><td>81</td><td>304</td></tr><tr><td>80</td><td>305</td></tr><tr><td>79</td><td>307</td></tr><tr><td>78</td><td>310</td></tr><tr><td>77</td><td>311</td></tr><tr><td>74</td><td>313</td></tr><tr><td>72</td><td>316</td></tr><tr><td>71</td><td>318</td></tr><tr><td>70</td><td>321</td></tr><tr><td>69</td><td>322</td></tr><tr><td>68</td><td>323</td></tr><tr><td>67</td><td>324</td></tr><tr><td>65</td><td>325</td></tr><tr><td>64</td><td>327</td></tr><tr><td>63</td><td>328</td></tr><tr><td>62</td><td>329</td></tr><tr><td>61</td><td>331</td></tr><tr><td>59</td><td>337</td></tr><tr><td>58</td><td>339</td></tr><tr><td>57</td><td>340</td></tr><tr><td>55</td><td>341</td></tr><tr><td>54</td><td>342</td></tr><tr><td>53</td><td>344</td></tr><tr><td>52</td><td>346</td></tr><tr><td>48</td><td>347</td></tr><tr><td>47</td><td>350</td></tr><tr><td>45</td><td>351</td></tr><tr><td>44</td><td>352</td></tr><tr><td>43</td><td>354</td></tr><tr><td>42</td><td>357</td></tr><tr><td>41</td><td>358</td></tr><tr><td>40</td><td>359</td></tr><tr><td>37</td><td>361</td></tr><tr><td>36</td><td>362</td></tr><tr><td>30</td><td>363</td></tr><tr><td>28</td><td>364</td></tr><tr><td>19</td><td>365</td></tr><tr><td>11</td><td>370</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 2 premiers ayant un score supérieur ou égal à 185 sont listés ci-dessous.
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
            <td>Alison T.</td>
            <td>186</td>
            <td>1</td>
            <td>Collège-Lycée Bon Sauveur, Saint-Lô</td>
         </tr>
         <tr>
            <td>Hugo F.</td>
            <td>185</td>
            <td>2</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div></div>
