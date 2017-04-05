<template>
<<<<<<< HEAD
    <div class="modal is-active" v-if="visible">
        <div class="modal-background"  @click="close"></div>
        <div class="notification is-primary" :class="classNotify">
          <button class="delete" @click="close"></button>
          {{ message }}
        </div>
=======
    <div class="modal is-active" v-if="showmodal">
        <div class="modal-background" @click="showmodal = false"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    {{ message }}
                </article>
            </div>
        </div>
        <button class="modal-close" @click="showmodal = false"></button>
>>>>>>> d73a29a75a44855c8ea32475eef66673614d11bc
    </div>
</template>

<script>
    export default{
        props:['message', 'showmodal'],
        data(){
            return{
<<<<<<< HEAD
                message:null,
                classNotify: false,
                visible: false
            }
        },
        events:{
            show: function(message, classNotify = null ){
              this.message = message;
              this.visible = true;
              this.classNotify = classNotify;
            }
        },
        methods:{
            closeModal: function(){
                this.visible = false;
                this.message = null;
=======
                
>>>>>>> d73a29a75a44855c8ea32475eef66673614d11bc
            }
        }
    }
</script>

<style>

</style>
