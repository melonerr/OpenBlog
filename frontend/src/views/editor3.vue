<template>
  <div id="app">
    <h1>TEst Editor page in vue js</h1>
    <div class="container">
      <div class="">
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            v-model="blogContent"
            placeholder="Title..."
          />
        </div>
      </div>
      <ckeditor
        id="ckeditor"
        :editor="editor"
        @ready="addImage"
        v-model="editorData"
        :config="editorConfig"
      >
      </ckeditor>
      <button class="m-2" @click.prevent="BlogData()">Submit</button>
      <button class="m-2" @click.prevent="addclass()">class</button>
    </div>
  </div>
</template>

<script>
// import axios from "axios";

import ClassicEditor from "@ckeditor/ckeditor5";
import CKEditor from "@ckeditor/ckeditor5-vue";
import MyUploadAdapter from "./js/MyUploadAdapter.js";
import MySaveBlogAdapter from "./js/MySaveBlogAdapter.js";

export default {
  components: {
    ckeditor: CKEditor.component,
  },

  data() {
    return {
      blogContent: "",
      editor: ClassicEditor,
      editorData: "",
      editorConfig: {
        image: {
          toolbar: ["imageTextAlternative", "|", "imageStyle:full", "imageStyle:side"],
          styles: ["full", "side"],
        },
        toolbar: {
          items: [
            "heading",
            "|",
            "bold",
            "underline",
            "italic",
            "fontColor",
            "|",
            "code",
            "codeblock",
            "link",
            "bulletedList",
            "numberedList",
            "|",
            "imageUpload",
            "blockQuote",
            "insertTable",
            "undo",
            "redo",
            "subscript",
            "superscript",
            "specialCharacters",
          ],
        },
        language: "en",
        codeBlock: {
          languages: [
            { language: "HTML", label: "HTML", class: "HTML-code" },
            { language: "CSS", label: "CSS", class: "CSS-code" },
            {
              language: "Javascript",
              label: "Javascript",
              class: "javascript-code",
            },
            { language: "Angular", label: "Angular", class: "Angular-code" },
            { language: "React", label: "React", class: "React-code" },
            { language: "Vue", label: "Vue", class: "Vue-code" },
            { language: "Django", label: "Django", class: "django-code" },
            { language: "Flank", label: "Flank", class: "flank-code" },
            { language: "SQL", label: "SQL", class: "sql-code" },
            { language: "CMD", label: "CMD", class: "cmd-code" },
            { language: "PHP", label: "PHP", class: "php-code" },
            { language: "python", label: "Python", class: "Python-code" },
            { language: "Ruby", label: "Ruby", class: "ruby-code" },
            { language: "GO", label: "GO", class: "GO-code" },
            { language: "Flutter", label: "Flutter", class: "flutter-code" },
            { language: "Dart", label: "Dart", class: "dart-code" },
            {
              language: "typescript",
              label: "Typescript",
              class: "typescript-code",
            },
            { language: "Laravel", label: "Laravel", class: "laravel-code" },
            {
              language: "Codeigniter",
              label: "Codeigniter",
              class: "codeigniter-code",
            },
          ],
        },
      },
    };
  },
  methods: {
    addImage(editor) {
      editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
      };
    },
    BlogData() {
      var todayDate = new Date().toISOString().slice(0, 19);
      var date = todayDate.replace("T", " ");
      var writer = "200";
      var status = 1;
      var data = this.editorData;
      var title = this.blogContent;
      var Blogdata = { data, writer, date, title, status };
      MySaveBlogAdapter.saveData(Blogdata);
    },
  },
  mounted() {
    console.log(123);
    // console.log(this.editor.defaultConfig.toolbar);
    console.log(456);
  },
};
</script>
<style>
.ck-editor__editable {
  min-height: 500px;
}
.image > figcaption {
  display: none !important;
}
</style>
