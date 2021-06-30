<template>
    <div>
        <input :id="this.inputId"
               type="hidden"
               :name="this.inputName"
               :value="this.content">
        <trix-editor :id="this.inputId"
                 :input="this.inputId"
                 :name="this.inputName"
                 :placeholder="this.placeholder"
                 v-model="this.content"></trix-editor>
    </div>
</template>

<script>
    export default {
      name: 'TrixModified',
      props: [
          'content',
          'placeholder',
          'input-name',
          'input-id'
      ],
      data() {
          return {
              editorContent: null,
          }
      },
      mounted() {
          // Gets the file button from the trix editor.
          let fileButton = document.getElementsByClassName('trix-button--icon-attach')[0];

          // Hides the file button due to it not being used.
          fileButton.parentElement.style.visibility = 'hidden';

          if (this.content) {
              this.editorContent = this.content;
          }
      }
    }
</script>

<style scoped>
</style>
