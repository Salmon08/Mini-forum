<template>
  <div class="px-6 py-10 max-w-4xl mx-auto">
    <!-- Question Block -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow p-6 mb-8">
      <h2 class="text-3xl font-extrabold text-indigo-700 mb-3">{{ question.title }}</h2>
      <p class="text-gray-700 text-lg leading-relaxed">{{ question.description }}</p>
    </div>

    <!-- Answers Section -->
    <div class="mb-10">
      <h3 class="text-2xl font-bold text-gray-800 mb-4">Answers</h3>
      <ul v-if="question.answers && question.answers.length" class="space-y-4">
        <li
          v-for="a in question.answers"
          :key="a.id"
          class="bg-gradient-to-br from-blue-50 to-blue-100 text-gray-800 rounded-xl p-4 shadow-sm border border-blue-200"
        >
          {{ a.answer_text }}
        </li>
      </ul>
      <p v-else class="text-gray-500 italic">No answers yet. Be the first to respond!</p>
    </div>

    <!-- Submit Answer Form -->
    <form @submit.prevent="submit" class="bg-white border border-gray-200 rounded-2xl shadow p-6">
      <h4 class="text-xl font-semibold text-gray-800 mb-4">Your Answer</h4>
      <div class="mb-4">
        <textarea
          v-model="form.answer_text"
          rows="5"
          placeholder="Write your answer..."
          class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition"
        ></textarea>
        <div v-if="errors.answer_text" class="text-sm text-red-600 mt-1">{{ errors.answer_text }}</div>
      </div>
      <button
        type="submit"
        class="bg-green-600 text-white px-6 py-2.5 rounded-full hover:bg-green-700 shadow-md transition"
      >
        Submit Answer
      </button>
    </form>
  </div>
</template>

<script src="./Show.js"></script>
