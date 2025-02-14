<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <div class="bg-black">
        <img
             id="background"
            class="absolute h-screen w-full bg-[length:100%_100%] bg-center bg-no-repeat"
            src="/imagens/imagem-fundo.jpg"
            alt="Imagem de fundo"
        />
        <!-- Layout principal -->
        <GuestLayout>
            <Head title="Registrar"/>
            <!-- Formulário -->
            <form @submit.prevent="submit" class="p-10">
                    <InputLabel for="name" value="Nome" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                    
                <div class="mt-4">
                    <InputLabel for="phone" value="Telefone" />

                    <TextInput
                        id="phone"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.phone"
                        required
                        autofocus
                        autocomplete="tel"
                    />

                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>

                <div class="mt-4">
                    <InputLabel for="email" value="E-mail" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Senha" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Confirmar Senha" />

                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <Link
                        :href="route('login')"
                        class=" underline text-gray-300"
                    >
                        Já tem conta?
                    </Link>

                    <PrimaryButton
                        class="ms-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Registrar
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>
    </div>
</template>

<style scoped>
form {
    background-color: #1a1a1a;
    border-radius: 6px;
}
</style>