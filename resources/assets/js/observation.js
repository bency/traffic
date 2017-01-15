var chart = c3.generate({
    bindto: '#chart',
    data: {
        columns: [
            ['死亡', 1, 10, 10, 8, 4, 3, 1, 6],
            ['受傷', 217, 2653, 7961, 3795, 2311, 2215, 879, 829]
        ],
        axes: {
            死亡: 'y',
            受傷: 'y2'
        },
        types: {
            死亡: 'spline',
            受傷: 'spline'
        }
    },
    regions: [
        {axis: 'x', start: '1', end: '3', class: 'regionX'}
    ],
    axis: {
        y: {
            max: 15,
            label: {
                text: '死亡',
                position: 'inner-middle'
            },
        },
        y2: {
            label: {
                text: '受傷',
                position: 'inner-middle'
            },
            tick: {
                format: function (d) {
                    return d + ' 人';
                }
            },
            show: true
        },
        x: {
            label: {
                text: '年齡間隔',
                position: 'inner-center'
            },
            type: 'category',
            categories: ['10-17', '18-19', '20-29', '30-39', '40-49', '50-59', '60-64', '> 56']
        }
    }
});
