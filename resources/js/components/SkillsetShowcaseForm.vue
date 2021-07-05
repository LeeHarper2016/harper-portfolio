<template>
	<form @submit.prevent="submitSkill"
		  action="/skills" 
		  method="POST" 
		  ref="skill_form"
		  class="flex flex-col items-center space-y-6 font-normal" 
		  enctype="multipart/form-data">
		  <input type="hidden"
		  		 name="_token"
		  		 :value="csrfToken">
        <label for="name">
            Skill Name:
            <input type="text" 
            	   name="name" 
            	   id="name" 
            	   class="border rounded-md block p-1.5"
            	   placeholder="HTML">
        </label>
        <button type="submit" 
        		class="border border-blue-800 rounded-lg p-3 bg-blue-300">
            Submit
        </button>
    </form>
</template>

<style scoped>
</style>

<script type="text/javascript">
	export default {
		name: 'SkillsetShowcaseForm',
		data() {
			return {
				skills: []
			}
		},
		computed: {
			csrfToken() {
            	return document.querySelector('meta[name="csrf-token"]').content;
			}
		},
		methods: {
			async submitSkill() {
				var res = await axios.post('/skills', new FormData(this.$refs['skill_form']));

				this.$emit('skillAdded', res.data);
			}
		}
	};
</script>