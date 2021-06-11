<template>
	<div class="absolute top-5 left-0 w-full h-24 space-y-5">
	    <div class="w-3/4 bg-red-400 rounded-lg p-3 ml-auto mr-auto">
	        Error 1
	    </div>
	    <div class="w-3/4 bg-red-400 rounded-lg p-3 ml-auto mr-auto">
	        Error 2
	    </div>
	    <div class="w-3/4 bg-red-400 rounded-lg p-3 ml-auto mr-auto">
	        Error 3
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
	export default {
		name: 'ErrorMessageList',
		props: ['errors'],
		data() {
			return {
				errorList: null
			}
		}
	};
</script>