<template>
	<div @keyup.esc="closeModal">
		<button @click="toggleVisibility" 
				:class="button_classes ? button_classes : ''">
				<slot name="button_text"></slot>
		</button>
		<transition name="fade">
			<div v-if="visible"
             	 class="bg-opacity-80 bg-gray-400 fixed top-0 left-0 w-screen h-screen md:p-24 z-10">
            	<div class="w-full h-full bg-white border border-black rounded-xl p-10">
					<div class="float-right text-xl font-semibold cursor-pointer"
					 	 @click="closeModal">
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
			},
			closeModal() {
				this.visible = false;
			}
		}
	};
</script>