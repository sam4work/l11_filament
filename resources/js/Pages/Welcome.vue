<script setup>
import {Head} from '@inertiajs/vue3';

</script>

<template>
    <h2>Welcome</h2>

    <a :href="route('login')">Go to Admin ({{ route('login') }})
    </a>

</template>

<style scoped>

</style>
