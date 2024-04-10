<template>
    <div class="d-flex gap-3 p-2">
        <a class="btn btn-dark px-3" href="#" @click="OpenModal">Filtro
            <i class="fa-solid fa-filter"></i>
        </a>
        <a class="btn btn-primary px-3" href="#">Novo
            <i class="fa-solid fa-plus"></i>
        </a>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <div id="modal" class="position-fixed top-50 start-50" style="display: none;">
            <h1 class="text-primary">Teste</h1>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    dados: {
        type: Array,
        default: [],
    },
});

const modal = document.getElementById('modal');

function OpenModal(){
    console.log(modal);
}
function CloseModal(){
    modal.style.display = 'block';
}



</script>

<style scoped>

</style>