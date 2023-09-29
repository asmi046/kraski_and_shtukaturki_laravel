import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

import { store } from "./storage"

import 'swiper/css';
import 'swiper/css/pagination';

const global_app = createApp({
    components:{
        Swiper,
        SwiperSlide,
    },

    setup() {
        return {
          modules: [Pagination],
        };
    },
})

global_app.use(VueAxios, axios)
global_app.use(store)
global_app.mount("#global_app")
