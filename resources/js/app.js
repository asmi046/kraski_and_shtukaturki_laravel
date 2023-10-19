import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import { VMaskDirective } from 'v-slim-mask'



import ToBascetBtnPage from './components/ToBascetBtnPage.vue'
import ToBascetBtn from './components/ToBascetBtn.vue'
import Bascet from "./components/bascet/Bascet.vue"
import BascetCounter from "./components/bascet/BascetCounter.vue"

import FavoritesCounter from "./components/bascet/FavoritesCounter.vue"
import Favorites from './components/Favorites.vue'
import ToFavoritesBtn from './components/ToFavoritesBtn.vue'
import Forma from './components/Forma.vue'
import YandexMap from './components/YandexMap.vue'


import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-coverflow';
import 'swiper/css/pagination';

import { EffectCoverflow } from 'swiper/modules';

import { store } from "./storage"
import { useStore } from 'vuex'



const global_app = createApp({
    components:{
        Swiper,
        SwiperSlide,
        YandexMap,
        ToBascetBtn,
        ToBascetBtnPage,
        BascetCounter,
        FavoritesCounter,
        Bascet,
        Favorites,
        ToFavoritesBtn,
        Forma
    },

    setup() {

        const store = useStore()

        store.dispatch('initialBascet');
        store.dispatch('initialFavorites');

        return {
          modules: [EffectCoverflow, Pagination],
        };
    },
})

global_app.use(VueAxios, axios)
global_app.use(store)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app")
