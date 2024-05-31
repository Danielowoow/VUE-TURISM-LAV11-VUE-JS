<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Breadcrumb from '@/Layouts/Partials/Admin/Breadcrumb.vue';

const breadcrumbs = [
    { name: 'admin.dashboard', label: 'Dashboard' },
    { name: 'admin.setting', label: 'Configuraciones' }


];
</script>

<template>
    <AdminLayout title="Help">
        <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
            <div class="max-w-screen-lg px-4 mx-auto 2xl:px-0">
                <div class="lg:flex lg:items-center lg:justify-between lg:gap-4">
                    <h2 class="text-xl font-semibold text-gray-900 shrink-0 dark:text-white sm:text-2xl">Questions (147)
                    </h2>

                    <form class="w-full gap-4 mt-4 sm:flex sm:items-center sm:justify-end lg:mt-0">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative flex-1 w-full lg:max-w-sm">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-4 py-2.5 ps-9 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Search Questions & Answers" required />
                        </div>

                        <button type="button" data-modal-target="question-modal" data-modal-toggle="question-modal"
                            class="mt-4 w-full shrink-0 rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-0 sm:w-auto">Ask
                            a question</button>
                    </form>
                </div>

                <div class="flow-root mt-6">
                    <div class="-my-6 divide-y divide-gray-200 dark:divide-gray-800">
                        <div class="py-6 space-y-4 md:py-8">
                            <div class="grid gap-4">
                                <div>
                                    <span
                                        class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">
                                        3 answers </span>
                                </div>

                                <a href="#"
                                    class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“The
                                    specs say this model has 2 USB ports. The one I received has none. Are they hidden
                                    somewhere?”</a>
                            </div>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">It’s a USB-C port it’s a
                                smaller port. Not the regular size USB port. See the picture below. It fits the newer
                                Apple chargers.</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Answered 1 day ago by
                                <a href="#" class="text-gray-900 hover:underline dark:text-white">Bonnie Green</a>
                            </p>
                        </div>

                        <div class="py-6 space-y-4 md:py-8">
                            <div class="grid gap-4">
                                <div>
                                    <span
                                        class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">
                                        1 answer </span>
                                </div>

                                <a href="#"
                                    class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“Is this
                                    just the monitor?”</a>
                            </div>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">It's an all-in-one (AIO).
                                Which means everything in one structure. So it's not just a monitor it uses Apple's
                                operating System, macOS and it has storage, CPU, GPU etc.</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Answered 1 day ago by
                                <a href="#" class="text-gray-900 hover:underline dark:text-white">Jese Leos</a>
                            </p>
                        </div>

                        <div class="py-6 space-y-4 md:py-8">
                            <div class="grid gap-4">
                                <div>
                                    <span
                                        class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">
                                        7 answers </span>
                                </div>
                                <a href="#"
                                    class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“For an
                                    inexpert 85-year-old general user with a ten-year old iMac (OSX Yosemite version
                                    10.10.5), is this latest model 24" iMac with Retina 4.5K display Apple M1 8GB memory
                                    - 256GB SSD a decent upgrade?”</a>
                            </div>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">It's basically the same
                                system as your older machine, but bigger, lighter and faster. There is no disc drive and
                                it has fewer ports.</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Answered 2 days ago by
                                <a href="#" class="text-gray-900 hover:underline dark:text-white">Bonnie Green</a>
                            </p>
                        </div>

                        <div class="py-6 space-y-4 md:py-8">
                            <div class="grid gap-4">
                                <div>
                                    <span
                                        class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">
                                        32 answers </span>
                                </div>

                                <a href="#"
                                    class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“I just
                                    brought home the Imac24". It saysthe mouse and Keyboard are wireless. Where do I
                                    install the power for them?”</a>
                            </div>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">You can charge the mouse
                                and keyboard with a lightning charger. Once charged, they last months before having to
                                charge again.</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Answered 2 days ago by
                                <a href="#" class="text-gray-900 hover:underline dark:text-white">Roberta Casas</a>
                            </p>
                        </div>

                        <div class="py-6 space-y-4 md:py-8">
                            <div class="grid gap-4">
                                <div>
                                    <span
                                        class="inline-block rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300 md:mb-0">
                                        4 answers </span>
                                </div>

                                <a href="#"
                                    class="text-xl font-semibold text-gray-900 hover:underline dark:text-white">“Does
                                    this include the keyboard and mouse?”</a>
                            </div>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Yes it does, color matched
                                to the Mac. And the keyboard has Touch ID.</p>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                Answered 1 week ago by
                                <a href="#" class="text-gray-900 hover:underline dark:text-white">Joseph McFallen</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-6 lg:justify-start">
                    <button type="button"
                        class="w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">View
                        more questions</button>
                </div>
            </div>
        </section>

        <div id="question-modal" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden antialiased antialiased md:inset-0">
            <div class="relative w-full max-w-xl max-h-full p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-700 md:p-5">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ask a question</h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg ms-auto hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="question-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="col-span-2">
                                <label for="question"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your question
                                    <span class="text-gray-500 dark:text-gray-400">(150-1000 characters)</span></label>
                                <textarea id="question" rows="6"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    required=""></textarea>
                            </div>
                            <div class="grid col-span-2 gap-4 md:grid-cols-2">
                                <div>
                                    <label for="question-type"
                                        class="flex items-center mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <span class="me-1">Question type</span>
                                        <button type="button" data-tooltip-target="tooltip-dark"
                                            data-tooltip-style="dark" class="ml-1">
                                            <svg aria-hidden="true"
                                                class="w-4 h-4 text-gray-400 cursor-pointer hover:text-gray-900 dark:text-gray-500 dark:hover:text-white"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Details</span>
                                        </button>
                                        <div id="tooltip-dark" role="tooltip"
                                            class="absolute z-10 invisible inline-block max-w-sm px-3 py-2 text-xs font-normal text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Choose your question type to get a faster answer.
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </label>
                                    <select id="question-type"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                                        <option value="technical">Technical Question</option>
                                        <option value="shipment">Shipment Question</option>
                                        <option value="payment">Payment Issue</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="priority-type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                                    <select id="priority-type"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                                        <option value="very-high">Very High</option>
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload files
                                    <span class="text-gray-500 dark:text-gray-400">(Optional)</span></p>
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer dark:hover:bg-bray-800 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <div class="flex items-center">
                                    <input id="link-checkbox" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                    <label for="link-checkbox"
                                        class="text-sm font-medium text-gray-500 ms-2 dark:text-gray-400">I have read
                                        and agree with the <a href="#"
                                            class="text-primary-600 hover:underline dark:text-primary-500">terms and
                                            conditions</a>.</label>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700 md:pt-5">
                            <button type="submit"
                                class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit
                                question</button>
                            <button type="button" data-modal-toggle="question-modal"
                                class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
