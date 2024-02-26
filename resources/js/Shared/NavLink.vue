<script setup>
// import { Head } from '@inertiajs/vue3'

import { Link } from '@inertiajs/vue3';

defineProps({
    components: {Link},

    
    active: Boolean,
   
    

})

</script>

<template>
<Link href="/" class="text-black hover:underline" :class="{'font-bold underline': active}">

<slot />
</Link>
</template>