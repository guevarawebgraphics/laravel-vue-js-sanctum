import { createApp } from 'vue';
// import Vue from 'vue';
import { createRouter, createWebHistory } from "vue-router";
import Store from './store.js';
import App from "./pages/App.vue";
import Login from "./pages/Login.vue";
import Register from "./pages/Register.vue";
import Dashboard from "./pages/Dashboard.vue";
import CreateStore from "./pages/CreateStore.vue";
import EditStore from "./pages/EditStore.vue";

const routes = [
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/dashboard', component: Dashboard },
    { path: '/create-store', component: CreateStore },
    { path: '/edit-store/:id', component: EditStore },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

createApp(App)
    .use(router)
    .use(Store)
    .mount("#app");