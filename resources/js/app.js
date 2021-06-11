require('./bootstrap');

import Vue from 'vue';

import ErrorMessageList from './components/ErrorMessageList';
import Modal from './components/Modal';

window.Vue = new Vue({
	el: '#app',
	components: {
		Modal,
		ErrorMessageList
	}
});