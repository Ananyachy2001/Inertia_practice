import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'
import Layout from "./Shared/Layout.vue"


createInertiaApp({
    resolve: async name => {
        const pages = (await import.meta.glob('./Pages/**/*.vue', { eager: true }))

        let page = pages[`./Pages/${name}.vue`]



        // page.default.layout = page.default.layout || Layout
        if (page.default.layout === undefined) {
            page.default.layout = Layout;
        }


        return pages[`./Pages/${name}.vue`]

    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },

    title: title => "My App: " + title,
})

// Vite
resolve: name => {
  const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
  return pages[`./Pages/${name}.vue`]
},




// router.on('start', () => {
//     timeout = setTimeout(() => NProgress.start(), 1)

// })
router.on('finish', () => NProgress.done())

router.on('progress', (event) => {
    if (NProgress.isStarted() && event.detail.progress.percentage) {

        NProgress.set((event.detail.progress.percentage / 100) * 0.9)
    }
})