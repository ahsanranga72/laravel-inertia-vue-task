<script setup lang="ts">
const props = defineProps({
  modelValue: { type: Boolean, default: false },
  id: { type: String }
})
const emit = defineEmits(['update:modelValue'])
</script>

<template>
  <label class="flex items-center gap-3 cursor-pointer">
    <input
      class="sr-only peer"
      type="checkbox"
      :checked="modelValue"
      @change="$emit('update:modelValue', $event.target.checked)"
    />
    <div class="w-4 h-4 border rounded flex items-center justify-center peer-checked:bg-primary peer-checked:border-primary bg-white">
      <svg v-if="modelValue" class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7"/></svg>
    </div>
    <slot />
  </label>
</template>
