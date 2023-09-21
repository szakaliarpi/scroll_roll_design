<template>
    <div>
        <navbar></navbar>
        <div class="main-container">
            <div class="large-title-dark mb-100 ml-1em">
                Graphic design
            </div>

            <div class="graphic-design-type-container mb-100">
                <div class="graphic-design-type-item">
                    <div class="text-center">
                        <img alt="online" class="category-icon" src="../../img/icons/hat.svg"/>
                        <div class="graphic-design-type-title">Online</div>
                    </div>

                    <div>
                        <div class="graphic-design-type-subtitle">Brand identity<mark> (customizable)</mark></div>

                        <ul class="graphic-design-type-content mb-30">
                            <li>Logo design</li>
                            <li>Logo variations</li>
                            <li>Illustrative elements</li>
                            <li>Brand elements (business cards, envelops, letter header, etc...)</li>
                            <li>Marketing elements (car designs, stickers, cups, etc...)</li>
                            <li>Brand guidelines</li>
                        </ul>

                        <div class="graphic-design-type-subtitle">Logo design, social media content, advertising materials</div>
                    </div>
                </div>

                <div class="graphic-design-type-item">
                    <div class="text-center">
                        <img alt="offline" class="category-icon" src="../../img/icons/hat.svg"/>
                        <div class="graphic-design-type-title">Offline</div>
                    </div>

                    <div>
                        <div class="graphic-design-type-subtitle">
                            Catalogue, magazine, book, menu, flyer, poster, business card, badge, label, roll-up, packaging,
                            calendar, banner, etc...
                        </div>
                    </div>
                </div>

                <div class="vertical-dashed-line"></div>
            </div>

            <div class="text-center mb-100">
                <a class="button button--coral">Ask for an offer</a>
            </div>

            <contact class="ml-10em"></contact>
        </div>
    </div>

</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";
import Navbar from "./components/Navbar.vue";
import Contact from "./components/Contact.vue";
import Discovery from "./components/ux-ui design/Discovery.vue";
import Research from "./components/ux-ui design/Research.vue";
import Ideation from "./components/ux-ui design/Ideation.vue";
import Design from "./components/ux-ui design/Design.vue";
import Test from "./components/ux-ui design/Test.vue";

@Component({
    components: {
        Contact,
        Navbar,
    }
})

export default class GraphicDesign extends Vue {

    discoveryIsActive: boolean = true;
    researchIsActive: boolean = false;
    ideationIsActive: boolean = false;
    designIsActive: boolean = false;
    testIsActive: boolean = false;

    toggleMenu(type: string) {
        if(type === 'discovery') {
            this.discoveryIsActive = true;
            this.researchIsActive = false;
            this.ideationIsActive = false;
            this.designIsActive = false;
            this.testIsActive = false;
        } else if(type === 'research') {
            this.researchIsActive = true;
            this.discoveryIsActive = false;
            this.ideationIsActive = false;
            this.designIsActive = false;
            this.testIsActive = false;
        } else if(type === 'ideation') {
            this.ideationIsActive = true;
            this.researchIsActive = false;
            this.discoveryIsActive = false;
            this.designIsActive = false;
            this.testIsActive = false;
        } else if(type === 'design') {
            this.designIsActive = true;
            this.researchIsActive = false;
            this.discoveryIsActive = false;
            this.ideationIsActive = false;
            this.testIsActive = false;
        } else if(type === 'test') {
            this.testIsActive = true;
            this.researchIsActive = false;
            this.discoveryIsActive = false;
            this.ideationIsActive = false;
            this.designIsActive = false;
        }
    }

}
</script>

<style scoped>

</style>
