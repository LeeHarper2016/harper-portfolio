<template>
    <div class="p-8 w-full">
    	<a name="skills"></a>
        <h2 class="inline-block font-bold text-3xl mb-3 mr-5">My Skillset</h2>
        <hr class="border-purple-800 w-1/4">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="flex justify-center p-5">
		    <Modal class="inline" 
		    	   button_classes="bg-purple-200 rounded-lg p-3 border border-purple-800">
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
        		 class="text-center m-5">
        		<img :src="skill.img_src"
        		 	 :alt="skill.img_alt"
        		 	 class="">
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