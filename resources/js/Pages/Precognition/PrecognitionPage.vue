<script setup>
import { useForm } from 'laravel-precognition-vue-inertia'
import Layout from '@/Layouts/MainLayout'

const props = defineProps({
  keyword: String,
})

const form = useForm('post', '/precognition', {
  keyword: ''
})

const submit = () => form.submit({
  preserveScroll: true,
  onSuccess: () => form.reset(),
})
</script>

<template>
  <layout>
    <h2>Precognition</h2>
    <form @submit.prevent="submit">
      <div>
        <label for="keyword">何か文字を入れて！</label>
        <input
          id="keyword"
          class="form-control"
          v-model="form.keyword"
          @change="form.validate(keyword)"
        />
      </div>
      <div v-if="form.invalid('keyword')">
        {{ form.errors.keyword }}
      </div>
      <div>
        <button
          :disabled="form.processing"
          class="primary-button"
        >送信</button>
      </div>
    </form>
    <div v-if="props.keyword">
      {{ props.keyword }}
    </div>
  </layout>
</template>
