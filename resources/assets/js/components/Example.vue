<template>
        <article v-show="this.isVisible" class="message">
          <div class="message-header">
            <p><slot name="title"></slot></p>
            <button class="delete" @click="isVisible = false"></button>
          </div>
          <div class="message-body">
            <slot></slot>
          </div>
        </article>
</template>

<script>
    export default {
        data(){
            return{
                isVisible: true
            }
        },
        mounted(){
            this.isVisible = true;
        },
        methods:{

        }
    }
</script>
