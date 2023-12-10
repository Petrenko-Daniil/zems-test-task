<script setup>
import InitAdmin from "../../init.js";
import {onMounted} from "vue";
import Sidebar from "./Components/Sidebar.vue";
import Header from "./Components/Header.vue";
import MobileSearchbar from "./Components/MobileSearchbar.vue";
import RightSidebar from "./Components/RightSidebar.vue";
import {ModalsContainer} from 'vue-final-modal'


onMounted(() => {
    let initialization = new InitAdmin();
})

</script>

<template>
    <div id="root" class="min-h-100vh cloak flex grow bg-slate-50 dark:bg-navy-900">
        <Sidebar></Sidebar>
        <Header></Header>
        <MobileSearchbar></MobileSearchbar>
        <RightSidebar></RightSidebar>
        <slot/>
        <ModalsContainer/>
    </div>
</template>

<style scoped>

</style>
