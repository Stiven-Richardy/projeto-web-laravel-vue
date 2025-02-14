<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="relative flex min-h-screen flex-col items-center bg--800">
        <!-- Logo -->
        <div class="mt-6">
            <Link href="/">
                <ApplicationLogo class="h-full w-full" />
            </Link>
        </div>

        <!-- Formulário -->
        <div class="flex flex-col items-center w-full mt-0 sm:max-w-md">
            <div
                class="w-full overflow-hidden px-100"
            >
                <slot />
            </div>
        </div>
    </div>
</template>