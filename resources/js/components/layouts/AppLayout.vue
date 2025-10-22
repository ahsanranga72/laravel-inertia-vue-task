<script setup lang="ts">
import Sidebar from './partials/Sidebar.vue'
import Header from './partials/Header.vue'
</script>

<template>
    <div class="flex min-h-screen bg-gray-50">
        <div class="fixed left-0 top-0 h-screen z-30">
            <Sidebar />
        </div>
        <div class="flex-1 flex flex-col min-w-0 lg:ml-[290px] ml-0">
            <div class="fixed top-0 lg:left-[290px] left-0 right-0 z-20">
                <Header />
            </div>
            <div class="flex-1 overflow-auto pt-[72px] px-0">
                <slot />
            </div>
        </div>
    </div>
</template>
