<script setup lang="ts">
import { ref } from 'vue'
import Input from '@/Components/ui/Input.vue'
import Button from '@/Components/ui/Button.vue'
import Checkbox from '@/Components/ui/Checkbox.vue'
import Logo from '@/Components/icons/Logo.vue'
import EyeIcon from '@/Components/icons/Eye.vue'

const email = ref('example@gmail.com')
const password = ref('example@gmail.com')
const rememberMe = ref(false)
const showPassword = ref(false)

const handleSignIn = () => {
  console.log('Sign in clicked', { email: email.value, password: password.value, rememberMe: rememberMe.value })
}
</script>

<template>
  <div class="min-h-screen bg-gray-50 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-[529px] space-y-14">
      <div class="flex justify-center">
        <Logo />
      </div>

      <!-- header... -->

      <form @submit.prevent="handleSignIn" class="space-y-8">
        <div class="space-y-3.5">
          <label for="email" class="block text-base font-medium text-gray-500">E-mail</label>
          <Input v-model="email" type="email" placeholder="example@gmail.com" />
        </div>

        <div class="space-y-3.5">
          <label for="password" class="block text-base font-medium text-gray-500">Password</label>
          <div class="relative">
            <Input v-model="password" :type="showPassword ? 'text' : 'password'" placeholder="••••••••" />
            <div class="absolute inset-y-0 right-0 flex items-center pr-5">
              <div class="h-10 w-px bg-gray-300 mr-3"></div>
              <button type="button" @click="showPassword = !showPassword" class="text-gray-500 hover:text-gray-700">
                <EyeIcon />
              </button>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <Checkbox v-model="rememberMe">Remember me</Checkbox>
          <a href="#" class="text-base font-medium text-primary underline">Forgot Password?</a>
        </div>

        <Button type="submit" size="lg" className="rounded-[10px] w-full">Sign in</Button>
      </form>
    </div>
  </div>
</template>
