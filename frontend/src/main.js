// import "@fortawesome/fontawesome-free/css/all.min.css";
// import "bootstrap-css-only/css/bootstrap.min.css";
// import "mdbvue/lib/css/mdb.min.css";
// import Editor from "@ckeditor/ckeditor5-vue";
import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import CKEditor from "@ckeditor/ckeditor5-vue";


createApp(App).use(store).use(router).use(CKEditor).mount("#app");