<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "./components/Home.vue";

export default defineComponent({
  name: "App",
  setup() {
    const router = createRouter({
      history: createWebHistory(),
      routes: [
        {
          path: "/Home",
          name: "Home",
          component: Home,
        },

      ],
    });

    return { router };
  },
});
</script>

