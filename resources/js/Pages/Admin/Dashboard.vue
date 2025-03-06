<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Admin Dashboard" />

    <AdminAuthenticatedLayout>
        <template #header>
            <Link :href="route('products.index')" class="bg-blue-500 text-white p-3 rounded mb-4">Go to products page</Link>
        </template>
    </AdminAuthenticatedLayout>
</template>

