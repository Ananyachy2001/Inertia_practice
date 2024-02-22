<script setup>
// import { Head } from '@inertiajs/vue3'

import Nav from '../Shared/Nav.vue';

defineProps({
    components: { Nav },

})

</script>

<template>
    <h1 class="text-4xl font-bold">Home</h1>
    <Nav />
</template>