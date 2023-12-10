<template>
    <div class="sidebar-panel">
        <div
            class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750"
        >
            <!-- Sidebar Panel Header -->
            <sidebar-panel-header />

            <!-- Sidebar Panel Body -->
            <sidebar-panel-body v-bind:adminMenu="adminMenu" />
        </div>
    </div>
</template>

<script setup>
import SidebarPanelHeader from "./SidebarPanel/SidebarPanelHeader.vue";
import SidebarPanelBody from "./SidebarPanel/SidebarPanelBody.vue";

defineProps(['adminMenu'])
</script>

<style scoped>

</style>
