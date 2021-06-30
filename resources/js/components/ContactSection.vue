<template>
    <div class="p-8 w-full">
    <h2 class="font-bold text-3xl text-center">Contact Us</h2>
    <form class="flex flex-col items-center mt-5 space-y-5" 
    	  method="POST" 
    	  action="/contact"
    	  ref="contact_form"
    	  @submit.prevent="sendMail">
        <div class="flex flex-row justify-between w-1/3">
            <label for="name" 
            	   class="flex flex-col">
                Name:
                <input type="text" 
                	   name="name" 
                	   class="rounded-md border p-1.5">
            </label>
            <label for="email" 
            	   class="flex flex-col">
                Email:
                <input type="email" 
                	   name="email" 
                	   class="rounded-md border p-1.5">
            </label>
            <label for="phone" 
            	   class="flex flex-col">
                Phone:
                <input type="text" 
                	   name="phone" 
                	   class="rounded-md border p-1.5">
            </label>
        </div>
        <label for="body" 
        	   class="flex flex-col">
            Body:
            <textarea name="body" 
            		  rows="5" 
            		  cols="40" 
            		  class="rounded-md border p-1.5">
            </textarea>
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
	export default {
		name: 'ContactSection',
		data() {
			return {
				isVisible: true
			}
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