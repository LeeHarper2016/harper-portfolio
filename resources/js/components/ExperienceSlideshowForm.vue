<template>
    <Modal class="inline" 
    	   button_classes="bg-purple-400 rounded-lg p-3 border border-purple-800">
        <template #button_text>
            Add Position
        </template>
        <template #header>
            Add A Position
        </template>
        <template #content>
        	<form action="/positions" 
        		  method="POST" 
        		  class="flex flex-col items-center space-y-6 font-normal" 
        		  enctype="multipart/form-data">
        		  <input type="hidden"
        		  		 name="_token"
        		  		 :value="csrfToken">
                <label for="company_name">
                    Company Name:
                    <input type="text" 
                    	   name="company_name" 
                    	   id="company_name" 
                    	   class="border rounded-md block p-1.5"
                           placeholder="Company">
                </label>
                <label for="position">
                    Position:
                    <input type="text" 
                    	   name="position" 
                    	   id="position" 
                    	   class="border rounded-md block p-1.5"
                           placeholder="JavaScript Developer">
                </label>
                <label for="body">
                    Section Body:
                    <TrixModified inputId="body" inputName="body" placeholder="Enter a description of the position held."></TrixModified>
                </label>
                <label for="description">
                    Section Description:
                    <TrixModified input-id="description" input-name="description" placeholder="Enter a summary of the position held."></TrixModified>
                        
                    </textarea>
                </label>
                <label for="image">
                    Section Image:
                    <input type="file" 
                    	   name="image" 
                    	   id="image" 
                    	   class="border rounded-md block p-1.5">
                </label>
                <label for="img_alt">
                    Image Description:
                    <textarea cols="50" 
                    		  rows="5" 
                    		  id="img_alt" 
                    		  name="img_alt" 
                    		  class="border rounded-md block p-1.5"
                              placeholder="Short description of the image uploaded.">
                        
                    </textarea>
                </label>
                <button type="submit" 
                		class="border border-purple-800 rounded-lg p-3 bg-purple-300">
                    Submit
                </button>
            </form>
        </template>
    </Modal>
</template>

<style scoped>
</style>

<script type="text/javascript">
	import Modal from './Modal';
    import TrixModified from './TrixModified';

	export default {
		name: 'ExperienceSlideshowForm',
		components: {
			Modal,
            TrixModified
		},
		computed: {
			csrfToken() {
            	return document.querySelector('meta[name="csrf-token"]').content;
			}
		}
	};
</script>