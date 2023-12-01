<?php 
require_once("./includes/head.php")
?>
<style>
.grid-container {
  display: grid;
  gap: 20px;
}

.grid-item {
  background-color: #F3EEEA;
  text-align: center;
  border-radius: 10px;
  /* display: flex;
  justify-content: center;
  align-items: center; */
  font-size: 30px;
  height: 8em;
  font-weight: 700;
  box-shadow: 10px 10px 5px #aaaaaa;
  overflow: hidden;
}

.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}

.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}

.item3 {
  grid-column: 1 / span 3;
  grid-row: 3;
}
.queueTitle{
    text-align: center;
    margin-top: 20px;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<h1 class="queueTitle">Queueing Number</h1>

<div class="grid-container">
  <div class="grid-item item1">NBI
    <p>N-2312</p>
    <p>N-2313</p>
    <p>N-2314</p>
    <p>N-2315</p>
    <p>N-2316</p>
  </div>
  <div class="grid-item item2">POLICE CLEARANCE
    <p>PC-2212</p>
    <p>PC-2213</p>
    <p>PC-2214</p>
    <p>PC-2215</p>
    <p>PC-2216</p>
  </div>
  <div class="grid-item item3">OTHERS
  <p>0-2612</p>
  <p>0-2613</p>
  <p>0-2614</p>
  <p>0-2615</p>
  <p>0-2616</p>
  </div>  
</div>
<h1 class="queueTitle">N-2312 <br>
Please proceed to your transaction</h1>
</body>
</html>


