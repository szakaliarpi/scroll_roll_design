<template>
    <div>
        <div class="first-panel">
            <navbar></navbar>
            <div class="main-container">
                <div class="two-column-grid">
                    <div class="grid-item">
                        <div class="large-title">
                            Are you looking for
                            <mark class="coral">Digital Product Design</mark>
                            or
                            <mark class="coral">Graphic Design</mark>
                            that meet your goals?
                        </div>

                        <div class="is-flex gap">
                            <div class="first-panel-text">
                                You are on the right track If you need a design for any of these.
                            </div>
                            <img alt="arrow-right" class="arrow-right" src="../../img/arrow-right.svg"/>
                        </div>

                        <a class="button button--coral">Ask for an offer</a>
                    </div>

                    <div class="three-column-grid">
                        <div class="dashboard-item">
                            <img alt="web" class="dashboard-item-icon" src="../../img/dashboard/web.svg"/>
                            <span class="mt-10">Web</span>
                        </div>
                        <div class="dashboard-item">
                            <img alt="app" class="dashboard-item-icon" src="../../img/dashboard/phone.svg"/>
                            <span class="mt-10">Application</span>
                        </div>
                        <div class="dashboard-item">
                            <img alt="software" class="dashboard-item-icon" src="../../img/dashboard/software.svg"/>
                            <span class="mt-10">Software</span>
                        </div>
                        <div class="dashboard-item">
                            <img alt="marketing" class="dashboard-item-icon" src="../../img/dashboard/marketing.svg"/>
                            <span class="mt-10">Marketing</span>
                        </div>
                        <div class="dashboard-item">
                            <img alt="brand" class="dashboard-item-icon" src="../../img/dashboard/brand.svg"/>
                            <span class="mt-10">Brand</span>
                        </div>
                        <div class="dashboard-item">
                            <img alt="redesign" class="dashboard-item-icon" src="../../img/dashboard/redesign.svg"/>
                            <span class="mt-10">Redesign</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="main-container">
            <h2>Work</h2>
            <div class="work-group-container">
                <div class="work-group-item" v-on:click="setActive('ux-ui')">
                    <img alt="" class="work-icon center" src="../../img/ux-ui-design.svg"/>
                    <span class="work-group"
                          v-bind:class="{ 'work-group-active' : isActive === 'ux-ui'}">UX/UI Design</span>
                </div>
                <div class="work-group-item" v-on:click="setActive('graphic')">
                    <img alt="" class="work-icon center" src="../../img/graphic-design.svg"/>
                    <span class="work-group" v-bind:class="{ 'work-group-active': isActive === 'graphic'}">Graphic Design</span>
                </div>
            </div>

            <div v-show="isActive === 'ux-ui'">
                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">Birthday Newspaper</div>
                        <div class="work-container-description">
                            A complete UX and UI webpage redesign that prints personalised newspaper as a birthday gift.
                        </div>
                        <a class="button button--white">Read case study</a>
                    </div>
                </div>

                <div class="work-container">
                    <div class="work-container-image">
                    </div>
                    <div class="work-container-text">
                        <div class="work-container-title">Wisdom</div>
                        <div class="work-container-description">
                            Wireframing and UI design for an FAQ and groups page.
                        </div>
                        <a class="button button--white">Read case study</a>
                    </div>
                </div>

                <div class="work-container">
                    <div>
                        <img alt="contractual" class="work-container-image" src="../../img/work/contractual.svg"/>
                    </div>
                    <div class="work-container-text">
                        <div class="work-container-title">Contractual</div>
                        <div class="work-container-description">
                            Redesign of an app that manages, creates, and stores contracts.
                        </div>
                        <a class="button button--white">Read case study</a>
                    </div>
                </div>

                <div class="work-container">
                    <div>
                        <img alt="hotbed" class="work-container-image" src="../../img/work/hotbed.svg"/>
                    </div>
                    <div class="work-container-text">
                        <div class="work-container-title">Hotbed</div>
                        <div class="work-container-description">
                            Further’s internal software for finances, project management and statistics. My very first
                            UX and UI project.
                        </div>
                        <a class="button button--white">Read case study</a>
                    </div>
                </div>

                <div class="work-container">
                    <div>
                        <img alt="pen" class="work-container-image" src="../../img/work/pen.svg"/>
                    </div>
                    <div class="work-container-text">
                        <div class="work-container-title">Pen - Task manager</div>
                        <div class="work-container-description">
                            This was a school project, but it has all the steps through UX and UI design process..
                        </div>
                        <a class="button button--white">Read case study</a>
                    </div>
                </div>

                <div class="mt-100">
                    <h2 class="mb-50">Can’t get enough?</h2>
                    <span class="blog-post">Check out our blog posts co-written with Further Digital Solutions.</span>

                    <div class="post-container hide-on-mobile-tablet">
                        <div class="post-box">
                            <div class="post-title">LOW AND HIGH FIDELITY PROTOTYPES</div>
                            <div class="post-description">
                                When should you use low-fidelity prototypes? And when should you go for high-fidelity
                                one?
                                How do these both fit into user research? Find out by clicking on the read more button.
                            </div>
                            <div class="post-bottom-container">
                                <div class="post-date">Nov 28th, 2022</div>
                                <a class="small-button button--coral"
                                   href="https://gofurther.digital/en/blog/posts/low-and-high-fidelity-prototypes">Read
                                    more</a>
                            </div>
                        </div>

                        <div class="post-box">
                            <div class="post-title">CONDUCTING USABILITY TESTS</div>
                            <div class="post-description">
                                Usability testing is a crucial step in product development.
                                But what happens during a usability interview and how should you facilitate such a test?
                            </div>
                            <div class="post-bottom-container">
                                <div class="post-date">Sept 29th, 2022</div>
                                <a class="small-button button--coral"
                                   href="https://gofurther.digital/en/blog/posts/conducting-usability-tests">Read
                                    more</a>
                            </div>
                        </div>

                        <div class="post-box">
                            <div class="post-title">WHAT IS CUSTOMER JOURNEY MAPPING?</div>
                            <div class="post-description">
                                A well-designed customer journey map keeps the customer at the forefront of the
                                decision-making
                                process and highlights any struggles that customers might experience.
                            </div>
                            <div class="post-bottom-container">
                                <div class="post-date">Aug 25th, 2022</div>
                                <a class="small-button button--coral"
                                   href="https://gofurther.digital/en/blog/posts/what-is-customer-journey-mapping">Read
                                    more</a>
                            </div>
                        </div>

                        <div class="post-box">
                            <div class="post-title">HOW TO USE THE VALUE PROPOSITION CANVAS?</div>
                            <div class="post-description">
                                Why is your value proposition an important part of your business plan? How to formulate
                                it?
                                How to visualize it using the value proposition canvas?
                            </div>
                            <div class="post-bottom-container">
                                <div class="post-date">May 18th, 2022</div>
                                <a class="small-button button--coral"
                                   href="https://gofurther.digital/en/blog/posts/how-to-use-the-value-proposition-canvas">Read
                                    more</a>
                            </div>
                        </div>

                        <div class="post-box">
                            <div class="post-title">HOW TO USE PERSONAS?</div>
                            <div class="post-description">
                                What are personas, why are they important in product development and how to create them?
                                Find out by reading this in-depth article about personas.
                            </div>
                            <div class="post-bottom-container">
                                <div class="post-date">Feb 14th, 2022</div>
                                <a class="small-button button--coral"
                                   href="https://gofurther.digital/en/blog/posts/how-to-use-personas-in-product-development">Read
                                    more</a>
                            </div>
                        </div>
                    </div>

                    <div class="hide-on-desktop mt-10">
                        <div class="siema-carousel">
                            <div class="post-box">
                                <div class="post-title">LOW AND HIGH FIDELITY PROTOTYPES</div>
                                <div class="post-description">
                                    When should you use low-fidelity prototypes? And when should you go for
                                    high-fidelity one?
                                    How do these both fit into user research? Find out by clicking on the read more
                                    button.
                                </div>
                                <div class="post-bottom-container">
                                    <div class="post-date">Nov 28th, 2022</div>
                                    <a class="small-button button--coral"
                                       href="https://gofurther.digital/en/blog/posts/low-and-high-fidelity-prototypes">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="post-box">
                                <div class="post-title">CONDUCTING USABILITY TESTS</div>
                                <div class="post-description">
                                    Usability testing is a crucial step in product development.
                                    But what happens during a usability interview and how should you facilitate such a
                                    test?
                                </div>
                                <div class="post-bottom-container">
                                    <div class="post-date">Sept 29th, 2022</div>
                                    <a class="small-button button--coral"
                                       href="https://gofurther.digital/en/blog/posts/conducting-usability-tests">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="post-box">
                                <div class="post-title">WHAT IS CUSTOMER JOURNEY MAPPING?</div>
                                <div class="post-description">
                                    A well-designed customer journey map keeps the customer at the forefront of the
                                    decision-making
                                    process and highlights any struggles that customers might experience.
                                </div>
                                <div class="post-bottom-container">
                                    <div class="post-date">Aug 25th, 2022</div>
                                    <a class="small-button button--coral"
                                       href="https://gofurther.digital/en/blog/posts/what-is-customer-journey-mapping">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="post-box">
                                <div class="post-title">HOW TO USE THE VALUE PROPOSITION CANVAS?</div>
                                <div class="post-description">
                                    Why is your value proposition an important part of your business plan? How to
                                    formulate it?
                                    How to visualize it using the value proposition canvas?
                                </div>
                                <div class="post-bottom-container">
                                    <div class="post-date">May 18th, 2022</div>
                                    <a class="small-button button--coral"
                                       href="https://gofurther.digital/en/blog/posts/how-to-use-the-value-proposition-canvas">Read
                                        more</a>
                                </div>
                            </div>

                            <div class="post-box">
                                <div class="post-title">HOW TO USE PERSONAS?</div>
                                <div class="post-description">
                                    What are personas, why are they important in product development and how to create
                                    them?
                                    Find out by reading this in-depth article about personas.
                                </div>
                                <div class="post-bottom-container">
                                    <div class="post-date">Feb 14th, 2022</div>
                                    <a class="small-button button--coral"
                                       href="https://gofurther.digital/en/blog/posts/how-to-use-personas-in-product-development">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="arrow-container">-->
                        <!--                            <img alt="chevron-left" class="chevron-left" src="../../img/arrow-down.svg"-->
                        <!--                                 v-on:click="prev"/>-->
                        <!--                            <img alt="chevron-right" class="chevron-right" src="../../img/arrow-down.svg"-->
                        <!--                                 v-on:click="next"/>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>

            <div v-show="isActive === 'graphic'">
                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">Orka Confectionery <br> label redesign</div>
                        <div class="work-container-description">
                            A project as sweet to me as their candies. We made Orka’s labels more cheerful.
                        </div>
                        <a class="button button--white">See More</a>
                    </div>
                </div>

                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">Logofolio</div>
                        <div class="work-container-description">
                            Redesign of a special and personalised newspaper as a birthday gift
                        </div>
                        <a class="button button--white">See More</a>
                    </div>
                </div>

                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">Some of my works for RMDSZ</div>
                        <div class="work-container-description">
                            Mostly social media graphic content (facebook, instagram) for a political organisation.
                        </div>
                        <a class="button button--white">See More</a>
                    </div>
                </div>

                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">Some of my Further marketing materials</div>
                        <div class="work-container-description">
                            Internal marketing materials like: freebies, instagram blog post and case study carousels
                        </div>
                        <a class="button button--white">See More</a>
                    </div>
                </div>

                <div class="work-container">
                    <div class="work-container-image"></div>
                    <div class="work-container-text">
                        <div class="work-container-title">MUST vine label</div>
                        <div class="work-container-description">
                            Internal marketing materials like: freebies, instagram blog post and case study
                            carousels
                        </div>
                        <a class="button button--white">See More</a>
                    </div>
                </div>
            </div>

            <contact></contact>

        </div>
    </div>

</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";
import Navbar from "./components/Navbar.vue";
import Contact from "./components/Contact.vue";
import Siema from "siema";

@Component({
    components: {
        Contact,
        Navbar

    }
})

export default class Home extends Vue {

    private isActive: string = 'ux-ui';
    private mySiema: Siema | null = null;

    mounted() {
        if (this.mySiema === null) {
            this.mySiema = new Siema({
                selector: '.siema-carousel',
                loop: true,
                perPage: {
                    300: 1,
                    768: 2,
                    1240: 4,
                },
                draggable: true,
                duration: 400,
                easing: 'ease-out'
            });
        }
    }

    prev() {
        if (this.mySiema) {
            this.mySiema.prev();
        }
    }

    next() {
        if (this.mySiema) {
            this.mySiema.next();
        }
    }

    setActive(group: string) {
        this.isActive = group;
    }
}
</script>

<style scoped>

</style>
