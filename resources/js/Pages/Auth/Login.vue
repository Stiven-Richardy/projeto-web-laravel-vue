<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div>
        <img
             id="background"
            class="absolute h-screen w-full bg-[length:100%_100%] bg-center bg-no-repeat"
            src="/imagens/imagem-fundo.jpg"
            alt="Imagem de fundo"
        />
        <!-- Layout principal -->
        <GuestLayout>
            <Head title="Login"/>

            <!-- Formulário -->
            <form @submit.prevent="submit" class="p-10">
                <div>
                    <InputLabel for="email" value="E-mail" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full "
                        v-model="form.email"
                        required
                        autofocus
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
                        autocomplete="current-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4 block">
                    <label class="flex items-center">
                        <Checkbox name="remember" v-model:checked="form.remember" />
                        <span class="ms-2  text-gray-300">Lembre de mim</span>
                    </label>
                </div>
                
                <div class="mt-4 flex items-center justify-end">
                    <Link
                        :href="route('register')"
                        class=" underline text-gray-300 "
                    >
                        Não possui conta?
                    </Link>

                    <PrimaryButton
                        class="ms-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Entrar
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>
    </div>
</template>

<style scoped>
/* Estilo para o formulário com fundo cinza */
form {
    background-color: #1a1a1a; 
    border-radius: 6px; 
}


</style>