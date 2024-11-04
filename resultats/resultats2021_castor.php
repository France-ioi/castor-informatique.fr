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

<!--<li>671020 élèves ont participé, dont 0% de filles.</li>
<li>3635 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-29129959113254768-4-1'><a href='#tabs-29129959113254768-4-1'>CM1</a></li><li class='nbContestants1' id='link-29129959113254768-5-1'><a href='#tabs-29129959113254768-5-1'>CM2</a></li><li class='nbContestants1' id='link-29129959113254768-6-1'><a href='#tabs-29129959113254768-6-1'>6e</a></li><li class='nbContestants1' id='link-29129959113254768-7-1'><a href='#tabs-29129959113254768-7-1'>5e</a></li><li class='nbContestants1' id='link-29129959113254768-8-1'><a href='#tabs-29129959113254768-8-1'>4e</a></li><li class='nbContestants1' id='link-29129959113254768-9-1'><a href='#tabs-29129959113254768-9-1'>3e</a></li><li class='nbContestants1' id='link-29129959113254768-10-1'><a href='#tabs-29129959113254768-10-1'>2de</a></li><li class='nbContestants1' id='link-29129959113254768-11-1'><a href='#tabs-29129959113254768-11-1'>1re</a></li><li class='nbContestants1' id='link-29129959113254768-12-1'><a href='#tabs-29129959113254768-12-1'>Tale</a></li><li class='nbContestants1' id='link-29129959113254768-13-1'><a href='#tabs-29129959113254768-13-1'>2de pro.</a></li><li class='nbContestants1' id='link-29129959113254768-14-1'><a href='#tabs-29129959113254768-14-1'>1re pro.</a></li><li class='nbContestants1' id='link-29129959113254768-15-1'><a href='#tabs-29129959113254768-15-1'>Tale pro.</a></li><li class='nbContestants1' id='link-29129959113254768-16-1'><a href='#tabs-29129959113254768-16-1'>6e Segpa</a></li><li class='nbContestants1' id='link-29129959113254768-17-1'><a href='#tabs-29129959113254768-17-1'>5e Segpa</a></li><li class='nbContestants1' id='link-29129959113254768-18-1'><a href='#tabs-29129959113254768-18-1'>4e Segpa</a></li><li class='nbContestants1' id='link-29129959113254768-19-1'><a href='#tabs-29129959113254768-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-29129959113254768-4-2'><a href='#tabs-29129959113254768-4-2'>CM1</a></li><li class='nbContestants2' id='link-29129959113254768-5-2'><a href='#tabs-29129959113254768-5-2'>CM2</a></li><li class='nbContestants2' id='link-29129959113254768-6-2'><a href='#tabs-29129959113254768-6-2'>6e</a></li><li class='nbContestants2' id='link-29129959113254768-7-2'><a href='#tabs-29129959113254768-7-2'>5e</a></li><li class='nbContestants2' id='link-29129959113254768-8-2'><a href='#tabs-29129959113254768-8-2'>4e</a></li><li class='nbContestants2' id='link-29129959113254768-9-2'><a href='#tabs-29129959113254768-9-2'>3e</a></li><li class='nbContestants2' id='link-29129959113254768-10-2'><a href='#tabs-29129959113254768-10-2'>2de</a></li><li class='nbContestants2' id='link-29129959113254768-11-2'><a href='#tabs-29129959113254768-11-2'>1re</a></li><li class='nbContestants2' id='link-29129959113254768-12-2'><a href='#tabs-29129959113254768-12-2'>Tale</a></li><li class='nbContestants2' id='link-29129959113254768-13-2'><a href='#tabs-29129959113254768-13-2'>2de pro.</a></li><li class='nbContestants2' id='link-29129959113254768-14-2'><a href='#tabs-29129959113254768-14-2'>1re pro.</a></li><li class='nbContestants2' id='link-29129959113254768-15-2'><a href='#tabs-29129959113254768-15-2'>Tale pro.</a></li><li class='nbContestants2' id='link-29129959113254768-16-2'><a href='#tabs-29129959113254768-16-2'>6e Segpa</a></li><li class='nbContestants2' id='link-29129959113254768-17-2'><a href='#tabs-29129959113254768-17-2'>5e Segpa</a></li><li class='nbContestants2' id='link-29129959113254768-18-2'><a href='#tabs-29129959113254768-18-2'>4e Segpa</a></li><li class='nbContestants2' id='link-29129959113254768-19-2'><a href='#tabs-29129959113254768-19-2'>3e Segpa</a></li></ul><div id='tabs-29129959113254768-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 4545 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>385</td><td>1</td></tr><tr><td>365</td><td>2</td></tr><tr><td>345</td><td>3</td></tr><tr><td>340</td><td>4</td></tr><tr><td>338</td><td>5</td></tr><tr><td>325</td><td>6</td></tr><tr><td>320</td><td>8</td></tr><tr><td>310</td><td>10</td></tr><tr><td>300</td><td>13</td></tr><tr><td>295</td><td>18</td></tr><tr><td>290</td><td>21</td></tr><tr><td>285</td><td>29</td></tr><tr><td>280</td><td>33</td></tr><tr><td>275</td><td>43</td></tr><tr><td>270</td><td>49</td></tr><tr><td>265</td><td>59</td></tr><tr><td>260</td><td>69</td></tr><tr><td>255</td><td>91</td></tr><tr><td>250</td><td>102</td></tr><tr><td>245</td><td>131</td></tr><tr><td>240</td><td>162</td></tr><tr><td>235</td><td>197</td></tr><tr><td>230</td><td>227</td></tr><tr><td>225</td><td>273</td></tr><tr><td>220</td><td>322</td></tr><tr><td>215</td><td>385</td></tr><tr><td>210</td><td>440</td></tr><tr><td>205</td><td>514</td></tr><tr><td>203</td><td>609</td></tr><tr><td>200</td><td>610</td></tr><tr><td>195</td><td>699</td></tr><tr><td>190</td><td>814</td></tr><tr><td>185</td><td>925</td></tr><tr><td>180</td><td>1043</td></tr><tr><td>175</td><td>1153</td></tr><tr><td>170</td><td>1268</td></tr><tr><td>165</td><td>1400</td></tr><tr><td>160</td><td>1558</td></tr><tr><td>155</td><td>1692</td></tr><tr><td>150</td><td>1844</td></tr><tr><td>145</td><td>1959</td></tr><tr><td>140</td><td>2127</td></tr><tr><td>135</td><td>2277</td></tr><tr><td>130</td><td>2441</td></tr><tr><td>125</td><td>2557</td></tr><tr><td>120</td><td>2710</td></tr><tr><td>115</td><td>2847</td></tr><tr><td>113</td><td>2997</td></tr><tr><td>110</td><td>2998</td></tr><tr><td>105</td><td>3134</td></tr><tr><td>100</td><td>3293</td></tr><tr><td>95</td><td>3397</td></tr><tr><td>90</td><td>3530</td></tr><tr><td>85</td><td>3645</td></tr><tr><td>80</td><td>3741</td></tr><tr><td>75</td><td>3801</td></tr><tr><td>70</td><td>3886</td></tr><tr><td>65</td><td>3954</td></tr><tr><td>60</td><td>4014</td></tr><tr><td>55</td><td>4066</td></tr><tr><td>50</td><td>4115</td></tr><tr><td>45</td><td>4158</td></tr><tr><td>40</td><td>4192</td></tr><tr><td>35</td><td>4225</td></tr><tr><td>30</td><td>4245</td></tr><tr><td>25</td><td>4273</td></tr><tr><td>20</td><td>4278</td></tr><tr><td>15</td><td>4310</td></tr><tr><td>10</td><td>4317</td></tr><tr><td>5</td><td>4346</td></tr><tr><td>0</td><td>4348</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 6195 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>345</td><td>2</td></tr><tr><td>340</td><td>4</td></tr><tr><td>335</td><td>5</td></tr><tr><td>330</td><td>9</td></tr><tr><td>325</td><td>10</td></tr><tr><td>315</td><td>11</td></tr><tr><td>310</td><td>13</td></tr><tr><td>305</td><td>18</td></tr><tr><td>300</td><td>24</td></tr><tr><td>295</td><td>29</td></tr><tr><td>290</td><td>36</td></tr><tr><td>285</td><td>54</td></tr><tr><td>280</td><td>69</td></tr><tr><td>275</td><td>109</td></tr><tr><td>270</td><td>136</td></tr><tr><td>268</td><td>168</td></tr><tr><td>265</td><td>169</td></tr><tr><td>260</td><td>203</td></tr><tr><td>255</td><td>254</td></tr><tr><td>250</td><td>294</td></tr><tr><td>245</td><td>380</td></tr><tr><td>240</td><td>465</td></tr><tr><td>235</td><td>572</td></tr><tr><td>230</td><td>672</td></tr><tr><td>225</td><td>795</td></tr><tr><td>220</td><td>918</td></tr><tr><td>215</td><td>1055</td></tr><tr><td>210</td><td>1207</td></tr><tr><td>205</td><td>1368</td></tr><tr><td>200</td><td>1552</td></tr><tr><td>195</td><td>1739</td></tr><tr><td>190</td><td>1928</td></tr><tr><td>185</td><td>2114</td></tr><tr><td>180</td><td>2319</td></tr><tr><td>175</td><td>2505</td></tr><tr><td>170</td><td>2750</td></tr><tr><td>165</td><td>2936</td></tr><tr><td>160</td><td>3142</td></tr><tr><td>155</td><td>3352</td></tr><tr><td>150</td><td>3574</td></tr><tr><td>145</td><td>3776</td></tr><tr><td>143</td><td>4006</td></tr><tr><td>140</td><td>4007</td></tr><tr><td>135</td><td>4171</td></tr><tr><td>130</td><td>4393</td></tr><tr><td>125</td><td>4538</td></tr><tr><td>120</td><td>4711</td></tr><tr><td>115</td><td>4824</td></tr><tr><td>110</td><td>4979</td></tr><tr><td>105</td><td>5098</td></tr><tr><td>100</td><td>5235</td></tr><tr><td>95</td><td>5312</td></tr><tr><td>90</td><td>5410</td></tr><tr><td>85</td><td>5474</td></tr><tr><td>80</td><td>5569</td></tr><tr><td>75</td><td>5616</td></tr><tr><td>70</td><td>5676</td></tr><tr><td>65</td><td>5716</td></tr><tr><td>60</td><td>5764</td></tr><tr><td>55</td><td>5803</td></tr><tr><td>50</td><td>5841</td></tr><tr><td>45</td><td>5865</td></tr><tr><td>40</td><td>5883</td></tr><tr><td>35</td><td>5905</td></tr><tr><td>30</td><td>5918</td></tr><tr><td>25</td><td>5936</td></tr><tr><td>20</td><td>5944</td></tr><tr><td>15</td><td>5969</td></tr><tr><td>10</td><td>5973</td></tr><tr><td>5</td><td>5994</td></tr><tr><td>0</td><td>5999</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation individuelle) : 106956 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>445</td><td>1</td></tr><tr><td>425</td><td>2</td></tr><tr><td>415</td><td>3</td></tr><tr><td>410</td><td>4</td></tr><tr><td>405</td><td>5</td></tr><tr><td>400</td><td>6</td></tr><tr><td>395</td><td>8</td></tr><tr><td>390</td><td>10</td></tr><tr><td>385</td><td>11</td></tr><tr><td>380</td><td>12</td></tr><tr><td>375</td><td>13</td></tr><tr><td>370</td><td>14</td></tr><tr><td>365</td><td>17</td></tr><tr><td>363</td><td>24</td></tr><tr><td>360</td><td>25</td></tr><tr><td>355</td><td>26</td></tr><tr><td>350</td><td>37</td></tr><tr><td>348</td><td>48</td></tr><tr><td>345</td><td>49</td></tr><tr><td>340</td><td>67</td></tr><tr><td>335</td><td>85</td></tr><tr><td>333</td><td>109</td></tr><tr><td>330</td><td>110</td></tr><tr><td>325</td><td>146</td></tr><tr><td>320</td><td>185</td></tr><tr><td>318</td><td>251</td></tr><tr><td>315</td><td>253</td></tr><tr><td>313</td><td>323</td></tr><tr><td>310</td><td>324</td></tr><tr><td>308</td><td>458</td></tr><tr><td>305</td><td>459</td></tr><tr><td>300</td><td>569</td></tr><tr><td>298</td><td>804</td></tr><tr><td>295</td><td>807</td></tr><tr><td>293</td><td>972</td></tr><tr><td>290</td><td>973</td></tr><tr><td>285</td><td>1378</td></tr><tr><td>283</td><td>1658</td></tr><tr><td>280</td><td>1662</td></tr><tr><td>278</td><td>2325</td></tr><tr><td>275</td><td>2326</td></tr><tr><td>273</td><td>2831</td></tr><tr><td>270</td><td>2836</td></tr><tr><td>268</td><td>3909</td></tr><tr><td>265</td><td>3913</td></tr><tr><td>263</td><td>4585</td></tr><tr><td>260</td><td>4587</td></tr><tr><td>258</td><td>6106</td></tr><tr><td>255</td><td>6111</td></tr><tr><td>253</td><td>7191</td></tr><tr><td>250</td><td>7194</td></tr><tr><td>248</td><td>9378</td></tr><tr><td>245</td><td>9379</td></tr><tr><td>243</td><td>10873</td></tr><tr><td>240</td><td>10874</td></tr><tr><td>235</td><td>13560</td></tr><tr><td>233</td><td>15728</td></tr><tr><td>230</td><td>15731</td></tr><tr><td>228</td><td>18677</td></tr><tr><td>225</td><td>18679</td></tr><tr><td>223</td><td>21446</td></tr><tr><td>220</td><td>21451</td></tr><tr><td>218</td><td>24717</td></tr><tr><td>215</td><td>24720</td></tr><tr><td>213</td><td>27864</td></tr><tr><td>210</td><td>27867</td></tr><tr><td>208</td><td>31348</td></tr><tr><td>205</td><td>31350</td></tr><tr><td>203</td><td>34803</td></tr><tr><td>200</td><td>34807</td></tr><tr><td>198</td><td>38483</td></tr><tr><td>195</td><td>38484</td></tr><tr><td>190</td><td>42008</td></tr><tr><td>188</td><td>45578</td></tr><tr><td>185</td><td>45582</td></tr><tr><td>183</td><td>49311</td></tr><tr><td>180</td><td>49314</td></tr><tr><td>178</td><td>52876</td></tr><tr><td>175</td><td>52877</td></tr><tr><td>173</td><td>56486</td></tr><tr><td>170</td><td>56488</td></tr><tr><td>168</td><td>59956</td></tr><tr><td>165</td><td>59958</td></tr><tr><td>163</td><td>63546</td></tr><tr><td>160</td><td>63548</td></tr><tr><td>158</td><td>66647</td></tr><tr><td>155</td><td>66654</td></tr><tr><td>150</td><td>70103</td></tr><tr><td>148</td><td>73146</td></tr><tr><td>145</td><td>73148</td></tr><tr><td>143</td><td>76271</td></tr><tr><td>140</td><td>76273</td></tr><tr><td>138</td><td>78800</td></tr><tr><td>135</td><td>78803</td></tr><tr><td>130</td><td>81645</td></tr><tr><td>128</td><td>83996</td></tr><tr><td>125</td><td>83998</td></tr><tr><td>120</td><td>86468</td></tr><tr><td>115</td><td>88525</td></tr><tr><td>113</td><td>90724</td></tr><tr><td>110</td><td>90727</td></tr><tr><td>105</td><td>92449</td></tr><tr><td>103</td><td>94213</td></tr><tr><td>100</td><td>94215</td></tr><tr><td>95</td><td>95590</td></tr><tr><td>90</td><td>96983</td></tr><tr><td>88</td><td>98104</td></tr><tr><td>85</td><td>98105</td></tr><tr><td>83</td><td>99191</td></tr><tr><td>80</td><td>99192</td></tr><tr><td>75</td><td>99966</td></tr><tr><td>73</td><td>100799</td></tr><tr><td>70</td><td>100800</td></tr><tr><td>65</td><td>101310</td></tr><tr><td>63</td><td>101784</td></tr><tr><td>60</td><td>101785</td></tr><tr><td>55</td><td>102140</td></tr><tr><td>50</td><td>102507</td></tr><tr><td>45</td><td>102788</td></tr><tr><td>40</td><td>102948</td></tr><tr><td>35</td><td>103179</td></tr><tr><td>30</td><td>103285</td></tr><tr><td>25</td><td>103521</td></tr><tr><td>20</td><td>103569</td></tr><tr><td>15</td><td>103950</td></tr><tr><td>10</td><td>103987</td></tr><tr><td>5</td><td>104208</td></tr><tr><td>0</td><td>104229</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation individuelle) : 94455 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>460</td><td>1</td></tr><tr><td>425</td><td>2</td></tr><tr><td>415</td><td>3</td></tr><tr><td>410</td><td>5</td></tr><tr><td>405</td><td>6</td></tr><tr><td>400</td><td>8</td></tr><tr><td>395</td><td>10</td></tr><tr><td>390</td><td>13</td></tr><tr><td>385</td><td>16</td></tr><tr><td>380</td><td>23</td></tr><tr><td>375</td><td>26</td></tr><tr><td>370</td><td>35</td></tr><tr><td>365</td><td>49</td></tr><tr><td>360</td><td>70</td></tr><tr><td>358</td><td>90</td></tr><tr><td>355</td><td>91</td></tr><tr><td>350</td><td>117</td></tr><tr><td>345</td><td>161</td></tr><tr><td>340</td><td>211</td></tr><tr><td>338</td><td>272</td></tr><tr><td>335</td><td>275</td></tr><tr><td>330</td><td>367</td></tr><tr><td>325</td><td>495</td></tr><tr><td>323</td><td>616</td></tr><tr><td>320</td><td>619</td></tr><tr><td>318</td><td>905</td></tr><tr><td>315</td><td>907</td></tr><tr><td>313</td><td>1108</td></tr><tr><td>310</td><td>1114</td></tr><tr><td>308</td><td>1567</td></tr><tr><td>305</td><td>1570</td></tr><tr><td>303</td><td>1915</td></tr><tr><td>300</td><td>1920</td></tr><tr><td>295</td><td>2627</td></tr><tr><td>293</td><td>3134</td></tr><tr><td>290</td><td>3139</td></tr><tr><td>288</td><td>4127</td></tr><tr><td>285</td><td>4134</td></tr><tr><td>283</td><td>4889</td></tr><tr><td>280</td><td>4906</td></tr><tr><td>278</td><td>6368</td></tr><tr><td>275</td><td>6373</td></tr><tr><td>273</td><td>7440</td></tr><tr><td>270</td><td>7451</td></tr><tr><td>268</td><td>9344</td></tr><tr><td>265</td><td>9347</td></tr><tr><td>263</td><td>10823</td></tr><tr><td>260</td><td>10833</td></tr><tr><td>258</td><td>13363</td></tr><tr><td>255</td><td>13369</td></tr><tr><td>253</td><td>15275</td></tr><tr><td>250</td><td>15282</td></tr><tr><td>248</td><td>18451</td></tr><tr><td>245</td><td>18455</td></tr><tr><td>243</td><td>20824</td></tr><tr><td>240</td><td>20834</td></tr><tr><td>238</td><td>24298</td></tr><tr><td>235</td><td>24303</td></tr><tr><td>233</td><td>27245</td></tr><tr><td>230</td><td>27251</td></tr><tr><td>228</td><td>30686</td></tr><tr><td>225</td><td>30691</td></tr><tr><td>223</td><td>33895</td></tr><tr><td>220</td><td>33898</td></tr><tr><td>218</td><td>37558</td></tr><tr><td>215</td><td>37561</td></tr><tr><td>213</td><td>41058</td></tr><tr><td>210</td><td>41065</td></tr><tr><td>208</td><td>44526</td></tr><tr><td>205</td><td>44528</td></tr><tr><td>203</td><td>48027</td></tr><tr><td>200</td><td>48030</td></tr><tr><td>198</td><td>51301</td></tr><tr><td>195</td><td>51304</td></tr><tr><td>193</td><td>54437</td></tr><tr><td>190</td><td>54443</td></tr><tr><td>188</td><td>57356</td></tr><tr><td>185</td><td>57357</td></tr><tr><td>183</td><td>60288</td></tr><tr><td>180</td><td>60289</td></tr><tr><td>178</td><td>63117</td></tr><tr><td>175</td><td>63120</td></tr><tr><td>173</td><td>65855</td></tr><tr><td>170</td><td>65860</td></tr><tr><td>168</td><td>68306</td></tr><tr><td>165</td><td>68309</td></tr><tr><td>163</td><td>70776</td></tr><tr><td>160</td><td>70779</td></tr><tr><td>158</td><td>72904</td></tr><tr><td>155</td><td>72907</td></tr><tr><td>153</td><td>75073</td></tr><tr><td>150</td><td>75075</td></tr><tr><td>148</td><td>76860</td></tr><tr><td>145</td><td>76865</td></tr><tr><td>143</td><td>78720</td></tr><tr><td>140</td><td>78721</td></tr><tr><td>138</td><td>80234</td></tr><tr><td>135</td><td>80240</td></tr><tr><td>130</td><td>81792</td></tr><tr><td>125</td><td>83012</td></tr><tr><td>123</td><td>84351</td></tr><tr><td>120</td><td>84352</td></tr><tr><td>115</td><td>85371</td></tr><tr><td>110</td><td>86384</td></tr><tr><td>105</td><td>87194</td></tr><tr><td>100</td><td>88019</td></tr><tr><td>98</td><td>88637</td></tr><tr><td>95</td><td>88638</td></tr><tr><td>93</td><td>89208</td></tr><tr><td>90</td><td>89210</td></tr><tr><td>85</td><td>89700</td></tr><tr><td>80</td><td>90116</td></tr><tr><td>75</td><td>90455</td></tr><tr><td>70</td><td>90785</td></tr><tr><td>65</td><td>90987</td></tr><tr><td>60</td><td>91192</td></tr><tr><td>55</td><td>91364</td></tr><tr><td>50</td><td>91506</td></tr><tr><td>45</td><td>91650</td></tr><tr><td>40</td><td>91732</td></tr><tr><td>35</td><td>91853</td></tr><tr><td>33</td><td>91902</td></tr><tr><td>30</td><td>91903</td></tr><tr><td>25</td><td>92024</td></tr><tr><td>20</td><td>92048</td></tr><tr><td>15</td><td>92272</td></tr><tr><td>10</td><td>92294</td></tr><tr><td>5</td><td>92431</td></tr><tr><td>0</td><td>92440</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 85839 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>445</td><td>1</td></tr><tr><td>435</td><td>2</td></tr><tr><td>425</td><td>3</td></tr><tr><td>415</td><td>5</td></tr><tr><td>410</td><td>9</td></tr><tr><td>405</td><td>14</td></tr><tr><td>395</td><td>17</td></tr><tr><td>390</td><td>22</td></tr><tr><td>385</td><td>26</td></tr><tr><td>380</td><td>35</td></tr><tr><td>375</td><td>45</td></tr><tr><td>373</td><td>78</td></tr><tr><td>370</td><td>79</td></tr><tr><td>368</td><td>106</td></tr><tr><td>365</td><td>107</td></tr><tr><td>363</td><td>170</td></tr><tr><td>360</td><td>172</td></tr><tr><td>358</td><td>221</td></tr><tr><td>355</td><td>228</td></tr><tr><td>353</td><td>320</td></tr><tr><td>350</td><td>321</td></tr><tr><td>348</td><td>445</td></tr><tr><td>345</td><td>449</td></tr><tr><td>343</td><td>605</td></tr><tr><td>340</td><td>607</td></tr><tr><td>338</td><td>832</td></tr><tr><td>335</td><td>834</td></tr><tr><td>333</td><td>1066</td></tr><tr><td>330</td><td>1069</td></tr><tr><td>328</td><td>1427</td></tr><tr><td>325</td><td>1435</td></tr><tr><td>323</td><td>1766</td></tr><tr><td>320</td><td>1775</td></tr><tr><td>318</td><td>2369</td></tr><tr><td>315</td><td>2376</td></tr><tr><td>313</td><td>2886</td></tr><tr><td>310</td><td>2894</td></tr><tr><td>308</td><td>3762</td></tr><tr><td>305</td><td>3770</td></tr><tr><td>303</td><td>4444</td></tr><tr><td>300</td><td>4456</td></tr><tr><td>298</td><td>5765</td></tr><tr><td>295</td><td>5772</td></tr><tr><td>293</td><td>6728</td></tr><tr><td>290</td><td>6743</td></tr><tr><td>288</td><td>8365</td></tr><tr><td>285</td><td>8368</td></tr><tr><td>283</td><td>9693</td></tr><tr><td>280</td><td>9703</td></tr><tr><td>278</td><td>11922</td></tr><tr><td>275</td><td>11932</td></tr><tr><td>273</td><td>13559</td></tr><tr><td>270</td><td>13576</td></tr><tr><td>268</td><td>16281</td></tr><tr><td>265</td><td>16287</td></tr><tr><td>263</td><td>18318</td></tr><tr><td>260</td><td>18334</td></tr><tr><td>258</td><td>21668</td></tr><tr><td>255</td><td>21680</td></tr><tr><td>253</td><td>23995</td></tr><tr><td>250</td><td>24004</td></tr><tr><td>248</td><td>27629</td></tr><tr><td>245</td><td>27637</td></tr><tr><td>243</td><td>30445</td></tr><tr><td>240</td><td>30454</td></tr><tr><td>238</td><td>34166</td></tr><tr><td>235</td><td>34179</td></tr><tr><td>233</td><td>37194</td></tr><tr><td>230</td><td>37201</td></tr><tr><td>228</td><td>40498</td></tr><tr><td>225</td><td>40501</td></tr><tr><td>223</td><td>43588</td></tr><tr><td>220</td><td>43591</td></tr><tr><td>218</td><td>46827</td></tr><tr><td>215</td><td>46833</td></tr><tr><td>213</td><td>49784</td></tr><tr><td>210</td><td>49788</td></tr><tr><td>208</td><td>52767</td></tr><tr><td>205</td><td>52774</td></tr><tr><td>203</td><td>55729</td></tr><tr><td>200</td><td>55733</td></tr><tr><td>198</td><td>58330</td></tr><tr><td>195</td><td>58336</td></tr><tr><td>193</td><td>60765</td></tr><tr><td>190</td><td>60768</td></tr><tr><td>188</td><td>62898</td></tr><tr><td>185</td><td>62899</td></tr><tr><td>183</td><td>65072</td></tr><tr><td>180</td><td>65074</td></tr><tr><td>178</td><td>66939</td></tr><tr><td>175</td><td>66944</td></tr><tr><td>173</td><td>68829</td></tr><tr><td>170</td><td>68831</td></tr><tr><td>168</td><td>70411</td></tr><tr><td>165</td><td>70412</td></tr><tr><td>163</td><td>72017</td></tr><tr><td>160</td><td>72019</td></tr><tr><td>158</td><td>73385</td></tr><tr><td>155</td><td>73391</td></tr><tr><td>150</td><td>74711</td></tr><tr><td>148</td><td>75821</td></tr><tr><td>145</td><td>75823</td></tr><tr><td>143</td><td>76847</td></tr><tr><td>140</td><td>76850</td></tr><tr><td>138</td><td>77743</td></tr><tr><td>135</td><td>77746</td></tr><tr><td>133</td><td>78600</td></tr><tr><td>130</td><td>78601</td></tr><tr><td>128</td><td>79298</td></tr><tr><td>125</td><td>79300</td></tr><tr><td>120</td><td>80020</td></tr><tr><td>115</td><td>80587</td></tr><tr><td>110</td><td>81140</td></tr><tr><td>108</td><td>81544</td></tr><tr><td>105</td><td>81545</td></tr><tr><td>103</td><td>81971</td></tr><tr><td>100</td><td>81972</td></tr><tr><td>95</td><td>82300</td></tr><tr><td>90</td><td>82589</td></tr><tr><td>88</td><td>82839</td></tr><tr><td>85</td><td>82841</td></tr><tr><td>80</td><td>83075</td></tr><tr><td>75</td><td>83257</td></tr><tr><td>73</td><td>83434</td></tr><tr><td>70</td><td>83435</td></tr><tr><td>65</td><td>83569</td></tr><tr><td>60</td><td>83683</td></tr><tr><td>55</td><td>83791</td></tr><tr><td>53</td><td>83889</td></tr><tr><td>50</td><td>83890</td></tr><tr><td>45</td><td>83961</td></tr><tr><td>40</td><td>84006</td></tr><tr><td>35</td><td>84086</td></tr><tr><td>30</td><td>84110</td></tr><tr><td>25</td><td>84207</td></tr><tr><td>20</td><td>84219</td></tr><tr><td>15</td><td>84360</td></tr><tr><td>10</td><td>84376</td></tr><tr><td>5</td><td>84472</td></tr><tr><td>0</td><td>84478</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 68036 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>455</td><td>1</td></tr><tr><td>435</td><td>2</td></tr><tr><td>430</td><td>5</td></tr><tr><td>425</td><td>6</td></tr><tr><td>418</td><td>8</td></tr><tr><td>415</td><td>9</td></tr><tr><td>410</td><td>19</td></tr><tr><td>405</td><td>22</td></tr><tr><td>403</td><td>30</td></tr><tr><td>400</td><td>31</td></tr><tr><td>395</td><td>34</td></tr><tr><td>390</td><td>52</td></tr><tr><td>388</td><td>67</td></tr><tr><td>385</td><td>68</td></tr><tr><td>380</td><td>104</td></tr><tr><td>375</td><td>126</td></tr><tr><td>373</td><td>188</td></tr><tr><td>370</td><td>189</td></tr><tr><td>368</td><td>247</td></tr><tr><td>365</td><td>251</td></tr><tr><td>363</td><td>367</td></tr><tr><td>360</td><td>373</td></tr><tr><td>358</td><td>488</td></tr><tr><td>355</td><td>489</td></tr><tr><td>353</td><td>658</td></tr><tr><td>350</td><td>659</td></tr><tr><td>348</td><td>888</td></tr><tr><td>345</td><td>895</td></tr><tr><td>343</td><td>1170</td></tr><tr><td>340</td><td>1175</td></tr><tr><td>338</td><td>1507</td></tr><tr><td>335</td><td>1510</td></tr><tr><td>333</td><td>1918</td></tr><tr><td>330</td><td>1926</td></tr><tr><td>328</td><td>2443</td></tr><tr><td>325</td><td>2455</td></tr><tr><td>323</td><td>2989</td></tr><tr><td>320</td><td>3001</td></tr><tr><td>318</td><td>3812</td></tr><tr><td>315</td><td>3823</td></tr><tr><td>313</td><td>4583</td></tr><tr><td>310</td><td>4589</td></tr><tr><td>308</td><td>5757</td></tr><tr><td>305</td><td>5767</td></tr><tr><td>303</td><td>6775</td></tr><tr><td>300</td><td>6798</td></tr><tr><td>298</td><td>8438</td></tr><tr><td>295</td><td>8448</td></tr><tr><td>293</td><td>9582</td></tr><tr><td>290</td><td>9594</td></tr><tr><td>288</td><td>11470</td></tr><tr><td>285</td><td>11482</td></tr><tr><td>283</td><td>12955</td></tr><tr><td>280</td><td>12965</td></tr><tr><td>278</td><td>15398</td></tr><tr><td>275</td><td>15414</td></tr><tr><td>273</td><td>17182</td></tr><tr><td>270</td><td>17194</td></tr><tr><td>268</td><td>19937</td></tr><tr><td>265</td><td>19948</td></tr><tr><td>263</td><td>21948</td></tr><tr><td>260</td><td>21971</td></tr><tr><td>258</td><td>24890</td></tr><tr><td>255</td><td>24897</td></tr><tr><td>253</td><td>27129</td></tr><tr><td>250</td><td>27138</td></tr><tr><td>248</td><td>30170</td></tr><tr><td>245</td><td>30179</td></tr><tr><td>243</td><td>32556</td></tr><tr><td>240</td><td>32561</td></tr><tr><td>238</td><td>35559</td></tr><tr><td>235</td><td>35567</td></tr><tr><td>233</td><td>37942</td></tr><tr><td>230</td><td>37951</td></tr><tr><td>228</td><td>40515</td></tr><tr><td>225</td><td>40522</td></tr><tr><td>223</td><td>42837</td></tr><tr><td>220</td><td>42841</td></tr><tr><td>218</td><td>45158</td></tr><tr><td>215</td><td>45167</td></tr><tr><td>213</td><td>47331</td></tr><tr><td>210</td><td>47334</td></tr><tr><td>208</td><td>49316</td></tr><tr><td>205</td><td>49322</td></tr><tr><td>203</td><td>51181</td></tr><tr><td>200</td><td>51188</td></tr><tr><td>198</td><td>52857</td></tr><tr><td>195</td><td>52863</td></tr><tr><td>193</td><td>54327</td></tr><tr><td>190</td><td>54333</td></tr><tr><td>188</td><td>55647</td></tr><tr><td>185</td><td>55653</td></tr><tr><td>183</td><td>56954</td></tr><tr><td>180</td><td>56960</td></tr><tr><td>178</td><td>58046</td></tr><tr><td>175</td><td>58049</td></tr><tr><td>173</td><td>59084</td></tr><tr><td>170</td><td>59085</td></tr><tr><td>168</td><td>60030</td></tr><tr><td>165</td><td>60031</td></tr><tr><td>163</td><td>60892</td></tr><tr><td>160</td><td>60894</td></tr><tr><td>158</td><td>61598</td></tr><tr><td>155</td><td>61599</td></tr><tr><td>153</td><td>62271</td></tr><tr><td>150</td><td>62275</td></tr><tr><td>148</td><td>62832</td></tr><tr><td>145</td><td>62834</td></tr><tr><td>140</td><td>63393</td></tr><tr><td>135</td><td>63834</td></tr><tr><td>133</td><td>64297</td></tr><tr><td>130</td><td>64298</td></tr><tr><td>125</td><td>64651</td></tr><tr><td>120</td><td>64965</td></tr><tr><td>118</td><td>65220</td></tr><tr><td>115</td><td>65221</td></tr><tr><td>113</td><td>65464</td></tr><tr><td>110</td><td>65465</td></tr><tr><td>108</td><td>65665</td></tr><tr><td>105</td><td>65666</td></tr><tr><td>100</td><td>65891</td></tr><tr><td>95</td><td>66040</td></tr><tr><td>90</td><td>66190</td></tr><tr><td>85</td><td>66326</td></tr><tr><td>80</td><td>66432</td></tr><tr><td>75</td><td>66515</td></tr><tr><td>70</td><td>66607</td></tr><tr><td>65</td><td>66686</td></tr><tr><td>60</td><td>66745</td></tr><tr><td>55</td><td>66812</td></tr><tr><td>50</td><td>66864</td></tr><tr><td>45</td><td>66909</td></tr><tr><td>40</td><td>66926</td></tr><tr><td>35</td><td>66969</td></tr><tr><td>30</td><td>66987</td></tr><tr><td>25</td><td>67057</td></tr><tr><td>20</td><td>67065</td></tr><tr><td>15</td><td>67163</td></tr><tr><td>10</td><td>67168</td></tr><tr><td>5</td><td>67228</td></tr><tr><td>0</td><td>67231</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 45282 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>455</td><td>1</td></tr><tr><td>430</td><td>2</td></tr><tr><td>425</td><td>3</td></tr><tr><td>420</td><td>8</td></tr><tr><td>415</td><td>12</td></tr><tr><td>413</td><td>18</td></tr><tr><td>410</td><td>19</td></tr><tr><td>408</td><td>26</td></tr><tr><td>405</td><td>28</td></tr><tr><td>400</td><td>49</td></tr><tr><td>398</td><td>61</td></tr><tr><td>395</td><td>64</td></tr><tr><td>393</td><td>114</td></tr><tr><td>390</td><td>115</td></tr><tr><td>388</td><td>132</td></tr><tr><td>385</td><td>133</td></tr><tr><td>383</td><td>199</td></tr><tr><td>380</td><td>200</td></tr><tr><td>378</td><td>244</td></tr><tr><td>375</td><td>250</td></tr><tr><td>373</td><td>342</td></tr><tr><td>370</td><td>343</td></tr><tr><td>368</td><td>428</td></tr><tr><td>365</td><td>434</td></tr><tr><td>363</td><td>625</td></tr><tr><td>360</td><td>631</td></tr><tr><td>358</td><td>767</td></tr><tr><td>355</td><td>779</td></tr><tr><td>353</td><td>1028</td></tr><tr><td>350</td><td>1033</td></tr><tr><td>348</td><td>1273</td></tr><tr><td>345</td><td>1286</td></tr><tr><td>343</td><td>1593</td></tr><tr><td>340</td><td>1599</td></tr><tr><td>338</td><td>2022</td></tr><tr><td>335</td><td>2032</td></tr><tr><td>333</td><td>2559</td></tr><tr><td>330</td><td>2574</td></tr><tr><td>328</td><td>3181</td></tr><tr><td>325</td><td>3201</td></tr><tr><td>323</td><td>3889</td></tr><tr><td>320</td><td>3903</td></tr><tr><td>318</td><td>4760</td></tr><tr><td>315</td><td>4779</td></tr><tr><td>313</td><td>5580</td></tr><tr><td>310</td><td>5596</td></tr><tr><td>308</td><td>6791</td></tr><tr><td>305</td><td>6812</td></tr><tr><td>303</td><td>7810</td></tr><tr><td>300</td><td>7829</td></tr><tr><td>298</td><td>9343</td></tr><tr><td>295</td><td>9363</td></tr><tr><td>293</td><td>10455</td></tr><tr><td>290</td><td>10477</td></tr><tr><td>288</td><td>12302</td></tr><tr><td>285</td><td>12312</td></tr><tr><td>283</td><td>13566</td></tr><tr><td>280</td><td>13582</td></tr><tr><td>278</td><td>15658</td></tr><tr><td>275</td><td>15668</td></tr><tr><td>273</td><td>17091</td></tr><tr><td>270</td><td>17102</td></tr><tr><td>268</td><td>19383</td></tr><tr><td>265</td><td>19392</td></tr><tr><td>263</td><td>20925</td></tr><tr><td>260</td><td>20939</td></tr><tr><td>258</td><td>23158</td></tr><tr><td>255</td><td>23165</td></tr><tr><td>253</td><td>24723</td></tr><tr><td>250</td><td>24727</td></tr><tr><td>248</td><td>26689</td></tr><tr><td>245</td><td>26696</td></tr><tr><td>243</td><td>28148</td></tr><tr><td>240</td><td>28153</td></tr><tr><td>238</td><td>29918</td></tr><tr><td>235</td><td>29927</td></tr><tr><td>233</td><td>31280</td></tr><tr><td>230</td><td>31287</td></tr><tr><td>228</td><td>32777</td></tr><tr><td>225</td><td>32780</td></tr><tr><td>223</td><td>34028</td></tr><tr><td>220</td><td>34033</td></tr><tr><td>218</td><td>35214</td></tr><tr><td>215</td><td>35218</td></tr><tr><td>213</td><td>36284</td></tr><tr><td>210</td><td>36290</td></tr><tr><td>208</td><td>37245</td></tr><tr><td>205</td><td>37249</td></tr><tr><td>203</td><td>38085</td></tr><tr><td>200</td><td>38087</td></tr><tr><td>198</td><td>38866</td></tr><tr><td>195</td><td>38870</td></tr><tr><td>193</td><td>39502</td></tr><tr><td>190</td><td>39509</td></tr><tr><td>188</td><td>40113</td></tr><tr><td>185</td><td>40116</td></tr><tr><td>180</td><td>40655</td></tr><tr><td>178</td><td>41122</td></tr><tr><td>175</td><td>41124</td></tr><tr><td>173</td><td>41586</td></tr><tr><td>170</td><td>41588</td></tr><tr><td>165</td><td>41989</td></tr><tr><td>163</td><td>42312</td></tr><tr><td>160</td><td>42315</td></tr><tr><td>155</td><td>42577</td></tr><tr><td>153</td><td>42839</td></tr><tr><td>150</td><td>42840</td></tr><tr><td>145</td><td>43052</td></tr><tr><td>140</td><td>43233</td></tr><tr><td>135</td><td>43417</td></tr><tr><td>130</td><td>43575</td></tr><tr><td>125</td><td>43710</td></tr><tr><td>120</td><td>43837</td></tr><tr><td>115</td><td>43935</td></tr><tr><td>113</td><td>44029</td></tr><tr><td>110</td><td>44030</td></tr><tr><td>105</td><td>44116</td></tr><tr><td>103</td><td>44191</td></tr><tr><td>100</td><td>44192</td></tr><tr><td>95</td><td>44252</td></tr><tr><td>93</td><td>44311</td></tr><tr><td>90</td><td>44312</td></tr><tr><td>85</td><td>44394</td></tr><tr><td>80</td><td>44441</td></tr><tr><td>75</td><td>44500</td></tr><tr><td>73</td><td>44542</td></tr><tr><td>70</td><td>44543</td></tr><tr><td>65</td><td>44575</td></tr><tr><td>60</td><td>44603</td></tr><tr><td>55</td><td>44640</td></tr><tr><td>50</td><td>44664</td></tr><tr><td>45</td><td>44690</td></tr><tr><td>40</td><td>44702</td></tr><tr><td>35</td><td>44734</td></tr><tr><td>30</td><td>44739</td></tr><tr><td>25</td><td>44773</td></tr><tr><td>20</td><td>44774</td></tr><tr><td>15</td><td>44819</td></tr><tr><td>10</td><td>44821</td></tr><tr><td>5</td><td>44855</td></tr><tr><td>0</td><td>44857</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 8745 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>445</td><td>2</td></tr><tr><td>440</td><td>4</td></tr><tr><td>435</td><td>5</td></tr><tr><td>430</td><td>7</td></tr><tr><td>425</td><td>8</td></tr><tr><td>420</td><td>14</td></tr><tr><td>418</td><td>19</td></tr><tr><td>415</td><td>20</td></tr><tr><td>410</td><td>33</td></tr><tr><td>408</td><td>37</td></tr><tr><td>405</td><td>38</td></tr><tr><td>403</td><td>68</td></tr><tr><td>400</td><td>69</td></tr><tr><td>398</td><td>81</td></tr><tr><td>395</td><td>83</td></tr><tr><td>393</td><td>116</td></tr><tr><td>390</td><td>117</td></tr><tr><td>388</td><td>138</td></tr><tr><td>385</td><td>141</td></tr><tr><td>380</td><td>195</td></tr><tr><td>378</td><td>231</td></tr><tr><td>375</td><td>232</td></tr><tr><td>373</td><td>302</td></tr><tr><td>370</td><td>303</td></tr><tr><td>368</td><td>353</td></tr><tr><td>365</td><td>357</td></tr><tr><td>363</td><td>487</td></tr><tr><td>360</td><td>488</td></tr><tr><td>358</td><td>566</td></tr><tr><td>355</td><td>568</td></tr><tr><td>353</td><td>702</td></tr><tr><td>350</td><td>703</td></tr><tr><td>348</td><td>838</td></tr><tr><td>345</td><td>841</td></tr><tr><td>343</td><td>1028</td></tr><tr><td>340</td><td>1030</td></tr><tr><td>338</td><td>1202</td></tr><tr><td>335</td><td>1208</td></tr><tr><td>333</td><td>1426</td></tr><tr><td>330</td><td>1430</td></tr><tr><td>328</td><td>1641</td></tr><tr><td>325</td><td>1650</td></tr><tr><td>323</td><td>1844</td></tr><tr><td>320</td><td>1849</td></tr><tr><td>318</td><td>2118</td></tr><tr><td>315</td><td>2123</td></tr><tr><td>313</td><td>2371</td></tr><tr><td>310</td><td>2376</td></tr><tr><td>308</td><td>2693</td></tr><tr><td>305</td><td>2698</td></tr><tr><td>303</td><td>2959</td></tr><tr><td>300</td><td>2968</td></tr><tr><td>298</td><td>3348</td></tr><tr><td>295</td><td>3353</td></tr><tr><td>293</td><td>3620</td></tr><tr><td>290</td><td>3624</td></tr><tr><td>288</td><td>3982</td></tr><tr><td>285</td><td>3984</td></tr><tr><td>283</td><td>4252</td></tr><tr><td>280</td><td>4257</td></tr><tr><td>278</td><td>4610</td></tr><tr><td>275</td><td>4616</td></tr><tr><td>273</td><td>4893</td></tr><tr><td>270</td><td>4896</td></tr><tr><td>268</td><td>5252</td></tr><tr><td>265</td><td>5255</td></tr><tr><td>260</td><td>5501</td></tr><tr><td>255</td><td>5857</td></tr><tr><td>253</td><td>6083</td></tr><tr><td>250</td><td>6086</td></tr><tr><td>248</td><td>6354</td></tr><tr><td>245</td><td>6357</td></tr><tr><td>243</td><td>6570</td></tr><tr><td>240</td><td>6573</td></tr><tr><td>238</td><td>6793</td></tr><tr><td>235</td><td>6795</td></tr><tr><td>233</td><td>6960</td></tr><tr><td>230</td><td>6962</td></tr><tr><td>225</td><td>7154</td></tr><tr><td>220</td><td>7290</td></tr><tr><td>215</td><td>7443</td></tr><tr><td>213</td><td>7564</td></tr><tr><td>210</td><td>7566</td></tr><tr><td>205</td><td>7668</td></tr><tr><td>200</td><td>7782</td></tr><tr><td>198</td><td>7881</td></tr><tr><td>195</td><td>7882</td></tr><tr><td>190</td><td>7973</td></tr><tr><td>185</td><td>8044</td></tr><tr><td>180</td><td>8122</td></tr><tr><td>175</td><td>8173</td></tr><tr><td>170</td><td>8227</td></tr><tr><td>165</td><td>8266</td></tr><tr><td>160</td><td>8304</td></tr><tr><td>155</td><td>8340</td></tr><tr><td>150</td><td>8369</td></tr><tr><td>148</td><td>8399</td></tr><tr><td>145</td><td>8400</td></tr><tr><td>140</td><td>8428</td></tr><tr><td>135</td><td>8454</td></tr><tr><td>130</td><td>8476</td></tr><tr><td>125</td><td>8494</td></tr><tr><td>120</td><td>8517</td></tr><tr><td>115</td><td>8531</td></tr><tr><td>110</td><td>8541</td></tr><tr><td>105</td><td>8555</td></tr><tr><td>100</td><td>8564</td></tr><tr><td>95</td><td>8578</td></tr><tr><td>90</td><td>8586</td></tr><tr><td>85</td><td>8593</td></tr><tr><td>80</td><td>8602</td></tr><tr><td>75</td><td>8616</td></tr><tr><td>70</td><td>8620</td></tr><tr><td>65</td><td>8621</td></tr><tr><td>60</td><td>8627</td></tr><tr><td>50</td><td>8633</td></tr><tr><td>45</td><td>8638</td></tr><tr><td>40</td><td>8639</td></tr><tr><td>35</td><td>8644</td></tr><tr><td>30</td><td>8645</td></tr><tr><td>20</td><td>8653</td></tr><tr><td>15</td><td>8660</td></tr><tr><td>10</td><td>8662</td></tr><tr><td>0</td><td>8674</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 5052 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>465</td><td>1</td></tr><tr><td>445</td><td>3</td></tr><tr><td>435</td><td>8</td></tr><tr><td>430</td><td>13</td></tr><tr><td>428</td><td>14</td></tr><tr><td>425</td><td>15</td></tr><tr><td>420</td><td>19</td></tr><tr><td>415</td><td>23</td></tr><tr><td>410</td><td>37</td></tr><tr><td>405</td><td>46</td></tr><tr><td>403</td><td>57</td></tr><tr><td>400</td><td>58</td></tr><tr><td>398</td><td>65</td></tr><tr><td>395</td><td>67</td></tr><tr><td>390</td><td>91</td></tr><tr><td>388</td><td>106</td></tr><tr><td>385</td><td>107</td></tr><tr><td>380</td><td>150</td></tr><tr><td>375</td><td>175</td></tr><tr><td>370</td><td>251</td></tr><tr><td>368</td><td>296</td></tr><tr><td>365</td><td>297</td></tr><tr><td>363</td><td>372</td></tr><tr><td>360</td><td>373</td></tr><tr><td>358</td><td>433</td></tr><tr><td>355</td><td>436</td></tr><tr><td>353</td><td>544</td></tr><tr><td>350</td><td>545</td></tr><tr><td>348</td><td>635</td></tr><tr><td>345</td><td>638</td></tr><tr><td>343</td><td>753</td></tr><tr><td>340</td><td>757</td></tr><tr><td>338</td><td>863</td></tr><tr><td>335</td><td>864</td></tr><tr><td>333</td><td>1012</td></tr><tr><td>330</td><td>1016</td></tr><tr><td>328</td><td>1160</td></tr><tr><td>325</td><td>1166</td></tr><tr><td>323</td><td>1317</td></tr><tr><td>320</td><td>1318</td></tr><tr><td>318</td><td>1479</td></tr><tr><td>315</td><td>1483</td></tr><tr><td>313</td><td>1648</td></tr><tr><td>310</td><td>1651</td></tr><tr><td>308</td><td>1843</td></tr><tr><td>305</td><td>1845</td></tr><tr><td>303</td><td>2006</td></tr><tr><td>300</td><td>2010</td></tr><tr><td>298</td><td>2214</td></tr><tr><td>295</td><td>2218</td></tr><tr><td>293</td><td>2380</td></tr><tr><td>290</td><td>2381</td></tr><tr><td>288</td><td>2582</td></tr><tr><td>285</td><td>2584</td></tr><tr><td>283</td><td>2749</td></tr><tr><td>280</td><td>2753</td></tr><tr><td>278</td><td>2980</td></tr><tr><td>275</td><td>2981</td></tr><tr><td>273</td><td>3105</td></tr><tr><td>270</td><td>3106</td></tr><tr><td>268</td><td>3290</td></tr><tr><td>265</td><td>3291</td></tr><tr><td>260</td><td>3407</td></tr><tr><td>255</td><td>3589</td></tr><tr><td>253</td><td>3701</td></tr><tr><td>250</td><td>3704</td></tr><tr><td>248</td><td>3870</td></tr><tr><td>245</td><td>3871</td></tr><tr><td>240</td><td>3984</td></tr><tr><td>238</td><td>4102</td></tr><tr><td>235</td><td>4103</td></tr><tr><td>233</td><td>4190</td></tr><tr><td>230</td><td>4191</td></tr><tr><td>228</td><td>4283</td></tr><tr><td>225</td><td>4284</td></tr><tr><td>220</td><td>4356</td></tr><tr><td>215</td><td>4423</td></tr><tr><td>213</td><td>4484</td></tr><tr><td>210</td><td>4485</td></tr><tr><td>208</td><td>4542</td></tr><tr><td>205</td><td>4543</td></tr><tr><td>203</td><td>4593</td></tr><tr><td>200</td><td>4595</td></tr><tr><td>195</td><td>4642</td></tr><tr><td>193</td><td>4681</td></tr><tr><td>190</td><td>4682</td></tr><tr><td>188</td><td>4709</td></tr><tr><td>185</td><td>4710</td></tr><tr><td>180</td><td>4739</td></tr><tr><td>175</td><td>4767</td></tr><tr><td>170</td><td>4787</td></tr><tr><td>165</td><td>4798</td></tr><tr><td>160</td><td>4819</td></tr><tr><td>155</td><td>4836</td></tr><tr><td>150</td><td>4854</td></tr><tr><td>145</td><td>4873</td></tr><tr><td>140</td><td>4884</td></tr><tr><td>135</td><td>4897</td></tr><tr><td>130</td><td>4904</td></tr><tr><td>125</td><td>4911</td></tr><tr><td>120</td><td>4923</td></tr><tr><td>115</td><td>4934</td></tr><tr><td>110</td><td>4937</td></tr><tr><td>105</td><td>4948</td></tr><tr><td>100</td><td>4959</td></tr><tr><td>95</td><td>4962</td></tr><tr><td>90</td><td>4963</td></tr><tr><td>85</td><td>4968</td></tr><tr><td>80</td><td>4969</td></tr><tr><td>75</td><td>4970</td></tr><tr><td>70</td><td>4971</td></tr><tr><td>65</td><td>4977</td></tr><tr><td>60</td><td>4979</td></tr><tr><td>55</td><td>4982</td></tr><tr><td>50</td><td>4985</td></tr><tr><td>40</td><td>4987</td></tr><tr><td>30</td><td>4991</td></tr><tr><td>25</td><td>4995</td></tr><tr><td>20</td><td>4996</td></tr><tr><td>10</td><td>5001</td></tr><tr><td>0</td><td>5003</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 2072 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>380</td><td>2</td></tr><tr><td>370</td><td>3</td></tr><tr><td>368</td><td>4</td></tr><tr><td>365</td><td>5</td></tr><tr><td>360</td><td>6</td></tr><tr><td>350</td><td>9</td></tr><tr><td>345</td><td>11</td></tr><tr><td>343</td><td>13</td></tr><tr><td>340</td><td>14</td></tr><tr><td>338</td><td>17</td></tr><tr><td>335</td><td>18</td></tr><tr><td>330</td><td>23</td></tr><tr><td>325</td><td>35</td></tr><tr><td>320</td><td>43</td></tr><tr><td>315</td><td>53</td></tr><tr><td>310</td><td>59</td></tr><tr><td>305</td><td>73</td></tr><tr><td>300</td><td>90</td></tr><tr><td>295</td><td>116</td></tr><tr><td>290</td><td>136</td></tr><tr><td>285</td><td>178</td></tr><tr><td>280</td><td>218</td></tr><tr><td>278</td><td>264</td></tr><tr><td>275</td><td>266</td></tr><tr><td>273</td><td>302</td></tr><tr><td>270</td><td>304</td></tr><tr><td>268</td><td>365</td></tr><tr><td>265</td><td>366</td></tr><tr><td>263</td><td>409</td></tr><tr><td>260</td><td>410</td></tr><tr><td>258</td><td>500</td></tr><tr><td>255</td><td>502</td></tr><tr><td>250</td><td>560</td></tr><tr><td>245</td><td>628</td></tr><tr><td>240</td><td>694</td></tr><tr><td>235</td><td>775</td></tr><tr><td>230</td><td>838</td></tr><tr><td>225</td><td>909</td></tr><tr><td>220</td><td>977</td></tr><tr><td>215</td><td>1067</td></tr><tr><td>210</td><td>1128</td></tr><tr><td>205</td><td>1184</td></tr><tr><td>200</td><td>1241</td></tr><tr><td>195</td><td>1291</td></tr><tr><td>190</td><td>1327</td></tr><tr><td>185</td><td>1386</td></tr><tr><td>180</td><td>1444</td></tr><tr><td>175</td><td>1504</td></tr><tr><td>170</td><td>1549</td></tr><tr><td>165</td><td>1582</td></tr><tr><td>160</td><td>1623</td></tr><tr><td>155</td><td>1652</td></tr><tr><td>150</td><td>1691</td></tr><tr><td>145</td><td>1712</td></tr><tr><td>140</td><td>1740</td></tr><tr><td>135</td><td>1765</td></tr><tr><td>130</td><td>1788</td></tr><tr><td>125</td><td>1809</td></tr><tr><td>120</td><td>1838</td></tr><tr><td>115</td><td>1854</td></tr><tr><td>110</td><td>1872</td></tr><tr><td>105</td><td>1886</td></tr><tr><td>100</td><td>1902</td></tr><tr><td>95</td><td>1916</td></tr><tr><td>90</td><td>1933</td></tr><tr><td>85</td><td>1946</td></tr><tr><td>80</td><td>1962</td></tr><tr><td>75</td><td>1971</td></tr><tr><td>70</td><td>1984</td></tr><tr><td>65</td><td>1992</td></tr><tr><td>60</td><td>1999</td></tr><tr><td>55</td><td>2008</td></tr><tr><td>50</td><td>2017</td></tr><tr><td>45</td><td>2025</td></tr><tr><td>40</td><td>2026</td></tr><tr><td>35</td><td>2028</td></tr><tr><td>30</td><td>2035</td></tr><tr><td>25</td><td>2041</td></tr><tr><td>20</td><td>2042</td></tr><tr><td>15</td><td>2047</td></tr><tr><td>10</td><td>2048</td></tr><tr><td>0</td><td>2049</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 1171 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>375</td><td>1</td></tr><tr><td>370</td><td>5</td></tr><tr><td>365</td><td>8</td></tr><tr><td>360</td><td>12</td></tr><tr><td>358</td><td>14</td></tr><tr><td>355</td><td>15</td></tr><tr><td>350</td><td>20</td></tr><tr><td>345</td><td>22</td></tr><tr><td>343</td><td>29</td></tr><tr><td>340</td><td>30</td></tr><tr><td>335</td><td>41</td></tr><tr><td>333</td><td>49</td></tr><tr><td>330</td><td>50</td></tr><tr><td>328</td><td>60</td></tr><tr><td>325</td><td>61</td></tr><tr><td>320</td><td>71</td></tr><tr><td>318</td><td>87</td></tr><tr><td>315</td><td>88</td></tr><tr><td>310</td><td>97</td></tr><tr><td>305</td><td>118</td></tr><tr><td>300</td><td>137</td></tr><tr><td>295</td><td>164</td></tr><tr><td>293</td><td>187</td></tr><tr><td>290</td><td>189</td></tr><tr><td>288</td><td>218</td></tr><tr><td>285</td><td>219</td></tr><tr><td>283</td><td>239</td></tr><tr><td>280</td><td>240</td></tr><tr><td>275</td><td>271</td></tr><tr><td>270</td><td>292</td></tr><tr><td>265</td><td>332</td></tr><tr><td>260</td><td>353</td></tr><tr><td>258</td><td>393</td></tr><tr><td>255</td><td>394</td></tr><tr><td>250</td><td>426</td></tr><tr><td>245</td><td>468</td></tr><tr><td>240</td><td>508</td></tr><tr><td>235</td><td>546</td></tr><tr><td>230</td><td>583</td></tr><tr><td>225</td><td>636</td></tr><tr><td>223</td><td>672</td></tr><tr><td>220</td><td>673</td></tr><tr><td>215</td><td>700</td></tr><tr><td>213</td><td>738</td></tr><tr><td>210</td><td>739</td></tr><tr><td>205</td><td>763</td></tr><tr><td>200</td><td>797</td></tr><tr><td>195</td><td>822</td></tr><tr><td>190</td><td>841</td></tr><tr><td>185</td><td>870</td></tr><tr><td>180</td><td>890</td></tr><tr><td>175</td><td>910</td></tr><tr><td>170</td><td>937</td></tr><tr><td>165</td><td>954</td></tr><tr><td>160</td><td>974</td></tr><tr><td>155</td><td>990</td></tr><tr><td>150</td><td>1002</td></tr><tr><td>145</td><td>1016</td></tr><tr><td>140</td><td>1029</td></tr><tr><td>135</td><td>1043</td></tr><tr><td>130</td><td>1054</td></tr><tr><td>125</td><td>1060</td></tr><tr><td>120</td><td>1067</td></tr><tr><td>115</td><td>1077</td></tr><tr><td>110</td><td>1083</td></tr><tr><td>105</td><td>1087</td></tr><tr><td>100</td><td>1097</td></tr><tr><td>95</td><td>1100</td></tr><tr><td>90</td><td>1105</td></tr><tr><td>85</td><td>1110</td></tr><tr><td>80</td><td>1112</td></tr><tr><td>75</td><td>1118</td></tr><tr><td>70</td><td>1123</td></tr><tr><td>65</td><td>1127</td></tr><tr><td>60</td><td>1131</td></tr><tr><td>55</td><td>1135</td></tr><tr><td>50</td><td>1138</td></tr><tr><td>45</td><td>1140</td></tr><tr><td>40</td><td>1142</td></tr><tr><td>35</td><td>1144</td></tr><tr><td>30</td><td>1146</td></tr><tr><td>25</td><td>1147</td></tr><tr><td>20</td><td>1148</td></tr><tr><td>10</td><td>1154</td></tr><tr><td>0</td><td>1156</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 479 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>365</td><td>2</td></tr><tr><td>355</td><td>3</td></tr><tr><td>350</td><td>4</td></tr><tr><td>345</td><td>7</td></tr><tr><td>340</td><td>9</td></tr><tr><td>338</td><td>12</td></tr><tr><td>335</td><td>13</td></tr><tr><td>330</td><td>15</td></tr><tr><td>325</td><td>18</td></tr><tr><td>320</td><td>21</td></tr><tr><td>318</td><td>26</td></tr><tr><td>315</td><td>27</td></tr><tr><td>310</td><td>37</td></tr><tr><td>305</td><td>42</td></tr><tr><td>303</td><td>47</td></tr><tr><td>300</td><td>48</td></tr><tr><td>295</td><td>59</td></tr><tr><td>293</td><td>62</td></tr><tr><td>290</td><td>63</td></tr><tr><td>285</td><td>72</td></tr><tr><td>280</td><td>80</td></tr><tr><td>275</td><td>98</td></tr><tr><td>270</td><td>108</td></tr><tr><td>265</td><td>124</td></tr><tr><td>260</td><td>135</td></tr><tr><td>255</td><td>152</td></tr><tr><td>250</td><td>168</td></tr><tr><td>248</td><td>190</td></tr><tr><td>245</td><td>191</td></tr><tr><td>240</td><td>208</td></tr><tr><td>235</td><td>219</td></tr><tr><td>230</td><td>236</td></tr><tr><td>228</td><td>250</td></tr><tr><td>225</td><td>251</td></tr><tr><td>220</td><td>261</td></tr><tr><td>215</td><td>276</td></tr><tr><td>210</td><td>287</td></tr><tr><td>205</td><td>302</td></tr><tr><td>200</td><td>308</td></tr><tr><td>195</td><td>319</td></tr><tr><td>190</td><td>330</td></tr><tr><td>185</td><td>335</td></tr><tr><td>180</td><td>346</td></tr><tr><td>175</td><td>356</td></tr><tr><td>170</td><td>362</td></tr><tr><td>165</td><td>378</td></tr><tr><td>160</td><td>383</td></tr><tr><td>155</td><td>389</td></tr><tr><td>150</td><td>391</td></tr><tr><td>145</td><td>397</td></tr><tr><td>140</td><td>406</td></tr><tr><td>135</td><td>412</td></tr><tr><td>130</td><td>414</td></tr><tr><td>125</td><td>419</td></tr><tr><td>120</td><td>420</td></tr><tr><td>115</td><td>424</td></tr><tr><td>110</td><td>427</td></tr><tr><td>105</td><td>430</td></tr><tr><td>100</td><td>432</td></tr><tr><td>95</td><td>433</td></tr><tr><td>90</td><td>436</td></tr><tr><td>85</td><td>439</td></tr><tr><td>80</td><td>440</td></tr><tr><td>75</td><td>441</td></tr><tr><td>70</td><td>444</td></tr><tr><td>65</td><td>445</td></tr><tr><td>60</td><td>447</td></tr><tr><td>55</td><td>450</td></tr><tr><td>40</td><td>452</td></tr><tr><td>30</td><td>453</td></tr><tr><td>25</td><td>457</td></tr><tr><td>20</td><td>458</td></tr><tr><td>15</td><td>459</td></tr><tr><td>0</td><td>461</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-16-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation individuelle) : 2226 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-16-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-16-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>365</td><td>1</td></tr><tr><td>340</td><td>2</td></tr><tr><td>310</td><td>3</td></tr><tr><td>300</td><td>5</td></tr><tr><td>295</td><td>10</td></tr><tr><td>290</td><td>16</td></tr><tr><td>285</td><td>19</td></tr><tr><td>280</td><td>22</td></tr><tr><td>275</td><td>25</td></tr><tr><td>270</td><td>31</td></tr><tr><td>265</td><td>39</td></tr><tr><td>260</td><td>50</td></tr><tr><td>255</td><td>63</td></tr><tr><td>250</td><td>70</td></tr><tr><td>245</td><td>96</td></tr><tr><td>240</td><td>113</td></tr><tr><td>235</td><td>135</td></tr><tr><td>230</td><td>154</td></tr><tr><td>225</td><td>186</td></tr><tr><td>220</td><td>221</td></tr><tr><td>215</td><td>261</td></tr><tr><td>210</td><td>293</td></tr><tr><td>205</td><td>327</td></tr><tr><td>200</td><td>375</td></tr><tr><td>195</td><td>413</td></tr><tr><td>190</td><td>457</td></tr><tr><td>185</td><td>505</td></tr><tr><td>180</td><td>553</td></tr><tr><td>175</td><td>600</td></tr><tr><td>170</td><td>662</td></tr><tr><td>165</td><td>715</td></tr><tr><td>160</td><td>778</td></tr><tr><td>155</td><td>838</td></tr><tr><td>150</td><td>909</td></tr><tr><td>145</td><td>972</td></tr><tr><td>140</td><td>1053</td></tr><tr><td>135</td><td>1118</td></tr><tr><td>130</td><td>1184</td></tr><tr><td>125</td><td>1255</td></tr><tr><td>120</td><td>1326</td></tr><tr><td>115</td><td>1389</td></tr><tr><td>110</td><td>1466</td></tr><tr><td>105</td><td>1519</td></tr><tr><td>100</td><td>1599</td></tr><tr><td>95</td><td>1655</td></tr><tr><td>90</td><td>1730</td></tr><tr><td>85</td><td>1773</td></tr><tr><td>80</td><td>1811</td></tr><tr><td>75</td><td>1846</td></tr><tr><td>70</td><td>1894</td></tr><tr><td>65</td><td>1925</td></tr><tr><td>60</td><td>1950</td></tr><tr><td>55</td><td>1974</td></tr><tr><td>50</td><td>1996</td></tr><tr><td>45</td><td>2015</td></tr><tr><td>40</td><td>2037</td></tr><tr><td>35</td><td>2049</td></tr><tr><td>30</td><td>2055</td></tr><tr><td>25</td><td>2073</td></tr><tr><td>20</td><td>2079</td></tr><tr><td>15</td><td>2098</td></tr><tr><td>10</td><td>2100</td></tr><tr><td>0</td><td>2112</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-17-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation individuelle) : 1522 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-17-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-17-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>345</td><td>2</td></tr><tr><td>325</td><td>3</td></tr><tr><td>320</td><td>4</td></tr><tr><td>310</td><td>5</td></tr><tr><td>305</td><td>6</td></tr><tr><td>300</td><td>8</td></tr><tr><td>290</td><td>9</td></tr><tr><td>285</td><td>13</td></tr><tr><td>280</td><td>15</td></tr><tr><td>275</td><td>18</td></tr><tr><td>270</td><td>22</td></tr><tr><td>265</td><td>30</td></tr><tr><td>260</td><td>32</td></tr><tr><td>255</td><td>38</td></tr><tr><td>250</td><td>42</td></tr><tr><td>245</td><td>51</td></tr><tr><td>240</td><td>64</td></tr><tr><td>235</td><td>80</td></tr><tr><td>230</td><td>90</td></tr><tr><td>225</td><td>105</td></tr><tr><td>220</td><td>122</td></tr><tr><td>215</td><td>144</td></tr><tr><td>213</td><td>175</td></tr><tr><td>210</td><td>176</td></tr><tr><td>205</td><td>197</td></tr><tr><td>200</td><td>221</td></tr><tr><td>195</td><td>246</td></tr><tr><td>190</td><td>285</td></tr><tr><td>185</td><td>318</td></tr><tr><td>180</td><td>355</td></tr><tr><td>175</td><td>393</td></tr><tr><td>170</td><td>439</td></tr><tr><td>165</td><td>476</td></tr><tr><td>160</td><td>519</td></tr><tr><td>155</td><td>571</td></tr><tr><td>150</td><td>633</td></tr><tr><td>145</td><td>673</td></tr><tr><td>140</td><td>731</td></tr><tr><td>135</td><td>773</td></tr><tr><td>130</td><td>822</td></tr><tr><td>125</td><td>864</td></tr><tr><td>120</td><td>928</td></tr><tr><td>115</td><td>971</td></tr><tr><td>110</td><td>1033</td></tr><tr><td>105</td><td>1065</td></tr><tr><td>100</td><td>1118</td></tr><tr><td>95</td><td>1162</td></tr><tr><td>90</td><td>1207</td></tr><tr><td>85</td><td>1235</td></tr><tr><td>80</td><td>1267</td></tr><tr><td>75</td><td>1293</td></tr><tr><td>70</td><td>1330</td></tr><tr><td>65</td><td>1347</td></tr><tr><td>60</td><td>1357</td></tr><tr><td>55</td><td>1368</td></tr><tr><td>50</td><td>1384</td></tr><tr><td>45</td><td>1392</td></tr><tr><td>40</td><td>1401</td></tr><tr><td>35</td><td>1417</td></tr><tr><td>30</td><td>1424</td></tr><tr><td>25</td><td>1437</td></tr><tr><td>20</td><td>1440</td></tr><tr><td>15</td><td>1450</td></tr><tr><td>10</td><td>1453</td></tr><tr><td>0</td><td>1459</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 1174 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>345</td><td>1</td></tr><tr><td>320</td><td>2</td></tr><tr><td>315</td><td>3</td></tr><tr><td>305</td><td>4</td></tr><tr><td>300</td><td>7</td></tr><tr><td>295</td><td>9</td></tr><tr><td>290</td><td>10</td></tr><tr><td>285</td><td>13</td></tr><tr><td>280</td><td>15</td></tr><tr><td>278</td><td>21</td></tr><tr><td>275</td><td>22</td></tr><tr><td>270</td><td>26</td></tr><tr><td>265</td><td>32</td></tr><tr><td>260</td><td>40</td></tr><tr><td>255</td><td>54</td></tr><tr><td>250</td><td>60</td></tr><tr><td>245</td><td>78</td></tr><tr><td>240</td><td>88</td></tr><tr><td>235</td><td>105</td></tr><tr><td>230</td><td>118</td></tr><tr><td>225</td><td>134</td></tr><tr><td>220</td><td>163</td></tr><tr><td>215</td><td>179</td></tr><tr><td>210</td><td>209</td></tr><tr><td>205</td><td>235</td></tr><tr><td>200</td><td>263</td></tr><tr><td>195</td><td>292</td></tr><tr><td>190</td><td>321</td></tr><tr><td>185</td><td>338</td></tr><tr><td>180</td><td>377</td></tr><tr><td>175</td><td>408</td></tr><tr><td>170</td><td>446</td></tr><tr><td>165</td><td>489</td></tr><tr><td>160</td><td>533</td></tr><tr><td>155</td><td>569</td></tr><tr><td>150</td><td>619</td></tr><tr><td>145</td><td>646</td></tr><tr><td>140</td><td>697</td></tr><tr><td>135</td><td>725</td></tr><tr><td>130</td><td>768</td></tr><tr><td>125</td><td>795</td></tr><tr><td>120</td><td>830</td></tr><tr><td>115</td><td>862</td></tr><tr><td>110</td><td>893</td></tr><tr><td>105</td><td>919</td></tr><tr><td>100</td><td>954</td></tr><tr><td>95</td><td>984</td></tr><tr><td>90</td><td>1005</td></tr><tr><td>85</td><td>1014</td></tr><tr><td>80</td><td>1030</td></tr><tr><td>75</td><td>1039</td></tr><tr><td>70</td><td>1058</td></tr><tr><td>65</td><td>1068</td></tr><tr><td>60</td><td>1079</td></tr><tr><td>55</td><td>1087</td></tr><tr><td>50</td><td>1096</td></tr><tr><td>45</td><td>1099</td></tr><tr><td>40</td><td>1104</td></tr><tr><td>35</td><td>1106</td></tr><tr><td>30</td><td>1111</td></tr><tr><td>25</td><td>1118</td></tr><tr><td>20</td><td>1119</td></tr><tr><td>15</td><td>1125</td></tr><tr><td>10</td><td>1128</td></tr><tr><td>5</td><td>1137</td></tr><tr><td>0</td><td>1138</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 828 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>358</td><td>1</td></tr><tr><td>335</td><td>2</td></tr><tr><td>330</td><td>3</td></tr><tr><td>320</td><td>4</td></tr><tr><td>315</td><td>5</td></tr><tr><td>310</td><td>7</td></tr><tr><td>305</td><td>8</td></tr><tr><td>300</td><td>9</td></tr><tr><td>295</td><td>12</td></tr><tr><td>290</td><td>13</td></tr><tr><td>280</td><td>17</td></tr><tr><td>275</td><td>22</td></tr><tr><td>270</td><td>24</td></tr><tr><td>265</td><td>33</td></tr><tr><td>260</td><td>42</td></tr><tr><td>255</td><td>59</td></tr><tr><td>250</td><td>65</td></tr><tr><td>245</td><td>80</td></tr><tr><td>240</td><td>89</td></tr><tr><td>235</td><td>107</td></tr><tr><td>230</td><td>122</td></tr><tr><td>225</td><td>145</td></tr><tr><td>220</td><td>164</td></tr><tr><td>215</td><td>187</td></tr><tr><td>210</td><td>208</td></tr><tr><td>205</td><td>232</td></tr><tr><td>200</td><td>260</td></tr><tr><td>195</td><td>289</td></tr><tr><td>193</td><td>323</td></tr><tr><td>190</td><td>324</td></tr><tr><td>188</td><td>344</td></tr><tr><td>185</td><td>345</td></tr><tr><td>180</td><td>375</td></tr><tr><td>175</td><td>400</td></tr><tr><td>173</td><td>424</td></tr><tr><td>170</td><td>425</td></tr><tr><td>165</td><td>446</td></tr><tr><td>160</td><td>465</td></tr><tr><td>155</td><td>487</td></tr><tr><td>150</td><td>508</td></tr><tr><td>145</td><td>531</td></tr><tr><td>140</td><td>554</td></tr><tr><td>135</td><td>569</td></tr><tr><td>130</td><td>596</td></tr><tr><td>125</td><td>616</td></tr><tr><td>120</td><td>645</td></tr><tr><td>115</td><td>656</td></tr><tr><td>110</td><td>672</td></tr><tr><td>105</td><td>684</td></tr><tr><td>100</td><td>700</td></tr><tr><td>95</td><td>714</td></tr><tr><td>90</td><td>723</td></tr><tr><td>85</td><td>730</td></tr><tr><td>80</td><td>740</td></tr><tr><td>75</td><td>745</td></tr><tr><td>70</td><td>751</td></tr><tr><td>65</td><td>758</td></tr><tr><td>60</td><td>761</td></tr><tr><td>55</td><td>766</td></tr><tr><td>50</td><td>773</td></tr><tr><td>45</td><td>775</td></tr><tr><td>40</td><td>776</td></tr><tr><td>30</td><td>779</td></tr><tr><td>25</td><td>783</td></tr><tr><td>20</td><td>785</td></tr><tr><td>10</td><td>787</td></tr><tr><td>5</td><td>792</td></tr><tr><td>0</td><td>793</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 3481 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>375</td><td>1</td></tr><tr><td>340</td><td>2</td></tr><tr><td>320</td><td>3</td></tr><tr><td>315</td><td>5</td></tr><tr><td>310</td><td>6</td></tr><tr><td>305</td><td>8</td></tr><tr><td>300</td><td>9</td></tr><tr><td>295</td><td>13</td></tr><tr><td>290</td><td>15</td></tr><tr><td>285</td><td>19</td></tr><tr><td>280</td><td>22</td></tr><tr><td>275</td><td>25</td></tr><tr><td>270</td><td>28</td></tr><tr><td>265</td><td>47</td></tr><tr><td>260</td><td>49</td></tr><tr><td>255</td><td>67</td></tr><tr><td>250</td><td>84</td></tr><tr><td>245</td><td>107</td></tr><tr><td>240</td><td>116</td></tr><tr><td>235</td><td>143</td></tr><tr><td>230</td><td>170</td></tr><tr><td>225</td><td>207</td></tr><tr><td>220</td><td>246</td></tr><tr><td>215</td><td>294</td></tr><tr><td>210</td><td>350</td></tr><tr><td>205</td><td>413</td></tr><tr><td>200</td><td>476</td></tr><tr><td>195</td><td>560</td></tr><tr><td>190</td><td>639</td></tr><tr><td>185</td><td>731</td></tr><tr><td>180</td><td>840</td></tr><tr><td>175</td><td>949</td></tr><tr><td>170</td><td>1043</td></tr><tr><td>165</td><td>1159</td></tr><tr><td>160</td><td>1255</td></tr><tr><td>155</td><td>1389</td></tr><tr><td>150</td><td>1511</td></tr><tr><td>145</td><td>1643</td></tr><tr><td>140</td><td>1762</td></tr><tr><td>135</td><td>1866</td></tr><tr><td>130</td><td>1998</td></tr><tr><td>125</td><td>2110</td></tr><tr><td>120</td><td>2228</td></tr><tr><td>115</td><td>2344</td></tr><tr><td>110</td><td>2460</td></tr><tr><td>105</td><td>2560</td></tr><tr><td>100</td><td>2668</td></tr><tr><td>95</td><td>2751</td></tr><tr><td>90</td><td>2830</td></tr><tr><td>85</td><td>2872</td></tr><tr><td>80</td><td>2942</td></tr><tr><td>75</td><td>2980</td></tr><tr><td>70</td><td>3014</td></tr><tr><td>65</td><td>3044</td></tr><tr><td>60</td><td>3070</td></tr><tr><td>55</td><td>3112</td></tr><tr><td>50</td><td>3141</td></tr><tr><td>45</td><td>3156</td></tr><tr><td>40</td><td>3162</td></tr><tr><td>35</td><td>3198</td></tr><tr><td>30</td><td>3203</td></tr><tr><td>25</td><td>3222</td></tr><tr><td>20</td><td>3228</td></tr><tr><td>15</td><td>3275</td></tr><tr><td>10</td><td>3277</td></tr><tr><td>5</td><td>3293</td></tr><tr><td>0</td><td>3299</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 4803 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>330</td><td>1</td></tr><tr><td>325</td><td>3</td></tr><tr><td>315</td><td>4</td></tr><tr><td>310</td><td>8</td></tr><tr><td>305</td><td>17</td></tr><tr><td>300</td><td>21</td></tr><tr><td>295</td><td>25</td></tr><tr><td>290</td><td>30</td></tr><tr><td>285</td><td>45</td></tr><tr><td>280</td><td>51</td></tr><tr><td>275</td><td>97</td></tr><tr><td>270</td><td>125</td></tr><tr><td>265</td><td>166</td></tr><tr><td>260</td><td>195</td></tr><tr><td>255</td><td>258</td></tr><tr><td>250</td><td>307</td></tr><tr><td>245</td><td>368</td></tr><tr><td>240</td><td>453</td></tr><tr><td>235</td><td>592</td></tr><tr><td>230</td><td>679</td></tr><tr><td>225</td><td>837</td></tr><tr><td>220</td><td>972</td></tr><tr><td>215</td><td>1125</td></tr><tr><td>210</td><td>1270</td></tr><tr><td>208</td><td>1422</td></tr><tr><td>205</td><td>1424</td></tr><tr><td>200</td><td>1593</td></tr><tr><td>195</td><td>1743</td></tr><tr><td>190</td><td>1896</td></tr><tr><td>185</td><td>2068</td></tr><tr><td>180</td><td>2269</td></tr><tr><td>175</td><td>2416</td></tr><tr><td>170</td><td>2635</td></tr><tr><td>165</td><td>2786</td></tr><tr><td>160</td><td>2958</td></tr><tr><td>155</td><td>3117</td></tr><tr><td>150</td><td>3252</td></tr><tr><td>145</td><td>3395</td></tr><tr><td>140</td><td>3589</td></tr><tr><td>135</td><td>3696</td></tr><tr><td>130</td><td>3836</td></tr><tr><td>125</td><td>3942</td></tr><tr><td>120</td><td>4054</td></tr><tr><td>115</td><td>4126</td></tr><tr><td>110</td><td>4209</td></tr><tr><td>105</td><td>4277</td></tr><tr><td>100</td><td>4335</td></tr><tr><td>95</td><td>4367</td></tr><tr><td>90</td><td>4405</td></tr><tr><td>85</td><td>4441</td></tr><tr><td>80</td><td>4476</td></tr><tr><td>75</td><td>4502</td></tr><tr><td>70</td><td>4530</td></tr><tr><td>65</td><td>4542</td></tr><tr><td>60</td><td>4559</td></tr><tr><td>55</td><td>4576</td></tr><tr><td>50</td><td>4583</td></tr><tr><td>45</td><td>4588</td></tr><tr><td>40</td><td>4590</td></tr><tr><td>35</td><td>4604</td></tr><tr><td>30</td><td>4607</td></tr><tr><td>20</td><td>4617</td></tr><tr><td>15</td><td>4639</td></tr><tr><td>10</td><td>4640</td></tr><tr><td>0</td><td>4649</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation en binôme) : 54055 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>425</td><td>1</td></tr><tr><td>395</td><td>3</td></tr><tr><td>385</td><td>5</td></tr><tr><td>380</td><td>7</td></tr><tr><td>375</td><td>9</td></tr><tr><td>365</td><td>11</td></tr><tr><td>360</td><td>15</td></tr><tr><td>350</td><td>23</td></tr><tr><td>345</td><td>31</td></tr><tr><td>340</td><td>35</td></tr><tr><td>335</td><td>45</td></tr><tr><td>330</td><td>55</td></tr><tr><td>325</td><td>73</td></tr><tr><td>320</td><td>94</td></tr><tr><td>318</td><td>159</td></tr><tr><td>315</td><td>161</td></tr><tr><td>310</td><td>209</td></tr><tr><td>305</td><td>317</td></tr><tr><td>300</td><td>385</td></tr><tr><td>295</td><td>597</td></tr><tr><td>290</td><td>734</td></tr><tr><td>288</td><td>1104</td></tr><tr><td>285</td><td>1106</td></tr><tr><td>280</td><td>1319</td></tr><tr><td>278</td><td>1821</td></tr><tr><td>275</td><td>1823</td></tr><tr><td>273</td><td>2162</td></tr><tr><td>270</td><td>2164</td></tr><tr><td>265</td><td>3059</td></tr><tr><td>263</td><td>3667</td></tr><tr><td>260</td><td>3669</td></tr><tr><td>258</td><td>4956</td></tr><tr><td>255</td><td>4960</td></tr><tr><td>253</td><td>5720</td></tr><tr><td>250</td><td>5722</td></tr><tr><td>245</td><td>7542</td></tr><tr><td>240</td><td>8712</td></tr><tr><td>235</td><td>10932</td></tr><tr><td>230</td><td>12428</td></tr><tr><td>225</td><td>14607</td></tr><tr><td>223</td><td>16338</td></tr><tr><td>220</td><td>16340</td></tr><tr><td>215</td><td>18561</td></tr><tr><td>210</td><td>20396</td></tr><tr><td>205</td><td>22411</td></tr><tr><td>203</td><td>24252</td></tr><tr><td>200</td><td>24254</td></tr><tr><td>195</td><td>26244</td></tr><tr><td>190</td><td>28053</td></tr><tr><td>185</td><td>29907</td></tr><tr><td>180</td><td>31581</td></tr><tr><td>175</td><td>33242</td></tr><tr><td>173</td><td>34843</td></tr><tr><td>170</td><td>34845</td></tr><tr><td>165</td><td>36400</td></tr><tr><td>160</td><td>37915</td></tr><tr><td>155</td><td>39297</td></tr><tr><td>153</td><td>40614</td></tr><tr><td>150</td><td>40616</td></tr><tr><td>145</td><td>41859</td></tr><tr><td>140</td><td>43100</td></tr><tr><td>138</td><td>44144</td></tr><tr><td>135</td><td>44146</td></tr><tr><td>130</td><td>45129</td></tr><tr><td>125</td><td>46044</td></tr><tr><td>120</td><td>46925</td></tr><tr><td>115</td><td>47715</td></tr><tr><td>110</td><td>48453</td></tr><tr><td>108</td><td>49072</td></tr><tr><td>105</td><td>49074</td></tr><tr><td>100</td><td>49717</td></tr><tr><td>95</td><td>50180</td></tr><tr><td>90</td><td>50581</td></tr><tr><td>88</td><td>50970</td></tr><tr><td>85</td><td>50972</td></tr><tr><td>80</td><td>51315</td></tr><tr><td>75</td><td>51559</td></tr><tr><td>70</td><td>51806</td></tr><tr><td>65</td><td>51958</td></tr><tr><td>60</td><td>52083</td></tr><tr><td>55</td><td>52228</td></tr><tr><td>50</td><td>52349</td></tr><tr><td>45</td><td>52425</td></tr><tr><td>40</td><td>52479</td></tr><tr><td>35</td><td>52558</td></tr><tr><td>30</td><td>52580</td></tr><tr><td>25</td><td>52680</td></tr><tr><td>20</td><td>52689</td></tr><tr><td>15</td><td>52794</td></tr><tr><td>10</td><td>52811</td></tr><tr><td>5</td><td>52895</td></tr><tr><td>0</td><td>52901</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation en binôme) : 58745 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>420</td><td>1</td></tr><tr><td>400</td><td>3</td></tr><tr><td>390</td><td>5</td></tr><tr><td>385</td><td>13</td></tr><tr><td>375</td><td>15</td></tr><tr><td>370</td><td>23</td></tr><tr><td>365</td><td>31</td></tr><tr><td>360</td><td>41</td></tr><tr><td>355</td><td>51</td></tr><tr><td>350</td><td>65</td></tr><tr><td>345</td><td>104</td></tr><tr><td>340</td><td>156</td></tr><tr><td>338</td><td>229</td></tr><tr><td>335</td><td>231</td></tr><tr><td>330</td><td>294</td></tr><tr><td>325</td><td>447</td></tr><tr><td>320</td><td>567</td></tr><tr><td>315</td><td>845</td></tr><tr><td>313</td><td>1047</td></tr><tr><td>310</td><td>1049</td></tr><tr><td>308</td><td>1477</td></tr><tr><td>305</td><td>1479</td></tr><tr><td>303</td><td>1805</td></tr><tr><td>300</td><td>1807</td></tr><tr><td>298</td><td>2559</td></tr><tr><td>295</td><td>2561</td></tr><tr><td>293</td><td>3052</td></tr><tr><td>290</td><td>3054</td></tr><tr><td>288</td><td>4144</td></tr><tr><td>285</td><td>4146</td></tr><tr><td>283</td><td>4824</td></tr><tr><td>280</td><td>4832</td></tr><tr><td>275</td><td>6313</td></tr><tr><td>273</td><td>7283</td></tr><tr><td>270</td><td>7285</td></tr><tr><td>268</td><td>9317</td></tr><tr><td>265</td><td>9319</td></tr><tr><td>263</td><td>10532</td></tr><tr><td>260</td><td>10538</td></tr><tr><td>258</td><td>12954</td></tr><tr><td>255</td><td>12962</td></tr><tr><td>250</td><td>14545</td></tr><tr><td>248</td><td>17303</td></tr><tr><td>245</td><td>17305</td></tr><tr><td>243</td><td>19196</td></tr><tr><td>240</td><td>19198</td></tr><tr><td>238</td><td>21992</td></tr><tr><td>235</td><td>21994</td></tr><tr><td>233</td><td>24105</td></tr><tr><td>230</td><td>24107</td></tr><tr><td>228</td><td>26861</td></tr><tr><td>225</td><td>26867</td></tr><tr><td>223</td><td>28986</td></tr><tr><td>220</td><td>28994</td></tr><tr><td>218</td><td>31389</td></tr><tr><td>215</td><td>31393</td></tr><tr><td>213</td><td>33432</td></tr><tr><td>210</td><td>33434</td></tr><tr><td>208</td><td>35672</td></tr><tr><td>205</td><td>35676</td></tr><tr><td>203</td><td>37576</td></tr><tr><td>200</td><td>37578</td></tr><tr><td>198</td><td>39712</td></tr><tr><td>195</td><td>39714</td></tr><tr><td>190</td><td>41261</td></tr><tr><td>188</td><td>42795</td></tr><tr><td>185</td><td>42797</td></tr><tr><td>180</td><td>44269</td></tr><tr><td>178</td><td>45699</td></tr><tr><td>175</td><td>45701</td></tr><tr><td>170</td><td>46886</td></tr><tr><td>168</td><td>48061</td></tr><tr><td>165</td><td>48063</td></tr><tr><td>160</td><td>49087</td></tr><tr><td>155</td><td>50082</td></tr><tr><td>150</td><td>50967</td></tr><tr><td>145</td><td>51745</td></tr><tr><td>140</td><td>52428</td></tr><tr><td>135</td><td>53111</td></tr><tr><td>133</td><td>53679</td></tr><tr><td>130</td><td>53681</td></tr><tr><td>125</td><td>54180</td></tr><tr><td>120</td><td>54692</td></tr><tr><td>115</td><td>55118</td></tr><tr><td>110</td><td>55547</td></tr><tr><td>105</td><td>55821</td></tr><tr><td>100</td><td>56099</td></tr><tr><td>95</td><td>56307</td></tr><tr><td>90</td><td>56514</td></tr><tr><td>85</td><td>56684</td></tr><tr><td>83</td><td>56820</td></tr><tr><td>80</td><td>56821</td></tr><tr><td>75</td><td>56921</td></tr><tr><td>70</td><td>57027</td></tr><tr><td>68</td><td>57092</td></tr><tr><td>65</td><td>57094</td></tr><tr><td>60</td><td>57148</td></tr><tr><td>55</td><td>57201</td></tr><tr><td>50</td><td>57240</td></tr><tr><td>45</td><td>57280</td></tr><tr><td>40</td><td>57303</td></tr><tr><td>35</td><td>57342</td></tr><tr><td>30</td><td>57348</td></tr><tr><td>25</td><td>57428</td></tr><tr><td>20</td><td>57438</td></tr><tr><td>15</td><td>57531</td></tr><tr><td>10</td><td>57535</td></tr><tr><td>5</td><td>57600</td></tr><tr><td>0</td><td>57602</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 51947 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>425</td><td>1</td></tr><tr><td>405</td><td>3</td></tr><tr><td>395</td><td>5</td></tr><tr><td>390</td><td>9</td></tr><tr><td>385</td><td>11</td></tr><tr><td>380</td><td>19</td></tr><tr><td>375</td><td>25</td></tr><tr><td>370</td><td>47</td></tr><tr><td>368</td><td>69</td></tr><tr><td>365</td><td>71</td></tr><tr><td>360</td><td>103</td></tr><tr><td>358</td><td>137</td></tr><tr><td>355</td><td>141</td></tr><tr><td>353</td><td>220</td></tr><tr><td>350</td><td>222</td></tr><tr><td>345</td><td>314</td></tr><tr><td>340</td><td>437</td></tr><tr><td>338</td><td>610</td></tr><tr><td>335</td><td>612</td></tr><tr><td>330</td><td>814</td></tr><tr><td>328</td><td>1138</td></tr><tr><td>325</td><td>1142</td></tr><tr><td>323</td><td>1446</td></tr><tr><td>320</td><td>1450</td></tr><tr><td>318</td><td>1984</td></tr><tr><td>315</td><td>1988</td></tr><tr><td>313</td><td>2383</td></tr><tr><td>310</td><td>2393</td></tr><tr><td>308</td><td>3256</td></tr><tr><td>305</td><td>3260</td></tr><tr><td>303</td><td>3932</td></tr><tr><td>300</td><td>3936</td></tr><tr><td>298</td><td>5148</td></tr><tr><td>295</td><td>5150</td></tr><tr><td>293</td><td>5976</td></tr><tr><td>290</td><td>5982</td></tr><tr><td>288</td><td>7597</td></tr><tr><td>285</td><td>7609</td></tr><tr><td>283</td><td>8720</td></tr><tr><td>280</td><td>8734</td></tr><tr><td>278</td><td>10899</td></tr><tr><td>275</td><td>10915</td></tr><tr><td>273</td><td>12350</td></tr><tr><td>270</td><td>12364</td></tr><tr><td>268</td><td>14700</td></tr><tr><td>265</td><td>14710</td></tr><tr><td>263</td><td>16304</td></tr><tr><td>260</td><td>16316</td></tr><tr><td>258</td><td>18868</td></tr><tr><td>255</td><td>18874</td></tr><tr><td>253</td><td>20530</td></tr><tr><td>250</td><td>20538</td></tr><tr><td>248</td><td>23248</td></tr><tr><td>245</td><td>23250</td></tr><tr><td>240</td><td>25145</td></tr><tr><td>238</td><td>27682</td></tr><tr><td>235</td><td>27684</td></tr><tr><td>233</td><td>29438</td></tr><tr><td>230</td><td>29440</td></tr><tr><td>228</td><td>31549</td></tr><tr><td>225</td><td>31551</td></tr><tr><td>223</td><td>33267</td></tr><tr><td>220</td><td>33271</td></tr><tr><td>218</td><td>35201</td></tr><tr><td>215</td><td>35205</td></tr><tr><td>210</td><td>36807</td></tr><tr><td>208</td><td>38299</td></tr><tr><td>205</td><td>38301</td></tr><tr><td>200</td><td>39517</td></tr><tr><td>198</td><td>40802</td></tr><tr><td>195</td><td>40804</td></tr><tr><td>193</td><td>41806</td></tr><tr><td>190</td><td>41808</td></tr><tr><td>188</td><td>42846</td></tr><tr><td>185</td><td>42848</td></tr><tr><td>183</td><td>43760</td></tr><tr><td>180</td><td>43762</td></tr><tr><td>175</td><td>44600</td></tr><tr><td>173</td><td>45383</td></tr><tr><td>170</td><td>45387</td></tr><tr><td>165</td><td>46081</td></tr><tr><td>160</td><td>46697</td></tr><tr><td>155</td><td>47258</td></tr><tr><td>153</td><td>47688</td></tr><tr><td>150</td><td>47690</td></tr><tr><td>148</td><td>48095</td></tr><tr><td>145</td><td>48097</td></tr><tr><td>143</td><td>48458</td></tr><tr><td>140</td><td>48460</td></tr><tr><td>138</td><td>48759</td></tr><tr><td>135</td><td>48761</td></tr><tr><td>130</td><td>49056</td></tr><tr><td>125</td><td>49304</td></tr><tr><td>120</td><td>49562</td></tr><tr><td>115</td><td>49767</td></tr><tr><td>110</td><td>49943</td></tr><tr><td>108</td><td>50101</td></tr><tr><td>105</td><td>50103</td></tr><tr><td>100</td><td>50238</td></tr><tr><td>95</td><td>50376</td></tr><tr><td>90</td><td>50451</td></tr><tr><td>85</td><td>50550</td></tr><tr><td>80</td><td>50618</td></tr><tr><td>75</td><td>50691</td></tr><tr><td>70</td><td>50757</td></tr><tr><td>65</td><td>50799</td></tr><tr><td>60</td><td>50834</td></tr><tr><td>55</td><td>50877</td></tr><tr><td>50</td><td>50910</td></tr><tr><td>45</td><td>50936</td></tr><tr><td>40</td><td>50951</td></tr><tr><td>35</td><td>50993</td></tr><tr><td>30</td><td>50999</td></tr><tr><td>20</td><td>51045</td></tr><tr><td>15</td><td>51143</td></tr><tr><td>10</td><td>51149</td></tr><tr><td>5</td><td>51194</td></tr><tr><td>0</td><td>51196</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 39786 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>470</td><td>1</td></tr><tr><td>455</td><td>3</td></tr><tr><td>435</td><td>5</td></tr><tr><td>430</td><td>7</td></tr><tr><td>420</td><td>9</td></tr><tr><td>415</td><td>13</td></tr><tr><td>410</td><td>21</td></tr><tr><td>405</td><td>23</td></tr><tr><td>400</td><td>36</td></tr><tr><td>395</td><td>42</td></tr><tr><td>390</td><td>54</td></tr><tr><td>385</td><td>72</td></tr><tr><td>383</td><td>113</td></tr><tr><td>380</td><td>115</td></tr><tr><td>378</td><td>127</td></tr><tr><td>375</td><td>131</td></tr><tr><td>370</td><td>217</td></tr><tr><td>368</td><td>273</td></tr><tr><td>365</td><td>275</td></tr><tr><td>363</td><td>370</td></tr><tr><td>360</td><td>374</td></tr><tr><td>358</td><td>464</td></tr><tr><td>355</td><td>468</td></tr><tr><td>353</td><td>643</td></tr><tr><td>350</td><td>649</td></tr><tr><td>348</td><td>851</td></tr><tr><td>345</td><td>858</td></tr><tr><td>343</td><td>1114</td></tr><tr><td>340</td><td>1122</td></tr><tr><td>338</td><td>1426</td></tr><tr><td>335</td><td>1432</td></tr><tr><td>333</td><td>1811</td></tr><tr><td>330</td><td>1820</td></tr><tr><td>328</td><td>2331</td></tr><tr><td>325</td><td>2341</td></tr><tr><td>323</td><td>2815</td></tr><tr><td>320</td><td>2819</td></tr><tr><td>318</td><td>3675</td></tr><tr><td>315</td><td>3689</td></tr><tr><td>313</td><td>4374</td></tr><tr><td>310</td><td>4386</td></tr><tr><td>308</td><td>5491</td></tr><tr><td>305</td><td>5495</td></tr><tr><td>303</td><td>6311</td></tr><tr><td>300</td><td>6329</td></tr><tr><td>298</td><td>7774</td></tr><tr><td>295</td><td>7780</td></tr><tr><td>293</td><td>8737</td></tr><tr><td>290</td><td>8743</td></tr><tr><td>288</td><td>10331</td></tr><tr><td>285</td><td>10343</td></tr><tr><td>283</td><td>11524</td></tr><tr><td>280</td><td>11530</td></tr><tr><td>278</td><td>13543</td></tr><tr><td>275</td><td>13553</td></tr><tr><td>273</td><td>14828</td></tr><tr><td>270</td><td>14836</td></tr><tr><td>268</td><td>16811</td></tr><tr><td>265</td><td>16813</td></tr><tr><td>263</td><td>18105</td></tr><tr><td>260</td><td>18109</td></tr><tr><td>258</td><td>20041</td></tr><tr><td>255</td><td>20051</td></tr><tr><td>253</td><td>21455</td></tr><tr><td>250</td><td>21461</td></tr><tr><td>248</td><td>23371</td></tr><tr><td>245</td><td>23377</td></tr><tr><td>243</td><td>24596</td></tr><tr><td>240</td><td>24604</td></tr><tr><td>238</td><td>26194</td></tr><tr><td>235</td><td>26198</td></tr><tr><td>233</td><td>27431</td></tr><tr><td>230</td><td>27437</td></tr><tr><td>228</td><td>28725</td></tr><tr><td>225</td><td>28729</td></tr><tr><td>223</td><td>29832</td></tr><tr><td>220</td><td>29838</td></tr><tr><td>218</td><td>30833</td></tr><tr><td>215</td><td>30835</td></tr><tr><td>213</td><td>31695</td></tr><tr><td>210</td><td>31697</td></tr><tr><td>208</td><td>32562</td></tr><tr><td>205</td><td>32564</td></tr><tr><td>200</td><td>33315</td></tr><tr><td>198</td><td>34060</td></tr><tr><td>195</td><td>34064</td></tr><tr><td>193</td><td>34660</td></tr><tr><td>190</td><td>34662</td></tr><tr><td>188</td><td>35176</td></tr><tr><td>185</td><td>35178</td></tr><tr><td>183</td><td>35619</td></tr><tr><td>180</td><td>35623</td></tr><tr><td>175</td><td>36064</td></tr><tr><td>173</td><td>36419</td></tr><tr><td>170</td><td>36421</td></tr><tr><td>168</td><td>36784</td></tr><tr><td>165</td><td>36786</td></tr><tr><td>163</td><td>37108</td></tr><tr><td>160</td><td>37109</td></tr><tr><td>155</td><td>37390</td></tr><tr><td>153</td><td>37603</td></tr><tr><td>150</td><td>37605</td></tr><tr><td>148</td><td>37825</td></tr><tr><td>145</td><td>37827</td></tr><tr><td>143</td><td>38022</td></tr><tr><td>140</td><td>38024</td></tr><tr><td>135</td><td>38164</td></tr><tr><td>130</td><td>38305</td></tr><tr><td>125</td><td>38448</td></tr><tr><td>120</td><td>38537</td></tr><tr><td>115</td><td>38631</td></tr><tr><td>110</td><td>38720</td></tr><tr><td>105</td><td>38792</td></tr><tr><td>103</td><td>38848</td></tr><tr><td>100</td><td>38850</td></tr><tr><td>95</td><td>38910</td></tr><tr><td>90</td><td>38948</td></tr><tr><td>85</td><td>38985</td></tr><tr><td>80</td><td>39022</td></tr><tr><td>75</td><td>39056</td></tr><tr><td>70</td><td>39078</td></tr><tr><td>65</td><td>39096</td></tr><tr><td>60</td><td>39113</td></tr><tr><td>55</td><td>39138</td></tr><tr><td>50</td><td>39153</td></tr><tr><td>45</td><td>39163</td></tr><tr><td>40</td><td>39165</td></tr><tr><td>35</td><td>39197</td></tr><tr><td>30</td><td>39199</td></tr><tr><td>20</td><td>39225</td></tr><tr><td>15</td><td>39266</td></tr><tr><td>10</td><td>39269</td></tr><tr><td>0</td><td>39290</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 15771 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>435</td><td>1</td></tr><tr><td>425</td><td>3</td></tr><tr><td>415</td><td>5</td></tr><tr><td>408</td><td>9</td></tr><tr><td>405</td><td>11</td></tr><tr><td>400</td><td>23</td></tr><tr><td>395</td><td>31</td></tr><tr><td>390</td><td>51</td></tr><tr><td>385</td><td>67</td></tr><tr><td>380</td><td>92</td></tr><tr><td>378</td><td>110</td></tr><tr><td>375</td><td>114</td></tr><tr><td>373</td><td>158</td></tr><tr><td>370</td><td>160</td></tr><tr><td>365</td><td>220</td></tr><tr><td>360</td><td>276</td></tr><tr><td>355</td><td>332</td></tr><tr><td>350</td><td>442</td></tr><tr><td>348</td><td>542</td></tr><tr><td>345</td><td>547</td></tr><tr><td>343</td><td>714</td></tr><tr><td>340</td><td>716</td></tr><tr><td>335</td><td>911</td></tr><tr><td>333</td><td>1146</td></tr><tr><td>330</td><td>1148</td></tr><tr><td>328</td><td>1485</td></tr><tr><td>325</td><td>1487</td></tr><tr><td>323</td><td>1801</td></tr><tr><td>320</td><td>1809</td></tr><tr><td>318</td><td>2270</td></tr><tr><td>315</td><td>2278</td></tr><tr><td>313</td><td>2665</td></tr><tr><td>310</td><td>2671</td></tr><tr><td>308</td><td>3280</td></tr><tr><td>305</td><td>3284</td></tr><tr><td>303</td><td>3685</td></tr><tr><td>300</td><td>3693</td></tr><tr><td>298</td><td>4477</td></tr><tr><td>295</td><td>4479</td></tr><tr><td>293</td><td>4939</td></tr><tr><td>290</td><td>4947</td></tr><tr><td>288</td><td>5716</td></tr><tr><td>285</td><td>5720</td></tr><tr><td>283</td><td>6189</td></tr><tr><td>280</td><td>6193</td></tr><tr><td>278</td><td>7046</td></tr><tr><td>275</td><td>7048</td></tr><tr><td>273</td><td>7506</td></tr><tr><td>270</td><td>7510</td></tr><tr><td>268</td><td>8395</td></tr><tr><td>265</td><td>8401</td></tr><tr><td>263</td><td>8903</td></tr><tr><td>260</td><td>8907</td></tr><tr><td>255</td><td>9711</td></tr><tr><td>253</td><td>10144</td></tr><tr><td>250</td><td>10146</td></tr><tr><td>248</td><td>10804</td></tr><tr><td>245</td><td>10812</td></tr><tr><td>243</td><td>11201</td></tr><tr><td>240</td><td>11203</td></tr><tr><td>235</td><td>11742</td></tr><tr><td>233</td><td>12052</td></tr><tr><td>230</td><td>12054</td></tr><tr><td>225</td><td>12480</td></tr><tr><td>223</td><td>12766</td></tr><tr><td>220</td><td>12768</td></tr><tr><td>215</td><td>13084</td></tr><tr><td>213</td><td>13311</td></tr><tr><td>210</td><td>13313</td></tr><tr><td>208</td><td>13574</td></tr><tr><td>205</td><td>13576</td></tr><tr><td>203</td><td>13787</td></tr><tr><td>200</td><td>13791</td></tr><tr><td>198</td><td>13985</td></tr><tr><td>195</td><td>13989</td></tr><tr><td>190</td><td>14142</td></tr><tr><td>185</td><td>14284</td></tr><tr><td>180</td><td>14418</td></tr><tr><td>175</td><td>14545</td></tr><tr><td>173</td><td>14651</td></tr><tr><td>170</td><td>14653</td></tr><tr><td>165</td><td>14761</td></tr><tr><td>160</td><td>14824</td></tr><tr><td>155</td><td>14917</td></tr><tr><td>150</td><td>14993</td></tr><tr><td>145</td><td>15065</td></tr><tr><td>140</td><td>15107</td></tr><tr><td>138</td><td>15157</td></tr><tr><td>135</td><td>15159</td></tr><tr><td>130</td><td>15217</td></tr><tr><td>125</td><td>15261</td></tr><tr><td>120</td><td>15281</td></tr><tr><td>115</td><td>15314</td></tr><tr><td>110</td><td>15336</td></tr><tr><td>105</td><td>15362</td></tr><tr><td>100</td><td>15389</td></tr><tr><td>95</td><td>15417</td></tr><tr><td>90</td><td>15423</td></tr><tr><td>85</td><td>15440</td></tr><tr><td>80</td><td>15445</td></tr><tr><td>75</td><td>15461</td></tr><tr><td>70</td><td>15469</td></tr><tr><td>65</td><td>15477</td></tr><tr><td>60</td><td>15481</td></tr><tr><td>55</td><td>15490</td></tr><tr><td>50</td><td>15500</td></tr><tr><td>45</td><td>15504</td></tr><tr><td>40</td><td>15508</td></tr><tr><td>30</td><td>15521</td></tr><tr><td>20</td><td>15529</td></tr><tr><td>15</td><td>15539</td></tr><tr><td>10</td><td>15542</td></tr><tr><td>5</td><td>15552</td></tr><tr><td>0</td><td>15554</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 3157 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>435</td><td>1</td></tr><tr><td>430</td><td>3</td></tr><tr><td>410</td><td>5</td></tr><tr><td>405</td><td>7</td></tr><tr><td>400</td><td>15</td></tr><tr><td>395</td><td>19</td></tr><tr><td>390</td><td>27</td></tr><tr><td>385</td><td>37</td></tr><tr><td>380</td><td>59</td></tr><tr><td>375</td><td>67</td></tr><tr><td>373</td><td>94</td></tr><tr><td>370</td><td>96</td></tr><tr><td>368</td><td>130</td></tr><tr><td>365</td><td>132</td></tr><tr><td>360</td><td>174</td></tr><tr><td>358</td><td>212</td></tr><tr><td>355</td><td>216</td></tr><tr><td>350</td><td>292</td></tr><tr><td>348</td><td>352</td></tr><tr><td>345</td><td>355</td></tr><tr><td>340</td><td>407</td></tr><tr><td>338</td><td>503</td></tr><tr><td>335</td><td>505</td></tr><tr><td>330</td><td>592</td></tr><tr><td>325</td><td>682</td></tr><tr><td>323</td><td>794</td></tr><tr><td>320</td><td>796</td></tr><tr><td>315</td><td>919</td></tr><tr><td>310</td><td>1015</td></tr><tr><td>308</td><td>1142</td></tr><tr><td>305</td><td>1144</td></tr><tr><td>303</td><td>1244</td></tr><tr><td>300</td><td>1246</td></tr><tr><td>295</td><td>1404</td></tr><tr><td>290</td><td>1486</td></tr><tr><td>285</td><td>1623</td></tr><tr><td>283</td><td>1729</td></tr><tr><td>280</td><td>1731</td></tr><tr><td>275</td><td>1869</td></tr><tr><td>270</td><td>1952</td></tr><tr><td>265</td><td>2098</td></tr><tr><td>260</td><td>2174</td></tr><tr><td>255</td><td>2292</td></tr><tr><td>253</td><td>2360</td></tr><tr><td>250</td><td>2362</td></tr><tr><td>248</td><td>2426</td></tr><tr><td>245</td><td>2428</td></tr><tr><td>243</td><td>2487</td></tr><tr><td>240</td><td>2489</td></tr><tr><td>235</td><td>2567</td></tr><tr><td>230</td><td>2614</td></tr><tr><td>225</td><td>2680</td></tr><tr><td>220</td><td>2736</td></tr><tr><td>218</td><td>2760</td></tr><tr><td>215</td><td>2762</td></tr><tr><td>210</td><td>2789</td></tr><tr><td>205</td><td>2825</td></tr><tr><td>200</td><td>2863</td></tr><tr><td>195</td><td>2887</td></tr><tr><td>190</td><td>2919</td></tr><tr><td>185</td><td>2937</td></tr><tr><td>180</td><td>2954</td></tr><tr><td>175</td><td>2972</td></tr><tr><td>170</td><td>2984</td></tr><tr><td>165</td><td>2996</td></tr><tr><td>160</td><td>3008</td></tr><tr><td>155</td><td>3018</td></tr><tr><td>150</td><td>3028</td></tr><tr><td>145</td><td>3032</td></tr><tr><td>140</td><td>3043</td></tr><tr><td>135</td><td>3057</td></tr><tr><td>130</td><td>3063</td></tr><tr><td>125</td><td>3065</td></tr><tr><td>115</td><td>3071</td></tr><tr><td>110</td><td>3075</td></tr><tr><td>105</td><td>3081</td></tr><tr><td>100</td><td>3089</td></tr><tr><td>95</td><td>3093</td></tr><tr><td>90</td><td>3095</td></tr><tr><td>85</td><td>3099</td></tr><tr><td>70</td><td>3101</td></tr><tr><td>65</td><td>3103</td></tr><tr><td>50</td><td>3105</td></tr><tr><td>30</td><td>3109</td></tr><tr><td>20</td><td>3115</td></tr><tr><td>10</td><td>3119</td></tr><tr><td>0</td><td>3121</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 1628 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>435</td><td>1</td></tr><tr><td>410</td><td>3</td></tr><tr><td>405</td><td>7</td></tr><tr><td>400</td><td>9</td></tr><tr><td>395</td><td>13</td></tr><tr><td>390</td><td>29</td></tr><tr><td>388</td><td>37</td></tr><tr><td>385</td><td>39</td></tr><tr><td>380</td><td>53</td></tr><tr><td>375</td><td>57</td></tr><tr><td>370</td><td>69</td></tr><tr><td>365</td><td>79</td></tr><tr><td>363</td><td>107</td></tr><tr><td>360</td><td>109</td></tr><tr><td>358</td><td>143</td></tr><tr><td>355</td><td>147</td></tr><tr><td>353</td><td>203</td></tr><tr><td>350</td><td>205</td></tr><tr><td>348</td><td>225</td></tr><tr><td>345</td><td>226</td></tr><tr><td>340</td><td>276</td></tr><tr><td>338</td><td>305</td></tr><tr><td>335</td><td>309</td></tr><tr><td>330</td><td>362</td></tr><tr><td>325</td><td>408</td></tr><tr><td>320</td><td>452</td></tr><tr><td>315</td><td>526</td></tr><tr><td>310</td><td>590</td></tr><tr><td>305</td><td>654</td></tr><tr><td>300</td><td>698</td></tr><tr><td>295</td><td>772</td></tr><tr><td>290</td><td>834</td></tr><tr><td>288</td><td>889</td></tr><tr><td>285</td><td>891</td></tr><tr><td>280</td><td>933</td></tr><tr><td>275</td><td>1009</td></tr><tr><td>270</td><td>1043</td></tr><tr><td>268</td><td>1104</td></tr><tr><td>265</td><td>1106</td></tr><tr><td>260</td><td>1154</td></tr><tr><td>255</td><td>1221</td></tr><tr><td>250</td><td>1235</td></tr><tr><td>248</td><td>1273</td></tr><tr><td>245</td><td>1275</td></tr><tr><td>240</td><td>1311</td></tr><tr><td>235</td><td>1354</td></tr><tr><td>230</td><td>1389</td></tr><tr><td>225</td><td>1426</td></tr><tr><td>223</td><td>1442</td></tr><tr><td>220</td><td>1444</td></tr><tr><td>215</td><td>1462</td></tr><tr><td>210</td><td>1470</td></tr><tr><td>208</td><td>1493</td></tr><tr><td>205</td><td>1495</td></tr><tr><td>200</td><td>1504</td></tr><tr><td>195</td><td>1510</td></tr><tr><td>190</td><td>1516</td></tr><tr><td>185</td><td>1528</td></tr><tr><td>180</td><td>1532</td></tr><tr><td>175</td><td>1538</td></tr><tr><td>170</td><td>1551</td></tr><tr><td>165</td><td>1557</td></tr><tr><td>160</td><td>1559</td></tr><tr><td>155</td><td>1563</td></tr><tr><td>150</td><td>1571</td></tr><tr><td>145</td><td>1573</td></tr><tr><td>140</td><td>1577</td></tr><tr><td>135</td><td>1579</td></tr><tr><td>130</td><td>1582</td></tr><tr><td>125</td><td>1586</td></tr><tr><td>120</td><td>1587</td></tr><tr><td>100</td><td>1589</td></tr><tr><td>95</td><td>1591</td></tr><tr><td>90</td><td>1594</td></tr><tr><td>85</td><td>1597</td></tr><tr><td>80</td><td>1598</td></tr><tr><td>75</td><td>1602</td></tr><tr><td>30</td><td>1604</td></tr><tr><td>20</td><td>1607</td></tr><tr><td>10</td><td>1609</td></tr><tr><td>0</td><td>1613</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 320 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>375</td><td>1</td></tr><tr><td>355</td><td>3</td></tr><tr><td>340</td><td>5</td></tr><tr><td>325</td><td>6</td></tr><tr><td>315</td><td>8</td></tr><tr><td>305</td><td>11</td></tr><tr><td>300</td><td>13</td></tr><tr><td>295</td><td>16</td></tr><tr><td>290</td><td>22</td></tr><tr><td>285</td><td>26</td></tr><tr><td>280</td><td>32</td></tr><tr><td>275</td><td>38</td></tr><tr><td>270</td><td>44</td></tr><tr><td>265</td><td>58</td></tr><tr><td>260</td><td>60</td></tr><tr><td>255</td><td>76</td></tr><tr><td>250</td><td>81</td></tr><tr><td>245</td><td>103</td></tr><tr><td>240</td><td>116</td></tr><tr><td>235</td><td>128</td></tr><tr><td>230</td><td>132</td></tr><tr><td>225</td><td>151</td></tr><tr><td>220</td><td>167</td></tr><tr><td>215</td><td>180</td></tr><tr><td>210</td><td>190</td></tr><tr><td>205</td><td>202</td></tr><tr><td>200</td><td>204</td></tr><tr><td>195</td><td>209</td></tr><tr><td>190</td><td>211</td></tr><tr><td>185</td><td>221</td></tr><tr><td>180</td><td>225</td></tr><tr><td>175</td><td>232</td></tr><tr><td>170</td><td>234</td></tr><tr><td>165</td><td>248</td></tr><tr><td>160</td><td>250</td></tr><tr><td>155</td><td>254</td></tr><tr><td>150</td><td>264</td></tr><tr><td>145</td><td>268</td></tr><tr><td>140</td><td>270</td></tr><tr><td>135</td><td>274</td></tr><tr><td>125</td><td>279</td></tr><tr><td>120</td><td>283</td></tr><tr><td>115</td><td>285</td></tr><tr><td>105</td><td>291</td></tr><tr><td>100</td><td>293</td></tr><tr><td>85</td><td>295</td></tr><tr><td>80</td><td>296</td></tr><tr><td>75</td><td>300</td></tr><tr><td>55</td><td>304</td></tr><tr><td>40</td><td>306</td></tr><tr><td>15</td><td>308</td></tr><tr><td>10</td><td>310</td></tr><tr><td>0</td><td>312</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 324 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>350</td><td>3</td></tr><tr><td>340</td><td>5</td></tr><tr><td>320</td><td>6</td></tr><tr><td>315</td><td>8</td></tr><tr><td>310</td><td>15</td></tr><tr><td>305</td><td>29</td></tr><tr><td>300</td><td>31</td></tr><tr><td>295</td><td>35</td></tr><tr><td>290</td><td>39</td></tr><tr><td>285</td><td>51</td></tr><tr><td>280</td><td>61</td></tr><tr><td>275</td><td>69</td></tr><tr><td>270</td><td>77</td></tr><tr><td>265</td><td>89</td></tr><tr><td>263</td><td>100</td></tr><tr><td>260</td><td>102</td></tr><tr><td>255</td><td>111</td></tr><tr><td>250</td><td>117</td></tr><tr><td>245</td><td>131</td></tr><tr><td>240</td><td>147</td></tr><tr><td>235</td><td>167</td></tr><tr><td>230</td><td>173</td></tr><tr><td>225</td><td>183</td></tr><tr><td>220</td><td>189</td></tr><tr><td>215</td><td>199</td></tr><tr><td>210</td><td>206</td></tr><tr><td>205</td><td>216</td></tr><tr><td>195</td><td>224</td></tr><tr><td>190</td><td>236</td></tr><tr><td>185</td><td>246</td></tr><tr><td>180</td><td>252</td></tr><tr><td>175</td><td>254</td></tr><tr><td>170</td><td>258</td></tr><tr><td>165</td><td>264</td></tr><tr><td>160</td><td>268</td></tr><tr><td>155</td><td>269</td></tr><tr><td>150</td><td>275</td></tr><tr><td>145</td><td>277</td></tr><tr><td>135</td><td>284</td></tr><tr><td>130</td><td>287</td></tr><tr><td>125</td><td>291</td></tr><tr><td>120</td><td>295</td></tr><tr><td>110</td><td>299</td></tr><tr><td>105</td><td>305</td></tr><tr><td>100</td><td>307</td></tr><tr><td>95</td><td>308</td></tr><tr><td>85</td><td>310</td></tr><tr><td>80</td><td>314</td></tr><tr><td>75</td><td>318</td></tr><tr><td>40</td><td>320</td></tr><tr><td>0</td><td>322</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 165 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>330</td><td>1</td></tr><tr><td>325</td><td>3</td></tr><tr><td>320</td><td>7</td></tr><tr><td>315</td><td>9</td></tr><tr><td>310</td><td>13</td></tr><tr><td>300</td><td>17</td></tr><tr><td>295</td><td>18</td></tr><tr><td>290</td><td>22</td></tr><tr><td>285</td><td>32</td></tr><tr><td>280</td><td>33</td></tr><tr><td>275</td><td>36</td></tr><tr><td>270</td><td>42</td></tr><tr><td>265</td><td>50</td></tr><tr><td>260</td><td>54</td></tr><tr><td>255</td><td>58</td></tr><tr><td>250</td><td>68</td></tr><tr><td>245</td><td>78</td></tr><tr><td>240</td><td>81</td></tr><tr><td>235</td><td>88</td></tr><tr><td>230</td><td>96</td></tr><tr><td>220</td><td>105</td></tr><tr><td>215</td><td>109</td></tr><tr><td>205</td><td>115</td></tr><tr><td>200</td><td>119</td></tr><tr><td>195</td><td>121</td></tr><tr><td>180</td><td>122</td></tr><tr><td>178</td><td>126</td></tr><tr><td>175</td><td>128</td></tr><tr><td>170</td><td>130</td></tr><tr><td>160</td><td>132</td></tr><tr><td>155</td><td>134</td></tr><tr><td>150</td><td>137</td></tr><tr><td>145</td><td>139</td></tr><tr><td>120</td><td>140</td></tr><tr><td>115</td><td>144</td></tr><tr><td>110</td><td>146</td></tr><tr><td>85</td><td>148</td></tr><tr><td>40</td><td>151</td></tr><tr><td>0</td><td>152</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-16-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation en binôme) : 637 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-16-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-16-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>335</td><td>1</td></tr><tr><td>330</td><td>2</td></tr><tr><td>315</td><td>3</td></tr><tr><td>310</td><td>6</td></tr><tr><td>305</td><td>7</td></tr><tr><td>290</td><td>9</td></tr><tr><td>280</td><td>12</td></tr><tr><td>275</td><td>15</td></tr><tr><td>270</td><td>17</td></tr><tr><td>260</td><td>19</td></tr><tr><td>255</td><td>23</td></tr><tr><td>250</td><td>27</td></tr><tr><td>245</td><td>34</td></tr><tr><td>240</td><td>39</td></tr><tr><td>235</td><td>49</td></tr><tr><td>230</td><td>54</td></tr><tr><td>225</td><td>71</td></tr><tr><td>220</td><td>79</td></tr><tr><td>215</td><td>88</td></tr><tr><td>210</td><td>93</td></tr><tr><td>205</td><td>106</td></tr><tr><td>200</td><td>121</td></tr><tr><td>195</td><td>135</td></tr><tr><td>190</td><td>150</td></tr><tr><td>185</td><td>168</td></tr><tr><td>180</td><td>183</td></tr><tr><td>175</td><td>205</td></tr><tr><td>170</td><td>223</td></tr><tr><td>165</td><td>234</td></tr><tr><td>160</td><td>262</td></tr><tr><td>155</td><td>273</td></tr><tr><td>150</td><td>293</td></tr><tr><td>145</td><td>310</td></tr><tr><td>140</td><td>327</td></tr><tr><td>135</td><td>346</td></tr><tr><td>130</td><td>366</td></tr><tr><td>125</td><td>383</td></tr><tr><td>120</td><td>407</td></tr><tr><td>115</td><td>417</td></tr><tr><td>110</td><td>438</td></tr><tr><td>105</td><td>448</td></tr><tr><td>100</td><td>463</td></tr><tr><td>95</td><td>478</td></tr><tr><td>90</td><td>496</td></tr><tr><td>85</td><td>507</td></tr><tr><td>80</td><td>519</td></tr><tr><td>75</td><td>532</td></tr><tr><td>70</td><td>549</td></tr><tr><td>65</td><td>554</td></tr><tr><td>60</td><td>562</td></tr><tr><td>55</td><td>573</td></tr><tr><td>50</td><td>578</td></tr><tr><td>40</td><td>589</td></tr><tr><td>35</td><td>592</td></tr><tr><td>30</td><td>593</td></tr><tr><td>25</td><td>599</td></tr><tr><td>20</td><td>608</td></tr><tr><td>10</td><td>611</td></tr><tr><td>0</td><td>613</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-17-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation en binôme) : 576 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-17-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-17-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>350</td><td>1</td></tr><tr><td>345</td><td>2</td></tr><tr><td>330</td><td>4</td></tr><tr><td>310</td><td>5</td></tr><tr><td>300</td><td>7</td></tr><tr><td>295</td><td>9</td></tr><tr><td>285</td><td>11</td></tr><tr><td>280</td><td>15</td></tr><tr><td>275</td><td>19</td></tr><tr><td>270</td><td>21</td></tr><tr><td>265</td><td>25</td></tr><tr><td>260</td><td>27</td></tr><tr><td>255</td><td>35</td></tr><tr><td>250</td><td>41</td></tr><tr><td>245</td><td>46</td></tr><tr><td>240</td><td>49</td></tr><tr><td>235</td><td>61</td></tr><tr><td>230</td><td>70</td></tr><tr><td>225</td><td>78</td></tr><tr><td>220</td><td>84</td></tr><tr><td>215</td><td>103</td></tr><tr><td>210</td><td>118</td></tr><tr><td>205</td><td>136</td></tr><tr><td>200</td><td>143</td></tr><tr><td>195</td><td>162</td></tr><tr><td>190</td><td>176</td></tr><tr><td>185</td><td>188</td></tr><tr><td>180</td><td>201</td></tr><tr><td>175</td><td>219</td></tr><tr><td>170</td><td>237</td></tr><tr><td>165</td><td>262</td></tr><tr><td>160</td><td>275</td></tr><tr><td>155</td><td>284</td></tr><tr><td>150</td><td>306</td></tr><tr><td>145</td><td>327</td></tr><tr><td>140</td><td>346</td></tr><tr><td>135</td><td>362</td></tr><tr><td>130</td><td>381</td></tr><tr><td>125</td><td>394</td></tr><tr><td>120</td><td>405</td></tr><tr><td>115</td><td>421</td></tr><tr><td>110</td><td>434</td></tr><tr><td>105</td><td>448</td></tr><tr><td>100</td><td>462</td></tr><tr><td>95</td><td>464</td></tr><tr><td>90</td><td>475</td></tr><tr><td>85</td><td>479</td></tr><tr><td>83</td><td>495</td></tr><tr><td>80</td><td>496</td></tr><tr><td>75</td><td>504</td></tr><tr><td>70</td><td>512</td></tr><tr><td>65</td><td>515</td></tr><tr><td>60</td><td>521</td></tr><tr><td>55</td><td>523</td></tr><tr><td>30</td><td>526</td></tr><tr><td>25</td><td>529</td></tr><tr><td>20</td><td>531</td></tr><tr><td>10</td><td>532</td></tr><tr><td>0</td><td>534</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 613 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>340</td><td>1</td></tr><tr><td>320</td><td>2</td></tr><tr><td>315</td><td>3</td></tr><tr><td>310</td><td>6</td></tr><tr><td>305</td><td>7</td></tr><tr><td>300</td><td>10</td></tr><tr><td>295</td><td>15</td></tr><tr><td>290</td><td>19</td></tr><tr><td>285</td><td>24</td></tr><tr><td>280</td><td>26</td></tr><tr><td>275</td><td>33</td></tr><tr><td>270</td><td>37</td></tr><tr><td>265</td><td>48</td></tr><tr><td>260</td><td>52</td></tr><tr><td>255</td><td>63</td></tr><tr><td>250</td><td>65</td></tr><tr><td>245</td><td>82</td></tr><tr><td>240</td><td>94</td></tr><tr><td>235</td><td>115</td></tr><tr><td>230</td><td>119</td></tr><tr><td>225</td><td>140</td></tr><tr><td>220</td><td>147</td></tr><tr><td>215</td><td>164</td></tr><tr><td>210</td><td>179</td></tr><tr><td>205</td><td>197</td></tr><tr><td>200</td><td>212</td></tr><tr><td>195</td><td>231</td></tr><tr><td>190</td><td>251</td></tr><tr><td>185</td><td>263</td></tr><tr><td>180</td><td>273</td></tr><tr><td>175</td><td>287</td></tr><tr><td>170</td><td>303</td></tr><tr><td>165</td><td>326</td></tr><tr><td>160</td><td>342</td></tr><tr><td>155</td><td>369</td></tr><tr><td>150</td><td>378</td></tr><tr><td>145</td><td>402</td></tr><tr><td>140</td><td>412</td></tr><tr><td>135</td><td>416</td></tr><tr><td>130</td><td>424</td></tr><tr><td>125</td><td>444</td></tr><tr><td>120</td><td>452</td></tr><tr><td>115</td><td>469</td></tr><tr><td>110</td><td>479</td></tr><tr><td>105</td><td>486</td></tr><tr><td>100</td><td>498</td></tr><tr><td>95</td><td>508</td></tr><tr><td>90</td><td>516</td></tr><tr><td>85</td><td>525</td></tr><tr><td>80</td><td>535</td></tr><tr><td>70</td><td>538</td></tr><tr><td>65</td><td>540</td></tr><tr><td>60</td><td>545</td></tr><tr><td>55</td><td>549</td></tr><tr><td>45</td><td>553</td></tr><tr><td>40</td><td>555</td></tr><tr><td>20</td><td>557</td></tr><tr><td>0</td><td>560</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-29129959113254768-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 435 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-29129959113254768-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-29129959113254768-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>405</td><td>1</td></tr><tr><td>365</td><td>2</td></tr><tr><td>345</td><td>3</td></tr><tr><td>340</td><td>5</td></tr><tr><td>333</td><td>7</td></tr><tr><td>325</td><td>8</td></tr><tr><td>320</td><td>10</td></tr><tr><td>315</td><td>11</td></tr><tr><td>310</td><td>13</td></tr><tr><td>305</td><td>14</td></tr><tr><td>300</td><td>19</td></tr><tr><td>290</td><td>21</td></tr><tr><td>285</td><td>28</td></tr><tr><td>280</td><td>32</td></tr><tr><td>275</td><td>40</td></tr><tr><td>270</td><td>47</td></tr><tr><td>265</td><td>52</td></tr><tr><td>260</td><td>56</td></tr><tr><td>255</td><td>62</td></tr><tr><td>250</td><td>73</td></tr><tr><td>245</td><td>82</td></tr><tr><td>240</td><td>95</td></tr><tr><td>235</td><td>103</td></tr><tr><td>230</td><td>111</td></tr><tr><td>225</td><td>132</td></tr><tr><td>220</td><td>144</td></tr><tr><td>215</td><td>163</td></tr><tr><td>210</td><td>178</td></tr><tr><td>205</td><td>196</td></tr><tr><td>200</td><td>210</td></tr><tr><td>195</td><td>217</td></tr><tr><td>190</td><td>230</td></tr><tr><td>185</td><td>246</td></tr><tr><td>180</td><td>254</td></tr><tr><td>175</td><td>268</td></tr><tr><td>170</td><td>286</td></tr><tr><td>165</td><td>289</td></tr><tr><td>163</td><td>294</td></tr><tr><td>160</td><td>295</td></tr><tr><td>155</td><td>302</td></tr><tr><td>150</td><td>312</td></tr><tr><td>145</td><td>319</td></tr><tr><td>140</td><td>321</td></tr><tr><td>135</td><td>332</td></tr><tr><td>130</td><td>334</td></tr><tr><td>125</td><td>337</td></tr><tr><td>120</td><td>343</td></tr><tr><td>115</td><td>347</td></tr><tr><td>110</td><td>353</td></tr><tr><td>105</td><td>355</td></tr><tr><td>100</td><td>358</td></tr><tr><td>95</td><td>360</td></tr><tr><td>90</td><td>362</td></tr><tr><td>85</td><td>365</td></tr><tr><td>80</td><td>366</td></tr><tr><td>70</td><td>369</td></tr><tr><td>65</td><td>371</td></tr><tr><td>60</td><td>374</td></tr><tr><td>50</td><td>375</td></tr><tr><td>40</td><td>376</td></tr><tr><td>35</td><td>378</td></tr><tr><td>30</td><td>379</td></tr><tr><td>20</td><td>382</td></tr><tr><td>15</td><td>384</td></tr><tr><td>0</td><td>386</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
