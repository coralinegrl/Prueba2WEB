<template>
    <div>
        <TopBar   />
        <Products />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import TopBar from "./components/TopBar.vue";
import Products from "./components/Products.vue";

export default {
    name: 'HomeView',
    components: {
        TopBar,
        Products
    },
    data() {
        return {
            products: null,
        };
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        fetchProducts() {
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los productos:', error);
                });
        }
    }

};
</script>

<style>
</style>