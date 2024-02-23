<script >

import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/vue3';


export default {

    components: { Link },
   props:{
    time: String,
   },
    layout: Layout,

}

</script>

<template>


     

        <h1 class="text-4xl font-bold">Users</h1>
    <div style="margin-top: 500px">
        <p>The current time is {{ time }}</p>

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
      

    
</template>