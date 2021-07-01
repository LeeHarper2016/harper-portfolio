<template>
    <nav class="flex flex-col overflow-hidden h-20 bg-white justify-between p-5 font-bold border-purple-800 border-b-2 transition-all duration-400 md:flex-row md:bg-transparent md:border-none"
    	 ref="navbarMenu">
        <a @click.prevent="toggleCollapse" class="text-xl duration-300 rounded-md p-2 cursor-pointer hover:bg-gray-100 hover:text-gray-700 md:hidden">Menu</a>
        <a href="#about" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">About</a>
        <a href="#experience" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Experience</a>
        <a href="#education" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Education</a>
        <a href="#skills" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">Skills</a>
        <a href="#contact" class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700 hover:scale-125">Contact</a>
    </nav>
</template>

<style scoped>
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
			toggleCollapse() {
				this.collapsed = !this.collapsed;
			}
		},
		watch: {
	        collapsed() {
	            if (this.collapsed) {
	                this.$refs['navbarMenu'].style.height = "4.75rem";
	            } else {
	                this.$refs['navbarMenu'].style.height = "18rem";
	            }
	        }
		}
	};
</script>