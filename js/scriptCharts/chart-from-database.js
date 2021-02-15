/* load data from data base */
$.post('php/charts/carrier-load-data-from-database.php', (phpReturn) => {
    let obj =  JSON.parse(phpReturn)
    let xlabels = obj.carriers
    let ydata = obj.totals
    let color = []
    for (let i = 0; i < xlabels.length; i++) {
        color.push(randomColor())
    }
    console.log(xlabels);
    console.log(ydata);
    console.log(color);
    createChart(xlabels, ydata, color)
})

/* create a chart */
function createChart(xl, yd, color){

    let chart = document.getElementById('chart').getContext('2d');

    Chart.defaults.global.defaultFontSize = 14
    Chart.defaults.global.defaultFontColor = 'black'

    let createChart = new Chart(chart, {
        type: 'pie',
        data: {
            labels: xl,
            datasets: [
                {
                    label: 'Carriers',
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
                text: 'Carriers',
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
                        beginAtZero: true, // || suggestedMin: 0,
                        
                    }
                }]
            },
        }
    });
}

function randomColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}