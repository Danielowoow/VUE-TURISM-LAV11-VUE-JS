<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Breadcrumb from '@/Layouts/Partials/Admin/Breadcrumb.vue';

const breadcrumbs = [
  { name: 'admin.dashboard', label: 'Dashboard' },
  { name: 'admin.tours.index', label: 'Tours' },
  { name: 'admin.tours.show', label: 'ver' }
];
</script>
<template>
    <AdminLayout title="destinos">
        <Breadcrumb :breadcrumbs="breadcrumbs" />

        <h1>acá se podrá ver el destino</h1>
    </AdminLayout>
</template>
