<template>
    <div>
        <div class="pl-90 bar-chart-grid">
            <div>
                <p v-if="isTool" class="semi-bold">{{ toolName }}</p>
                <p v-else class="semi-bold">{{ languages }}</p>
            </div>
            <div>
                <div class="bar-chart">
                    <div v-if="isTool" class="content" :style="{ width: `${toolLevel}%` }"></div>
                    <div v-else class="content" :style="{ width: `${languageLevel}%` }"></div>
                </div>
            </div>
        </div>
    </div>

</template>

<script lang="ts">

import {Component, Prop, Vue} from "vue-property-decorator";


@Component({
    components: {

    }
})

export default class BarChart extends Vue {

    @Prop() toolName!: string;
    @Prop() toolLevel!: number;
    @Prop() languages!: string;
    @Prop() languageLevel!: number;
    @Prop() isTool!: boolean;

}
</script>

<style scoped>

</style>
