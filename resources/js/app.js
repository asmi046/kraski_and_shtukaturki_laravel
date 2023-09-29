import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

import ToBascetBtn from './components/ToBascetBtn.vue'
import Bascet from "./components/bascet/Bascet.vue"

import { store } from "./storage"
import { useStore } from 'vuex'

import 'swiper/css';
import 'swiper/css/pagination';

const global_app = createApp({
    components:{
        Swiper,
        SwiperSlide,
        ToBascetBtn,
        Bascet
    },

    setup() {

        const store = useStore()

        store.dispatch('initialBascet');
        store.dispatch('initialFavorites');

        return {
          modules: [Pagination],
        };
    },
})

global_app.use(VueAxios, axios)
global_app.use(store)
global_app.mount("#global_app")
