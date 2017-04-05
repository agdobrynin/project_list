<template>

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
    </div>
</template>

<script>
    export default{
        props:['message', 'showmodal'],
        data(){
            return{
                
            }
        }
    }
</script>

<style>

</style>
