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
            <h1 class="font-bold text-lg">
                
                My App
            
            </h1>

        <p class="text-sm ml-5"> Welcome to our home {{ $page.props.auth.user.username }}</p>
        </div>
        <Nav />
        </header>

</section>

<section class="p-6">
    <div class="max-w-3xl mx-auto bg-gray-200">

        <iframe class="mb-6"  width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"></iframe>
        <slot/>
    </div>
</section>





</template>

