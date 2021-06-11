<template>
	<div class="flex w-full bg-purple-200 border-t-2 border-b-2 border-purple-800">
	    <a name="experience"></a>
	    <div class="w-1/2 h-96">
	    </div>
	    <img src="{{ asset('/images/default.jpg') }}" alt="test" class="w-1/2 h-96">
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
	export default {
		name: 'ExperienceSlideshow',
		data() {
			return {
				positions: {
					company_name: '',
					position: '',
					body: '',
					img_src: '',
					img_alt: ''
				}
			}
		}
	};
</script>