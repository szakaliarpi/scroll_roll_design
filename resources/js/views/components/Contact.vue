<template>
    <div>
        <div class="is-grid">
            <h2 class="mb-50">Contact info</h2>
            <div class="contact-info">pal.noemi@scrollroll.design</div>
            <div class="contact-info">Strada Presei nr. 4, Sfântu Gheorghe, Covasna</div>
        </div>

        <div class="contact-container">
            <img alt="linkedin" class="contact-icon" src="../../../img/contact/linkedin.svg"/>
            <img alt="instagram" class="contact-icon" src="../../../img/contact/instagram.svg"/>
            <img alt="facebook" class="contact-icon" src="../../../img/contact/facebook.svg"/>
            <img alt="basket-ball" class="contact-icon" src="../../../img/contact/ball.svg"/>
            <img alt="be" class="contact-icon" src="../../../img/contact/be.svg"/>
        </div>
    </div>
</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";

@Component({
    components: {

    }
})

export default class Contact extends Vue {

}
</script>

<style scoped>

</style>
