<script setup>
import AdminLayout from '@/Layouts/GuestLayout.vue';
//import TestModal from '@/Components/TestModal.vue';
import { ref } from 'vue';

const showModal = ref(false);

function toggleModal() {
  showModal.value = !showModal.value;
}
</script>


<template>
    <AdminLayout title="shopping cart">


        <h2>CARRITO DE COMPRAS</h2>

        <hr>

        <h1>carrito de compras</h1>
    </AdminLayout>
</template>