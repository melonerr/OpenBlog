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
           height: 350,
          type: "spline",
        },
        // ชื่อ ตาราง
        title: {
          text: "Browser Usage",
        },
        // ตัวหนังสือแนวตั้ง
        xAxis: {
          categories: ["Chrome", "Unknown", "Firefox", "IE"],
        },
        // ข้อมูลที่ Show ในตาราง
        series: [
          {
            type: "pie",
            // Name data when you Hover Chart
            name: "Count",
            data: [
              {
                name: "Chrome",
                y: 510,
              },
              {
                name: "Unknown",
                y: 452,
              },
              {
                name: "Firefox",
                y: 201,
              },
              {
                name: "IE",
                y: 124,
              },
            ],
          },
        ],
      },
    };
  },
};
</script>