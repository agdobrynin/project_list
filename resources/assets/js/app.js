/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

//Vue.component('example', require('./components/Example.vue'));

import Form from './core/Form.js';

import Modal from './components/Modal.vue';

const app = new Vue({
    el: '#app',
    components:{ Modal },
    data(){
        return{
            //Для меню показывающегося когда ширина меньше 768px
            rightMenuShow: false,
            //Форма с обработчиком ошибок и ajax запросов
            form: new Form({
                name: '',
                description: ''
            }),
            showModal: false
        }
    },
    created(){
        this.showModal = true;
    },
    methods:{
        //На сабмит формы
        onSubmit(){
            this.form.submit('POST', '/store')
                .then( data => {
                    alert(data.message)
                })
                .catch( errors => {
                    console.log(errors)
                });
        },

    }
});
