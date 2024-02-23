<script setup>
import Nav from "./Nav.vue"

defineProps({

    components: {Nav},



})

</script>

<template>


<section class="p-6 bg-gray-200">


        <header class="flex justify-between">
        <div class="flex items-center">
            <h1 class="font-bold text-lg">My App</h1>

        <p class="text-sm ml-5"> Welcome to our home {{ $page.props.auth.user.username }}</p>
        </div>
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

