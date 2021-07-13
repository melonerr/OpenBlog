<template>
  <div class="home">
    <div class="wrapper">
      <Sidebar />
      <div class="main">
        <Navbar />
        <router-view />
        <Footer />
      </div>
    </div>
  </div>
</template>
<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";
import Sidebar from "@/components/Sidebar.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "Home",
  components: {
    Navbar,
    Sidebar,
    Footer,
  },
};
</script>
<style>
.wrapper {
  background: white;
}
</style>
