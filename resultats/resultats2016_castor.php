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

<!--<li>474871 élèves ont participé, dont 43% de filles.</li>
<li>2856 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-455965778962240640-4-1'><a href='#tabs-455965778962240640-4-1'>CM1</a></li><li class='nbContestants1' id='link-455965778962240640-5-1'><a href='#tabs-455965778962240640-5-1'>CM2</a></li><li class='nbContestants1' id='link-455965778962240640-6-1'><a href='#tabs-455965778962240640-6-1'>6ème</a></li><li class='nbContestants1' id='link-455965778962240640-7-1'><a href='#tabs-455965778962240640-7-1'>5ème</a></li><li class='nbContestants1' id='link-455965778962240640-8-1'><a href='#tabs-455965778962240640-8-1'>4ème</a></li><li class='nbContestants1' id='link-455965778962240640-9-1'><a href='#tabs-455965778962240640-9-1'>3ème</a></li><li class='nbContestants1' id='link-455965778962240640-10-1'><a href='#tabs-455965778962240640-10-1'>Seconde</a></li><li class='nbContestants1' id='link-455965778962240640-11-1'><a href='#tabs-455965778962240640-11-1'>Première</a></li><li class='nbContestants1' id='link-455965778962240640-12-1'><a href='#tabs-455965778962240640-12-1'>Terminale</a></li><li class='nbContestants1' id='link-455965778962240640-13-1'><a href='#tabs-455965778962240640-13-1'>Seconde pro.</a></li><li class='nbContestants1' id='link-455965778962240640-14-1'><a href='#tabs-455965778962240640-14-1'>Première pro.</a></li><li class='nbContestants1' id='link-455965778962240640-15-1'><a href='#tabs-455965778962240640-15-1'>Terminale pro.</a></li><li class='nbContestants2' id='link-455965778962240640-4-2'><a href='#tabs-455965778962240640-4-2'>CM1</a></li><li class='nbContestants2' id='link-455965778962240640-5-2'><a href='#tabs-455965778962240640-5-2'>CM2</a></li><li class='nbContestants2' id='link-455965778962240640-6-2'><a href='#tabs-455965778962240640-6-2'>6ème</a></li><li class='nbContestants2' id='link-455965778962240640-7-2'><a href='#tabs-455965778962240640-7-2'>5ème</a></li><li class='nbContestants2' id='link-455965778962240640-8-2'><a href='#tabs-455965778962240640-8-2'>4ème</a></li><li class='nbContestants2' id='link-455965778962240640-9-2'><a href='#tabs-455965778962240640-9-2'>3ème</a></li><li class='nbContestants2' id='link-455965778962240640-10-2'><a href='#tabs-455965778962240640-10-2'>Seconde</a></li><li class='nbContestants2' id='link-455965778962240640-11-2'><a href='#tabs-455965778962240640-11-2'>Première</a></li><li class='nbContestants2' id='link-455965778962240640-12-2'><a href='#tabs-455965778962240640-12-2'>Terminale</a></li><li class='nbContestants2' id='link-455965778962240640-13-2'><a href='#tabs-455965778962240640-13-2'>Seconde pro.</a></li><li class='nbContestants2' id='link-455965778962240640-14-2'><a href='#tabs-455965778962240640-14-2'>Première pro.</a></li><li class='nbContestants2' id='link-455965778962240640-15-2'><a href='#tabs-455965778962240640-15-2'>Terminale pro.</a></li></ul><div id='tabs-455965778962240640-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 2991 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>420</td><td>1</td></tr><tr><td>410</td><td>2</td></tr><tr><td>355</td><td>3</td></tr><tr><td>350</td><td>4</td></tr><tr><td>340</td><td>5</td></tr><tr><td>330</td><td>7</td></tr><tr><td>320</td><td>8</td></tr><tr><td>317</td><td>12</td></tr><tr><td>310</td><td>13</td></tr><tr><td>307</td><td>15</td></tr><tr><td>300</td><td>16</td></tr><tr><td>295</td><td>20</td></tr><tr><td>290</td><td>22</td></tr><tr><td>285</td><td>34</td></tr><tr><td>284</td><td>36</td></tr><tr><td>280</td><td>37</td></tr><tr><td>275</td><td>50</td></tr><tr><td>270</td><td>51</td></tr><tr><td>267</td><td>58</td></tr><tr><td>265</td><td>60</td></tr><tr><td>264</td><td>61</td></tr><tr><td>260</td><td>63</td></tr><tr><td>257</td><td>102</td></tr><tr><td>255</td><td>105</td></tr><tr><td>254</td><td>107</td></tr><tr><td>250</td><td>108</td></tr><tr><td>247</td><td>140</td></tr><tr><td>245</td><td>141</td></tr><tr><td>244</td><td>142</td></tr><tr><td>240</td><td>145</td></tr><tr><td>237</td><td>205</td></tr><tr><td>236</td><td>206</td></tr><tr><td>235</td><td>207</td></tr><tr><td>234</td><td>208</td></tr><tr><td>230</td><td>210</td></tr><tr><td>227</td><td>281</td></tr><tr><td>225</td><td>282</td></tr><tr><td>224</td><td>283</td></tr><tr><td>220</td><td>285</td></tr><tr><td>217</td><td>383</td></tr><tr><td>216</td><td>388</td></tr><tr><td>215</td><td>389</td></tr><tr><td>214</td><td>390</td></tr><tr><td>210</td><td>391</td></tr><tr><td>207</td><td>508</td></tr><tr><td>205</td><td>511</td></tr><tr><td>204</td><td>512</td></tr><tr><td>200</td><td>516</td></tr><tr><td>197</td><td>646</td></tr><tr><td>195</td><td>649</td></tr><tr><td>194</td><td>650</td></tr><tr><td>190</td><td>651</td></tr><tr><td>187</td><td>769</td></tr><tr><td>185</td><td>770</td></tr><tr><td>180</td><td>771</td></tr><tr><td>170</td><td>865</td></tr><tr><td>160</td><td>955</td></tr><tr><td>150</td><td>1106</td></tr><tr><td>140</td><td>1305</td></tr><tr><td>130</td><td>1595</td></tr><tr><td>120</td><td>1905</td></tr><tr><td>110</td><td>2199</td></tr><tr><td>100</td><td>2358</td></tr><tr><td>90</td><td>2548</td></tr><tr><td>80</td><td>2673</td></tr><tr><td>70</td><td>2779</td></tr><tr><td>60</td><td>2818</td></tr><tr><td>50</td><td>2879</td></tr><tr><td>40</td><td>2911</td></tr><tr><td>30</td><td>2936</td></tr><tr><td>20</td><td>2940</td></tr><tr><td>0</td><td>2958</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 4701 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>375</td><td>1</td></tr><tr><td>370</td><td>2</td></tr><tr><td>350</td><td>3</td></tr><tr><td>347</td><td>6</td></tr><tr><td>340</td><td>7</td></tr><tr><td>335</td><td>10</td></tr><tr><td>330</td><td>11</td></tr><tr><td>327</td><td>15</td></tr><tr><td>320</td><td>16</td></tr><tr><td>317</td><td>26</td></tr><tr><td>315</td><td>29</td></tr><tr><td>310</td><td>31</td></tr><tr><td>307</td><td>52</td></tr><tr><td>305</td><td>53</td></tr><tr><td>300</td><td>54</td></tr><tr><td>297</td><td>74</td></tr><tr><td>295</td><td>76</td></tr><tr><td>294</td><td>78</td></tr><tr><td>290</td><td>79</td></tr><tr><td>287</td><td>115</td></tr><tr><td>284</td><td>118</td></tr><tr><td>280</td><td>120</td></tr><tr><td>275</td><td>162</td></tr><tr><td>270</td><td>167</td></tr><tr><td>267</td><td>232</td></tr><tr><td>265</td><td>237</td></tr><tr><td>264</td><td>244</td></tr><tr><td>260</td><td>245</td></tr><tr><td>257</td><td>333</td></tr><tr><td>255</td><td>343</td></tr><tr><td>254</td><td>346</td></tr><tr><td>250</td><td>348</td></tr><tr><td>247</td><td>475</td></tr><tr><td>245</td><td>481</td></tr><tr><td>244</td><td>486</td></tr><tr><td>240</td><td>494</td></tr><tr><td>237</td><td>645</td></tr><tr><td>235</td><td>654</td></tr><tr><td>234</td><td>658</td></tr><tr><td>230</td><td>662</td></tr><tr><td>227</td><td>855</td></tr><tr><td>226</td><td>867</td></tr><tr><td>225</td><td>869</td></tr><tr><td>224</td><td>876</td></tr><tr><td>220</td><td>881</td></tr><tr><td>217</td><td>1100</td></tr><tr><td>215</td><td>1116</td></tr><tr><td>214</td><td>1125</td></tr><tr><td>210</td><td>1130</td></tr><tr><td>207</td><td>1399</td></tr><tr><td>206</td><td>1408</td></tr><tr><td>205</td><td>1409</td></tr><tr><td>204</td><td>1415</td></tr><tr><td>200</td><td>1422</td></tr><tr><td>197</td><td>1690</td></tr><tr><td>196</td><td>1696</td></tr><tr><td>194</td><td>1697</td></tr><tr><td>190</td><td>1703</td></tr><tr><td>187</td><td>1933</td></tr><tr><td>185</td><td>1934</td></tr><tr><td>184</td><td>1935</td></tr><tr><td>180</td><td>1938</td></tr><tr><td>170</td><td>2128</td></tr><tr><td>160</td><td>2309</td></tr><tr><td>150</td><td>2573</td></tr><tr><td>145</td><td>2945</td></tr><tr><td>140</td><td>2946</td></tr><tr><td>130</td><td>3355</td></tr><tr><td>120</td><td>3702</td></tr><tr><td>110</td><td>4038</td></tr><tr><td>100</td><td>4249</td></tr><tr><td>90</td><td>4393</td></tr><tr><td>80</td><td>4481</td></tr><tr><td>70</td><td>4544</td></tr><tr><td>60</td><td>4579</td></tr><tr><td>50</td><td>4618</td></tr><tr><td>40</td><td>4641</td></tr><tr><td>30</td><td>4662</td></tr><tr><td>20</td><td>4665</td></tr><tr><td>0</td><td>4679</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème (participation individuelle) : 52728 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>450</td><td>1</td></tr><tr><td>440</td><td>2</td></tr><tr><td>420</td><td>6</td></tr><tr><td>417</td><td>7</td></tr><tr><td>415</td><td>8</td></tr><tr><td>410</td><td>9</td></tr><tr><td>400</td><td>13</td></tr><tr><td>395</td><td>15</td></tr><tr><td>390</td><td>17</td></tr><tr><td>380</td><td>21</td></tr><tr><td>377</td><td>32</td></tr><tr><td>375</td><td>33</td></tr><tr><td>374</td><td>35</td></tr><tr><td>370</td><td>36</td></tr><tr><td>365</td><td>50</td></tr><tr><td>360</td><td>51</td></tr><tr><td>355</td><td>75</td></tr><tr><td>350</td><td>79</td></tr><tr><td>347</td><td>131</td></tr><tr><td>345</td><td>135</td></tr><tr><td>344</td><td>145</td></tr><tr><td>340</td><td>149</td></tr><tr><td>337</td><td>237</td></tr><tr><td>335</td><td>246</td></tr><tr><td>334</td><td>251</td></tr><tr><td>330</td><td>256</td></tr><tr><td>327</td><td>357</td></tr><tr><td>325</td><td>369</td></tr><tr><td>324</td><td>380</td></tr><tr><td>320</td><td>390</td></tr><tr><td>317</td><td>600</td></tr><tr><td>316</td><td>619</td></tr><tr><td>315</td><td>620</td></tr><tr><td>314</td><td>643</td></tr><tr><td>312</td><td>652</td></tr><tr><td>310</td><td>653</td></tr><tr><td>309</td><td>980</td></tr><tr><td>307</td><td>981</td></tr><tr><td>306</td><td>1010</td></tr><tr><td>305</td><td>1011</td></tr><tr><td>304</td><td>1038</td></tr><tr><td>302</td><td>1051</td></tr><tr><td>300</td><td>1052</td></tr><tr><td>297</td><td>1549</td></tr><tr><td>295</td><td>1586</td></tr><tr><td>294</td><td>1613</td></tr><tr><td>290</td><td>1648</td></tr><tr><td>289</td><td>2327</td></tr><tr><td>287</td><td>2328</td></tr><tr><td>286</td><td>2394</td></tr><tr><td>285</td><td>2395</td></tr><tr><td>284</td><td>2424</td></tr><tr><td>282</td><td>2453</td></tr><tr><td>280</td><td>2454</td></tr><tr><td>279</td><td>3329</td></tr><tr><td>277</td><td>3330</td></tr><tr><td>276</td><td>3409</td></tr><tr><td>275</td><td>3412</td></tr><tr><td>274</td><td>3474</td></tr><tr><td>270</td><td>3508</td></tr><tr><td>269</td><td>4669</td></tr><tr><td>267</td><td>4670</td></tr><tr><td>265</td><td>4749</td></tr><tr><td>264</td><td>4825</td></tr><tr><td>262</td><td>4872</td></tr><tr><td>260</td><td>4874</td></tr><tr><td>257</td><td>6377</td></tr><tr><td>256</td><td>6495</td></tr><tr><td>255</td><td>6498</td></tr><tr><td>254</td><td>6575</td></tr><tr><td>253</td><td>6652</td></tr><tr><td>252</td><td>6653</td></tr><tr><td>250</td><td>6654</td></tr><tr><td>247</td><td>8557</td></tr><tr><td>246</td><td>8688</td></tr><tr><td>245</td><td>8690</td></tr><tr><td>244</td><td>8775</td></tr><tr><td>240</td><td>8871</td></tr><tr><td>237</td><td>11059</td></tr><tr><td>236</td><td>11187</td></tr><tr><td>235</td><td>11188</td></tr><tr><td>234</td><td>11305</td></tr><tr><td>230</td><td>11407</td></tr><tr><td>227</td><td>14094</td></tr><tr><td>226</td><td>14265</td></tr><tr><td>225</td><td>14267</td></tr><tr><td>224</td><td>14383</td></tr><tr><td>220</td><td>14484</td></tr><tr><td>217</td><td>17613</td></tr><tr><td>216</td><td>17755</td></tr><tr><td>215</td><td>17757</td></tr><tr><td>214</td><td>17869</td></tr><tr><td>210</td><td>17968</td></tr><tr><td>207</td><td>21275</td></tr><tr><td>206</td><td>21377</td></tr><tr><td>205</td><td>21378</td></tr><tr><td>204</td><td>21458</td></tr><tr><td>200</td><td>21541</td></tr><tr><td>197</td><td>24675</td></tr><tr><td>196</td><td>24747</td></tr><tr><td>195</td><td>24749</td></tr><tr><td>194</td><td>24792</td></tr><tr><td>190</td><td>24839</td></tr><tr><td>189</td><td>27495</td></tr><tr><td>187</td><td>27496</td></tr><tr><td>186</td><td>27513</td></tr><tr><td>185</td><td>27514</td></tr><tr><td>184</td><td>27538</td></tr><tr><td>181</td><td>27558</td></tr><tr><td>180</td><td>27559</td></tr><tr><td>175</td><td>29743</td></tr><tr><td>170</td><td>29751</td></tr><tr><td>165</td><td>31912</td></tr><tr><td>160</td><td>31914</td></tr><tr><td>158</td><td>34735</td></tr><tr><td>155</td><td>34736</td></tr><tr><td>150</td><td>34739</td></tr><tr><td>145</td><td>38147</td></tr><tr><td>140</td><td>38148</td></tr><tr><td>135</td><td>41918</td></tr><tr><td>130</td><td>41919</td></tr><tr><td>125</td><td>45291</td></tr><tr><td>120</td><td>45292</td></tr><tr><td>110</td><td>47773</td></tr><tr><td>100</td><td>49267</td></tr><tr><td>90</td><td>50463</td></tr><tr><td>80</td><td>51247</td></tr><tr><td>70</td><td>51745</td></tr><tr><td>60</td><td>51980</td></tr><tr><td>50</td><td>52190</td></tr><tr><td>40</td><td>52313</td></tr><tr><td>30</td><td>52425</td></tr><tr><td>20</td><td>52455</td></tr><tr><td>10</td><td>52559</td></tr><tr><td>0</td><td>52560</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème (participation individuelle) : 42776 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>470</td><td>3</td></tr><tr><td>456</td><td>4</td></tr><tr><td>450</td><td>5</td></tr><tr><td>444</td><td>7</td></tr><tr><td>440</td><td>8</td></tr><tr><td>430</td><td>11</td></tr><tr><td>425</td><td>14</td></tr><tr><td>420</td><td>16</td></tr><tr><td>415</td><td>19</td></tr><tr><td>410</td><td>20</td></tr><tr><td>405</td><td>23</td></tr><tr><td>402</td><td>26</td></tr><tr><td>400</td><td>27</td></tr><tr><td>395</td><td>33</td></tr><tr><td>390</td><td>35</td></tr><tr><td>386</td><td>50</td></tr><tr><td>385</td><td>51</td></tr><tr><td>384</td><td>52</td></tr><tr><td>380</td><td>53</td></tr><tr><td>376</td><td>75</td></tr><tr><td>375</td><td>76</td></tr><tr><td>374</td><td>81</td></tr><tr><td>370</td><td>84</td></tr><tr><td>367</td><td>126</td></tr><tr><td>365</td><td>131</td></tr><tr><td>364</td><td>139</td></tr><tr><td>363</td><td>141</td></tr><tr><td>362</td><td>142</td></tr><tr><td>360</td><td>143</td></tr><tr><td>357</td><td>217</td></tr><tr><td>355</td><td>225</td></tr><tr><td>354</td><td>237</td></tr><tr><td>353</td><td>243</td></tr><tr><td>350</td><td>244</td></tr><tr><td>349</td><td>397</td></tr><tr><td>347</td><td>398</td></tr><tr><td>346</td><td>417</td></tr><tr><td>345</td><td>418</td></tr><tr><td>344</td><td>442</td></tr><tr><td>340</td><td>446</td></tr><tr><td>337</td><td>629</td></tr><tr><td>336</td><td>647</td></tr><tr><td>335</td><td>649</td></tr><tr><td>334</td><td>675</td></tr><tr><td>332</td><td>686</td></tr><tr><td>330</td><td>687</td></tr><tr><td>327</td><td>979</td></tr><tr><td>326</td><td>1008</td></tr><tr><td>325</td><td>1013</td></tr><tr><td>324</td><td>1046</td></tr><tr><td>320</td><td>1061</td></tr><tr><td>317</td><td>1495</td></tr><tr><td>315</td><td>1556</td></tr><tr><td>314</td><td>1597</td></tr><tr><td>312</td><td>1627</td></tr><tr><td>310</td><td>1629</td></tr><tr><td>309</td><td>2266</td></tr><tr><td>307</td><td>2267</td></tr><tr><td>306</td><td>2335</td></tr><tr><td>305</td><td>2336</td></tr><tr><td>304</td><td>2385</td></tr><tr><td>302</td><td>2419</td></tr><tr><td>300</td><td>2420</td></tr><tr><td>299</td><td>3234</td></tr><tr><td>297</td><td>3235</td></tr><tr><td>296</td><td>3313</td></tr><tr><td>295</td><td>3316</td></tr><tr><td>294</td><td>3387</td></tr><tr><td>290</td><td>3437</td></tr><tr><td>287</td><td>4494</td></tr><tr><td>286</td><td>4584</td></tr><tr><td>285</td><td>4585</td></tr><tr><td>284</td><td>4656</td></tr><tr><td>280</td><td>4717</td></tr><tr><td>277</td><td>6112</td></tr><tr><td>276</td><td>6216</td></tr><tr><td>275</td><td>6217</td></tr><tr><td>274</td><td>6306</td></tr><tr><td>272</td><td>6386</td></tr><tr><td>270</td><td>6389</td></tr><tr><td>267</td><td>8002</td></tr><tr><td>266</td><td>8131</td></tr><tr><td>265</td><td>8135</td></tr><tr><td>264</td><td>8238</td></tr><tr><td>262</td><td>8319</td></tr><tr><td>260</td><td>8320</td></tr><tr><td>257</td><td>10120</td></tr><tr><td>256</td><td>10251</td></tr><tr><td>255</td><td>10255</td></tr><tr><td>254</td><td>10338</td></tr><tr><td>250</td><td>10433</td></tr><tr><td>248</td><td>12560</td></tr><tr><td>247</td><td>12561</td></tr><tr><td>246</td><td>12725</td></tr><tr><td>245</td><td>12728</td></tr><tr><td>244</td><td>12863</td></tr><tr><td>240</td><td>12972</td></tr><tr><td>239</td><td>15428</td></tr><tr><td>237</td><td>15429</td></tr><tr><td>235</td><td>15608</td></tr><tr><td>234</td><td>15714</td></tr><tr><td>230</td><td>15802</td></tr><tr><td>229</td><td>18472</td></tr><tr><td>227</td><td>18473</td></tr><tr><td>226</td><td>18638</td></tr><tr><td>225</td><td>18640</td></tr><tr><td>224</td><td>18747</td></tr><tr><td>220</td><td>18870</td></tr><tr><td>217</td><td>21710</td></tr><tr><td>216</td><td>21841</td></tr><tr><td>215</td><td>21843</td></tr><tr><td>214</td><td>21934</td></tr><tr><td>210</td><td>22045</td></tr><tr><td>209</td><td>24709</td></tr><tr><td>207</td><td>24710</td></tr><tr><td>206</td><td>24807</td></tr><tr><td>205</td><td>24808</td></tr><tr><td>204</td><td>24870</td></tr><tr><td>200</td><td>24940</td></tr><tr><td>198</td><td>27247</td></tr><tr><td>197</td><td>27248</td></tr><tr><td>195</td><td>27305</td></tr><tr><td>194</td><td>27342</td></tr><tr><td>190</td><td>27369</td></tr><tr><td>187</td><td>29180</td></tr><tr><td>186</td><td>29196</td></tr><tr><td>185</td><td>29197</td></tr><tr><td>184</td><td>29208</td></tr><tr><td>180</td><td>29216</td></tr><tr><td>178</td><td>30660</td></tr><tr><td>175</td><td>30661</td></tr><tr><td>170</td><td>30665</td></tr><tr><td>169</td><td>32140</td></tr><tr><td>165</td><td>32141</td></tr><tr><td>160</td><td>32144</td></tr><tr><td>155</td><td>33996</td></tr><tr><td>150</td><td>33998</td></tr><tr><td>140</td><td>36047</td></tr><tr><td>130</td><td>37987</td></tr><tr><td>120</td><td>39571</td></tr><tr><td>115</td><td>40675</td></tr><tr><td>110</td><td>40676</td></tr><tr><td>100</td><td>41376</td></tr><tr><td>90</td><td>41851</td></tr><tr><td>80</td><td>42132</td></tr><tr><td>70</td><td>42315</td></tr><tr><td>60</td><td>42402</td></tr><tr><td>50</td><td>42472</td></tr><tr><td>40</td><td>42533</td></tr><tr><td>30</td><td>42577</td></tr><tr><td>20</td><td>42594</td></tr><tr><td>0</td><td>42648</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème (participation individuelle) : 38477 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>465</td><td>2</td></tr><tr><td>460</td><td>3</td></tr><tr><td>450</td><td>4</td></tr><tr><td>446</td><td>5</td></tr><tr><td>445</td><td>6</td></tr><tr><td>440</td><td>7</td></tr><tr><td>430</td><td>8</td></tr><tr><td>427</td><td>10</td></tr><tr><td>420</td><td>11</td></tr><tr><td>417</td><td>14</td></tr><tr><td>415</td><td>15</td></tr><tr><td>410</td><td>17</td></tr><tr><td>407</td><td>21</td></tr><tr><td>405</td><td>23</td></tr><tr><td>404</td><td>25</td></tr><tr><td>400</td><td>27</td></tr><tr><td>397</td><td>47</td></tr><tr><td>396</td><td>52</td></tr><tr><td>395</td><td>53</td></tr><tr><td>394</td><td>57</td></tr><tr><td>390</td><td>58</td></tr><tr><td>386</td><td>88</td></tr><tr><td>385</td><td>90</td></tr><tr><td>384</td><td>97</td></tr><tr><td>380</td><td>101</td></tr><tr><td>377</td><td>156</td></tr><tr><td>376</td><td>162</td></tr><tr><td>375</td><td>163</td></tr><tr><td>374</td><td>173</td></tr><tr><td>372</td><td>180</td></tr><tr><td>370</td><td>181</td></tr><tr><td>369</td><td>297</td></tr><tr><td>367</td><td>298</td></tr><tr><td>366</td><td>307</td></tr><tr><td>365</td><td>309</td></tr><tr><td>364</td><td>329</td></tr><tr><td>363</td><td>334</td></tr><tr><td>362</td><td>335</td></tr><tr><td>360</td><td>338</td></tr><tr><td>357</td><td>528</td></tr><tr><td>356</td><td>548</td></tr><tr><td>355</td><td>549</td></tr><tr><td>354</td><td>588</td></tr><tr><td>352</td><td>599</td></tr><tr><td>350</td><td>600</td></tr><tr><td>349</td><td>891</td></tr><tr><td>347</td><td>893</td></tr><tr><td>346</td><td>914</td></tr><tr><td>345</td><td>916</td></tr><tr><td>344</td><td>957</td></tr><tr><td>342</td><td>975</td></tr><tr><td>340</td><td>977</td></tr><tr><td>337</td><td>1370</td></tr><tr><td>335</td><td>1403</td></tr><tr><td>334</td><td>1449</td></tr><tr><td>332</td><td>1483</td></tr><tr><td>330</td><td>1484</td></tr><tr><td>329</td><td>2069</td></tr><tr><td>327</td><td>2073</td></tr><tr><td>326</td><td>2133</td></tr><tr><td>325</td><td>2137</td></tr><tr><td>324</td><td>2184</td></tr><tr><td>323</td><td>2214</td></tr><tr><td>320</td><td>2216</td></tr><tr><td>319</td><td>2966</td></tr><tr><td>317</td><td>2971</td></tr><tr><td>316</td><td>3057</td></tr><tr><td>315</td><td>3059</td></tr><tr><td>314</td><td>3133</td></tr><tr><td>312</td><td>3164</td></tr><tr><td>310</td><td>3167</td></tr><tr><td>309</td><td>4172</td></tr><tr><td>307</td><td>4175</td></tr><tr><td>306</td><td>4266</td></tr><tr><td>305</td><td>4270</td></tr><tr><td>304</td><td>4339</td></tr><tr><td>302</td><td>4383</td></tr><tr><td>300</td><td>4387</td></tr><tr><td>299</td><td>5657</td></tr><tr><td>297</td><td>5658</td></tr><tr><td>296</td><td>5756</td></tr><tr><td>295</td><td>5758</td></tr><tr><td>294</td><td>5851</td></tr><tr><td>292</td><td>5924</td></tr><tr><td>290</td><td>5925</td></tr><tr><td>289</td><td>7392</td></tr><tr><td>288</td><td>7393</td></tr><tr><td>287</td><td>7394</td></tr><tr><td>286</td><td>7527</td></tr><tr><td>285</td><td>7532</td></tr><tr><td>284</td><td>7630</td></tr><tr><td>282</td><td>7700</td></tr><tr><td>280</td><td>7701</td></tr><tr><td>279</td><td>9425</td></tr><tr><td>278</td><td>9426</td></tr><tr><td>277</td><td>9427</td></tr><tr><td>276</td><td>9565</td></tr><tr><td>275</td><td>9572</td></tr><tr><td>274</td><td>9696</td></tr><tr><td>272</td><td>9784</td></tr><tr><td>270</td><td>9785</td></tr><tr><td>269</td><td>11696</td></tr><tr><td>267</td><td>11697</td></tr><tr><td>266</td><td>11875</td></tr><tr><td>265</td><td>11878</td></tr><tr><td>264</td><td>11995</td></tr><tr><td>263</td><td>12101</td></tr><tr><td>262</td><td>12102</td></tr><tr><td>260</td><td>12103</td></tr><tr><td>259</td><td>14229</td></tr><tr><td>257</td><td>14230</td></tr><tr><td>255</td><td>14390</td></tr><tr><td>254</td><td>14502</td></tr><tr><td>253</td><td>14605</td></tr><tr><td>250</td><td>14607</td></tr><tr><td>247</td><td>16765</td></tr><tr><td>246</td><td>16923</td></tr><tr><td>245</td><td>16929</td></tr><tr><td>244</td><td>17037</td></tr><tr><td>240</td><td>17127</td></tr><tr><td>238</td><td>19378</td></tr><tr><td>237</td><td>19379</td></tr><tr><td>236</td><td>19528</td></tr><tr><td>235</td><td>19530</td></tr><tr><td>234</td><td>19647</td></tr><tr><td>232</td><td>19733</td></tr><tr><td>230</td><td>19734</td></tr><tr><td>228</td><td>22118</td></tr><tr><td>227</td><td>22119</td></tr><tr><td>226</td><td>22246</td></tr><tr><td>225</td><td>22249</td></tr><tr><td>224</td><td>22346</td></tr><tr><td>220</td><td>22422</td></tr><tr><td>217</td><td>24685</td></tr><tr><td>216</td><td>24799</td></tr><tr><td>215</td><td>24801</td></tr><tr><td>214</td><td>24874</td></tr><tr><td>210</td><td>24946</td></tr><tr><td>209</td><td>26997</td></tr><tr><td>207</td><td>26999</td></tr><tr><td>206</td><td>27069</td></tr><tr><td>205</td><td>27070</td></tr><tr><td>204</td><td>27124</td></tr><tr><td>202</td><td>27171</td></tr><tr><td>201</td><td>27172</td></tr><tr><td>200</td><td>27173</td></tr><tr><td>197</td><td>28815</td></tr><tr><td>195</td><td>28849</td></tr><tr><td>194</td><td>28873</td></tr><tr><td>190</td><td>28899</td></tr><tr><td>187</td><td>30185</td></tr><tr><td>185</td><td>30194</td></tr><tr><td>184</td><td>30204</td></tr><tr><td>180</td><td>30206</td></tr><tr><td>175</td><td>31356</td></tr><tr><td>170</td><td>31363</td></tr><tr><td>165</td><td>32427</td></tr><tr><td>160</td><td>32429</td></tr><tr><td>155</td><td>33632</td></tr><tr><td>150</td><td>33634</td></tr><tr><td>145</td><td>34843</td></tr><tr><td>140</td><td>34845</td></tr><tr><td>135</td><td>35920</td></tr><tr><td>130</td><td>35921</td></tr><tr><td>120</td><td>36747</td></tr><tr><td>110</td><td>37327</td></tr><tr><td>100</td><td>37657</td></tr><tr><td>90</td><td>37903</td></tr><tr><td>80</td><td>38047</td></tr><tr><td>70</td><td>38160</td></tr><tr><td>60</td><td>38217</td></tr><tr><td>50</td><td>38261</td></tr><tr><td>40</td><td>38284</td></tr><tr><td>30</td><td>38317</td></tr><tr><td>20</td><td>38334</td></tr><tr><td>0</td><td>38375</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème (participation individuelle) : 36152 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>465</td><td>7</td></tr><tr><td>460</td><td>8</td></tr><tr><td>459</td><td>12</td></tr><tr><td>450</td><td>13</td></tr><tr><td>440</td><td>16</td></tr><tr><td>437</td><td>21</td></tr><tr><td>435</td><td>22</td></tr><tr><td>430</td><td>28</td></tr><tr><td>429</td><td>36</td></tr><tr><td>427</td><td>37</td></tr><tr><td>425</td><td>39</td></tr><tr><td>424</td><td>42</td></tr><tr><td>420</td><td>43</td></tr><tr><td>417</td><td>57</td></tr><tr><td>416</td><td>58</td></tr><tr><td>415</td><td>59</td></tr><tr><td>414</td><td>64</td></tr><tr><td>412</td><td>65</td></tr><tr><td>410</td><td>66</td></tr><tr><td>407</td><td>101</td></tr><tr><td>405</td><td>102</td></tr><tr><td>404</td><td>109</td></tr><tr><td>402</td><td>111</td></tr><tr><td>400</td><td>112</td></tr><tr><td>397</td><td>156</td></tr><tr><td>396</td><td>160</td></tr><tr><td>395</td><td>162</td></tr><tr><td>394</td><td>180</td></tr><tr><td>392</td><td>185</td></tr><tr><td>390</td><td>186</td></tr><tr><td>389</td><td>263</td></tr><tr><td>387</td><td>265</td></tr><tr><td>386</td><td>269</td></tr><tr><td>385</td><td>272</td></tr><tr><td>384</td><td>299</td></tr><tr><td>382</td><td>303</td></tr><tr><td>381</td><td>306</td></tr><tr><td>380</td><td>307</td></tr><tr><td>379</td><td>433</td></tr><tr><td>377</td><td>434</td></tr><tr><td>376</td><td>445</td></tr><tr><td>375</td><td>447</td></tr><tr><td>374</td><td>481</td></tr><tr><td>370</td><td>492</td></tr><tr><td>369</td><td>716</td></tr><tr><td>367</td><td>719</td></tr><tr><td>366</td><td>735</td></tr><tr><td>365</td><td>738</td></tr><tr><td>364</td><td>774</td></tr><tr><td>361</td><td>791</td></tr><tr><td>360</td><td>792</td></tr><tr><td>359</td><td>1088</td></tr><tr><td>357</td><td>1090</td></tr><tr><td>356</td><td>1125</td></tr><tr><td>355</td><td>1128</td></tr><tr><td>354</td><td>1175</td></tr><tr><td>350</td><td>1200</td></tr><tr><td>349</td><td>1662</td></tr><tr><td>347</td><td>1663</td></tr><tr><td>346</td><td>1717</td></tr><tr><td>345</td><td>1721</td></tr><tr><td>344</td><td>1779</td></tr><tr><td>342</td><td>1805</td></tr><tr><td>341</td><td>1806</td></tr><tr><td>340</td><td>1808</td></tr><tr><td>339</td><td>2465</td></tr><tr><td>338</td><td>2466</td></tr><tr><td>337</td><td>2467</td></tr><tr><td>336</td><td>2526</td></tr><tr><td>335</td><td>2534</td></tr><tr><td>334</td><td>2614</td></tr><tr><td>332</td><td>2658</td></tr><tr><td>331</td><td>2662</td></tr><tr><td>330</td><td>2663</td></tr><tr><td>329</td><td>3589</td></tr><tr><td>327</td><td>3591</td></tr><tr><td>326</td><td>3688</td></tr><tr><td>325</td><td>3692</td></tr><tr><td>324</td><td>3779</td></tr><tr><td>322</td><td>3830</td></tr><tr><td>320</td><td>3833</td></tr><tr><td>319</td><td>4899</td></tr><tr><td>317</td><td>4903</td></tr><tr><td>316</td><td>4997</td></tr><tr><td>315</td><td>5001</td></tr><tr><td>314</td><td>5080</td></tr><tr><td>312</td><td>5131</td></tr><tr><td>310</td><td>5139</td></tr><tr><td>309</td><td>6566</td></tr><tr><td>307</td><td>6570</td></tr><tr><td>306</td><td>6692</td></tr><tr><td>305</td><td>6694</td></tr><tr><td>304</td><td>6795</td></tr><tr><td>302</td><td>6864</td></tr><tr><td>300</td><td>6867</td></tr><tr><td>299</td><td>8515</td></tr><tr><td>297</td><td>8517</td></tr><tr><td>296</td><td>8659</td></tr><tr><td>295</td><td>8666</td></tr><tr><td>294</td><td>8775</td></tr><tr><td>292</td><td>8855</td></tr><tr><td>290</td><td>8860</td></tr><tr><td>289</td><td>10612</td></tr><tr><td>287</td><td>10614</td></tr><tr><td>286</td><td>10754</td></tr><tr><td>285</td><td>10759</td></tr><tr><td>284</td><td>10876</td></tr><tr><td>282</td><td>10968</td></tr><tr><td>280</td><td>10969</td></tr><tr><td>277</td><td>12908</td></tr><tr><td>276</td><td>13080</td></tr><tr><td>275</td><td>13084</td></tr><tr><td>274</td><td>13207</td></tr><tr><td>272</td><td>13303</td></tr><tr><td>271</td><td>13305</td></tr><tr><td>270</td><td>13306</td></tr><tr><td>269</td><td>15404</td></tr><tr><td>267</td><td>15405</td></tr><tr><td>266</td><td>15561</td></tr><tr><td>265</td><td>15570</td></tr><tr><td>264</td><td>15675</td></tr><tr><td>263</td><td>15778</td></tr><tr><td>262</td><td>15779</td></tr><tr><td>260</td><td>15781</td></tr><tr><td>257</td><td>17904</td></tr><tr><td>256</td><td>18061</td></tr><tr><td>255</td><td>18067</td></tr><tr><td>254</td><td>18179</td></tr><tr><td>253</td><td>18265</td></tr><tr><td>252</td><td>18266</td></tr><tr><td>250</td><td>18267</td></tr><tr><td>247</td><td>20330</td></tr><tr><td>246</td><td>20471</td></tr><tr><td>245</td><td>20474</td></tr><tr><td>244</td><td>20574</td></tr><tr><td>242</td><td>20675</td></tr><tr><td>240</td><td>20676</td></tr><tr><td>237</td><td>22746</td></tr><tr><td>236</td><td>22873</td></tr><tr><td>235</td><td>22879</td></tr><tr><td>234</td><td>22986</td></tr><tr><td>232</td><td>23065</td></tr><tr><td>230</td><td>23066</td></tr><tr><td>227</td><td>25026</td></tr><tr><td>225</td><td>25128</td></tr><tr><td>224</td><td>25196</td></tr><tr><td>222</td><td>25271</td></tr><tr><td>220</td><td>25272</td></tr><tr><td>219</td><td>27008</td></tr><tr><td>217</td><td>27009</td></tr><tr><td>216</td><td>27092</td></tr><tr><td>215</td><td>27094</td></tr><tr><td>214</td><td>27148</td></tr><tr><td>210</td><td>27209</td></tr><tr><td>207</td><td>28696</td></tr><tr><td>206</td><td>28738</td></tr><tr><td>205</td><td>28742</td></tr><tr><td>204</td><td>28787</td></tr><tr><td>200</td><td>28815</td></tr><tr><td>197</td><td>29896</td></tr><tr><td>195</td><td>29911</td></tr><tr><td>194</td><td>29931</td></tr><tr><td>190</td><td>29945</td></tr><tr><td>187</td><td>30839</td></tr><tr><td>185</td><td>30842</td></tr><tr><td>184</td><td>30844</td></tr><tr><td>180</td><td>30847</td></tr><tr><td>175</td><td>31611</td></tr><tr><td>170</td><td>31614</td></tr><tr><td>165</td><td>32315</td></tr><tr><td>160</td><td>32317</td></tr><tr><td>155</td><td>33101</td></tr><tr><td>150</td><td>33102</td></tr><tr><td>140</td><td>33840</td></tr><tr><td>130</td><td>34486</td></tr><tr><td>120</td><td>34982</td></tr><tr><td>110</td><td>35316</td></tr><tr><td>105</td><td>35533</td></tr><tr><td>100</td><td>35534</td></tr><tr><td>90</td><td>35693</td></tr><tr><td>80</td><td>35781</td></tr><tr><td>70</td><td>35851</td></tr><tr><td>60</td><td>35897</td></tr><tr><td>50</td><td>35924</td></tr><tr><td>40</td><td>35953</td></tr><tr><td>30</td><td>35980</td></tr><tr><td>20</td><td>35989</td></tr><tr><td>0</td><td>36037</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde (participation individuelle) : 23045 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>475</td><td>4</td></tr><tr><td>470</td><td>5</td></tr><tr><td>450</td><td>9</td></tr><tr><td>445</td><td>13</td></tr><tr><td>441</td><td>16</td></tr><tr><td>440</td><td>17</td></tr><tr><td>435</td><td>25</td></tr><tr><td>434</td><td>29</td></tr><tr><td>432</td><td>31</td></tr><tr><td>431</td><td>32</td></tr><tr><td>430</td><td>33</td></tr><tr><td>427</td><td>51</td></tr><tr><td>426</td><td>54</td></tr><tr><td>425</td><td>55</td></tr><tr><td>424</td><td>62</td></tr><tr><td>422</td><td>64</td></tr><tr><td>420</td><td>66</td></tr><tr><td>419</td><td>92</td></tr><tr><td>417</td><td>93</td></tr><tr><td>416</td><td>96</td></tr><tr><td>415</td><td>97</td></tr><tr><td>414</td><td>105</td></tr><tr><td>410</td><td>109</td></tr><tr><td>409</td><td>148</td></tr><tr><td>407</td><td>149</td></tr><tr><td>405</td><td>155</td></tr><tr><td>404</td><td>181</td></tr><tr><td>402</td><td>183</td></tr><tr><td>400</td><td>184</td></tr><tr><td>399</td><td>255</td></tr><tr><td>397</td><td>257</td></tr><tr><td>396</td><td>264</td></tr><tr><td>395</td><td>267</td></tr><tr><td>394</td><td>293</td></tr><tr><td>392</td><td>297</td></tr><tr><td>390</td><td>298</td></tr><tr><td>387</td><td>451</td></tr><tr><td>386</td><td>462</td></tr><tr><td>385</td><td>467</td></tr><tr><td>384</td><td>518</td></tr><tr><td>382</td><td>530</td></tr><tr><td>380</td><td>533</td></tr><tr><td>379</td><td>738</td></tr><tr><td>377</td><td>739</td></tr><tr><td>376</td><td>758</td></tr><tr><td>375</td><td>764</td></tr><tr><td>374</td><td>814</td></tr><tr><td>372</td><td>828</td></tr><tr><td>371</td><td>830</td></tr><tr><td>370</td><td>831</td></tr><tr><td>369</td><td>1183</td></tr><tr><td>367</td><td>1186</td></tr><tr><td>366</td><td>1222</td></tr><tr><td>365</td><td>1229</td></tr><tr><td>364</td><td>1288</td></tr><tr><td>362</td><td>1312</td></tr><tr><td>360</td><td>1317</td></tr><tr><td>359</td><td>1816</td></tr><tr><td>357</td><td>1817</td></tr><tr><td>356</td><td>1859</td></tr><tr><td>355</td><td>1864</td></tr><tr><td>354</td><td>1927</td></tr><tr><td>353</td><td>1951</td></tr><tr><td>352</td><td>1952</td></tr><tr><td>350</td><td>1957</td></tr><tr><td>347</td><td>2569</td></tr><tr><td>346</td><td>2628</td></tr><tr><td>345</td><td>2633</td></tr><tr><td>344</td><td>2721</td></tr><tr><td>342</td><td>2750</td></tr><tr><td>340</td><td>2756</td></tr><tr><td>339</td><td>3605</td></tr><tr><td>338</td><td>3607</td></tr><tr><td>337</td><td>3608</td></tr><tr><td>336</td><td>3673</td></tr><tr><td>335</td><td>3680</td></tr><tr><td>334</td><td>3760</td></tr><tr><td>332</td><td>3799</td></tr><tr><td>330</td><td>3802</td></tr><tr><td>329</td><td>4809</td></tr><tr><td>327</td><td>4811</td></tr><tr><td>326</td><td>4899</td></tr><tr><td>325</td><td>4906</td></tr><tr><td>324</td><td>4989</td></tr><tr><td>322</td><td>5038</td></tr><tr><td>320</td><td>5045</td></tr><tr><td>319</td><td>6255</td></tr><tr><td>318</td><td>6258</td></tr><tr><td>317</td><td>6259</td></tr><tr><td>316</td><td>6372</td></tr><tr><td>315</td><td>6376</td></tr><tr><td>314</td><td>6476</td></tr><tr><td>312</td><td>6540</td></tr><tr><td>310</td><td>6542</td></tr><tr><td>309</td><td>7847</td></tr><tr><td>307</td><td>7848</td></tr><tr><td>306</td><td>7944</td></tr><tr><td>305</td><td>7949</td></tr><tr><td>304</td><td>8019</td></tr><tr><td>303</td><td>8076</td></tr><tr><td>302</td><td>8077</td></tr><tr><td>300</td><td>8079</td></tr><tr><td>299</td><td>9466</td></tr><tr><td>297</td><td>9468</td></tr><tr><td>296</td><td>9586</td></tr><tr><td>295</td><td>9590</td></tr><tr><td>294</td><td>9684</td></tr><tr><td>293</td><td>9758</td></tr><tr><td>292</td><td>9760</td></tr><tr><td>290</td><td>9765</td></tr><tr><td>287</td><td>11149</td></tr><tr><td>286</td><td>11256</td></tr><tr><td>285</td><td>11261</td></tr><tr><td>284</td><td>11342</td></tr><tr><td>282</td><td>11404</td></tr><tr><td>280</td><td>11406</td></tr><tr><td>277</td><td>12826</td></tr><tr><td>276</td><td>12940</td></tr><tr><td>275</td><td>12945</td></tr><tr><td>274</td><td>13027</td></tr><tr><td>270</td><td>13077</td></tr><tr><td>269</td><td>14425</td></tr><tr><td>267</td><td>14426</td></tr><tr><td>266</td><td>14509</td></tr><tr><td>265</td><td>14515</td></tr><tr><td>264</td><td>14576</td></tr><tr><td>262</td><td>14619</td></tr><tr><td>260</td><td>14622</td></tr><tr><td>257</td><td>15841</td></tr><tr><td>256</td><td>15923</td></tr><tr><td>255</td><td>15926</td></tr><tr><td>254</td><td>15993</td></tr><tr><td>250</td><td>16027</td></tr><tr><td>249</td><td>17095</td></tr><tr><td>247</td><td>17096</td></tr><tr><td>246</td><td>17157</td></tr><tr><td>245</td><td>17160</td></tr><tr><td>244</td><td>17206</td></tr><tr><td>240</td><td>17242</td></tr><tr><td>237</td><td>18254</td></tr><tr><td>236</td><td>18305</td></tr><tr><td>235</td><td>18308</td></tr><tr><td>234</td><td>18351</td></tr><tr><td>230</td><td>18375</td></tr><tr><td>229</td><td>19254</td></tr><tr><td>227</td><td>19255</td></tr><tr><td>226</td><td>19296</td></tr><tr><td>225</td><td>19297</td></tr><tr><td>224</td><td>19340</td></tr><tr><td>223</td><td>19361</td></tr><tr><td>220</td><td>19362</td></tr><tr><td>217</td><td>20043</td></tr><tr><td>215</td><td>20075</td></tr><tr><td>214</td><td>20090</td></tr><tr><td>210</td><td>20114</td></tr><tr><td>207</td><td>20644</td></tr><tr><td>205</td><td>20660</td></tr><tr><td>204</td><td>20674</td></tr><tr><td>200</td><td>20687</td></tr><tr><td>197</td><td>21150</td></tr><tr><td>195</td><td>21157</td></tr><tr><td>194</td><td>21162</td></tr><tr><td>190</td><td>21168</td></tr><tr><td>185</td><td>21485</td></tr><tr><td>180</td><td>21486</td></tr><tr><td>175</td><td>21735</td></tr><tr><td>170</td><td>21736</td></tr><tr><td>160</td><td>21998</td></tr><tr><td>155</td><td>22217</td></tr><tr><td>150</td><td>22218</td></tr><tr><td>140</td><td>22419</td></tr><tr><td>130</td><td>22584</td></tr><tr><td>120</td><td>22697</td></tr><tr><td>110</td><td>22766</td></tr><tr><td>100</td><td>22812</td></tr><tr><td>90</td><td>22858</td></tr><tr><td>80</td><td>22891</td></tr><tr><td>70</td><td>22914</td></tr><tr><td>60</td><td>22932</td></tr><tr><td>50</td><td>22942</td></tr><tr><td>40</td><td>22953</td></tr><tr><td>30</td><td>22964</td></tr><tr><td>20</td><td>22970</td></tr><tr><td>0</td><td>22993</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première (participation individuelle) : 9194 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>465</td><td>4</td></tr><tr><td>460</td><td>5</td></tr><tr><td>455</td><td>13</td></tr><tr><td>454</td><td>14</td></tr><tr><td>450</td><td>15</td></tr><tr><td>445</td><td>22</td></tr><tr><td>440</td><td>26</td></tr><tr><td>437</td><td>41</td></tr><tr><td>436</td><td>43</td></tr><tr><td>435</td><td>44</td></tr><tr><td>431</td><td>48</td></tr><tr><td>430</td><td>49</td></tr><tr><td>429</td><td>69</td></tr><tr><td>427</td><td>71</td></tr><tr><td>426</td><td>73</td></tr><tr><td>425</td><td>75</td></tr><tr><td>424</td><td>80</td></tr><tr><td>422</td><td>84</td></tr><tr><td>420</td><td>85</td></tr><tr><td>417</td><td>118</td></tr><tr><td>416</td><td>122</td></tr><tr><td>415</td><td>126</td></tr><tr><td>414</td><td>140</td></tr><tr><td>410</td><td>144</td></tr><tr><td>409</td><td>201</td></tr><tr><td>407</td><td>202</td></tr><tr><td>406</td><td>206</td></tr><tr><td>405</td><td>208</td></tr><tr><td>404</td><td>235</td></tr><tr><td>402</td><td>239</td></tr><tr><td>401</td><td>240</td></tr><tr><td>400</td><td>242</td></tr><tr><td>397</td><td>318</td></tr><tr><td>396</td><td>324</td></tr><tr><td>395</td><td>329</td></tr><tr><td>394</td><td>361</td></tr><tr><td>392</td><td>365</td></tr><tr><td>391</td><td>366</td></tr><tr><td>390</td><td>367</td></tr><tr><td>389</td><td>503</td></tr><tr><td>387</td><td>506</td></tr><tr><td>386</td><td>515</td></tr><tr><td>385</td><td>522</td></tr><tr><td>384</td><td>555</td></tr><tr><td>383</td><td>565</td></tr><tr><td>382</td><td>566</td></tr><tr><td>380</td><td>569</td></tr><tr><td>379</td><td>760</td></tr><tr><td>377</td><td>765</td></tr><tr><td>376</td><td>774</td></tr><tr><td>375</td><td>777</td></tr><tr><td>374</td><td>822</td></tr><tr><td>373</td><td>838</td></tr><tr><td>372</td><td>839</td></tr><tr><td>370</td><td>841</td></tr><tr><td>369</td><td>1088</td></tr><tr><td>367</td><td>1090</td></tr><tr><td>366</td><td>1114</td></tr><tr><td>365</td><td>1123</td></tr><tr><td>364</td><td>1175</td></tr><tr><td>362</td><td>1190</td></tr><tr><td>361</td><td>1192</td></tr><tr><td>360</td><td>1193</td></tr><tr><td>359</td><td>1559</td></tr><tr><td>357</td><td>1561</td></tr><tr><td>356</td><td>1591</td></tr><tr><td>355</td><td>1592</td></tr><tr><td>354</td><td>1637</td></tr><tr><td>352</td><td>1652</td></tr><tr><td>351</td><td>1654</td></tr><tr><td>350</td><td>1656</td></tr><tr><td>349</td><td>2101</td></tr><tr><td>347</td><td>2104</td></tr><tr><td>346</td><td>2156</td></tr><tr><td>345</td><td>2162</td></tr><tr><td>344</td><td>2209</td></tr><tr><td>342</td><td>2223</td></tr><tr><td>340</td><td>2224</td></tr><tr><td>339</td><td>2687</td></tr><tr><td>337</td><td>2688</td></tr><tr><td>336</td><td>2734</td></tr><tr><td>335</td><td>2743</td></tr><tr><td>334</td><td>2795</td></tr><tr><td>332</td><td>2824</td></tr><tr><td>330</td><td>2828</td></tr><tr><td>329</td><td>3341</td></tr><tr><td>327</td><td>3342</td></tr><tr><td>326</td><td>3389</td></tr><tr><td>325</td><td>3392</td></tr><tr><td>324</td><td>3439</td></tr><tr><td>323</td><td>3461</td></tr><tr><td>322</td><td>3462</td></tr><tr><td>320</td><td>3466</td></tr><tr><td>319</td><td>4015</td></tr><tr><td>317</td><td>4017</td></tr><tr><td>316</td><td>4064</td></tr><tr><td>315</td><td>4068</td></tr><tr><td>314</td><td>4128</td></tr><tr><td>312</td><td>4150</td></tr><tr><td>310</td><td>4152</td></tr><tr><td>308</td><td>4716</td></tr><tr><td>307</td><td>4717</td></tr><tr><td>306</td><td>4762</td></tr><tr><td>305</td><td>4770</td></tr><tr><td>304</td><td>4823</td></tr><tr><td>300</td><td>4853</td></tr><tr><td>299</td><td>5401</td></tr><tr><td>297</td><td>5402</td></tr><tr><td>296</td><td>5435</td></tr><tr><td>295</td><td>5436</td></tr><tr><td>294</td><td>5481</td></tr><tr><td>290</td><td>5511</td></tr><tr><td>287</td><td>6043</td></tr><tr><td>286</td><td>6074</td></tr><tr><td>285</td><td>6075</td></tr><tr><td>284</td><td>6111</td></tr><tr><td>282</td><td>6133</td></tr><tr><td>280</td><td>6134</td></tr><tr><td>277</td><td>6587</td></tr><tr><td>276</td><td>6623</td></tr><tr><td>275</td><td>6625</td></tr><tr><td>274</td><td>6649</td></tr><tr><td>272</td><td>6672</td></tr><tr><td>270</td><td>6673</td></tr><tr><td>267</td><td>7101</td></tr><tr><td>266</td><td>7126</td></tr><tr><td>265</td><td>7127</td></tr><tr><td>264</td><td>7150</td></tr><tr><td>260</td><td>7166</td></tr><tr><td>257</td><td>7499</td></tr><tr><td>256</td><td>7521</td></tr><tr><td>255</td><td>7524</td></tr><tr><td>254</td><td>7538</td></tr><tr><td>253</td><td>7552</td></tr><tr><td>252</td><td>7553</td></tr><tr><td>250</td><td>7554</td></tr><tr><td>247</td><td>7835</td></tr><tr><td>246</td><td>7852</td></tr><tr><td>245</td><td>7853</td></tr><tr><td>244</td><td>7870</td></tr><tr><td>240</td><td>7871</td></tr><tr><td>237</td><td>8100</td></tr><tr><td>236</td><td>8109</td></tr><tr><td>235</td><td>8110</td></tr><tr><td>234</td><td>8125</td></tr><tr><td>230</td><td>8129</td></tr><tr><td>227</td><td>8332</td></tr><tr><td>226</td><td>8338</td></tr><tr><td>225</td><td>8339</td></tr><tr><td>224</td><td>8347</td></tr><tr><td>222</td><td>8349</td></tr><tr><td>220</td><td>8350</td></tr><tr><td>217</td><td>8512</td></tr><tr><td>215</td><td>8519</td></tr><tr><td>214</td><td>8522</td></tr><tr><td>210</td><td>8526</td></tr><tr><td>207</td><td>8633</td></tr><tr><td>205</td><td>8635</td></tr><tr><td>204</td><td>8638</td></tr><tr><td>200</td><td>8639</td></tr><tr><td>194</td><td>8732</td></tr><tr><td>190</td><td>8733</td></tr><tr><td>185</td><td>8808</td></tr><tr><td>180</td><td>8809</td></tr><tr><td>170</td><td>8873</td></tr><tr><td>160</td><td>8933</td></tr><tr><td>155</td><td>8989</td></tr><tr><td>150</td><td>8990</td></tr><tr><td>145</td><td>9031</td></tr><tr><td>140</td><td>9032</td></tr><tr><td>130</td><td>9069</td></tr><tr><td>120</td><td>9092</td></tr><tr><td>110</td><td>9107</td></tr><tr><td>100</td><td>9117</td></tr><tr><td>90</td><td>9126</td></tr><tr><td>80</td><td>9137</td></tr><tr><td>70</td><td>9142</td></tr><tr><td>60</td><td>9151</td></tr><tr><td>50</td><td>9153</td></tr><tr><td>40</td><td>9157</td></tr><tr><td>30</td><td>9158</td></tr><tr><td>20</td><td>9163</td></tr><tr><td>0</td><td>9177</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale (participation individuelle) : 6416 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>470</td><td>8</td></tr><tr><td>465</td><td>11</td></tr><tr><td>460</td><td>15</td></tr><tr><td>457</td><td>21</td></tr><tr><td>455</td><td>22</td></tr><tr><td>450</td><td>25</td></tr><tr><td>446</td><td>31</td></tr><tr><td>445</td><td>32</td></tr><tr><td>444</td><td>35</td></tr><tr><td>440</td><td>36</td></tr><tr><td>437</td><td>48</td></tr><tr><td>436</td><td>50</td></tr><tr><td>435</td><td>51</td></tr><tr><td>430</td><td>60</td></tr><tr><td>429</td><td>91</td></tr><tr><td>427</td><td>92</td></tr><tr><td>426</td><td>96</td></tr><tr><td>425</td><td>97</td></tr><tr><td>424</td><td>106</td></tr><tr><td>422</td><td>108</td></tr><tr><td>420</td><td>109</td></tr><tr><td>419</td><td>140</td></tr><tr><td>417</td><td>141</td></tr><tr><td>416</td><td>147</td></tr><tr><td>415</td><td>149</td></tr><tr><td>414</td><td>170</td></tr><tr><td>412</td><td>171</td></tr><tr><td>410</td><td>173</td></tr><tr><td>409</td><td>232</td></tr><tr><td>407</td><td>233</td></tr><tr><td>406</td><td>243</td></tr><tr><td>405</td><td>246</td></tr><tr><td>404</td><td>271</td></tr><tr><td>402</td><td>277</td></tr><tr><td>401</td><td>282</td></tr><tr><td>400</td><td>283</td></tr><tr><td>397</td><td>362</td></tr><tr><td>396</td><td>370</td></tr><tr><td>395</td><td>374</td></tr><tr><td>394</td><td>409</td></tr><tr><td>392</td><td>419</td></tr><tr><td>391</td><td>420</td></tr><tr><td>390</td><td>422</td></tr><tr><td>389</td><td>573</td></tr><tr><td>387</td><td>575</td></tr><tr><td>386</td><td>583</td></tr><tr><td>385</td><td>591</td></tr><tr><td>384</td><td>624</td></tr><tr><td>382</td><td>633</td></tr><tr><td>380</td><td>636</td></tr><tr><td>379</td><td>830</td></tr><tr><td>377</td><td>834</td></tr><tr><td>376</td><td>852</td></tr><tr><td>375</td><td>855</td></tr><tr><td>374</td><td>907</td></tr><tr><td>372</td><td>915</td></tr><tr><td>370</td><td>919</td></tr><tr><td>369</td><td>1153</td></tr><tr><td>367</td><td>1156</td></tr><tr><td>366</td><td>1180</td></tr><tr><td>365</td><td>1183</td></tr><tr><td>364</td><td>1224</td></tr><tr><td>362</td><td>1235</td></tr><tr><td>361</td><td>1237</td></tr><tr><td>360</td><td>1238</td></tr><tr><td>359</td><td>1522</td></tr><tr><td>357</td><td>1523</td></tr><tr><td>356</td><td>1543</td></tr><tr><td>355</td><td>1549</td></tr><tr><td>354</td><td>1577</td></tr><tr><td>352</td><td>1597</td></tr><tr><td>351</td><td>1598</td></tr><tr><td>350</td><td>1599</td></tr><tr><td>349</td><td>1883</td></tr><tr><td>347</td><td>1884</td></tr><tr><td>346</td><td>1908</td></tr><tr><td>345</td><td>1913</td></tr><tr><td>344</td><td>1967</td></tr><tr><td>342</td><td>1984</td></tr><tr><td>341</td><td>1985</td></tr><tr><td>340</td><td>1986</td></tr><tr><td>339</td><td>2364</td></tr><tr><td>337</td><td>2365</td></tr><tr><td>336</td><td>2390</td></tr><tr><td>335</td><td>2394</td></tr><tr><td>334</td><td>2436</td></tr><tr><td>332</td><td>2451</td></tr><tr><td>330</td><td>2453</td></tr><tr><td>327</td><td>2817</td></tr><tr><td>326</td><td>2842</td></tr><tr><td>325</td><td>2846</td></tr><tr><td>324</td><td>2887</td></tr><tr><td>322</td><td>2904</td></tr><tr><td>320</td><td>2905</td></tr><tr><td>319</td><td>3312</td></tr><tr><td>317</td><td>3314</td></tr><tr><td>316</td><td>3341</td></tr><tr><td>315</td><td>3344</td></tr><tr><td>314</td><td>3374</td></tr><tr><td>310</td><td>3395</td></tr><tr><td>307</td><td>3787</td></tr><tr><td>306</td><td>3809</td></tr><tr><td>305</td><td>3810</td></tr><tr><td>304</td><td>3839</td></tr><tr><td>302</td><td>3853</td></tr><tr><td>300</td><td>3854</td></tr><tr><td>297</td><td>4205</td></tr><tr><td>296</td><td>4229</td></tr><tr><td>295</td><td>4230</td></tr><tr><td>294</td><td>4261</td></tr><tr><td>290</td><td>4270</td></tr><tr><td>287</td><td>4569</td></tr><tr><td>286</td><td>4585</td></tr><tr><td>285</td><td>4586</td></tr><tr><td>284</td><td>4608</td></tr><tr><td>282</td><td>4616</td></tr><tr><td>280</td><td>4617</td></tr><tr><td>277</td><td>4921</td></tr><tr><td>276</td><td>4938</td></tr><tr><td>275</td><td>4939</td></tr><tr><td>274</td><td>4959</td></tr><tr><td>271</td><td>4966</td></tr><tr><td>270</td><td>4967</td></tr><tr><td>267</td><td>5181</td></tr><tr><td>265</td><td>5196</td></tr><tr><td>264</td><td>5206</td></tr><tr><td>262</td><td>5213</td></tr><tr><td>260</td><td>5214</td></tr><tr><td>257</td><td>5447</td></tr><tr><td>256</td><td>5457</td></tr><tr><td>255</td><td>5458</td></tr><tr><td>254</td><td>5470</td></tr><tr><td>250</td><td>5478</td></tr><tr><td>247</td><td>5646</td></tr><tr><td>245</td><td>5654</td></tr><tr><td>244</td><td>5661</td></tr><tr><td>240</td><td>5667</td></tr><tr><td>237</td><td>5800</td></tr><tr><td>235</td><td>5806</td></tr><tr><td>234</td><td>5810</td></tr><tr><td>230</td><td>5817</td></tr><tr><td>227</td><td>5942</td></tr><tr><td>226</td><td>5945</td></tr><tr><td>225</td><td>5946</td></tr><tr><td>224</td><td>5954</td></tr><tr><td>220</td><td>5956</td></tr><tr><td>217</td><td>6033</td></tr><tr><td>215</td><td>6036</td></tr><tr><td>210</td><td>6037</td></tr><tr><td>205</td><td>6108</td></tr><tr><td>200</td><td>6111</td></tr><tr><td>197</td><td>6175</td></tr><tr><td>190</td><td>6176</td></tr><tr><td>180</td><td>6223</td></tr><tr><td>170</td><td>6246</td></tr><tr><td>160</td><td>6282</td></tr><tr><td>150</td><td>6305</td></tr><tr><td>140</td><td>6328</td></tr><tr><td>130</td><td>6347</td></tr><tr><td>120</td><td>6356</td></tr><tr><td>110</td><td>6365</td></tr><tr><td>100</td><td>6374</td></tr><tr><td>90</td><td>6383</td></tr><tr><td>80</td><td>6386</td></tr><tr><td>70</td><td>6391</td></tr><tr><td>50</td><td>6392</td></tr><tr><td>40</td><td>6394</td></tr><tr><td>30</td><td>6396</td></tr><tr><td>20</td><td>6399</td></tr><tr><td>0</td><td>6403</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro. (participation individuelle) : 708 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>395</td><td>1</td></tr><tr><td>390</td><td>2</td></tr><tr><td>370</td><td>3</td></tr><tr><td>360</td><td>4</td></tr><tr><td>350</td><td>5</td></tr><tr><td>345</td><td>8</td></tr><tr><td>340</td><td>9</td></tr><tr><td>337</td><td>15</td></tr><tr><td>330</td><td>18</td></tr><tr><td>327</td><td>24</td></tr><tr><td>325</td><td>25</td></tr><tr><td>324</td><td>27</td></tr><tr><td>320</td><td>28</td></tr><tr><td>315</td><td>39</td></tr><tr><td>310</td><td>40</td></tr><tr><td>305</td><td>54</td></tr><tr><td>300</td><td>55</td></tr><tr><td>297</td><td>77</td></tr><tr><td>295</td><td>78</td></tr><tr><td>294</td><td>80</td></tr><tr><td>290</td><td>82</td></tr><tr><td>285</td><td>114</td></tr><tr><td>284</td><td>116</td></tr><tr><td>280</td><td>118</td></tr><tr><td>277</td><td>153</td></tr><tr><td>275</td><td>158</td></tr><tr><td>274</td><td>160</td></tr><tr><td>270</td><td>162</td></tr><tr><td>265</td><td>206</td></tr><tr><td>264</td><td>209</td></tr><tr><td>260</td><td>212</td></tr><tr><td>257</td><td>251</td></tr><tr><td>255</td><td>253</td></tr><tr><td>254</td><td>254</td></tr><tr><td>250</td><td>257</td></tr><tr><td>246</td><td>297</td></tr><tr><td>245</td><td>298</td></tr><tr><td>244</td><td>299</td></tr><tr><td>240</td><td>304</td></tr><tr><td>237</td><td>346</td></tr><tr><td>235</td><td>347</td></tr><tr><td>234</td><td>349</td></tr><tr><td>230</td><td>353</td></tr><tr><td>227</td><td>395</td></tr><tr><td>225</td><td>397</td></tr><tr><td>224</td><td>398</td></tr><tr><td>220</td><td>401</td></tr><tr><td>217</td><td>443</td></tr><tr><td>215</td><td>445</td></tr><tr><td>214</td><td>447</td></tr><tr><td>210</td><td>450</td></tr><tr><td>207</td><td>481</td></tr><tr><td>205</td><td>483</td></tr><tr><td>204</td><td>484</td></tr><tr><td>200</td><td>485</td></tr><tr><td>190</td><td>507</td></tr><tr><td>185</td><td>533</td></tr><tr><td>180</td><td>534</td></tr><tr><td>170</td><td>552</td></tr><tr><td>160</td><td>569</td></tr><tr><td>150</td><td>595</td></tr><tr><td>140</td><td>614</td></tr><tr><td>130</td><td>633</td></tr><tr><td>120</td><td>659</td></tr><tr><td>110</td><td>674</td></tr><tr><td>100</td><td>682</td></tr><tr><td>90</td><td>688</td></tr><tr><td>80</td><td>691</td></tr><tr><td>70</td><td>698</td></tr><tr><td>60</td><td>699</td></tr><tr><td>50</td><td>700</td></tr><tr><td>40</td><td>703</td></tr><tr><td>30</td><td>704</td></tr><tr><td>20</td><td>705</td></tr><tr><td>0</td><td>706</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première pro. (participation individuelle) : 431 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>360</td><td>2</td></tr><tr><td>355</td><td>3</td></tr><tr><td>350</td><td>4</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>6</td></tr><tr><td>334</td><td>11</td></tr><tr><td>330</td><td>12</td></tr><tr><td>327</td><td>22</td></tr><tr><td>324</td><td>25</td></tr><tr><td>320</td><td>26</td></tr><tr><td>317</td><td>42</td></tr><tr><td>310</td><td>43</td></tr><tr><td>307</td><td>62</td></tr><tr><td>304</td><td>64</td></tr><tr><td>300</td><td>65</td></tr><tr><td>296</td><td>90</td></tr><tr><td>295</td><td>91</td></tr><tr><td>294</td><td>92</td></tr><tr><td>290</td><td>93</td></tr><tr><td>287</td><td>108</td></tr><tr><td>285</td><td>110</td></tr><tr><td>280</td><td>111</td></tr><tr><td>277</td><td>135</td></tr><tr><td>274</td><td>137</td></tr><tr><td>270</td><td>140</td></tr><tr><td>267</td><td>165</td></tr><tr><td>265</td><td>167</td></tr><tr><td>260</td><td>169</td></tr><tr><td>257</td><td>196</td></tr><tr><td>255</td><td>200</td></tr><tr><td>254</td><td>201</td></tr><tr><td>250</td><td>202</td></tr><tr><td>247</td><td>230</td></tr><tr><td>245</td><td>235</td></tr><tr><td>244</td><td>237</td></tr><tr><td>240</td><td>239</td></tr><tr><td>234</td><td>270</td></tr><tr><td>230</td><td>272</td></tr><tr><td>227</td><td>293</td></tr><tr><td>224</td><td>295</td></tr><tr><td>220</td><td>296</td></tr><tr><td>217</td><td>321</td></tr><tr><td>210</td><td>322</td></tr><tr><td>209</td><td>333</td></tr><tr><td>205</td><td>334</td></tr><tr><td>200</td><td>335</td></tr><tr><td>190</td><td>350</td></tr><tr><td>180</td><td>362</td></tr><tr><td>170</td><td>373</td></tr><tr><td>160</td><td>382</td></tr><tr><td>150</td><td>388</td></tr><tr><td>140</td><td>401</td></tr><tr><td>130</td><td>411</td></tr><tr><td>120</td><td>414</td></tr><tr><td>110</td><td>420</td></tr><tr><td>100</td><td>422</td></tr><tr><td>90</td><td>426</td></tr><tr><td>80</td><td>427</td></tr><tr><td>70</td><td>429</td></tr><tr><td>0</td><td>430</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale pro. (participation individuelle) : 396 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>465</td><td>1</td></tr><tr><td>410</td><td>2</td></tr><tr><td>400</td><td>4</td></tr><tr><td>390</td><td>5</td></tr><tr><td>380</td><td>6</td></tr><tr><td>365</td><td>8</td></tr><tr><td>360</td><td>9</td></tr><tr><td>354</td><td>16</td></tr><tr><td>350</td><td>17</td></tr><tr><td>347</td><td>20</td></tr><tr><td>340</td><td>21</td></tr><tr><td>335</td><td>34</td></tr><tr><td>334</td><td>36</td></tr><tr><td>330</td><td>37</td></tr><tr><td>327</td><td>40</td></tr><tr><td>320</td><td>41</td></tr><tr><td>317</td><td>55</td></tr><tr><td>316</td><td>56</td></tr><tr><td>315</td><td>58</td></tr><tr><td>314</td><td>59</td></tr><tr><td>310</td><td>61</td></tr><tr><td>305</td><td>77</td></tr><tr><td>304</td><td>78</td></tr><tr><td>300</td><td>80</td></tr><tr><td>297</td><td>102</td></tr><tr><td>295</td><td>103</td></tr><tr><td>294</td><td>104</td></tr><tr><td>290</td><td>108</td></tr><tr><td>280</td><td>122</td></tr><tr><td>277</td><td>133</td></tr><tr><td>275</td><td>140</td></tr><tr><td>274</td><td>141</td></tr><tr><td>270</td><td>144</td></tr><tr><td>265</td><td>163</td></tr><tr><td>264</td><td>164</td></tr><tr><td>260</td><td>165</td></tr><tr><td>257</td><td>194</td></tr><tr><td>255</td><td>196</td></tr><tr><td>254</td><td>199</td></tr><tr><td>250</td><td>200</td></tr><tr><td>247</td><td>223</td></tr><tr><td>244</td><td>224</td></tr><tr><td>240</td><td>225</td></tr><tr><td>237</td><td>241</td></tr><tr><td>235</td><td>243</td></tr><tr><td>230</td><td>244</td></tr><tr><td>227</td><td>266</td></tr><tr><td>224</td><td>267</td></tr><tr><td>220</td><td>268</td></tr><tr><td>217</td><td>277</td></tr><tr><td>214</td><td>278</td></tr><tr><td>210</td><td>279</td></tr><tr><td>207</td><td>295</td></tr><tr><td>200</td><td>296</td></tr><tr><td>195</td><td>307</td></tr><tr><td>190</td><td>309</td></tr><tr><td>180</td><td>317</td></tr><tr><td>170</td><td>331</td></tr><tr><td>160</td><td>348</td></tr><tr><td>150</td><td>353</td></tr><tr><td>140</td><td>361</td></tr><tr><td>130</td><td>366</td></tr><tr><td>120</td><td>368</td></tr><tr><td>110</td><td>371</td></tr><tr><td>100</td><td>375</td></tr><tr><td>90</td><td>377</td></tr><tr><td>80</td><td>379</td></tr><tr><td>70</td><td>383</td></tr><tr><td>50</td><td>385</td></tr><tr><td>40</td><td>387</td></tr><tr><td>30</td><td>388</td></tr><tr><td>20</td><td>389</td></tr><tr><td>0</td><td>392</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 5322 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>410</td><td>1</td></tr><tr><td>380</td><td>2</td></tr><tr><td>370</td><td>4</td></tr><tr><td>365</td><td>6</td></tr><tr><td>360</td><td>7</td></tr><tr><td>350</td><td>8</td></tr><tr><td>340</td><td>9</td></tr><tr><td>330</td><td>12</td></tr><tr><td>324</td><td>15</td></tr><tr><td>320</td><td>16</td></tr><tr><td>310</td><td>25</td></tr><tr><td>307</td><td>31</td></tr><tr><td>300</td><td>33</td></tr><tr><td>290</td><td>39</td></tr><tr><td>285</td><td>64</td></tr><tr><td>284</td><td>70</td></tr><tr><td>280</td><td>72</td></tr><tr><td>275</td><td>115</td></tr><tr><td>274</td><td>117</td></tr><tr><td>270</td><td>118</td></tr><tr><td>265</td><td>171</td></tr><tr><td>264</td><td>173</td></tr><tr><td>260</td><td>175</td></tr><tr><td>257</td><td>265</td></tr><tr><td>255</td><td>272</td></tr><tr><td>254</td><td>279</td></tr><tr><td>250</td><td>283</td></tr><tr><td>247</td><td>380</td></tr><tr><td>245</td><td>382</td></tr><tr><td>244</td><td>384</td></tr><tr><td>240</td><td>386</td></tr><tr><td>237</td><td>513</td></tr><tr><td>235</td><td>517</td></tr><tr><td>233</td><td>521</td></tr><tr><td>230</td><td>522</td></tr><tr><td>227</td><td>744</td></tr><tr><td>225</td><td>747</td></tr><tr><td>224</td><td>750</td></tr><tr><td>220</td><td>752</td></tr><tr><td>217</td><td>950</td></tr><tr><td>214</td><td>953</td></tr><tr><td>210</td><td>956</td></tr><tr><td>207</td><td>1247</td></tr><tr><td>206</td><td>1261</td></tr><tr><td>205</td><td>1263</td></tr><tr><td>204</td><td>1271</td></tr><tr><td>202</td><td>1275</td></tr><tr><td>200</td><td>1277</td></tr><tr><td>197</td><td>1569</td></tr><tr><td>195</td><td>1573</td></tr><tr><td>194</td><td>1577</td></tr><tr><td>190</td><td>1581</td></tr><tr><td>187</td><td>1840</td></tr><tr><td>185</td><td>1844</td></tr><tr><td>180</td><td>1846</td></tr><tr><td>170</td><td>2022</td></tr><tr><td>160</td><td>2252</td></tr><tr><td>150</td><td>2544</td></tr><tr><td>140</td><td>3009</td></tr><tr><td>130</td><td>3518</td></tr><tr><td>120</td><td>4029</td></tr><tr><td>110</td><td>4391</td></tr><tr><td>100</td><td>4645</td></tr><tr><td>90</td><td>4837</td></tr><tr><td>80</td><td>4988</td></tr><tr><td>70</td><td>5107</td></tr><tr><td>60</td><td>5134</td></tr><tr><td>50</td><td>5185</td></tr><tr><td>40</td><td>5209</td></tr><tr><td>30</td><td>5248</td></tr><tr><td>20</td><td>5258</td></tr><tr><td>0</td><td>5276</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 8672 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>365</td><td>1</td></tr><tr><td>360</td><td>2</td></tr><tr><td>354</td><td>4</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>7</td></tr><tr><td>337</td><td>17</td></tr><tr><td>334</td><td>20</td></tr><tr><td>330</td><td>22</td></tr><tr><td>325</td><td>33</td></tr><tr><td>320</td><td>34</td></tr><tr><td>314</td><td>52</td></tr><tr><td>310</td><td>56</td></tr><tr><td>307</td><td>86</td></tr><tr><td>305</td><td>87</td></tr><tr><td>304</td><td>90</td></tr><tr><td>300</td><td>94</td></tr><tr><td>297</td><td>154</td></tr><tr><td>295</td><td>160</td></tr><tr><td>294</td><td>167</td></tr><tr><td>290</td><td>169</td></tr><tr><td>287</td><td>245</td></tr><tr><td>285</td><td>251</td></tr><tr><td>284</td><td>258</td></tr><tr><td>280</td><td>260</td></tr><tr><td>277</td><td>396</td></tr><tr><td>276</td><td>404</td></tr><tr><td>275</td><td>406</td></tr><tr><td>274</td><td>413</td></tr><tr><td>270</td><td>421</td></tr><tr><td>267</td><td>617</td></tr><tr><td>265</td><td>628</td></tr><tr><td>264</td><td>632</td></tr><tr><td>260</td><td>638</td></tr><tr><td>257</td><td>860</td></tr><tr><td>255</td><td>882</td></tr><tr><td>254</td><td>896</td></tr><tr><td>250</td><td>906</td></tr><tr><td>247</td><td>1132</td></tr><tr><td>245</td><td>1149</td></tr><tr><td>244</td><td>1159</td></tr><tr><td>240</td><td>1175</td></tr><tr><td>237</td><td>1556</td></tr><tr><td>235</td><td>1584</td></tr><tr><td>234</td><td>1601</td></tr><tr><td>230</td><td>1624</td></tr><tr><td>227</td><td>2077</td></tr><tr><td>225</td><td>2098</td></tr><tr><td>224</td><td>2111</td></tr><tr><td>220</td><td>2140</td></tr><tr><td>217</td><td>2670</td></tr><tr><td>215</td><td>2703</td></tr><tr><td>214</td><td>2725</td></tr><tr><td>210</td><td>2748</td></tr><tr><td>207</td><td>3425</td></tr><tr><td>205</td><td>3444</td></tr><tr><td>204</td><td>3463</td></tr><tr><td>200</td><td>3496</td></tr><tr><td>197</td><td>4102</td></tr><tr><td>195</td><td>4117</td></tr><tr><td>194</td><td>4123</td></tr><tr><td>190</td><td>4146</td></tr><tr><td>184</td><td>4650</td></tr><tr><td>180</td><td>4654</td></tr><tr><td>170</td><td>5031</td></tr><tr><td>169</td><td>5401</td></tr><tr><td>165</td><td>5403</td></tr><tr><td>160</td><td>5405</td></tr><tr><td>150</td><td>5934</td></tr><tr><td>140</td><td>6556</td></tr><tr><td>130</td><td>7182</td></tr><tr><td>120</td><td>7655</td></tr><tr><td>110</td><td>8080</td></tr><tr><td>100</td><td>8294</td></tr><tr><td>90</td><td>8440</td></tr><tr><td>80</td><td>8523</td></tr><tr><td>70</td><td>8580</td></tr><tr><td>60</td><td>8601</td></tr><tr><td>50</td><td>8626</td></tr><tr><td>40</td><td>8634</td></tr><tr><td>20</td><td>8649</td></tr><tr><td>0</td><td>8660</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème (participation en binôme) : 57940 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>430</td><td>1</td></tr><tr><td>390</td><td>3</td></tr><tr><td>380</td><td>7</td></tr><tr><td>375</td><td>19</td></tr><tr><td>374</td><td>21</td></tr><tr><td>370</td><td>25</td></tr><tr><td>367</td><td>31</td></tr><tr><td>366</td><td>33</td></tr><tr><td>365</td><td>35</td></tr><tr><td>364</td><td>38</td></tr><tr><td>360</td><td>42</td></tr><tr><td>355</td><td>74</td></tr><tr><td>354</td><td>76</td></tr><tr><td>352</td><td>78</td></tr><tr><td>350</td><td>80</td></tr><tr><td>347</td><td>145</td></tr><tr><td>345</td><td>149</td></tr><tr><td>344</td><td>157</td></tr><tr><td>340</td><td>159</td></tr><tr><td>337</td><td>269</td></tr><tr><td>336</td><td>289</td></tr><tr><td>335</td><td>291</td></tr><tr><td>334</td><td>300</td></tr><tr><td>330</td><td>304</td></tr><tr><td>327</td><td>490</td></tr><tr><td>325</td><td>506</td></tr><tr><td>324</td><td>531</td></tr><tr><td>320</td><td>539</td></tr><tr><td>317</td><td>927</td></tr><tr><td>315</td><td>965</td></tr><tr><td>314</td><td>1003</td></tr><tr><td>312</td><td>1019</td></tr><tr><td>310</td><td>1021</td></tr><tr><td>307</td><td>1697</td></tr><tr><td>305</td><td>1747</td></tr><tr><td>304</td><td>1788</td></tr><tr><td>300</td><td>1830</td></tr><tr><td>299</td><td>2816</td></tr><tr><td>297</td><td>2818</td></tr><tr><td>295</td><td>2886</td></tr><tr><td>294</td><td>2952</td></tr><tr><td>290</td><td>2992</td></tr><tr><td>287</td><td>4280</td></tr><tr><td>285</td><td>4398</td></tr><tr><td>284</td><td>4479</td></tr><tr><td>280</td><td>4521</td></tr><tr><td>277</td><td>6085</td></tr><tr><td>276</td><td>6193</td></tr><tr><td>275</td><td>6195</td></tr><tr><td>274</td><td>6262</td></tr><tr><td>270</td><td>6343</td></tr><tr><td>267</td><td>8347</td></tr><tr><td>266</td><td>8494</td></tr><tr><td>265</td><td>8498</td></tr><tr><td>264</td><td>8591</td></tr><tr><td>260</td><td>8669</td></tr><tr><td>257</td><td>11097</td></tr><tr><td>256</td><td>11279</td></tr><tr><td>255</td><td>11285</td></tr><tr><td>254</td><td>11447</td></tr><tr><td>250</td><td>11549</td></tr><tr><td>247</td><td>14124</td></tr><tr><td>246</td><td>14325</td></tr><tr><td>245</td><td>14327</td></tr><tr><td>244</td><td>14451</td></tr><tr><td>240</td><td>14599</td></tr><tr><td>237</td><td>17764</td></tr><tr><td>235</td><td>17921</td></tr><tr><td>234</td><td>18078</td></tr><tr><td>233</td><td>18233</td></tr><tr><td>230</td><td>18234</td></tr><tr><td>227</td><td>21922</td></tr><tr><td>226</td><td>22111</td></tr><tr><td>225</td><td>22117</td></tr><tr><td>224</td><td>22271</td></tr><tr><td>222</td><td>22453</td></tr><tr><td>220</td><td>22455</td></tr><tr><td>217</td><td>26240</td></tr><tr><td>215</td><td>26416</td></tr><tr><td>214</td><td>26516</td></tr><tr><td>210</td><td>26674</td></tr><tr><td>209</td><td>30680</td></tr><tr><td>207</td><td>30682</td></tr><tr><td>206</td><td>30833</td></tr><tr><td>205</td><td>30835</td></tr><tr><td>204</td><td>30923</td></tr><tr><td>201</td><td>31036</td></tr><tr><td>200</td><td>31038</td></tr><tr><td>197</td><td>34461</td></tr><tr><td>195</td><td>34540</td></tr><tr><td>194</td><td>34594</td></tr><tr><td>190</td><td>34637</td></tr><tr><td>187</td><td>37339</td></tr><tr><td>185</td><td>37361</td></tr><tr><td>184</td><td>37369</td></tr><tr><td>180</td><td>37379</td></tr><tr><td>175</td><td>39673</td></tr><tr><td>170</td><td>39675</td></tr><tr><td>169</td><td>41999</td></tr><tr><td>160</td><td>42001</td></tr><tr><td>155</td><td>44723</td></tr><tr><td>150</td><td>44725</td></tr><tr><td>140</td><td>47836</td></tr><tr><td>130</td><td>50775</td></tr><tr><td>120</td><td>53192</td></tr><tr><td>110</td><td>54960</td></tr><tr><td>100</td><td>55942</td></tr><tr><td>90</td><td>56686</td></tr><tr><td>80</td><td>57141</td></tr><tr><td>70</td><td>57426</td></tr><tr><td>60</td><td>57542</td></tr><tr><td>50</td><td>57607</td></tr><tr><td>40</td><td>57665</td></tr><tr><td>30</td><td>57728</td></tr><tr><td>20</td><td>57742</td></tr><tr><td>0</td><td>57819</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème (participation en binôme) : 57304 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>435</td><td>1</td></tr><tr><td>425</td><td>3</td></tr><tr><td>410</td><td>5</td></tr><tr><td>405</td><td>9</td></tr><tr><td>404</td><td>11</td></tr><tr><td>403</td><td>13</td></tr><tr><td>400</td><td>15</td></tr><tr><td>390</td><td>27</td></tr><tr><td>389</td><td>39</td></tr><tr><td>387</td><td>41</td></tr><tr><td>385</td><td>43</td></tr><tr><td>384</td><td>49</td></tr><tr><td>380</td><td>51</td></tr><tr><td>375</td><td>87</td></tr><tr><td>372</td><td>95</td></tr><tr><td>370</td><td>97</td></tr><tr><td>369</td><td>172</td></tr><tr><td>367</td><td>174</td></tr><tr><td>365</td><td>182</td></tr><tr><td>364</td><td>192</td></tr><tr><td>362</td><td>198</td></tr><tr><td>360</td><td>200</td></tr><tr><td>357</td><td>348</td></tr><tr><td>355</td><td>360</td></tr><tr><td>354</td><td>390</td></tr><tr><td>350</td><td>404</td></tr><tr><td>347</td><td>653</td></tr><tr><td>346</td><td>677</td></tr><tr><td>345</td><td>679</td></tr><tr><td>344</td><td>709</td></tr><tr><td>342</td><td>727</td></tr><tr><td>340</td><td>733</td></tr><tr><td>337</td><td>1113</td></tr><tr><td>336</td><td>1157</td></tr><tr><td>335</td><td>1163</td></tr><tr><td>334</td><td>1218</td></tr><tr><td>332</td><td>1244</td></tr><tr><td>330</td><td>1246</td></tr><tr><td>327</td><td>1911</td></tr><tr><td>326</td><td>1973</td></tr><tr><td>325</td><td>1975</td></tr><tr><td>324</td><td>2025</td></tr><tr><td>323</td><td>2075</td></tr><tr><td>322</td><td>2077</td></tr><tr><td>320</td><td>2081</td></tr><tr><td>319</td><td>3089</td></tr><tr><td>317</td><td>3091</td></tr><tr><td>315</td><td>3186</td></tr><tr><td>314</td><td>3274</td></tr><tr><td>310</td><td>3320</td></tr><tr><td>307</td><td>4768</td></tr><tr><td>306</td><td>4880</td></tr><tr><td>305</td><td>4884</td></tr><tr><td>304</td><td>4974</td></tr><tr><td>300</td><td>5060</td></tr><tr><td>297</td><td>6817</td></tr><tr><td>296</td><td>6967</td></tr><tr><td>295</td><td>6973</td></tr><tr><td>294</td><td>7113</td></tr><tr><td>290</td><td>7221</td></tr><tr><td>287</td><td>9459</td></tr><tr><td>285</td><td>9635</td></tr><tr><td>284</td><td>9753</td></tr><tr><td>280</td><td>9877</td></tr><tr><td>279</td><td>12524</td></tr><tr><td>277</td><td>12526</td></tr><tr><td>275</td><td>12776</td></tr><tr><td>274</td><td>12934</td></tr><tr><td>270</td><td>13066</td></tr><tr><td>267</td><td>16052</td></tr><tr><td>266</td><td>16298</td></tr><tr><td>265</td><td>16306</td></tr><tr><td>264</td><td>16479</td></tr><tr><td>262</td><td>16643</td></tr><tr><td>260</td><td>16645</td></tr><tr><td>259</td><td>20000</td></tr><tr><td>257</td><td>20002</td></tr><tr><td>256</td><td>20281</td></tr><tr><td>255</td><td>20285</td></tr><tr><td>254</td><td>20468</td></tr><tr><td>253</td><td>20614</td></tr><tr><td>252</td><td>20616</td></tr><tr><td>250</td><td>20618</td></tr><tr><td>247</td><td>24039</td></tr><tr><td>246</td><td>24336</td></tr><tr><td>245</td><td>24340</td></tr><tr><td>244</td><td>24552</td></tr><tr><td>240</td><td>24758</td></tr><tr><td>237</td><td>28413</td></tr><tr><td>236</td><td>28679</td></tr><tr><td>235</td><td>28681</td></tr><tr><td>234</td><td>28865</td></tr><tr><td>232</td><td>29057</td></tr><tr><td>230</td><td>29059</td></tr><tr><td>229</td><td>32688</td></tr><tr><td>227</td><td>32690</td></tr><tr><td>226</td><td>32926</td></tr><tr><td>225</td><td>32930</td></tr><tr><td>224</td><td>33089</td></tr><tr><td>220</td><td>33256</td></tr><tr><td>217</td><td>36925</td></tr><tr><td>216</td><td>37111</td></tr><tr><td>215</td><td>37113</td></tr><tr><td>214</td><td>37197</td></tr><tr><td>210</td><td>37343</td></tr><tr><td>207</td><td>40465</td></tr><tr><td>205</td><td>40597</td></tr><tr><td>204</td><td>40696</td></tr><tr><td>200</td><td>40801</td></tr><tr><td>197</td><td>43391</td></tr><tr><td>195</td><td>43451</td></tr><tr><td>194</td><td>43493</td></tr><tr><td>190</td><td>43527</td></tr><tr><td>187</td><td>45499</td></tr><tr><td>185</td><td>45523</td></tr><tr><td>184</td><td>45537</td></tr><tr><td>180</td><td>45545</td></tr><tr><td>179</td><td>47162</td></tr><tr><td>173</td><td>47164</td></tr><tr><td>170</td><td>47166</td></tr><tr><td>160</td><td>48788</td></tr><tr><td>155</td><td>50576</td></tr><tr><td>150</td><td>50582</td></tr><tr><td>140</td><td>52434</td></tr><tr><td>130</td><td>54012</td></tr><tr><td>120</td><td>55203</td></tr><tr><td>110</td><td>56000</td></tr><tr><td>100</td><td>56436</td></tr><tr><td>90</td><td>56753</td></tr><tr><td>80</td><td>56893</td></tr><tr><td>70</td><td>57014</td></tr><tr><td>60</td><td>57074</td></tr><tr><td>50</td><td>57109</td></tr><tr><td>40</td><td>57136</td></tr><tr><td>30</td><td>57174</td></tr><tr><td>20</td><td>57196</td></tr><tr><td>0</td><td>57234</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème (participation en binôme) : 48444 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>460</td><td>1</td></tr><tr><td>455</td><td>3</td></tr><tr><td>430</td><td>5</td></tr><tr><td>420</td><td>7</td></tr><tr><td>410</td><td>15</td></tr><tr><td>409</td><td>23</td></tr><tr><td>407</td><td>25</td></tr><tr><td>405</td><td>27</td></tr><tr><td>404</td><td>29</td></tr><tr><td>400</td><td>33</td></tr><tr><td>397</td><td>66</td></tr><tr><td>395</td><td>70</td></tr><tr><td>390</td><td>90</td></tr><tr><td>387</td><td>134</td></tr><tr><td>386</td><td>136</td></tr><tr><td>385</td><td>140</td></tr><tr><td>384</td><td>148</td></tr><tr><td>380</td><td>154</td></tr><tr><td>379</td><td>264</td></tr><tr><td>377</td><td>266</td></tr><tr><td>375</td><td>268</td></tr><tr><td>374</td><td>290</td></tr><tr><td>372</td><td>294</td></tr><tr><td>370</td><td>296</td></tr><tr><td>367</td><td>546</td></tr><tr><td>366</td><td>552</td></tr><tr><td>365</td><td>554</td></tr><tr><td>364</td><td>592</td></tr><tr><td>362</td><td>612</td></tr><tr><td>360</td><td>616</td></tr><tr><td>357</td><td>978</td></tr><tr><td>356</td><td>1012</td></tr><tr><td>355</td><td>1014</td></tr><tr><td>354</td><td>1072</td></tr><tr><td>352</td><td>1091</td></tr><tr><td>351</td><td>1093</td></tr><tr><td>350</td><td>1095</td></tr><tr><td>347</td><td>1649</td></tr><tr><td>346</td><td>1697</td></tr><tr><td>345</td><td>1701</td></tr><tr><td>344</td><td>1765</td></tr><tr><td>342</td><td>1807</td></tr><tr><td>340</td><td>1809</td></tr><tr><td>339</td><td>2615</td></tr><tr><td>337</td><td>2617</td></tr><tr><td>336</td><td>2685</td></tr><tr><td>335</td><td>2687</td></tr><tr><td>334</td><td>2793</td></tr><tr><td>332</td><td>2833</td></tr><tr><td>330</td><td>2839</td></tr><tr><td>327</td><td>4008</td></tr><tr><td>325</td><td>4118</td></tr><tr><td>324</td><td>4222</td></tr><tr><td>322</td><td>4296</td></tr><tr><td>320</td><td>4302</td></tr><tr><td>319</td><td>5846</td></tr><tr><td>317</td><td>5848</td></tr><tr><td>316</td><td>5978</td></tr><tr><td>315</td><td>5982</td></tr><tr><td>314</td><td>6104</td></tr><tr><td>312</td><td>6172</td></tr><tr><td>310</td><td>6174</td></tr><tr><td>309</td><td>8254</td></tr><tr><td>307</td><td>8256</td></tr><tr><td>306</td><td>8462</td></tr><tr><td>305</td><td>8464</td></tr><tr><td>304</td><td>8610</td></tr><tr><td>300</td><td>8735</td></tr><tr><td>297</td><td>11065</td></tr><tr><td>295</td><td>11267</td></tr><tr><td>294</td><td>11429</td></tr><tr><td>293</td><td>11549</td></tr><tr><td>292</td><td>11553</td></tr><tr><td>290</td><td>11557</td></tr><tr><td>287</td><td>14155</td></tr><tr><td>286</td><td>14372</td></tr><tr><td>285</td><td>14378</td></tr><tr><td>284</td><td>14549</td></tr><tr><td>282</td><td>14650</td></tr><tr><td>280</td><td>14656</td></tr><tr><td>279</td><td>17581</td></tr><tr><td>277</td><td>17583</td></tr><tr><td>276</td><td>17832</td></tr><tr><td>275</td><td>17842</td></tr><tr><td>274</td><td>18026</td></tr><tr><td>273</td><td>18146</td></tr><tr><td>270</td><td>18148</td></tr><tr><td>267</td><td>21048</td></tr><tr><td>266</td><td>21267</td></tr><tr><td>265</td><td>21277</td></tr><tr><td>264</td><td>21517</td></tr><tr><td>262</td><td>21655</td></tr><tr><td>260</td><td>21659</td></tr><tr><td>257</td><td>24562</td></tr><tr><td>256</td><td>24812</td></tr><tr><td>255</td><td>24816</td></tr><tr><td>254</td><td>25002</td></tr><tr><td>252</td><td>25160</td></tr><tr><td>250</td><td>25162</td></tr><tr><td>247</td><td>28050</td></tr><tr><td>246</td><td>28300</td></tr><tr><td>245</td><td>28304</td></tr><tr><td>244</td><td>28474</td></tr><tr><td>240</td><td>28606</td></tr><tr><td>237</td><td>31387</td></tr><tr><td>236</td><td>31596</td></tr><tr><td>235</td><td>31598</td></tr><tr><td>234</td><td>31730</td></tr><tr><td>230</td><td>31852</td></tr><tr><td>227</td><td>34479</td></tr><tr><td>226</td><td>34649</td></tr><tr><td>225</td><td>34651</td></tr><tr><td>224</td><td>34770</td></tr><tr><td>220</td><td>34898</td></tr><tr><td>217</td><td>37170</td></tr><tr><td>216</td><td>37270</td></tr><tr><td>215</td><td>37272</td></tr><tr><td>214</td><td>37368</td></tr><tr><td>210</td><td>37450</td></tr><tr><td>207</td><td>39457</td></tr><tr><td>205</td><td>39513</td></tr><tr><td>204</td><td>39561</td></tr><tr><td>200</td><td>39608</td></tr><tr><td>197</td><td>41114</td></tr><tr><td>195</td><td>41136</td></tr><tr><td>194</td><td>41150</td></tr><tr><td>190</td><td>41166</td></tr><tr><td>187</td><td>42238</td></tr><tr><td>185</td><td>42242</td></tr><tr><td>184</td><td>42254</td></tr><tr><td>180</td><td>42262</td></tr><tr><td>175</td><td>43258</td></tr><tr><td>170</td><td>43260</td></tr><tr><td>168</td><td>44233</td></tr><tr><td>165</td><td>44235</td></tr><tr><td>160</td><td>44239</td></tr><tr><td>150</td><td>45260</td></tr><tr><td>145</td><td>46123</td></tr><tr><td>140</td><td>46125</td></tr><tr><td>130</td><td>46886</td></tr><tr><td>120</td><td>47400</td></tr><tr><td>110</td><td>47724</td></tr><tr><td>100</td><td>47955</td></tr><tr><td>90</td><td>48089</td></tr><tr><td>80</td><td>48191</td></tr><tr><td>70</td><td>48254</td></tr><tr><td>60</td><td>48286</td></tr><tr><td>50</td><td>48312</td></tr><tr><td>40</td><td>48326</td></tr><tr><td>30</td><td>48332</td></tr><tr><td>20</td><td>48342</td></tr><tr><td>0</td><td>48368</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème (participation en binôme) : 42588 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>459</td><td>1</td></tr><tr><td>455</td><td>3</td></tr><tr><td>440</td><td>5</td></tr><tr><td>435</td><td>9</td></tr><tr><td>432</td><td>11</td></tr><tr><td>430</td><td>13</td></tr><tr><td>420</td><td>21</td></tr><tr><td>417</td><td>37</td></tr><tr><td>415</td><td>39</td></tr><tr><td>414</td><td>41</td></tr><tr><td>412</td><td>43</td></tr><tr><td>410</td><td>45</td></tr><tr><td>409</td><td>73</td></tr><tr><td>407</td><td>75</td></tr><tr><td>405</td><td>81</td></tr><tr><td>404</td><td>99</td></tr><tr><td>402</td><td>101</td></tr><tr><td>400</td><td>105</td></tr><tr><td>397</td><td>168</td></tr><tr><td>396</td><td>178</td></tr><tr><td>395</td><td>180</td></tr><tr><td>394</td><td>210</td></tr><tr><td>392</td><td>214</td></tr><tr><td>390</td><td>218</td></tr><tr><td>389</td><td>334</td></tr><tr><td>387</td><td>338</td></tr><tr><td>386</td><td>350</td></tr><tr><td>385</td><td>354</td></tr><tr><td>384</td><td>390</td></tr><tr><td>382</td><td>396</td></tr><tr><td>381</td><td>400</td></tr><tr><td>380</td><td>402</td></tr><tr><td>379</td><td>638</td></tr><tr><td>377</td><td>640</td></tr><tr><td>376</td><td>658</td></tr><tr><td>375</td><td>662</td></tr><tr><td>374</td><td>726</td></tr><tr><td>371</td><td>742</td></tr><tr><td>370</td><td>744</td></tr><tr><td>369</td><td>1167</td></tr><tr><td>367</td><td>1171</td></tr><tr><td>366</td><td>1201</td></tr><tr><td>365</td><td>1203</td></tr><tr><td>364</td><td>1290</td></tr><tr><td>362</td><td>1327</td></tr><tr><td>360</td><td>1331</td></tr><tr><td>357</td><td>1981</td></tr><tr><td>356</td><td>2047</td></tr><tr><td>355</td><td>2051</td></tr><tr><td>354</td><td>2147</td></tr><tr><td>350</td><td>2213</td></tr><tr><td>349</td><td>3188</td></tr><tr><td>347</td><td>3190</td></tr><tr><td>346</td><td>3270</td></tr><tr><td>345</td><td>3278</td></tr><tr><td>344</td><td>3390</td></tr><tr><td>342</td><td>3446</td></tr><tr><td>340</td><td>3458</td></tr><tr><td>339</td><td>4698</td></tr><tr><td>337</td><td>4700</td></tr><tr><td>336</td><td>4780</td></tr><tr><td>335</td><td>4786</td></tr><tr><td>334</td><td>4904</td></tr><tr><td>332</td><td>4971</td></tr><tr><td>331</td><td>4973</td></tr><tr><td>330</td><td>4975</td></tr><tr><td>329</td><td>6589</td></tr><tr><td>327</td><td>6591</td></tr><tr><td>326</td><td>6716</td></tr><tr><td>325</td><td>6720</td></tr><tr><td>324</td><td>6844</td></tr><tr><td>322</td><td>6930</td></tr><tr><td>320</td><td>6942</td></tr><tr><td>317</td><td>8873</td></tr><tr><td>316</td><td>9012</td></tr><tr><td>315</td><td>9022</td></tr><tr><td>314</td><td>9174</td></tr><tr><td>312</td><td>9296</td></tr><tr><td>310</td><td>9300</td></tr><tr><td>308</td><td>11573</td></tr><tr><td>307</td><td>11575</td></tr><tr><td>306</td><td>11729</td></tr><tr><td>305</td><td>11741</td></tr><tr><td>304</td><td>11897</td></tr><tr><td>302</td><td>12010</td></tr><tr><td>300</td><td>12012</td></tr><tr><td>297</td><td>14412</td></tr><tr><td>296</td><td>14664</td></tr><tr><td>295</td><td>14674</td></tr><tr><td>294</td><td>14881</td></tr><tr><td>292</td><td>15015</td></tr><tr><td>290</td><td>15021</td></tr><tr><td>287</td><td>17700</td></tr><tr><td>286</td><td>17905</td></tr><tr><td>285</td><td>17911</td></tr><tr><td>284</td><td>18092</td></tr><tr><td>280</td><td>18235</td></tr><tr><td>279</td><td>20965</td></tr><tr><td>278</td><td>20969</td></tr><tr><td>277</td><td>20971</td></tr><tr><td>276</td><td>21162</td></tr><tr><td>275</td><td>21166</td></tr><tr><td>274</td><td>21294</td></tr><tr><td>272</td><td>21452</td></tr><tr><td>270</td><td>21454</td></tr><tr><td>267</td><td>24110</td></tr><tr><td>266</td><td>24345</td></tr><tr><td>265</td><td>24355</td></tr><tr><td>264</td><td>24487</td></tr><tr><td>260</td><td>24613</td></tr><tr><td>259</td><td>27044</td></tr><tr><td>257</td><td>27046</td></tr><tr><td>256</td><td>27228</td></tr><tr><td>255</td><td>27230</td></tr><tr><td>254</td><td>27388</td></tr><tr><td>252</td><td>27516</td></tr><tr><td>250</td><td>27520</td></tr><tr><td>247</td><td>29799</td></tr><tr><td>246</td><td>29968</td></tr><tr><td>245</td><td>29970</td></tr><tr><td>244</td><td>30100</td></tr><tr><td>240</td><td>30216</td></tr><tr><td>237</td><td>32183</td></tr><tr><td>235</td><td>32301</td></tr><tr><td>234</td><td>32393</td></tr><tr><td>230</td><td>32471</td></tr><tr><td>227</td><td>34298</td></tr><tr><td>225</td><td>34387</td></tr><tr><td>224</td><td>34451</td></tr><tr><td>220</td><td>34523</td></tr><tr><td>217</td><td>36043</td></tr><tr><td>216</td><td>36102</td></tr><tr><td>215</td><td>36106</td></tr><tr><td>214</td><td>36144</td></tr><tr><td>210</td><td>36166</td></tr><tr><td>207</td><td>37290</td></tr><tr><td>205</td><td>37318</td></tr><tr><td>204</td><td>37350</td></tr><tr><td>200</td><td>37364</td></tr><tr><td>197</td><td>38295</td></tr><tr><td>195</td><td>38305</td></tr><tr><td>194</td><td>38321</td></tr><tr><td>190</td><td>38327</td></tr><tr><td>187</td><td>39069</td></tr><tr><td>185</td><td>39073</td></tr><tr><td>184</td><td>39081</td></tr><tr><td>180</td><td>39085</td></tr><tr><td>170</td><td>39670</td></tr><tr><td>160</td><td>40240</td></tr><tr><td>150</td><td>40797</td></tr><tr><td>145</td><td>41211</td></tr><tr><td>140</td><td>41213</td></tr><tr><td>130</td><td>41660</td></tr><tr><td>120</td><td>41912</td></tr><tr><td>110</td><td>42119</td></tr><tr><td>100</td><td>42249</td></tr><tr><td>90</td><td>42327</td></tr><tr><td>80</td><td>42373</td></tr><tr><td>70</td><td>42415</td></tr><tr><td>60</td><td>42429</td></tr><tr><td>50</td><td>42457</td></tr><tr><td>40</td><td>42479</td></tr><tr><td>30</td><td>42501</td></tr><tr><td>20</td><td>42507</td></tr><tr><td>0</td><td>42539</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde (participation en binôme) : 21396 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>470</td><td>1</td></tr><tr><td>467</td><td>3</td></tr><tr><td>450</td><td>5</td></tr><tr><td>445</td><td>11</td></tr><tr><td>440</td><td>15</td></tr><tr><td>430</td><td>19</td></tr><tr><td>425</td><td>25</td></tr><tr><td>424</td><td>33</td></tr><tr><td>420</td><td>35</td></tr><tr><td>417</td><td>53</td></tr><tr><td>416</td><td>55</td></tr><tr><td>415</td><td>59</td></tr><tr><td>410</td><td>65</td></tr><tr><td>409</td><td>116</td></tr><tr><td>407</td><td>118</td></tr><tr><td>405</td><td>124</td></tr><tr><td>404</td><td>136</td></tr><tr><td>400</td><td>140</td></tr><tr><td>397</td><td>211</td></tr><tr><td>396</td><td>227</td></tr><tr><td>395</td><td>231</td></tr><tr><td>394</td><td>265</td></tr><tr><td>390</td><td>271</td></tr><tr><td>387</td><td>429</td></tr><tr><td>386</td><td>447</td></tr><tr><td>385</td><td>449</td></tr><tr><td>384</td><td>485</td></tr><tr><td>382</td><td>499</td></tr><tr><td>380</td><td>503</td></tr><tr><td>379</td><td>762</td></tr><tr><td>377</td><td>766</td></tr><tr><td>376</td><td>784</td></tr><tr><td>375</td><td>786</td></tr><tr><td>374</td><td>832</td></tr><tr><td>372</td><td>854</td></tr><tr><td>370</td><td>856</td></tr><tr><td>369</td><td>1284</td></tr><tr><td>367</td><td>1286</td></tr><tr><td>366</td><td>1312</td></tr><tr><td>365</td><td>1316</td></tr><tr><td>364</td><td>1420</td></tr><tr><td>362</td><td>1445</td></tr><tr><td>360</td><td>1447</td></tr><tr><td>357</td><td>2096</td></tr><tr><td>356</td><td>2146</td></tr><tr><td>355</td><td>2154</td></tr><tr><td>354</td><td>2234</td></tr><tr><td>352</td><td>2274</td></tr><tr><td>350</td><td>2284</td></tr><tr><td>349</td><td>3065</td></tr><tr><td>347</td><td>3071</td></tr><tr><td>346</td><td>3133</td></tr><tr><td>345</td><td>3141</td></tr><tr><td>344</td><td>3249</td></tr><tr><td>343</td><td>3295</td></tr><tr><td>342</td><td>3297</td></tr><tr><td>340</td><td>3301</td></tr><tr><td>339</td><td>4354</td></tr><tr><td>337</td><td>4362</td></tr><tr><td>336</td><td>4453</td></tr><tr><td>335</td><td>4461</td></tr><tr><td>334</td><td>4578</td></tr><tr><td>332</td><td>4631</td></tr><tr><td>330</td><td>4635</td></tr><tr><td>329</td><td>5952</td></tr><tr><td>327</td><td>5956</td></tr><tr><td>326</td><td>6042</td></tr><tr><td>325</td><td>6058</td></tr><tr><td>324</td><td>6174</td></tr><tr><td>322</td><td>6232</td></tr><tr><td>320</td><td>6234</td></tr><tr><td>317</td><td>7605</td></tr><tr><td>316</td><td>7691</td></tr><tr><td>315</td><td>7701</td></tr><tr><td>314</td><td>7793</td></tr><tr><td>312</td><td>7867</td></tr><tr><td>311</td><td>7869</td></tr><tr><td>310</td><td>7871</td></tr><tr><td>307</td><td>9255</td></tr><tr><td>306</td><td>9358</td></tr><tr><td>305</td><td>9360</td></tr><tr><td>304</td><td>9438</td></tr><tr><td>303</td><td>9516</td></tr><tr><td>302</td><td>9518</td></tr><tr><td>300</td><td>9520</td></tr><tr><td>299</td><td>10998</td></tr><tr><td>297</td><td>11000</td></tr><tr><td>296</td><td>11095</td></tr><tr><td>295</td><td>11099</td></tr><tr><td>294</td><td>11201</td></tr><tr><td>292</td><td>11265</td></tr><tr><td>291</td><td>11267</td></tr><tr><td>290</td><td>11269</td></tr><tr><td>287</td><td>12618</td></tr><tr><td>286</td><td>12702</td></tr><tr><td>285</td><td>12706</td></tr><tr><td>284</td><td>12793</td></tr><tr><td>280</td><td>12855</td></tr><tr><td>277</td><td>14106</td></tr><tr><td>276</td><td>14192</td></tr><tr><td>275</td><td>14194</td></tr><tr><td>274</td><td>14282</td></tr><tr><td>270</td><td>14340</td></tr><tr><td>269</td><td>15456</td></tr><tr><td>267</td><td>15458</td></tr><tr><td>266</td><td>15522</td></tr><tr><td>265</td><td>15528</td></tr><tr><td>264</td><td>15594</td></tr><tr><td>263</td><td>15640</td></tr><tr><td>260</td><td>15644</td></tr><tr><td>259</td><td>16557</td></tr><tr><td>257</td><td>16559</td></tr><tr><td>255</td><td>16631</td></tr><tr><td>254</td><td>16691</td></tr><tr><td>252</td><td>16727</td></tr><tr><td>250</td><td>16729</td></tr><tr><td>247</td><td>17521</td></tr><tr><td>246</td><td>17555</td></tr><tr><td>245</td><td>17559</td></tr><tr><td>244</td><td>17593</td></tr><tr><td>240</td><td>17615</td></tr><tr><td>237</td><td>18318</td></tr><tr><td>236</td><td>18348</td></tr><tr><td>235</td><td>18350</td></tr><tr><td>234</td><td>18368</td></tr><tr><td>230</td><td>18384</td></tr><tr><td>227</td><td>18998</td></tr><tr><td>226</td><td>19012</td></tr><tr><td>225</td><td>19014</td></tr><tr><td>224</td><td>19036</td></tr><tr><td>220</td><td>19044</td></tr><tr><td>217</td><td>19506</td></tr><tr><td>215</td><td>19525</td></tr><tr><td>214</td><td>19539</td></tr><tr><td>210</td><td>19553</td></tr><tr><td>207</td><td>19889</td></tr><tr><td>205</td><td>19893</td></tr><tr><td>204</td><td>19901</td></tr><tr><td>200</td><td>19903</td></tr><tr><td>197</td><td>20181</td></tr><tr><td>195</td><td>20185</td></tr><tr><td>194</td><td>20187</td></tr><tr><td>190</td><td>20189</td></tr><tr><td>180</td><td>20423</td></tr><tr><td>175</td><td>20630</td></tr><tr><td>170</td><td>20632</td></tr><tr><td>165</td><td>20786</td></tr><tr><td>160</td><td>20788</td></tr><tr><td>155</td><td>20910</td></tr><tr><td>150</td><td>20912</td></tr><tr><td>140</td><td>20991</td></tr><tr><td>130</td><td>21081</td></tr><tr><td>120</td><td>21127</td></tr><tr><td>110</td><td>21166</td></tr><tr><td>100</td><td>21210</td></tr><tr><td>90</td><td>21237</td></tr><tr><td>80</td><td>21257</td></tr><tr><td>70</td><td>21270</td></tr><tr><td>60</td><td>21286</td></tr><tr><td>50</td><td>21290</td></tr><tr><td>40</td><td>21299</td></tr><tr><td>30</td><td>21307</td></tr><tr><td>20</td><td>21317</td></tr><tr><td>0</td><td>21337</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première (participation en binôme) : 8977 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>465</td><td>7</td></tr><tr><td>455</td><td>9</td></tr><tr><td>454</td><td>13</td></tr><tr><td>450</td><td>15</td></tr><tr><td>447</td><td>21</td></tr><tr><td>445</td><td>23</td></tr><tr><td>444</td><td>25</td></tr><tr><td>440</td><td>27</td></tr><tr><td>437</td><td>37</td></tr><tr><td>436</td><td>39</td></tr><tr><td>435</td><td>41</td></tr><tr><td>434</td><td>47</td></tr><tr><td>432</td><td>49</td></tr><tr><td>430</td><td>51</td></tr><tr><td>427</td><td>77</td></tr><tr><td>425</td><td>81</td></tr><tr><td>424</td><td>89</td></tr><tr><td>420</td><td>91</td></tr><tr><td>417</td><td>137</td></tr><tr><td>416</td><td>141</td></tr><tr><td>415</td><td>143</td></tr><tr><td>414</td><td>157</td></tr><tr><td>412</td><td>159</td></tr><tr><td>410</td><td>161</td></tr><tr><td>409</td><td>243</td></tr><tr><td>407</td><td>245</td></tr><tr><td>405</td><td>251</td></tr><tr><td>404</td><td>279</td></tr><tr><td>402</td><td>283</td></tr><tr><td>400</td><td>285</td></tr><tr><td>399</td><td>424</td></tr><tr><td>397</td><td>426</td></tr><tr><td>396</td><td>434</td></tr><tr><td>395</td><td>436</td></tr><tr><td>394</td><td>486</td></tr><tr><td>390</td><td>494</td></tr><tr><td>387</td><td>678</td></tr><tr><td>386</td><td>696</td></tr><tr><td>385</td><td>702</td></tr><tr><td>384</td><td>746</td></tr><tr><td>381</td><td>766</td></tr><tr><td>380</td><td>768</td></tr><tr><td>379</td><td>1055</td></tr><tr><td>377</td><td>1057</td></tr><tr><td>376</td><td>1093</td></tr><tr><td>375</td><td>1095</td></tr><tr><td>374</td><td>1147</td></tr><tr><td>372</td><td>1171</td></tr><tr><td>370</td><td>1175</td></tr><tr><td>369</td><td>1493</td></tr><tr><td>367</td><td>1495</td></tr><tr><td>366</td><td>1525</td></tr><tr><td>365</td><td>1535</td></tr><tr><td>364</td><td>1628</td></tr><tr><td>363</td><td>1650</td></tr><tr><td>360</td><td>1652</td></tr><tr><td>359</td><td>2080</td></tr><tr><td>357</td><td>2082</td></tr><tr><td>356</td><td>2106</td></tr><tr><td>355</td><td>2114</td></tr><tr><td>354</td><td>2174</td></tr><tr><td>352</td><td>2192</td></tr><tr><td>350</td><td>2194</td></tr><tr><td>349</td><td>2669</td></tr><tr><td>347</td><td>2671</td></tr><tr><td>346</td><td>2695</td></tr><tr><td>345</td><td>2699</td></tr><tr><td>344</td><td>2759</td></tr><tr><td>340</td><td>2791</td></tr><tr><td>339</td><td>3379</td></tr><tr><td>337</td><td>3381</td></tr><tr><td>336</td><td>3441</td></tr><tr><td>335</td><td>3453</td></tr><tr><td>334</td><td>3514</td></tr><tr><td>332</td><td>3544</td></tr><tr><td>330</td><td>3546</td></tr><tr><td>329</td><td>4121</td></tr><tr><td>327</td><td>4123</td></tr><tr><td>326</td><td>4157</td></tr><tr><td>325</td><td>4159</td></tr><tr><td>324</td><td>4227</td></tr><tr><td>320</td><td>4252</td></tr><tr><td>317</td><td>4783</td></tr><tr><td>316</td><td>4811</td></tr><tr><td>315</td><td>4813</td></tr><tr><td>314</td><td>4843</td></tr><tr><td>310</td><td>4857</td></tr><tr><td>309</td><td>5469</td></tr><tr><td>307</td><td>5471</td></tr><tr><td>306</td><td>5503</td></tr><tr><td>305</td><td>5505</td></tr><tr><td>304</td><td>5551</td></tr><tr><td>300</td><td>5585</td></tr><tr><td>297</td><td>6107</td></tr><tr><td>296</td><td>6143</td></tr><tr><td>295</td><td>6147</td></tr><tr><td>294</td><td>6177</td></tr><tr><td>290</td><td>6201</td></tr><tr><td>287</td><td>6617</td></tr><tr><td>286</td><td>6641</td></tr><tr><td>285</td><td>6645</td></tr><tr><td>284</td><td>6679</td></tr><tr><td>280</td><td>6703</td></tr><tr><td>277</td><td>7065</td></tr><tr><td>275</td><td>7083</td></tr><tr><td>274</td><td>7103</td></tr><tr><td>270</td><td>7113</td></tr><tr><td>267</td><td>7448</td></tr><tr><td>265</td><td>7472</td></tr><tr><td>264</td><td>7496</td></tr><tr><td>260</td><td>7498</td></tr><tr><td>257</td><td>7786</td></tr><tr><td>255</td><td>7798</td></tr><tr><td>254</td><td>7814</td></tr><tr><td>250</td><td>7824</td></tr><tr><td>247</td><td>8058</td></tr><tr><td>245</td><td>8070</td></tr><tr><td>244</td><td>8082</td></tr><tr><td>240</td><td>8086</td></tr><tr><td>237</td><td>8278</td></tr><tr><td>235</td><td>8282</td></tr><tr><td>234</td><td>8288</td></tr><tr><td>230</td><td>8294</td></tr><tr><td>227</td><td>8438</td></tr><tr><td>225</td><td>8446</td></tr><tr><td>224</td><td>8450</td></tr><tr><td>220</td><td>8452</td></tr><tr><td>217</td><td>8573</td></tr><tr><td>214</td><td>8577</td></tr><tr><td>210</td><td>8579</td></tr><tr><td>205</td><td>8665</td></tr><tr><td>200</td><td>8667</td></tr><tr><td>190</td><td>8710</td></tr><tr><td>180</td><td>8769</td></tr><tr><td>170</td><td>8820</td></tr><tr><td>165</td><td>8848</td></tr><tr><td>160</td><td>8850</td></tr><tr><td>155</td><td>8872</td></tr><tr><td>150</td><td>8874</td></tr><tr><td>140</td><td>8890</td></tr><tr><td>130</td><td>8900</td></tr><tr><td>120</td><td>8914</td></tr><tr><td>110</td><td>8924</td></tr><tr><td>100</td><td>8933</td></tr><tr><td>90</td><td>8938</td></tr><tr><td>80</td><td>8942</td></tr><tr><td>70</td><td>8946</td></tr><tr><td>60</td><td>8950</td></tr><tr><td>40</td><td>8954</td></tr><tr><td>30</td><td>8958</td></tr><tr><td>20</td><td>8962</td></tr><tr><td>0</td><td>8968</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale (participation en binôme) : 5336 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>475</td><td>15</td></tr><tr><td>470</td><td>17</td></tr><tr><td>465</td><td>23</td></tr><tr><td>460</td><td>25</td></tr><tr><td>455</td><td>29</td></tr><tr><td>454</td><td>31</td></tr><tr><td>450</td><td>33</td></tr><tr><td>447</td><td>41</td></tr><tr><td>446</td><td>45</td></tr><tr><td>445</td><td>47</td></tr><tr><td>444</td><td>49</td></tr><tr><td>440</td><td>51</td></tr><tr><td>437</td><td>69</td></tr><tr><td>436</td><td>71</td></tr><tr><td>435</td><td>73</td></tr><tr><td>434</td><td>83</td></tr><tr><td>432</td><td>89</td></tr><tr><td>430</td><td>91</td></tr><tr><td>427</td><td>129</td></tr><tr><td>426</td><td>131</td></tr><tr><td>425</td><td>135</td></tr><tr><td>424</td><td>147</td></tr><tr><td>420</td><td>151</td></tr><tr><td>417</td><td>189</td></tr><tr><td>415</td><td>191</td></tr><tr><td>414</td><td>221</td></tr><tr><td>410</td><td>225</td></tr><tr><td>407</td><td>287</td></tr><tr><td>405</td><td>293</td></tr><tr><td>404</td><td>319</td></tr><tr><td>400</td><td>327</td></tr><tr><td>399</td><td>433</td></tr><tr><td>397</td><td>435</td></tr><tr><td>396</td><td>451</td></tr><tr><td>395</td><td>453</td></tr><tr><td>394</td><td>484</td></tr><tr><td>390</td><td>488</td></tr><tr><td>387</td><td>647</td></tr><tr><td>386</td><td>665</td></tr><tr><td>385</td><td>669</td></tr><tr><td>384</td><td>705</td></tr><tr><td>382</td><td>713</td></tr><tr><td>380</td><td>715</td></tr><tr><td>379</td><td>909</td></tr><tr><td>377</td><td>911</td></tr><tr><td>376</td><td>921</td></tr><tr><td>375</td><td>925</td></tr><tr><td>374</td><td>969</td></tr><tr><td>371</td><td>977</td></tr><tr><td>370</td><td>979</td></tr><tr><td>367</td><td>1225</td></tr><tr><td>365</td><td>1229</td></tr><tr><td>364</td><td>1271</td></tr><tr><td>362</td><td>1287</td></tr><tr><td>360</td><td>1289</td></tr><tr><td>359</td><td>1591</td></tr><tr><td>357</td><td>1595</td></tr><tr><td>356</td><td>1617</td></tr><tr><td>355</td><td>1621</td></tr><tr><td>354</td><td>1663</td></tr><tr><td>352</td><td>1677</td></tr><tr><td>350</td><td>1681</td></tr><tr><td>347</td><td>2015</td></tr><tr><td>345</td><td>2035</td></tr><tr><td>344</td><td>2073</td></tr><tr><td>342</td><td>2083</td></tr><tr><td>340</td><td>2085</td></tr><tr><td>337</td><td>2471</td></tr><tr><td>336</td><td>2495</td></tr><tr><td>335</td><td>2498</td></tr><tr><td>334</td><td>2530</td></tr><tr><td>330</td><td>2546</td></tr><tr><td>327</td><td>2899</td></tr><tr><td>325</td><td>2929</td></tr><tr><td>324</td><td>2951</td></tr><tr><td>322</td><td>2963</td></tr><tr><td>320</td><td>2965</td></tr><tr><td>317</td><td>3291</td></tr><tr><td>316</td><td>3303</td></tr><tr><td>315</td><td>3305</td></tr><tr><td>314</td><td>3337</td></tr><tr><td>310</td><td>3367</td></tr><tr><td>307</td><td>3678</td></tr><tr><td>305</td><td>3700</td></tr><tr><td>304</td><td>3730</td></tr><tr><td>302</td><td>3738</td></tr><tr><td>300</td><td>3740</td></tr><tr><td>297</td><td>4014</td></tr><tr><td>295</td><td>4022</td></tr><tr><td>294</td><td>4036</td></tr><tr><td>290</td><td>4048</td></tr><tr><td>287</td><td>4258</td></tr><tr><td>286</td><td>4272</td></tr><tr><td>285</td><td>4274</td></tr><tr><td>284</td><td>4284</td></tr><tr><td>283</td><td>4300</td></tr><tr><td>280</td><td>4302</td></tr><tr><td>277</td><td>4487</td></tr><tr><td>275</td><td>4489</td></tr><tr><td>274</td><td>4501</td></tr><tr><td>270</td><td>4517</td></tr><tr><td>267</td><td>4653</td></tr><tr><td>265</td><td>4655</td></tr><tr><td>264</td><td>4665</td></tr><tr><td>260</td><td>4673</td></tr><tr><td>257</td><td>4784</td></tr><tr><td>255</td><td>4794</td></tr><tr><td>254</td><td>4800</td></tr><tr><td>250</td><td>4802</td></tr><tr><td>245</td><td>4897</td></tr><tr><td>244</td><td>4899</td></tr><tr><td>240</td><td>4901</td></tr><tr><td>237</td><td>4991</td></tr><tr><td>230</td><td>4995</td></tr><tr><td>220</td><td>5049</td></tr><tr><td>210</td><td>5113</td></tr><tr><td>205</td><td>5155</td></tr><tr><td>200</td><td>5157</td></tr><tr><td>190</td><td>5176</td></tr><tr><td>180</td><td>5210</td></tr><tr><td>170</td><td>5232</td></tr><tr><td>160</td><td>5255</td></tr><tr><td>150</td><td>5273</td></tr><tr><td>140</td><td>5281</td></tr><tr><td>130</td><td>5287</td></tr><tr><td>120</td><td>5289</td></tr><tr><td>100</td><td>5295</td></tr><tr><td>90</td><td>5303</td></tr><tr><td>80</td><td>5306</td></tr><tr><td>50</td><td>5308</td></tr><tr><td>40</td><td>5309</td></tr><tr><td>30</td><td>5311</td></tr><tr><td>20</td><td>5315</td></tr><tr><td>0</td><td>5325</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro. (participation en binôme) : 440 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>375</td><td>3</td></tr><tr><td>360</td><td>5</td></tr><tr><td>350</td><td>13</td></tr><tr><td>342</td><td>19</td></tr><tr><td>340</td><td>21</td></tr><tr><td>335</td><td>24</td></tr><tr><td>330</td><td>26</td></tr><tr><td>324</td><td>37</td></tr><tr><td>320</td><td>39</td></tr><tr><td>316</td><td>51</td></tr><tr><td>314</td><td>53</td></tr><tr><td>310</td><td>55</td></tr><tr><td>307</td><td>73</td></tr><tr><td>304</td><td>79</td></tr><tr><td>300</td><td>81</td></tr><tr><td>297</td><td>97</td></tr><tr><td>295</td><td>98</td></tr><tr><td>294</td><td>104</td></tr><tr><td>290</td><td>106</td></tr><tr><td>287</td><td>133</td></tr><tr><td>285</td><td>141</td></tr><tr><td>284</td><td>142</td></tr><tr><td>280</td><td>146</td></tr><tr><td>277</td><td>187</td></tr><tr><td>274</td><td>189</td></tr><tr><td>270</td><td>191</td></tr><tr><td>267</td><td>218</td></tr><tr><td>264</td><td>220</td></tr><tr><td>260</td><td>222</td></tr><tr><td>257</td><td>250</td></tr><tr><td>255</td><td>254</td></tr><tr><td>254</td><td>256</td></tr><tr><td>250</td><td>258</td></tr><tr><td>240</td><td>283</td></tr><tr><td>235</td><td>312</td></tr><tr><td>230</td><td>314</td></tr><tr><td>220</td><td>342</td></tr><tr><td>215</td><td>358</td></tr><tr><td>210</td><td>360</td></tr><tr><td>200</td><td>368</td></tr><tr><td>190</td><td>380</td></tr><tr><td>180</td><td>388</td></tr><tr><td>170</td><td>394</td></tr><tr><td>160</td><td>402</td></tr><tr><td>150</td><td>416</td></tr><tr><td>140</td><td>422</td></tr><tr><td>130</td><td>434</td></tr><tr><td>110</td><td>436</td></tr><tr><td>100</td><td>438</td></tr><tr><td>0</td><td>439</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première pro. (participation en binôme) : 233 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>395</td><td>1</td></tr><tr><td>390</td><td>2</td></tr><tr><td>365</td><td>4</td></tr><tr><td>357</td><td>7</td></tr><tr><td>355</td><td>9</td></tr><tr><td>344</td><td>13</td></tr><tr><td>340</td><td>15</td></tr><tr><td>330</td><td>16</td></tr><tr><td>320</td><td>22</td></tr><tr><td>310</td><td>28</td></tr><tr><td>300</td><td>34</td></tr><tr><td>296</td><td>47</td></tr><tr><td>295</td><td>49</td></tr><tr><td>290</td><td>51</td></tr><tr><td>287</td><td>65</td></tr><tr><td>285</td><td>67</td></tr><tr><td>280</td><td>71</td></tr><tr><td>270</td><td>93</td></tr><tr><td>264</td><td>103</td></tr><tr><td>260</td><td>105</td></tr><tr><td>257</td><td>109</td></tr><tr><td>250</td><td>111</td></tr><tr><td>247</td><td>121</td></tr><tr><td>245</td><td>123</td></tr><tr><td>240</td><td>127</td></tr><tr><td>237</td><td>139</td></tr><tr><td>235</td><td>145</td></tr><tr><td>230</td><td>147</td></tr><tr><td>220</td><td>165</td></tr><tr><td>210</td><td>178</td></tr><tr><td>200</td><td>188</td></tr><tr><td>190</td><td>194</td></tr><tr><td>180</td><td>201</td></tr><tr><td>170</td><td>211</td></tr><tr><td>160</td><td>221</td></tr><tr><td>150</td><td>223</td></tr><tr><td>140</td><td>224</td></tr><tr><td>120</td><td>226</td></tr><tr><td>110</td><td>228</td></tr><tr><td>100</td><td>230</td></tr><tr><td>0</td><td>232</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-455965778962240640-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale pro. (participation en binôme) : 204 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-455965778962240640-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-455965778962240640-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>390</td><td>1</td></tr><tr><td>380</td><td>2</td></tr><tr><td>375</td><td>4</td></tr><tr><td>370</td><td>6</td></tr><tr><td>364</td><td>8</td></tr><tr><td>355</td><td>10</td></tr><tr><td>354</td><td>12</td></tr><tr><td>350</td><td>14</td></tr><tr><td>340</td><td>18</td></tr><tr><td>336</td><td>24</td></tr><tr><td>335</td><td>25</td></tr><tr><td>330</td><td>27</td></tr><tr><td>327</td><td>29</td></tr><tr><td>324</td><td>30</td></tr><tr><td>320</td><td>32</td></tr><tr><td>315</td><td>38</td></tr><tr><td>314</td><td>40</td></tr><tr><td>310</td><td>42</td></tr><tr><td>300</td><td>48</td></tr><tr><td>290</td><td>56</td></tr><tr><td>285</td><td>64</td></tr><tr><td>280</td><td>68</td></tr><tr><td>277</td><td>74</td></tr><tr><td>270</td><td>76</td></tr><tr><td>260</td><td>97</td></tr><tr><td>250</td><td>106</td></tr><tr><td>240</td><td>118</td></tr><tr><td>237</td><td>124</td></tr><tr><td>230</td><td>126</td></tr><tr><td>220</td><td>138</td></tr><tr><td>210</td><td>140</td></tr><tr><td>200</td><td>151</td></tr><tr><td>190</td><td>157</td></tr><tr><td>180</td><td>162</td></tr><tr><td>170</td><td>169</td></tr><tr><td>160</td><td>175</td></tr><tr><td>150</td><td>178</td></tr><tr><td>140</td><td>179</td></tr><tr><td>130</td><td>181</td></tr><tr><td>80</td><td>185</td></tr><tr><td>70</td><td>191</td></tr><tr><td>50</td><td>193</td></tr><tr><td>40</td><td>194</td></tr><tr><td>20</td><td>195</td></tr><tr><td>0</td><td>197</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
