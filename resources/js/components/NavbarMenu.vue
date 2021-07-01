<template>
	<transition name="fade">
        <nav class="flex flex-col bg-white justify-around p-5 font-bold border-purple-800 border-b-2 md:flex-row md:bg-transparent">
            <a href="#about" class="text-xl duration-300 hover:text-gray-700">About</a>
            <a href="#experience" class="text-xl duration-300 hover:text-gray-700">Experience</a>
            <a href="#education" class="text-xl duration-300 hover:text-gray-700">Education</a>
            <a href="#skills" class="text-xl duration-300 hover:text-gray-700">Skills</a>
            <a href="#contact" class="text-xl duration-300 hover:text-gray-700 hover:scale-125">Contact</a>
            @guest
            <modal class="inline" button_classes="hover:text-gray-800 text-xl font-bold duration-300">
                <template #button_text>
                    Login
                </template>
                <template #header>
                    Log In
                </template>
                <template #content>
                    <x-login-form />
                </template>
            </modal>
            @endguest
            @auth
            <a href="/logout" class="hover:text-gray-800 text-xl duration-300">Log Out</a>
            @endauth
        </nav>
        <div class="flex flex-col w-full h-full justify-center mr-auto ml-auto items-center">
            <div class="flex flex-col justify-around w-1/3 h-1/3 bg-white bg-opacity-80 rounded-xl p-5 text-center">
                <h1 class="block font-bold text-4xl underline">Page Header</h1>
                <h2 class="block font-bold text-3xl underline">Page Subheader</h2>
            </div>
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
		name: 'NavbarMenu',
		data() {
			return {
				collapsed: true;
			}
		},
		methods: {
		}
	};
</script>