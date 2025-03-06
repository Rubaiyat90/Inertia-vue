<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

defineProps({
    products: Array
});

const form = useForm();

const deleteProduct = (productId) => {
    if (confirm('Are you sure you want to delete this product?')) {
        form.delete(route('products.destroy', productId));
    }
};

</script>

<template>
    <Head title="Products" />

    <AdminAuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h5>
                    Product List
                </h5>
                <Link :href="route('products.create')" class="bg-blue-500 text-white p-3 rounded mb-4">Add products</Link>
            </div>
            <div v-if="$page.props.flash.message" class="alert bg-green-200 mt-4 mx-5 px-4 py2">
                    {{ $page.props.flash.message }}
            </div>
            <div class="mt-4 mx-4">
                <table class=" w-full bg-white border border-gray-300 shadow">
                    <thead>
                        <tr >
                            <th class="py-2 px-4 text-left border">Id</th>
                            <th class="py-2 px-4 text-left border">Name</th>
                            <th class="py-2 px-4 text-left border">Price</th>
                            <th  class="py-2 px-4 text-left border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in products" :key="index">
                            <td class="py-2 px-4 border">{{ item.id }}</td>
                            <td class="py-2 px-4 border">{{item.name}}</td>
                            <td class="py-2 px-4 border">{{ item.price }}</td>
                            <td>
                                <Link :href="route('products.edit', item.id)" class="text-blue-500">Edit</Link>
                                <button type="submit" @click="deleteProduct(item.id)" class="text-red-500">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </template>
    </AdminAuthenticatedLayout>
</template>

