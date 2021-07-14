<template>
  <div id="app">
    <h2>Get All blog</h2>
    <div class="container">
      <div id="blogsAll"></div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      BlogData: [],
    };
  },
  mounted() {
    this.loadData();
  },
  methods: {
    loadData() {
      axios.get(`http://localhost:8081/blog`).then((response) => {
        var data = "";
        for (let i = 0; i < response.data.data.length; i++) {
          var blogsAll = document.getElementById("blogsAll");
          data += "<table width='100%' border='1'>";
          // tr
          data += "<tr>";
          data += "<td width='100%' colspan='2'>";
          data +=
            "<a href='./blogs?id=" +
            response.data.data[i].blogs_id +
            "'>Go to Blog</a>";
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td  width='30%'>";
          data += "blogs_id";
          data += "</td>";
          data += "<td  width='70%'>";
          data += response.data.data[i].blogs_id;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_title";
          data += "</td>";
          data += "<td>";
          data += response.data.data[i].blogs_title;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_img_cover";
          data += "</td>";
          data += "<td>";
          data +=
            "<img src='" +
            response.data.data[i].blogs_img_cover +
            "' width='50%'>";
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td colspan='2'>";

          data += response.data.data[i].blogs_content;
          data += "</td>";
          data += "</tr>";

          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_permalink";
          data += "</td>";
          data += "<td>";
          data += response.data.data[i].blogs_permalink;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_user";
          data += "</td>";
          data += "<td>";
          data += response.data.data[i].blogs_user;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "blogs_status";
          data += "</td>";
          data += "<td>";
          data += response.data.data[i].blogs_status;
          data += "</td>";
          data += "</tr>";
          // tr
          data += "<tr>";
          data += "<td>";
          data += "created_at";
          data += "</td>";
          data += "<td>";
          data += response.data.data[i].created_at;
          data += "</td>";
          data += "</tr>";
          data += "</table>";
          data += "<br>";
          data += "<br>";
          data += "<br>";
        }
        var quote = "";
        var backSlash = "";
        quote = data.replace(/['"]+/g, "");
        backSlash = quote.replace(/\\/g, "");
        blogsAll.innerHTML = backSlash;
        console.log(response.data.data);
      });
    },
  },
};
</script>
<style>
.image > img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50% !important;
}
pre {
  padding: 15px !important;
  margin: 15px !important;
  text-align: start !important;
  background-color: #444444 !important;
  color: white !important;
}
</style>