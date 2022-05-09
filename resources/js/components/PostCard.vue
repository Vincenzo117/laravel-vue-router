<template>
  <div class="post-card">
      {{ post.title }}
  </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: {
        post: {
            type: Object,
            required: true
        }
    }
}
</script>

<style>

</style>