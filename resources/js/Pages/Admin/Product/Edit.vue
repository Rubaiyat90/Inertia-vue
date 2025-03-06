<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    errors: Object,
    product: Object
})

const form = useForm({
    name: props.product.name,
    price: props.product.price
});

const updateProduct = () => {
    const res = form.put(route('products.update', props.product.id));
    if (res) {
        form.reset();
    }
};
</script>

<template>
    <Head title="Edit Product" />

    <AdminAuthenticatedLayout>

        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>

        <template #header>
            <div class="flex justify-between">
                <h5>
                    Edit Product
                </h5>
                <Link :href="route('products.index')" class="bg-blue-500 text-white p-3 rounded mb-4">Back</Link>
            </div>
            <div>
                <form @submit.prevent="updateProduct()">
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
                    <div class="mb-4">
                        <button type="submit" :disabled="form.processing" class="bg-blue-500 text-white p-3 rounded">
                            <span v-if="form.processing">Updating...</span>
                            <span v-else>Update</span>
                        </button>
                    </div>
                </form>
            </div>
        </template>
    </AdminAuthenticatedLayout>
</template>

