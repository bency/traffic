var chart2_1_1 = c3.generate({
    bindto: '#chart-2-1-1',
    data: {
        columns: [
            ['2010',    14.24,   11.25,   6.95,    4.55,    11.26,   3.24,    8.59,    10.24,   3.04,    10.67],
            ['2011',    14.31,   10.26,   6.50,    4.33,    10.50,   3.28,    6.45,    10.87,   3.10,    10.42],
            ['2012',    14.05,   8.88 ,   6.32,    4.13,    10.78,   3.36,    6.95,    9.27 ,   2.83,    10.76],
            ['2013',    14.37,   7.99 ,   5.70,    4.06,    10.14,   2.84,    5.66,    8.71 ,   2.76,    10.39],
            ['2014',    13.59,   7.28 ,   5.56,    3.81,    9.44 ,   2.83,    6.54,    8.42 ,   2.87,    10.25]
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
            categories: ['中華民國', '希臘', '義大利', '日本', '韓國', '荷蘭', '紐西蘭', '波蘭', '英國', '美國']
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
