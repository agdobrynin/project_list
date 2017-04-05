<template>
    <div class="modal is-active">
        <div class="modal-background" @click="$emit('close')"></div>
        <div class="modal-content">
            <div class="box">
                <article class="media">
                    {{ message }}
                </article>
            </div>
        </div>
        <button class="modal-close" @click="$emit('close')"></button>
    </div>
</template>

<script>
    export default{
        props:['message']

    }
</script>

<style>

</style>
