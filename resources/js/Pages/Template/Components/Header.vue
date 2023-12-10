<template>
    <nav class="header print:hidden">
        <!-- App Header  -->
        <div
            class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden"
        >
            <!-- Header Items -->
            <div class="flex w-full items-center justify-between">
                <!-- Left: Sidebar Toggle Button -->
                <left-sidebar-toggle-button/>

                <!-- Right: Header buttons -->
                <div class="-mr-1.5 flex items-center space-x-2">
                    <!-- Mobile Search Toggle -->
                    <mobile-search-toggle/>

                    <!-- Main Searchbar -->
                    <main-searchbar/>

                    <!-- Dark Mode Toggle -->
                    <dark-mode-toggle/>

                    <!-- Monochrome Mode Toggle -->
                    <monochrome-mode-toggle v-show="false"/>

                    <!-- Right Sidebar Toggle -->
                    <right-sidebar-toggle v-show="false"/>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import LeftSidebarToggleButton from "./Header/LeftSidebarToggleButton.vue";
import MobileSearchToggle from "./Header/MobileSearchToggle.vue";
import MainSearchbar from "./Header/MainSearchbar.vue";
import DarkModeToggle from "./Header/DarkModeToggle.vue";
import MonochromeModeToggle from "./Header/MonochromeModeToggle.vue";
import RightSidebarToggle from "./Header/RightSidebarToggle.vue";

export default {
    name: "Header",
    components: {
        RightSidebarToggle,
        Notification,
        MonochromeModeToggle, DarkModeToggle, MainSearchbar, MobileSearchToggle, LeftSidebarToggleButton
    }
}
</script>

<style scoped>

</style>
