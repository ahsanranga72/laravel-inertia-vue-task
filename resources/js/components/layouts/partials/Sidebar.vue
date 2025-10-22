<script setup lang="ts">
import { ref } from 'vue';
import DashboardIcon from '@/components/icons/Dashboard.vue'
import CalendarIcon from '@/components/icons/Calendar.vue'
import UserIcon from '@/components/icons/User.vue'
import ChatIcon from '@/components/icons/Chat.vue'

const sidebarExpanded = ref(true)
const dashboardExpanded = ref(true)
</script>

<template lang="">
    <aside class="w-[290px] flex-shrink-0 bg-white border-r border-gray-200 flex flex-col justify-between p-5 lg:block hidden h-screen">
      
      <div class="space-y-7">
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
            <div class="w-1 h-4 bg-white rounded-sm"></div>
            <div class="w-1 h-3 bg-white/90 rounded-sm ml-0.5"></div>
            <div class="w-1 h-3.5 bg-white/70 rounded-sm ml-0.5"></div>
          </div>
          <span class="text-base font-semibold text-gray-800">TailAdmin</span>
        </div>

        <div class="space-y-6">
          <div class="space-y-4">
            <h3 class="text-xs uppercase text-gray-400 font-normal">Menu</h3>
            
            <div class="space-y-2">
              <button @click="dashboardExpanded = !dashboardExpanded" class="w-full flex items-center justify-between px-3 py-2 rounded-lg bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-3">
                  <DashboardIcon />
                  <span class="text-sm text-gray-600">Dashboard</span>
                </div>
                <svg :class="{ 'rotate-180': dashboardExpanded }" class="w-5 h-5 text-gray-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M15.833 12.708L10.625 7.5L5.417 12.708"/>
                </svg>
              </button>
              
              <div v-show="dashboardExpanded" class="ml-9 space-y-1">
                <button class="w-full text-left px-3 py-2.5 rounded-lg bg-primary-light text-primary text-sm">Ecommerce</button>
                <button class="w-full text-left px-3 py-2.5 rounded-lg text-gray-600 text-sm hover:bg-gray-50">Analytics</button>
                <button class="w-full text-left px-3 py-2.5 rounded-lg text-gray-600 text-sm hover:bg-gray-50">Marketing</button>
                <button class="w-full text-left px-3 py-2.5 rounded-lg text-gray-600 text-sm hover:bg-gray-50">CRM</button>
                <button class="w-full text-left px-3 py-2.5 rounded-lg text-gray-600 text-sm hover:bg-gray-50 flex items-center justify-between">
                  Stocks
                  <span class="px-2 py-0.5 text-xs bg-primary-light text-primary rounded-full">NEW</span>
                </button>
              </div>
            </div>

            <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-50">
              <CalendarIcon />
              <span class="text-sm">Calendar</span>
            </button>

            <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-50">
              <UserIcon />
              <span class="text-sm">User Profile</span>
            </button>
          </div>

          <div class="space-y-4">
            <h3 class="text-xs uppercase text-gray-400 font-normal">Support</h3>
            <button class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-50">
              <ChatIcon />
              <span class="text-sm">Chat</span>
            </button>
          </div>

          <div class="space-y-4">
            <h3 class="text-xs uppercase text-gray-400 font-normal">Others</h3>
          </div>
        </div>
      </div>

      <div class="bg-gray-50 rounded-2xl p-5 space-y-4 fixed bottom-0 w-[260px]">
        <div class="text-center space-y-2">
          <h4 class="font-semibold text-gray-800">TailAdmin Pro</h4>
          <p class="text-sm text-gray-500">Get all dashboard and 300+ essential UI elements</p>
        </div>
        <button class="w-full bg-primary text-white py-3.5 px-4 rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors shadow-sm">
          Upgrade Plan
        </button>
      </div>
    </aside>
</template>

<style scoped>
.rotate-180 {
  transform: rotate(180deg);
}
</style>