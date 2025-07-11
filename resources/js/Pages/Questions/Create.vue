<template>
  <div class="px-6 py-10 max-w-2xl mx-auto">


    <!-- Heading -->
    <div class="mb-3 flex flex-row justify-between">
      <h2 class="text-3xl font-extrabold text-gray-800 mb-2">Ask a New Question</h2>
      <button @click="$inertia.visit(route('questions.index'))" class="text-blue-500 hover:underline ">Back</button>
    </div>
    <p class="text-gray-500 mb-3">Share your question clearly to get better answers from the community.</p>

    <!-- Form Card -->
    <form
      @submit.prevent="submit"
      class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 space-y-6"
    >
      <!-- Title Field -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Title</label>
        <input
          v-model="form.title"
          type="text"
          placeholder="Enter a clear and descriptive title"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition"
        />
        <div v-if="errors.title" class="text-sm text-red-600 mt-1">{{ errors.title }}</div>
      </div>

      <!-- Description Field -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Description</label>
        <textarea
          v-model="form.description"
          rows="6"
          placeholder="Provide more context or details about your question..."
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition"
        ></textarea>
        <div v-if="errors.description" class="text-sm text-red-600 mt-1">{{ errors.description }}</div>
      </div>

      <!-- Submit Button -->
      <div>
        <button
          type="submit"
          class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2.5 rounded-full shadow hover:from-blue-700 hover:to-indigo-700 transition"
        >
          Submit Question
        </button>
      </div>
    </form>
  </div>
</template>

<script src="./Create.js"></script>
