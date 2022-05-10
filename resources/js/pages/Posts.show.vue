<template>
  <main v-if="!loading" class="flex-grow overflow-auto">
    <div class="container px-4 py-8">
      <h1 class="text-xl font-semibold text-center">{{ post.title }}</h1>
      <p class="mt-12 text-justify">{{ post.content }}</p>
    </div>
  </main>
</template>

<script>
export default {
  name: "PostsShow",
  props: {
    slug: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      post: null,
      loading: true
    };
  },
  methods: {
    fetchPost() {
      axios
        .get(`/api/posts/${this.slug}`)
        .then((res) => {
            this.post = res.data.post
            this.loading = false
            })
        .catch((err) => console.warn(err));
    },
  },
  mounted() {
    this.fetchPost();
  },
};
</script>
