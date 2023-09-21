<template>
    <div>
        <h2>Usability testing</h2>

        <p class="mb-50">Usability testing serves as feedback to evaluate a product or service by testing it with potential users.
            The researcher (called a "facilitator" or a "moderator") asks a participant to perform tasks,
            usually using specific user interfaces. The researcher monitors the participant's behaviour and listens for
            feedback while each task is completed.
        </p>

        <div class="design-type-title m-0">Problems it solve</div>

        <ul class="mb-100">
            <li>Identifying issues in the design or user experience of the product or service</li>
            <li>Uncovering opportunities for enhancement</li>
            <li>Discovering and learning about the target user's behaviour and preference</li>
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
