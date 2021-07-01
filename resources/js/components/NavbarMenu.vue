<template>
    <nav class="flex flex-col overflow-hidden h-20 bg-white justify-between p-5 font-bold border-purple-800 border-b-2 transition-all duration-400 md:flex-row md:justify-around md:bg-transparent md:border-none"
    	 ref="navbarMenu">
    	<NavbarMenuItem @menuToggled="toggleCollapse" 
    					type="menuButton">Menu</NavbarMenuItem>
        <NavbarMenuItem anchor="#about">About</NavbarMenuItem>
        <NavbarMenuItem anchor="#experience">Experience</NavbarMenuItem>
        <NavbarMenuItem anchor="#education">Education</NavbarMenuItem>
        <NavbarMenuItem anchor="#skills">Skills</NavbarMenuItem>
        <NavbarMenuItem anchor="#contact">Contact</NavbarMenuItem>
        <NavbarMenuItem v-if="!this.user" type="loginButton">Login</NavbarMenuItem>
        <NavbarMenuItem v-else type="logoutButton">Log Out</NavbarMenuItem>
    </nav>
</template>

<style scoped>
</style>

<script type="text/javascript">
	import NavbarMenuItem from './NavbarMenuItem';

	export default {
		name: 'NavbarMenu',
		props: ['user'],
		data() {
			return {
				collapsed: true
			}
		},
		components: {
			NavbarMenuItem
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