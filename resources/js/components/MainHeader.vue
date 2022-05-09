<template>
  <header class="bg-zinc-800">
      <div class="container p-4 flex justify-between items-center">
        <div class="text-white text-2xl font-semibold">BoolPress</div>
        <nav>
            <ul class="flex items-center gap-3">
                <li class="cursor-pointer text-white py-2 px-3 transition-all hover:bg-zinc-400 rounded-md">Home</li>
                <li class="cursor-pointer text-white py-2 px-3 bg-zinc-400 rounded-md">Posts</li>
            </ul>
        </nav>
      </div>
  </header>
</template>

<script>
export default {
    name: 'MainHeader'
}
</script>
