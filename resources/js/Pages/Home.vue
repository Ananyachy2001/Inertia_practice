<script setup>
// import { Head } from '@inertiajs/vue3'

defineProps({
    name: String,
    frameworks: Array,

})

</script>

<template>
    <h1>Welcome</h1>
    <h2> {{ name }} </h2>
    <p>We will use this seris</p>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>