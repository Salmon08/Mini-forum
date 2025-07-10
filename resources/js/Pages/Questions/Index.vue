<template>
  <div class="p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-6">All Questions</h1>

    <Link href="/questions/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">
      + Ask Question
    </Link>

    <div v-for="q in questions" :key="q.id" class="bg-white rounded-xl shadow p-4 mb-4 border">
      <h2 class="text-lg font-semibold">{{ q.title }}</h2>
      <p class="text-gray-700 mt-2">{{ q.description }}</p>
      <Link :href="`/questions/${q.id}`" class="text-blue-500 mt-2 inline-block">View Answers</Link>
    </div>
  </div>
</template>

<script src="./Index.js"></script>
