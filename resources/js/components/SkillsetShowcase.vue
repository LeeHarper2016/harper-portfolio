<template>
    <div class="p-8 w-full">
    	<div class="text-center">
	        <h2 class="inline-block font-bold text-3xl mb-3 mr-5">My Skillset</h2>
            <div v-if="user"
            	 class="inline">
			    <Modal class="inline"
			    	   button_classes="bg-blue-300 rounded-lg p-3 border border-blue-800">
			        <template #button_text>
			            Edit Skills
			        </template>
			        <template #header>
			        	Add A Skill
			        </template>
			        <template #content>
			        	<SkillsetShowcaseForm @skillAdded="addSkill($event)"></SkillsetShowcaseForm>

			        	<h2 class="font-bold text-center text-3xl mt-10">Skills</h2>
			        	<div class="flex flex-wrap justify-center w-2/3 mr-auto ml-auto">
				        	<div v-for="skill of skills"
				        		 :key="skill._id"
				        		 class="w-48 text-center m-5 rounded-md bg-blue-200 border border-blue-800 p-3">
				        		 <span class="w-full text-xl font-bold">{{ skill.name }}</span>
				        		 <span @click="deleteSkill(skill._id)"
				        		 	   class="block cursor-pointer p-1.5 bg-red-300 rounded-md border border-2 border-black">Delete</span>
				        	</div>
			        	</div>
			        </template>
			    </Modal>
	        </div>
	        <hr class="border-blue-800 w-full ml-auto mr-auto mt-2 mb-2 md:w-1/4">
    	</div>

        <div class="flex flex-wrap justify-center w-2/3 mr-auto ml-auto">
        	<div v-for="skill of skills"
        		 :key="skill._id"
        		 class="w-48 text-center m-5 rounded-md bg-blue-200 border border-blue-800 p-3">
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
			},
			async deleteSkill(skill_id) {
				let res = await axios.delete('/skills/' + skill_id);

				let deletedSkill = res.data;

				this.skills = this.skills.filter((skill) => skill._id !== deletedSkill._id);
			}
		},
		async mounted() {
			var res = await axios.get('/api/skills');

			this.skills = res.data;
		}
	};
</script>