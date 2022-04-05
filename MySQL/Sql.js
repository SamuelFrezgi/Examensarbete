

var allowChart;
var myChary;

function drawGraph_WithChart(templatedData) {
    //get the canvas id to show the chart
    const canvas = document.getElementById('myCharyOne');
    //check to show the chart or not
    if (!allowChart) {
        allowChart = true;
        // loads the canvas on the browser/
        myChary = new Chart(canvas, {
            type: 'line', //chart type
            data: templatedData,//data to display on the chart 
            options: {
                options: {
                    scales: {
                        yAxes: [{
                            display: true, // display true
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }

            }

        });

    } else {
        myChary.config.data = templatedData;
        myChary.update();
    }

}