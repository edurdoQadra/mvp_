<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link
    class="block w-full max-w-xs px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-white dark:hover:bg-gray-800 focus:outline-none focus:bg-white dark:focus:bg-gray-800 transition duration-150 ease-in-out"    >
        <slot />
    </Link>
   
</template>
