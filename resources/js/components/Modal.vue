<template>
	<div>
		<button @click="toggleVisibility" 
				:class="button_classes ? button_classes : ''">
				<slot name="button_text"></slot>
		</button>
		<transition name="fade">
			<div v-if="visible"
				 class="grid grid-cols-1 fixed z-10 top-0 left-0">
				<div class="row-start-1 col-start-1 w-screen h-screen bg-gray-600 bg-opacity-75"
					 @click="toggleVisibility">
				</div>
				<div class="row-start-1 col-start-1 rounded-lg bg-white p-10 m-24">
					<div class="float-right text-xl font-semibold cursor-pointer"
					 	 @click="toggleVisibility">
						X
					</div>
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
				this.visible = !this.visible;

				if (this.visible) {
					this.$emit('open');
				} else {
					this.$emit('close');
				}
			}
		}
	};
</script>