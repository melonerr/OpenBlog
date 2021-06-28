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
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import CKEditor from "@ckeditor/ckeditor5-vue";
import MyUploadAdapter from "./MyUploadAdapter.js";

export default {
  components: {
    ckeditor: CKEditor.component,
  },

  data() {
    return {
      editor: ClassicEditor,
      editorData: "",
      editorConfig: {
        toolbar: {
          items: [
            "heading",
            "|",
            "bold",
            "underline",
            "italic",
            "fontColor",
            "code",
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
            // Do not render the CSS class for the plain text code blocks.
            { language: "plaintext", label: "Plain text", class: "" },

            // Use the "php-code" class for PHP code blocks.
            { language: "php", label: "PHP", class: "php-code" },

            // Use the "js" class for JavaScript code blocks.
            // Note that only the first ("js") class will determine the language of the block when loading data.
            {
              language: "javascript",
              label: "JavaScript",
              class: "js javascript js-code",
            },

            // Python code blocks will have the default "language-python" CSS class.
            { language: "python", label: "Python" },
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
