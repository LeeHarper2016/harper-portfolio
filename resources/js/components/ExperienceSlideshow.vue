<template>
	<div v-if="positions.length === 0"
		 class="flex w-full bg-blue-200 border-t-2 border-b-2 border-blue-800 p-5">
		 <div class="flex w-full justify-around">
	    	<ExperienceSlideshowForm v-if="user"></ExperienceSlideshowForm>
    	</div>
	</div>
	<div v-else
		 class="bg-blue-200 border-t-2 border-b-2 border-blue-800"
		 ref="positionSlideshow">
    	<transition-group name="fade"
    					  class="grid grid-cols-1">
    		<div class="flex flex-col-reverse row-start-1 col-start-1 md:flex-row"
    			 v-for="(position, index) of positions"
	    		 v-if="index === currentIndex"
			     :key="position._id">
	    		<div class="w-full p-5 space-y-3 text-center md:w-1/2 md:text-left">
			    	<h2 class="font-bold text-2xl"
			    		v-text="position.company_name"></h2>
			    	<span class="italic"
			    		  v-text="position.position"></span>
			    	<div v-html="position.description"
						 class="defaultCSS">
			    	</div>
			    	<div class="flex w-full justify-around">
		    		    <Modal class="inline" 
					    	   button_classes="bg-blue-400 rounded-lg p-3 border border-blue-800"
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
							    	 class="w-1/2 h-56 ml-auto mr-auto mb-5 rounded-lg border border-blue-800">
						    	 <div v-html="position.body"
						    	 	  class="defaultCSS">
						    	 </div>
					        </template>
					    </Modal>
		    		    <Modal class="inline" 
					    	   button_classes="bg-blue-400 rounded-lg p-3 border border-blue-800"
							   @open="toggleInterval"
							   @close="toggleInterval">
					        <template #button_text>
					        	View All
					        </template>
					        <template #header>
					        	All Recorded Positions
					        </template>
					        <template #content>
					        	<div v-for="position of positions"
					        		 class="flex flex-col p-3 space-y-5 border-b overflow-x-hidden md:flex-row md:space-x-5">
								    <img :src="position.img_src"
								    	 :alt="position.img_alt" 
								    	 class="w-full h-56 ml-auto mr-auto mb-5 rounded-lg border border-blue-800 md:w-1/2">
							    	<div>
								    	<h2 class="font-bold text-2xl"
								    		v-text="position.company_name"></h2>
								    	<span class="italic"
								    		  v-text="position.position"></span>
					        			<div v-html="position.description">
							    	</div>
					        		</div>
					        	</div>
					        </template>
					    </Modal>
				    	<ExperienceSlideshowForm v-if="user"></ExperienceSlideshowForm>
			    	</div>
			    </div>
	    		<div class="w-full md:w-1/2">
				    <img :src="position.img_src"
				    	 :alt="position.img_alt"
				    	 class="w-full max-h-96">
			    </div>
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
		props: ['user'],
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