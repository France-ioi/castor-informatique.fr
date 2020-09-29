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

function setNbContestants(nbContestants) {
   var noNbContestants = nbContestants == 1 ? 2 : 1;
   $('.nbContestants'+nbContestants).show();
   $('.nbContestants'+noNbContestants).hide();
   $('.content-nbContestants'+noNbContestants).hide();
}


$(function () {
   $("div[id^=ranks]").each(function(){
      var id = $(this).attr('id').replace('ranks-', '');
      displayCharts("ranks-"+id, "graph-"+id); 
   });

   $("#results").tabs();
   $("#results").show();
   $("#nbContestantsTab").tabs();
   $("#nbContestantsTab").show();
   setNbContestants(1);
});
</script> 

<!--<li>65751 élèves ont participé, dont 1% de filles.</li>
<li>1038 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-135044579463185233-8-1'><a href='#tabs-135044579463185233-8-1'>4e</a></li><li class='nbContestants2' id='link-135044579463185233-8-2'><a href='#tabs-135044579463185233-8-2'>4e</a></li><li class='nbContestants1' id='link-135044579463185233-9-1'><a href='#tabs-135044579463185233-9-1'>3e</a></li><li class='nbContestants2' id='link-135044579463185233-9-2'><a href='#tabs-135044579463185233-9-2'>3e</a></li><li class='nbContestants1' id='link-135044579463185233-10-1'><a href='#tabs-135044579463185233-10-1'>2de</a></li><li class='nbContestants2' id='link-135044579463185233-10-2'><a href='#tabs-135044579463185233-10-2'>2de</a></li><li class='nbContestants1' id='link-135044579463185233-11-1'><a href='#tabs-135044579463185233-11-1'>1re</a></li><li class='nbContestants2' id='link-135044579463185233-11-2'><a href='#tabs-135044579463185233-11-2'>1re</a></li><li class='nbContestants1' id='link-135044579463185233-12-1'><a href='#tabs-135044579463185233-12-1'>Tale</a></li><li class='nbContestants2' id='link-135044579463185233-12-2'><a href='#tabs-135044579463185233-12-2'>Tale</a></li><li class='nbContestants1' id='link-135044579463185233-13-1'><a href='#tabs-135044579463185233-13-1'>2de pro.</a></li><li class='nbContestants2' id='link-135044579463185233-13-2'><a href='#tabs-135044579463185233-13-2'>2de pro.</a></li><li class='nbContestants1' id='link-135044579463185233-14-1'><a href='#tabs-135044579463185233-14-1'>1re pro.</a></li><li class='nbContestants2' id='link-135044579463185233-14-2'><a href='#tabs-135044579463185233-14-2'>1re pro.</a></li><li class='nbContestants1' id='link-135044579463185233-15-1'><a href='#tabs-135044579463185233-15-1'>Tale pro.</a></li><li class='nbContestants2' id='link-135044579463185233-15-2'><a href='#tabs-135044579463185233-15-2'>Tale pro.</a></li><li class='nbContestants1' id='link-135044579463185233-18-1'><a href='#tabs-135044579463185233-18-1'>4e Segpa</a></li><li class='nbContestants2' id='link-135044579463185233-18-2'><a href='#tabs-135044579463185233-18-2'>4e Segpa</a></li><li class='nbContestants1' id='link-135044579463185233-19-1'><a href='#tabs-135044579463185233-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-135044579463185233-19-2'><a href='#tabs-135044579463185233-19-2'>3e Segpa</a></li></ul><div id='tabs-135044579463185233-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 8779 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>305</td><td>2</td></tr><tr><td>290</td><td>3</td></tr><tr><td>285</td><td>4</td></tr><tr><td>275</td><td>7</td></tr><tr><td>270</td><td>9</td></tr><tr><td>265</td><td>13</td></tr><tr><td>260</td><td>24</td></tr><tr><td>255</td><td>49</td></tr><tr><td>250</td><td>58</td></tr><tr><td>245</td><td>96</td></tr><tr><td>240</td><td>112</td></tr><tr><td>235</td><td>196</td></tr><tr><td>230</td><td>222</td></tr><tr><td>225</td><td>392</td></tr><tr><td>220</td><td>433</td></tr><tr><td>215</td><td>691</td></tr><tr><td>210</td><td>733</td></tr><tr><td>205</td><td>1073</td></tr><tr><td>200</td><td>1115</td></tr><tr><td>195</td><td>1527</td></tr><tr><td>190</td><td>1583</td></tr><tr><td>185</td><td>2068</td></tr><tr><td>180</td><td>2121</td></tr><tr><td>175</td><td>2666</td></tr><tr><td>170</td><td>2725</td></tr><tr><td>165</td><td>3315</td></tr><tr><td>160</td><td>3380</td></tr><tr><td>155</td><td>4014</td></tr><tr><td>150</td><td>4063</td></tr><tr><td>145</td><td>4689</td></tr><tr><td>140</td><td>4725</td></tr><tr><td>135</td><td>5346</td></tr><tr><td>130</td><td>5386</td></tr><tr><td>125</td><td>5953</td></tr><tr><td>120</td><td>5987</td></tr><tr><td>115</td><td>6510</td></tr><tr><td>110</td><td>6540</td></tr><tr><td>105</td><td>7015</td></tr><tr><td>100</td><td>7040</td></tr><tr><td>95</td><td>7452</td></tr><tr><td>90</td><td>7474</td></tr><tr><td>85</td><td>7743</td></tr><tr><td>80</td><td>7755</td></tr><tr><td>75</td><td>8016</td></tr><tr><td>70</td><td>8026</td></tr><tr><td>65</td><td>8207</td></tr><tr><td>60</td><td>8210</td></tr><tr><td>55</td><td>8357</td></tr><tr><td>50</td><td>8359</td></tr><tr><td>40</td><td>8436</td></tr><tr><td>35</td><td>8530</td></tr><tr><td>30</td><td>8534</td></tr><tr><td>20</td><td>8552</td></tr><tr><td>0</td><td>8616</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 15053 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>275</td><td>1</td></tr><tr><td>270</td><td>9</td></tr><tr><td>265</td><td>21</td></tr><tr><td>260</td><td>25</td></tr><tr><td>255</td><td>61</td></tr><tr><td>250</td><td>91</td></tr><tr><td>245</td><td>174</td></tr><tr><td>240</td><td>216</td></tr><tr><td>235</td><td>393</td></tr><tr><td>230</td><td>481</td></tr><tr><td>225</td><td>822</td></tr><tr><td>220</td><td>895</td></tr><tr><td>215</td><td>1446</td></tr><tr><td>210</td><td>1566</td></tr><tr><td>205</td><td>2323</td></tr><tr><td>200</td><td>2432</td></tr><tr><td>195</td><td>3330</td></tr><tr><td>190</td><td>3449</td></tr><tr><td>185</td><td>4425</td></tr><tr><td>180</td><td>4583</td></tr><tr><td>175</td><td>5687</td></tr><tr><td>170</td><td>5797</td></tr><tr><td>165</td><td>6989</td></tr><tr><td>160</td><td>7105</td></tr><tr><td>155</td><td>8234</td></tr><tr><td>150</td><td>8346</td></tr><tr><td>145</td><td>9458</td></tr><tr><td>140</td><td>9566</td></tr><tr><td>135</td><td>10556</td></tr><tr><td>130</td><td>10623</td></tr><tr><td>125</td><td>11538</td></tr><tr><td>120</td><td>11596</td></tr><tr><td>115</td><td>12356</td></tr><tr><td>110</td><td>12410</td></tr><tr><td>105</td><td>12990</td></tr><tr><td>100</td><td>13026</td></tr><tr><td>95</td><td>13494</td></tr><tr><td>90</td><td>13514</td></tr><tr><td>85</td><td>13908</td></tr><tr><td>80</td><td>13918</td></tr><tr><td>75</td><td>14174</td></tr><tr><td>70</td><td>14182</td></tr><tr><td>65</td><td>14380</td></tr><tr><td>60</td><td>14392</td></tr><tr><td>55</td><td>14543</td></tr><tr><td>50</td><td>14546</td></tr><tr><td>40</td><td>14614</td></tr><tr><td>30</td><td>14685</td></tr><tr><td>20</td><td>14704</td></tr><tr><td>0</td><td>14755</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 9018 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>285</td><td>1</td></tr><tr><td>280</td><td>5</td></tr><tr><td>275</td><td>9</td></tr><tr><td>270</td><td>18</td></tr><tr><td>265</td><td>29</td></tr><tr><td>260</td><td>45</td></tr><tr><td>255</td><td>93</td></tr><tr><td>250</td><td>128</td></tr><tr><td>245</td><td>226</td></tr><tr><td>240</td><td>258</td></tr><tr><td>235</td><td>454</td></tr><tr><td>230</td><td>518</td></tr><tr><td>225</td><td>805</td></tr><tr><td>220</td><td>872</td></tr><tr><td>215</td><td>1304</td></tr><tr><td>210</td><td>1379</td></tr><tr><td>205</td><td>1890</td></tr><tr><td>200</td><td>1961</td></tr><tr><td>195</td><td>2533</td></tr><tr><td>190</td><td>2604</td></tr><tr><td>185</td><td>3161</td></tr><tr><td>180</td><td>3235</td></tr><tr><td>175</td><td>3836</td></tr><tr><td>170</td><td>3890</td></tr><tr><td>165</td><td>4542</td></tr><tr><td>160</td><td>4608</td></tr><tr><td>155</td><td>5205</td></tr><tr><td>150</td><td>5254</td></tr><tr><td>145</td><td>5806</td></tr><tr><td>140</td><td>5849</td></tr><tr><td>135</td><td>6390</td></tr><tr><td>130</td><td>6429</td></tr><tr><td>125</td><td>6912</td></tr><tr><td>120</td><td>6933</td></tr><tr><td>115</td><td>7330</td></tr><tr><td>110</td><td>7364</td></tr><tr><td>105</td><td>7680</td></tr><tr><td>100</td><td>7696</td></tr><tr><td>95</td><td>7971</td></tr><tr><td>90</td><td>7987</td></tr><tr><td>85</td><td>8197</td></tr><tr><td>80</td><td>8208</td></tr><tr><td>75</td><td>8382</td></tr><tr><td>70</td><td>8394</td></tr><tr><td>60</td><td>8518</td></tr><tr><td>55</td><td>8623</td></tr><tr><td>50</td><td>8624</td></tr><tr><td>40</td><td>8672</td></tr><tr><td>35</td><td>8729</td></tr><tr><td>30</td><td>8730</td></tr><tr><td>20</td><td>8749</td></tr><tr><td>0</td><td>8815</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 14678 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>295</td><td>1</td></tr><tr><td>290</td><td>5</td></tr><tr><td>285</td><td>9</td></tr><tr><td>280</td><td>17</td></tr><tr><td>275</td><td>21</td></tr><tr><td>270</td><td>33</td></tr><tr><td>265</td><td>61</td></tr><tr><td>260</td><td>95</td></tr><tr><td>255</td><td>181</td></tr><tr><td>250</td><td>251</td></tr><tr><td>245</td><td>489</td></tr><tr><td>240</td><td>586</td></tr><tr><td>235</td><td>935</td></tr><tr><td>230</td><td>1093</td></tr><tr><td>225</td><td>1693</td></tr><tr><td>220</td><td>1866</td></tr><tr><td>215</td><td>2696</td></tr><tr><td>210</td><td>2858</td></tr><tr><td>205</td><td>3848</td></tr><tr><td>200</td><td>4010</td></tr><tr><td>195</td><td>5052</td></tr><tr><td>190</td><td>5246</td></tr><tr><td>185</td><td>6352</td></tr><tr><td>180</td><td>6490</td></tr><tr><td>175</td><td>7525</td></tr><tr><td>170</td><td>7647</td></tr><tr><td>165</td><td>8736</td></tr><tr><td>160</td><td>8870</td></tr><tr><td>155</td><td>9874</td></tr><tr><td>150</td><td>9938</td></tr><tr><td>145</td><td>10849</td></tr><tr><td>140</td><td>10923</td></tr><tr><td>135</td><td>11621</td></tr><tr><td>130</td><td>11685</td></tr><tr><td>125</td><td>12355</td></tr><tr><td>120</td><td>12403</td></tr><tr><td>115</td><td>12952</td></tr><tr><td>110</td><td>12978</td></tr><tr><td>105</td><td>13364</td></tr><tr><td>100</td><td>13382</td></tr><tr><td>95</td><td>13728</td></tr><tr><td>90</td><td>13736</td></tr><tr><td>85</td><td>13948</td></tr><tr><td>80</td><td>13962</td></tr><tr><td>75</td><td>14133</td></tr><tr><td>70</td><td>14135</td></tr><tr><td>60</td><td>14217</td></tr><tr><td>50</td><td>14298</td></tr><tr><td>40</td><td>14337</td></tr><tr><td>30</td><td>14407</td></tr><tr><td>20</td><td>14411</td></tr><tr><td>0</td><td>14447</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 6861 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>315</td><td>1</td></tr><tr><td>310</td><td>2</td></tr><tr><td>305</td><td>3</td></tr><tr><td>300</td><td>4</td></tr><tr><td>295</td><td>8</td></tr><tr><td>290</td><td>9</td></tr><tr><td>285</td><td>15</td></tr><tr><td>280</td><td>17</td></tr><tr><td>275</td><td>29</td></tr><tr><td>270</td><td>47</td></tr><tr><td>265</td><td>80</td></tr><tr><td>260</td><td>120</td></tr><tr><td>255</td><td>198</td></tr><tr><td>250</td><td>239</td></tr><tr><td>245</td><td>396</td></tr><tr><td>240</td><td>474</td></tr><tr><td>235</td><td>752</td></tr><tr><td>230</td><td>841</td></tr><tr><td>225</td><td>1215</td></tr><tr><td>220</td><td>1290</td></tr><tr><td>215</td><td>1771</td></tr><tr><td>210</td><td>1836</td></tr><tr><td>205</td><td>2381</td></tr><tr><td>200</td><td>2443</td></tr><tr><td>195</td><td>2950</td></tr><tr><td>190</td><td>3020</td></tr><tr><td>185</td><td>3503</td></tr><tr><td>180</td><td>3570</td></tr><tr><td>175</td><td>4058</td></tr><tr><td>170</td><td>4104</td></tr><tr><td>165</td><td>4535</td></tr><tr><td>160</td><td>4565</td></tr><tr><td>155</td><td>5005</td></tr><tr><td>150</td><td>5039</td></tr><tr><td>145</td><td>5421</td></tr><tr><td>140</td><td>5439</td></tr><tr><td>135</td><td>5747</td></tr><tr><td>130</td><td>5765</td></tr><tr><td>125</td><td>6006</td></tr><tr><td>120</td><td>6027</td></tr><tr><td>115</td><td>6215</td></tr><tr><td>110</td><td>6224</td></tr><tr><td>105</td><td>6378</td></tr><tr><td>100</td><td>6381</td></tr><tr><td>95</td><td>6505</td></tr><tr><td>90</td><td>6514</td></tr><tr><td>85</td><td>6587</td></tr><tr><td>80</td><td>6588</td></tr><tr><td>75</td><td>6642</td></tr><tr><td>70</td><td>6645</td></tr><tr><td>60</td><td>6680</td></tr><tr><td>55</td><td>6715</td></tr><tr><td>50</td><td>6716</td></tr><tr><td>40</td><td>6734</td></tr><tr><td>30</td><td>6761</td></tr><tr><td>20</td><td>6771</td></tr><tr><td>0</td><td>6798</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 9928 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>305</td><td>3</td></tr><tr><td>300</td><td>5</td></tr><tr><td>290</td><td>7</td></tr><tr><td>285</td><td>9</td></tr><tr><td>280</td><td>21</td></tr><tr><td>275</td><td>57</td></tr><tr><td>270</td><td>75</td></tr><tr><td>265</td><td>131</td></tr><tr><td>260</td><td>175</td></tr><tr><td>255</td><td>307</td></tr><tr><td>250</td><td>421</td></tr><tr><td>245</td><td>712</td></tr><tr><td>240</td><td>837</td></tr><tr><td>235</td><td>1264</td></tr><tr><td>230</td><td>1407</td></tr><tr><td>225</td><td>2007</td></tr><tr><td>220</td><td>2153</td></tr><tr><td>215</td><td>2992</td></tr><tr><td>210</td><td>3124</td></tr><tr><td>205</td><td>3965</td></tr><tr><td>200</td><td>4102</td></tr><tr><td>195</td><td>4942</td></tr><tr><td>190</td><td>5024</td></tr><tr><td>185</td><td>5730</td></tr><tr><td>180</td><td>5802</td></tr><tr><td>175</td><td>6494</td></tr><tr><td>170</td><td>6550</td></tr><tr><td>165</td><td>7163</td></tr><tr><td>160</td><td>7199</td></tr><tr><td>155</td><td>7733</td></tr><tr><td>150</td><td>7777</td></tr><tr><td>145</td><td>8269</td></tr><tr><td>140</td><td>8303</td></tr><tr><td>135</td><td>8691</td></tr><tr><td>130</td><td>8715</td></tr><tr><td>125</td><td>8966</td></tr><tr><td>120</td><td>8982</td></tr><tr><td>115</td><td>9239</td></tr><tr><td>110</td><td>9255</td></tr><tr><td>105</td><td>9387</td></tr><tr><td>100</td><td>9391</td></tr><tr><td>95</td><td>9502</td></tr><tr><td>90</td><td>9508</td></tr><tr><td>85</td><td>9580</td></tr><tr><td>80</td><td>9584</td></tr><tr><td>70</td><td>9634</td></tr><tr><td>60</td><td>9674</td></tr><tr><td>50</td><td>9718</td></tr><tr><td>40</td><td>9743</td></tr><tr><td>30</td><td>9767</td></tr><tr><td>20</td><td>9775</td></tr><tr><td>0</td><td>9801</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 215 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>285</td><td>2</td></tr><tr><td>270</td><td>4</td></tr><tr><td>265</td><td>9</td></tr><tr><td>260</td><td>16</td></tr><tr><td>255</td><td>22</td></tr><tr><td>250</td><td>28</td></tr><tr><td>245</td><td>34</td></tr><tr><td>240</td><td>37</td></tr><tr><td>235</td><td>52</td></tr><tr><td>230</td><td>55</td></tr><tr><td>225</td><td>71</td></tr><tr><td>220</td><td>73</td></tr><tr><td>215</td><td>97</td></tr><tr><td>210</td><td>103</td></tr><tr><td>205</td><td>121</td></tr><tr><td>200</td><td>125</td></tr><tr><td>190</td><td>138</td></tr><tr><td>185</td><td>148</td></tr><tr><td>180</td><td>150</td></tr><tr><td>175</td><td>159</td></tr><tr><td>170</td><td>160</td></tr><tr><td>165</td><td>170</td></tr><tr><td>160</td><td>171</td></tr><tr><td>150</td><td>185</td></tr><tr><td>140</td><td>189</td></tr><tr><td>130</td><td>194</td></tr><tr><td>120</td><td>195</td></tr><tr><td>110</td><td>198</td></tr><tr><td>100</td><td>200</td></tr><tr><td>95</td><td>201</td></tr><tr><td>90</td><td>203</td></tr><tr><td>80</td><td>204</td></tr><tr><td>70</td><td>207</td></tr><tr><td>40</td><td>208</td></tr><tr><td>30</td><td>210</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 59 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>285</td><td>1</td></tr><tr><td>270</td><td>3</td></tr><tr><td>260</td><td>5</td></tr><tr><td>250</td><td>9</td></tr><tr><td>240</td><td>15</td></tr><tr><td>235</td><td>19</td></tr><tr><td>230</td><td>21</td></tr><tr><td>220</td><td>35</td></tr><tr><td>200</td><td>40</td></tr><tr><td>180</td><td>42</td></tr><tr><td>170</td><td>46</td></tr><tr><td>160</td><td>50</td></tr><tr><td>150</td><td>52</td></tr><tr><td>130</td><td>53</td></tr><tr><td>60</td><td>55</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 137 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>270</td><td>3</td></tr><tr><td>265</td><td>6</td></tr><tr><td>260</td><td>8</td></tr><tr><td>255</td><td>11</td></tr><tr><td>250</td><td>14</td></tr><tr><td>245</td><td>25</td></tr><tr><td>240</td><td>29</td></tr><tr><td>235</td><td>39</td></tr><tr><td>230</td><td>42</td></tr><tr><td>225</td><td>54</td></tr><tr><td>220</td><td>59</td></tr><tr><td>215</td><td>65</td></tr><tr><td>210</td><td>66</td></tr><tr><td>205</td><td>72</td></tr><tr><td>200</td><td>73</td></tr><tr><td>190</td><td>81</td></tr><tr><td>185</td><td>93</td></tr><tr><td>180</td><td>94</td></tr><tr><td>170</td><td>98</td></tr><tr><td>160</td><td>100</td></tr><tr><td>150</td><td>109</td></tr><tr><td>140</td><td>113</td></tr><tr><td>135</td><td>119</td></tr><tr><td>130</td><td>120</td></tr><tr><td>120</td><td>122</td></tr><tr><td>110</td><td>123</td></tr><tr><td>100</td><td>125</td></tr><tr><td>90</td><td>126</td></tr><tr><td>80</td><td>129</td></tr><tr><td>70</td><td>131</td></tr><tr><td>60</td><td>132</td></tr><tr><td>20</td><td>135</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 94 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>275</td><td>1</td></tr><tr><td>260</td><td>3</td></tr><tr><td>250</td><td>5</td></tr><tr><td>245</td><td>11</td></tr><tr><td>240</td><td>14</td></tr><tr><td>235</td><td>18</td></tr><tr><td>230</td><td>20</td></tr><tr><td>225</td><td>22</td></tr><tr><td>220</td><td>24</td></tr><tr><td>215</td><td>33</td></tr><tr><td>210</td><td>34</td></tr><tr><td>205</td><td>40</td></tr><tr><td>200</td><td>48</td></tr><tr><td>190</td><td>58</td></tr><tr><td>180</td><td>66</td></tr><tr><td>170</td><td>70</td></tr><tr><td>160</td><td>76</td></tr><tr><td>155</td><td>80</td></tr><tr><td>130</td><td>82</td></tr><tr><td>120</td><td>86</td></tr><tr><td>110</td><td>87</td></tr><tr><td>80</td><td>89</td></tr><tr><td>20</td><td>91</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 212 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>285</td><td>1</td></tr><tr><td>265</td><td>2</td></tr><tr><td>260</td><td>3</td></tr><tr><td>250</td><td>4</td></tr><tr><td>240</td><td>5</td></tr><tr><td>230</td><td>7</td></tr><tr><td>225</td><td>11</td></tr><tr><td>220</td><td>12</td></tr><tr><td>210</td><td>17</td></tr><tr><td>205</td><td>31</td></tr><tr><td>200</td><td>33</td></tr><tr><td>195</td><td>49</td></tr><tr><td>190</td><td>52</td></tr><tr><td>180</td><td>71</td></tr><tr><td>175</td><td>83</td></tr><tr><td>170</td><td>87</td></tr><tr><td>165</td><td>95</td></tr><tr><td>160</td><td>96</td></tr><tr><td>150</td><td>111</td></tr><tr><td>140</td><td>124</td></tr><tr><td>135</td><td>131</td></tr><tr><td>130</td><td>132</td></tr><tr><td>120</td><td>143</td></tr><tr><td>115</td><td>150</td></tr><tr><td>110</td><td>151</td></tr><tr><td>105</td><td>163</td></tr><tr><td>100</td><td>164</td></tr><tr><td>90</td><td>172</td></tr><tr><td>80</td><td>178</td></tr><tr><td>70</td><td>186</td></tr><tr><td>60</td><td>189</td></tr><tr><td>55</td><td>192</td></tr><tr><td>50</td><td>193</td></tr><tr><td>40</td><td>198</td></tr><tr><td>30</td><td>204</td></tr><tr><td>20</td><td>205</td></tr><tr><td>0</td><td>208</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 241 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>255</td><td>1</td></tr><tr><td>250</td><td>5</td></tr><tr><td>245</td><td>8</td></tr><tr><td>235</td><td>10</td></tr><tr><td>230</td><td>13</td></tr><tr><td>225</td><td>21</td></tr><tr><td>220</td><td>25</td></tr><tr><td>210</td><td>35</td></tr><tr><td>205</td><td>50</td></tr><tr><td>200</td><td>52</td></tr><tr><td>190</td><td>71</td></tr><tr><td>185</td><td>97</td></tr><tr><td>180</td><td>103</td></tr><tr><td>175</td><td>123</td></tr><tr><td>170</td><td>125</td></tr><tr><td>165</td><td>147</td></tr><tr><td>160</td><td>149</td></tr><tr><td>155</td><td>157</td></tr><tr><td>150</td><td>159</td></tr><tr><td>140</td><td>169</td></tr><tr><td>135</td><td>184</td></tr><tr><td>130</td><td>186</td></tr><tr><td>120</td><td>194</td></tr><tr><td>110</td><td>206</td></tr><tr><td>100</td><td>212</td></tr><tr><td>95</td><td>214</td></tr><tr><td>80</td><td>216</td></tr><tr><td>70</td><td>218</td></tr><tr><td>60</td><td>222</td></tr><tr><td>50</td><td>228</td></tr><tr><td>20</td><td>232</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 65 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>235</td><td>2</td></tr><tr><td>230</td><td>4</td></tr><tr><td>220</td><td>5</td></tr><tr><td>210</td><td>9</td></tr><tr><td>200</td><td>12</td></tr><tr><td>190</td><td>18</td></tr><tr><td>185</td><td>24</td></tr><tr><td>180</td><td>26</td></tr><tr><td>175</td><td>31</td></tr><tr><td>170</td><td>32</td></tr><tr><td>165</td><td>33</td></tr><tr><td>160</td><td>34</td></tr><tr><td>155</td><td>37</td></tr><tr><td>150</td><td>38</td></tr><tr><td>140</td><td>43</td></tr><tr><td>135</td><td>46</td></tr><tr><td>130</td><td>47</td></tr><tr><td>125</td><td>49</td></tr><tr><td>120</td><td>50</td></tr><tr><td>110</td><td>56</td></tr><tr><td>100</td><td>57</td></tr><tr><td>70</td><td>59</td></tr><tr><td>40</td><td>62</td></tr><tr><td>30</td><td>63</td></tr><tr><td>0</td><td>64</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 11 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>210</td><td>1</td></tr><tr><td>200</td><td>2</td></tr><tr><td>170</td><td>4</td></tr><tr><td>150</td><td>5</td></tr><tr><td>140</td><td>7</td></tr><tr><td>100</td><td>9</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 78 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>250</td><td>1</td></tr><tr><td>240</td><td>2</td></tr><tr><td>230</td><td>3</td></tr><tr><td>220</td><td>7</td></tr><tr><td>210</td><td>14</td></tr><tr><td>200</td><td>15</td></tr><tr><td>190</td><td>16</td></tr><tr><td>180</td><td>19</td></tr><tr><td>170</td><td>23</td></tr><tr><td>160</td><td>26</td></tr><tr><td>150</td><td>30</td></tr><tr><td>145</td><td>32</td></tr><tr><td>140</td><td>33</td></tr><tr><td>135</td><td>37</td></tr><tr><td>130</td><td>38</td></tr><tr><td>120</td><td>43</td></tr><tr><td>110</td><td>46</td></tr><tr><td>100</td><td>49</td></tr><tr><td>90</td><td>53</td></tr><tr><td>85</td><td>58</td></tr><tr><td>80</td><td>59</td></tr><tr><td>70</td><td>64</td></tr><tr><td>60</td><td>68</td></tr><tr><td>50</td><td>70</td></tr><tr><td>40</td><td>73</td></tr><tr><td>20</td><td>75</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 23 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>235</td><td>1</td></tr><tr><td>210</td><td>2</td></tr><tr><td>150</td><td>6</td></tr><tr><td>125</td><td>8</td></tr><tr><td>110</td><td>10</td></tr><tr><td>100</td><td>14</td></tr><tr><td>90</td><td>18</td></tr><tr><td>40</td><td>20</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 69 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>230</td><td>1</td></tr><tr><td>210</td><td>3</td></tr><tr><td>200</td><td>5</td></tr><tr><td>190</td><td>7</td></tr><tr><td>180</td><td>8</td></tr><tr><td>170</td><td>9</td></tr><tr><td>160</td><td>12</td></tr><tr><td>155</td><td>14</td></tr><tr><td>150</td><td>15</td></tr><tr><td>140</td><td>16</td></tr><tr><td>130</td><td>20</td></tr><tr><td>120</td><td>21</td></tr><tr><td>115</td><td>27</td></tr><tr><td>110</td><td>28</td></tr><tr><td>105</td><td>33</td></tr><tr><td>100</td><td>34</td></tr><tr><td>95</td><td>40</td></tr><tr><td>90</td><td>41</td></tr><tr><td>80</td><td>46</td></tr><tr><td>70</td><td>51</td></tr><tr><td>60</td><td>54</td></tr><tr><td>50</td><td>62</td></tr><tr><td>40</td><td>63</td></tr><tr><td>20</td><td>65</td></tr><tr><td>0</td><td>66</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 95 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>230</td><td>1</td></tr><tr><td>225</td><td>2</td></tr><tr><td>220</td><td>3</td></tr><tr><td>200</td><td>5</td></tr><tr><td>190</td><td>6</td></tr><tr><td>180</td><td>10</td></tr><tr><td>170</td><td>19</td></tr><tr><td>160</td><td>32</td></tr><tr><td>155</td><td>38</td></tr><tr><td>150</td><td>40</td></tr><tr><td>140</td><td>44</td></tr><tr><td>130</td><td>49</td></tr><tr><td>120</td><td>56</td></tr><tr><td>110</td><td>59</td></tr><tr><td>100</td><td>62</td></tr><tr><td>90</td><td>68</td></tr><tr><td>80</td><td>70</td></tr><tr><td>70</td><td>73</td></tr><tr><td>55</td><td>79</td></tr><tr><td>30</td><td>80</td></tr><tr><td>20</td><td>81</td></tr><tr><td>0</td><td>82</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 28 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>210</td><td>1</td></tr><tr><td>200</td><td>2</td></tr><tr><td>180</td><td>4</td></tr><tr><td>165</td><td>5</td></tr><tr><td>160</td><td>6</td></tr><tr><td>150</td><td>7</td></tr><tr><td>140</td><td>9</td></tr><tr><td>135</td><td>11</td></tr><tr><td>130</td><td>12</td></tr><tr><td>120</td><td>13</td></tr><tr><td>110</td><td>15</td></tr><tr><td>90</td><td>17</td></tr><tr><td>80</td><td>18</td></tr><tr><td>60</td><td>19</td></tr><tr><td>40</td><td>20</td></tr><tr><td>30</td><td>22</td></tr><tr><td>20</td><td>23</td></tr><tr><td>0</td><td>24</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-135044579463185233-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 107 élèves</h2>
            <i>Score maximum atteignable : 320</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-135044579463185233-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-135044579463185233-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>255</td><td>1</td></tr><tr><td>240</td><td>2</td></tr><tr><td>235</td><td>3</td></tr><tr><td>230</td><td>4</td></tr><tr><td>225</td><td>9</td></tr><tr><td>220</td><td>10</td></tr><tr><td>210</td><td>16</td></tr><tr><td>205</td><td>19</td></tr><tr><td>200</td><td>20</td></tr><tr><td>195</td><td>25</td></tr><tr><td>190</td><td>26</td></tr><tr><td>180</td><td>32</td></tr><tr><td>170</td><td>36</td></tr><tr><td>165</td><td>41</td></tr><tr><td>160</td><td>43</td></tr><tr><td>155</td><td>53</td></tr><tr><td>150</td><td>55</td></tr><tr><td>140</td><td>61</td></tr><tr><td>135</td><td>70</td></tr><tr><td>130</td><td>71</td></tr><tr><td>120</td><td>76</td></tr><tr><td>110</td><td>81</td></tr><tr><td>90</td><td>86</td></tr><tr><td>80</td><td>89</td></tr><tr><td>70</td><td>90</td></tr><tr><td>60</td><td>92</td></tr><tr><td>50</td><td>94</td></tr><tr><td>40</td><td>96</td></tr><tr><td>30</td><td>97</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
