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

<!--<li>686179 élèves ont participé, dont 0% de filles.</li>
<li>3808 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-85256043878345851-4-1'><a href='#tabs-85256043878345851-4-1'>CM1</a></li><li class='nbContestants1' id='link-85256043878345851-5-1'><a href='#tabs-85256043878345851-5-1'>CM2</a></li><li class='nbContestants1' id='link-85256043878345851-6-1'><a href='#tabs-85256043878345851-6-1'>6e</a></li><li class='nbContestants1' id='link-85256043878345851-7-1'><a href='#tabs-85256043878345851-7-1'>5e</a></li><li class='nbContestants1' id='link-85256043878345851-8-1'><a href='#tabs-85256043878345851-8-1'>4e</a></li><li class='nbContestants1' id='link-85256043878345851-9-1'><a href='#tabs-85256043878345851-9-1'>3e</a></li><li class='nbContestants1' id='link-85256043878345851-10-1'><a href='#tabs-85256043878345851-10-1'>2de</a></li><li class='nbContestants1' id='link-85256043878345851-11-1'><a href='#tabs-85256043878345851-11-1'>1re</a></li><li class='nbContestants1' id='link-85256043878345851-12-1'><a href='#tabs-85256043878345851-12-1'>Tale</a></li><li class='nbContestants1' id='link-85256043878345851-13-1'><a href='#tabs-85256043878345851-13-1'>2de pro.</a></li><li class='nbContestants1' id='link-85256043878345851-14-1'><a href='#tabs-85256043878345851-14-1'>1re pro.</a></li><li class='nbContestants1' id='link-85256043878345851-15-1'><a href='#tabs-85256043878345851-15-1'>Tale pro.</a></li><li class='nbContestants1' id='link-85256043878345851-16-1'><a href='#tabs-85256043878345851-16-1'>6e Segpa</a></li><li class='nbContestants1' id='link-85256043878345851-17-1'><a href='#tabs-85256043878345851-17-1'>5e Segpa</a></li><li class='nbContestants1' id='link-85256043878345851-18-1'><a href='#tabs-85256043878345851-18-1'>4e Segpa</a></li><li class='nbContestants1' id='link-85256043878345851-19-1'><a href='#tabs-85256043878345851-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-85256043878345851-4-2'><a href='#tabs-85256043878345851-4-2'>CM1</a></li><li class='nbContestants2' id='link-85256043878345851-5-2'><a href='#tabs-85256043878345851-5-2'>CM2</a></li><li class='nbContestants2' id='link-85256043878345851-6-2'><a href='#tabs-85256043878345851-6-2'>6e</a></li><li class='nbContestants2' id='link-85256043878345851-7-2'><a href='#tabs-85256043878345851-7-2'>5e</a></li><li class='nbContestants2' id='link-85256043878345851-8-2'><a href='#tabs-85256043878345851-8-2'>4e</a></li><li class='nbContestants2' id='link-85256043878345851-9-2'><a href='#tabs-85256043878345851-9-2'>3e</a></li><li class='nbContestants2' id='link-85256043878345851-10-2'><a href='#tabs-85256043878345851-10-2'>2de</a></li><li class='nbContestants2' id='link-85256043878345851-11-2'><a href='#tabs-85256043878345851-11-2'>1re</a></li><li class='nbContestants2' id='link-85256043878345851-12-2'><a href='#tabs-85256043878345851-12-2'>Tale</a></li><li class='nbContestants2' id='link-85256043878345851-13-2'><a href='#tabs-85256043878345851-13-2'>2de pro.</a></li><li class='nbContestants2' id='link-85256043878345851-14-2'><a href='#tabs-85256043878345851-14-2'>1re pro.</a></li><li class='nbContestants2' id='link-85256043878345851-15-2'><a href='#tabs-85256043878345851-15-2'>Tale pro.</a></li><li class='nbContestants2' id='link-85256043878345851-16-2'><a href='#tabs-85256043878345851-16-2'>6e Segpa</a></li><li class='nbContestants2' id='link-85256043878345851-17-2'><a href='#tabs-85256043878345851-17-2'>5e Segpa</a></li><li class='nbContestants2' id='link-85256043878345851-18-2'><a href='#tabs-85256043878345851-18-2'>4e Segpa</a></li><li class='nbContestants2' id='link-85256043878345851-19-2'><a href='#tabs-85256043878345851-19-2'>3e Segpa</a></li></ul><div id='tabs-85256043878345851-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 4453 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>265</td><td>1</td></tr><tr><td>255</td><td>3</td></tr><tr><td>250</td><td>4</td></tr><tr><td>245</td><td>5</td></tr><tr><td>240</td><td>8</td></tr><tr><td>235</td><td>10</td></tr><tr><td>230</td><td>13</td></tr><tr><td>220</td><td>15</td></tr><tr><td>215</td><td>19</td></tr><tr><td>210</td><td>22</td></tr><tr><td>205</td><td>25</td></tr><tr><td>200</td><td>31</td></tr><tr><td>195</td><td>40</td></tr><tr><td>190</td><td>51</td></tr><tr><td>185</td><td>66</td></tr><tr><td>180</td><td>80</td></tr><tr><td>175</td><td>97</td></tr><tr><td>170</td><td>108</td></tr><tr><td>165</td><td>136</td></tr><tr><td>160</td><td>172</td></tr><tr><td>155</td><td>209</td></tr><tr><td>150</td><td>249</td></tr><tr><td>145</td><td>306</td></tr><tr><td>140</td><td>385</td></tr><tr><td>135</td><td>451</td></tr><tr><td>130</td><td>535</td></tr><tr><td>125</td><td>617</td></tr><tr><td>120</td><td>725</td></tr><tr><td>115</td><td>862</td></tr><tr><td>110</td><td>1012</td></tr><tr><td>105</td><td>1188</td></tr><tr><td>100</td><td>1355</td></tr><tr><td>95</td><td>1535</td></tr><tr><td>90</td><td>1750</td></tr><tr><td>85</td><td>1948</td></tr><tr><td>80</td><td>2164</td></tr><tr><td>75</td><td>2422</td></tr><tr><td>70</td><td>2645</td></tr><tr><td>65</td><td>2888</td></tr><tr><td>60</td><td>3091</td></tr><tr><td>55</td><td>3329</td></tr><tr><td>50</td><td>3500</td></tr><tr><td>45</td><td>3694</td></tr><tr><td>40</td><td>3816</td></tr><tr><td>35</td><td>3976</td></tr><tr><td>30</td><td>4046</td></tr><tr><td>25</td><td>4158</td></tr><tr><td>20</td><td>4202</td></tr><tr><td>15</td><td>4275</td></tr><tr><td>10</td><td>4297</td></tr><tr><td>5</td><td>4340</td></tr><tr><td>0</td><td>4349</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 6456 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>285</td><td>1</td></tr><tr><td>275</td><td>2</td></tr><tr><td>260</td><td>3</td></tr><tr><td>255</td><td>5</td></tr><tr><td>250</td><td>6</td></tr><tr><td>245</td><td>8</td></tr><tr><td>240</td><td>10</td></tr><tr><td>235</td><td>14</td></tr><tr><td>230</td><td>19</td></tr><tr><td>225</td><td>24</td></tr><tr><td>220</td><td>37</td></tr><tr><td>215</td><td>44</td></tr><tr><td>210</td><td>65</td></tr><tr><td>205</td><td>84</td></tr><tr><td>200</td><td>103</td></tr><tr><td>195</td><td>139</td></tr><tr><td>190</td><td>182</td></tr><tr><td>185</td><td>238</td></tr><tr><td>180</td><td>295</td></tr><tr><td>175</td><td>370</td></tr><tr><td>170</td><td>452</td></tr><tr><td>165</td><td>548</td></tr><tr><td>160</td><td>652</td></tr><tr><td>155</td><td>757</td></tr><tr><td>150</td><td>897</td></tr><tr><td>145</td><td>1056</td></tr><tr><td>140</td><td>1218</td></tr><tr><td>135</td><td>1414</td></tr><tr><td>130</td><td>1621</td></tr><tr><td>125</td><td>1856</td></tr><tr><td>120</td><td>2115</td></tr><tr><td>115</td><td>2371</td></tr><tr><td>110</td><td>2631</td></tr><tr><td>105</td><td>2932</td></tr><tr><td>100</td><td>3235</td></tr><tr><td>95</td><td>3514</td></tr><tr><td>90</td><td>3784</td></tr><tr><td>85</td><td>4109</td></tr><tr><td>80</td><td>4376</td></tr><tr><td>75</td><td>4667</td></tr><tr><td>70</td><td>4898</td></tr><tr><td>65</td><td>5148</td></tr><tr><td>60</td><td>5359</td></tr><tr><td>55</td><td>5552</td></tr><tr><td>50</td><td>5719</td></tr><tr><td>45</td><td>5881</td></tr><tr><td>40</td><td>5986</td></tr><tr><td>35</td><td>6090</td></tr><tr><td>30</td><td>6144</td></tr><tr><td>25</td><td>6222</td></tr><tr><td>20</td><td>6258</td></tr><tr><td>15</td><td>6296</td></tr><tr><td>10</td><td>6304</td></tr><tr><td>5</td><td>6337</td></tr><tr><td>0</td><td>6341</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation individuelle) : 107519 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>365</td><td>4</td></tr><tr><td>355</td><td>5</td></tr><tr><td>345</td><td>8</td></tr><tr><td>335</td><td>9</td></tr><tr><td>325</td><td>11</td></tr><tr><td>315</td><td>13</td></tr><tr><td>310</td><td>16</td></tr><tr><td>305</td><td>17</td></tr><tr><td>300</td><td>20</td></tr><tr><td>295</td><td>21</td></tr><tr><td>290</td><td>26</td></tr><tr><td>285</td><td>34</td></tr><tr><td>280</td><td>38</td></tr><tr><td>275</td><td>48</td></tr><tr><td>270</td><td>54</td></tr><tr><td>265</td><td>66</td></tr><tr><td>260</td><td>80</td></tr><tr><td>255</td><td>106</td></tr><tr><td>250</td><td>140</td></tr><tr><td>245</td><td>184</td></tr><tr><td>244</td><td>252</td></tr><tr><td>240</td><td>253</td></tr><tr><td>235</td><td>327</td></tr><tr><td>230</td><td>434</td></tr><tr><td>225</td><td>605</td></tr><tr><td>220</td><td>796</td></tr><tr><td>215</td><td>1092</td></tr><tr><td>210</td><td>1452</td></tr><tr><td>205</td><td>1881</td></tr><tr><td>200</td><td>2457</td></tr><tr><td>195</td><td>3203</td></tr><tr><td>190</td><td>4107</td></tr><tr><td>185</td><td>5130</td></tr><tr><td>180</td><td>6491</td></tr><tr><td>175</td><td>7837</td></tr><tr><td>170</td><td>9737</td></tr><tr><td>165</td><td>11765</td></tr><tr><td>160</td><td>14178</td></tr><tr><td>155</td><td>16710</td></tr><tr><td>150</td><td>19542</td></tr><tr><td>145</td><td>22950</td></tr><tr><td>140</td><td>26329</td></tr><tr><td>135</td><td>30126</td></tr><tr><td>130</td><td>34057</td></tr><tr><td>125</td><td>38371</td></tr><tr><td>120</td><td>42758</td></tr><tr><td>115</td><td>47629</td></tr><tr><td>110</td><td>52331</td></tr><tr><td>109</td><td>57700</td></tr><tr><td>105</td><td>57701</td></tr><tr><td>100</td><td>62479</td></tr><tr><td>95</td><td>67477</td></tr><tr><td>90</td><td>71939</td></tr><tr><td>85</td><td>76984</td></tr><tr><td>80</td><td>81143</td></tr><tr><td>75</td><td>85232</td></tr><tr><td>70</td><td>88730</td></tr><tr><td>65</td><td>92198</td></tr><tr><td>60</td><td>94980</td></tr><tr><td>55</td><td>97587</td></tr><tr><td>50</td><td>99510</td></tr><tr><td>45</td><td>101432</td></tr><tr><td>40</td><td>102639</td></tr><tr><td>35</td><td>103918</td></tr><tr><td>30</td><td>104559</td></tr><tr><td>25</td><td>105344</td></tr><tr><td>20</td><td>105654</td></tr><tr><td>15</td><td>106090</td></tr><tr><td>10</td><td>106195</td></tr><tr><td>5</td><td>106461</td></tr><tr><td>0</td><td>106495</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation individuelle) : 109320 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>365</td><td>2</td></tr><tr><td>345</td><td>3</td></tr><tr><td>330</td><td>4</td></tr><tr><td>325</td><td>6</td></tr><tr><td>315</td><td>9</td></tr><tr><td>310</td><td>11</td></tr><tr><td>305</td><td>12</td></tr><tr><td>300</td><td>15</td></tr><tr><td>295</td><td>20</td></tr><tr><td>290</td><td>26</td></tr><tr><td>285</td><td>37</td></tr><tr><td>280</td><td>53</td></tr><tr><td>275</td><td>72</td></tr><tr><td>270</td><td>105</td></tr><tr><td>265</td><td>144</td></tr><tr><td>260</td><td>196</td></tr><tr><td>255</td><td>282</td></tr><tr><td>250</td><td>400</td></tr><tr><td>245</td><td>573</td></tr><tr><td>240</td><td>807</td></tr><tr><td>235</td><td>1104</td></tr><tr><td>230</td><td>1495</td></tr><tr><td>225</td><td>2031</td></tr><tr><td>220</td><td>2722</td></tr><tr><td>215</td><td>3570</td></tr><tr><td>211</td><td>4552</td></tr><tr><td>210</td><td>4553</td></tr><tr><td>205</td><td>5794</td></tr><tr><td>200</td><td>7215</td></tr><tr><td>195</td><td>8946</td></tr><tr><td>190</td><td>10911</td></tr><tr><td>185</td><td>13043</td></tr><tr><td>180</td><td>15561</td></tr><tr><td>175</td><td>18388</td></tr><tr><td>170</td><td>21613</td></tr><tr><td>165</td><td>25005</td></tr><tr><td>160</td><td>28694</td></tr><tr><td>155</td><td>32562</td></tr><tr><td>150</td><td>36596</td></tr><tr><td>145</td><td>41087</td></tr><tr><td>140</td><td>45594</td></tr><tr><td>135</td><td>50026</td></tr><tr><td>130</td><td>54519</td></tr><tr><td>125</td><td>59032</td></tr><tr><td>120</td><td>63598</td></tr><tr><td>115</td><td>68329</td></tr><tr><td>110</td><td>72839</td></tr><tr><td>105</td><td>77388</td></tr><tr><td>100</td><td>81530</td></tr><tr><td>95</td><td>85470</td></tr><tr><td>90</td><td>88807</td></tr><tr><td>85</td><td>92078</td></tr><tr><td>80</td><td>94897</td></tr><tr><td>75</td><td>97497</td></tr><tr><td>70</td><td>99610</td></tr><tr><td>65</td><td>101553</td></tr><tr><td>60</td><td>102990</td></tr><tr><td>55</td><td>104335</td></tr><tr><td>50</td><td>105248</td></tr><tr><td>45</td><td>106074</td></tr><tr><td>40</td><td>106564</td></tr><tr><td>35</td><td>107097</td></tr><tr><td>30</td><td>107411</td></tr><tr><td>25</td><td>107796</td></tr><tr><td>20</td><td>107937</td></tr><tr><td>15</td><td>108161</td></tr><tr><td>10</td><td>108209</td></tr><tr><td>5</td><td>108357</td></tr><tr><td>0</td><td>108381</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 93532 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>361</td><td>2</td></tr><tr><td>354</td><td>3</td></tr><tr><td>350</td><td>4</td></tr><tr><td>349</td><td>5</td></tr><tr><td>340</td><td>6</td></tr><tr><td>330</td><td>8</td></tr><tr><td>325</td><td>12</td></tr><tr><td>320</td><td>13</td></tr><tr><td>310</td><td>18</td></tr><tr><td>305</td><td>20</td></tr><tr><td>300</td><td>26</td></tr><tr><td>295</td><td>35</td></tr><tr><td>290</td><td>45</td></tr><tr><td>285</td><td>73</td></tr><tr><td>280</td><td>111</td></tr><tr><td>275</td><td>171</td></tr><tr><td>270</td><td>232</td></tr><tr><td>265</td><td>365</td></tr><tr><td>260</td><td>508</td></tr><tr><td>255</td><td>734</td></tr><tr><td>250</td><td>1013</td></tr><tr><td>245</td><td>1437</td></tr><tr><td>244</td><td>1908</td></tr><tr><td>240</td><td>1909</td></tr><tr><td>235</td><td>2574</td></tr><tr><td>230</td><td>3253</td></tr><tr><td>225</td><td>4186</td></tr><tr><td>220</td><td>5231</td></tr><tr><td>215</td><td>6566</td></tr><tr><td>210</td><td>8020</td></tr><tr><td>205</td><td>9860</td></tr><tr><td>200</td><td>11852</td></tr><tr><td>195</td><td>14132</td></tr><tr><td>190</td><td>16486</td></tr><tr><td>185</td><td>19056</td></tr><tr><td>180</td><td>21931</td></tr><tr><td>175</td><td>25081</td></tr><tr><td>170</td><td>28507</td></tr><tr><td>165</td><td>32066</td></tr><tr><td>160</td><td>35750</td></tr><tr><td>155</td><td>39517</td></tr><tr><td>150</td><td>43324</td></tr><tr><td>145</td><td>47312</td></tr><tr><td>140</td><td>51145</td></tr><tr><td>135</td><td>54796</td></tr><tr><td>130</td><td>58521</td></tr><tr><td>125</td><td>62050</td></tr><tr><td>120</td><td>65492</td></tr><tr><td>115</td><td>68782</td></tr><tr><td>110</td><td>71827</td></tr><tr><td>105</td><td>74768</td></tr><tr><td>100</td><td>77385</td></tr><tr><td>95</td><td>79904</td></tr><tr><td>90</td><td>81947</td></tr><tr><td>85</td><td>83948</td></tr><tr><td>80</td><td>85533</td></tr><tr><td>75</td><td>86904</td></tr><tr><td>70</td><td>88106</td></tr><tr><td>65</td><td>89143</td></tr><tr><td>60</td><td>89887</td></tr><tr><td>55</td><td>90620</td></tr><tr><td>50</td><td>91121</td></tr><tr><td>45</td><td>91566</td></tr><tr><td>40</td><td>91830</td></tr><tr><td>36</td><td>92143</td></tr><tr><td>35</td><td>92144</td></tr><tr><td>30</td><td>92311</td></tr><tr><td>25</td><td>92522</td></tr><tr><td>20</td><td>92621</td></tr><tr><td>15</td><td>92760</td></tr><tr><td>10</td><td>92791</td></tr><tr><td>5</td><td>92914</td></tr><tr><td>0</td><td>92925</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 72843 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>385</td><td>1</td></tr><tr><td>370</td><td>2</td></tr><tr><td>365</td><td>3</td></tr><tr><td>360</td><td>4</td></tr><tr><td>355</td><td>5</td></tr><tr><td>350</td><td>6</td></tr><tr><td>340</td><td>7</td></tr><tr><td>330</td><td>8</td></tr><tr><td>325</td><td>9</td></tr><tr><td>320</td><td>10</td></tr><tr><td>315</td><td>15</td></tr><tr><td>310</td><td>22</td></tr><tr><td>305</td><td>30</td></tr><tr><td>300</td><td>41</td></tr><tr><td>295</td><td>64</td></tr><tr><td>290</td><td>104</td></tr><tr><td>285</td><td>167</td></tr><tr><td>280</td><td>246</td></tr><tr><td>275</td><td>337</td></tr><tr><td>270</td><td>514</td></tr><tr><td>265</td><td>764</td></tr><tr><td>260</td><td>1037</td></tr><tr><td>255</td><td>1432</td></tr><tr><td>250</td><td>1881</td></tr><tr><td>245</td><td>2464</td></tr><tr><td>240</td><td>3111</td></tr><tr><td>235</td><td>3973</td></tr><tr><td>230</td><td>4952</td></tr><tr><td>225</td><td>6146</td></tr><tr><td>220</td><td>7448</td></tr><tr><td>215</td><td>9011</td></tr><tr><td>210</td><td>10663</td></tr><tr><td>205</td><td>12672</td></tr><tr><td>204</td><td>14794</td></tr><tr><td>200</td><td>14795</td></tr><tr><td>195</td><td>17141</td></tr><tr><td>190</td><td>19611</td></tr><tr><td>185</td><td>22197</td></tr><tr><td>180</td><td>24852</td></tr><tr><td>175</td><td>27588</td></tr><tr><td>170</td><td>30579</td></tr><tr><td>165</td><td>33532</td></tr><tr><td>160</td><td>36433</td></tr><tr><td>155</td><td>39360</td></tr><tr><td>150</td><td>42181</td></tr><tr><td>145</td><td>45001</td></tr><tr><td>140</td><td>47609</td></tr><tr><td>135</td><td>50100</td></tr><tr><td>130</td><td>52551</td></tr><tr><td>125</td><td>54803</td></tr><tr><td>120</td><td>56910</td></tr><tr><td>115</td><td>58975</td></tr><tr><td>110</td><td>60808</td></tr><tr><td>105</td><td>62563</td></tr><tr><td>100</td><td>64044</td></tr><tr><td>95</td><td>65409</td></tr><tr><td>90</td><td>66514</td></tr><tr><td>85</td><td>67595</td></tr><tr><td>80</td><td>68433</td></tr><tr><td>75</td><td>69194</td></tr><tr><td>70</td><td>69772</td></tr><tr><td>65</td><td>70321</td></tr><tr><td>60</td><td>70696</td></tr><tr><td>55</td><td>71084</td></tr><tr><td>50</td><td>71332</td></tr><tr><td>45</td><td>71541</td></tr><tr><td>40</td><td>71679</td></tr><tr><td>35</td><td>71846</td></tr><tr><td>30</td><td>71942</td></tr><tr><td>25</td><td>72088</td></tr><tr><td>20</td><td>72134</td></tr><tr><td>15</td><td>72247</td></tr><tr><td>10</td><td>72264</td></tr><tr><td>5</td><td>72352</td></tr><tr><td>0</td><td>72366</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 47330 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>360</td><td>1</td></tr><tr><td>355</td><td>2</td></tr><tr><td>335</td><td>3</td></tr><tr><td>330</td><td>4</td></tr><tr><td>325</td><td>12</td></tr><tr><td>320</td><td>13</td></tr><tr><td>315</td><td>23</td></tr><tr><td>310</td><td>34</td></tr><tr><td>305</td><td>52</td></tr><tr><td>304</td><td>69</td></tr><tr><td>301</td><td>70</td></tr><tr><td>300</td><td>71</td></tr><tr><td>295</td><td>99</td></tr><tr><td>290</td><td>146</td></tr><tr><td>285</td><td>228</td></tr><tr><td>280</td><td>324</td></tr><tr><td>275</td><td>493</td></tr><tr><td>271</td><td>694</td></tr><tr><td>270</td><td>695</td></tr><tr><td>265</td><td>982</td></tr><tr><td>264</td><td>1317</td></tr><tr><td>260</td><td>1319</td></tr><tr><td>255</td><td>1792</td></tr><tr><td>250</td><td>2306</td></tr><tr><td>245</td><td>3014</td></tr><tr><td>244</td><td>3754</td></tr><tr><td>240</td><td>3755</td></tr><tr><td>235</td><td>4733</td></tr><tr><td>230</td><td>5841</td></tr><tr><td>225</td><td>7134</td></tr><tr><td>220</td><td>8495</td></tr><tr><td>215</td><td>10037</td></tr><tr><td>210</td><td>11662</td></tr><tr><td>205</td><td>13438</td></tr><tr><td>200</td><td>15276</td></tr><tr><td>195</td><td>17181</td></tr><tr><td>190</td><td>19083</td></tr><tr><td>185</td><td>21011</td></tr><tr><td>180</td><td>23069</td></tr><tr><td>175</td><td>24990</td></tr><tr><td>170</td><td>26900</td></tr><tr><td>166</td><td>28808</td></tr><tr><td>165</td><td>28809</td></tr><tr><td>160</td><td>30607</td></tr><tr><td>155</td><td>32332</td></tr><tr><td>150</td><td>33907</td></tr><tr><td>145</td><td>35436</td></tr><tr><td>140</td><td>36760</td></tr><tr><td>135</td><td>38091</td></tr><tr><td>130</td><td>39297</td></tr><tr><td>125</td><td>40328</td></tr><tr><td>120</td><td>41234</td></tr><tr><td>115</td><td>42111</td></tr><tr><td>110</td><td>42808</td></tr><tr><td>105</td><td>43536</td></tr><tr><td>100</td><td>44159</td></tr><tr><td>95</td><td>44700</td></tr><tr><td>90</td><td>45136</td></tr><tr><td>85</td><td>45508</td></tr><tr><td>80</td><td>45768</td></tr><tr><td>75</td><td>46010</td></tr><tr><td>70</td><td>46206</td></tr><tr><td>66</td><td>46394</td></tr><tr><td>65</td><td>46395</td></tr><tr><td>60</td><td>46512</td></tr><tr><td>55</td><td>46638</td></tr><tr><td>50</td><td>46712</td></tr><tr><td>45</td><td>46779</td></tr><tr><td>40</td><td>46832</td></tr><tr><td>35</td><td>46888</td></tr><tr><td>30</td><td>46915</td></tr><tr><td>25</td><td>46966</td></tr><tr><td>20</td><td>46981</td></tr><tr><td>15</td><td>47011</td></tr><tr><td>10</td><td>47013</td></tr><tr><td>5</td><td>47059</td></tr><tr><td>0</td><td>47064</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 10824 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>350</td><td>2</td></tr><tr><td>345</td><td>3</td></tr><tr><td>340</td><td>5</td></tr><tr><td>335</td><td>7</td></tr><tr><td>330</td><td>12</td></tr><tr><td>325</td><td>18</td></tr><tr><td>320</td><td>20</td></tr><tr><td>315</td><td>26</td></tr><tr><td>310</td><td>39</td></tr><tr><td>305</td><td>52</td></tr><tr><td>300</td><td>78</td></tr><tr><td>295</td><td>109</td></tr><tr><td>290</td><td>158</td></tr><tr><td>285</td><td>231</td></tr><tr><td>280</td><td>325</td></tr><tr><td>275</td><td>421</td></tr><tr><td>271</td><td>554</td></tr><tr><td>270</td><td>555</td></tr><tr><td>265</td><td>714</td></tr><tr><td>260</td><td>929</td></tr><tr><td>255</td><td>1157</td></tr><tr><td>254</td><td>1405</td></tr><tr><td>250</td><td>1406</td></tr><tr><td>246</td><td>1714</td></tr><tr><td>245</td><td>1715</td></tr><tr><td>240</td><td>2051</td></tr><tr><td>235</td><td>2453</td></tr><tr><td>230</td><td>2834</td></tr><tr><td>225</td><td>3261</td></tr><tr><td>220</td><td>3664</td></tr><tr><td>215</td><td>4103</td></tr><tr><td>210</td><td>4524</td></tr><tr><td>205</td><td>4935</td></tr><tr><td>200</td><td>5332</td></tr><tr><td>195</td><td>5741</td></tr><tr><td>190</td><td>6134</td></tr><tr><td>185</td><td>6546</td></tr><tr><td>184</td><td>6905</td></tr><tr><td>180</td><td>6906</td></tr><tr><td>175</td><td>7235</td></tr><tr><td>170</td><td>7638</td></tr><tr><td>165</td><td>7930</td></tr><tr><td>160</td><td>8218</td></tr><tr><td>155</td><td>8468</td></tr><tr><td>150</td><td>8725</td></tr><tr><td>145</td><td>8964</td></tr><tr><td>140</td><td>9186</td></tr><tr><td>135</td><td>9382</td></tr><tr><td>130</td><td>9551</td></tr><tr><td>125</td><td>9711</td></tr><tr><td>124</td><td>9850</td></tr><tr><td>120</td><td>9851</td></tr><tr><td>115</td><td>9971</td></tr><tr><td>110</td><td>10061</td></tr><tr><td>105</td><td>10163</td></tr><tr><td>100</td><td>10252</td></tr><tr><td>95</td><td>10336</td></tr><tr><td>90</td><td>10384</td></tr><tr><td>85</td><td>10437</td></tr><tr><td>80</td><td>10487</td></tr><tr><td>75</td><td>10525</td></tr><tr><td>70</td><td>10555</td></tr><tr><td>65</td><td>10584</td></tr><tr><td>60</td><td>10612</td></tr><tr><td>55</td><td>10636</td></tr><tr><td>50</td><td>10646</td></tr><tr><td>45</td><td>10661</td></tr><tr><td>40</td><td>10670</td></tr><tr><td>35</td><td>10698</td></tr><tr><td>30</td><td>10705</td></tr><tr><td>25</td><td>10720</td></tr><tr><td>20</td><td>10725</td></tr><tr><td>15</td><td>10739</td></tr><tr><td>10</td><td>10740</td></tr><tr><td>0</td><td>10757</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 5884 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>345</td><td>2</td></tr><tr><td>340</td><td>3</td></tr><tr><td>335</td><td>4</td></tr><tr><td>331</td><td>6</td></tr><tr><td>330</td><td>7</td></tr><tr><td>325</td><td>12</td></tr><tr><td>320</td><td>19</td></tr><tr><td>315</td><td>28</td></tr><tr><td>310</td><td>39</td></tr><tr><td>305</td><td>58</td></tr><tr><td>300</td><td>73</td></tr><tr><td>295</td><td>111</td></tr><tr><td>290</td><td>161</td></tr><tr><td>285</td><td>222</td></tr><tr><td>280</td><td>289</td></tr><tr><td>275</td><td>378</td></tr><tr><td>271</td><td>486</td></tr><tr><td>270</td><td>487</td></tr><tr><td>265</td><td>608</td></tr><tr><td>264</td><td>754</td></tr><tr><td>260</td><td>755</td></tr><tr><td>255</td><td>930</td></tr><tr><td>250</td><td>1071</td></tr><tr><td>245</td><td>1273</td></tr><tr><td>240</td><td>1464</td></tr><tr><td>235</td><td>1704</td></tr><tr><td>230</td><td>1915</td></tr><tr><td>225</td><td>2129</td></tr><tr><td>220</td><td>2356</td></tr><tr><td>215</td><td>2599</td></tr><tr><td>210</td><td>2811</td></tr><tr><td>209</td><td>3067</td></tr><tr><td>205</td><td>3068</td></tr><tr><td>200</td><td>3290</td></tr><tr><td>195</td><td>3507</td></tr><tr><td>190</td><td>3704</td></tr><tr><td>185</td><td>3910</td></tr><tr><td>180</td><td>4087</td></tr><tr><td>175</td><td>4255</td></tr><tr><td>170</td><td>4424</td></tr><tr><td>165</td><td>4564</td></tr><tr><td>160</td><td>4706</td></tr><tr><td>155</td><td>4837</td></tr><tr><td>150</td><td>4937</td></tr><tr><td>145</td><td>5044</td></tr><tr><td>140</td><td>5152</td></tr><tr><td>135</td><td>5233</td></tr><tr><td>130</td><td>5308</td></tr><tr><td>125</td><td>5382</td></tr><tr><td>120</td><td>5451</td></tr><tr><td>115</td><td>5505</td></tr><tr><td>110</td><td>5564</td></tr><tr><td>105</td><td>5594</td></tr><tr><td>100</td><td>5625</td></tr><tr><td>95</td><td>5659</td></tr><tr><td>90</td><td>5680</td></tr><tr><td>85</td><td>5711</td></tr><tr><td>80</td><td>5729</td></tr><tr><td>75</td><td>5751</td></tr><tr><td>70</td><td>5765</td></tr><tr><td>65</td><td>5781</td></tr><tr><td>60</td><td>5790</td></tr><tr><td>55</td><td>5802</td></tr><tr><td>50</td><td>5808</td></tr><tr><td>45</td><td>5819</td></tr><tr><td>40</td><td>5825</td></tr><tr><td>35</td><td>5830</td></tr><tr><td>30</td><td>5834</td></tr><tr><td>20</td><td>5844</td></tr><tr><td>15</td><td>5854</td></tr><tr><td>10</td><td>5855</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 2737 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>335</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>290</td><td>3</td></tr><tr><td>280</td><td>5</td></tr><tr><td>275</td><td>6</td></tr><tr><td>270</td><td>7</td></tr><tr><td>265</td><td>11</td></tr><tr><td>260</td><td>15</td></tr><tr><td>255</td><td>22</td></tr><tr><td>250</td><td>28</td></tr><tr><td>245</td><td>44</td></tr><tr><td>240</td><td>55</td></tr><tr><td>235</td><td>72</td></tr><tr><td>230</td><td>93</td></tr><tr><td>225</td><td>125</td></tr><tr><td>220</td><td>158</td></tr><tr><td>215</td><td>204</td></tr><tr><td>210</td><td>249</td></tr><tr><td>205</td><td>293</td></tr><tr><td>200</td><td>346</td></tr><tr><td>195</td><td>406</td></tr><tr><td>190</td><td>456</td></tr><tr><td>185</td><td>525</td></tr><tr><td>180</td><td>592</td></tr><tr><td>175</td><td>662</td></tr><tr><td>170</td><td>753</td></tr><tr><td>165</td><td>833</td></tr><tr><td>160</td><td>928</td></tr><tr><td>155</td><td>1029</td></tr><tr><td>150</td><td>1126</td></tr><tr><td>145</td><td>1247</td></tr><tr><td>140</td><td>1344</td></tr><tr><td>135</td><td>1436</td></tr><tr><td>130</td><td>1530</td></tr><tr><td>125</td><td>1630</td></tr><tr><td>120</td><td>1716</td></tr><tr><td>115</td><td>1809</td></tr><tr><td>110</td><td>1877</td></tr><tr><td>105</td><td>1974</td></tr><tr><td>100</td><td>2052</td></tr><tr><td>95</td><td>2135</td></tr><tr><td>90</td><td>2210</td></tr><tr><td>85</td><td>2273</td></tr><tr><td>80</td><td>2321</td></tr><tr><td>75</td><td>2386</td></tr><tr><td>70</td><td>2432</td></tr><tr><td>65</td><td>2488</td></tr><tr><td>60</td><td>2525</td></tr><tr><td>55</td><td>2564</td></tr><tr><td>50</td><td>2578</td></tr><tr><td>45</td><td>2604</td></tr><tr><td>40</td><td>2630</td></tr><tr><td>35</td><td>2654</td></tr><tr><td>30</td><td>2661</td></tr><tr><td>25</td><td>2678</td></tr><tr><td>20</td><td>2685</td></tr><tr><td>15</td><td>2697</td></tr><tr><td>10</td><td>2701</td></tr><tr><td>5</td><td>2712</td></tr><tr><td>0</td><td>2713</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 1034 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>280</td><td>2</td></tr><tr><td>275</td><td>4</td></tr><tr><td>270</td><td>5</td></tr><tr><td>265</td><td>11</td></tr><tr><td>260</td><td>14</td></tr><tr><td>255</td><td>17</td></tr><tr><td>250</td><td>20</td></tr><tr><td>245</td><td>30</td></tr><tr><td>240</td><td>32</td></tr><tr><td>235</td><td>39</td></tr><tr><td>230</td><td>57</td></tr><tr><td>225</td><td>77</td></tr><tr><td>220</td><td>88</td></tr><tr><td>215</td><td>111</td></tr><tr><td>210</td><td>139</td></tr><tr><td>205</td><td>167</td></tr><tr><td>200</td><td>180</td></tr><tr><td>195</td><td>216</td></tr><tr><td>190</td><td>242</td></tr><tr><td>185</td><td>280</td></tr><tr><td>180</td><td>314</td></tr><tr><td>175</td><td>363</td></tr><tr><td>170</td><td>398</td></tr><tr><td>165</td><td>430</td></tr><tr><td>160</td><td>474</td></tr><tr><td>155</td><td>507</td></tr><tr><td>150</td><td>544</td></tr><tr><td>145</td><td>585</td></tr><tr><td>140</td><td>608</td></tr><tr><td>135</td><td>643</td></tr><tr><td>130</td><td>678</td></tr><tr><td>125</td><td>713</td></tr><tr><td>120</td><td>732</td></tr><tr><td>115</td><td>760</td></tr><tr><td>110</td><td>788</td></tr><tr><td>105</td><td>824</td></tr><tr><td>100</td><td>846</td></tr><tr><td>95</td><td>862</td></tr><tr><td>90</td><td>878</td></tr><tr><td>85</td><td>901</td></tr><tr><td>80</td><td>917</td></tr><tr><td>75</td><td>936</td></tr><tr><td>70</td><td>946</td></tr><tr><td>65</td><td>963</td></tr><tr><td>60</td><td>974</td></tr><tr><td>55</td><td>981</td></tr><tr><td>50</td><td>985</td></tr><tr><td>45</td><td>990</td></tr><tr><td>40</td><td>995</td></tr><tr><td>35</td><td>1005</td></tr><tr><td>30</td><td>1007</td></tr><tr><td>25</td><td>1014</td></tr><tr><td>20</td><td>1015</td></tr><tr><td>15</td><td>1018</td></tr><tr><td>10</td><td>1019</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 613 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>295</td><td>2</td></tr><tr><td>280</td><td>4</td></tr><tr><td>275</td><td>5</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>9</td></tr><tr><td>255</td><td>13</td></tr><tr><td>250</td><td>15</td></tr><tr><td>245</td><td>18</td></tr><tr><td>240</td><td>25</td></tr><tr><td>235</td><td>34</td></tr><tr><td>230</td><td>42</td></tr><tr><td>225</td><td>52</td></tr><tr><td>220</td><td>65</td></tr><tr><td>215</td><td>75</td></tr><tr><td>210</td><td>82</td></tr><tr><td>205</td><td>95</td></tr><tr><td>200</td><td>113</td></tr><tr><td>195</td><td>129</td></tr><tr><td>190</td><td>150</td></tr><tr><td>185</td><td>174</td></tr><tr><td>180</td><td>187</td></tr><tr><td>175</td><td>204</td></tr><tr><td>170</td><td>224</td></tr><tr><td>165</td><td>246</td></tr><tr><td>160</td><td>261</td></tr><tr><td>155</td><td>281</td></tr><tr><td>150</td><td>302</td></tr><tr><td>145</td><td>325</td></tr><tr><td>140</td><td>339</td></tr><tr><td>135</td><td>358</td></tr><tr><td>130</td><td>374</td></tr><tr><td>125</td><td>395</td></tr><tr><td>120</td><td>411</td></tr><tr><td>115</td><td>433</td></tr><tr><td>110</td><td>447</td></tr><tr><td>105</td><td>466</td></tr><tr><td>100</td><td>479</td></tr><tr><td>95</td><td>490</td></tr><tr><td>90</td><td>500</td></tr><tr><td>85</td><td>513</td></tr><tr><td>80</td><td>517</td></tr><tr><td>75</td><td>526</td></tr><tr><td>70</td><td>536</td></tr><tr><td>65</td><td>548</td></tr><tr><td>60</td><td>552</td></tr><tr><td>55</td><td>560</td></tr><tr><td>50</td><td>564</td></tr><tr><td>45</td><td>573</td></tr><tr><td>40</td><td>577</td></tr><tr><td>35</td><td>583</td></tr><tr><td>30</td><td>588</td></tr><tr><td>15</td><td>591</td></tr><tr><td>10</td><td>592</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-16-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation individuelle) : 1813 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-16-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-16-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>270</td><td>2</td></tr><tr><td>235</td><td>3</td></tr><tr><td>230</td><td>4</td></tr><tr><td>225</td><td>7</td></tr><tr><td>220</td><td>9</td></tr><tr><td>215</td><td>10</td></tr><tr><td>210</td><td>18</td></tr><tr><td>205</td><td>22</td></tr><tr><td>200</td><td>27</td></tr><tr><td>195</td><td>28</td></tr><tr><td>190</td><td>32</td></tr><tr><td>185</td><td>40</td></tr><tr><td>180</td><td>47</td></tr><tr><td>175</td><td>54</td></tr><tr><td>170</td><td>69</td></tr><tr><td>165</td><td>86</td></tr><tr><td>160</td><td>101</td></tr><tr><td>155</td><td>130</td></tr><tr><td>150</td><td>154</td></tr><tr><td>145</td><td>184</td></tr><tr><td>140</td><td>220</td></tr><tr><td>135</td><td>266</td></tr><tr><td>130</td><td>292</td></tr><tr><td>125</td><td>337</td></tr><tr><td>120</td><td>388</td></tr><tr><td>115</td><td>441</td></tr><tr><td>110</td><td>503</td></tr><tr><td>105</td><td>565</td></tr><tr><td>100</td><td>633</td></tr><tr><td>95</td><td>725</td></tr><tr><td>90</td><td>780</td></tr><tr><td>85</td><td>861</td></tr><tr><td>80</td><td>944</td></tr><tr><td>75</td><td>1017</td></tr><tr><td>70</td><td>1090</td></tr><tr><td>65</td><td>1188</td></tr><tr><td>60</td><td>1256</td></tr><tr><td>55</td><td>1336</td></tr><tr><td>50</td><td>1409</td></tr><tr><td>45</td><td>1481</td></tr><tr><td>40</td><td>1534</td></tr><tr><td>35</td><td>1585</td></tr><tr><td>30</td><td>1615</td></tr><tr><td>25</td><td>1670</td></tr><tr><td>20</td><td>1696</td></tr><tr><td>15</td><td>1730</td></tr><tr><td>10</td><td>1737</td></tr><tr><td>5</td><td>1758</td></tr><tr><td>0</td><td>1762</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-17-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation individuelle) : 1705 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-17-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-17-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>235</td><td>2</td></tr><tr><td>220</td><td>3</td></tr><tr><td>215</td><td>4</td></tr><tr><td>210</td><td>7</td></tr><tr><td>205</td><td>9</td></tr><tr><td>200</td><td>11</td></tr><tr><td>195</td><td>17</td></tr><tr><td>190</td><td>20</td></tr><tr><td>185</td><td>27</td></tr><tr><td>180</td><td>39</td></tr><tr><td>175</td><td>47</td></tr><tr><td>170</td><td>58</td></tr><tr><td>165</td><td>72</td></tr><tr><td>160</td><td>93</td></tr><tr><td>155</td><td>115</td></tr><tr><td>150</td><td>135</td></tr><tr><td>145</td><td>165</td></tr><tr><td>140</td><td>193</td></tr><tr><td>135</td><td>233</td></tr><tr><td>130</td><td>281</td></tr><tr><td>125</td><td>324</td></tr><tr><td>120</td><td>363</td></tr><tr><td>115</td><td>416</td></tr><tr><td>110</td><td>480</td></tr><tr><td>105</td><td>540</td></tr><tr><td>100</td><td>616</td></tr><tr><td>95</td><td>701</td></tr><tr><td>90</td><td>770</td></tr><tr><td>85</td><td>873</td></tr><tr><td>80</td><td>958</td></tr><tr><td>75</td><td>1046</td></tr><tr><td>70</td><td>1124</td></tr><tr><td>65</td><td>1215</td></tr><tr><td>60</td><td>1279</td></tr><tr><td>55</td><td>1351</td></tr><tr><td>50</td><td>1402</td></tr><tr><td>45</td><td>1459</td></tr><tr><td>40</td><td>1496</td></tr><tr><td>35</td><td>1542</td></tr><tr><td>30</td><td>1562</td></tr><tr><td>25</td><td>1606</td></tr><tr><td>20</td><td>1617</td></tr><tr><td>15</td><td>1645</td></tr><tr><td>10</td><td>1648</td></tr><tr><td>5</td><td>1658</td></tr><tr><td>0</td><td>1662</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 1355 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>270</td><td>2</td></tr><tr><td>250</td><td>3</td></tr><tr><td>245</td><td>8</td></tr><tr><td>240</td><td>9</td></tr><tr><td>235</td><td>11</td></tr><tr><td>230</td><td>13</td></tr><tr><td>225</td><td>14</td></tr><tr><td>220</td><td>16</td></tr><tr><td>215</td><td>19</td></tr><tr><td>210</td><td>23</td></tr><tr><td>205</td><td>25</td></tr><tr><td>200</td><td>32</td></tr><tr><td>195</td><td>36</td></tr><tr><td>190</td><td>42</td></tr><tr><td>185</td><td>50</td></tr><tr><td>180</td><td>59</td></tr><tr><td>175</td><td>70</td></tr><tr><td>170</td><td>83</td></tr><tr><td>165</td><td>99</td></tr><tr><td>160</td><td>119</td></tr><tr><td>155</td><td>139</td></tr><tr><td>150</td><td>167</td></tr><tr><td>145</td><td>199</td></tr><tr><td>140</td><td>221</td></tr><tr><td>135</td><td>253</td></tr><tr><td>130</td><td>285</td></tr><tr><td>125</td><td>324</td></tr><tr><td>120</td><td>360</td></tr><tr><td>115</td><td>404</td></tr><tr><td>110</td><td>458</td></tr><tr><td>105</td><td>521</td></tr><tr><td>100</td><td>576</td></tr><tr><td>95</td><td>654</td></tr><tr><td>90</td><td>708</td></tr><tr><td>85</td><td>782</td></tr><tr><td>80</td><td>841</td></tr><tr><td>75</td><td>900</td></tr><tr><td>70</td><td>952</td></tr><tr><td>65</td><td>997</td></tr><tr><td>60</td><td>1049</td></tr><tr><td>55</td><td>1111</td></tr><tr><td>50</td><td>1147</td></tr><tr><td>45</td><td>1182</td></tr><tr><td>40</td><td>1200</td></tr><tr><td>35</td><td>1231</td></tr><tr><td>30</td><td>1247</td></tr><tr><td>25</td><td>1274</td></tr><tr><td>20</td><td>1284</td></tr><tr><td>15</td><td>1299</td></tr><tr><td>10</td><td>1301</td></tr><tr><td>5</td><td>1313</td></tr><tr><td>0</td><td>1315</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 936 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>260</td><td>2</td></tr><tr><td>240</td><td>3</td></tr><tr><td>235</td><td>5</td></tr><tr><td>230</td><td>10</td></tr><tr><td>225</td><td>13</td></tr><tr><td>220</td><td>15</td></tr><tr><td>215</td><td>16</td></tr><tr><td>210</td><td>20</td></tr><tr><td>205</td><td>24</td></tr><tr><td>200</td><td>33</td></tr><tr><td>195</td><td>47</td></tr><tr><td>190</td><td>55</td></tr><tr><td>185</td><td>64</td></tr><tr><td>180</td><td>83</td></tr><tr><td>175</td><td>99</td></tr><tr><td>170</td><td>112</td></tr><tr><td>165</td><td>137</td></tr><tr><td>160</td><td>157</td></tr><tr><td>155</td><td>182</td></tr><tr><td>150</td><td>192</td></tr><tr><td>145</td><td>208</td></tr><tr><td>140</td><td>238</td></tr><tr><td>135</td><td>269</td></tr><tr><td>130</td><td>292</td></tr><tr><td>125</td><td>319</td></tr><tr><td>120</td><td>345</td></tr><tr><td>115</td><td>379</td></tr><tr><td>110</td><td>420</td></tr><tr><td>105</td><td>462</td></tr><tr><td>100</td><td>496</td></tr><tr><td>95</td><td>541</td></tr><tr><td>90</td><td>575</td></tr><tr><td>85</td><td>632</td></tr><tr><td>80</td><td>666</td></tr><tr><td>75</td><td>690</td></tr><tr><td>70</td><td>726</td></tr><tr><td>65</td><td>757</td></tr><tr><td>60</td><td>783</td></tr><tr><td>55</td><td>805</td></tr><tr><td>50</td><td>823</td></tr><tr><td>45</td><td>855</td></tr><tr><td>40</td><td>862</td></tr><tr><td>35</td><td>875</td></tr><tr><td>30</td><td>881</td></tr><tr><td>25</td><td>893</td></tr><tr><td>20</td><td>894</td></tr><tr><td>15</td><td>904</td></tr><tr><td>10</td><td>907</td></tr><tr><td>5</td><td>915</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 3779 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>270</td><td>1</td></tr><tr><td>265</td><td>2</td></tr><tr><td>250</td><td>4</td></tr><tr><td>220</td><td>7</td></tr><tr><td>215</td><td>8</td></tr><tr><td>210</td><td>10</td></tr><tr><td>205</td><td>11</td></tr><tr><td>200</td><td>14</td></tr><tr><td>195</td><td>19</td></tr><tr><td>190</td><td>35</td></tr><tr><td>185</td><td>53</td></tr><tr><td>180</td><td>70</td></tr><tr><td>175</td><td>92</td></tr><tr><td>170</td><td>113</td></tr><tr><td>165</td><td>155</td></tr><tr><td>160</td><td>191</td></tr><tr><td>155</td><td>235</td></tr><tr><td>150</td><td>291</td></tr><tr><td>145</td><td>352</td></tr><tr><td>140</td><td>427</td></tr><tr><td>135</td><td>500</td></tr><tr><td>130</td><td>599</td></tr><tr><td>125</td><td>706</td></tr><tr><td>120</td><td>807</td></tr><tr><td>115</td><td>949</td></tr><tr><td>110</td><td>1077</td></tr><tr><td>105</td><td>1244</td></tr><tr><td>100</td><td>1399</td></tr><tr><td>95</td><td>1571</td></tr><tr><td>90</td><td>1764</td></tr><tr><td>85</td><td>1987</td></tr><tr><td>80</td><td>2203</td></tr><tr><td>75</td><td>2436</td></tr><tr><td>70</td><td>2598</td></tr><tr><td>65</td><td>2769</td></tr><tr><td>60</td><td>2927</td></tr><tr><td>55</td><td>3101</td></tr><tr><td>50</td><td>3212</td></tr><tr><td>45</td><td>3316</td></tr><tr><td>40</td><td>3386</td></tr><tr><td>35</td><td>3481</td></tr><tr><td>30</td><td>3529</td></tr><tr><td>25</td><td>3598</td></tr><tr><td>20</td><td>3638</td></tr><tr><td>15</td><td>3673</td></tr><tr><td>10</td><td>3690</td></tr><tr><td>5</td><td>3713</td></tr><tr><td>0</td><td>3717</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 5773 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>285</td><td>1</td></tr><tr><td>255</td><td>3</td></tr><tr><td>250</td><td>7</td></tr><tr><td>245</td><td>14</td></tr><tr><td>240</td><td>16</td></tr><tr><td>235</td><td>18</td></tr><tr><td>230</td><td>20</td></tr><tr><td>225</td><td>27</td></tr><tr><td>220</td><td>34</td></tr><tr><td>215</td><td>52</td></tr><tr><td>210</td><td>65</td></tr><tr><td>205</td><td>92</td></tr><tr><td>200</td><td>114</td></tr><tr><td>195</td><td>160</td></tr><tr><td>190</td><td>202</td></tr><tr><td>185</td><td>232</td></tr><tr><td>180</td><td>292</td></tr><tr><td>175</td><td>381</td></tr><tr><td>170</td><td>473</td></tr><tr><td>165</td><td>566</td></tr><tr><td>160</td><td>699</td></tr><tr><td>155</td><td>837</td></tr><tr><td>150</td><td>1039</td></tr><tr><td>145</td><td>1233</td></tr><tr><td>140</td><td>1427</td></tr><tr><td>135</td><td>1634</td></tr><tr><td>130</td><td>1869</td></tr><tr><td>125</td><td>2102</td></tr><tr><td>120</td><td>2357</td></tr><tr><td>115</td><td>2619</td></tr><tr><td>110</td><td>2911</td></tr><tr><td>105</td><td>3222</td></tr><tr><td>100</td><td>3494</td></tr><tr><td>95</td><td>3791</td></tr><tr><td>90</td><td>4044</td></tr><tr><td>85</td><td>4284</td></tr><tr><td>80</td><td>4510</td></tr><tr><td>75</td><td>4731</td></tr><tr><td>70</td><td>4897</td></tr><tr><td>65</td><td>5063</td></tr><tr><td>60</td><td>5179</td></tr><tr><td>55</td><td>5300</td></tr><tr><td>50</td><td>5389</td></tr><tr><td>45</td><td>5469</td></tr><tr><td>40</td><td>5532</td></tr><tr><td>35</td><td>5574</td></tr><tr><td>30</td><td>5618</td></tr><tr><td>25</td><td>5654</td></tr><tr><td>20</td><td>5665</td></tr><tr><td>15</td><td>5688</td></tr><tr><td>10</td><td>5700</td></tr><tr><td>5</td><td>5709</td></tr><tr><td>0</td><td>5711</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation en binôme) : 44496 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>335</td><td>3</td></tr><tr><td>325</td><td>5</td></tr><tr><td>315</td><td>14</td></tr><tr><td>305</td><td>18</td></tr><tr><td>300</td><td>30</td></tr><tr><td>295</td><td>34</td></tr><tr><td>290</td><td>36</td></tr><tr><td>285</td><td>40</td></tr><tr><td>275</td><td>42</td></tr><tr><td>270</td><td>52</td></tr><tr><td>265</td><td>61</td></tr><tr><td>260</td><td>65</td></tr><tr><td>255</td><td>81</td></tr><tr><td>250</td><td>89</td></tr><tr><td>245</td><td>103</td></tr><tr><td>240</td><td>127</td></tr><tr><td>235</td><td>157</td></tr><tr><td>230</td><td>235</td></tr><tr><td>225</td><td>331</td></tr><tr><td>220</td><td>477</td></tr><tr><td>215</td><td>664</td></tr><tr><td>210</td><td>910</td></tr><tr><td>205</td><td>1216</td></tr><tr><td>200</td><td>1530</td></tr><tr><td>195</td><td>2009</td></tr><tr><td>190</td><td>2583</td></tr><tr><td>185</td><td>3272</td></tr><tr><td>180</td><td>4044</td></tr><tr><td>175</td><td>4900</td></tr><tr><td>170</td><td>6049</td></tr><tr><td>165</td><td>7281</td></tr><tr><td>160</td><td>8734</td></tr><tr><td>155</td><td>10232</td></tr><tr><td>150</td><td>11766</td></tr><tr><td>145</td><td>13716</td></tr><tr><td>140</td><td>15387</td></tr><tr><td>135</td><td>17288</td></tr><tr><td>130</td><td>19235</td></tr><tr><td>125</td><td>21332</td></tr><tr><td>120</td><td>23202</td></tr><tr><td>115</td><td>25318</td></tr><tr><td>110</td><td>27249</td></tr><tr><td>105</td><td>29422</td></tr><tr><td>100</td><td>31136</td></tr><tr><td>95</td><td>32967</td></tr><tr><td>90</td><td>34614</td></tr><tr><td>85</td><td>36273</td></tr><tr><td>80</td><td>37478</td></tr><tr><td>75</td><td>38712</td></tr><tr><td>70</td><td>39775</td></tr><tr><td>65</td><td>40653</td></tr><tr><td>60</td><td>41331</td></tr><tr><td>55</td><td>42049</td></tr><tr><td>50</td><td>42529</td></tr><tr><td>45</td><td>43018</td></tr><tr><td>40</td><td>43295</td></tr><tr><td>35</td><td>43562</td></tr><tr><td>30</td><td>43754</td></tr><tr><td>25</td><td>43923</td></tr><tr><td>20</td><td>44005</td></tr><tr><td>15</td><td>44056</td></tr><tr><td>10</td><td>44075</td></tr><tr><td>5</td><td>44159</td></tr><tr><td>0</td><td>44163</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation en binôme) : 55107 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>325</td><td>3</td></tr><tr><td>320</td><td>4</td></tr><tr><td>315</td><td>6</td></tr><tr><td>305</td><td>12</td></tr><tr><td>300</td><td>18</td></tr><tr><td>295</td><td>26</td></tr><tr><td>290</td><td>30</td></tr><tr><td>285</td><td>36</td></tr><tr><td>280</td><td>50</td></tr><tr><td>275</td><td>66</td></tr><tr><td>270</td><td>90</td></tr><tr><td>265</td><td>121</td></tr><tr><td>260</td><td>159</td></tr><tr><td>255</td><td>235</td></tr><tr><td>250</td><td>313</td></tr><tr><td>245</td><td>407</td></tr><tr><td>240</td><td>579</td></tr><tr><td>235</td><td>823</td></tr><tr><td>230</td><td>1141</td></tr><tr><td>225</td><td>1540</td></tr><tr><td>220</td><td>2037</td></tr><tr><td>215</td><td>2666</td></tr><tr><td>210</td><td>3413</td></tr><tr><td>205</td><td>4418</td></tr><tr><td>200</td><td>5406</td></tr><tr><td>195</td><td>6725</td></tr><tr><td>190</td><td>8153</td></tr><tr><td>185</td><td>9761</td></tr><tr><td>180</td><td>11500</td></tr><tr><td>175</td><td>13396</td></tr><tr><td>170</td><td>15521</td></tr><tr><td>165</td><td>17702</td></tr><tr><td>160</td><td>19991</td></tr><tr><td>155</td><td>22348</td></tr><tr><td>150</td><td>24625</td></tr><tr><td>145</td><td>27289</td></tr><tr><td>140</td><td>29612</td></tr><tr><td>135</td><td>31915</td></tr><tr><td>130</td><td>34187</td></tr><tr><td>125</td><td>36455</td></tr><tr><td>120</td><td>38638</td></tr><tr><td>115</td><td>40793</td></tr><tr><td>110</td><td>42691</td></tr><tr><td>105</td><td>44554</td></tr><tr><td>100</td><td>46099</td></tr><tr><td>95</td><td>47444</td></tr><tr><td>90</td><td>48603</td></tr><tr><td>85</td><td>49768</td></tr><tr><td>80</td><td>50713</td></tr><tr><td>75</td><td>51546</td></tr><tr><td>70</td><td>52257</td></tr><tr><td>65</td><td>52759</td></tr><tr><td>60</td><td>53192</td></tr><tr><td>55</td><td>53534</td></tr><tr><td>50</td><td>53774</td></tr><tr><td>45</td><td>53974</td></tr><tr><td>40</td><td>54127</td></tr><tr><td>35</td><td>54290</td></tr><tr><td>30</td><td>54368</td></tr><tr><td>25</td><td>54488</td></tr><tr><td>20</td><td>54524</td></tr><tr><td>15</td><td>54594</td></tr><tr><td>10</td><td>54604</td></tr><tr><td>5</td><td>54666</td></tr><tr><td>0</td><td>54669</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 49091 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>305</td><td>3</td></tr><tr><td>300</td><td>5</td></tr><tr><td>295</td><td>19</td></tr><tr><td>290</td><td>27</td></tr><tr><td>285</td><td>51</td></tr><tr><td>280</td><td>73</td></tr><tr><td>275</td><td>111</td></tr><tr><td>270</td><td>191</td></tr><tr><td>265</td><td>279</td></tr><tr><td>260</td><td>399</td></tr><tr><td>255</td><td>589</td></tr><tr><td>250</td><td>814</td></tr><tr><td>245</td><td>1164</td></tr><tr><td>240</td><td>1544</td></tr><tr><td>235</td><td>2084</td></tr><tr><td>230</td><td>2636</td></tr><tr><td>229</td><td>3454</td></tr><tr><td>225</td><td>3456</td></tr><tr><td>220</td><td>4266</td></tr><tr><td>215</td><td>5353</td></tr><tr><td>210</td><td>6442</td></tr><tr><td>205</td><td>7921</td></tr><tr><td>200</td><td>9388</td></tr><tr><td>195</td><td>11129</td></tr><tr><td>190</td><td>12859</td></tr><tr><td>185</td><td>14750</td></tr><tr><td>184</td><td>16728</td></tr><tr><td>180</td><td>16730</td></tr><tr><td>175</td><td>18784</td></tr><tr><td>170</td><td>20951</td></tr><tr><td>165</td><td>23142</td></tr><tr><td>160</td><td>25316</td></tr><tr><td>155</td><td>27455</td></tr><tr><td>150</td><td>29357</td></tr><tr><td>145</td><td>31585</td></tr><tr><td>140</td><td>33337</td></tr><tr><td>135</td><td>35110</td></tr><tr><td>130</td><td>36755</td></tr><tr><td>125</td><td>38368</td></tr><tr><td>120</td><td>39750</td></tr><tr><td>115</td><td>41068</td></tr><tr><td>110</td><td>42235</td></tr><tr><td>105</td><td>43349</td></tr><tr><td>100</td><td>44211</td></tr><tr><td>95</td><td>44967</td></tr><tr><td>90</td><td>45654</td></tr><tr><td>85</td><td>46290</td></tr><tr><td>80</td><td>46748</td></tr><tr><td>75</td><td>47142</td></tr><tr><td>70</td><td>47493</td></tr><tr><td>65</td><td>47769</td></tr><tr><td>60</td><td>47964</td></tr><tr><td>55</td><td>48173</td></tr><tr><td>50</td><td>48315</td></tr><tr><td>45</td><td>48408</td></tr><tr><td>40</td><td>48474</td></tr><tr><td>35</td><td>48551</td></tr><tr><td>30</td><td>48585</td></tr><tr><td>25</td><td>48655</td></tr><tr><td>20</td><td>48681</td></tr><tr><td>15</td><td>48700</td></tr><tr><td>10</td><td>48704</td></tr><tr><td>5</td><td>48748</td></tr><tr><td>0</td><td>48752</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 36462 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>315</td><td>3</td></tr><tr><td>310</td><td>5</td></tr><tr><td>305</td><td>11</td></tr><tr><td>300</td><td>21</td></tr><tr><td>295</td><td>31</td></tr><tr><td>290</td><td>45</td></tr><tr><td>285</td><td>71</td></tr><tr><td>280</td><td>121</td></tr><tr><td>275</td><td>215</td></tr><tr><td>270</td><td>341</td></tr><tr><td>265</td><td>503</td></tr><tr><td>260</td><td>717</td></tr><tr><td>255</td><td>978</td></tr><tr><td>250</td><td>1324</td></tr><tr><td>245</td><td>1829</td></tr><tr><td>240</td><td>2333</td></tr><tr><td>235</td><td>2977</td></tr><tr><td>230</td><td>3680</td></tr><tr><td>225</td><td>4602</td></tr><tr><td>220</td><td>5565</td></tr><tr><td>215</td><td>6720</td></tr><tr><td>210</td><td>7869</td></tr><tr><td>205</td><td>9279</td></tr><tr><td>200</td><td>10641</td></tr><tr><td>195</td><td>12207</td></tr><tr><td>190</td><td>13689</td></tr><tr><td>185</td><td>15313</td></tr><tr><td>180</td><td>16886</td></tr><tr><td>175</td><td>18556</td></tr><tr><td>170</td><td>20033</td></tr><tr><td>165</td><td>21517</td></tr><tr><td>160</td><td>22904</td></tr><tr><td>155</td><td>24362</td></tr><tr><td>150</td><td>25680</td></tr><tr><td>145</td><td>26957</td></tr><tr><td>140</td><td>28038</td></tr><tr><td>135</td><td>29086</td></tr><tr><td>130</td><td>29928</td></tr><tr><td>125</td><td>30790</td></tr><tr><td>120</td><td>31507</td></tr><tr><td>115</td><td>32253</td></tr><tr><td>110</td><td>32826</td></tr><tr><td>105</td><td>33399</td></tr><tr><td>100</td><td>33799</td></tr><tr><td>95</td><td>34273</td></tr><tr><td>90</td><td>34608</td></tr><tr><td>85</td><td>34947</td></tr><tr><td>80</td><td>35149</td></tr><tr><td>75</td><td>35332</td></tr><tr><td>70</td><td>35499</td></tr><tr><td>65</td><td>35627</td></tr><tr><td>60</td><td>35705</td></tr><tr><td>55</td><td>35793</td></tr><tr><td>50</td><td>35886</td></tr><tr><td>45</td><td>35954</td></tr><tr><td>40</td><td>36002</td></tr><tr><td>35</td><td>36053</td></tr><tr><td>30</td><td>36085</td></tr><tr><td>25</td><td>36121</td></tr><tr><td>20</td><td>36137</td></tr><tr><td>15</td><td>36153</td></tr><tr><td>10</td><td>36165</td></tr><tr><td>5</td><td>36213</td></tr><tr><td>0</td><td>36219</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 15308 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>354</td><td>1</td></tr><tr><td>325</td><td>2</td></tr><tr><td>320</td><td>3</td></tr><tr><td>315</td><td>5</td></tr><tr><td>305</td><td>9</td></tr><tr><td>300</td><td>17</td></tr><tr><td>295</td><td>29</td></tr><tr><td>290</td><td>53</td></tr><tr><td>285</td><td>95</td></tr><tr><td>280</td><td>139</td></tr><tr><td>275</td><td>209</td></tr><tr><td>271</td><td>287</td></tr><tr><td>270</td><td>289</td></tr><tr><td>265</td><td>421</td></tr><tr><td>260</td><td>545</td></tr><tr><td>255</td><td>732</td></tr><tr><td>250</td><td>956</td></tr><tr><td>249</td><td>1288</td></tr><tr><td>245</td><td>1290</td></tr><tr><td>240</td><td>1615</td></tr><tr><td>235</td><td>2041</td></tr><tr><td>230</td><td>2479</td></tr><tr><td>225</td><td>3037</td></tr><tr><td>220</td><td>3585</td></tr><tr><td>215</td><td>4189</td></tr><tr><td>210</td><td>4780</td></tr><tr><td>205</td><td>5474</td></tr><tr><td>200</td><td>6132</td></tr><tr><td>195</td><td>6754</td></tr><tr><td>190</td><td>7382</td></tr><tr><td>185</td><td>7981</td></tr><tr><td>180</td><td>8631</td></tr><tr><td>175</td><td>9198</td></tr><tr><td>170</td><td>9784</td></tr><tr><td>165</td><td>10294</td></tr><tr><td>160</td><td>10756</td></tr><tr><td>155</td><td>11312</td></tr><tr><td>150</td><td>11789</td></tr><tr><td>145</td><td>12201</td></tr><tr><td>140</td><td>12548</td></tr><tr><td>135</td><td>12889</td></tr><tr><td>130</td><td>13218</td></tr><tr><td>125</td><td>13517</td></tr><tr><td>120</td><td>13731</td></tr><tr><td>115</td><td>13966</td></tr><tr><td>110</td><td>14132</td></tr><tr><td>105</td><td>14296</td></tr><tr><td>100</td><td>14436</td></tr><tr><td>95</td><td>14581</td></tr><tr><td>90</td><td>14686</td></tr><tr><td>85</td><td>14769</td></tr><tr><td>80</td><td>14861</td></tr><tr><td>75</td><td>14927</td></tr><tr><td>70</td><td>14979</td></tr><tr><td>65</td><td>15008</td></tr><tr><td>60</td><td>15036</td></tr><tr><td>55</td><td>15060</td></tr><tr><td>50</td><td>15070</td></tr><tr><td>45</td><td>15090</td></tr><tr><td>40</td><td>15107</td></tr><tr><td>35</td><td>15132</td></tr><tr><td>30</td><td>15136</td></tr><tr><td>25</td><td>15148</td></tr><tr><td>20</td><td>15154</td></tr><tr><td>15</td><td>15160</td></tr><tr><td>10</td><td>15164</td></tr><tr><td>0</td><td>15184</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 3058 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>330</td><td>1</td></tr><tr><td>320</td><td>3</td></tr><tr><td>310</td><td>7</td></tr><tr><td>305</td><td>17</td></tr><tr><td>300</td><td>23</td></tr><tr><td>295</td><td>33</td></tr><tr><td>290</td><td>59</td></tr><tr><td>285</td><td>93</td></tr><tr><td>280</td><td>115</td></tr><tr><td>275</td><td>153</td></tr><tr><td>270</td><td>197</td></tr><tr><td>265</td><td>223</td></tr><tr><td>260</td><td>285</td></tr><tr><td>255</td><td>349</td></tr><tr><td>250</td><td>437</td></tr><tr><td>245</td><td>532</td></tr><tr><td>240</td><td>626</td></tr><tr><td>235</td><td>728</td></tr><tr><td>230</td><td>840</td></tr><tr><td>225</td><td>980</td></tr><tr><td>220</td><td>1100</td></tr><tr><td>215</td><td>1225</td></tr><tr><td>210</td><td>1369</td></tr><tr><td>205</td><td>1503</td></tr><tr><td>200</td><td>1631</td></tr><tr><td>195</td><td>1729</td></tr><tr><td>190</td><td>1857</td></tr><tr><td>185</td><td>1961</td></tr><tr><td>180</td><td>2047</td></tr><tr><td>175</td><td>2147</td></tr><tr><td>170</td><td>2246</td></tr><tr><td>165</td><td>2336</td></tr><tr><td>160</td><td>2408</td></tr><tr><td>155</td><td>2489</td></tr><tr><td>150</td><td>2557</td></tr><tr><td>145</td><td>2621</td></tr><tr><td>140</td><td>2695</td></tr><tr><td>135</td><td>2740</td></tr><tr><td>130</td><td>2764</td></tr><tr><td>125</td><td>2806</td></tr><tr><td>120</td><td>2830</td></tr><tr><td>115</td><td>2864</td></tr><tr><td>110</td><td>2889</td></tr><tr><td>105</td><td>2902</td></tr><tr><td>100</td><td>2926</td></tr><tr><td>95</td><td>2940</td></tr><tr><td>90</td><td>2954</td></tr><tr><td>85</td><td>2972</td></tr><tr><td>80</td><td>2984</td></tr><tr><td>75</td><td>2994</td></tr><tr><td>70</td><td>2996</td></tr><tr><td>60</td><td>3002</td></tr><tr><td>55</td><td>3013</td></tr><tr><td>50</td><td>3015</td></tr><tr><td>45</td><td>3019</td></tr><tr><td>40</td><td>3021</td></tr><tr><td>35</td><td>3024</td></tr><tr><td>30</td><td>3028</td></tr><tr><td>20</td><td>3030</td></tr><tr><td>10</td><td>3036</td></tr><tr><td>5</td><td>3037</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 2057 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>340</td><td>1</td></tr><tr><td>320</td><td>3</td></tr><tr><td>310</td><td>7</td></tr><tr><td>305</td><td>15</td></tr><tr><td>300</td><td>23</td></tr><tr><td>295</td><td>39</td></tr><tr><td>290</td><td>55</td></tr><tr><td>285</td><td>85</td></tr><tr><td>280</td><td>103</td></tr><tr><td>275</td><td>147</td></tr><tr><td>270</td><td>177</td></tr><tr><td>265</td><td>234</td></tr><tr><td>260</td><td>294</td></tr><tr><td>255</td><td>360</td></tr><tr><td>250</td><td>434</td></tr><tr><td>245</td><td>489</td></tr><tr><td>240</td><td>543</td></tr><tr><td>235</td><td>626</td></tr><tr><td>230</td><td>694</td></tr><tr><td>225</td><td>784</td></tr><tr><td>220</td><td>861</td></tr><tr><td>215</td><td>957</td></tr><tr><td>210</td><td>1027</td></tr><tr><td>205</td><td>1084</td></tr><tr><td>200</td><td>1182</td></tr><tr><td>195</td><td>1251</td></tr><tr><td>190</td><td>1311</td></tr><tr><td>185</td><td>1368</td></tr><tr><td>180</td><td>1425</td></tr><tr><td>175</td><td>1494</td></tr><tr><td>170</td><td>1548</td></tr><tr><td>165</td><td>1600</td></tr><tr><td>160</td><td>1650</td></tr><tr><td>155</td><td>1704</td></tr><tr><td>150</td><td>1733</td></tr><tr><td>145</td><td>1759</td></tr><tr><td>140</td><td>1793</td></tr><tr><td>135</td><td>1820</td></tr><tr><td>130</td><td>1846</td></tr><tr><td>125</td><td>1864</td></tr><tr><td>120</td><td>1884</td></tr><tr><td>115</td><td>1902</td></tr><tr><td>110</td><td>1922</td></tr><tr><td>105</td><td>1936</td></tr><tr><td>100</td><td>1948</td></tr><tr><td>95</td><td>1962</td></tr><tr><td>90</td><td>1975</td></tr><tr><td>85</td><td>1989</td></tr><tr><td>80</td><td>1999</td></tr><tr><td>75</td><td>2013</td></tr><tr><td>70</td><td>2019</td></tr><tr><td>60</td><td>2031</td></tr><tr><td>55</td><td>2038</td></tr><tr><td>50</td><td>2040</td></tr><tr><td>45</td><td>2042</td></tr><tr><td>40</td><td>2043</td></tr><tr><td>35</td><td>2044</td></tr><tr><td>20</td><td>2045</td></tr><tr><td>10</td><td>2047</td></tr><tr><td>0</td><td>2049</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 461 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>255</td><td>1</td></tr><tr><td>250</td><td>3</td></tr><tr><td>235</td><td>5</td></tr><tr><td>230</td><td>10</td></tr><tr><td>225</td><td>12</td></tr><tr><td>220</td><td>17</td></tr><tr><td>215</td><td>22</td></tr><tr><td>210</td><td>34</td></tr><tr><td>205</td><td>54</td></tr><tr><td>200</td><td>62</td></tr><tr><td>195</td><td>75</td></tr><tr><td>190</td><td>91</td></tr><tr><td>185</td><td>101</td></tr><tr><td>180</td><td>115</td></tr><tr><td>175</td><td>134</td></tr><tr><td>170</td><td>157</td></tr><tr><td>165</td><td>172</td></tr><tr><td>160</td><td>190</td></tr><tr><td>155</td><td>196</td></tr><tr><td>150</td><td>220</td></tr><tr><td>145</td><td>252</td></tr><tr><td>140</td><td>266</td></tr><tr><td>135</td><td>280</td></tr><tr><td>130</td><td>296</td></tr><tr><td>125</td><td>316</td></tr><tr><td>120</td><td>330</td></tr><tr><td>115</td><td>346</td></tr><tr><td>110</td><td>360</td></tr><tr><td>105</td><td>370</td></tr><tr><td>100</td><td>378</td></tr><tr><td>95</td><td>382</td></tr><tr><td>90</td><td>386</td></tr><tr><td>85</td><td>397</td></tr><tr><td>80</td><td>413</td></tr><tr><td>70</td><td>417</td></tr><tr><td>65</td><td>426</td></tr><tr><td>60</td><td>432</td></tr><tr><td>50</td><td>438</td></tr><tr><td>45</td><td>442</td></tr><tr><td>40</td><td>444</td></tr><tr><td>35</td><td>447</td></tr><tr><td>30</td><td>449</td></tr><tr><td>25</td><td>451</td></tr><tr><td>10</td><td>453</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 267 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>230</td><td>5</td></tr><tr><td>220</td><td>7</td></tr><tr><td>215</td><td>16</td></tr><tr><td>210</td><td>22</td></tr><tr><td>205</td><td>30</td></tr><tr><td>200</td><td>46</td></tr><tr><td>195</td><td>62</td></tr><tr><td>190</td><td>68</td></tr><tr><td>185</td><td>74</td></tr><tr><td>180</td><td>92</td></tr><tr><td>175</td><td>98</td></tr><tr><td>170</td><td>110</td></tr><tr><td>165</td><td>122</td></tr><tr><td>160</td><td>136</td></tr><tr><td>155</td><td>146</td></tr><tr><td>150</td><td>150</td></tr><tr><td>145</td><td>156</td></tr><tr><td>140</td><td>170</td></tr><tr><td>135</td><td>173</td></tr><tr><td>130</td><td>179</td></tr><tr><td>125</td><td>183</td></tr><tr><td>120</td><td>184</td></tr><tr><td>115</td><td>192</td></tr><tr><td>110</td><td>204</td></tr><tr><td>105</td><td>212</td></tr><tr><td>100</td><td>214</td></tr><tr><td>95</td><td>220</td></tr><tr><td>90</td><td>224</td></tr><tr><td>85</td><td>234</td></tr><tr><td>80</td><td>240</td></tr><tr><td>75</td><td>246</td></tr><tr><td>65</td><td>252</td></tr><tr><td>60</td><td>254</td></tr><tr><td>45</td><td>256</td></tr><tr><td>40</td><td>258</td></tr><tr><td>20</td><td>262</td></tr><tr><td>10</td><td>264</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 125 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>265</td><td>1</td></tr><tr><td>250</td><td>3</td></tr><tr><td>240</td><td>5</td></tr><tr><td>235</td><td>7</td></tr><tr><td>230</td><td>9</td></tr><tr><td>225</td><td>12</td></tr><tr><td>220</td><td>16</td></tr><tr><td>210</td><td>20</td></tr><tr><td>205</td><td>22</td></tr><tr><td>200</td><td>23</td></tr><tr><td>195</td><td>27</td></tr><tr><td>190</td><td>33</td></tr><tr><td>185</td><td>37</td></tr><tr><td>180</td><td>39</td></tr><tr><td>175</td><td>49</td></tr><tr><td>170</td><td>54</td></tr><tr><td>165</td><td>56</td></tr><tr><td>160</td><td>58</td></tr><tr><td>155</td><td>60</td></tr><tr><td>150</td><td>62</td></tr><tr><td>145</td><td>66</td></tr><tr><td>140</td><td>73</td></tr><tr><td>130</td><td>78</td></tr><tr><td>120</td><td>86</td></tr><tr><td>115</td><td>92</td></tr><tr><td>110</td><td>93</td></tr><tr><td>105</td><td>94</td></tr><tr><td>95</td><td>96</td></tr><tr><td>90</td><td>98</td></tr><tr><td>85</td><td>101</td></tr><tr><td>75</td><td>108</td></tr><tr><td>60</td><td>109</td></tr><tr><td>40</td><td>111</td></tr><tr><td>30</td><td>113</td></tr><tr><td>10</td><td>114</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-16-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation en binôme) : 426 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-16-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-16-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>230</td><td>2</td></tr><tr><td>220</td><td>3</td></tr><tr><td>215</td><td>6</td></tr><tr><td>205</td><td>7</td></tr><tr><td>200</td><td>9</td></tr><tr><td>195</td><td>11</td></tr><tr><td>190</td><td>17</td></tr><tr><td>185</td><td>22</td></tr><tr><td>180</td><td>27</td></tr><tr><td>175</td><td>30</td></tr><tr><td>170</td><td>32</td></tr><tr><td>165</td><td>35</td></tr><tr><td>160</td><td>42</td></tr><tr><td>155</td><td>51</td></tr><tr><td>150</td><td>57</td></tr><tr><td>145</td><td>74</td></tr><tr><td>140</td><td>78</td></tr><tr><td>135</td><td>85</td></tr><tr><td>130</td><td>94</td></tr><tr><td>125</td><td>108</td></tr><tr><td>120</td><td>120</td></tr><tr><td>115</td><td>132</td></tr><tr><td>110</td><td>144</td></tr><tr><td>105</td><td>165</td></tr><tr><td>100</td><td>180</td></tr><tr><td>95</td><td>208</td></tr><tr><td>90</td><td>218</td></tr><tr><td>85</td><td>235</td></tr><tr><td>80</td><td>253</td></tr><tr><td>75</td><td>275</td></tr><tr><td>70</td><td>291</td></tr><tr><td>65</td><td>314</td></tr><tr><td>60</td><td>327</td></tr><tr><td>55</td><td>341</td></tr><tr><td>50</td><td>348</td></tr><tr><td>45</td><td>355</td></tr><tr><td>40</td><td>370</td></tr><tr><td>35</td><td>389</td></tr><tr><td>30</td><td>391</td></tr><tr><td>25</td><td>398</td></tr><tr><td>20</td><td>399</td></tr><tr><td>15</td><td>406</td></tr><tr><td>10</td><td>408</td></tr><tr><td>0</td><td>412</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-17-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation en binôme) : 556 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-17-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-17-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>230</td><td>1</td></tr><tr><td>220</td><td>2</td></tr><tr><td>215</td><td>5</td></tr><tr><td>210</td><td>6</td></tr><tr><td>205</td><td>9</td></tr><tr><td>200</td><td>15</td></tr><tr><td>195</td><td>20</td></tr><tr><td>190</td><td>24</td></tr><tr><td>185</td><td>26</td></tr><tr><td>180</td><td>34</td></tr><tr><td>175</td><td>42</td></tr><tr><td>170</td><td>49</td></tr><tr><td>165</td><td>56</td></tr><tr><td>160</td><td>70</td></tr><tr><td>155</td><td>85</td></tr><tr><td>150</td><td>97</td></tr><tr><td>145</td><td>121</td></tr><tr><td>140</td><td>137</td></tr><tr><td>135</td><td>151</td></tr><tr><td>130</td><td>181</td></tr><tr><td>125</td><td>201</td></tr><tr><td>120</td><td>221</td></tr><tr><td>115</td><td>242</td></tr><tr><td>110</td><td>257</td></tr><tr><td>105</td><td>282</td></tr><tr><td>100</td><td>307</td></tr><tr><td>95</td><td>329</td></tr><tr><td>90</td><td>351</td></tr><tr><td>85</td><td>380</td></tr><tr><td>80</td><td>391</td></tr><tr><td>75</td><td>412</td></tr><tr><td>70</td><td>426</td></tr><tr><td>65</td><td>446</td></tr><tr><td>60</td><td>463</td></tr><tr><td>55</td><td>475</td></tr><tr><td>50</td><td>487</td></tr><tr><td>45</td><td>500</td></tr><tr><td>40</td><td>505</td></tr><tr><td>35</td><td>511</td></tr><tr><td>30</td><td>514</td></tr><tr><td>25</td><td>519</td></tr><tr><td>20</td><td>522</td></tr><tr><td>10</td><td>526</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 477 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>255</td><td>2</td></tr><tr><td>250</td><td>3</td></tr><tr><td>240</td><td>4</td></tr><tr><td>235</td><td>6</td></tr><tr><td>230</td><td>8</td></tr><tr><td>225</td><td>11</td></tr><tr><td>220</td><td>13</td></tr><tr><td>215</td><td>14</td></tr><tr><td>210</td><td>15</td></tr><tr><td>205</td><td>17</td></tr><tr><td>200</td><td>24</td></tr><tr><td>195</td><td>30</td></tr><tr><td>190</td><td>36</td></tr><tr><td>185</td><td>42</td></tr><tr><td>180</td><td>48</td></tr><tr><td>175</td><td>55</td></tr><tr><td>170</td><td>64</td></tr><tr><td>165</td><td>77</td></tr><tr><td>160</td><td>90</td></tr><tr><td>155</td><td>100</td></tr><tr><td>150</td><td>107</td></tr><tr><td>145</td><td>131</td></tr><tr><td>140</td><td>142</td></tr><tr><td>135</td><td>159</td></tr><tr><td>130</td><td>179</td></tr><tr><td>125</td><td>186</td></tr><tr><td>120</td><td>206</td></tr><tr><td>115</td><td>232</td></tr><tr><td>110</td><td>246</td></tr><tr><td>105</td><td>270</td></tr><tr><td>100</td><td>282</td></tr><tr><td>95</td><td>293</td></tr><tr><td>90</td><td>318</td></tr><tr><td>85</td><td>341</td></tr><tr><td>80</td><td>354</td></tr><tr><td>75</td><td>372</td></tr><tr><td>70</td><td>381</td></tr><tr><td>65</td><td>388</td></tr><tr><td>60</td><td>396</td></tr><tr><td>55</td><td>405</td></tr><tr><td>50</td><td>412</td></tr><tr><td>45</td><td>418</td></tr><tr><td>40</td><td>423</td></tr><tr><td>35</td><td>428</td></tr><tr><td>30</td><td>432</td></tr><tr><td>25</td><td>434</td></tr><tr><td>20</td><td>435</td></tr><tr><td>15</td><td>436</td></tr><tr><td>10</td><td>438</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-85256043878345851-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 382 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-85256043878345851-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-85256043878345851-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>3</td></tr><tr><td>245</td><td>4</td></tr><tr><td>235</td><td>9</td></tr><tr><td>230</td><td>11</td></tr><tr><td>225</td><td>13</td></tr><tr><td>220</td><td>20</td></tr><tr><td>215</td><td>25</td></tr><tr><td>210</td><td>31</td></tr><tr><td>205</td><td>37</td></tr><tr><td>200</td><td>42</td></tr><tr><td>195</td><td>50</td></tr><tr><td>190</td><td>56</td></tr><tr><td>185</td><td>66</td></tr><tr><td>180</td><td>74</td></tr><tr><td>175</td><td>85</td></tr><tr><td>170</td><td>95</td></tr><tr><td>165</td><td>107</td></tr><tr><td>160</td><td>116</td></tr><tr><td>155</td><td>132</td></tr><tr><td>150</td><td>145</td></tr><tr><td>145</td><td>154</td></tr><tr><td>140</td><td>169</td></tr><tr><td>135</td><td>182</td></tr><tr><td>130</td><td>192</td></tr><tr><td>125</td><td>199</td></tr><tr><td>120</td><td>210</td></tr><tr><td>115</td><td>225</td></tr><tr><td>110</td><td>235</td></tr><tr><td>105</td><td>254</td></tr><tr><td>100</td><td>263</td></tr><tr><td>95</td><td>278</td></tr><tr><td>90</td><td>286</td></tr><tr><td>85</td><td>295</td></tr><tr><td>80</td><td>300</td></tr><tr><td>75</td><td>314</td></tr><tr><td>70</td><td>322</td></tr><tr><td>65</td><td>328</td></tr><tr><td>60</td><td>332</td></tr><tr><td>55</td><td>340</td></tr><tr><td>50</td><td>342</td></tr><tr><td>45</td><td>345</td></tr><tr><td>30</td><td>349</td></tr><tr><td>15</td><td>353</td></tr><tr><td>10</td><td>355</td></tr><tr><td>5</td><td>357</td></tr><tr><td>0</td><td>359</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
