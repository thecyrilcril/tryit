import './bootstrap'

import Nprogress from 'nprogress'
import '/resources/css/nprogress.css'

import Splide from '@splidejs/splide'
import '@splidejs/splide/css/skyblue'

import Alpine from 'alpinejs'

import { initialize } from './initialize.js'

Alpine.store('global', {
    initialize,
})


import '@fontsource/commissioner/300.css'
import '@fontsource/commissioner/500.css'

// import '@fontsource/figtree/300.css'
// import '@fontsource/figtree/500.css'
// import '@fontsource/figtree/700.css'
// import '@fontsource/figtree/800.css'

window.Alpine = Alpine

Alpine.start()

window.Splide = Splide
window.Nprogress = Nprogress

