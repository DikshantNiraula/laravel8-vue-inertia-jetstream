<template>
    <div>
        <div class="bg-white h-auto p-24 m-3 shadow-xl rounded-lg">
            <h3 class="text-2xl text-gray-600">Product: {{product.name}}</h3>
            <h3 class="text-2xl text-gray-600">Description: {{product.description}}</h3>
            <h3 class="text-2xl text-gray-600">Price: {{product.price}}</h3>
            <div class="mt-3">
                <Button @click="delete_product(product)" class="bg-red-700 py-2 px-3 text-white rounded-lg shadow-md focus:outline-none focus:bg-red-600 hover:bg-red-600 mr-4">Delete</Button>
                <inertia-link href="/product/product.id/edit" class="bg-blue-700 py-2 px-3 text-white rounded-lg shadow-md focus:outline-none focus:bg-blue-600 hover:bg-blue-600">Edit Product</inertia-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        product: Object
    },
    methods:{
        delete_product(product){
            this.$inertia.delete(`/product/${product.id}`, {
                replace: false,
                preserveState: false,
                preserveScroll: true,

            })
        }
    }
}
</script>

<style scoped>

</style>
