<script setup>
import { ref } from 'vue';
import { defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

// Define las props que esperas recibir
const props = defineProps({
    cartData: Object // Cart data se espera que sea un objeto
});

// Utiliza ref para crear una referencia reactiva a cartData
const cartData = ref(props.cartData);
</script>

<template>
    <GuestLayout title="cart">
        <section class="bg-[url('https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3')] bg-no-repeat bg-cover bg-center bg-gray-400 bg-blend-multiply">
            <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">
                <div class="z-10 flex flex-col items-center justify-center p-4 text-center">
                    <!-- Título centrado y grande -->
                    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Shopping cart</span>
                    </h1>
                    <p class="mt-4 text-base sm:text-lg md:text-xl">compras</p>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-4">
                    <!-- Iterar sobre los elementos del carrito -->
                    <div v-for="(item, index) in cartData" :key="index" class="p-4 bg-white shadow-md">
                        <p>Nombre: {{ item.title }}</p>
                        <p>Precio: {{ item.precio }}</p>
                        <p>Descripción Corta: {{ item.description_corta }}</p>
                        <p>Hora de Inicio: {{ item.hora_inicio }}</p>
                        <p>Personas Mínimas: {{ item.min_personas }}</p>
                        <p>Hora de Fin: {{ item.hora_fin }}</p>
                        <p>Personas Máximas: {{ item.max_personas }}</p>
                        <p>Idioma: {{ item.idioma }}</p>
                        <!-- Agrega más campos según sea necesario -->
                    </div>
                </div>
            </div>
            

            



            

        </section>
        
    </GuestLayout>
</template>



