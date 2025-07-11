<template>
  <div class="px-6 py-10 max-w-6xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-10">
      <h1 class="text-4xl font-extrabold text-gray-800 tracking-tight">Explore Questions</h1>
      <Link
        href="/questions/create"
        class="flex items-center gap-2 bg-gradient-to-r from-sky-500 to-indigo-500 text-white px-5 py-2.5 rounded-full shadow-lg hover:from-sky-600 hover:to-indigo-600 transition"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Ask Question
      </Link>
    </div>

    <!-- Questions List -->
    <div v-if="questions.length" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div
        v-for="q in questions"
        :key="q.id"
        class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-indigo-400 transition duration-300"
      >
        <h2 class="text-xl font-semibold text-indigo-700 mb-2 hover:underline">
          <Link :href="`/questions/${q.id}`">{{ q.title }}</Link>
        </h2>
        <p class="text-gray-600 mb-4 line-clamp-3">{{ q.description }}</p>

        <div class="flex items-center justify-between">
          <Link
            :href="`/questions/${q.id}`"
            class="text-sm font-medium text-blue-600 hover:underline"
          >
            View Answers →
          </Link>
          <span class="text-xs text-gray-400">#{{ q.id }}</span>
        </div>
      </div>
    </div>

    <!-- Empty State -->
    <div v-else class="text-center mt-16 text-gray-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-10 w-10 text-gray-300 mb-3" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9.75 17L8 21l-1.75-4M3 13h18M5 10l1.75-4L8 10M19 10l-1.75-4L16 10" />
      </svg>
      No questions found.
    </div>
  </div>
</template>

<script src="./Index.js"></script>

<style scoped>
.line-clamp-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
</style>
