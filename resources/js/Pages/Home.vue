<template>
    <v-layout>
        <v-navigation-drawer
            v-model="drawer"
            style="background-color: #2A3F54;"
            class="text-white"
        >
            <v-list line="one">
                <v-list-item>
                    <v-btn variant="text" class="text-capitalize w-100 d-flex flex-column">
                        <i class="fa-solid fa-house me-3"></i>
                        Base Zero
                    </v-btn>
                </v-list-item>
                <v-list-item>
                    <v-btn variant="text" class="text-capitalize w-100 d-flex flex-column" id="nav">
                        <i class="fa-solid fa-address-card me-3"></i>
                        Cadastro
                    </v-btn>
                    <v-menu activator="#nav" location="end">
                        <v-list>
                            <v-list-item
                                v-for="(menu, index) in menus"
                                :key="index"
                                :value="index"
                            >
                                <v-list-item-title>{{ menu.title }}</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                </v-list-item>
                <v-list-item>
                    <v-btn variant="text" class="text-capitalize w-100 d-flex flex-column">
                        <i class="fa-solid fa-users me-3"></i>
                        Usuarios
                    </v-btn>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar class="bg-grey-lighten-3">
            <v-btn
                color="dark"
                @click.stop="drawer = !drawer"
            >
                <i class="fa-solid fa-bars" style="font-size: 1.5rem;"></i>
            </v-btn>
            <v-toolbar-title class="mx-auto">Base Zero</v-toolbar-title>
            <v-btn
                id="menuprofile"
                color="dark"
                variant="tonal"
                class="text-capitalize"
                >
                Admin
            </v-btn>
            <v-menu activator="#menuprofile" location="end">
                <v-list>
                    <v-list-item
                        v-for="(item, index) in items"
                        :key="index"
                        :value="index"
                        :href="item.href"
                    >
                        {{ item.value }}
                    </v-list-item>
                </v-list>
            </v-menu>
        </v-app-bar>

        <v-main>
            <v-sheet class="pa-2">
                <v-table>
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center">
                                Item
                            </th>
                            <th rowspan="2" class="text-center">
                                Subitem
                            </th>
                            <th rowspan="2" class="text-center">
                                Fornecedor
                            </th>
                            <th class="text-center" colspan="4">
                                Valor cotado
                            </th>
                            <th class="text-center" colspan="4">
                                Valor aprovado
                            </th>
                            <th rowspan="2" class="text-center">
                                Vl Realizado (R$)
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">
                                Valor Unit.<br>(R$)
                            </th>
                            <th class="text-center">
                                Qtd.
                            </th>
                            <th class="text-center">
                                Unid.
                            </th>
                            <th class="text-center">
                                Total:<br>R$ 00.0000,00
                            </th>

                            <th class="text-center">
                                Valor Unit.<br>(R$)
                            </th>
                            <th class="text-center">
                                Qtd.
                            </th>
                            <th class="text-center">
                                Unid.
                            </th>
                            <th class="text-center">
                                Total:<br>R$ 00.0000,00
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><v-text-field variant="outlined" :value="data.item" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.subitem" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.fornec" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ct_vlunit" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ct_qunt" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ct_unid" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td class="text-center"><v-text-field variant="outlined" :value="data.ct_total" density="compact" hide-details class="pa-0"></v-text-field></td>
                            
                            <td><v-text-field variant="outlined" :value="data.ap_vlunit" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ap_qunt" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ap_unid" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td class="text-center"><v-text-field variant="outlined" :value="data.ap_total" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td><v-text-field variant="outlined" :value="data.ap_total" density="compact" hide-details class="pa-0"></v-text-field></td>
                            <td class="d-flex ga-1 align-center">
                                <v-btn class="bg-amber-accent-3"><i class="fa-solid fa-trash"></i></v-btn>
                                <v-btn class="bg-amber-accent-3"><i class="fa-solid fa-cloud-arrow-up"></i></v-btn>
                                <v-btn class="bg-green"><i class="fa-solid fa-floppy-disk"></i></v-btn>
                            </td>
                        </tr>
                    </tbody>
                </v-table>
            </v-sheet>
        </v-main>
    </v-layout>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
    data: {}
})
const drawer = ref(true);

const items = [
    { 
        value: 'Profile',
        href: '#'
    },
    { 
        value: 'Log out',
        href: '/'
    },
]

const menus = [
    { title: 'Projetos' },
    { title: 'Item' },
    { title: 'SubItem' },
    { title: 'Plataforma' },
    { title: 'A' },
    { title: 'B' },
    { title: 'C' },
    { title: 'D' },
    { title: 'E' },
]
const isWideScreen = ref(window.innerWidth > 1000);

const handleResize = () => {
  isWideScreen.value = window.innerWidth > 1000;
};

onMounted(() => {
  window.addEventListener('resize', handleResize);
});

const show = ref(isWideScreen);

function OpenSidebar(){
    if(show.value){
        show.value = false
    }else{
        show.value = true
    }
}

function CloseSidebar(){
    show.value = false
}
</script>

<style>
td, tr, th{
    padding: 0 !important;
    margin: 0 !important;
}
.v-expansion-panel-text__wrapper{
    padding: 5px !important;
}
</style>