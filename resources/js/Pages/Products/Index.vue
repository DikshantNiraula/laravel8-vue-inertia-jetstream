<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Product Lists
                </h2>
            </template>
            <div v-if="products == ''" class="flex justify-center mt-10 sm:w-full md:w-auto">
                <h3 class="text-xl text-bold shadow-xl bg-white h-auto p-10 rounded-lg">Sorry 😢, No Products are there in Store currently...</h3>
            </div>
            <div v-else>
                <div v-for="product in products" :key="product.id">
                    <div class="flex justify-center items-center">
                        <ProductLayout :product="product"/>
                    </div>
                </div>
            </div>

        </app-layout>
    </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";'../../Layouts/AppLayout'
import ProductLayout from "./ProductLayout";
export default {
props: ['products'],
components: {
    AppLayout,
    ProductLayout
    },
    // data() {
    // return{
    //     products: this.products
    // }
    // }
}
</script>

