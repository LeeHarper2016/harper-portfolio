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
		 class="flex w-full bg-purple-200 border-t-2 border-b-2 border-purple-800 box-content">
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
	    <div class="w-1/2">
		    <img :src="positions[0].img_src"
		    	 :alt="positions[0].img_alt" 
		    	 class="w-full">
	    </div>
	</div>
	<div v-else
		 class="bg-purple-200 border-t-2 border-b-2 border-purple-800"
		 ref="positionSlideshow">
	    <a name="experience"></a>
    	<transition-group name="fade"
    					  class="grid grid-cols-1">
    		<div class="flex row-start-1 col-start-1"
    			 v-for="(position, index) of positions"
	    		 v-if="index === currentIndex"
			     :key="position._id">
			    <div class="p-5 space-y-3 w-1/2">
			    	<h2 class="font-bold text-2xl"
			    		v-text="position.company_name"></h2>
			    	<span class="italic"
			    		  v-text="position.position"></span>
			    	<p v-text="position.description">
			    	</p>
			    	<div class="flex w-full justify-around">
		    		    <Modal class="inline" 
					    	   button_classes="bg-purple-400 rounded-lg p-3 border border-purple-800"
							   @open="toggleInterval"
							   @close="toggleInterval">
					        <template #button_text>
					        	More Info
					        </template>
					        <template #header>
					        	{{ position.company_name }}
					        </template>
					        <template #content>
							    <img :src="position.img_src"
							    	 :alt="position.img_alt" 
							    	 class="w-1/2 h-56 ml-auto mr-auto mb-5 rounded-lg border border-purple-800">
					        	{{ position.body }}
					        </template>
					    </Modal>
				    	<ExperienceSlideshowForm></ExperienceSlideshowForm>
				    	<button class="bg-red-400 rounded-lg p-3 border border-purple-800">
				    		Delete Position
				    	</button>
			    	</div>
			    </div>
			    <img :src="position.img_src"
			    	 :alt="position.img_alt"
			    	 class="w-1/2 h-96">
	    	</div>
		</transition-group>
	</div>
</template>

<style scoped>
.fade-enter-active, .fade-leave-active {
	transition: opacity 0.65s ease;
}
.fade-enter, .fade-leave-to {
	opacity: 0;
}
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
				currentIndex: 0,
				indexTimer: null,
				positions: [{
					_id: '',
					company_name: '',
					position: '',
					body: '',
					description: '',
					img_src: '',
					img_alt: ''
				}]
			}
		},
		methods: {
			changeIndex() {
				if (this.currentIndex === (this.positions.length - 1)) {
					this.currentIndex = 0;
				} else {
					this.currentIndex++;
				}
			},
			toggleInterval() {
				if (this.indexTimer === null) {
					this.indexTimer = setInterval(this.changeIndex, 7500);
				} else {
					clearInterval(this.indexTimer);
					this.indexTimer = null;
				}
			}
		},
		async mounted() {
			let res = await axios.get('/api/positions');

			this.positions = res.data;

			if (this.positions.length > 1) {
				this.toggleInterval();
			}
		}
	};
</script>