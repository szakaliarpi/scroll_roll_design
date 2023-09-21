<template>
    <div>
        <h2>Defining the problem</h2>

        <p class="mb-50">Defining the problem is a process of gathering information about the product's (or a future product’s) pain points,
            purpose, development direction and solutions to create customer delight.
            We start by destructuring the problem and defining challenges.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-50">
            <li>Gathering information about pain points and challenges</li>
            <li>Determine the product’s purpose</li>
            <li>Searching for problems and barriers to solve later</li>
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
