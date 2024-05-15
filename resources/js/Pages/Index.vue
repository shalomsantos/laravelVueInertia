
<template>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer" class="bg-blue-grey-darken-1">
            <v-list-item
                prepend-avatar="https://randomuser.me/api/portraits/men/78.jpg"
                title="John Leider"
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
                <i class="fa-solid fa-b"></i>
                <i class="fa-solid fa-z"></i>
                 - Base Zero
            </v-app-bar-title>
        </v-app-bar>

        <v-main class="bg-grey-lighten-3">
            <!--  -->
        </v-main>
    </v-app>
</template>

<script setup>
import {ref} from 'vue';

const drawer = ref(true);
</script>


