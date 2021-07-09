<template>
  <div id="app">
    <h2>Get All blog</h2>
    <div class="container">
      <div id="blogs"></div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      blogID: this.$route.query.id,
    };
  },
  mounted() {
    if (this.blogID == null) {
      window.location.href = "/";
    } else {
      this.loadData();
    }
  },
  methods: {
    loadData() {
      axios
        .get(`http://localhost:8081/blog/id/` + this.$route.query.id)
        .then((response) => {
          var data = "";
          var blogsAll = document.getElementById("blogs");
          console.log(response.data[0]);
          data += "<table width='100%' border='1'>";
          // tr
          data += "<tr>";
          data += "<td  width='30%'>";
          data += "blogs_id";
          data += "</td>";
          data += "<td  width='70%'>";
          data += response.data[0].blogs_id;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_title";
          data += "</td>";
          data += "<td>";
          data += response.data[0].blogs_title;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_img_cover";
          data += "</td>";
          data += "<td>";
          data +=
            "<img src='" + response.data[0].blogs_img_cover + "' width='50%'>";
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td colspan='2'>";

          data += response.data[0].blogs_content;
          data += "</td>";
          data += "</tr>";

          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_permalink";
          data += "</td>";
          data += "<td>";
          data += response.data[0].blogs_permalink;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_user";
          data += "</td>";
          data += "<td>";
          data += response.data[0].blogs_user;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_status";
          data += "</td>";
          data += "<td>";
          data += response.data[0].blogs_status;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "created_at";
          data += "</td>";
          data += "<td>";
          data += response.data[0].created_at;
          data += "</td>";
          data += "</tr>";
          data += "</table>";
          data += "<br>";
          data += "<br>";
          data += "<br>";

          var quote = "";
          var backSlash = "";
          quote = data.replace(/['"]+/g, "");
          backSlash = quote.replace(/\\/g, "");
          blogsAll.innerHTML = backSlash;
        });
    },
  },
};
</script>
