<template>
    <Index>
        <v-sheet class="d-flex align-center justify-space-between bg-transparent">
            <h1 class="text-blue-grey-darken-3">Editar</h1>
            <div class="d-flex ga-2">
                <v-btn><i class="fa-solid fa-filter me-2"></i>Filtro</v-btn>
                <v-btn><i class="fa-solid fa-plus me-2"></i>Novo</v-btn>
            </div>
        </v-sheet>
            <hr class="my-2">
        <v-sheet class="d-flex flex-column ga-1">
            <v-expansion-panels v-for="(accordion, id) in accordions" :key="id" class="bg-black">
                <v-expansion-panel>
                    <v-sheet class="d-flex align-center px-3">
                        <v-btn size="small" variant="text">{{ accordion.id }}</v-btn>
                        <v-expansion-panel-title>{{ accordion.title }}</v-expansion-panel-title>
                        <v-btn size="small"><i :class="accordion.iconButton"></i></v-btn>
                        <v-btn size="small"><i :class="accordion.iconButton"></i></v-btn>
                        <v-btn size="small"><i :class="accordion.iconButton"></i></v-btn>
                    </v-sheet>
                    <v-expansion-panel-text>
                        <v-table>
                            <thead>
                            <tr>
                                <th class="text-left">
                                    Name
                                </th>
                                <th class="text-left">
                                    Calories
                                </th>
                                <th class="text-left">
                                    first name
                                </th>
                                <th class="text-left">
                                    last name
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr
                                v-for="item in desserts"
                                :key="item.name"
                            >
                                <td>{{ item.name }}</td>
                                <td>{{ item.calories }}</td>
                                <td>{{ item.firstname }}</td>
                                <td>{{ item.lastname }}</td>
                            </tr>
                            </tbody>
                        </v-table>
                    </v-expansion-panel-text>
                </v-expansion-panel>
            </v-expansion-panels>
        </v-sheet>
        <!-- <ProgressSpinner v-if="accordions" animationDuration="3s"/> -->
    </Index>
</template>

<script setup>
import Index from '@/Layouts/Index.vue';
// import ProgressSpinner from 'primevue/progressspinner';

const accordions = [
    {
        id: 120,
        title: 'title - 1',
        iconButton: 'fa-solid fa-file'
    },
    {
        id: 121,
        title: 'title - 2',
        iconButton: 'fa-solid fa-file'
    },
    {
        id: 123,
        title: 'title - 3',
        iconButton: 'fa-solid fa-file'
    },
]

const desserts = [
    {
        name: 'Frozen Yogurt',
        calories: 159,
        firstname: 'anderson',
        lastname: 'da silva'
    },
    {
        name: 'Ice cream sandwich',
        calories: 237,
        firstname: 'anderson',
        lastname: 'da silva'
    }
]
</script>
