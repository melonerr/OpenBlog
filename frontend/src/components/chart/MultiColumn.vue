<template>
  <div>
    <highcharts class="" :options="chartOptions" ref="chart"></highcharts>
  </div>
</template>

<script>
export default {
  data() {
    return {
      /*
       ******************** ถ้า จำนวน xAxis > categories ไม่เท่ากับ series > data  *****************************
       **************************************** จะรันต่อเป็นตัวเลข  *********************************************
       */
      chartOptions: {
        // ถ้าไม่กำหนด series > type ให้ใช้ chart > type แทน
        chart: {
          type: "spline",
        },
        // ชื่อ ตาราง
        title: {
          text: "Visitors",
        },
        // ตัวหนังสือแนวตั้ง
        xAxis: {
          categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
        },
        // ตัวหนังสือแนวนอน
        yAxis: {
          labels: {
            x: -15,
          },
          title: {
            text: "users",
          },
        },
        // ข้อมูลที่ Show ในตาราง
        series: [
          {
            type: "column",
            // Name data when you Hover Chart
            name: "dataA",
            data: [10, 3, 8, 2, 6, 4, 5, 5, 5, 5, 6, 4],
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