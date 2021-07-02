<template>
    <nav class="flex flex-col overflow-hidden h-20 bg-white justify-between p-5 font-bold border-blue-800 border-b-2 transition-all duration-400 md:flex-row md:justify-around md:bg-transparent md:border-none"
    	 ref="navbarMenu">
    	<NavbarMenuItem @menuToggled="toggleCollapse" 
    					type="menuButton">Menu</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" anchor="#about">About</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" anchor="#experience">Experience</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" anchor="#education">Education</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" anchor="#skills">Skills</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" anchor="#contact">Contact</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" v-if="!this.user" type="loginButton">Login</NavbarMenuItem>
        <NavbarMenuItem @itemClicked="setCollapse(true)" v-else type="logoutButton">Log Out</NavbarMenuItem>
    </nav>
</template>

<style scoped>
.fixedNavbar {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background: white;
	border-bottom: 2px solid rgba(96, 165, 250);
}
</style>

<script type="text/javascript">
	import NavbarMenuItem from './NavbarMenuItem';

	export default {
		name: 'NavbarMenu',
		props: ['user'],
		data() {
			return {
				collapsed: true,
				fixed: false
			}
		},
		components: {
			NavbarMenuItem
		},
		methods: {
			setCollapse(isCollapsed) {
				this.collapsed = isCollapsed;
			},
			toggleCollapse() {
				this.collapsed = !this.collapsed;
			},
			updateFixedNavbar() {
	        	if (window.scrollY > this.$refs['navbarMenu'].clientHeight) {
	        		this.$refs['navbarMenu'].classList.add('fixedNavbar');
	        	} else {
	        		this.$refs['navbarMenu'].classList.remove('fixedNavbar');
	        	}
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
		},
		mounted() {
			this.updateFixedNavbar();

			window.addEventListener('scroll', this.updateFixedNavbar);
		}
	};
</script>