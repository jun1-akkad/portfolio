<script setup>
import Layout from '@/Layouts/MainLayout'

const technics = [
  { name: 'Laravel 11', desc: 'ららべる', url: 'https://laravel.com/' },
  { name: 'Inertia', desc: 'サーバー駆動型 Web アプリを構築するもの', url: 'https://inertiajs.com/' },
  { name: 'Tailwind CSS', desc: 'CSS', url: 'https://tailwindcss.com/' },
  { name: 'Laravel Telescope', desc: 'デバグ情報をブラウザに表示するツール。開発中に使うと便利', url: 'https://laravel.com/docs/11.x/telescope' },
]
</script>

<template>
  <layout>
    <h2>home</h2>
    <div class="debug-memo">フロントエンドは苦手</div>
    <div>ロジックはできるけど、CSSとかのデザインはからっきし。。。</div>

    <h2>このプロジェクトで使ってるもの</h2>
    <div>
      <table>
        <thead>
          <tr>
            <th>名前</th>
            <th>概要</th>
            <th>URL</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="tech in technics">
            <td>{{ tech.name }}</td>
            <td>{{ tech.desc }}</td>
            <td><a target="_blank" :href="tech.url">{{ tech.url }}</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </layout>
</template>
