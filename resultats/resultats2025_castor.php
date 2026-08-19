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

<!--<li>653692 élèves ont participé, dont 0% de filles.</li>
<li>3806 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-634953296154205910-4-1'><a href='#tabs-634953296154205910-4-1'>CM1</a></li><li class='nbContestants1' id='link-634953296154205910-5-1'><a href='#tabs-634953296154205910-5-1'>CM2</a></li><li class='nbContestants1' id='link-634953296154205910-6-1'><a href='#tabs-634953296154205910-6-1'>6e</a></li><li class='nbContestants1' id='link-634953296154205910-7-1'><a href='#tabs-634953296154205910-7-1'>5e</a></li><li class='nbContestants1' id='link-634953296154205910-8-1'><a href='#tabs-634953296154205910-8-1'>4e</a></li><li class='nbContestants1' id='link-634953296154205910-9-1'><a href='#tabs-634953296154205910-9-1'>3e</a></li><li class='nbContestants1' id='link-634953296154205910-10-1'><a href='#tabs-634953296154205910-10-1'>2de</a></li><li class='nbContestants1' id='link-634953296154205910-11-1'><a href='#tabs-634953296154205910-11-1'>1re</a></li><li class='nbContestants1' id='link-634953296154205910-12-1'><a href='#tabs-634953296154205910-12-1'>Tale</a></li><li class='nbContestants1' id='link-634953296154205910-13-1'><a href='#tabs-634953296154205910-13-1'>2de pro.</a></li><li class='nbContestants1' id='link-634953296154205910-14-1'><a href='#tabs-634953296154205910-14-1'>1re pro.</a></li><li class='nbContestants1' id='link-634953296154205910-15-1'><a href='#tabs-634953296154205910-15-1'>Tale pro.</a></li><li class='nbContestants1' id='link-634953296154205910-16-1'><a href='#tabs-634953296154205910-16-1'>6e Segpa</a></li><li class='nbContestants1' id='link-634953296154205910-17-1'><a href='#tabs-634953296154205910-17-1'>5e Segpa</a></li><li class='nbContestants1' id='link-634953296154205910-18-1'><a href='#tabs-634953296154205910-18-1'>4e Segpa</a></li><li class='nbContestants1' id='link-634953296154205910-19-1'><a href='#tabs-634953296154205910-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-634953296154205910-4-2'><a href='#tabs-634953296154205910-4-2'>CM1</a></li><li class='nbContestants2' id='link-634953296154205910-5-2'><a href='#tabs-634953296154205910-5-2'>CM2</a></li><li class='nbContestants2' id='link-634953296154205910-6-2'><a href='#tabs-634953296154205910-6-2'>6e</a></li><li class='nbContestants2' id='link-634953296154205910-7-2'><a href='#tabs-634953296154205910-7-2'>5e</a></li><li class='nbContestants2' id='link-634953296154205910-8-2'><a href='#tabs-634953296154205910-8-2'>4e</a></li><li class='nbContestants2' id='link-634953296154205910-9-2'><a href='#tabs-634953296154205910-9-2'>3e</a></li><li class='nbContestants2' id='link-634953296154205910-10-2'><a href='#tabs-634953296154205910-10-2'>2de</a></li><li class='nbContestants2' id='link-634953296154205910-11-2'><a href='#tabs-634953296154205910-11-2'>1re</a></li><li class='nbContestants2' id='link-634953296154205910-12-2'><a href='#tabs-634953296154205910-12-2'>Tale</a></li><li class='nbContestants2' id='link-634953296154205910-13-2'><a href='#tabs-634953296154205910-13-2'>2de pro.</a></li><li class='nbContestants2' id='link-634953296154205910-14-2'><a href='#tabs-634953296154205910-14-2'>1re pro.</a></li><li class='nbContestants2' id='link-634953296154205910-15-2'><a href='#tabs-634953296154205910-15-2'>Tale pro.</a></li><li class='nbContestants2' id='link-634953296154205910-16-2'><a href='#tabs-634953296154205910-16-2'>6e Segpa</a></li><li class='nbContestants2' id='link-634953296154205910-17-2'><a href='#tabs-634953296154205910-17-2'>5e Segpa</a></li><li class='nbContestants2' id='link-634953296154205910-18-2'><a href='#tabs-634953296154205910-18-2'>4e Segpa</a></li><li class='nbContestants2' id='link-634953296154205910-19-2'><a href='#tabs-634953296154205910-19-2'>3e Segpa</a></li></ul><div id='tabs-634953296154205910-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 4181 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>305</td><td>2</td></tr><tr><td>290</td><td>3</td></tr><tr><td>285</td><td>4</td></tr><tr><td>280</td><td>5</td></tr><tr><td>270</td><td>6</td></tr><tr><td>265</td><td>8</td></tr><tr><td>260</td><td>14</td></tr><tr><td>255</td><td>23</td></tr><tr><td>250</td><td>26</td></tr><tr><td>245</td><td>31</td></tr><tr><td>240</td><td>35</td></tr><tr><td>235</td><td>45</td></tr><tr><td>230</td><td>59</td></tr><tr><td>225</td><td>72</td></tr><tr><td>220</td><td>96</td></tr><tr><td>215</td><td>122</td></tr><tr><td>210</td><td>166</td></tr><tr><td>205</td><td>212</td></tr><tr><td>200</td><td>277</td></tr><tr><td>195</td><td>360</td></tr><tr><td>190</td><td>457</td></tr><tr><td>185</td><td>557</td></tr><tr><td>180</td><td>661</td></tr><tr><td>175</td><td>773</td></tr><tr><td>170</td><td>867</td></tr><tr><td>165</td><td>1011</td></tr><tr><td>160</td><td>1129</td></tr><tr><td>155</td><td>1307</td></tr><tr><td>150</td><td>1446</td></tr><tr><td>145</td><td>1634</td></tr><tr><td>140</td><td>1765</td></tr><tr><td>135</td><td>1959</td></tr><tr><td>130</td><td>2088</td></tr><tr><td>125</td><td>2324</td></tr><tr><td>120</td><td>2441</td></tr><tr><td>115</td><td>2689</td></tr><tr><td>110</td><td>2779</td></tr><tr><td>105</td><td>3012</td></tr><tr><td>100</td><td>3099</td></tr><tr><td>95</td><td>3296</td></tr><tr><td>90</td><td>3363</td></tr><tr><td>85</td><td>3520</td></tr><tr><td>80</td><td>3565</td></tr><tr><td>75</td><td>3686</td></tr><tr><td>70</td><td>3718</td></tr><tr><td>65</td><td>3831</td></tr><tr><td>60</td><td>3854</td></tr><tr><td>55</td><td>3919</td></tr><tr><td>50</td><td>3926</td></tr><tr><td>45</td><td>3980</td></tr><tr><td>40</td><td>3985</td></tr><tr><td>35</td><td>4016</td></tr><tr><td>30</td><td>4018</td></tr><tr><td>25</td><td>4039</td></tr><tr><td>20</td><td>4041</td></tr><tr><td>10</td><td>4065</td></tr><tr><td>0</td><td>4074</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 6964 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>340</td><td>2</td></tr><tr><td>315</td><td>3</td></tr><tr><td>300</td><td>4</td></tr><tr><td>290</td><td>5</td></tr><tr><td>285</td><td>8</td></tr><tr><td>280</td><td>9</td></tr><tr><td>275</td><td>12</td></tr><tr><td>270</td><td>19</td></tr><tr><td>265</td><td>30</td></tr><tr><td>260</td><td>36</td></tr><tr><td>255</td><td>49</td></tr><tr><td>250</td><td>67</td></tr><tr><td>245</td><td>97</td></tr><tr><td>240</td><td>130</td></tr><tr><td>235</td><td>174</td></tr><tr><td>230</td><td>223</td></tr><tr><td>225</td><td>282</td></tr><tr><td>220</td><td>385</td></tr><tr><td>215</td><td>487</td></tr><tr><td>210</td><td>635</td></tr><tr><td>205</td><td>790</td></tr><tr><td>200</td><td>1009</td></tr><tr><td>195</td><td>1236</td></tr><tr><td>190</td><td>1463</td></tr><tr><td>185</td><td>1696</td></tr><tr><td>180</td><td>1969</td></tr><tr><td>175</td><td>2244</td></tr><tr><td>170</td><td>2524</td></tr><tr><td>165</td><td>2832</td></tr><tr><td>160</td><td>3088</td></tr><tr><td>155</td><td>3443</td></tr><tr><td>150</td><td>3687</td></tr><tr><td>145</td><td>4025</td></tr><tr><td>140</td><td>4255</td></tr><tr><td>135</td><td>4577</td></tr><tr><td>130</td><td>4771</td></tr><tr><td>125</td><td>5082</td></tr><tr><td>120</td><td>5237</td></tr><tr><td>115</td><td>5542</td></tr><tr><td>110</td><td>5684</td></tr><tr><td>105</td><td>5949</td></tr><tr><td>100</td><td>6050</td></tr><tr><td>95</td><td>6234</td></tr><tr><td>90</td><td>6297</td></tr><tr><td>85</td><td>6434</td></tr><tr><td>80</td><td>6470</td></tr><tr><td>75</td><td>6578</td></tr><tr><td>70</td><td>6610</td></tr><tr><td>65</td><td>6682</td></tr><tr><td>60</td><td>6699</td></tr><tr><td>55</td><td>6753</td></tr><tr><td>50</td><td>6755</td></tr><tr><td>45</td><td>6783</td></tr><tr><td>40</td><td>6785</td></tr><tr><td>35</td><td>6809</td></tr><tr><td>30</td><td>6812</td></tr><tr><td>25</td><td>6825</td></tr><tr><td>20</td><td>6826</td></tr><tr><td>10</td><td>6844</td></tr><tr><td>0</td><td>6854</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation individuelle) : 103320 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>385</td><td>2</td></tr><tr><td>370</td><td>3</td></tr><tr><td>360</td><td>6</td></tr><tr><td>355</td><td>9</td></tr><tr><td>345</td><td>11</td></tr><tr><td>340</td><td>12</td></tr><tr><td>335</td><td>13</td></tr><tr><td>330</td><td>15</td></tr><tr><td>325</td><td>16</td></tr><tr><td>320</td><td>19</td></tr><tr><td>315</td><td>20</td></tr><tr><td>310</td><td>26</td></tr><tr><td>305</td><td>37</td></tr><tr><td>300</td><td>42</td></tr><tr><td>295</td><td>59</td></tr><tr><td>290</td><td>81</td></tr><tr><td>285</td><td>112</td></tr><tr><td>280</td><td>160</td></tr><tr><td>276</td><td>218</td></tr><tr><td>275</td><td>219</td></tr><tr><td>270</td><td>302</td></tr><tr><td>265</td><td>405</td></tr><tr><td>260</td><td>567</td></tr><tr><td>255</td><td>787</td></tr><tr><td>250</td><td>1095</td></tr><tr><td>245</td><td>1540</td></tr><tr><td>240</td><td>2173</td></tr><tr><td>235</td><td>2915</td></tr><tr><td>230</td><td>4074</td></tr><tr><td>225</td><td>5423</td></tr><tr><td>220</td><td>7267</td></tr><tr><td>215</td><td>9369</td></tr><tr><td>210</td><td>12156</td></tr><tr><td>205</td><td>15103</td></tr><tr><td>200</td><td>18922</td></tr><tr><td>195</td><td>22783</td></tr><tr><td>190</td><td>26997</td></tr><tr><td>185</td><td>31431</td></tr><tr><td>180</td><td>35791</td></tr><tr><td>175</td><td>40462</td></tr><tr><td>170</td><td>44830</td></tr><tr><td>165</td><td>49781</td></tr><tr><td>160</td><td>53866</td></tr><tr><td>155</td><td>58991</td></tr><tr><td>150</td><td>62862</td></tr><tr><td>145</td><td>67800</td></tr><tr><td>140</td><td>71193</td></tr><tr><td>135</td><td>75940</td></tr><tr><td>130</td><td>78717</td></tr><tr><td>125</td><td>82935</td></tr><tr><td>120</td><td>85149</td></tr><tr><td>115</td><td>88874</td></tr><tr><td>110</td><td>90542</td></tr><tr><td>105</td><td>93455</td></tr><tr><td>100</td><td>94538</td></tr><tr><td>95</td><td>96479</td></tr><tr><td>90</td><td>97182</td></tr><tr><td>85</td><td>98624</td></tr><tr><td>80</td><td>99051</td></tr><tr><td>75</td><td>100015</td></tr><tr><td>70</td><td>100301</td></tr><tr><td>65</td><td>101010</td></tr><tr><td>60</td><td>101182</td></tr><tr><td>55</td><td>101618</td></tr><tr><td>50</td><td>101690</td></tr><tr><td>45</td><td>101958</td></tr><tr><td>40</td><td>101993</td></tr><tr><td>35</td><td>102168</td></tr><tr><td>30</td><td>102200</td></tr><tr><td>25</td><td>102301</td></tr><tr><td>20</td><td>102320</td></tr><tr><td>10</td><td>102432</td></tr><tr><td>0</td><td>102503</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation individuelle) : 112415 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>385</td><td>1</td></tr><tr><td>380</td><td>3</td></tr><tr><td>375</td><td>4</td></tr><tr><td>370</td><td>7</td></tr><tr><td>365</td><td>12</td></tr><tr><td>360</td><td>14</td></tr><tr><td>355</td><td>16</td></tr><tr><td>345</td><td>21</td></tr><tr><td>340</td><td>22</td></tr><tr><td>335</td><td>25</td></tr><tr><td>330</td><td>30</td></tr><tr><td>325</td><td>43</td></tr><tr><td>320</td><td>52</td></tr><tr><td>315</td><td>65</td></tr><tr><td>310</td><td>81</td></tr><tr><td>305</td><td>109</td></tr><tr><td>300</td><td>142</td></tr><tr><td>295</td><td>190</td></tr><tr><td>290</td><td>262</td></tr><tr><td>285</td><td>353</td></tr><tr><td>280</td><td>516</td></tr><tr><td>275</td><td>745</td></tr><tr><td>270</td><td>1040</td></tr><tr><td>265</td><td>1451</td></tr><tr><td>260</td><td>1997</td></tr><tr><td>255</td><td>2692</td></tr><tr><td>250</td><td>3779</td></tr><tr><td>245</td><td>5076</td></tr><tr><td>240</td><td>6810</td></tr><tr><td>235</td><td>8862</td></tr><tr><td>230</td><td>11612</td></tr><tr><td>225</td><td>14545</td></tr><tr><td>220</td><td>18504</td></tr><tr><td>215</td><td>22525</td></tr><tr><td>210</td><td>27760</td></tr><tr><td>205</td><td>32628</td></tr><tr><td>200</td><td>38503</td></tr><tr><td>195</td><td>43969</td></tr><tr><td>190</td><td>49582</td></tr><tr><td>185</td><td>54926</td></tr><tr><td>180</td><td>60105</td></tr><tr><td>175</td><td>65336</td></tr><tr><td>170</td><td>70025</td></tr><tr><td>165</td><td>74942</td></tr><tr><td>160</td><td>79073</td></tr><tr><td>155</td><td>83385</td></tr><tr><td>150</td><td>86754</td></tr><tr><td>145</td><td>90610</td></tr><tr><td>140</td><td>93154</td></tr><tr><td>135</td><td>96373</td></tr><tr><td>130</td><td>98387</td></tr><tr><td>125</td><td>101110</td></tr><tr><td>120</td><td>102497</td></tr><tr><td>115</td><td>104556</td></tr><tr><td>110</td><td>105499</td></tr><tr><td>105</td><td>107059</td></tr><tr><td>100</td><td>107652</td></tr><tr><td>95</td><td>108628</td></tr><tr><td>90</td><td>109027</td></tr><tr><td>85</td><td>109717</td></tr><tr><td>80</td><td>109923</td></tr><tr><td>75</td><td>110389</td></tr><tr><td>70</td><td>110538</td></tr><tr><td>65</td><td>110822</td></tr><tr><td>60</td><td>110909</td></tr><tr><td>55</td><td>111142</td></tr><tr><td>50</td><td>111170</td></tr><tr><td>45</td><td>111290</td></tr><tr><td>40</td><td>111307</td></tr><tr><td>35</td><td>111399</td></tr><tr><td>30</td><td>111423</td></tr><tr><td>25</td><td>111499</td></tr><tr><td>20</td><td>111510</td></tr><tr><td>10</td><td>111591</td></tr><tr><td>0</td><td>111664</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 94042 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>390</td><td>2</td></tr><tr><td>380</td><td>3</td></tr><tr><td>375</td><td>5</td></tr><tr><td>370</td><td>9</td></tr><tr><td>365</td><td>12</td></tr><tr><td>360</td><td>14</td></tr><tr><td>355</td><td>16</td></tr><tr><td>350</td><td>20</td></tr><tr><td>345</td><td>24</td></tr><tr><td>340</td><td>27</td></tr><tr><td>335</td><td>38</td></tr><tr><td>330</td><td>51</td></tr><tr><td>325</td><td>67</td></tr><tr><td>320</td><td>83</td></tr><tr><td>315</td><td>127</td></tr><tr><td>310</td><td>187</td></tr><tr><td>305</td><td>277</td></tr><tr><td>300</td><td>371</td></tr><tr><td>295</td><td>520</td></tr><tr><td>290</td><td>713</td></tr><tr><td>285</td><td>972</td></tr><tr><td>280</td><td>1318</td></tr><tr><td>275</td><td>1805</td></tr><tr><td>270</td><td>2493</td></tr><tr><td>265</td><td>3272</td></tr><tr><td>260</td><td>4307</td></tr><tr><td>255</td><td>5578</td></tr><tr><td>250</td><td>7364</td></tr><tr><td>245</td><td>9366</td></tr><tr><td>240</td><td>11930</td></tr><tr><td>235</td><td>14663</td></tr><tr><td>230</td><td>18293</td></tr><tr><td>225</td><td>21893</td></tr><tr><td>220</td><td>26500</td></tr><tr><td>215</td><td>30645</td></tr><tr><td>210</td><td>35843</td></tr><tr><td>205</td><td>40230</td></tr><tr><td>200</td><td>45499</td></tr><tr><td>195</td><td>50066</td></tr><tr><td>190</td><td>54716</td></tr><tr><td>185</td><td>58703</td></tr><tr><td>180</td><td>62631</td></tr><tr><td>175</td><td>66228</td></tr><tr><td>170</td><td>69432</td></tr><tr><td>165</td><td>72662</td></tr><tr><td>160</td><td>75251</td></tr><tr><td>155</td><td>77955</td></tr><tr><td>150</td><td>79932</td></tr><tr><td>145</td><td>82164</td></tr><tr><td>140</td><td>83645</td></tr><tr><td>135</td><td>85429</td></tr><tr><td>130</td><td>86495</td></tr><tr><td>125</td><td>87906</td></tr><tr><td>120</td><td>88621</td></tr><tr><td>115</td><td>89661</td></tr><tr><td>110</td><td>90164</td></tr><tr><td>105</td><td>90907</td></tr><tr><td>100</td><td>91204</td></tr><tr><td>95</td><td>91711</td></tr><tr><td>90</td><td>91890</td></tr><tr><td>85</td><td>92256</td></tr><tr><td>80</td><td>92399</td></tr><tr><td>75</td><td>92659</td></tr><tr><td>70</td><td>92750</td></tr><tr><td>65</td><td>92935</td></tr><tr><td>60</td><td>92983</td></tr><tr><td>55</td><td>93081</td></tr><tr><td>50</td><td>93108</td></tr><tr><td>45</td><td>93199</td></tr><tr><td>40</td><td>93215</td></tr><tr><td>35</td><td>93281</td></tr><tr><td>30</td><td>93299</td></tr><tr><td>25</td><td>93347</td></tr><tr><td>20</td><td>93359</td></tr><tr><td>10</td><td>93413</td></tr><tr><td>0</td><td>93464</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 72149 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>390</td><td>1</td></tr><tr><td>385</td><td>2</td></tr><tr><td>375</td><td>5</td></tr><tr><td>370</td><td>6</td></tr><tr><td>365</td><td>9</td></tr><tr><td>360</td><td>16</td></tr><tr><td>355</td><td>20</td></tr><tr><td>350</td><td>26</td></tr><tr><td>345</td><td>37</td></tr><tr><td>340</td><td>51</td></tr><tr><td>335</td><td>62</td></tr><tr><td>330</td><td>97</td></tr><tr><td>325</td><td>147</td></tr><tr><td>320</td><td>198</td></tr><tr><td>315</td><td>272</td></tr><tr><td>310</td><td>369</td></tr><tr><td>305</td><td>522</td></tr><tr><td>300</td><td>703</td></tr><tr><td>295</td><td>981</td></tr><tr><td>290</td><td>1311</td></tr><tr><td>285</td><td>1751</td></tr><tr><td>280</td><td>2295</td></tr><tr><td>275</td><td>3049</td></tr><tr><td>270</td><td>3997</td></tr><tr><td>265</td><td>5127</td></tr><tr><td>260</td><td>6550</td></tr><tr><td>255</td><td>8145</td></tr><tr><td>250</td><td>10293</td></tr><tr><td>245</td><td>12519</td></tr><tr><td>240</td><td>15342</td></tr><tr><td>235</td><td>18143</td></tr><tr><td>230</td><td>21768</td></tr><tr><td>225</td><td>25107</td></tr><tr><td>220</td><td>28995</td></tr><tr><td>215</td><td>32463</td></tr><tr><td>210</td><td>36658</td></tr><tr><td>205</td><td>40029</td></tr><tr><td>200</td><td>43798</td></tr><tr><td>195</td><td>46923</td></tr><tr><td>190</td><td>49963</td></tr><tr><td>185</td><td>52488</td></tr><tr><td>180</td><td>54984</td></tr><tr><td>175</td><td>57146</td></tr><tr><td>170</td><td>59054</td></tr><tr><td>165</td><td>60834</td></tr><tr><td>160</td><td>62276</td></tr><tr><td>155</td><td>63779</td></tr><tr><td>150</td><td>64795</td></tr><tr><td>145</td><td>65996</td></tr><tr><td>140</td><td>66755</td></tr><tr><td>135</td><td>67650</td></tr><tr><td>130</td><td>68187</td></tr><tr><td>125</td><td>68881</td></tr><tr><td>120</td><td>69256</td></tr><tr><td>115</td><td>69808</td></tr><tr><td>110</td><td>70020</td></tr><tr><td>105</td><td>70448</td></tr><tr><td>100</td><td>70595</td></tr><tr><td>95</td><td>70827</td></tr><tr><td>90</td><td>70910</td></tr><tr><td>85</td><td>71085</td></tr><tr><td>80</td><td>71158</td></tr><tr><td>75</td><td>71296</td></tr><tr><td>70</td><td>71344</td></tr><tr><td>65</td><td>71467</td></tr><tr><td>60</td><td>71497</td></tr><tr><td>55</td><td>71568</td></tr><tr><td>50</td><td>71576</td></tr><tr><td>45</td><td>71617</td></tr><tr><td>40</td><td>71629</td></tr><tr><td>35</td><td>71670</td></tr><tr><td>30</td><td>71678</td></tr><tr><td>25</td><td>71715</td></tr><tr><td>20</td><td>71719</td></tr><tr><td>10</td><td>71771</td></tr><tr><td>0</td><td>71801</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 48991 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>390</td><td>2</td></tr><tr><td>385</td><td>3</td></tr><tr><td>380</td><td>4</td></tr><tr><td>375</td><td>7</td></tr><tr><td>365</td><td>11</td></tr><tr><td>360</td><td>21</td></tr><tr><td>355</td><td>29</td></tr><tr><td>350</td><td>37</td></tr><tr><td>345</td><td>55</td></tr><tr><td>340</td><td>76</td></tr><tr><td>335</td><td>101</td></tr><tr><td>330</td><td>150</td></tr><tr><td>325</td><td>211</td></tr><tr><td>320</td><td>289</td></tr><tr><td>315</td><td>408</td></tr><tr><td>310</td><td>568</td></tr><tr><td>305</td><td>797</td></tr><tr><td>300</td><td>1010</td></tr><tr><td>295</td><td>1405</td></tr><tr><td>290</td><td>1808</td></tr><tr><td>285</td><td>2339</td></tr><tr><td>280</td><td>2966</td></tr><tr><td>275</td><td>3838</td></tr><tr><td>270</td><td>4823</td></tr><tr><td>265</td><td>6031</td></tr><tr><td>260</td><td>7423</td></tr><tr><td>255</td><td>9066</td></tr><tr><td>250</td><td>10919</td></tr><tr><td>245</td><td>12986</td></tr><tr><td>240</td><td>15339</td></tr><tr><td>235</td><td>17688</td></tr><tr><td>230</td><td>20309</td></tr><tr><td>225</td><td>22854</td></tr><tr><td>220</td><td>25634</td></tr><tr><td>215</td><td>28075</td></tr><tr><td>210</td><td>30632</td></tr><tr><td>205</td><td>32861</td></tr><tr><td>200</td><td>35048</td></tr><tr><td>195</td><td>36961</td></tr><tr><td>190</td><td>38581</td></tr><tr><td>185</td><td>40059</td></tr><tr><td>180</td><td>41271</td></tr><tr><td>175</td><td>42388</td></tr><tr><td>170</td><td>43260</td></tr><tr><td>165</td><td>44154</td></tr><tr><td>160</td><td>44800</td></tr><tr><td>155</td><td>45457</td></tr><tr><td>150</td><td>45943</td></tr><tr><td>145</td><td>46464</td></tr><tr><td>140</td><td>46772</td></tr><tr><td>135</td><td>47145</td></tr><tr><td>130</td><td>47358</td></tr><tr><td>125</td><td>47647</td></tr><tr><td>120</td><td>47797</td></tr><tr><td>115</td><td>48025</td></tr><tr><td>110</td><td>48104</td></tr><tr><td>105</td><td>48231</td></tr><tr><td>100</td><td>48289</td></tr><tr><td>95</td><td>48380</td></tr><tr><td>90</td><td>48422</td></tr><tr><td>85</td><td>48490</td></tr><tr><td>80</td><td>48513</td></tr><tr><td>75</td><td>48581</td></tr><tr><td>70</td><td>48604</td></tr><tr><td>65</td><td>48634</td></tr><tr><td>60</td><td>48655</td></tr><tr><td>55</td><td>48683</td></tr><tr><td>50</td><td>48688</td></tr><tr><td>45</td><td>48712</td></tr><tr><td>40</td><td>48715</td></tr><tr><td>35</td><td>48729</td></tr><tr><td>30</td><td>48733</td></tr><tr><td>25</td><td>48746</td></tr><tr><td>20</td><td>48748</td></tr><tr><td>10</td><td>48770</td></tr><tr><td>0</td><td>48782</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 9081 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>395</td><td>3</td></tr><tr><td>385</td><td>4</td></tr><tr><td>380</td><td>7</td></tr><tr><td>375</td><td>9</td></tr><tr><td>370</td><td>12</td></tr><tr><td>365</td><td>18</td></tr><tr><td>360</td><td>27</td></tr><tr><td>355</td><td>37</td></tr><tr><td>350</td><td>49</td></tr><tr><td>345</td><td>67</td></tr><tr><td>340</td><td>88</td></tr><tr><td>335</td><td>119</td></tr><tr><td>330</td><td>161</td></tr><tr><td>325</td><td>199</td></tr><tr><td>320</td><td>255</td></tr><tr><td>315</td><td>347</td></tr><tr><td>310</td><td>432</td></tr><tr><td>305</td><td>573</td></tr><tr><td>300</td><td>696</td></tr><tr><td>295</td><td>872</td></tr><tr><td>290</td><td>1053</td></tr><tr><td>285</td><td>1283</td></tr><tr><td>280</td><td>1543</td></tr><tr><td>275</td><td>1870</td></tr><tr><td>270</td><td>2207</td></tr><tr><td>265</td><td>2560</td></tr><tr><td>260</td><td>2976</td></tr><tr><td>255</td><td>3399</td></tr><tr><td>250</td><td>3809</td></tr><tr><td>245</td><td>4240</td></tr><tr><td>240</td><td>4677</td></tr><tr><td>235</td><td>5087</td></tr><tr><td>230</td><td>5535</td></tr><tr><td>225</td><td>5922</td></tr><tr><td>220</td><td>6323</td></tr><tr><td>215</td><td>6670</td></tr><tr><td>210</td><td>7001</td></tr><tr><td>205</td><td>7235</td></tr><tr><td>200</td><td>7532</td></tr><tr><td>195</td><td>7751</td></tr><tr><td>190</td><td>7917</td></tr><tr><td>185</td><td>8089</td></tr><tr><td>180</td><td>8224</td></tr><tr><td>175</td><td>8371</td></tr><tr><td>170</td><td>8461</td></tr><tr><td>165</td><td>8549</td></tr><tr><td>160</td><td>8608</td></tr><tr><td>155</td><td>8684</td></tr><tr><td>150</td><td>8733</td></tr><tr><td>145</td><td>8794</td></tr><tr><td>140</td><td>8819</td></tr><tr><td>135</td><td>8856</td></tr><tr><td>130</td><td>8879</td></tr><tr><td>125</td><td>8905</td></tr><tr><td>120</td><td>8918</td></tr><tr><td>115</td><td>8937</td></tr><tr><td>110</td><td>8944</td></tr><tr><td>105</td><td>8971</td></tr><tr><td>100</td><td>8978</td></tr><tr><td>95</td><td>8988</td></tr><tr><td>90</td><td>8994</td></tr><tr><td>85</td><td>9003</td></tr><tr><td>80</td><td>9006</td></tr><tr><td>75</td><td>9011</td></tr><tr><td>70</td><td>9016</td></tr><tr><td>65</td><td>9021</td></tr><tr><td>60</td><td>9023</td></tr><tr><td>50</td><td>9026</td></tr><tr><td>45</td><td>9029</td></tr><tr><td>40</td><td>9030</td></tr><tr><td>30</td><td>9035</td></tr><tr><td>20</td><td>9040</td></tr><tr><td>10</td><td>9046</td></tr><tr><td>0</td><td>9050</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 5823 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>395</td><td>2</td></tr><tr><td>385</td><td>4</td></tr><tr><td>380</td><td>5</td></tr><tr><td>375</td><td>6</td></tr><tr><td>370</td><td>10</td></tr><tr><td>365</td><td>16</td></tr><tr><td>360</td><td>25</td></tr><tr><td>355</td><td>29</td></tr><tr><td>350</td><td>40</td></tr><tr><td>345</td><td>56</td></tr><tr><td>340</td><td>66</td></tr><tr><td>335</td><td>98</td></tr><tr><td>330</td><td>129</td></tr><tr><td>325</td><td>166</td></tr><tr><td>320</td><td>201</td></tr><tr><td>315</td><td>260</td></tr><tr><td>310</td><td>322</td></tr><tr><td>305</td><td>416</td></tr><tr><td>300</td><td>535</td></tr><tr><td>295</td><td>661</td></tr><tr><td>290</td><td>806</td></tr><tr><td>285</td><td>978</td></tr><tr><td>280</td><td>1146</td></tr><tr><td>275</td><td>1367</td></tr><tr><td>270</td><td>1568</td></tr><tr><td>265</td><td>1794</td></tr><tr><td>260</td><td>2032</td></tr><tr><td>255</td><td>2263</td></tr><tr><td>250</td><td>2534</td></tr><tr><td>245</td><td>2800</td></tr><tr><td>240</td><td>3078</td></tr><tr><td>235</td><td>3354</td></tr><tr><td>230</td><td>3622</td></tr><tr><td>225</td><td>3851</td></tr><tr><td>220</td><td>4098</td></tr><tr><td>215</td><td>4297</td></tr><tr><td>210</td><td>4503</td></tr><tr><td>205</td><td>4677</td></tr><tr><td>200</td><td>4821</td></tr><tr><td>195</td><td>4956</td></tr><tr><td>190</td><td>5066</td></tr><tr><td>185</td><td>5172</td></tr><tr><td>180</td><td>5257</td></tr><tr><td>175</td><td>5339</td></tr><tr><td>170</td><td>5397</td></tr><tr><td>165</td><td>5449</td></tr><tr><td>160</td><td>5495</td></tr><tr><td>155</td><td>5551</td></tr><tr><td>150</td><td>5580</td></tr><tr><td>145</td><td>5604</td></tr><tr><td>140</td><td>5627</td></tr><tr><td>135</td><td>5647</td></tr><tr><td>130</td><td>5660</td></tr><tr><td>125</td><td>5686</td></tr><tr><td>120</td><td>5693</td></tr><tr><td>115</td><td>5711</td></tr><tr><td>110</td><td>5723</td></tr><tr><td>105</td><td>5740</td></tr><tr><td>100</td><td>5746</td></tr><tr><td>95</td><td>5750</td></tr><tr><td>90</td><td>5757</td></tr><tr><td>85</td><td>5764</td></tr><tr><td>80</td><td>5767</td></tr><tr><td>75</td><td>5771</td></tr><tr><td>70</td><td>5773</td></tr><tr><td>65</td><td>5778</td></tr><tr><td>60</td><td>5781</td></tr><tr><td>50</td><td>5785</td></tr><tr><td>45</td><td>5786</td></tr><tr><td>40</td><td>5787</td></tr><tr><td>30</td><td>5792</td></tr><tr><td>20</td><td>5797</td></tr><tr><td>10</td><td>5801</td></tr><tr><td>0</td><td>5804</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 2391 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>350</td><td>1</td></tr><tr><td>335</td><td>2</td></tr><tr><td>330</td><td>3</td></tr><tr><td>325</td><td>4</td></tr><tr><td>320</td><td>5</td></tr><tr><td>315</td><td>7</td></tr><tr><td>310</td><td>8</td></tr><tr><td>305</td><td>10</td></tr><tr><td>300</td><td>15</td></tr><tr><td>295</td><td>16</td></tr><tr><td>290</td><td>17</td></tr><tr><td>285</td><td>26</td></tr><tr><td>280</td><td>34</td></tr><tr><td>275</td><td>52</td></tr><tr><td>270</td><td>67</td></tr><tr><td>265</td><td>86</td></tr><tr><td>260</td><td>118</td></tr><tr><td>255</td><td>148</td></tr><tr><td>250</td><td>185</td></tr><tr><td>245</td><td>236</td></tr><tr><td>240</td><td>276</td></tr><tr><td>235</td><td>344</td></tr><tr><td>230</td><td>409</td></tr><tr><td>225</td><td>498</td></tr><tr><td>220</td><td>586</td></tr><tr><td>215</td><td>697</td></tr><tr><td>210</td><td>797</td></tr><tr><td>205</td><td>907</td></tr><tr><td>200</td><td>1019</td></tr><tr><td>195</td><td>1121</td></tr><tr><td>190</td><td>1217</td></tr><tr><td>185</td><td>1315</td></tr><tr><td>180</td><td>1395</td></tr><tr><td>175</td><td>1466</td></tr><tr><td>170</td><td>1522</td></tr><tr><td>165</td><td>1606</td></tr><tr><td>160</td><td>1676</td></tr><tr><td>155</td><td>1756</td></tr><tr><td>150</td><td>1801</td></tr><tr><td>145</td><td>1877</td></tr><tr><td>140</td><td>1914</td></tr><tr><td>135</td><td>1978</td></tr><tr><td>130</td><td>2007</td></tr><tr><td>125</td><td>2070</td></tr><tr><td>120</td><td>2095</td></tr><tr><td>115</td><td>2150</td></tr><tr><td>110</td><td>2163</td></tr><tr><td>105</td><td>2215</td></tr><tr><td>100</td><td>2231</td></tr><tr><td>95</td><td>2265</td></tr><tr><td>90</td><td>2277</td></tr><tr><td>85</td><td>2301</td></tr><tr><td>80</td><td>2308</td></tr><tr><td>75</td><td>2324</td></tr><tr><td>70</td><td>2329</td></tr><tr><td>65</td><td>2339</td></tr><tr><td>60</td><td>2340</td></tr><tr><td>55</td><td>2348</td></tr><tr><td>50</td><td>2350</td></tr><tr><td>45</td><td>2359</td></tr><tr><td>40</td><td>2360</td></tr><tr><td>25</td><td>2365</td></tr><tr><td>20</td><td>2366</td></tr><tr><td>10</td><td>2368</td></tr><tr><td>0</td><td>2370</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 960 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>350</td><td>1</td></tr><tr><td>315</td><td>2</td></tr><tr><td>310</td><td>3</td></tr><tr><td>305</td><td>8</td></tr><tr><td>300</td><td>9</td></tr><tr><td>295</td><td>16</td></tr><tr><td>290</td><td>20</td></tr><tr><td>285</td><td>25</td></tr><tr><td>280</td><td>31</td></tr><tr><td>275</td><td>40</td></tr><tr><td>270</td><td>50</td></tr><tr><td>265</td><td>68</td></tr><tr><td>260</td><td>80</td></tr><tr><td>255</td><td>101</td></tr><tr><td>250</td><td>131</td></tr><tr><td>245</td><td>156</td></tr><tr><td>240</td><td>197</td></tr><tr><td>235</td><td>235</td></tr><tr><td>230</td><td>261</td></tr><tr><td>225</td><td>297</td></tr><tr><td>220</td><td>336</td></tr><tr><td>215</td><td>388</td></tr><tr><td>210</td><td>430</td></tr><tr><td>205</td><td>475</td></tr><tr><td>200</td><td>511</td></tr><tr><td>195</td><td>551</td></tr><tr><td>190</td><td>597</td></tr><tr><td>185</td><td>635</td></tr><tr><td>180</td><td>663</td></tr><tr><td>175</td><td>694</td></tr><tr><td>170</td><td>725</td></tr><tr><td>165</td><td>747</td></tr><tr><td>160</td><td>770</td></tr><tr><td>155</td><td>793</td></tr><tr><td>150</td><td>805</td></tr><tr><td>145</td><td>831</td></tr><tr><td>140</td><td>847</td></tr><tr><td>135</td><td>857</td></tr><tr><td>130</td><td>866</td></tr><tr><td>125</td><td>880</td></tr><tr><td>120</td><td>887</td></tr><tr><td>115</td><td>897</td></tr><tr><td>110</td><td>902</td></tr><tr><td>105</td><td>911</td></tr><tr><td>100</td><td>912</td></tr><tr><td>95</td><td>918</td></tr><tr><td>90</td><td>920</td></tr><tr><td>85</td><td>925</td></tr><tr><td>80</td><td>926</td></tr><tr><td>75</td><td>932</td></tr><tr><td>70</td><td>933</td></tr><tr><td>65</td><td>934</td></tr><tr><td>60</td><td>936</td></tr><tr><td>50</td><td>941</td></tr><tr><td>20</td><td>943</td></tr><tr><td>10</td><td>944</td></tr><tr><td>0</td><td>946</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 703 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>300</td><td>4</td></tr><tr><td>295</td><td>7</td></tr><tr><td>290</td><td>12</td></tr><tr><td>280</td><td>20</td></tr><tr><td>275</td><td>26</td></tr><tr><td>270</td><td>34</td></tr><tr><td>265</td><td>51</td></tr><tr><td>260</td><td>65</td></tr><tr><td>255</td><td>77</td></tr><tr><td>250</td><td>102</td></tr><tr><td>245</td><td>122</td></tr><tr><td>240</td><td>140</td></tr><tr><td>235</td><td>164</td></tr><tr><td>230</td><td>195</td></tr><tr><td>225</td><td>225</td></tr><tr><td>220</td><td>254</td></tr><tr><td>215</td><td>274</td></tr><tr><td>210</td><td>299</td></tr><tr><td>205</td><td>332</td></tr><tr><td>200</td><td>356</td></tr><tr><td>195</td><td>382</td></tr><tr><td>190</td><td>412</td></tr><tr><td>185</td><td>431</td></tr><tr><td>180</td><td>447</td></tr><tr><td>175</td><td>473</td></tr><tr><td>170</td><td>483</td></tr><tr><td>165</td><td>503</td></tr><tr><td>160</td><td>512</td></tr><tr><td>155</td><td>530</td></tr><tr><td>150</td><td>544</td></tr><tr><td>145</td><td>565</td></tr><tr><td>140</td><td>573</td></tr><tr><td>135</td><td>597</td></tr><tr><td>130</td><td>607</td></tr><tr><td>125</td><td>619</td></tr><tr><td>120</td><td>623</td></tr><tr><td>115</td><td>634</td></tr><tr><td>110</td><td>638</td></tr><tr><td>105</td><td>651</td></tr><tr><td>100</td><td>656</td></tr><tr><td>95</td><td>664</td></tr><tr><td>90</td><td>667</td></tr><tr><td>85</td><td>673</td></tr><tr><td>80</td><td>675</td></tr><tr><td>70</td><td>681</td></tr><tr><td>65</td><td>683</td></tr><tr><td>55</td><td>684</td></tr><tr><td>50</td><td>685</td></tr><tr><td>45</td><td>688</td></tr><tr><td>40</td><td>689</td></tr><tr><td>30</td><td>690</td></tr><tr><td>20</td><td>691</td></tr><tr><td>0</td><td>692</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-16-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation individuelle) : 1862 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-16-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-16-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>285</td><td>2</td></tr><tr><td>275</td><td>3</td></tr><tr><td>270</td><td>6</td></tr><tr><td>260</td><td>7</td></tr><tr><td>255</td><td>8</td></tr><tr><td>250</td><td>12</td></tr><tr><td>245</td><td>17</td></tr><tr><td>240</td><td>19</td></tr><tr><td>235</td><td>26</td></tr><tr><td>230</td><td>33</td></tr><tr><td>225</td><td>44</td></tr><tr><td>220</td><td>68</td></tr><tr><td>215</td><td>90</td></tr><tr><td>210</td><td>116</td></tr><tr><td>205</td><td>150</td></tr><tr><td>200</td><td>196</td></tr><tr><td>195</td><td>245</td></tr><tr><td>190</td><td>288</td></tr><tr><td>185</td><td>334</td></tr><tr><td>180</td><td>384</td></tr><tr><td>175</td><td>440</td></tr><tr><td>170</td><td>477</td></tr><tr><td>165</td><td>551</td></tr><tr><td>160</td><td>602</td></tr><tr><td>155</td><td>680</td></tr><tr><td>150</td><td>732</td></tr><tr><td>145</td><td>823</td></tr><tr><td>140</td><td>876</td></tr><tr><td>135</td><td>971</td></tr><tr><td>130</td><td>1018</td></tr><tr><td>125</td><td>1117</td></tr><tr><td>120</td><td>1163</td></tr><tr><td>115</td><td>1280</td></tr><tr><td>110</td><td>1326</td></tr><tr><td>105</td><td>1429</td></tr><tr><td>100</td><td>1461</td></tr><tr><td>95</td><td>1526</td></tr><tr><td>90</td><td>1549</td></tr><tr><td>85</td><td>1594</td></tr><tr><td>80</td><td>1613</td></tr><tr><td>75</td><td>1672</td></tr><tr><td>70</td><td>1680</td></tr><tr><td>65</td><td>1724</td></tr><tr><td>60</td><td>1728</td></tr><tr><td>55</td><td>1757</td></tr><tr><td>50</td><td>1761</td></tr><tr><td>45</td><td>1782</td></tr><tr><td>40</td><td>1784</td></tr><tr><td>35</td><td>1792</td></tr><tr><td>30</td><td>1793</td></tr><tr><td>25</td><td>1808</td></tr><tr><td>20</td><td>1811</td></tr><tr><td>10</td><td>1820</td></tr><tr><td>0</td><td>1825</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-17-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation individuelle) : 1778 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-17-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-17-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>300</td><td>3</td></tr><tr><td>290</td><td>4</td></tr><tr><td>280</td><td>5</td></tr><tr><td>270</td><td>6</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>9</td></tr><tr><td>255</td><td>13</td></tr><tr><td>250</td><td>15</td></tr><tr><td>245</td><td>17</td></tr><tr><td>240</td><td>19</td></tr><tr><td>235</td><td>21</td></tr><tr><td>230</td><td>30</td></tr><tr><td>225</td><td>44</td></tr><tr><td>220</td><td>52</td></tr><tr><td>215</td><td>67</td></tr><tr><td>210</td><td>88</td></tr><tr><td>205</td><td>116</td></tr><tr><td>200</td><td>146</td></tr><tr><td>195</td><td>181</td></tr><tr><td>190</td><td>216</td></tr><tr><td>185</td><td>263</td></tr><tr><td>180</td><td>300</td></tr><tr><td>175</td><td>357</td></tr><tr><td>170</td><td>401</td></tr><tr><td>165</td><td>459</td></tr><tr><td>160</td><td>513</td></tr><tr><td>155</td><td>594</td></tr><tr><td>150</td><td>653</td></tr><tr><td>145</td><td>752</td></tr><tr><td>140</td><td>812</td></tr><tr><td>135</td><td>919</td></tr><tr><td>130</td><td>988</td></tr><tr><td>125</td><td>1104</td></tr><tr><td>120</td><td>1156</td></tr><tr><td>115</td><td>1255</td></tr><tr><td>110</td><td>1292</td></tr><tr><td>105</td><td>1379</td></tr><tr><td>100</td><td>1410</td></tr><tr><td>95</td><td>1472</td></tr><tr><td>90</td><td>1504</td></tr><tr><td>85</td><td>1560</td></tr><tr><td>80</td><td>1571</td></tr><tr><td>75</td><td>1614</td></tr><tr><td>70</td><td>1622</td></tr><tr><td>65</td><td>1650</td></tr><tr><td>60</td><td>1655</td></tr><tr><td>50</td><td>1683</td></tr><tr><td>45</td><td>1713</td></tr><tr><td>40</td><td>1714</td></tr><tr><td>35</td><td>1724</td></tr><tr><td>30</td><td>1725</td></tr><tr><td>25</td><td>1734</td></tr><tr><td>20</td><td>1735</td></tr><tr><td>10</td><td>1740</td></tr><tr><td>0</td><td>1748</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 1361 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>280</td><td>2</td></tr><tr><td>275</td><td>4</td></tr><tr><td>270</td><td>6</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>8</td></tr><tr><td>255</td><td>13</td></tr><tr><td>250</td><td>16</td></tr><tr><td>245</td><td>18</td></tr><tr><td>240</td><td>25</td></tr><tr><td>235</td><td>34</td></tr><tr><td>230</td><td>48</td></tr><tr><td>225</td><td>62</td></tr><tr><td>220</td><td>78</td></tr><tr><td>215</td><td>91</td></tr><tr><td>210</td><td>122</td></tr><tr><td>205</td><td>151</td></tr><tr><td>200</td><td>192</td></tr><tr><td>195</td><td>234</td></tr><tr><td>190</td><td>267</td></tr><tr><td>185</td><td>317</td></tr><tr><td>180</td><td>361</td></tr><tr><td>175</td><td>410</td></tr><tr><td>170</td><td>460</td></tr><tr><td>165</td><td>523</td></tr><tr><td>160</td><td>569</td></tr><tr><td>155</td><td>625</td></tr><tr><td>150</td><td>671</td></tr><tr><td>145</td><td>745</td></tr><tr><td>140</td><td>795</td></tr><tr><td>135</td><td>863</td></tr><tr><td>130</td><td>908</td></tr><tr><td>125</td><td>967</td></tr><tr><td>120</td><td>1007</td></tr><tr><td>115</td><td>1053</td></tr><tr><td>110</td><td>1072</td></tr><tr><td>105</td><td>1132</td></tr><tr><td>100</td><td>1146</td></tr><tr><td>95</td><td>1181</td></tr><tr><td>90</td><td>1192</td></tr><tr><td>85</td><td>1225</td></tr><tr><td>80</td><td>1228</td></tr><tr><td>75</td><td>1247</td></tr><tr><td>70</td><td>1257</td></tr><tr><td>65</td><td>1284</td></tr><tr><td>60</td><td>1290</td></tr><tr><td>55</td><td>1304</td></tr><tr><td>50</td><td>1306</td></tr><tr><td>40</td><td>1320</td></tr><tr><td>30</td><td>1330</td></tr><tr><td>20</td><td>1331</td></tr><tr><td>10</td><td>1335</td></tr><tr><td>0</td><td>1338</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 1030 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>305</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>295</td><td>3</td></tr><tr><td>290</td><td>4</td></tr><tr><td>285</td><td>5</td></tr><tr><td>275</td><td>6</td></tr><tr><td>270</td><td>7</td></tr><tr><td>265</td><td>9</td></tr><tr><td>260</td><td>15</td></tr><tr><td>255</td><td>21</td></tr><tr><td>250</td><td>24</td></tr><tr><td>245</td><td>31</td></tr><tr><td>240</td><td>38</td></tr><tr><td>235</td><td>50</td></tr><tr><td>230</td><td>59</td></tr><tr><td>225</td><td>80</td></tr><tr><td>220</td><td>102</td></tr><tr><td>215</td><td>122</td></tr><tr><td>210</td><td>144</td></tr><tr><td>205</td><td>172</td></tr><tr><td>200</td><td>214</td></tr><tr><td>195</td><td>242</td></tr><tr><td>190</td><td>276</td></tr><tr><td>185</td><td>318</td></tr><tr><td>180</td><td>358</td></tr><tr><td>175</td><td>400</td></tr><tr><td>170</td><td>439</td></tr><tr><td>165</td><td>483</td></tr><tr><td>160</td><td>519</td></tr><tr><td>155</td><td>564</td></tr><tr><td>150</td><td>593</td></tr><tr><td>145</td><td>649</td></tr><tr><td>140</td><td>686</td></tr><tr><td>135</td><td>723</td></tr><tr><td>130</td><td>754</td></tr><tr><td>125</td><td>792</td></tr><tr><td>120</td><td>817</td></tr><tr><td>115</td><td>847</td></tr><tr><td>110</td><td>861</td></tr><tr><td>105</td><td>897</td></tr><tr><td>100</td><td>904</td></tr><tr><td>95</td><td>928</td></tr><tr><td>90</td><td>932</td></tr><tr><td>85</td><td>951</td></tr><tr><td>80</td><td>954</td></tr><tr><td>75</td><td>970</td></tr><tr><td>70</td><td>972</td></tr><tr><td>60</td><td>981</td></tr><tr><td>55</td><td>992</td></tr><tr><td>50</td><td>993</td></tr><tr><td>40</td><td>998</td></tr><tr><td>30</td><td>1003</td></tr><tr><td>25</td><td>1005</td></tr><tr><td>20</td><td>1006</td></tr><tr><td>10</td><td>1008</td></tr><tr><td>0</td><td>1009</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 3179 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>315</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>285</td><td>3</td></tr><tr><td>280</td><td>4</td></tr><tr><td>275</td><td>6</td></tr><tr><td>270</td><td>7</td></tr><tr><td>265</td><td>11</td></tr><tr><td>260</td><td>12</td></tr><tr><td>255</td><td>13</td></tr><tr><td>250</td><td>15</td></tr><tr><td>245</td><td>19</td></tr><tr><td>240</td><td>23</td></tr><tr><td>235</td><td>26</td></tr><tr><td>230</td><td>34</td></tr><tr><td>225</td><td>46</td></tr><tr><td>220</td><td>63</td></tr><tr><td>215</td><td>100</td></tr><tr><td>210</td><td>155</td></tr><tr><td>205</td><td>203</td></tr><tr><td>200</td><td>271</td></tr><tr><td>195</td><td>365</td></tr><tr><td>190</td><td>449</td></tr><tr><td>185</td><td>554</td></tr><tr><td>180</td><td>671</td></tr><tr><td>175</td><td>781</td></tr><tr><td>170</td><td>911</td></tr><tr><td>165</td><td>1047</td></tr><tr><td>160</td><td>1187</td></tr><tr><td>155</td><td>1323</td></tr><tr><td>150</td><td>1456</td></tr><tr><td>145</td><td>1627</td></tr><tr><td>140</td><td>1776</td></tr><tr><td>135</td><td>1956</td></tr><tr><td>130</td><td>2060</td></tr><tr><td>125</td><td>2203</td></tr><tr><td>120</td><td>2280</td></tr><tr><td>115</td><td>2426</td></tr><tr><td>110</td><td>2516</td></tr><tr><td>105</td><td>2652</td></tr><tr><td>100</td><td>2695</td></tr><tr><td>95</td><td>2780</td></tr><tr><td>90</td><td>2806</td></tr><tr><td>85</td><td>2866</td></tr><tr><td>80</td><td>2900</td></tr><tr><td>75</td><td>2974</td></tr><tr><td>70</td><td>3002</td></tr><tr><td>65</td><td>3045</td></tr><tr><td>60</td><td>3051</td></tr><tr><td>55</td><td>3075</td></tr><tr><td>50</td><td>3082</td></tr><tr><td>45</td><td>3103</td></tr><tr><td>40</td><td>3105</td></tr><tr><td>35</td><td>3111</td></tr><tr><td>20</td><td>3113</td></tr><tr><td>10</td><td>3117</td></tr><tr><td>0</td><td>3121</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 5696 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>320</td><td>2</td></tr><tr><td>295</td><td>3</td></tr><tr><td>290</td><td>5</td></tr><tr><td>280</td><td>8</td></tr><tr><td>275</td><td>9</td></tr><tr><td>270</td><td>12</td></tr><tr><td>265</td><td>28</td></tr><tr><td>260</td><td>29</td></tr><tr><td>255</td><td>41</td></tr><tr><td>250</td><td>50</td></tr><tr><td>245</td><td>73</td></tr><tr><td>240</td><td>104</td></tr><tr><td>235</td><td>120</td></tr><tr><td>230</td><td>180</td></tr><tr><td>225</td><td>233</td></tr><tr><td>220</td><td>357</td></tr><tr><td>215</td><td>471</td></tr><tr><td>210</td><td>624</td></tr><tr><td>205</td><td>778</td></tr><tr><td>200</td><td>1039</td></tr><tr><td>195</td><td>1283</td></tr><tr><td>190</td><td>1550</td></tr><tr><td>185</td><td>1774</td></tr><tr><td>180</td><td>2035</td></tr><tr><td>175</td><td>2286</td></tr><tr><td>170</td><td>2579</td></tr><tr><td>165</td><td>2868</td></tr><tr><td>160</td><td>3111</td></tr><tr><td>155</td><td>3381</td></tr><tr><td>150</td><td>3625</td></tr><tr><td>145</td><td>3906</td></tr><tr><td>140</td><td>4126</td></tr><tr><td>135</td><td>4370</td></tr><tr><td>130</td><td>4516</td></tr><tr><td>125</td><td>4745</td></tr><tr><td>120</td><td>4875</td></tr><tr><td>115</td><td>5040</td></tr><tr><td>110</td><td>5127</td></tr><tr><td>105</td><td>5279</td></tr><tr><td>100</td><td>5335</td></tr><tr><td>95</td><td>5419</td></tr><tr><td>90</td><td>5458</td></tr><tr><td>85</td><td>5505</td></tr><tr><td>80</td><td>5534</td></tr><tr><td>75</td><td>5565</td></tr><tr><td>70</td><td>5574</td></tr><tr><td>65</td><td>5594</td></tr><tr><td>60</td><td>5596</td></tr><tr><td>55</td><td>5611</td></tr><tr><td>50</td><td>5615</td></tr><tr><td>40</td><td>5622</td></tr><tr><td>30</td><td>5626</td></tr><tr><td>25</td><td>5634</td></tr><tr><td>20</td><td>5637</td></tr><tr><td>10</td><td>5639</td></tr><tr><td>0</td><td>5644</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation en binôme) : 35481 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>315</td><td>2</td></tr><tr><td>310</td><td>5</td></tr><tr><td>305</td><td>7</td></tr><tr><td>295</td><td>11</td></tr><tr><td>290</td><td>15</td></tr><tr><td>285</td><td>19</td></tr><tr><td>280</td><td>24</td></tr><tr><td>275</td><td>43</td></tr><tr><td>270</td><td>76</td></tr><tr><td>265</td><td>129</td></tr><tr><td>260</td><td>175</td></tr><tr><td>255</td><td>277</td></tr><tr><td>250</td><td>438</td></tr><tr><td>245</td><td>622</td></tr><tr><td>240</td><td>898</td></tr><tr><td>235</td><td>1255</td></tr><tr><td>230</td><td>1757</td></tr><tr><td>225</td><td>2341</td></tr><tr><td>220</td><td>3217</td></tr><tr><td>215</td><td>4254</td></tr><tr><td>210</td><td>5558</td></tr><tr><td>205</td><td>6998</td></tr><tr><td>200</td><td>8740</td></tr><tr><td>195</td><td>10546</td></tr><tr><td>190</td><td>12415</td></tr><tr><td>185</td><td>14260</td></tr><tr><td>180</td><td>16026</td></tr><tr><td>175</td><td>17732</td></tr><tr><td>170</td><td>19430</td></tr><tr><td>165</td><td>21201</td></tr><tr><td>160</td><td>22718</td></tr><tr><td>155</td><td>24339</td></tr><tr><td>150</td><td>25596</td></tr><tr><td>145</td><td>27024</td></tr><tr><td>140</td><td>28188</td></tr><tr><td>135</td><td>29440</td></tr><tr><td>130</td><td>30245</td></tr><tr><td>125</td><td>31315</td></tr><tr><td>120</td><td>31926</td></tr><tr><td>115</td><td>32717</td></tr><tr><td>110</td><td>33135</td></tr><tr><td>105</td><td>33679</td></tr><tr><td>100</td><td>33942</td></tr><tr><td>95</td><td>34205</td></tr><tr><td>90</td><td>34399</td></tr><tr><td>85</td><td>34598</td></tr><tr><td>80</td><td>34698</td></tr><tr><td>75</td><td>34823</td></tr><tr><td>70</td><td>34881</td></tr><tr><td>65</td><td>34965</td></tr><tr><td>60</td><td>35012</td></tr><tr><td>55</td><td>35071</td></tr><tr><td>50</td><td>35086</td></tr><tr><td>45</td><td>35118</td></tr><tr><td>40</td><td>35124</td></tr><tr><td>35</td><td>35153</td></tr><tr><td>30</td><td>35155</td></tr><tr><td>25</td><td>35171</td></tr><tr><td>20</td><td>35176</td></tr><tr><td>10</td><td>35199</td></tr><tr><td>0</td><td>35220</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation en binôme) : 47532 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>365</td><td>1</td></tr><tr><td>340</td><td>3</td></tr><tr><td>335</td><td>5</td></tr><tr><td>330</td><td>7</td></tr><tr><td>325</td><td>9</td></tr><tr><td>320</td><td>11</td></tr><tr><td>315</td><td>20</td></tr><tr><td>310</td><td>24</td></tr><tr><td>305</td><td>38</td></tr><tr><td>300</td><td>54</td></tr><tr><td>295</td><td>90</td></tr><tr><td>290</td><td>118</td></tr><tr><td>285</td><td>184</td></tr><tr><td>280</td><td>246</td></tr><tr><td>275</td><td>356</td></tr><tr><td>270</td><td>500</td></tr><tr><td>265</td><td>745</td></tr><tr><td>260</td><td>1088</td></tr><tr><td>255</td><td>1529</td></tr><tr><td>250</td><td>2091</td></tr><tr><td>245</td><td>2886</td></tr><tr><td>240</td><td>3865</td></tr><tr><td>235</td><td>5058</td></tr><tr><td>230</td><td>6693</td></tr><tr><td>225</td><td>8514</td></tr><tr><td>220</td><td>10703</td></tr><tr><td>215</td><td>12999</td></tr><tr><td>210</td><td>15685</td></tr><tr><td>205</td><td>18251</td></tr><tr><td>200</td><td>21259</td></tr><tr><td>195</td><td>23759</td></tr><tr><td>190</td><td>26380</td></tr><tr><td>185</td><td>28457</td></tr><tr><td>180</td><td>30656</td></tr><tr><td>175</td><td>32567</td></tr><tr><td>170</td><td>34470</td></tr><tr><td>165</td><td>36280</td></tr><tr><td>160</td><td>37772</td></tr><tr><td>155</td><td>39213</td></tr><tr><td>150</td><td>40388</td></tr><tr><td>145</td><td>41529</td></tr><tr><td>140</td><td>42435</td></tr><tr><td>135</td><td>43367</td></tr><tr><td>130</td><td>43995</td></tr><tr><td>125</td><td>44651</td></tr><tr><td>120</td><td>45099</td></tr><tr><td>115</td><td>45552</td></tr><tr><td>110</td><td>45801</td></tr><tr><td>105</td><td>46138</td></tr><tr><td>100</td><td>46341</td></tr><tr><td>95</td><td>46529</td></tr><tr><td>90</td><td>46631</td></tr><tr><td>85</td><td>46754</td></tr><tr><td>80</td><td>46812</td></tr><tr><td>75</td><td>46885</td></tr><tr><td>70</td><td>46930</td></tr><tr><td>65</td><td>46983</td></tr><tr><td>60</td><td>47010</td></tr><tr><td>55</td><td>47057</td></tr><tr><td>50</td><td>47071</td></tr><tr><td>45</td><td>47089</td></tr><tr><td>40</td><td>47093</td></tr><tr><td>35</td><td>47122</td></tr><tr><td>30</td><td>47128</td></tr><tr><td>25</td><td>47138</td></tr><tr><td>20</td><td>47143</td></tr><tr><td>10</td><td>47173</td></tr><tr><td>0</td><td>47197</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 42180 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>365</td><td>3</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>7</td></tr><tr><td>330</td><td>9</td></tr><tr><td>325</td><td>21</td></tr><tr><td>320</td><td>39</td></tr><tr><td>315</td><td>59</td></tr><tr><td>310</td><td>77</td></tr><tr><td>305</td><td>123</td></tr><tr><td>300</td><td>187</td></tr><tr><td>295</td><td>261</td></tr><tr><td>290</td><td>359</td></tr><tr><td>285</td><td>521</td></tr><tr><td>280</td><td>754</td></tr><tr><td>275</td><td>1071</td></tr><tr><td>270</td><td>1434</td></tr><tr><td>265</td><td>2047</td></tr><tr><td>260</td><td>2686</td></tr><tr><td>255</td><td>3537</td></tr><tr><td>250</td><td>4523</td></tr><tr><td>245</td><td>5777</td></tr><tr><td>240</td><td>7301</td></tr><tr><td>235</td><td>9045</td></tr><tr><td>230</td><td>10971</td></tr><tr><td>225</td><td>13041</td></tr><tr><td>220</td><td>15374</td></tr><tr><td>215</td><td>17751</td></tr><tr><td>210</td><td>20264</td></tr><tr><td>205</td><td>22540</td></tr><tr><td>200</td><td>24879</td></tr><tr><td>195</td><td>26848</td></tr><tr><td>190</td><td>28748</td></tr><tr><td>185</td><td>30209</td></tr><tr><td>180</td><td>31875</td></tr><tr><td>175</td><td>33276</td></tr><tr><td>170</td><td>34546</td></tr><tr><td>165</td><td>35574</td></tr><tr><td>160</td><td>36536</td></tr><tr><td>155</td><td>37362</td></tr><tr><td>150</td><td>38086</td></tr><tr><td>145</td><td>38698</td></tr><tr><td>140</td><td>39276</td></tr><tr><td>135</td><td>39736</td></tr><tr><td>130</td><td>40159</td></tr><tr><td>125</td><td>40471</td></tr><tr><td>120</td><td>40698</td></tr><tr><td>115</td><td>40948</td></tr><tr><td>110</td><td>41107</td></tr><tr><td>105</td><td>41241</td></tr><tr><td>100</td><td>41334</td></tr><tr><td>95</td><td>41440</td></tr><tr><td>90</td><td>41502</td></tr><tr><td>85</td><td>41609</td></tr><tr><td>80</td><td>41647</td></tr><tr><td>75</td><td>41683</td></tr><tr><td>70</td><td>41709</td></tr><tr><td>65</td><td>41743</td></tr><tr><td>60</td><td>41753</td></tr><tr><td>55</td><td>41777</td></tr><tr><td>50</td><td>41787</td></tr><tr><td>40</td><td>41816</td></tr><tr><td>35</td><td>41829</td></tr><tr><td>30</td><td>41833</td></tr><tr><td>25</td><td>41858</td></tr><tr><td>20</td><td>41864</td></tr><tr><td>10</td><td>41878</td></tr><tr><td>0</td><td>41900</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 31824 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>25</td></tr><tr><td>335</td><td>35</td></tr><tr><td>330</td><td>51</td></tr><tr><td>325</td><td>75</td></tr><tr><td>320</td><td>95</td></tr><tr><td>315</td><td>147</td></tr><tr><td>310</td><td>201</td></tr><tr><td>305</td><td>273</td></tr><tr><td>300</td><td>389</td></tr><tr><td>295</td><td>548</td></tr><tr><td>290</td><td>764</td></tr><tr><td>285</td><td>1051</td></tr><tr><td>280</td><td>1392</td></tr><tr><td>275</td><td>1820</td></tr><tr><td>270</td><td>2383</td></tr><tr><td>265</td><td>3033</td></tr><tr><td>260</td><td>3880</td></tr><tr><td>255</td><td>4871</td></tr><tr><td>250</td><td>5983</td></tr><tr><td>245</td><td>7466</td></tr><tr><td>240</td><td>8849</td></tr><tr><td>235</td><td>10388</td></tr><tr><td>230</td><td>12102</td></tr><tr><td>225</td><td>13907</td></tr><tr><td>220</td><td>15778</td></tr><tr><td>215</td><td>17507</td></tr><tr><td>210</td><td>19248</td></tr><tr><td>205</td><td>20687</td></tr><tr><td>200</td><td>22139</td></tr><tr><td>195</td><td>23411</td></tr><tr><td>190</td><td>24542</td></tr><tr><td>185</td><td>25433</td></tr><tr><td>180</td><td>26240</td></tr><tr><td>175</td><td>26990</td></tr><tr><td>170</td><td>27660</td></tr><tr><td>165</td><td>28235</td></tr><tr><td>160</td><td>28689</td></tr><tr><td>155</td><td>29167</td></tr><tr><td>150</td><td>29547</td></tr><tr><td>145</td><td>29874</td></tr><tr><td>140</td><td>30106</td></tr><tr><td>135</td><td>30361</td></tr><tr><td>130</td><td>30555</td></tr><tr><td>125</td><td>30752</td></tr><tr><td>120</td><td>30880</td></tr><tr><td>115</td><td>30998</td></tr><tr><td>110</td><td>31087</td></tr><tr><td>105</td><td>31207</td></tr><tr><td>100</td><td>31274</td></tr><tr><td>95</td><td>31348</td></tr><tr><td>90</td><td>31376</td></tr><tr><td>85</td><td>31401</td></tr><tr><td>80</td><td>31415</td></tr><tr><td>75</td><td>31463</td></tr><tr><td>70</td><td>31484</td></tr><tr><td>65</td><td>31523</td></tr><tr><td>60</td><td>31541</td></tr><tr><td>55</td><td>31555</td></tr><tr><td>50</td><td>31559</td></tr><tr><td>45</td><td>31567</td></tr><tr><td>40</td><td>31571</td></tr><tr><td>30</td><td>31579</td></tr><tr><td>25</td><td>31593</td></tr><tr><td>20</td><td>31597</td></tr><tr><td>10</td><td>31610</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 13329 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>365</td><td>1</td></tr><tr><td>360</td><td>3</td></tr><tr><td>355</td><td>9</td></tr><tr><td>350</td><td>11</td></tr><tr><td>345</td><td>17</td></tr><tr><td>340</td><td>27</td></tr><tr><td>335</td><td>29</td></tr><tr><td>330</td><td>39</td></tr><tr><td>325</td><td>67</td></tr><tr><td>320</td><td>85</td></tr><tr><td>315</td><td>115</td></tr><tr><td>310</td><td>153</td></tr><tr><td>305</td><td>213</td></tr><tr><td>300</td><td>279</td></tr><tr><td>295</td><td>407</td></tr><tr><td>290</td><td>539</td></tr><tr><td>285</td><td>747</td></tr><tr><td>280</td><td>954</td></tr><tr><td>275</td><td>1249</td></tr><tr><td>270</td><td>1568</td></tr><tr><td>265</td><td>1972</td></tr><tr><td>260</td><td>2334</td></tr><tr><td>255</td><td>2821</td></tr><tr><td>250</td><td>3370</td></tr><tr><td>245</td><td>4013</td></tr><tr><td>240</td><td>4697</td></tr><tr><td>235</td><td>5428</td></tr><tr><td>230</td><td>6145</td></tr><tr><td>225</td><td>6895</td></tr><tr><td>220</td><td>7607</td></tr><tr><td>215</td><td>8300</td></tr><tr><td>210</td><td>8956</td></tr><tr><td>205</td><td>9453</td></tr><tr><td>200</td><td>9983</td></tr><tr><td>195</td><td>10444</td></tr><tr><td>190</td><td>10847</td></tr><tr><td>185</td><td>11147</td></tr><tr><td>180</td><td>11436</td></tr><tr><td>175</td><td>11691</td></tr><tr><td>170</td><td>11919</td></tr><tr><td>165</td><td>12093</td></tr><tr><td>160</td><td>12216</td></tr><tr><td>155</td><td>12378</td></tr><tr><td>150</td><td>12492</td></tr><tr><td>145</td><td>12601</td></tr><tr><td>140</td><td>12675</td></tr><tr><td>135</td><td>12765</td></tr><tr><td>130</td><td>12815</td></tr><tr><td>125</td><td>12891</td></tr><tr><td>120</td><td>12941</td></tr><tr><td>115</td><td>12998</td></tr><tr><td>110</td><td>13026</td></tr><tr><td>105</td><td>13063</td></tr><tr><td>100</td><td>13088</td></tr><tr><td>95</td><td>13098</td></tr><tr><td>90</td><td>13100</td></tr><tr><td>85</td><td>13118</td></tr><tr><td>80</td><td>13133</td></tr><tr><td>75</td><td>13143</td></tr><tr><td>70</td><td>13149</td></tr><tr><td>65</td><td>13163</td></tr><tr><td>60</td><td>13165</td></tr><tr><td>50</td><td>13170</td></tr><tr><td>40</td><td>13188</td></tr><tr><td>35</td><td>13190</td></tr><tr><td>30</td><td>13194</td></tr><tr><td>20</td><td>13198</td></tr><tr><td>10</td><td>13212</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 2863 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>365</td><td>1</td></tr><tr><td>355</td><td>3</td></tr><tr><td>350</td><td>15</td></tr><tr><td>345</td><td>23</td></tr><tr><td>340</td><td>29</td></tr><tr><td>335</td><td>31</td></tr><tr><td>330</td><td>41</td></tr><tr><td>325</td><td>51</td></tr><tr><td>320</td><td>77</td></tr><tr><td>315</td><td>107</td></tr><tr><td>310</td><td>131</td></tr><tr><td>305</td><td>157</td></tr><tr><td>300</td><td>199</td></tr><tr><td>295</td><td>261</td></tr><tr><td>290</td><td>329</td></tr><tr><td>285</td><td>413</td></tr><tr><td>280</td><td>480</td></tr><tr><td>275</td><td>579</td></tr><tr><td>270</td><td>667</td></tr><tr><td>265</td><td>807</td></tr><tr><td>260</td><td>924</td></tr><tr><td>255</td><td>1042</td></tr><tr><td>250</td><td>1150</td></tr><tr><td>245</td><td>1308</td></tr><tr><td>240</td><td>1435</td></tr><tr><td>235</td><td>1585</td></tr><tr><td>230</td><td>1715</td></tr><tr><td>225</td><td>1862</td></tr><tr><td>220</td><td>1987</td></tr><tr><td>215</td><td>2106</td></tr><tr><td>210</td><td>2228</td></tr><tr><td>205</td><td>2329</td></tr><tr><td>200</td><td>2399</td></tr><tr><td>195</td><td>2455</td></tr><tr><td>190</td><td>2505</td></tr><tr><td>185</td><td>2538</td></tr><tr><td>180</td><td>2576</td></tr><tr><td>175</td><td>2598</td></tr><tr><td>170</td><td>2623</td></tr><tr><td>165</td><td>2649</td></tr><tr><td>160</td><td>2674</td></tr><tr><td>155</td><td>2700</td></tr><tr><td>150</td><td>2722</td></tr><tr><td>145</td><td>2758</td></tr><tr><td>140</td><td>2784</td></tr><tr><td>135</td><td>2802</td></tr><tr><td>130</td><td>2808</td></tr><tr><td>125</td><td>2814</td></tr><tr><td>120</td><td>2820</td></tr><tr><td>110</td><td>2827</td></tr><tr><td>100</td><td>2831</td></tr><tr><td>95</td><td>2833</td></tr><tr><td>90</td><td>2835</td></tr><tr><td>85</td><td>2839</td></tr><tr><td>70</td><td>2844</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 2079 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>365</td><td>3</td></tr><tr><td>360</td><td>7</td></tr><tr><td>355</td><td>11</td></tr><tr><td>350</td><td>19</td></tr><tr><td>345</td><td>27</td></tr><tr><td>340</td><td>32</td></tr><tr><td>335</td><td>42</td></tr><tr><td>330</td><td>56</td></tr><tr><td>325</td><td>76</td></tr><tr><td>320</td><td>100</td></tr><tr><td>315</td><td>120</td></tr><tr><td>310</td><td>150</td></tr><tr><td>305</td><td>188</td></tr><tr><td>300</td><td>224</td></tr><tr><td>295</td><td>290</td></tr><tr><td>290</td><td>352</td></tr><tr><td>285</td><td>432</td></tr><tr><td>280</td><td>498</td></tr><tr><td>275</td><td>568</td></tr><tr><td>270</td><td>649</td></tr><tr><td>265</td><td>747</td></tr><tr><td>260</td><td>821</td></tr><tr><td>255</td><td>903</td></tr><tr><td>250</td><td>1019</td></tr><tr><td>245</td><td>1100</td></tr><tr><td>240</td><td>1192</td></tr><tr><td>235</td><td>1286</td></tr><tr><td>230</td><td>1363</td></tr><tr><td>225</td><td>1448</td></tr><tr><td>220</td><td>1520</td></tr><tr><td>215</td><td>1603</td></tr><tr><td>210</td><td>1669</td></tr><tr><td>205</td><td>1715</td></tr><tr><td>200</td><td>1765</td></tr><tr><td>195</td><td>1806</td></tr><tr><td>190</td><td>1836</td></tr><tr><td>185</td><td>1867</td></tr><tr><td>180</td><td>1891</td></tr><tr><td>175</td><td>1905</td></tr><tr><td>170</td><td>1921</td></tr><tr><td>165</td><td>1947</td></tr><tr><td>160</td><td>1963</td></tr><tr><td>155</td><td>1977</td></tr><tr><td>150</td><td>1989</td></tr><tr><td>145</td><td>2002</td></tr><tr><td>140</td><td>2010</td></tr><tr><td>130</td><td>2017</td></tr><tr><td>125</td><td>2030</td></tr><tr><td>120</td><td>2036</td></tr><tr><td>115</td><td>2042</td></tr><tr><td>110</td><td>2046</td></tr><tr><td>100</td><td>2050</td></tr><tr><td>90</td><td>2056</td></tr><tr><td>85</td><td>2058</td></tr><tr><td>80</td><td>2059</td></tr><tr><td>40</td><td>2063</td></tr><tr><td>35</td><td>2065</td></tr><tr><td>0</td><td>2067</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 282 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>275</td><td>2</td></tr><tr><td>270</td><td>5</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>9</td></tr><tr><td>255</td><td>13</td></tr><tr><td>250</td><td>18</td></tr><tr><td>245</td><td>24</td></tr><tr><td>240</td><td>30</td></tr><tr><td>235</td><td>36</td></tr><tr><td>230</td><td>49</td></tr><tr><td>225</td><td>60</td></tr><tr><td>220</td><td>68</td></tr><tr><td>215</td><td>81</td></tr><tr><td>210</td><td>89</td></tr><tr><td>205</td><td>101</td></tr><tr><td>200</td><td>116</td></tr><tr><td>195</td><td>124</td></tr><tr><td>190</td><td>132</td></tr><tr><td>185</td><td>146</td></tr><tr><td>180</td><td>165</td></tr><tr><td>175</td><td>177</td></tr><tr><td>170</td><td>187</td></tr><tr><td>165</td><td>191</td></tr><tr><td>160</td><td>195</td></tr><tr><td>155</td><td>207</td></tr><tr><td>150</td><td>215</td></tr><tr><td>145</td><td>219</td></tr><tr><td>140</td><td>226</td></tr><tr><td>135</td><td>228</td></tr><tr><td>130</td><td>232</td></tr><tr><td>125</td><td>242</td></tr><tr><td>120</td><td>244</td></tr><tr><td>115</td><td>252</td></tr><tr><td>110</td><td>254</td></tr><tr><td>100</td><td>256</td></tr><tr><td>95</td><td>258</td></tr><tr><td>90</td><td>260</td></tr><tr><td>80</td><td>262</td></tr><tr><td>75</td><td>264</td></tr><tr><td>70</td><td>266</td></tr><tr><td>60</td><td>268</td></tr><tr><td>50</td><td>270</td></tr><tr><td>35</td><td>272</td></tr><tr><td>30</td><td>274</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 162 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>315</td><td>1</td></tr><tr><td>285</td><td>3</td></tr><tr><td>275</td><td>5</td></tr><tr><td>270</td><td>7</td></tr><tr><td>260</td><td>9</td></tr><tr><td>245</td><td>13</td></tr><tr><td>240</td><td>17</td></tr><tr><td>235</td><td>27</td></tr><tr><td>230</td><td>31</td></tr><tr><td>225</td><td>39</td></tr><tr><td>220</td><td>45</td></tr><tr><td>215</td><td>55</td></tr><tr><td>210</td><td>61</td></tr><tr><td>205</td><td>67</td></tr><tr><td>200</td><td>77</td></tr><tr><td>195</td><td>89</td></tr><tr><td>190</td><td>95</td></tr><tr><td>185</td><td>110</td></tr><tr><td>180</td><td>117</td></tr><tr><td>170</td><td>121</td></tr><tr><td>165</td><td>123</td></tr><tr><td>160</td><td>125</td></tr><tr><td>155</td><td>133</td></tr><tr><td>150</td><td>137</td></tr><tr><td>145</td><td>139</td></tr><tr><td>140</td><td>141</td></tr><tr><td>135</td><td>145</td></tr><tr><td>130</td><td>151</td></tr><tr><td>125</td><td>152</td></tr><tr><td>115</td><td>154</td></tr><tr><td>100</td><td>156</td></tr><tr><td>90</td><td>158</td></tr><tr><td>60</td><td>160</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 128 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>280</td><td>2</td></tr><tr><td>265</td><td>5</td></tr><tr><td>260</td><td>7</td></tr><tr><td>255</td><td>9</td></tr><tr><td>250</td><td>11</td></tr><tr><td>245</td><td>13</td></tr><tr><td>240</td><td>15</td></tr><tr><td>230</td><td>19</td></tr><tr><td>220</td><td>23</td></tr><tr><td>215</td><td>29</td></tr><tr><td>210</td><td>31</td></tr><tr><td>205</td><td>37</td></tr><tr><td>200</td><td>44</td></tr><tr><td>195</td><td>48</td></tr><tr><td>190</td><td>50</td></tr><tr><td>185</td><td>52</td></tr><tr><td>170</td><td>57</td></tr><tr><td>165</td><td>64</td></tr><tr><td>160</td><td>66</td></tr><tr><td>155</td><td>70</td></tr><tr><td>150</td><td>73</td></tr><tr><td>140</td><td>80</td></tr><tr><td>130</td><td>84</td></tr><tr><td>125</td><td>89</td></tr><tr><td>120</td><td>93</td></tr><tr><td>115</td><td>101</td></tr><tr><td>110</td><td>103</td></tr><tr><td>90</td><td>107</td></tr><tr><td>85</td><td>109</td></tr><tr><td>70</td><td>111</td></tr><tr><td>65</td><td>113</td></tr><tr><td>20</td><td>115</td></tr><tr><td>10</td><td>119</td></tr><tr><td>0</td><td>121</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-16-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation en binôme) : 346 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-16-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-16-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>290</td><td>3</td></tr><tr><td>275</td><td>4</td></tr><tr><td>250</td><td>5</td></tr><tr><td>245</td><td>7</td></tr><tr><td>240</td><td>9</td></tr><tr><td>235</td><td>10</td></tr><tr><td>230</td><td>11</td></tr><tr><td>225</td><td>16</td></tr><tr><td>220</td><td>20</td></tr><tr><td>215</td><td>23</td></tr><tr><td>210</td><td>28</td></tr><tr><td>205</td><td>38</td></tr><tr><td>200</td><td>52</td></tr><tr><td>195</td><td>60</td></tr><tr><td>190</td><td>68</td></tr><tr><td>185</td><td>81</td></tr><tr><td>180</td><td>90</td></tr><tr><td>175</td><td>101</td></tr><tr><td>170</td><td>110</td></tr><tr><td>165</td><td>128</td></tr><tr><td>160</td><td>134</td></tr><tr><td>155</td><td>150</td></tr><tr><td>150</td><td>159</td></tr><tr><td>145</td><td>174</td></tr><tr><td>140</td><td>191</td></tr><tr><td>135</td><td>203</td></tr><tr><td>130</td><td>217</td></tr><tr><td>125</td><td>234</td></tr><tr><td>120</td><td>248</td></tr><tr><td>115</td><td>255</td></tr><tr><td>110</td><td>260</td></tr><tr><td>105</td><td>275</td></tr><tr><td>100</td><td>283</td></tr><tr><td>95</td><td>290</td></tr><tr><td>90</td><td>296</td></tr><tr><td>85</td><td>301</td></tr><tr><td>80</td><td>303</td></tr><tr><td>75</td><td>311</td></tr><tr><td>70</td><td>313</td></tr><tr><td>60</td><td>320</td></tr><tr><td>50</td><td>321</td></tr><tr><td>40</td><td>323</td></tr><tr><td>20</td><td>325</td></tr><tr><td>10</td><td>328</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-17-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation en binôme) : 560 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-17-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-17-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>260</td><td>1</td></tr><tr><td>250</td><td>2</td></tr><tr><td>245</td><td>5</td></tr><tr><td>240</td><td>7</td></tr><tr><td>235</td><td>8</td></tr><tr><td>230</td><td>12</td></tr><tr><td>225</td><td>20</td></tr><tr><td>220</td><td>30</td></tr><tr><td>215</td><td>51</td></tr><tr><td>210</td><td>58</td></tr><tr><td>205</td><td>86</td></tr><tr><td>200</td><td>101</td></tr><tr><td>195</td><td>115</td></tr><tr><td>190</td><td>134</td></tr><tr><td>185</td><td>153</td></tr><tr><td>180</td><td>165</td></tr><tr><td>175</td><td>176</td></tr><tr><td>170</td><td>190</td></tr><tr><td>165</td><td>219</td></tr><tr><td>160</td><td>249</td></tr><tr><td>155</td><td>284</td></tr><tr><td>150</td><td>304</td></tr><tr><td>145</td><td>318</td></tr><tr><td>140</td><td>331</td></tr><tr><td>135</td><td>357</td></tr><tr><td>130</td><td>365</td></tr><tr><td>125</td><td>381</td></tr><tr><td>120</td><td>398</td></tr><tr><td>115</td><td>427</td></tr><tr><td>110</td><td>440</td></tr><tr><td>105</td><td>461</td></tr><tr><td>100</td><td>463</td></tr><tr><td>95</td><td>480</td></tr><tr><td>90</td><td>487</td></tr><tr><td>85</td><td>501</td></tr><tr><td>80</td><td>503</td></tr><tr><td>75</td><td>508</td></tr><tr><td>70</td><td>510</td></tr><tr><td>60</td><td>520</td></tr><tr><td>45</td><td>526</td></tr><tr><td>25</td><td>528</td></tr><tr><td>20</td><td>529</td></tr><tr><td>0</td><td>537</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 486 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>265</td><td>3</td></tr><tr><td>260</td><td>4</td></tr><tr><td>255</td><td>6</td></tr><tr><td>250</td><td>10</td></tr><tr><td>245</td><td>17</td></tr><tr><td>240</td><td>32</td></tr><tr><td>235</td><td>42</td></tr><tr><td>230</td><td>60</td></tr><tr><td>225</td><td>75</td></tr><tr><td>220</td><td>87</td></tr><tr><td>215</td><td>93</td></tr><tr><td>210</td><td>106</td></tr><tr><td>205</td><td>125</td></tr><tr><td>200</td><td>141</td></tr><tr><td>195</td><td>159</td></tr><tr><td>190</td><td>182</td></tr><tr><td>185</td><td>197</td></tr><tr><td>180</td><td>213</td></tr><tr><td>175</td><td>235</td></tr><tr><td>170</td><td>255</td></tr><tr><td>165</td><td>279</td></tr><tr><td>160</td><td>293</td></tr><tr><td>155</td><td>311</td></tr><tr><td>150</td><td>317</td></tr><tr><td>145</td><td>333</td></tr><tr><td>140</td><td>345</td></tr><tr><td>135</td><td>358</td></tr><tr><td>130</td><td>367</td></tr><tr><td>125</td><td>380</td></tr><tr><td>120</td><td>389</td></tr><tr><td>115</td><td>402</td></tr><tr><td>110</td><td>406</td></tr><tr><td>105</td><td>419</td></tr><tr><td>100</td><td>421</td></tr><tr><td>95</td><td>429</td></tr><tr><td>90</td><td>433</td></tr><tr><td>80</td><td>438</td></tr><tr><td>70</td><td>444</td></tr><tr><td>60</td><td>448</td></tr><tr><td>50</td><td>452</td></tr><tr><td>45</td><td>453</td></tr><tr><td>40</td><td>455</td></tr><tr><td>30</td><td>457</td></tr><tr><td>20</td><td>458</td></tr><tr><td>10</td><td>462</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-634953296154205910-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 514 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-634953296154205910-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-634953296154205910-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>300</td><td>2</td></tr><tr><td>295</td><td>3</td></tr><tr><td>290</td><td>5</td></tr><tr><td>280</td><td>8</td></tr><tr><td>275</td><td>12</td></tr><tr><td>270</td><td>15</td></tr><tr><td>265</td><td>16</td></tr><tr><td>260</td><td>22</td></tr><tr><td>255</td><td>32</td></tr><tr><td>250</td><td>40</td></tr><tr><td>245</td><td>53</td></tr><tr><td>240</td><td>60</td></tr><tr><td>235</td><td>76</td></tr><tr><td>230</td><td>88</td></tr><tr><td>225</td><td>97</td></tr><tr><td>220</td><td>119</td></tr><tr><td>215</td><td>131</td></tr><tr><td>210</td><td>154</td></tr><tr><td>205</td><td>173</td></tr><tr><td>200</td><td>203</td></tr><tr><td>195</td><td>217</td></tr><tr><td>190</td><td>238</td></tr><tr><td>185</td><td>253</td></tr><tr><td>180</td><td>266</td></tr><tr><td>175</td><td>288</td></tr><tr><td>170</td><td>304</td></tr><tr><td>165</td><td>327</td></tr><tr><td>160</td><td>343</td></tr><tr><td>155</td><td>352</td></tr><tr><td>150</td><td>365</td></tr><tr><td>145</td><td>380</td></tr><tr><td>140</td><td>384</td></tr><tr><td>135</td><td>397</td></tr><tr><td>130</td><td>408</td></tr><tr><td>125</td><td>416</td></tr><tr><td>120</td><td>420</td></tr><tr><td>115</td><td>434</td></tr><tr><td>110</td><td>439</td></tr><tr><td>105</td><td>447</td></tr><tr><td>100</td><td>456</td></tr><tr><td>95</td><td>458</td></tr><tr><td>90</td><td>459</td></tr><tr><td>80</td><td>463</td></tr><tr><td>75</td><td>465</td></tr><tr><td>70</td><td>468</td></tr><tr><td>60</td><td>469</td></tr><tr><td>50</td><td>471</td></tr><tr><td>40</td><td>475</td></tr><tr><td>25</td><td>479</td></tr><tr><td>20</td><td>481</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
