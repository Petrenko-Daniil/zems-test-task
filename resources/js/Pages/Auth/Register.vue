<template>
    <Layout :only-content="true">
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-12 w-12" src="/images/app-logo.svg" alt="logo"/>
                <p
                    class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100"
                >
                    WebWizard
                </p>
            </a>
        </div>
        <div class="hidden w-full place-items-center lg:grid">
            <div class="w-full max-w-lg p-6">
                <img
                    class="w-full"
                    id="hero-image-dark"
                    src="/images/illustrations/dashboard-check-dark.svg"
                    alt="image"
                />
            </div>
        </div>
        <main
            class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md"
        >
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="/images/app-logo.svg" alt="logo"/>
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Регистрация
                        </h2>
                        <div v-if="errors">
                            <p v-if="errors.name" class="text-sm text-error">
                                {{ errors.name }}
                            </p>
                            <p v-if="errors.email" class="text-sm text-error">
                                {{ errors.email }}
                            </p>
                            <p v-else-if="errors.password" class="text-sm text-error">
                                {{ errors.password }}
                            </p>
                        </div>
                        <p v-else class="text-slate-400 dark:text-navy-300">
                            Пожалуйста укажите ваши данные
                        </p>
                    </div>
                </div>
                <form @submit.prevent="registerForm.post(route('register.post'))" class="mt-16">
                    <label class="relative flex">
                        <input
                            v-model="registerForm.email"
                            name="email"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Email"
                            type="text"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </span>
                    </label>
                    <label class="relative mt-4 flex">
                        <input
                            v-model="registerForm.name"
                            name="email"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Имя"
                            type="text"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </span>
                    </label>
                    <label class="relative mt-4 flex">
                        <input
                            v-model="registerForm.password"
                            name="password"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Пароль"
                            type="password"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                  />
                </svg>
              </span>
                    </label>
                    <label class="relative mt-4 flex">
                        <input
                            v-model="registerForm.password_confirmation"
                            name="password_confirmation"
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Повторите пароль"
                            type="password"
                        />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                  />
                </svg>
              </span>
                    </label>
                    <div class="mt-4 flex items-center justify-between space-x-2">
                        <label class="inline-flex items-center space-x-2">
                            <input
                                v-model="registerForm.remember"
                                class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                type="checkbox"
                            />
                            <span class="line-clamp-1">Запомнить меня</span>
                        </label>
                        <Link
                            :href="route('login')"
                            class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100"
                        >Есть аккаунт?
                        </Link
                        >
                    </div>
                    <button
                        class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    >
                        Войти
                    </button>
                </form>
            </div>
            <div
                class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300"
            >
                <Link :href="route('login')">Авторизация</Link>
            </div>
        </main>
    </Layout>
</template>

<script setup>
import Layout from '../Template/Layout.vue'
import {reactive} from "vue";
import {useForm} from "@inertiajs/vue3";
import route from "ziggy-js";
import {Link} from "@inertiajs/vue3";

defineProps(['errors']);

let registerForm = useForm({
    name: undefined,
    email: undefined,
    password: undefined,
    password_confirmation: undefined,
    remember: true,
});
</script>

<style scoped>

</style>
