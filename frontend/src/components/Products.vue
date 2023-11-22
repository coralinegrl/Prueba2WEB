<template>
    <div class="products-container">
      <h2 class="text-center font-bold text-xl mb-4">Listado de Productos</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <Product
          v-for="product in products"
          :key="product.id"
          :name="product.name"
          :price="product.price"
          :description="product.description"
          :image="product.image"
        />
      </div>
    </div>
</template>
  
<script>
import Product from './components/Product.vue';
import axios from 'axios';
  
export default {
    name: 'Products',
    components: {
      Product
    },
    data() {
      return {
        products: []
      };
    },
    created() {
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
.products-container {
    padding: 20px;
}
</style>
  