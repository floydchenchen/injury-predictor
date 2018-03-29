function Chart(array) {
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Injures');
        data.addColumn('number', 'Percentage');

        data.addRows(array);

        var options = {
            title: 'Pecentage of Possible Injure Types',
            backgroundColor: '#ffffff79',
            axes: {
                x: {
                    0: {side: 'top'}
                }
            },
            series: {
                0: { color: '#ffcc6d' }
            },
            height: 400,
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart'));

        chart.draw(data, options);
    }
}