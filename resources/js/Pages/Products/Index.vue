<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Product Lists
                </h2>
            </template>
        <div v-for="product in products" :key="product.id" class="flex justify-center">
            <div class="bg-white m-3 h-auto w-56">
                <h3 class="text-2xl text-gray-600">Product: {{product.name}}</h3>
                <h3 class="text-2xl text-gray-600">Description: {{product.description}}</h3>
                <h3 class="text-2xl text-gray-600">Price: {{product.price}}</h3>
            </div>
        </div>
        </app-layout>
    </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";'../../Layouts/AppLayout'
export default {
props: ['products'],
components: {
    AppLayout
    }
}
</script>

