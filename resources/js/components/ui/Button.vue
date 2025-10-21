<script setup lang="ts">
import { computed } from 'vue'
import { type PropType } from 'vue'

const props = defineProps({
  type: { type: String as PropType<'button'|'submit'|'reset'>, default: 'button' },
  variant: { type: String as PropType<'primary'|'ghost'|'outline'>, default: 'primary' },
  size: { type: String as PropType<'sm'|'md'|'lg'>, default: 'md' },
  disabled: { type: Boolean, default: false },
  className: { type: String, default: '' }
})

const emit = defineEmits(['click'])

const base = 'font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors cursor-pointer'
const variantCls = {
  primary: 'bg-primary text-white hover:bg-primary/90 focus:ring-primary/50',
  ghost: 'bg-transparent text-primary hover:bg-primary/10',
  outline: 'border border-gray-200 text-gray-700 hover:bg-gray-50'
}
const sizeCls = {
  sm: 'py-2 px-3 text-sm',
  md: 'py-3 px-4 text-base',
  lg: 'py-4 px-6 text-lg'
}

const classes = computed(() => `${base} ${variantCls[props.variant]} ${sizeCls[props.size]} ${props.className}`)
</script>

<template>
  <button :type="props.type" :disabled="props.disabled" :class="classes" @click="$emit('click', $event)">
    <slot />
  </button>
</template>
