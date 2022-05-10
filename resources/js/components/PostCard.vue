<template>
  <div
    class="
      post-card
      border-[1px] border-zinc-300
      rounded-lg
      overflow-hidden
    "
  >
    <figure>
      <img src="https://picsum.photos/400/200" alt="" />
    </figure>
    <div class="p-2">
      <h4 class="truncate text-xl">{{ post.title }}</h4>
      <div v-if="post.category" class="mt-3 w-[max-content] text-white text-lg py-1 px-2 rounded-md bg-zinc-700">{{ post.category.name }}</div>
      <ul v-if="post.tags" class="flex flex-wrap py-3 gap-2">
        <li
          v-for="tag in post.tags"
          :key="tag.id"
          class="bg-zinc-100 rounded-md py-1 px-2 whitespace-nowrap"
        >
          {{ tag.name }}
        </li>
      </ul>
      <p class="truncate">{{ post.content }}</p>
      <RouterLink :to="{ name: 'posts.show', params: { slug: post.slug }}">Go to the post</RouterLink>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style>
</style>