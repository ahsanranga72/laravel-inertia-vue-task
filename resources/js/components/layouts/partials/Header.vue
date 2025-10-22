<script setup lang="ts">
import BarIcon from '@/components/icons/Bar.vue';
import SearchIcon from '@/components/icons/Search.vue';
import MoonIcon from '@/components/icons/Moon.vue';
import BellIcon from '@/components/icons/Bell.vue';

</script>

<template>
    <header class="flex flex-shrink-0 items-center justify-between border-b border-gray-200 bg-white px-6 py-4">

        <div class="flex items-center gap-4">
            <button class="rounded-lg border border-gray-200 p-2.5 lg:hidden">
                <BarIcon />
            </button>

            <div class="relative hidden w-[430px] md:block">
                <div class="pointer-events-none absolute inset-y-0 left-4 flex items-center">
                    <SearchIcon />
                </div>
                <input type="text" placeholder="Search or type command..."
                    class="w-full rounded-lg border border-gray-200 bg-gray-50 py-2 pr-20 pl-12 text-sm text-gray-600 placeholder-gray-500 focus:ring-2 focus:ring-primary/20 focus:outline-none" />
                <div class="absolute inset-y-0 right-2.5 flex items-center gap-0.5">
                    <kbd class="rounded border border-gray-200 bg-gray-50 px-2 py-1.5 text-xs text-gray-500">⌘</kbd>
                    <kbd class="rounded border border-gray-200 bg-gray-50 px-2 py-1.5 text-xs text-gray-500">K</kbd>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-full border border-gray-200 p-3 hover:bg-gray-50">
                <MoonIcon />
            </button>

            <button class="relative rounded-full border border-gray-200 p-3 hover:bg-gray-50">
                <span class="absolute top-2 right-2 h-2 w-2 rounded-full border-2 border-white bg-orange-500"></span>
                <BellIcon />
            </button>

            <div class="ml-2 flex items-center gap-3">
                <img src="https://i.pravatar.cc/44" alt="Profile" class="h-11 w-11 rounded-full object-cover" />
                <div class="hidden items-center gap-1 lg:flex">
                    <span class="text-sm text-gray-600">Emirhan Boruch</span>
                    <svg class="h-4.5 w-4.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 18 18">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4.313 6.656L9 11.344L13.688 6.656" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
</template>
