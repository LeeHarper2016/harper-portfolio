require('./bootstrap');
require('trix');
import 'trix/dist/trix.css';

import Vue from 'vue';

import ContactSection from './components/ContactSection';
import ErrorMessageList from './components/ErrorMessageList';
import ExperienceSlideshow from './components/ExperienceSlideshow';
import NavbarMenu from './components/NavbarMenu';
import Modal from './components/Modal';
import SkillsetShowcase from './components/SkillsetShowcase';
import TrixModified from './components/TrixModified';

window.Vue = new Vue({
	el: '#app',
	components: {
		ContactSection,
		ErrorMessageList,
		ExperienceSlideshow,
		Modal,
		NavbarMenu,
		SkillsetShowcase,
		TrixModified
	}
});