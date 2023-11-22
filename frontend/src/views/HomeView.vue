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

export default defineComponent({
    name: "App",
    setup() {
        const router = createRouter({
            history: createWebHistory(),
            routes: [
                {
                    path: "/TopBar",
                    name: "TopBar",
                    component: TopBar,
                },

            ],
        });

        return { router };
    },
});