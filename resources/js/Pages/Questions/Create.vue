<template>
  <div class="p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Ask a New Question</h2>

    <form @submit.prevent="submit">
      <div class="mb-4">
        <label class="block font-medium mb-1">Title</label>
        <input v-model="form.title" type="text" class="w-full border rounded px-3 py-2" />
        <div v-if="errors.title" class="text-red-500 text-sm">{{ errors.title }}</div>
      </div>

      <div class="mb-4">
        <label class="block font-medium mb-1">Description</label>
        <textarea v-model="form.description" class="w-full border rounded px-3 py-2" rows="5"></textarea>
        <div v-if="errors.description" class="text-red-500 text-sm">{{ errors.description }}</div>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Submit Question
      </button>
    </form>
  </div>
</template>

<script src="./Create.js"></script>
