<template>
  <div>
    <highcharts class="" :options="chartOptions" ref="chart"></highcharts>
  </div>
</template>

<script>
/*
  File test 
*/ 
export default {
  data() {
    return {
      chartOptions: {
        chart: {
          type: "spline",
        },
        title: {
          text: "Visitors",
        },
        series: [
          {
            type: "column",
            name: "dataA",
            data: [10, 0, 8, 2, 6, 4, 5, 5, 5, 5, 6, 4],
            color: "#6fcd98",
          },
          {
            type: "spline",
            name: "dataB",
            data: [5, 4, 7, 2, 6, 1, 7, 2, 6, 1, 7, 2],
            color: "blue",
          },
        ],
      },
    };
  },
};
</script>