<template>
  <GuestLayout title="Tour">
    <section>
      <div class="relative flex items-center justify-center text-white bg-center bg-no-repeat bg-cover" style="background-image: url('https://bing.com/th?id=OSGI.F39D9798C92E78B965070399A498A0E2&h=1000&w=1920&c=1&rs=1&o=3'); height: 50vh;">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="z-10 flex flex-col items-center justify-center p-4 text-center">
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">SHOW TOURS</span>
          </h1>
          <p class="mt-4 text-base sm:text-lg md:text-xl">Descubre increíbles</p>
        </div>
      </div>
    </section>

    <div class="py-24 bg-white sm:py-32">
      <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto mt-16 rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
          <div class="p-8 sm:p-10 lg:flex-auto">
            <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{ tour.title }}</h3>
            <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{ tour.id }}</h3>
            <p class="mt-6 text-base leading-7 text-gray-600">{{ tour.description_corta }}</p>
            <div class="flex items-center mt-10 gap-x-4">
              <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included</h4>
              <div class="flex-auto h-px bg-gray-100"></div>
            </div>
            <ul role="list" class="grid grid-cols-1 gap-4 mt-8 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
              <!-- Detalles del tour -->
            </ul>
          </div>
          <div class="p-2 -mt-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
            <div class="py-10 text-center rounded-2xl bg-gray-50 ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
              <div>
                <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Participantes</label>
                <div class="mt-2">
                  <input type="number" name="quantity" id="quantity" min="0" max="99" v-model="quantity" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="00">
                </div>
              </div>
              <div>
                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Fecha</label>
                <div class="mt-2">
                  <input type="date" name="date" id="date" v-model="date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="max-w-xs px-8 mx-auto">
                <p class="text-base font-semibold text-gray-600">IDIOMA : {{ tour.idioma }}</p>
                <p class="flex items-baseline justify-center mt-6 gap-x-2">
                  <span class="text-5xl font-bold tracking-tight text-gray-900">${{ tour.precio }}</span>
                  <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                </p>
                <div class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  <i class="fas fa-cart-plus"></i>
                  <button @click="addToCart">Agregar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </GuestLayout>
</template>


<script setup>
import { defineProps } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import axios from 'axios';

const props = defineProps({
  tour: Object
});

let quantity = 0;
let date = "";

async function addToCart() {
  try {
    await axios.post('/add-to-cart', {
      tour: {
        ...props.tour,
        quantity,
        date
      }
    });
    console.log('Tour agregado al carrito correctamente:', props.tour,'cantidad',quantity,'fecha',date); // Mostrar contenido del tour en la consola
    showAlert("success", `¡El tour "${props.tour.title}" se ha agregado al carrito correctamente!`);
  } catch (error) {
    console.error('Error al agregar el tour al carrito:', error);
    showAlert("error", "¡Error al agregar el tour al carrito!");
  }
}

function showAlert(type, message) {
  alert(message); // Mostrar alerta simple

  // Opcional: Utilizar alerta de Bootstrap o alguna otra librería de alertas si lo prefieres
}
</script>