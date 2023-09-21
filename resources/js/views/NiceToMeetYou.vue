<template>
    <div>
        <navbar></navbar>
        <div class="main-container">
            <div class="introduction-container">
                <div class="text-column">
                    <div class="pl-90 mb-100">
                        <div class="large-title-dark mb-50">
                            Hi there, I'm
                            <mark>Nóci</mark>.<br>
                            Nice to meet you!
                        </div>

                        <p>I am Graphic Designer since 2020 and UX/UI Designer since 2021.
                            I started to work in this profession right after I had graduated in Budapest and since then,
                            I strive to keep up with trends and catch up with newer technical and theoretical methods.
                            My mission is to realize and visualize the initial ideas in a demanding and modern way.
                            I founded my start-up company in 2022, “Scroll Roll Design”, so let's get the scroll rolling together!
                        </p>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/pencil.svg"/>
                            <h2>Tools</h2>
                        </div>

                        <bar-chart v-for="(level, index) in toolLevels"
                                   :key="index"
                                   :tool-name="toolNames[index]"
                                   :tool-level="level"
                                    :isTool="true">
                        </bar-chart>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/ruler.svg"/>
                            <h2>Skills</h2>
                        </div>

                        <div class="pl-90">
                            <div class="category-subtitle">
                                UX/UI
                            </div>

                            <p class="mb-50">
                                Research; creating personas; user flows; wireframing;
                                rapid proto; prototyping; webdesign; mobile app design;
                                design system; testing; user oriented thinking; design thinking;
                                design sprint; landing pages...
                            </p>

                            <div class="category-subtitle">
                                Graphic Design
                            </div>

                            <p class="mb-50">
                                Brand identity; logo design; illustrative elements;
                                social media content; advertising materials; books, magazines;
                                menus; flyers; posters; business cards...
                            </p>
                        </div>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/sun.svg"/>
                            <h2>Soft skills</h2>
                        </div>

                        <div class="pl-90">
                            <p>
                                productivity; precision; open-mindness; empathy; adaptation;
                                curiosity; collaboration; flexibility; ambition...
                            </p>
                        </div>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/hat.svg"/>
                            <h2>Education</h2>
                        </div>

                        <div class="pl-90">
                            <div class="education-grid">
                                <div>
                                    <div class="date">2020-2021</div>

                                    <div class="institution">Hollóka Műhely</div>

                                    <div class="location">Budapest</div>

                                    <div class="field">UX/UI Design</div>
                                </div>

                                <div>
                                    <div class="date">2019-2020</div>

                                    <div class="institution">Corvin Rajziskola</div>

                                    <div class="location">Budapest</div>

                                    <div class="field">Graphic Design</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/hat.svg"/>
                            <h2>Languages</h2>
                        </div>

                        <bar-chart v-for="(level, index) in languageLevels"
                                   :key="index"
                                   :languages="languages[index]"
                                   :language-level="level"
                                    :isTool="false">
                        </bar-chart>
                    </div>

                    <div class="mb-100">
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/suit-case.svg"/>
                            <h2>Experience</h2>
                        </div>

                        <div class="pl-90">
                            <div class="experience">
                                <div class="experience-container">
                                    <div class="title">Founder of Scroll Roll Design</div>
                                    <div class="date">since September 2022 | Owner</div>
                                    <ul>
                                        <li>as administrator</li>
                                        <li>as UX/UI and Graphic Designer</li>
                                    </ul>
                                </div>

                                <div class="title">RMDSZ <mark>(political orgranization)</mark></div>
                                <div class="date">since February 2022 | partnership</div>
                                <ul>
                                    <li>as Graphic Designer</li>
                                </ul>

                                <div class="title">Further Digital Solutions</div>
                                <div class="date">since November 2021 - present</div>
                                <ul>
                                    <li>as UX/UI and Graphic Designer</li>
                                    <li>as Project Manager</li>
                                </ul>

                                <div class="title">Csagasa Visual Communication</div>
                                <div class="date">from September 2020 to November 2021 | Full time</div>
                                <ul>
                                    <li>as Graphic Designer</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="category-title">
                            <img alt="tools" class="category-icon" src="../../img/icons/dinosaur.svg"/>
                            <h2>Fun facts about me</h2>
                        </div>

                        <div class="pl-90">
                            <p class="mb-100">
                                If I had to choose between coffee and wine I’d rather be a plant;
                                always on the go; cooker; tennis lover; true friend...
                            </p>
                            <contact></contact>
                        </div>
                    </div>
                </div>

                <div class="image-column">
                    <img alt="img-1" class="introduction-images" src="../../img/introduction/img-1.svg"/>
                    <img alt="img-5" class="introduction-images" src="../../img/introduction/img-2.svg"/>
                    <img alt="img-3" class="introduction-images" src="../../img/introduction/img-3.svg"/>
                    <img alt="img-4" class="introduction-images" src="../../img/introduction/img-4.svg"/>
                    <img alt="img-5" class="introduction-images" src="../../img/introduction/img-5.svg"/>
                    <img alt="img-6" class="introduction-images" src="../../img/introduction/img-6.svg"/>
                    <img alt="img-7" class="introduction-images" src="../../img/introduction/img-7.svg"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">

import {Component, Vue} from "vue-property-decorator";
import Navbar from "./components/Navbar.vue";
import Contact from "./components/Contact.vue";
import BarChart from "./components/BarChart.vue";

@Component({
    components: {
        BarChart,
        Contact,
        Navbar
    }
})

export default class NiceToMeetYou extends Vue {

    private toolLevels: number[] = [92, 88, 80, 98, 40, 40, 58, 60, 45];
    private languageLevels: number[] = [100, 84, 74];
    private toolNames: string[] = [
        "Adobe Illustrator",
        "Adobe Photoshop",
        "Adobe InDesign",
        "Figma",
        "Axure",
        "Wordpress",
        "Wix",
        "Miro",
        "Excel",
    ];
    private languages: string[] = [
        "Hungarian",
        "English",
        "Romanian",
    ];

}
</script>

<style scoped>

</style>
