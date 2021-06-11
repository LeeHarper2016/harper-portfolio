<template>
	<div class="flex w-full bg-purple-200 border-t-2 border-b-2 border-purple-800">
	    <a name="experience"></a>
	    <div class="w-1/2 h-96 p-5 space-y-3">
	    	<h2 class="font-bold text-2xl">H1 Electrical Services, LLC.</h2>
	    	<span class="italic">Full Stack Laravel Developer</span>
	    	<p>
	    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    	</p>
	    	<div class="flex w-full justify-around">
		    	<button class="bg-purple-400 rounded-lg p-3 border border-purple-800">
		    		More Info
		    	</button>
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
	                            	   class="border rounded-md block">
	                        </label>
	                        <label for="position">
	                            Position:
	                            <input type="text" 
	                            	   name="position" 
	                            	   id="position" 
	                            	   class="border rounded-md block">
	                        </label>
	                        <label for="body">
	                            Section Body:
	                            <textarea cols="50" 
	                            		  rows="5" 
	                            		  id="body" 
	                            		  name="body" 
	                            		  class="border rounded-md block">
	                                
	                            </textarea>
	                        </label>
	                        <label for="description">
	                            Section Description:
	                            <textarea cols="50" 
	                            		  rows="5" 
	                            		  id="description" 
	                            		  name="description" 
	                            		  class="border rounded-md block">
	                                
	                            </textarea>
	                        </label>
	                        <label for="image">
	                            Section Image:
	                            <input type="file" 
	                            	   name="image" 
	                            	   id="image" 
	                            	   class="border rounded-md block">
	                        </label>
	                        <label for="img_alt">
	                            Image Description:
	                            <textarea cols="50" 
	                            		  rows="5" 
	                            		  id="img_alt" 
	                            		  name="img_alt" 
	                            		  class="border rounded-md block">
	                                
	                            </textarea>
	                        </label>
	                        <button type="submit" 
	                        		class="border border-purple-800 rounded-lg p-3 bg-purple-300">
	                            Submit
	                        </button>
	                    </form>
                    </template>
                </Modal>
		    	<button class="bg-red-400 rounded-lg p-3 border border-purple-800">
		    		Delete Position
		    	</button>
	    	</div>
	    </div>
	    <img src="/images/default.jpg" alt="test" class="w-1/2 h-96">
	</div>
</template>

<style scoped>
</style>

<script type="text/javascript">
	import Modal from './Modal';

	export default {
		name: 'ExperienceSlideshow',
		components: {
			Modal
		},
		data() {
			return {
				positions: {
					company_name: '',
					position: '',
					body: '',
					description: '',
					img_src: '',
					img_alt: ''
				}
			}
		},
		computed: {
			csrfToken() {
            	return document.querySelector('meta[name="csrf-token"]').content;
			}
		}
	};
</script>