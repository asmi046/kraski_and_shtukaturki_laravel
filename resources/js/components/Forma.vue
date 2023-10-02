<template>
	<form class="consult__form d-flex">
		<input v-modal="name" autocomplete="off" type="text" name="name" placeholder="Имя" class="consult__form-input input">
		<input required v-modal="phone" autocomplete="off" type="tel" name="phone" placeholder="Телефон*" class="consult__form-input input">
		<button type="submit" class="consult__form-btn btn">Отправить</button>
	</form>
</template>

<script>
import { ref } from 'vue'
export default {
    props:{
        route:String,
        redirect:String,
    },

    setup(props) {
        let name = ref('')
        let phone = ref('')
        const _token = document.querySelector('meta[name="_token"]').content
        let showLoader = false

        const sendMsg  = () => {
            this.showLoader = true;

            axios.post(props.rout, {
                _token: _token,
                name: name,
                phone: phone,
                review: "",
            })
            .then((response) => {
                this.showLoader = false
                console.log(response)
                document.location.href=this.redirect
            })
            .catch( (error) => {
                this.showLoader = false
                this.errorList.push(error.response.data.message)
                console.log(error)
            });
        }

        return {
            name,
            phone,
            sendMsg
        }
    }
}
</script>

<style>

</style>
