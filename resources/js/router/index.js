import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import PostsIndex from '../pages/Posts.index.vue'
import PostsShow from '../pages/Posts.show.vue'

const routes = [
 {
     path: '/posts',
     name: 'posts.index',
     component: PostsIndex
 },
 {
     path: '/posts/:slug',
     name: 'posts.show',
     component: PostsShow,
     props: true
 }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

export default router