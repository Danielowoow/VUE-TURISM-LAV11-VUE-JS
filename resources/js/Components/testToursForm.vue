<template>
  <div class="py-24 bg-white sm:py-32">
    <ul>
      <li v-for="tour in tours" :key="tour.id">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
          <div class="max-w-2xl mx-auto mt-16 rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
              <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{ tour.title }}:{{ tour.id }}</h3>
              <p class="mt-6 text-base leading-7 text-gray-600">{{ tour.description_corta }}</p>
              <div class="flex items-center mt-10 gap-x-4">
                <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included</h4>
                <div class="flex-auto h-px bg-gray-100"></div>
              </div>
              <!-- Detalles de tour -->
              <ul role="list" class="grid grid-cols-1 gap-4 mt-8 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                <li class="flex gap-x-3">
                  <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  HORA INICIO - {{ tour.hora_inicio }}
                </li>
                <li class="flex gap-x-3">
                  <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  PERSONAS MINIMAS - {{ tour.min_personas }}
                </li>
                <li class="flex gap-x-3">
                  <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  HORA FIN - {{ tour.hora_fin }}
                </li>
                <li class="flex gap-x-3">
                  <svg class="flex-none w-5 h-6 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  PERSONAS MAXIMAS - {{ tour.max_personas }}
                </li>
              </ul>
            </div>
            <div class="p-2 -mt-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
              <div class="py-10 text-center rounded-2xl bg-gray-50 ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                <div class="max-w-xs px-8 mx-auto">
                  <p class="text-base font-semibold text-gray-600">IDIOMA : {{ tour.idioma }}</p>
                  <p class="flex items-baseline justify-center mt-6 gap-x-2">
                    <span class="text-5xl font-bold tracking-tight text-gray-900">${{ tour.precio }}</span>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                  </p>
                  <a :href="'/tours/' + tour.id + '/show'" class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      Ver Detalles del Tour
                  </a>
                  <div class="block w-full px-3 py-2 mt-10 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">  
                                      
                  <Link :href="route('/tours/{tour}/show')"   >
                  TEST GAAAAAAAAA
                </Link>
                  </div>
                  

                  <p class="mt-6 text-xs leading-5 text-gray-600">todos los derechos reservados</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue';

import { Link } from '@inertiajs/vue3'
const tours = ref([]);

// Recibiendo las propiedades de la vista
const props = defineProps({
  tours: Array,
});

// Asignando las propiedades a la variable tours
tours.value = props.tours;
</script>




  