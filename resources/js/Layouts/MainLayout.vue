<script setup>
import MainMenu from '@/Components/MainMenu/MainMenu'
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <header class="p-2 w-screen">
      <h1>Portfolio</h1>
      <main-menu></main-menu>
    </header>
    <main class="p-2 flex-grow">
      <slot></slot>
    </main>
    <footer class="p-2 w-screen">
      <div>footer</div>
    </footer>
  </div>
</template>
