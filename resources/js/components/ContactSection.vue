<template>
    <div class="p-8 w-full">
    <h2 class="font-bold text-3xl text-center">Contact Us</h2>
    <form class="flex flex-col items-center mt-5 space-y-5" 
    	  method="POST" 
    	  action="/contact"
    	  ref="contact_form"
    	  @submit.prevent="sendMail">
        <div class="flex flex-col justify-between w-2/3 md:w-1/3 md:flex-row">
            <label for="name" 
            	   class="flex flex-col">
                Name:
                <input type="text" 
                	   name="name" 
                	   class="rounded-md border p-1.5"
                	   placeholder="Your name">
            </label>
            <label for="email" 
            	   class="flex flex-col">
                Email:
                <input type="email" 
                	   name="email" 
                	   class="rounded-md border p-1.5"
                	   placeholder="example@example.com">
            </label>
            <label for="phone" 
            	   class="flex flex-col">
                Phone:
                <input type="text" 
                	   name="phone" 
                	   class="rounded-md border p-1.5"
                	   placeholder="(111) 111-1111">
            </label>
        </div>
        <label for="body" 
        	   class="flex flex-col">
            Body:
            <TrixModified input-id="body" input-name="body" placeholder="Enter your message here."></TrixModified>
        </label>
        <button type="submit" 
        		class="border border-purple-800 rounded-lg p-3 bg-purple-300">
            Submit
        </button>
    </form>
</div>
</template>

<style scoped>
</style>

<script type="text/javascript">
	import TrixModified from './TrixModified';

	export default {
		name: 'ContactSection',
		data() {
			return {
				isVisible: true
			}
		},
		components: {
			TrixModified
		},
		methods: {
			toggleVisibility() {
				this.isVisible = !this.isVisible;
			},
			async sendMail() {
				var res = await axios.post('/contact', new FormData(this.$refs['contact_form']));
			}
		},
		computed: {
			csrfToken() {
            	return document.querySelector('meta[name="csrf-token"]').content;
			}
		}
	};
</script>