<template>
    <v-sheet class="d-flex justify-center align-center" style="height: 100vh !important; background-image: linear-gradient(#1976D2, #90CAF9);">
        <v-card class="d-flex flex-column bg-blue-darken-3 elevation-20" width="350">
            <v-card-title class="bg-blue-darken-4 mx-auto">Base zero - Login</v-card-title>
            <v-sheet class="bg-blue-darken-3 pa-4">
                <v-text-field label="Nome" variant="outlined"></v-text-field>
                <v-text-field label="Senha" variant="outlined" type="password"></v-text-field>
                <v-btn variant="outlined" class="mx-auto w-100" href="/home">Entrar</v-btn>
                <div class="d-flex justify-space-between pt-3">
                    <a class="text-decoration-underline text-white" href="#">Esqueceu a senha?</a>
                    <a class="text-decoration-underline text-white" href="#">Crie uma agora</a>
                </div>
            </v-sheet>
            
        </v-card>
    </v-sheet>
</template>

<script setup>
</script>

<style scoped>
</style>