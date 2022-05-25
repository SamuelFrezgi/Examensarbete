//Required variable to store the data retrivial time  and keep trak of number of iteration and if enable chart  or not

var allowChart;
var myChary;
var loop = 0;
var startTime;
var completeTime = [];
var stopTime;
var iterations = 1;

function getData() {
    // if the number of iterations is greater than 0, run the blow code 
    if (iterations > 0) {
        // get the selected region by the user
        let county = document.getElementById('sorting').value;
        console.log(county, 'sorting');
        // record initail time to check performance 
        startTime = Date.now();
        fetch_From_DB(county);
    } else {
        // getSaveTime();
       

    }

}
function fetch_From_DB(county) {
    // make a request to database to get the number of records
    $.ajax({
        url: 'mySQL_dataTotal_Connection.php?regions=' + county,
        type: 'get',
        dataType: 'json',
        success: function (data) {

            if (loop < 10) {
                loop++;
                console.log( loop);
                fetch_From_DB(county);
                

            } else {
                loop = 0;
                // Stop the time 
                stopTime = Date.now();
                completeTime.push(stopTime - startTime);
                console.log(startTime, stopTime, stopTime - startTime);
                // pass the fetched data to formatedData function to format it 
                //according to requirements and then pass the formated data to 
                // drawGraph
                drawGraph_WithChart(templateData(data));
                iterations--;
                getData();

            }

        },
        error: function (request, status, error) {
            console.error(error);
        }
    });
}
function getSaveTime() {

    let text = "";
    for (let i = 0; i < completeTime.length; i++) {
        text += completeTime[i] + "\n";

    }
    
    var save = document.createElement("a");
    save.setAttribute("href", "data:text/html;charset=utf-8," + text);
    save.setAttribute("download", "my_data.csv");
    save.innerHTML = "Click Here to download";
    document.body.appendChild(save);
    save.click();

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
                scales: {
                    y: {
                        beginAtZero: true 
                    }
                }
            }

     });

    } else {
        myChary.config.data = templatedData;
        myChary.update();
    }

}

function templateData(data) {

    var year = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
    var man = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var Kvinna = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var total = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var gender = [];

    //loop through the data one by one check its year , 
    //if match then check based on the gender  and push their total into their 
    //respective array and the sum of both into total array

    for (var i in data) {
        if (data[i].year == '2010') {
            total[0] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[0] += parseInt(data[i].total)
            }
            else {
                Kvinna[0] += parseInt(data[i].total)
            }

        } else if (data[i].year == '2011') {
            total[1] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[1] += parseInt(data[i].total)
            }
            else {
                Kvinna[1] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2012') {
            total[2] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[2] += parseInt(data[i].total)
            }
            else {
                Kvinna[2] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2013') {
            total[3] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[3] += parseInt(data[i].total)
            }
            else {
                Kvinna[3] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2014') {
            total[4] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[4] += parseInt(data[i].total)
            }
            else {
                Kvinna[4] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2015') {
            total[5] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[5] += parseInt(data[i].total)
            }
            else {
                Kvinna[5] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2016') {
            total[6] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[6] += parseInt(data[i].total)
            }
            else {
                Kvinna[6] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2017') {
            total[7] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[7] += parseInt(data[i].total)
            }
            else {
                Kvinna[7] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2018') {
            total[8] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[8] += parseInt(data[i].total)
            }
            else {
                Kvinna[8] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2019') {
            total[9] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[9] += parseInt(data[i].total)
            }
            else {
                Kvinna[9] += parseInt(data[i].total)
            }

        }
        else if (data[i].year == '2020') {
            total[10] += parseInt(data[i].total)
            if (data[i].gender == 'Man') {
                man[10] += parseInt(data[i].total)
            }
            else {
                Kvinna[10] += parseInt(data[i].total)
            }

        }
        

    }
    //format the data that we can pass into chart js libaray 
    let templatedData = {
        labels: year,
        datasets: [
            {
                label: "man",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(59, 89, 152, 0.75)",
                borderColor: "rgba(59, 89, 152, 1)",
                pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                data: man
            },
            {
                label: "Kvinna",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(29, 202, 255, 0.75)",
                borderColor: "rgba(29, 202, 255, 1)",
                pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
                pointHoverBorderColor: "rgba(29, 202, 255, 1)",
                data: Kvinna
            },
            {
                label: "total",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(211, 72, 54, 0.75)",
                borderColor: "rgba(211, 72, 54, 1)",
                pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
                pointHoverBorderColor: "rgba(211, 72, 54, 1)",
                data: total
            }
        ]
    };
    return templatedData;
}
