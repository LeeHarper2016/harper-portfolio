require('./bootstrap');

import Vue from 'vue';

import ContactSection from './components/ContactSection';
import ErrorMessageList from './components/ErrorMessageList';
import ExperienceSlideshow from './components/ExperienceSlideshow';
import Modal from './components/Modal';
import SkillsetShowcase from './components/SkillsetShowcase';

window.Vue = new Vue({
	el: '#app',
	components: {
		ContactSection,
		ErrorMessageList,
		ExperienceSlideshow,
		Modal,
		SkillsetShowcase
	}
});