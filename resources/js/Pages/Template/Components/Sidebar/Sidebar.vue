<template>
    <div class="sidebar sidebar-panel print:hidden">
        <div class="flex h-full grow flex-col border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-750">
            <div class="flex items-center justify-between px-3 pt-4">
                <!-- Application Logo -->
                <div class="flex">
                    <a href="/">
                        <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                             src="images/app-logo.svg" alt="logo">
                    </a>
                </div>
                <button
                    class="sidebar-close btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>

            <div class="nav-wrapper mt-5 h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px 0px -24px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                 aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px 0px 24px;">
                                    <ul class="flex flex-1 flex-col px-4 font-inter">
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="0" id="ac-0">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-0" role="button" aria-controls="ac-panel-0"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Onboarding</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-0" role="region"
                                                aria-labelledby="ac-trigger-0"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-onboarding-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Onboarding v1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-onboarding-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Onboarding v2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="1" id="ac-1">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-1" role="button" aria-controls="ac-panel-1"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>User Card</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-1" role="region"
                                                aria-labelledby="ac-trigger-1"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-card-user-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-4.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 4</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-5.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 5</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-6.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 6</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-user-7.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>User Card 7</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="2" id="ac-2">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-2" role="button" aria-controls="ac-panel-2"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Blog Card</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-2" role="region"
                                                aria-labelledby="ac-trigger-2"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-card-blog-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-4.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 4</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-5.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 5</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-6.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 6</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-7.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 7</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-card-blog-8.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Card 8</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-blog-details.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blog Details</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="3" id="ac-3">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-3" role="button" aria-controls="ac-panel-3"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Help</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-3" role="region"
                                                aria-labelledby="ac-trigger-3"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-help-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Help 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-help-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Help 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-help-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Help 3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="4" id="ac-4">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-4" role="button" aria-controls="ac-panel-4"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Price List</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-4" role="region"
                                                aria-labelledby="ac-trigger-4"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-price-list-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Price List 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-price-list-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Price List 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-price-list-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Price List 3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="5" id="ac-5">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-5" role="button" aria-controls="ac-panel-5"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Invoice</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-5" role="region"
                                                aria-labelledby="ac-trigger-5"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-invoice-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Invoice 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-invoice-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Invoice 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <ul class="flex flex-1 flex-col px-4 font-inter">
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="6" id="ac-6">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-6" role="button" aria-controls="ac-panel-6"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Sign In</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-6" role="region"
                                                aria-labelledby="ac-trigger-6"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-sign-in-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Sign In 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-sign-in-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Sign In 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="7" id="ac-7">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-7" role="button" aria-controls="ac-panel-7"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Sign Up</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-7" role="region"
                                                aria-labelledby="ac-trigger-7"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-sign-up-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Sign Up 1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-sign-up-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Sign Up 2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <ul class="flex flex-1 flex-col px-4 font-inter">
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled"
                                            data-nav-parent-index="8" id="ac-8">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-8" role="button" aria-controls="ac-panel-8"
                                                aria-disabled="false" aria-expanded="false">
                                                <span>Error</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-8" role="region"
                                                aria-labelledby="ac-trigger-8"
                                                style="transition-duration: 200ms; height: 0px;">
                                                <li>
                                                    <a href="pages-error-404-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 404 v1</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-404-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 404 v2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-404-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 404 v3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-404-4.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 404 v4</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-401.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 401</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-429.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 429</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-error-500.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Error 500</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="ac nav-parent [&amp;.is-active_svg]:rotate-90 [&amp;.is-active_.ac-trigger]:font-semibold [&amp;.is-active_.ac-trigger]:text-slate-800 dark:[&amp;.is-active_.ac-trigger]:text-navy-50 js-enabled is-active"
                                            data-nav-parent-index="9" id="ac-9">
                                            <button
                                                class="ac-trigger flex w-full items-center justify-between py-2 text-xs+ tracking-wide text-slate-600 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                id="ac-trigger-9" role="button" aria-controls="ac-panel-9"
                                                aria-disabled="false" aria-expanded="true">
                                                <span>Starter</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <ul class="ac-panel" id="ac-panel-9" role="region"
                                                aria-labelledby="ac-trigger-9"
                                                style="transition-duration: 200ms; height: auto;">
                                                <li>
                                                    <a href="pages-starter-1.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Blurred Header</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-starter-2.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Unblurred Header</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-starter-3.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Centered Links</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-starter-4.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Minimal Sidebar</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-starter-5.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Horizontal Navigation</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages-starter-6.html"
                                                       class="nav-link flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4 font-medium text-primary dark:text-accent-light"
                                                       data-default-class="text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                                                       data-active-class="font-medium text-primary dark:text-accent-light">
                                                        <div class="flex items-center space-x-2">
                                                            <div
                                                                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                            <span>Sideblock</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 618px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                         style="height: 257px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Sidebar"
}
</script>

<style scoped>

</style>
