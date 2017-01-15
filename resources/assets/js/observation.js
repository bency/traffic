var chart2_1_1 = c3.generate({
    bindto: '#chart-2-1-1',
    data: {
        columns: [
            ['中華民國', 14.24, 14.31, 14.05, 14.37, 13.59],
            ['希臘', 11.25, 10.26, 8.88, 7.99, 7.28],
            ['義大利', 6.95, 6.50, 6.32, 5.70, 5.56],
            ['日本', 4.55, 4.33, 4.13, 4.06, 3.81],
            ['韓國', 11.26, 10.50, 10.78, 10.14, 9.44],
            ['荷蘭', 3.24, 3.28, 3.36, 2.84, 2.83],
            ['紐西蘭', 8.59, 6.45, 6.95, 5.66, 6.54],
            ['波蘭', 10.24, 10.87, 9.27, 8.71, 8.42],
            ['英國', 3.04, 3.10, 2.83, 2.76, 2.87],
            ['美國', 10.67, 10.42, 10.76, 10.39, 10.25]
        ],
        type: 'bar'
    },
    axis: {
        y: {
            max: 15,
            label: {
                text: '每 10 萬人死亡率',
                position: 'inner-middle'
            },
        },
        x: {
            label: {
                text: '年份',
                position: 'inner-center'
            },
            type: 'category',
            categories: [2010, 2011, 2012, 2013, 2014]
        }
    }
});
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
            tick: {
                format: function (d) {
                    return d + ' 人';
                }
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
