$(function () {
    "use strict";
    fetch('/hub/graphic_bars')
        .then(res => res.json())
        .then(res => {
            var chart2 = new Chartist.Bar('.amp-pxl', {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                series: [
                    res.data.currentyear,
                    res.data.lastYear
                ]
            }, {
                axisX: {
                    // On the x-axis start means top and end means bottom
                    position: 'end',
                    showGrid: false
                },
                axisY: {
                    // On the y-axis start means left and end means right
                    position: 'start'
                },
                high: '30',
                low: '0',
                plugins: [
                    Chartist.plugins.tooltip()
                ]
            });
        });


    fetch('/hub/graphic_lines')
        .then(res => res.json())
        .then(res => {
            var chart = new Chartist.Line('.campaign', {
                labels: res.data.daysList,
                series: [
                    res.data.lastDaysMonth,
                    res.data.currentDaysMonth
                ]
            }, {
                low: 0,
                high: 30,
                showArea: true,
                fullWidth: true,
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                axisY: {
                    onlyInteger: true
                    , scaleMinSpace: 40
                    , offset: 20
                    , labelInterpolationFnc: function (value) {
                        return (value / 1);
                    }
                },
            });
        });


    fetch('/hub/graphic_items')
        .then(res => res.json())
        .then(res => {
            let columnsValues = [];
            for (let i = 0; i < res.data.length; i++) {
                columnsValues.push([
                    res.data[i].item,
                    parseInt(res.data[i].quantity)
                ])
            }
            var chart = c3.generate({
                bindto: '#itens-mais-vendidos',
                data: {
                    columns: columnsValues,

                    type: 'donut',

                },
                donut: {
                    label: {
                        show: false
                    },
                    title: "Itens Homologados",
                    width: 20,

                },

                legend: {
                    hide: false
                    //or hide: 'data1'
                    //or hide: ['data1', 'data2']
                },
                color: {
                    pattern: ['#ffb22b', '#745af2', '#26c6da', '#1e88e5', '#fc4b6c']
                }
            });
        });

    fetch('/hub/graphic_platforms')
        .then(res => res.json())
        .then(res => {
            let columnsValues = [];
            for (let i = 0; i < res.data.length; i++) {
                columnsValues.push([
                    res.data[i].platform,
                    parseInt(res.data[i].quantity)
                ])
            }

            var chart = c3.generate({
                bindto: '#plataformas-mais-usadas',
                data: {
                    columns: columnsValues,

                    type: 'donut',

                },
                donut: {
                    label: {
                        show: false
                    },
                    title: "Plataformas",
                    width: 20,

                },

                legend: {
                    hide: false
                    //or hide: 'data1'
                    //or hide: ['data1', 'data2']
                },
                color: {
                    pattern: ['#ffb22b', '#555555', '#26c6da', '#1e88e5', '#fc4b6c']
                }
            });
        });

});
