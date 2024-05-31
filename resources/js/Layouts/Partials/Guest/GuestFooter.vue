<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
});

const successMessage = ref('');
const errorMessage = ref('');
const isLoading = ref(false);

const subscribe = () => {
    isLoading.value = true;
    form.post('/subscribe', {
        preserveScroll: true, // Mantener la posición del scroll
        onSuccess: () => {
            successMessage.value = 'You have successfully subscribed.';
            errorMessage.value = '';
            form.reset(); // Reset form fields
            isLoading.value = false;
        },
        onError: (errors) => {
            errorMessage.value = errors[0] || 'Ocurrió un error, intentelo más tarde';
            form.reset();
            successMessage.value = '';
            isLoading.value = false;
        }
    });
};
</script>
<template>
    <footer class="bg-white">
        <div class="max-w-screen-xl px-4 pt-16 pb-6 mx-auto sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <!-- Logo a la izquierda -->
                <div class="flex-1">
                    <span class="flex justify-center h-8 text-teal-600 sm:justify-start">
                        logo
                    </span>
                </div>

                <!-- Texto y slogan a la derecha -->
                <div class="flex items-center justify-end flex-1">
                    <div class="text-right text-teal-600">
                        <span class="h-8">
                            RunaCode
                        </span>
                        <p class="hidden mt-4 leading-relaxed text-gray-500 sm:block">

                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-8 pt-16 mt-16 border-t border-gray-100 md:grid-cols-4 lg:grid-cols-6">
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900"></p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">

                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">

                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">

                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">

                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900"></p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Web Development
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Web Design </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Marketing </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Google Ads </a>
                        </li>
                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Resources</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Online Guides
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">

                                Conference Notes
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Forum </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Downloads </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Upcoming Events
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Helpful Links</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                FAQs </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="#">
                                Support </a>
                        </li>

                        <li>
                            <a class="group flex justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                                href="#">
                                <span class="text-gray-700 transition group-hover:text-gray-700/75">
                                    Live Chat </span>

                                <span class="relative flex w-2 h-2">
                                    <span
                                        class="absolute inline-flex w-full h-full bg-teal-400 rounded-full opacity-75 animate-ping"></span>
                                    <span class="relative inline-flex bg-teal-500 rounded-full size-2"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-center sm:text-left md:col-span-4 lg:col-span-2">
                    <p class="text-lg font-medium text-gray-900">Aceptamos todos los medios de pago.</p>

                    <div class="max-w-md mx-auto mt-8 sm:ms-0">
                        <p class="leading-relaxed text-center text-gray-500 sm:text-left rtl:text-right">
                            ¡Facilitamos tus compras! Aceptamos una amplia variedad de métodos de pago para que elijas
                            el
                            que prefieras. Desde tarjetas de crédito hasta billeteras digitales, siempre pensamos en tu
                            comodidad.
                        </p>
                        <div class="flex justify-center mt-4 space-x-4">
                            <i class="text-xl text-blue-800 fa-brands fa-cc-visa"></i>
                            <i class="text-xl text-red-600 fa-brands fa-cc-mastercard"></i>
                            <i class="text-xl text-blue-600 fa-brands fa-cc-diners-club"></i>
                            <i class="text-xl text-blue-500 fa-brands fa-cc-amex"></i>
                            <i class="text-xl text-blue-400 fa-brands fa-cc-paypal"></i>
                            <!-- Considera añadir íconos personalizados para Yape y Plin si FontAwesome no los incluye -->
                            <span class="text-xl">Yape</span>
                            <span class="text-xl">Plin</span>
                        </div>






                        <form @submit.prevent="subscribe" class="mt-4">
                            <div class="flex flex-col gap-4 sm:flex-row lg:flex-col lg:items-start">
                                <label for="name" class="sr-only">Name</label>
                                <input v-model="form.name" id="name"
                                    class="w-full px-6 py-3 border-gray-200 rounded-full shadow-sm" type="text"
                                    placeholder="Enter your name" required />

                                <label for="email" class="sr-only">Email</label>
                                <input v-model="form.email" id="email"
                                    class="w-full px-6 py-3 border-gray-200 rounded-full shadow-sm" type="email"
                                    placeholder="Enter your email" required />

                                <button :disabled="isLoading"
                                    class="block px-8 py-3 font-medium text-white transition bg-indigo-500 rounded-full hover:bg-indigo-600 disabled:opacity-50 disabled:cursor-not-allowed"
                                    type="submit">
                                    <span v-if="isLoading">Cargando...</span>
                                    <span v-else>Subscribe</span>
                                </button>
                            </div>
                            <p v-if="successMessage" class="mt-4 text-green-500">{{ successMessage }}</p>
                            <p v-if="errorMessage" class="mt-4 text-red-500">{{ errorMessage }}</p>
                        </form>



                    </div>
                </div>
            </div>
            <div class="py-6 border-b border-gray-100 dark:border-gray-700 md:py-8">
                <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                    <div class="flex flex-wrap items-center gap-6 sm:justify-between">
                        <img class="w-auto h-8 dark:hidden lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg" alt="" />
                        <img class="hidden w-auto h-8 dark:block lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg"
                            alt="" />
                        <img class="w-auto h-10 dark:hidden lg:h-11"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/stripe.svg" alt="" />
                        <img class="hidden w-auto h-10 dark:block lg:h-11"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/stripe-dark.svg"
                            alt="" />
                        <img class="w-auto h-8 dark:hidden lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="" />
                        <img class="hidden w-auto h-8 dark:block lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg"
                            alt="" />
                        <img class="w-auto h-8 dark:hidden lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg"
                            alt="" />
                        <img class="hidden w-auto h-8 dark:block lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg"
                            alt="" />
                        <img class="w-auto h-8 dark:hidden lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/shopify.svg" alt="" />
                        <img class="hidden w-auto h-8 dark:block lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/shopify-dark.svg"
                            alt="" />
                        <img class="w-auto h-8 dark:hidden lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/bank-of-america.svg"
                            alt="" />
                        <img class="hidden w-auto h-8 dark:block lg:h-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/bank-of-america-dark.svg"
                            alt="" />
                    </div>
                </div>
                <div class="pt-6 mt-16 border-t border-gray-100 sm:flex sm:items-center sm:justify-between">
                <p class="text-sm text-center text-gray-500 sm:text-left">
                    Copyright &copy; 2021 - . Desarrollado por
                    <a href="" target="_blank" rel="noopener noreferrer"></a>.
                    Todos los derechos reservados.
                </p>



                <ul class="flex justify-center gap-6 mt-4 sm:mt-0 sm:justify-start">
                    <li>
                        <a href="" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Youtube</span>
                            <i class="w-6 h-6 fab fa-youtube"></i>
                        </a>
                    </li>


                    <li>
                        <a href="" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">GitHub</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>


                </ul>
            </div>
            </div>


        </div>
    </footer>
</template>




<style scoped>
/* Animación para el botón de carga */
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

button:disabled span {
    display: inline-block;
    margin-left: 0.5rem;
}

button:disabled span:before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}
</style>
