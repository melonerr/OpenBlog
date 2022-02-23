<template>
  <div id="about">
    <div class="m-5">
      <MultiColumn></MultiColumn>
    </div>
    <div class="row m-5">
      <div class="col-md-4">
        <PieChart></PieChart>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</template>

<script>
import MultiColumn from "../components/chart/MultiColumn.vue";
import PieChart from "../components/chart/PieChart.vue";

export default {
  name: "about",
  components: {
    MultiColumn,
    PieChart,
  },
};
</script>
<style></style>
