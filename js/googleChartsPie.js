// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart1);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);
google.charts.setOnLoadCallback(drawChart4);
google.charts.setOnLoadCallback(drawChart5);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart1() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Rok');
    data.addColumn('number', 'Znamka');
    data.addRows([
        ['A', 20],
        ['B', 11],
        ['C', 13],
        ['D', 7],
        ['E', 5],
        ['FX', 0],
        ['FN', 1]
    ]);

    // Set chart options
    var options = {'title':'Známky za rok 2012/13:',
        'width':400,
        'height':300,
        'sliceVisibilityThreshold':0};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

function drawChart2() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Rok');
    data.addColumn('number', 'Znamka');
    data.addRows([
        ['A', 20],
        ['B', 19],
        ['C', 6],
        ['D', 3],
        ['E', 1],
        ['FX', 0],
        ['FN', 0]
    ]);

    // Set chart options
    var options = {'title':'Známky za rok 2013/14:',
        'width':400,
        'height':300,
        'sliceVisibilityThreshold':0};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
}

function drawChart3() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Rok');
    data.addColumn('number', 'Znamka');
    data.addRows([
        ['A', 9],
        ['B', 19],
        ['C', 22],
        ['D', 0],
        ['E', 0],
        ['FX', 0],
        ['FN', 3]
    ]);

    // Set chart options
    var options = {'title':'Známky za rok 2014/15:',
        'width':400,
        'height':300,
        'sliceVisibilityThreshold':0};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
}

function drawChart4() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Rok');
    data.addColumn('number', 'Znamka');
    data.addRows([
        ['A', 10],
        ['B', 33],
        ['C', 35],
        ['D', 20],
        ['E', 14],
        ['FX', 0],
        ['FN', 0]
    ]);

    // Set chart options
    var options = {'title':'Známky za rok 2015/16:',
        'width':400,
        'height':300,
        'sliceVisibilityThreshold':0};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
    chart.draw(data, options);
}

function drawChart5() {
    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Rok');
    data.addColumn('number', 'Znamka');
    data.addRows([
        ['A', 5],
        ['B', 18],
        ['C', 31],
        ['D', 26],
        ['E', 27],
        ['FX', 18],
        ['FN', 3]
    ]);

    // Set chart options
    var options = {'title':'Známky za rok 2016/17:',
        'width':400,
        'height':300,
        'sliceVisibilityThreshold':0};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
    chart.draw(data, options);
}