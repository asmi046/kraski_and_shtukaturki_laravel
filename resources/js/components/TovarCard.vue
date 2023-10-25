<template>
    <div class="popular__column">
        <to-favorites-btn :sku="tovar.sku"></to-favorites-btn>
        <div class="popular__card card-popular">
            <a :href="'/product/'+tovar.slug" class="card-popular__img _ibg">

                    <img v-if="tovar.img != ''" loading="lazy" :src="tovar.img" :alt="tovar.title">

                    <img v-else loading="lazy" :src="'img/no_photo.jpg'" :alt="tovar.title">

            </a>
            <div class="card-popular__descp">
                <h3 class="card-popular__descp-title">{{tovar.title}}</h3>

                <p v-if="tovar.short_description != ''" class="card-popular__descp-subtitle" v-html="tovar.short_description.substring(0, 50).replace(/(<([^>]+)>)/gi, '')+'...'"></p>
                <p v-else class="card-popular__descp-subtitle" v-html="tovar.description.substring(0, 50).replace(/(<([^>]+)>)/gi, '')+'...'" ></p>

            <div class="card_price_wrap">
                <div class="card-popular__descp-price">{{tovar.tovar_prices[0].price}} руб.</div>
                <span v-if="tovar.tovar_prices[0].old_price != 0" class="card-popular__descp-price old_price">{{tovar.tovar_prices[0].old_price}} руб.</span>

            </div>

            </div>
            <div class="card_control_wrap">
                <a :href="'/product/'+tovar.slug" class="card-popular__btn">Подробнее...</a>
            </div>
        </div>
    </div>


</template>

<script>
import ToBascetBtn from './ToBascetBtn.vue'
import ToFavoritesBtn from './ToFavoritesBtn.vue'


export default {
    components: { ToFavoritesBtn },

    props:{
        tovar:Object
    },

    setup(props) {
        console.log(props.tovar)
        return {
            tovar:props.tovar
        }
    }
}
</script>

<style>

</style>
