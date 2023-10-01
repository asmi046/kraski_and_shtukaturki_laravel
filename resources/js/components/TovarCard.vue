<template>
    <div class="popular__column">
        <to-favorites-btn :sku="tovar.sku"></to-favorites-btn>
        <div class="popular__card card-popular">
            <div class="card-popular__img _ibg">

                    <img v-if="tovar.img != ''" loading="lazy" :src="tovar.img" :alt="tovar.title">

                    <img v-else loading="lazy" :src="'img/no_photo.jpg'" :alt="tovar.title">

            </div>
            <div class="card-popular__descp">
                <h3 class="card-popular__descp-title">{{tovar.title}}</h3>

                <p v-if="tovar.short_description != ''" class="card-popular__descp-subtitle" v-html="tovar.short_description.substring(0, 50).replace(/(<([^>]+)>)/gi, '')+'...'"></p>
                <p v-else class="card-popular__descp-subtitle" v-html="tovar.description.substring(0, 50).replace(/(<([^>]+)>)/gi, '')+'...'" ></p>

            <div class="card_price_wrap">
                <div class="card-popular__descp-price">{{tovar.price}} руб.</div>
                <span v-if="tovar.old_price != 0" class="card-popular__descp-price old_price">{{tovar.old_price}} руб.</span>

            </div>

            </div>
            <div class="card_control_wrap">
                <to-bascet-btn bascet="/bascet" :sku="tovar.sku"></to-bascet-btn>
                <a :href="'/product/'+tovar.slug" class="card-popular__btn">Подробнее...</a>
            </div>
        </div>
    </div>

    <!-- <div class="tovar_wrap main-prod-card"  :data-prodid="tovar.sku">
        <div class="bascet_count"> В корзине <span>1</span> шт </div>
        <to-favorites-btn :sku="tovar.sku"></to-favorites-btn>
        <a :href="tovar.trueLnk" class="tovat_photo_wrap">
            <img v-if="tovar.img != ''" :src="tovar.img" :alt="tovar.title">
            <img v-else :src="'/img/noPhoto.jpg'" :alt="tovar.title">

            <div class="labels">
                <div v-if="tovar.hit" class="label_all label_hit">hit</div>

                <div v-if="tovar.new" class="label_all label_new">new</div>

                <div v-if="tovar.old_price != 0" class="label_all label_procent">%</div>
            </div>
        </a>
        <h3 class="tovar_wrap_padding">{{tovar.title}}</h3>
        <div class="prices tovar_wrap_padding">

            <span v-if="tovar.old_price != 0" class="old_price">{{tovar.old_price}}</span>

            {{tovar.price}} <span class="rub_symbol">₽</span>
        </div>
        <div class="tovar_button_wrap tovar_wrap_padding">
            <to-bascet-btn route="/bascet"  :sku="tovar.sku"></to-bascet-btn>
        </div>
    </div> -->

</template>

<script>
import ToBascetBtn from './ToBascetBtn.vue'
import ToFavoritesBtn from './ToFavoritesBtn.vue'


export default {
    components: { ToBascetBtn, ToFavoritesBtn },

    props:{
        tovar:Object
    },

    setup(props) {
        return {
            tovar:props.tovar
        }
    }
}
</script>

<style>

</style>
