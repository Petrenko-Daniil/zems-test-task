<template>
<vue-final-modal>
    <div
        class="modal fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5 show"
        id="modal1"
        role="dialog"
    >
        <div class="modal-overlay absolute inset-0 bg-slate-900/60"></div>
        <div
            class="modal-content scrollbar-sm relative flex max-w-lg flex-col items-center overflow-y-auto rounded-lg bg-white px-4 py-10 text-center dark:bg-navy-700 sm:px-5"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="inline h-28 w-28 shrink-0 text-success"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                />
            </svg>

            <div class="mt-4">
                <h2 class="text-2xl text-slate-700 dark:text-navy-100">
                    {{ title }}
                </h2>
                <p class="mt-2">
                    {{ description }}
                </p>
                <div class="flex justify-center items-center">
                    <button
                        @click="emits('confirm')"
                        class="btn m-2 mr-4 mt-6 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                        {{ confirmButton ?? 'Удалить' }}
                    </button>
                    <button
                        @click="emits('decline')"
                        class="btn m-2 mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                    >
                        {{ declineButton ?? 'Отменить' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</vue-final-modal>
</template>

<script setup>
    import { VueFinalModal } from 'vue-final-modal'
    const props = defineProps(['title', 'description', 'confirmButton', 'declineButton'])
    const emits = defineEmits(['confirm', 'decline'])
</script>

<style scoped>

</style>
