<template>
	<div v-if="positions.length === 0"
		 class="flex w-full bg-purple-200 border-t-2 border-b-2 border-purple-800 p-5">
		 <div class="flex w-full justify-around">
		    <Modal class="inline" 
		    	   button_classes="bg-purple-400 rounded-lg p-3 border border-purple-800">
		        <template #button_text>
		        	More Info
		        </template>
		        <template #header>
		        	{{ positions[0].company_name }}
		        </template>
		        <template #content>
		        	{{ positions[0].body }}
		        </template>
		    </Modal>
	    	<ExperienceSlideshowForm></ExperienceSlideshowForm>
	    	<button class="bg-red-400 rounded-lg p-3 border border-purple-800">
	    		Delete Position
	    	</button>
    	</div>
	</div>
	<div v-else-if="positions.length === 1"
		 class="flex w-full bg-purple-200 border-t-2 border-b-2 border-purple-800">
	    <a name="experience"></a>
	    <div class="w-1/2 h-96 p-5 space-y-3">
	    	<h2 class="font-bold text-2xl"
	    		v-text="positions[0].company_name"></h2>
	    	<span class="italic"
	    		  v-text="positions[0].position"></span>
	    	<p v-text="positions[0].description">
	    	</p>
	    	<div class="flex w-full justify-around">
    		    <Modal class="inline" 
			    	   button_classes="bg-purple-400 rounded-lg p-3 border border-purple-800">
			        <template #button_text>
			        	More Info
			        </template>
			        <template #header>
			        	{{ positions[0].company_name }}
			        </template>
			        <template #content>
					    <img :src="positions[0].img_src"
					    	 :alt="positions[0].img_alt" 
					    	 class="w-1/2 h-56 ml-auto mr-auto mb-5 rounded-lg border border-purple-800">
			        	{{ positions[0].body }}
			        </template>
			    </Modal>
		    	<ExperienceSlideshowForm></ExperienceSlideshowForm>
		    	<button class="bg-red-400 rounded-lg p-3 border border-purple-800">
		    		Delete Position
		    	</button>
	    	</div>
	    </div>
	    <img :src="positions[0].img_src"
	    	 :alt="positions[0].img_alt" 
	    	 class="w-1/2 h-96">
	</div>
</template>

<style scoped>
</style>

<script type="text/javascript">
	import Modal from './Modal';
	import ExperienceSlideshowForm from './ExperienceSlideshowForm'

	export default {
		name: 'ExperienceSlideshow',
		components: {
			ExperienceSlideshowForm,
			Modal
		},
		data() {
			return {
				positions: [{
					company_name: '',
					position: '',
					body: '',
					description: '',
					img_src: '',
					img_alt: ''
				}]
			}
		},
		async mounted() {
			let res = await axios.get('/api/positions');

			this.positions = res.data;
		}
	};
</script>