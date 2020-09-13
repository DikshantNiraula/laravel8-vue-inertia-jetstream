<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Product Create
                </h2>
            </template>
            <div class="m-10">
                <form  @submit.prevent="submit">
                <div class="mb-3">
                <label for="name">Enter a Product Name:</label>
                <input type="text" v-model="form.name" placeholder="Enter name for product" class="border-2 border-blue-400 px-2 py-1">
                </div>
                    <br />
                <div>
                <label for="description">Enter a Product Description:</label>
                <input type="text" v-model="form.description" placeholder="Enter description for product" class="border-2 border-blue-400 px-2 py-1">
                </div>
                <br />
                <div>
                <label for="price">Enter a Product Price:</label>
                <input type="text" v-model="form.price" placeholder="Enter price for product $$" class="border-2 border-blue-400 px-2 py-1">
                </div>
                <div>
                    <input type="submit" class="border-1 rounded-lg bg-blue-400 px-2 py-1 hover:bg-blue-500">
                </div>
                </form>
                <br />
            </div>
        </app-layout>

    </div>

</template>
<script>
import AppLayout from "../../Layouts/AppLayout";
export default {
    name: "Create",
    data() {
        return {
            form: {
                name: null,
                description: null,
                price: null,
            },
        }
    },
components:{
        AppLayout
},
    methods: {
        submit() {
            this.$inertia.post('/product', this.form)
        },
    },
}
</script>

<style scoped>
.border-blue-400 {
}
</style>
