<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12 bg-[url('/public/imagens/background.svg')] bg-cover bg-center bg-black min-h-screen">
            <div class="mx-auto max-w-7xl sm:px-6 1g:px-8">
                <div
                    class="overflow-hidden bg-black shadow-sm sm:rounded-lg border"
                >
                <div class="p-6 text-white">
                   <strong><h4> {{$page.props.auth.user.name}} </h4></strong>
                   <strong><h4> {{$page.props.auth.user.phone}} </h4></strong>
                   <strong><h4> {{$page.props.auth.user.email}} </h4></strong>

                </div>
                    <div class="p-6 text-white">
                        Conectado!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
