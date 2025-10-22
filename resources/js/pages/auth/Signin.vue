<script setup lang="ts">
import { ref } from 'vue'
import Input from '@/Components/ui/Input.vue'
import Button from '@/Components/ui/Button.vue'
import Checkbox from '@/Components/ui/CheckBox.vue'
import Logo from '@/Components/icons/Logo.vue'
import EyeIcon from '@/Components/icons/Eye.vue'
import { Link, useForm } from '@inertiajs/vue3'

const showPassword = ref(false)
const form = useForm({
  email: '',
  password: '',
  remember: false,
  message: ''
})

const handleSignIn = () => {
  form.post('/signin', {
    onSuccess: () => {
      console.log('Login successful!')
    },
    onError: (errors) => {
      console.log('Login failed:', errors)
    },
  })
}
</script>

<template>
  <div class="min-h-screen bg-gray-50 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-[529px] space-y-14">
      <div class="flex justify-center">
        <Logo />
      </div>

      <form @submit.prevent="handleSignIn" class="space-y-8">
        <div class="space-y-3.5">
          <label for="email" class="block text-base font-medium text-gray-500">E-mail</label>
          <Input v-model="form.email" type="email" placeholder="example@gmail.com" autocomplete="email"
            :error="form.errors.email" :required="true" />
        </div>

        <div class="space-y-3.5">
          <label for="password" class="block text-base font-medium text-gray-500">Password</label>
          <div class="relative">
            <Input v-model="form.password" :type="showPassword ? 'text' : 'password'" placeholder="••••••••"
              :error="form.errors.password" :required="true" />
            <div class="absolute inset-y-0 right-0 flex items-center pr-5">
              <div class="h-10 w-px bg-gray-300 mr-3"></div>
              <button type="button" @click="showPassword = !showPassword" class="text-gray-500 hover:text-gray-700">
                <EyeIcon />
              </button>
            </div>
          </div>
        </div>

        <p v-if="form.errors.message" class="text-sm text-red-500 mt-2">{{ form.errors.message }}</p>

        <div class="flex items-center justify-between">
          <Checkbox v-model="form.remember">Remember me</Checkbox>
          <Link href="#" class="text-base font-medium text-primary underline">Forgot Password?</Link>
        </div>

        <Button type="submit" size="lg" className="rounded-[10px] w-full disabled:opacity-50" :disabled="form.processing">{{ form.processing ? 'Signing in...' : 'Sign in' }}</Button>
      </form>
    </div>
  </div>
</template>
