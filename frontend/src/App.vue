<template>
  <main class="min-h-screen bg-slate-50 p-10">
    <h1 class="text-3xl font-extrabold text-slate-900">
      Feed2Note <span class="text-indigo-600">Tailwind OK?</span>
    </h1>

    <div class="mt-6 grid gap-4 sm:grid-cols-2">
      <div class="p-6 rounded-2xl shadow-sm bg-white border border-slate-200">
        <p class="text-slate-600">Card with rounded corners & shadow.</p>
        <button class="mt-4 px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-500">
          Indigo Button
        </button>
      </div>
      <div class="p-6 rounded-2xl bg-gradient-to-br from-amber-100 to-pink-100">
        <p class="text-slate-700">Gradient box</p>
      </div>
    </div>
  </main>
</template>
<script setup></script>
