<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Breadcrumb from '@/Layouts/Partials/Admin/Breadcrumb.vue';

const breadcrumbs = [
  { name: 'admin.dashboard', label: 'Dashboard' },

  { name: 'admin.tours.index', label: 'Tours' }


];
</script>
<template>
    <AdminLayout title="Tours">
        <Breadcrumb :breadcrumbs="breadcrumbs" />


    </AdminLayout>
</template>
