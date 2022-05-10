<template>
  <main class="flex-grow overflow-auto">
    <div class="container px-4 py-8">
     <h1 class="text-xl font-semibold"></h1>
    </div>
  </main>
</template>

<script>
export default {
    name: 'PostsShow',
    props: {
        slug: {
            type: String,
            required: true
        }
    },
    methods: {
        fetchPost() {
            
        }
    }
}
</script>
