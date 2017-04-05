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
import ProjectList from './components/ProjectList.vue';

const app = new Vue({
    el: '#app',
    components:{ Modal, ProjectList },
    data(){
        return{
            //Для меню показывающегося когда ширина меньше 768px
            rightMenuShow: false,
            //Форма с обработчиком ошибок и ajax запросов
            form: new Form({
                name: '',
                description: ''
            }),
            //Текст в модальном окне
            message: 'Сообщение',
            //Показывать модальное окно
            showmodal: false,
            //Список проектов
            projects:[],
            ApiProject: '/api/project/'
        }
    },

    beforeMount(){
        //axios запрос к API для получения списк проектов
        axios.get(this.ApiProject, null)
        .then( response => {
            this.projects = response.data;
        })
        .catch( errors => {
            console.log(errors);
            alert(errors)
        });

    },

    methods:{
        //На сабмит формы
        onSubmit(){
            let name = this.form.get('name');
            this.form.submit('POST', '/store')
                .then( data => {
                    this.message = data.message;
                    this.showmodal = true;
                    this.projects.push(data.result);
                })
                .catch( errors => {
                    console.log( errors );
                });
        },

    }
});
