// Area Chart
var options = {
    series: [{
    name: 'data 1',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: 'data 2',
    data: [11, 32, 45, 32, 34, 52, 41]
  },
  {
    name: 'data 3',
    data: [15, 14, 12, 11, 11, 12, 15]
  }],
    chart: {
    height: '100%',
    type: 'area',
  },
  dataLabels: {
    enabled: true
  },
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
  colors: ['#0084ff', '#ffae00', '#70aada'],
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();

// Donut Chart
var options = {
    series: [44, 55],
    labels: ['data 1', 'data 2'],
    chart: {
    type: 'donut',
  },
  legend: {
    show: false
  },
  dataLabels: {
    style: {
      fontSize: '15px',
      colors: ['#fbfbfb']
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 5,
      color: '#000',
      opacity: 1
    }
  },
  stroke: {
    show: false     
  },
  colors: ['#0084ff', '#ffae00'],
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);
chart.render();

var options = {
    series: [17, 15],
    labels: ['data 1', 'data 2'],
    chart: {
    type: 'donut',
  },
  legend: {
    show: false
  },
  dataLabels: {
    style: {
      fontSize: '15px',
      colors: ['#fbfbfb']
    },
    dropShadow: {
      enabled: true,
      top: 1,
      left: 1,
      blur: 5,
      color: '#000',
      opacity: 1
    }
  },
  stroke: {
    show: false     
  },
  colors: ['#ffae00', '#0084ff'],
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();

var options = {
  series: [44, 17],
  labels: ['data 1', 'data 2'],
  chart: {
  type: 'donut',
},
legend: {
  show: false
},
dataLabels: {
  style: {
    fontSize: '15px',
    colors: ['#fbfbfb']
  },
  dropShadow: {
    enabled: true,
    top: 1,
    left: 1,
    blur: 5,
    color: '#000',
    opacity: 1
  }
},
stroke: {
  show: false     
},
colors: ['#0084ff', '#ffae00'],
};

var chart = new ApexCharts(document.querySelector("#chart4"), options);
chart.render();

// Mixed Chart
var options = {
    series: [{
    name: 'data 1',
    type: 'column',
    data: [14, 22, 22, 22, 23, 23, 33, 35]
  }, {
    name: 'data 2',
    type: 'column',
    data: [17, 23, 23, 24, 24, 24, 26, 28]
  }, {
    name: 'data 3',
    type: 'line',
    data: [10, 19, 17, 26, 34, 35, 40, 51]
  }],
    chart: {
    height: 350,
    type: 'line',
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [1, 1, 4]
  },
  xaxis: {
    categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
  },
  yaxis: [
    {
      axisTicks: {
        show: true,
      },
      axisBorder: {
        show: true,
        color: '#fbfbfb'
      },
      labels: {
        style: {
          colors: '#008FFB',
        }
      },
      tooltip: {
        enabled: true
      }
    },
  ],
  tooltip: {
    fixed: {
      enabled: true,
      position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
      offsetY: 30,
      offsetX: 60
    },
  },
  legend: {
    horizontalAlign: 'left',
    offsetX: 40
  },
  colors: ['#70aada', '#ffae00', '#0084ff']
};

var chart = new ApexCharts(document.querySelector("#chart5"), options);
chart.render();

// Area Chart
var options = {
series: [{
  name: 'data 1',
  data: [34, 32, 32, 27, 25, 23, 18]
}, {
  name: 'data 2',
  data: [30, 28, 26, 23, 21, 20, 16]
},
{
  name: 'data 3',
  data: [26, 23, 23, 21, 20, 18, 15]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: true
},
stroke: {
  curve: 'smooth',
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
colors: ['#0084ff', '#ffae00', '#70aada'],
};

var chart = new ApexCharts(document.querySelector("#chart6"), options);
chart.render();

var options = {
  series: [{
  name: 'data 1',
  data: [31, 40, 38, 35, 42, 45, 46]
}, {
  name: 'data 2',
  data: [28, 35, 35, 31, 35, 40, 43]
},
{
  name: 'data 3',
  data: [0, 0, 0, 0, 0, 0, 0]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: true
},
stroke: {
  curve: 'smooth',
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
colors: ['#0084ff', '#ffae00', '#70aada'],
};

var chart = new ApexCharts(document.querySelector("#chart7"), options);
chart.render();