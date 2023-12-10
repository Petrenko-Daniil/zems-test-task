<script setup>
import InitAdmin from "../../init.js";
import {onMounted} from "vue";
import Sidebar from "./Components/Sidebar.vue";
import Header from "./Components/Header.vue";
import MobileSearchbar from "./Components/MobileSearchbar.vue";
import RightSidebar from "./Components/RightSidebar.vue";

const props = defineProps(['onlyContent', 'class'])

const rootClass = props.class ?? "main-content w-full px-[var(--margin-x)] pb-8";

onMounted(() => {
    let initialization = new InitAdmin();
})

</script>

<template>
    <div v-if="onlyContent" id="root" class="min-h-100vh cloak flex grow bg-slate-50 dark:bg-navy-900">
        <slot/>
    </div>
    <div v-else id="root" class="min-h-100vh cloak flex grow bg-slate-50 dark:bg-navy-900">
        <Sidebar></Sidebar>
        <Header></Header>
        <MobileSearchbar></MobileSearchbar>
        <RightSidebar></RightSidebar>
        <main :class="rootClass">
            <slot/>
        </main>

    </div>

</template>

<style scoped>

</style>
