<script setup>
import Nav from "./Nav.vue"

defineProps({

    components: {Nav},
})

</script>

<template>


<section class="p-6 bg-gray-200">


        <header class="flex justify-between">
        <h1 class="font-bold text-lg">My App</h1>
        <Nav />
        </header>

</section>

<AppSection class="p-6">
    <div class="max-w-3xl mx-auto bg-gray-200">
        <slot/>
    </div>
</AppSection>





<slot />

</template>

