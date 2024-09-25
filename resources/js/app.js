import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import { VMaskDirective } from 'v-slim-mask'

import IMask from 'imask';



document.addEventListener("DOMContentLoaded", function(event) {
    IMask(
        document.getElementById('masced_input'),
        {
          mask: '+{7}(000)000-00-00'
        }
      )
});


import ToBascetBtnPage from './components/ToBascetBtnPage.vue'
import ToBascetBtn from './components/ToBascetBtn.vue'
import Bascet from "./components/bascet/Bascet.vue"
import BascetCounter from "./components/bascet/BascetCounter.vue"

import FavoritesCounter from "./components/bascet/FavoritesCounter.vue"
import Favorites from './components/Favorites.vue'
import ToFavoritesBtn from './components/ToFavoritesBtn.vue'
import FormaCon from './components/Forma.vue'
import YandexMap from './components/YandexMap.vue'
import PageToBascet from './components/PageToBascet.vue'
import MultiSearch from './components/MultiSearch.vue'


import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-coverflow';
import 'swiper/css/pagination';

import { EffectCoverflow } from 'swiper/modules';

import { store } from "./storage"
import { useStore } from 'vuex'

import FsLightbox from "fslightbox-vue/v3";

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
        PageToBascet,
        FormaCon,
        MultiSearch,
        FsLightbox
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


document.addEventListener('DOMContentLoaded', function(){
    let clicedRow = document.querySelectorAll(".cliced_proj");
    for (let elem of clicedRow) {
        elem.addEventListener('click', function (e) {
            elem.querySelector(".more_info").click();
        })
    }
})
