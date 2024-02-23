<script setup>

import Nav from '../Shared/Nav.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    components: { Nav, Link },

    props: { time: String },

})

</script>

<template>
    <h1>Users</h1>
    <Nav />

    <div style="margin-top: 500px">
        <p>The current time is {{ time }}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>