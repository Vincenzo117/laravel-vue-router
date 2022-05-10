<template>
  <header class="bg-zinc-800">
    <div class="container p-4 flex justify-between items-center">
      <div class="text-white text-2xl font-semibold">BoolPress</div>
      <nav>
        <ul class="flex items-center gap-3">
          <li
            :class="[
              'cursor-pointer',
              'text-white',
              'py-2',
              'px-3',
              'transition-all',
              'rounded-md',
              $route.name === 'posts.index'
                ? 'bg-zinc-400'
                : 'hover:bg-zinc-400',
            ]"
          >
            <RouterLink :to="{ name: 'posts.index' }">Home</RouterLink>
          </li>
          <li
            :class="[
              'cursor-pointer',
              'text-white',
              'py-2',
              'px-3',
              'transition-all',
              'rounded-md',
              $route.name === 'contact'
                ? 'bg-zinc-400'
                : 'hover:bg-zinc-400',
            ]"
          >
            Contact
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: "MainHeader",
};
</script>
