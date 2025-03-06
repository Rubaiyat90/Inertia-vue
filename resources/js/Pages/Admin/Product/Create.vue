<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

defineProps({ errors: Object })

const form = useForm({
    name: '',
    price: ''
});

const saveProduct = () => {
    const res = form.post(route('products.store'));
    if (res) {
        form.reset();
    }
};
</script>

<template>
    <Head title="Create Product" />

    <AdminAuthenticatedLayout>

        <template #header>
            <div class="flex justify-between">
                <h5>
                    Create Product
                </h5>
                <Link :href="route('products.index')" class="bg-blue-500 text-white p-3 rounded mb-4">Back</Link>
            </div>
            <div>
                <form @submit.prevent="saveProduct()">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text"  v-model="form.name" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"/>
                        <div  class="text-red-500" v-if="errors.name">{{ errors.name }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="text" v-model="form.price" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"/>
                        <div  class="text-red-500" v-if="errors.price">{{ errors.price }}</div>
                    </div>
                    <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white p-3 rounded">
                            <span v-if="form.processing">Saving...</span>
                            <span v-else>Save</span>
                        </button>
                </form>
            </div>
        </template>
    </AdminAuthenticatedLayout>
</template>

