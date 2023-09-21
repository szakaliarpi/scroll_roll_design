<template>
    <div>
        <h2>Low-fidelity prototype</h2>

        <p class="mb-50">
            Low-fidelity prototypes are the first iteration of a future website, platform, or application.
            This kind of prototype is tested at an early stage of the design process to ensure that the product's concept is correct.
            It is also a good technique to find out what people think of the product, a particular block, or flow.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-100">
            <li>Less time spent on prototyping</li>
            <li>Helps figure out whether the concept of the project is clear to users</li>
            <li>Offers a good understanding of the product and users</li>
        </ul>

        <h2>High-fidelity prototype</h2>

        <p class="mb-50">
            These prototypes are mockups and look like a final product with pixel-perfect elements.
            High-fidelity prototypes are tested on users to determine whether the interface is user-friendly and intuitive.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-100">
            <li>They help test UI elements as well as functionality. — menus, filters, input fields,
                graphic elements (icons, photos, illustrations, animation)</li>
            <li>Due to the high accuracy of these prototypes,
                it is possible to get more detailed conclusions about the specific site
            </li>
        </ul>

        <div class="text-center mb-100">
            <a class="button button--coral">Ask for an offer</a>
        </div>

        <div class="ux-ui-title mb-50">Why work with a <mark>UX/UI designer</mark>?</div>

        <div class="ux-ui-container">
            <div class="ux-ui-item">
                <div class="ux-ui-item-title-container">
                    <img alt="tick" class="tick" src="../../../../img/tick.svg"/>
                    <div class="ux-ui-item-title">Have an idea for a digital product but don’t know how to realize it?</div>
                </div>

                <div class="ux-ui-item-text">
                    A UX/UI designer can help you design your product from initial idea straight to the testing stage.
                    By that stage, you will have a prototype with pixel-perfect elements.
                    It can also help you generate more leads and improve conversion rates.
                    This translates to better revenues for your company.
                </div>
            </div>

            <div class="ux-ui-item">
                <div class="ux-ui-item-title-container">
                    <img alt="tick" class="tick" src="../../../../img/tick.svg"/>
                    <div class="ux-ui-item-title">Already have a product but want to improve the user experience or interface?</div>
                </div>

                <div class="ux-ui-item-text">
                    A UX/UI designer’s priority is to continually look for ways to improve the product experience,
                    even for products that have been on the market for years.
                    They may do this by making the product faster, easier to use, or more aesthetic.
                </div>
            </div>

            <div class="ux-ui-item">
                <div class="ux-ui-item-title-container">
                    <img alt="tick" class="tick" src="../../../../img/tick.svg"/>
                    <div class="ux-ui-item-title">Don’t want to waste time and money in the development stage?</div>
                </div>

                <div class="ux-ui-item-text">
                    Features and fundamental design principles are tested on potential users in order to get
                    feedback whether your product is user-friendly and it has a product-market and solution-product fit.
                    Then it will be handed over to development.
                </div>
            </div>
        </div>

        <contact></contact>
    </div>

</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";
import Contact from "../Contact.vue";


@Component({
    components: {
        Contact

    }
})

export default class Discovery extends Vue {

}
</script>

<style scoped>

</style>
