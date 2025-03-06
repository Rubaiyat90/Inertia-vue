<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="flex justify-between p-4 bg-gray-300">
        <div>
            Nav Bar
        </div>
        <div>
            <ul class="flex gap-x-4 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <Link class="text-dark" :href="route('admin.myhome')">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('admin.aboutus')">About</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('admin.contactus')">Cotact</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>
