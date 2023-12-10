<template>
    <div id="searchbar-wrapper" class="hidden sm:flex">
        <div class="relative mr-4 flex h-8">
            <input
                v-model="search"
                @input="getSearchData"
                id="searchbar-ref"
                placeholder="Поиск..."
                class="form-input peer h-full w-60 rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                type="text"
            />
            <div
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 transition-colors duration-200"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                    />
                </svg>
            </div>
        </div>
        <div
            id="searchbar-box"
            data-active-tab="#search-all"
            class="popper-root search-tab-wrapper"
        >
            <div
                class="popper-box flex max-h-[calc(100vh-6rem)] w-80 flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark"
            >
                <div
                    class="is-scrollbar-hidden flex shrink-0 overflow-x-auto rounded-t-lg bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200"
                >
                    <button
                        class="tab btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5"
                        data-active-class="border-primary dark:border-accent text-primary dark:text-accent-light"
                        data-default-class="border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100"
                        data-target="#search-all"
                    >
                        Все
                    </button>

                </div>

                <div
                    class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2"
                >
                    <div v-if="results.data.length != 0" class="mt-1 font-inter font-medium">
                        <Link v-for="item in results.data"
                            class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            :href="item.link"
                        >
                            <span>{{item.title}}</span>
                        </Link>
                    </div>
                    <div v-else class="mt-1 font-inter font-medium">
                        <p class="text-sm p-3">Ничего не найдено</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {reactive, ref} from "vue";
import {Link} from "@inertiajs/vue3";
import axios from "axios";

    let search = ref('');
    let typingTimer;
    let doneTypingInterval=500;
    let results = reactive({
       data: []
    });

    function getSearchData(){
        clearTimeout(typingTimer);
        if (search.value) {
            typingTimer = setTimeout(fetchResults, doneTypingInterval);
        } else {
            results.data = [];
        }
    }

    function fetchResults () {
        axios.post('/api/search', {
            'search':  search.value
        }).then(function (response){
            results.data = response.data;
            console.log(results.data);
        })
    }

</script>

<style scoped>

</style>
