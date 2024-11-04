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

<!--<li>698449 élèves ont participé, dont 0% de filles.</li>
<li>3841 établissements ont pris part au concours.</li>
-->
<div id="nbContestantsTab"><ul><li id="nbContestants1"><a onclick="setNbContestants(1)" href="#null-1">Participations individuelles</a></li><li id="nbContestants2"><a onclick="setNbContestants(2)" href="#null-2">Participations en binômes</a></li></ul><div id="null-1" style="padding:0px;"></div><div id="null-2" style="padding:0px;"></div></div>
      <div id='results'>
         <ul><li class='nbContestants1' id='link-96310001463823446-4-1'><a href='#tabs-96310001463823446-4-1'>CM1</a></li><li class='nbContestants1' id='link-96310001463823446-5-1'><a href='#tabs-96310001463823446-5-1'>CM2</a></li><li class='nbContestants1' id='link-96310001463823446-6-1'><a href='#tabs-96310001463823446-6-1'>6e</a></li><li class='nbContestants1' id='link-96310001463823446-7-1'><a href='#tabs-96310001463823446-7-1'>5e</a></li><li class='nbContestants1' id='link-96310001463823446-8-1'><a href='#tabs-96310001463823446-8-1'>4e</a></li><li class='nbContestants1' id='link-96310001463823446-9-1'><a href='#tabs-96310001463823446-9-1'>3e</a></li><li class='nbContestants1' id='link-96310001463823446-10-1'><a href='#tabs-96310001463823446-10-1'>2de</a></li><li class='nbContestants1' id='link-96310001463823446-11-1'><a href='#tabs-96310001463823446-11-1'>1re</a></li><li class='nbContestants1' id='link-96310001463823446-12-1'><a href='#tabs-96310001463823446-12-1'>Tale</a></li><li class='nbContestants1' id='link-96310001463823446-13-1'><a href='#tabs-96310001463823446-13-1'>2de pro.</a></li><li class='nbContestants1' id='link-96310001463823446-14-1'><a href='#tabs-96310001463823446-14-1'>1re pro.</a></li><li class='nbContestants1' id='link-96310001463823446-15-1'><a href='#tabs-96310001463823446-15-1'>Tale pro.</a></li><li class='nbContestants1' id='link-96310001463823446-16-1'><a href='#tabs-96310001463823446-16-1'>6e Segpa</a></li><li class='nbContestants1' id='link-96310001463823446-17-1'><a href='#tabs-96310001463823446-17-1'>5e Segpa</a></li><li class='nbContestants1' id='link-96310001463823446-18-1'><a href='#tabs-96310001463823446-18-1'>4e Segpa</a></li><li class='nbContestants1' id='link-96310001463823446-19-1'><a href='#tabs-96310001463823446-19-1'>3e Segpa</a></li><li class='nbContestants2' id='link-96310001463823446-4-2'><a href='#tabs-96310001463823446-4-2'>CM1</a></li><li class='nbContestants2' id='link-96310001463823446-5-2'><a href='#tabs-96310001463823446-5-2'>CM2</a></li><li class='nbContestants2' id='link-96310001463823446-6-2'><a href='#tabs-96310001463823446-6-2'>6e</a></li><li class='nbContestants2' id='link-96310001463823446-7-2'><a href='#tabs-96310001463823446-7-2'>5e</a></li><li class='nbContestants2' id='link-96310001463823446-8-2'><a href='#tabs-96310001463823446-8-2'>4e</a></li><li class='nbContestants2' id='link-96310001463823446-9-2'><a href='#tabs-96310001463823446-9-2'>3e</a></li><li class='nbContestants2' id='link-96310001463823446-10-2'><a href='#tabs-96310001463823446-10-2'>2de</a></li><li class='nbContestants2' id='link-96310001463823446-11-2'><a href='#tabs-96310001463823446-11-2'>1re</a></li><li class='nbContestants2' id='link-96310001463823446-12-2'><a href='#tabs-96310001463823446-12-2'>Tale</a></li><li class='nbContestants2' id='link-96310001463823446-13-2'><a href='#tabs-96310001463823446-13-2'>2de pro.</a></li><li class='nbContestants2' id='link-96310001463823446-14-2'><a href='#tabs-96310001463823446-14-2'>1re pro.</a></li><li class='nbContestants2' id='link-96310001463823446-15-2'><a href='#tabs-96310001463823446-15-2'>Tale pro.</a></li><li class='nbContestants2' id='link-96310001463823446-16-2'><a href='#tabs-96310001463823446-16-2'>6e Segpa</a></li><li class='nbContestants2' id='link-96310001463823446-17-2'><a href='#tabs-96310001463823446-17-2'>5e Segpa</a></li><li class='nbContestants2' id='link-96310001463823446-18-2'><a href='#tabs-96310001463823446-18-2'>4e Segpa</a></li><li class='nbContestants2' id='link-96310001463823446-19-2'><a href='#tabs-96310001463823446-19-2'>3e Segpa</a></li></ul><div id='tabs-96310001463823446-4-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation individuelle) : 4230 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-4-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-4-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>280</td><td>3</td></tr><tr><td>271</td><td>4</td></tr><tr><td>270</td><td>5</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>8</td></tr><tr><td>250</td><td>12</td></tr><tr><td>245</td><td>17</td></tr><tr><td>241</td><td>18</td></tr><tr><td>240</td><td>19</td></tr><tr><td>235</td><td>30</td></tr><tr><td>231</td><td>36</td></tr><tr><td>230</td><td>37</td></tr><tr><td>225</td><td>47</td></tr><tr><td>223</td><td>49</td></tr><tr><td>221</td><td>50</td></tr><tr><td>220</td><td>53</td></tr><tr><td>215</td><td>78</td></tr><tr><td>213</td><td>81</td></tr><tr><td>211</td><td>82</td></tr><tr><td>210</td><td>86</td></tr><tr><td>205</td><td>123</td></tr><tr><td>203</td><td>131</td></tr><tr><td>201</td><td>133</td></tr><tr><td>200</td><td>138</td></tr><tr><td>196</td><td>189</td></tr><tr><td>195</td><td>191</td></tr><tr><td>191</td><td>204</td></tr><tr><td>190</td><td>214</td></tr><tr><td>186</td><td>298</td></tr><tr><td>185</td><td>299</td></tr><tr><td>183</td><td>330</td></tr><tr><td>181</td><td>333</td></tr><tr><td>180</td><td>341</td></tr><tr><td>178</td><td>447</td></tr><tr><td>176</td><td>448</td></tr><tr><td>175</td><td>451</td></tr><tr><td>173</td><td>494</td></tr><tr><td>171</td><td>501</td></tr><tr><td>170</td><td>519</td></tr><tr><td>168</td><td>690</td></tr><tr><td>166</td><td>691</td></tr><tr><td>165</td><td>696</td></tr><tr><td>163</td><td>744</td></tr><tr><td>161</td><td>750</td></tr><tr><td>160</td><td>773</td></tr><tr><td>156</td><td>938</td></tr><tr><td>155</td><td>942</td></tr><tr><td>153</td><td>1018</td></tr><tr><td>151</td><td>1028</td></tr><tr><td>150</td><td>1052</td></tr><tr><td>148</td><td>1275</td></tr><tr><td>146</td><td>1276</td></tr><tr><td>145</td><td>1278</td></tr><tr><td>143</td><td>1377</td></tr><tr><td>141</td><td>1389</td></tr><tr><td>140</td><td>1404</td></tr><tr><td>138</td><td>1636</td></tr><tr><td>136</td><td>1637</td></tr><tr><td>135</td><td>1638</td></tr><tr><td>133</td><td>1770</td></tr><tr><td>131</td><td>1778</td></tr><tr><td>130</td><td>1793</td></tr><tr><td>125</td><td>2031</td></tr><tr><td>123</td><td>2178</td></tr><tr><td>121</td><td>2182</td></tr><tr><td>120</td><td>2195</td></tr><tr><td>116</td><td>2410</td></tr><tr><td>115</td><td>2411</td></tr><tr><td>113</td><td>2570</td></tr><tr><td>111</td><td>2573</td></tr><tr><td>110</td><td>2590</td></tr><tr><td>105</td><td>2797</td></tr><tr><td>103</td><td>2971</td></tr><tr><td>101</td><td>2976</td></tr><tr><td>100</td><td>2984</td></tr><tr><td>95</td><td>3165</td></tr><tr><td>93</td><td>3301</td></tr><tr><td>91</td><td>3305</td></tr><tr><td>90</td><td>3309</td></tr><tr><td>85</td><td>3465</td></tr><tr><td>83</td><td>3582</td></tr><tr><td>81</td><td>3583</td></tr><tr><td>80</td><td>3585</td></tr><tr><td>75</td><td>3684</td></tr><tr><td>71</td><td>3769</td></tr><tr><td>70</td><td>3770</td></tr><tr><td>65</td><td>3841</td></tr><tr><td>61</td><td>3896</td></tr><tr><td>60</td><td>3897</td></tr><tr><td>55</td><td>3939</td></tr><tr><td>50</td><td>3972</td></tr><tr><td>45</td><td>4009</td></tr><tr><td>40</td><td>4036</td></tr><tr><td>35</td><td>4059</td></tr><tr><td>30</td><td>4066</td></tr><tr><td>25</td><td>4081</td></tr><tr><td>20</td><td>4082</td></tr><tr><td>10</td><td>4093</td></tr><tr><td>5</td><td>4122</td></tr><tr><td>0</td><td>4126</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-5-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation individuelle) : 6721 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-5-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-5-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>310</td><td>3</td></tr><tr><td>300</td><td>4</td></tr><tr><td>290</td><td>6</td></tr><tr><td>285</td><td>7</td></tr><tr><td>280</td><td>8</td></tr><tr><td>270</td><td>14</td></tr><tr><td>265</td><td>20</td></tr><tr><td>260</td><td>21</td></tr><tr><td>255</td><td>37</td></tr><tr><td>251</td><td>42</td></tr><tr><td>250</td><td>44</td></tr><tr><td>245</td><td>61</td></tr><tr><td>243</td><td>65</td></tr><tr><td>240</td><td>66</td></tr><tr><td>236</td><td>94</td></tr><tr><td>235</td><td>96</td></tr><tr><td>233</td><td>109</td></tr><tr><td>231</td><td>112</td></tr><tr><td>230</td><td>116</td></tr><tr><td>226</td><td>164</td></tr><tr><td>225</td><td>165</td></tr><tr><td>223</td><td>176</td></tr><tr><td>221</td><td>178</td></tr><tr><td>220</td><td>191</td></tr><tr><td>216</td><td>257</td></tr><tr><td>215</td><td>259</td></tr><tr><td>213</td><td>283</td></tr><tr><td>211</td><td>289</td></tr><tr><td>210</td><td>301</td></tr><tr><td>208</td><td>424</td></tr><tr><td>206</td><td>427</td></tr><tr><td>205</td><td>430</td></tr><tr><td>203</td><td>473</td></tr><tr><td>201</td><td>480</td></tr><tr><td>200</td><td>505</td></tr><tr><td>198</td><td>678</td></tr><tr><td>196</td><td>679</td></tr><tr><td>195</td><td>683</td></tr><tr><td>193</td><td>743</td></tr><tr><td>191</td><td>756</td></tr><tr><td>190</td><td>793</td></tr><tr><td>188</td><td>999</td></tr><tr><td>186</td><td>1002</td></tr><tr><td>185</td><td>1006</td></tr><tr><td>183</td><td>1110</td></tr><tr><td>181</td><td>1121</td></tr><tr><td>180</td><td>1165</td></tr><tr><td>178</td><td>1422</td></tr><tr><td>176</td><td>1423</td></tr><tr><td>175</td><td>1431</td></tr><tr><td>173</td><td>1526</td></tr><tr><td>171</td><td>1537</td></tr><tr><td>170</td><td>1587</td></tr><tr><td>166</td><td>1906</td></tr><tr><td>165</td><td>1915</td></tr><tr><td>163</td><td>2066</td></tr><tr><td>161</td><td>2083</td></tr><tr><td>160</td><td>2137</td></tr><tr><td>158</td><td>2519</td></tr><tr><td>156</td><td>2521</td></tr><tr><td>155</td><td>2526</td></tr><tr><td>153</td><td>2703</td></tr><tr><td>151</td><td>2712</td></tr><tr><td>150</td><td>2764</td></tr><tr><td>148</td><td>3125</td></tr><tr><td>146</td><td>3127</td></tr><tr><td>145</td><td>3130</td></tr><tr><td>143</td><td>3318</td></tr><tr><td>141</td><td>3336</td></tr><tr><td>140</td><td>3377</td></tr><tr><td>136</td><td>3747</td></tr><tr><td>135</td><td>3748</td></tr><tr><td>133</td><td>3951</td></tr><tr><td>131</td><td>3968</td></tr><tr><td>130</td><td>4006</td></tr><tr><td>126</td><td>4359</td></tr><tr><td>125</td><td>4360</td></tr><tr><td>123</td><td>4573</td></tr><tr><td>121</td><td>4580</td></tr><tr><td>120</td><td>4608</td></tr><tr><td>115</td><td>4880</td></tr><tr><td>113</td><td>5076</td></tr><tr><td>111</td><td>5086</td></tr><tr><td>110</td><td>5103</td></tr><tr><td>106</td><td>5365</td></tr><tr><td>105</td><td>5368</td></tr><tr><td>103</td><td>5529</td></tr><tr><td>101</td><td>5535</td></tr><tr><td>100</td><td>5543</td></tr><tr><td>96</td><td>5726</td></tr><tr><td>95</td><td>5727</td></tr><tr><td>93</td><td>5866</td></tr><tr><td>91</td><td>5867</td></tr><tr><td>90</td><td>5873</td></tr><tr><td>85</td><td>6008</td></tr><tr><td>81</td><td>6098</td></tr><tr><td>80</td><td>6105</td></tr><tr><td>75</td><td>6199</td></tr><tr><td>73</td><td>6270</td></tr><tr><td>71</td><td>6271</td></tr><tr><td>70</td><td>6273</td></tr><tr><td>65</td><td>6345</td></tr><tr><td>60</td><td>6398</td></tr><tr><td>55</td><td>6452</td></tr><tr><td>51</td><td>6477</td></tr><tr><td>50</td><td>6480</td></tr><tr><td>45</td><td>6520</td></tr><tr><td>40</td><td>6536</td></tr><tr><td>35</td><td>6569</td></tr><tr><td>30</td><td>6578</td></tr><tr><td>25</td><td>6602</td></tr><tr><td>20</td><td>6606</td></tr><tr><td>15</td><td>6619</td></tr><tr><td>10</td><td>6620</td></tr><tr><td>0</td><td>6631</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-6-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation individuelle) : 115087 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-6-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-6-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>380</td><td>2</td></tr><tr><td>375</td><td>3</td></tr><tr><td>370</td><td>4</td></tr><tr><td>360</td><td>7</td></tr><tr><td>350</td><td>9</td></tr><tr><td>340</td><td>10</td></tr><tr><td>335</td><td>11</td></tr><tr><td>330</td><td>12</td></tr><tr><td>325</td><td>18</td></tr><tr><td>320</td><td>19</td></tr><tr><td>310</td><td>25</td></tr><tr><td>301</td><td>36</td></tr><tr><td>300</td><td>37</td></tr><tr><td>295</td><td>59</td></tr><tr><td>291</td><td>61</td></tr><tr><td>290</td><td>67</td></tr><tr><td>285</td><td>113</td></tr><tr><td>283</td><td>120</td></tr><tr><td>281</td><td>121</td></tr><tr><td>280</td><td>127</td></tr><tr><td>275</td><td>198</td></tr><tr><td>273</td><td>211</td></tr><tr><td>271</td><td>213</td></tr><tr><td>270</td><td>223</td></tr><tr><td>268</td><td>363</td></tr><tr><td>266</td><td>364</td></tr><tr><td>265</td><td>367</td></tr><tr><td>263</td><td>397</td></tr><tr><td>261</td><td>409</td></tr><tr><td>260</td><td>424</td></tr><tr><td>256</td><td>665</td></tr><tr><td>255</td><td>670</td></tr><tr><td>253</td><td>727</td></tr><tr><td>251</td><td>750</td></tr><tr><td>250</td><td>790</td></tr><tr><td>248</td><td>1283</td></tr><tr><td>246</td><td>1290</td></tr><tr><td>245</td><td>1293</td></tr><tr><td>243</td><td>1401</td></tr><tr><td>241</td><td>1428</td></tr><tr><td>240</td><td>1511</td></tr><tr><td>238</td><td>2267</td></tr><tr><td>236</td><td>2269</td></tr><tr><td>235</td><td>2288</td></tr><tr><td>233</td><td>2502</td></tr><tr><td>231</td><td>2553</td></tr><tr><td>230</td><td>2706</td></tr><tr><td>228</td><td>4023</td></tr><tr><td>226</td><td>4031</td></tr><tr><td>225</td><td>4058</td></tr><tr><td>223</td><td>4380</td></tr><tr><td>221</td><td>4464</td></tr><tr><td>220</td><td>4756</td></tr><tr><td>218</td><td>6918</td></tr><tr><td>216</td><td>6928</td></tr><tr><td>215</td><td>6974</td></tr><tr><td>213</td><td>7478</td></tr><tr><td>211</td><td>7602</td></tr><tr><td>210</td><td>8000</td></tr><tr><td>208</td><td>11508</td></tr><tr><td>206</td><td>11535</td></tr><tr><td>205</td><td>11599</td></tr><tr><td>203</td><td>12407</td></tr><tr><td>201</td><td>12572</td></tr><tr><td>200</td><td>13102</td></tr><tr><td>198</td><td>17771</td></tr><tr><td>196</td><td>17808</td></tr><tr><td>195</td><td>17906</td></tr><tr><td>193</td><td>19039</td></tr><tr><td>191</td><td>19240</td></tr><tr><td>190</td><td>19920</td></tr><tr><td>188</td><td>25435</td></tr><tr><td>186</td><td>25467</td></tr><tr><td>185</td><td>25598</td></tr><tr><td>183</td><td>27217</td></tr><tr><td>181</td><td>27480</td></tr><tr><td>180</td><td>28244</td></tr><tr><td>178</td><td>34184</td></tr><tr><td>176</td><td>34226</td></tr><tr><td>175</td><td>34341</td></tr><tr><td>173</td><td>36440</td></tr><tr><td>171</td><td>36704</td></tr><tr><td>170</td><td>37506</td></tr><tr><td>168</td><td>43892</td></tr><tr><td>166</td><td>43919</td></tr><tr><td>165</td><td>44045</td></tr><tr><td>163</td><td>46655</td></tr><tr><td>161</td><td>46885</td></tr><tr><td>160</td><td>47722</td></tr><tr><td>158</td><td>54376</td></tr><tr><td>156</td><td>54397</td></tr><tr><td>155</td><td>54490</td></tr><tr><td>153</td><td>57371</td></tr><tr><td>151</td><td>57586</td></tr><tr><td>150</td><td>58297</td></tr><tr><td>148</td><td>65305</td></tr><tr><td>146</td><td>65324</td></tr><tr><td>145</td><td>65383</td></tr><tr><td>143</td><td>68604</td></tr><tr><td>141</td><td>68788</td></tr><tr><td>140</td><td>69420</td></tr><tr><td>138</td><td>75565</td></tr><tr><td>136</td><td>75577</td></tr><tr><td>135</td><td>75633</td></tr><tr><td>133</td><td>79004</td></tr><tr><td>131</td><td>79135</td></tr><tr><td>130</td><td>79601</td></tr><tr><td>128</td><td>85360</td></tr><tr><td>126</td><td>85367</td></tr><tr><td>125</td><td>85396</td></tr><tr><td>123</td><td>88357</td></tr><tr><td>121</td><td>88453</td></tr><tr><td>120</td><td>88785</td></tr><tr><td>118</td><td>93025</td></tr><tr><td>116</td><td>93029</td></tr><tr><td>115</td><td>93043</td></tr><tr><td>113</td><td>95570</td></tr><tr><td>111</td><td>95634</td></tr><tr><td>110</td><td>95845</td></tr><tr><td>108</td><td>99309</td></tr><tr><td>106</td><td>99312</td></tr><tr><td>105</td><td>99318</td></tr><tr><td>103</td><td>101382</td></tr><tr><td>101</td><td>101418</td></tr><tr><td>100</td><td>101537</td></tr><tr><td>98</td><td>104142</td></tr><tr><td>95</td><td>104144</td></tr><tr><td>93</td><td>105718</td></tr><tr><td>91</td><td>105751</td></tr><tr><td>90</td><td>105823</td></tr><tr><td>86</td><td>107563</td></tr><tr><td>85</td><td>107564</td></tr><tr><td>83</td><td>108648</td></tr><tr><td>81</td><td>108659</td></tr><tr><td>80</td><td>108701</td></tr><tr><td>75</td><td>109950</td></tr><tr><td>73</td><td>110552</td></tr><tr><td>71</td><td>110557</td></tr><tr><td>70</td><td>110574</td></tr><tr><td>65</td><td>111434</td></tr><tr><td>63</td><td>111825</td></tr><tr><td>61</td><td>111829</td></tr><tr><td>60</td><td>111844</td></tr><tr><td>55</td><td>112404</td></tr><tr><td>53</td><td>112608</td></tr><tr><td>51</td><td>112609</td></tr><tr><td>50</td><td>112615</td></tr><tr><td>45</td><td>113062</td></tr><tr><td>43</td><td>113173</td></tr><tr><td>41</td><td>113174</td></tr><tr><td>40</td><td>113176</td></tr><tr><td>35</td><td>113412</td></tr><tr><td>31</td><td>113464</td></tr><tr><td>30</td><td>113466</td></tr><tr><td>25</td><td>113675</td></tr><tr><td>20</td><td>113695</td></tr><tr><td>15</td><td>113831</td></tr><tr><td>10</td><td>113839</td></tr><tr><td>5</td><td>114017</td></tr><tr><td>0</td><td>114025</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-7-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation individuelle) : 102525 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-7-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-7-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>395</td><td>1</td></tr><tr><td>371</td><td>3</td></tr><tr><td>370</td><td>4</td></tr><tr><td>360</td><td>10</td></tr><tr><td>355</td><td>14</td></tr><tr><td>350</td><td>15</td></tr><tr><td>345</td><td>20</td></tr><tr><td>340</td><td>22</td></tr><tr><td>335</td><td>30</td></tr><tr><td>331</td><td>32</td></tr><tr><td>330</td><td>33</td></tr><tr><td>325</td><td>51</td></tr><tr><td>321</td><td>52</td></tr><tr><td>320</td><td>53</td></tr><tr><td>315</td><td>75</td></tr><tr><td>310</td><td>78</td></tr><tr><td>305</td><td>121</td></tr><tr><td>301</td><td>133</td></tr><tr><td>300</td><td>136</td></tr><tr><td>295</td><td>204</td></tr><tr><td>293</td><td>221</td></tr><tr><td>291</td><td>227</td></tr><tr><td>290</td><td>236</td></tr><tr><td>285</td><td>388</td></tr><tr><td>283</td><td>418</td></tr><tr><td>281</td><td>430</td></tr><tr><td>280</td><td>446</td></tr><tr><td>278</td><td>706</td></tr><tr><td>275</td><td>707</td></tr><tr><td>273</td><td>776</td></tr><tr><td>271</td><td>793</td></tr><tr><td>270</td><td>815</td></tr><tr><td>268</td><td>1254</td></tr><tr><td>266</td><td>1255</td></tr><tr><td>265</td><td>1262</td></tr><tr><td>263</td><td>1371</td></tr><tr><td>261</td><td>1401</td></tr><tr><td>260</td><td>1454</td></tr><tr><td>258</td><td>2147</td></tr><tr><td>256</td><td>2152</td></tr><tr><td>255</td><td>2158</td></tr><tr><td>253</td><td>2348</td></tr><tr><td>251</td><td>2403</td></tr><tr><td>250</td><td>2518</td></tr><tr><td>248</td><td>3673</td></tr><tr><td>246</td><td>3678</td></tr><tr><td>245</td><td>3688</td></tr><tr><td>243</td><td>3969</td></tr><tr><td>241</td><td>4040</td></tr><tr><td>240</td><td>4224</td></tr><tr><td>238</td><td>5937</td></tr><tr><td>236</td><td>5954</td></tr><tr><td>235</td><td>5984</td></tr><tr><td>233</td><td>6452</td></tr><tr><td>231</td><td>6591</td></tr><tr><td>230</td><td>6929</td></tr><tr><td>228</td><td>9461</td></tr><tr><td>226</td><td>9482</td></tr><tr><td>225</td><td>9539</td></tr><tr><td>223</td><td>10254</td></tr><tr><td>221</td><td>10427</td></tr><tr><td>220</td><td>10917</td></tr><tr><td>218</td><td>14621</td></tr><tr><td>216</td><td>14648</td></tr><tr><td>215</td><td>14722</td></tr><tr><td>213</td><td>15650</td></tr><tr><td>211</td><td>15904</td></tr><tr><td>210</td><td>16587</td></tr><tr><td>208</td><td>21573</td></tr><tr><td>206</td><td>21614</td></tr><tr><td>205</td><td>21725</td></tr><tr><td>203</td><td>22912</td></tr><tr><td>201</td><td>23189</td></tr><tr><td>200</td><td>24012</td></tr><tr><td>198</td><td>29946</td></tr><tr><td>196</td><td>29980</td></tr><tr><td>195</td><td>30096</td></tr><tr><td>193</td><td>31570</td></tr><tr><td>191</td><td>31876</td></tr><tr><td>190</td><td>32730</td></tr><tr><td>188</td><td>38784</td></tr><tr><td>186</td><td>38850</td></tr><tr><td>185</td><td>39006</td></tr><tr><td>183</td><td>40923</td></tr><tr><td>181</td><td>41233</td></tr><tr><td>180</td><td>42210</td></tr><tr><td>178</td><td>48344</td></tr><tr><td>176</td><td>48389</td></tr><tr><td>175</td><td>48518</td></tr><tr><td>173</td><td>50506</td></tr><tr><td>171</td><td>50799</td></tr><tr><td>170</td><td>51683</td></tr><tr><td>168</td><td>57728</td></tr><tr><td>166</td><td>57771</td></tr><tr><td>165</td><td>57905</td></tr><tr><td>163</td><td>60107</td></tr><tr><td>161</td><td>60376</td></tr><tr><td>160</td><td>61190</td></tr><tr><td>158</td><td>66698</td></tr><tr><td>156</td><td>66729</td></tr><tr><td>155</td><td>66805</td></tr><tr><td>153</td><td>69093</td></tr><tr><td>151</td><td>69287</td></tr><tr><td>150</td><td>69921</td></tr><tr><td>148</td><td>74952</td></tr><tr><td>146</td><td>74967</td></tr><tr><td>145</td><td>75021</td></tr><tr><td>143</td><td>77163</td></tr><tr><td>141</td><td>77302</td></tr><tr><td>140</td><td>77771</td></tr><tr><td>138</td><td>81781</td></tr><tr><td>136</td><td>81793</td></tr><tr><td>135</td><td>81818</td></tr><tr><td>133</td><td>83880</td></tr><tr><td>131</td><td>83969</td></tr><tr><td>130</td><td>84314</td></tr><tr><td>128</td><td>87776</td></tr><tr><td>126</td><td>87786</td></tr><tr><td>125</td><td>87812</td></tr><tr><td>123</td><td>89357</td></tr><tr><td>121</td><td>89405</td></tr><tr><td>120</td><td>89612</td></tr><tr><td>118</td><td>92034</td></tr><tr><td>116</td><td>92038</td></tr><tr><td>115</td><td>92046</td></tr><tr><td>113</td><td>93286</td></tr><tr><td>111</td><td>93328</td></tr><tr><td>110</td><td>93430</td></tr><tr><td>108</td><td>95207</td></tr><tr><td>106</td><td>95209</td></tr><tr><td>105</td><td>95211</td></tr><tr><td>103</td><td>96156</td></tr><tr><td>101</td><td>96175</td></tr><tr><td>100</td><td>96244</td></tr><tr><td>96</td><td>97395</td></tr><tr><td>95</td><td>97397</td></tr><tr><td>93</td><td>98100</td></tr><tr><td>91</td><td>98108</td></tr><tr><td>90</td><td>98148</td></tr><tr><td>85</td><td>98913</td></tr><tr><td>83</td><td>99309</td></tr><tr><td>81</td><td>99314</td></tr><tr><td>80</td><td>99329</td></tr><tr><td>75</td><td>99862</td></tr><tr><td>73</td><td>100084</td></tr><tr><td>71</td><td>100087</td></tr><tr><td>70</td><td>100095</td></tr><tr><td>65</td><td>100468</td></tr><tr><td>63</td><td>100601</td></tr><tr><td>61</td><td>100603</td></tr><tr><td>60</td><td>100607</td></tr><tr><td>55</td><td>100849</td></tr><tr><td>53</td><td>100909</td></tr><tr><td>51</td><td>100910</td></tr><tr><td>50</td><td>100911</td></tr><tr><td>45</td><td>101098</td></tr><tr><td>43</td><td>101139</td></tr><tr><td>40</td><td>101140</td></tr><tr><td>35</td><td>101261</td></tr><tr><td>31</td><td>101282</td></tr><tr><td>30</td><td>101283</td></tr><tr><td>25</td><td>101420</td></tr><tr><td>20</td><td>101429</td></tr><tr><td>15</td><td>101509</td></tr><tr><td>10</td><td>101516</td></tr><tr><td>5</td><td>101669</td></tr><tr><td>0</td><td>101672</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-8-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation individuelle) : 89067 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-8-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-8-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>395</td><td>2</td></tr><tr><td>390</td><td>3</td></tr><tr><td>385</td><td>6</td></tr><tr><td>380</td><td>7</td></tr><tr><td>370</td><td>9</td></tr><tr><td>360</td><td>11</td></tr><tr><td>355</td><td>17</td></tr><tr><td>350</td><td>18</td></tr><tr><td>345</td><td>29</td></tr><tr><td>340</td><td>30</td></tr><tr><td>335</td><td>49</td></tr><tr><td>333</td><td>51</td></tr><tr><td>330</td><td>52</td></tr><tr><td>325</td><td>89</td></tr><tr><td>323</td><td>94</td></tr><tr><td>321</td><td>95</td></tr><tr><td>320</td><td>96</td></tr><tr><td>315</td><td>171</td></tr><tr><td>313</td><td>183</td></tr><tr><td>311</td><td>185</td></tr><tr><td>310</td><td>187</td></tr><tr><td>305</td><td>316</td></tr><tr><td>303</td><td>338</td></tr><tr><td>301</td><td>347</td></tr><tr><td>300</td><td>359</td></tr><tr><td>296</td><td>560</td></tr><tr><td>295</td><td>563</td></tr><tr><td>293</td><td>599</td></tr><tr><td>291</td><td>610</td></tr><tr><td>290</td><td>637</td></tr><tr><td>288</td><td>985</td></tr><tr><td>286</td><td>987</td></tr><tr><td>285</td><td>989</td></tr><tr><td>283</td><td>1046</td></tr><tr><td>281</td><td>1068</td></tr><tr><td>280</td><td>1102</td></tr><tr><td>278</td><td>1647</td></tr><tr><td>276</td><td>1649</td></tr><tr><td>275</td><td>1650</td></tr><tr><td>273</td><td>1769</td></tr><tr><td>271</td><td>1800</td></tr><tr><td>270</td><td>1862</td></tr><tr><td>268</td><td>2713</td></tr><tr><td>266</td><td>2715</td></tr><tr><td>265</td><td>2723</td></tr><tr><td>263</td><td>2917</td></tr><tr><td>261</td><td>2959</td></tr><tr><td>260</td><td>3097</td></tr><tr><td>258</td><td>4357</td></tr><tr><td>256</td><td>4363</td></tr><tr><td>255</td><td>4387</td></tr><tr><td>253</td><td>4707</td></tr><tr><td>251</td><td>4792</td></tr><tr><td>250</td><td>4985</td></tr><tr><td>248</td><td>6777</td></tr><tr><td>246</td><td>6791</td></tr><tr><td>245</td><td>6810</td></tr><tr><td>243</td><td>7251</td></tr><tr><td>241</td><td>7390</td></tr><tr><td>240</td><td>7707</td></tr><tr><td>238</td><td>10283</td></tr><tr><td>236</td><td>10299</td></tr><tr><td>235</td><td>10330</td></tr><tr><td>233</td><td>10974</td></tr><tr><td>231</td><td>11179</td></tr><tr><td>230</td><td>11641</td></tr><tr><td>228</td><td>15110</td></tr><tr><td>226</td><td>15141</td></tr><tr><td>225</td><td>15202</td></tr><tr><td>223</td><td>16023</td></tr><tr><td>221</td><td>16277</td></tr><tr><td>220</td><td>16912</td></tr><tr><td>218</td><td>21310</td></tr><tr><td>216</td><td>21345</td></tr><tr><td>215</td><td>21423</td></tr><tr><td>213</td><td>22551</td></tr><tr><td>211</td><td>22855</td></tr><tr><td>210</td><td>23656</td></tr><tr><td>208</td><td>29102</td></tr><tr><td>206</td><td>29145</td></tr><tr><td>205</td><td>29261</td></tr><tr><td>203</td><td>30544</td></tr><tr><td>201</td><td>30847</td></tr><tr><td>200</td><td>31772</td></tr><tr><td>198</td><td>37808</td></tr><tr><td>196</td><td>37862</td></tr><tr><td>195</td><td>37990</td></tr><tr><td>193</td><td>39486</td></tr><tr><td>191</td><td>39774</td></tr><tr><td>190</td><td>40656</td></tr><tr><td>188</td><td>46304</td></tr><tr><td>186</td><td>46360</td></tr><tr><td>185</td><td>46488</td></tr><tr><td>183</td><td>48044</td></tr><tr><td>181</td><td>48363</td></tr><tr><td>180</td><td>49205</td></tr><tr><td>178</td><td>54453</td></tr><tr><td>176</td><td>54504</td></tr><tr><td>175</td><td>54636</td></tr><tr><td>173</td><td>56182</td></tr><tr><td>171</td><td>56405</td></tr><tr><td>170</td><td>57187</td></tr><tr><td>168</td><td>61740</td></tr><tr><td>166</td><td>61762</td></tr><tr><td>165</td><td>61836</td></tr><tr><td>163</td><td>63443</td></tr><tr><td>161</td><td>63651</td></tr><tr><td>160</td><td>64223</td></tr><tr><td>158</td><td>68111</td></tr><tr><td>156</td><td>68128</td></tr><tr><td>155</td><td>68180</td></tr><tr><td>153</td><td>69613</td></tr><tr><td>151</td><td>69763</td></tr><tr><td>150</td><td>70201</td></tr><tr><td>148</td><td>73570</td></tr><tr><td>146</td><td>73579</td></tr><tr><td>145</td><td>73604</td></tr><tr><td>143</td><td>74838</td></tr><tr><td>141</td><td>74937</td></tr><tr><td>140</td><td>75224</td></tr><tr><td>138</td><td>77752</td></tr><tr><td>136</td><td>77754</td></tr><tr><td>135</td><td>77777</td></tr><tr><td>133</td><td>78848</td></tr><tr><td>131</td><td>78914</td></tr><tr><td>130</td><td>79115</td></tr><tr><td>128</td><td>81126</td></tr><tr><td>126</td><td>81129</td></tr><tr><td>125</td><td>81138</td></tr><tr><td>123</td><td>82020</td></tr><tr><td>121</td><td>82068</td></tr><tr><td>120</td><td>82203</td></tr><tr><td>118</td><td>83471</td></tr><tr><td>116</td><td>83473</td></tr><tr><td>115</td><td>83477</td></tr><tr><td>113</td><td>84078</td></tr><tr><td>111</td><td>84099</td></tr><tr><td>110</td><td>84146</td></tr><tr><td>106</td><td>85025</td></tr><tr><td>105</td><td>85028</td></tr><tr><td>103</td><td>85485</td></tr><tr><td>101</td><td>85499</td></tr><tr><td>100</td><td>85528</td></tr><tr><td>96</td><td>86184</td></tr><tr><td>95</td><td>86185</td></tr><tr><td>93</td><td>86468</td></tr><tr><td>91</td><td>86471</td></tr><tr><td>90</td><td>86492</td></tr><tr><td>85</td><td>86868</td></tr><tr><td>83</td><td>87058</td></tr><tr><td>81</td><td>87061</td></tr><tr><td>80</td><td>87071</td></tr><tr><td>76</td><td>87351</td></tr><tr><td>75</td><td>87353</td></tr><tr><td>73</td><td>87455</td></tr><tr><td>71</td><td>87457</td></tr><tr><td>70</td><td>87466</td></tr><tr><td>65</td><td>87686</td></tr><tr><td>61</td><td>87743</td></tr><tr><td>60</td><td>87747</td></tr><tr><td>55</td><td>87897</td></tr><tr><td>53</td><td>87933</td></tr><tr><td>50</td><td>87934</td></tr><tr><td>45</td><td>88047</td></tr><tr><td>43</td><td>88072</td></tr><tr><td>41</td><td>88073</td></tr><tr><td>40</td><td>88074</td></tr><tr><td>35</td><td>88155</td></tr><tr><td>31</td><td>88173</td></tr><tr><td>30</td><td>88174</td></tr><tr><td>25</td><td>88264</td></tr><tr><td>21</td><td>88275</td></tr><tr><td>20</td><td>88276</td></tr><tr><td>15</td><td>88343</td></tr><tr><td>10</td><td>88345</td></tr><tr><td>5</td><td>88427</td></tr><tr><td>0</td><td>88429</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-9-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation individuelle) : 73800 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-9-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-9-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>400</td><td>1</td></tr><tr><td>385</td><td>3</td></tr><tr><td>380</td><td>7</td></tr><tr><td>375</td><td>10</td></tr><tr><td>370</td><td>12</td></tr><tr><td>365</td><td>17</td></tr><tr><td>360</td><td>18</td></tr><tr><td>355</td><td>26</td></tr><tr><td>350</td><td>28</td></tr><tr><td>345</td><td>48</td></tr><tr><td>340</td><td>51</td></tr><tr><td>335</td><td>105</td></tr><tr><td>331</td><td>112</td></tr><tr><td>330</td><td>114</td></tr><tr><td>326</td><td>198</td></tr><tr><td>325</td><td>199</td></tr><tr><td>323</td><td>211</td></tr><tr><td>321</td><td>215</td></tr><tr><td>320</td><td>220</td></tr><tr><td>315</td><td>363</td></tr><tr><td>313</td><td>377</td></tr><tr><td>311</td><td>380</td></tr><tr><td>310</td><td>386</td></tr><tr><td>305</td><td>636</td></tr><tr><td>303</td><td>674</td></tr><tr><td>301</td><td>680</td></tr><tr><td>300</td><td>701</td></tr><tr><td>298</td><td>1110</td></tr><tr><td>296</td><td>1111</td></tr><tr><td>295</td><td>1113</td></tr><tr><td>293</td><td>1186</td></tr><tr><td>291</td><td>1207</td></tr><tr><td>290</td><td>1232</td></tr><tr><td>288</td><td>1839</td></tr><tr><td>286</td><td>1841</td></tr><tr><td>285</td><td>1846</td></tr><tr><td>283</td><td>1947</td></tr><tr><td>281</td><td>1966</td></tr><tr><td>280</td><td>2021</td></tr><tr><td>278</td><td>2946</td></tr><tr><td>276</td><td>2950</td></tr><tr><td>275</td><td>2952</td></tr><tr><td>273</td><td>3151</td></tr><tr><td>271</td><td>3213</td></tr><tr><td>270</td><td>3310</td></tr><tr><td>268</td><td>4617</td></tr><tr><td>266</td><td>4619</td></tr><tr><td>265</td><td>4629</td></tr><tr><td>263</td><td>4895</td></tr><tr><td>261</td><td>4978</td></tr><tr><td>260</td><td>5155</td></tr><tr><td>258</td><td>6921</td></tr><tr><td>256</td><td>6932</td></tr><tr><td>255</td><td>6946</td></tr><tr><td>253</td><td>7381</td></tr><tr><td>251</td><td>7505</td></tr><tr><td>250</td><td>7740</td></tr><tr><td>248</td><td>10058</td></tr><tr><td>246</td><td>10072</td></tr><tr><td>245</td><td>10100</td></tr><tr><td>243</td><td>10673</td></tr><tr><td>241</td><td>10845</td></tr><tr><td>240</td><td>11240</td></tr><tr><td>238</td><td>14257</td></tr><tr><td>236</td><td>14272</td></tr><tr><td>235</td><td>14314</td></tr><tr><td>233</td><td>15041</td></tr><tr><td>231</td><td>15268</td></tr><tr><td>230</td><td>15771</td></tr><tr><td>228</td><td>19486</td></tr><tr><td>226</td><td>19515</td></tr><tr><td>225</td><td>19573</td></tr><tr><td>223</td><td>20472</td></tr><tr><td>221</td><td>20760</td></tr><tr><td>220</td><td>21427</td></tr><tr><td>218</td><td>25882</td></tr><tr><td>216</td><td>25920</td></tr><tr><td>215</td><td>26003</td></tr><tr><td>213</td><td>27043</td></tr><tr><td>211</td><td>27321</td></tr><tr><td>210</td><td>28081</td></tr><tr><td>208</td><td>33039</td></tr><tr><td>206</td><td>33074</td></tr><tr><td>205</td><td>33176</td></tr><tr><td>203</td><td>34326</td></tr><tr><td>201</td><td>34631</td></tr><tr><td>200</td><td>35457</td></tr><tr><td>198</td><td>40403</td></tr><tr><td>196</td><td>40446</td></tr><tr><td>195</td><td>40547</td></tr><tr><td>193</td><td>41692</td></tr><tr><td>191</td><td>41971</td></tr><tr><td>190</td><td>42752</td></tr><tr><td>188</td><td>46946</td></tr><tr><td>186</td><td>46978</td></tr><tr><td>185</td><td>47083</td></tr><tr><td>183</td><td>48201</td></tr><tr><td>181</td><td>48419</td></tr><tr><td>180</td><td>49107</td></tr><tr><td>178</td><td>52770</td></tr><tr><td>176</td><td>52797</td></tr><tr><td>175</td><td>52882</td></tr><tr><td>173</td><td>53916</td></tr><tr><td>171</td><td>54080</td></tr><tr><td>170</td><td>54624</td></tr><tr><td>168</td><td>57711</td></tr><tr><td>166</td><td>57731</td></tr><tr><td>165</td><td>57803</td></tr><tr><td>163</td><td>58775</td></tr><tr><td>161</td><td>58884</td></tr><tr><td>160</td><td>59282</td></tr><tr><td>158</td><td>61821</td></tr><tr><td>156</td><td>61835</td></tr><tr><td>155</td><td>61869</td></tr><tr><td>153</td><td>62688</td></tr><tr><td>151</td><td>62761</td></tr><tr><td>150</td><td>63032</td></tr><tr><td>148</td><td>64979</td></tr><tr><td>146</td><td>64988</td></tr><tr><td>145</td><td>65009</td></tr><tr><td>143</td><td>65672</td></tr><tr><td>141</td><td>65709</td></tr><tr><td>140</td><td>65863</td></tr><tr><td>138</td><td>67332</td></tr><tr><td>136</td><td>67333</td></tr><tr><td>135</td><td>67341</td></tr><tr><td>133</td><td>67918</td></tr><tr><td>131</td><td>67948</td></tr><tr><td>130</td><td>68060</td></tr><tr><td>126</td><td>69193</td></tr><tr><td>125</td><td>69196</td></tr><tr><td>123</td><td>69600</td></tr><tr><td>121</td><td>69618</td></tr><tr><td>120</td><td>69686</td></tr><tr><td>118</td><td>70385</td></tr><tr><td>116</td><td>70386</td></tr><tr><td>115</td><td>70393</td></tr><tr><td>113</td><td>70696</td></tr><tr><td>111</td><td>70706</td></tr><tr><td>110</td><td>70744</td></tr><tr><td>105</td><td>71238</td></tr><tr><td>103</td><td>71449</td></tr><tr><td>101</td><td>71452</td></tr><tr><td>100</td><td>71470</td></tr><tr><td>96</td><td>71816</td></tr><tr><td>95</td><td>71817</td></tr><tr><td>93</td><td>71966</td></tr><tr><td>91</td><td>71968</td></tr><tr><td>90</td><td>71970</td></tr><tr><td>86</td><td>72205</td></tr><tr><td>85</td><td>72206</td></tr><tr><td>83</td><td>72297</td></tr><tr><td>81</td><td>72300</td></tr><tr><td>80</td><td>72306</td></tr><tr><td>75</td><td>72479</td></tr><tr><td>71</td><td>72552</td></tr><tr><td>70</td><td>72554</td></tr><tr><td>65</td><td>72725</td></tr><tr><td>61</td><td>72757</td></tr><tr><td>60</td><td>72761</td></tr><tr><td>55</td><td>72868</td></tr><tr><td>51</td><td>72894</td></tr><tr><td>50</td><td>72895</td></tr><tr><td>45</td><td>73005</td></tr><tr><td>41</td><td>73028</td></tr><tr><td>40</td><td>73030</td></tr><tr><td>35</td><td>73115</td></tr><tr><td>31</td><td>73123</td></tr><tr><td>30</td><td>73124</td></tr><tr><td>25</td><td>73197</td></tr><tr><td>20</td><td>73204</td></tr><tr><td>15</td><td>73274</td></tr><tr><td>10</td><td>73278</td></tr><tr><td>5</td><td>73338</td></tr><tr><td>0</td><td>73339</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-10-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation individuelle) : 44757 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-10-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-10-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>376</td><td>3</td></tr><tr><td>370</td><td>4</td></tr><tr><td>365</td><td>7</td></tr><tr><td>360</td><td>9</td></tr><tr><td>355</td><td>25</td></tr><tr><td>350</td><td>27</td></tr><tr><td>345</td><td>52</td></tr><tr><td>341</td><td>55</td></tr><tr><td>340</td><td>57</td></tr><tr><td>335</td><td>110</td></tr><tr><td>333</td><td>120</td></tr><tr><td>331</td><td>122</td></tr><tr><td>330</td><td>125</td></tr><tr><td>325</td><td>243</td></tr><tr><td>323</td><td>259</td></tr><tr><td>321</td><td>262</td></tr><tr><td>320</td><td>265</td></tr><tr><td>318</td><td>467</td></tr><tr><td>316</td><td>468</td></tr><tr><td>315</td><td>469</td></tr><tr><td>313</td><td>501</td></tr><tr><td>311</td><td>508</td></tr><tr><td>310</td><td>513</td></tr><tr><td>306</td><td>847</td></tr><tr><td>305</td><td>849</td></tr><tr><td>303</td><td>909</td></tr><tr><td>301</td><td>919</td></tr><tr><td>300</td><td>935</td></tr><tr><td>296</td><td>1407</td></tr><tr><td>295</td><td>1409</td></tr><tr><td>293</td><td>1500</td></tr><tr><td>291</td><td>1527</td></tr><tr><td>290</td><td>1562</td></tr><tr><td>288</td><td>2245</td></tr><tr><td>286</td><td>2247</td></tr><tr><td>285</td><td>2248</td></tr><tr><td>283</td><td>2378</td></tr><tr><td>281</td><td>2423</td></tr><tr><td>280</td><td>2501</td></tr><tr><td>278</td><td>3573</td></tr><tr><td>276</td><td>3575</td></tr><tr><td>275</td><td>3579</td></tr><tr><td>273</td><td>3753</td></tr><tr><td>271</td><td>3827</td></tr><tr><td>270</td><td>3945</td></tr><tr><td>268</td><td>5260</td></tr><tr><td>266</td><td>5262</td></tr><tr><td>265</td><td>5272</td></tr><tr><td>263</td><td>5565</td></tr><tr><td>261</td><td>5667</td></tr><tr><td>260</td><td>5836</td></tr><tr><td>258</td><td>7562</td></tr><tr><td>256</td><td>7568</td></tr><tr><td>255</td><td>7586</td></tr><tr><td>253</td><td>7953</td></tr><tr><td>251</td><td>8095</td></tr><tr><td>250</td><td>8336</td></tr><tr><td>248</td><td>10557</td></tr><tr><td>246</td><td>10566</td></tr><tr><td>245</td><td>10586</td></tr><tr><td>243</td><td>11060</td></tr><tr><td>241</td><td>11246</td></tr><tr><td>240</td><td>11576</td></tr><tr><td>238</td><td>14168</td></tr><tr><td>236</td><td>14184</td></tr><tr><td>235</td><td>14213</td></tr><tr><td>233</td><td>14821</td></tr><tr><td>231</td><td>15028</td></tr><tr><td>230</td><td>15424</td></tr><tr><td>228</td><td>18352</td></tr><tr><td>226</td><td>18364</td></tr><tr><td>225</td><td>18405</td></tr><tr><td>223</td><td>18992</td></tr><tr><td>221</td><td>19214</td></tr><tr><td>220</td><td>19660</td></tr><tr><td>218</td><td>22844</td></tr><tr><td>216</td><td>22863</td></tr><tr><td>215</td><td>22913</td></tr><tr><td>213</td><td>23549</td></tr><tr><td>211</td><td>23717</td></tr><tr><td>210</td><td>24221</td></tr><tr><td>208</td><td>27359</td></tr><tr><td>206</td><td>27383</td></tr><tr><td>205</td><td>27436</td></tr><tr><td>203</td><td>28074</td></tr><tr><td>201</td><td>28242</td></tr><tr><td>200</td><td>28698</td></tr><tr><td>198</td><td>31576</td></tr><tr><td>196</td><td>31589</td></tr><tr><td>195</td><td>31637</td></tr><tr><td>193</td><td>32211</td></tr><tr><td>191</td><td>32335</td></tr><tr><td>190</td><td>32727</td></tr><tr><td>188</td><td>34895</td></tr><tr><td>186</td><td>34916</td></tr><tr><td>185</td><td>34963</td></tr><tr><td>183</td><td>35468</td></tr><tr><td>181</td><td>35561</td></tr><tr><td>180</td><td>35815</td></tr><tr><td>178</td><td>37447</td></tr><tr><td>176</td><td>37456</td></tr><tr><td>175</td><td>37495</td></tr><tr><td>173</td><td>37925</td></tr><tr><td>171</td><td>37987</td></tr><tr><td>170</td><td>38179</td></tr><tr><td>168</td><td>39476</td></tr><tr><td>166</td><td>39484</td></tr><tr><td>165</td><td>39506</td></tr><tr><td>163</td><td>39824</td></tr><tr><td>161</td><td>39861</td></tr><tr><td>160</td><td>39994</td></tr><tr><td>158</td><td>40893</td></tr><tr><td>156</td><td>40896</td></tr><tr><td>155</td><td>40914</td></tr><tr><td>153</td><td>41184</td></tr><tr><td>151</td><td>41209</td></tr><tr><td>150</td><td>41297</td></tr><tr><td>148</td><td>41978</td></tr><tr><td>146</td><td>41980</td></tr><tr><td>145</td><td>41983</td></tr><tr><td>143</td><td>42186</td></tr><tr><td>141</td><td>42193</td></tr><tr><td>140</td><td>42225</td></tr><tr><td>138</td><td>42697</td></tr><tr><td>136</td><td>42699</td></tr><tr><td>135</td><td>42701</td></tr><tr><td>133</td><td>42855</td></tr><tr><td>131</td><td>42862</td></tr><tr><td>130</td><td>42884</td></tr><tr><td>126</td><td>43221</td></tr><tr><td>125</td><td>43223</td></tr><tr><td>123</td><td>43349</td></tr><tr><td>121</td><td>43352</td></tr><tr><td>120</td><td>43366</td></tr><tr><td>118</td><td>43580</td></tr><tr><td>116</td><td>43581</td></tr><tr><td>115</td><td>43582</td></tr><tr><td>113</td><td>43654</td></tr><tr><td>111</td><td>43655</td></tr><tr><td>110</td><td>43659</td></tr><tr><td>106</td><td>43829</td></tr><tr><td>105</td><td>43831</td></tr><tr><td>101</td><td>43877</td></tr><tr><td>100</td><td>43882</td></tr><tr><td>96</td><td>44012</td></tr><tr><td>95</td><td>44013</td></tr><tr><td>90</td><td>44039</td></tr><tr><td>85</td><td>44122</td></tr><tr><td>81</td><td>44150</td></tr><tr><td>80</td><td>44152</td></tr><tr><td>75</td><td>44215</td></tr><tr><td>70</td><td>44232</td></tr><tr><td>65</td><td>44294</td></tr><tr><td>63</td><td>44301</td></tr><tr><td>61</td><td>44302</td></tr><tr><td>60</td><td>44303</td></tr><tr><td>55</td><td>44360</td></tr><tr><td>50</td><td>44367</td></tr><tr><td>45</td><td>44406</td></tr><tr><td>40</td><td>44409</td></tr><tr><td>30</td><td>44435</td></tr><tr><td>25</td><td>44469</td></tr><tr><td>20</td><td>44471</td></tr><tr><td>10</td><td>44492</td></tr><tr><td>0</td><td>44518</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-11-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation individuelle) : 8818 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-11-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-11-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>395</td><td>1</td></tr><tr><td>390</td><td>2</td></tr><tr><td>385</td><td>6</td></tr><tr><td>380</td><td>8</td></tr><tr><td>375</td><td>16</td></tr><tr><td>370</td><td>17</td></tr><tr><td>365</td><td>22</td></tr><tr><td>360</td><td>23</td></tr><tr><td>355</td><td>48</td></tr><tr><td>350</td><td>53</td></tr><tr><td>345</td><td>81</td></tr><tr><td>341</td><td>84</td></tr><tr><td>340</td><td>85</td></tr><tr><td>338</td><td>146</td></tr><tr><td>335</td><td>147</td></tr><tr><td>330</td><td>155</td></tr><tr><td>325</td><td>242</td></tr><tr><td>323</td><td>253</td></tr><tr><td>321</td><td>255</td></tr><tr><td>320</td><td>256</td></tr><tr><td>318</td><td>399</td></tr><tr><td>315</td><td>400</td></tr><tr><td>313</td><td>416</td></tr><tr><td>310</td><td>418</td></tr><tr><td>305</td><td>598</td></tr><tr><td>303</td><td>630</td></tr><tr><td>301</td><td>635</td></tr><tr><td>300</td><td>640</td></tr><tr><td>296</td><td>925</td></tr><tr><td>295</td><td>926</td></tr><tr><td>293</td><td>961</td></tr><tr><td>291</td><td>964</td></tr><tr><td>290</td><td>973</td></tr><tr><td>288</td><td>1276</td></tr><tr><td>286</td><td>1277</td></tr><tr><td>285</td><td>1278</td></tr><tr><td>283</td><td>1340</td></tr><tr><td>281</td><td>1352</td></tr><tr><td>280</td><td>1369</td></tr><tr><td>276</td><td>1773</td></tr><tr><td>275</td><td>1775</td></tr><tr><td>273</td><td>1837</td></tr><tr><td>271</td><td>1859</td></tr><tr><td>270</td><td>1881</td></tr><tr><td>268</td><td>2345</td></tr><tr><td>266</td><td>2346</td></tr><tr><td>265</td><td>2347</td></tr><tr><td>263</td><td>2432</td></tr><tr><td>261</td><td>2454</td></tr><tr><td>260</td><td>2492</td></tr><tr><td>258</td><td>3036</td></tr><tr><td>256</td><td>3037</td></tr><tr><td>255</td><td>3038</td></tr><tr><td>253</td><td>3129</td></tr><tr><td>251</td><td>3168</td></tr><tr><td>250</td><td>3208</td></tr><tr><td>248</td><td>3729</td></tr><tr><td>246</td><td>3733</td></tr><tr><td>245</td><td>3739</td></tr><tr><td>243</td><td>3820</td></tr><tr><td>241</td><td>3854</td></tr><tr><td>240</td><td>3929</td></tr><tr><td>238</td><td>4493</td></tr><tr><td>236</td><td>4496</td></tr><tr><td>235</td><td>4500</td></tr><tr><td>233</td><td>4617</td></tr><tr><td>231</td><td>4649</td></tr><tr><td>230</td><td>4710</td></tr><tr><td>228</td><td>5266</td></tr><tr><td>226</td><td>5268</td></tr><tr><td>225</td><td>5278</td></tr><tr><td>223</td><td>5381</td></tr><tr><td>221</td><td>5415</td></tr><tr><td>220</td><td>5469</td></tr><tr><td>218</td><td>6049</td></tr><tr><td>216</td><td>6054</td></tr><tr><td>215</td><td>6059</td></tr><tr><td>213</td><td>6142</td></tr><tr><td>211</td><td>6167</td></tr><tr><td>210</td><td>6221</td></tr><tr><td>208</td><td>6678</td></tr><tr><td>206</td><td>6682</td></tr><tr><td>205</td><td>6688</td></tr><tr><td>203</td><td>6762</td></tr><tr><td>201</td><td>6781</td></tr><tr><td>200</td><td>6824</td></tr><tr><td>198</td><td>7181</td></tr><tr><td>196</td><td>7186</td></tr><tr><td>195</td><td>7195</td></tr><tr><td>193</td><td>7263</td></tr><tr><td>191</td><td>7273</td></tr><tr><td>190</td><td>7305</td></tr><tr><td>186</td><td>7581</td></tr><tr><td>185</td><td>7586</td></tr><tr><td>183</td><td>7647</td></tr><tr><td>181</td><td>7653</td></tr><tr><td>180</td><td>7679</td></tr><tr><td>178</td><td>7869</td></tr><tr><td>176</td><td>7871</td></tr><tr><td>175</td><td>7873</td></tr><tr><td>173</td><td>7919</td></tr><tr><td>171</td><td>7925</td></tr><tr><td>170</td><td>7943</td></tr><tr><td>168</td><td>8107</td></tr><tr><td>166</td><td>8108</td></tr><tr><td>165</td><td>8112</td></tr><tr><td>163</td><td>8149</td></tr><tr><td>161</td><td>8155</td></tr><tr><td>160</td><td>8164</td></tr><tr><td>156</td><td>8293</td></tr><tr><td>155</td><td>8294</td></tr><tr><td>153</td><td>8313</td></tr><tr><td>151</td><td>8316</td></tr><tr><td>150</td><td>8327</td></tr><tr><td>146</td><td>8411</td></tr><tr><td>145</td><td>8412</td></tr><tr><td>143</td><td>8427</td></tr><tr><td>141</td><td>8430</td></tr><tr><td>140</td><td>8435</td></tr><tr><td>135</td><td>8505</td></tr><tr><td>133</td><td>8516</td></tr><tr><td>131</td><td>8517</td></tr><tr><td>130</td><td>8522</td></tr><tr><td>125</td><td>8563</td></tr><tr><td>121</td><td>8581</td></tr><tr><td>120</td><td>8582</td></tr><tr><td>115</td><td>8610</td></tr><tr><td>110</td><td>8616</td></tr><tr><td>105</td><td>8642</td></tr><tr><td>100</td><td>8650</td></tr><tr><td>95</td><td>8670</td></tr><tr><td>90</td><td>8676</td></tr><tr><td>85</td><td>8689</td></tr><tr><td>80</td><td>8691</td></tr><tr><td>75</td><td>8703</td></tr><tr><td>70</td><td>8706</td></tr><tr><td>65</td><td>8714</td></tr><tr><td>60</td><td>8717</td></tr><tr><td>55</td><td>8727</td></tr><tr><td>50</td><td>8728</td></tr><tr><td>45</td><td>8736</td></tr><tr><td>40</td><td>8737</td></tr><tr><td>30</td><td>8746</td></tr><tr><td>20</td><td>8753</td></tr><tr><td>15</td><td>8759</td></tr><tr><td>10</td><td>8761</td></tr><tr><td>0</td><td>8773</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-12-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation individuelle) : 5337 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-12-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-12-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>380</td><td>1</td></tr><tr><td>375</td><td>2</td></tr><tr><td>370</td><td>6</td></tr><tr><td>365</td><td>14</td></tr><tr><td>360</td><td>15</td></tr><tr><td>355</td><td>35</td></tr><tr><td>351</td><td>39</td></tr><tr><td>350</td><td>40</td></tr><tr><td>345</td><td>74</td></tr><tr><td>341</td><td>81</td></tr><tr><td>340</td><td>82</td></tr><tr><td>335</td><td>145</td></tr><tr><td>331</td><td>152</td></tr><tr><td>330</td><td>153</td></tr><tr><td>328</td><td>230</td></tr><tr><td>326</td><td>231</td></tr><tr><td>325</td><td>232</td></tr><tr><td>323</td><td>239</td></tr><tr><td>320</td><td>241</td></tr><tr><td>315</td><td>337</td></tr><tr><td>313</td><td>356</td></tr><tr><td>311</td><td>357</td></tr><tr><td>310</td><td>360</td></tr><tr><td>305</td><td>514</td></tr><tr><td>303</td><td>526</td></tr><tr><td>301</td><td>528</td></tr><tr><td>300</td><td>531</td></tr><tr><td>296</td><td>688</td></tr><tr><td>295</td><td>689</td></tr><tr><td>293</td><td>714</td></tr><tr><td>291</td><td>723</td></tr><tr><td>290</td><td>728</td></tr><tr><td>285</td><td>932</td></tr><tr><td>283</td><td>970</td></tr><tr><td>281</td><td>981</td></tr><tr><td>280</td><td>989</td></tr><tr><td>276</td><td>1243</td></tr><tr><td>275</td><td>1245</td></tr><tr><td>273</td><td>1294</td></tr><tr><td>271</td><td>1317</td></tr><tr><td>270</td><td>1330</td></tr><tr><td>268</td><td>1608</td></tr><tr><td>266</td><td>1609</td></tr><tr><td>265</td><td>1610</td></tr><tr><td>263</td><td>1652</td></tr><tr><td>261</td><td>1662</td></tr><tr><td>260</td><td>1683</td></tr><tr><td>258</td><td>1981</td></tr><tr><td>256</td><td>1982</td></tr><tr><td>255</td><td>1988</td></tr><tr><td>253</td><td>2040</td></tr><tr><td>251</td><td>2058</td></tr><tr><td>250</td><td>2089</td></tr><tr><td>248</td><td>2433</td></tr><tr><td>246</td><td>2434</td></tr><tr><td>245</td><td>2436</td></tr><tr><td>243</td><td>2502</td></tr><tr><td>241</td><td>2523</td></tr><tr><td>240</td><td>2560</td></tr><tr><td>238</td><td>2879</td></tr><tr><td>236</td><td>2882</td></tr><tr><td>235</td><td>2884</td></tr><tr><td>233</td><td>2926</td></tr><tr><td>231</td><td>2946</td></tr><tr><td>230</td><td>2983</td></tr><tr><td>226</td><td>3283</td></tr><tr><td>225</td><td>3287</td></tr><tr><td>223</td><td>3338</td></tr><tr><td>221</td><td>3354</td></tr><tr><td>220</td><td>3388</td></tr><tr><td>218</td><td>3661</td></tr><tr><td>216</td><td>3663</td></tr><tr><td>215</td><td>3670</td></tr><tr><td>213</td><td>3712</td></tr><tr><td>211</td><td>3723</td></tr><tr><td>210</td><td>3755</td></tr><tr><td>208</td><td>4018</td></tr><tr><td>206</td><td>4020</td></tr><tr><td>205</td><td>4024</td></tr><tr><td>203</td><td>4075</td></tr><tr><td>201</td><td>4089</td></tr><tr><td>200</td><td>4119</td></tr><tr><td>196</td><td>4348</td></tr><tr><td>195</td><td>4354</td></tr><tr><td>193</td><td>4379</td></tr><tr><td>191</td><td>4383</td></tr><tr><td>190</td><td>4405</td></tr><tr><td>186</td><td>4569</td></tr><tr><td>185</td><td>4571</td></tr><tr><td>183</td><td>4600</td></tr><tr><td>181</td><td>4609</td></tr><tr><td>180</td><td>4629</td></tr><tr><td>175</td><td>4744</td></tr><tr><td>173</td><td>4773</td></tr><tr><td>171</td><td>4777</td></tr><tr><td>170</td><td>4786</td></tr><tr><td>166</td><td>4869</td></tr><tr><td>165</td><td>4870</td></tr><tr><td>163</td><td>4878</td></tr><tr><td>161</td><td>4881</td></tr><tr><td>160</td><td>4888</td></tr><tr><td>158</td><td>4967</td></tr><tr><td>155</td><td>4968</td></tr><tr><td>153</td><td>4985</td></tr><tr><td>151</td><td>4988</td></tr><tr><td>150</td><td>4992</td></tr><tr><td>145</td><td>5056</td></tr><tr><td>143</td><td>5073</td></tr><tr><td>141</td><td>5076</td></tr><tr><td>140</td><td>5078</td></tr><tr><td>135</td><td>5122</td></tr><tr><td>130</td><td>5129</td></tr><tr><td>125</td><td>5164</td></tr><tr><td>123</td><td>5170</td></tr><tr><td>120</td><td>5171</td></tr><tr><td>115</td><td>5189</td></tr><tr><td>113</td><td>5192</td></tr><tr><td>110</td><td>5193</td></tr><tr><td>105</td><td>5210</td></tr><tr><td>100</td><td>5216</td></tr><tr><td>90</td><td>5222</td></tr><tr><td>85</td><td>5233</td></tr><tr><td>81</td><td>5235</td></tr><tr><td>80</td><td>5236</td></tr><tr><td>75</td><td>5246</td></tr><tr><td>70</td><td>5247</td></tr><tr><td>65</td><td>5254</td></tr><tr><td>60</td><td>5258</td></tr><tr><td>55</td><td>5266</td></tr><tr><td>50</td><td>5267</td></tr><tr><td>45</td><td>5277</td></tr><tr><td>40</td><td>5278</td></tr><tr><td>30</td><td>5281</td></tr><tr><td>20</td><td>5288</td></tr><tr><td>10</td><td>5293</td></tr><tr><td>0</td><td>5298</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-13-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation individuelle) : 2195 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-13-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-13-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>330</td><td>1</td></tr><tr><td>325</td><td>2</td></tr><tr><td>320</td><td>3</td></tr><tr><td>310</td><td>4</td></tr><tr><td>300</td><td>11</td></tr><tr><td>295</td><td>14</td></tr><tr><td>290</td><td>15</td></tr><tr><td>285</td><td>27</td></tr><tr><td>280</td><td>30</td></tr><tr><td>275</td><td>39</td></tr><tr><td>271</td><td>40</td></tr><tr><td>270</td><td>41</td></tr><tr><td>265</td><td>61</td></tr><tr><td>261</td><td>67</td></tr><tr><td>260</td><td>71</td></tr><tr><td>253</td><td>103</td></tr><tr><td>251</td><td>105</td></tr><tr><td>250</td><td>107</td></tr><tr><td>246</td><td>148</td></tr><tr><td>245</td><td>149</td></tr><tr><td>241</td><td>161</td></tr><tr><td>240</td><td>166</td></tr><tr><td>235</td><td>231</td></tr><tr><td>233</td><td>243</td></tr><tr><td>231</td><td>245</td></tr><tr><td>230</td><td>254</td></tr><tr><td>228</td><td>321</td></tr><tr><td>226</td><td>322</td></tr><tr><td>225</td><td>325</td></tr><tr><td>223</td><td>347</td></tr><tr><td>221</td><td>354</td></tr><tr><td>220</td><td>367</td></tr><tr><td>218</td><td>465</td></tr><tr><td>216</td><td>466</td></tr><tr><td>215</td><td>467</td></tr><tr><td>213</td><td>485</td></tr><tr><td>211</td><td>491</td></tr><tr><td>210</td><td>509</td></tr><tr><td>208</td><td>646</td></tr><tr><td>206</td><td>647</td></tr><tr><td>205</td><td>649</td></tr><tr><td>203</td><td>674</td></tr><tr><td>201</td><td>680</td></tr><tr><td>200</td><td>706</td></tr><tr><td>196</td><td>829</td></tr><tr><td>195</td><td>830</td></tr><tr><td>193</td><td>857</td></tr><tr><td>191</td><td>863</td></tr><tr><td>190</td><td>882</td></tr><tr><td>186</td><td>1042</td></tr><tr><td>185</td><td>1047</td></tr><tr><td>183</td><td>1074</td></tr><tr><td>181</td><td>1082</td></tr><tr><td>180</td><td>1103</td></tr><tr><td>178</td><td>1212</td></tr><tr><td>176</td><td>1213</td></tr><tr><td>175</td><td>1214</td></tr><tr><td>173</td><td>1253</td></tr><tr><td>171</td><td>1258</td></tr><tr><td>170</td><td>1276</td></tr><tr><td>168</td><td>1371</td></tr><tr><td>166</td><td>1373</td></tr><tr><td>165</td><td>1375</td></tr><tr><td>163</td><td>1404</td></tr><tr><td>161</td><td>1408</td></tr><tr><td>160</td><td>1418</td></tr><tr><td>156</td><td>1523</td></tr><tr><td>155</td><td>1524</td></tr><tr><td>153</td><td>1558</td></tr><tr><td>151</td><td>1563</td></tr><tr><td>150</td><td>1569</td></tr><tr><td>145</td><td>1653</td></tr><tr><td>143</td><td>1680</td></tr><tr><td>141</td><td>1684</td></tr><tr><td>140</td><td>1691</td></tr><tr><td>136</td><td>1765</td></tr><tr><td>135</td><td>1766</td></tr><tr><td>133</td><td>1794</td></tr><tr><td>131</td><td>1796</td></tr><tr><td>130</td><td>1802</td></tr><tr><td>125</td><td>1858</td></tr><tr><td>123</td><td>1890</td></tr><tr><td>121</td><td>1892</td></tr><tr><td>120</td><td>1896</td></tr><tr><td>115</td><td>1930</td></tr><tr><td>111</td><td>1947</td></tr><tr><td>110</td><td>1950</td></tr><tr><td>106</td><td>1982</td></tr><tr><td>105</td><td>1983</td></tr><tr><td>101</td><td>1998</td></tr><tr><td>100</td><td>2000</td></tr><tr><td>95</td><td>2024</td></tr><tr><td>90</td><td>2041</td></tr><tr><td>85</td><td>2053</td></tr><tr><td>83</td><td>2061</td></tr><tr><td>81</td><td>2062</td></tr><tr><td>80</td><td>2063</td></tr><tr><td>75</td><td>2076</td></tr><tr><td>70</td><td>2081</td></tr><tr><td>65</td><td>2098</td></tr><tr><td>60</td><td>2101</td></tr><tr><td>55</td><td>2118</td></tr><tr><td>50</td><td>2120</td></tr><tr><td>45</td><td>2134</td></tr><tr><td>40</td><td>2135</td></tr><tr><td>35</td><td>2147</td></tr><tr><td>30</td><td>2149</td></tr><tr><td>25</td><td>2162</td></tr><tr><td>20</td><td>2164</td></tr><tr><td>15</td><td>2169</td></tr><tr><td>10</td><td>2170</td></tr><tr><td>0</td><td>2172</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-14-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation individuelle) : 810 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-14-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-14-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>350</td><td>1</td></tr><tr><td>320</td><td>2</td></tr><tr><td>313</td><td>3</td></tr><tr><td>310</td><td>5</td></tr><tr><td>300</td><td>9</td></tr><tr><td>290</td><td>12</td></tr><tr><td>285</td><td>18</td></tr><tr><td>280</td><td>19</td></tr><tr><td>275</td><td>26</td></tr><tr><td>270</td><td>27</td></tr><tr><td>265</td><td>42</td></tr><tr><td>260</td><td>46</td></tr><tr><td>255</td><td>64</td></tr><tr><td>253</td><td>67</td></tr><tr><td>250</td><td>68</td></tr><tr><td>245</td><td>97</td></tr><tr><td>243</td><td>99</td></tr><tr><td>241</td><td>100</td></tr><tr><td>240</td><td>102</td></tr><tr><td>236</td><td>125</td></tr><tr><td>235</td><td>128</td></tr><tr><td>233</td><td>134</td></tr><tr><td>231</td><td>135</td></tr><tr><td>230</td><td>140</td></tr><tr><td>225</td><td>180</td></tr><tr><td>223</td><td>194</td></tr><tr><td>221</td><td>197</td></tr><tr><td>220</td><td>205</td></tr><tr><td>216</td><td>253</td></tr><tr><td>215</td><td>254</td></tr><tr><td>211</td><td>263</td></tr><tr><td>210</td><td>273</td></tr><tr><td>206</td><td>327</td></tr><tr><td>205</td><td>330</td></tr><tr><td>203</td><td>341</td></tr><tr><td>201</td><td>342</td></tr><tr><td>200</td><td>351</td></tr><tr><td>196</td><td>390</td></tr><tr><td>195</td><td>391</td></tr><tr><td>193</td><td>403</td></tr><tr><td>191</td><td>407</td></tr><tr><td>190</td><td>416</td></tr><tr><td>185</td><td>451</td></tr><tr><td>183</td><td>465</td></tr><tr><td>181</td><td>466</td></tr><tr><td>180</td><td>469</td></tr><tr><td>175</td><td>522</td></tr><tr><td>173</td><td>533</td></tr><tr><td>171</td><td>534</td></tr><tr><td>170</td><td>537</td></tr><tr><td>165</td><td>583</td></tr><tr><td>161</td><td>597</td></tr><tr><td>160</td><td>601</td></tr><tr><td>156</td><td>628</td></tr><tr><td>155</td><td>629</td></tr><tr><td>153</td><td>639</td></tr><tr><td>151</td><td>640</td></tr><tr><td>150</td><td>641</td></tr><tr><td>145</td><td>674</td></tr><tr><td>141</td><td>678</td></tr><tr><td>140</td><td>682</td></tr><tr><td>135</td><td>703</td></tr><tr><td>133</td><td>710</td></tr><tr><td>130</td><td>711</td></tr><tr><td>125</td><td>726</td></tr><tr><td>120</td><td>732</td></tr><tr><td>115</td><td>743</td></tr><tr><td>110</td><td>748</td></tr><tr><td>105</td><td>755</td></tr><tr><td>100</td><td>759</td></tr><tr><td>95</td><td>766</td></tr><tr><td>90</td><td>768</td></tr><tr><td>85</td><td>771</td></tr><tr><td>80</td><td>774</td></tr><tr><td>75</td><td>778</td></tr><tr><td>65</td><td>780</td></tr><tr><td>60</td><td>782</td></tr><tr><td>55</td><td>786</td></tr><tr><td>50</td><td>787</td></tr><tr><td>40</td><td>791</td></tr><tr><td>30</td><td>793</td></tr><tr><td>20</td><td>796</td></tr><tr><td>10</td><td>797</td></tr><tr><td>0</td><td>799</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-15-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation individuelle) : 525 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-15-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-15-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>340</td><td>1</td></tr><tr><td>320</td><td>3</td></tr><tr><td>310</td><td>6</td></tr><tr><td>300</td><td>8</td></tr><tr><td>295</td><td>11</td></tr><tr><td>290</td><td>12</td></tr><tr><td>280</td><td>16</td></tr><tr><td>270</td><td>19</td></tr><tr><td>263</td><td>28</td></tr><tr><td>260</td><td>31</td></tr><tr><td>256</td><td>40</td></tr><tr><td>255</td><td>41</td></tr><tr><td>253</td><td>43</td></tr><tr><td>251</td><td>44</td></tr><tr><td>250</td><td>45</td></tr><tr><td>245</td><td>67</td></tr><tr><td>243</td><td>72</td></tr><tr><td>241</td><td>74</td></tr><tr><td>240</td><td>75</td></tr><tr><td>235</td><td>94</td></tr><tr><td>233</td><td>99</td></tr><tr><td>231</td><td>100</td></tr><tr><td>230</td><td>103</td></tr><tr><td>225</td><td>126</td></tr><tr><td>223</td><td>132</td></tr><tr><td>221</td><td>135</td></tr><tr><td>220</td><td>137</td></tr><tr><td>216</td><td>163</td></tr><tr><td>215</td><td>164</td></tr><tr><td>213</td><td>169</td></tr><tr><td>211</td><td>171</td></tr><tr><td>210</td><td>175</td></tr><tr><td>205</td><td>200</td></tr><tr><td>203</td><td>203</td></tr><tr><td>201</td><td>204</td></tr><tr><td>200</td><td>209</td></tr><tr><td>195</td><td>245</td></tr><tr><td>193</td><td>248</td></tr><tr><td>191</td><td>250</td></tr><tr><td>190</td><td>256</td></tr><tr><td>188</td><td>277</td></tr><tr><td>185</td><td>278</td></tr><tr><td>183</td><td>286</td></tr><tr><td>181</td><td>288</td></tr><tr><td>180</td><td>291</td></tr><tr><td>176</td><td>323</td></tr><tr><td>175</td><td>324</td></tr><tr><td>170</td><td>330</td></tr><tr><td>165</td><td>353</td></tr><tr><td>163</td><td>360</td></tr><tr><td>161</td><td>361</td></tr><tr><td>160</td><td>362</td></tr><tr><td>158</td><td>377</td></tr><tr><td>155</td><td>378</td></tr><tr><td>151</td><td>382</td></tr><tr><td>150</td><td>383</td></tr><tr><td>145</td><td>399</td></tr><tr><td>140</td><td>407</td></tr><tr><td>135</td><td>417</td></tr><tr><td>131</td><td>423</td></tr><tr><td>130</td><td>426</td></tr><tr><td>125</td><td>435</td></tr><tr><td>120</td><td>442</td></tr><tr><td>115</td><td>452</td></tr><tr><td>110</td><td>456</td></tr><tr><td>100</td><td>464</td></tr><tr><td>96</td><td>467</td></tr><tr><td>95</td><td>468</td></tr><tr><td>90</td><td>469</td></tr><tr><td>80</td><td>475</td></tr><tr><td>70</td><td>479</td></tr><tr><td>65</td><td>483</td></tr><tr><td>60</td><td>485</td></tr><tr><td>55</td><td>491</td></tr><tr><td>50</td><td>492</td></tr><tr><td>40</td><td>498</td></tr><tr><td>35</td><td>501</td></tr><tr><td>30</td><td>502</td></tr><tr><td>20</td><td>504</td></tr><tr><td>10</td><td>507</td></tr><tr><td>5</td><td>513</td></tr><tr><td>0</td><td>515</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-16-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation individuelle) : 2056 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-16-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-16-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>270</td><td>4</td></tr><tr><td>260</td><td>5</td></tr><tr><td>255</td><td>8</td></tr><tr><td>250</td><td>9</td></tr><tr><td>245</td><td>11</td></tr><tr><td>240</td><td>12</td></tr><tr><td>235</td><td>18</td></tr><tr><td>231</td><td>20</td></tr><tr><td>230</td><td>21</td></tr><tr><td>225</td><td>28</td></tr><tr><td>221</td><td>31</td></tr><tr><td>220</td><td>34</td></tr><tr><td>215</td><td>53</td></tr><tr><td>211</td><td>59</td></tr><tr><td>210</td><td>60</td></tr><tr><td>205</td><td>86</td></tr><tr><td>203</td><td>95</td></tr><tr><td>201</td><td>99</td></tr><tr><td>200</td><td>101</td></tr><tr><td>195</td><td>135</td></tr><tr><td>193</td><td>142</td></tr><tr><td>191</td><td>143</td></tr><tr><td>190</td><td>147</td></tr><tr><td>185</td><td>190</td></tr><tr><td>183</td><td>198</td></tr><tr><td>181</td><td>200</td></tr><tr><td>180</td><td>207</td></tr><tr><td>176</td><td>264</td></tr><tr><td>175</td><td>265</td></tr><tr><td>173</td><td>279</td></tr><tr><td>171</td><td>281</td></tr><tr><td>170</td><td>288</td></tr><tr><td>166</td><td>362</td></tr><tr><td>165</td><td>363</td></tr><tr><td>163</td><td>386</td></tr><tr><td>161</td><td>387</td></tr><tr><td>160</td><td>395</td></tr><tr><td>155</td><td>461</td></tr><tr><td>153</td><td>496</td></tr><tr><td>151</td><td>502</td></tr><tr><td>150</td><td>510</td></tr><tr><td>146</td><td>592</td></tr><tr><td>145</td><td>593</td></tr><tr><td>143</td><td>644</td></tr><tr><td>141</td><td>650</td></tr><tr><td>140</td><td>656</td></tr><tr><td>136</td><td>747</td></tr><tr><td>135</td><td>748</td></tr><tr><td>133</td><td>819</td></tr><tr><td>131</td><td>821</td></tr><tr><td>130</td><td>828</td></tr><tr><td>125</td><td>924</td></tr><tr><td>123</td><td>1019</td></tr><tr><td>121</td><td>1026</td></tr><tr><td>120</td><td>1031</td></tr><tr><td>115</td><td>1119</td></tr><tr><td>113</td><td>1191</td></tr><tr><td>111</td><td>1192</td></tr><tr><td>110</td><td>1196</td></tr><tr><td>105</td><td>1284</td></tr><tr><td>103</td><td>1367</td></tr><tr><td>101</td><td>1368</td></tr><tr><td>100</td><td>1371</td></tr><tr><td>95</td><td>1449</td></tr><tr><td>91</td><td>1530</td></tr><tr><td>90</td><td>1533</td></tr><tr><td>85</td><td>1595</td></tr><tr><td>81</td><td>1648</td></tr><tr><td>80</td><td>1651</td></tr><tr><td>75</td><td>1699</td></tr><tr><td>71</td><td>1751</td></tr><tr><td>70</td><td>1752</td></tr><tr><td>65</td><td>1795</td></tr><tr><td>63</td><td>1824</td></tr><tr><td>61</td><td>1825</td></tr><tr><td>60</td><td>1826</td></tr><tr><td>55</td><td>1859</td></tr><tr><td>50</td><td>1874</td></tr><tr><td>45</td><td>1906</td></tr><tr><td>40</td><td>1919</td></tr><tr><td>35</td><td>1941</td></tr><tr><td>30</td><td>1947</td></tr><tr><td>25</td><td>1970</td></tr><tr><td>20</td><td>1973</td></tr><tr><td>10</td><td>1988</td></tr><tr><td>5</td><td>1997</td></tr><tr><td>0</td><td>1998</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-17-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation individuelle) : 1460 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-17-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-17-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>310</td><td>2</td></tr><tr><td>300</td><td>3</td></tr><tr><td>290</td><td>6</td></tr><tr><td>280</td><td>8</td></tr><tr><td>260</td><td>9</td></tr><tr><td>255</td><td>12</td></tr><tr><td>253</td><td>13</td></tr><tr><td>250</td><td>14</td></tr><tr><td>245</td><td>16</td></tr><tr><td>241</td><td>17</td></tr><tr><td>240</td><td>18</td></tr><tr><td>230</td><td>22</td></tr><tr><td>225</td><td>30</td></tr><tr><td>223</td><td>31</td></tr><tr><td>220</td><td>32</td></tr><tr><td>216</td><td>40</td></tr><tr><td>215</td><td>41</td></tr><tr><td>210</td><td>43</td></tr><tr><td>205</td><td>55</td></tr><tr><td>203</td><td>60</td></tr><tr><td>201</td><td>65</td></tr><tr><td>200</td><td>67</td></tr><tr><td>195</td><td>78</td></tr><tr><td>193</td><td>83</td></tr><tr><td>191</td><td>84</td></tr><tr><td>190</td><td>85</td></tr><tr><td>185</td><td>119</td></tr><tr><td>183</td><td>129</td></tr><tr><td>181</td><td>132</td></tr><tr><td>180</td><td>135</td></tr><tr><td>175</td><td>175</td></tr><tr><td>173</td><td>191</td></tr><tr><td>171</td><td>193</td></tr><tr><td>170</td><td>200</td></tr><tr><td>166</td><td>257</td></tr><tr><td>165</td><td>258</td></tr><tr><td>163</td><td>288</td></tr><tr><td>161</td><td>290</td></tr><tr><td>160</td><td>301</td></tr><tr><td>155</td><td>371</td></tr><tr><td>153</td><td>391</td></tr><tr><td>151</td><td>393</td></tr><tr><td>150</td><td>396</td></tr><tr><td>146</td><td>467</td></tr><tr><td>145</td><td>468</td></tr><tr><td>143</td><td>510</td></tr><tr><td>141</td><td>514</td></tr><tr><td>140</td><td>522</td></tr><tr><td>138</td><td>603</td></tr><tr><td>135</td><td>604</td></tr><tr><td>133</td><td>659</td></tr><tr><td>131</td><td>662</td></tr><tr><td>130</td><td>668</td></tr><tr><td>125</td><td>749</td></tr><tr><td>123</td><td>808</td></tr><tr><td>121</td><td>809</td></tr><tr><td>120</td><td>815</td></tr><tr><td>115</td><td>882</td></tr><tr><td>113</td><td>947</td></tr><tr><td>111</td><td>948</td></tr><tr><td>110</td><td>950</td></tr><tr><td>106</td><td>1014</td></tr><tr><td>105</td><td>1015</td></tr><tr><td>101</td><td>1070</td></tr><tr><td>100</td><td>1071</td></tr><tr><td>95</td><td>1120</td></tr><tr><td>93</td><td>1177</td></tr><tr><td>91</td><td>1178</td></tr><tr><td>90</td><td>1180</td></tr><tr><td>85</td><td>1214</td></tr><tr><td>80</td><td>1247</td></tr><tr><td>75</td><td>1282</td></tr><tr><td>71</td><td>1307</td></tr><tr><td>70</td><td>1308</td></tr><tr><td>65</td><td>1343</td></tr><tr><td>61</td><td>1354</td></tr><tr><td>60</td><td>1355</td></tr><tr><td>55</td><td>1374</td></tr><tr><td>50</td><td>1381</td></tr><tr><td>45</td><td>1399</td></tr><tr><td>40</td><td>1401</td></tr><tr><td>30</td><td>1409</td></tr><tr><td>20</td><td>1418</td></tr><tr><td>15</td><td>1424</td></tr><tr><td>10</td><td>1425</td></tr><tr><td>0</td><td>1434</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-18-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation individuelle) : 1254 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-18-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-18-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>261</td><td>2</td></tr><tr><td>260</td><td>4</td></tr><tr><td>255</td><td>9</td></tr><tr><td>250</td><td>10</td></tr><tr><td>245</td><td>12</td></tr><tr><td>240</td><td>13</td></tr><tr><td>235</td><td>18</td></tr><tr><td>230</td><td>20</td></tr><tr><td>221</td><td>30</td></tr><tr><td>220</td><td>32</td></tr><tr><td>215</td><td>49</td></tr><tr><td>213</td><td>53</td></tr><tr><td>211</td><td>55</td></tr><tr><td>210</td><td>58</td></tr><tr><td>208</td><td>82</td></tr><tr><td>205</td><td>83</td></tr><tr><td>201</td><td>88</td></tr><tr><td>200</td><td>92</td></tr><tr><td>196</td><td>119</td></tr><tr><td>195</td><td>120</td></tr><tr><td>193</td><td>125</td></tr><tr><td>191</td><td>128</td></tr><tr><td>190</td><td>133</td></tr><tr><td>185</td><td>174</td></tr><tr><td>183</td><td>179</td></tr><tr><td>181</td><td>180</td></tr><tr><td>180</td><td>182</td></tr><tr><td>178</td><td>218</td></tr><tr><td>175</td><td>219</td></tr><tr><td>173</td><td>237</td></tr><tr><td>171</td><td>241</td></tr><tr><td>170</td><td>250</td></tr><tr><td>166</td><td>299</td></tr><tr><td>165</td><td>301</td></tr><tr><td>163</td><td>328</td></tr><tr><td>161</td><td>330</td></tr><tr><td>160</td><td>337</td></tr><tr><td>156</td><td>396</td></tr><tr><td>155</td><td>397</td></tr><tr><td>153</td><td>437</td></tr><tr><td>151</td><td>438</td></tr><tr><td>150</td><td>444</td></tr><tr><td>145</td><td>520</td></tr><tr><td>143</td><td>564</td></tr><tr><td>141</td><td>566</td></tr><tr><td>140</td><td>575</td></tr><tr><td>135</td><td>663</td></tr><tr><td>133</td><td>712</td></tr><tr><td>131</td><td>714</td></tr><tr><td>130</td><td>721</td></tr><tr><td>125</td><td>791</td></tr><tr><td>123</td><td>834</td></tr><tr><td>121</td><td>835</td></tr><tr><td>120</td><td>839</td></tr><tr><td>115</td><td>887</td></tr><tr><td>111</td><td>922</td></tr><tr><td>110</td><td>924</td></tr><tr><td>105</td><td>964</td></tr><tr><td>103</td><td>998</td></tr><tr><td>101</td><td>999</td></tr><tr><td>100</td><td>1002</td></tr><tr><td>95</td><td>1033</td></tr><tr><td>90</td><td>1067</td></tr><tr><td>85</td><td>1092</td></tr><tr><td>81</td><td>1113</td></tr><tr><td>80</td><td>1114</td></tr><tr><td>75</td><td>1129</td></tr><tr><td>70</td><td>1146</td></tr><tr><td>65</td><td>1161</td></tr><tr><td>60</td><td>1174</td></tr><tr><td>55</td><td>1183</td></tr><tr><td>50</td><td>1192</td></tr><tr><td>45</td><td>1202</td></tr><tr><td>40</td><td>1204</td></tr><tr><td>35</td><td>1211</td></tr><tr><td>30</td><td>1212</td></tr><tr><td>20</td><td>1222</td></tr><tr><td>15</td><td>1225</td></tr><tr><td>10</td><td>1226</td></tr><tr><td>5</td><td>1231</td></tr><tr><td>0</td><td>1233</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-19-1' class='content-nbContestants1'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation individuelle) : 948 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-19-1' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-19-1' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>340</td><td>1</td></tr><tr><td>290</td><td>2</td></tr><tr><td>280</td><td>3</td></tr><tr><td>270</td><td>4</td></tr><tr><td>265</td><td>7</td></tr><tr><td>260</td><td>8</td></tr><tr><td>255</td><td>11</td></tr><tr><td>251</td><td>12</td></tr><tr><td>250</td><td>14</td></tr><tr><td>243</td><td>21</td></tr><tr><td>240</td><td>22</td></tr><tr><td>235</td><td>32</td></tr><tr><td>230</td><td>34</td></tr><tr><td>225</td><td>43</td></tr><tr><td>223</td><td>44</td></tr><tr><td>221</td><td>45</td></tr><tr><td>220</td><td>46</td></tr><tr><td>213</td><td>59</td></tr><tr><td>211</td><td>60</td></tr><tr><td>210</td><td>62</td></tr><tr><td>206</td><td>91</td></tr><tr><td>205</td><td>92</td></tr><tr><td>203</td><td>97</td></tr><tr><td>201</td><td>98</td></tr><tr><td>200</td><td>100</td></tr><tr><td>196</td><td>138</td></tr><tr><td>195</td><td>139</td></tr><tr><td>193</td><td>145</td></tr><tr><td>191</td><td>146</td></tr><tr><td>190</td><td>149</td></tr><tr><td>186</td><td>190</td></tr><tr><td>185</td><td>191</td></tr><tr><td>183</td><td>197</td></tr><tr><td>181</td><td>199</td></tr><tr><td>180</td><td>203</td></tr><tr><td>175</td><td>237</td></tr><tr><td>171</td><td>248</td></tr><tr><td>170</td><td>256</td></tr><tr><td>166</td><td>304</td></tr><tr><td>165</td><td>305</td></tr><tr><td>163</td><td>322</td></tr><tr><td>161</td><td>323</td></tr><tr><td>160</td><td>332</td></tr><tr><td>158</td><td>397</td></tr><tr><td>155</td><td>399</td></tr><tr><td>153</td><td>424</td></tr><tr><td>151</td><td>426</td></tr><tr><td>150</td><td>429</td></tr><tr><td>145</td><td>493</td></tr><tr><td>143</td><td>521</td></tr><tr><td>141</td><td>523</td></tr><tr><td>140</td><td>533</td></tr><tr><td>136</td><td>572</td></tr><tr><td>135</td><td>573</td></tr><tr><td>133</td><td>601</td></tr><tr><td>131</td><td>602</td></tr><tr><td>130</td><td>604</td></tr><tr><td>125</td><td>658</td></tr><tr><td>123</td><td>692</td></tr><tr><td>121</td><td>697</td></tr><tr><td>120</td><td>703</td></tr><tr><td>115</td><td>738</td></tr><tr><td>111</td><td>761</td></tr><tr><td>110</td><td>762</td></tr><tr><td>105</td><td>786</td></tr><tr><td>100</td><td>806</td></tr><tr><td>95</td><td>822</td></tr><tr><td>91</td><td>842</td></tr><tr><td>90</td><td>843</td></tr><tr><td>85</td><td>854</td></tr><tr><td>81</td><td>867</td></tr><tr><td>80</td><td>868</td></tr><tr><td>75</td><td>874</td></tr><tr><td>71</td><td>879</td></tr><tr><td>70</td><td>880</td></tr><tr><td>65</td><td>891</td></tr><tr><td>60</td><td>895</td></tr><tr><td>55</td><td>897</td></tr><tr><td>50</td><td>898</td></tr><tr><td>45</td><td>906</td></tr><tr><td>40</td><td>908</td></tr><tr><td>35</td><td>915</td></tr><tr><td>30</td><td>916</td></tr><tr><td>25</td><td>920</td></tr><tr><td>20</td><td>921</td></tr><tr><td>10</td><td>923</td></tr><tr><td>0</td><td>928</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-4-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM1 (participation en binôme) : 3856 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-4-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-4-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>270</td><td>4</td></tr><tr><td>265</td><td>6</td></tr><tr><td>263</td><td>7</td></tr><tr><td>261</td><td>8</td></tr><tr><td>260</td><td>10</td></tr><tr><td>253</td><td>13</td></tr><tr><td>250</td><td>15</td></tr><tr><td>245</td><td>19</td></tr><tr><td>240</td><td>20</td></tr><tr><td>235</td><td>32</td></tr><tr><td>231</td><td>34</td></tr><tr><td>230</td><td>36</td></tr><tr><td>225</td><td>45</td></tr><tr><td>221</td><td>49</td></tr><tr><td>220</td><td>50</td></tr><tr><td>215</td><td>73</td></tr><tr><td>211</td><td>80</td></tr><tr><td>210</td><td>83</td></tr><tr><td>206</td><td>120</td></tr><tr><td>205</td><td>122</td></tr><tr><td>203</td><td>134</td></tr><tr><td>201</td><td>136</td></tr><tr><td>200</td><td>141</td></tr><tr><td>196</td><td>220</td></tr><tr><td>195</td><td>224</td></tr><tr><td>193</td><td>242</td></tr><tr><td>191</td><td>244</td></tr><tr><td>190</td><td>262</td></tr><tr><td>186</td><td>366</td></tr><tr><td>185</td><td>369</td></tr><tr><td>183</td><td>401</td></tr><tr><td>181</td><td>406</td></tr><tr><td>180</td><td>426</td></tr><tr><td>176</td><td>576</td></tr><tr><td>175</td><td>580</td></tr><tr><td>173</td><td>623</td></tr><tr><td>171</td><td>637</td></tr><tr><td>170</td><td>654</td></tr><tr><td>168</td><td>799</td></tr><tr><td>166</td><td>802</td></tr><tr><td>165</td><td>804</td></tr><tr><td>163</td><td>866</td></tr><tr><td>161</td><td>868</td></tr><tr><td>160</td><td>880</td></tr><tr><td>156</td><td>1120</td></tr><tr><td>155</td><td>1124</td></tr><tr><td>153</td><td>1248</td></tr><tr><td>151</td><td>1251</td></tr><tr><td>150</td><td>1276</td></tr><tr><td>148</td><td>1500</td></tr><tr><td>146</td><td>1502</td></tr><tr><td>145</td><td>1504</td></tr><tr><td>143</td><td>1626</td></tr><tr><td>141</td><td>1632</td></tr><tr><td>140</td><td>1655</td></tr><tr><td>136</td><td>1851</td></tr><tr><td>135</td><td>1854</td></tr><tr><td>133</td><td>2012</td></tr><tr><td>131</td><td>2017</td></tr><tr><td>130</td><td>2025</td></tr><tr><td>125</td><td>2243</td></tr><tr><td>123</td><td>2395</td></tr><tr><td>121</td><td>2401</td></tr><tr><td>120</td><td>2413</td></tr><tr><td>115</td><td>2603</td></tr><tr><td>111</td><td>2775</td></tr><tr><td>110</td><td>2782</td></tr><tr><td>108</td><td>2910</td></tr><tr><td>105</td><td>2912</td></tr><tr><td>103</td><td>3049</td></tr><tr><td>101</td><td>3051</td></tr><tr><td>100</td><td>3059</td></tr><tr><td>95</td><td>3184</td></tr><tr><td>91</td><td>3315</td></tr><tr><td>90</td><td>3318</td></tr><tr><td>85</td><td>3415</td></tr><tr><td>83</td><td>3483</td></tr><tr><td>80</td><td>3485</td></tr><tr><td>75</td><td>3540</td></tr><tr><td>70</td><td>3576</td></tr><tr><td>65</td><td>3636</td></tr><tr><td>63</td><td>3653</td></tr><tr><td>61</td><td>3655</td></tr><tr><td>60</td><td>3658</td></tr><tr><td>55</td><td>3690</td></tr><tr><td>50</td><td>3709</td></tr><tr><td>40</td><td>3727</td></tr><tr><td>30</td><td>3745</td></tr><tr><td>25</td><td>3766</td></tr><tr><td>20</td><td>3770</td></tr><tr><td>10</td><td>3780</td></tr><tr><td>0</td><td>3789</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-5-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie CM2 (participation en binôme) : 6119 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-5-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-5-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>280</td><td>3</td></tr><tr><td>275</td><td>6</td></tr><tr><td>270</td><td>7</td></tr><tr><td>263</td><td>15</td></tr><tr><td>261</td><td>16</td></tr><tr><td>260</td><td>18</td></tr><tr><td>250</td><td>27</td></tr><tr><td>245</td><td>39</td></tr><tr><td>241</td><td>42</td></tr><tr><td>240</td><td>45</td></tr><tr><td>235</td><td>94</td></tr><tr><td>231</td><td>101</td></tr><tr><td>230</td><td>111</td></tr><tr><td>225</td><td>195</td></tr><tr><td>223</td><td>218</td></tr><tr><td>221</td><td>220</td></tr><tr><td>220</td><td>230</td></tr><tr><td>218</td><td>355</td></tr><tr><td>215</td><td>357</td></tr><tr><td>213</td><td>379</td></tr><tr><td>211</td><td>385</td></tr><tr><td>210</td><td>408</td></tr><tr><td>208</td><td>619</td></tr><tr><td>206</td><td>621</td></tr><tr><td>205</td><td>623</td></tr><tr><td>203</td><td>648</td></tr><tr><td>201</td><td>653</td></tr><tr><td>200</td><td>685</td></tr><tr><td>196</td><td>941</td></tr><tr><td>195</td><td>944</td></tr><tr><td>193</td><td>1022</td></tr><tr><td>191</td><td>1030</td></tr><tr><td>190</td><td>1069</td></tr><tr><td>186</td><td>1409</td></tr><tr><td>185</td><td>1416</td></tr><tr><td>183</td><td>1500</td></tr><tr><td>181</td><td>1518</td></tr><tr><td>180</td><td>1567</td></tr><tr><td>178</td><td>1925</td></tr><tr><td>176</td><td>1926</td></tr><tr><td>175</td><td>1930</td></tr><tr><td>173</td><td>2029</td></tr><tr><td>171</td><td>2042</td></tr><tr><td>170</td><td>2092</td></tr><tr><td>168</td><td>2454</td></tr><tr><td>166</td><td>2460</td></tr><tr><td>165</td><td>2468</td></tr><tr><td>163</td><td>2620</td></tr><tr><td>161</td><td>2637</td></tr><tr><td>160</td><td>2667</td></tr><tr><td>158</td><td>3020</td></tr><tr><td>156</td><td>3026</td></tr><tr><td>155</td><td>3030</td></tr><tr><td>153</td><td>3205</td></tr><tr><td>151</td><td>3217</td></tr><tr><td>150</td><td>3246</td></tr><tr><td>145</td><td>3656</td></tr><tr><td>143</td><td>3852</td></tr><tr><td>141</td><td>3867</td></tr><tr><td>140</td><td>3895</td></tr><tr><td>136</td><td>4211</td></tr><tr><td>135</td><td>4212</td></tr><tr><td>133</td><td>4421</td></tr><tr><td>131</td><td>4427</td></tr><tr><td>130</td><td>4464</td></tr><tr><td>126</td><td>4795</td></tr><tr><td>125</td><td>4796</td></tr><tr><td>123</td><td>4956</td></tr><tr><td>121</td><td>4958</td></tr><tr><td>120</td><td>4964</td></tr><tr><td>115</td><td>5148</td></tr><tr><td>113</td><td>5270</td></tr><tr><td>111</td><td>5276</td></tr><tr><td>110</td><td>5278</td></tr><tr><td>105</td><td>5408</td></tr><tr><td>101</td><td>5505</td></tr><tr><td>100</td><td>5510</td></tr><tr><td>95</td><td>5624</td></tr><tr><td>91</td><td>5692</td></tr><tr><td>90</td><td>5694</td></tr><tr><td>85</td><td>5784</td></tr><tr><td>80</td><td>5835</td></tr><tr><td>75</td><td>5871</td></tr><tr><td>70</td><td>5897</td></tr><tr><td>65</td><td>5933</td></tr><tr><td>61</td><td>5940</td></tr><tr><td>60</td><td>5941</td></tr><tr><td>55</td><td>5962</td></tr><tr><td>50</td><td>5971</td></tr><tr><td>45</td><td>5989</td></tr><tr><td>40</td><td>5991</td></tr><tr><td>36</td><td>6000</td></tr><tr><td>30</td><td>6002</td></tr><tr><td>25</td><td>6007</td></tr><tr><td>20</td><td>6009</td></tr><tr><td>10</td><td>6014</td></tr><tr><td>0</td><td>6020</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-6-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e (participation en binôme) : 55377 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-6-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-6-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>305</td><td>7</td></tr><tr><td>300</td><td>11</td></tr><tr><td>290</td><td>29</td></tr><tr><td>285</td><td>51</td></tr><tr><td>281</td><td>55</td></tr><tr><td>280</td><td>57</td></tr><tr><td>275</td><td>85</td></tr><tr><td>273</td><td>87</td></tr><tr><td>271</td><td>89</td></tr><tr><td>270</td><td>95</td></tr><tr><td>266</td><td>189</td></tr><tr><td>265</td><td>191</td></tr><tr><td>263</td><td>205</td></tr><tr><td>261</td><td>207</td></tr><tr><td>260</td><td>225</td></tr><tr><td>255</td><td>449</td></tr><tr><td>253</td><td>479</td></tr><tr><td>251</td><td>491</td></tr><tr><td>250</td><td>509</td></tr><tr><td>248</td><td>872</td></tr><tr><td>246</td><td>874</td></tr><tr><td>245</td><td>880</td></tr><tr><td>243</td><td>937</td></tr><tr><td>241</td><td>944</td></tr><tr><td>240</td><td>985</td></tr><tr><td>238</td><td>1618</td></tr><tr><td>236</td><td>1620</td></tr><tr><td>235</td><td>1624</td></tr><tr><td>233</td><td>1740</td></tr><tr><td>231</td><td>1762</td></tr><tr><td>230</td><td>1862</td></tr><tr><td>228</td><td>3092</td></tr><tr><td>226</td><td>3094</td></tr><tr><td>225</td><td>3103</td></tr><tr><td>223</td><td>3346</td></tr><tr><td>221</td><td>3370</td></tr><tr><td>220</td><td>3532</td></tr><tr><td>218</td><td>5558</td></tr><tr><td>216</td><td>5560</td></tr><tr><td>215</td><td>5594</td></tr><tr><td>213</td><td>5969</td></tr><tr><td>211</td><td>6043</td></tr><tr><td>210</td><td>6265</td></tr><tr><td>208</td><td>9487</td></tr><tr><td>206</td><td>9497</td></tr><tr><td>205</td><td>9533</td></tr><tr><td>203</td><td>10112</td></tr><tr><td>201</td><td>10213</td></tr><tr><td>200</td><td>10524</td></tr><tr><td>198</td><td>14353</td></tr><tr><td>196</td><td>14366</td></tr><tr><td>195</td><td>14429</td></tr><tr><td>193</td><td>15263</td></tr><tr><td>191</td><td>15373</td></tr><tr><td>190</td><td>15743</td></tr><tr><td>188</td><td>19529</td></tr><tr><td>186</td><td>19541</td></tr><tr><td>185</td><td>19598</td></tr><tr><td>183</td><td>20622</td></tr><tr><td>181</td><td>20733</td></tr><tr><td>180</td><td>21099</td></tr><tr><td>178</td><td>24640</td></tr><tr><td>176</td><td>24653</td></tr><tr><td>175</td><td>24703</td></tr><tr><td>173</td><td>25712</td></tr><tr><td>171</td><td>25843</td></tr><tr><td>170</td><td>26239</td></tr><tr><td>168</td><td>29546</td></tr><tr><td>166</td><td>29561</td></tr><tr><td>165</td><td>29601</td></tr><tr><td>163</td><td>30988</td></tr><tr><td>161</td><td>31081</td></tr><tr><td>160</td><td>31390</td></tr><tr><td>158</td><td>34469</td></tr><tr><td>156</td><td>34477</td></tr><tr><td>155</td><td>34499</td></tr><tr><td>153</td><td>35953</td></tr><tr><td>151</td><td>36028</td></tr><tr><td>150</td><td>36269</td></tr><tr><td>148</td><td>39352</td></tr><tr><td>146</td><td>39354</td></tr><tr><td>145</td><td>39370</td></tr><tr><td>143</td><td>40702</td></tr><tr><td>141</td><td>40746</td></tr><tr><td>140</td><td>40941</td></tr><tr><td>136</td><td>43131</td></tr><tr><td>135</td><td>43145</td></tr><tr><td>133</td><td>44505</td></tr><tr><td>131</td><td>44552</td></tr><tr><td>130</td><td>44683</td></tr><tr><td>128</td><td>46759</td></tr><tr><td>126</td><td>46763</td></tr><tr><td>125</td><td>46767</td></tr><tr><td>123</td><td>47754</td></tr><tr><td>121</td><td>47784</td></tr><tr><td>120</td><td>47866</td></tr><tr><td>118</td><td>49214</td></tr><tr><td>116</td><td>49216</td></tr><tr><td>115</td><td>49224</td></tr><tr><td>113</td><td>50016</td></tr><tr><td>111</td><td>50042</td></tr><tr><td>110</td><td>50117</td></tr><tr><td>105</td><td>51124</td></tr><tr><td>103</td><td>51711</td></tr><tr><td>101</td><td>51719</td></tr><tr><td>100</td><td>51741</td></tr><tr><td>96</td><td>52441</td></tr><tr><td>95</td><td>52443</td></tr><tr><td>93</td><td>52782</td></tr><tr><td>91</td><td>52784</td></tr><tr><td>90</td><td>52796</td></tr><tr><td>85</td><td>53294</td></tr><tr><td>83</td><td>53520</td></tr><tr><td>81</td><td>53528</td></tr><tr><td>80</td><td>53542</td></tr><tr><td>75</td><td>53907</td></tr><tr><td>71</td><td>54036</td></tr><tr><td>70</td><td>54038</td></tr><tr><td>65</td><td>54248</td></tr><tr><td>61</td><td>54338</td></tr><tr><td>60</td><td>54340</td></tr><tr><td>55</td><td>54489</td></tr><tr><td>51</td><td>54534</td></tr><tr><td>50</td><td>54538</td></tr><tr><td>45</td><td>54635</td></tr><tr><td>40</td><td>54654</td></tr><tr><td>35</td><td>54716</td></tr><tr><td>31</td><td>54726</td></tr><tr><td>30</td><td>54728</td></tr><tr><td>25</td><td>54791</td></tr><tr><td>20</td><td>54801</td></tr><tr><td>15</td><td>54838</td></tr><tr><td>10</td><td>54840</td></tr><tr><td>0</td><td>54903</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-7-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e (participation en binôme) : 59469 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-7-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-7-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>395</td><td>1</td></tr><tr><td>340</td><td>3</td></tr><tr><td>330</td><td>9</td></tr><tr><td>320</td><td>15</td></tr><tr><td>315</td><td>20</td></tr><tr><td>311</td><td>24</td></tr><tr><td>310</td><td>26</td></tr><tr><td>305</td><td>59</td></tr><tr><td>301</td><td>61</td></tr><tr><td>300</td><td>63</td></tr><tr><td>295</td><td>130</td></tr><tr><td>293</td><td>138</td></tr><tr><td>291</td><td>140</td></tr><tr><td>290</td><td>150</td></tr><tr><td>285</td><td>272</td></tr><tr><td>281</td><td>286</td></tr><tr><td>280</td><td>312</td></tr><tr><td>275</td><td>515</td></tr><tr><td>273</td><td>548</td></tr><tr><td>271</td><td>558</td></tr><tr><td>270</td><td>584</td></tr><tr><td>266</td><td>994</td></tr><tr><td>265</td><td>996</td></tr><tr><td>263</td><td>1058</td></tr><tr><td>261</td><td>1066</td></tr><tr><td>260</td><td>1124</td></tr><tr><td>255</td><td>1771</td></tr><tr><td>253</td><td>1875</td></tr><tr><td>251</td><td>1897</td></tr><tr><td>250</td><td>1977</td></tr><tr><td>248</td><td>3109</td></tr><tr><td>246</td><td>3111</td></tr><tr><td>245</td><td>3117</td></tr><tr><td>243</td><td>3335</td></tr><tr><td>241</td><td>3374</td></tr><tr><td>240</td><td>3516</td></tr><tr><td>238</td><td>5300</td></tr><tr><td>236</td><td>5304</td></tr><tr><td>235</td><td>5326</td></tr><tr><td>233</td><td>5678</td></tr><tr><td>231</td><td>5736</td></tr><tr><td>230</td><td>5958</td></tr><tr><td>228</td><td>8644</td></tr><tr><td>226</td><td>8654</td></tr><tr><td>225</td><td>8689</td></tr><tr><td>223</td><td>9217</td></tr><tr><td>221</td><td>9345</td></tr><tr><td>220</td><td>9666</td></tr><tr><td>218</td><td>13409</td></tr><tr><td>216</td><td>13423</td></tr><tr><td>215</td><td>13471</td></tr><tr><td>213</td><td>14104</td></tr><tr><td>211</td><td>14256</td></tr><tr><td>210</td><td>14664</td></tr><tr><td>208</td><td>19473</td></tr><tr><td>206</td><td>19491</td></tr><tr><td>205</td><td>19529</td></tr><tr><td>203</td><td>20405</td></tr><tr><td>201</td><td>20551</td></tr><tr><td>200</td><td>21020</td></tr><tr><td>198</td><td>25799</td></tr><tr><td>196</td><td>25827</td></tr><tr><td>195</td><td>25899</td></tr><tr><td>193</td><td>26906</td></tr><tr><td>191</td><td>27081</td></tr><tr><td>190</td><td>27548</td></tr><tr><td>188</td><td>31956</td></tr><tr><td>186</td><td>31975</td></tr><tr><td>185</td><td>32067</td></tr><tr><td>183</td><td>33201</td></tr><tr><td>181</td><td>33322</td></tr><tr><td>180</td><td>33754</td></tr><tr><td>178</td><td>37433</td></tr><tr><td>176</td><td>37453</td></tr><tr><td>175</td><td>37507</td></tr><tr><td>173</td><td>38751</td></tr><tr><td>171</td><td>38877</td></tr><tr><td>170</td><td>39260</td></tr><tr><td>168</td><td>42387</td></tr><tr><td>166</td><td>42403</td></tr><tr><td>165</td><td>42431</td></tr><tr><td>163</td><td>43587</td></tr><tr><td>161</td><td>43684</td></tr><tr><td>160</td><td>43941</td></tr><tr><td>158</td><td>46501</td></tr><tr><td>156</td><td>46515</td></tr><tr><td>155</td><td>46531</td></tr><tr><td>153</td><td>47590</td></tr><tr><td>151</td><td>47682</td></tr><tr><td>150</td><td>47921</td></tr><tr><td>148</td><td>50100</td></tr><tr><td>146</td><td>50102</td></tr><tr><td>145</td><td>50120</td></tr><tr><td>143</td><td>50988</td></tr><tr><td>141</td><td>51031</td></tr><tr><td>140</td><td>51195</td></tr><tr><td>138</td><td>52671</td></tr><tr><td>136</td><td>52673</td></tr><tr><td>135</td><td>52685</td></tr><tr><td>133</td><td>53491</td></tr><tr><td>131</td><td>53539</td></tr><tr><td>130</td><td>53624</td></tr><tr><td>126</td><td>54844</td></tr><tr><td>125</td><td>54851</td></tr><tr><td>123</td><td>55343</td></tr><tr><td>121</td><td>55363</td></tr><tr><td>120</td><td>55421</td></tr><tr><td>116</td><td>56193</td></tr><tr><td>115</td><td>56195</td></tr><tr><td>113</td><td>56549</td></tr><tr><td>111</td><td>56557</td></tr><tr><td>110</td><td>56597</td></tr><tr><td>108</td><td>57199</td></tr><tr><td>106</td><td>57203</td></tr><tr><td>105</td><td>57205</td></tr><tr><td>103</td><td>57437</td></tr><tr><td>101</td><td>57443</td></tr><tr><td>100</td><td>57463</td></tr><tr><td>96</td><td>57838</td></tr><tr><td>95</td><td>57840</td></tr><tr><td>93</td><td>57960</td></tr><tr><td>91</td><td>57962</td></tr><tr><td>90</td><td>57964</td></tr><tr><td>85</td><td>58244</td></tr><tr><td>83</td><td>58331</td></tr><tr><td>81</td><td>58337</td></tr><tr><td>80</td><td>58341</td></tr><tr><td>75</td><td>58515</td></tr><tr><td>73</td><td>58573</td></tr><tr><td>70</td><td>58577</td></tr><tr><td>65</td><td>58689</td></tr><tr><td>60</td><td>58728</td></tr><tr><td>55</td><td>58791</td></tr><tr><td>50</td><td>58816</td></tr><tr><td>45</td><td>58863</td></tr><tr><td>40</td><td>58870</td></tr><tr><td>35</td><td>58917</td></tr><tr><td>30</td><td>58919</td></tr><tr><td>25</td><td>58957</td></tr><tr><td>20</td><td>58959</td></tr><tr><td>15</td><td>58985</td></tr><tr><td>10</td><td>58987</td></tr><tr><td>0</td><td>59024</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-8-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e (participation en binôme) : 52055 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-8-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-8-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>355</td><td>1</td></tr><tr><td>350</td><td>3</td></tr><tr><td>345</td><td>5</td></tr><tr><td>340</td><td>7</td></tr><tr><td>330</td><td>17</td></tr><tr><td>321</td><td>43</td></tr><tr><td>320</td><td>45</td></tr><tr><td>315</td><td>73</td></tr><tr><td>313</td><td>77</td></tr><tr><td>310</td><td>79</td></tr><tr><td>308</td><td>205</td></tr><tr><td>305</td><td>207</td></tr><tr><td>303</td><td>215</td></tr><tr><td>301</td><td>217</td></tr><tr><td>300</td><td>221</td></tr><tr><td>295</td><td>381</td></tr><tr><td>293</td><td>409</td></tr><tr><td>291</td><td>421</td></tr><tr><td>290</td><td>429</td></tr><tr><td>285</td><td>766</td></tr><tr><td>283</td><td>802</td></tr><tr><td>281</td><td>816</td></tr><tr><td>280</td><td>844</td></tr><tr><td>275</td><td>1414</td></tr><tr><td>273</td><td>1506</td></tr><tr><td>271</td><td>1526</td></tr><tr><td>270</td><td>1564</td></tr><tr><td>265</td><td>2474</td></tr><tr><td>263</td><td>2606</td></tr><tr><td>261</td><td>2632</td></tr><tr><td>260</td><td>2700</td></tr><tr><td>258</td><td>3958</td></tr><tr><td>256</td><td>3962</td></tr><tr><td>255</td><td>3970</td></tr><tr><td>253</td><td>4182</td></tr><tr><td>251</td><td>4254</td></tr><tr><td>250</td><td>4423</td></tr><tr><td>248</td><td>6279</td></tr><tr><td>246</td><td>6283</td></tr><tr><td>245</td><td>6289</td></tr><tr><td>243</td><td>6653</td></tr><tr><td>241</td><td>6747</td></tr><tr><td>240</td><td>6915</td></tr><tr><td>238</td><td>9593</td></tr><tr><td>236</td><td>9597</td></tr><tr><td>235</td><td>9621</td></tr><tr><td>233</td><td>10144</td></tr><tr><td>231</td><td>10272</td></tr><tr><td>230</td><td>10505</td></tr><tr><td>228</td><td>13798</td></tr><tr><td>226</td><td>13809</td></tr><tr><td>225</td><td>13839</td></tr><tr><td>223</td><td>14472</td></tr><tr><td>221</td><td>14597</td></tr><tr><td>220</td><td>15003</td></tr><tr><td>218</td><td>18840</td></tr><tr><td>216</td><td>18858</td></tr><tr><td>215</td><td>18898</td></tr><tr><td>213</td><td>19619</td></tr><tr><td>211</td><td>19787</td></tr><tr><td>210</td><td>20238</td></tr><tr><td>208</td><td>24564</td></tr><tr><td>206</td><td>24592</td></tr><tr><td>205</td><td>24658</td></tr><tr><td>203</td><td>25561</td></tr><tr><td>201</td><td>25720</td></tr><tr><td>200</td><td>26157</td></tr><tr><td>198</td><td>30264</td></tr><tr><td>196</td><td>30284</td></tr><tr><td>195</td><td>30326</td></tr><tr><td>193</td><td>31208</td></tr><tr><td>191</td><td>31390</td></tr><tr><td>190</td><td>31762</td></tr><tr><td>188</td><td>35265</td></tr><tr><td>186</td><td>35277</td></tr><tr><td>185</td><td>35334</td></tr><tr><td>183</td><td>36186</td></tr><tr><td>181</td><td>36294</td></tr><tr><td>180</td><td>36672</td></tr><tr><td>178</td><td>39315</td></tr><tr><td>176</td><td>39331</td></tr><tr><td>175</td><td>39371</td></tr><tr><td>173</td><td>40144</td></tr><tr><td>171</td><td>40221</td></tr><tr><td>170</td><td>40470</td></tr><tr><td>168</td><td>42565</td></tr><tr><td>166</td><td>42579</td></tr><tr><td>165</td><td>42611</td></tr><tr><td>163</td><td>43343</td></tr><tr><td>161</td><td>43396</td></tr><tr><td>160</td><td>43601</td></tr><tr><td>158</td><td>45040</td></tr><tr><td>156</td><td>45048</td></tr><tr><td>155</td><td>45062</td></tr><tr><td>153</td><td>45629</td></tr><tr><td>151</td><td>45675</td></tr><tr><td>150</td><td>45829</td></tr><tr><td>148</td><td>47124</td></tr><tr><td>146</td><td>47126</td></tr><tr><td>145</td><td>47138</td></tr><tr><td>143</td><td>47555</td></tr><tr><td>141</td><td>47569</td></tr><tr><td>140</td><td>47645</td></tr><tr><td>138</td><td>48490</td></tr><tr><td>136</td><td>48492</td></tr><tr><td>135</td><td>48498</td></tr><tr><td>133</td><td>48846</td></tr><tr><td>131</td><td>48860</td></tr><tr><td>130</td><td>48914</td></tr><tr><td>126</td><td>49548</td></tr><tr><td>125</td><td>49550</td></tr><tr><td>123</td><td>49791</td></tr><tr><td>121</td><td>49797</td></tr><tr><td>120</td><td>49829</td></tr><tr><td>116</td><td>50242</td></tr><tr><td>115</td><td>50244</td></tr><tr><td>113</td><td>50395</td></tr><tr><td>111</td><td>50397</td></tr><tr><td>110</td><td>50421</td></tr><tr><td>105</td><td>50710</td></tr><tr><td>103</td><td>50819</td></tr><tr><td>101</td><td>50823</td></tr><tr><td>100</td><td>50829</td></tr><tr><td>98</td><td>51014</td></tr><tr><td>95</td><td>51016</td></tr><tr><td>93</td><td>51094</td></tr><tr><td>91</td><td>51098</td></tr><tr><td>90</td><td>51100</td></tr><tr><td>85</td><td>51221</td></tr><tr><td>80</td><td>51262</td></tr><tr><td>75</td><td>51331</td></tr><tr><td>71</td><td>51354</td></tr><tr><td>70</td><td>51358</td></tr><tr><td>65</td><td>51446</td></tr><tr><td>60</td><td>51462</td></tr><tr><td>55</td><td>51501</td></tr><tr><td>50</td><td>51507</td></tr><tr><td>45</td><td>51563</td></tr><tr><td>40</td><td>51570</td></tr><tr><td>35</td><td>51607</td></tr><tr><td>30</td><td>51609</td></tr><tr><td>25</td><td>51654</td></tr><tr><td>20</td><td>51658</td></tr><tr><td>10</td><td>51682</td></tr><tr><td>5</td><td>51726</td></tr><tr><td>0</td><td>51728</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-9-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e (participation en binôme) : 38305 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-9-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-9-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>375</td><td>1</td></tr><tr><td>370</td><td>5</td></tr><tr><td>360</td><td>13</td></tr><tr><td>355</td><td>19</td></tr><tr><td>350</td><td>21</td></tr><tr><td>340</td><td>29</td></tr><tr><td>330</td><td>40</td></tr><tr><td>325</td><td>90</td></tr><tr><td>321</td><td>92</td></tr><tr><td>320</td><td>94</td></tr><tr><td>315</td><td>214</td></tr><tr><td>313</td><td>226</td></tr><tr><td>311</td><td>234</td></tr><tr><td>310</td><td>236</td></tr><tr><td>305</td><td>407</td></tr><tr><td>303</td><td>427</td></tr><tr><td>301</td><td>431</td></tr><tr><td>300</td><td>447</td></tr><tr><td>295</td><td>735</td></tr><tr><td>293</td><td>771</td></tr><tr><td>291</td><td>775</td></tr><tr><td>290</td><td>793</td></tr><tr><td>285</td><td>1331</td></tr><tr><td>283</td><td>1412</td></tr><tr><td>281</td><td>1429</td></tr><tr><td>280</td><td>1451</td></tr><tr><td>276</td><td>2190</td></tr><tr><td>275</td><td>2192</td></tr><tr><td>273</td><td>2291</td></tr><tr><td>271</td><td>2321</td></tr><tr><td>270</td><td>2364</td></tr><tr><td>265</td><td>3504</td></tr><tr><td>263</td><td>3649</td></tr><tr><td>261</td><td>3677</td></tr><tr><td>260</td><td>3759</td></tr><tr><td>258</td><td>5244</td></tr><tr><td>256</td><td>5246</td></tr><tr><td>255</td><td>5256</td></tr><tr><td>253</td><td>5526</td></tr><tr><td>251</td><td>5582</td></tr><tr><td>250</td><td>5734</td></tr><tr><td>248</td><td>7819</td></tr><tr><td>246</td><td>7823</td></tr><tr><td>245</td><td>7831</td></tr><tr><td>243</td><td>8179</td></tr><tr><td>241</td><td>8274</td></tr><tr><td>240</td><td>8449</td></tr><tr><td>238</td><td>10920</td></tr><tr><td>236</td><td>10938</td></tr><tr><td>235</td><td>10950</td></tr><tr><td>233</td><td>11360</td></tr><tr><td>231</td><td>11458</td></tr><tr><td>230</td><td>11701</td></tr><tr><td>228</td><td>14538</td></tr><tr><td>226</td><td>14548</td></tr><tr><td>225</td><td>14568</td></tr><tr><td>223</td><td>15120</td></tr><tr><td>221</td><td>15242</td></tr><tr><td>220</td><td>15578</td></tr><tr><td>218</td><td>18717</td></tr><tr><td>216</td><td>18723</td></tr><tr><td>215</td><td>18751</td></tr><tr><td>213</td><td>19357</td></tr><tr><td>211</td><td>19508</td></tr><tr><td>210</td><td>19836</td></tr><tr><td>208</td><td>22916</td></tr><tr><td>206</td><td>22928</td></tr><tr><td>205</td><td>22970</td></tr><tr><td>203</td><td>23521</td></tr><tr><td>201</td><td>23633</td></tr><tr><td>200</td><td>23886</td></tr><tr><td>198</td><td>26684</td></tr><tr><td>196</td><td>26702</td></tr><tr><td>195</td><td>26737</td></tr><tr><td>193</td><td>27235</td></tr><tr><td>191</td><td>27355</td></tr><tr><td>190</td><td>27620</td></tr><tr><td>188</td><td>29697</td></tr><tr><td>186</td><td>29709</td></tr><tr><td>185</td><td>29736</td></tr><tr><td>183</td><td>30242</td></tr><tr><td>181</td><td>30309</td></tr><tr><td>180</td><td>30533</td></tr><tr><td>178</td><td>32106</td></tr><tr><td>176</td><td>32116</td></tr><tr><td>175</td><td>32130</td></tr><tr><td>173</td><td>32520</td></tr><tr><td>171</td><td>32554</td></tr><tr><td>170</td><td>32718</td></tr><tr><td>168</td><td>33806</td></tr><tr><td>166</td><td>33814</td></tr><tr><td>165</td><td>33840</td></tr><tr><td>163</td><td>34168</td></tr><tr><td>161</td><td>34196</td></tr><tr><td>160</td><td>34270</td></tr><tr><td>156</td><td>35065</td></tr><tr><td>155</td><td>35073</td></tr><tr><td>153</td><td>35346</td></tr><tr><td>151</td><td>35376</td></tr><tr><td>150</td><td>35444</td></tr><tr><td>146</td><td>35979</td></tr><tr><td>145</td><td>35983</td></tr><tr><td>143</td><td>36151</td></tr><tr><td>141</td><td>36159</td></tr><tr><td>140</td><td>36197</td></tr><tr><td>138</td><td>36626</td></tr><tr><td>135</td><td>36628</td></tr><tr><td>133</td><td>36728</td></tr><tr><td>131</td><td>36736</td></tr><tr><td>130</td><td>36759</td></tr><tr><td>126</td><td>37068</td></tr><tr><td>125</td><td>37070</td></tr><tr><td>123</td><td>37161</td></tr><tr><td>121</td><td>37163</td></tr><tr><td>120</td><td>37181</td></tr><tr><td>115</td><td>37368</td></tr><tr><td>111</td><td>37437</td></tr><tr><td>110</td><td>37447</td></tr><tr><td>105</td><td>37556</td></tr><tr><td>101</td><td>37599</td></tr><tr><td>100</td><td>37601</td></tr><tr><td>95</td><td>37694</td></tr><tr><td>91</td><td>37718</td></tr><tr><td>90</td><td>37720</td></tr><tr><td>85</td><td>37784</td></tr><tr><td>80</td><td>37811</td></tr><tr><td>75</td><td>37858</td></tr><tr><td>70</td><td>37868</td></tr><tr><td>65</td><td>37908</td></tr><tr><td>60</td><td>37911</td></tr><tr><td>55</td><td>37930</td></tr><tr><td>50</td><td>37934</td></tr><tr><td>45</td><td>37956</td></tr><tr><td>40</td><td>37959</td></tr><tr><td>30</td><td>37981</td></tr><tr><td>25</td><td>37995</td></tr><tr><td>20</td><td>37997</td></tr><tr><td>15</td><td>38018</td></tr><tr><td>10</td><td>38019</td></tr><tr><td>5</td><td>38040</td></tr><tr><td>0</td><td>38042</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-10-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de (participation en binôme) : 15246 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-10-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-10-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>360</td><td>1</td></tr><tr><td>350</td><td>11</td></tr><tr><td>340</td><td>19</td></tr><tr><td>330</td><td>42</td></tr><tr><td>325</td><td>88</td></tr><tr><td>320</td><td>94</td></tr><tr><td>315</td><td>176</td></tr><tr><td>313</td><td>184</td></tr><tr><td>311</td><td>186</td></tr><tr><td>310</td><td>188</td></tr><tr><td>305</td><td>323</td></tr><tr><td>303</td><td>331</td></tr><tr><td>301</td><td>333</td></tr><tr><td>300</td><td>337</td></tr><tr><td>295</td><td>575</td></tr><tr><td>293</td><td>591</td></tr><tr><td>291</td><td>603</td></tr><tr><td>290</td><td>619</td></tr><tr><td>286</td><td>955</td></tr><tr><td>285</td><td>957</td></tr><tr><td>283</td><td>1005</td></tr><tr><td>281</td><td>1011</td></tr><tr><td>280</td><td>1025</td></tr><tr><td>275</td><td>1466</td></tr><tr><td>273</td><td>1505</td></tr><tr><td>271</td><td>1519</td></tr><tr><td>270</td><td>1545</td></tr><tr><td>266</td><td>2145</td></tr><tr><td>265</td><td>2147</td></tr><tr><td>263</td><td>2219</td></tr><tr><td>261</td><td>2243</td></tr><tr><td>260</td><td>2289</td></tr><tr><td>256</td><td>3093</td></tr><tr><td>255</td><td>3101</td></tr><tr><td>253</td><td>3199</td></tr><tr><td>251</td><td>3231</td></tr><tr><td>250</td><td>3286</td></tr><tr><td>248</td><td>4393</td></tr><tr><td>246</td><td>4399</td></tr><tr><td>245</td><td>4403</td></tr><tr><td>243</td><td>4552</td></tr><tr><td>241</td><td>4607</td></tr><tr><td>240</td><td>4691</td></tr><tr><td>236</td><td>5885</td></tr><tr><td>235</td><td>5895</td></tr><tr><td>233</td><td>6087</td></tr><tr><td>231</td><td>6137</td></tr><tr><td>230</td><td>6234</td></tr><tr><td>226</td><td>7515</td></tr><tr><td>225</td><td>7517</td></tr><tr><td>223</td><td>7714</td></tr><tr><td>221</td><td>7766</td></tr><tr><td>220</td><td>7872</td></tr><tr><td>218</td><td>9186</td></tr><tr><td>216</td><td>9192</td></tr><tr><td>215</td><td>9204</td></tr><tr><td>213</td><td>9395</td></tr><tr><td>211</td><td>9442</td></tr><tr><td>210</td><td>9532</td></tr><tr><td>208</td><td>10718</td></tr><tr><td>206</td><td>10722</td></tr><tr><td>205</td><td>10736</td></tr><tr><td>203</td><td>10906</td></tr><tr><td>201</td><td>10954</td></tr><tr><td>200</td><td>11040</td></tr><tr><td>198</td><td>12096</td></tr><tr><td>196</td><td>12098</td></tr><tr><td>195</td><td>12107</td></tr><tr><td>193</td><td>12251</td></tr><tr><td>191</td><td>12277</td></tr><tr><td>190</td><td>12331</td></tr><tr><td>188</td><td>12934</td></tr><tr><td>186</td><td>12938</td></tr><tr><td>185</td><td>12942</td></tr><tr><td>183</td><td>13048</td></tr><tr><td>181</td><td>13060</td></tr><tr><td>180</td><td>13110</td></tr><tr><td>176</td><td>13533</td></tr><tr><td>175</td><td>13541</td></tr><tr><td>173</td><td>13622</td></tr><tr><td>171</td><td>13630</td></tr><tr><td>170</td><td>13684</td></tr><tr><td>166</td><td>13947</td></tr><tr><td>165</td><td>13951</td></tr><tr><td>163</td><td>14003</td></tr><tr><td>161</td><td>14009</td></tr><tr><td>160</td><td>14021</td></tr><tr><td>158</td><td>14269</td></tr><tr><td>155</td><td>14271</td></tr><tr><td>153</td><td>14311</td></tr><tr><td>151</td><td>14319</td></tr><tr><td>150</td><td>14337</td></tr><tr><td>146</td><td>14537</td></tr><tr><td>145</td><td>14539</td></tr><tr><td>143</td><td>14582</td></tr><tr><td>141</td><td>14586</td></tr><tr><td>140</td><td>14588</td></tr><tr><td>136</td><td>14698</td></tr><tr><td>135</td><td>14700</td></tr><tr><td>133</td><td>14720</td></tr><tr><td>131</td><td>14722</td></tr><tr><td>130</td><td>14728</td></tr><tr><td>125</td><td>14790</td></tr><tr><td>121</td><td>14818</td></tr><tr><td>120</td><td>14820</td></tr><tr><td>115</td><td>14886</td></tr><tr><td>111</td><td>14900</td></tr><tr><td>110</td><td>14902</td></tr><tr><td>105</td><td>14941</td></tr><tr><td>100</td><td>14945</td></tr><tr><td>90</td><td>14989</td></tr><tr><td>81</td><td>15025</td></tr><tr><td>80</td><td>15027</td></tr><tr><td>70</td><td>15037</td></tr><tr><td>65</td><td>15059</td></tr><tr><td>60</td><td>15061</td></tr><tr><td>55</td><td>15073</td></tr><tr><td>50</td><td>15075</td></tr><tr><td>40</td><td>15086</td></tr><tr><td>30</td><td>15090</td></tr><tr><td>25</td><td>15104</td></tr><tr><td>20</td><td>15106</td></tr><tr><td>10</td><td>15116</td></tr><tr><td>0</td><td>15122</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-11-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re (participation en binôme) : 3162 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-11-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-11-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>390</td><td>1</td></tr><tr><td>380</td><td>5</td></tr><tr><td>375</td><td>7</td></tr><tr><td>371</td><td>9</td></tr><tr><td>370</td><td>11</td></tr><tr><td>365</td><td>13</td></tr><tr><td>360</td><td>15</td></tr><tr><td>350</td><td>21</td></tr><tr><td>345</td><td>35</td></tr><tr><td>340</td><td>37</td></tr><tr><td>335</td><td>51</td></tr><tr><td>331</td><td>53</td></tr><tr><td>330</td><td>55</td></tr><tr><td>320</td><td>91</td></tr><tr><td>315</td><td>125</td></tr><tr><td>313</td><td>133</td></tr><tr><td>310</td><td>135</td></tr><tr><td>305</td><td>185</td></tr><tr><td>301</td><td>195</td></tr><tr><td>300</td><td>197</td></tr><tr><td>295</td><td>315</td></tr><tr><td>290</td><td>323</td></tr><tr><td>285</td><td>447</td></tr><tr><td>283</td><td>471</td></tr><tr><td>280</td><td>475</td></tr><tr><td>275</td><td>657</td></tr><tr><td>273</td><td>667</td></tr><tr><td>271</td><td>671</td></tr><tr><td>270</td><td>673</td></tr><tr><td>265</td><td>845</td></tr><tr><td>263</td><td>871</td></tr><tr><td>261</td><td>875</td></tr><tr><td>260</td><td>881</td></tr><tr><td>255</td><td>1102</td></tr><tr><td>253</td><td>1118</td></tr><tr><td>251</td><td>1124</td></tr><tr><td>250</td><td>1137</td></tr><tr><td>245</td><td>1395</td></tr><tr><td>243</td><td>1417</td></tr><tr><td>241</td><td>1425</td></tr><tr><td>240</td><td>1435</td></tr><tr><td>235</td><td>1670</td></tr><tr><td>233</td><td>1710</td></tr><tr><td>231</td><td>1716</td></tr><tr><td>230</td><td>1726</td></tr><tr><td>226</td><td>1974</td></tr><tr><td>225</td><td>1976</td></tr><tr><td>223</td><td>2010</td></tr><tr><td>221</td><td>2012</td></tr><tr><td>220</td><td>2020</td></tr><tr><td>215</td><td>2244</td></tr><tr><td>213</td><td>2288</td></tr><tr><td>211</td><td>2294</td></tr><tr><td>210</td><td>2304</td></tr><tr><td>208</td><td>2492</td></tr><tr><td>205</td><td>2496</td></tr><tr><td>203</td><td>2520</td></tr><tr><td>201</td><td>2524</td></tr><tr><td>200</td><td>2540</td></tr><tr><td>198</td><td>2700</td></tr><tr><td>196</td><td>2704</td></tr><tr><td>195</td><td>2706</td></tr><tr><td>193</td><td>2714</td></tr><tr><td>191</td><td>2716</td></tr><tr><td>190</td><td>2720</td></tr><tr><td>185</td><td>2831</td></tr><tr><td>181</td><td>2846</td></tr><tr><td>180</td><td>2852</td></tr><tr><td>176</td><td>2914</td></tr><tr><td>175</td><td>2916</td></tr><tr><td>171</td><td>2928</td></tr><tr><td>170</td><td>2930</td></tr><tr><td>165</td><td>2978</td></tr><tr><td>160</td><td>2989</td></tr><tr><td>155</td><td>3031</td></tr><tr><td>150</td><td>3032</td></tr><tr><td>145</td><td>3052</td></tr><tr><td>140</td><td>3060</td></tr><tr><td>135</td><td>3068</td></tr><tr><td>130</td><td>3072</td></tr><tr><td>125</td><td>3087</td></tr><tr><td>121</td><td>3093</td></tr><tr><td>120</td><td>3095</td></tr><tr><td>115</td><td>3107</td></tr><tr><td>110</td><td>3108</td></tr><tr><td>105</td><td>3116</td></tr><tr><td>100</td><td>3118</td></tr><tr><td>90</td><td>3122</td></tr><tr><td>40</td><td>3128</td></tr><tr><td>30</td><td>3130</td></tr><tr><td>20</td><td>3131</td></tr><tr><td>0</td><td>3133</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-12-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale (participation en binôme) : 2252 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-12-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-12-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>370</td><td>1</td></tr><tr><td>360</td><td>5</td></tr><tr><td>350</td><td>11</td></tr><tr><td>345</td><td>27</td></tr><tr><td>340</td><td>31</td></tr><tr><td>335</td><td>37</td></tr><tr><td>330</td><td>39</td></tr><tr><td>320</td><td>71</td></tr><tr><td>315</td><td>135</td></tr><tr><td>310</td><td>137</td></tr><tr><td>305</td><td>211</td></tr><tr><td>301</td><td>215</td></tr><tr><td>300</td><td>217</td></tr><tr><td>295</td><td>301</td></tr><tr><td>293</td><td>307</td></tr><tr><td>291</td><td>309</td></tr><tr><td>290</td><td>311</td></tr><tr><td>285</td><td>404</td></tr><tr><td>283</td><td>418</td></tr><tr><td>281</td><td>424</td></tr><tr><td>280</td><td>426</td></tr><tr><td>275</td><td>538</td></tr><tr><td>273</td><td>546</td></tr><tr><td>271</td><td>552</td></tr><tr><td>270</td><td>556</td></tr><tr><td>265</td><td>668</td></tr><tr><td>263</td><td>686</td></tr><tr><td>261</td><td>698</td></tr><tr><td>260</td><td>706</td></tr><tr><td>255</td><td>846</td></tr><tr><td>253</td><td>852</td></tr><tr><td>251</td><td>858</td></tr><tr><td>250</td><td>866</td></tr><tr><td>245</td><td>1021</td></tr><tr><td>243</td><td>1044</td></tr><tr><td>241</td><td>1050</td></tr><tr><td>240</td><td>1066</td></tr><tr><td>238</td><td>1243</td></tr><tr><td>235</td><td>1245</td></tr><tr><td>233</td><td>1253</td></tr><tr><td>231</td><td>1263</td></tr><tr><td>230</td><td>1265</td></tr><tr><td>225</td><td>1429</td></tr><tr><td>223</td><td>1443</td></tr><tr><td>221</td><td>1447</td></tr><tr><td>220</td><td>1457</td></tr><tr><td>216</td><td>1598</td></tr><tr><td>215</td><td>1600</td></tr><tr><td>213</td><td>1622</td></tr><tr><td>211</td><td>1624</td></tr><tr><td>210</td><td>1632</td></tr><tr><td>208</td><td>1758</td></tr><tr><td>205</td><td>1760</td></tr><tr><td>203</td><td>1776</td></tr><tr><td>201</td><td>1780</td></tr><tr><td>200</td><td>1786</td></tr><tr><td>195</td><td>1861</td></tr><tr><td>193</td><td>1873</td></tr><tr><td>191</td><td>1875</td></tr><tr><td>190</td><td>1881</td></tr><tr><td>186</td><td>1972</td></tr><tr><td>185</td><td>1974</td></tr><tr><td>181</td><td>1994</td></tr><tr><td>180</td><td>2000</td></tr><tr><td>175</td><td>2056</td></tr><tr><td>170</td><td>2062</td></tr><tr><td>165</td><td>2094</td></tr><tr><td>161</td><td>2096</td></tr><tr><td>160</td><td>2100</td></tr><tr><td>155</td><td>2120</td></tr><tr><td>150</td><td>2126</td></tr><tr><td>145</td><td>2156</td></tr><tr><td>141</td><td>2158</td></tr><tr><td>140</td><td>2160</td></tr><tr><td>135</td><td>2170</td></tr><tr><td>130</td><td>2174</td></tr><tr><td>125</td><td>2184</td></tr><tr><td>120</td><td>2190</td></tr><tr><td>115</td><td>2196</td></tr><tr><td>110</td><td>2198</td></tr><tr><td>100</td><td>2204</td></tr><tr><td>90</td><td>2210</td></tr><tr><td>80</td><td>2212</td></tr><tr><td>75</td><td>2220</td></tr><tr><td>70</td><td>2222</td></tr><tr><td>50</td><td>2230</td></tr><tr><td>40</td><td>2232</td></tr><tr><td>30</td><td>2238</td></tr><tr><td>0</td><td>2240</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-13-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 2de pro. (participation en binôme) : 667 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-13-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-13-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>291</td><td>1</td></tr><tr><td>290</td><td>3</td></tr><tr><td>280</td><td>5</td></tr><tr><td>273</td><td>8</td></tr><tr><td>270</td><td>10</td></tr><tr><td>260</td><td>12</td></tr><tr><td>253</td><td>18</td></tr><tr><td>250</td><td>20</td></tr><tr><td>245</td><td>30</td></tr><tr><td>240</td><td>34</td></tr><tr><td>235</td><td>50</td></tr><tr><td>233</td><td>54</td></tr><tr><td>231</td><td>56</td></tr><tr><td>230</td><td>66</td></tr><tr><td>225</td><td>108</td></tr><tr><td>223</td><td>114</td></tr><tr><td>221</td><td>116</td></tr><tr><td>220</td><td>122</td></tr><tr><td>215</td><td>170</td></tr><tr><td>213</td><td>176</td></tr><tr><td>210</td><td>180</td></tr><tr><td>205</td><td>240</td></tr><tr><td>200</td><td>251</td></tr><tr><td>195</td><td>295</td></tr><tr><td>193</td><td>307</td></tr><tr><td>190</td><td>309</td></tr><tr><td>185</td><td>345</td></tr><tr><td>181</td><td>349</td></tr><tr><td>180</td><td>351</td></tr><tr><td>175</td><td>379</td></tr><tr><td>173</td><td>389</td></tr><tr><td>171</td><td>391</td></tr><tr><td>170</td><td>395</td></tr><tr><td>165</td><td>427</td></tr><tr><td>160</td><td>441</td></tr><tr><td>156</td><td>473</td></tr><tr><td>155</td><td>475</td></tr><tr><td>151</td><td>489</td></tr><tr><td>150</td><td>493</td></tr><tr><td>145</td><td>524</td></tr><tr><td>141</td><td>534</td></tr><tr><td>140</td><td>538</td></tr><tr><td>135</td><td>566</td></tr><tr><td>130</td><td>568</td></tr><tr><td>125</td><td>584</td></tr><tr><td>120</td><td>586</td></tr><tr><td>115</td><td>596</td></tr><tr><td>111</td><td>603</td></tr><tr><td>110</td><td>605</td></tr><tr><td>105</td><td>613</td></tr><tr><td>100</td><td>621</td></tr><tr><td>95</td><td>627</td></tr><tr><td>90</td><td>631</td></tr><tr><td>80</td><td>637</td></tr><tr><td>75</td><td>647</td></tr><tr><td>65</td><td>648</td></tr><tr><td>60</td><td>650</td></tr><tr><td>50</td><td>652</td></tr><tr><td>30</td><td>657</td></tr><tr><td>10</td><td>658</td></tr><tr><td>0</td><td>660</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-14-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 1re pro. (participation en binôme) : 255 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-14-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-14-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>310</td><td>1</td></tr><tr><td>300</td><td>3</td></tr><tr><td>270</td><td>5</td></tr><tr><td>260</td><td>7</td></tr><tr><td>255</td><td>11</td></tr><tr><td>251</td><td>13</td></tr><tr><td>250</td><td>15</td></tr><tr><td>240</td><td>27</td></tr><tr><td>235</td><td>33</td></tr><tr><td>233</td><td>35</td></tr><tr><td>230</td><td>37</td></tr><tr><td>225</td><td>51</td></tr><tr><td>221</td><td>57</td></tr><tr><td>220</td><td>61</td></tr><tr><td>215</td><td>83</td></tr><tr><td>213</td><td>87</td></tr><tr><td>211</td><td>89</td></tr><tr><td>210</td><td>91</td></tr><tr><td>205</td><td>111</td></tr><tr><td>201</td><td>113</td></tr><tr><td>200</td><td>115</td></tr><tr><td>196</td><td>127</td></tr><tr><td>190</td><td>131</td></tr><tr><td>185</td><td>145</td></tr><tr><td>183</td><td>152</td></tr><tr><td>181</td><td>154</td></tr><tr><td>180</td><td>156</td></tr><tr><td>170</td><td>169</td></tr><tr><td>165</td><td>179</td></tr><tr><td>163</td><td>181</td></tr><tr><td>161</td><td>183</td></tr><tr><td>160</td><td>184</td></tr><tr><td>155</td><td>197</td></tr><tr><td>150</td><td>199</td></tr><tr><td>145</td><td>216</td></tr><tr><td>140</td><td>220</td></tr><tr><td>135</td><td>222</td></tr><tr><td>130</td><td>226</td></tr><tr><td>120</td><td>228</td></tr><tr><td>110</td><td>234</td></tr><tr><td>100</td><td>238</td></tr><tr><td>80</td><td>240</td></tr><tr><td>75</td><td>244</td></tr><tr><td>70</td><td>247</td></tr><tr><td>60</td><td>249</td></tr><tr><td>0</td><td>251</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-15-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie Tale pro. (participation en binôme) : 196 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-15-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-15-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>300</td><td>1</td></tr><tr><td>290</td><td>3</td></tr><tr><td>280</td><td>9</td></tr><tr><td>270</td><td>13</td></tr><tr><td>260</td><td>25</td></tr><tr><td>250</td><td>34</td></tr><tr><td>241</td><td>42</td></tr><tr><td>240</td><td>44</td></tr><tr><td>235</td><td>50</td></tr><tr><td>230</td><td>52</td></tr><tr><td>225</td><td>66</td></tr><tr><td>221</td><td>69</td></tr><tr><td>220</td><td>74</td></tr><tr><td>213</td><td>90</td></tr><tr><td>210</td><td>91</td></tr><tr><td>205</td><td>101</td></tr><tr><td>203</td><td>103</td></tr><tr><td>201</td><td>105</td></tr><tr><td>200</td><td>106</td></tr><tr><td>190</td><td>119</td></tr><tr><td>186</td><td>137</td></tr><tr><td>180</td><td>139</td></tr><tr><td>173</td><td>144</td></tr><tr><td>171</td><td>146</td></tr><tr><td>170</td><td>148</td></tr><tr><td>161</td><td>154</td></tr><tr><td>160</td><td>155</td></tr><tr><td>151</td><td>157</td></tr><tr><td>150</td><td>159</td></tr><tr><td>145</td><td>165</td></tr><tr><td>140</td><td>167</td></tr><tr><td>130</td><td>174</td></tr><tr><td>110</td><td>179</td></tr><tr><td>100</td><td>183</td></tr><tr><td>50</td><td>185</td></tr><tr><td>40</td><td>187</td></tr><tr><td>20</td><td>189</td></tr><tr><td>0</td><td>191</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-16-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 6e Segpa (participation en binôme) : 557 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-16-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-16-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>250</td><td>1</td></tr><tr><td>240</td><td>2</td></tr><tr><td>235</td><td>3</td></tr><tr><td>220</td><td>5</td></tr><tr><td>211</td><td>14</td></tr><tr><td>210</td><td>18</td></tr><tr><td>201</td><td>32</td></tr><tr><td>200</td><td>33</td></tr><tr><td>198</td><td>48</td></tr><tr><td>195</td><td>49</td></tr><tr><td>193</td><td>53</td></tr><tr><td>191</td><td>54</td></tr><tr><td>190</td><td>55</td></tr><tr><td>185</td><td>73</td></tr><tr><td>180</td><td>77</td></tr><tr><td>175</td><td>102</td></tr><tr><td>170</td><td>109</td></tr><tr><td>165</td><td>122</td></tr><tr><td>163</td><td>136</td></tr><tr><td>161</td><td>138</td></tr><tr><td>160</td><td>139</td></tr><tr><td>155</td><td>159</td></tr><tr><td>153</td><td>173</td></tr><tr><td>151</td><td>177</td></tr><tr><td>150</td><td>178</td></tr><tr><td>145</td><td>200</td></tr><tr><td>141</td><td>216</td></tr><tr><td>140</td><td>221</td></tr><tr><td>135</td><td>243</td></tr><tr><td>130</td><td>267</td></tr><tr><td>125</td><td>308</td></tr><tr><td>120</td><td>333</td></tr><tr><td>115</td><td>353</td></tr><tr><td>110</td><td>375</td></tr><tr><td>105</td><td>391</td></tr><tr><td>103</td><td>410</td></tr><tr><td>101</td><td>412</td></tr><tr><td>100</td><td>413</td></tr><tr><td>95</td><td>431</td></tr><tr><td>90</td><td>452</td></tr><tr><td>85</td><td>464</td></tr><tr><td>80</td><td>475</td></tr><tr><td>75</td><td>480</td></tr><tr><td>70</td><td>489</td></tr><tr><td>65</td><td>498</td></tr><tr><td>60</td><td>507</td></tr><tr><td>55</td><td>518</td></tr><tr><td>50</td><td>520</td></tr><tr><td>45</td><td>524</td></tr><tr><td>30</td><td>527</td></tr><tr><td>20</td><td>529</td></tr><tr><td>10</td><td>530</td></tr><tr><td>0</td><td>533</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-17-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 5e Segpa (participation en binôme) : 470 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-17-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-17-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>320</td><td>1</td></tr><tr><td>310</td><td>2</td></tr><tr><td>300</td><td>3</td></tr><tr><td>280</td><td>4</td></tr><tr><td>260</td><td>5</td></tr><tr><td>250</td><td>6</td></tr><tr><td>243</td><td>11</td></tr><tr><td>240</td><td>13</td></tr><tr><td>230</td><td>18</td></tr><tr><td>221</td><td>20</td></tr><tr><td>220</td><td>21</td></tr><tr><td>215</td><td>36</td></tr><tr><td>213</td><td>39</td></tr><tr><td>211</td><td>40</td></tr><tr><td>210</td><td>44</td></tr><tr><td>205</td><td>65</td></tr><tr><td>200</td><td>68</td></tr><tr><td>195</td><td>89</td></tr><tr><td>191</td><td>93</td></tr><tr><td>190</td><td>94</td></tr><tr><td>188</td><td>115</td></tr><tr><td>185</td><td>116</td></tr><tr><td>181</td><td>123</td></tr><tr><td>180</td><td>124</td></tr><tr><td>175</td><td>152</td></tr><tr><td>173</td><td>155</td></tr><tr><td>171</td><td>157</td></tr><tr><td>170</td><td>158</td></tr><tr><td>165</td><td>181</td></tr><tr><td>163</td><td>200</td></tr><tr><td>161</td><td>202</td></tr><tr><td>160</td><td>203</td></tr><tr><td>155</td><td>220</td></tr><tr><td>151</td><td>235</td></tr><tr><td>150</td><td>238</td></tr><tr><td>145</td><td>256</td></tr><tr><td>140</td><td>267</td></tr><tr><td>135</td><td>286</td></tr><tr><td>131</td><td>292</td></tr><tr><td>130</td><td>295</td></tr><tr><td>125</td><td>316</td></tr><tr><td>120</td><td>336</td></tr><tr><td>115</td><td>340</td></tr><tr><td>110</td><td>347</td></tr><tr><td>105</td><td>359</td></tr><tr><td>101</td><td>372</td></tr><tr><td>100</td><td>374</td></tr><tr><td>95</td><td>380</td></tr><tr><td>90</td><td>386</td></tr><tr><td>85</td><td>395</td></tr><tr><td>80</td><td>400</td></tr><tr><td>75</td><td>410</td></tr><tr><td>70</td><td>414</td></tr><tr><td>60</td><td>424</td></tr><tr><td>55</td><td>427</td></tr><tr><td>50</td><td>431</td></tr><tr><td>40</td><td>435</td></tr><tr><td>30</td><td>439</td></tr><tr><td>10</td><td>442</td></tr><tr><td>0</td><td>443</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-18-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 4e Segpa (participation en binôme) : 476 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-18-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-18-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>280</td><td>1</td></tr><tr><td>270</td><td>3</td></tr><tr><td>265</td><td>5</td></tr><tr><td>260</td><td>6</td></tr><tr><td>258</td><td>12</td></tr><tr><td>251</td><td>14</td></tr><tr><td>250</td><td>15</td></tr><tr><td>245</td><td>18</td></tr><tr><td>240</td><td>20</td></tr><tr><td>235</td><td>34</td></tr><tr><td>231</td><td>36</td></tr><tr><td>230</td><td>37</td></tr><tr><td>228</td><td>48</td></tr><tr><td>225</td><td>49</td></tr><tr><td>223</td><td>50</td></tr><tr><td>221</td><td>51</td></tr><tr><td>220</td><td>52</td></tr><tr><td>215</td><td>64</td></tr><tr><td>213</td><td>67</td></tr><tr><td>211</td><td>69</td></tr><tr><td>210</td><td>70</td></tr><tr><td>205</td><td>86</td></tr><tr><td>203</td><td>91</td></tr><tr><td>200</td><td>92</td></tr><tr><td>191</td><td>119</td></tr><tr><td>190</td><td>121</td></tr><tr><td>188</td><td>151</td></tr><tr><td>186</td><td>153</td></tr><tr><td>185</td><td>154</td></tr><tr><td>180</td><td>157</td></tr><tr><td>175</td><td>186</td></tr><tr><td>173</td><td>189</td></tr><tr><td>171</td><td>190</td></tr><tr><td>170</td><td>191</td></tr><tr><td>165</td><td>203</td></tr><tr><td>163</td><td>218</td></tr><tr><td>161</td><td>219</td></tr><tr><td>160</td><td>222</td></tr><tr><td>155</td><td>236</td></tr><tr><td>150</td><td>242</td></tr><tr><td>145</td><td>270</td></tr><tr><td>143</td><td>282</td></tr><tr><td>141</td><td>284</td></tr><tr><td>140</td><td>292</td></tr><tr><td>135</td><td>307</td></tr><tr><td>130</td><td>313</td></tr><tr><td>125</td><td>340</td></tr><tr><td>121</td><td>346</td></tr><tr><td>120</td><td>348</td></tr><tr><td>115</td><td>358</td></tr><tr><td>110</td><td>370</td></tr><tr><td>105</td><td>376</td></tr><tr><td>100</td><td>381</td></tr><tr><td>95</td><td>392</td></tr><tr><td>91</td><td>396</td></tr><tr><td>90</td><td>399</td></tr><tr><td>80</td><td>410</td></tr><tr><td>75</td><td>414</td></tr><tr><td>70</td><td>417</td></tr><tr><td>65</td><td>419</td></tr><tr><td>60</td><td>422</td></tr><tr><td>55</td><td>424</td></tr><tr><td>50</td><td>426</td></tr><tr><td>40</td><td>428</td></tr><tr><td>30</td><td>433</td></tr><tr><td>20</td><td>436</td></tr><tr><td>10</td><td>438</td></tr><tr><td>0</td><td>439</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div><div id='tabs-96310001463823446-19-2' class='content-nbContestants2'>
            <table width=650>
            
      <tr>
         <td colspan=2 align=center>
            <h2>Catégorie 3e Segpa (participation en binôme) : 397 élèves</h2>
            <i>Score maximum atteignable : 400</i>
         </td>
      </tr>
      <tr>
         <td>
            <div id='graph-96310001463823446-19-2' style='width:480px;height:320px'></div>
         </td>
         <td>
            <div id='ranks-96310001463823446-19-2' style='height:300px;width:120px;overflow-y:scroll'>
            <table border=1 cellspacing=0>
            <tr><td><b>Score</b></td><td><b>Rang</b></td></tr><tr><td>290</td><td>1</td></tr><tr><td>285</td><td>4</td></tr><tr><td>283</td><td>5</td></tr><tr><td>280</td><td>6</td></tr><tr><td>271</td><td>10</td></tr><tr><td>270</td><td>11</td></tr><tr><td>265</td><td>13</td></tr><tr><td>260</td><td>14</td></tr><tr><td>255</td><td>22</td></tr><tr><td>250</td><td>24</td></tr><tr><td>245</td><td>33</td></tr><tr><td>241</td><td>34</td></tr><tr><td>240</td><td>35</td></tr><tr><td>235</td><td>45</td></tr><tr><td>230</td><td>49</td></tr><tr><td>220</td><td>58</td></tr><tr><td>215</td><td>70</td></tr><tr><td>211</td><td>73</td></tr><tr><td>210</td><td>75</td></tr><tr><td>205</td><td>94</td></tr><tr><td>203</td><td>99</td></tr><tr><td>201</td><td>101</td></tr><tr><td>200</td><td>105</td></tr><tr><td>195</td><td>133</td></tr><tr><td>191</td><td>140</td></tr><tr><td>190</td><td>141</td></tr><tr><td>185</td><td>169</td></tr><tr><td>180</td><td>171</td></tr><tr><td>175</td><td>184</td></tr><tr><td>171</td><td>187</td></tr><tr><td>170</td><td>191</td></tr><tr><td>165</td><td>206</td></tr><tr><td>160</td><td>214</td></tr><tr><td>155</td><td>234</td></tr><tr><td>150</td><td>240</td></tr><tr><td>145</td><td>249</td></tr><tr><td>143</td><td>259</td></tr><tr><td>140</td><td>261</td></tr><tr><td>135</td><td>277</td></tr><tr><td>131</td><td>289</td></tr><tr><td>130</td><td>290</td></tr><tr><td>125</td><td>301</td></tr><tr><td>121</td><td>304</td></tr><tr><td>120</td><td>306</td></tr><tr><td>115</td><td>310</td></tr><tr><td>111</td><td>316</td></tr><tr><td>110</td><td>318</td></tr><tr><td>105</td><td>326</td></tr><tr><td>100</td><td>331</td></tr><tr><td>95</td><td>337</td></tr><tr><td>90</td><td>339</td></tr><tr><td>85</td><td>341</td></tr><tr><td>80</td><td>343</td></tr><tr><td>75</td><td>345</td></tr><tr><td>70</td><td>347</td></tr><tr><td>60</td><td>350</td></tr><tr><td>50</td><td>353</td></tr><tr><td>40</td><td>355</td></tr><tr><td>30</td><td>356</td></tr><tr><td>20</td><td>357</td></tr><tr><td>15</td><td>360</td></tr><tr><td>10</td><td>361</td></tr><tr><td>0</td><td>365</td></tr>
            </table>
            </div>
         </td>
      </tr>
            </table>
         </div></div>
