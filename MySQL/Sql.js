


//Required variable to store the data retrivial time  and keep trak of number of iteration and if enable chart  or not

var allowChart = false;
var myChary;

function getData() {
    // get the selected region by the user
    let county = document.getElementById('sorting').value;
    console.log(county, 'sorting');
   
    // make a request to database to get the number of records
    $.ajax({
        url: 'mySQLConnection.php?regions=' + county,
        type: 'get',
        dataType: 'json',
        success: function (data) {
            // pass the fetched data to formatedData function to format it according to requirements and-
            // then pass the formated data to 
            // drawGraph
            drawGraph_WithChart(templateData(data));
        },
        error: function (request, status, error) {
            console.error(error);
        }
    });

}

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

