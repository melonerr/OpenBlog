<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-xl-6 col-xxl-6">
        <video width="320" height="240" controls>
          <source src="../assets/videos/001.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="col-xl-6 col-xxl-6">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h5 class="card-title mb-0">Visitors</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-sm">
              <MonthlyChart :styles="myStyles" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import VueCoreVideoPlayer from "vue-core-video-player";
import MonthlyChart from "../components/chart/MonthlyChart.vue";
export default {
  name: "App",
  components: {
    // VueCoreVideoPlayer,
    MonthlyChart,
  },
  computed: {
    myStyles() {
      return {
        height: `300px`,
        position: "relative",
      };
    },
  },
};
</script>
<style>
.chart canvas {
  max-height: 100%;
  font-size: 50px;
}
</style>