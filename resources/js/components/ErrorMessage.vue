<template>
	<transition name="fade">
	    <div class="flex justify-between w-3/4 bg-red-400 rounded-lg p-3 ml-auto mr-auto"
	         v-show="isVisible">
	        <span>{{ error }}</span>
	        <span @click="toggleVisibility"
	        	  class="cursor-pointer font-bold">X</span>
	    </div>
	</transition>
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
	export default {
		name: 'ErrorMessage',
		props: ['error'],
		data() {
			return {
				isVisible: true
			}
		},
		methods: {
			toggleVisibility() {
				this.isVisible = !this.isVisible;
			}
		}
	};
</script>