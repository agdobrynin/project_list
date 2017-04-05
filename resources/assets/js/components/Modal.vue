<template>
    <div class="modal is-active" v-if="visible">
        <div class="modal-background"  @click="close"></div>
        <div class="notification is-primary" :class="classNotify">
          <button class="delete" @click="close"></button>
          {{ message }}
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
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
            }
        }
    }
</script>

<style>

</style>
