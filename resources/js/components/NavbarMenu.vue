<template>
	<transition name="fade">
        <nav class="flex flex-col bg-white justify-around p-5 font-bold border-purple-800 border-b-2 md:flex-row md:bg-transparent md:border-none">
            <a href="#about" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">About</a>
            <a href="#experience" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Experience</a>
            <a href="#education" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Education</a>
            <a href="#skills" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Skills</a>
            <a href="#contact" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700 hover:scale-125">Contact</a>
        </nav>
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
		name: 'NavbarMenu',
		data() {
			return {
				collapsed: true
			}
		},
		methods: {
		}
	};
</script>