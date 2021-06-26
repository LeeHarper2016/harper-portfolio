<template>
	<form action="/skills" 
		  method="POST" 
		  ref="skill_form"
		  class="flex flex-col items-center space-y-6 font-normal" 
		  enctype="multipart/form-data"
		  @submit.prevent="submitSkill">
		  <input type="hidden"
		  		 name="_token"
		  		 :value="csrfToken">
        <label for="skill_name">
            Skill Name:
            <input type="text" 
            	   name="skill_name" 
            	   id="skill_name" 
            	   class="border rounded-md block">
        </label>
        <label for="image">
            Skill Image:
            <input type="file" 
            	   name="image" 
            	   id="image" 
            	   class="border rounded-md block">
        </label>
        <label for="img_alt">
            Image Description:
            <textarea cols="50" 
            		  rows="5" 
            		  id="img_alt" 
            		  name="img_alt" 
            		  class="border rounded-md block">
                
            </textarea>
        </label>
        <button type="submit" 
        		class="border border-purple-800 rounded-lg p-3 bg-purple-300">
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
			submitSkill() {
				axios.post('/skills', new FormData(this.$refs['skill_form']));
			}
		}
	};
</script>