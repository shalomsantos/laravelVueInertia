<template>
    <header>
        <nav class="navbar navbar-expand-sm position-relative px-3">
            <button @click="$emit('OpenSidebar')" class="btn fs-3" style="visibility: hidden;">
                <i class="fa-solid fa-bars"></i>
            </button>
            <span class="position-absolute top-50 start-50 translate-middle fs-2 fw-bold">Base Zero</span>
            <div class="dropdown ms-auto">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <!-- <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> -->
        </nav>
    </header>
</template>

<script setup>
defineEmits(['OpenSidebar'])
</script>

<style scoped>
    .navbar{
        box-shadow: rgba(99, 99, 99, 0.231) 0 0 1rem 10px;
    }

    @media only screen and (max-width: 1000px) {
        .btn.fs-3 {
            visibility: visible !important;
        }
    }
</style>