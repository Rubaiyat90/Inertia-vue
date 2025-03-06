<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
    products: Array,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>
        <div v-if="$page.props.flash.message" class="alert bg-green-200 mt-4 mx-5 px-4 py2">
            {{ $page.props.flash.message }}
        </div>

        <div class="mt-4 mx-4">
            <h3 class="text-lg font-semibold leading-tight text-gray-800">
                Product List
            </h3>
            <table class="w-full bg-white border border-gray-300 shadow">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-left border">Id</th>
                        <th class="py-2 px-4 text-left border">Name</th>
                        <th class="py-2 px-4 text-left border">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in products" :key="index">
                        <td class="py-2 px-4 border">{{ item.id }}</td>
                        <td class="py-2 px-4 border">{{ item.name }}</td>
                        <td class="py-2 px-4 border">{{ item.price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>
