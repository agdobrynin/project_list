<template>
    <div class="modal is-active">
        <div class="modal-background" @click="showModal = false"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    <slot></slot>
                </article>
            </div>
        </div>
        <button class="modal-close" @click="showModal = false"></button>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                showModal: false
            }
        }
    }
</script>

<style>

</style>
