( function ( $ ) {
    "use strict";
 //Team chart
    var ctx = document.getElementById( "team-chart" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: [ 22, 20, 22, 18, 15, 13, 10, 10, 10, 12, 8, 5 ],
                label: "PACIENTES",
                backgroundColor: 'rgba(0,103,255,.15)',
                borderColor: 'rgba(0,103,255,0.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Quantidade'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );


    //bar chart
    var ctx = document.getElementById( "barChart" );
        ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ],
            datasets: [
                {
                    label: "Procedimentos Solicitados",
                    data: [ 0, 0, 0, 20, 16, 15, 15, 25, 26, 50, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            },
                {
                    label: "Procedimentos Realizados",
                    data: [ 0, 0, 0, 15, 16, 15, 14, 22, 24, 49, 54, 40 ],
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,255,52,0.72)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    //pie chart
    var ctx = document.getElementById( "pieChart" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ 30, 20, 15, 10, 25 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0, 123, 255,0.3)",

                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "PPI",
                            "CONSÓRCIO",
                            "MAIS VIDA",
                            "VIVA VIDA",
                            "RECURSO PRÓPRIO"
                        ]
        },
        options: {
            responsive: true
        }
    } );

   


} )( jQuery );