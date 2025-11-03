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

<!--<li>648324 élèves ont participé, dont 0% de filles.</li>
<li>3798 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-260175949304900373-4-1'><a href='#tabs-260175949304900373-4-1'>CM1</a></li><li class='nbContestants1' id='link-260175949304900373-5-1'><a href='#tabs-260175949304900373-5-1'>CM2</a></li><li class='nbContestants1' id='link-260175949304900373-6-1'><a href='#tabs-260175949304900373-6-1'>6e</a></li><li class='nbContestants1' id='link-260175949304900373-7-1'><a href='#tabs-260175949304900373-7-1'>5e</a></li><li class='nbContestants1' id='link-260175949304900373-8-1'><a href='#tabs-260175949304900373-8-1'>4e</a></li><li class='nbContestants1' id='link-260175949304900373-9-1'><a href='#tabs-260175949304900373-9-1'>3e</a></li><li class='nbContestants1' id='link-260175949304900373-10-1'><a href='#tabs-260175949304900373-10-1'>2de</a></li><li class='nbContestants1' id='link-260175949304900373-11-1'><a href='#tabs-260175949304900373-11-1'>1re</a></li><li class='nbContestants1' id='link-260175949304900373-12-1'><a href='#tabs-260175949304900373-12-1'>Tale</a></li><li class='nbContestants1' id='link-260175949304900373-13-1'><a href='#tabs-260175949304900373-13-1'>2de pro.</a></li><li class='nbContestants1' id='link-260175949304900373-14-1'><a href='#tabs-260175949304900373-14-1'>1re pro.</a></li><li class='nbContestants1' id='link-260175949304900373-15-1'><a href='#tabs-260175949304900373-15-1'>Tale pro.</a></li><li class='nbContestants1' id='link-260175949304900373-16-1'><a href='#tabs-260175949304900373-16-1'>6e Segpa</a></li><li class='nbContestants1' id='link-260175949304900373-17-1'><a href='#tabs-260175949304900373-17-1'>5e Segpa</a></li><li class='nbContestants1' id='link-260175949304900373-18-1'><a href='#tabs-260175949304900373-18-1'>4e Segpa</a></li><li class='nbContestants1' id='link-260175949304900373-19-1'><a href='#tabs-260175949304900373-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-260175949304900373-4-2'><a href='#tabs-260175949304900373-4-2'>CM1</a></li><li class='nbContestants2' id='link-260175949304900373-5-2'><a href='#tabs-260175949304900373-5-2'>CM2</a></li><li class='nbContestants2' id='link-260175949304900373-6-2'><a href='#tabs-260175949304900373-6-2'>6e</a></li><li class='nbContestants2' id='link-260175949304900373-7-2'><a href='#tabs-260175949304900373-7-2'>5e</a></li><li class='nbContestants2' id='link-260175949304900373-8-2'><a href='#tabs-260175949304900373-8-2'>4e</a></li><li class='nbContestants2' id='link-260175949304900373-9-2'><a href='#tabs-260175949304900373-9-2'>3e</a></li><li class='nbContestants2' id='link-260175949304900373-10-2'><a href='#tabs-260175949304900373-10-2'>2de</a></li><li class='nbContestants2' id='link-260175949304900373-11-2'><a href='#tabs-260175949304900373-11-2'>1re</a></li><li class='nbContestants2' id='link-260175949304900373-12-2'><a href='#tabs-260175949304900373-12-2'>Tale</a></li><li class='nbContestants2' id='link-260175949304900373-13-2'><a href='#tabs-260175949304900373-13-2'>2de pro.</a></li><li class='nbContestants2' id='link-260175949304900373-14-2'><a href='#tabs-260175949304900373-14-2'>1re pro.</a></li><li class='nbContestants2' id='link-260175949304900373-15-2'><a href='#tabs-260175949304900373-15-2'>Tale pro.</a></li><li class='nbContestants2' id='link-260175949304900373-16-2'><a href='#tabs-260175949304900373-16-2'>6e Segpa</a></li><li class='nbContestants2' id='link-260175949304900373-17-2'><a href='#tabs-260175949304900373-17-2'>5e Segpa</a></li><li class='nbContestants2' id='link-260175949304900373-18-2'><a href='#tabs-260175949304900373-18-2'>4e Segpa</a></li><li class='nbContestants2' id='link-260175949304900373-19-2'><a href='#tabs-260175949304900373-19-2'>3e Segpa</a></li></ul><div id='tabs-260175949304900373-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 4427 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>305</td><td>1</td></tr><tr><td>270</td><td>2</td></tr><tr><td>250</td><td>3</td></tr><tr><td>240</td><td>7</td></tr><tr><td>230</td><td>12</td></tr><tr><td>220</td><td>23</td></tr><tr><td>210</td><td>45</td></tr><tr><td>200</td><td>76</td></tr><tr><td>190</td><td>142</td></tr><tr><td>180</td><td>231</td></tr><tr><td>170</td><td>353</td></tr><tr><td>160</td><td>538</td></tr><tr><td>150</td><td>777</td></tr><tr><td>140</td><td>1053</td></tr><tr><td>130</td><td>1386</td></tr><tr><td>120</td><td>1761</td></tr><tr><td>110</td><td>2161</td></tr><tr><td>100</td><td>2590</td></tr><tr><td>90</td><td>2982</td></tr><tr><td>80</td><td>3331</td></tr><tr><td>70</td><td>3607</td></tr><tr><td>60</td><td>3845</td></tr><tr><td>50</td><td>4029</td></tr><tr><td>40</td><td>4147</td></tr><tr><td>30</td><td>4231</td></tr><tr><td>20</td><td>4275</td></tr><tr><td>10</td><td>4307</td></tr><tr><td>0</td><td>4342</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 6170 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>290</td><td>2</td></tr><tr><td>280</td><td>3</td></tr><tr><td>270</td><td>4</td></tr><tr><td>260</td><td>5</td></tr><tr><td>250</td><td>9</td></tr><tr><td>240</td><td>19</td></tr><tr><td>230</td><td>35</td></tr><tr><td>225</td><td>80</td></tr><tr><td>220</td><td>81</td></tr><tr><td>215</td><td>149</td></tr><tr><td>210</td><td>150</td></tr><tr><td>200</td><td>302</td></tr><tr><td>190</td><td>495</td></tr><tr><td>180</td><td>791</td></tr><tr><td>170</td><td>1165</td></tr><tr><td>160</td><td>1609</td></tr><tr><td>150</td><td>2114</td></tr><tr><td>145</td><td>2616</td></tr><tr><td>140</td><td>2617</td></tr><tr><td>130</td><td>3145</td></tr><tr><td>120</td><td>3725</td></tr><tr><td>110</td><td>4223</td></tr><tr><td>100</td><td>4691</td></tr><tr><td>90</td><td>5096</td></tr><tr><td>80</td><td>5413</td></tr><tr><td>70</td><td>5666</td></tr><tr><td>60</td><td>5819</td></tr><tr><td>50</td><td>5936</td></tr><tr><td>40</td><td>6011</td></tr><tr><td>30</td><td>6032</td></tr><tr><td>20</td><td>6059</td></tr><tr><td>10</td><td>6069</td></tr><tr><td>0</td><td>6084</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation individuelle) : 96051 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>360</td><td>1</td></tr><tr><td>340</td><td>2</td></tr><tr><td>330</td><td>3</td></tr><tr><td>320</td><td>4</td></tr><tr><td>310</td><td>5</td></tr><tr><td>300</td><td>6</td></tr><tr><td>290</td><td>8</td></tr><tr><td>280</td><td>15</td></tr><tr><td>270</td><td>25</td></tr><tr><td>260</td><td>62</td></tr><tr><td>255</td><td>139</td></tr><tr><td>250</td><td>142</td></tr><tr><td>245</td><td>302</td></tr><tr><td>240</td><td>303</td></tr><tr><td>235</td><td>680</td></tr><tr><td>230</td><td>685</td></tr><tr><td>225</td><td>1451</td></tr><tr><td>220</td><td>1456</td></tr><tr><td>215</td><td>3065</td></tr><tr><td>210</td><td>3071</td></tr><tr><td>205</td><td>6091</td></tr><tr><td>200</td><td>6096</td></tr><tr><td>195</td><td>11271</td></tr><tr><td>190</td><td>11274</td></tr><tr><td>185</td><td>17481</td></tr><tr><td>180</td><td>17483</td></tr><tr><td>175</td><td>24031</td></tr><tr><td>170</td><td>24033</td></tr><tr><td>165</td><td>31499</td></tr><tr><td>160</td><td>31500</td></tr><tr><td>155</td><td>39307</td></tr><tr><td>150</td><td>39311</td></tr><tr><td>145</td><td>47494</td></tr><tr><td>140</td><td>47496</td></tr><tr><td>135</td><td>55275</td></tr><tr><td>130</td><td>55276</td></tr><tr><td>125</td><td>63020</td></tr><tr><td>120</td><td>63021</td></tr><tr><td>110</td><td>70064</td></tr><tr><td>100</td><td>76564</td></tr><tr><td>90</td><td>82118</td></tr><tr><td>80</td><td>86436</td></tr><tr><td>70</td><td>89559</td></tr><tr><td>60</td><td>91871</td></tr><tr><td>50</td><td>93231</td></tr><tr><td>40</td><td>94054</td></tr><tr><td>30</td><td>94500</td></tr><tr><td>20</td><td>94766</td></tr><tr><td>10</td><td>94908</td></tr><tr><td>0</td><td>95123</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation individuelle) : 105360 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>360</td><td>3</td></tr><tr><td>350</td><td>5</td></tr><tr><td>340</td><td>7</td></tr><tr><td>330</td><td>14</td></tr><tr><td>320</td><td>17</td></tr><tr><td>315</td><td>20</td></tr><tr><td>310</td><td>22</td></tr><tr><td>300</td><td>32</td></tr><tr><td>295</td><td>41</td></tr><tr><td>290</td><td>44</td></tr><tr><td>285</td><td>71</td></tr><tr><td>280</td><td>72</td></tr><tr><td>275</td><td>134</td></tr><tr><td>270</td><td>135</td></tr><tr><td>265</td><td>278</td></tr><tr><td>260</td><td>280</td></tr><tr><td>255</td><td>559</td></tr><tr><td>250</td><td>563</td></tr><tr><td>245</td><td>1170</td></tr><tr><td>240</td><td>1180</td></tr><tr><td>235</td><td>2416</td></tr><tr><td>230</td><td>2428</td></tr><tr><td>225</td><td>4744</td></tr><tr><td>220</td><td>4753</td></tr><tr><td>215</td><td>8552</td></tr><tr><td>210</td><td>8570</td></tr><tr><td>205</td><td>14777</td></tr><tr><td>200</td><td>14782</td></tr><tr><td>195</td><td>23354</td></tr><tr><td>190</td><td>23358</td></tr><tr><td>185</td><td>32522</td></tr><tr><td>180</td><td>32529</td></tr><tr><td>175</td><td>41598</td></tr><tr><td>170</td><td>41599</td></tr><tr><td>165</td><td>51117</td></tr><tr><td>160</td><td>51119</td></tr><tr><td>155</td><td>60193</td></tr><tr><td>150</td><td>60195</td></tr><tr><td>145</td><td>68577</td></tr><tr><td>140</td><td>68579</td></tr><tr><td>135</td><td>75876</td></tr><tr><td>130</td><td>75878</td></tr><tr><td>120</td><td>82807</td></tr><tr><td>110</td><td>88565</td></tr><tr><td>100</td><td>93269</td></tr><tr><td>90</td><td>96801</td></tr><tr><td>80</td><td>99388</td></tr><tr><td>70</td><td>101244</td></tr><tr><td>60</td><td>102482</td></tr><tr><td>50</td><td>103230</td></tr><tr><td>40</td><td>103675</td></tr><tr><td>35</td><td>103943</td></tr><tr><td>30</td><td>103944</td></tr><tr><td>20</td><td>104144</td></tr><tr><td>10</td><td>104275</td></tr><tr><td>0</td><td>104440</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 89981 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>380</td><td>3</td></tr><tr><td>370</td><td>4</td></tr><tr><td>360</td><td>6</td></tr><tr><td>340</td><td>8</td></tr><tr><td>330</td><td>9</td></tr><tr><td>320</td><td>11</td></tr><tr><td>310</td><td>15</td></tr><tr><td>300</td><td>27</td></tr><tr><td>290</td><td>61</td></tr><tr><td>285</td><td>130</td></tr><tr><td>280</td><td>133</td></tr><tr><td>275</td><td>271</td></tr><tr><td>270</td><td>277</td></tr><tr><td>265</td><td>604</td></tr><tr><td>260</td><td>610</td></tr><tr><td>255</td><td>1264</td></tr><tr><td>250</td><td>1278</td></tr><tr><td>245</td><td>2528</td></tr><tr><td>240</td><td>2548</td></tr><tr><td>235</td><td>4716</td></tr><tr><td>230</td><td>4733</td></tr><tr><td>225</td><td>8402</td></tr><tr><td>220</td><td>8419</td></tr><tr><td>215</td><td>13820</td></tr><tr><td>210</td><td>13836</td></tr><tr><td>205</td><td>21064</td></tr><tr><td>200</td><td>21078</td></tr><tr><td>195</td><td>30009</td></tr><tr><td>190</td><td>30015</td></tr><tr><td>185</td><td>38717</td></tr><tr><td>180</td><td>38723</td></tr><tr><td>175</td><td>46943</td></tr><tr><td>170</td><td>46947</td></tr><tr><td>165</td><td>54663</td></tr><tr><td>160</td><td>54664</td></tr><tr><td>155</td><td>61349</td></tr><tr><td>150</td><td>61351</td></tr><tr><td>140</td><td>67434</td></tr><tr><td>130</td><td>72631</td></tr><tr><td>120</td><td>77001</td></tr><tr><td>110</td><td>80518</td></tr><tr><td>100</td><td>83218</td></tr><tr><td>90</td><td>85139</td></tr><tr><td>80</td><td>86495</td></tr><tr><td>70</td><td>87460</td></tr><tr><td>60</td><td>88105</td></tr><tr><td>50</td><td>88543</td></tr><tr><td>40</td><td>88860</td></tr><tr><td>30</td><td>89027</td></tr><tr><td>20</td><td>89158</td></tr><tr><td>10</td><td>89263</td></tr><tr><td>0</td><td>89376</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 72330 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>350</td><td>3</td></tr><tr><td>330</td><td>5</td></tr><tr><td>320</td><td>16</td></tr><tr><td>315</td><td>31</td></tr><tr><td>310</td><td>32</td></tr><tr><td>305</td><td>56</td></tr><tr><td>300</td><td>58</td></tr><tr><td>295</td><td>145</td></tr><tr><td>290</td><td>150</td></tr><tr><td>285</td><td>270</td></tr><tr><td>280</td><td>273</td></tr><tr><td>275</td><td>599</td></tr><tr><td>270</td><td>609</td></tr><tr><td>265</td><td>1202</td></tr><tr><td>260</td><td>1219</td></tr><tr><td>255</td><td>2281</td></tr><tr><td>250</td><td>2297</td></tr><tr><td>245</td><td>4068</td></tr><tr><td>240</td><td>4094</td></tr><tr><td>235</td><td>7096</td></tr><tr><td>230</td><td>7121</td></tr><tr><td>225</td><td>11333</td></tr><tr><td>220</td><td>11351</td></tr><tr><td>215</td><td>17177</td></tr><tr><td>210</td><td>17194</td></tr><tr><td>205</td><td>24077</td></tr><tr><td>200</td><td>24086</td></tr><tr><td>195</td><td>31914</td></tr><tr><td>190</td><td>31923</td></tr><tr><td>185</td><td>38928</td></tr><tr><td>180</td><td>38934</td></tr><tr><td>175</td><td>45133</td></tr><tr><td>170</td><td>45137</td></tr><tr><td>165</td><td>50690</td></tr><tr><td>160</td><td>50692</td></tr><tr><td>150</td><td>55380</td></tr><tr><td>140</td><td>59327</td></tr><tr><td>130</td><td>62342</td></tr><tr><td>120</td><td>64912</td></tr><tr><td>110</td><td>66750</td></tr><tr><td>100</td><td>68193</td></tr><tr><td>90</td><td>69268</td></tr><tr><td>80</td><td>70047</td></tr><tr><td>70</td><td>70594</td></tr><tr><td>60</td><td>70979</td></tr><tr><td>50</td><td>71190</td></tr><tr><td>40</td><td>71394</td></tr><tr><td>30</td><td>71527</td></tr><tr><td>20</td><td>71647</td></tr><tr><td>10</td><td>71727</td></tr><tr><td>0</td><td>71797</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 49612 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>360</td><td>2</td></tr><tr><td>350</td><td>4</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>6</td></tr><tr><td>330</td><td>10</td></tr><tr><td>320</td><td>19</td></tr><tr><td>315</td><td>45</td></tr><tr><td>310</td><td>47</td></tr><tr><td>305</td><td>95</td></tr><tr><td>300</td><td>98</td></tr><tr><td>295</td><td>214</td></tr><tr><td>290</td><td>217</td></tr><tr><td>285</td><td>408</td></tr><tr><td>280</td><td>422</td></tr><tr><td>275</td><td>833</td></tr><tr><td>270</td><td>850</td></tr><tr><td>265</td><td>1607</td></tr><tr><td>260</td><td>1627</td></tr><tr><td>255</td><td>2931</td></tr><tr><td>250</td><td>2956</td></tr><tr><td>245</td><td>5057</td></tr><tr><td>240</td><td>5090</td></tr><tr><td>235</td><td>8270</td></tr><tr><td>230</td><td>8292</td></tr><tr><td>225</td><td>12793</td></tr><tr><td>220</td><td>12813</td></tr><tr><td>215</td><td>18249</td></tr><tr><td>210</td><td>18271</td></tr><tr><td>205</td><td>24316</td></tr><tr><td>200</td><td>24328</td></tr><tr><td>195</td><td>30284</td></tr><tr><td>190</td><td>30290</td></tr><tr><td>185</td><td>34744</td></tr><tr><td>180</td><td>34747</td></tr><tr><td>175</td><td>38258</td></tr><tr><td>170</td><td>38260</td></tr><tr><td>165</td><td>41086</td></tr><tr><td>160</td><td>41088</td></tr><tr><td>155</td><td>43254</td></tr><tr><td>150</td><td>43255</td></tr><tr><td>140</td><td>44860</td></tr><tr><td>130</td><td>46021</td></tr><tr><td>120</td><td>46910</td></tr><tr><td>115</td><td>47597</td></tr><tr><td>110</td><td>47598</td></tr><tr><td>100</td><td>48125</td></tr><tr><td>90</td><td>48469</td></tr><tr><td>80</td><td>48729</td></tr><tr><td>70</td><td>48896</td></tr><tr><td>60</td><td>49049</td></tr><tr><td>50</td><td>49158</td></tr><tr><td>40</td><td>49234</td></tr><tr><td>30</td><td>49291</td></tr><tr><td>20</td><td>49336</td></tr><tr><td>10</td><td>49380</td></tr><tr><td>0</td><td>49404</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 10371 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>390</td><td>1</td></tr><tr><td>350</td><td>2</td></tr><tr><td>340</td><td>6</td></tr><tr><td>335</td><td>12</td></tr><tr><td>330</td><td>13</td></tr><tr><td>325</td><td>30</td></tr><tr><td>320</td><td>31</td></tr><tr><td>315</td><td>59</td></tr><tr><td>310</td><td>66</td></tr><tr><td>305</td><td>103</td></tr><tr><td>300</td><td>105</td></tr><tr><td>295</td><td>189</td></tr><tr><td>290</td><td>194</td></tr><tr><td>285</td><td>339</td></tr><tr><td>280</td><td>342</td></tr><tr><td>275</td><td>591</td></tr><tr><td>270</td><td>604</td></tr><tr><td>265</td><td>983</td></tr><tr><td>260</td><td>993</td></tr><tr><td>255</td><td>1561</td></tr><tr><td>250</td><td>1569</td></tr><tr><td>245</td><td>2313</td></tr><tr><td>240</td><td>2326</td></tr><tr><td>235</td><td>3308</td></tr><tr><td>230</td><td>3315</td></tr><tr><td>225</td><td>4401</td></tr><tr><td>220</td><td>4410</td></tr><tr><td>215</td><td>5562</td></tr><tr><td>210</td><td>5564</td></tr><tr><td>205</td><td>6652</td></tr><tr><td>200</td><td>6655</td></tr><tr><td>195</td><td>7591</td></tr><tr><td>190</td><td>7593</td></tr><tr><td>180</td><td>8282</td></tr><tr><td>175</td><td>8736</td></tr><tr><td>170</td><td>8737</td></tr><tr><td>165</td><td>9116</td></tr><tr><td>160</td><td>9117</td></tr><tr><td>150</td><td>9411</td></tr><tr><td>140</td><td>9617</td></tr><tr><td>130</td><td>9776</td></tr><tr><td>120</td><td>9906</td></tr><tr><td>110</td><td>9998</td></tr><tr><td>100</td><td>10079</td></tr><tr><td>90</td><td>10146</td></tr><tr><td>80</td><td>10181</td></tr><tr><td>70</td><td>10208</td></tr><tr><td>60</td><td>10233</td></tr><tr><td>50</td><td>10252</td></tr><tr><td>40</td><td>10270</td></tr><tr><td>30</td><td>10279</td></tr><tr><td>20</td><td>10295</td></tr><tr><td>10</td><td>10302</td></tr><tr><td>0</td><td>10307</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 6048 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>350</td><td>2</td></tr><tr><td>340</td><td>6</td></tr><tr><td>330</td><td>12</td></tr><tr><td>320</td><td>30</td></tr><tr><td>310</td><td>54</td></tr><tr><td>305</td><td>93</td></tr><tr><td>300</td><td>95</td></tr><tr><td>295</td><td>172</td></tr><tr><td>290</td><td>175</td></tr><tr><td>285</td><td>286</td></tr><tr><td>280</td><td>291</td></tr><tr><td>275</td><td>472</td></tr><tr><td>270</td><td>477</td></tr><tr><td>265</td><td>758</td></tr><tr><td>260</td><td>761</td></tr><tr><td>255</td><td>1175</td></tr><tr><td>250</td><td>1183</td></tr><tr><td>245</td><td>1648</td></tr><tr><td>240</td><td>1651</td></tr><tr><td>235</td><td>2209</td></tr><tr><td>230</td><td>2214</td></tr><tr><td>225</td><td>2819</td></tr><tr><td>220</td><td>2821</td></tr><tr><td>215</td><td>3483</td></tr><tr><td>210</td><td>3485</td></tr><tr><td>205</td><td>4048</td></tr><tr><td>200</td><td>4049</td></tr><tr><td>190</td><td>4561</td></tr><tr><td>180</td><td>4886</td></tr><tr><td>170</td><td>5160</td></tr><tr><td>160</td><td>5372</td></tr><tr><td>150</td><td>5511</td></tr><tr><td>140</td><td>5625</td></tr><tr><td>130</td><td>5700</td></tr><tr><td>125</td><td>5767</td></tr><tr><td>120</td><td>5768</td></tr><tr><td>110</td><td>5831</td></tr><tr><td>100</td><td>5861</td></tr><tr><td>90</td><td>5884</td></tr><tr><td>80</td><td>5923</td></tr><tr><td>70</td><td>5940</td></tr><tr><td>60</td><td>5965</td></tr><tr><td>55</td><td>5980</td></tr><tr><td>50</td><td>5981</td></tr><tr><td>40</td><td>5987</td></tr><tr><td>30</td><td>5998</td></tr><tr><td>20</td><td>6005</td></tr><tr><td>10</td><td>6013</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 2145 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>280</td><td>3</td></tr><tr><td>270</td><td>6</td></tr><tr><td>260</td><td>13</td></tr><tr><td>250</td><td>25</td></tr><tr><td>245</td><td>53</td></tr><tr><td>240</td><td>54</td></tr><tr><td>230</td><td>98</td></tr><tr><td>220</td><td>171</td></tr><tr><td>215</td><td>272</td></tr><tr><td>210</td><td>273</td></tr><tr><td>200</td><td>416</td></tr><tr><td>190</td><td>592</td></tr><tr><td>180</td><td>756</td></tr><tr><td>175</td><td>947</td></tr><tr><td>170</td><td>948</td></tr><tr><td>160</td><td>1111</td></tr><tr><td>150</td><td>1279</td></tr><tr><td>140</td><td>1427</td></tr><tr><td>130</td><td>1543</td></tr><tr><td>120</td><td>1650</td></tr><tr><td>110</td><td>1722</td></tr><tr><td>100</td><td>1807</td></tr><tr><td>90</td><td>1882</td></tr><tr><td>80</td><td>1946</td></tr><tr><td>70</td><td>1995</td></tr><tr><td>60</td><td>2035</td></tr><tr><td>50</td><td>2070</td></tr><tr><td>40</td><td>2087</td></tr><tr><td>30</td><td>2100</td></tr><tr><td>20</td><td>2108</td></tr><tr><td>10</td><td>2116</td></tr><tr><td>0</td><td>2125</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 1172 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>285</td><td>3</td></tr><tr><td>280</td><td>4</td></tr><tr><td>270</td><td>10</td></tr><tr><td>260</td><td>15</td></tr><tr><td>255</td><td>25</td></tr><tr><td>250</td><td>27</td></tr><tr><td>240</td><td>49</td></tr><tr><td>235</td><td>89</td></tr><tr><td>230</td><td>90</td></tr><tr><td>220</td><td>145</td></tr><tr><td>210</td><td>207</td></tr><tr><td>200</td><td>300</td></tr><tr><td>190</td><td>407</td></tr><tr><td>180</td><td>504</td></tr><tr><td>170</td><td>620</td></tr><tr><td>160</td><td>711</td></tr><tr><td>150</td><td>789</td></tr><tr><td>140</td><td>858</td></tr><tr><td>130</td><td>916</td></tr><tr><td>120</td><td>973</td></tr><tr><td>110</td><td>1008</td></tr><tr><td>100</td><td>1045</td></tr><tr><td>90</td><td>1078</td></tr><tr><td>80</td><td>1106</td></tr><tr><td>70</td><td>1126</td></tr><tr><td>60</td><td>1140</td></tr><tr><td>50</td><td>1145</td></tr><tr><td>40</td><td>1151</td></tr><tr><td>30</td><td>1152</td></tr><tr><td>20</td><td>1160</td></tr><tr><td>10</td><td>1163</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 525 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>280</td><td>2</td></tr><tr><td>270</td><td>6</td></tr><tr><td>260</td><td>9</td></tr><tr><td>250</td><td>15</td></tr><tr><td>240</td><td>32</td></tr><tr><td>230</td><td>40</td></tr><tr><td>220</td><td>61</td></tr><tr><td>215</td><td>91</td></tr><tr><td>210</td><td>92</td></tr><tr><td>200</td><td>134</td></tr><tr><td>190</td><td>172</td></tr><tr><td>180</td><td>217</td></tr><tr><td>170</td><td>256</td></tr><tr><td>160</td><td>289</td></tr><tr><td>150</td><td>316</td></tr><tr><td>140</td><td>349</td></tr><tr><td>130</td><td>367</td></tr><tr><td>120</td><td>384</td></tr><tr><td>110</td><td>405</td></tr><tr><td>100</td><td>419</td></tr><tr><td>90</td><td>437</td></tr><tr><td>80</td><td>452</td></tr><tr><td>70</td><td>458</td></tr><tr><td>60</td><td>468</td></tr><tr><td>50</td><td>479</td></tr><tr><td>40</td><td>487</td></tr><tr><td>30</td><td>497</td></tr><tr><td>20</td><td>505</td></tr><tr><td>10</td><td>507</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-16-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation individuelle) : 1723 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-16-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-16-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>250</td><td>1</td></tr><tr><td>240</td><td>2</td></tr><tr><td>230</td><td>7</td></tr><tr><td>220</td><td>12</td></tr><tr><td>210</td><td>28</td></tr><tr><td>200</td><td>55</td></tr><tr><td>190</td><td>107</td></tr><tr><td>180</td><td>160</td></tr><tr><td>170</td><td>217</td></tr><tr><td>160</td><td>288</td></tr><tr><td>150</td><td>372</td></tr><tr><td>145</td><td>472</td></tr><tr><td>140</td><td>473</td></tr><tr><td>130</td><td>589</td></tr><tr><td>120</td><td>716</td></tr><tr><td>110</td><td>843</td></tr><tr><td>100</td><td>984</td></tr><tr><td>90</td><td>1127</td></tr><tr><td>80</td><td>1272</td></tr><tr><td>70</td><td>1381</td></tr><tr><td>60</td><td>1489</td></tr><tr><td>50</td><td>1566</td></tr><tr><td>40</td><td>1618</td></tr><tr><td>30</td><td>1649</td></tr><tr><td>20</td><td>1665</td></tr><tr><td>10</td><td>1676</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-17-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation individuelle) : 1631 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-17-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-17-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>250</td><td>1</td></tr><tr><td>240</td><td>2</td></tr><tr><td>230</td><td>3</td></tr><tr><td>220</td><td>8</td></tr><tr><td>215</td><td>13</td></tr><tr><td>210</td><td>14</td></tr><tr><td>200</td><td>31</td></tr><tr><td>190</td><td>55</td></tr><tr><td>180</td><td>91</td></tr><tr><td>170</td><td>143</td></tr><tr><td>160</td><td>188</td></tr><tr><td>150</td><td>255</td></tr><tr><td>140</td><td>330</td></tr><tr><td>130</td><td>424</td></tr><tr><td>120</td><td>582</td></tr><tr><td>110</td><td>732</td></tr><tr><td>100</td><td>892</td></tr><tr><td>90</td><td>1022</td></tr><tr><td>80</td><td>1177</td></tr><tr><td>70</td><td>1304</td></tr><tr><td>60</td><td>1413</td></tr><tr><td>50</td><td>1480</td></tr><tr><td>40</td><td>1540</td></tr><tr><td>30</td><td>1575</td></tr><tr><td>20</td><td>1586</td></tr><tr><td>10</td><td>1593</td></tr><tr><td>0</td><td>1603</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 1296 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>350</td><td>1</td></tr><tr><td>270</td><td>2</td></tr><tr><td>240</td><td>4</td></tr><tr><td>230</td><td>9</td></tr><tr><td>220</td><td>12</td></tr><tr><td>210</td><td>24</td></tr><tr><td>200</td><td>47</td></tr><tr><td>190</td><td>81</td></tr><tr><td>180</td><td>128</td></tr><tr><td>170</td><td>174</td></tr><tr><td>160</td><td>235</td></tr><tr><td>150</td><td>306</td></tr><tr><td>140</td><td>383</td></tr><tr><td>130</td><td>493</td></tr><tr><td>120</td><td>603</td></tr><tr><td>110</td><td>709</td></tr><tr><td>100</td><td>847</td></tr><tr><td>90</td><td>957</td></tr><tr><td>80</td><td>1037</td></tr><tr><td>70</td><td>1103</td></tr><tr><td>60</td><td>1156</td></tr><tr><td>50</td><td>1203</td></tr><tr><td>40</td><td>1236</td></tr><tr><td>30</td><td>1252</td></tr><tr><td>20</td><td>1265</td></tr><tr><td>10</td><td>1266</td></tr><tr><td>0</td><td>1270</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 999 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>4</td></tr><tr><td>245</td><td>10</td></tr><tr><td>240</td><td>11</td></tr><tr><td>230</td><td>15</td></tr><tr><td>220</td><td>26</td></tr><tr><td>210</td><td>42</td></tr><tr><td>205</td><td>69</td></tr><tr><td>200</td><td>70</td></tr><tr><td>190</td><td>105</td></tr><tr><td>180</td><td>144</td></tr><tr><td>170</td><td>194</td></tr><tr><td>160</td><td>242</td></tr><tr><td>150</td><td>319</td></tr><tr><td>140</td><td>393</td></tr><tr><td>130</td><td>469</td></tr><tr><td>120</td><td>553</td></tr><tr><td>110</td><td>624</td></tr><tr><td>100</td><td>696</td></tr><tr><td>90</td><td>765</td></tr><tr><td>80</td><td>827</td></tr><tr><td>70</td><td>871</td></tr><tr><td>60</td><td>909</td></tr><tr><td>50</td><td>940</td></tr><tr><td>40</td><td>960</td></tr><tr><td>30</td><td>970</td></tr><tr><td>20</td><td>980</td></tr><tr><td>10</td><td>982</td></tr><tr><td>0</td><td>987</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 3594 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>3</td></tr><tr><td>240</td><td>4</td></tr><tr><td>230</td><td>6</td></tr><tr><td>220</td><td>18</td></tr><tr><td>210</td><td>45</td></tr><tr><td>200</td><td>78</td></tr><tr><td>190</td><td>148</td></tr><tr><td>180</td><td>235</td></tr><tr><td>170</td><td>339</td></tr><tr><td>160</td><td>505</td></tr><tr><td>150</td><td>714</td></tr><tr><td>140</td><td>945</td></tr><tr><td>130</td><td>1203</td></tr><tr><td>120</td><td>1499</td></tr><tr><td>110</td><td>1859</td></tr><tr><td>100</td><td>2192</td></tr><tr><td>90</td><td>2541</td></tr><tr><td>80</td><td>2842</td></tr><tr><td>70</td><td>3068</td></tr><tr><td>60</td><td>3241</td></tr><tr><td>50</td><td>3380</td></tr><tr><td>40</td><td>3441</td></tr><tr><td>30</td><td>3478</td></tr><tr><td>20</td><td>3496</td></tr><tr><td>10</td><td>3513</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 5913 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>270</td><td>1</td></tr><tr><td>260</td><td>3</td></tr><tr><td>250</td><td>7</td></tr><tr><td>245</td><td>13</td></tr><tr><td>240</td><td>14</td></tr><tr><td>230</td><td>31</td></tr><tr><td>220</td><td>69</td></tr><tr><td>210</td><td>152</td></tr><tr><td>200</td><td>290</td></tr><tr><td>190</td><td>568</td></tr><tr><td>180</td><td>936</td></tr><tr><td>170</td><td>1341</td></tr><tr><td>160</td><td>1776</td></tr><tr><td>150</td><td>2353</td></tr><tr><td>140</td><td>2880</td></tr><tr><td>130</td><td>3391</td></tr><tr><td>120</td><td>3927</td></tr><tr><td>110</td><td>4377</td></tr><tr><td>100</td><td>4809</td></tr><tr><td>90</td><td>5146</td></tr><tr><td>80</td><td>5377</td></tr><tr><td>70</td><td>5561</td></tr><tr><td>60</td><td>5694</td></tr><tr><td>50</td><td>5775</td></tr><tr><td>40</td><td>5812</td></tr><tr><td>30</td><td>5831</td></tr><tr><td>20</td><td>5839</td></tr><tr><td>10</td><td>5851</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation en binôme) : 36936 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>290</td><td>3</td></tr><tr><td>280</td><td>5</td></tr><tr><td>270</td><td>9</td></tr><tr><td>260</td><td>29</td></tr><tr><td>255</td><td>69</td></tr><tr><td>250</td><td>71</td></tr><tr><td>245</td><td>123</td></tr><tr><td>240</td><td>124</td></tr><tr><td>230</td><td>337</td></tr><tr><td>225</td><td>691</td></tr><tr><td>220</td><td>695</td></tr><tr><td>215</td><td>1576</td></tr><tr><td>210</td><td>1582</td></tr><tr><td>205</td><td>3326</td></tr><tr><td>200</td><td>3328</td></tr><tr><td>195</td><td>6485</td></tr><tr><td>190</td><td>6487</td></tr><tr><td>180</td><td>9839</td></tr><tr><td>170</td><td>13043</td></tr><tr><td>160</td><td>16428</td></tr><tr><td>150</td><td>19784</td></tr><tr><td>140</td><td>22876</td></tr><tr><td>135</td><td>25700</td></tr><tr><td>130</td><td>25702</td></tr><tr><td>120</td><td>28222</td></tr><tr><td>110</td><td>30440</td></tr><tr><td>100</td><td>32261</td></tr><tr><td>90</td><td>33672</td></tr><tr><td>80</td><td>34699</td></tr><tr><td>70</td><td>35399</td></tr><tr><td>60</td><td>35903</td></tr><tr><td>50</td><td>36221</td></tr><tr><td>40</td><td>36396</td></tr><tr><td>30</td><td>36485</td></tr><tr><td>20</td><td>36530</td></tr><tr><td>15</td><td>36573</td></tr><tr><td>10</td><td>36575</td></tr><tr><td>0</td><td>36625</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation en binôme) : 51304 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>290</td><td>7</td></tr><tr><td>285</td><td>15</td></tr><tr><td>280</td><td>17</td></tr><tr><td>275</td><td>39</td></tr><tr><td>270</td><td>45</td></tr><tr><td>265</td><td>115</td></tr><tr><td>260</td><td>117</td></tr><tr><td>255</td><td>311</td></tr><tr><td>250</td><td>313</td></tr><tr><td>245</td><td>707</td></tr><tr><td>240</td><td>713</td></tr><tr><td>235</td><td>1603</td></tr><tr><td>230</td><td>1605</td></tr><tr><td>225</td><td>3251</td></tr><tr><td>220</td><td>3265</td></tr><tr><td>215</td><td>5808</td></tr><tr><td>210</td><td>5820</td></tr><tr><td>205</td><td>10041</td></tr><tr><td>200</td><td>10043</td></tr><tr><td>190</td><td>15852</td></tr><tr><td>185</td><td>21438</td></tr><tr><td>180</td><td>21440</td></tr><tr><td>170</td><td>26453</td></tr><tr><td>165</td><td>31053</td></tr><tr><td>160</td><td>31057</td></tr><tr><td>155</td><td>35074</td></tr><tr><td>150</td><td>35076</td></tr><tr><td>140</td><td>38732</td></tr><tr><td>130</td><td>41675</td></tr><tr><td>120</td><td>44206</td></tr><tr><td>110</td><td>46109</td></tr><tr><td>100</td><td>47600</td></tr><tr><td>90</td><td>48780</td></tr><tr><td>80</td><td>49542</td></tr><tr><td>70</td><td>50022</td></tr><tr><td>60</td><td>50332</td></tr><tr><td>50</td><td>50562</td></tr><tr><td>40</td><td>50702</td></tr><tr><td>30</td><td>50760</td></tr><tr><td>20</td><td>50798</td></tr><tr><td>10</td><td>50851</td></tr><tr><td>0</td><td>50876</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 44403 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>320</td><td>3</td></tr><tr><td>310</td><td>5</td></tr><tr><td>300</td><td>11</td></tr><tr><td>290</td><td>27</td></tr><tr><td>280</td><td>73</td></tr><tr><td>275</td><td>175</td></tr><tr><td>270</td><td>177</td></tr><tr><td>265</td><td>404</td></tr><tr><td>260</td><td>406</td></tr><tr><td>255</td><td>844</td></tr><tr><td>250</td><td>854</td></tr><tr><td>245</td><td>1740</td></tr><tr><td>240</td><td>1756</td></tr><tr><td>235</td><td>3433</td></tr><tr><td>230</td><td>3445</td></tr><tr><td>225</td><td>5978</td></tr><tr><td>220</td><td>5998</td></tr><tr><td>215</td><td>9558</td></tr><tr><td>210</td><td>9575</td></tr><tr><td>205</td><td>14287</td></tr><tr><td>200</td><td>14295</td></tr><tr><td>195</td><td>19635</td></tr><tr><td>190</td><td>19641</td></tr><tr><td>185</td><td>24187</td></tr><tr><td>180</td><td>24193</td></tr><tr><td>175</td><td>28188</td></tr><tr><td>170</td><td>28190</td></tr><tr><td>160</td><td>31606</td></tr><tr><td>155</td><td>34528</td></tr><tr><td>150</td><td>34530</td></tr><tr><td>140</td><td>36836</td></tr><tr><td>130</td><td>38695</td></tr><tr><td>120</td><td>40173</td></tr><tr><td>110</td><td>41328</td></tr><tr><td>100</td><td>42256</td></tr><tr><td>90</td><td>42927</td></tr><tr><td>80</td><td>43369</td></tr><tr><td>70</td><td>43652</td></tr><tr><td>60</td><td>43832</td></tr><tr><td>50</td><td>43943</td></tr><tr><td>40</td><td>43997</td></tr><tr><td>30</td><td>44024</td></tr><tr><td>20</td><td>44048</td></tr><tr><td>10</td><td>44065</td></tr><tr><td>0</td><td>44107</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 33770 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>340</td><td>1</td></tr><tr><td>320</td><td>5</td></tr><tr><td>315</td><td>13</td></tr><tr><td>310</td><td>15</td></tr><tr><td>300</td><td>29</td></tr><tr><td>295</td><td>67</td></tr><tr><td>290</td><td>69</td></tr><tr><td>285</td><td>147</td></tr><tr><td>280</td><td>149</td></tr><tr><td>275</td><td>352</td></tr><tr><td>270</td><td>356</td></tr><tr><td>265</td><td>787</td></tr><tr><td>260</td><td>797</td></tr><tr><td>255</td><td>1515</td></tr><tr><td>250</td><td>1527</td></tr><tr><td>245</td><td>2847</td></tr><tr><td>240</td><td>2859</td></tr><tr><td>235</td><td>4875</td></tr><tr><td>230</td><td>4885</td></tr><tr><td>225</td><td>7600</td></tr><tr><td>220</td><td>7606</td></tr><tr><td>215</td><td>11221</td></tr><tr><td>210</td><td>11229</td></tr><tr><td>205</td><td>15185</td></tr><tr><td>200</td><td>15193</td></tr><tr><td>190</td><td>19106</td></tr><tr><td>185</td><td>22290</td></tr><tr><td>180</td><td>22296</td></tr><tr><td>170</td><td>24914</td></tr><tr><td>160</td><td>27025</td></tr><tr><td>150</td><td>28645</td></tr><tr><td>140</td><td>29935</td></tr><tr><td>135</td><td>30802</td></tr><tr><td>130</td><td>30804</td></tr><tr><td>120</td><td>31543</td></tr><tr><td>110</td><td>32111</td></tr><tr><td>100</td><td>32533</td></tr><tr><td>90</td><td>32829</td></tr><tr><td>80</td><td>33052</td></tr><tr><td>70</td><td>33191</td></tr><tr><td>60</td><td>33296</td></tr><tr><td>50</td><td>33382</td></tr><tr><td>40</td><td>33427</td></tr><tr><td>30</td><td>33469</td></tr><tr><td>20</td><td>33482</td></tr><tr><td>10</td><td>33522</td></tr><tr><td>0</td><td>33551</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 14256 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>330</td><td>1</td></tr><tr><td>320</td><td>5</td></tr><tr><td>315</td><td>11</td></tr><tr><td>310</td><td>13</td></tr><tr><td>300</td><td>25</td></tr><tr><td>295</td><td>44</td></tr><tr><td>290</td><td>46</td></tr><tr><td>285</td><td>113</td></tr><tr><td>280</td><td>121</td></tr><tr><td>275</td><td>261</td></tr><tr><td>270</td><td>267</td></tr><tr><td>265</td><td>515</td></tr><tr><td>260</td><td>519</td></tr><tr><td>255</td><td>983</td></tr><tr><td>250</td><td>987</td></tr><tr><td>245</td><td>1753</td></tr><tr><td>240</td><td>1765</td></tr><tr><td>235</td><td>2848</td></tr><tr><td>230</td><td>2858</td></tr><tr><td>225</td><td>4346</td></tr><tr><td>220</td><td>4356</td></tr><tr><td>215</td><td>6190</td></tr><tr><td>210</td><td>6196</td></tr><tr><td>205</td><td>8151</td></tr><tr><td>200</td><td>8153</td></tr><tr><td>195</td><td>9818</td></tr><tr><td>190</td><td>9820</td></tr><tr><td>185</td><td>10989</td></tr><tr><td>180</td><td>10995</td></tr><tr><td>175</td><td>11792</td></tr><tr><td>170</td><td>11796</td></tr><tr><td>160</td><td>12361</td></tr><tr><td>150</td><td>12817</td></tr><tr><td>140</td><td>13144</td></tr><tr><td>130</td><td>13416</td></tr><tr><td>120</td><td>13582</td></tr><tr><td>110</td><td>13716</td></tr><tr><td>100</td><td>13823</td></tr><tr><td>90</td><td>13913</td></tr><tr><td>80</td><td>13971</td></tr><tr><td>70</td><td>14036</td></tr><tr><td>60</td><td>14062</td></tr><tr><td>50</td><td>14084</td></tr><tr><td>40</td><td>14112</td></tr><tr><td>30</td><td>14124</td></tr><tr><td>20</td><td>14135</td></tr><tr><td>10</td><td>14145</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 3367 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>340</td><td>3</td></tr><tr><td>330</td><td>5</td></tr><tr><td>320</td><td>11</td></tr><tr><td>310</td><td>19</td></tr><tr><td>300</td><td>29</td></tr><tr><td>295</td><td>62</td></tr><tr><td>290</td><td>64</td></tr><tr><td>280</td><td>108</td></tr><tr><td>270</td><td>164</td></tr><tr><td>265</td><td>282</td></tr><tr><td>260</td><td>286</td></tr><tr><td>255</td><td>470</td></tr><tr><td>250</td><td>472</td></tr><tr><td>245</td><td>758</td></tr><tr><td>240</td><td>762</td></tr><tr><td>230</td><td>1086</td></tr><tr><td>220</td><td>1433</td></tr><tr><td>215</td><td>1813</td></tr><tr><td>210</td><td>1815</td></tr><tr><td>200</td><td>2216</td></tr><tr><td>190</td><td>2544</td></tr><tr><td>180</td><td>2761</td></tr><tr><td>170</td><td>2904</td></tr><tr><td>160</td><td>2988</td></tr><tr><td>150</td><td>3089</td></tr><tr><td>140</td><td>3147</td></tr><tr><td>130</td><td>3200</td></tr><tr><td>120</td><td>3238</td></tr><tr><td>110</td><td>3259</td></tr><tr><td>100</td><td>3274</td></tr><tr><td>90</td><td>3284</td></tr><tr><td>80</td><td>3294</td></tr><tr><td>70</td><td>3306</td></tr><tr><td>60</td><td>3317</td></tr><tr><td>50</td><td>3322</td></tr><tr><td>40</td><td>3324</td></tr><tr><td>30</td><td>3330</td></tr><tr><td>20</td><td>3333</td></tr><tr><td>10</td><td>3335</td></tr><tr><td>0</td><td>3341</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 2545 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>340</td><td>3</td></tr><tr><td>330</td><td>5</td></tr><tr><td>320</td><td>11</td></tr><tr><td>310</td><td>19</td></tr><tr><td>305</td><td>33</td></tr><tr><td>300</td><td>37</td></tr><tr><td>295</td><td>73</td></tr><tr><td>290</td><td>77</td></tr><tr><td>280</td><td>127</td></tr><tr><td>275</td><td>197</td></tr><tr><td>270</td><td>199</td></tr><tr><td>265</td><td>313</td></tr><tr><td>260</td><td>317</td></tr><tr><td>255</td><td>454</td></tr><tr><td>250</td><td>458</td></tr><tr><td>245</td><td>652</td></tr><tr><td>240</td><td>656</td></tr><tr><td>235</td><td>906</td></tr><tr><td>230</td><td>908</td></tr><tr><td>225</td><td>1176</td></tr><tr><td>220</td><td>1180</td></tr><tr><td>210</td><td>1483</td></tr><tr><td>200</td><td>1750</td></tr><tr><td>190</td><td>1974</td></tr><tr><td>180</td><td>2118</td></tr><tr><td>170</td><td>2198</td></tr><tr><td>160</td><td>2263</td></tr><tr><td>150</td><td>2303</td></tr><tr><td>140</td><td>2342</td></tr><tr><td>130</td><td>2392</td></tr><tr><td>120</td><td>2416</td></tr><tr><td>110</td><td>2444</td></tr><tr><td>100</td><td>2461</td></tr><tr><td>90</td><td>2473</td></tr><tr><td>80</td><td>2481</td></tr><tr><td>70</td><td>2496</td></tr><tr><td>60</td><td>2506</td></tr><tr><td>50</td><td>2512</td></tr><tr><td>40</td><td>2514</td></tr><tr><td>30</td><td>2516</td></tr><tr><td>20</td><td>2520</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 342 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>260</td><td>2</td></tr><tr><td>250</td><td>4</td></tr><tr><td>240</td><td>16</td></tr><tr><td>230</td><td>23</td></tr><tr><td>220</td><td>35</td></tr><tr><td>210</td><td>41</td></tr><tr><td>200</td><td>73</td></tr><tr><td>190</td><td>109</td></tr><tr><td>180</td><td>133</td></tr><tr><td>170</td><td>151</td></tr><tr><td>160</td><td>181</td></tr><tr><td>150</td><td>206</td></tr><tr><td>140</td><td>230</td></tr><tr><td>130</td><td>249</td></tr><tr><td>120</td><td>270</td></tr><tr><td>110</td><td>286</td></tr><tr><td>100</td><td>304</td></tr><tr><td>90</td><td>316</td></tr><tr><td>80</td><td>323</td></tr><tr><td>70</td><td>331</td></tr><tr><td>30</td><td>337</td></tr><tr><td>10</td><td>339</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 151 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>270</td><td>1</td></tr><tr><td>260</td><td>3</td></tr><tr><td>250</td><td>4</td></tr><tr><td>240</td><td>9</td></tr><tr><td>230</td><td>15</td></tr><tr><td>220</td><td>19</td></tr><tr><td>210</td><td>36</td></tr><tr><td>200</td><td>48</td></tr><tr><td>190</td><td>64</td></tr><tr><td>180</td><td>78</td></tr><tr><td>170</td><td>89</td></tr><tr><td>160</td><td>99</td></tr><tr><td>150</td><td>109</td></tr><tr><td>140</td><td>112</td></tr><tr><td>130</td><td>124</td></tr><tr><td>110</td><td>132</td></tr><tr><td>100</td><td>137</td></tr><tr><td>90</td><td>139</td></tr><tr><td>60</td><td>141</td></tr><tr><td>30</td><td>143</td></tr><tr><td>10</td><td>145</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 210 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>5</td></tr><tr><td>240</td><td>9</td></tr><tr><td>230</td><td>17</td></tr><tr><td>220</td><td>24</td></tr><tr><td>210</td><td>38</td></tr><tr><td>200</td><td>55</td></tr><tr><td>190</td><td>88</td></tr><tr><td>180</td><td>110</td></tr><tr><td>170</td><td>119</td></tr><tr><td>160</td><td>134</td></tr><tr><td>150</td><td>146</td></tr><tr><td>140</td><td>150</td></tr><tr><td>130</td><td>161</td></tr><tr><td>120</td><td>168</td></tr><tr><td>110</td><td>172</td></tr><tr><td>100</td><td>176</td></tr><tr><td>80</td><td>186</td></tr><tr><td>70</td><td>190</td></tr><tr><td>60</td><td>195</td></tr><tr><td>50</td><td>197</td></tr><tr><td>40</td><td>201</td></tr><tr><td>30</td><td>202</td></tr><tr><td>20</td><td>205</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-16-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation en binôme) : 308 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-16-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-16-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>250</td><td>1</td></tr><tr><td>230</td><td>2</td></tr><tr><td>220</td><td>3</td></tr><tr><td>210</td><td>9</td></tr><tr><td>200</td><td>18</td></tr><tr><td>190</td><td>28</td></tr><tr><td>180</td><td>37</td></tr><tr><td>170</td><td>54</td></tr><tr><td>160</td><td>74</td></tr><tr><td>150</td><td>82</td></tr><tr><td>140</td><td>115</td></tr><tr><td>130</td><td>136</td></tr><tr><td>120</td><td>146</td></tr><tr><td>110</td><td>175</td></tr><tr><td>100</td><td>199</td></tr><tr><td>90</td><td>214</td></tr><tr><td>80</td><td>223</td></tr><tr><td>70</td><td>248</td></tr><tr><td>60</td><td>262</td></tr><tr><td>50</td><td>272</td></tr><tr><td>40</td><td>276</td></tr><tr><td>10</td><td>280</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-17-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation en binôme) : 542 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-17-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-17-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>240</td><td>1</td></tr><tr><td>230</td><td>3</td></tr><tr><td>220</td><td>5</td></tr><tr><td>210</td><td>13</td></tr><tr><td>200</td><td>19</td></tr><tr><td>190</td><td>33</td></tr><tr><td>180</td><td>56</td></tr><tr><td>170</td><td>88</td></tr><tr><td>160</td><td>115</td></tr><tr><td>150</td><td>153</td></tr><tr><td>140</td><td>185</td></tr><tr><td>130</td><td>230</td></tr><tr><td>120</td><td>279</td></tr><tr><td>110</td><td>331</td></tr><tr><td>100</td><td>366</td></tr><tr><td>90</td><td>408</td></tr><tr><td>80</td><td>457</td></tr><tr><td>70</td><td>486</td></tr><tr><td>60</td><td>502</td></tr><tr><td>50</td><td>511</td></tr><tr><td>40</td><td>521</td></tr><tr><td>30</td><td>523</td></tr><tr><td>10</td><td>525</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 440 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>5</td></tr><tr><td>240</td><td>10</td></tr><tr><td>230</td><td>15</td></tr><tr><td>220</td><td>23</td></tr><tr><td>215</td><td>39</td></tr><tr><td>210</td><td>40</td></tr><tr><td>200</td><td>56</td></tr><tr><td>190</td><td>91</td></tr><tr><td>180</td><td>119</td></tr><tr><td>170</td><td>147</td></tr><tr><td>160</td><td>171</td></tr><tr><td>150</td><td>194</td></tr><tr><td>140</td><td>215</td></tr><tr><td>130</td><td>241</td></tr><tr><td>120</td><td>270</td></tr><tr><td>110</td><td>302</td></tr><tr><td>100</td><td>332</td></tr><tr><td>90</td><td>345</td></tr><tr><td>80</td><td>356</td></tr><tr><td>70</td><td>371</td></tr><tr><td>60</td><td>387</td></tr><tr><td>40</td><td>394</td></tr><tr><td>30</td><td>400</td></tr><tr><td>20</td><td>401</td></tr><tr><td>10</td><td>405</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-260175949304900373-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 402 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-260175949304900373-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-260175949304900373-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>260</td><td>2</td></tr><tr><td>250</td><td>4</td></tr><tr><td>240</td><td>10</td></tr><tr><td>230</td><td>20</td></tr><tr><td>220</td><td>44</td></tr><tr><td>210</td><td>68</td></tr><tr><td>200</td><td>87</td></tr><tr><td>190</td><td>115</td></tr><tr><td>180</td><td>143</td></tr><tr><td>170</td><td>168</td></tr><tr><td>160</td><td>197</td></tr><tr><td>150</td><td>229</td></tr><tr><td>140</td><td>258</td></tr><tr><td>130</td><td>281</td></tr><tr><td>120</td><td>302</td></tr><tr><td>110</td><td>322</td></tr><tr><td>100</td><td>340</td></tr><tr><td>90</td><td>349</td></tr><tr><td>80</td><td>361</td></tr><tr><td>70</td><td>366</td></tr><tr><td>60</td><td>371</td></tr><tr><td>50</td><td>372</td></tr><tr><td>40</td><td>376</td></tr><tr><td>30</td><td>377</td></tr><tr><td>20</td><td>379</td></tr><tr><td>10</td><td>381</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
