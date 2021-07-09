<template>
  <div id="app">
    <h2>Get blog ID</h2>
    <div class="container">
      {{ blogID }}
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      blogID: this.$route.query.id,
    };
  },
  beforeCreate() {
    console.log("Before Create");
  },
  created() {
    if (this.blogID == null) {
      // ถ้าไม่มี ID  แสดงผลทั้งหมด
    } else {
      // ถ้ามี ID แสดงผลทั้งหมด เฉพาะ blog id

      alert(this.blogID);
    }
  },
  beforeMount() {
    console.log("beforeMount");
  },
  mounted() {
    console.log("Mounted");
  },
  beforeUpdate() {
    console.log("Before Update");
  },
  updated() {
    console.log("Updated");
  },
  beforeUnmout() {
    console.log("Before Unmout");
  },
  Unmounted() {
    console.log("Unmounted");
  },
};
</script>
