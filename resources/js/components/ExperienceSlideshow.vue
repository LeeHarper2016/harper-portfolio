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
		    	<ExperienceSlideshowForm></ExperienceSlideshowForm>
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
	import ExperienceSlideshowForm from './ExperienceSlideshowForm'

	export default {
		name: 'ExperienceSlideshow',
		components: {
			ExperienceSlideshowForm,
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
		}
	};
</script>