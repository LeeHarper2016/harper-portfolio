require('./bootstrap');

import Vue from 'vue';

import Modal from './components/Modal';

window.Vue = new Vue({
	el: '#app',
	components: {
		Modal
	}
});