<template>
    <Link
        :href="button.path"
        :data-tooltip="button.title"
        data-placement="right"
        :class="active ? activeClass : notActiveClass"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
        </svg>
    </Link>

</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import {computed} from "vue";
    import {usePage} from "@inertiajs/vue3";

    const page = usePage()
    const activeRoute = computed(() => page.props.activeRoute)
    const props = defineProps(['button', 'active']);
    const activeClass = "tooltip-main-sidebar flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90";
    const notActiveClass = "tooltip-main-sidebar flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25";
    const active = computed(() => {
       return activeRoute.value.includes(props.button.route);
    });

</script>

<style scoped>

</style>
