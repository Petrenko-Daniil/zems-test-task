<template>
    <div
        class="nav-wrapper h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
        data-simplebar
    >
        <ul class="flex flex-1 flex-col px-4 font-inter">
            <sidebar-button v-for="button in activeButton.items" v-bind:button="button"/>
        </ul>
    </div>
</template>

<script setup>
import SidebarButton from "./SidebarButton.vue";
import {usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const props = defineProps(['adminMenu'])

const page = usePage()
const activeRoute = computed(() => page.props.activeRoute)

const activeButton = getActiveButton();

function getActiveButton(){
    let result = undefined;
    props.adminMenu.items.forEach((item) => {
        if (active(item)){
            result = item;
        }
    })
    return result;
}



function active(item){
    return activeRoute.value.includes(item.route);
}
</script>

<style scoped>

</style>
