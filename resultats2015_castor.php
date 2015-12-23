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

<!--<li>344923 élèves ont participé, dont 49% de filles.</li>
<li>2284 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-54-4-1'><a href='#tabs-54-4-1'>CM1</a></li><li class='nbContestants1' id='link-54-5-1'><a href='#tabs-54-5-1'>CM2</a></li><li class='nbContestants1' id='link-54-6-1'><a href='#tabs-54-6-1'>6ème</a></li><li class='nbContestants1' id='link-54-7-1'><a href='#tabs-54-7-1'>5ème</a></li><li class='nbContestants1' id='link-54-8-1'><a href='#tabs-54-8-1'>4ème</a></li><li class='nbContestants1' id='link-54-9-1'><a href='#tabs-54-9-1'>3ème</a></li><li class='nbContestants1' id='link-54-10-1'><a href='#tabs-54-10-1'>Seconde</a></li><li class='nbContestants1' id='link-54-11-1'><a href='#tabs-54-11-1'>Première</a></li><li class='nbContestants1' id='link-54-12-1'><a href='#tabs-54-12-1'>Terminale</a></li><li class='nbContestants1' id='link-54-13-1'><a href='#tabs-54-13-1'>Seconde pro.</a></li><li class='nbContestants1' id='link-54-14-1'><a href='#tabs-54-14-1'>Première pro.</a></li><li class='nbContestants1' id='link-54-15-1'><a href='#tabs-54-15-1'>Terminale pro.</a></li><li class='nbContestants2' id='link-54-4-2'><a href='#tabs-54-4-2'>CM1</a></li><li class='nbContestants2' id='link-54-5-2'><a href='#tabs-54-5-2'>CM2</a></li><li class='nbContestants2' id='link-54-6-2'><a href='#tabs-54-6-2'>6ème</a></li><li class='nbContestants2' id='link-54-7-2'><a href='#tabs-54-7-2'>5ème</a></li><li class='nbContestants2' id='link-54-8-2'><a href='#tabs-54-8-2'>4ème</a></li><li class='nbContestants2' id='link-54-9-2'><a href='#tabs-54-9-2'>3ème</a></li><li class='nbContestants2' id='link-54-10-2'><a href='#tabs-54-10-2'>Seconde</a></li><li class='nbContestants2' id='link-54-11-2'><a href='#tabs-54-11-2'>Première</a></li><li class='nbContestants2' id='link-54-12-2'><a href='#tabs-54-12-2'>Terminale</a></li><li class='nbContestants2' id='link-54-13-2'><a href='#tabs-54-13-2'>Seconde pro.</a></li><li class='nbContestants2' id='link-54-14-2'><a href='#tabs-54-14-2'>Première pro.</a></li><li class='nbContestants2' id='link-54-15-2'><a href='#tabs-54-15-2'>Terminale pro.</a></li></ul><div id='tabs-54-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 1784 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>406</td><td>1</td></tr><tr><td>394</td><td>2</td></tr><tr><td>385</td><td>3</td></tr><tr><td>375</td><td>4</td></tr><tr><td>373</td><td>5</td></tr><tr><td>372</td><td>7</td></tr><tr><td>368</td><td>8</td></tr><tr><td>360</td><td>9</td></tr><tr><td>358</td><td>11</td></tr><tr><td>355</td><td>12</td></tr><tr><td>354</td><td>13</td></tr><tr><td>353</td><td>15</td></tr><tr><td>350</td><td>16</td></tr><tr><td>348</td><td>18</td></tr><tr><td>346</td><td>19</td></tr><tr><td>340</td><td>20</td></tr><tr><td>336</td><td>21</td></tr><tr><td>335</td><td>23</td></tr><tr><td>333</td><td>24</td></tr><tr><td>332</td><td>26</td></tr><tr><td>331</td><td>28</td></tr><tr><td>330</td><td>29</td></tr><tr><td>328</td><td>32</td></tr><tr><td>323</td><td>33</td></tr><tr><td>321</td><td>34</td></tr><tr><td>320</td><td>35</td></tr><tr><td>319</td><td>36</td></tr><tr><td>316</td><td>37</td></tr><tr><td>314</td><td>39</td></tr><tr><td>313</td><td>40</td></tr><tr><td>312</td><td>41</td></tr><tr><td>311</td><td>43</td></tr><tr><td>310</td><td>44</td></tr><tr><td>306</td><td>46</td></tr><tr><td>305</td><td>49</td></tr><tr><td>304</td><td>51</td></tr><tr><td>303</td><td>52</td></tr><tr><td>302</td><td>56</td></tr><tr><td>301</td><td>57</td></tr><tr><td>300</td><td>58</td></tr><tr><td>299</td><td>63</td></tr><tr><td>298</td><td>66</td></tr><tr><td>297</td><td>72</td></tr><tr><td>296</td><td>75</td></tr><tr><td>295</td><td>77</td></tr><tr><td>294</td><td>80</td></tr><tr><td>293</td><td>84</td></tr><tr><td>292</td><td>86</td></tr><tr><td>291</td><td>87</td></tr><tr><td>290</td><td>88</td></tr><tr><td>289</td><td>92</td></tr><tr><td>288</td><td>94</td></tr><tr><td>287</td><td>99</td></tr><tr><td>286</td><td>100</td></tr><tr><td>285</td><td>104</td></tr><tr><td>284</td><td>106</td></tr><tr><td>283</td><td>110</td></tr><tr><td>282</td><td>116</td></tr><tr><td>281</td><td>120</td></tr><tr><td>280</td><td>121</td></tr><tr><td>279</td><td>131</td></tr><tr><td>278</td><td>133</td></tr><tr><td>276</td><td>136</td></tr><tr><td>274</td><td>143</td></tr><tr><td>273</td><td>146</td></tr><tr><td>271</td><td>155</td></tr><tr><td>270</td><td>157</td></tr><tr><td>269</td><td>168</td></tr><tr><td>268</td><td>171</td></tr><tr><td>267</td><td>174</td></tr><tr><td>266</td><td>176</td></tr><tr><td>265</td><td>186</td></tr><tr><td>264</td><td>189</td></tr><tr><td>263</td><td>194</td></tr><tr><td>262</td><td>203</td></tr><tr><td>261</td><td>207</td></tr><tr><td>260</td><td>209</td></tr><tr><td>259</td><td>220</td></tr><tr><td>258</td><td>228</td></tr><tr><td>257</td><td>233</td></tr><tr><td>256</td><td>235</td></tr><tr><td>254</td><td>248</td></tr><tr><td>253</td><td>249</td></tr><tr><td>252</td><td>261</td></tr><tr><td>251</td><td>263</td></tr><tr><td>250</td><td>266</td></tr><tr><td>249</td><td>277</td></tr><tr><td>248</td><td>282</td></tr><tr><td>247</td><td>288</td></tr><tr><td>246</td><td>292</td></tr><tr><td>245</td><td>309</td></tr><tr><td>244</td><td>311</td></tr><tr><td>243</td><td>312</td></tr><tr><td>242</td><td>326</td></tr><tr><td>241</td><td>334</td></tr><tr><td>240</td><td>338</td></tr><tr><td>239</td><td>359</td></tr><tr><td>238</td><td>369</td></tr><tr><td>236</td><td>374</td></tr><tr><td>235</td><td>390</td></tr><tr><td>234</td><td>392</td></tr><tr><td>233</td><td>395</td></tr><tr><td>232</td><td>409</td></tr><tr><td>231</td><td>412</td></tr><tr><td>230</td><td>418</td></tr><tr><td>229</td><td>441</td></tr><tr><td>228</td><td>447</td></tr><tr><td>227</td><td>456</td></tr><tr><td>226</td><td>458</td></tr><tr><td>225</td><td>482</td></tr><tr><td>224</td><td>484</td></tr><tr><td>223</td><td>487</td></tr><tr><td>222</td><td>501</td></tr><tr><td>221</td><td>506</td></tr><tr><td>220</td><td>509</td></tr><tr><td>219</td><td>542</td></tr><tr><td>218</td><td>548</td></tr><tr><td>217</td><td>552</td></tr><tr><td>216</td><td>555</td></tr><tr><td>214</td><td>572</td></tr><tr><td>213</td><td>576</td></tr><tr><td>211</td><td>592</td></tr><tr><td>210</td><td>595</td></tr><tr><td>209</td><td>623</td></tr><tr><td>208</td><td>635</td></tr><tr><td>207</td><td>644</td></tr><tr><td>206</td><td>646</td></tr><tr><td>205</td><td>666</td></tr><tr><td>204</td><td>669</td></tr><tr><td>203</td><td>671</td></tr><tr><td>202</td><td>696</td></tr><tr><td>201</td><td>700</td></tr><tr><td>200</td><td>703</td></tr><tr><td>199</td><td>746</td></tr><tr><td>198</td><td>752</td></tr><tr><td>197</td><td>754</td></tr><tr><td>196</td><td>755</td></tr><tr><td>195</td><td>786</td></tr><tr><td>194</td><td>788</td></tr><tr><td>193</td><td>790</td></tr><tr><td>192</td><td>813</td></tr><tr><td>191</td><td>819</td></tr><tr><td>190</td><td>821</td></tr><tr><td>189</td><td>863</td></tr><tr><td>188</td><td>878</td></tr><tr><td>187</td><td>880</td></tr><tr><td>186</td><td>882</td></tr><tr><td>185</td><td>912</td></tr><tr><td>184</td><td>913</td></tr><tr><td>183</td><td>916</td></tr><tr><td>182</td><td>952</td></tr><tr><td>181</td><td>954</td></tr><tr><td>180</td><td>958</td></tr><tr><td>179</td><td>991</td></tr><tr><td>178</td><td>995</td></tr><tr><td>176</td><td>997</td></tr><tr><td>175</td><td>1023</td></tr><tr><td>174</td><td>1024</td></tr><tr><td>173</td><td>1027</td></tr><tr><td>172</td><td>1053</td></tr><tr><td>171</td><td>1057</td></tr><tr><td>170</td><td>1058</td></tr><tr><td>169</td><td>1080</td></tr><tr><td>168</td><td>1096</td></tr><tr><td>166</td><td>1101</td></tr><tr><td>165</td><td>1124</td></tr><tr><td>164</td><td>1125</td></tr><tr><td>163</td><td>1126</td></tr><tr><td>162</td><td>1145</td></tr><tr><td>161</td><td>1151</td></tr><tr><td>160</td><td>1153</td></tr><tr><td>159</td><td>1176</td></tr><tr><td>158</td><td>1192</td></tr><tr><td>156</td><td>1196</td></tr><tr><td>155</td><td>1217</td></tr><tr><td>154</td><td>1219</td></tr><tr><td>153</td><td>1220</td></tr><tr><td>152</td><td>1250</td></tr><tr><td>150</td><td>1255</td></tr><tr><td>149</td><td>1276</td></tr><tr><td>148</td><td>1294</td></tr><tr><td>147</td><td>1296</td></tr><tr><td>146</td><td>1297</td></tr><tr><td>145</td><td>1321</td></tr><tr><td>143</td><td>1322</td></tr><tr><td>142</td><td>1347</td></tr><tr><td>140</td><td>1348</td></tr><tr><td>139</td><td>1372</td></tr><tr><td>138</td><td>1388</td></tr><tr><td>136</td><td>1390</td></tr><tr><td>133</td><td>1415</td></tr><tr><td>132</td><td>1436</td></tr><tr><td>131</td><td>1443</td></tr><tr><td>130</td><td>1444</td></tr><tr><td>129</td><td>1462</td></tr><tr><td>128</td><td>1476</td></tr><tr><td>126</td><td>1477</td></tr><tr><td>125</td><td>1506</td></tr><tr><td>123</td><td>1507</td></tr><tr><td>122</td><td>1530</td></tr><tr><td>120</td><td>1532</td></tr><tr><td>119</td><td>1557</td></tr><tr><td>118</td><td>1571</td></tr><tr><td>116</td><td>1573</td></tr><tr><td>115</td><td>1588</td></tr><tr><td>113</td><td>1590</td></tr><tr><td>112</td><td>1604</td></tr><tr><td>110</td><td>1607</td></tr><tr><td>109</td><td>1614</td></tr><tr><td>106</td><td>1627</td></tr><tr><td>103</td><td>1647</td></tr><tr><td>102</td><td>1663</td></tr><tr><td>100</td><td>1664</td></tr><tr><td>99</td><td>1675</td></tr><tr><td>96</td><td>1681</td></tr><tr><td>93</td><td>1690</td></tr><tr><td>92</td><td>1696</td></tr><tr><td>90</td><td>1697</td></tr><tr><td>89</td><td>1701</td></tr><tr><td>86</td><td>1702</td></tr><tr><td>83</td><td>1708</td></tr><tr><td>82</td><td>1716</td></tr><tr><td>80</td><td>1717</td></tr><tr><td>79</td><td>1721</td></tr><tr><td>76</td><td>1725</td></tr><tr><td>73</td><td>1729</td></tr><tr><td>72</td><td>1733</td></tr><tr><td>70</td><td>1736</td></tr><tr><td>69</td><td>1742</td></tr><tr><td>66</td><td>1743</td></tr><tr><td>63</td><td>1747</td></tr><tr><td>62</td><td>1749</td></tr><tr><td>60</td><td>1750</td></tr><tr><td>56</td><td>1756</td></tr><tr><td>50</td><td>1759</td></tr><tr><td>46</td><td>1764</td></tr><tr><td>40</td><td>1767</td></tr><tr><td>30</td><td>1769</td></tr><tr><td>20</td><td>1770</td></tr><tr><td>0</td><td>1773</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 17 premiers ayant un score supérieur ou égal à 350 sont listés ci-dessous.
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
            <td>Ben S.</td>
            <td>406</td>
            <td>1</td>
            <td>École Elsa Triolet, Grigny</td>
         </tr>
         <tr>
            <td>Joshua G.</td>
            <td>394</td>
            <td>2</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Louise Z.</td>
            <td>385</td>
            <td>3</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Sélim B.</td>
            <td>375</td>
            <td>4</td>
            <td>École Elémentaire le Suve, Vence</td>
         </tr>
         <tr>
            <td>Aurélien A.</td>
            <td>373</td>
            <td>5</td>
            <td>École Élémentaire du Centre, Ostwald</td>
         </tr>
         <tr>
            <td>Eugène S.</td>
            <td>373</td>
            <td>5</td>
            <td>Lycée Marcelin Berthelot, Pantin</td>
         </tr>
         <tr>
            <td>Thibault C.</td>
            <td>372</td>
            <td>7</td>
            <td>Collège Jacqueline Julius, Fort de France</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>368</td>
            <td>8</td>
            <td>École Primaire Centre, Allauch</td>
         </tr>
         <tr>
            <td>Daphné D.</td>
            <td>360</td>
            <td>9</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Louisa M.</td>
            <td>360</td>
            <td>9</td>
            <td>Lycée la Prat's, Cluny</td>
         </tr>
         <tr>
            <td>Elise L.</td>
            <td>358</td>
            <td>11</td>
            <td>École Primaire Sainte Clotilde, Amiens</td>
         </tr>
         <tr>
            <td>Theo A.</td>
            <td>355</td>
            <td>12</td>
            <td>École Albert Chatelet, Valhuon</td>
         </tr>
         <tr>
            <td>Kadmiel Y.</td>
            <td>354</td>
            <td>13</td>
            <td>Lycée Freppel, Obernai</td>
         </tr>
         <tr>
            <td>Ines C.</td>
            <td>354</td>
            <td>13</td>
            <td>École Albert Chatelet, Valhuon</td>
         </tr>
         <tr>
            <td>Jeanne V.</td>
            <td>353</td>
            <td>15</td>
            <td>Collège Marcel Pagnol, Sérignan</td>
         </tr>
         <tr>
            <td>Juliette L.</td>
            <td>350</td>
            <td>16</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Camille P.</td>
            <td>350</td>
            <td>16</td>
            <td>École Elémentaire le Suve, Vence</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 3273 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>430</td><td>1</td></tr><tr><td>428</td><td>3</td></tr><tr><td>426</td><td>4</td></tr><tr><td>414</td><td>5</td></tr><tr><td>410</td><td>6</td></tr><tr><td>409</td><td>8</td></tr><tr><td>408</td><td>9</td></tr><tr><td>400</td><td>10</td></tr><tr><td>398</td><td>11</td></tr><tr><td>391</td><td>12</td></tr><tr><td>390</td><td>14</td></tr><tr><td>384</td><td>15</td></tr><tr><td>382</td><td>17</td></tr><tr><td>381</td><td>18</td></tr><tr><td>380</td><td>19</td></tr><tr><td>378</td><td>20</td></tr><tr><td>377</td><td>21</td></tr><tr><td>372</td><td>22</td></tr><tr><td>370</td><td>23</td></tr><tr><td>369</td><td>26</td></tr><tr><td>368</td><td>27</td></tr><tr><td>366</td><td>29</td></tr><tr><td>365</td><td>33</td></tr><tr><td>364</td><td>34</td></tr><tr><td>363</td><td>37</td></tr><tr><td>362</td><td>38</td></tr><tr><td>360</td><td>40</td></tr><tr><td>359</td><td>41</td></tr><tr><td>358</td><td>43</td></tr><tr><td>356</td><td>44</td></tr><tr><td>354</td><td>46</td></tr><tr><td>352</td><td>47</td></tr><tr><td>351</td><td>49</td></tr><tr><td>350</td><td>50</td></tr><tr><td>349</td><td>54</td></tr><tr><td>348</td><td>55</td></tr><tr><td>347</td><td>57</td></tr><tr><td>346</td><td>58</td></tr><tr><td>345</td><td>61</td></tr><tr><td>344</td><td>66</td></tr><tr><td>342</td><td>70</td></tr><tr><td>341</td><td>73</td></tr><tr><td>340</td><td>75</td></tr><tr><td>338</td><td>86</td></tr><tr><td>337</td><td>89</td></tr><tr><td>336</td><td>90</td></tr><tr><td>335</td><td>95</td></tr><tr><td>334</td><td>97</td></tr><tr><td>333</td><td>99</td></tr><tr><td>332</td><td>106</td></tr><tr><td>331</td><td>113</td></tr><tr><td>330</td><td>114</td></tr><tr><td>329</td><td>126</td></tr><tr><td>328</td><td>128</td></tr><tr><td>327</td><td>132</td></tr><tr><td>326</td><td>134</td></tr><tr><td>325</td><td>141</td></tr><tr><td>324</td><td>144</td></tr><tr><td>323</td><td>152</td></tr><tr><td>322</td><td>156</td></tr><tr><td>321</td><td>160</td></tr><tr><td>320</td><td>163</td></tr><tr><td>319</td><td>174</td></tr><tr><td>318</td><td>176</td></tr><tr><td>317</td><td>185</td></tr><tr><td>316</td><td>189</td></tr><tr><td>315</td><td>194</td></tr><tr><td>314</td><td>197</td></tr><tr><td>313</td><td>202</td></tr><tr><td>312</td><td>210</td></tr><tr><td>311</td><td>219</td></tr><tr><td>310</td><td>225</td></tr><tr><td>309</td><td>235</td></tr><tr><td>308</td><td>241</td></tr><tr><td>307</td><td>248</td></tr><tr><td>306</td><td>252</td></tr><tr><td>305</td><td>268</td></tr><tr><td>304</td><td>272</td></tr><tr><td>303</td><td>275</td></tr><tr><td>302</td><td>285</td></tr><tr><td>301</td><td>294</td></tr><tr><td>300</td><td>305</td></tr><tr><td>299</td><td>330</td></tr><tr><td>298</td><td>336</td></tr><tr><td>297</td><td>344</td></tr><tr><td>296</td><td>350</td></tr><tr><td>295</td><td>365</td></tr><tr><td>294</td><td>372</td></tr><tr><td>293</td><td>387</td></tr><tr><td>292</td><td>401</td></tr><tr><td>291</td><td>406</td></tr><tr><td>290</td><td>418</td></tr><tr><td>289</td><td>445</td></tr><tr><td>288</td><td>453</td></tr><tr><td>287</td><td>468</td></tr><tr><td>286</td><td>474</td></tr><tr><td>285</td><td>501</td></tr><tr><td>284</td><td>507</td></tr><tr><td>283</td><td>521</td></tr><tr><td>282</td><td>538</td></tr><tr><td>281</td><td>550</td></tr><tr><td>280</td><td>558</td></tr><tr><td>279</td><td>588</td></tr><tr><td>278</td><td>597</td></tr><tr><td>277</td><td>606</td></tr><tr><td>276</td><td>614</td></tr><tr><td>275</td><td>639</td></tr><tr><td>274</td><td>648</td></tr><tr><td>273</td><td>658</td></tr><tr><td>272</td><td>676</td></tr><tr><td>271</td><td>687</td></tr><tr><td>270</td><td>701</td></tr><tr><td>269</td><td>735</td></tr><tr><td>268</td><td>746</td></tr><tr><td>267</td><td>758</td></tr><tr><td>266</td><td>763</td></tr><tr><td>265</td><td>801</td></tr><tr><td>264</td><td>805</td></tr><tr><td>263</td><td>816</td></tr><tr><td>262</td><td>845</td></tr><tr><td>261</td><td>860</td></tr><tr><td>260</td><td>871</td></tr><tr><td>259</td><td>900</td></tr><tr><td>258</td><td>919</td></tr><tr><td>257</td><td>939</td></tr><tr><td>256</td><td>946</td></tr><tr><td>255</td><td>978</td></tr><tr><td>254</td><td>986</td></tr><tr><td>253</td><td>1000</td></tr><tr><td>252</td><td>1025</td></tr><tr><td>251</td><td>1033</td></tr><tr><td>250</td><td>1044</td></tr><tr><td>249</td><td>1077</td></tr><tr><td>248</td><td>1095</td></tr><tr><td>247</td><td>1112</td></tr><tr><td>246</td><td>1121</td></tr><tr><td>245</td><td>1161</td></tr><tr><td>244</td><td>1163</td></tr><tr><td>243</td><td>1175</td></tr><tr><td>242</td><td>1214</td></tr><tr><td>241</td><td>1225</td></tr><tr><td>240</td><td>1237</td></tr><tr><td>239</td><td>1276</td></tr><tr><td>238</td><td>1300</td></tr><tr><td>237</td><td>1311</td></tr><tr><td>236</td><td>1316</td></tr><tr><td>235</td><td>1352</td></tr><tr><td>234</td><td>1355</td></tr><tr><td>233</td><td>1369</td></tr><tr><td>232</td><td>1403</td></tr><tr><td>231</td><td>1420</td></tr><tr><td>230</td><td>1433</td></tr><tr><td>229</td><td>1487</td></tr><tr><td>228</td><td>1522</td></tr><tr><td>227</td><td>1537</td></tr><tr><td>226</td><td>1542</td></tr><tr><td>225</td><td>1590</td></tr><tr><td>224</td><td>1592</td></tr><tr><td>223</td><td>1599</td></tr><tr><td>222</td><td>1639</td></tr><tr><td>221</td><td>1655</td></tr><tr><td>220</td><td>1664</td></tr><tr><td>219</td><td>1709</td></tr><tr><td>218</td><td>1738</td></tr><tr><td>217</td><td>1749</td></tr><tr><td>216</td><td>1753</td></tr><tr><td>215</td><td>1798</td></tr><tr><td>214</td><td>1800</td></tr><tr><td>213</td><td>1808</td></tr><tr><td>212</td><td>1849</td></tr><tr><td>211</td><td>1858</td></tr><tr><td>210</td><td>1863</td></tr><tr><td>209</td><td>1905</td></tr><tr><td>208</td><td>1934</td></tr><tr><td>207</td><td>1941</td></tr><tr><td>206</td><td>1946</td></tr><tr><td>205</td><td>1990</td></tr><tr><td>204</td><td>1991</td></tr><tr><td>203</td><td>1997</td></tr><tr><td>202</td><td>2038</td></tr><tr><td>201</td><td>2054</td></tr><tr><td>200</td><td>2060</td></tr><tr><td>199</td><td>2100</td></tr><tr><td>198</td><td>2114</td></tr><tr><td>197</td><td>2119</td></tr><tr><td>196</td><td>2123</td></tr><tr><td>195</td><td>2161</td></tr><tr><td>194</td><td>2162</td></tr><tr><td>193</td><td>2164</td></tr><tr><td>192</td><td>2200</td></tr><tr><td>191</td><td>2213</td></tr><tr><td>190</td><td>2216</td></tr><tr><td>189</td><td>2254</td></tr><tr><td>188</td><td>2273</td></tr><tr><td>187</td><td>2280</td></tr><tr><td>186</td><td>2281</td></tr><tr><td>185</td><td>2320</td></tr><tr><td>184</td><td>2323</td></tr><tr><td>183</td><td>2326</td></tr><tr><td>182</td><td>2356</td></tr><tr><td>181</td><td>2368</td></tr><tr><td>180</td><td>2373</td></tr><tr><td>179</td><td>2418</td></tr><tr><td>178</td><td>2435</td></tr><tr><td>177</td><td>2438</td></tr><tr><td>176</td><td>2440</td></tr><tr><td>175</td><td>2484</td></tr><tr><td>174</td><td>2486</td></tr><tr><td>173</td><td>2490</td></tr><tr><td>172</td><td>2513</td></tr><tr><td>171</td><td>2519</td></tr><tr><td>170</td><td>2523</td></tr><tr><td>169</td><td>2552</td></tr><tr><td>168</td><td>2568</td></tr><tr><td>166</td><td>2573</td></tr><tr><td>164</td><td>2615</td></tr><tr><td>163</td><td>2618</td></tr><tr><td>162</td><td>2651</td></tr><tr><td>161</td><td>2658</td></tr><tr><td>160</td><td>2664</td></tr><tr><td>159</td><td>2692</td></tr><tr><td>158</td><td>2718</td></tr><tr><td>157</td><td>2721</td></tr><tr><td>156</td><td>2722</td></tr><tr><td>153</td><td>2770</td></tr><tr><td>152</td><td>2796</td></tr><tr><td>151</td><td>2808</td></tr><tr><td>150</td><td>2811</td></tr><tr><td>149</td><td>2830</td></tr><tr><td>148</td><td>2855</td></tr><tr><td>146</td><td>2858</td></tr><tr><td>145</td><td>2895</td></tr><tr><td>144</td><td>2896</td></tr><tr><td>143</td><td>2897</td></tr><tr><td>142</td><td>2918</td></tr><tr><td>141</td><td>2921</td></tr><tr><td>140</td><td>2922</td></tr><tr><td>139</td><td>2940</td></tr><tr><td>138</td><td>2956</td></tr><tr><td>136</td><td>2957</td></tr><tr><td>135</td><td>2992</td></tr><tr><td>134</td><td>2993</td></tr><tr><td>133</td><td>2994</td></tr><tr><td>132</td><td>3011</td></tr><tr><td>130</td><td>3019</td></tr><tr><td>129</td><td>3034</td></tr><tr><td>128</td><td>3044</td></tr><tr><td>126</td><td>3047</td></tr><tr><td>123</td><td>3069</td></tr><tr><td>120</td><td>3086</td></tr><tr><td>119</td><td>3099</td></tr><tr><td>116</td><td>3109</td></tr><tr><td>113</td><td>3121</td></tr><tr><td>112</td><td>3129</td></tr><tr><td>110</td><td>3136</td></tr><tr><td>109</td><td>3141</td></tr><tr><td>106</td><td>3150</td></tr><tr><td>105</td><td>3160</td></tr><tr><td>103</td><td>3161</td></tr><tr><td>100</td><td>3169</td></tr><tr><td>99</td><td>3175</td></tr><tr><td>96</td><td>3180</td></tr><tr><td>93</td><td>3191</td></tr><tr><td>92</td><td>3198</td></tr><tr><td>90</td><td>3201</td></tr><tr><td>89</td><td>3203</td></tr><tr><td>86</td><td>3204</td></tr><tr><td>83</td><td>3208</td></tr><tr><td>82</td><td>3212</td></tr><tr><td>80</td><td>3213</td></tr><tr><td>79</td><td>3216</td></tr><tr><td>76</td><td>3217</td></tr><tr><td>70</td><td>3220</td></tr><tr><td>66</td><td>3222</td></tr><tr><td>63</td><td>3224</td></tr><tr><td>60</td><td>3226</td></tr><tr><td>56</td><td>3228</td></tr><tr><td>53</td><td>3229</td></tr><tr><td>50</td><td>3230</td></tr><tr><td>46</td><td>3232</td></tr><tr><td>43</td><td>3235</td></tr><tr><td>40</td><td>3236</td></tr><tr><td>30</td><td>3239</td></tr><tr><td>23</td><td>3245</td></tr><tr><td>20</td><td>3246</td></tr><tr><td>0</td><td>3250</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 25 premiers ayant un score supérieur ou égal à 370 sont listés ci-dessous.
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
            <td>Alice L.</td>
            <td>430</td>
            <td>1</td>
            <td>Collège Jean Rostand, Auchy les Hesdin</td>
         </tr>
         <tr>
            <td>Jeanbaptiste P.</td>
            <td>430</td>
            <td>1</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Alexis B.</td>
            <td>428</td>
            <td>3</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Walid A.</td>
            <td>426</td>
            <td>4</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>414</td>
            <td>5</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Antoine B.</td>
            <td>410</td>
            <td>6</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Mihai T.</td>
            <td>410</td>
            <td>6</td>
            <td>Petite Ecole d’Hydra, Hydra - Alger</td>
         </tr>
         <tr>
            <td>Paul A.</td>
            <td>409</td>
            <td>8</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Matthéo C.</td>
            <td>408</td>
            <td>9</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Lorine C.</td>
            <td>400</td>
            <td>10</td>
            <td>École Joseph Leprêtre, Bierne</td>
         </tr>
         <tr>
            <td>Rami E.</td>
            <td>398</td>
            <td>11</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Gulseren B.</td>
            <td>391</td>
            <td>12</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Louca G.</td>
            <td>391</td>
            <td>12</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>390</td>
            <td>14</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>384</td>
            <td>15</td>
            <td>Pôle Scolaire de Margut, Margut</td>
         </tr>
         <tr>
            <td>Alicia T.</td>
            <td>384</td>
            <td>15</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Erwan N.</td>
            <td>382</td>
            <td>17</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Marion L.</td>
            <td>381</td>
            <td>18</td>
            <td>École Saint Vaast, Bethune</td>
         </tr>
         <tr>
            <td>Jeremy K.</td>
            <td>380</td>
            <td>19</td>
            <td>Lycée Franco-Libanais Nahr Ibrahim, Jounieh</td>
         </tr>
         <tr>
            <td>Etienne G.</td>
            <td>378</td>
            <td>20</td>
            <td>École Elémentaire Ouest, Dijon</td>
         </tr>
         <tr>
            <td>Antoine S.</td>
            <td>377</td>
            <td>21</td>
            <td>École Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Antoine O.</td>
            <td>372</td>
            <td>22</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Alexandra D.</td>
            <td>370</td>
            <td>23</td>
            <td>École Élémentaire les Marronniers, Magnanville</td>
         </tr>
         <tr>
            <td>Lalie G.</td>
            <td>370</td>
            <td>23</td>
            <td>Groupe Scolaire Carlepont, Carlepont</td>
         </tr>
         <tr>
            <td>Marina H.</td>
            <td>370</td>
            <td>23</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème (participation individuelle) : 32939 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>470</td><td>2</td></tr><tr><td>466</td><td>4</td></tr><tr><td>460</td><td>5</td></tr><tr><td>456</td><td>6</td></tr><tr><td>450</td><td>7</td></tr><tr><td>446</td><td>8</td></tr><tr><td>444</td><td>9</td></tr><tr><td>440</td><td>10</td></tr><tr><td>439</td><td>12</td></tr><tr><td>436</td><td>13</td></tr><tr><td>434</td><td>17</td></tr><tr><td>433</td><td>18</td></tr><tr><td>432</td><td>19</td></tr><tr><td>431</td><td>22</td></tr><tr><td>430</td><td>24</td></tr><tr><td>426</td><td>33</td></tr><tr><td>424</td><td>38</td></tr><tr><td>422</td><td>40</td></tr><tr><td>420</td><td>41</td></tr><tr><td>419</td><td>49</td></tr><tr><td>418</td><td>52</td></tr><tr><td>416</td><td>56</td></tr><tr><td>415</td><td>63</td></tr><tr><td>414</td><td>66</td></tr><tr><td>413</td><td>71</td></tr><tr><td>412</td><td>73</td></tr><tr><td>411</td><td>81</td></tr><tr><td>410</td><td>83</td></tr><tr><td>408</td><td>97</td></tr><tr><td>407</td><td>105</td></tr><tr><td>406</td><td>107</td></tr><tr><td>405</td><td>113</td></tr><tr><td>404</td><td>116</td></tr><tr><td>403</td><td>126</td></tr><tr><td>402</td><td>129</td></tr><tr><td>401</td><td>140</td></tr><tr><td>400</td><td>144</td></tr><tr><td>399</td><td>157</td></tr><tr><td>398</td><td>159</td></tr><tr><td>397</td><td>169</td></tr><tr><td>396</td><td>172</td></tr><tr><td>395</td><td>181</td></tr><tr><td>394</td><td>186</td></tr><tr><td>393</td><td>195</td></tr><tr><td>392</td><td>200</td></tr><tr><td>391</td><td>215</td></tr><tr><td>390</td><td>217</td></tr><tr><td>389</td><td>239</td></tr><tr><td>388</td><td>245</td></tr><tr><td>387</td><td>259</td></tr><tr><td>386</td><td>265</td></tr><tr><td>385</td><td>295</td></tr><tr><td>384</td><td>300</td></tr><tr><td>383</td><td>320</td></tr><tr><td>382</td><td>333</td></tr><tr><td>381</td><td>353</td></tr><tr><td>380</td><td>361</td></tr><tr><td>379</td><td>392</td></tr><tr><td>378</td><td>405</td></tr><tr><td>377</td><td>420</td></tr><tr><td>376</td><td>425</td></tr><tr><td>375</td><td>456</td></tr><tr><td>374</td><td>471</td></tr><tr><td>373</td><td>502</td></tr><tr><td>372</td><td>517</td></tr><tr><td>371</td><td>555</td></tr><tr><td>370</td><td>564</td></tr><tr><td>369</td><td>615</td></tr><tr><td>368</td><td>638</td></tr><tr><td>367</td><td>669</td></tr><tr><td>366</td><td>689</td></tr><tr><td>365</td><td>724</td></tr><tr><td>364</td><td>746</td></tr><tr><td>363</td><td>776</td></tr><tr><td>362</td><td>797</td></tr><tr><td>361</td><td>839</td></tr><tr><td>360</td><td>857</td></tr><tr><td>359</td><td>920</td></tr><tr><td>358</td><td>935</td></tr><tr><td>357</td><td>974</td></tr><tr><td>356</td><td>997</td></tr><tr><td>355</td><td>1065</td></tr><tr><td>354</td><td>1096</td></tr><tr><td>353</td><td>1138</td></tr><tr><td>352</td><td>1174</td></tr><tr><td>351</td><td>1250</td></tr><tr><td>350</td><td>1281</td></tr><tr><td>349</td><td>1380</td></tr><tr><td>348</td><td>1409</td></tr><tr><td>347</td><td>1470</td></tr><tr><td>346</td><td>1506</td></tr><tr><td>345</td><td>1607</td></tr><tr><td>344</td><td>1657</td></tr><tr><td>343</td><td>1723</td></tr><tr><td>342</td><td>1758</td></tr><tr><td>341</td><td>1831</td></tr><tr><td>340</td><td>1864</td></tr><tr><td>339</td><td>2000</td></tr><tr><td>338</td><td>2048</td></tr><tr><td>337</td><td>2106</td></tr><tr><td>336</td><td>2145</td></tr><tr><td>335</td><td>2238</td></tr><tr><td>334</td><td>2280</td></tr><tr><td>333</td><td>2341</td></tr><tr><td>332</td><td>2402</td></tr><tr><td>331</td><td>2500</td></tr><tr><td>330</td><td>2543</td></tr><tr><td>329</td><td>2692</td></tr><tr><td>328</td><td>2744</td></tr><tr><td>327</td><td>2831</td></tr><tr><td>326</td><td>2876</td></tr><tr><td>325</td><td>3026</td></tr><tr><td>324</td><td>3074</td></tr><tr><td>323</td><td>3184</td></tr><tr><td>322</td><td>3267</td></tr><tr><td>321</td><td>3361</td></tr><tr><td>320</td><td>3429</td></tr><tr><td>319</td><td>3634</td></tr><tr><td>318</td><td>3707</td></tr><tr><td>317</td><td>3824</td></tr><tr><td>316</td><td>3882</td></tr><tr><td>315</td><td>4058</td></tr><tr><td>314</td><td>4129</td></tr><tr><td>313</td><td>4224</td></tr><tr><td>312</td><td>4360</td></tr><tr><td>311</td><td>4489</td></tr><tr><td>310</td><td>4555</td></tr><tr><td>309</td><td>4793</td></tr><tr><td>308</td><td>4885</td></tr><tr><td>307</td><td>5006</td></tr><tr><td>306</td><td>5068</td></tr><tr><td>305</td><td>5276</td></tr><tr><td>304</td><td>5349</td></tr><tr><td>303</td><td>5474</td></tr><tr><td>302</td><td>5640</td></tr><tr><td>301</td><td>5771</td></tr><tr><td>300</td><td>5879</td></tr><tr><td>299</td><td>6176</td></tr><tr><td>298</td><td>6285</td></tr><tr><td>297</td><td>6427</td></tr><tr><td>296</td><td>6519</td></tr><tr><td>295</td><td>6783</td></tr><tr><td>294</td><td>6845</td></tr><tr><td>293</td><td>6996</td></tr><tr><td>292</td><td>7174</td></tr><tr><td>291</td><td>7326</td></tr><tr><td>290</td><td>7442</td></tr><tr><td>289</td><td>7727</td></tr><tr><td>288</td><td>7842</td></tr><tr><td>287</td><td>7996</td></tr><tr><td>286</td><td>8080</td></tr><tr><td>285</td><td>8379</td></tr><tr><td>284</td><td>8487</td></tr><tr><td>283</td><td>8633</td></tr><tr><td>282</td><td>8847</td></tr><tr><td>281</td><td>9022</td></tr><tr><td>280</td><td>9143</td></tr><tr><td>279</td><td>9486</td></tr><tr><td>278</td><td>9664</td></tr><tr><td>277</td><td>9849</td></tr><tr><td>276</td><td>9939</td></tr><tr><td>275</td><td>10282</td></tr><tr><td>274</td><td>10367</td></tr><tr><td>273</td><td>10504</td></tr><tr><td>272</td><td>10748</td></tr><tr><td>271</td><td>10897</td></tr><tr><td>270</td><td>11033</td></tr><tr><td>269</td><td>11411</td></tr><tr><td>268</td><td>11592</td></tr><tr><td>267</td><td>11764</td></tr><tr><td>266</td><td>11841</td></tr><tr><td>265</td><td>12188</td></tr><tr><td>264</td><td>12267</td></tr><tr><td>263</td><td>12427</td></tr><tr><td>262</td><td>12715</td></tr><tr><td>261</td><td>12878</td></tr><tr><td>260</td><td>12986</td></tr><tr><td>259</td><td>13389</td></tr><tr><td>258</td><td>13604</td></tr><tr><td>257</td><td>13787</td></tr><tr><td>256</td><td>13852</td></tr><tr><td>255</td><td>14284</td></tr><tr><td>254</td><td>14349</td></tr><tr><td>253</td><td>14477</td></tr><tr><td>252</td><td>14811</td></tr><tr><td>251</td><td>14985</td></tr><tr><td>250</td><td>15070</td></tr><tr><td>249</td><td>15503</td></tr><tr><td>248</td><td>15744</td></tr><tr><td>247</td><td>15884</td></tr><tr><td>246</td><td>15941</td></tr><tr><td>245</td><td>16347</td></tr><tr><td>244</td><td>16412</td></tr><tr><td>243</td><td>16522</td></tr><tr><td>242</td><td>16868</td></tr><tr><td>241</td><td>17018</td></tr><tr><td>240</td><td>17112</td></tr><tr><td>239</td><td>17554</td></tr><tr><td>238</td><td>17817</td></tr><tr><td>237</td><td>17951</td></tr><tr><td>236</td><td>18011</td></tr><tr><td>235</td><td>18430</td></tr><tr><td>234</td><td>18492</td></tr><tr><td>233</td><td>18595</td></tr><tr><td>232</td><td>18966</td></tr><tr><td>231</td><td>19102</td></tr><tr><td>230</td><td>19197</td></tr><tr><td>229</td><td>19599</td></tr><tr><td>228</td><td>19856</td></tr><tr><td>227</td><td>19964</td></tr><tr><td>226</td><td>20032</td></tr><tr><td>225</td><td>20475</td></tr><tr><td>224</td><td>20504</td></tr><tr><td>223</td><td>20588</td></tr><tr><td>222</td><td>20917</td></tr><tr><td>221</td><td>21047</td></tr><tr><td>220</td><td>21126</td></tr><tr><td>219</td><td>21554</td></tr><tr><td>218</td><td>21800</td></tr><tr><td>217</td><td>21892</td></tr><tr><td>216</td><td>21936</td></tr><tr><td>215</td><td>22357</td></tr><tr><td>214</td><td>22392</td></tr><tr><td>213</td><td>22462</td></tr><tr><td>212</td><td>22788</td></tr><tr><td>211</td><td>22920</td></tr><tr><td>210</td><td>22985</td></tr><tr><td>209</td><td>23360</td></tr><tr><td>208</td><td>23613</td></tr><tr><td>207</td><td>23663</td></tr><tr><td>206</td><td>23706</td></tr><tr><td>205</td><td>24123</td></tr><tr><td>204</td><td>24139</td></tr><tr><td>203</td><td>24195</td></tr><tr><td>202</td><td>24458</td></tr><tr><td>201</td><td>24569</td></tr><tr><td>200</td><td>24617</td></tr><tr><td>199</td><td>24946</td></tr><tr><td>198</td><td>25123</td></tr><tr><td>197</td><td>25173</td></tr><tr><td>196</td><td>25196</td></tr><tr><td>195</td><td>25527</td></tr><tr><td>194</td><td>25546</td></tr><tr><td>193</td><td>25575</td></tr><tr><td>192</td><td>25820</td></tr><tr><td>191</td><td>25914</td></tr><tr><td>190</td><td>25947</td></tr><tr><td>189</td><td>26251</td></tr><tr><td>188</td><td>26421</td></tr><tr><td>187</td><td>26461</td></tr><tr><td>186</td><td>26483</td></tr><tr><td>185</td><td>26836</td></tr><tr><td>184</td><td>26850</td></tr><tr><td>183</td><td>26889</td></tr><tr><td>182</td><td>27120</td></tr><tr><td>181</td><td>27197</td></tr><tr><td>180</td><td>27228</td></tr><tr><td>179</td><td>27461</td></tr><tr><td>178</td><td>27645</td></tr><tr><td>177</td><td>27680</td></tr><tr><td>176</td><td>27700</td></tr><tr><td>175</td><td>27955</td></tr><tr><td>174</td><td>27973</td></tr><tr><td>173</td><td>28002</td></tr><tr><td>172</td><td>28214</td></tr><tr><td>171</td><td>28302</td></tr><tr><td>170</td><td>28325</td></tr><tr><td>169</td><td>28549</td></tr><tr><td>168</td><td>28684</td></tr><tr><td>167</td><td>28702</td></tr><tr><td>166</td><td>28726</td></tr><tr><td>165</td><td>28991</td></tr><tr><td>164</td><td>28999</td></tr><tr><td>163</td><td>29018</td></tr><tr><td>162</td><td>29206</td></tr><tr><td>161</td><td>29283</td></tr><tr><td>160</td><td>29304</td></tr><tr><td>159</td><td>29489</td></tr><tr><td>158</td><td>29653</td></tr><tr><td>157</td><td>29672</td></tr><tr><td>156</td><td>29686</td></tr><tr><td>155</td><td>29947</td></tr><tr><td>154</td><td>29957</td></tr><tr><td>153</td><td>29976</td></tr><tr><td>152</td><td>30137</td></tr><tr><td>151</td><td>30196</td></tr><tr><td>150</td><td>30205</td></tr><tr><td>149</td><td>30339</td></tr><tr><td>148</td><td>30475</td></tr><tr><td>147</td><td>30495</td></tr><tr><td>146</td><td>30498</td></tr><tr><td>145</td><td>30719</td></tr><tr><td>144</td><td>30729</td></tr><tr><td>143</td><td>30738</td></tr><tr><td>142</td><td>30862</td></tr><tr><td>141</td><td>30911</td></tr><tr><td>140</td><td>30920</td></tr><tr><td>139</td><td>31031</td></tr><tr><td>138</td><td>31158</td></tr><tr><td>136</td><td>31162</td></tr><tr><td>135</td><td>31312</td></tr><tr><td>134</td><td>31318</td></tr><tr><td>133</td><td>31321</td></tr><tr><td>132</td><td>31439</td></tr><tr><td>131</td><td>31485</td></tr><tr><td>130</td><td>31486</td></tr><tr><td>129</td><td>31587</td></tr><tr><td>128</td><td>31686</td></tr><tr><td>126</td><td>31690</td></tr><tr><td>125</td><td>31818</td></tr><tr><td>124</td><td>31819</td></tr><tr><td>123</td><td>31821</td></tr><tr><td>122</td><td>31904</td></tr><tr><td>121</td><td>31927</td></tr><tr><td>120</td><td>31928</td></tr><tr><td>119</td><td>31992</td></tr><tr><td>118</td><td>32027</td></tr><tr><td>117</td><td>32030</td></tr><tr><td>116</td><td>32031</td></tr><tr><td>115</td><td>32113</td></tr><tr><td>114</td><td>32118</td></tr><tr><td>113</td><td>32119</td></tr><tr><td>112</td><td>32176</td></tr><tr><td>110</td><td>32195</td></tr><tr><td>109</td><td>32240</td></tr><tr><td>108</td><td>32267</td></tr><tr><td>107</td><td>32269</td></tr><tr><td>106</td><td>32270</td></tr><tr><td>105</td><td>32328</td></tr><tr><td>103</td><td>32331</td></tr><tr><td>102</td><td>32369</td></tr><tr><td>100</td><td>32382</td></tr><tr><td>99</td><td>32414</td></tr><tr><td>98</td><td>32428</td></tr><tr><td>96</td><td>32430</td></tr><tr><td>95</td><td>32458</td></tr><tr><td>93</td><td>32461</td></tr><tr><td>92</td><td>32488</td></tr><tr><td>90</td><td>32494</td></tr><tr><td>89</td><td>32519</td></tr><tr><td>88</td><td>32536</td></tr><tr><td>86</td><td>32537</td></tr><tr><td>85</td><td>32568</td></tr><tr><td>83</td><td>32569</td></tr><tr><td>82</td><td>32590</td></tr><tr><td>80</td><td>32592</td></tr><tr><td>79</td><td>32611</td></tr><tr><td>76</td><td>32624</td></tr><tr><td>75</td><td>32638</td></tr><tr><td>73</td><td>32640</td></tr><tr><td>72</td><td>32655</td></tr><tr><td>70</td><td>32657</td></tr><tr><td>69</td><td>32670</td></tr><tr><td>66</td><td>32674</td></tr><tr><td>63</td><td>32678</td></tr><tr><td>60</td><td>32684</td></tr><tr><td>58</td><td>32700</td></tr><tr><td>56</td><td>32701</td></tr><tr><td>53</td><td>32706</td></tr><tr><td>52</td><td>32710</td></tr><tr><td>50</td><td>32712</td></tr><tr><td>49</td><td>32725</td></tr><tr><td>46</td><td>32726</td></tr><tr><td>43</td><td>32734</td></tr><tr><td>42</td><td>32740</td></tr><tr><td>40</td><td>32741</td></tr><tr><td>36</td><td>32748</td></tr><tr><td>33</td><td>32750</td></tr><tr><td>32</td><td>32753</td></tr><tr><td>30</td><td>32754</td></tr><tr><td>26</td><td>32776</td></tr><tr><td>23</td><td>32780</td></tr><tr><td>20</td><td>32789</td></tr><tr><td>12</td><td>32818</td></tr><tr><td>0</td><td>32821</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 96 premiers ayant un score supérieur ou égal à 410 sont listés ci-dessous.
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
            <td>Cyprien D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Séverin G.</td>
            <td>470</td>
            <td>2</td>
            <td>Collège le Marchioux, Parthenay</td>
         </tr>
         <tr>
            <td>Myriam G.</td>
            <td>470</td>
            <td>2</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Tristan C.</td>
            <td>466</td>
            <td>4</td>
            <td>Collège Jean de la Varende, Mont Saint Aignan</td>
         </tr>
         <tr>
            <td>Rebecca G.</td>
            <td>460</td>
            <td>5</td>
            <td>Taipei European School, Taipei</td>
         </tr>
         <tr>
            <td>Lucas R.</td>
            <td>456</td>
            <td>6</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Timothee S.</td>
            <td>450</td>
            <td>7</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Clay B.</td>
            <td>446</td>
            <td>8</td>
            <td>Lycée Français International de Jeddah, Jeddah</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>444</td>
            <td>9</td>
            <td>Collège-Lycée Sainte Louise, Paris</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>440</td>
            <td>10</td>
            <td>Collège Moreto, Thuir</td>
         </tr>
         <tr>
            <td>Louve G.</td>
            <td>440</td>
            <td>10</td>
            <td>Collège Stéphane Mallarmé, Paris</td>
         </tr>
         <tr>
            <td>Martin E.</td>
            <td>439</td>
            <td>12</td>
            <td>Collège de Taiohae, Taiohae</td>
         </tr>
         <tr>
            <td>Elliott P.</td>
            <td>436</td>
            <td>13</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>436</td>
            <td>13</td>
            <td>Collège Raoul Dufy, Nice</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>436</td>
            <td>13</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Valentin G.</td>
            <td>436</td>
            <td>13</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Camille P.</td>
            <td>434</td>
            <td>17</td>
            <td>Collège la Coutancière, La Chapelle sur Erdre</td>
         </tr>
         <tr>
            <td>Mathis F.</td>
            <td>433</td>
            <td>18</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Clement C.</td>
            <td>432</td>
            <td>19</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>432</td>
            <td>19</td>
            <td>Lycée Franco-Péruvien, Lima 33</td>
         </tr>
         <tr>
            <td>Louis W.</td>
            <td>432</td>
            <td>19</td>
            <td>Collège Des Deux Sarres, Lorquin</td>
         </tr>
         <tr>
            <td>Béatrice O.</td>
            <td>431</td>
            <td>22</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Mathias L.</td>
            <td>431</td>
            <td>22</td>
            <td>Collège Haute Bruche, Schirmeck</td>
         </tr>
         <tr>
            <td>Mickael F.</td>
            <td>430</td>
            <td>24</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Eustache L.</td>
            <td>430</td>
            <td>24</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Matthias H.</td>
            <td>430</td>
            <td>24</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Bastian C.</td>
            <td>430</td>
            <td>24</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Matiss M.</td>
            <td>430</td>
            <td>24</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Constance M.</td>
            <td>430</td>
            <td>24</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Paul A.</td>
            <td>430</td>
            <td>24</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Reda E.</td>
            <td>430</td>
            <td>24</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Clément H.</td>
            <td>430</td>
            <td>24</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Ludivine A.</td>
            <td>426</td>
            <td>33</td>
            <td>Collège André Malraux, Granville</td>
         </tr>
         <tr>
            <td>Néo G.</td>
            <td>426</td>
            <td>33</td>
            <td>Collège René Cassin, Éloyes</td>
         </tr>
         <tr>
            <td>Nour B.</td>
            <td>426</td>
            <td>33</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Enzo M.</td>
            <td>426</td>
            <td>33</td>
            <td>Collège Cacault, Clisson</td>
         </tr>
         <tr>
            <td>Côme F.</td>
            <td>426</td>
            <td>33</td>
            <td>Collège les Louataux, Champagnole</td>
         </tr>
         <tr>
            <td>Bastien A.</td>
            <td>424</td>
            <td>38</td>
            <td>Collège Louis Leprince Ringuet, Genas</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>424</td>
            <td>38</td>
            <td>Collège et Lycée la Malassise, Longuenesse</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>422</td>
            <td>40</td>
            <td>Institution Notre Dame, Carentan</td>
         </tr>
         <tr>
            <td>Yanis A.</td>
            <td>420</td>
            <td>41</td>
            <td>Collège Couperin, Paris</td>
         </tr>
         <tr>
            <td>Liberty E.</td>
            <td>420</td>
            <td>41</td>
            <td>Lycée International Franco-Américain, San Francisco</td>
         </tr>
         <tr>
            <td>Marcos N.</td>
            <td>420</td>
            <td>41</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Nathan R.</td>
            <td>420</td>
            <td>41</td>
            <td>Collège Jean Mermoz, Nozay</td>
         </tr>
         <tr>
            <td>Lukas J.</td>
            <td>420</td>
            <td>41</td>
            <td>Collège Des Deux Sarres, Lorquin</td>
         </tr>
         <tr>
            <td>Anne Sara T.</td>
            <td>420</td>
            <td>41</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Nathalie G.</td>
            <td>420</td>
            <td>41</td>
            <td>Collège Les Sables Blancs, Concarneau</td>
         </tr>
         <tr>
            <td>Axel B.</td>
            <td>420</td>
            <td>41</td>
            <td>Collège Sainte-Apolline, Courdimanche</td>
         </tr>
         <tr>
            <td>Iban E.</td>
            <td>419</td>
            <td>49</td>
            <td>Collège Desdevises du Dézert, Lessay</td>
         </tr>
         <tr>
            <td>Toto T.</td>
            <td>419</td>
            <td>49</td>
            <td>Collège Etienne Jean Lapassat, Romans sur Isère</td>
         </tr>
         <tr>
            <td>Nicolas B.</td>
            <td>419</td>
            <td>49</td>
            <td>Collège Notre Dame de Sion, Strasbourg</td>
         </tr>
         <tr>
            <td>Lilian C.</td>
            <td>418</td>
            <td>52</td>
            <td>Collège F. Giroud, Vendres</td>
         </tr>
         <tr>
            <td>Mahmoud D.</td>
            <td>418</td>
            <td>52</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Arthur G.</td>
            <td>418</td>
            <td>52</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Adrien M.</td>
            <td>418</td>
            <td>52</td>
            <td>Lycée Français de Djibouti, Djibouti</td>
         </tr>
         <tr>
            <td>Jean Francois R.</td>
            <td>416</td>
            <td>56</td>
            <td>Collège Jean Jaurès, Montfermeil</td>
         </tr>
         <tr>
            <td>Maxim T.</td>
            <td>416</td>
            <td>56</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Gabin R.</td>
            <td>416</td>
            <td>56</td>
            <td>Collège St Joseph, St Brévin les Pins</td>
         </tr>
         <tr>
            <td>Jonas R.</td>
            <td>416</td>
            <td>56</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Aurore L.</td>
            <td>416</td>
            <td>56</td>
            <td>Collège Roger Vercel, Dinan</td>
         </tr>
         <tr>
            <td>Magno Daniel M.</td>
            <td>416</td>
            <td>56</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Maya L.</td>
            <td>416</td>
            <td>56</td>
            <td>Lycée Rochambeau French International School, Bethesda</td>
         </tr>
         <tr>
            <td>Antoine D.</td>
            <td>415</td>
            <td>63</td>
            <td>Collège Barnave, Saint Egrève</td>
         </tr>
         <tr>
            <td>Yumin B.</td>
            <td>415</td>
            <td>63</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Auxane B.</td>
            <td>415</td>
            <td>63</td>
            <td>Collège Clotaire Baujoin, Thourotte</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>414</td>
            <td>66</td>
            <td>Collège Pierre Brossolette, Oullins</td>
         </tr>
         <tr>
            <td>Tom V.</td>
            <td>414</td>
            <td>66</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Rémy L.</td>
            <td>414</td>
            <td>66</td>
            <td>Collège Joachim du Bellay, Montrichard</td>
         </tr>
         <tr>
            <td>Alexandre D.</td>
            <td>414</td>
            <td>66</td>
            <td>Collège de la Forêt, Traînou</td>
         </tr>
         <tr>
            <td>Mattéo D.</td>
            <td>414</td>
            <td>66</td>
            <td>Collège Pierre et Marie Curie, Gravelines</td>
         </tr>
         <tr>
            <td>Rémi R.</td>
            <td>413</td>
            <td>71</td>
            <td>Collège René Cassin, Athis de l'Orne</td>
         </tr>
         <tr>
            <td>Martin A.</td>
            <td>413</td>
            <td>71</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Jean-Pierre T.</td>
            <td>412</td>
            <td>73</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Michael C.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Saint-Exupéry, Saint-Laurent du Var</td>
         </tr>
         <tr>
            <td>Killian T.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Adem L.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Emma L.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Maurice Maeterlinck, Luneray</td>
         </tr>
         <tr>
            <td>Mathéo M.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Michel Vignaud, Morangis</td>
         </tr>
         <tr>
            <td>Ilia D.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Ampère, Lyon</td>
         </tr>
         <tr>
            <td>Nawfel K.</td>
            <td>412</td>
            <td>73</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Assil E.</td>
            <td>411</td>
            <td>81</td>
            <td>Lycée Regnault, Tanger</td>
         </tr>
         <tr>
            <td>Ariane F.</td>
            <td>411</td>
            <td>81</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Luane B.</td>
            <td>410</td>
            <td>83</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Nathan W.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Jean Rostand, St Germain du Puy</td>
         </tr>
         <tr>
            <td>Raphael D.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Flandres, La Madeleine</td>
         </tr>
         <tr>
            <td>Maëlys V.</td>
            <td>410</td>
            <td>83</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Augustin B.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Sainte Croix, Chateaugiron</td>
         </tr>
         <tr>
            <td>Nolwenn F.</td>
            <td>410</td>
            <td>83</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Jean-Baptiste S.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Jeanne d'Arc, Orléans</td>
         </tr>
         <tr>
            <td>Aline P.</td>
            <td>410</td>
            <td>83</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Ludovic E.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Château Forbin, Marseille</td>
         </tr>
         <tr>
            <td>Claire D.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Solène D.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège de l'Europe, Ardres</td>
         </tr>
         <tr>
            <td>Louise C.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Bernard Palissy, Paris</td>
         </tr>
         <tr>
            <td>Arthur L.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Jean Monnet, Ouistreham</td>
         </tr>
         <tr>
            <td>Remy W.</td>
            <td>410</td>
            <td>83</td>
            <td>Collège Ste Jeanne d'Arc, Laventie</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème (participation individuelle) : 27773 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>470</td><td>4</td></tr><tr><td>466</td><td>6</td></tr><tr><td>465</td><td>9</td></tr><tr><td>464</td><td>10</td></tr><tr><td>460</td><td>11</td></tr><tr><td>456</td><td>18</td></tr><tr><td>454</td><td>19</td></tr><tr><td>452</td><td>21</td></tr><tr><td>450</td><td>23</td></tr><tr><td>446</td><td>32</td></tr><tr><td>445</td><td>38</td></tr><tr><td>444</td><td>40</td></tr><tr><td>442</td><td>44</td></tr><tr><td>440</td><td>47</td></tr><tr><td>439</td><td>56</td></tr><tr><td>438</td><td>57</td></tr><tr><td>436</td><td>58</td></tr><tr><td>435</td><td>68</td></tr><tr><td>434</td><td>69</td></tr><tr><td>433</td><td>71</td></tr><tr><td>432</td><td>72</td></tr><tr><td>431</td><td>77</td></tr><tr><td>430</td><td>80</td></tr><tr><td>429</td><td>91</td></tr><tr><td>428</td><td>92</td></tr><tr><td>427</td><td>99</td></tr><tr><td>426</td><td>101</td></tr><tr><td>425</td><td>113</td></tr><tr><td>424</td><td>118</td></tr><tr><td>423</td><td>127</td></tr><tr><td>422</td><td>132</td></tr><tr><td>421</td><td>137</td></tr><tr><td>420</td><td>140</td></tr><tr><td>419</td><td>155</td></tr><tr><td>418</td><td>159</td></tr><tr><td>417</td><td>165</td></tr><tr><td>416</td><td>170</td></tr><tr><td>415</td><td>188</td></tr><tr><td>414</td><td>190</td></tr><tr><td>413</td><td>207</td></tr><tr><td>412</td><td>210</td></tr><tr><td>411</td><td>231</td></tr><tr><td>410</td><td>238</td></tr><tr><td>409</td><td>266</td></tr><tr><td>408</td><td>271</td></tr><tr><td>407</td><td>283</td></tr><tr><td>406</td><td>288</td></tr><tr><td>405</td><td>318</td></tr><tr><td>404</td><td>326</td></tr><tr><td>403</td><td>347</td></tr><tr><td>402</td><td>355</td></tr><tr><td>401</td><td>376</td></tr><tr><td>400</td><td>386</td></tr><tr><td>399</td><td>418</td></tr><tr><td>398</td><td>427</td></tr><tr><td>397</td><td>441</td></tr><tr><td>396</td><td>449</td></tr><tr><td>395</td><td>502</td></tr><tr><td>394</td><td>513</td></tr><tr><td>393</td><td>547</td></tr><tr><td>392</td><td>558</td></tr><tr><td>391</td><td>595</td></tr><tr><td>390</td><td>611</td></tr><tr><td>389</td><td>669</td></tr><tr><td>388</td><td>688</td></tr><tr><td>387</td><td>718</td></tr><tr><td>386</td><td>734</td></tr><tr><td>385</td><td>792</td></tr><tr><td>384</td><td>819</td></tr><tr><td>383</td><td>873</td></tr><tr><td>382</td><td>888</td></tr><tr><td>381</td><td>940</td></tr><tr><td>380</td><td>958</td></tr><tr><td>379</td><td>1037</td></tr><tr><td>378</td><td>1058</td></tr><tr><td>377</td><td>1101</td></tr><tr><td>376</td><td>1132</td></tr><tr><td>375</td><td>1207</td></tr><tr><td>374</td><td>1234</td></tr><tr><td>373</td><td>1290</td></tr><tr><td>372</td><td>1318</td></tr><tr><td>371</td><td>1380</td></tr><tr><td>370</td><td>1407</td></tr><tr><td>369</td><td>1504</td></tr><tr><td>368</td><td>1528</td></tr><tr><td>367</td><td>1566</td></tr><tr><td>366</td><td>1595</td></tr><tr><td>365</td><td>1675</td></tr><tr><td>364</td><td>1734</td></tr><tr><td>363</td><td>1806</td></tr><tr><td>362</td><td>1834</td></tr><tr><td>361</td><td>1917</td></tr><tr><td>360</td><td>1948</td></tr><tr><td>359</td><td>2078</td></tr><tr><td>358</td><td>2121</td></tr><tr><td>357</td><td>2175</td></tr><tr><td>356</td><td>2218</td></tr><tr><td>355</td><td>2322</td></tr><tr><td>354</td><td>2374</td></tr><tr><td>353</td><td>2460</td></tr><tr><td>352</td><td>2507</td></tr><tr><td>351</td><td>2603</td></tr><tr><td>350</td><td>2640</td></tr><tr><td>349</td><td>2810</td></tr><tr><td>348</td><td>2866</td></tr><tr><td>347</td><td>2951</td></tr><tr><td>346</td><td>3010</td></tr><tr><td>345</td><td>3161</td></tr><tr><td>344</td><td>3227</td></tr><tr><td>343</td><td>3329</td></tr><tr><td>342</td><td>3409</td></tr><tr><td>341</td><td>3522</td></tr><tr><td>340</td><td>3582</td></tr><tr><td>339</td><td>3776</td></tr><tr><td>338</td><td>3845</td></tr><tr><td>337</td><td>3955</td></tr><tr><td>336</td><td>4006</td></tr><tr><td>335</td><td>4170</td></tr><tr><td>334</td><td>4252</td></tr><tr><td>333</td><td>4366</td></tr><tr><td>332</td><td>4456</td></tr><tr><td>331</td><td>4602</td></tr><tr><td>330</td><td>4655</td></tr><tr><td>329</td><td>4894</td></tr><tr><td>328</td><td>4957</td></tr><tr><td>327</td><td>5086</td></tr><tr><td>326</td><td>5171</td></tr><tr><td>325</td><td>5353</td></tr><tr><td>324</td><td>5430</td></tr><tr><td>323</td><td>5555</td></tr><tr><td>322</td><td>5678</td></tr><tr><td>321</td><td>5831</td></tr><tr><td>320</td><td>5910</td></tr><tr><td>319</td><td>6153</td></tr><tr><td>318</td><td>6238</td></tr><tr><td>317</td><td>6405</td></tr><tr><td>316</td><td>6465</td></tr><tr><td>315</td><td>6695</td></tr><tr><td>314</td><td>6791</td></tr><tr><td>313</td><td>6915</td></tr><tr><td>312</td><td>7064</td></tr><tr><td>311</td><td>7229</td></tr><tr><td>310</td><td>7340</td></tr><tr><td>309</td><td>7619</td></tr><tr><td>308</td><td>7726</td></tr><tr><td>307</td><td>7885</td></tr><tr><td>306</td><td>7963</td></tr><tr><td>305</td><td>8200</td></tr><tr><td>304</td><td>8291</td></tr><tr><td>303</td><td>8444</td></tr><tr><td>302</td><td>8605</td></tr><tr><td>301</td><td>8789</td></tr><tr><td>300</td><td>8887</td></tr><tr><td>299</td><td>9178</td></tr><tr><td>298</td><td>9305</td></tr><tr><td>297</td><td>9495</td></tr><tr><td>296</td><td>9583</td></tr><tr><td>295</td><td>9881</td></tr><tr><td>294</td><td>9983</td></tr><tr><td>293</td><td>10160</td></tr><tr><td>292</td><td>10349</td></tr><tr><td>291</td><td>10481</td></tr><tr><td>290</td><td>10582</td></tr><tr><td>289</td><td>10917</td></tr><tr><td>288</td><td>11051</td></tr><tr><td>287</td><td>11206</td></tr><tr><td>286</td><td>11292</td></tr><tr><td>285</td><td>11587</td></tr><tr><td>284</td><td>11671</td></tr><tr><td>283</td><td>11817</td></tr><tr><td>282</td><td>12006</td></tr><tr><td>281</td><td>12160</td></tr><tr><td>280</td><td>12263</td></tr><tr><td>279</td><td>12597</td></tr><tr><td>278</td><td>12748</td></tr><tr><td>277</td><td>12912</td></tr><tr><td>276</td><td>12977</td></tr><tr><td>275</td><td>13290</td></tr><tr><td>274</td><td>13372</td></tr><tr><td>273</td><td>13509</td></tr><tr><td>272</td><td>13767</td></tr><tr><td>271</td><td>13903</td></tr><tr><td>270</td><td>14030</td></tr><tr><td>269</td><td>14378</td></tr><tr><td>268</td><td>14536</td></tr><tr><td>267</td><td>14652</td></tr><tr><td>266</td><td>14743</td></tr><tr><td>265</td><td>15066</td></tr><tr><td>264</td><td>15136</td></tr><tr><td>263</td><td>15259</td></tr><tr><td>262</td><td>15508</td></tr><tr><td>261</td><td>15630</td></tr><tr><td>260</td><td>15722</td></tr><tr><td>259</td><td>16061</td></tr><tr><td>258</td><td>16217</td></tr><tr><td>257</td><td>16337</td></tr><tr><td>256</td><td>16389</td></tr><tr><td>255</td><td>16739</td></tr><tr><td>254</td><td>16792</td></tr><tr><td>253</td><td>16905</td></tr><tr><td>252</td><td>17152</td></tr><tr><td>251</td><td>17279</td></tr><tr><td>250</td><td>17366</td></tr><tr><td>249</td><td>17694</td></tr><tr><td>248</td><td>17870</td></tr><tr><td>247</td><td>17985</td></tr><tr><td>246</td><td>18038</td></tr><tr><td>245</td><td>18377</td></tr><tr><td>244</td><td>18426</td></tr><tr><td>243</td><td>18508</td></tr><tr><td>242</td><td>18778</td></tr><tr><td>241</td><td>18902</td></tr><tr><td>240</td><td>18961</td></tr><tr><td>239</td><td>19247</td></tr><tr><td>238</td><td>19426</td></tr><tr><td>237</td><td>19519</td></tr><tr><td>236</td><td>19556</td></tr><tr><td>235</td><td>19907</td></tr><tr><td>234</td><td>19940</td></tr><tr><td>233</td><td>20025</td></tr><tr><td>232</td><td>20250</td></tr><tr><td>231</td><td>20364</td></tr><tr><td>230</td><td>20429</td></tr><tr><td>229</td><td>20717</td></tr><tr><td>228</td><td>20870</td></tr><tr><td>227</td><td>20954</td></tr><tr><td>226</td><td>20997</td></tr><tr><td>225</td><td>21338</td></tr><tr><td>224</td><td>21362</td></tr><tr><td>223</td><td>21425</td></tr><tr><td>222</td><td>21647</td></tr><tr><td>221</td><td>21749</td></tr><tr><td>220</td><td>21795</td></tr><tr><td>219</td><td>22051</td></tr><tr><td>218</td><td>22204</td></tr><tr><td>217</td><td>22258</td></tr><tr><td>216</td><td>22277</td></tr><tr><td>215</td><td>22515</td></tr><tr><td>214</td><td>22529</td></tr><tr><td>213</td><td>22564</td></tr><tr><td>212</td><td>22751</td></tr><tr><td>211</td><td>22828</td></tr><tr><td>210</td><td>22871</td></tr><tr><td>209</td><td>23099</td></tr><tr><td>208</td><td>23244</td></tr><tr><td>207</td><td>23284</td></tr><tr><td>206</td><td>23301</td></tr><tr><td>205</td><td>23546</td></tr><tr><td>204</td><td>23561</td></tr><tr><td>203</td><td>23595</td></tr><tr><td>202</td><td>23728</td></tr><tr><td>201</td><td>23785</td></tr><tr><td>200</td><td>23807</td></tr><tr><td>199</td><td>24009</td></tr><tr><td>198</td><td>24118</td></tr><tr><td>197</td><td>24145</td></tr><tr><td>196</td><td>24157</td></tr><tr><td>195</td><td>24351</td></tr><tr><td>194</td><td>24356</td></tr><tr><td>193</td><td>24389</td></tr><tr><td>192</td><td>24520</td></tr><tr><td>191</td><td>24566</td></tr><tr><td>190</td><td>24585</td></tr><tr><td>189</td><td>24757</td></tr><tr><td>188</td><td>24844</td></tr><tr><td>187</td><td>24864</td></tr><tr><td>186</td><td>24877</td></tr><tr><td>185</td><td>25028</td></tr><tr><td>184</td><td>25030</td></tr><tr><td>183</td><td>25053</td></tr><tr><td>182</td><td>25158</td></tr><tr><td>181</td><td>25204</td></tr><tr><td>180</td><td>25221</td></tr><tr><td>179</td><td>25330</td></tr><tr><td>178</td><td>25414</td></tr><tr><td>177</td><td>25427</td></tr><tr><td>176</td><td>25438</td></tr><tr><td>175</td><td>25583</td></tr><tr><td>174</td><td>25590</td></tr><tr><td>173</td><td>25607</td></tr><tr><td>172</td><td>25681</td></tr><tr><td>171</td><td>25717</td></tr><tr><td>170</td><td>25724</td></tr><tr><td>169</td><td>25804</td></tr><tr><td>168</td><td>25883</td></tr><tr><td>167</td><td>25891</td></tr><tr><td>166</td><td>25900</td></tr><tr><td>165</td><td>26039</td></tr><tr><td>164</td><td>26045</td></tr><tr><td>163</td><td>26056</td></tr><tr><td>162</td><td>26142</td></tr><tr><td>161</td><td>26179</td></tr><tr><td>160</td><td>26184</td></tr><tr><td>159</td><td>26280</td></tr><tr><td>158</td><td>26348</td></tr><tr><td>157</td><td>26352</td></tr><tr><td>156</td><td>26357</td></tr><tr><td>155</td><td>26458</td></tr><tr><td>154</td><td>26463</td></tr><tr><td>153</td><td>26471</td></tr><tr><td>152</td><td>26556</td></tr><tr><td>151</td><td>26587</td></tr><tr><td>150</td><td>26589</td></tr><tr><td>149</td><td>26651</td></tr><tr><td>148</td><td>26710</td></tr><tr><td>146</td><td>26716</td></tr><tr><td>145</td><td>26798</td></tr><tr><td>144</td><td>26801</td></tr><tr><td>143</td><td>26803</td></tr><tr><td>142</td><td>26867</td></tr><tr><td>141</td><td>26893</td></tr><tr><td>140</td><td>26896</td></tr><tr><td>139</td><td>26952</td></tr><tr><td>138</td><td>26993</td></tr><tr><td>136</td><td>26998</td></tr><tr><td>135</td><td>27064</td></tr><tr><td>133</td><td>27065</td></tr><tr><td>132</td><td>27100</td></tr><tr><td>130</td><td>27114</td></tr><tr><td>129</td><td>27158</td></tr><tr><td>128</td><td>27197</td></tr><tr><td>126</td><td>27199</td></tr><tr><td>125</td><td>27246</td></tr><tr><td>123</td><td>27249</td></tr><tr><td>122</td><td>27282</td></tr><tr><td>120</td><td>27288</td></tr><tr><td>119</td><td>27323</td></tr><tr><td>118</td><td>27339</td></tr><tr><td>116</td><td>27340</td></tr><tr><td>113</td><td>27365</td></tr><tr><td>110</td><td>27386</td></tr><tr><td>109</td><td>27406</td></tr><tr><td>106</td><td>27420</td></tr><tr><td>103</td><td>27450</td></tr><tr><td>102</td><td>27459</td></tr><tr><td>100</td><td>27463</td></tr><tr><td>99</td><td>27480</td></tr><tr><td>96</td><td>27490</td></tr><tr><td>95</td><td>27507</td></tr><tr><td>93</td><td>27508</td></tr><tr><td>92</td><td>27521</td></tr><tr><td>90</td><td>27524</td></tr><tr><td>89</td><td>27537</td></tr><tr><td>86</td><td>27541</td></tr><tr><td>83</td><td>27554</td></tr><tr><td>80</td><td>27562</td></tr><tr><td>79</td><td>27573</td></tr><tr><td>76</td><td>27574</td></tr><tr><td>73</td><td>27579</td></tr><tr><td>70</td><td>27586</td></tr><tr><td>69</td><td>27598</td></tr><tr><td>66</td><td>27599</td></tr><tr><td>63</td><td>27601</td></tr><tr><td>62</td><td>27608</td></tr><tr><td>60</td><td>27609</td></tr><tr><td>56</td><td>27623</td></tr><tr><td>53</td><td>27629</td></tr><tr><td>50</td><td>27636</td></tr><tr><td>49</td><td>27643</td></tr><tr><td>46</td><td>27644</td></tr><tr><td>43</td><td>27647</td></tr><tr><td>40</td><td>27649</td></tr><tr><td>36</td><td>27650</td></tr><tr><td>33</td><td>27651</td></tr><tr><td>32</td><td>27653</td></tr><tr><td>30</td><td>27654</td></tr><tr><td>26</td><td>27666</td></tr><tr><td>23</td><td>27671</td></tr><tr><td>20</td><td>27680</td></tr><tr><td>12</td><td>27692</td></tr><tr><td>0</td><td>27693</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 90 premiers ayant un score supérieur ou égal à 430 sont listés ci-dessous.
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
            <td>Sara B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Thien-Loc T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Romain A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>S P.</td>
            <td>470</td>
            <td>4</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Henri D.</td>
            <td>470</td>
            <td>4</td>
            <td>Collège Hubert Curien, Cornimont</td>
         </tr>
         <tr>
            <td>Han C.</td>
            <td>466</td>
            <td>6</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Agathe D.</td>
            <td>466</td>
            <td>6</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Houbert C.</td>
            <td>466</td>
            <td>6</td>
            <td>Collège Romain Rolland, Hersin-Coupigny</td>
         </tr>
         <tr>
            <td>Octave G.</td>
            <td>465</td>
            <td>9</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Telio P.</td>
            <td>464</td>
            <td>10</td>
            <td>Collège Van Gogh, Arles</td>
         </tr>
         <tr>
            <td>Roméo R.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Raoul Blanchard, Annecy</td>
         </tr>
         <tr>
            <td>Vincent G.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Claude Debussy, La Guerche sur l'Aubois</td>
         </tr>
         <tr>
            <td>Noé F.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Millevoye, Abbeville</td>
         </tr>
         <tr>
            <td>Louison L.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Jean Rostand, Orvault</td>
         </tr>
         <tr>
            <td>Maël O.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Sainte Philomène, Couëron</td>
         </tr>
         <tr>
            <td>Antonin T.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Jean Paul Guyot, Mandeure</td>
         </tr>
         <tr>
            <td>Axel D.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Sophie L.</td>
            <td>456</td>
            <td>18</td>
            <td>Collège Saint Sébastien, Vaugneray</td>
         </tr>
         <tr>
            <td>Alexandros K.</td>
            <td>454</td>
            <td>19</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Matteo M.</td>
            <td>454</td>
            <td>19</td>
            <td>Collège Les Sables Blancs, Concarneau</td>
         </tr>
         <tr>
            <td>Remy D.</td>
            <td>452</td>
            <td>21</td>
            <td>Collège Guy de Maupassant, Gareoult</td>
         </tr>
         <tr>
            <td>Simon L.</td>
            <td>452</td>
            <td>21</td>
            <td>Collège George Sand, Bethune</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Lycée Lasalle Passy Buzenval, Rueil Malmaison</td>
         </tr>
         <tr>
            <td>Lara L.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Justine F.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège de Wazemmes, Lille</td>
         </tr>
         <tr>
            <td>Aurelien D.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Saint Exupéry, Amberieu en Bugey</td>
         </tr>
         <tr>
            <td>Sarah H.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>César S.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Rocher du Dragon, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Alexis B.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Des 7 Arpents, Souffelweyersheim</td>
         </tr>
         <tr>
            <td>Anahide H.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Louis Blanc, Saint Maur Des Fossés</td>
         </tr>
         <tr>
            <td>Lorraine K.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Jeanne d'Arc, Cholet</td>
         </tr>
         <tr>
            <td>Guilhem G.</td>
            <td>446</td>
            <td>32</td>
            <td>Collège Jean Xxiii, Mulhouse Cedex</td>
         </tr>
         <tr>
            <td>Papa C.</td>
            <td>446</td>
            <td>32</td>
            <td>Collège Albert Camus, Torigni sur Vir</td>
         </tr>
         <tr>
            <td>Tibault D.</td>
            <td>446</td>
            <td>32</td>
            <td>Les Garrigues, Rognes</td>
         </tr>
         <tr>
            <td>Marc V.</td>
            <td>446</td>
            <td>32</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Nicolas R.</td>
            <td>446</td>
            <td>32</td>
            <td>Collège Jeanne d'Arc, Cholet</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>446</td>
            <td>32</td>
            <td>Collège Jeanne d'Arc, Cholet</td>
         </tr>
         <tr>
            <td>Karsten V.</td>
            <td>445</td>
            <td>38</td>
            <td>Collège Des Trois Pays, Hegenheim</td>
         </tr>
         <tr>
            <td>Célestin R.</td>
            <td>445</td>
            <td>38</td>
            <td>Collège Van Gogh, Arles</td>
         </tr>
         <tr>
            <td>Faruk A.</td>
            <td>444</td>
            <td>40</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>William R.</td>
            <td>444</td>
            <td>40</td>
            <td>Collège Champagne, Thonon-les-Bains</td>
         </tr>
         <tr>
            <td>Marie-Salomé H.</td>
            <td>444</td>
            <td>40</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Esteban V.</td>
            <td>444</td>
            <td>40</td>
            <td>Collège de la Vallée de l'Ouanne, Château-Renard</td>
         </tr>
         <tr>
            <td>Jean P.</td>
            <td>442</td>
            <td>44</td>
            <td>Collège la Durantiere, Nantes</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>442</td>
            <td>44</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Milo H.</td>
            <td>442</td>
            <td>44</td>
            <td>Collège André Malraux, Granville</td>
         </tr>
         <tr>
            <td>Maximilien H.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège du Val de Senouire, Paulhaguet</td>
         </tr>
         <tr>
            <td>Eliott V.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège Flavius Vaussenat, Allevard</td>
         </tr>
         <tr>
            <td>Michael D.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège Des Saints-Coeurs Sioufi, Beyrouth</td>
         </tr>
         <tr>
            <td>Amélie O.</td>
            <td>440</td>
            <td>47</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Félix H.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td> .</td>
            <td>440</td>
            <td>47</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Edmund W.</td>
            <td>440</td>
            <td>47</td>
            <td>Lycée Chateaubriand, Rome</td>
         </tr>
         <tr>
            <td>Eloann L.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège Jacques Prévert, Flavy le Martel</td>
         </tr>
         <tr>
            <td>Lou S.</td>
            <td>440</td>
            <td>47</td>
            <td>Collège Paul Mougin, St Michel de Maurienne</td>
         </tr>
         <tr>
            <td>Lucas T.</td>
            <td>439</td>
            <td>56</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Achille T.</td>
            <td>438</td>
            <td>57</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Guillaume T.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Gustave O.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
         <tr>
            <td>Samuel D.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Achille Grondin, Saint-Joseph</td>
         </tr>
         <tr>
            <td>Joanny M.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Julien S.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Joliot Curie, Dieulouard</td>
         </tr>
         <tr>
            <td>Malika B.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Camille Chevalier, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Gabriel J.</td>
            <td>436</td>
            <td>58</td>
            <td>Collège Notre Dame - Saint Sigisbert, Nancy</td>
         </tr>
         <tr>
            <td>Félicia D.</td>
            <td>436</td>
            <td>58</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Corentin S.</td>
            <td>435</td>
            <td>68</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Jerry L.</td>
            <td>434</td>
            <td>69</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Luigi D.</td>
            <td>434</td>
            <td>69</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Gautier L.</td>
            <td>433</td>
            <td>71</td>
            <td>Collège Ste Jeanne d'Arc, Thiers Cedex</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>432</td>
            <td>72</td>
            <td>Collège François Mitterrand, Creon</td>
         </tr>
         <tr>
            <td>Baxter B.</td>
            <td>432</td>
            <td>72</td>
            <td>Lycée International Franco-Américain, San Francisco</td>
         </tr>
         <tr>
            <td>Mathias S.</td>
            <td>432</td>
            <td>72</td>
            <td>Collège Andre Leotard, Frejus</td>
         </tr>
         <tr>
            <td>Hugo I.</td>
            <td>432</td>
            <td>72</td>
            <td>Collège François Truffaut, Charly sur Marne</td>
         </tr>
         <tr>
            <td>Lili B.</td>
            <td>432</td>
            <td>72</td>
            <td>Collège Jean Jaurès, Castanet-Tolosan</td>
         </tr>
         <tr>
            <td>Hippolyte V.</td>
            <td>431</td>
            <td>77</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Ewen B.</td>
            <td>431</td>
            <td>77</td>
            <td>Collège Privé Saint-Genès, Bordeaux</td>
         </tr>
         <tr>
            <td>Anouk A.</td>
            <td>431</td>
            <td>77</td>
            <td>Collège Marcel Doret, Le Vernet</td>
         </tr>
         <tr>
            <td>Jp G.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Albert Camus, Soufflenheim</td>
         </tr>
         <tr>
            <td>H L.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Maurice Maeterlinck, Luneray</td>
         </tr>
         <tr>
            <td>Maya S.</td>
            <td>430</td>
            <td>80</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Alexandre E.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Sacre Coeur, Frevent</td>
         </tr>
         <tr>
            <td>Karol G.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Alice et Jean Olibo, Saint Cyprien</td>
         </tr>
         <tr>
            <td>Kau W.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège International, Noisy-le-Grand</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Mickael T.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Jean Monnet, Luisant</td>
         </tr>
         <tr>
            <td>Gustave A.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Jeanne d'Arc, Orléans</td>
         </tr>
         <tr>
            <td>Arthur P.</td>
            <td>430</td>
            <td>80</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Jana B.</td>
            <td>430</td>
            <td>80</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème (participation individuelle) : 23007 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>17</td></tr><tr><td>472</td><td>20</td></tr><tr><td>470</td><td>21</td></tr><tr><td>466</td><td>31</td></tr><tr><td>464</td><td>38</td></tr><tr><td>460</td><td>40</td></tr><tr><td>456</td><td>55</td></tr><tr><td>455</td><td>62</td></tr><tr><td>454</td><td>63</td></tr><tr><td>453</td><td>68</td></tr><tr><td>452</td><td>69</td></tr><tr><td>451</td><td>71</td></tr><tr><td>450</td><td>72</td></tr><tr><td>449</td><td>86</td></tr><tr><td>448</td><td>87</td></tr><tr><td>447</td><td>88</td></tr><tr><td>446</td><td>89</td></tr><tr><td>445</td><td>99</td></tr><tr><td>444</td><td>101</td></tr><tr><td>442</td><td>111</td></tr><tr><td>440</td><td>118</td></tr><tr><td>439</td><td>136</td></tr><tr><td>438</td><td>138</td></tr><tr><td>437</td><td>139</td></tr><tr><td>436</td><td>140</td></tr><tr><td>435</td><td>164</td></tr><tr><td>434</td><td>171</td></tr><tr><td>432</td><td>179</td></tr><tr><td>431</td><td>188</td></tr><tr><td>430</td><td>189</td></tr><tr><td>429</td><td>229</td></tr><tr><td>428</td><td>230</td></tr><tr><td>427</td><td>235</td></tr><tr><td>426</td><td>240</td></tr><tr><td>425</td><td>279</td></tr><tr><td>424</td><td>284</td></tr><tr><td>423</td><td>309</td></tr><tr><td>422</td><td>315</td></tr><tr><td>421</td><td>336</td></tr><tr><td>420</td><td>340</td></tr><tr><td>419</td><td>398</td></tr><tr><td>418</td><td>404</td></tr><tr><td>417</td><td>419</td></tr><tr><td>416</td><td>427</td></tr><tr><td>415</td><td>475</td></tr><tr><td>414</td><td>487</td></tr><tr><td>413</td><td>511</td></tr><tr><td>412</td><td>519</td></tr><tr><td>411</td><td>548</td></tr><tr><td>410</td><td>559</td></tr><tr><td>409</td><td>631</td></tr><tr><td>408</td><td>643</td></tr><tr><td>407</td><td>663</td></tr><tr><td>406</td><td>672</td></tr><tr><td>405</td><td>727</td></tr><tr><td>404</td><td>747</td></tr><tr><td>403</td><td>788</td></tr><tr><td>402</td><td>797</td></tr><tr><td>401</td><td>843</td></tr><tr><td>400</td><td>854</td></tr><tr><td>399</td><td>951</td></tr><tr><td>398</td><td>963</td></tr><tr><td>397</td><td>991</td></tr><tr><td>396</td><td>1006</td></tr><tr><td>395</td><td>1084</td></tr><tr><td>394</td><td>1106</td></tr><tr><td>393</td><td>1167</td></tr><tr><td>392</td><td>1194</td></tr><tr><td>391</td><td>1255</td></tr><tr><td>390</td><td>1272</td></tr><tr><td>389</td><td>1373</td></tr><tr><td>388</td><td>1403</td></tr><tr><td>387</td><td>1445</td></tr><tr><td>386</td><td>1468</td></tr><tr><td>385</td><td>1548</td></tr><tr><td>384</td><td>1588</td></tr><tr><td>383</td><td>1663</td></tr><tr><td>382</td><td>1694</td></tr><tr><td>381</td><td>1764</td></tr><tr><td>380</td><td>1796</td></tr><tr><td>379</td><td>1909</td></tr><tr><td>378</td><td>1946</td></tr><tr><td>377</td><td>2003</td></tr><tr><td>376</td><td>2030</td></tr><tr><td>375</td><td>2142</td></tr><tr><td>374</td><td>2191</td></tr><tr><td>373</td><td>2276</td></tr><tr><td>372</td><td>2307</td></tr><tr><td>371</td><td>2407</td></tr><tr><td>370</td><td>2444</td></tr><tr><td>369</td><td>2607</td></tr><tr><td>368</td><td>2641</td></tr><tr><td>367</td><td>2722</td></tr><tr><td>366</td><td>2765</td></tr><tr><td>365</td><td>2910</td></tr><tr><td>364</td><td>2967</td></tr><tr><td>363</td><td>3073</td></tr><tr><td>362</td><td>3129</td></tr><tr><td>361</td><td>3259</td></tr><tr><td>360</td><td>3302</td></tr><tr><td>359</td><td>3476</td></tr><tr><td>358</td><td>3527</td></tr><tr><td>357</td><td>3616</td></tr><tr><td>356</td><td>3663</td></tr><tr><td>355</td><td>3807</td></tr><tr><td>354</td><td>3870</td></tr><tr><td>353</td><td>4010</td></tr><tr><td>352</td><td>4089</td></tr><tr><td>351</td><td>4214</td></tr><tr><td>350</td><td>4263</td></tr><tr><td>349</td><td>4429</td></tr><tr><td>348</td><td>4493</td></tr><tr><td>347</td><td>4592</td></tr><tr><td>346</td><td>4664</td></tr><tr><td>345</td><td>4822</td></tr><tr><td>344</td><td>4905</td></tr><tr><td>343</td><td>5040</td></tr><tr><td>342</td><td>5134</td></tr><tr><td>341</td><td>5270</td></tr><tr><td>340</td><td>5332</td></tr><tr><td>339</td><td>5564</td></tr><tr><td>338</td><td>5619</td></tr><tr><td>337</td><td>5735</td></tr><tr><td>336</td><td>5806</td></tr><tr><td>335</td><td>6002</td></tr><tr><td>334</td><td>6087</td></tr><tr><td>333</td><td>6207</td></tr><tr><td>332</td><td>6297</td></tr><tr><td>331</td><td>6424</td></tr><tr><td>330</td><td>6481</td></tr><tr><td>329</td><td>6712</td></tr><tr><td>328</td><td>6804</td></tr><tr><td>327</td><td>6945</td></tr><tr><td>326</td><td>7013</td></tr><tr><td>325</td><td>7232</td></tr><tr><td>324</td><td>7327</td></tr><tr><td>323</td><td>7456</td></tr><tr><td>322</td><td>7578</td></tr><tr><td>321</td><td>7754</td></tr><tr><td>320</td><td>7826</td></tr><tr><td>319</td><td>8077</td></tr><tr><td>318</td><td>8160</td></tr><tr><td>317</td><td>8288</td></tr><tr><td>316</td><td>8361</td></tr><tr><td>315</td><td>8596</td></tr><tr><td>314</td><td>8675</td></tr><tr><td>313</td><td>8814</td></tr><tr><td>312</td><td>8926</td></tr><tr><td>311</td><td>9069</td></tr><tr><td>310</td><td>9154</td></tr><tr><td>309</td><td>9418</td></tr><tr><td>308</td><td>9502</td></tr><tr><td>307</td><td>9644</td></tr><tr><td>306</td><td>9723</td></tr><tr><td>305</td><td>9948</td></tr><tr><td>304</td><td>10036</td></tr><tr><td>303</td><td>10168</td></tr><tr><td>302</td><td>10290</td></tr><tr><td>301</td><td>10444</td></tr><tr><td>300</td><td>10538</td></tr><tr><td>299</td><td>10841</td></tr><tr><td>298</td><td>10947</td></tr><tr><td>297</td><td>11069</td></tr><tr><td>296</td><td>11148</td></tr><tr><td>295</td><td>11421</td></tr><tr><td>294</td><td>11505</td></tr><tr><td>293</td><td>11628</td></tr><tr><td>292</td><td>11801</td></tr><tr><td>291</td><td>11945</td></tr><tr><td>290</td><td>12029</td></tr><tr><td>289</td><td>12328</td></tr><tr><td>288</td><td>12437</td></tr><tr><td>287</td><td>12572</td></tr><tr><td>286</td><td>12646</td></tr><tr><td>285</td><td>12883</td></tr><tr><td>284</td><td>12946</td></tr><tr><td>283</td><td>13065</td></tr><tr><td>282</td><td>13243</td></tr><tr><td>281</td><td>13363</td></tr><tr><td>280</td><td>13460</td></tr><tr><td>279</td><td>13749</td></tr><tr><td>278</td><td>13857</td></tr><tr><td>277</td><td>13983</td></tr><tr><td>276</td><td>14031</td></tr><tr><td>275</td><td>14274</td></tr><tr><td>274</td><td>14336</td></tr><tr><td>273</td><td>14428</td></tr><tr><td>272</td><td>14569</td></tr><tr><td>271</td><td>14684</td></tr><tr><td>270</td><td>14771</td></tr><tr><td>269</td><td>15049</td></tr><tr><td>268</td><td>15150</td></tr><tr><td>267</td><td>15260</td></tr><tr><td>266</td><td>15310</td></tr><tr><td>265</td><td>15596</td></tr><tr><td>264</td><td>15647</td></tr><tr><td>263</td><td>15734</td></tr><tr><td>262</td><td>15908</td></tr><tr><td>261</td><td>16003</td></tr><tr><td>260</td><td>16060</td></tr><tr><td>259</td><td>16303</td></tr><tr><td>258</td><td>16409</td></tr><tr><td>257</td><td>16505</td></tr><tr><td>256</td><td>16540</td></tr><tr><td>255</td><td>16793</td></tr><tr><td>254</td><td>16830</td></tr><tr><td>253</td><td>16882</td></tr><tr><td>252</td><td>17052</td></tr><tr><td>251</td><td>17141</td></tr><tr><td>250</td><td>17193</td></tr><tr><td>249</td><td>17415</td></tr><tr><td>248</td><td>17520</td></tr><tr><td>247</td><td>17589</td></tr><tr><td>246</td><td>17621</td></tr><tr><td>245</td><td>17846</td></tr><tr><td>244</td><td>17871</td></tr><tr><td>243</td><td>17918</td></tr><tr><td>242</td><td>18061</td></tr><tr><td>241</td><td>18130</td></tr><tr><td>240</td><td>18164</td></tr><tr><td>239</td><td>18367</td></tr><tr><td>238</td><td>18470</td></tr><tr><td>237</td><td>18527</td></tr><tr><td>236</td><td>18558</td></tr><tr><td>235</td><td>18756</td></tr><tr><td>234</td><td>18774</td></tr><tr><td>233</td><td>18812</td></tr><tr><td>232</td><td>18959</td></tr><tr><td>231</td><td>19029</td></tr><tr><td>230</td><td>19057</td></tr><tr><td>229</td><td>19218</td></tr><tr><td>228</td><td>19310</td></tr><tr><td>227</td><td>19353</td></tr><tr><td>226</td><td>19372</td></tr><tr><td>225</td><td>19546</td></tr><tr><td>224</td><td>19566</td></tr><tr><td>223</td><td>19603</td></tr><tr><td>222</td><td>19711</td></tr><tr><td>221</td><td>19765</td></tr><tr><td>220</td><td>19790</td></tr><tr><td>219</td><td>19953</td></tr><tr><td>218</td><td>20045</td></tr><tr><td>217</td><td>20079</td></tr><tr><td>216</td><td>20096</td></tr><tr><td>215</td><td>20255</td></tr><tr><td>214</td><td>20266</td></tr><tr><td>213</td><td>20290</td></tr><tr><td>212</td><td>20387</td></tr><tr><td>211</td><td>20433</td></tr><tr><td>210</td><td>20452</td></tr><tr><td>209</td><td>20567</td></tr><tr><td>208</td><td>20631</td></tr><tr><td>207</td><td>20654</td></tr><tr><td>206</td><td>20660</td></tr><tr><td>205</td><td>20772</td></tr><tr><td>204</td><td>20780</td></tr><tr><td>203</td><td>20799</td></tr><tr><td>202</td><td>20870</td></tr><tr><td>201</td><td>20910</td></tr><tr><td>200</td><td>20923</td></tr><tr><td>199</td><td>21015</td></tr><tr><td>198</td><td>21065</td></tr><tr><td>197</td><td>21079</td></tr><tr><td>196</td><td>21089</td></tr><tr><td>195</td><td>21177</td></tr><tr><td>194</td><td>21181</td></tr><tr><td>193</td><td>21195</td></tr><tr><td>192</td><td>21261</td></tr><tr><td>191</td><td>21291</td></tr><tr><td>190</td><td>21305</td></tr><tr><td>189</td><td>21386</td></tr><tr><td>188</td><td>21422</td></tr><tr><td>187</td><td>21434</td></tr><tr><td>186</td><td>21438</td></tr><tr><td>185</td><td>21536</td></tr><tr><td>184</td><td>21537</td></tr><tr><td>183</td><td>21543</td></tr><tr><td>182</td><td>21603</td></tr><tr><td>181</td><td>21631</td></tr><tr><td>180</td><td>21633</td></tr><tr><td>179</td><td>21722</td></tr><tr><td>178</td><td>21766</td></tr><tr><td>177</td><td>21771</td></tr><tr><td>176</td><td>21778</td></tr><tr><td>175</td><td>21853</td></tr><tr><td>174</td><td>21860</td></tr><tr><td>173</td><td>21870</td></tr><tr><td>172</td><td>21910</td></tr><tr><td>171</td><td>21929</td></tr><tr><td>170</td><td>21932</td></tr><tr><td>169</td><td>21999</td></tr><tr><td>168</td><td>22036</td></tr><tr><td>167</td><td>22043</td></tr><tr><td>166</td><td>22047</td></tr><tr><td>165</td><td>22104</td></tr><tr><td>164</td><td>22106</td></tr><tr><td>163</td><td>22110</td></tr><tr><td>162</td><td>22162</td></tr><tr><td>161</td><td>22176</td></tr><tr><td>160</td><td>22180</td></tr><tr><td>159</td><td>22219</td></tr><tr><td>158</td><td>22241</td></tr><tr><td>157</td><td>22245</td></tr><tr><td>156</td><td>22251</td></tr><tr><td>155</td><td>22315</td></tr><tr><td>153</td><td>22319</td></tr><tr><td>152</td><td>22354</td></tr><tr><td>151</td><td>22371</td></tr><tr><td>150</td><td>22372</td></tr><tr><td>149</td><td>22413</td></tr><tr><td>148</td><td>22437</td></tr><tr><td>147</td><td>22441</td></tr><tr><td>146</td><td>22442</td></tr><tr><td>145</td><td>22479</td></tr><tr><td>144</td><td>22481</td></tr><tr><td>143</td><td>22483</td></tr><tr><td>142</td><td>22504</td></tr><tr><td>140</td><td>22513</td></tr><tr><td>139</td><td>22539</td></tr><tr><td>138</td><td>22554</td></tr><tr><td>136</td><td>22558</td></tr><tr><td>133</td><td>22582</td></tr><tr><td>132</td><td>22610</td></tr><tr><td>131</td><td>22620</td></tr><tr><td>130</td><td>22621</td></tr><tr><td>129</td><td>22635</td></tr><tr><td>128</td><td>22641</td></tr><tr><td>126</td><td>22644</td></tr><tr><td>125</td><td>22673</td></tr><tr><td>123</td><td>22674</td></tr><tr><td>122</td><td>22687</td></tr><tr><td>120</td><td>22695</td></tr><tr><td>119</td><td>22708</td></tr><tr><td>118</td><td>22717</td></tr><tr><td>116</td><td>22718</td></tr><tr><td>115</td><td>22731</td></tr><tr><td>113</td><td>22732</td></tr><tr><td>112</td><td>22740</td></tr><tr><td>110</td><td>22746</td></tr><tr><td>109</td><td>22756</td></tr><tr><td>108</td><td>22762</td></tr><tr><td>106</td><td>22763</td></tr><tr><td>103</td><td>22770</td></tr><tr><td>102</td><td>22778</td></tr><tr><td>100</td><td>22782</td></tr><tr><td>99</td><td>22796</td></tr><tr><td>96</td><td>22799</td></tr><tr><td>93</td><td>22805</td></tr><tr><td>90</td><td>22811</td></tr><tr><td>89</td><td>22816</td></tr><tr><td>86</td><td>22817</td></tr><tr><td>83</td><td>22822</td></tr><tr><td>82</td><td>22824</td></tr><tr><td>80</td><td>22827</td></tr><tr><td>79</td><td>22838</td></tr><tr><td>76</td><td>22841</td></tr><tr><td>73</td><td>22847</td></tr><tr><td>72</td><td>22852</td></tr><tr><td>70</td><td>22854</td></tr><tr><td>66</td><td>22860</td></tr><tr><td>63</td><td>22862</td></tr><tr><td>62</td><td>22866</td></tr><tr><td>60</td><td>22867</td></tr><tr><td>56</td><td>22879</td></tr><tr><td>53</td><td>22881</td></tr><tr><td>50</td><td>22883</td></tr><tr><td>49</td><td>22893</td></tr><tr><td>46</td><td>22894</td></tr><tr><td>43</td><td>22895</td></tr><tr><td>40</td><td>22898</td></tr><tr><td>36</td><td>22901</td></tr><tr><td>35</td><td>22902</td></tr><tr><td>33</td><td>22903</td></tr><tr><td>30</td><td>22904</td></tr><tr><td>26</td><td>22914</td></tr><tr><td>23</td><td>22919</td></tr><tr><td>20</td><td>22927</td></tr><tr><td>12</td><td>22935</td></tr><tr><td>0</td><td>22936</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 85 premiers ayant un score supérieur ou égal à 450 sont listés ci-dessous.
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
            <td>Justin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Azdaz D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Solal S.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Chaptal, Paris</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Ayoub M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Lucas G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Condorcet - The French School of Sydney, Maroubra. NSW</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège la Fontaine, Laxou</td>
         </tr>
         <tr>
            <td>Louison M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Singapour, Singapour</td>
         </tr>
         <tr>
            <td>Mateo B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Ismael B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Edouard Lucas, Amiens</td>
         </tr>
         <tr>
            <td>Corentin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Marc Sangnier, Seyssins</td>
         </tr>
         <tr>
            <td>Alexis H.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Sainte Anne, Reze</td>
         </tr>
         <tr>
            <td>Malo C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Desdevises du Dézert, Lessay</td>
         </tr>
         <tr>
            <td>Maxime P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège le Clos Ferbois, Jargeau</td>
         </tr>
         <tr>
            <td>Anaïs E.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Olivier L.</td>
            <td>476</td>
            <td>17</td>
            <td>Collège Jean Jaurès, Castanet-Tolosan</td>
         </tr>
         <tr>
            <td>Clemente Z.</td>
            <td>476</td>
            <td>17</td>
            <td>Lycée St-Exupéry, Santiago</td>
         </tr>
         <tr>
            <td>Yohan V.</td>
            <td>476</td>
            <td>17</td>
            <td>Collège Jean Lurçat, Villejuif</td>
         </tr>
         <tr>
            <td>Hugo J.</td>
            <td>472</td>
            <td>20</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>470</td>
            <td>21</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège Leonard de Vinci, Carvin</td>
         </tr>
         <tr>
            <td>Emir M.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Lilas B.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège Des Seize Fontaines, Saint Zacharie</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Pierre I.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Mohamed R.</td>
            <td>470</td>
            <td>21</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Toinon D.</td>
            <td>470</td>
            <td>21</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Freddy S.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège André Malraux, Louvres</td>
         </tr>
         <tr>
            <td>Anthony L.</td>
            <td>470</td>
            <td>21</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Nathan P.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège les Molières, Les Essarts le Roi</td>
         </tr>
         <tr>
            <td>(u'aq j.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège Jules Verne, Neuville en Ferrain</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège Nicolas Haxo, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Max L.</td>
            <td>466</td>
            <td>31</td>
            <td>Lycée Français de San Francisco, San Francisco</td>
         </tr>
         <tr>
            <td>Luha F.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège du Montalet, Lacaune</td>
         </tr>
         <tr>
            <td>Sébastien V.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège Beaumarchais, Paris</td>
         </tr>
         <tr>
            <td>Pauline A.</td>
            <td>466</td>
            <td>31</td>
            <td>Collège la Lauzière, Aiguebelle</td>
         </tr>
         <tr>
            <td>Jean C.</td>
            <td>464</td>
            <td>38</td>
            <td>Collège Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Noé K.</td>
            <td>464</td>
            <td>38</td>
            <td>Collège Robert Schuman, Saint - Amarin</td>
         </tr>
         <tr>
            <td>Claire V.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Valentin R.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Cel le Gaucher, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Aurèle G.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège le Marchioux, Parthenay</td>
         </tr>
         <tr>
            <td>Sofiane B.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Robert Lasneau, Vendôme</td>
         </tr>
         <tr>
            <td>Romain O.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Gabriele L.</td>
            <td>460</td>
            <td>40</td>
            <td>Lycée Collège Camille See, Paris</td>
         </tr>
         <tr>
            <td>Roxane M.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Jean Jaurès, Castanet-Tolosan</td>
         </tr>
         <tr>
            <td>Colas C.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Diane B.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Gustave Doré, Hochfelden</td>
         </tr>
         <tr>
            <td>Anna O.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Bernard Palissy, Paris</td>
         </tr>
         <tr>
            <td>Eric L.</td>
            <td>460</td>
            <td>40</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Saint Joseph, Bain de Bretagne</td>
         </tr>
         <tr>
            <td>Pénélope N.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Montesquieu, Cugnaux</td>
         </tr>
         <tr>
            <td>Margaux C.</td>
            <td>460</td>
            <td>40</td>
            <td>Lycée International de Londres Winston Churchill, Wembley</td>
         </tr>
         <tr>
            <td>Maxime T.</td>
            <td>460</td>
            <td>40</td>
            <td>Collège Charles Péguy, Wittelsheim</td>
         </tr>
         <tr>
            <td>Samuel H.</td>
            <td>456</td>
            <td>55</td>
            <td>Collège André Boulloche, Bart</td>
         </tr>
         <tr>
            <td>Paul G.</td>
            <td>456</td>
            <td>55</td>
            <td>Lycée Français de Stavanger, Stavanger</td>
         </tr>
         <tr>
            <td>Roman B.</td>
            <td>456</td>
            <td>55</td>
            <td>École Internationale de la Peninsule, Palo Alto</td>
         </tr>
         <tr>
            <td>Blanche S.</td>
            <td>456</td>
            <td>55</td>
            <td>Lycée Français de San Francisco, San Francisco</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>456</td>
            <td>55</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Gertrude L.</td>
            <td>456</td>
            <td>55</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Baptiste Q.</td>
            <td>456</td>
            <td>55</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Nicolas T.</td>
            <td>455</td>
            <td>62</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Philippine H.</td>
            <td>454</td>
            <td>63</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Manon D.</td>
            <td>454</td>
            <td>63</td>
            <td>Collège Victor de Laprade, Montbrison</td>
         </tr>
         <tr>
            <td>Ethan K.</td>
            <td>454</td>
            <td>63</td>
            <td>Collège Manon Cormier, Bassens</td>
         </tr>
         <tr>
            <td>Paul P.</td>
            <td>454</td>
            <td>63</td>
            <td>Collège Jean Rostand, St Germain du Puy</td>
         </tr>
         <tr>
            <td>Grégoire M.</td>
            <td>454</td>
            <td>63</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>453</td>
            <td>68</td>
            <td>Collège André Citroën, Paris</td>
         </tr>
         <tr>
            <td>Elliott L.</td>
            <td>452</td>
            <td>69</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Gauthier G.</td>
            <td>452</td>
            <td>69</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Rémi M.</td>
            <td>451</td>
            <td>71</td>
            <td>Collège la Povidence, Tours</td>
         </tr>
         <tr>
            <td>Loïc L.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège Jean Lurçat, Frouard</td>
         </tr>
         <tr>
            <td>Pierre F.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège-Lycée Notre Dame Des Oiseaux, Paris</td>
         </tr>
         <tr>
            <td>Hortense A.</td>
            <td>450</td>
            <td>72</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège Cobergher, Bergues</td>
         </tr>
         <tr>
            <td>Laura W.</td>
            <td>450</td>
            <td>72</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège Hubert Robert, Méréville</td>
         </tr>
         <tr>
            <td>Jonasz J.</td>
            <td>450</td>
            <td>72</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Lucie L.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège Denecourt, Bois le Roi</td>
         </tr>
         <tr>
            <td>Léo C.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège Elsa Triolet, Le Mée sur Seine</td>
         </tr>
         <tr>
            <td>Celeste J.</td>
            <td>450</td>
            <td>72</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Alexis A.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Baptiste C.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège le Rochat, Les Rousses</td>
         </tr>
         <tr>
            <td>Guillaume D.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège les Prunais, Villiers</td>
         </tr>
         <tr>
            <td>Dai R.</td>
            <td>450</td>
            <td>72</td>
            <td>Collège André Citroën, Paris</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème (participation individuelle) : 20547 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>34</td></tr><tr><td>474</td><td>38</td></tr><tr><td>470</td><td>42</td></tr><tr><td>466</td><td>58</td></tr><tr><td>465</td><td>73</td></tr><tr><td>464</td><td>74</td></tr><tr><td>462</td><td>75</td></tr><tr><td>460</td><td>78</td></tr><tr><td>456</td><td>97</td></tr><tr><td>455</td><td>117</td></tr><tr><td>454</td><td>118</td></tr><tr><td>452</td><td>135</td></tr><tr><td>451</td><td>148</td></tr><tr><td>450</td><td>150</td></tr><tr><td>449</td><td>180</td></tr><tr><td>448</td><td>182</td></tr><tr><td>446</td><td>184</td></tr><tr><td>445</td><td>212</td></tr><tr><td>444</td><td>213</td></tr><tr><td>442</td><td>227</td></tr><tr><td>441</td><td>241</td></tr><tr><td>440</td><td>247</td></tr><tr><td>439</td><td>303</td></tr><tr><td>438</td><td>304</td></tr><tr><td>437</td><td>309</td></tr><tr><td>436</td><td>311</td></tr><tr><td>435</td><td>333</td></tr><tr><td>434</td><td>337</td></tr><tr><td>433</td><td>353</td></tr><tr><td>432</td><td>357</td></tr><tr><td>431</td><td>378</td></tr><tr><td>430</td><td>382</td></tr><tr><td>429</td><td>451</td></tr><tr><td>428</td><td>455</td></tr><tr><td>427</td><td>466</td></tr><tr><td>426</td><td>478</td></tr><tr><td>425</td><td>538</td></tr><tr><td>424</td><td>555</td></tr><tr><td>423</td><td>601</td></tr><tr><td>422</td><td>603</td></tr><tr><td>421</td><td>630</td></tr><tr><td>420</td><td>645</td></tr><tr><td>419</td><td>734</td></tr><tr><td>418</td><td>746</td></tr><tr><td>417</td><td>766</td></tr><tr><td>416</td><td>773</td></tr><tr><td>415</td><td>847</td></tr><tr><td>414</td><td>871</td></tr><tr><td>413</td><td>938</td></tr><tr><td>412</td><td>949</td></tr><tr><td>411</td><td>995</td></tr><tr><td>410</td><td>1011</td></tr><tr><td>409</td><td>1102</td></tr><tr><td>408</td><td>1119</td></tr><tr><td>407</td><td>1142</td></tr><tr><td>406</td><td>1161</td></tr><tr><td>405</td><td>1232</td></tr><tr><td>404</td><td>1249</td></tr><tr><td>403</td><td>1318</td></tr><tr><td>402</td><td>1335</td></tr><tr><td>401</td><td>1410</td></tr><tr><td>400</td><td>1444</td></tr><tr><td>399</td><td>1552</td></tr><tr><td>398</td><td>1580</td></tr><tr><td>397</td><td>1617</td></tr><tr><td>396</td><td>1650</td></tr><tr><td>395</td><td>1766</td></tr><tr><td>394</td><td>1800</td></tr><tr><td>393</td><td>1883</td></tr><tr><td>392</td><td>1901</td></tr><tr><td>391</td><td>1986</td></tr><tr><td>390</td><td>2016</td></tr><tr><td>389</td><td>2148</td></tr><tr><td>388</td><td>2182</td></tr><tr><td>387</td><td>2236</td></tr><tr><td>386</td><td>2273</td></tr><tr><td>385</td><td>2413</td></tr><tr><td>384</td><td>2467</td></tr><tr><td>383</td><td>2575</td></tr><tr><td>382</td><td>2605</td></tr><tr><td>381</td><td>2693</td></tr><tr><td>380</td><td>2741</td></tr><tr><td>379</td><td>2907</td></tr><tr><td>378</td><td>2949</td></tr><tr><td>377</td><td>3012</td></tr><tr><td>376</td><td>3069</td></tr><tr><td>375</td><td>3188</td></tr><tr><td>374</td><td>3254</td></tr><tr><td>373</td><td>3362</td></tr><tr><td>372</td><td>3398</td></tr><tr><td>371</td><td>3516</td></tr><tr><td>370</td><td>3558</td></tr><tr><td>369</td><td>3716</td></tr><tr><td>368</td><td>3772</td></tr><tr><td>367</td><td>3866</td></tr><tr><td>366</td><td>3926</td></tr><tr><td>365</td><td>4081</td></tr><tr><td>364</td><td>4146</td></tr><tr><td>363</td><td>4263</td></tr><tr><td>362</td><td>4311</td></tr><tr><td>361</td><td>4432</td></tr><tr><td>360</td><td>4492</td></tr><tr><td>359</td><td>4687</td></tr><tr><td>358</td><td>4732</td></tr><tr><td>357</td><td>4830</td></tr><tr><td>356</td><td>4889</td></tr><tr><td>355</td><td>5068</td></tr><tr><td>354</td><td>5131</td></tr><tr><td>353</td><td>5250</td></tr><tr><td>352</td><td>5315</td></tr><tr><td>351</td><td>5450</td></tr><tr><td>350</td><td>5507</td></tr><tr><td>349</td><td>5726</td></tr><tr><td>348</td><td>5784</td></tr><tr><td>347</td><td>5885</td></tr><tr><td>346</td><td>5943</td></tr><tr><td>345</td><td>6142</td></tr><tr><td>344</td><td>6218</td></tr><tr><td>343</td><td>6345</td></tr><tr><td>342</td><td>6432</td></tr><tr><td>341</td><td>6585</td></tr><tr><td>340</td><td>6638</td></tr><tr><td>339</td><td>6880</td></tr><tr><td>338</td><td>6945</td></tr><tr><td>337</td><td>7055</td></tr><tr><td>336</td><td>7123</td></tr><tr><td>335</td><td>7315</td></tr><tr><td>334</td><td>7392</td></tr><tr><td>333</td><td>7504</td></tr><tr><td>332</td><td>7606</td></tr><tr><td>331</td><td>7751</td></tr><tr><td>330</td><td>7829</td></tr><tr><td>329</td><td>8102</td></tr><tr><td>328</td><td>8172</td></tr><tr><td>327</td><td>8287</td></tr><tr><td>326</td><td>8345</td></tr><tr><td>325</td><td>8577</td></tr><tr><td>324</td><td>8651</td></tr><tr><td>323</td><td>8785</td></tr><tr><td>322</td><td>8873</td></tr><tr><td>321</td><td>9023</td></tr><tr><td>320</td><td>9106</td></tr><tr><td>319</td><td>9387</td></tr><tr><td>318</td><td>9476</td></tr><tr><td>317</td><td>9608</td></tr><tr><td>316</td><td>9668</td></tr><tr><td>315</td><td>9871</td></tr><tr><td>314</td><td>9957</td></tr><tr><td>313</td><td>10091</td></tr><tr><td>312</td><td>10209</td></tr><tr><td>311</td><td>10353</td></tr><tr><td>310</td><td>10410</td></tr><tr><td>309</td><td>10684</td></tr><tr><td>308</td><td>10752</td></tr><tr><td>307</td><td>10884</td></tr><tr><td>306</td><td>10950</td></tr><tr><td>305</td><td>11164</td></tr><tr><td>304</td><td>11232</td></tr><tr><td>303</td><td>11357</td></tr><tr><td>302</td><td>11478</td></tr><tr><td>301</td><td>11627</td></tr><tr><td>300</td><td>11723</td></tr><tr><td>299</td><td>11969</td></tr><tr><td>298</td><td>12028</td></tr><tr><td>297</td><td>12143</td></tr><tr><td>296</td><td>12189</td></tr><tr><td>295</td><td>12421</td></tr><tr><td>294</td><td>12489</td></tr><tr><td>293</td><td>12584</td></tr><tr><td>292</td><td>12715</td></tr><tr><td>291</td><td>12833</td></tr><tr><td>290</td><td>12911</td></tr><tr><td>289</td><td>13149</td></tr><tr><td>288</td><td>13228</td></tr><tr><td>287</td><td>13353</td></tr><tr><td>286</td><td>13383</td></tr><tr><td>285</td><td>13610</td></tr><tr><td>284</td><td>13660</td></tr><tr><td>283</td><td>13770</td></tr><tr><td>282</td><td>13888</td></tr><tr><td>281</td><td>13995</td></tr><tr><td>280</td><td>14052</td></tr><tr><td>279</td><td>14296</td></tr><tr><td>278</td><td>14363</td></tr><tr><td>277</td><td>14456</td></tr><tr><td>276</td><td>14494</td></tr><tr><td>275</td><td>14707</td></tr><tr><td>274</td><td>14748</td></tr><tr><td>273</td><td>14843</td></tr><tr><td>272</td><td>14948</td></tr><tr><td>271</td><td>15031</td></tr><tr><td>270</td><td>15084</td></tr><tr><td>269</td><td>15319</td></tr><tr><td>268</td><td>15400</td></tr><tr><td>267</td><td>15477</td></tr><tr><td>266</td><td>15514</td></tr><tr><td>265</td><td>15716</td></tr><tr><td>264</td><td>15752</td></tr><tr><td>263</td><td>15817</td></tr><tr><td>262</td><td>15928</td></tr><tr><td>261</td><td>16001</td></tr><tr><td>260</td><td>16049</td></tr><tr><td>259</td><td>16223</td></tr><tr><td>258</td><td>16289</td></tr><tr><td>257</td><td>16355</td></tr><tr><td>256</td><td>16369</td></tr><tr><td>255</td><td>16546</td></tr><tr><td>254</td><td>16578</td></tr><tr><td>253</td><td>16632</td></tr><tr><td>252</td><td>16742</td></tr><tr><td>251</td><td>16803</td></tr><tr><td>250</td><td>16849</td></tr><tr><td>249</td><td>17017</td></tr><tr><td>248</td><td>17098</td></tr><tr><td>247</td><td>17147</td></tr><tr><td>246</td><td>17159</td></tr><tr><td>245</td><td>17319</td></tr><tr><td>244</td><td>17349</td></tr><tr><td>243</td><td>17385</td></tr><tr><td>242</td><td>17469</td></tr><tr><td>241</td><td>17528</td></tr><tr><td>240</td><td>17560</td></tr><tr><td>239</td><td>17713</td></tr><tr><td>238</td><td>17782</td></tr><tr><td>237</td><td>17813</td></tr><tr><td>236</td><td>17821</td></tr><tr><td>235</td><td>17952</td></tr><tr><td>234</td><td>17973</td></tr><tr><td>233</td><td>18006</td></tr><tr><td>232</td><td>18082</td></tr><tr><td>231</td><td>18113</td></tr><tr><td>230</td><td>18134</td></tr><tr><td>229</td><td>18255</td></tr><tr><td>228</td><td>18316</td></tr><tr><td>227</td><td>18344</td></tr><tr><td>226</td><td>18360</td></tr><tr><td>225</td><td>18490</td></tr><tr><td>224</td><td>18498</td></tr><tr><td>223</td><td>18522</td></tr><tr><td>222</td><td>18581</td></tr><tr><td>221</td><td>18611</td></tr><tr><td>220</td><td>18623</td></tr><tr><td>219</td><td>18712</td></tr><tr><td>218</td><td>18760</td></tr><tr><td>217</td><td>18775</td></tr><tr><td>216</td><td>18783</td></tr><tr><td>215</td><td>18891</td></tr><tr><td>214</td><td>18896</td></tr><tr><td>213</td><td>18908</td></tr><tr><td>212</td><td>18963</td></tr><tr><td>211</td><td>18984</td></tr><tr><td>210</td><td>18993</td></tr><tr><td>209</td><td>19076</td></tr><tr><td>208</td><td>19109</td></tr><tr><td>207</td><td>19126</td></tr><tr><td>206</td><td>19133</td></tr><tr><td>205</td><td>19193</td></tr><tr><td>204</td><td>19198</td></tr><tr><td>203</td><td>19206</td></tr><tr><td>202</td><td>19266</td></tr><tr><td>201</td><td>19288</td></tr><tr><td>200</td><td>19300</td></tr><tr><td>199</td><td>19359</td></tr><tr><td>198</td><td>19388</td></tr><tr><td>197</td><td>19396</td></tr><tr><td>196</td><td>19402</td></tr><tr><td>195</td><td>19464</td></tr><tr><td>194</td><td>19471</td></tr><tr><td>193</td><td>19476</td></tr><tr><td>192</td><td>19508</td></tr><tr><td>191</td><td>19520</td></tr><tr><td>190</td><td>19522</td></tr><tr><td>189</td><td>19567</td></tr><tr><td>188</td><td>19591</td></tr><tr><td>187</td><td>19598</td></tr><tr><td>186</td><td>19603</td></tr><tr><td>185</td><td>19645</td></tr><tr><td>184</td><td>19650</td></tr><tr><td>183</td><td>19661</td></tr><tr><td>182</td><td>19682</td></tr><tr><td>180</td><td>19699</td></tr><tr><td>179</td><td>19738</td></tr><tr><td>178</td><td>19757</td></tr><tr><td>177</td><td>19764</td></tr><tr><td>176</td><td>19767</td></tr><tr><td>175</td><td>19801</td></tr><tr><td>173</td><td>19804</td></tr><tr><td>172</td><td>19820</td></tr><tr><td>171</td><td>19833</td></tr><tr><td>170</td><td>19834</td></tr><tr><td>169</td><td>19862</td></tr><tr><td>168</td><td>19873</td></tr><tr><td>167</td><td>19881</td></tr><tr><td>166</td><td>19882</td></tr><tr><td>165</td><td>19920</td></tr><tr><td>164</td><td>19922</td></tr><tr><td>163</td><td>19923</td></tr><tr><td>162</td><td>19944</td></tr><tr><td>161</td><td>19956</td></tr><tr><td>160</td><td>19959</td></tr><tr><td>159</td><td>19985</td></tr><tr><td>158</td><td>20002</td></tr><tr><td>156</td><td>20005</td></tr><tr><td>154</td><td>20025</td></tr><tr><td>153</td><td>20026</td></tr><tr><td>152</td><td>20047</td></tr><tr><td>150</td><td>20061</td></tr><tr><td>149</td><td>20088</td></tr><tr><td>148</td><td>20100</td></tr><tr><td>146</td><td>20102</td></tr><tr><td>145</td><td>20128</td></tr><tr><td>144</td><td>20130</td></tr><tr><td>143</td><td>20132</td></tr><tr><td>142</td><td>20144</td></tr><tr><td>141</td><td>20151</td></tr><tr><td>140</td><td>20152</td></tr><tr><td>139</td><td>20171</td></tr><tr><td>136</td><td>20182</td></tr><tr><td>133</td><td>20206</td></tr><tr><td>132</td><td>20215</td></tr><tr><td>131</td><td>20220</td></tr><tr><td>130</td><td>20221</td></tr><tr><td>129</td><td>20235</td></tr><tr><td>128</td><td>20241</td></tr><tr><td>126</td><td>20242</td></tr><tr><td>123</td><td>20253</td></tr><tr><td>122</td><td>20262</td></tr><tr><td>120</td><td>20267</td></tr><tr><td>119</td><td>20283</td></tr><tr><td>116</td><td>20288</td></tr><tr><td>113</td><td>20297</td></tr><tr><td>112</td><td>20307</td></tr><tr><td>110</td><td>20309</td></tr><tr><td>109</td><td>20324</td></tr><tr><td>106</td><td>20328</td></tr><tr><td>105</td><td>20336</td></tr><tr><td>103</td><td>20337</td></tr><tr><td>100</td><td>20343</td></tr><tr><td>99</td><td>20353</td></tr><tr><td>96</td><td>20354</td></tr><tr><td>93</td><td>20357</td></tr><tr><td>92</td><td>20363</td></tr><tr><td>90</td><td>20364</td></tr><tr><td>89</td><td>20374</td></tr><tr><td>86</td><td>20376</td></tr><tr><td>83</td><td>20378</td></tr><tr><td>82</td><td>20384</td></tr><tr><td>80</td><td>20385</td></tr><tr><td>79</td><td>20392</td></tr><tr><td>76</td><td>20394</td></tr><tr><td>75</td><td>20396</td></tr><tr><td>73</td><td>20397</td></tr><tr><td>72</td><td>20399</td></tr><tr><td>70</td><td>20401</td></tr><tr><td>69</td><td>20408</td></tr><tr><td>66</td><td>20409</td></tr><tr><td>62</td><td>20412</td></tr><tr><td>60</td><td>20413</td></tr><tr><td>56</td><td>20420</td></tr><tr><td>53</td><td>20425</td></tr><tr><td>50</td><td>20428</td></tr><tr><td>49</td><td>20432</td></tr><tr><td>43</td><td>20434</td></tr><tr><td>40</td><td>20435</td></tr><tr><td>32</td><td>20443</td></tr><tr><td>30</td><td>20444</td></tr><tr><td>26</td><td>20461</td></tr><tr><td>23</td><td>20463</td></tr><tr><td>20</td><td>20468</td></tr><tr><td>6</td><td>20486</td></tr><tr><td>0</td><td>20487</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 96 premiers ayant un score supérieur ou égal à 460 sont listés ci-dessous.
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
            <td>Thomas E.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint-Exupéry, Vélizy</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Arche du Lude, Joué lès Tours</td>
         </tr>
         <tr>
            <td>Ruben S.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Marwane T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Mendès France, Tunis</td>
         </tr>
         <tr>
            <td>Margot V.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Ixil M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Maelle J.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Erwan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Kerallan, Plouzane</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
         <tr>
            <td>José A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Alexandre Stellio, Les Anses d'Arlet</td>
         </tr>
         <tr>
            <td>Andrei P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Clay B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Jeddah, Jeddah</td>
         </tr>
         <tr>
            <td>Clara W.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Kléber, Haguenau</td>
         </tr>
         <tr>
            <td>Timothée D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jacques Callot, Neuves Maisons</td>
         </tr>
         <tr>
            <td>Léa B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Moulin, Verrieres-le-Buisson</td>
         </tr>
         <tr>
            <td>Evan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Etablissement Saint Joseph, La Pommeraye</td>
         </tr>
         <tr>
            <td>Jean A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Alexandre Stellio, Les Anses d'Arlet</td>
         </tr>
         <tr>
            <td>Perette B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Justin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Pablo Casals, Cabestany</td>
         </tr>
         <tr>
            <td>Maelle G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Loic H.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Gustave Courbet, Gonfreville l'Orcher</td>
         </tr>
         <tr>
            <td>Luc F.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Joseph-Anglade, Lézignan-Corbières</td>
         </tr>
         <tr>
            <td>Alexis S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International Victor Segalen, Hong Kong</td>
         </tr>
         <tr>
            <td>Guillaume N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Antoine A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Alice L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Maupas, Vire</td>
         </tr>
         <tr>
            <td>Etienne R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>476</td>
            <td>34</td>
            <td>Collège Victor Segalen, Châteaugiron</td>
         </tr>
         <tr>
            <td>Victoria K.</td>
            <td>476</td>
            <td>34</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Matthieu D.</td>
            <td>476</td>
            <td>34</td>
            <td>Collège Anne Frank, Morieres les Avignon</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>476</td>
            <td>34</td>
            <td>Collège Jacques Mercusot, Sombernon</td>
         </tr>
         <tr>
            <td>Alexandre V.</td>
            <td>474</td>
            <td>38</td>
            <td>Collège Frédéric Mistral, Saint-Maurice l'Exil</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>474</td>
            <td>38</td>
            <td>Collège Paul Bert, Cachan</td>
         </tr>
         <tr>
            <td>Alexandre M.</td>
            <td>474</td>
            <td>38</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Lucien B.</td>
            <td>474</td>
            <td>38</td>
            <td>Collège René Guy Cadou, Saint-Brévin-les-Pins</td>
         </tr>
         <tr>
            <td>Arthur B.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège les Cotes, Peronnas</td>
         </tr>
         <tr>
            <td>Brice J.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Victor Hugo, Nevers</td>
         </tr>
         <tr>
            <td>Alexandra C.</td>
            <td>470</td>
            <td>42</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Matteo B.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Château Forbin, Marseille</td>
         </tr>
         <tr>
            <td>Gero R.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Commandant Cousteau, Rognac</td>
         </tr>
         <tr>
            <td>Sophie R.</td>
            <td>470</td>
            <td>42</td>
            <td>Cité Scolaire du Lycée Claude Bernard, Paris</td>
         </tr>
         <tr>
            <td>Sarah I.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège du Stockfeld, Strasbourg</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Yves Coppens, Lannion</td>
         </tr>
         <tr>
            <td>Ryck B.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Rene Cassin, Lillers</td>
         </tr>
         <tr>
            <td>Damien S.</td>
            <td>470</td>
            <td>42</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>470</td>
            <td>42</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Malory L.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Pierre de Coubertin, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Thomas G.</td>
            <td>470</td>
            <td>42</td>
            <td>Cité Scolaire Jules Verne, Nantes</td>
         </tr>
         <tr>
            <td>Pienne T.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Saint Exupery, Avize</td>
         </tr>
         <tr>
            <td>Maxime L.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège Jacques Prévert, Châteauneuf-sur-Sarthe</td>
         </tr>
         <tr>
            <td>Gauthier V.</td>
            <td>470</td>
            <td>42</td>
            <td>Collège du Bellimont, Pernes en Artois</td>
         </tr>
         <tr>
            <td>Wilfried D.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Théodore Monod, Lesquin</td>
         </tr>
         <tr>
            <td>Elodie F.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège du Stockfeld, Strasbourg</td>
         </tr>
         <tr>
            <td>Gabin G.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Jean Grémillon, Saint-Clair-sur-l'Elle</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Raphael P.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Gambetta, Lys-Lez-Lannoy Cedex</td>
         </tr>
         <tr>
            <td>Brieult C.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Gaston Roupnel, Dijon</td>
         </tr>
         <tr>
            <td>Romain D.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Simin Palay, Lescar</td>
         </tr>
         <tr>
            <td>Oscar G.</td>
            <td>466</td>
            <td>58</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Louis P.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Croix Menée, Le Creusot</td>
         </tr>
         <tr>
            <td>Ishaq R.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Arche du Lude, Joué lès Tours</td>
         </tr>
         <tr>
            <td>Arthur D.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège les Avrils, Saint Mihiel</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Montchapet, Dijon</td>
         </tr>
         <tr>
            <td>Timothée R.</td>
            <td>466</td>
            <td>58</td>
            <td>Lycée René Goscinny, Warszawa</td>
         </tr>
         <tr>
            <td>Lise S.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège Saint-Exupéry, Vélizy</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>466</td>
            <td>58</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Enzo D.</td>
            <td>465</td>
            <td>73</td>
            <td>Collège Arche du Lude, Joué lès Tours</td>
         </tr>
         <tr>
            <td>Guillaume D.</td>
            <td>464</td>
            <td>74</td>
            <td>Collège Albert Schweitzer, La Bassée</td>
         </tr>
         <tr>
            <td>Federico A.</td>
            <td>462</td>
            <td>75</td>
            <td>Lycée Antoine et Consuelo de Saint Exupéry, Santa Tecla</td>
         </tr>
         <tr>
            <td>Zoé B.</td>
            <td>462</td>
            <td>75</td>
            <td>Collège Joliot-Curie, Tergnier</td>
         </tr>
         <tr>
            <td>Denis T.</td>
            <td>462</td>
            <td>75</td>
            <td>Collège Rosa Bonheur, Le Châtelet en Brie</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Maurienne, Saint Jean de Maurienne</td>
         </tr>
         <tr>
            <td>Pénélope A.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège F. MITTERRAND du Haut-Morvan, Montsauche-les-Settons</td>
         </tr>
         <tr>
            <td>Maëlle F.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Léo Ferré, Ambrieres les Vallees</td>
         </tr>
         <tr>
            <td>Berengere P.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Léo Ferré, Ambrieres les Vallees</td>
         </tr>
         <tr>
            <td>Martin V.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège les Provinces, Blois</td>
         </tr>
         <tr>
            <td>Arigna X.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Elsa Triolet, Le Mée sur Seine</td>
         </tr>
         <tr>
            <td>Éridan B.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Jean Rostand, Château-Thierry</td>
         </tr>
         <tr>
            <td>Raphael A.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Dupanloup, Boulogne Billancourt</td>
         </tr>
         <tr>
            <td>Gaël Q.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Croix Menée, Le Creusot</td>
         </tr>
         <tr>
            <td>Loïc R.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Gambetta, Arras Cédex</td>
         </tr>
         <tr>
            <td>Pablo B.</td>
            <td>460</td>
            <td>78</td>
            <td>Lycée Louis Pasteur, Bogota</td>
         </tr>
         <tr>
            <td>François H.</td>
            <td>460</td>
            <td>78</td>
            <td>Lycée Pierre Loti, Istanbul</td>
         </tr>
         <tr>
            <td>Dali S.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège la Providence, Strasbourg</td>
         </tr>
         <tr>
            <td>Louis P.</td>
            <td>460</td>
            <td>78</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Thomas S.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Quintefeuille, Courseulles sur Mer</td>
         </tr>
         <tr>
            <td>Gersande G.</td>
            <td>460</td>
            <td>78</td>
            <td>Institution Sevigne, Granville</td>
         </tr>
         <tr>
            <td>Zephirin F.</td>
            <td>460</td>
            <td>78</td>
            <td>Collège Revesz-Long, Crest</td>
         </tr>
         <tr>
            <td>Agnès L.</td>
            <td>460</td>
            <td>78</td>
            <td>Cité Scolaire Renoir, Angers</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde (participation individuelle) : 16738 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>75</td></tr><tr><td>475</td><td>85</td></tr><tr><td>474</td><td>86</td></tr><tr><td>472</td><td>92</td></tr><tr><td>470</td><td>96</td></tr><tr><td>469</td><td>132</td></tr><tr><td>467</td><td>133</td></tr><tr><td>466</td><td>134</td></tr><tr><td>465</td><td>159</td></tr><tr><td>464</td><td>160</td></tr><tr><td>462</td><td>171</td></tr><tr><td>460</td><td>181</td></tr><tr><td>459</td><td>245</td></tr><tr><td>457</td><td>246</td></tr><tr><td>456</td><td>247</td></tr><tr><td>455</td><td>283</td></tr><tr><td>454</td><td>289</td></tr><tr><td>452</td><td>314</td></tr><tr><td>451</td><td>325</td></tr><tr><td>450</td><td>330</td></tr><tr><td>449</td><td>409</td></tr><tr><td>448</td><td>410</td></tr><tr><td>447</td><td>421</td></tr><tr><td>446</td><td>425</td></tr><tr><td>445</td><td>475</td></tr><tr><td>444</td><td>485</td></tr><tr><td>443</td><td>508</td></tr><tr><td>442</td><td>514</td></tr><tr><td>441</td><td>539</td></tr><tr><td>440</td><td>546</td></tr><tr><td>439</td><td>627</td></tr><tr><td>438</td><td>629</td></tr><tr><td>437</td><td>642</td></tr><tr><td>436</td><td>655</td></tr><tr><td>435</td><td>735</td></tr><tr><td>434</td><td>747</td></tr><tr><td>433</td><td>797</td></tr><tr><td>432</td><td>806</td></tr><tr><td>431</td><td>846</td></tr><tr><td>430</td><td>858</td></tr><tr><td>429</td><td>986</td></tr><tr><td>428</td><td>997</td></tr><tr><td>427</td><td>1027</td></tr><tr><td>426</td><td>1038</td></tr><tr><td>425</td><td>1148</td></tr><tr><td>424</td><td>1166</td></tr><tr><td>423</td><td>1238</td></tr><tr><td>422</td><td>1250</td></tr><tr><td>421</td><td>1307</td></tr><tr><td>420</td><td>1329</td></tr><tr><td>419</td><td>1468</td></tr><tr><td>418</td><td>1485</td></tr><tr><td>417</td><td>1517</td></tr><tr><td>416</td><td>1526</td></tr><tr><td>415</td><td>1659</td></tr><tr><td>414</td><td>1682</td></tr><tr><td>413</td><td>1761</td></tr><tr><td>412</td><td>1775</td></tr><tr><td>411</td><td>1853</td></tr><tr><td>410</td><td>1869</td></tr><tr><td>409</td><td>2030</td></tr><tr><td>408</td><td>2050</td></tr><tr><td>407</td><td>2097</td></tr><tr><td>406</td><td>2120</td></tr><tr><td>405</td><td>2277</td></tr><tr><td>404</td><td>2313</td></tr><tr><td>403</td><td>2405</td></tr><tr><td>402</td><td>2434</td></tr><tr><td>401</td><td>2542</td></tr><tr><td>400</td><td>2584</td></tr><tr><td>399</td><td>2756</td></tr><tr><td>398</td><td>2789</td></tr><tr><td>397</td><td>2863</td></tr><tr><td>396</td><td>2901</td></tr><tr><td>395</td><td>3042</td></tr><tr><td>394</td><td>3091</td></tr><tr><td>393</td><td>3212</td></tr><tr><td>392</td><td>3232</td></tr><tr><td>391</td><td>3345</td></tr><tr><td>390</td><td>3382</td></tr><tr><td>389</td><td>3593</td></tr><tr><td>388</td><td>3626</td></tr><tr><td>387</td><td>3716</td></tr><tr><td>386</td><td>3761</td></tr><tr><td>385</td><td>3934</td></tr><tr><td>384</td><td>3992</td></tr><tr><td>383</td><td>4106</td></tr><tr><td>382</td><td>4151</td></tr><tr><td>381</td><td>4272</td></tr><tr><td>380</td><td>4331</td></tr><tr><td>379</td><td>4515</td></tr><tr><td>378</td><td>4570</td></tr><tr><td>377</td><td>4659</td></tr><tr><td>376</td><td>4714</td></tr><tr><td>375</td><td>4887</td></tr><tr><td>374</td><td>4946</td></tr><tr><td>373</td><td>5073</td></tr><tr><td>372</td><td>5109</td></tr><tr><td>371</td><td>5241</td></tr><tr><td>370</td><td>5298</td></tr><tr><td>369</td><td>5513</td></tr><tr><td>368</td><td>5580</td></tr><tr><td>367</td><td>5671</td></tr><tr><td>366</td><td>5711</td></tr><tr><td>365</td><td>5893</td></tr><tr><td>364</td><td>5976</td></tr><tr><td>363</td><td>6098</td></tr><tr><td>362</td><td>6156</td></tr><tr><td>361</td><td>6310</td></tr><tr><td>360</td><td>6364</td></tr><tr><td>359</td><td>6595</td></tr><tr><td>358</td><td>6650</td></tr><tr><td>357</td><td>6756</td></tr><tr><td>356</td><td>6824</td></tr><tr><td>355</td><td>7010</td></tr><tr><td>354</td><td>7085</td></tr><tr><td>353</td><td>7230</td></tr><tr><td>352</td><td>7297</td></tr><tr><td>351</td><td>7442</td></tr><tr><td>350</td><td>7495</td></tr><tr><td>349</td><td>7719</td></tr><tr><td>348</td><td>7779</td></tr><tr><td>347</td><td>7882</td></tr><tr><td>346</td><td>7947</td></tr><tr><td>345</td><td>8118</td></tr><tr><td>344</td><td>8197</td></tr><tr><td>343</td><td>8310</td></tr><tr><td>342</td><td>8392</td></tr><tr><td>341</td><td>8507</td></tr><tr><td>340</td><td>8565</td></tr><tr><td>339</td><td>8793</td></tr><tr><td>338</td><td>8852</td></tr><tr><td>337</td><td>8959</td></tr><tr><td>336</td><td>9023</td></tr><tr><td>335</td><td>9201</td></tr><tr><td>334</td><td>9276</td></tr><tr><td>333</td><td>9383</td></tr><tr><td>332</td><td>9458</td></tr><tr><td>331</td><td>9600</td></tr><tr><td>330</td><td>9655</td></tr><tr><td>329</td><td>9886</td></tr><tr><td>328</td><td>9941</td></tr><tr><td>327</td><td>10064</td></tr><tr><td>326</td><td>10121</td></tr><tr><td>325</td><td>10286</td></tr><tr><td>324</td><td>10360</td></tr><tr><td>323</td><td>10489</td></tr><tr><td>322</td><td>10572</td></tr><tr><td>321</td><td>10678</td></tr><tr><td>320</td><td>10725</td></tr><tr><td>319</td><td>10917</td></tr><tr><td>318</td><td>10962</td></tr><tr><td>317</td><td>11054</td></tr><tr><td>316</td><td>11099</td></tr><tr><td>315</td><td>11283</td></tr><tr><td>314</td><td>11339</td></tr><tr><td>313</td><td>11431</td></tr><tr><td>312</td><td>11516</td></tr><tr><td>311</td><td>11637</td></tr><tr><td>310</td><td>11681</td></tr><tr><td>309</td><td>11851</td></tr><tr><td>308</td><td>11901</td></tr><tr><td>307</td><td>11989</td></tr><tr><td>306</td><td>12038</td></tr><tr><td>305</td><td>12198</td></tr><tr><td>304</td><td>12249</td></tr><tr><td>303</td><td>12318</td></tr><tr><td>302</td><td>12394</td></tr><tr><td>301</td><td>12486</td></tr><tr><td>300</td><td>12527</td></tr><tr><td>299</td><td>12698</td></tr><tr><td>298</td><td>12740</td></tr><tr><td>297</td><td>12832</td></tr><tr><td>296</td><td>12860</td></tr><tr><td>295</td><td>13003</td></tr><tr><td>294</td><td>13053</td></tr><tr><td>293</td><td>13114</td></tr><tr><td>292</td><td>13167</td></tr><tr><td>291</td><td>13241</td></tr><tr><td>290</td><td>13277</td></tr><tr><td>289</td><td>13430</td></tr><tr><td>288</td><td>13468</td></tr><tr><td>287</td><td>13546</td></tr><tr><td>286</td><td>13573</td></tr><tr><td>285</td><td>13708</td></tr><tr><td>284</td><td>13746</td></tr><tr><td>283</td><td>13814</td></tr><tr><td>282</td><td>13878</td></tr><tr><td>281</td><td>13950</td></tr><tr><td>280</td><td>13979</td></tr><tr><td>279</td><td>14130</td></tr><tr><td>278</td><td>14170</td></tr><tr><td>277</td><td>14209</td></tr><tr><td>276</td><td>14230</td></tr><tr><td>275</td><td>14335</td></tr><tr><td>274</td><td>14358</td></tr><tr><td>273</td><td>14396</td></tr><tr><td>272</td><td>14454</td></tr><tr><td>271</td><td>14496</td></tr><tr><td>270</td><td>14509</td></tr><tr><td>269</td><td>14622</td></tr><tr><td>268</td><td>14654</td></tr><tr><td>267</td><td>14698</td></tr><tr><td>266</td><td>14712</td></tr><tr><td>265</td><td>14809</td></tr><tr><td>264</td><td>14828</td></tr><tr><td>263</td><td>14862</td></tr><tr><td>262</td><td>14905</td></tr><tr><td>261</td><td>14962</td></tr><tr><td>260</td><td>14982</td></tr><tr><td>259</td><td>15094</td></tr><tr><td>258</td><td>15125</td></tr><tr><td>257</td><td>15154</td></tr><tr><td>256</td><td>15164</td></tr><tr><td>255</td><td>15249</td></tr><tr><td>254</td><td>15262</td></tr><tr><td>253</td><td>15291</td></tr><tr><td>252</td><td>15335</td></tr><tr><td>251</td><td>15376</td></tr><tr><td>250</td><td>15395</td></tr><tr><td>249</td><td>15495</td></tr><tr><td>248</td><td>15518</td></tr><tr><td>247</td><td>15545</td></tr><tr><td>246</td><td>15562</td></tr><tr><td>245</td><td>15614</td></tr><tr><td>244</td><td>15626</td></tr><tr><td>243</td><td>15643</td></tr><tr><td>242</td><td>15681</td></tr><tr><td>241</td><td>15704</td></tr><tr><td>240</td><td>15712</td></tr><tr><td>239</td><td>15773</td></tr><tr><td>238</td><td>15794</td></tr><tr><td>237</td><td>15803</td></tr><tr><td>236</td><td>15808</td></tr><tr><td>235</td><td>15855</td></tr><tr><td>234</td><td>15860</td></tr><tr><td>233</td><td>15875</td></tr><tr><td>232</td><td>15905</td></tr><tr><td>231</td><td>15913</td></tr><tr><td>230</td><td>15921</td></tr><tr><td>229</td><td>15984</td></tr><tr><td>228</td><td>15994</td></tr><tr><td>227</td><td>16005</td></tr><tr><td>226</td><td>16008</td></tr><tr><td>225</td><td>16047</td></tr><tr><td>224</td><td>16050</td></tr><tr><td>223</td><td>16056</td></tr><tr><td>222</td><td>16076</td></tr><tr><td>221</td><td>16093</td></tr><tr><td>220</td><td>16099</td></tr><tr><td>219</td><td>16145</td></tr><tr><td>218</td><td>16155</td></tr><tr><td>217</td><td>16165</td></tr><tr><td>216</td><td>16169</td></tr><tr><td>215</td><td>16200</td></tr><tr><td>214</td><td>16204</td></tr><tr><td>213</td><td>16209</td></tr><tr><td>212</td><td>16225</td></tr><tr><td>211</td><td>16238</td></tr><tr><td>210</td><td>16241</td></tr><tr><td>209</td><td>16269</td></tr><tr><td>208</td><td>16278</td></tr><tr><td>206</td><td>16285</td></tr><tr><td>205</td><td>16301</td></tr><tr><td>204</td><td>16304</td></tr><tr><td>203</td><td>16307</td></tr><tr><td>202</td><td>16317</td></tr><tr><td>201</td><td>16325</td></tr><tr><td>200</td><td>16326</td></tr><tr><td>199</td><td>16351</td></tr><tr><td>198</td><td>16352</td></tr><tr><td>197</td><td>16355</td></tr><tr><td>196</td><td>16356</td></tr><tr><td>195</td><td>16369</td></tr><tr><td>194</td><td>16371</td></tr><tr><td>193</td><td>16372</td></tr><tr><td>192</td><td>16384</td></tr><tr><td>190</td><td>16387</td></tr><tr><td>189</td><td>16414</td></tr><tr><td>188</td><td>16420</td></tr><tr><td>187</td><td>16423</td></tr><tr><td>186</td><td>16425</td></tr><tr><td>185</td><td>16435</td></tr><tr><td>184</td><td>16437</td></tr><tr><td>183</td><td>16438</td></tr><tr><td>182</td><td>16446</td></tr><tr><td>180</td><td>16448</td></tr><tr><td>179</td><td>16458</td></tr><tr><td>178</td><td>16465</td></tr><tr><td>176</td><td>16468</td></tr><tr><td>175</td><td>16480</td></tr><tr><td>173</td><td>16482</td></tr><tr><td>172</td><td>16493</td></tr><tr><td>170</td><td>16498</td></tr><tr><td>169</td><td>16512</td></tr><tr><td>166</td><td>16518</td></tr><tr><td>164</td><td>16527</td></tr><tr><td>163</td><td>16528</td></tr><tr><td>162</td><td>16531</td></tr><tr><td>161</td><td>16532</td></tr><tr><td>160</td><td>16533</td></tr><tr><td>159</td><td>16545</td></tr><tr><td>156</td><td>16550</td></tr><tr><td>155</td><td>16558</td></tr><tr><td>154</td><td>16559</td></tr><tr><td>153</td><td>16560</td></tr><tr><td>152</td><td>16566</td></tr><tr><td>150</td><td>16567</td></tr><tr><td>149</td><td>16577</td></tr><tr><td>146</td><td>16579</td></tr><tr><td>143</td><td>16587</td></tr><tr><td>142</td><td>16591</td></tr><tr><td>140</td><td>16592</td></tr><tr><td>139</td><td>16599</td></tr><tr><td>136</td><td>16600</td></tr><tr><td>133</td><td>16603</td></tr><tr><td>130</td><td>16605</td></tr><tr><td>129</td><td>16609</td></tr><tr><td>126</td><td>16611</td></tr><tr><td>123</td><td>16619</td></tr><tr><td>122</td><td>16623</td></tr><tr><td>120</td><td>16627</td></tr><tr><td>116</td><td>16630</td></tr><tr><td>113</td><td>16631</td></tr><tr><td>112</td><td>16632</td></tr><tr><td>110</td><td>16633</td></tr><tr><td>106</td><td>16637</td></tr><tr><td>105</td><td>16638</td></tr><tr><td>100</td><td>16639</td></tr><tr><td>99</td><td>16640</td></tr><tr><td>93</td><td>16641</td></tr><tr><td>90</td><td>16642</td></tr><tr><td>86</td><td>16647</td></tr><tr><td>83</td><td>16648</td></tr><tr><td>80</td><td>16650</td></tr><tr><td>70</td><td>16652</td></tr><tr><td>66</td><td>16654</td></tr><tr><td>63</td><td>16655</td></tr><tr><td>60</td><td>16656</td></tr><tr><td>56</td><td>16659</td></tr><tr><td>50</td><td>16660</td></tr><tr><td>40</td><td>16662</td></tr><tr><td>36</td><td>16666</td></tr><tr><td>30</td><td>16667</td></tr><tr><td>23</td><td>16674</td></tr><tr><td>20</td><td>16677</td></tr><tr><td>12</td><td>16686</td></tr><tr><td>0</td><td>16687</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 84 premiers ayant un score supérieur ou égal à 476 sont listés ci-dessous.
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
            <td>Colin V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Philippe Lamour, Nîmes</td>
         </tr>
         <tr>
            <td>Elodie R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Natael B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Elodie B.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Beaupré, Haubourdin</td>
         </tr>
         <tr>
            <td>Lény N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Félix C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée International de Londres Winston Churchill, Wembley</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Jaafar R.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Arthur H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Ledoux, Besançon</td>
         </tr>
         <tr>
            <td>Rémy S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Lucas S.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Jordan C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Benjamin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Maximilien S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Forest de Maubeuge, Maubeuge</td>
         </tr>
         <tr>
            <td>Georges B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Boucher de Perthes, Abbeville</td>
         </tr>
         <tr>
            <td>Lisa P.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Elio G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Martin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Xavier C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Edouard Belin, Vesoul</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Ange V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Miguel M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Elise L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Léon G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Axel N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Gauthier S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Prouvé, Lomme</td>
         </tr>
         <tr>
            <td>Mathis L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Milo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Julien C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Elior M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Mathias Q.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint François d'Assise, La Roche-sur-Yon Cedex</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lafayette, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Maximilien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée International, Saint Germain en Laye</td>
         </tr>
         <tr>
            <td>Maxime L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée ¨Pasteur, Besançon</td>
         </tr>
         <tr>
            <td>Jad A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International Georges Pompidou, Dubai</td>
         </tr>
         <tr>
            <td>Clemence G.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Baptiste D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Julien de Balleure, Chalon-sur-Saône</td>
         </tr>
         <tr>
            <td>Allan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame Des Dunes, Dunkerque</td>
         </tr>
         <tr>
            <td>Roberto W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Vende A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Paul V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Léonard P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Baptiste B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Titouan L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Franco-Péruvien, Lima 33</td>
         </tr>
         <tr>
            <td>Réné D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Vauban, Brest</td>
         </tr>
         <tr>
            <td>Jerome D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Tristan E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Murat, Issoire</td>
         </tr>
         <tr>
            <td>Julien H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Eliott B.</td>
            <td>480</td>
            <td>1</td>
            <td>École Alsacienne, Paris</td>
         </tr>
         <tr>
            <td>Athur B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Bourdieu, Fronton</td>
         </tr>
         <tr>
            <td>Sébastien D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame de Grace, Maubeuge</td>
         </tr>
         <tr>
            <td>Maxime S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Yves Thépot, Quiper</td>
         </tr>
         <tr>
            <td>Francois R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Tom Q.</td>
            <td>480</td>
            <td>1</td>
            <td>Gustave Flaubert, Rouen</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Stéphane B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Laurine A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Stéphane Hessel, Vaison la Romaine</td>
         </tr>
         <tr>
            <td>Maël2 G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Cyprien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Lucas A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Simone Weil, Saint-Priest-en-Jarez</td>
         </tr>
         <tr>
            <td>Mathieu J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée du Parc, Lyon</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Killian G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Azrael Z.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Murat, Issoire</td>
         </tr>
         <tr>
            <td>Paul R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lavoisier, Auchel</td>
         </tr>
         <tr>
            <td>Yasmin Z.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Ewen P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Théotime M.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Valentin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pardailhan, Auch</td>
         </tr>
         <tr>
            <td>Julie A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Benjamin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Théo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gabriel Voisin, Tournus</td>
         </tr>
         <tr>
            <td>F D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Alex W.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Des Métiers Cfa Heinrich Nessel, Haguenau</td>
         </tr>
         <tr>
            <td>Rémi G.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Marie Curie, Vire</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Rémi P.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Fernand Darchicourt, Hénin Beaumont</td>
         </tr>
         <tr>
            <td>Lauranne G.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Saint François d'Assise, La Roche-sur-Yon Cedex</td>
         </tr>
         <tr>
            <td>Jose A.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Franco-Péruvien, Lima 33</td>
         </tr>
         <tr>
            <td>Maël D.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Leo P.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Emile C.</td>
            <td>476</td>
            <td>75</td>
            <td>Lycée Rochambeau French International School, Bethesda</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première (participation individuelle) : 6356 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>111</td></tr><tr><td>474</td><td>127</td></tr><tr><td>472</td><td>132</td></tr><tr><td>471</td><td>134</td></tr><tr><td>470</td><td>135</td></tr><tr><td>466</td><td>189</td></tr><tr><td>465</td><td>221</td></tr><tr><td>464</td><td>222</td></tr><tr><td>462</td><td>230</td></tr><tr><td>460</td><td>243</td></tr><tr><td>459</td><td>293</td></tr><tr><td>458</td><td>295</td></tr><tr><td>456</td><td>296</td></tr><tr><td>455</td><td>331</td></tr><tr><td>454</td><td>338</td></tr><tr><td>452</td><td>360</td></tr><tr><td>451</td><td>376</td></tr><tr><td>450</td><td>378</td></tr><tr><td>448</td><td>468</td></tr><tr><td>446</td><td>472</td></tr><tr><td>445</td><td>519</td></tr><tr><td>444</td><td>524</td></tr><tr><td>443</td><td>547</td></tr><tr><td>442</td><td>550</td></tr><tr><td>441</td><td>577</td></tr><tr><td>440</td><td>579</td></tr><tr><td>439</td><td>646</td></tr><tr><td>438</td><td>648</td></tr><tr><td>437</td><td>661</td></tr><tr><td>436</td><td>663</td></tr><tr><td>435</td><td>726</td></tr><tr><td>434</td><td>731</td></tr><tr><td>433</td><td>776</td></tr><tr><td>432</td><td>778</td></tr><tr><td>431</td><td>815</td></tr><tr><td>430</td><td>823</td></tr><tr><td>429</td><td>917</td></tr><tr><td>428</td><td>925</td></tr><tr><td>427</td><td>940</td></tr><tr><td>426</td><td>948</td></tr><tr><td>425</td><td>1026</td></tr><tr><td>424</td><td>1036</td></tr><tr><td>423</td><td>1066</td></tr><tr><td>422</td><td>1074</td></tr><tr><td>421</td><td>1112</td></tr><tr><td>420</td><td>1120</td></tr><tr><td>419</td><td>1233</td></tr><tr><td>418</td><td>1241</td></tr><tr><td>417</td><td>1265</td></tr><tr><td>416</td><td>1271</td></tr><tr><td>415</td><td>1356</td></tr><tr><td>414</td><td>1380</td></tr><tr><td>413</td><td>1419</td></tr><tr><td>412</td><td>1427</td></tr><tr><td>411</td><td>1465</td></tr><tr><td>410</td><td>1482</td></tr><tr><td>409</td><td>1585</td></tr><tr><td>408</td><td>1598</td></tr><tr><td>407</td><td>1629</td></tr><tr><td>406</td><td>1642</td></tr><tr><td>405</td><td>1716</td></tr><tr><td>404</td><td>1738</td></tr><tr><td>403</td><td>1804</td></tr><tr><td>402</td><td>1812</td></tr><tr><td>401</td><td>1857</td></tr><tr><td>400</td><td>1877</td></tr><tr><td>399</td><td>1979</td></tr><tr><td>398</td><td>1997</td></tr><tr><td>397</td><td>2023</td></tr><tr><td>396</td><td>2043</td></tr><tr><td>395</td><td>2117</td></tr><tr><td>394</td><td>2139</td></tr><tr><td>393</td><td>2188</td></tr><tr><td>392</td><td>2210</td></tr><tr><td>391</td><td>2259</td></tr><tr><td>390</td><td>2277</td></tr><tr><td>389</td><td>2370</td></tr><tr><td>388</td><td>2391</td></tr><tr><td>387</td><td>2421</td></tr><tr><td>386</td><td>2440</td></tr><tr><td>385</td><td>2522</td></tr><tr><td>384</td><td>2554</td></tr><tr><td>383</td><td>2613</td></tr><tr><td>382</td><td>2632</td></tr><tr><td>381</td><td>2680</td></tr><tr><td>380</td><td>2697</td></tr><tr><td>379</td><td>2787</td></tr><tr><td>378</td><td>2807</td></tr><tr><td>377</td><td>2841</td></tr><tr><td>376</td><td>2863</td></tr><tr><td>375</td><td>2932</td></tr><tr><td>374</td><td>2962</td></tr><tr><td>373</td><td>3014</td></tr><tr><td>372</td><td>3034</td></tr><tr><td>371</td><td>3099</td></tr><tr><td>370</td><td>3123</td></tr><tr><td>369</td><td>3221</td></tr><tr><td>368</td><td>3238</td></tr><tr><td>367</td><td>3271</td></tr><tr><td>366</td><td>3289</td></tr><tr><td>365</td><td>3359</td></tr><tr><td>364</td><td>3384</td></tr><tr><td>363</td><td>3432</td></tr><tr><td>362</td><td>3449</td></tr><tr><td>361</td><td>3508</td></tr><tr><td>360</td><td>3525</td></tr><tr><td>359</td><td>3600</td></tr><tr><td>358</td><td>3625</td></tr><tr><td>357</td><td>3657</td></tr><tr><td>356</td><td>3681</td></tr><tr><td>355</td><td>3757</td></tr><tr><td>354</td><td>3782</td></tr><tr><td>353</td><td>3825</td></tr><tr><td>352</td><td>3848</td></tr><tr><td>351</td><td>3898</td></tr><tr><td>350</td><td>3918</td></tr><tr><td>349</td><td>4005</td></tr><tr><td>348</td><td>4023</td></tr><tr><td>347</td><td>4070</td></tr><tr><td>346</td><td>4084</td></tr><tr><td>345</td><td>4152</td></tr><tr><td>344</td><td>4173</td></tr><tr><td>343</td><td>4209</td></tr><tr><td>342</td><td>4235</td></tr><tr><td>341</td><td>4281</td></tr><tr><td>340</td><td>4293</td></tr><tr><td>339</td><td>4364</td></tr><tr><td>338</td><td>4379</td></tr><tr><td>337</td><td>4407</td></tr><tr><td>336</td><td>4423</td></tr><tr><td>335</td><td>4469</td></tr><tr><td>334</td><td>4485</td></tr><tr><td>333</td><td>4521</td></tr><tr><td>332</td><td>4541</td></tr><tr><td>331</td><td>4575</td></tr><tr><td>330</td><td>4588</td></tr><tr><td>329</td><td>4653</td></tr><tr><td>328</td><td>4667</td></tr><tr><td>327</td><td>4697</td></tr><tr><td>326</td><td>4711</td></tr><tr><td>325</td><td>4762</td></tr><tr><td>324</td><td>4779</td></tr><tr><td>323</td><td>4821</td></tr><tr><td>322</td><td>4847</td></tr><tr><td>321</td><td>4866</td></tr><tr><td>320</td><td>4878</td></tr><tr><td>319</td><td>4937</td></tr><tr><td>318</td><td>4962</td></tr><tr><td>317</td><td>4996</td></tr><tr><td>316</td><td>5009</td></tr><tr><td>315</td><td>5050</td></tr><tr><td>314</td><td>5061</td></tr><tr><td>313</td><td>5078</td></tr><tr><td>312</td><td>5090</td></tr><tr><td>311</td><td>5120</td></tr><tr><td>310</td><td>5137</td></tr><tr><td>309</td><td>5181</td></tr><tr><td>308</td><td>5198</td></tr><tr><td>307</td><td>5219</td></tr><tr><td>306</td><td>5226</td></tr><tr><td>305</td><td>5272</td></tr><tr><td>304</td><td>5286</td></tr><tr><td>303</td><td>5306</td></tr><tr><td>302</td><td>5323</td></tr><tr><td>301</td><td>5347</td></tr><tr><td>300</td><td>5360</td></tr><tr><td>299</td><td>5406</td></tr><tr><td>298</td><td>5418</td></tr><tr><td>297</td><td>5444</td></tr><tr><td>296</td><td>5453</td></tr><tr><td>295</td><td>5493</td></tr><tr><td>294</td><td>5504</td></tr><tr><td>293</td><td>5513</td></tr><tr><td>292</td><td>5525</td></tr><tr><td>291</td><td>5543</td></tr><tr><td>290</td><td>5545</td></tr><tr><td>289</td><td>5590</td></tr><tr><td>288</td><td>5599</td></tr><tr><td>287</td><td>5608</td></tr><tr><td>286</td><td>5620</td></tr><tr><td>285</td><td>5648</td></tr><tr><td>284</td><td>5652</td></tr><tr><td>283</td><td>5669</td></tr><tr><td>282</td><td>5686</td></tr><tr><td>281</td><td>5703</td></tr><tr><td>280</td><td>5705</td></tr><tr><td>279</td><td>5739</td></tr><tr><td>278</td><td>5753</td></tr><tr><td>277</td><td>5767</td></tr><tr><td>276</td><td>5770</td></tr><tr><td>275</td><td>5795</td></tr><tr><td>274</td><td>5804</td></tr><tr><td>273</td><td>5819</td></tr><tr><td>272</td><td>5834</td></tr><tr><td>271</td><td>5844</td></tr><tr><td>270</td><td>5850</td></tr><tr><td>269</td><td>5875</td></tr><tr><td>268</td><td>5881</td></tr><tr><td>267</td><td>5888</td></tr><tr><td>266</td><td>5889</td></tr><tr><td>265</td><td>5912</td></tr><tr><td>264</td><td>5917</td></tr><tr><td>263</td><td>5924</td></tr><tr><td>262</td><td>5930</td></tr><tr><td>261</td><td>5933</td></tr><tr><td>260</td><td>5936</td></tr><tr><td>259</td><td>5960</td></tr><tr><td>258</td><td>5964</td></tr><tr><td>257</td><td>5978</td></tr><tr><td>256</td><td>5979</td></tr><tr><td>255</td><td>6000</td></tr><tr><td>254</td><td>6002</td></tr><tr><td>253</td><td>6009</td></tr><tr><td>252</td><td>6018</td></tr><tr><td>251</td><td>6030</td></tr><tr><td>250</td><td>6035</td></tr><tr><td>249</td><td>6058</td></tr><tr><td>248</td><td>6061</td></tr><tr><td>247</td><td>6063</td></tr><tr><td>246</td><td>6064</td></tr><tr><td>245</td><td>6072</td></tr><tr><td>244</td><td>6076</td></tr><tr><td>243</td><td>6078</td></tr><tr><td>242</td><td>6089</td></tr><tr><td>241</td><td>6094</td></tr><tr><td>240</td><td>6095</td></tr><tr><td>239</td><td>6114</td></tr><tr><td>238</td><td>6119</td></tr><tr><td>236</td><td>6123</td></tr><tr><td>234</td><td>6132</td></tr><tr><td>233</td><td>6135</td></tr><tr><td>232</td><td>6145</td></tr><tr><td>231</td><td>6150</td></tr><tr><td>230</td><td>6151</td></tr><tr><td>229</td><td>6161</td></tr><tr><td>228</td><td>6165</td></tr><tr><td>226</td><td>6167</td></tr><tr><td>225</td><td>6179</td></tr><tr><td>224</td><td>6180</td></tr><tr><td>223</td><td>6183</td></tr><tr><td>222</td><td>6188</td></tr><tr><td>220</td><td>6193</td></tr><tr><td>219</td><td>6208</td></tr><tr><td>218</td><td>6211</td></tr><tr><td>217</td><td>6216</td></tr><tr><td>216</td><td>6217</td></tr><tr><td>213</td><td>6224</td></tr><tr><td>212</td><td>6232</td></tr><tr><td>210</td><td>6235</td></tr><tr><td>209</td><td>6242</td></tr><tr><td>206</td><td>6244</td></tr><tr><td>205</td><td>6249</td></tr><tr><td>204</td><td>6250</td></tr><tr><td>203</td><td>6251</td></tr><tr><td>202</td><td>6252</td></tr><tr><td>200</td><td>6253</td></tr><tr><td>199</td><td>6260</td></tr><tr><td>196</td><td>6263</td></tr><tr><td>195</td><td>6267</td></tr><tr><td>193</td><td>6269</td></tr><tr><td>192</td><td>6271</td></tr><tr><td>190</td><td>6272</td></tr><tr><td>189</td><td>6275</td></tr><tr><td>188</td><td>6276</td></tr><tr><td>186</td><td>6279</td></tr><tr><td>185</td><td>6280</td></tr><tr><td>183</td><td>6281</td></tr><tr><td>180</td><td>6282</td></tr><tr><td>176</td><td>6284</td></tr><tr><td>173</td><td>6285</td></tr><tr><td>170</td><td>6289</td></tr><tr><td>169</td><td>6290</td></tr><tr><td>166</td><td>6292</td></tr><tr><td>162</td><td>6293</td></tr><tr><td>160</td><td>6294</td></tr><tr><td>159</td><td>6297</td></tr><tr><td>156</td><td>6298</td></tr><tr><td>153</td><td>6300</td></tr><tr><td>150</td><td>6301</td></tr><tr><td>146</td><td>6304</td></tr><tr><td>139</td><td>6306</td></tr><tr><td>138</td><td>6307</td></tr><tr><td>136</td><td>6309</td></tr><tr><td>133</td><td>6310</td></tr><tr><td>130</td><td>6311</td></tr><tr><td>129</td><td>6312</td></tr><tr><td>126</td><td>6313</td></tr><tr><td>119</td><td>6314</td></tr><tr><td>116</td><td>6315</td></tr><tr><td>109</td><td>6316</td></tr><tr><td>103</td><td>6317</td></tr><tr><td>100</td><td>6318</td></tr><tr><td>70</td><td>6319</td></tr><tr><td>66</td><td>6320</td></tr><tr><td>50</td><td>6321</td></tr><tr><td>40</td><td>6324</td></tr><tr><td>30</td><td>6325</td></tr><tr><td>20</td><td>6328</td></tr><tr><td>0</td><td>6333</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 110 premiers ayant un score supérieur ou égal à 477 sont listés ci-dessous.
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
            <td>Nancun J.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Sainte Louise, Paris</td>
         </tr>
         <tr>
            <td>Louis F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Calais</td>
         </tr>
         <tr>
            <td>Corentin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Adrien C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Mathis F.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Awena G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Macé, Lanester</td>
         </tr>
         <tr>
            <td>Yohan M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Quentin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Romain G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Mathis I.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Laurent R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Martin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Loritz, Nancy</td>
         </tr>
         <tr>
            <td>Mael R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Claude et Pierre Virlogeux, Riom</td>
         </tr>
         <tr>
            <td>Guillaume R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Valentin S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Philippe A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Axel C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Lois D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Dorian A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Damien P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Mathias D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Prague, Praha 5</td>
         </tr>
         <tr>
            <td>Simon D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Timothée L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Virgile D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Maël L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Bekir A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Jehan R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Madame de Stael, Montluçon</td>
         </tr>
         <tr>
            <td>Victor P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lycée Lasalle Passy Buzenval, Rueil Malmaison</td>
         </tr>
         <tr>
            <td>Tillian H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Prévert, Saint Christol Lez Alès</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alexis de Tocqueville, Grasse</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Astrance L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Bergès, Seyssinet Pariset</td>
         </tr>
         <tr>
            <td>Eliott K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Ledoux, Besançon</td>
         </tr>
         <tr>
            <td>Alexandre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Bangkok, Bangkok</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Calais</td>
         </tr>
         <tr>
            <td>Liam D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Jean-Christophe A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Vincent C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée en Forêt, Montargis</td>
         </tr>
         <tr>
            <td>Swan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Yanis D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de l'Emperi, Salon de Provence</td>
         </tr>
         <tr>
            <td>Yoann B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Celestin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Cartier, Saint-Malo</td>
         </tr>
         <tr>
            <td>Olivier F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Justine F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée du Noordover, Grande Synthe</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Léo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Ibrahim T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Mendès France, Tunis</td>
         </tr>
         <tr>
            <td>Anthony D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Herdrie, Vertou</td>
         </tr>
         <tr>
            <td>Guillaume E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Alvin A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Jules L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Léon F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée David d'Angers, Angers</td>
         </tr>
         <tr>
            <td>Antoine L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Rémi T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Germaine Tillion, Sain Bel</td>
         </tr>
         <tr>
            <td>Adrien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Prokop L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Prague, Praha 5</td>
         </tr>
         <tr>
            <td>Dorian C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean-Baptiste Schwilgué, Sélestat</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Guillaume R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Colin S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Louis-Marie K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Malo R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Poitiers</td>
         </tr>
         <tr>
            <td>Tom D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Woillez, Montreuil sur Mer</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gabriel Voisin, Tournus</td>
         </tr>
         <tr>
            <td>Alexandre G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Mathieu L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Stéphane Hessel, Vaison la Romaine</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Duhamel, Dole</td>
         </tr>
         <tr>
            <td>Aurelien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Joan V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Julien G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alexis de Tocqueville, Grasse</td>
         </tr>
         <tr>
            <td>Axel G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Léo K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Woillez, Montreuil sur Mer</td>
         </tr>
         <tr>
            <td>Matthew C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Des Mascareignes, Moka</td>
         </tr>
         <tr>
            <td>Corentin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase Lucie Berger, Strasbourg</td>
         </tr>
         <tr>
            <td>Matthieu N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emily Bronte, Lognes</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emily Bronte, Lognes</td>
         </tr>
         <tr>
            <td>Iannis C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Anthony B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alexandre Dumas, Saint-Cloud</td>
         </tr>
         <tr>
            <td>Jessy D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Dorian D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame de Bonnes Nouvelles, Beaupreau</td>
         </tr>
         <tr>
            <td>Pénélope D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Valentin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcelin Berthelot, Questembert</td>
         </tr>
         <tr>
            <td>Arthur F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Sophie L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de l'Emperi, Salon de Provence</td>
         </tr>
         <tr>
            <td>Olivier A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Justine L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Benjamin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Rene Perrin, Ugine</td>
         </tr>
         <tr>
            <td>Alaïs D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Adrien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Théophile A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Florian B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Lysiane B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Nathan T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>480</td>
            <td>1</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Cyril D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Sainte Marie, Beaucamps Ligny</td>
         </tr>
         <tr>
            <td>Sidoine A.</td>
            <td>480</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Alice B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Pierre T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Colbert, Lorient</td>
         </tr>
         <tr>
            <td>Jade A.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Antoine B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Nel B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Gaëtan C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale (participation individuelle) : 5383 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>185</td></tr><tr><td>475</td><td>210</td></tr><tr><td>474</td><td>211</td></tr><tr><td>472</td><td>219</td></tr><tr><td>470</td><td>225</td></tr><tr><td>469</td><td>318</td></tr><tr><td>468</td><td>319</td></tr><tr><td>466</td><td>320</td></tr><tr><td>465</td><td>355</td></tr><tr><td>464</td><td>359</td></tr><tr><td>462</td><td>374</td></tr><tr><td>461</td><td>389</td></tr><tr><td>460</td><td>390</td></tr><tr><td>458</td><td>481</td></tr><tr><td>456</td><td>485</td></tr><tr><td>455</td><td>544</td></tr><tr><td>454</td><td>546</td></tr><tr><td>453</td><td>573</td></tr><tr><td>452</td><td>577</td></tr><tr><td>451</td><td>603</td></tr><tr><td>450</td><td>608</td></tr><tr><td>449</td><td>688</td></tr><tr><td>448</td><td>690</td></tr><tr><td>447</td><td>697</td></tr><tr><td>446</td><td>702</td></tr><tr><td>445</td><td>766</td></tr><tr><td>444</td><td>771</td></tr><tr><td>443</td><td>807</td></tr><tr><td>442</td><td>808</td></tr><tr><td>441</td><td>833</td></tr><tr><td>440</td><td>839</td></tr><tr><td>439</td><td>944</td></tr><tr><td>438</td><td>945</td></tr><tr><td>437</td><td>958</td></tr><tr><td>436</td><td>962</td></tr><tr><td>435</td><td>1035</td></tr><tr><td>434</td><td>1047</td></tr><tr><td>433</td><td>1091</td></tr><tr><td>432</td><td>1094</td></tr><tr><td>431</td><td>1134</td></tr><tr><td>430</td><td>1147</td></tr><tr><td>429</td><td>1250</td></tr><tr><td>428</td><td>1254</td></tr><tr><td>427</td><td>1279</td></tr><tr><td>426</td><td>1284</td></tr><tr><td>425</td><td>1354</td></tr><tr><td>424</td><td>1369</td></tr><tr><td>423</td><td>1406</td></tr><tr><td>422</td><td>1412</td></tr><tr><td>421</td><td>1449</td></tr><tr><td>420</td><td>1458</td></tr><tr><td>419</td><td>1563</td></tr><tr><td>418</td><td>1572</td></tr><tr><td>417</td><td>1595</td></tr><tr><td>416</td><td>1605</td></tr><tr><td>415</td><td>1677</td></tr><tr><td>414</td><td>1696</td></tr><tr><td>413</td><td>1741</td></tr><tr><td>412</td><td>1747</td></tr><tr><td>411</td><td>1798</td></tr><tr><td>410</td><td>1813</td></tr><tr><td>409</td><td>1910</td></tr><tr><td>408</td><td>1927</td></tr><tr><td>407</td><td>1950</td></tr><tr><td>406</td><td>1961</td></tr><tr><td>405</td><td>2038</td></tr><tr><td>404</td><td>2058</td></tr><tr><td>403</td><td>2115</td></tr><tr><td>402</td><td>2127</td></tr><tr><td>401</td><td>2189</td></tr><tr><td>400</td><td>2206</td></tr><tr><td>399</td><td>2313</td></tr><tr><td>398</td><td>2330</td></tr><tr><td>397</td><td>2362</td></tr><tr><td>396</td><td>2369</td></tr><tr><td>395</td><td>2437</td></tr><tr><td>394</td><td>2455</td></tr><tr><td>393</td><td>2489</td></tr><tr><td>392</td><td>2502</td></tr><tr><td>391</td><td>2541</td></tr><tr><td>390</td><td>2559</td></tr><tr><td>389</td><td>2629</td></tr><tr><td>388</td><td>2647</td></tr><tr><td>387</td><td>2680</td></tr><tr><td>386</td><td>2696</td></tr><tr><td>385</td><td>2768</td></tr><tr><td>384</td><td>2790</td></tr><tr><td>383</td><td>2825</td></tr><tr><td>382</td><td>2835</td></tr><tr><td>381</td><td>2889</td></tr><tr><td>380</td><td>2902</td></tr><tr><td>379</td><td>2988</td></tr><tr><td>378</td><td>3000</td></tr><tr><td>377</td><td>3023</td></tr><tr><td>376</td><td>3037</td></tr><tr><td>375</td><td>3096</td></tr><tr><td>374</td><td>3127</td></tr><tr><td>373</td><td>3165</td></tr><tr><td>372</td><td>3182</td></tr><tr><td>371</td><td>3216</td></tr><tr><td>370</td><td>3228</td></tr><tr><td>369</td><td>3316</td></tr><tr><td>368</td><td>3330</td></tr><tr><td>367</td><td>3356</td></tr><tr><td>366</td><td>3366</td></tr><tr><td>365</td><td>3428</td></tr><tr><td>364</td><td>3441</td></tr><tr><td>363</td><td>3473</td></tr><tr><td>362</td><td>3486</td></tr><tr><td>361</td><td>3519</td></tr><tr><td>360</td><td>3536</td></tr><tr><td>359</td><td>3612</td></tr><tr><td>358</td><td>3624</td></tr><tr><td>357</td><td>3652</td></tr><tr><td>356</td><td>3669</td></tr><tr><td>355</td><td>3722</td></tr><tr><td>354</td><td>3732</td></tr><tr><td>353</td><td>3773</td></tr><tr><td>352</td><td>3785</td></tr><tr><td>351</td><td>3819</td></tr><tr><td>350</td><td>3825</td></tr><tr><td>349</td><td>3881</td></tr><tr><td>348</td><td>3896</td></tr><tr><td>347</td><td>3920</td></tr><tr><td>346</td><td>3937</td></tr><tr><td>345</td><td>3987</td></tr><tr><td>344</td><td>4003</td></tr><tr><td>343</td><td>4033</td></tr><tr><td>342</td><td>4046</td></tr><tr><td>341</td><td>4074</td></tr><tr><td>340</td><td>4084</td></tr><tr><td>339</td><td>4143</td></tr><tr><td>338</td><td>4152</td></tr><tr><td>337</td><td>4163</td></tr><tr><td>336</td><td>4173</td></tr><tr><td>335</td><td>4202</td></tr><tr><td>334</td><td>4211</td></tr><tr><td>333</td><td>4232</td></tr><tr><td>332</td><td>4243</td></tr><tr><td>331</td><td>4279</td></tr><tr><td>330</td><td>4296</td></tr><tr><td>329</td><td>4348</td></tr><tr><td>328</td><td>4363</td></tr><tr><td>327</td><td>4390</td></tr><tr><td>326</td><td>4399</td></tr><tr><td>325</td><td>4434</td></tr><tr><td>324</td><td>4450</td></tr><tr><td>323</td><td>4468</td></tr><tr><td>322</td><td>4477</td></tr><tr><td>321</td><td>4500</td></tr><tr><td>320</td><td>4510</td></tr><tr><td>319</td><td>4554</td></tr><tr><td>318</td><td>4562</td></tr><tr><td>317</td><td>4581</td></tr><tr><td>316</td><td>4592</td></tr><tr><td>315</td><td>4617</td></tr><tr><td>314</td><td>4625</td></tr><tr><td>313</td><td>4641</td></tr><tr><td>312</td><td>4651</td></tr><tr><td>311</td><td>4667</td></tr><tr><td>310</td><td>4670</td></tr><tr><td>309</td><td>4706</td></tr><tr><td>308</td><td>4714</td></tr><tr><td>307</td><td>4728</td></tr><tr><td>306</td><td>4733</td></tr><tr><td>305</td><td>4767</td></tr><tr><td>304</td><td>4774</td></tr><tr><td>303</td><td>4787</td></tr><tr><td>302</td><td>4795</td></tr><tr><td>301</td><td>4808</td></tr><tr><td>300</td><td>4813</td></tr><tr><td>299</td><td>4840</td></tr><tr><td>298</td><td>4849</td></tr><tr><td>297</td><td>4856</td></tr><tr><td>296</td><td>4860</td></tr><tr><td>295</td><td>4880</td></tr><tr><td>294</td><td>4883</td></tr><tr><td>293</td><td>4895</td></tr><tr><td>292</td><td>4904</td></tr><tr><td>291</td><td>4914</td></tr><tr><td>290</td><td>4920</td></tr><tr><td>289</td><td>4938</td></tr><tr><td>288</td><td>4943</td></tr><tr><td>287</td><td>4961</td></tr><tr><td>286</td><td>4962</td></tr><tr><td>285</td><td>4980</td></tr><tr><td>284</td><td>4986</td></tr><tr><td>283</td><td>4997</td></tr><tr><td>282</td><td>5007</td></tr><tr><td>281</td><td>5017</td></tr><tr><td>280</td><td>5019</td></tr><tr><td>279</td><td>5042</td></tr><tr><td>278</td><td>5048</td></tr><tr><td>277</td><td>5056</td></tr><tr><td>276</td><td>5058</td></tr><tr><td>275</td><td>5071</td></tr><tr><td>274</td><td>5072</td></tr><tr><td>273</td><td>5077</td></tr><tr><td>272</td><td>5081</td></tr><tr><td>271</td><td>5088</td></tr><tr><td>270</td><td>5092</td></tr><tr><td>269</td><td>5109</td></tr><tr><td>268</td><td>5113</td></tr><tr><td>267</td><td>5118</td></tr><tr><td>266</td><td>5119</td></tr><tr><td>265</td><td>5132</td></tr><tr><td>264</td><td>5133</td></tr><tr><td>263</td><td>5138</td></tr><tr><td>262</td><td>5147</td></tr><tr><td>261</td><td>5151</td></tr><tr><td>260</td><td>5152</td></tr><tr><td>259</td><td>5162</td></tr><tr><td>258</td><td>5165</td></tr><tr><td>257</td><td>5170</td></tr><tr><td>256</td><td>5171</td></tr><tr><td>254</td><td>5187</td></tr><tr><td>253</td><td>5189</td></tr><tr><td>252</td><td>5192</td></tr><tr><td>251</td><td>5194</td></tr><tr><td>250</td><td>5197</td></tr><tr><td>249</td><td>5206</td></tr><tr><td>248</td><td>5209</td></tr><tr><td>247</td><td>5213</td></tr><tr><td>246</td><td>5216</td></tr><tr><td>245</td><td>5226</td></tr><tr><td>244</td><td>5227</td></tr><tr><td>243</td><td>5229</td></tr><tr><td>242</td><td>5231</td></tr><tr><td>241</td><td>5233</td></tr><tr><td>240</td><td>5234</td></tr><tr><td>239</td><td>5240</td></tr><tr><td>236</td><td>5243</td></tr><tr><td>235</td><td>5245</td></tr><tr><td>233</td><td>5246</td></tr><tr><td>232</td><td>5251</td></tr><tr><td>230</td><td>5252</td></tr><tr><td>228</td><td>5254</td></tr><tr><td>226</td><td>5257</td></tr><tr><td>224</td><td>5258</td></tr><tr><td>223</td><td>5260</td></tr><tr><td>222</td><td>5263</td></tr><tr><td>220</td><td>5265</td></tr><tr><td>219</td><td>5272</td></tr><tr><td>218</td><td>5275</td></tr><tr><td>217</td><td>5277</td></tr><tr><td>216</td><td>5278</td></tr><tr><td>214</td><td>5280</td></tr><tr><td>213</td><td>5281</td></tr><tr><td>212</td><td>5284</td></tr><tr><td>211</td><td>5287</td></tr><tr><td>210</td><td>5288</td></tr><tr><td>209</td><td>5298</td></tr><tr><td>206</td><td>5299</td></tr><tr><td>202</td><td>5301</td></tr><tr><td>200</td><td>5302</td></tr><tr><td>199</td><td>5306</td></tr><tr><td>198</td><td>5307</td></tr><tr><td>193</td><td>5308</td></tr><tr><td>192</td><td>5309</td></tr><tr><td>190</td><td>5310</td></tr><tr><td>189</td><td>5312</td></tr><tr><td>186</td><td>5313</td></tr><tr><td>184</td><td>5316</td></tr><tr><td>183</td><td>5317</td></tr><tr><td>181</td><td>5319</td></tr><tr><td>180</td><td>5320</td></tr><tr><td>174</td><td>5321</td></tr><tr><td>172</td><td>5322</td></tr><tr><td>170</td><td>5323</td></tr><tr><td>166</td><td>5326</td></tr><tr><td>157</td><td>5328</td></tr><tr><td>156</td><td>5329</td></tr><tr><td>154</td><td>5332</td></tr><tr><td>152</td><td>5333</td></tr><tr><td>150</td><td>5334</td></tr><tr><td>142</td><td>5336</td></tr><tr><td>140</td><td>5337</td></tr><tr><td>130</td><td>5338</td></tr><tr><td>126</td><td>5339</td></tr><tr><td>123</td><td>5340</td></tr><tr><td>120</td><td>5342</td></tr><tr><td>119</td><td>5343</td></tr><tr><td>116</td><td>5344</td></tr><tr><td>106</td><td>5345</td></tr><tr><td>96</td><td>5347</td></tr><tr><td>90</td><td>5348</td></tr><tr><td>89</td><td>5349</td></tr><tr><td>83</td><td>5350</td></tr><tr><td>76</td><td>5353</td></tr><tr><td>73</td><td>5354</td></tr><tr><td>70</td><td>5355</td></tr><tr><td>60</td><td>5357</td></tr><tr><td>53</td><td>5359</td></tr><tr><td>43</td><td>5360</td></tr><tr><td>40</td><td>5361</td></tr><tr><td>30</td><td>5363</td></tr><tr><td>20</td><td>5365</td></tr><tr><td>0</td><td>5367</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 184 premiers ayant un score supérieur ou égal à 477 sont listés ci-dessous.
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
            <td>Baptiste Q.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Valentin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Aymeric G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Gabrielle R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louise Weiss, Achères</td>
         </tr>
         <tr>
            <td>Corentin F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Bart, Dunkerque</td>
         </tr>
         <tr>
            <td>Julien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Notre Dame Des Oiseaux, Paris</td>
         </tr>
         <tr>
            <td>Aurelien D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Richard S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Valentin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Michel, Lons le Saunier</td>
         </tr>
         <tr>
            <td>Hugo M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Corentin R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Christian C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée l'Essouriau, Les Ulis</td>
         </tr>
         <tr>
            <td>Matteo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Sylvain N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Bryan F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Rene Perrin, Ugine</td>
         </tr>
         <tr>
            <td>Axel V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Yoann R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Albert Camus, Fréjus</td>
         </tr>
         <tr>
            <td>Grégoire B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Lunel</td>
         </tr>
         <tr>
            <td>Delphine G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Thomas P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vieljeux, La Rochelle</td>
         </tr>
         <tr>
            <td>Matteo C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>François C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Camille Claudel, Blain</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
         <tr>
            <td>Ramy B.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Quentin N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Coline V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guy de Maupassant, Colombes</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Charles de Gaulle, Poissy</td>
         </tr>
         <tr>
            <td>Greg H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Carnot Bertin, Saumur</td>
         </tr>
         <tr>
            <td>Ariane C.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Armand R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Clément N.</td>
            <td>480</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Enzo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Matthieu S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Thomas O.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Michel C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Lukas L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Claudel, Ottawa</td>
         </tr>
         <tr>
            <td>Lilian B.</td>
            <td>480</td>
            <td>1</td>
            <td>Institution Saint Francois, La Cote Saint Andre</td>
         </tr>
         <tr>
            <td>Nils C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Cezanne, Aix en Provence</td>
         </tr>
         <tr>
            <td>Loïc M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée en Forêt, Montargis</td>
         </tr>
         <tr>
            <td>Florent B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vaucanson, Tours</td>
         </tr>
         <tr>
            <td>Gautier D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Madeleine B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Condorcet, Belfort</td>
         </tr>
         <tr>
            <td>Manon M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Quentin N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred Mézières, Longwy</td>
         </tr>
         <tr>
            <td>Victor L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Léa D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Mathieu S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Clemenceau, Nantes</td>
         </tr>
         <tr>
            <td>Eulalie C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Ulysse R.</td>
            <td>480</td>
            <td>1</td>
            <td>Robin, Vienne</td>
         </tr>
         <tr>
            <td>Valentin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame du Mur - Le Porsmeur, Morlaix</td>
         </tr>
         <tr>
            <td>Louis R.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Ruben J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Charlemagne, Paris</td>
         </tr>
         <tr>
            <td>Julien J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Nicolas W.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Léo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Louis F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Mathieu P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Hicham E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Colbert, Tourcoing</td>
         </tr>
         <tr>
            <td>Anthony D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Descartes, Phnom Penh</td>
         </tr>
         <tr>
            <td>Haludan I.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Antoine G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Guillaume F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Anthony G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée d'Apt, Apt</td>
         </tr>
         <tr>
            <td>Max B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Samuel P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monge la Chauvinière, Nantes</td>
         </tr>
         <tr>
            <td>Victor B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée les 3 Sources, Bourg-lès-Valence</td>
         </tr>
         <tr>
            <td>Julien Z.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Vallée de Chevreuse, Gif sur Yvette</td>
         </tr>
         <tr>
            <td>Morgane R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Ambroise R.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Léonard B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Nathan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Alex W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Eloi L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Antoine H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Connor C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Kastler Guitton, La Roche sur Yon</td>
         </tr>
         <tr>
            <td>Loïc G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Camille Claudel, Blain</td>
         </tr>
         <tr>
            <td>Léa S.</td>
            <td>480</td>
            <td>1</td>
            <td>Robin, Vienne</td>
         </tr>
         <tr>
            <td>Jérémy R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Loritz, Nancy</td>
         </tr>
         <tr>
            <td>Prisca B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Hugo F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Banville, Moulins</td>
         </tr>
         <tr>
            <td>Stéphane P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Marc N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Raymond Naves, Toulouse</td>
         </tr>
         <tr>
            <td>Kévin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Villon, Beaugency</td>
         </tr>
         <tr>
            <td>Guillian T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Truffaut, Challans</td>
         </tr>
         <tr>
            <td>Nathan P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Aubin la Salle, Saint Sylvain d'Anjou Cedex</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monge la Chauvinière, Nantes</td>
         </tr>
         <tr>
            <td>Pauline G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Alain F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Patrick B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de l'Emperi, Salon de Provence</td>
         </tr>
         <tr>
            <td>Rémi L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Rene Perrin, Ugine</td>
         </tr>
         <tr>
            <td>Théo C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Tugdual C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Julie L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Dan F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Sylvain P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Bogdan M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Ludovic R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Immaculée Conception, Laval</td>
         </tr>
         <tr>
            <td>Louise B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Corneille, Rouen</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Alvaro A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Madrid, Madrid</td>
         </tr>
         <tr>
            <td>Maxime R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Des Glières, Annemasse</td>
         </tr>
         <tr>
            <td>Lucas L.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alexandre Dumas, Saint-Cloud</td>
         </tr>
         <tr>
            <td>Alexis L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vieljeux, La Rochelle</td>
         </tr>
         <tr>
            <td>Antoine B.</td>
            <td>480</td>
            <td>1</td>
            <td>Groupe Scolaire Albert le Grand, Bordeaux</td>
         </tr>
         <tr>
            <td>Benoît H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Ionesco, Issy les Moulineaux</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Sabrina M.</td>
            <td>480</td>
            <td>1</td>
            <td>Notre Dame de la Providence, Vincennes</td>
         </tr>
         <tr>
            <td>Niels C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lycée Lasalle Passy Buzenval, Rueil Malmaison</td>
         </tr>
         <tr>
            <td>Marius R.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Olivier S.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Clément D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Alessio Yuri B.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Eloi B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Malo K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Paul, Vannes</td>
         </tr>
         <tr>
            <td>Thep-Ananh V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Josué Hoffet, Vientiane</td>
         </tr>
         <tr>
            <td>Michaël L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Aristide Briand, Saint Nazaire</td>
         </tr>
         <tr>
            <td>Thibault A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Johan P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Beaussier, La Seyne-sur-Mer</td>
         </tr>
         <tr>
            <td>Adrien D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         <tr>
            <td>Antony K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Auguste Angellier, Dunkerque</td>
         </tr>
         <tr>
            <td>Solal G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guebre Mariam, Addis Abeba</td>
         </tr>
         <tr>
            <td>Antoine S.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Hugo A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emily Bronte, Lognes</td>
         </tr>
         <tr>
            <td>Téo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Adrien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Cordouan, Royan</td>
         </tr>
         <tr>
            <td>Théo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montdory, Thiers</td>
         </tr>
         <tr>
            <td>Théo M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Myriam M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Mélissa R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Bernard Palissy, Saintes</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Corentin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Samuel N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Alexandre T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Maxime T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Robin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Grégoire J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jeanne d'Arc, Nancy</td>
         </tr>
         <tr>
            <td>Samantha C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Loan S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montdory, Thiers</td>
         </tr>
         <tr>
            <td>Tristan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Franco-Allemand, Buc</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Thibault L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Dominique, Nancy</td>
         </tr>
         <tr>
            <td>Paul I.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Matthieu C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Boutet de Monvel, Luneville</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Boissy d'Anglas, Annonay</td>
         </tr>
         <tr>
            <td>Alexandra T.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Rémi D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Martinière Duchère, Lyon</td>
         </tr>
         <tr>
            <td>Stephane L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Des Pays Bas, La Haye</td>
         </tr>
         <tr>
            <td>Steven V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Théo A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Loritz, Nancy</td>
         </tr>
         <tr>
            <td>Timothée M.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Mathieu F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Mendes France, Peronne</td>
         </tr>
         <tr>
            <td>Alexandre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Loritz, Nancy</td>
         </tr>
         <tr>
            <td>Louis B.</td>
            <td>480</td>
            <td>1</td>
            <td>Insitut Notre Dame, Bourg-la-Reine</td>
         </tr>
         <tr>
            <td>Quentin N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emily Bronte, Lognes</td>
         </tr>
         <tr>
            <td>Cyril F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Hugo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marc Bloch, Bischheim</td>
         </tr>
         <tr>
            <td>Mathias V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Boissy d'Anglas, Annonay</td>
         </tr>
         <tr>
            <td>Simon C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Christophe C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Florian M.</td>
            <td>480</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Damien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Queneau, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Gary F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Prat's, Cluny</td>
         </tr>
         <tr>
            <td>Nathanael M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée du Parc, Lyon</td>
         </tr>
         <tr>
            <td>Marc T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Valentin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Réaumur, Laval</td>
         </tr>
         <tr>
            <td>Louis P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Emile Victor, Champagnole</td>
         </tr>
         <tr>
            <td>Guy L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Francais Charles de Gaulle, London</td>
         </tr>
         <tr>
            <td>Leo R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, Antony</td>
         </tr>
         <tr>
            <td>Julien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Jean-Jacques Henner, Altkirch</td>
         </tr>
         <tr>
            <td>Cédric L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée Notre Dame de Toutes Aides, Nantes</td>
         </tr>
         <tr>
            <td>Kemal Y.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Edouard Belin, Vesoul</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro. (participation individuelle) : 403 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>431</td><td>1</td></tr><tr><td>430</td><td>2</td></tr><tr><td>421</td><td>3</td></tr><tr><td>416</td><td>4</td></tr><tr><td>414</td><td>5</td></tr><tr><td>410</td><td>6</td></tr><tr><td>406</td><td>7</td></tr><tr><td>404</td><td>8</td></tr><tr><td>401</td><td>10</td></tr><tr><td>389</td><td>11</td></tr><tr><td>388</td><td>12</td></tr><tr><td>387</td><td>13</td></tr><tr><td>386</td><td>14</td></tr><tr><td>385</td><td>15</td></tr><tr><td>383</td><td>17</td></tr><tr><td>382</td><td>18</td></tr><tr><td>380</td><td>19</td></tr><tr><td>376</td><td>22</td></tr><tr><td>374</td><td>24</td></tr><tr><td>370</td><td>25</td></tr><tr><td>369</td><td>27</td></tr><tr><td>366</td><td>28</td></tr><tr><td>364</td><td>29</td></tr><tr><td>363</td><td>31</td></tr><tr><td>362</td><td>33</td></tr><tr><td>361</td><td>34</td></tr><tr><td>360</td><td>35</td></tr><tr><td>359</td><td>38</td></tr><tr><td>358</td><td>40</td></tr><tr><td>356</td><td>41</td></tr><tr><td>352</td><td>42</td></tr><tr><td>349</td><td>43</td></tr><tr><td>348</td><td>44</td></tr><tr><td>347</td><td>46</td></tr><tr><td>346</td><td>47</td></tr><tr><td>345</td><td>50</td></tr><tr><td>344</td><td>52</td></tr><tr><td>342</td><td>55</td></tr><tr><td>341</td><td>56</td></tr><tr><td>340</td><td>57</td></tr><tr><td>339</td><td>60</td></tr><tr><td>335</td><td>61</td></tr><tr><td>334</td><td>65</td></tr><tr><td>333</td><td>67</td></tr><tr><td>332</td><td>68</td></tr><tr><td>331</td><td>70</td></tr><tr><td>330</td><td>71</td></tr><tr><td>329</td><td>81</td></tr><tr><td>328</td><td>83</td></tr><tr><td>326</td><td>86</td></tr><tr><td>324</td><td>87</td></tr><tr><td>323</td><td>88</td></tr><tr><td>322</td><td>89</td></tr><tr><td>320</td><td>93</td></tr><tr><td>319</td><td>96</td></tr><tr><td>317</td><td>97</td></tr><tr><td>316</td><td>100</td></tr><tr><td>315</td><td>102</td></tr><tr><td>314</td><td>103</td></tr><tr><td>313</td><td>104</td></tr><tr><td>311</td><td>108</td></tr><tr><td>310</td><td>109</td></tr><tr><td>309</td><td>112</td></tr><tr><td>308</td><td>115</td></tr><tr><td>307</td><td>122</td></tr><tr><td>306</td><td>123</td></tr><tr><td>305</td><td>132</td></tr><tr><td>304</td><td>134</td></tr><tr><td>303</td><td>138</td></tr><tr><td>302</td><td>142</td></tr><tr><td>300</td><td>144</td></tr><tr><td>298</td><td>149</td></tr><tr><td>297</td><td>151</td></tr><tr><td>296</td><td>152</td></tr><tr><td>295</td><td>157</td></tr><tr><td>294</td><td>158</td></tr><tr><td>293</td><td>160</td></tr><tr><td>292</td><td>163</td></tr><tr><td>291</td><td>164</td></tr><tr><td>290</td><td>165</td></tr><tr><td>289</td><td>169</td></tr><tr><td>288</td><td>172</td></tr><tr><td>286</td><td>176</td></tr><tr><td>285</td><td>181</td></tr><tr><td>284</td><td>183</td></tr><tr><td>283</td><td>186</td></tr><tr><td>282</td><td>193</td></tr><tr><td>280</td><td>195</td></tr><tr><td>279</td><td>203</td></tr><tr><td>278</td><td>205</td></tr><tr><td>276</td><td>208</td></tr><tr><td>275</td><td>210</td></tr><tr><td>273</td><td>211</td></tr><tr><td>272</td><td>214</td></tr><tr><td>271</td><td>218</td></tr><tr><td>270</td><td>219</td></tr><tr><td>269</td><td>223</td></tr><tr><td>268</td><td>227</td></tr><tr><td>267</td><td>228</td></tr><tr><td>266</td><td>229</td></tr><tr><td>265</td><td>235</td></tr><tr><td>264</td><td>236</td></tr><tr><td>260</td><td>238</td></tr><tr><td>258</td><td>246</td></tr><tr><td>257</td><td>249</td></tr><tr><td>256</td><td>251</td></tr><tr><td>254</td><td>254</td></tr><tr><td>253</td><td>256</td></tr><tr><td>252</td><td>260</td></tr><tr><td>251</td><td>263</td></tr><tr><td>250</td><td>264</td></tr><tr><td>249</td><td>269</td></tr><tr><td>246</td><td>272</td></tr><tr><td>245</td><td>277</td></tr><tr><td>243</td><td>278</td></tr><tr><td>242</td><td>283</td></tr><tr><td>241</td><td>288</td></tr><tr><td>240</td><td>289</td></tr><tr><td>239</td><td>295</td></tr><tr><td>236</td><td>297</td></tr><tr><td>234</td><td>298</td></tr><tr><td>233</td><td>299</td></tr><tr><td>232</td><td>300</td></tr><tr><td>231</td><td>301</td></tr><tr><td>230</td><td>305</td></tr><tr><td>229</td><td>312</td></tr><tr><td>226</td><td>314</td></tr><tr><td>224</td><td>320</td></tr><tr><td>223</td><td>321</td></tr><tr><td>222</td><td>323</td></tr><tr><td>221</td><td>325</td></tr><tr><td>220</td><td>326</td></tr><tr><td>219</td><td>327</td></tr><tr><td>217</td><td>328</td></tr><tr><td>216</td><td>329</td></tr><tr><td>214</td><td>331</td></tr><tr><td>213</td><td>333</td></tr><tr><td>212</td><td>334</td></tr><tr><td>211</td><td>335</td></tr><tr><td>210</td><td>336</td></tr><tr><td>206</td><td>339</td></tr><tr><td>203</td><td>340</td></tr><tr><td>202</td><td>342</td></tr><tr><td>200</td><td>343</td></tr><tr><td>199</td><td>346</td></tr><tr><td>198</td><td>348</td></tr><tr><td>196</td><td>349</td></tr><tr><td>194</td><td>350</td></tr><tr><td>193</td><td>351</td></tr><tr><td>190</td><td>353</td></tr><tr><td>186</td><td>356</td></tr><tr><td>183</td><td>357</td></tr><tr><td>182</td><td>360</td></tr><tr><td>180</td><td>361</td></tr><tr><td>179</td><td>365</td></tr><tr><td>178</td><td>367</td></tr><tr><td>177</td><td>368</td></tr><tr><td>176</td><td>369</td></tr><tr><td>173</td><td>371</td></tr><tr><td>170</td><td>374</td></tr><tr><td>169</td><td>376</td></tr><tr><td>168</td><td>377</td></tr><tr><td>166</td><td>378</td></tr><tr><td>164</td><td>379</td></tr><tr><td>162</td><td>380</td></tr><tr><td>156</td><td>381</td></tr><tr><td>153</td><td>383</td></tr><tr><td>152</td><td>386</td></tr><tr><td>150</td><td>387</td></tr><tr><td>142</td><td>390</td></tr><tr><td>139</td><td>391</td></tr><tr><td>136</td><td>392</td></tr><tr><td>130</td><td>393</td></tr><tr><td>126</td><td>394</td></tr><tr><td>119</td><td>395</td></tr><tr><td>116</td><td>396</td></tr><tr><td>113</td><td>397</td></tr><tr><td>106</td><td>398</td></tr><tr><td>100</td><td>399</td></tr><tr><td>80</td><td>400</td></tr><tr><td>30</td><td>401</td></tr><tr><td>20</td><td>402</td></tr><tr><td>0</td><td>403</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 10 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Elisa W.</td>
            <td>431</td>
            <td>1</td>
            <td>Lycée Professionnel Blériot, Cambrai</td>
         </tr>
         <tr>
            <td>Angel R.</td>
            <td>430</td>
            <td>2</td>
            <td>Lp Hutinel, Cannes la Bocca</td>
         </tr>
         <tr>
            <td>Spaeter C.</td>
            <td>421</td>
            <td>3</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Prof D.</td>
            <td>416</td>
            <td>4</td>
            <td>Lycée Professionnel Blériot, Cambrai</td>
         </tr>
         <tr>
            <td>Aurélien M.</td>
            <td>414</td>
            <td>5</td>
            <td>Lycée de Douai- Wagnonville, Douai</td>
         </tr>
         <tr>
            <td>Brandon P.</td>
            <td>410</td>
            <td>6</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>406</td>
            <td>7</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Antoine P.</td>
            <td>404</td>
            <td>8</td>
            <td>Lp Hutinel, Cannes la Bocca</td>
         </tr>
         <tr>
            <td>Quentin O.</td>
            <td>404</td>
            <td>8</td>
            <td>Lp Coubertin, Calais</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>401</td>
            <td>10</td>
            <td>Lycée Professionnel Blériot, Cambrai</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première pro. (participation individuelle) : 157 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>450</td><td>1</td></tr><tr><td>436</td><td>2</td></tr><tr><td>424</td><td>3</td></tr><tr><td>416</td><td>4</td></tr><tr><td>406</td><td>6</td></tr><tr><td>403</td><td>8</td></tr><tr><td>402</td><td>9</td></tr><tr><td>396</td><td>10</td></tr><tr><td>388</td><td>11</td></tr><tr><td>382</td><td>12</td></tr><tr><td>378</td><td>13</td></tr><tr><td>376</td><td>15</td></tr><tr><td>373</td><td>16</td></tr><tr><td>372</td><td>17</td></tr><tr><td>370</td><td>19</td></tr><tr><td>368</td><td>20</td></tr><tr><td>366</td><td>21</td></tr><tr><td>365</td><td>22</td></tr><tr><td>356</td><td>24</td></tr><tr><td>354</td><td>26</td></tr><tr><td>352</td><td>28</td></tr><tr><td>348</td><td>29</td></tr><tr><td>346</td><td>31</td></tr><tr><td>345</td><td>34</td></tr><tr><td>344</td><td>35</td></tr><tr><td>342</td><td>36</td></tr><tr><td>340</td><td>38</td></tr><tr><td>336</td><td>39</td></tr><tr><td>335</td><td>43</td></tr><tr><td>334</td><td>45</td></tr><tr><td>332</td><td>46</td></tr><tr><td>326</td><td>48</td></tr><tr><td>324</td><td>49</td></tr><tr><td>322</td><td>50</td></tr><tr><td>320</td><td>51</td></tr><tr><td>318</td><td>53</td></tr><tr><td>316</td><td>55</td></tr><tr><td>315</td><td>57</td></tr><tr><td>314</td><td>59</td></tr><tr><td>313</td><td>61</td></tr><tr><td>312</td><td>64</td></tr><tr><td>310</td><td>67</td></tr><tr><td>306</td><td>69</td></tr><tr><td>302</td><td>70</td></tr><tr><td>301</td><td>71</td></tr><tr><td>300</td><td>72</td></tr><tr><td>299</td><td>75</td></tr><tr><td>297</td><td>77</td></tr><tr><td>296</td><td>78</td></tr><tr><td>295</td><td>80</td></tr><tr><td>294</td><td>83</td></tr><tr><td>292</td><td>84</td></tr><tr><td>290</td><td>85</td></tr><tr><td>288</td><td>88</td></tr><tr><td>286</td><td>90</td></tr><tr><td>284</td><td>94</td></tr><tr><td>282</td><td>95</td></tr><tr><td>280</td><td>98</td></tr><tr><td>279</td><td>100</td></tr><tr><td>277</td><td>101</td></tr><tr><td>276</td><td>102</td></tr><tr><td>272</td><td>104</td></tr><tr><td>270</td><td>106</td></tr><tr><td>269</td><td>108</td></tr><tr><td>266</td><td>110</td></tr><tr><td>263</td><td>112</td></tr><tr><td>262</td><td>113</td></tr><tr><td>260</td><td>115</td></tr><tr><td>259</td><td>116</td></tr><tr><td>256</td><td>117</td></tr><tr><td>252</td><td>118</td></tr><tr><td>250</td><td>119</td></tr><tr><td>247</td><td>121</td></tr><tr><td>246</td><td>122</td></tr><tr><td>244</td><td>123</td></tr><tr><td>243</td><td>124</td></tr><tr><td>240</td><td>126</td></tr><tr><td>239</td><td>127</td></tr><tr><td>238</td><td>130</td></tr><tr><td>236</td><td>132</td></tr><tr><td>232</td><td>133</td></tr><tr><td>230</td><td>134</td></tr><tr><td>227</td><td>135</td></tr><tr><td>221</td><td>136</td></tr><tr><td>220</td><td>137</td></tr><tr><td>216</td><td>138</td></tr><tr><td>211</td><td>139</td></tr><tr><td>210</td><td>140</td></tr><tr><td>208</td><td>141</td></tr><tr><td>196</td><td>142</td></tr><tr><td>193</td><td>143</td></tr><tr><td>189</td><td>144</td></tr><tr><td>186</td><td>145</td></tr><tr><td>180</td><td>146</td></tr><tr><td>169</td><td>147</td></tr><tr><td>160</td><td>148</td></tr><tr><td>159</td><td>149</td></tr><tr><td>156</td><td>150</td></tr><tr><td>154</td><td>151</td></tr><tr><td>133</td><td>152</td></tr><tr><td>132</td><td>154</td></tr><tr><td>123</td><td>155</td></tr><tr><td>110</td><td>156</td></tr><tr><td>0</td><td>157</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 9 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Tristan W.</td>
            <td>450</td>
            <td>1</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Thomas W.</td>
            <td>436</td>
            <td>2</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Wesley Q.</td>
            <td>424</td>
            <td>3</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Paul P.</td>
            <td>416</td>
            <td>4</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Maxime H.</td>
            <td>416</td>
            <td>4</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>406</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Joris K.</td>
            <td>406</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Jusitn M.</td>
            <td>403</td>
            <td>8</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Pierre P.</td>
            <td>402</td>
            <td>9</td>
            <td>Lycée la Bourdonnais, Forest Side</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale pro. (participation individuelle) : 124 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>460</td><td>1</td></tr><tr><td>450</td><td>2</td></tr><tr><td>438</td><td>3</td></tr><tr><td>434</td><td>4</td></tr><tr><td>426</td><td>5</td></tr><tr><td>414</td><td>6</td></tr><tr><td>410</td><td>8</td></tr><tr><td>408</td><td>11</td></tr><tr><td>406</td><td>12</td></tr><tr><td>404</td><td>13</td></tr><tr><td>402</td><td>15</td></tr><tr><td>401</td><td>17</td></tr><tr><td>400</td><td>18</td></tr><tr><td>396</td><td>21</td></tr><tr><td>394</td><td>23</td></tr><tr><td>392</td><td>24</td></tr><tr><td>386</td><td>26</td></tr><tr><td>384</td><td>27</td></tr><tr><td>383</td><td>28</td></tr><tr><td>376</td><td>29</td></tr><tr><td>374</td><td>30</td></tr><tr><td>373</td><td>32</td></tr><tr><td>372</td><td>33</td></tr><tr><td>370</td><td>35</td></tr><tr><td>369</td><td>36</td></tr><tr><td>366</td><td>37</td></tr><tr><td>363</td><td>38</td></tr><tr><td>358</td><td>39</td></tr><tr><td>356</td><td>40</td></tr><tr><td>354</td><td>41</td></tr><tr><td>352</td><td>42</td></tr><tr><td>348</td><td>44</td></tr><tr><td>346</td><td>45</td></tr><tr><td>344</td><td>46</td></tr><tr><td>342</td><td>48</td></tr><tr><td>341</td><td>50</td></tr><tr><td>340</td><td>51</td></tr><tr><td>338</td><td>52</td></tr><tr><td>336</td><td>55</td></tr><tr><td>334</td><td>57</td></tr><tr><td>333</td><td>58</td></tr><tr><td>332</td><td>59</td></tr><tr><td>330</td><td>60</td></tr><tr><td>328</td><td>61</td></tr><tr><td>327</td><td>62</td></tr><tr><td>324</td><td>63</td></tr><tr><td>318</td><td>64</td></tr><tr><td>314</td><td>65</td></tr><tr><td>313</td><td>66</td></tr><tr><td>312</td><td>67</td></tr><tr><td>310</td><td>68</td></tr><tr><td>306</td><td>69</td></tr><tr><td>305</td><td>73</td></tr><tr><td>303</td><td>74</td></tr><tr><td>302</td><td>75</td></tr><tr><td>301</td><td>77</td></tr><tr><td>300</td><td>78</td></tr><tr><td>299</td><td>80</td></tr><tr><td>298</td><td>81</td></tr><tr><td>297</td><td>82</td></tr><tr><td>296</td><td>83</td></tr><tr><td>295</td><td>84</td></tr><tr><td>293</td><td>86</td></tr><tr><td>290</td><td>87</td></tr><tr><td>288</td><td>89</td></tr><tr><td>286</td><td>90</td></tr><tr><td>283</td><td>91</td></tr><tr><td>282</td><td>93</td></tr><tr><td>280</td><td>94</td></tr><tr><td>273</td><td>95</td></tr><tr><td>269</td><td>97</td></tr><tr><td>266</td><td>99</td></tr><tr><td>265</td><td>101</td></tr><tr><td>264</td><td>102</td></tr><tr><td>263</td><td>104</td></tr><tr><td>262</td><td>105</td></tr><tr><td>260</td><td>106</td></tr><tr><td>259</td><td>107</td></tr><tr><td>250</td><td>109</td></tr><tr><td>249</td><td>111</td></tr><tr><td>240</td><td>112</td></tr><tr><td>230</td><td>114</td></tr><tr><td>226</td><td>115</td></tr><tr><td>214</td><td>116</td></tr><tr><td>206</td><td>117</td></tr><tr><td>200</td><td>118</td></tr><tr><td>183</td><td>119</td></tr><tr><td>176</td><td>120</td></tr><tr><td>110</td><td>122</td></tr><tr><td>56</td><td>123</td></tr><tr><td>50</td><td>124</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 20 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Antoine S.</td>
            <td>460</td>
            <td>1</td>
            <td>Lycée Maréchal Leclerc de Hauteclocque, Chateau du Loir</td>
         </tr>
         <tr>
            <td>Jerome G.</td>
            <td>450</td>
            <td>2</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Corantin B.</td>
            <td>438</td>
            <td>3</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Franck O.</td>
            <td>434</td>
            <td>4</td>
            <td>Lycée Maréchal Leclerc de Hauteclocque, Chateau du Loir</td>
         </tr>
         <tr>
            <td>Alexandre F.</td>
            <td>426</td>
            <td>5</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Jérémy M.</td>
            <td>414</td>
            <td>6</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Clément P.</td>
            <td>414</td>
            <td>6</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Anthony B.</td>
            <td>410</td>
            <td>8</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Adrien F.</td>
            <td>410</td>
            <td>8</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Valentin V.</td>
            <td>410</td>
            <td>8</td>
            <td>Lycée Maréchal Leclerc de Hauteclocque, Chateau du Loir</td>
         </tr>
         <tr>
            <td>Jérémy D.</td>
            <td>408</td>
            <td>11</td>
            <td>Lycée Maréchal Leclerc de Hauteclocque, Chateau du Loir</td>
         </tr>
         <tr>
            <td>Bryan M.</td>
            <td>406</td>
            <td>12</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Raphael R.</td>
            <td>404</td>
            <td>13</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Allan L.</td>
            <td>404</td>
            <td>13</td>
            <td>Lycée Joliot Curie, Dammarie les Lys</td>
         </tr>
         <tr>
            <td>Dimitri G.</td>
            <td>402</td>
            <td>15</td>
            <td>Lycée Professionnel Charles de Bovelles, Noyon</td>
         </tr>
         <tr>
            <td>Dylan K.</td>
            <td>402</td>
            <td>15</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>401</td>
            <td>17</td>
            <td>Lycée Agricole Roanne Chervé, Perreux</td>
         </tr>
         <tr>
            <td>Yann L.</td>
            <td>400</td>
            <td>18</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Sylvia K.</td>
            <td>400</td>
            <td>18</td>
            <td>Leonard de Vinci, Levallois-Perret</td>
         </tr>
         <tr>
            <td>Yohan B.</td>
            <td>400</td>
            <td>18</td>
            <td>Lp Hutinel, Cannes la Bocca</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 4521 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>376</td><td>1</td></tr><tr><td>369</td><td>3</td></tr><tr><td>366</td><td>5</td></tr><tr><td>363</td><td>9</td></tr><tr><td>352</td><td>10</td></tr><tr><td>350</td><td>12</td></tr><tr><td>347</td><td>13</td></tr><tr><td>346</td><td>15</td></tr><tr><td>344</td><td>19</td></tr><tr><td>342</td><td>21</td></tr><tr><td>340</td><td>25</td></tr><tr><td>336</td><td>27</td></tr><tr><td>334</td><td>31</td></tr><tr><td>333</td><td>32</td></tr><tr><td>331</td><td>43</td></tr><tr><td>330</td><td>45</td></tr><tr><td>326</td><td>48</td></tr><tr><td>323</td><td>56</td></tr><tr><td>322</td><td>64</td></tr><tr><td>321</td><td>72</td></tr><tr><td>320</td><td>74</td></tr><tr><td>319</td><td>89</td></tr><tr><td>318</td><td>91</td></tr><tr><td>317</td><td>94</td></tr><tr><td>316</td><td>96</td></tr><tr><td>315</td><td>108</td></tr><tr><td>314</td><td>114</td></tr><tr><td>313</td><td>116</td></tr><tr><td>312</td><td>120</td></tr><tr><td>310</td><td>126</td></tr><tr><td>309</td><td>145</td></tr><tr><td>308</td><td>156</td></tr><tr><td>307</td><td>161</td></tr><tr><td>306</td><td>167</td></tr><tr><td>305</td><td>177</td></tr><tr><td>304</td><td>179</td></tr><tr><td>303</td><td>185</td></tr><tr><td>302</td><td>194</td></tr><tr><td>301</td><td>196</td></tr><tr><td>300</td><td>206</td></tr><tr><td>299</td><td>222</td></tr><tr><td>298</td><td>226</td></tr><tr><td>297</td><td>230</td></tr><tr><td>296</td><td>232</td></tr><tr><td>295</td><td>253</td></tr><tr><td>294</td><td>259</td></tr><tr><td>293</td><td>273</td></tr><tr><td>292</td><td>295</td></tr><tr><td>291</td><td>296</td></tr><tr><td>290</td><td>298</td></tr><tr><td>289</td><td>327</td></tr><tr><td>288</td><td>333</td></tr><tr><td>286</td><td>353</td></tr><tr><td>285</td><td>373</td></tr><tr><td>284</td><td>377</td></tr><tr><td>283</td><td>397</td></tr><tr><td>282</td><td>415</td></tr><tr><td>281</td><td>428</td></tr><tr><td>280</td><td>441</td></tr><tr><td>279</td><td>473</td></tr><tr><td>278</td><td>476</td></tr><tr><td>277</td><td>494</td></tr><tr><td>276</td><td>496</td></tr><tr><td>275</td><td>517</td></tr><tr><td>274</td><td>523</td></tr><tr><td>273</td><td>527</td></tr><tr><td>272</td><td>569</td></tr><tr><td>271</td><td>575</td></tr><tr><td>270</td><td>585</td></tr><tr><td>269</td><td>633</td></tr><tr><td>268</td><td>643</td></tr><tr><td>267</td><td>667</td></tr><tr><td>266</td><td>673</td></tr><tr><td>265</td><td>693</td></tr><tr><td>264</td><td>702</td></tr><tr><td>263</td><td>718</td></tr><tr><td>262</td><td>746</td></tr><tr><td>261</td><td>759</td></tr><tr><td>260</td><td>772</td></tr><tr><td>259</td><td>843</td></tr><tr><td>258</td><td>859</td></tr><tr><td>257</td><td>877</td></tr><tr><td>256</td><td>885</td></tr><tr><td>255</td><td>915</td></tr><tr><td>254</td><td>925</td></tr><tr><td>253</td><td>937</td></tr><tr><td>252</td><td>977</td></tr><tr><td>251</td><td>993</td></tr><tr><td>250</td><td>1011</td></tr><tr><td>249</td><td>1084</td></tr><tr><td>248</td><td>1096</td></tr><tr><td>247</td><td>1117</td></tr><tr><td>246</td><td>1131</td></tr><tr><td>245</td><td>1177</td></tr><tr><td>244</td><td>1184</td></tr><tr><td>243</td><td>1194</td></tr><tr><td>242</td><td>1224</td></tr><tr><td>241</td><td>1250</td></tr><tr><td>240</td><td>1268</td></tr><tr><td>239</td><td>1368</td></tr><tr><td>238</td><td>1392</td></tr><tr><td>237</td><td>1425</td></tr><tr><td>236</td><td>1431</td></tr><tr><td>235</td><td>1477</td></tr><tr><td>234</td><td>1483</td></tr><tr><td>233</td><td>1495</td></tr><tr><td>232</td><td>1538</td></tr><tr><td>231</td><td>1549</td></tr><tr><td>230</td><td>1559</td></tr><tr><td>229</td><td>1673</td></tr><tr><td>228</td><td>1690</td></tr><tr><td>227</td><td>1728</td></tr><tr><td>226</td><td>1736</td></tr><tr><td>225</td><td>1816</td></tr><tr><td>224</td><td>1820</td></tr><tr><td>223</td><td>1835</td></tr><tr><td>222</td><td>1895</td></tr><tr><td>221</td><td>1915</td></tr><tr><td>220</td><td>1929</td></tr><tr><td>219</td><td>2045</td></tr><tr><td>218</td><td>2087</td></tr><tr><td>217</td><td>2119</td></tr><tr><td>216</td><td>2124</td></tr><tr><td>215</td><td>2166</td></tr><tr><td>214</td><td>2168</td></tr><tr><td>213</td><td>2180</td></tr><tr><td>212</td><td>2251</td></tr><tr><td>211</td><td>2267</td></tr><tr><td>210</td><td>2271</td></tr><tr><td>209</td><td>2378</td></tr><tr><td>208</td><td>2411</td></tr><tr><td>206</td><td>2430</td></tr><tr><td>205</td><td>2507</td></tr><tr><td>204</td><td>2509</td></tr><tr><td>203</td><td>2520</td></tr><tr><td>202</td><td>2586</td></tr><tr><td>201</td><td>2604</td></tr><tr><td>200</td><td>2612</td></tr><tr><td>199</td><td>2716</td></tr><tr><td>198</td><td>2737</td></tr><tr><td>197</td><td>2757</td></tr><tr><td>196</td><td>2759</td></tr><tr><td>195</td><td>2813</td></tr><tr><td>194</td><td>2815</td></tr><tr><td>193</td><td>2821</td></tr><tr><td>192</td><td>2869</td></tr><tr><td>191</td><td>2875</td></tr><tr><td>190</td><td>2881</td></tr><tr><td>189</td><td>2985</td></tr><tr><td>188</td><td>3006</td></tr><tr><td>187</td><td>3018</td></tr><tr><td>186</td><td>3024</td></tr><tr><td>185</td><td>3075</td></tr><tr><td>184</td><td>3077</td></tr><tr><td>183</td><td>3083</td></tr><tr><td>182</td><td>3127</td></tr><tr><td>181</td><td>3133</td></tr><tr><td>180</td><td>3137</td></tr><tr><td>179</td><td>3238</td></tr><tr><td>178</td><td>3249</td></tr><tr><td>177</td><td>3257</td></tr><tr><td>176</td><td>3261</td></tr><tr><td>174</td><td>3308</td></tr><tr><td>173</td><td>3310</td></tr><tr><td>172</td><td>3350</td></tr><tr><td>171</td><td>3370</td></tr><tr><td>170</td><td>3374</td></tr><tr><td>169</td><td>3435</td></tr><tr><td>168</td><td>3459</td></tr><tr><td>166</td><td>3471</td></tr><tr><td>165</td><td>3525</td></tr><tr><td>164</td><td>3527</td></tr><tr><td>163</td><td>3528</td></tr><tr><td>162</td><td>3580</td></tr><tr><td>161</td><td>3586</td></tr><tr><td>160</td><td>3594</td></tr><tr><td>159</td><td>3652</td></tr><tr><td>158</td><td>3675</td></tr><tr><td>157</td><td>3679</td></tr><tr><td>156</td><td>3680</td></tr><tr><td>155</td><td>3727</td></tr><tr><td>154</td><td>3731</td></tr><tr><td>153</td><td>3735</td></tr><tr><td>152</td><td>3783</td></tr><tr><td>151</td><td>3800</td></tr><tr><td>150</td><td>3804</td></tr><tr><td>149</td><td>3864</td></tr><tr><td>148</td><td>3889</td></tr><tr><td>147</td><td>3893</td></tr><tr><td>146</td><td>3894</td></tr><tr><td>145</td><td>3930</td></tr><tr><td>144</td><td>3936</td></tr><tr><td>143</td><td>3940</td></tr><tr><td>142</td><td>3968</td></tr><tr><td>140</td><td>3975</td></tr><tr><td>139</td><td>4040</td></tr><tr><td>136</td><td>4050</td></tr><tr><td>135</td><td>4096</td></tr><tr><td>134</td><td>4098</td></tr><tr><td>133</td><td>4102</td></tr><tr><td>132</td><td>4126</td></tr><tr><td>130</td><td>4134</td></tr><tr><td>129</td><td>4158</td></tr><tr><td>126</td><td>4168</td></tr><tr><td>125</td><td>4202</td></tr><tr><td>123</td><td>4203</td></tr><tr><td>122</td><td>4235</td></tr><tr><td>120</td><td>4241</td></tr><tr><td>119</td><td>4277</td></tr><tr><td>116</td><td>4295</td></tr><tr><td>113</td><td>4323</td></tr><tr><td>112</td><td>4336</td></tr><tr><td>110</td><td>4340</td></tr><tr><td>109</td><td>4354</td></tr><tr><td>108</td><td>4360</td></tr><tr><td>106</td><td>4361</td></tr><tr><td>105</td><td>4381</td></tr><tr><td>103</td><td>4383</td></tr><tr><td>100</td><td>4389</td></tr><tr><td>99</td><td>4408</td></tr><tr><td>96</td><td>4414</td></tr><tr><td>93</td><td>4432</td></tr><tr><td>92</td><td>4440</td></tr><tr><td>90</td><td>4443</td></tr><tr><td>89</td><td>4449</td></tr><tr><td>86</td><td>4453</td></tr><tr><td>83</td><td>4463</td></tr><tr><td>82</td><td>4469</td></tr><tr><td>80</td><td>4471</td></tr><tr><td>76</td><td>4477</td></tr><tr><td>72</td><td>4478</td></tr><tr><td>66</td><td>4480</td></tr><tr><td>63</td><td>4482</td></tr><tr><td>60</td><td>4484</td></tr><tr><td>56</td><td>4492</td></tr><tr><td>53</td><td>4494</td></tr><tr><td>52</td><td>4496</td></tr><tr><td>42</td><td>4498</td></tr><tr><td>40</td><td>4500</td></tr><tr><td>30</td><td>4504</td></tr><tr><td>23</td><td>4508</td></tr><tr><td>20</td><td>4510</td></tr><tr><td>0</td><td>4518</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 12 premiers ayant un score supérieur ou égal à 350 sont listés ci-dessous.
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
            <td>Timothé P.</td>
            <td>376</td>
            <td>1</td>
            <td>École Elementaire Sallier, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>376</td>
            <td>1</td>
            <td>École Elementaire Sallier, Aix-en-Provence</td>
         </tr>
         <tr>
            <td>Mathys C.</td>
            <td>369</td>
            <td>3</td>
            <td>École Philippe Bovin, Poulainville</td>
         </tr>
         <tr>
            <td>Nino G.</td>
            <td>369</td>
            <td>3</td>
            <td>École Philippe Bovin, Poulainville</td>
         </tr>
         <tr>
            <td>Léa K.</td>
            <td>366</td>
            <td>5</td>
            <td>Lycée Jean Renoir - école primaire, Munich</td>
         </tr>
         <tr>
            <td>Matis N.</td>
            <td>366</td>
            <td>5</td>
            <td>Lycée Jean Renoir - école primaire, Munich</td>
         </tr>
         <tr>
            <td>Maria R.</td>
            <td>366</td>
            <td>5</td>
            <td>Lycée Libano-Allemand (Deutsche Schule Jounieh), Jounieh</td>
         </tr>
         <tr>
            <td>Samer S.</td>
            <td>366</td>
            <td>5</td>
            <td>Lycée Libano-Allemand (Deutsche Schule Jounieh), Jounieh</td>
         </tr>
         <tr>
            <td>Hugo J.</td>
            <td>363</td>
            <td>9</td>
            <td>École Primaire Raoul Briquet, Rouvroy</td>
         </tr>
         <tr>
            <td>Bastien R.</td>
            <td>352</td>
            <td>10</td>
            <td>École Bernard Rabas, Scy-Chazelles</td>
         </tr>
         <tr>
            <td>Anatole B.</td>
            <td>352</td>
            <td>10</td>
            <td>École Bernard Rabas, Scy-Chazelles</td>
         </tr>
         <tr>
            <td>Anthea M.</td>
            <td>350</td>
            <td>12</td>
            <td>École Albert Camus, Vouel</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 6775 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>420</td><td>1</td></tr><tr><td>406</td><td>3</td></tr><tr><td>403</td><td>4</td></tr><tr><td>399</td><td>6</td></tr><tr><td>397</td><td>8</td></tr><tr><td>392</td><td>12</td></tr><tr><td>390</td><td>14</td></tr><tr><td>388</td><td>16</td></tr><tr><td>384</td><td>18</td></tr><tr><td>382</td><td>20</td></tr><tr><td>380</td><td>24</td></tr><tr><td>379</td><td>32</td></tr><tr><td>376</td><td>36</td></tr><tr><td>374</td><td>38</td></tr><tr><td>372</td><td>39</td></tr><tr><td>371</td><td>41</td></tr><tr><td>370</td><td>43</td></tr><tr><td>369</td><td>49</td></tr><tr><td>368</td><td>51</td></tr><tr><td>367</td><td>55</td></tr><tr><td>366</td><td>59</td></tr><tr><td>364</td><td>63</td></tr><tr><td>363</td><td>67</td></tr><tr><td>362</td><td>68</td></tr><tr><td>360</td><td>76</td></tr><tr><td>359</td><td>92</td></tr><tr><td>358</td><td>94</td></tr><tr><td>357</td><td>102</td></tr><tr><td>356</td><td>104</td></tr><tr><td>355</td><td>112</td></tr><tr><td>354</td><td>116</td></tr><tr><td>352</td><td>122</td></tr><tr><td>351</td><td>124</td></tr><tr><td>350</td><td>126</td></tr><tr><td>348</td><td>133</td></tr><tr><td>347</td><td>138</td></tr><tr><td>346</td><td>145</td></tr><tr><td>345</td><td>151</td></tr><tr><td>344</td><td>157</td></tr><tr><td>343</td><td>167</td></tr><tr><td>342</td><td>171</td></tr><tr><td>341</td><td>179</td></tr><tr><td>340</td><td>182</td></tr><tr><td>339</td><td>205</td></tr><tr><td>338</td><td>213</td></tr><tr><td>337</td><td>220</td></tr><tr><td>336</td><td>224</td></tr><tr><td>335</td><td>239</td></tr><tr><td>334</td><td>254</td></tr><tr><td>333</td><td>273</td></tr><tr><td>332</td><td>295</td></tr><tr><td>331</td><td>317</td></tr><tr><td>330</td><td>321</td></tr><tr><td>329</td><td>333</td></tr><tr><td>328</td><td>335</td></tr><tr><td>327</td><td>347</td></tr><tr><td>326</td><td>353</td></tr><tr><td>325</td><td>375</td></tr><tr><td>324</td><td>378</td></tr><tr><td>323</td><td>394</td></tr><tr><td>322</td><td>422</td></tr><tr><td>321</td><td>451</td></tr><tr><td>320</td><td>466</td></tr><tr><td>319</td><td>505</td></tr><tr><td>318</td><td>508</td></tr><tr><td>317</td><td>537</td></tr><tr><td>316</td><td>551</td></tr><tr><td>315</td><td>588</td></tr><tr><td>314</td><td>596</td></tr><tr><td>313</td><td>601</td></tr><tr><td>312</td><td>641</td></tr><tr><td>311</td><td>666</td></tr><tr><td>310</td><td>674</td></tr><tr><td>309</td><td>733</td></tr><tr><td>308</td><td>744</td></tr><tr><td>307</td><td>777</td></tr><tr><td>306</td><td>797</td></tr><tr><td>305</td><td>843</td></tr><tr><td>304</td><td>856</td></tr><tr><td>303</td><td>878</td></tr><tr><td>302</td><td>912</td></tr><tr><td>301</td><td>936</td></tr><tr><td>300</td><td>964</td></tr><tr><td>299</td><td>1029</td></tr><tr><td>298</td><td>1038</td></tr><tr><td>297</td><td>1075</td></tr><tr><td>296</td><td>1094</td></tr><tr><td>295</td><td>1157</td></tr><tr><td>294</td><td>1186</td></tr><tr><td>293</td><td>1213</td></tr><tr><td>292</td><td>1262</td></tr><tr><td>291</td><td>1283</td></tr><tr><td>290</td><td>1307</td></tr><tr><td>289</td><td>1376</td></tr><tr><td>288</td><td>1394</td></tr><tr><td>287</td><td>1443</td></tr><tr><td>286</td><td>1455</td></tr><tr><td>285</td><td>1526</td></tr><tr><td>284</td><td>1550</td></tr><tr><td>283</td><td>1576</td></tr><tr><td>282</td><td>1612</td></tr><tr><td>281</td><td>1637</td></tr><tr><td>280</td><td>1663</td></tr><tr><td>279</td><td>1744</td></tr><tr><td>278</td><td>1762</td></tr><tr><td>277</td><td>1801</td></tr><tr><td>276</td><td>1813</td></tr><tr><td>275</td><td>1886</td></tr><tr><td>274</td><td>1898</td></tr><tr><td>273</td><td>1933</td></tr><tr><td>272</td><td>2006</td></tr><tr><td>271</td><td>2033</td></tr><tr><td>270</td><td>2059</td></tr><tr><td>269</td><td>2161</td></tr><tr><td>268</td><td>2195</td></tr><tr><td>267</td><td>2240</td></tr><tr><td>266</td><td>2263</td></tr><tr><td>265</td><td>2342</td></tr><tr><td>264</td><td>2366</td></tr><tr><td>263</td><td>2390</td></tr><tr><td>262</td><td>2456</td></tr><tr><td>261</td><td>2492</td></tr><tr><td>260</td><td>2525</td></tr><tr><td>259</td><td>2652</td></tr><tr><td>258</td><td>2690</td></tr><tr><td>257</td><td>2720</td></tr><tr><td>256</td><td>2728</td></tr><tr><td>255</td><td>2803</td></tr><tr><td>254</td><td>2810</td></tr><tr><td>253</td><td>2837</td></tr><tr><td>252</td><td>2925</td></tr><tr><td>251</td><td>2955</td></tr><tr><td>250</td><td>2991</td></tr><tr><td>249</td><td>3134</td></tr><tr><td>248</td><td>3172</td></tr><tr><td>247</td><td>3206</td></tr><tr><td>246</td><td>3216</td></tr><tr><td>245</td><td>3321</td></tr><tr><td>244</td><td>3341</td></tr><tr><td>243</td><td>3373</td></tr><tr><td>242</td><td>3456</td></tr><tr><td>241</td><td>3480</td></tr><tr><td>240</td><td>3513</td></tr><tr><td>239</td><td>3642</td></tr><tr><td>238</td><td>3680</td></tr><tr><td>237</td><td>3714</td></tr><tr><td>236</td><td>3722</td></tr><tr><td>235</td><td>3817</td></tr><tr><td>234</td><td>3823</td></tr><tr><td>233</td><td>3849</td></tr><tr><td>232</td><td>3894</td></tr><tr><td>231</td><td>3922</td></tr><tr><td>230</td><td>3946</td></tr><tr><td>229</td><td>4040</td></tr><tr><td>228</td><td>4065</td></tr><tr><td>227</td><td>4082</td></tr><tr><td>226</td><td>4100</td></tr><tr><td>225</td><td>4214</td></tr><tr><td>224</td><td>4224</td></tr><tr><td>223</td><td>4249</td></tr><tr><td>222</td><td>4349</td></tr><tr><td>221</td><td>4374</td></tr><tr><td>220</td><td>4387</td></tr><tr><td>219</td><td>4524</td></tr><tr><td>218</td><td>4572</td></tr><tr><td>217</td><td>4594</td></tr><tr><td>216</td><td>4603</td></tr><tr><td>215</td><td>4693</td></tr><tr><td>214</td><td>4697</td></tr><tr><td>213</td><td>4713</td></tr><tr><td>212</td><td>4782</td></tr><tr><td>211</td><td>4803</td></tr><tr><td>210</td><td>4815</td></tr><tr><td>209</td><td>4954</td></tr><tr><td>208</td><td>4983</td></tr><tr><td>207</td><td>5008</td></tr><tr><td>206</td><td>5018</td></tr><tr><td>205</td><td>5107</td></tr><tr><td>204</td><td>5109</td></tr><tr><td>203</td><td>5119</td></tr><tr><td>202</td><td>5189</td></tr><tr><td>201</td><td>5205</td></tr><tr><td>200</td><td>5219</td></tr><tr><td>199</td><td>5305</td></tr><tr><td>198</td><td>5354</td></tr><tr><td>197</td><td>5366</td></tr><tr><td>196</td><td>5370</td></tr><tr><td>194</td><td>5410</td></tr><tr><td>193</td><td>5411</td></tr><tr><td>192</td><td>5462</td></tr><tr><td>191</td><td>5480</td></tr><tr><td>190</td><td>5482</td></tr><tr><td>189</td><td>5573</td></tr><tr><td>188</td><td>5596</td></tr><tr><td>187</td><td>5610</td></tr><tr><td>186</td><td>5614</td></tr><tr><td>185</td><td>5669</td></tr><tr><td>184</td><td>5674</td></tr><tr><td>183</td><td>5683</td></tr><tr><td>182</td><td>5727</td></tr><tr><td>180</td><td>5747</td></tr><tr><td>179</td><td>5824</td></tr><tr><td>178</td><td>5849</td></tr><tr><td>177</td><td>5854</td></tr><tr><td>176</td><td>5858</td></tr><tr><td>175</td><td>5913</td></tr><tr><td>174</td><td>5915</td></tr><tr><td>173</td><td>5917</td></tr><tr><td>172</td><td>5964</td></tr><tr><td>171</td><td>5975</td></tr><tr><td>170</td><td>5979</td></tr><tr><td>169</td><td>6022</td></tr><tr><td>168</td><td>6046</td></tr><tr><td>166</td><td>6054</td></tr><tr><td>165</td><td>6093</td></tr><tr><td>164</td><td>6094</td></tr><tr><td>163</td><td>6099</td></tr><tr><td>162</td><td>6125</td></tr><tr><td>161</td><td>6131</td></tr><tr><td>160</td><td>6135</td></tr><tr><td>159</td><td>6177</td></tr><tr><td>158</td><td>6192</td></tr><tr><td>157</td><td>6194</td></tr><tr><td>156</td><td>6199</td></tr><tr><td>155</td><td>6236</td></tr><tr><td>153</td><td>6238</td></tr><tr><td>152</td><td>6260</td></tr><tr><td>151</td><td>6272</td></tr><tr><td>150</td><td>6274</td></tr><tr><td>149</td><td>6294</td></tr><tr><td>148</td><td>6301</td></tr><tr><td>147</td><td>6305</td></tr><tr><td>146</td><td>6308</td></tr><tr><td>145</td><td>6348</td></tr><tr><td>144</td><td>6352</td></tr><tr><td>143</td><td>6354</td></tr><tr><td>142</td><td>6375</td></tr><tr><td>141</td><td>6384</td></tr><tr><td>140</td><td>6386</td></tr><tr><td>139</td><td>6414</td></tr><tr><td>138</td><td>6439</td></tr><tr><td>136</td><td>6442</td></tr><tr><td>135</td><td>6464</td></tr><tr><td>134</td><td>6466</td></tr><tr><td>133</td><td>6468</td></tr><tr><td>130</td><td>6486</td></tr><tr><td>129</td><td>6514</td></tr><tr><td>126</td><td>6530</td></tr><tr><td>125</td><td>6550</td></tr><tr><td>123</td><td>6551</td></tr><tr><td>122</td><td>6568</td></tr><tr><td>120</td><td>6574</td></tr><tr><td>119</td><td>6584</td></tr><tr><td>116</td><td>6596</td></tr><tr><td>113</td><td>6602</td></tr><tr><td>110</td><td>6605</td></tr><tr><td>109</td><td>6611</td></tr><tr><td>108</td><td>6619</td></tr><tr><td>106</td><td>6620</td></tr><tr><td>103</td><td>6628</td></tr><tr><td>102</td><td>6632</td></tr><tr><td>100</td><td>6633</td></tr><tr><td>99</td><td>6642</td></tr><tr><td>96</td><td>6648</td></tr><tr><td>93</td><td>6652</td></tr><tr><td>92</td><td>6654</td></tr><tr><td>90</td><td>6655</td></tr><tr><td>89</td><td>6663</td></tr><tr><td>83</td><td>6667</td></tr><tr><td>80</td><td>6673</td></tr><tr><td>76</td><td>6675</td></tr><tr><td>73</td><td>6680</td></tr><tr><td>70</td><td>6684</td></tr><tr><td>66</td><td>6686</td></tr><tr><td>60</td><td>6688</td></tr><tr><td>53</td><td>6698</td></tr><tr><td>50</td><td>6700</td></tr><tr><td>40</td><td>6706</td></tr><tr><td>30</td><td>6712</td></tr><tr><td>26</td><td>6720</td></tr><tr><td>23</td><td>6722</td></tr><tr><td>20</td><td>6726</td></tr><tr><td>0</td><td>6742</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 48 premiers ayant un score supérieur ou égal à 370 sont listés ci-dessous.
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
            <td>Isabelle N.</td>
            <td>420</td>
            <td>1</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Mélissa C.</td>
            <td>420</td>
            <td>1</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Yanis O.</td>
            <td>406</td>
            <td>3</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Kamal E.</td>
            <td>403</td>
            <td>4</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Nidhal A.</td>
            <td>403</td>
            <td>4</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Marius G.</td>
            <td>399</td>
            <td>6</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Henri A.</td>
            <td>399</td>
            <td>6</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Hugo B.</td>
            <td>397</td>
            <td>8</td>
            <td>École Joseph Leprêtre, Bierne</td>
         </tr>
         <tr>
            <td>Simon B.</td>
            <td>397</td>
            <td>8</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Perle C.</td>
            <td>397</td>
            <td>8</td>
            <td>Collège Stanislas, Québec</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>397</td>
            <td>8</td>
            <td>École Joseph Leprêtre, Bierne</td>
         </tr>
         <tr>
            <td>Lylian D.</td>
            <td>392</td>
            <td>12</td>
            <td>École Jules Ferry, Meyzieu</td>
         </tr>
         <tr>
            <td>Arthur V.</td>
            <td>392</td>
            <td>12</td>
            <td>École Jules Ferry, Meyzieu</td>
         </tr>
         <tr>
            <td>Hoang-Phuong L.</td>
            <td>390</td>
            <td>14</td>
            <td>Collège Notre Dame, Bourg la Reine</td>
         </tr>
         <tr>
            <td>Noha F.</td>
            <td>390</td>
            <td>14</td>
            <td>Collège Notre Dame, Bourg la Reine</td>
         </tr>
         <tr>
            <td>Clara G.</td>
            <td>388</td>
            <td>16</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Axelle P.</td>
            <td>388</td>
            <td>16</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Yanis B.</td>
            <td>384</td>
            <td>18</td>
            <td>École Elémentaire Georges Simenon, Montpellier</td>
         </tr>
         <tr>
            <td>Yanis O.</td>
            <td>384</td>
            <td>18</td>
            <td>École Elémentaire Georges Simenon, Montpellier</td>
         </tr>
         <tr>
            <td>Kenza W.</td>
            <td>382</td>
            <td>20</td>
            <td>Groupe Scolaire Louis Massignon - Site du Val d'Anfa, Casablanca</td>
         </tr>
         <tr>
            <td>Axel B.</td>
            <td>382</td>
            <td>20</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Yasmine T.</td>
            <td>382</td>
            <td>20</td>
            <td>Groupe Scolaire Louis Massignon - Site du Val d'Anfa, Casablanca</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>382</td>
            <td>20</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Adrien A.</td>
            <td>380</td>
            <td>24</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Loïc J.</td>
            <td>380</td>
            <td>24</td>
            <td>Les Grands Jardins, Aubigny sur Nère</td>
         </tr>
         <tr>
            <td>Väinö-Verneri K.</td>
            <td>380</td>
            <td>24</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Mehdi K.</td>
            <td>380</td>
            <td>24</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Ryan R.</td>
            <td>380</td>
            <td>24</td>
            <td>École Barbara, Fresnes</td>
         </tr>
         <tr>
            <td>Abdarrahman Z.</td>
            <td>380</td>
            <td>24</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Rayan R.</td>
            <td>380</td>
            <td>24</td>
            <td>École Barbara, Fresnes</td>
         </tr>
         <tr>
            <td>Alexis P.</td>
            <td>380</td>
            <td>24</td>
            <td>Les Grands Jardins, Aubigny sur Nère</td>
         </tr>
         <tr>
            <td>Darren K.</td>
            <td>379</td>
            <td>32</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Aurélien O.</td>
            <td>379</td>
            <td>32</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Killian R.</td>
            <td>379</td>
            <td>32</td>
            <td>École Primaire Publique Georges Brassens, Cléguer</td>
         </tr>
         <tr>
            <td>Raphaël P.</td>
            <td>379</td>
            <td>32</td>
            <td>École Primaire Publique Georges Brassens, Cléguer</td>
         </tr>
         <tr>
            <td>Romain B.</td>
            <td>376</td>
            <td>36</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Rami K.</td>
            <td>376</td>
            <td>36</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Farah A.</td>
            <td>374</td>
            <td>38</td>
            <td>Collège Croix d'Argent, Montpellier</td>
         </tr>
         <tr>
            <td>Filipe C.</td>
            <td>372</td>
            <td>39</td>
            <td>École Primaire Publique Georges Brassens, Cléguer</td>
         </tr>
         <tr>
            <td>Kéziah V.</td>
            <td>372</td>
            <td>39</td>
            <td>École Primaire Publique Georges Brassens, Cléguer</td>
         </tr>
         <tr>
            <td>Ghita M.</td>
            <td>371</td>
            <td>41</td>
            <td>École Molière, Casablanca</td>
         </tr>
         <tr>
            <td>Yasmine N.</td>
            <td>371</td>
            <td>41</td>
            <td>École Molière, Casablanca</td>
         </tr>
         <tr>
            <td>Madatina M.</td>
            <td>370</td>
            <td>43</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Manon Z.</td>
            <td>370</td>
            <td>43</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Pierre-Hunor D.</td>
            <td>370</td>
            <td>43</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Leila B.</td>
            <td>370</td>
            <td>43</td>
            <td>Collège Jean Monnet, Castres</td>
         </tr>
         <tr>
            <td>Lise-Laure L.</td>
            <td>370</td>
            <td>43</td>
            <td>École Élémentaire Saint-Exupéry, Le Plessis Bouchard</td>
         </tr>
         <tr>
            <td>Nam Anh A.</td>
            <td>370</td>
            <td>43</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6ème (participation en binôme) : 46134 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>460</td><td>1</td></tr><tr><td>446</td><td>3</td></tr><tr><td>444</td><td>7</td></tr><tr><td>436</td><td>9</td></tr><tr><td>434</td><td>25</td></tr><tr><td>433</td><td>31</td></tr><tr><td>432</td><td>33</td></tr><tr><td>431</td><td>37</td></tr><tr><td>430</td><td>39</td></tr><tr><td>428</td><td>49</td></tr><tr><td>427</td><td>51</td></tr><tr><td>426</td><td>53</td></tr><tr><td>424</td><td>61</td></tr><tr><td>422</td><td>65</td></tr><tr><td>420</td><td>75</td></tr><tr><td>416</td><td>93</td></tr><tr><td>415</td><td>101</td></tr><tr><td>414</td><td>103</td></tr><tr><td>413</td><td>107</td></tr><tr><td>412</td><td>114</td></tr><tr><td>411</td><td>122</td></tr><tr><td>410</td><td>124</td></tr><tr><td>409</td><td>146</td></tr><tr><td>407</td><td>148</td></tr><tr><td>406</td><td>154</td></tr><tr><td>404</td><td>181</td></tr><tr><td>403</td><td>207</td></tr><tr><td>402</td><td>211</td></tr><tr><td>401</td><td>245</td></tr><tr><td>400</td><td>253</td></tr><tr><td>399</td><td>293</td></tr><tr><td>398</td><td>297</td></tr><tr><td>397</td><td>311</td></tr><tr><td>396</td><td>319</td></tr><tr><td>395</td><td>347</td></tr><tr><td>394</td><td>353</td></tr><tr><td>393</td><td>394</td></tr><tr><td>392</td><td>398</td></tr><tr><td>391</td><td>440</td></tr><tr><td>390</td><td>454</td></tr><tr><td>389</td><td>486</td></tr><tr><td>388</td><td>498</td></tr><tr><td>387</td><td>524</td></tr><tr><td>386</td><td>536</td></tr><tr><td>385</td><td>598</td></tr><tr><td>384</td><td>608</td></tr><tr><td>383</td><td>654</td></tr><tr><td>382</td><td>676</td></tr><tr><td>381</td><td>724</td></tr><tr><td>380</td><td>732</td></tr><tr><td>379</td><td>834</td></tr><tr><td>378</td><td>854</td></tr><tr><td>377</td><td>892</td></tr><tr><td>376</td><td>910</td></tr><tr><td>375</td><td>990</td></tr><tr><td>374</td><td>1014</td></tr><tr><td>373</td><td>1091</td></tr><tr><td>372</td><td>1129</td></tr><tr><td>371</td><td>1201</td></tr><tr><td>370</td><td>1221</td></tr><tr><td>369</td><td>1371</td></tr><tr><td>368</td><td>1403</td></tr><tr><td>367</td><td>1465</td></tr><tr><td>366</td><td>1501</td></tr><tr><td>365</td><td>1607</td></tr><tr><td>364</td><td>1649</td></tr><tr><td>363</td><td>1725</td></tr><tr><td>362</td><td>1760</td></tr><tr><td>361</td><td>1876</td></tr><tr><td>360</td><td>1910</td></tr><tr><td>359</td><td>2046</td></tr><tr><td>358</td><td>2094</td></tr><tr><td>357</td><td>2178</td></tr><tr><td>356</td><td>2224</td></tr><tr><td>355</td><td>2395</td></tr><tr><td>354</td><td>2447</td></tr><tr><td>353</td><td>2555</td></tr><tr><td>352</td><td>2645</td></tr><tr><td>351</td><td>2765</td></tr><tr><td>350</td><td>2833</td></tr><tr><td>349</td><td>3063</td></tr><tr><td>348</td><td>3127</td></tr><tr><td>347</td><td>3277</td></tr><tr><td>346</td><td>3334</td></tr><tr><td>345</td><td>3513</td></tr><tr><td>344</td><td>3601</td></tr><tr><td>343</td><td>3735</td></tr><tr><td>342</td><td>3869</td></tr><tr><td>341</td><td>4027</td></tr><tr><td>340</td><td>4088</td></tr><tr><td>339</td><td>4380</td></tr><tr><td>338</td><td>4466</td></tr><tr><td>337</td><td>4631</td></tr><tr><td>336</td><td>4721</td></tr><tr><td>335</td><td>4973</td></tr><tr><td>334</td><td>5096</td></tr><tr><td>333</td><td>5278</td></tr><tr><td>332</td><td>5427</td></tr><tr><td>331</td><td>5647</td></tr><tr><td>330</td><td>5729</td></tr><tr><td>329</td><td>6125</td></tr><tr><td>328</td><td>6237</td></tr><tr><td>327</td><td>6429</td></tr><tr><td>326</td><td>6549</td></tr><tr><td>325</td><td>6885</td></tr><tr><td>324</td><td>7036</td></tr><tr><td>323</td><td>7261</td></tr><tr><td>322</td><td>7492</td></tr><tr><td>321</td><td>7692</td></tr><tr><td>320</td><td>7814</td></tr><tr><td>319</td><td>8303</td></tr><tr><td>318</td><td>8413</td></tr><tr><td>317</td><td>8715</td></tr><tr><td>316</td><td>8835</td></tr><tr><td>315</td><td>9250</td></tr><tr><td>314</td><td>9412</td></tr><tr><td>313</td><td>9673</td></tr><tr><td>312</td><td>9918</td></tr><tr><td>311</td><td>10147</td></tr><tr><td>310</td><td>10337</td></tr><tr><td>309</td><td>10923</td></tr><tr><td>308</td><td>11059</td></tr><tr><td>307</td><td>11365</td></tr><tr><td>306</td><td>11486</td></tr><tr><td>305</td><td>11960</td></tr><tr><td>304</td><td>12107</td></tr><tr><td>303</td><td>12386</td></tr><tr><td>302</td><td>12695</td></tr><tr><td>301</td><td>12971</td></tr><tr><td>300</td><td>13155</td></tr><tr><td>299</td><td>13878</td></tr><tr><td>298</td><td>14025</td></tr><tr><td>297</td><td>14358</td></tr><tr><td>296</td><td>14521</td></tr><tr><td>295</td><td>15016</td></tr><tr><td>294</td><td>15174</td></tr><tr><td>293</td><td>15455</td></tr><tr><td>292</td><td>15806</td></tr><tr><td>291</td><td>16077</td></tr><tr><td>290</td><td>16283</td></tr><tr><td>289</td><td>16983</td></tr><tr><td>288</td><td>17161</td></tr><tr><td>287</td><td>17548</td></tr><tr><td>286</td><td>17649</td></tr><tr><td>285</td><td>18219</td></tr><tr><td>284</td><td>18349</td></tr><tr><td>283</td><td>18667</td></tr><tr><td>282</td><td>19050</td></tr><tr><td>281</td><td>19290</td></tr><tr><td>280</td><td>19483</td></tr><tr><td>279</td><td>20267</td></tr><tr><td>278</td><td>20480</td></tr><tr><td>277</td><td>20807</td></tr><tr><td>276</td><td>20949</td></tr><tr><td>275</td><td>21509</td></tr><tr><td>274</td><td>21613</td></tr><tr><td>273</td><td>21846</td></tr><tr><td>272</td><td>22304</td></tr><tr><td>271</td><td>22575</td></tr><tr><td>270</td><td>22783</td></tr><tr><td>269</td><td>23558</td></tr><tr><td>268</td><td>23780</td></tr><tr><td>267</td><td>24065</td></tr><tr><td>266</td><td>24184</td></tr><tr><td>265</td><td>24789</td></tr><tr><td>264</td><td>24894</td></tr><tr><td>263</td><td>25107</td></tr><tr><td>262</td><td>25565</td></tr><tr><td>261</td><td>25735</td></tr><tr><td>260</td><td>25909</td></tr><tr><td>259</td><td>26669</td></tr><tr><td>258</td><td>26876</td></tr><tr><td>257</td><td>27182</td></tr><tr><td>256</td><td>27272</td></tr><tr><td>255</td><td>27840</td></tr><tr><td>254</td><td>27925</td></tr><tr><td>253</td><td>28109</td></tr><tr><td>252</td><td>28553</td></tr><tr><td>251</td><td>28771</td></tr><tr><td>250</td><td>28929</td></tr><tr><td>249</td><td>29654</td></tr><tr><td>248</td><td>29936</td></tr><tr><td>247</td><td>30169</td></tr><tr><td>246</td><td>30221</td></tr><tr><td>245</td><td>30757</td></tr><tr><td>244</td><td>30827</td></tr><tr><td>243</td><td>30985</td></tr><tr><td>242</td><td>31441</td></tr><tr><td>241</td><td>31609</td></tr><tr><td>240</td><td>31732</td></tr><tr><td>239</td><td>32411</td></tr><tr><td>238</td><td>32657</td></tr><tr><td>237</td><td>32862</td></tr><tr><td>236</td><td>32920</td></tr><tr><td>235</td><td>33463</td></tr><tr><td>234</td><td>33509</td></tr><tr><td>233</td><td>33605</td></tr><tr><td>232</td><td>34035</td></tr><tr><td>231</td><td>34168</td></tr><tr><td>230</td><td>34291</td></tr><tr><td>229</td><td>34868</td></tr><tr><td>228</td><td>35114</td></tr><tr><td>227</td><td>35218</td></tr><tr><td>226</td><td>35260</td></tr><tr><td>225</td><td>35758</td></tr><tr><td>224</td><td>35794</td></tr><tr><td>223</td><td>35886</td></tr><tr><td>222</td><td>36303</td></tr><tr><td>221</td><td>36442</td></tr><tr><td>220</td><td>36501</td></tr><tr><td>219</td><td>37109</td></tr><tr><td>218</td><td>37321</td></tr><tr><td>217</td><td>37443</td></tr><tr><td>216</td><td>37473</td></tr><tr><td>215</td><td>37899</td></tr><tr><td>214</td><td>37927</td></tr><tr><td>213</td><td>37989</td></tr><tr><td>212</td><td>38402</td></tr><tr><td>211</td><td>38519</td></tr><tr><td>210</td><td>38555</td></tr><tr><td>209</td><td>39064</td></tr><tr><td>208</td><td>39261</td></tr><tr><td>207</td><td>39309</td></tr><tr><td>206</td><td>39335</td></tr><tr><td>205</td><td>39671</td></tr><tr><td>204</td><td>39691</td></tr><tr><td>203</td><td>39724</td></tr><tr><td>202</td><td>40002</td></tr><tr><td>201</td><td>40104</td></tr><tr><td>200</td><td>40154</td></tr><tr><td>199</td><td>40535</td></tr><tr><td>198</td><td>40673</td></tr><tr><td>197</td><td>40725</td></tr><tr><td>196</td><td>40731</td></tr><tr><td>195</td><td>41019</td></tr><tr><td>194</td><td>41025</td></tr><tr><td>193</td><td>41065</td></tr><tr><td>192</td><td>41252</td></tr><tr><td>191</td><td>41312</td></tr><tr><td>190</td><td>41352</td></tr><tr><td>189</td><td>41619</td></tr><tr><td>188</td><td>41707</td></tr><tr><td>187</td><td>41743</td></tr><tr><td>186</td><td>41751</td></tr><tr><td>185</td><td>42002</td></tr><tr><td>184</td><td>42011</td></tr><tr><td>183</td><td>42038</td></tr><tr><td>182</td><td>42228</td></tr><tr><td>181</td><td>42308</td></tr><tr><td>180</td><td>42324</td></tr><tr><td>179</td><td>42594</td></tr><tr><td>178</td><td>42709</td></tr><tr><td>177</td><td>42740</td></tr><tr><td>176</td><td>42760</td></tr><tr><td>175</td><td>42956</td></tr><tr><td>174</td><td>42968</td></tr><tr><td>173</td><td>42986</td></tr><tr><td>172</td><td>43167</td></tr><tr><td>171</td><td>43238</td></tr><tr><td>170</td><td>43270</td></tr><tr><td>169</td><td>43456</td></tr><tr><td>168</td><td>43548</td></tr><tr><td>167</td><td>43566</td></tr><tr><td>166</td><td>43570</td></tr><tr><td>165</td><td>43735</td></tr><tr><td>164</td><td>43744</td></tr><tr><td>163</td><td>43762</td></tr><tr><td>162</td><td>43889</td></tr><tr><td>161</td><td>43921</td></tr><tr><td>160</td><td>43941</td></tr><tr><td>159</td><td>44109</td></tr><tr><td>158</td><td>44175</td></tr><tr><td>157</td><td>44191</td></tr><tr><td>156</td><td>44195</td></tr><tr><td>155</td><td>44369</td></tr><tr><td>154</td><td>44373</td></tr><tr><td>153</td><td>44376</td></tr><tr><td>152</td><td>44486</td></tr><tr><td>151</td><td>44515</td></tr><tr><td>150</td><td>44519</td></tr><tr><td>149</td><td>44622</td></tr><tr><td>148</td><td>44684</td></tr><tr><td>146</td><td>44694</td></tr><tr><td>145</td><td>44832</td></tr><tr><td>144</td><td>44840</td></tr><tr><td>143</td><td>44860</td></tr><tr><td>142</td><td>44959</td></tr><tr><td>140</td><td>44991</td></tr><tr><td>139</td><td>45070</td></tr><tr><td>138</td><td>45121</td></tr><tr><td>136</td><td>45126</td></tr><tr><td>135</td><td>45222</td></tr><tr><td>134</td><td>45226</td></tr><tr><td>133</td><td>45230</td></tr><tr><td>132</td><td>45298</td></tr><tr><td>130</td><td>45320</td></tr><tr><td>129</td><td>45376</td></tr><tr><td>128</td><td>45404</td></tr><tr><td>126</td><td>45406</td></tr><tr><td>123</td><td>45458</td></tr><tr><td>122</td><td>45497</td></tr><tr><td>121</td><td>45505</td></tr><tr><td>120</td><td>45507</td></tr><tr><td>119</td><td>45561</td></tr><tr><td>118</td><td>45593</td></tr><tr><td>117</td><td>45595</td></tr><tr><td>116</td><td>45597</td></tr><tr><td>115</td><td>45644</td></tr><tr><td>113</td><td>45646</td></tr><tr><td>112</td><td>45680</td></tr><tr><td>110</td><td>45686</td></tr><tr><td>109</td><td>45711</td></tr><tr><td>108</td><td>45733</td></tr><tr><td>106</td><td>45735</td></tr><tr><td>103</td><td>45761</td></tr><tr><td>102</td><td>45787</td></tr><tr><td>100</td><td>45796</td></tr><tr><td>99</td><td>45824</td></tr><tr><td>98</td><td>45830</td></tr><tr><td>96</td><td>45832</td></tr><tr><td>93</td><td>45844</td></tr><tr><td>92</td><td>45866</td></tr><tr><td>90</td><td>45870</td></tr><tr><td>89</td><td>45908</td></tr><tr><td>88</td><td>45916</td></tr><tr><td>86</td><td>45918</td></tr><tr><td>83</td><td>45928</td></tr><tr><td>80</td><td>45949</td></tr><tr><td>79</td><td>45957</td></tr><tr><td>78</td><td>45963</td></tr><tr><td>76</td><td>45965</td></tr><tr><td>73</td><td>45971</td></tr><tr><td>70</td><td>45979</td></tr><tr><td>69</td><td>45993</td></tr><tr><td>62</td><td>45995</td></tr><tr><td>60</td><td>45999</td></tr><tr><td>56</td><td>46011</td></tr><tr><td>53</td><td>46017</td></tr><tr><td>50</td><td>46021</td></tr><tr><td>43</td><td>46027</td></tr><tr><td>40</td><td>46029</td></tr><tr><td>36</td><td>46037</td></tr><tr><td>30</td><td>46039</td></tr><tr><td>26</td><td>46059</td></tr><tr><td>23</td><td>46065</td></tr><tr><td>20</td><td>46071</td></tr><tr><td>0</td><td>46077</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 92 premiers ayant un score supérieur ou égal à 420 sont listés ci-dessous.
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
            <td>Pierre G.</td>
            <td>460</td>
            <td>1</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Lenny B.</td>
            <td>460</td>
            <td>1</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Nadège S.</td>
            <td>446</td>
            <td>3</td>
            <td>Collège Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Gabrielle C.</td>
            <td>446</td>
            <td>3</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Logann T.</td>
            <td>446</td>
            <td>3</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Anne D.</td>
            <td>446</td>
            <td>3</td>
            <td>Collège Lakanal, Sceaux</td>
         </tr>
         <tr>
            <td>Tanguy M.</td>
            <td>444</td>
            <td>7</td>
            <td>Collège Belledonne, Villard-Bonnot</td>
         </tr>
         <tr>
            <td>Augustin V.</td>
            <td>444</td>
            <td>7</td>
            <td>Collège Belledonne, Villard-Bonnot</td>
         </tr>
         <tr>
            <td>Clarisse V.</td>
            <td>436</td>
            <td>9</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Théo H.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Privé de la Salle, Coudekerque</td>
         </tr>
         <tr>
            <td>Raphaël J.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Damira Asperti, Penne d'Agenais</td>
         </tr>
         <tr>
            <td>Quentin H.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Killian B.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Rosalie B.</td>
            <td>436</td>
            <td>9</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Augustin B.</td>
            <td>436</td>
            <td>9</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Elsa H.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Des Bréguières, Cagnes sur Mer</td>
         </tr>
         <tr>
            <td>Pablo R.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Jean Monnet, Briis Sous Forges</td>
         </tr>
         <tr>
            <td>Timour M.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Millie S.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Forain François Verdier, Leguevin</td>
         </tr>
         <tr>
            <td>Blesslie P.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Des Bréguières, Cagnes sur Mer</td>
         </tr>
         <tr>
            <td>Pol-Louis B.</td>
            <td>436</td>
            <td>9</td>
            <td>Lycée Français Anna de Noailles, Bucarest</td>
         </tr>
         <tr>
            <td>Alexzandre L.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Damira Asperti, Penne d'Agenais</td>
         </tr>
         <tr>
            <td>Luki D.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Hugo H.</td>
            <td>436</td>
            <td>9</td>
            <td>Collège Privé de la Salle, Coudekerque</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Oliwia D.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Ivan J.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège Chantenay, Nantes</td>
         </tr>
         <tr>
            <td>Nils P.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Basile P.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège Chantenay, Nantes</td>
         </tr>
         <tr>
            <td>Ayla S.</td>
            <td>434</td>
            <td>25</td>
            <td>Collège la Combe de Savoie, Albertville</td>
         </tr>
         <tr>
            <td>Tao S.</td>
            <td>433</td>
            <td>31</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Arthur P.</td>
            <td>433</td>
            <td>31</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Aymeric A.</td>
            <td>432</td>
            <td>33</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Diego C.</td>
            <td>432</td>
            <td>33</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Paco B.</td>
            <td>432</td>
            <td>33</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Damien L.</td>
            <td>432</td>
            <td>33</td>
            <td>Collège François Mauriac, Leognan</td>
         </tr>
         <tr>
            <td>Aurelien V.</td>
            <td>431</td>
            <td>37</td>
            <td>Collège Saint-Exupéry, Saint-Laurent du Var</td>
         </tr>
         <tr>
            <td>Alexander K.</td>
            <td>431</td>
            <td>37</td>
            <td>Collège Saint-Exupéry, Saint-Laurent du Var</td>
         </tr>
         <tr>
            <td>Guillaume M.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Elia M.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Natan M.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Des Douits, Falaise</td>
         </tr>
         <tr>
            <td>Baptiste L.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège la Pajotterie, Châteauneuf-en-Thymerais</td>
         </tr>
         <tr>
            <td>Esteban O.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Erwan L.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Victtoria G.</td>
            <td>430</td>
            <td>39</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Emma G.</td>
            <td>430</td>
            <td>39</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Eliot H.</td>
            <td>430</td>
            <td>39</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>428</td>
            <td>49</td>
            <td>Lycée Pasteur, São Paulo</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>428</td>
            <td>49</td>
            <td>Lycée Pasteur, São Paulo</td>
         </tr>
         <tr>
            <td>Mael O.</td>
            <td>427</td>
            <td>51</td>
            <td>Collège "George Sand", La Motte Servolex</td>
         </tr>
         <tr>
            <td>Maxim S.</td>
            <td>427</td>
            <td>51</td>
            <td>Collège "George Sand", La Motte Servolex</td>
         </tr>
         <tr>
            <td>Marco C.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Anne-Claire C.</td>
            <td>426</td>
            <td>53</td>
            <td>Lycée Français Saint-Exupéry, Ouagadougou</td>
         </tr>
         <tr>
            <td>Isaac B.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège les Louataux, Champagnole</td>
         </tr>
         <tr>
            <td>Rémi A.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège Marcel Chêne, Pontcharra</td>
         </tr>
         <tr>
            <td>Tom P.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège les Louataux, Champagnole</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège Marcel Chêne, Pontcharra</td>
         </tr>
         <tr>
            <td>Mariana S.</td>
            <td>426</td>
            <td>53</td>
            <td>Lycée Français Saint-Exupéry, Ouagadougou</td>
         </tr>
         <tr>
            <td>Samuel C.</td>
            <td>426</td>
            <td>53</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Théo A.</td>
            <td>424</td>
            <td>61</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Lino B.</td>
            <td>424</td>
            <td>61</td>
            <td>Collège Charles Péguy, Palaiseau</td>
         </tr>
         <tr>
            <td>William Q.</td>
            <td>424</td>
            <td>61</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Gianni P.</td>
            <td>424</td>
            <td>61</td>
            <td>Collège Charles Péguy, Palaiseau</td>
         </tr>
         <tr>
            <td>Hugo R.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Léo L.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Raoul Dufy, Nice</td>
         </tr>
         <tr>
            <td>Enzo F.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Fantin Latour, Grenoble</td>
         </tr>
         <tr>
            <td>Ophélie P.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Cacault, Clisson</td>
         </tr>
         <tr>
            <td>Noah G.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Cacault, Clisson</td>
         </tr>
         <tr>
            <td>Chloé M.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Raoul Dufy, Nice</td>
         </tr>
         <tr>
            <td>Noé D.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Fantin Latour, Grenoble</td>
         </tr>
         <tr>
            <td>Damien L.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Jarod P.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Shang G.</td>
            <td>422</td>
            <td>65</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Mathéo L.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Jacques Brel, Villers Bretonneux</td>
         </tr>
         <tr>
            <td>Emmy P.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Marie Rivier, Sorgues</td>
         </tr>
         <tr>
            <td>Daphné P.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Handdy L.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Jacques Brel, Villers Bretonneux</td>
         </tr>
         <tr>
            <td>Rita B.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Mathéo P.</td>
            <td>420</td>
            <td>75</td>
            <td>Jean Mermoz, Buenos Aires</td>
         </tr>
         <tr>
            <td>David F.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Robert Schuman, Amilly</td>
         </tr>
         <tr>
            <td>Théo G.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Robert Schuman, Amilly</td>
         </tr>
         <tr>
            <td>Chaymaa E.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Nidal B.</td>
            <td>420</td>
            <td>75</td>
            <td>Jean Mermoz, Buenos Aires</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège de Ponthieu, Abbeville</td>
         </tr>
         <tr>
            <td>Jin-Lin J.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Français International de Jeddah, Jeddah</td>
         </tr>
         <tr>
            <td>Charlotte T.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Français de Vienne, Vienne</td>
         </tr>
         <tr>
            <td>Sarra B.</td>
            <td>420</td>
            <td>75</td>
            <td>Lycée Français International de Jeddah, Jeddah</td>
         </tr>
         <tr>
            <td>Léonie P.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Marie Rivier, Sorgues</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Louis Leprince Ringuet, Genas</td>
         </tr>
         <tr>
            <td>Oskar P.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège de Ponthieu, Abbeville</td>
         </tr>
         <tr>
            <td>Robin H.</td>
            <td>420</td>
            <td>75</td>
            <td>Collège Louis Leprince Ringuet, Genas</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5ème (participation en binôme) : 45065 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>470</td><td>3</td></tr><tr><td>466</td><td>7</td></tr><tr><td>462</td><td>9</td></tr><tr><td>460</td><td>11</td></tr><tr><td>456</td><td>19</td></tr><tr><td>450</td><td>23</td></tr><tr><td>446</td><td>35</td></tr><tr><td>444</td><td>43</td></tr><tr><td>443</td><td>51</td></tr><tr><td>442</td><td>53</td></tr><tr><td>440</td><td>57</td></tr><tr><td>439</td><td>87</td></tr><tr><td>438</td><td>89</td></tr><tr><td>437</td><td>93</td></tr><tr><td>436</td><td>95</td></tr><tr><td>434</td><td>123</td></tr><tr><td>432</td><td>143</td></tr><tr><td>431</td><td>163</td></tr><tr><td>430</td><td>165</td></tr><tr><td>429</td><td>189</td></tr><tr><td>428</td><td>191</td></tr><tr><td>427</td><td>197</td></tr><tr><td>426</td><td>199</td></tr><tr><td>424</td><td>229</td></tr><tr><td>422</td><td>257</td></tr><tr><td>421</td><td>275</td></tr><tr><td>420</td><td>279</td></tr><tr><td>419</td><td>321</td></tr><tr><td>418</td><td>325</td></tr><tr><td>417</td><td>333</td></tr><tr><td>416</td><td>339</td></tr><tr><td>415</td><td>401</td></tr><tr><td>414</td><td>411</td></tr><tr><td>413</td><td>459</td></tr><tr><td>412</td><td>473</td></tr><tr><td>411</td><td>529</td></tr><tr><td>410</td><td>541</td></tr><tr><td>409</td><td>621</td></tr><tr><td>408</td><td>629</td></tr><tr><td>407</td><td>655</td></tr><tr><td>406</td><td>683</td></tr><tr><td>405</td><td>777</td></tr><tr><td>404</td><td>791</td></tr><tr><td>403</td><td>867</td></tr><tr><td>402</td><td>881</td></tr><tr><td>401</td><td>975</td></tr><tr><td>400</td><td>1005</td></tr><tr><td>399</td><td>1097</td></tr><tr><td>398</td><td>1119</td></tr><tr><td>397</td><td>1159</td></tr><tr><td>396</td><td>1175</td></tr><tr><td>395</td><td>1289</td></tr><tr><td>394</td><td>1325</td></tr><tr><td>393</td><td>1432</td></tr><tr><td>392</td><td>1456</td></tr><tr><td>391</td><td>1548</td></tr><tr><td>390</td><td>1584</td></tr><tr><td>389</td><td>1762</td></tr><tr><td>388</td><td>1802</td></tr><tr><td>387</td><td>1872</td></tr><tr><td>386</td><td>1928</td></tr><tr><td>385</td><td>2071</td></tr><tr><td>384</td><td>2117</td></tr><tr><td>383</td><td>2265</td></tr><tr><td>382</td><td>2307</td></tr><tr><td>381</td><td>2459</td></tr><tr><td>380</td><td>2489</td></tr><tr><td>379</td><td>2727</td></tr><tr><td>378</td><td>2779</td></tr><tr><td>377</td><td>2872</td></tr><tr><td>376</td><td>2944</td></tr><tr><td>375</td><td>3176</td></tr><tr><td>374</td><td>3258</td></tr><tr><td>373</td><td>3440</td></tr><tr><td>372</td><td>3502</td></tr><tr><td>371</td><td>3698</td></tr><tr><td>370</td><td>3756</td></tr><tr><td>369</td><td>4048</td></tr><tr><td>368</td><td>4106</td></tr><tr><td>367</td><td>4238</td></tr><tr><td>366</td><td>4336</td></tr><tr><td>365</td><td>4606</td></tr><tr><td>364</td><td>4716</td></tr><tr><td>363</td><td>4942</td></tr><tr><td>362</td><td>5015</td></tr><tr><td>361</td><td>5225</td></tr><tr><td>360</td><td>5309</td></tr><tr><td>359</td><td>5708</td></tr><tr><td>358</td><td>5796</td></tr><tr><td>357</td><td>5960</td></tr><tr><td>356</td><td>6090</td></tr><tr><td>355</td><td>6417</td></tr><tr><td>354</td><td>6557</td></tr><tr><td>353</td><td>6801</td></tr><tr><td>352</td><td>6923</td></tr><tr><td>351</td><td>7195</td></tr><tr><td>350</td><td>7301</td></tr><tr><td>349</td><td>7795</td></tr><tr><td>348</td><td>7911</td></tr><tr><td>347</td><td>8129</td></tr><tr><td>346</td><td>8259</td></tr><tr><td>345</td><td>8658</td></tr><tr><td>344</td><td>8852</td></tr><tr><td>343</td><td>9138</td></tr><tr><td>342</td><td>9290</td></tr><tr><td>341</td><td>9584</td></tr><tr><td>340</td><td>9688</td></tr><tr><td>339</td><td>10251</td></tr><tr><td>338</td><td>10361</td></tr><tr><td>337</td><td>10662</td></tr><tr><td>336</td><td>10804</td></tr><tr><td>335</td><td>11216</td></tr><tr><td>334</td><td>11386</td></tr><tr><td>333</td><td>11704</td></tr><tr><td>332</td><td>11950</td></tr><tr><td>331</td><td>12294</td></tr><tr><td>330</td><td>12454</td></tr><tr><td>329</td><td>13048</td></tr><tr><td>328</td><td>13180</td></tr><tr><td>327</td><td>13509</td></tr><tr><td>326</td><td>13667</td></tr><tr><td>325</td><td>14195</td></tr><tr><td>324</td><td>14360</td></tr><tr><td>323</td><td>14645</td></tr><tr><td>322</td><td>14892</td></tr><tr><td>321</td><td>15257</td></tr><tr><td>320</td><td>15450</td></tr><tr><td>319</td><td>16116</td></tr><tr><td>318</td><td>16259</td></tr><tr><td>317</td><td>16597</td></tr><tr><td>316</td><td>16751</td></tr><tr><td>315</td><td>17231</td></tr><tr><td>314</td><td>17409</td></tr><tr><td>313</td><td>17769</td></tr><tr><td>312</td><td>18115</td></tr><tr><td>311</td><td>18378</td></tr><tr><td>310</td><td>18610</td></tr><tr><td>309</td><td>19304</td></tr><tr><td>308</td><td>19472</td></tr><tr><td>307</td><td>19878</td></tr><tr><td>306</td><td>20017</td></tr><tr><td>305</td><td>20509</td></tr><tr><td>304</td><td>20681</td></tr><tr><td>303</td><td>21010</td></tr><tr><td>302</td><td>21404</td></tr><tr><td>301</td><td>21712</td></tr><tr><td>300</td><td>21930</td></tr><tr><td>299</td><td>22618</td></tr><tr><td>298</td><td>22754</td></tr><tr><td>297</td><td>23117</td></tr><tr><td>296</td><td>23248</td></tr><tr><td>295</td><td>23769</td></tr><tr><td>294</td><td>23956</td></tr><tr><td>293</td><td>24284</td></tr><tr><td>292</td><td>24688</td></tr><tr><td>291</td><td>24981</td></tr><tr><td>290</td><td>25178</td></tr><tr><td>289</td><td>25872</td></tr><tr><td>288</td><td>26036</td></tr><tr><td>287</td><td>26438</td></tr><tr><td>286</td><td>26564</td></tr><tr><td>285</td><td>27114</td></tr><tr><td>284</td><td>27252</td></tr><tr><td>283</td><td>27581</td></tr><tr><td>282</td><td>27938</td></tr><tr><td>281</td><td>28178</td></tr><tr><td>280</td><td>28346</td></tr><tr><td>279</td><td>29001</td></tr><tr><td>278</td><td>29155</td></tr><tr><td>277</td><td>29479</td></tr><tr><td>276</td><td>29626</td></tr><tr><td>275</td><td>30070</td></tr><tr><td>274</td><td>30180</td></tr><tr><td>273</td><td>30413</td></tr><tr><td>272</td><td>30740</td></tr><tr><td>271</td><td>30939</td></tr><tr><td>270</td><td>31115</td></tr><tr><td>269</td><td>31758</td></tr><tr><td>268</td><td>31934</td></tr><tr><td>267</td><td>32160</td></tr><tr><td>266</td><td>32244</td></tr><tr><td>265</td><td>32716</td></tr><tr><td>264</td><td>32810</td></tr><tr><td>263</td><td>32999</td></tr><tr><td>262</td><td>33384</td></tr><tr><td>261</td><td>33562</td></tr><tr><td>260</td><td>33674</td></tr><tr><td>259</td><td>34223</td></tr><tr><td>258</td><td>34402</td></tr><tr><td>257</td><td>34576</td></tr><tr><td>256</td><td>34654</td></tr><tr><td>255</td><td>35168</td></tr><tr><td>254</td><td>35240</td></tr><tr><td>253</td><td>35389</td></tr><tr><td>252</td><td>35768</td></tr><tr><td>251</td><td>35920</td></tr><tr><td>250</td><td>36024</td></tr><tr><td>249</td><td>36572</td></tr><tr><td>248</td><td>36710</td></tr><tr><td>247</td><td>36864</td></tr><tr><td>246</td><td>36908</td></tr><tr><td>245</td><td>37305</td></tr><tr><td>244</td><td>37368</td></tr><tr><td>243</td><td>37452</td></tr><tr><td>242</td><td>37728</td></tr><tr><td>241</td><td>37874</td></tr><tr><td>240</td><td>37940</td></tr><tr><td>239</td><td>38370</td></tr><tr><td>238</td><td>38508</td></tr><tr><td>237</td><td>38648</td></tr><tr><td>236</td><td>38692</td></tr><tr><td>235</td><td>39038</td></tr><tr><td>234</td><td>39060</td></tr><tr><td>233</td><td>39135</td></tr><tr><td>232</td><td>39397</td></tr><tr><td>231</td><td>39497</td></tr><tr><td>230</td><td>39542</td></tr><tr><td>229</td><td>39914</td></tr><tr><td>228</td><td>40046</td></tr><tr><td>227</td><td>40107</td></tr><tr><td>226</td><td>40127</td></tr><tr><td>225</td><td>40396</td></tr><tr><td>224</td><td>40426</td></tr><tr><td>223</td><td>40466</td></tr><tr><td>222</td><td>40670</td></tr><tr><td>221</td><td>40725</td></tr><tr><td>220</td><td>40757</td></tr><tr><td>219</td><td>41056</td></tr><tr><td>218</td><td>41128</td></tr><tr><td>217</td><td>41176</td></tr><tr><td>216</td><td>41194</td></tr><tr><td>215</td><td>41378</td></tr><tr><td>214</td><td>41388</td></tr><tr><td>213</td><td>41420</td></tr><tr><td>212</td><td>41580</td></tr><tr><td>211</td><td>41648</td></tr><tr><td>210</td><td>41678</td></tr><tr><td>209</td><td>41914</td></tr><tr><td>208</td><td>41995</td></tr><tr><td>207</td><td>42023</td></tr><tr><td>206</td><td>42041</td></tr><tr><td>205</td><td>42208</td></tr><tr><td>204</td><td>42218</td></tr><tr><td>203</td><td>42236</td></tr><tr><td>202</td><td>42350</td></tr><tr><td>201</td><td>42382</td></tr><tr><td>200</td><td>42388</td></tr><tr><td>199</td><td>42576</td></tr><tr><td>198</td><td>42636</td></tr><tr><td>197</td><td>42664</td></tr><tr><td>196</td><td>42680</td></tr><tr><td>195</td><td>42799</td></tr><tr><td>194</td><td>42809</td></tr><tr><td>193</td><td>42820</td></tr><tr><td>192</td><td>42906</td></tr><tr><td>191</td><td>42927</td></tr><tr><td>190</td><td>42929</td></tr><tr><td>189</td><td>43067</td></tr><tr><td>188</td><td>43111</td></tr><tr><td>187</td><td>43131</td></tr><tr><td>186</td><td>43137</td></tr><tr><td>185</td><td>43225</td></tr><tr><td>184</td><td>43231</td></tr><tr><td>183</td><td>43247</td></tr><tr><td>182</td><td>43323</td></tr><tr><td>181</td><td>43359</td></tr><tr><td>180</td><td>43371</td></tr><tr><td>179</td><td>43526</td></tr><tr><td>178</td><td>43561</td></tr><tr><td>177</td><td>43575</td></tr><tr><td>176</td><td>43583</td></tr><tr><td>175</td><td>43675</td></tr><tr><td>174</td><td>43681</td></tr><tr><td>173</td><td>43695</td></tr><tr><td>172</td><td>43756</td></tr><tr><td>171</td><td>43770</td></tr><tr><td>170</td><td>43780</td></tr><tr><td>169</td><td>43846</td></tr><tr><td>168</td><td>43880</td></tr><tr><td>167</td><td>43884</td></tr><tr><td>166</td><td>43888</td></tr><tr><td>165</td><td>43956</td></tr><tr><td>163</td><td>43958</td></tr><tr><td>162</td><td>44019</td></tr><tr><td>161</td><td>44039</td></tr><tr><td>160</td><td>44043</td></tr><tr><td>159</td><td>44115</td></tr><tr><td>158</td><td>44157</td></tr><tr><td>157</td><td>44161</td></tr><tr><td>156</td><td>44163</td></tr><tr><td>154</td><td>44215</td></tr><tr><td>153</td><td>44220</td></tr><tr><td>152</td><td>44270</td></tr><tr><td>151</td><td>44288</td></tr><tr><td>150</td><td>44292</td></tr><tr><td>149</td><td>44340</td></tr><tr><td>147</td><td>44350</td></tr><tr><td>146</td><td>44352</td></tr><tr><td>144</td><td>44418</td></tr><tr><td>143</td><td>44422</td></tr><tr><td>142</td><td>44444</td></tr><tr><td>140</td><td>44448</td></tr><tr><td>139</td><td>44482</td></tr><tr><td>136</td><td>44498</td></tr><tr><td>135</td><td>44530</td></tr><tr><td>133</td><td>44534</td></tr><tr><td>132</td><td>44550</td></tr><tr><td>130</td><td>44556</td></tr><tr><td>129</td><td>44588</td></tr><tr><td>126</td><td>44600</td></tr><tr><td>125</td><td>44632</td></tr><tr><td>123</td><td>44636</td></tr><tr><td>120</td><td>44654</td></tr><tr><td>119</td><td>44684</td></tr><tr><td>116</td><td>44688</td></tr><tr><td>113</td><td>44705</td></tr><tr><td>110</td><td>44725</td></tr><tr><td>109</td><td>44750</td></tr><tr><td>108</td><td>44760</td></tr><tr><td>106</td><td>44762</td></tr><tr><td>103</td><td>44780</td></tr><tr><td>102</td><td>44792</td></tr><tr><td>100</td><td>44794</td></tr><tr><td>99</td><td>44812</td></tr><tr><td>96</td><td>44814</td></tr><tr><td>93</td><td>44824</td></tr><tr><td>92</td><td>44826</td></tr><tr><td>90</td><td>44830</td></tr><tr><td>89</td><td>44850</td></tr><tr><td>86</td><td>44852</td></tr><tr><td>83</td><td>44872</td></tr><tr><td>80</td><td>44881</td></tr><tr><td>76</td><td>44898</td></tr><tr><td>73</td><td>44904</td></tr><tr><td>70</td><td>44916</td></tr><tr><td>69</td><td>44922</td></tr><tr><td>66</td><td>44924</td></tr><tr><td>63</td><td>44928</td></tr><tr><td>60</td><td>44932</td></tr><tr><td>50</td><td>44950</td></tr><tr><td>46</td><td>44956</td></tr><tr><td>43</td><td>44962</td></tr><tr><td>40</td><td>44966</td></tr><tr><td>36</td><td>44970</td></tr><tr><td>30</td><td>44972</td></tr><tr><td>26</td><td>44988</td></tr><tr><td>23</td><td>44992</td></tr><tr><td>20</td><td>44998</td></tr><tr><td>0</td><td>45000</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 86 premiers ayant un score supérieur ou égal à 440 sont listés ci-dessous.
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
            <td>Ulysse L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Raphaël G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Barbas J.</td>
            <td>470</td>
            <td>3</td>
            <td>Collège Sainte-Thérèse, Ecouen</td>
         </tr>
         <tr>
            <td>Alexane P.</td>
            <td>470</td>
            <td>3</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Madison M.</td>
            <td>470</td>
            <td>3</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Eauclere N.</td>
            <td>470</td>
            <td>3</td>
            <td>Collège Sainte-Thérèse, Ecouen</td>
         </tr>
         <tr>
            <td>François L.</td>
            <td>466</td>
            <td>7</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Léopold R.</td>
            <td>466</td>
            <td>7</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Paola J.</td>
            <td>462</td>
            <td>9</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Jeanne P.</td>
            <td>462</td>
            <td>9</td>
            <td>Lycée Francais Jakarta, Jakarta</td>
         </tr>
         <tr>
            <td>Ronan F.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Des 7 Arpents, Souffelweyersheim</td>
         </tr>
         <tr>
            <td>Amaury A.</td>
            <td>460</td>
            <td>11</td>
            <td>Institution Sainte-Marie la Grand Grange, Saint Chamond</td>
         </tr>
         <tr>
            <td>Kaï P.</td>
            <td>460</td>
            <td>11</td>
            <td>Lycée Français de Saint Domingue, Saint Domingue</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>460</td>
            <td>11</td>
            <td>Institution Sainte-Marie la Grand Grange, Saint Chamond</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Martin S.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Des 7 Arpents, Souffelweyersheim</td>
         </tr>
         <tr>
            <td>Sébastien J.</td>
            <td>460</td>
            <td>11</td>
            <td>Lycée Français de Saint Domingue, Saint Domingue</td>
         </tr>
         <tr>
            <td>Nathanaël B.</td>
            <td>460</td>
            <td>11</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>William B.</td>
            <td>456</td>
            <td>19</td>
            <td>Les Garrigues, Rognes</td>
         </tr>
         <tr>
            <td>Arthur C.</td>
            <td>456</td>
            <td>19</td>
            <td>Collège Clotaire Baujoin, Thourotte</td>
         </tr>
         <tr>
            <td>Benjamin G.</td>
            <td>456</td>
            <td>19</td>
            <td>Les Garrigues, Rognes</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>456</td>
            <td>19</td>
            <td>Collège Clotaire Baujoin, Thourotte</td>
         </tr>
         <tr>
            <td>Thibault A.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Albert Camus, Jarville la Malgrange</td>
         </tr>
         <tr>
            <td>Raphael H.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Léon Gambetta, Riedisheim</td>
         </tr>
         <tr>
            <td>Agnes L.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Jean Moulin, Caen</td>
         </tr>
         <tr>
            <td>Noa R.</td>
            <td>450</td>
            <td>23</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Tom S.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Léon Gambetta, Riedisheim</td>
         </tr>
         <tr>
            <td>Baptiste S.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Albert Camus, Jarville la Malgrange</td>
         </tr>
         <tr>
            <td>Malek M.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Protestant Français, Beyrouth</td>
         </tr>
         <tr>
            <td>Anatole L.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Jean Moulin, Caen</td>
         </tr>
         <tr>
            <td>Jules P.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Rayan S.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Protestant Français, Beyrouth</td>
         </tr>
         <tr>
            <td>Hugo C.</td>
            <td>450</td>
            <td>23</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Sacha C.</td>
            <td>450</td>
            <td>23</td>
            <td>Collège Jean Vilar, Chalon sur Saone</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>446</td>
            <td>35</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Ewen L.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège-Lycée Sainte Louise, Paris</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège-Lycée Sainte Louise, Paris</td>
         </tr>
         <tr>
            <td>Even B.</td>
            <td>446</td>
            <td>35</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Martin L.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Soufiane A.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège les Garrigues, Montpellier</td>
         </tr>
         <tr>
            <td>Erwan T.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège de Lattre de Tassigny, Le Perreux sur Marne</td>
         </tr>
         <tr>
            <td>Aymerick B.</td>
            <td>446</td>
            <td>35</td>
            <td>Collège les Garrigues, Montpellier</td>
         </tr>
         <tr>
            <td>Perceval C.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Samy R.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Jean Auriac, Arveyres</td>
         </tr>
         <tr>
            <td>Valentin K.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Marius G.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Jean Auriac, Arveyres</td>
         </tr>
         <tr>
            <td>Justine R.</td>
            <td>444</td>
            <td>43</td>
            <td>Jules Romains, Saint-Avertin</td>
         </tr>
         <tr>
            <td>Romain P.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Kervihan, Fouesnant</td>
         </tr>
         <tr>
            <td>Micha A.</td>
            <td>444</td>
            <td>43</td>
            <td>Collège Moulin Des Prés, Paris</td>
         </tr>
         <tr>
            <td>Alice W.</td>
            <td>444</td>
            <td>43</td>
            <td>Jules Romains, Saint-Avertin</td>
         </tr>
         <tr>
            <td>Albane V.</td>
            <td>443</td>
            <td>51</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Maelle D.</td>
            <td>443</td>
            <td>51</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>442</td>
            <td>53</td>
            <td>Les Garrigues, Rognes</td>
         </tr>
         <tr>
            <td>Léa B.</td>
            <td>442</td>
            <td>53</td>
            <td>Collège Pierre Mendès France, Parthenay</td>
         </tr>
         <tr>
            <td>Maxime N.</td>
            <td>442</td>
            <td>53</td>
            <td>Les Garrigues, Rognes</td>
         </tr>
         <tr>
            <td>Ninon M.</td>
            <td>442</td>
            <td>53</td>
            <td>Collège Pierre Mendès France, Parthenay</td>
         </tr>
         <tr>
            <td>Yaniss B.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
         <tr>
            <td>Arthur A.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Timothée S.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Immaculée Conception, Angers</td>
         </tr>
         <tr>
            <td>Clément P.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège le Clos Ferbois, Jargeau</td>
         </tr>
         <tr>
            <td>Erwan P.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège la Roche Aux Fées, Retiers</td>
         </tr>
         <tr>
            <td>Brieux M.</td>
            <td>440</td>
            <td>57</td>
            <td>Institution Sevigne, Granville</td>
         </tr>
         <tr>
            <td>Isabel S.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Jules Ferry, Quimperlé</td>
         </tr>
         <tr>
            <td>Estelle P.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Agathe M.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Matéo A.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Philip A.</td>
            <td>440</td>
            <td>57</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         <tr>
            <td>Camille C.</td>
            <td>440</td>
            <td>57</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Victor J.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Augustin L.</td>
            <td>440</td>
            <td>57</td>
            <td>Institution Sevigne, Granville</td>
         </tr>
         <tr>
            <td>Maceo J.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Georges Brassens, Montastruc la Conseillere</td>
         </tr>
         <tr>
            <td>Rehann E.</td>
            <td>440</td>
            <td>57</td>
            <td>Groupe Scolaire Démotz de la Salle, Rumilly</td>
         </tr>
         <tr>
            <td>Titouan P.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Pierre Brossolette, Brionne</td>
         </tr>
         <tr>
            <td>Manon D.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Martin L.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Immaculée Conception, Angers</td>
         </tr>
         <tr>
            <td>Lenaïg C.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Jules Ferry, Quimperlé</td>
         </tr>
         <tr>
            <td>Jean N.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège le Clos Ferbois, Jargeau</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Geneviève de Gaulle Anthonioz, Les Bordes</td>
         </tr>
         <tr>
            <td>Alexandre G.</td>
            <td>440</td>
            <td>57</td>
            <td>Lycée Français International Marguerite Duras, Hô Chi Minh-Ville</td>
         </tr>
         <tr>
            <td>Sebastian C.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Europole, Grenoble</td>
         </tr>
         <tr>
            <td>Mathys L.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Dunois, Orléans</td>
         </tr>
         <tr>
            <td>Matias R.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Europole, Grenoble</td>
         </tr>
         <tr>
            <td>Enola F.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Renaud-Barrault, Avesnelles</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège la Roche Aux Fées, Retiers</td>
         </tr>
         <tr>
            <td>Antonin A.</td>
            <td>440</td>
            <td>57</td>
            <td>Collège Pierre Brossolette, Bruz</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4ème (participation en binôme) : 38184 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>13</td></tr><tr><td>474</td><td>15</td></tr><tr><td>470</td><td>17</td></tr><tr><td>468</td><td>25</td></tr><tr><td>466</td><td>27</td></tr><tr><td>465</td><td>31</td></tr><tr><td>464</td><td>33</td></tr><tr><td>460</td><td>37</td></tr><tr><td>458</td><td>57</td></tr><tr><td>456</td><td>59</td></tr><tr><td>455</td><td>91</td></tr><tr><td>454</td><td>93</td></tr><tr><td>452</td><td>102</td></tr><tr><td>451</td><td>110</td></tr><tr><td>450</td><td>112</td></tr><tr><td>449</td><td>148</td></tr><tr><td>447</td><td>150</td></tr><tr><td>446</td><td>152</td></tr><tr><td>445</td><td>178</td></tr><tr><td>444</td><td>184</td></tr><tr><td>442</td><td>212</td></tr><tr><td>440</td><td>220</td></tr><tr><td>439</td><td>287</td></tr><tr><td>438</td><td>291</td></tr><tr><td>437</td><td>297</td></tr><tr><td>436</td><td>299</td></tr><tr><td>434</td><td>369</td></tr><tr><td>433</td><td>399</td></tr><tr><td>432</td><td>401</td></tr><tr><td>431</td><td>445</td></tr><tr><td>430</td><td>451</td></tr><tr><td>429</td><td>565</td></tr><tr><td>428</td><td>573</td></tr><tr><td>427</td><td>595</td></tr><tr><td>426</td><td>601</td></tr><tr><td>425</td><td>675</td></tr><tr><td>424</td><td>690</td></tr><tr><td>423</td><td>748</td></tr><tr><td>422</td><td>750</td></tr><tr><td>421</td><td>802</td></tr><tr><td>420</td><td>816</td></tr><tr><td>419</td><td>965</td></tr><tr><td>418</td><td>985</td></tr><tr><td>417</td><td>1019</td></tr><tr><td>416</td><td>1035</td></tr><tr><td>415</td><td>1155</td></tr><tr><td>414</td><td>1180</td></tr><tr><td>413</td><td>1268</td></tr><tr><td>412</td><td>1282</td></tr><tr><td>411</td><td>1360</td></tr><tr><td>410</td><td>1394</td></tr><tr><td>409</td><td>1572</td></tr><tr><td>408</td><td>1582</td></tr><tr><td>407</td><td>1640</td></tr><tr><td>406</td><td>1664</td></tr><tr><td>405</td><td>1872</td></tr><tr><td>404</td><td>1908</td></tr><tr><td>403</td><td>2014</td></tr><tr><td>402</td><td>2040</td></tr><tr><td>401</td><td>2147</td></tr><tr><td>400</td><td>2175</td></tr><tr><td>399</td><td>2444</td></tr><tr><td>398</td><td>2474</td></tr><tr><td>397</td><td>2542</td></tr><tr><td>396</td><td>2596</td></tr><tr><td>395</td><td>2786</td></tr><tr><td>394</td><td>2848</td></tr><tr><td>393</td><td>3013</td></tr><tr><td>392</td><td>3045</td></tr><tr><td>391</td><td>3235</td></tr><tr><td>390</td><td>3293</td></tr><tr><td>389</td><td>3594</td></tr><tr><td>388</td><td>3648</td></tr><tr><td>387</td><td>3790</td></tr><tr><td>386</td><td>3868</td></tr><tr><td>385</td><td>4126</td></tr><tr><td>384</td><td>4192</td></tr><tr><td>383</td><td>4406</td></tr><tr><td>382</td><td>4462</td></tr><tr><td>381</td><td>4648</td></tr><tr><td>380</td><td>4746</td></tr><tr><td>379</td><td>5080</td></tr><tr><td>378</td><td>5182</td></tr><tr><td>377</td><td>5318</td></tr><tr><td>376</td><td>5402</td></tr><tr><td>375</td><td>5730</td></tr><tr><td>374</td><td>5844</td></tr><tr><td>373</td><td>6103</td></tr><tr><td>372</td><td>6191</td></tr><tr><td>371</td><td>6437</td></tr><tr><td>370</td><td>6519</td></tr><tr><td>369</td><td>6950</td></tr><tr><td>368</td><td>7046</td></tr><tr><td>367</td><td>7240</td></tr><tr><td>366</td><td>7318</td></tr><tr><td>365</td><td>7675</td></tr><tr><td>364</td><td>7785</td></tr><tr><td>363</td><td>8029</td></tr><tr><td>362</td><td>8133</td></tr><tr><td>361</td><td>8375</td></tr><tr><td>360</td><td>8479</td></tr><tr><td>359</td><td>8955</td></tr><tr><td>358</td><td>9061</td></tr><tr><td>357</td><td>9309</td></tr><tr><td>356</td><td>9416</td></tr><tr><td>355</td><td>9828</td></tr><tr><td>354</td><td>9962</td></tr><tr><td>353</td><td>10256</td></tr><tr><td>352</td><td>10389</td></tr><tr><td>351</td><td>10719</td></tr><tr><td>350</td><td>10825</td></tr><tr><td>349</td><td>11387</td></tr><tr><td>348</td><td>11507</td></tr><tr><td>347</td><td>11768</td></tr><tr><td>346</td><td>11903</td></tr><tr><td>345</td><td>12263</td></tr><tr><td>344</td><td>12395</td></tr><tr><td>343</td><td>12679</td></tr><tr><td>342</td><td>12839</td></tr><tr><td>341</td><td>13143</td></tr><tr><td>340</td><td>13253</td></tr><tr><td>339</td><td>13881</td></tr><tr><td>338</td><td>14007</td></tr><tr><td>337</td><td>14273</td></tr><tr><td>336</td><td>14435</td></tr><tr><td>335</td><td>14854</td></tr><tr><td>334</td><td>14996</td></tr><tr><td>333</td><td>15300</td></tr><tr><td>332</td><td>15517</td></tr><tr><td>331</td><td>15796</td></tr><tr><td>330</td><td>15936</td></tr><tr><td>329</td><td>16566</td></tr><tr><td>328</td><td>16704</td></tr><tr><td>327</td><td>17014</td></tr><tr><td>326</td><td>17130</td></tr><tr><td>325</td><td>17565</td></tr><tr><td>324</td><td>17730</td></tr><tr><td>323</td><td>18008</td></tr><tr><td>322</td><td>18245</td></tr><tr><td>321</td><td>18547</td></tr><tr><td>320</td><td>18667</td></tr><tr><td>319</td><td>19303</td></tr><tr><td>318</td><td>19437</td></tr><tr><td>317</td><td>19753</td></tr><tr><td>316</td><td>19847</td></tr><tr><td>315</td><td>20291</td></tr><tr><td>314</td><td>20435</td></tr><tr><td>313</td><td>20673</td></tr><tr><td>312</td><td>20930</td></tr><tr><td>311</td><td>21237</td></tr><tr><td>310</td><td>21327</td></tr><tr><td>309</td><td>21952</td></tr><tr><td>308</td><td>22076</td></tr><tr><td>307</td><td>22407</td></tr><tr><td>306</td><td>22489</td></tr><tr><td>305</td><td>22900</td></tr><tr><td>304</td><td>23034</td></tr><tr><td>303</td><td>23282</td></tr><tr><td>302</td><td>23514</td></tr><tr><td>301</td><td>23736</td></tr><tr><td>300</td><td>23905</td></tr><tr><td>299</td><td>24502</td></tr><tr><td>298</td><td>24619</td></tr><tr><td>297</td><td>24846</td></tr><tr><td>296</td><td>24925</td></tr><tr><td>295</td><td>25316</td></tr><tr><td>294</td><td>25436</td></tr><tr><td>293</td><td>25625</td></tr><tr><td>292</td><td>25863</td></tr><tr><td>291</td><td>26083</td></tr><tr><td>290</td><td>26192</td></tr><tr><td>289</td><td>26749</td></tr><tr><td>288</td><td>26845</td></tr><tr><td>287</td><td>27079</td></tr><tr><td>286</td><td>27183</td></tr><tr><td>285</td><td>27544</td></tr><tr><td>284</td><td>27644</td></tr><tr><td>283</td><td>27810</td></tr><tr><td>282</td><td>28038</td></tr><tr><td>281</td><td>28236</td></tr><tr><td>280</td><td>28358</td></tr><tr><td>279</td><td>28862</td></tr><tr><td>278</td><td>28978</td></tr><tr><td>277</td><td>29164</td></tr><tr><td>276</td><td>29213</td></tr><tr><td>275</td><td>29542</td></tr><tr><td>274</td><td>29620</td></tr><tr><td>273</td><td>29791</td></tr><tr><td>272</td><td>30014</td></tr><tr><td>271</td><td>30138</td></tr><tr><td>270</td><td>30245</td></tr><tr><td>269</td><td>30639</td></tr><tr><td>268</td><td>30734</td></tr><tr><td>267</td><td>30916</td></tr><tr><td>266</td><td>30962</td></tr><tr><td>265</td><td>31272</td></tr><tr><td>264</td><td>31324</td></tr><tr><td>263</td><td>31420</td></tr><tr><td>262</td><td>31601</td></tr><tr><td>261</td><td>31722</td></tr><tr><td>260</td><td>31780</td></tr><tr><td>259</td><td>32210</td></tr><tr><td>258</td><td>32288</td></tr><tr><td>257</td><td>32396</td></tr><tr><td>256</td><td>32426</td></tr><tr><td>255</td><td>32703</td></tr><tr><td>254</td><td>32735</td></tr><tr><td>253</td><td>32812</td></tr><tr><td>252</td><td>32978</td></tr><tr><td>251</td><td>33067</td></tr><tr><td>250</td><td>33117</td></tr><tr><td>249</td><td>33417</td></tr><tr><td>248</td><td>33493</td></tr><tr><td>247</td><td>33581</td></tr><tr><td>246</td><td>33621</td></tr><tr><td>245</td><td>33851</td></tr><tr><td>244</td><td>33877</td></tr><tr><td>243</td><td>33937</td></tr><tr><td>242</td><td>34096</td></tr><tr><td>241</td><td>34168</td></tr><tr><td>240</td><td>34218</td></tr><tr><td>239</td><td>34508</td></tr><tr><td>238</td><td>34584</td></tr><tr><td>237</td><td>34640</td></tr><tr><td>236</td><td>34654</td></tr><tr><td>235</td><td>34844</td></tr><tr><td>234</td><td>34858</td></tr><tr><td>233</td><td>34895</td></tr><tr><td>232</td><td>35005</td></tr><tr><td>231</td><td>35065</td></tr><tr><td>230</td><td>35091</td></tr><tr><td>229</td><td>35328</td></tr><tr><td>228</td><td>35390</td></tr><tr><td>227</td><td>35436</td></tr><tr><td>226</td><td>35444</td></tr><tr><td>225</td><td>35593</td></tr><tr><td>224</td><td>35607</td></tr><tr><td>223</td><td>35632</td></tr><tr><td>222</td><td>35757</td></tr><tr><td>221</td><td>35798</td></tr><tr><td>220</td><td>35836</td></tr><tr><td>219</td><td>36040</td></tr><tr><td>218</td><td>36088</td></tr><tr><td>217</td><td>36118</td></tr><tr><td>216</td><td>36130</td></tr><tr><td>215</td><td>36222</td></tr><tr><td>214</td><td>36232</td></tr><tr><td>213</td><td>36248</td></tr><tr><td>212</td><td>36347</td></tr><tr><td>211</td><td>36375</td></tr><tr><td>210</td><td>36385</td></tr><tr><td>209</td><td>36536</td></tr><tr><td>208</td><td>36594</td></tr><tr><td>207</td><td>36612</td></tr><tr><td>206</td><td>36620</td></tr><tr><td>205</td><td>36716</td></tr><tr><td>204</td><td>36724</td></tr><tr><td>203</td><td>36738</td></tr><tr><td>202</td><td>36791</td></tr><tr><td>201</td><td>36817</td></tr><tr><td>200</td><td>36831</td></tr><tr><td>199</td><td>36928</td></tr><tr><td>198</td><td>36960</td></tr><tr><td>197</td><td>36966</td></tr><tr><td>196</td><td>36974</td></tr><tr><td>195</td><td>37043</td></tr><tr><td>194</td><td>37049</td></tr><tr><td>193</td><td>37055</td></tr><tr><td>192</td><td>37089</td></tr><tr><td>191</td><td>37108</td></tr><tr><td>190</td><td>37114</td></tr><tr><td>189</td><td>37192</td></tr><tr><td>188</td><td>37208</td></tr><tr><td>187</td><td>37218</td></tr><tr><td>186</td><td>37220</td></tr><tr><td>185</td><td>37276</td></tr><tr><td>184</td><td>37280</td></tr><tr><td>183</td><td>37282</td></tr><tr><td>182</td><td>37328</td></tr><tr><td>181</td><td>37340</td></tr><tr><td>180</td><td>37342</td></tr><tr><td>179</td><td>37395</td></tr><tr><td>178</td><td>37409</td></tr><tr><td>176</td><td>37421</td></tr><tr><td>175</td><td>37454</td></tr><tr><td>174</td><td>37456</td></tr><tr><td>173</td><td>37464</td></tr><tr><td>172</td><td>37489</td></tr><tr><td>171</td><td>37503</td></tr><tr><td>170</td><td>37507</td></tr><tr><td>169</td><td>37547</td></tr><tr><td>168</td><td>37561</td></tr><tr><td>167</td><td>37571</td></tr><tr><td>166</td><td>37573</td></tr><tr><td>165</td><td>37619</td></tr><tr><td>163</td><td>37621</td></tr><tr><td>162</td><td>37637</td></tr><tr><td>160</td><td>37653</td></tr><tr><td>159</td><td>37688</td></tr><tr><td>156</td><td>37696</td></tr><tr><td>155</td><td>37706</td></tr><tr><td>153</td><td>37708</td></tr><tr><td>152</td><td>37722</td></tr><tr><td>150</td><td>37726</td></tr><tr><td>149</td><td>37752</td></tr><tr><td>147</td><td>37772</td></tr><tr><td>146</td><td>37774</td></tr><tr><td>145</td><td>37810</td></tr><tr><td>143</td><td>37812</td></tr><tr><td>142</td><td>37836</td></tr><tr><td>140</td><td>37838</td></tr><tr><td>139</td><td>37860</td></tr><tr><td>136</td><td>37872</td></tr><tr><td>133</td><td>37890</td></tr><tr><td>132</td><td>37896</td></tr><tr><td>130</td><td>37902</td></tr><tr><td>129</td><td>37918</td></tr><tr><td>128</td><td>37920</td></tr><tr><td>126</td><td>37922</td></tr><tr><td>123</td><td>37938</td></tr><tr><td>122</td><td>37950</td></tr><tr><td>120</td><td>37952</td></tr><tr><td>116</td><td>37966</td></tr><tr><td>115</td><td>37978</td></tr><tr><td>113</td><td>37980</td></tr><tr><td>110</td><td>37982</td></tr><tr><td>109</td><td>37994</td></tr><tr><td>106</td><td>37996</td></tr><tr><td>103</td><td>38006</td></tr><tr><td>102</td><td>38008</td></tr><tr><td>100</td><td>38010</td></tr><tr><td>99</td><td>38026</td></tr><tr><td>96</td><td>38030</td></tr><tr><td>93</td><td>38032</td></tr><tr><td>90</td><td>38034</td></tr><tr><td>89</td><td>38040</td></tr><tr><td>86</td><td>38042</td></tr><tr><td>83</td><td>38046</td></tr><tr><td>80</td><td>38048</td></tr><tr><td>76</td><td>38055</td></tr><tr><td>70</td><td>38061</td></tr><tr><td>66</td><td>38063</td></tr><tr><td>63</td><td>38065</td></tr><tr><td>60</td><td>38069</td></tr><tr><td>56</td><td>38079</td></tr><tr><td>53</td><td>38081</td></tr><tr><td>50</td><td>38083</td></tr><tr><td>46</td><td>38087</td></tr><tr><td>43</td><td>38089</td></tr><tr><td>40</td><td>38093</td></tr><tr><td>33</td><td>38099</td></tr><tr><td>30</td><td>38101</td></tr><tr><td>26</td><td>38119</td></tr><tr><td>20</td><td>38123</td></tr><tr><td>0</td><td>38137</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 56 premiers ayant un score supérieur ou égal à 460 sont listés ci-dessous.
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
            <td>Antoine L.</td>
            <td>480</td>
            <td>1</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Tom P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Giroud de Villette, Clamecy</td>
         </tr>
         <tr>
            <td>Damien F.</td>
            <td>480</td>
            <td>1</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Nathan F.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Jude, Armentières</td>
         </tr>
         <tr>
            <td>Augustin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Giroud de Villette, Clamecy</td>
         </tr>
         <tr>
            <td>Zacharie P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
         <tr>
            <td>Yani G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Sixtine V.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Loric B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Willy Ronis, Champigny sur Marne</td>
         </tr>
         <tr>
            <td>Agathe D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège le Cèdre, Le Vésinet</td>
         </tr>
         <tr>
            <td>Victor N.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Jude, Armentières</td>
         </tr>
         <tr>
            <td>Mael D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français International de Tokyo, Tokyo</td>
         </tr>
         <tr>
            <td>Bastien D.</td>
            <td>476</td>
            <td>13</td>
            <td>Collège Hans Baldung Grien, Hoerdt</td>
         </tr>
         <tr>
            <td>Hugo G.</td>
            <td>476</td>
            <td>13</td>
            <td>Collège Hans Baldung Grien, Hoerdt</td>
         </tr>
         <tr>
            <td>Benoit D.</td>
            <td>474</td>
            <td>15</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Achille T.</td>
            <td>474</td>
            <td>15</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Alice G.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Gauthier L.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège Prévert, Wintzenheim</td>
         </tr>
         <tr>
            <td>Flora D.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Urbain S.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège Prévert, Wintzenheim</td>
         </tr>
         <tr>
            <td>Lea D.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège Henri Pourrat, Ceyrat</td>
         </tr>
         <tr>
            <td>Sabine L.</td>
            <td>470</td>
            <td>17</td>
            <td>Collège André Lassagne, Caluire et Cuire</td>
         </tr>
         <tr>
            <td>Vilte S.</td>
            <td>470</td>
            <td>17</td>
            <td>École Française de Vilnius, Vilnius</td>
         </tr>
         <tr>
            <td>Alexandra A.</td>
            <td>470</td>
            <td>17</td>
            <td>École Française de Vilnius, Vilnius</td>
         </tr>
         <tr>
            <td>Alexandre R.</td>
            <td>468</td>
            <td>25</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>André P.</td>
            <td>468</td>
            <td>25</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Andréa F.</td>
            <td>466</td>
            <td>27</td>
            <td>Collège les Louataux, Champagnole</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>466</td>
            <td>27</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Lilya F.</td>
            <td>466</td>
            <td>27</td>
            <td>Collège les Louataux, Champagnole</td>
         </tr>
         <tr>
            <td>Sofiane Z.</td>
            <td>466</td>
            <td>27</td>
            <td>Collège Madame de Sévigné, Perpignan</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>465</td>
            <td>31</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Etienne V.</td>
            <td>465</td>
            <td>31</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Louis R.</td>
            <td>464</td>
            <td>33</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Pierre-Etienne R.</td>
            <td>464</td>
            <td>33</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Dylan L.</td>
            <td>464</td>
            <td>33</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Hugo D.</td>
            <td>464</td>
            <td>33</td>
            <td>Collège Georges Brassens, Saint Venant</td>
         </tr>
         <tr>
            <td>Justine C.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Mathis V.</td>
            <td>460</td>
            <td>37</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Alexandre P.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Baptiste S.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Lionel Terray, Meylan</td>
         </tr>
         <tr>
            <td>Lise C.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Lionel Terray, Meylan</td>
         </tr>
         <tr>
            <td>Lukas B.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Teva V.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Eve M.</td>
            <td>460</td>
            <td>37</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Marine L.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège de Clagny, Versailles</td>
         </tr>
         <tr>
            <td>Eliott E.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         <tr>
            <td>Nicolas M.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Florian K.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège de la Comté, Vic le Comte</td>
         </tr>
         <tr>
            <td>Camille H.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Saint Joseph, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Nolwenn G.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Robert Géant, Vézelise</td>
         </tr>
         <tr>
            <td>Alice C.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège de Clagny, Versailles</td>
         </tr>
         <tr>
            <td>Lola J.</td>
            <td>460</td>
            <td>37</td>
            <td>Ecole Jeannine Manuel, Paris</td>
         </tr>
         <tr>
            <td>Giacomo P.</td>
            <td>460</td>
            <td>37</td>
            <td>Centre International de Valbonne, Sophia Antipolis</td>
         </tr>
         <tr>
            <td>Jeanne D.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Sara G.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Robert Géant, Vézelise</td>
         </tr>
         <tr>
            <td>Nathan M.</td>
            <td>460</td>
            <td>37</td>
            <td>Collège Henri Ulrich, Habsheim</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3ème (participation en binôme) : 33791 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>35</td></tr><tr><td>474</td><td>41</td></tr><tr><td>472</td><td>45</td></tr><tr><td>470</td><td>47</td></tr><tr><td>466</td><td>97</td></tr><tr><td>464</td><td>117</td></tr><tr><td>462</td><td>123</td></tr><tr><td>461</td><td>129</td></tr><tr><td>460</td><td>131</td></tr><tr><td>458</td><td>201</td></tr><tr><td>456</td><td>203</td></tr><tr><td>455</td><td>269</td></tr><tr><td>454</td><td>271</td></tr><tr><td>452</td><td>290</td></tr><tr><td>451</td><td>316</td></tr><tr><td>450</td><td>318</td></tr><tr><td>448</td><td>446</td></tr><tr><td>446</td><td>454</td></tr><tr><td>445</td><td>510</td></tr><tr><td>444</td><td>516</td></tr><tr><td>443</td><td>554</td></tr><tr><td>442</td><td>560</td></tr><tr><td>441</td><td>564</td></tr><tr><td>440</td><td>574</td></tr><tr><td>439</td><td>715</td></tr><tr><td>438</td><td>717</td></tr><tr><td>437</td><td>735</td></tr><tr><td>436</td><td>737</td></tr><tr><td>435</td><td>883</td></tr><tr><td>434</td><td>889</td></tr><tr><td>433</td><td>965</td></tr><tr><td>432</td><td>983</td></tr><tr><td>431</td><td>1055</td></tr><tr><td>430</td><td>1063</td></tr><tr><td>429</td><td>1307</td></tr><tr><td>428</td><td>1311</td></tr><tr><td>427</td><td>1339</td></tr><tr><td>426</td><td>1349</td></tr><tr><td>425</td><td>1521</td></tr><tr><td>424</td><td>1540</td></tr><tr><td>423</td><td>1652</td></tr><tr><td>422</td><td>1666</td></tr><tr><td>421</td><td>1752</td></tr><tr><td>420</td><td>1776</td></tr><tr><td>419</td><td>2053</td></tr><tr><td>418</td><td>2069</td></tr><tr><td>417</td><td>2115</td></tr><tr><td>416</td><td>2139</td></tr><tr><td>415</td><td>2367</td></tr><tr><td>414</td><td>2400</td></tr><tr><td>413</td><td>2538</td></tr><tr><td>412</td><td>2563</td></tr><tr><td>411</td><td>2673</td></tr><tr><td>410</td><td>2717</td></tr><tr><td>409</td><td>3063</td></tr><tr><td>408</td><td>3101</td></tr><tr><td>407</td><td>3191</td></tr><tr><td>406</td><td>3223</td></tr><tr><td>405</td><td>3521</td></tr><tr><td>404</td><td>3571</td></tr><tr><td>403</td><td>3801</td></tr><tr><td>402</td><td>3839</td></tr><tr><td>401</td><td>4018</td></tr><tr><td>400</td><td>4058</td></tr><tr><td>399</td><td>4383</td></tr><tr><td>398</td><td>4435</td></tr><tr><td>397</td><td>4525</td></tr><tr><td>396</td><td>4567</td></tr><tr><td>395</td><td>4887</td></tr><tr><td>394</td><td>4987</td></tr><tr><td>393</td><td>5243</td></tr><tr><td>392</td><td>5279</td></tr><tr><td>391</td><td>5457</td></tr><tr><td>390</td><td>5509</td></tr><tr><td>389</td><td>5930</td></tr><tr><td>388</td><td>6008</td></tr><tr><td>387</td><td>6160</td></tr><tr><td>386</td><td>6222</td></tr><tr><td>385</td><td>6619</td></tr><tr><td>384</td><td>6703</td></tr><tr><td>383</td><td>6970</td></tr><tr><td>382</td><td>7036</td></tr><tr><td>381</td><td>7320</td></tr><tr><td>380</td><td>7412</td></tr><tr><td>379</td><td>7884</td></tr><tr><td>378</td><td>7974</td></tr><tr><td>377</td><td>8141</td></tr><tr><td>376</td><td>8248</td></tr><tr><td>375</td><td>8621</td></tr><tr><td>374</td><td>8741</td></tr><tr><td>373</td><td>9019</td></tr><tr><td>372</td><td>9089</td></tr><tr><td>371</td><td>9371</td></tr><tr><td>370</td><td>9485</td></tr><tr><td>369</td><td>9930</td></tr><tr><td>368</td><td>10052</td></tr><tr><td>367</td><td>10222</td></tr><tr><td>366</td><td>10320</td></tr><tr><td>365</td><td>10711</td></tr><tr><td>364</td><td>10829</td></tr><tr><td>363</td><td>11123</td></tr><tr><td>362</td><td>11231</td></tr><tr><td>361</td><td>11521</td></tr><tr><td>360</td><td>11603</td></tr><tr><td>359</td><td>12140</td></tr><tr><td>358</td><td>12258</td></tr><tr><td>357</td><td>12469</td></tr><tr><td>356</td><td>12572</td></tr><tr><td>355</td><td>12998</td></tr><tr><td>354</td><td>13146</td></tr><tr><td>353</td><td>13458</td></tr><tr><td>352</td><td>13593</td></tr><tr><td>351</td><td>13936</td></tr><tr><td>350</td><td>14034</td></tr><tr><td>349</td><td>14628</td></tr><tr><td>348</td><td>14738</td></tr><tr><td>347</td><td>14922</td></tr><tr><td>346</td><td>15049</td></tr><tr><td>345</td><td>15477</td></tr><tr><td>344</td><td>15655</td></tr><tr><td>343</td><td>15945</td></tr><tr><td>342</td><td>16073</td></tr><tr><td>341</td><td>16371</td></tr><tr><td>340</td><td>16459</td></tr><tr><td>339</td><td>17015</td></tr><tr><td>338</td><td>17134</td></tr><tr><td>337</td><td>17365</td></tr><tr><td>336</td><td>17471</td></tr><tr><td>335</td><td>17831</td></tr><tr><td>334</td><td>17969</td></tr><tr><td>333</td><td>18239</td></tr><tr><td>332</td><td>18376</td></tr><tr><td>331</td><td>18643</td></tr><tr><td>330</td><td>18731</td></tr><tr><td>329</td><td>19234</td></tr><tr><td>328</td><td>19330</td></tr><tr><td>327</td><td>19579</td></tr><tr><td>326</td><td>19673</td></tr><tr><td>325</td><td>20046</td></tr><tr><td>324</td><td>20210</td></tr><tr><td>323</td><td>20442</td></tr><tr><td>322</td><td>20591</td></tr><tr><td>321</td><td>20849</td></tr><tr><td>320</td><td>20952</td></tr><tr><td>319</td><td>21453</td></tr><tr><td>318</td><td>21535</td></tr><tr><td>317</td><td>21765</td></tr><tr><td>316</td><td>21873</td></tr><tr><td>315</td><td>22203</td></tr><tr><td>314</td><td>22305</td></tr><tr><td>313</td><td>22505</td></tr><tr><td>312</td><td>22685</td></tr><tr><td>311</td><td>22906</td></tr><tr><td>310</td><td>23040</td></tr><tr><td>309</td><td>23562</td></tr><tr><td>308</td><td>23650</td></tr><tr><td>307</td><td>23885</td></tr><tr><td>306</td><td>23961</td></tr><tr><td>305</td><td>24320</td></tr><tr><td>304</td><td>24416</td></tr><tr><td>303</td><td>24588</td></tr><tr><td>302</td><td>24764</td></tr><tr><td>301</td><td>24942</td></tr><tr><td>300</td><td>25017</td></tr><tr><td>299</td><td>25478</td></tr><tr><td>298</td><td>25557</td></tr><tr><td>297</td><td>25753</td></tr><tr><td>296</td><td>25799</td></tr><tr><td>295</td><td>26106</td></tr><tr><td>294</td><td>26186</td></tr><tr><td>293</td><td>26303</td></tr><tr><td>292</td><td>26477</td></tr><tr><td>291</td><td>26599</td></tr><tr><td>290</td><td>26681</td></tr><tr><td>289</td><td>27090</td></tr><tr><td>288</td><td>27162</td></tr><tr><td>287</td><td>27314</td></tr><tr><td>286</td><td>27352</td></tr><tr><td>285</td><td>27611</td></tr><tr><td>284</td><td>27669</td></tr><tr><td>283</td><td>27778</td></tr><tr><td>282</td><td>27918</td></tr><tr><td>281</td><td>28018</td></tr><tr><td>280</td><td>28090</td></tr><tr><td>279</td><td>28430</td></tr><tr><td>278</td><td>28492</td></tr><tr><td>277</td><td>28596</td></tr><tr><td>276</td><td>28636</td></tr><tr><td>275</td><td>28886</td></tr><tr><td>274</td><td>28918</td></tr><tr><td>273</td><td>29018</td></tr><tr><td>272</td><td>29169</td></tr><tr><td>271</td><td>29245</td></tr><tr><td>270</td><td>29278</td></tr><tr><td>269</td><td>29580</td></tr><tr><td>268</td><td>29633</td></tr><tr><td>267</td><td>29731</td></tr><tr><td>266</td><td>29757</td></tr><tr><td>265</td><td>29957</td></tr><tr><td>264</td><td>29995</td></tr><tr><td>263</td><td>30059</td></tr><tr><td>262</td><td>30177</td></tr><tr><td>261</td><td>30241</td></tr><tr><td>260</td><td>30275</td></tr><tr><td>259</td><td>30522</td></tr><tr><td>258</td><td>30568</td></tr><tr><td>257</td><td>30612</td></tr><tr><td>256</td><td>30622</td></tr><tr><td>255</td><td>30778</td></tr><tr><td>254</td><td>30798</td></tr><tr><td>253</td><td>30843</td></tr><tr><td>252</td><td>30924</td></tr><tr><td>251</td><td>30985</td></tr><tr><td>250</td><td>31021</td></tr><tr><td>249</td><td>31223</td></tr><tr><td>248</td><td>31255</td></tr><tr><td>247</td><td>31299</td></tr><tr><td>246</td><td>31313</td></tr><tr><td>245</td><td>31419</td></tr><tr><td>244</td><td>31431</td></tr><tr><td>243</td><td>31469</td></tr><tr><td>242</td><td>31561</td></tr><tr><td>241</td><td>31603</td></tr><tr><td>240</td><td>31611</td></tr><tr><td>239</td><td>31787</td></tr><tr><td>238</td><td>31813</td></tr><tr><td>237</td><td>31843</td></tr><tr><td>236</td><td>31855</td></tr><tr><td>235</td><td>31963</td></tr><tr><td>234</td><td>31973</td></tr><tr><td>233</td><td>31993</td></tr><tr><td>232</td><td>32065</td></tr><tr><td>231</td><td>32085</td></tr><tr><td>230</td><td>32091</td></tr><tr><td>229</td><td>32234</td></tr><tr><td>228</td><td>32254</td></tr><tr><td>227</td><td>32276</td></tr><tr><td>226</td><td>32282</td></tr><tr><td>225</td><td>32380</td></tr><tr><td>224</td><td>32392</td></tr><tr><td>223</td><td>32407</td></tr><tr><td>222</td><td>32457</td></tr><tr><td>221</td><td>32473</td></tr><tr><td>220</td><td>32481</td></tr><tr><td>219</td><td>32581</td></tr><tr><td>218</td><td>32597</td></tr><tr><td>217</td><td>32615</td></tr><tr><td>216</td><td>32617</td></tr><tr><td>214</td><td>32687</td></tr><tr><td>213</td><td>32691</td></tr><tr><td>212</td><td>32733</td></tr><tr><td>211</td><td>32757</td></tr><tr><td>210</td><td>32765</td></tr><tr><td>209</td><td>32857</td></tr><tr><td>208</td><td>32869</td></tr><tr><td>206</td><td>32877</td></tr><tr><td>205</td><td>32925</td></tr><tr><td>204</td><td>32931</td></tr><tr><td>203</td><td>32937</td></tr><tr><td>202</td><td>32966</td></tr><tr><td>201</td><td>32968</td></tr><tr><td>200</td><td>32970</td></tr><tr><td>199</td><td>33052</td></tr><tr><td>198</td><td>33064</td></tr><tr><td>196</td><td>33068</td></tr><tr><td>195</td><td>33100</td></tr><tr><td>194</td><td>33104</td></tr><tr><td>193</td><td>33108</td></tr><tr><td>192</td><td>33136</td></tr><tr><td>191</td><td>33142</td></tr><tr><td>190</td><td>33146</td></tr><tr><td>189</td><td>33188</td></tr><tr><td>186</td><td>33194</td></tr><tr><td>185</td><td>33218</td></tr><tr><td>184</td><td>33224</td></tr><tr><td>183</td><td>33232</td></tr><tr><td>182</td><td>33266</td></tr><tr><td>180</td><td>33268</td></tr><tr><td>179</td><td>33306</td></tr><tr><td>178</td><td>33318</td></tr><tr><td>176</td><td>33324</td></tr><tr><td>174</td><td>33351</td></tr><tr><td>173</td><td>33355</td></tr><tr><td>172</td><td>33371</td></tr><tr><td>170</td><td>33375</td></tr><tr><td>169</td><td>33391</td></tr><tr><td>168</td><td>33393</td></tr><tr><td>166</td><td>33397</td></tr><tr><td>163</td><td>33415</td></tr><tr><td>162</td><td>33432</td></tr><tr><td>160</td><td>33434</td></tr><tr><td>159</td><td>33457</td></tr><tr><td>157</td><td>33461</td></tr><tr><td>156</td><td>33463</td></tr><tr><td>153</td><td>33475</td></tr><tr><td>152</td><td>33477</td></tr><tr><td>150</td><td>33481</td></tr><tr><td>149</td><td>33502</td></tr><tr><td>146</td><td>33508</td></tr><tr><td>144</td><td>33520</td></tr><tr><td>143</td><td>33522</td></tr><tr><td>140</td><td>33526</td></tr><tr><td>139</td><td>33538</td></tr><tr><td>136</td><td>33544</td></tr><tr><td>133</td><td>33562</td></tr><tr><td>132</td><td>33564</td></tr><tr><td>130</td><td>33570</td></tr><tr><td>129</td><td>33580</td></tr><tr><td>126</td><td>33584</td></tr><tr><td>124</td><td>33594</td></tr><tr><td>123</td><td>33596</td></tr><tr><td>122</td><td>33598</td></tr><tr><td>120</td><td>33604</td></tr><tr><td>119</td><td>33620</td></tr><tr><td>116</td><td>33622</td></tr><tr><td>113</td><td>33628</td></tr><tr><td>112</td><td>33630</td></tr><tr><td>110</td><td>33636</td></tr><tr><td>106</td><td>33642</td></tr><tr><td>103</td><td>33646</td></tr><tr><td>100</td><td>33654</td></tr><tr><td>93</td><td>33664</td></tr><tr><td>92</td><td>33666</td></tr><tr><td>90</td><td>33668</td></tr><tr><td>89</td><td>33676</td></tr><tr><td>86</td><td>33678</td></tr><tr><td>83</td><td>33682</td></tr><tr><td>80</td><td>33684</td></tr><tr><td>73</td><td>33690</td></tr><tr><td>70</td><td>33692</td></tr><tr><td>63</td><td>33702</td></tr><tr><td>60</td><td>33706</td></tr><tr><td>53</td><td>33714</td></tr><tr><td>50</td><td>33716</td></tr><tr><td>46</td><td>33726</td></tr><tr><td>43</td><td>33728</td></tr><tr><td>40</td><td>33730</td></tr><tr><td>30</td><td>33736</td></tr><tr><td>26</td><td>33744</td></tr><tr><td>23</td><td>33746</td></tr><tr><td>20</td><td>33748</td></tr><tr><td>0</td><td>33754</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 96 premiers ayant un score supérieur ou égal à 470 sont listés ci-dessous.
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
            <td>Azou B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Pierre Mendes France, Morlaix</td>
         </tr>
         <tr>
            <td>Axelle W.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Pierre Mendes France, Morlaix</td>
         </tr>
         <tr>
            <td>Maxime D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Monnet, Luisant</td>
         </tr>
         <tr>
            <td>Alice D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Auguste C.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Nathan L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lottin de Laval, Orbec</td>
         </tr>
         <tr>
            <td>Robin W.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Yoann T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège David Niépce, Sennecey le Grand</td>
         </tr>
         <tr>
            <td>Marie-Charlotte B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège David Niépce, Sennecey le Grand</td>
         </tr>
         <tr>
            <td>Tino P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Dupleix, Landrecies</td>
         </tr>
         <tr>
            <td>Valentin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège de la Cité Scolaire, Marmande</td>
         </tr>
         <tr>
            <td>Corentin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Fabien G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Louis Pasteur, Saint Mars la Jaille</td>
         </tr>
         <tr>
            <td>Jeanne M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Jennifer T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Berthelot, Le Mans</td>
         </tr>
         <tr>
            <td>Baptiste R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Laurien P.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Clovis C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège les Buclos, Meylan</td>
         </tr>
         <tr>
            <td>Allan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Mireille Choisy, Saint Barthelemy</td>
         </tr>
         <tr>
            <td>Guillaume H.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Montabuzard, Ingré</td>
         </tr>
         <tr>
            <td>Matthieu R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Rostand, Balma</td>
         </tr>
         <tr>
            <td>Yann M.</td>
            <td>480</td>
            <td>1</td>
            <td>Centre scolaire Aux Lazaristes, Lyon</td>
         </tr>
         <tr>
            <td>Sidney T.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Mireille Choisy, Saint Barthelemy</td>
         </tr>
         <tr>
            <td>Charles C.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Sylvain V.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Louis Pasteur, Saint Mars la Jaille</td>
         </tr>
         <tr>
            <td>Gael A.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Jean Monnet, Luisant</td>
         </tr>
         <tr>
            <td>Alexy B.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Val de Loire, Saint Denis en Val</td>
         </tr>
         <tr>
            <td>Jean-Nicolas W.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Dupleix, Landrecies</td>
         </tr>
         <tr>
            <td>Madison S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Etienne D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Mattéo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lottin de Laval, Orbec</td>
         </tr>
         <tr>
            <td>Ismael V.</td>
            <td>476</td>
            <td>35</td>
            <td>Collège Pierre-Jean de Béranger, Paris</td>
         </tr>
         <tr>
            <td>Romane C.</td>
            <td>476</td>
            <td>35</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Victor D.</td>
            <td>476</td>
            <td>35</td>
            <td>Collège Monjous, Gradignan</td>
         </tr>
         <tr>
            <td>Marius V.</td>
            <td>476</td>
            <td>35</td>
            <td>Collège Pierre-Jean de Béranger, Paris</td>
         </tr>
         <tr>
            <td>Carlos T.</td>
            <td>476</td>
            <td>35</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Matthieu D.</td>
            <td>476</td>
            <td>35</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Vincent M.</td>
            <td>474</td>
            <td>41</td>
            <td>Collège Saint-Exupéry, Saint-Laurent du Var</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>474</td>
            <td>41</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Luc M.</td>
            <td>474</td>
            <td>41</td>
            <td>Collège René Cassin, Cosne-sur-Loire</td>
         </tr>
         <tr>
            <td>Anthony C.</td>
            <td>474</td>
            <td>41</td>
            <td>Collège Saint-Exupéry, Saint-Laurent du Var</td>
         </tr>
         <tr>
            <td>Quentin B.</td>
            <td>472</td>
            <td>45</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
         <tr>
            <td>Samuel O.</td>
            <td>472</td>
            <td>45</td>
            <td>Collège Des Roseaux, Illkirch Graffenstaden</td>
         </tr>
         <tr>
            <td>Louis V.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Claudie Haigneré, Rochefort du Gard</td>
         </tr>
         <tr>
            <td>Colin B.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Samuel S.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jules Ferry, Coudekerque-Branche</td>
         </tr>
         <tr>
            <td>Lucas M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège St-Exupéry, Sainte-Mère-Eglise</td>
         </tr>
         <tr>
            <td>Guillaume B.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Malraux, Lambres Lez Douai</td>
         </tr>
         <tr>
            <td>Mathhis F.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Swan B.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Maïna B.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Clément V.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Exupéry, Saint-Nicolas-de-Port</td>
         </tr>
         <tr>
            <td>Alexandre A.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Montjoie, Saran</td>
         </tr>
         <tr>
            <td>Rainer O.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Joséphine E.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Camille Claudel, Saint-Quay-Portrieux</td>
         </tr>
         <tr>
            <td>Caroline G.</td>
            <td>470</td>
            <td>47</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Hugo S.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Romain W.</td>
            <td>470</td>
            <td>47</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Anne-Laure W.</td>
            <td>470</td>
            <td>47</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Mathilde C.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Samuel N.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège les Frontailles, Saint Pierre d'Albigny</td>
         </tr>
         <tr>
            <td>Emma L.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Auriac, Arveyres</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Robert Schuman, Amilly</td>
         </tr>
         <tr>
            <td>Agathe B.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Rémi M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Robert Schuman, Amilly</td>
         </tr>
         <tr>
            <td>Emylien P.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Valentin S.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Claudie Haigneré, Rochefort du Gard</td>
         </tr>
         <tr>
            <td>Estephe H.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Zoé C.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège les Allobroges, La Roche sur Foron</td>
         </tr>
         <tr>
            <td>Tanguy L.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Mermoz, Laon</td>
         </tr>
         <tr>
            <td>Nicolas D.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Thomas D.</td>
            <td>470</td>
            <td>47</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Anton H.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Sofiène T.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Philippe de Vigneulles, Metz</td>
         </tr>
         <tr>
            <td>Marc K.</td>
            <td>470</td>
            <td>47</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Andréa G.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Auriac, Arveyres</td>
         </tr>
         <tr>
            <td>Ivan P.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Alexandre Fleming, Orsay</td>
         </tr>
         <tr>
            <td>Jean-Arnaud C.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Corentin S.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Malraux, Lambres Lez Douai</td>
         </tr>
         <tr>
            <td>Ines V.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jules Verne, Villebon sur Yvette</td>
         </tr>
         <tr>
            <td>Baptiste G.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège St-Exupéry, Sainte-Mère-Eglise</td>
         </tr>
         <tr>
            <td>Alexia G.</td>
            <td>470</td>
            <td>47</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Ismaël D.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Anatole France, Casablanca</td>
         </tr>
         <tr>
            <td>Hassan Hassan N.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Rostand, Nice</td>
         </tr>
         <tr>
            <td>Maëlle D.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Benoît P.</td>
            <td>470</td>
            <td>47</td>
            <td>Institution Sainte Marie, Belfort</td>
         </tr>
         <tr>
            <td>Noé M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jules Ferry, Coudekerque-Branche</td>
         </tr>
         <tr>
            <td>Guillaume L.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Ste J. d'Arc, Vitré</td>
         </tr>
         <tr>
            <td>Christopher N.</td>
            <td>470</td>
            <td>47</td>
            <td>Lycée Libanais Francophone Privé Dubaï, Dubaï</td>
         </tr>
         <tr>
            <td>Julien M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint Exupéry, Saint-Nicolas-de-Port</td>
         </tr>
         <tr>
            <td>Géraud V.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Saint-Paul, Cherbourg Octeville</td>
         </tr>
         <tr>
            <td>Cassandra M.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège Jean Rostand, Nice</td>
         </tr>
         <tr>
            <td>Anthony L.</td>
            <td>470</td>
            <td>47</td>
            <td>Collège les Frontailles, Saint Pierre d'Albigny</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde (participation en binôme) : 18670 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>105</td></tr><tr><td>474</td><td>125</td></tr><tr><td>471</td><td>141</td></tr><tr><td>470</td><td>143</td></tr><tr><td>466</td><td>247</td></tr><tr><td>465</td><td>289</td></tr><tr><td>464</td><td>291</td></tr><tr><td>463</td><td>309</td></tr><tr><td>462</td><td>311</td></tr><tr><td>460</td><td>323</td></tr><tr><td>458</td><td>417</td></tr><tr><td>456</td><td>421</td></tr><tr><td>455</td><td>483</td></tr><tr><td>454</td><td>485</td></tr><tr><td>452</td><td>513</td></tr><tr><td>451</td><td>529</td></tr><tr><td>450</td><td>531</td></tr><tr><td>449</td><td>685</td></tr><tr><td>448</td><td>687</td></tr><tr><td>447</td><td>689</td></tr><tr><td>446</td><td>693</td></tr><tr><td>445</td><td>789</td></tr><tr><td>444</td><td>799</td></tr><tr><td>443</td><td>869</td></tr><tr><td>442</td><td>875</td></tr><tr><td>441</td><td>929</td></tr><tr><td>440</td><td>939</td></tr><tr><td>439</td><td>1151</td></tr><tr><td>438</td><td>1153</td></tr><tr><td>437</td><td>1177</td></tr><tr><td>436</td><td>1183</td></tr><tr><td>435</td><td>1321</td></tr><tr><td>434</td><td>1337</td></tr><tr><td>433</td><td>1397</td></tr><tr><td>432</td><td>1405</td></tr><tr><td>431</td><td>1469</td></tr><tr><td>430</td><td>1477</td></tr><tr><td>429</td><td>1774</td></tr><tr><td>428</td><td>1788</td></tr><tr><td>427</td><td>1814</td></tr><tr><td>426</td><td>1818</td></tr><tr><td>425</td><td>1994</td></tr><tr><td>424</td><td>2010</td></tr><tr><td>423</td><td>2092</td></tr><tr><td>422</td><td>2104</td></tr><tr><td>421</td><td>2184</td></tr><tr><td>420</td><td>2206</td></tr><tr><td>419</td><td>2506</td></tr><tr><td>418</td><td>2516</td></tr><tr><td>417</td><td>2558</td></tr><tr><td>416</td><td>2578</td></tr><tr><td>415</td><td>2792</td></tr><tr><td>414</td><td>2822</td></tr><tr><td>413</td><td>2978</td></tr><tr><td>412</td><td>2982</td></tr><tr><td>411</td><td>3100</td></tr><tr><td>410</td><td>3128</td></tr><tr><td>409</td><td>3428</td></tr><tr><td>408</td><td>3450</td></tr><tr><td>407</td><td>3526</td></tr><tr><td>406</td><td>3546</td></tr><tr><td>405</td><td>3804</td></tr><tr><td>404</td><td>3850</td></tr><tr><td>403</td><td>3990</td></tr><tr><td>402</td><td>4016</td></tr><tr><td>401</td><td>4128</td></tr><tr><td>400</td><td>4169</td></tr><tr><td>399</td><td>4529</td></tr><tr><td>398</td><td>4563</td></tr><tr><td>397</td><td>4633</td></tr><tr><td>396</td><td>4667</td></tr><tr><td>395</td><td>4906</td></tr><tr><td>394</td><td>4953</td></tr><tr><td>393</td><td>5117</td></tr><tr><td>392</td><td>5167</td></tr><tr><td>391</td><td>5333</td></tr><tr><td>390</td><td>5395</td></tr><tr><td>389</td><td>5795</td></tr><tr><td>388</td><td>5835</td></tr><tr><td>387</td><td>5953</td></tr><tr><td>386</td><td>6011</td></tr><tr><td>385</td><td>6261</td></tr><tr><td>384</td><td>6325</td></tr><tr><td>383</td><td>6510</td></tr><tr><td>382</td><td>6550</td></tr><tr><td>381</td><td>6732</td></tr><tr><td>380</td><td>6788</td></tr><tr><td>379</td><td>7136</td></tr><tr><td>378</td><td>7194</td></tr><tr><td>377</td><td>7308</td></tr><tr><td>376</td><td>7365</td></tr><tr><td>375</td><td>7599</td></tr><tr><td>374</td><td>7665</td></tr><tr><td>373</td><td>7846</td></tr><tr><td>372</td><td>7892</td></tr><tr><td>371</td><td>8054</td></tr><tr><td>370</td><td>8108</td></tr><tr><td>369</td><td>8442</td></tr><tr><td>368</td><td>8506</td></tr><tr><td>367</td><td>8630</td></tr><tr><td>366</td><td>8680</td></tr><tr><td>365</td><td>8962</td></tr><tr><td>364</td><td>9058</td></tr><tr><td>363</td><td>9216</td></tr><tr><td>362</td><td>9276</td></tr><tr><td>361</td><td>9430</td></tr><tr><td>360</td><td>9476</td></tr><tr><td>359</td><td>9830</td></tr><tr><td>358</td><td>9876</td></tr><tr><td>357</td><td>10027</td></tr><tr><td>356</td><td>10079</td></tr><tr><td>355</td><td>10325</td></tr><tr><td>354</td><td>10403</td></tr><tr><td>353</td><td>10579</td></tr><tr><td>352</td><td>10639</td></tr><tr><td>351</td><td>10860</td></tr><tr><td>350</td><td>10920</td></tr><tr><td>349</td><td>11234</td></tr><tr><td>348</td><td>11280</td></tr><tr><td>347</td><td>11402</td></tr><tr><td>346</td><td>11472</td></tr><tr><td>345</td><td>11654</td></tr><tr><td>344</td><td>11748</td></tr><tr><td>343</td><td>11890</td></tr><tr><td>342</td><td>11970</td></tr><tr><td>341</td><td>12118</td></tr><tr><td>340</td><td>12144</td></tr><tr><td>339</td><td>12424</td></tr><tr><td>338</td><td>12473</td></tr><tr><td>337</td><td>12583</td></tr><tr><td>336</td><td>12603</td></tr><tr><td>335</td><td>12845</td></tr><tr><td>334</td><td>12899</td></tr><tr><td>333</td><td>13076</td></tr><tr><td>332</td><td>13136</td></tr><tr><td>331</td><td>13296</td></tr><tr><td>330</td><td>13332</td></tr><tr><td>329</td><td>13584</td></tr><tr><td>328</td><td>13648</td></tr><tr><td>327</td><td>13754</td></tr><tr><td>326</td><td>13786</td></tr><tr><td>325</td><td>13975</td></tr><tr><td>324</td><td>14025</td></tr><tr><td>323</td><td>14159</td></tr><tr><td>322</td><td>14215</td></tr><tr><td>321</td><td>14315</td></tr><tr><td>320</td><td>14364</td></tr><tr><td>319</td><td>14600</td></tr><tr><td>318</td><td>14640</td></tr><tr><td>317</td><td>14758</td></tr><tr><td>316</td><td>14796</td></tr><tr><td>315</td><td>14928</td></tr><tr><td>314</td><td>14962</td></tr><tr><td>313</td><td>15056</td></tr><tr><td>312</td><td>15115</td></tr><tr><td>311</td><td>15181</td></tr><tr><td>310</td><td>15219</td></tr><tr><td>309</td><td>15391</td></tr><tr><td>308</td><td>15435</td></tr><tr><td>307</td><td>15499</td></tr><tr><td>306</td><td>15523</td></tr><tr><td>305</td><td>15661</td></tr><tr><td>304</td><td>15695</td></tr><tr><td>303</td><td>15787</td></tr><tr><td>302</td><td>15823</td></tr><tr><td>301</td><td>15907</td></tr><tr><td>300</td><td>15927</td></tr><tr><td>299</td><td>16087</td></tr><tr><td>298</td><td>16105</td></tr><tr><td>297</td><td>16175</td></tr><tr><td>296</td><td>16191</td></tr><tr><td>295</td><td>16299</td></tr><tr><td>294</td><td>16319</td></tr><tr><td>293</td><td>16391</td></tr><tr><td>292</td><td>16435</td></tr><tr><td>291</td><td>16487</td></tr><tr><td>290</td><td>16507</td></tr><tr><td>289</td><td>16643</td></tr><tr><td>288</td><td>16665</td></tr><tr><td>287</td><td>16721</td></tr><tr><td>286</td><td>16743</td></tr><tr><td>285</td><td>16832</td></tr><tr><td>284</td><td>16860</td></tr><tr><td>283</td><td>16896</td></tr><tr><td>282</td><td>16934</td></tr><tr><td>281</td><td>16970</td></tr><tr><td>280</td><td>16998</td></tr><tr><td>279</td><td>17112</td></tr><tr><td>278</td><td>17130</td></tr><tr><td>277</td><td>17174</td></tr><tr><td>276</td><td>17190</td></tr><tr><td>275</td><td>17263</td></tr><tr><td>274</td><td>17275</td></tr><tr><td>273</td><td>17305</td></tr><tr><td>272</td><td>17319</td></tr><tr><td>271</td><td>17331</td></tr><tr><td>270</td><td>17339</td></tr><tr><td>269</td><td>17429</td></tr><tr><td>268</td><td>17437</td></tr><tr><td>267</td><td>17463</td></tr><tr><td>266</td><td>17471</td></tr><tr><td>265</td><td>17534</td></tr><tr><td>264</td><td>17552</td></tr><tr><td>263</td><td>17566</td></tr><tr><td>262</td><td>17598</td></tr><tr><td>261</td><td>17616</td></tr><tr><td>260</td><td>17620</td></tr><tr><td>259</td><td>17694</td></tr><tr><td>258</td><td>17706</td></tr><tr><td>257</td><td>17732</td></tr><tr><td>256</td><td>17738</td></tr><tr><td>255</td><td>17802</td></tr><tr><td>254</td><td>17812</td></tr><tr><td>253</td><td>17826</td></tr><tr><td>252</td><td>17844</td></tr><tr><td>251</td><td>17860</td></tr><tr><td>250</td><td>17872</td></tr><tr><td>249</td><td>17925</td></tr><tr><td>248</td><td>17929</td></tr><tr><td>247</td><td>17933</td></tr><tr><td>246</td><td>17939</td></tr><tr><td>245</td><td>17989</td></tr><tr><td>244</td><td>17995</td></tr><tr><td>243</td><td>18003</td></tr><tr><td>242</td><td>18009</td></tr><tr><td>241</td><td>18023</td></tr><tr><td>240</td><td>18029</td></tr><tr><td>239</td><td>18075</td></tr><tr><td>238</td><td>18081</td></tr><tr><td>237</td><td>18083</td></tr><tr><td>236</td><td>18085</td></tr><tr><td>235</td><td>18110</td></tr><tr><td>234</td><td>18112</td></tr><tr><td>233</td><td>18121</td></tr><tr><td>232</td><td>18143</td></tr><tr><td>231</td><td>18153</td></tr><tr><td>230</td><td>18157</td></tr><tr><td>229</td><td>18212</td></tr><tr><td>228</td><td>18222</td></tr><tr><td>227</td><td>18232</td></tr><tr><td>226</td><td>18234</td></tr><tr><td>225</td><td>18244</td></tr><tr><td>224</td><td>18248</td></tr><tr><td>223</td><td>18256</td></tr><tr><td>222</td><td>18258</td></tr><tr><td>220</td><td>18264</td></tr><tr><td>218</td><td>18292</td></tr><tr><td>217</td><td>18296</td></tr><tr><td>216</td><td>18298</td></tr><tr><td>215</td><td>18314</td></tr><tr><td>214</td><td>18316</td></tr><tr><td>213</td><td>18318</td></tr><tr><td>212</td><td>18324</td></tr><tr><td>211</td><td>18340</td></tr><tr><td>210</td><td>18342</td></tr><tr><td>209</td><td>18356</td></tr><tr><td>206</td><td>18360</td></tr><tr><td>205</td><td>18370</td></tr><tr><td>203</td><td>18372</td></tr><tr><td>202</td><td>18374</td></tr><tr><td>201</td><td>18376</td></tr><tr><td>200</td><td>18378</td></tr><tr><td>199</td><td>18410</td></tr><tr><td>196</td><td>18412</td></tr><tr><td>194</td><td>18424</td></tr><tr><td>193</td><td>18428</td></tr><tr><td>191</td><td>18436</td></tr><tr><td>190</td><td>18440</td></tr><tr><td>189</td><td>18460</td></tr><tr><td>188</td><td>18464</td></tr><tr><td>186</td><td>18468</td></tr><tr><td>183</td><td>18472</td></tr><tr><td>182</td><td>18474</td></tr><tr><td>180</td><td>18476</td></tr><tr><td>178</td><td>18486</td></tr><tr><td>177</td><td>18488</td></tr><tr><td>176</td><td>18490</td></tr><tr><td>173</td><td>18496</td></tr><tr><td>170</td><td>18498</td></tr><tr><td>169</td><td>18506</td></tr><tr><td>166</td><td>18510</td></tr><tr><td>163</td><td>18514</td></tr><tr><td>162</td><td>18517</td></tr><tr><td>160</td><td>18519</td></tr><tr><td>159</td><td>18523</td></tr><tr><td>158</td><td>18525</td></tr><tr><td>156</td><td>18527</td></tr><tr><td>153</td><td>18531</td></tr><tr><td>150</td><td>18537</td></tr><tr><td>146</td><td>18547</td></tr><tr><td>143</td><td>18549</td></tr><tr><td>142</td><td>18551</td></tr><tr><td>140</td><td>18555</td></tr><tr><td>136</td><td>18561</td></tr><tr><td>132</td><td>18565</td></tr><tr><td>122</td><td>18567</td></tr><tr><td>120</td><td>18569</td></tr><tr><td>116</td><td>18573</td></tr><tr><td>113</td><td>18579</td></tr><tr><td>110</td><td>18583</td></tr><tr><td>109</td><td>18585</td></tr><tr><td>106</td><td>18587</td></tr><tr><td>100</td><td>18591</td></tr><tr><td>98</td><td>18593</td></tr><tr><td>93</td><td>18595</td></tr><tr><td>90</td><td>18597</td></tr><tr><td>86</td><td>18605</td></tr><tr><td>83</td><td>18607</td></tr><tr><td>80</td><td>18611</td></tr><tr><td>73</td><td>18613</td></tr><tr><td>70</td><td>18615</td></tr><tr><td>60</td><td>18619</td></tr><tr><td>56</td><td>18623</td></tr><tr><td>50</td><td>18625</td></tr><tr><td>30</td><td>18627</td></tr><tr><td>0</td><td>18633</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 104 premiers ayant un score supérieur ou égal à 477 sont listés ci-dessous.
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
            <td>Thomas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Sébastien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée St-Joseph de Bruz, Bruz</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Béranger L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Nantes</td>
         </tr>
         <tr>
            <td>Mathieu G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Nantes</td>
         </tr>
         <tr>
            <td>Victoria H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée David d'Angers, Angers</td>
         </tr>
         <tr>
            <td>Maxime B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Clément S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Paul L.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Gaston Fébus, Orthez</td>
         </tr>
         <tr>
            <td>Kostia M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Anne-Florence G.</td>
            <td>480</td>
            <td>1</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Pierre-Ismaïl C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Frédéric Chopin, Nancy</td>
         </tr>
         <tr>
            <td>Lucas T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Virgiile J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Louis S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Adrian V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Quentin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Tom M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée David d'Angers, Angers</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Théo O.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montesquieu, Le Mans</td>
         </tr>
         <tr>
            <td>Benjamin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Emilien G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Maxime M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Emma A.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Abdullah T.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Paul T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Le Mans</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Schoelcher, Fort-de-France</td>
         </tr>
         <tr>
            <td>Charlotte B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Francois J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Pergaud, Besancon</td>
         </tr>
         <tr>
            <td>Guillem P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Esteban M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Emma V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Grégoire O.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Cyprien P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Hugo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Agathe M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Barcelone, Barcelona</td>
         </tr>
         <tr>
            <td>Anselme M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Mathis R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Pierre L.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Jules N.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Kyanou L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Gregoire B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Baptiste B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Alix B.</td>
            <td>480</td>
            <td>1</td>
            <td>Ensemble Scolaire Saint Adrien, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Axel J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Mario S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gustave Eiffel, Bordeaux</td>
         </tr>
         <tr>
            <td>Nils P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Emile B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Elodie K.</td>
            <td>480</td>
            <td>1</td>
            <td>lycée - collège massillon, Clermont-Ferrand</td>
         </tr>
         <tr>
            <td>Félicien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Hugo A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Arthur H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Hazard, Armentières</td>
         </tr>
         <tr>
            <td>Alan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Branly, Boulogne sur Mer</td>
         </tr>
         <tr>
            <td>Augustin F.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Beaupré, Haubourdin</td>
         </tr>
         <tr>
            <td>Martin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Jules L.</td>
            <td>480</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnières sur Seine</td>
         </tr>
         <tr>
            <td>Zachary T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Le Mans</td>
         </tr>
         <tr>
            <td>Manuel L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>John C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Alexis G.</td>
            <td>480</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnières sur Seine</td>
         </tr>
         <tr>
            <td>Aymeric S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Maxime G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de New York, New York</td>
         </tr>
         <tr>
            <td>Théo T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Jeanne W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Benjamin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Aurelien P.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Beaupré, Haubourdin</td>
         </tr>
         <tr>
            <td>Eloi A.</td>
            <td>480</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnières sur Seine</td>
         </tr>
         <tr>
            <td>Paul W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Thibaut S.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Elies Z.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Martin C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Malo J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Jules C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Hazard, Armentières</td>
         </tr>
         <tr>
            <td>Jérémy B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Schoelcher, Fort-de-France</td>
         </tr>
         <tr>
            <td>Marius G.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Owen P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Lilian L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Pergaud, Besancon</td>
         </tr>
         <tr>
            <td>Léo K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Raphaël D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Macé, Rennes</td>
         </tr>
         <tr>
            <td>Paul B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre et Marie Curie, Saint-Lo</td>
         </tr>
         <tr>
            <td>Martin M.</td>
            <td>480</td>
            <td>1</td>
            <td>Institution Sainte-Geneviève d'Asnières, Asnières sur Seine</td>
         </tr>
         <tr>
            <td>Clément J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Alexis G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Peyo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gustave Eiffel, Bordeaux</td>
         </tr>
         <tr>
            <td>Olivier F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Amaury M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français de Shanghai, Shanghai</td>
         </tr>
         <tr>
            <td>Elias H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Baptiste R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Matéo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Emeric D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Alexandre L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Frédéric Chopin, Nancy</td>
         </tr>
         <tr>
            <td>Corentin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Clémenceau, Reims</td>
         </tr>
         <tr>
            <td>Lilou B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Militaire d'Autun, Autun</td>
         </tr>
         <tr>
            <td>Tiffanie R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gaspard Monge, Nantes</td>
         </tr>
         <tr>
            <td>Charles D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Saint Joseph, Toulouse</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Duruy, Mont de Marsan</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Gaston Fébus, Orthez</td>
         </tr>
         <tr>
            <td>Orlane R.</td>
            <td>480</td>
            <td>1</td>
            <td>Ensemble Scolaire Saint Adrien, Villeneuve d'Ascq</td>
         </tr>
         <tr>
            <td>Michel S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Renoir, Munich</td>
         </tr>
         <tr>
            <td>Pierre C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Envel T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Maël L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée St-Joseph de Bruz, Bruz</td>
         </tr>
         <tr>
            <td>Simon F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Macé, Rennes</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première (participation en binôme) : 7790 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>170</td></tr><tr><td>474</td><td>188</td></tr><tr><td>472</td><td>196</td></tr><tr><td>470</td><td>200</td></tr><tr><td>468</td><td>311</td></tr><tr><td>466</td><td>313</td></tr><tr><td>465</td><td>353</td></tr><tr><td>464</td><td>355</td></tr><tr><td>463</td><td>375</td></tr><tr><td>462</td><td>377</td></tr><tr><td>460</td><td>391</td></tr><tr><td>459</td><td>511</td></tr><tr><td>456</td><td>513</td></tr><tr><td>454</td><td>587</td></tr><tr><td>453</td><td>607</td></tr><tr><td>452</td><td>609</td></tr><tr><td>451</td><td>635</td></tr><tr><td>450</td><td>637</td></tr><tr><td>449</td><td>793</td></tr><tr><td>448</td><td>795</td></tr><tr><td>447</td><td>805</td></tr><tr><td>446</td><td>807</td></tr><tr><td>445</td><td>909</td></tr><tr><td>444</td><td>919</td></tr><tr><td>442</td><td>963</td></tr><tr><td>441</td><td>1011</td></tr><tr><td>440</td><td>1015</td></tr><tr><td>439</td><td>1185</td></tr><tr><td>438</td><td>1191</td></tr><tr><td>437</td><td>1197</td></tr><tr><td>436</td><td>1199</td></tr><tr><td>435</td><td>1313</td></tr><tr><td>434</td><td>1323</td></tr><tr><td>433</td><td>1371</td></tr><tr><td>432</td><td>1373</td></tr><tr><td>431</td><td>1415</td></tr><tr><td>430</td><td>1429</td></tr><tr><td>429</td><td>1645</td></tr><tr><td>428</td><td>1653</td></tr><tr><td>427</td><td>1687</td></tr><tr><td>426</td><td>1691</td></tr><tr><td>425</td><td>1823</td></tr><tr><td>424</td><td>1847</td></tr><tr><td>423</td><td>1903</td></tr><tr><td>422</td><td>1911</td></tr><tr><td>421</td><td>1955</td></tr><tr><td>420</td><td>1969</td></tr><tr><td>419</td><td>2159</td></tr><tr><td>418</td><td>2171</td></tr><tr><td>417</td><td>2195</td></tr><tr><td>416</td><td>2205</td></tr><tr><td>415</td><td>2325</td></tr><tr><td>414</td><td>2337</td></tr><tr><td>413</td><td>2409</td></tr><tr><td>412</td><td>2427</td></tr><tr><td>411</td><td>2471</td></tr><tr><td>410</td><td>2483</td></tr><tr><td>409</td><td>2669</td></tr><tr><td>408</td><td>2695</td></tr><tr><td>407</td><td>2727</td></tr><tr><td>406</td><td>2743</td></tr><tr><td>405</td><td>2851</td></tr><tr><td>404</td><td>2875</td></tr><tr><td>403</td><td>2945</td></tr><tr><td>402</td><td>2965</td></tr><tr><td>401</td><td>3049</td></tr><tr><td>400</td><td>3074</td></tr><tr><td>399</td><td>3281</td></tr><tr><td>398</td><td>3291</td></tr><tr><td>397</td><td>3331</td></tr><tr><td>396</td><td>3343</td></tr><tr><td>395</td><td>3492</td></tr><tr><td>394</td><td>3513</td></tr><tr><td>393</td><td>3595</td></tr><tr><td>392</td><td>3607</td></tr><tr><td>391</td><td>3677</td></tr><tr><td>390</td><td>3701</td></tr><tr><td>389</td><td>3859</td></tr><tr><td>388</td><td>3877</td></tr><tr><td>387</td><td>3921</td></tr><tr><td>386</td><td>3945</td></tr><tr><td>385</td><td>4054</td></tr><tr><td>384</td><td>4084</td></tr><tr><td>383</td><td>4148</td></tr><tr><td>382</td><td>4170</td></tr><tr><td>381</td><td>4235</td></tr><tr><td>380</td><td>4253</td></tr><tr><td>379</td><td>4411</td></tr><tr><td>378</td><td>4433</td></tr><tr><td>377</td><td>4465</td></tr><tr><td>376</td><td>4494</td></tr><tr><td>375</td><td>4605</td></tr><tr><td>374</td><td>4635</td></tr><tr><td>373</td><td>4693</td></tr><tr><td>372</td><td>4707</td></tr><tr><td>371</td><td>4785</td></tr><tr><td>370</td><td>4805</td></tr><tr><td>369</td><td>4967</td></tr><tr><td>368</td><td>4995</td></tr><tr><td>367</td><td>5039</td></tr><tr><td>366</td><td>5067</td></tr><tr><td>365</td><td>5163</td></tr><tr><td>364</td><td>5185</td></tr><tr><td>363</td><td>5245</td></tr><tr><td>362</td><td>5281</td></tr><tr><td>361</td><td>5321</td></tr><tr><td>360</td><td>5335</td></tr><tr><td>359</td><td>5443</td></tr><tr><td>358</td><td>5461</td></tr><tr><td>357</td><td>5491</td></tr><tr><td>356</td><td>5509</td></tr><tr><td>355</td><td>5583</td></tr><tr><td>354</td><td>5605</td></tr><tr><td>353</td><td>5669</td></tr><tr><td>352</td><td>5693</td></tr><tr><td>351</td><td>5735</td></tr><tr><td>350</td><td>5743</td></tr><tr><td>349</td><td>5849</td></tr><tr><td>348</td><td>5863</td></tr><tr><td>347</td><td>5895</td></tr><tr><td>346</td><td>5908</td></tr><tr><td>345</td><td>5985</td></tr><tr><td>344</td><td>5997</td></tr><tr><td>343</td><td>6031</td></tr><tr><td>342</td><td>6049</td></tr><tr><td>341</td><td>6091</td></tr><tr><td>340</td><td>6117</td></tr><tr><td>339</td><td>6238</td></tr><tr><td>338</td><td>6254</td></tr><tr><td>337</td><td>6290</td></tr><tr><td>336</td><td>6300</td></tr><tr><td>335</td><td>6374</td></tr><tr><td>334</td><td>6380</td></tr><tr><td>333</td><td>6401</td></tr><tr><td>332</td><td>6411</td></tr><tr><td>331</td><td>6451</td></tr><tr><td>330</td><td>6459</td></tr><tr><td>329</td><td>6549</td></tr><tr><td>328</td><td>6561</td></tr><tr><td>327</td><td>6589</td></tr><tr><td>326</td><td>6599</td></tr><tr><td>325</td><td>6638</td></tr><tr><td>324</td><td>6648</td></tr><tr><td>323</td><td>6676</td></tr><tr><td>322</td><td>6702</td></tr><tr><td>321</td><td>6724</td></tr><tr><td>320</td><td>6732</td></tr><tr><td>319</td><td>6773</td></tr><tr><td>318</td><td>6779</td></tr><tr><td>317</td><td>6803</td></tr><tr><td>316</td><td>6809</td></tr><tr><td>315</td><td>6871</td></tr><tr><td>314</td><td>6885</td></tr><tr><td>313</td><td>6907</td></tr><tr><td>312</td><td>6936</td></tr><tr><td>311</td><td>6956</td></tr><tr><td>310</td><td>6964</td></tr><tr><td>309</td><td>7028</td></tr><tr><td>308</td><td>7036</td></tr><tr><td>307</td><td>7058</td></tr><tr><td>306</td><td>7064</td></tr><tr><td>305</td><td>7114</td></tr><tr><td>304</td><td>7118</td></tr><tr><td>303</td><td>7128</td></tr><tr><td>302</td><td>7146</td></tr><tr><td>301</td><td>7162</td></tr><tr><td>300</td><td>7170</td></tr><tr><td>299</td><td>7214</td></tr><tr><td>298</td><td>7224</td></tr><tr><td>297</td><td>7234</td></tr><tr><td>296</td><td>7236</td></tr><tr><td>295</td><td>7260</td></tr><tr><td>294</td><td>7276</td></tr><tr><td>293</td><td>7278</td></tr><tr><td>292</td><td>7290</td></tr><tr><td>291</td><td>7300</td></tr><tr><td>290</td><td>7302</td></tr><tr><td>289</td><td>7344</td></tr><tr><td>288</td><td>7348</td></tr><tr><td>287</td><td>7358</td></tr><tr><td>286</td><td>7367</td></tr><tr><td>285</td><td>7383</td></tr><tr><td>284</td><td>7387</td></tr><tr><td>283</td><td>7397</td></tr><tr><td>282</td><td>7403</td></tr><tr><td>281</td><td>7409</td></tr><tr><td>280</td><td>7415</td></tr><tr><td>278</td><td>7453</td></tr><tr><td>277</td><td>7475</td></tr><tr><td>276</td><td>7479</td></tr><tr><td>275</td><td>7497</td></tr><tr><td>274</td><td>7501</td></tr><tr><td>273</td><td>7507</td></tr><tr><td>272</td><td>7515</td></tr><tr><td>271</td><td>7519</td></tr><tr><td>270</td><td>7527</td></tr><tr><td>269</td><td>7553</td></tr><tr><td>268</td><td>7559</td></tr><tr><td>266</td><td>7561</td></tr><tr><td>264</td><td>7573</td></tr><tr><td>263</td><td>7575</td></tr><tr><td>262</td><td>7585</td></tr><tr><td>261</td><td>7587</td></tr><tr><td>260</td><td>7589</td></tr><tr><td>258</td><td>7603</td></tr><tr><td>256</td><td>7605</td></tr><tr><td>254</td><td>7619</td></tr><tr><td>253</td><td>7621</td></tr><tr><td>252</td><td>7627</td></tr><tr><td>250</td><td>7629</td></tr><tr><td>246</td><td>7651</td></tr><tr><td>244</td><td>7657</td></tr><tr><td>243</td><td>7659</td></tr><tr><td>242</td><td>7663</td></tr><tr><td>240</td><td>7665</td></tr><tr><td>238</td><td>7671</td></tr><tr><td>236</td><td>7673</td></tr><tr><td>234</td><td>7678</td></tr><tr><td>231</td><td>7679</td></tr><tr><td>230</td><td>7683</td></tr><tr><td>229</td><td>7691</td></tr><tr><td>228</td><td>7693</td></tr><tr><td>226</td><td>7695</td></tr><tr><td>220</td><td>7701</td></tr><tr><td>216</td><td>7705</td></tr><tr><td>210</td><td>7707</td></tr><tr><td>209</td><td>7717</td></tr><tr><td>206</td><td>7719</td></tr><tr><td>204</td><td>7727</td></tr><tr><td>203</td><td>7729</td></tr><tr><td>200</td><td>7731</td></tr><tr><td>196</td><td>7735</td></tr><tr><td>190</td><td>7739</td></tr><tr><td>183</td><td>7745</td></tr><tr><td>180</td><td>7747</td></tr><tr><td>176</td><td>7749</td></tr><tr><td>170</td><td>7751</td></tr><tr><td>166</td><td>7753</td></tr><tr><td>153</td><td>7755</td></tr><tr><td>150</td><td>7757</td></tr><tr><td>136</td><td>7759</td></tr><tr><td>130</td><td>7761</td></tr><tr><td>123</td><td>7763</td></tr><tr><td>113</td><td>7765</td></tr><tr><td>103</td><td>7767</td></tr><tr><td>93</td><td>7769</td></tr><tr><td>83</td><td>7771</td></tr><tr><td>66</td><td>7773</td></tr><tr><td>53</td><td>7775</td></tr><tr><td>36</td><td>7779</td></tr><tr><td>30</td><td>7781</td></tr><tr><td>20</td><td>7783</td></tr><tr><td>0</td><td>7785</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 169 premiers ayant un score supérieur ou égal à 477 sont listés ci-dessous.
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
            <td>Amanda R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Schoelcher, Fort-de-France</td>
         </tr>
         <tr>
            <td>Clément Q.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Eugénie D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Bastien S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>John N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Greg J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Emmanuel N.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Colin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Kilian S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Emmanuel P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Bourdieu, Fronton</td>
         </tr>
         <tr>
            <td>Brendan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Thomas N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Laurie R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Pierre-Antoine G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Denis Diderot, Nairobi</td>
         </tr>
         <tr>
            <td>Maya D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Alexandre H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Oriane T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint-Dominique, Saint-Herblain</td>
         </tr>
         <tr>
            <td>Baptiste M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Emma C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint-Dominique, Saint-Herblain</td>
         </tr>
         <tr>
            <td>Erell B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Matéo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Timothé B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Damien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Robin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Gilles de Gennes, Digne les Bains</td>
         </tr>
         <tr>
            <td>Alexandre S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Paul J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Aurélien R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gabriel Voisin, Tournus</td>
         </tr>
         <tr>
            <td>Hugo J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Amiral Ronarc'h, Brest</td>
         </tr>
         <tr>
            <td>Paul R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Théodore V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Blaise P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Savinien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Léo B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Marie G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Vivien M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Adrien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Arnaud M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Ossama E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Thomas M.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Louan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Tanguy S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Etienne P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Gabriel Voisin, Tournus</td>
         </tr>
         <tr>
            <td>Ulysse M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Mickael C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Gaspard T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Louis D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Danaë M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Schoelcher, Fort-de-France</td>
         </tr>
         <tr>
            <td>Mathieu R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Thomas L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Mélanie C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Monnet, Strasbourg</td>
         </tr>
         <tr>
            <td>Emile R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Frédéric Chopin, Nancy</td>
         </tr>
         <tr>
            <td>Maélis R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lucie Aubrac, Bollene</td>
         </tr>
         <tr>
            <td>Aurélia V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lacassagne, Lyon</td>
         </tr>
         <tr>
            <td>Claire A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Stanislaw J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Zoé P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Adrien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Roland-Garros, Le Tampon</td>
         </tr>
         <tr>
            <td>Fabien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Paulin V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Thomas J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Chloé-Amélé M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lacassagne, Lyon</td>
         </tr>
         <tr>
            <td>Yann T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor et Hélène Basch, Rennes</td>
         </tr>
         <tr>
            <td>Caroline P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Prat's, Cluny</td>
         </tr>
         <tr>
            <td>Nathaël C.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Hélène Boucher, Thionville</td>
         </tr>
         <tr>
            <td>Thibaut L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>François C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Lucie C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Eliott P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Mickaël B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Yann D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Anatole France, Lillers</td>
         </tr>
         <tr>
            <td>Killian S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Nicolas D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>Maële D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Puy, Roanne</td>
         </tr>
         <tr>
            <td>Tom J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Kilian L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marie Curie, Vire</td>
         </tr>
         <tr>
            <td>Marine R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Monnet, Strasbourg</td>
         </tr>
         <tr>
            <td>Maxime M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Julie M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montebello, Lille</td>
         </tr>
         <tr>
            <td>Francisco L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Cergy le Haut</td>
         </tr>
         <tr>
            <td>Pereira N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Modeste Leroy, Evreux</td>
         </tr>
         <tr>
            <td>Baptiste J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Victor Hugo, Chateau Gontier</td>
         </tr>
         <tr>
            <td>Paco R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Karim K.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Enzo S.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire Internationale, Lyon</td>
         </tr>
         <tr>
            <td>Thibault C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lucie Aubrac, Bollene</td>
         </tr>
         <tr>
            <td>Benjamin F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Antoine M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Sébastien M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean-Baptiste Schwilgué, Sélestat</td>
         </tr>
         <tr>
            <td>César S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Victor G.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Céline D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Felix G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Zola, Rennes</td>
         </tr>
         <tr>
            <td>Loris A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Elsa B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Puy, Roanne</td>
         </tr>
         <tr>
            <td>Philippe C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Johanna M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Guillaume P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Eugène Livet, Nantes</td>
         </tr>
         <tr>
            <td>Nils C.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Mathieu J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>480</td>
            <td>1</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Christophe L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Antoine W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean-Baptiste Schwilgué, Sélestat</td>
         </tr>
         <tr>
            <td>Jules D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Prat's, Cluny</td>
         </tr>
         <tr>
            <td>Laurine C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Anatole France, Lillers</td>
         </tr>
         <tr>
            <td>Charles I.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Ching P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Français Alexandre Yersin (Lfay), Hanoï</td>
         </tr>
         <tr>
            <td>Thibaut D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Wallon, Valenciennes</td>
         </tr>
         <tr>
            <td>Benjamin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée du Noordover, Grande Synthe</td>
         </tr>
         <tr>
            <td>Kelian D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Loris M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marie Curie, Vire</td>
         </tr>
         <tr>
            <td>Emmanuel V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Cergy le Haut</td>
         </tr>
         <tr>
            <td>Anaëlle R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Thomas F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée H. Carnot, Roanne</td>
         </tr>
         <tr>
            <td>Marc B.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Théo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Robin T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lucie Aubrac, Bollene</td>
         </tr>
         <tr>
            <td>Alexandre F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Anatole France, Lillers</td>
         </tr>
         <tr>
            <td>Nathan E.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Yohan C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Jacob S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Clarence M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Can D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Clément R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Monnet, St Etienne Cedex</td>
         </tr>
         <tr>
            <td>Timothée C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Thomas R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Bourdieu, Fronton</td>
         </tr>
         <tr>
            <td>Kevin Joseph D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Denis Diderot, Nairobi</td>
         </tr>
         <tr>
            <td>Pierre S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Mateo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Zoé P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Frédéric Chopin, Nancy</td>
         </tr>
         <tr>
            <td>Vincent V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Constans, Montluçon</td>
         </tr>
         <tr>
            <td>Benjamin P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Jonathan A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame, Challans</td>
         </tr>
         <tr>
            <td>Brisce L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Tremblin T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Alexandre C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alfred de Vigny, Loches</td>
         </tr>
         <tr>
            <td>Justin R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Erika B.</td>
            <td>480</td>
            <td>1</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Michael F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Verne, Johannesburg</td>
         </tr>
         <tr>
            <td>Tancrède L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Anatole France, Lillers</td>
         </tr>
         <tr>
            <td>Hugo C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Matthieu A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Rezan O.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Militaire Aix, Aix en Provence</td>
         </tr>
         <tr>
            <td>Théo D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Modeste Leroy, Evreux</td>
         </tr>
         <tr>
            <td>Maxime M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Marine S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montebello, Lille</td>
         </tr>
         <tr>
            <td>Lollierou C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Jules L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Gwenvael M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Salem E.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Jean H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Georges M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Guillaume le Conquérant, Lillebonne</td>
         </tr>
         <tr>
            <td>Elouan L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Nicolas Appert, Orvault</td>
         </tr>
         <tr>
            <td>Timothée M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Ivory F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monnet Mermoz, Aurillac</td>
         </tr>
         <tr>
            <td>Cindy V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montebello, Lille</td>
         </tr>
         <tr>
            <td>Jade A.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Jeremy C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Jean-Michel E.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Danny C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lucie Aubrac, Bollene</td>
         </tr>
         <tr>
            <td>Stefen D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Amiral Ronarc'h, Brest</td>
         </tr>
         <tr>
            <td>Adrien V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Pierre Gilles de Gennes, Digne les Bains</td>
         </tr>
         <tr>
            <td>Jérémy B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Garnier, La Ferté Bernard</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée du Noordover, Grande Synthe</td>
         </tr>
         <tr>
            <td>Théo G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Montebello, Lille</td>
         </tr>
         <tr>
            <td>Mawyn N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marguerite Yourcenar, Erstein</td>
         </tr>
         <tr>
            <td>Jean A.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale (participation en binôme) : 4923 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>480</td><td>1</td></tr><tr><td>476</td><td>172</td></tr><tr><td>474</td><td>186</td></tr><tr><td>472</td><td>188</td></tr><tr><td>470</td><td>190</td></tr><tr><td>466</td><td>321</td></tr><tr><td>465</td><td>349</td></tr><tr><td>464</td><td>353</td></tr><tr><td>462</td><td>371</td></tr><tr><td>460</td><td>381</td></tr><tr><td>456</td><td>489</td></tr><tr><td>455</td><td>549</td></tr><tr><td>454</td><td>553</td></tr><tr><td>452</td><td>591</td></tr><tr><td>451</td><td>609</td></tr><tr><td>450</td><td>611</td></tr><tr><td>449</td><td>765</td></tr><tr><td>448</td><td>767</td></tr><tr><td>447</td><td>775</td></tr><tr><td>446</td><td>779</td></tr><tr><td>445</td><td>861</td></tr><tr><td>444</td><td>865</td></tr><tr><td>442</td><td>899</td></tr><tr><td>441</td><td>919</td></tr><tr><td>440</td><td>921</td></tr><tr><td>439</td><td>1087</td></tr><tr><td>438</td><td>1089</td></tr><tr><td>437</td><td>1105</td></tr><tr><td>436</td><td>1109</td></tr><tr><td>435</td><td>1199</td></tr><tr><td>434</td><td>1207</td></tr><tr><td>432</td><td>1235</td></tr><tr><td>431</td><td>1277</td></tr><tr><td>430</td><td>1287</td></tr><tr><td>429</td><td>1416</td></tr><tr><td>428</td><td>1422</td></tr><tr><td>426</td><td>1442</td></tr><tr><td>425</td><td>1532</td></tr><tr><td>424</td><td>1538</td></tr><tr><td>423</td><td>1566</td></tr><tr><td>422</td><td>1568</td></tr><tr><td>421</td><td>1610</td></tr><tr><td>420</td><td>1626</td></tr><tr><td>419</td><td>1780</td></tr><tr><td>418</td><td>1788</td></tr><tr><td>417</td><td>1808</td></tr><tr><td>416</td><td>1818</td></tr><tr><td>415</td><td>1908</td></tr><tr><td>414</td><td>1922</td></tr><tr><td>413</td><td>1952</td></tr><tr><td>412</td><td>1962</td></tr><tr><td>411</td><td>1992</td></tr><tr><td>410</td><td>2004</td></tr><tr><td>409</td><td>2150</td></tr><tr><td>408</td><td>2152</td></tr><tr><td>407</td><td>2178</td></tr><tr><td>406</td><td>2186</td></tr><tr><td>405</td><td>2256</td></tr><tr><td>404</td><td>2268</td></tr><tr><td>403</td><td>2312</td></tr><tr><td>402</td><td>2324</td></tr><tr><td>401</td><td>2358</td></tr><tr><td>400</td><td>2364</td></tr><tr><td>399</td><td>2485</td></tr><tr><td>398</td><td>2493</td></tr><tr><td>397</td><td>2515</td></tr><tr><td>396</td><td>2527</td></tr><tr><td>395</td><td>2593</td></tr><tr><td>394</td><td>2613</td></tr><tr><td>393</td><td>2653</td></tr><tr><td>392</td><td>2661</td></tr><tr><td>391</td><td>2703</td></tr><tr><td>390</td><td>2713</td></tr><tr><td>389</td><td>2831</td></tr><tr><td>388</td><td>2847</td></tr><tr><td>387</td><td>2857</td></tr><tr><td>386</td><td>2863</td></tr><tr><td>385</td><td>2958</td></tr><tr><td>384</td><td>2984</td></tr><tr><td>383</td><td>3006</td></tr><tr><td>382</td><td>3014</td></tr><tr><td>381</td><td>3057</td></tr><tr><td>380</td><td>3069</td></tr><tr><td>379</td><td>3189</td></tr><tr><td>378</td><td>3199</td></tr><tr><td>377</td><td>3231</td></tr><tr><td>376</td><td>3259</td></tr><tr><td>375</td><td>3331</td></tr><tr><td>374</td><td>3351</td></tr><tr><td>373</td><td>3383</td></tr><tr><td>372</td><td>3401</td></tr><tr><td>371</td><td>3431</td></tr><tr><td>370</td><td>3445</td></tr><tr><td>369</td><td>3547</td></tr><tr><td>368</td><td>3559</td></tr><tr><td>367</td><td>3575</td></tr><tr><td>366</td><td>3579</td></tr><tr><td>365</td><td>3639</td></tr><tr><td>364</td><td>3659</td></tr><tr><td>363</td><td>3689</td></tr><tr><td>362</td><td>3693</td></tr><tr><td>361</td><td>3727</td></tr><tr><td>360</td><td>3737</td></tr><tr><td>359</td><td>3797</td></tr><tr><td>358</td><td>3807</td></tr><tr><td>357</td><td>3819</td></tr><tr><td>356</td><td>3827</td></tr><tr><td>355</td><td>3887</td></tr><tr><td>354</td><td>3897</td></tr><tr><td>353</td><td>3921</td></tr><tr><td>352</td><td>3935</td></tr><tr><td>351</td><td>3959</td></tr><tr><td>350</td><td>3967</td></tr><tr><td>349</td><td>4021</td></tr><tr><td>348</td><td>4027</td></tr><tr><td>347</td><td>4045</td></tr><tr><td>346</td><td>4052</td></tr><tr><td>345</td><td>4083</td></tr><tr><td>344</td><td>4093</td></tr><tr><td>343</td><td>4113</td></tr><tr><td>342</td><td>4121</td></tr><tr><td>341</td><td>4147</td></tr><tr><td>340</td><td>4153</td></tr><tr><td>339</td><td>4196</td></tr><tr><td>338</td><td>4212</td></tr><tr><td>337</td><td>4230</td></tr><tr><td>336</td><td>4236</td></tr><tr><td>335</td><td>4256</td></tr><tr><td>334</td><td>4260</td></tr><tr><td>333</td><td>4286</td></tr><tr><td>332</td><td>4290</td></tr><tr><td>331</td><td>4320</td></tr><tr><td>330</td><td>4326</td></tr><tr><td>329</td><td>4362</td></tr><tr><td>328</td><td>4370</td></tr><tr><td>327</td><td>4388</td></tr><tr><td>326</td><td>4390</td></tr><tr><td>325</td><td>4412</td></tr><tr><td>324</td><td>4416</td></tr><tr><td>323</td><td>4428</td></tr><tr><td>322</td><td>4436</td></tr><tr><td>321</td><td>4448</td></tr><tr><td>320</td><td>4454</td></tr><tr><td>318</td><td>4486</td></tr><tr><td>317</td><td>4502</td></tr><tr><td>316</td><td>4506</td></tr><tr><td>315</td><td>4532</td></tr><tr><td>314</td><td>4538</td></tr><tr><td>313</td><td>4540</td></tr><tr><td>312</td><td>4546</td></tr><tr><td>310</td><td>4558</td></tr><tr><td>309</td><td>4588</td></tr><tr><td>307</td><td>4592</td></tr><tr><td>306</td><td>4596</td></tr><tr><td>305</td><td>4612</td></tr><tr><td>304</td><td>4616</td></tr><tr><td>303</td><td>4618</td></tr><tr><td>302</td><td>4628</td></tr><tr><td>301</td><td>4644</td></tr><tr><td>300</td><td>4648</td></tr><tr><td>299</td><td>4674</td></tr><tr><td>298</td><td>4678</td></tr><tr><td>296</td><td>4680</td></tr><tr><td>294</td><td>4692</td></tr><tr><td>293</td><td>4696</td></tr><tr><td>292</td><td>4700</td></tr><tr><td>290</td><td>4706</td></tr><tr><td>289</td><td>4718</td></tr><tr><td>288</td><td>4720</td></tr><tr><td>287</td><td>4726</td></tr><tr><td>286</td><td>4728</td></tr><tr><td>284</td><td>4738</td></tr><tr><td>283</td><td>4740</td></tr><tr><td>282</td><td>4744</td></tr><tr><td>281</td><td>4752</td></tr><tr><td>280</td><td>4754</td></tr><tr><td>279</td><td>4760</td></tr><tr><td>278</td><td>4764</td></tr><tr><td>277</td><td>4768</td></tr><tr><td>276</td><td>4770</td></tr><tr><td>274</td><td>4772</td></tr><tr><td>273</td><td>4776</td></tr><tr><td>270</td><td>4788</td></tr><tr><td>267</td><td>4794</td></tr><tr><td>266</td><td>4800</td></tr><tr><td>265</td><td>4806</td></tr><tr><td>263</td><td>4808</td></tr><tr><td>262</td><td>4814</td></tr><tr><td>260</td><td>4816</td></tr><tr><td>256</td><td>4826</td></tr><tr><td>255</td><td>4836</td></tr><tr><td>254</td><td>4838</td></tr><tr><td>253</td><td>4840</td></tr><tr><td>250</td><td>4844</td></tr><tr><td>246</td><td>4852</td></tr><tr><td>244</td><td>4858</td></tr><tr><td>243</td><td>4860</td></tr><tr><td>242</td><td>4862</td></tr><tr><td>240</td><td>4864</td></tr><tr><td>237</td><td>4868</td></tr><tr><td>236</td><td>4870</td></tr><tr><td>233</td><td>4872</td></tr><tr><td>221</td><td>4874</td></tr><tr><td>220</td><td>4878</td></tr><tr><td>218</td><td>4882</td></tr><tr><td>213</td><td>4884</td></tr><tr><td>210</td><td>4888</td></tr><tr><td>203</td><td>4890</td></tr><tr><td>200</td><td>4892</td></tr><tr><td>196</td><td>4898</td></tr><tr><td>190</td><td>4900</td></tr><tr><td>176</td><td>4902</td></tr><tr><td>140</td><td>4906</td></tr><tr><td>128</td><td>4908</td></tr><tr><td>123</td><td>4910</td></tr><tr><td>30</td><td>4912</td></tr><tr><td>20</td><td>4914</td></tr><tr><td>0</td><td>4918</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 171 premiers ayant un score supérieur ou égal à 477 sont listés ci-dessous.
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
            <td>Gaetan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée d'Apt, Apt</td>
         </tr>
         <tr>
            <td>Jean Pierre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Pierre-Louis S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Perline R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Institution la Providence, Saint-Malo</td>
         </tr>
         <tr>
            <td>Barbara M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Ludwig G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monge la Chauvinière, Nantes</td>
         </tr>
         <tr>
            <td>Ludovic V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint-Dominique, Saint-Herblain</td>
         </tr>
         <tr>
            <td>Marie M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Celine D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Hani M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Protestant Français, Beyrouth</td>
         </tr>
         <tr>
            <td>Cyprien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Sacré-Coeur, Angers</td>
         </tr>
         <tr>
            <td>Rami A.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Aymeric M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Val de Garonne, Marmande</td>
         </tr>
         <tr>
            <td>Malo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Enzo R.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lycée Notre Dame de Sion Evry, Evry</td>
         </tr>
         <tr>
            <td>Yanis E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Cyrielle D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Riwan L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Killian M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Hugo P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint-Dominique, Saint-Herblain</td>
         </tr>
         <tr>
            <td>Maxandre W.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Clément A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée l'Essouriau, Les Ulis</td>
         </tr>
         <tr>
            <td>Quentin L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Alix Q.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Tomy S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Ismaël A.</td>
            <td>480</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Mathieu D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Simon G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Mehdi C.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Arthur P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Edgar Pierre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Vincent O.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Elodie D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Gwennaëlle D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Bekalarek T.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire - collège Jean Maumus-Lycée L. Bertrand, Briey</td>
         </tr>
         <tr>
            <td>Augustin V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Hector P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Jolan M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Macon</td>
         </tr>
         <tr>
            <td>Alexandre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Rochambeau French International School, Bethesda</td>
         </tr>
         <tr>
            <td>Jade V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée d'Apt, Apt</td>
         </tr>
         <tr>
            <td>Kévin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Joseph Fourier, Auxerre</td>
         </tr>
         <tr>
            <td>Pierre G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Julien A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Georges Duby, Luynes</td>
         </tr>
         <tr>
            <td>Hugo A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Julie L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Gaspard D.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Shane L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Bourdonnais, Forest Side</td>
         </tr>
         <tr>
            <td>Edouard D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Antoine R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Sacré-Coeur, Angers</td>
         </tr>
         <tr>
            <td>Raphael L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Guillaume S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Eliot L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Axel L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Julie Daubié, Rombas</td>
         </tr>
         <tr>
            <td>Nils R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Paul Verlaine, Rethel</td>
         </tr>
         <tr>
            <td>Jean M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Yvan B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Richard F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Rochambeau French International School, Bethesda</td>
         </tr>
         <tr>
            <td>Simon N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emmanuel Mounier, Châtenay-Malabry</td>
         </tr>
         <tr>
            <td>Eymeric C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Malhory C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Lilian D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Simon K.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Benoit B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame de Bonnes Nouvelles, Beaupreau</td>
         </tr>
         <tr>
            <td>François M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Alessandro M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Pierre D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis de Broglie, Marly le Roi</td>
         </tr>
         <tr>
            <td>Théodoric A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Luc B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Candice R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Milena S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Albert Triboulet, Romans</td>
         </tr>
         <tr>
            <td>Louis C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Romain C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Nairolfri S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Petru F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Axelle C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         <tr>
            <td>William B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Alexandre M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Baptiste G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Tituan A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>Zacchary S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Thomas V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Teddy C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Nicolas G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Kishan C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Bourdonnais, Forest Side</td>
         </tr>
         <tr>
            <td>Jérémie R.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Pierre B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent Blaise Pascal, Colmar</td>
         </tr>
         <tr>
            <td>Thomas T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Doisneau, Corbeil-Essonnes</td>
         </tr>
         <tr>
            <td>Camille D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Yoann V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Macon</td>
         </tr>
         <tr>
            <td>Arthur T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Roland-Garros, Le Tampon</td>
         </tr>
         <tr>
            <td>Salim B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Natacha B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Antoine C.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Elise G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Carla P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Maxime C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Amboise</td>
         </tr>
         <tr>
            <td>Valentin H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Omar K.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Protestant Français, Beyrouth</td>
         </tr>
         <tr>
            <td>Julien T.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Lyautey, Casablanca</td>
         </tr>
         <tr>
            <td>Thomas B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Kaël L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Colinière, Nantes</td>
         </tr>
         <tr>
            <td>Cyril B.</td>
            <td>480</td>
            <td>1</td>
            <td>Grand Lycée Franco-Libanais, Beyrouth</td>
         </tr>
         <tr>
            <td>Matthieu L.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Maud G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Justin B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Sainte Famille, Amiens</td>
         </tr>
         <tr>
            <td>Félix D.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Pierre M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Simon V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Gwenaël L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Cyprien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Alain, Le Vésinet</td>
         </tr>
         <tr>
            <td>Eloi P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Felix le Dantec, Lannion</td>
         </tr>
         <tr>
            <td>Loïc H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Gauthier L.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Lucie G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Magendie, Bordeaux</td>
         </tr>
         <tr>
            <td>Thomas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Espace Scolaire Condorcet, Saint-Quentin</td>
         </tr>
         <tr>
            <td>Adrián G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Favard, Gueret</td>
         </tr>
         <tr>
            <td>Lucas B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jules Fil, Carcassonne</td>
         </tr>
         <tr>
            <td>Alex Christie R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Vauban, Luxembourg</td>
         </tr>
         <tr>
            <td>Richard E.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Polyvalent le Mans Sud, Le Mans</td>
         </tr>
         <tr>
            <td>Amine S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Thomas H.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Lycée Notre Dame de Sion Evry, Evry</td>
         </tr>
         <tr>
            <td>Arthur A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée l'Essouriau, Les Ulis</td>
         </tr>
         <tr>
            <td>Océane H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jacques Monod, Saint Jean de Braye</td>
         </tr>
         <tr>
            <td>Lucas D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Descartes, St Genis Laval</td>
         </tr>
         <tr>
            <td>Joan A.</td>
            <td>480</td>
            <td>1</td>
            <td>Gymnase, Strasbourg</td>
         </tr>
         <tr>
            <td>Fabien B.</td>
            <td>480</td>
            <td>1</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Louis T.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Quentin F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Sainte Famille, Amiens</td>
         </tr>
         <tr>
            <td>Guillaume A.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Georges Duby, Luynes</td>
         </tr>
         <tr>
            <td>Mathieu M.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Valentin D.</td>
            <td>480</td>
            <td>1</td>
            <td>Cite Scolaire Jb Darnet, Saint Yrieix la Perche</td>
         </tr>
         <tr>
            <td>Lucas P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Léonard de Vinci, Amboise</td>
         </tr>
         <tr>
            <td>Maximilien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Rémi P.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Nathan V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Valentin S.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Montfort sur Meu</td>
         </tr>
         <tr>
            <td>Saad B.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Saint Rémi, Roubaix</td>
         </tr>
         <tr>
            <td>Arnaud A.</td>
            <td>480</td>
            <td>1</td>
            <td>Cité Scolaire - collège Jean Maumus-Lycée L. Bertrand, Briey</td>
         </tr>
         <tr>
            <td>Antonin G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Durand, Castelnaudary</td>
         </tr>
         <tr>
            <td>Matthias M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Romane F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Laëtitia Bonaparte, Ajaccio</td>
         </tr>
         <tr>
            <td>Matthis L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Romain G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Joseph Fourier, Auxerre</td>
         </tr>
         <tr>
            <td>Martin H.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Institution la Providence, Saint-Malo</td>
         </tr>
         <tr>
            <td>Stanislas L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège Episcopal Saint Etienne, Strasbourg</td>
         </tr>
         <tr>
            <td>Pierre D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Cornat, Valognes</td>
         </tr>
         <tr>
            <td>Atlan D.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Liard, Falaise</td>
         </tr>
         <tr>
            <td>Pyromax N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Baptiste Dumas, Alès</td>
         </tr>
         <tr>
            <td>Matteo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Blaise Pascal, Orsay</td>
         </tr>
         <tr>
            <td>Matéo M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Salvador Allende, Hérouville Saint Clair</td>
         </tr>
         <tr>
            <td>David C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Robert Doisneau, Corbeil-Essonnes</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Emile Duclaux, Aurillac</td>
         </tr>
         <tr>
            <td>Victor G.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Jean Favard, Gueret</td>
         </tr>
         <tr>
            <td>Paul C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Notre Dame de Bonnes Nouvelles, Beaupreau</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Monge la Chauvinière, Nantes</td>
         </tr>
         <tr>
            <td>Tom V.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Henri Moissan, Meaux</td>
         </tr>
         <tr>
            <td>Clément L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Val de Garonne, Marmande</td>
         </tr>
         <tr>
            <td>Constant R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Pierre J.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Macon</td>
         </tr>
         <tr>
            <td>Jean L.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Alban F.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée le Likès, Quimper</td>
         </tr>
         <tr>
            <td>Sylvain C.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée la Joliverie, Saint Sébastien sur Loire</td>
         </tr>
         <tr>
            <td>Julien L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Fabert, Metz</td>
         </tr>
         <tr>
            <td>Elsa R.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée François Rabelais, Fontenay le Comte</td>
         </tr>
         <tr>
            <td>Quentin M.</td>
            <td>480</td>
            <td>1</td>
            <td>École Collège Lycée le Bon Sauveur, Le Vésinet</td>
         </tr>
         <tr>
            <td>Théo L.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée Marcel Rudloff, Strasbourg</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>480</td>
            <td>1</td>
            <td>Collège-Lycée la Croix Rouge, Brest</td>
         </tr>
         <tr>
            <td>Baptiste N.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée René Cassin, Macon</td>
         </tr>
         <tr>
            <td>Samuel M.</td>
            <td>480</td>
            <td>1</td>
            <td>Lycée de la Matheysine, La Mure d'Isère</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Seconde pro. (participation en binôme) : 372 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>448</td><td>1</td></tr><tr><td>424</td><td>3</td></tr><tr><td>421</td><td>5</td></tr><tr><td>418</td><td>7</td></tr><tr><td>412</td><td>9</td></tr><tr><td>410</td><td>11</td></tr><tr><td>406</td><td>15</td></tr><tr><td>399</td><td>21</td></tr><tr><td>398</td><td>23</td></tr><tr><td>397</td><td>25</td></tr><tr><td>396</td><td>29</td></tr><tr><td>394</td><td>33</td></tr><tr><td>392</td><td>35</td></tr><tr><td>385</td><td>39</td></tr><tr><td>384</td><td>43</td></tr><tr><td>382</td><td>45</td></tr><tr><td>381</td><td>49</td></tr><tr><td>380</td><td>51</td></tr><tr><td>378</td><td>53</td></tr><tr><td>376</td><td>55</td></tr><tr><td>374</td><td>67</td></tr><tr><td>367</td><td>69</td></tr><tr><td>366</td><td>71</td></tr><tr><td>365</td><td>79</td></tr><tr><td>364</td><td>83</td></tr><tr><td>362</td><td>85</td></tr><tr><td>360</td><td>87</td></tr><tr><td>358</td><td>91</td></tr><tr><td>356</td><td>93</td></tr><tr><td>355</td><td>99</td></tr><tr><td>353</td><td>101</td></tr><tr><td>352</td><td>103</td></tr><tr><td>350</td><td>109</td></tr><tr><td>346</td><td>113</td></tr><tr><td>345</td><td>117</td></tr><tr><td>344</td><td>119</td></tr><tr><td>340</td><td>121</td></tr><tr><td>339</td><td>123</td></tr><tr><td>338</td><td>127</td></tr><tr><td>337</td><td>131</td></tr><tr><td>336</td><td>133</td></tr><tr><td>335</td><td>137</td></tr><tr><td>334</td><td>139</td></tr><tr><td>332</td><td>143</td></tr><tr><td>331</td><td>145</td></tr><tr><td>330</td><td>149</td></tr><tr><td>329</td><td>163</td></tr><tr><td>328</td><td>165</td></tr><tr><td>327</td><td>167</td></tr><tr><td>326</td><td>169</td></tr><tr><td>325</td><td>171</td></tr><tr><td>323</td><td>175</td></tr><tr><td>321</td><td>179</td></tr><tr><td>320</td><td>181</td></tr><tr><td>319</td><td>187</td></tr><tr><td>318</td><td>189</td></tr><tr><td>317</td><td>191</td></tr><tr><td>316</td><td>193</td></tr><tr><td>315</td><td>195</td></tr><tr><td>314</td><td>197</td></tr><tr><td>313</td><td>201</td></tr><tr><td>312</td><td>203</td></tr><tr><td>311</td><td>207</td></tr><tr><td>310</td><td>209</td></tr><tr><td>308</td><td>213</td></tr><tr><td>305</td><td>215</td></tr><tr><td>303</td><td>219</td></tr><tr><td>302</td><td>223</td></tr><tr><td>301</td><td>225</td></tr><tr><td>300</td><td>227</td></tr><tr><td>297</td><td>235</td></tr><tr><td>296</td><td>237</td></tr><tr><td>293</td><td>239</td></tr><tr><td>292</td><td>241</td></tr><tr><td>291</td><td>243</td></tr><tr><td>290</td><td>245</td></tr><tr><td>286</td><td>251</td></tr><tr><td>285</td><td>253</td></tr><tr><td>284</td><td>255</td></tr><tr><td>283</td><td>257</td></tr><tr><td>282</td><td>263</td></tr><tr><td>280</td><td>265</td></tr><tr><td>278</td><td>271</td></tr><tr><td>276</td><td>273</td></tr><tr><td>272</td><td>277</td></tr><tr><td>270</td><td>281</td></tr><tr><td>268</td><td>285</td></tr><tr><td>266</td><td>287</td></tr><tr><td>264</td><td>291</td></tr><tr><td>263</td><td>293</td></tr><tr><td>260</td><td>295</td></tr><tr><td>258</td><td>299</td></tr><tr><td>257</td><td>301</td></tr><tr><td>256</td><td>303</td></tr><tr><td>252</td><td>305</td></tr><tr><td>250</td><td>307</td></tr><tr><td>246</td><td>309</td></tr><tr><td>244</td><td>315</td></tr><tr><td>243</td><td>317</td></tr><tr><td>241</td><td>321</td></tr><tr><td>238</td><td>323</td></tr><tr><td>236</td><td>325</td></tr><tr><td>230</td><td>327</td></tr><tr><td>223</td><td>331</td></tr><tr><td>220</td><td>333</td></tr><tr><td>210</td><td>335</td></tr><tr><td>206</td><td>337</td></tr><tr><td>200</td><td>339</td></tr><tr><td>193</td><td>345</td></tr><tr><td>190</td><td>347</td></tr><tr><td>180</td><td>349</td></tr><tr><td>173</td><td>353</td></tr><tr><td>169</td><td>357</td></tr><tr><td>160</td><td>359</td></tr><tr><td>73</td><td>363</td></tr><tr><td>66</td><td>365</td></tr><tr><td>0</td><td>367</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 20 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Guillaume L.</td>
            <td>448</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Tom G.</td>
            <td>448</td>
            <td>1</td>
            <td>Lycée Louis Armand, Poitiers</td>
         </tr>
         <tr>
            <td>Margaux B.</td>
            <td>424</td>
            <td>3</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Simon C.</td>
            <td>424</td>
            <td>3</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Marie V.</td>
            <td>421</td>
            <td>5</td>
            <td>Lycée Professionnel les Sapins, Coutances</td>
         </tr>
         <tr>
            <td>Manon D.</td>
            <td>421</td>
            <td>5</td>
            <td>Lycée Professionnel les Sapins, Coutances</td>
         </tr>
         <tr>
            <td>Lucas A.</td>
            <td>418</td>
            <td>7</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Guillaume L.</td>
            <td>418</td>
            <td>7</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Guillaume C.</td>
            <td>412</td>
            <td>9</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Alexandre F.</td>
            <td>412</td>
            <td>9</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Gauthier T.</td>
            <td>410</td>
            <td>11</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Lucas C.</td>
            <td>410</td>
            <td>11</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Adrien G.</td>
            <td>410</td>
            <td>11</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Guillaume M.</td>
            <td>410</td>
            <td>11</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Nicolas E.</td>
            <td>406</td>
            <td>15</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Popol P.</td>
            <td>406</td>
            <td>15</td>
            <td>Lycée Professionnel Blériot, Cambrai</td>
         </tr>
         <tr>
            <td>Thibaut L.</td>
            <td>406</td>
            <td>15</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Kéké V.</td>
            <td>406</td>
            <td>15</td>
            <td>Lycée Professionnel Blériot, Cambrai</td>
         </tr>
         <tr>
            <td>Geoffrey S.</td>
            <td>406</td>
            <td>15</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         <tr>
            <td>Gauthier G.</td>
            <td>406</td>
            <td>15</td>
            <td>LP J.DURAND, Saint-Omer</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Première pro. (participation en binôme) : 154 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>420</td><td>1</td></tr><tr><td>414</td><td>3</td></tr><tr><td>410</td><td>5</td></tr><tr><td>400</td><td>7</td></tr><tr><td>388</td><td>9</td></tr><tr><td>384</td><td>13</td></tr><tr><td>383</td><td>15</td></tr><tr><td>380</td><td>17</td></tr><tr><td>376</td><td>19</td></tr><tr><td>370</td><td>21</td></tr><tr><td>366</td><td>23</td></tr><tr><td>362</td><td>25</td></tr><tr><td>356</td><td>29</td></tr><tr><td>354</td><td>33</td></tr><tr><td>352</td><td>37</td></tr><tr><td>350</td><td>39</td></tr><tr><td>348</td><td>41</td></tr><tr><td>346</td><td>47</td></tr><tr><td>344</td><td>51</td></tr><tr><td>342</td><td>53</td></tr><tr><td>340</td><td>55</td></tr><tr><td>338</td><td>57</td></tr><tr><td>332</td><td>59</td></tr><tr><td>330</td><td>61</td></tr><tr><td>328</td><td>65</td></tr><tr><td>326</td><td>67</td></tr><tr><td>324</td><td>71</td></tr><tr><td>323</td><td>73</td></tr><tr><td>322</td><td>75</td></tr><tr><td>321</td><td>79</td></tr><tr><td>320</td><td>81</td></tr><tr><td>318</td><td>83</td></tr><tr><td>316</td><td>85</td></tr><tr><td>312</td><td>91</td></tr><tr><td>310</td><td>93</td></tr><tr><td>304</td><td>95</td></tr><tr><td>299</td><td>97</td></tr><tr><td>298</td><td>99</td></tr><tr><td>296</td><td>103</td></tr><tr><td>293</td><td>105</td></tr><tr><td>289</td><td>107</td></tr><tr><td>285</td><td>109</td></tr><tr><td>284</td><td>111</td></tr><tr><td>282</td><td>113</td></tr><tr><td>276</td><td>115</td></tr><tr><td>268</td><td>117</td></tr><tr><td>265</td><td>119</td></tr><tr><td>263</td><td>121</td></tr><tr><td>260</td><td>125</td></tr><tr><td>253</td><td>127</td></tr><tr><td>249</td><td>129</td></tr><tr><td>246</td><td>131</td></tr><tr><td>236</td><td>133</td></tr><tr><td>233</td><td>135</td></tr><tr><td>227</td><td>137</td></tr><tr><td>223</td><td>139</td></tr><tr><td>210</td><td>141</td></tr><tr><td>193</td><td>145</td></tr><tr><td>168</td><td>147</td></tr><tr><td>166</td><td>149</td></tr><tr><td>136</td><td>151</td></tr><tr><td>96</td><td>153</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 8 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Anthony D.</td>
            <td>420</td>
            <td>1</td>
            <td>Lycée Durroux, Ferrières sur Ariège</td>
         </tr>
         <tr>
            <td>Loic L.</td>
            <td>420</td>
            <td>1</td>
            <td>Lycée Durroux, Ferrières sur Ariège</td>
         </tr>
         <tr>
            <td>Florian D.</td>
            <td>414</td>
            <td>3</td>
            <td>Lycée Pierre Mendès France, Rennes</td>
         </tr>
         <tr>
            <td>Swann C.</td>
            <td>414</td>
            <td>3</td>
            <td>Lycée Pierre Mendès France, Rennes</td>
         </tr>
         <tr>
            <td>Jessy B.</td>
            <td>410</td>
            <td>5</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Aymeric W.</td>
            <td>410</td>
            <td>5</td>
            <td>Lycée Mangin, Sarrebourg</td>
         </tr>
         <tr>
            <td>Lou L.</td>
            <td>400</td>
            <td>7</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         <tr>
            <td>Florian L.</td>
            <td>400</td>
            <td>7</td>
            <td>Lycée Napoléon, L'Aigle</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-54-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Terminale pro. (participation en binôme) : 60 élèves</h2>
            <i>Score maximum atteignable : 480</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-54-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-54-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>420</td><td>1</td></tr><tr><td>417</td><td>3</td></tr><tr><td>416</td><td>5</td></tr><tr><td>410</td><td>7</td></tr><tr><td>406</td><td>11</td></tr><tr><td>405</td><td>13</td></tr><tr><td>396</td><td>15</td></tr><tr><td>390</td><td>17</td></tr><tr><td>377</td><td>19</td></tr><tr><td>372</td><td>21</td></tr><tr><td>346</td><td>23</td></tr><tr><td>334</td><td>25</td></tr><tr><td>332</td><td>27</td></tr><tr><td>319</td><td>29</td></tr><tr><td>316</td><td>31</td></tr><tr><td>314</td><td>35</td></tr><tr><td>308</td><td>37</td></tr><tr><td>302</td><td>39</td></tr><tr><td>299</td><td>41</td></tr><tr><td>298</td><td>43</td></tr><tr><td>292</td><td>45</td></tr><tr><td>290</td><td>47</td></tr><tr><td>280</td><td>49</td></tr><tr><td>272</td><td>51</td></tr><tr><td>270</td><td>53</td></tr><tr><td>258</td><td>55</td></tr><tr><td>230</td><td>57</td></tr><tr><td>166</td><td>59</td></tr>
            </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan=2 align=center>
            <p>
            Les 14 premiers ayant un score supérieur ou égal à 400 sont listés ci-dessous.
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
            <td>Solaini N.</td>
            <td>420</td>
            <td>1</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Mélanie L.</td>
            <td>420</td>
            <td>1</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Wendy D.</td>
            <td>417</td>
            <td>3</td>
            <td>Lycée Joliot Curie, Dammarie les Lys</td>
         </tr>
         <tr>
            <td>Quentin C.</td>
            <td>417</td>
            <td>3</td>
            <td>Lycée Joliot Curie, Dammarie les Lys</td>
         </tr>
         <tr>
            <td>Tom C.</td>
            <td>416</td>
            <td>5</td>
            <td>Lycée Joliot Curie, Dammarie les Lys</td>
         </tr>
         <tr>
            <td>Benoit M.</td>
            <td>416</td>
            <td>5</td>
            <td>Lycée Joliot Curie, Dammarie les Lys</td>
         </tr>
         <tr>
            <td>Benjamin H.</td>
            <td>410</td>
            <td>7</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Dorian G.</td>
            <td>410</td>
            <td>7</td>
            <td>Leonard de Vinci, Levallois-Perret</td>
         </tr>
         <tr>
            <td>Bastien G.</td>
            <td>410</td>
            <td>7</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Mickael B.</td>
            <td>410</td>
            <td>7</td>
            <td>Leonard de Vinci, Levallois-Perret</td>
         </tr>
         <tr>
            <td>Lucie L.</td>
            <td>406</td>
            <td>11</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Claire P.</td>
            <td>406</td>
            <td>11</td>
            <td>Lp Edmond Doucet, Equeurdreville</td>
         </tr>
         <tr>
            <td>Michel C.</td>
            <td>405</td>
            <td>13</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         <tr>
            <td>Bertrand C.</td>
            <td>405</td>
            <td>13</td>
            <td>Lycée la Roquelle, Coutances</td>
         </tr>
         </table>
         </div>
         </td>
      </tr>
            </table>
         </div></div>
