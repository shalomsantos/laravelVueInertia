<template>
    <!-- <aside class="position-absolute h-100 z-3"> -->
    <aside :class="show? 'position-absolute h-100 z-3 exibir': 'position-absolute h-100 z-3 esconder'">
        <div class="sidebar bg-dark d-flex flex-column h-100 text-center py-3">
            <span @click="$emit('closeSidebar')" class="position-absolute top-0 end-0 m-2">
                <i class="fa-solid fa-xmark text-white fs-2"></i>
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </a>
                </li>
                
                <hr class="text-white">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-gear"></i>
                        <p>Ferramentas</p>
                    </a>
                </li>
                <li class="nav-item dropdown dropend">
                    <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-folder-closed"><p class="fw-normal mt-2">Cadastrar</p></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <p>Login</p>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script setup>
const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
})
</script>

<style scoped>

</style>