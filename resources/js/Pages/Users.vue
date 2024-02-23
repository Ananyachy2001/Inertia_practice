<script setup>

import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    components: { Layout, Link },

   time: String,

})

</script>

<template>


     <Layout >

        <h1 class="text-4xl font-bold">Users</h1>
    <div style="margin-top: 500px">
        <p>The current time is {{ time }}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
     </Layout> 

    
</template>