<template>
	<div class="absolute top-5 left-0 w-full h-24 space-y-5">
		<ErrorMessage v-for="error of errors" :error='error'>
			
		</ErrorMessage>
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
	import ErrorMessage from './ErrorMessage';

	export default {
		name: 'ErrorMessageList',
		props: ['errors'],
		components: {
			ErrorMessage
		},
		data() {
			return {
			}
		}
	};
</script>