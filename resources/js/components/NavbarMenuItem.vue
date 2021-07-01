<template>
    <a @click="toggleMenu"
       v-if="type === 'menuButton'"
       class="text-xl duration-300 rounded-md p-2 cursor-pointer hover:bg-gray-100 hover:text-gray-700 md:hidden">
           <slot></slot>
       </a>
    <modal v-else-if="type === 'loginButton'"
    	   class="inline" 
    	   button_classes="font-bold text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">
        <template #button_text>
            <slot></slot>
        </template>
        <template #header>
            Log In
        </template>
        <template #content>
			<LoginForm></LoginForm>
        </template>
    </modal>
    <a v-else-if="type === 'logoutButton'"
       href="/logout"
       class="font-bold text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">
           <slot></slot>
       </a>
    <a v-else
       :href="anchor"
       class="text-xl duration-300 rounded-md p-2 hover:bg-gray-100 hover:text-gray-700">
    	<slot></slot>
    </a>
</template>

<style scoped>
</style>

<script type="text/javascript">
    import LoginForm from './LoginForm';
	import Modal from './Modal';

	export default {
		name: 'NavbarMenuItem',
		props: ['anchor', 'type'],
		components: {
            LoginForm,
			Modal
		},
        methods: {
            toggleMenu() {
                this.$emit('menuToggled');
            }
        }
	};
</script>