<template>
    <header class="bg-navy h-64 flex flex-col items-center justify-center"> <!-- Fondo azul marino, altura y centra todo vertical y horizontalmente -->
        <div class="container mx-auto px-4 flex flex-col items-center justify-center"> <!-- Centrado y padding -->
            <div class="header-content text-white text-center"> <!-- Texto blanco y centrado -->
                <h1 class="text-2xl font-bold">{{ fullName }}</h1>
                <p>{{ title }}</p>
            </div>
        </div>
    </header>
</template>



<script>
export default {
    name: 'TopBar',
    props: {
      fullName: {
        type: String,
        default: 'Andrea Saldaña Cavour'
      },
      class: {
        type: String,
        default: 'Introducción al Desarrollo Web/móvil' // Proporciona un valor por defecto
      },
      altText: {
        type: String,
        default: 'Productos'
      }
    }
}
</script>

<style>
.header-content {
    text-align: center;

}
.bg-navy {
    background-color: #0D1B2A;
}
</style>
