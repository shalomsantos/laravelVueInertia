
<template>
    <v-app>
        <v-navigation-drawer v-model="drawer" class="bg-blue-grey-darken-1">
            <v-list-item
                prepend-avatar="./perfil.jpeg"
                title="admin admin"
            ></v-list-item>

            <v-divider></v-divider>

            <v-list density="compact" nav>
                <v-list-item prepend-icon="mdi-view-dashboard" title="Home" value="home"></v-list-item>
                <v-list-item prepend-icon="mdi-forum" title="About" value="about"></v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar class="bg-blue-grey-darken-3">
            <v-app-bar-nav-icon @click="drawer = !drawer">
                <i class="fa-solid fa-bars"></i>
            </v-app-bar-nav-icon>

            <v-app-bar-title>
                Sistema de precificação
            </v-app-bar-title>
        </v-app-bar>

        <v-main class="main bg-grey-lighten-3">
            <slot/>
        </v-main>
    </v-app>
</template>

<script setup>
import {ref} from 'vue';

const drawer = ref(false);
</script>

<style scoped>
.main{
    padding: 5rem 1rem 1rem 1rem;
}
</style>


