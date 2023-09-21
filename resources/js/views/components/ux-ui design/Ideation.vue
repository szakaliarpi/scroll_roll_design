<template>
    <div>
        <h2>Brainstorming</h2>

        <p class="mb-50">Brainstorming is about coming up with solutions for the challenges defined in the discovery stage.
            This is where to come up with innovative ideas. Brainstorming helps teams generate a large number of ideas quickly,
            which can be refined and merged to create the ideal solution, but it also can be done individually.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-100">
            <li>Generating innovative ideas</li>
            <li>Finding answers and solutions to problems and challenges</li>
            <li>Sketching solutions, getting a visual picture of the whole</li>
        </ul>

        <h2>Workshops</h2>

        <p class="mb-50">Product development workshops provide a framework to help designing, prototyping,
            and testing the viability of an idea, product, or feature. Most popular rapid workshop is the 5-day Design Sprint,
            but there are specific workshops that can meet your needs.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-100">
            <li>Introducing a new idea, or may illustrate and promote actual process practice</li>
            <li>Discussing questions</li>
            <li>Brainstorm ideas</li>
            <li>Identify problems</li>
            <li>Make decisions and develop solutions</li>
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

export default class Ideation extends Vue {

}
</script>

<style scoped>

</style>
