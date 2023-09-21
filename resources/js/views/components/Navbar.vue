<template>
    <div>
        <div class="navbar">
            <a href="/" class="is-flex is-relative">
                <img alt="icon" class="logo" src="../../../img/app-icon.svg"/>
                <div>
                    <img alt="name" class="logo-name" src="../../../img/app-name.svg"/>
                </div>
            </a>
            <div class="navbar-items hide-on-mobile-tablet">
                <a class="navbar-item" href="/" v-bind:class="{ 'navbar-item-active': isActive('/') }">Work</a>
                <a class="navbar-item" href="/nice-to-meet-you" v-bind:class="{ 'navbar-item-active': isActive('/nice-to-meet-you')}">Nice to meet you!</a>
                <div class="navbar-item" v-bind:class="{ 'navbar-item-active': isActive('/services/ux-ui-design') || isActive('/services/graphic-design')}"
                    v-on:click=toggleServicesMenu>
                    Services
                    <img v-if="isActive('/services/ux-ui-design') || isActive('/services/graphic-design')" alt="arrow-down" class="arrow-down" src="../../../img/arrow-down-red.svg"/>
                    <img v-else alt="arrow-down" class="arrow-down" src="../../../img/arrow-down.svg"/>
                </div>
                <div class="services-active" v-show="servicesActive">
                    <a class="services-active-item" href="/services/ux-ui-design">
                       ux/ui design
                    </a>
                    <a class="services-active-item" href="/services/graphic-design">
                       graphic design
                    </a>
                </div>
                <a class="navbar-item" href="/contact" v-bind:class="{ 'navbar-item-active': isActive('/contact')}">Get in touch</a>
            </div>

            <div class="hamburger-menu hide-on-desktop" v-model="isMenuOpen">
                <input id="menu__toggle" type="checkbox"/>
                <label class="menu__btn" for="menu__toggle" @click="toggleMenu">
                    <span></span>
                </label>

                <ul class="menu__box" :style="{ right: isMenuOpen ? '0' : '-100%' }">
                    <li>
                        <a class="menu__item" href="/work">Work</a>
                    </li>
                    <li>
                        <a class="menu__item" href="/nice-to-meet-you">Nice to meet you!</a>
                    </li>
                    <li @click="toggleServicesSubmenu">
                        <div class="menu__item">
                            Services
                        </div>
                        <ul v-show="contactSubmenuOpen" class="submenu">
                            <li><a class="submenu__item" href="#">UX/UI Design</a></li>
                            <li><a class="submenu__item" href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li><a class="menu__item" href="/contact">Get in touch</a></li>
                </ul>
            </div>
        </div>

    </div>

</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";

@Component({
    components: {

    }
})

export default class Navbar extends Vue {

    private isMenuOpen: boolean = false;
    private contactSubmenuOpen: boolean = false;
    private servicesActive: boolean = false;

    isActive(path: any) {
        return window.location.pathname === path;
    }

    toggleServicesMenu() {
        this.servicesActive = !this.servicesActive;
    }

    toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
    }

    toggleServicesSubmenu() {
        this.contactSubmenuOpen = !this.contactSubmenuOpen;
    }
}

</script>

<style scoped>

</style>
