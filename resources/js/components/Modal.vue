<template>
	<div>
		<button @click="toggleVisibility" 
				:class="button_classes ? button_classes : ''">
				<slot name="button_text"></slot>
		</button>
		<transition name="fade">
			<div v-if="visible" 
				 class="w-screen h-screen fixed bg-gray-600 bg-opacity-75 top-0 left-0 z-10 p-24"
				 @click="toggleVisibility">
				<div class="rounded-lg bg-white w-full h-full p-10"
					 @click.stop>
					<h2 class="text-center font-bold text-4xl">
						<slot name="header"></slot>
					</h2>
					<div class="p-5 h-full overflow-y-scroll">
						<slot name="content">
						</slot>
					</div>
				</div>
			</div>
		</transition>
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
		name: 'Modal',
		props: ['button_classes'],
		data() {
			return {
				visible: false
			}
		},
		methods: {
			toggleVisibility() {
				this.visible = !this.visible
			}
		}
	};
</script>