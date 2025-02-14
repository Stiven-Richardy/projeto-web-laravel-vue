<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Perfil" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-100"
            >
                Perfil
            </h2>
        </template>

        <div class="py-12 bg-[url('/public/imagens/background.svg')] bg-cover bg-center">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div
                    class="bg-black p-4 shadow sm:rounded-lg sm:p-8 border-2 border-gray-500"
                >
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div
                    class="bg-black p-4 shadow sm:rounded-lg sm:p-8 border-2 border-gray-500"
                >
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div
                    class="bg-black p-4 shadow sm:rounded-lg sm:p-8 border-2 border-gray-500"
                >
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
