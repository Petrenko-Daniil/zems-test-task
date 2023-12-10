<template>
    <li>
        <Link
            :href="button.path"
            :class="linkClass"
            :data-default-class="dataDefaultClass"
            :data-active-class="dataActiveClass"
        >
            <div class="flex items-center space-x-2">
                <div
                    class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                ></div>
                <span>{{button.title}}</span>
            </div>
        </Link>
    </li>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps(['button']);
const linkClass = "nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
const dataDefaultClass="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50";
const dataActiveClass="font-medium text-primary dark:text-accent-light"

</script>

<style scoped>

</style>
