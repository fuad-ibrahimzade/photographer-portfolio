import '@/js/bootstrap'
import Vue from 'vue'
import VueRouter from 'vue-router'
import EasySlider from 'vue-easy-slider'

Vue.use(VueRouter)
Vue.use(EasySlider)

import App from '@/js/components/App'
import HomeIndexUrl from '@/js/components/home/HomeIndexUrl.vue';
import GalleryUrl from '@/js/components/home/GalleryUrl.vue';
import AboutUrl from '@/js/components/home/AboutUrl.vue';
import ContactUrl from '@/js/components/home/ContactUrl.vue';

// import auth from '@/js/components/middleware/auth.vue';
import LoginUrl from '@/js/components/auth/LoginUrl.vue';
import DashboardIndexUrl from '@/js/components/dashboard/DashboardIndexUrl.vue';
import SlideUrl from '@/js/components/dashboard/SlideUrl.vue';
import AboutEditUrl from '@/js/components/dashboard/AboutEditUrl.vue';
import LogoUrl from '@/js/components/dashboard/LogoUrl.vue';
import LinkUrl from '@/js/components/dashboard/LinkUrl.vue';

import Welcome from '@/js/components/Welcome'
import Page from '@/js/components/Page'
import UsersIndex from '@/js/components/UsersIndex';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home.index',
            component: HomeIndexUrl,
            meta: {
                title: 'home Page - Example App',
            },
            props: { title: "This is the SPA home" }
        },
        {
            path: '/about',
            name: 'about',
            component: AboutUrl,
        },
        {
            path: '/contact',
            name: 'contact',
            component: ContactUrl,
        },
        {
            path: '/gallery/:galleryname',
            name: 'gallery',
            component: GalleryUrl,
        },
        {
            path: '/login',
            name: 'login',
            component: LoginUrl,
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: DashboardIndexUrl,
        },
        {
            path: '/slide',
            name: 'slide',
            component: SlideUrl,
        },
        {
            path: '/about/edit',
            name: 'about-edit',
            component: AboutEditUrl,
        },
        {
            path: '/logo',
            name: 'logo',
            component: LogoUrl,
        },
        {
            path: '/link',
            name: 'link',
            component: LinkUrl,
        },
        {
            path: '/spa-page',
            name: 'page',
            component: Page,
            props: {
                title: "This is the SPA Second Page",
                author : {
                    name : "Fisayo Afolayan",
                    role : "Software Engineer",
                    code : "Always keep it clean"
                }
            }
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        { path: '*' , redirect: '/' }
    ],
})
const app = new Vue({
    el: '#app',
    components: { App },
    router,
    computed: {
        csrf_token() {
            let token = document.head.querySelector('meta[name="csrf-token"]')
            return token.content
        },
        isLoggedIn() {
            // $("meta[name=login-status]").attr('content')     pox cixdi yuklemir arada
            return  document.head.querySelector("meta[name=login-status]").content
        },
        api_token() {
            let token = document.head.querySelector('meta[name="api-token"]')
            return token.content
        },
    },
});
// mounted () {
//     let root = this.myprop || '/home'
//     this.$router.push({ path: root });
// }
// router.replace('/');