<!---/**
 * Created by PhpStorm.
 * User: mzikl
 * Date: 22.2.2018
 * Time: 11:09
 */--->
    <a class="mainDiv">
        <h1>Kolacove grafy:</h1>
        <a href="index.php" style="float: right" onclick="function clearContent() {
                                document.getElementById("bodyId").innerHTML = "";
                                }" >
            <img src="img/pointForward.png" width="80px" height="50px" style="transform: rotate(180deg)">
        </a>
        <div id="chart_div" class="chart"></div>
        <div id="chart_div1" class="chart"></div>
        <div id="chart_div2" class="chart"></div>
        <div id="chart_div3" class="chart"></div>
        <div id="chart_div4" class="chart"></div>
    </div>
    <div  class="mainDiv">
        <h1>Stlpcove grafy:</h1>
        <div id="top_div" class="chart1"></div>
        <div id="top_div1" class="chart1"></div>
        <div id="top_div2" class="chart1"></div>
        <div id="top_div3" class="chart1"></div>
        <div id="top_div4" class="chart1"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" ></script >
    <script type="text/javascript" src="js/googleChartsPie.js" ></script >
    <script type="text/javascript" src="js/googleChartsColumn.js" ></script >