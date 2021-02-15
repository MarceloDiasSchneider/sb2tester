$.getJSON("json/data.json",function(json){
    let xlabels = []
    let ydata = []
    let color = []
    let obj = json
    obj.forEach(element => {
        xlabels.push(element.name)
        ydata.push(element.age)
        color.push(randomColor())
    });
    createChart(xlabels, ydata, color)
})

function createChart(xl, yd, color){

    let chart = document.getElementById('chart').getContext('2d');

    Chart.defaults.global.defaultFontSize = 14
    Chart.defaults.global.defaultFontColor = 'black'

    let createChart = new Chart(chart, {
        type: 'line',
        data: {
            labels: xl,
            datasets: [
                {
                    label: 'Champion points in each edition',
                    data: yd,
                    backgroundColor : color,
                    borderWidth: 1,
                    borderColor: 'rgba(0, 0, 0, .3)',
                    hoverBorderWidth: 3,
                    hoverBorderColor: 'rgba(0, 0, 0, .3)',
                    fill: false
                },
            ]
        },
        options: {
            title:{
                display: true,
                text: 'Ages',
                fontSize: 25
            },
            legend:{
                display: true,
                position: 'bottom',
            },
            layout:{
                padding:{
                    left: 0,
                    rigth: 0,
                    top: 0,
                    bottom: 0
                }
            },
            tooltips:{
                enabled: true,
                mode: 'index',
                axis: 'y'
            },
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true, // || suggestedMin: 0,
                    }
                }]
            },
        }
    });
}

/* Create a randon color */
function randomColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}