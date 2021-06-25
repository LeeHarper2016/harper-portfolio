<template>
    <div class="p-8 w-full">
        <h2 class="inline-block font-bold text-3xl mb-3 mr-5">My Skillset</h2>
        <hr class="border-purple-800 w-1/4">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="flex flex-wrap justify-center w-2/3 mr-auto ml-auto">
        </div>
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