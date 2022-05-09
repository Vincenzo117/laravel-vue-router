<template>
  <div id="app" class="h-screen flex flex-col">
    <MainHeader />

    <PostsIndex />
  </div>
</template>

<script>
import MainHeader from "../components/MainHeader.vue";
import PostsIndex from "./Posts.index.vue";

export default {
  name: "App",
  components: {
    MainHeader,
    PostsIndex,
  },
};
</script>

