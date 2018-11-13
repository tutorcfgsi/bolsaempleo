$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2018 Q1',
            Usuarios: 30,
            Trabajan: 6,
            Estudian: 4
        }, {
            period: '2018 Q2',
            Usuarios: 60,
            Trabajando: 26,
            Estudian: 4
        }, {
            period: '2018 Q3',
            Usuarios: 90,
            Trabajando: 58,
            Estudian: 4
        }, {
            period: '2018 Q4',
            Usuarios: 92,
            Trabajando: 58,
            Estudian: 4
        }, {
            period: '2018 Q5',
            Usuarios: 92,
            Trabajando: 58,
            Estudian: 4
        }, {
            period: '2018 Q6',
            Usuarios: 95,
            Trabajando: 65,
            Estudian: 0
        }, {
            period: '2018 Q7',
            Usuarios: 95,
            Trabajando: 65,
            Estudian: 0
        }, {
            period: '2018 Q8',
            Usuarios: 96,
            Trabajando: 66,
            Estudian: 0
        }, {
            period: '2018 Q9',
            Usuarios: 96,
            Trabajando: 54,
            Estudian: 12
        }, {
            period: '2018 Q10',
            Usuarios: 99,
            Trabajando: 57,
            Estudian: 12
        }, {
            period: '2018 Q11',
            Usuarios: 99,
            Trabajando: 57,
            Estudian: 12
        }, {
            period: '2018 Q12',
            Usuarios: 105,
            Trabajando: 61,
            Estudian: 12
        }],
        xkey: 'period',
        ykeys: ['Usuarios', 'Trabajando', 'Estudian'],
        labels: ['Usuarios', 'Trabajando', 'Estudian'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    
});
