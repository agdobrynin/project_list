<template>

    <div class="modal is-active" v-if="isshow">
        <div class="modal-background" @click="isshow = false"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    {{ msg }}
                </article>
            </div>
        </div>
        <button class="modal-close" @click="isshow = false"></button>
    </div>
</template>

<script>
    export default{
        props:['message', 'showmodal'],
        data(){
            return{
                isshow: this.showmodal,
                msg: this.message
            }
        }
    }
</script>

<style>

</style>
