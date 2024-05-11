<script setup>
import AdminLayout from '@/Layouts/GuestLayout.vue';
// Importa el módulo de Inertia para acceder a los datos pasados desde Laravel
import { usePage } from '@inertiajs/inertia-vue3';

// Obtiene los datos pasados desde Laravel
const page = usePage();


// Asigna los datos del tour a la variable tour
const tours = page.props.tour;
</script>


<template>
    <AdminLayout title="Tours">
        <section>
            <div class="relative flex items-center justify-center text-white bg-center bg-no-repeat bg-cover"
                style="background-image: url('https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3'); height: 50vh;">
                <div class="absolute inset-0 bg-black/40"></div> <!-- oscurecimiento más intenso -->
                <div class="z-10 flex flex-col items-center justify-center p-4 text-center">
                    <!-- Título centrado y grande -->
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        <span
                            class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">TOURS</span>
                    </h1>
                    <p class="mt-4 text-base sm:text-lg md:text-xl">Descubre increibles </p>
                </div>
            </div> <!-- Aquí incluye tu contenido de Livewire -->
        </section>

        <h1>DETALLE DE TOUR</h1>  

        <div v-if="tours">
            <p>ID: {{ tours.category_id }}</p>
            <p>Título: {{ tours.title }}</p>
            <p>Descripción Corta: {{ tours.description_corta }}</p>
            <!-- Agrega aquí el resto de los atributos del tour que deseas mostrar -->
        </div>
    </AdminLayout>
</template>

