<template>
    <div class="p-8 w-full">
    	<div class="text-center">
	        <h2 class="inline-block font-bold text-3xl mb-3 mr-5">My Skillset</h2>
	        <hr class="border-blue-800 w-full ml-auto mr-auto md:w-1/4">
    	</div>
        <div v-if="user"
        	 class="flex justify-center p-5">
		    <Modal class="inline" 
		    	   button_classes="bg-blue-200 rounded-lg p-3 border border-blue-800">
		        <template #button_text>
		            Add Skill
		        </template>
		        <template #header>
		        	Add A Skill
		        </template>
		        <template #content>
		        	<SkillsetShowcaseForm @skillAdded="addSkill($event)"></SkillsetShowcaseForm>
		        </template>
		    </Modal>
        </div>
        <div class="flex flex-wrap justify-center w-2/3 mr-auto ml-auto">
        	<div v-for="skill of skills"
        		 :key="skill.id"
        		 class="text-center m-5 rounded-md bg-blue-300 border border-blue-800 p-3">
        		<span v-text="skill.name"
        			  class="w-full text-xl font-bold"></span>
    		</div>
        </div>
    </div>
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
	import Modal from './Modal';
	import SkillsetShowcaseForm from './SkillsetShowcaseForm';

	export default {
		name: 'SkillsetShowcase',
		props: ['user'],
		components: {
			Modal,
			SkillsetShowcaseForm
		},
		data() {
			return {
				skills: []
			}
		},
		methods: {
			addSkill(skill) {
				this.skills.push(skill);
			}
		},
		async mounted() {
			var res = await axios.get('/api/skills');

			this.skills = res.data;
		}
	};
</script>