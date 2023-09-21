<template>
    <div>
        <navbar/>

        <div class="get-in-touch-container">
            <img alt="mailbox" class="mailbox mb-50" src="../../img/contact/mailbox.svg"/>

            <div class="greeting-title mb-50">Say Hi!</div>

            <div class="is-flex gap-7em mb-30">
                <div class="flex-1">
                    <label for="first-name">First name*</label>
                    <input id="first-name" v-model="firstName"/>
                </div>

                <div class="flex-1">
                    <label for="last-name">Last name*</label>
                    <input id="last-name" v-model="lastName"/>
                </div>
            </div>

            <div class="flex-1 mb-30">
                <label for="email">First name*</label>
                <input id="email" v-model="emailAddress"/>
            </div>


            <label for="subject">Subject*</label>
            <div class="is-flex gap-7em mb-30">
                <div id="subject"
                     :class="{ 'button--lightgray-active': uxUiIsActive }"
                     class="wide-button button--lightgray"
                     @click="toggleClass('ux-ui')">
                    UX/UI Design
                </div>

                <div id="subject"
                     :class="{ 'button--lightgray-active': graphicIsActive }"
                     class="wide-button button--lightgray"
                     @click="toggleClass('graphic')">
                    Graphic Design
                </div>

                <div id="subject"
                     :class="{ 'button--lightgray-active': otherIsActive }"
                     class="wide-button button--lightgray"
                     @click="toggleClass('other')">
                    Other
                </div>
            </div>

            <label for="subject">Message*</label>
            <textarea v-model="message" class="mb-30"/>
            <div class="thick-button button--coral mb-100" @click="submitForm">submit</div>

            <contact/>
        </div>
    </div>
</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";
import Navbar from "./components/Navbar.vue";
import Contact from "./components/Contact.vue";
import axios from "axios";

@Component({
    components: {
        Contact,
        Navbar,
    }
})

export default class GetInTouch extends Vue {

    private firstName: string = '';
    private lastName: string = '';
    private emailAddress: string = '';
    private selectedSubject: string = '';
    private message: string = '';
    private uxUiIsActive: boolean = false;
    private graphicIsActive: boolean = false;
    private otherIsActive: boolean = false;

    toggleClass(type: string) {
        switch (type) {
            case 'ux-ui':
                this.uxUiIsActive = !this.uxUiIsActive;
                this.selectedSubject = 'ux-ui';
                this.graphicIsActive = false;
                this.otherIsActive = false;
                break;
            case 'graphic':
                this.graphicIsActive = !this.graphicIsActive;
                this.selectedSubject = 'graphic';
                this.uxUiIsActive = false;
                this.otherIsActive = false;
                break;
            case 'other':
                this.otherIsActive = !this.otherIsActive;
                this.selectedSubject = 'other';
                this.uxUiIsActive = false;
                this.graphicIsActive = false;
                break;
        }
    }

    submitForm() {
        if (this.firstName !== '' && this.lastName !== '' && this.emailAddress !== '' &&
            this.selectedSubject !== '' && this.message !== '') {

            const formData = {
                firstName: this.firstName,
                lastName: this.lastName,
                email: this.emailAddress,
                subject: this.selectedSubject,
                message: this.message,
            };

            axios.post('/contact', formData)
                .then(response => {
                    alert('Email sent' + response);
                })
                .catch(error => {
                    alert('Error submitting form. Please try again later .' + error);
                });
        }
    }
}

</script>

<style scoped>

</style>
