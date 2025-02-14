<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-white-50 bg-black text-black min-h-screen flex items-center justify-center">
        <img
            id="background"
            class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg"
        />

        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            
            <header class="flex justify-center items-center py-6 ml-4">
                    <ApplicationLogo/>
            </header>

            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-center">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="rounded-md px-3 py-2 text-white transition hover:text-gray-300 bg-gradient-to-r from-green-500 to-orange-500 ring-1 ring-transparent hover:ring-green-500"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="m-2 rounded-md px-3 py-2 text-white bg-green-500 transition hover:bg-green-600 ring-1 ring-transparent hover:ring-green-700"
                        >
                            Entrar
                        </Link>
                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="m-2 rounded-md px-3 py-2 text-white bg-orange-500 transition hover:bg-orange-600 ring-1 ring-transparent hover:ring-orange-700"
                        >
                            Cadastre-se
                        </Link>
                    </template>
                </nav>
                    <div
                        class="bg-#1a1a1a flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10"
                        style="background-color: #1a1a1a;"
                    >
                        <div class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-gray-300 font-semibold">
                            <h2 class="text-xl">Bem-Vindo!</h2>
                            <p class="text-center text-base "><br>
                               O Vulverso de Laravel é um espaço onde você pode se conecter e entender um pouco sobre todo esse sistema!
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800" style="background-color: #1a1a1a;">
                        <div class="w-full">
        
                            <div class="items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800" style="background-color: #1a1a1a;">
                                    <div class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-gray-300">
                                        <h2 class="text-center text-xl font-semibold">Tecnologias Utilizadas</h2><br>

                                        <div class="flex justify-between mt-8">
                                            <!-- Coluna da esquerda -->
                                            <ul class="w-1/2 pr-6 space-y-6 text-sm/relaxed">
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-xampp.png" alt="XAMPP" class="w-6 h-6"> <!-- Imagem XAMPP -->
                                                    <p class="text-base font-semibold">XAMPP/PHP</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-composer.png" alt="Composer" class="w-6 h-6"> <!-- Imagem Composer -->
                                                    <p class="text-base font-semibold">COMPOSER</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-node.png" alt="Node.js" class="w-6 h-6"> <!-- Imagem Node.js -->
                                                    <p class="text-base font-semibold">NODE.JS</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-code.png" alt="Visual Studio Code" class="w-6 h-6"> <!-- Imagem VSCode -->
                                                    <p class="text-base font-semibold">(IDE) VISUAL STUDIO CODE</p>
                                                </li>
                                            </ul>

                                            <!-- Linha no meio -->
                                            <div class="border-l-2 border-gray-500 mx-8"></div>

                                            <!-- Coluna da direita -->
                                            <ul class="w-1/2 pl-6 space-y-6 text-sm/relaxed">
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-laravel.png" alt="Laravel" class="w-6 h-6"> <!-- Imagem Laravel -->
                                                    <p class="text-base font-semibold">LARAVEL</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-vue.png" alt="Vue.js" class="w-6 h-6"> <!-- Imagem Vue.js -->
                                                    <p class="text-base font-semibold">VUEJS</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-tailwind.png" alt="Tailwind" class="w-6 h-6"> <!-- Imagem Tailwind -->
                                                    <p class="text-base font-semibold">Tailwind</p>
                                                </li>
                                                <li class="flex items-center text-gray-100 space-x-2">
                                                    <img src="/imagens/logo-sqlite.png" alt="Visual Studio Code" class="w-6 h-6"> <!-- Imagem SQLite-->
                                                    <p class="text-base font-semibold">SQLite</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <!-- Lista de membros com setas -->
                    <div class="items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800" style="background-color: #1a1a1a;">

                    <div class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-gray-300">
                        
                        <h2 class="text-center text-xl font-semibold">Desenvolvedores</h2><br>
                        
                        <div class="flex justify-between mt-4">
                            <!-- Coluna da esquerda -->
                            <ul class="w-1/2 pr-4 space-y-4 text-sm/relaxed">

                                <h2 class="text-left text-xl font-semibold">Desenvolvedores Back-End</h2>

                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">Adriano Junior</p>
                                </li>
                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">Guilherme Mendesr</p>
                                </li>
                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-left text-base font-semibold">Stiven Richard</p>
                                </li>
                            </ul>
                            
                            <!-- Linha no meio -->
                            <div class="border-l-2 border-gray-500"></div>
                            
                            <!-- Coluna da direita -->
                            <ul class="w-1/2 pl-4 space-y-4 text-sm/relaxed">

                                <h2 class="text-left text-xl font-semibold">Desenvolvedores Front-End</h2>

                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-red-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">João Felipe</p>
                                </li>
                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-red-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">Kauã Felipe</p>
                                </li>
                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-red-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">Kaueh Farias</p>
                                </li>
                                <li class="flex items-center text-gray-100">
                                    <svg class="w-6 h-6 text-red-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <p class="text-center text-base font-semibold">Lucas Santos</p>
                                </li>
                            </ul>
                             </div>
                            </div>
                      </div>

                    </div>
            </main>

            <footer class="py-10 text-center text-sm text-white">
                Vulverso de Laravel | Todos os Direitos Reservados
            </footer>
        </div>
    </div>
</template>