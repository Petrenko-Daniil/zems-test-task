<template>
    <div class="flex flex-col items-center space-y-3 py-3">
        <!-- Profile -->
        <div id="profile-wrapper" class="flex">
            <button id="profile-ref" class="avatar h-12 w-12">
                <img
                    class="rounded-full"
                    :src="$page.props.user.profile"
                    alt="avatar"
                />
                <span
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"
                ></span>
            </button>
            <div id="profile-box" class="popper-root fixed">
                <div
                    class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700"
                >
                    <div
                        class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800"
                    >
                        <div class="avatar h-14 w-14">
                            <img
                                class="rounded-full"
                                :src="$page.props.user.profile"
                                alt="avatar"
                            />
                        </div>
                        <div>
                            <a
                                href="#"
                                class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                            >
                                {{$page.props.user.name}}
                            </a>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                {{$page.props.user.email}}
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col pt-2 pb-5">
                        <div class="mt-3 px-4">
                            <Link
                                href="/logout" method="POST" as="button"
                                class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    />
                                </svg>
                                <span>Logout</span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";


</script>

<style scoped>

</style>
