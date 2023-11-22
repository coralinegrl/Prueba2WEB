<template>
  <div class="product border rounded-lg overflow-hidden shadow-md">
      <div v-if="!isEditing">
          <img :src="localImage" :alt="localName" class="w-full max-w-xs mx-auto" />
          <div class="py-2 text-center">
              <p class="font-bold text-lg">{{ localName }}</p>
              <p class="text-gray-700">{{ localPrice }}</p>
              <p class="text-gray-600">{{ localDescription }}</p>
          </div>
          <span @click="openEditModal" class="cursor-pointer text-blue-500 hover:text-blue-700">
              <PencilIcon class="w-4 h-4 inline m-2" />
          </span>
      </div>

      <!-- Formulario de edición -->
      <div v-if="isEditing" class="p-4">
          <input v-model="localImage" type="text" placeholder="URL de la imagen" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
          <input v-model="localName" type="text" placeholder="Nombre" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
          <input v-model="localPrice" type="number" placeholder="Precio" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
          <textarea v-model="localDescription" placeholder="Descripción" class="w-full px-3 py-2 border border-gray-300 rounded-md mb-2"></textarea>
          <button @click="updateProduct" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mr-2">Guardar</button>
          <button @click="cancelEdit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</button>
      </div>
  </div>
</template>

<script>
import { PencilIcon } from '@heroicons/vue/solid';
import axios from 'axios';

export default {
  name: 'Product',
  components: {
      PencilIcon,
  },
  props: {
      name: String,
      price: Number,
      description: String,
      image: String,
  },
  data() {
      return {
          isEditing: false,
          localName: this.name,
          localPrice: this.price,
          localDescription: this.description,
          localImage: this.image,
      };
  },
  methods: {
      openEditModal() {
          this.isEditing = true;
      },
      cancelEdit() {
          this.isEditing = false;
      },
      updateProduct() {
          const productData = {
              name: this.localName,
              price: this.localPrice,
              description: this.localDescription,
              image: this.localImage
          };

          axios.put(`/api/products/${this.$props.id}`, productData)
              .then(response => {
                  // Actualizar datos locales con la respuesta, si es necesario
                  this.isEditing = false;
              })
              .catch(error => {
                  console.error(error);
              });
      }
  }
}
</script>

<style>
.product {
  margin-top: 20px;
  margin-bottom: 20px;
  text-align: center;
  height: auto;
}

.product img {
  width: 100px;
  height: 100px;
  margin-top: 20px;
}
</style>
