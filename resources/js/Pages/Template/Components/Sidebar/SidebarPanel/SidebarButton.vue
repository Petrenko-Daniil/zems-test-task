<template>
    <li v-if="button.items.length === 0">
        <Link
            :href="button.path"
            :data-default-class="defaultClass"
            :data-active-class="activeClass"
            class="nav-link flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
        >
            {{button.title}}
        </Link>
    </li>
    <li v-else
        class="ac nav-parent [&.is-active_svg]:rotate-90 [&.is-active_.ac-trigger]:font-semibold [&.is-active_.ac-trigger]:text-slate-800 dark:[&.is-active_.ac-trigger]:text-navy-50"
    >
        <button
            class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
        >
            <span>{{ button.title }}</span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                ></path>
            </svg>
        </button>
        <ul class="ac-panel">
            <sidebar-sub-button v-bind:button="button"/>
            <sidebar-sub-button v-for="subButton in button.items" v-bind:button="subButton" />
        </ul>
    </li>

</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import SidebarSubButton from "./SidebarSubButton.vue";
const props = defineProps(['button'])

const defaultClass = "text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50";
const activeClass = "font-medium text-primary dark:text-accent-light";

</script>

<style scoped>

</style>
