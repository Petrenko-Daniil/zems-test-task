<template>
    <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <sidebar>
            
        </sidebar>

    </div>
</template>

<script setup>
import {computed} from 'vue'
import {usePage} from '@inertiajs/vue3'

import sidebar from "@/Pages/Template/Components/Sidebar/Sidebar.vue";

const page = usePage()

const adminMenu = computed(() => page.props.adminMenu)

</script>

<style scoped>

</style>
