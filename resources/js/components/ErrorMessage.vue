<template>
    <div class="w-3/4 bg-red-400 rounded-lg p-3 ml-auto mr-auto">
        {{ error.message }}
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
		name: 'ErrorMessage',
		props: ['error'],
		data() {
			return {
			}
		}
	};
</script>