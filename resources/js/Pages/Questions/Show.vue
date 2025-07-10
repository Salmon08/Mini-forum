<template>
  <div class="p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold">{{ question.title }}</h2>
    <p class="text-gray-700 mt-2">{{ question.description }}</p>

    <hr class="my-6" />

    <h3 class="text-xl font-semibold mb-2">Answers</h3>
    <ul class="mb-6">
      <li v-for="a in question.answers" :key="a.id" class="bg-gray-100 p-3 rounded mb-2">
        {{ a.answer_text }}
      </li>
    </ul>

    <form @submit.prevent="submit">
      <div class="mb-4">
        <textarea v-model="form.answer_text" rows="4" class="w-full border rounded px-3 py-2" placeholder="Write your answer..."></textarea>
        <div v-if="errors.answer_text" class="text-red-500 text-sm mt-1">{{ errors.answer_text }}</div>
      </div>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Submit Answer
      </button>
    </form>
  </div>
</template>

<script src="./Show.js"></script>
