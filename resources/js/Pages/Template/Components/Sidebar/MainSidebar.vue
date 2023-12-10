<template>
    <div class="main-sidebar">
        <div
            class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800"
        >
            <!-- Application Logo -->
            <application-logo />

            <!-- Main Sections Links -->
            <div
                class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6"
            >
            <main-section-link v-for="item in adminMenu.items" v-bind:button="item"/>
            </div>

            <!-- Bottom Links -->
            <bottom-links />
        </div>
    </div>
</template>

<script setup>
import BottomLinks from "./MainSidebar/BottomLinks.vue";
import ApplicationLogo from "./MainSidebar/ApplicationLogo.vue";
import MainSectionLink from "./MainSidebar/MainSectionLink.vue";
import {computed} from "vue";
import {usePage} from "@inertiajs/vue3";

defineProps(['adminMenu'])
const page = usePage()
const activeRoute = computed(() => page.props.activeRoute)

function active(item){
    return activeRoute.value.includes(item.route);
}
</script>

<style scoped>

</style>
