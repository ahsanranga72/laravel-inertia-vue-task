<script setup lang="ts">
import { computed } from 'vue'
import { toRef } from 'vue'

const props = defineProps({
  modelValue: { type: [String, Number], default: '' },
  id: { type: String, default: undefined },
  type: { type: String, default: 'text' },
  placeholder: { type: String, default: '' },
  error: { type: String, default: '' },
  className: { type: String, default: '' }
})
const emit = defineEmits(['update:modelValue'])

const inputId = computed(() => props.id ?? `input-${Math.random().toString(36).slice(2,8)}`)
</script>

<template>
  <div class="w-full">
    <input
      :id="inputId"
      :type="type"
      :placeholder="placeholder"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      :class="`w-full px-5 py-4 text-base text-gray-700 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-colors ${className}`"
    />
    <p v-if="error" class="text-sm text-red-500 mt-2">{{ error }}</p>
  </div>
</template>
