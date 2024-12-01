<script setup>
import { Link as ILink } from '@inertiajs/vue3'

const menuItems = [
  { title: 'Home', url: '/' },
  { title: 'Skills', url: '/skills' },
  { title: 'Telescope', url: '/telescope' },
  { title: 'Precognition', url: 'precognition' },
]
</script>

<template>
  <div class="m-2 p-2 border border-gray-400">
    <h2>メニュー</h2>
    <ul class="p-2 border border-gray-300">
      <li v-for="item in menuItems">
        <i-link :href="item.url">{{ item.title }}</i-link>
      </li>
    </ul>
  </div>
</template>
