<template>
  <div id="app" class="h-screen flex flex-col">
    <MainHeader />

    <RouterView />
  </div>
</template>

<script>
import MainHeader from "../components/MainHeader.vue";
import PostsIndex from "../pages/Posts.index.vue";

export default {
  name: "App",
  components: {
    MainHeader,
    PostsIndex,
  },
};
</script>

