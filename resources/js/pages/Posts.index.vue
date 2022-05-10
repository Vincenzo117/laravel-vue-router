<template>
  <main class="flex-grow overflow-auto">
    <div class="container px-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
      <PostCard v-for="post in posts" :key="post.id" :post="post" />
    </div>
  </main>
</template>

<script>
import PostCard from "../components/PostCard.vue";

export default {
  name: "PostsIndex",
  components: {
    PostCard,
  },
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    fetchPosts() {
      axios
        .get("/api/posts")
        .then((response) => {
          this.posts = response.data.posts;
          console.log(this.posts);
        })
        .catch((error) => console.warn(error));
    },
  },
  mounted() {
    this.fetchPosts();
  },
};
</script>