<template>
    <div>
        <navbar></navbar>
        <div class="main-container">
            <div class="large-title-dark mb-100">
                UX/UI design
            </div>

            <div class="ux-ui-design-type-container">
                <div class="ux-ui-design-item" v-on:click="toggleMenu('discovery')">
                    <img alt="discovery" class="category-icon" src="../../img/icons/hat.svg"/>
                    <div class="design-type-title" v-bind:class="{'design-type-title-active' : discoveryIsActive}">Discovery</div>
                    <div class="design-type-description" v-bind:class="{'design-type-description-active' : discoveryIsActive}">Defining the problem</div>
                    <img v-show="discoveryIsActive" alt="arrow-red" class="red-arrow" v-bind:class="{'design-type-description-active' : designIsActive}" src="../../img/arrow-red.svg"/>
                </div>

                <div class="ux-ui-design-item" v-on:click="toggleMenu('research')">
                    <img alt="research" class="category-icon" src="../../img/icons/hat.svg"/>
                    <div class="design-type-title" v-bind:class="{'design-type-title-active' : researchIsActive}">Research</div>
                    <div class="design-type-description" v-bind:class="{'design-type-description-active' : researchIsActive}">Product research User interview Persona</div>
                    <img v-show="researchIsActive" alt="arrow-red" class="red-arrow" v-bind:class="{'design-type-description-active' : designIsActive}" src="../../img/arrow-red.svg"/>
                </div>

                <div class="ux-ui-design-item" v-on:click="toggleMenu('ideation')">
                    <img alt="ideation" class="category-icon" src="../../img/icons/hat.svg"/>
                    <div class="design-type-title" v-bind:class="{'design-type-title-active' : ideationIsActive}">Ideation</div>
                    <div class="design-type-description" v-bind:class="{'design-type-description-active' : ideationIsActive}">Brainstorming Workshop</div>
                    <img v-show="ideationIsActive" alt="arrow-red" class="red-arrow" v-bind:class="{'design-type-description-active' : designIsActive}" src="../../img/arrow-red.svg"/>
                </div>

                <div class="ux-ui-design-item" v-on:click="toggleMenu('design')">
                    <img alt="design" class="category-icon" src="../../img/icons/hat.svg"/>
                    <div class="design-type-title" v-bind:class="{'design-type-title-active' : designIsActive}">Design</div>
                    <div class="design-type-description" v-bind:class="{'design-type-description-active' : designIsActive}">Low-fidelity prototype High-fidelity prototype</div>
                    <img v-show="designIsActive" alt="arrow-red" class="red-arrow" v-bind:class="{'design-type-description-active' : designIsActive}" src="../../img/arrow-red.svg"/>
                </div>

                <div class="ux-ui-design-item" v-on:click="toggleMenu('test')">
                    <img alt="test" class="category-icon" src="../../img/icons/hat.svg"/>
                    <div class="design-type-title" v-bind:class="{'design-type-title-active' : testIsActive}">Test</div>
                    <div class="design-type-description" v-bind:class="{'design-type-description-active' : testIsActive}">Usability testing</div>
                    <img v-show="testIsActive" alt="arrow-red" class="red-arrow" src="../../img/arrow-red.svg"/>
                </div>

                <div class="dashed-line"></div>
            </div>

            <discovery v-show="discoveryIsActive"></discovery>
            <research v-show="researchIsActive"></research>
            <ideation v-show="ideationIsActive"></ideation>
            <design v-show="designIsActive"></design>
            <test v-show="testIsActive"></test>

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
        Design,
        Ideation,
        Research,
        Discovery,
        Contact,
        Navbar,
        Test
    }
})

export default class UxUiDesign extends Vue {

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
