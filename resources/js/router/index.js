import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import PostsIndex from '../pages/Posts.index.vue'

const routes = [
 {
     path: '/posts',
     name: 'posts.index',
     component: PostsIndex
 }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

export default router