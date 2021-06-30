<template>
  <div id="app">
    <h1>TEst Editor page in vue js</h1>
    <div class="container">
      <ckeditor
        id="ckeditor"
        :editor="editor"
        @ready="onReady"
        v-model="editorData"
        :config="editorConfig"
      >
      </ckeditor>
      <button @click.prevent="axiosTest()">test</button>
    </div>
  </div>
</template>

<script>
import ClassicEditor from "@ckeditor/ckeditor5";
import CKEditor from "@ckeditor/ckeditor5-vue";
import MyUploadAdapter from "./js/MyUploadAdapter.js";

export default {
  components: {
    ckeditor: CKEditor.component,
  },

  data() {
    return {
      editor: ClassicEditor,
      editorData: "<p>About Page...</p>",
      editorConfig: {
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
          ],
        },
        language: "en",
        codeBlock: {
          languages: [
            { language: "HTML", label: "HTML", class: "HTML-code" },
            { language: "CSS", label: "CSS", class: "CSS-code" },
            { language: "Javascript", label: "Javascript", class: "javascript-code"},
            { language: "Angular", label: "Angular", class: "Angular-code" },
            { language: "React", label: "React", class: "React-code" },
            { language: "Vue", label: "Vue", class: "Vue-code" },
            { language: "Django", label: "Django", class: "django-code" },
            { language: "Flank", label: "Flank", class: "flank-code" },
            { language: "SQL", label: "SQL", class: "sql-code" },
            { language: "CMD", label: "CMD", class: "cmd-code" },
            { language: "php", label: "PHP", class: "php-code" },
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
    onReady(editor) {
      editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
      };
    },
  },
};
</script>
<style>
.ck-editor__editable {
  min-height: 500px;
}
</style>
