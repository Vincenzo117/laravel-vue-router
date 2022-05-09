<template>
  <main class="flex-grow">
    <div class="container p-4">
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
        })
        .catch((error) => console.warn(error));
    },
  },
  mounted() {
    this.fetchPosts();
  },
};
</script>