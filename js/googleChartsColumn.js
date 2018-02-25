google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawStuff);
google.charts.setOnLoadCallback(drawStuff1);
google.charts.setOnLoadCallback(drawStuff2);
google.charts.setOnLoadCallback(drawStuff3);
google.charts.setOnLoadCallback(drawStuff4);

function drawStuff() {
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Pocet studentov'],
        ["A", 20],
        ["B", 11],
        ["C", 13],
        ["D", 7],
        ['E', 5],
        ['FX', 0],
        ['FN', 1]
    ]);

    var options = {
        width: 400,
        legend: { position: 'none' },
        axes: {
            x: {
                0: { side: 'top', label: 'Známky za rok 2012/13 - Celkovy pocet studentov 62'} // Top x-axis.
            }
        },
        bar: { groupWidth: "75%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_div'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
}

function drawStuff1() {
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Pocet studentov'],
        ["A", 20],
        ["B", 19],
        ["C", 6],
        ["D", 3],
        ['E', 1],
        ['FX', 0],
        ['FN', 0]
    ]);

    var options = {
        width: 400,
        legend: { position: 'none' },
        axes: {
            x: {
                0: { side: 'top', label: 'Známky za rok 2013/14 - Celkovy pocet studentov 53'} // Top x-axis.
            }
        },
        bar: { groupWidth: "75%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_div1'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
}

function drawStuff2() {
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Pocet studentov'],
        ["A", 9],
        ["B", 19],
        ["C", 22],
        ["D", 0],
        ['E', 0],
        ['FX', 0],
        ['FN', 3]
    ]);

    var options = {
        width: 400,
        legend: { position: 'none' },
        axes: {
            x: {
                0: { side: 'top', label: 'Známky za rok 2014/15 - Celkovy pocet studentov 53'} // Top x-axis.
            }
        },
        bar: { groupWidth: "75%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_div2'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
}

function drawStuff3() {
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Pocet studentov'],
        ["A", 10],
        ["B", 33],
        ["C", 35],
        ["D", 20],
        ['E', 14],
        ['FX', 0],
        ['FN', 0]
    ]);

    var options = {
        width: 400,
        legend: { position: 'none' },
        axes: {
            x: {
                0: { side: 'top', label: 'Známky za rok 2015/16 - Celkovy pocet studentov 112'} // Top x-axis.
            }
        },
        bar: { groupWidth: "75%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_div3'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
}

function drawStuff4() {
    var data = new google.visualization.arrayToDataTable([
        ['Move', 'Pocet studentov'],
        ["A", 5],
        ["B", 18],
        ["C", 31],
        ["D", 26],
        ['E', 27],
        ['FX', 18],
        ['FN', 3]
    ]);

    var options = {
        width: 400,
        legend: { position: 'none' },
        axes: {
            x: {
                0: { side: 'top', label: 'Známky za rok 2016/17  - Celkovy pocet studentov 128'} // Top x-axis.
            }
        },
        bar: { groupWidth: "75%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_div4'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
}