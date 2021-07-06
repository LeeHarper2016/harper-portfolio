<template>
	<div class="absolute top-5 left-0 w-full h-24 space-y-5" v-if="errors.length !==0">
		<ErrorMessage v-for="error of errorList"
					  :key="error._id" 
					  :error='error.message'>
			
		</ErrorMessage>
	</div>
</template>

<style scoped>
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
				errorList: []
			}
		},
		mounted() {
			let i = 0;

			this.errors.forEach((error) => {
				this.errorList.push({
					_id: i++,
					message: error
				});
			});
		}
	};
</script>