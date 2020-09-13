<template>
    <app-layout>
        <template #header>
            <div class="flex justify-evenly">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Goto:

            </h2>
            <inertia-link href="/product/create">Add Product</inertia-link>
            <inertia-link href="/product">List Products</inertia-link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!--                    <welcome />-->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'
    import Welcome from './../Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
