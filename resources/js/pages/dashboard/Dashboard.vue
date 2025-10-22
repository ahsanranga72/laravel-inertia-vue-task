<script setup lang="ts">
import MonthlySalesChart from '@/components/dashboard/MonthlySalesChart.vue'
import StatisticsChart from '@/components/dashboard/StatisticsChart.vue'
import AppLayout from '@/components/layouts/AppLayout.vue'

const metricCards = [
  {
    title: 'Customers',
    value: '3,782',
    change: '+11.01%',
    isIncrease: true,
    icon: 'users'
  },
  {
    title: 'Orders',
    value: '5,359',
    change: '-9.05%',
    isIncrease: false,
    icon: 'box'
  }
]

const countries = [
  { name: 'USA', customers: '2,379 Customers', progress: 79, flag: 'https://api.builder.io/api/v1/image/assets/TEMP/c3628154dcaf67064216225b2a0a4278ca8a18ee?width=64' },
  { name: 'France', customers: '589 Customers', progress: 23, flag: 'https://api.builder.io/api/v1/image/assets/TEMP/ae3e6c534fc5f854e2c11eee8803b87ada5c15f7?width=64' }
]

const recentOrders = [
  {
    product: 'Macbook pro 13"',
    variants: '2 Variants',
    category: 'Laptop',
    price: '$2399.00',
    status: 'Delivered',
    statusType: 'success',
    image: 'https://api.builder.io/api/v1/image/assets/TEMP/c5446930897eb9f25c7a5a0a8186165066f9f3c2?width=100'
  },
  {
    product: 'Apple Watch Ultra',
    variants: '1 Variants',
    category: 'Watch',
    price: '$879.00',
    status: 'Pending',
    statusType: 'warning',
    image: 'https://api.builder.io/api/v1/image/assets/TEMP/307c32bba4895b57d1bad3a6dfea0d4c7b3b2d12?width=100'
  },
  {
    product: 'iPhone 15 Pro Max',
    variants: '2 Variants',
    category: 'Smart Phone',
    price: '$1869.00',
    status: 'Delivered',
    statusType: 'success',
    image: 'https://api.builder.io/api/v1/image/assets/TEMP/716c3b0ff11127bb1c23b57801efb4e27bd44df8?width=100'
  },
  {
    product: 'iPad Pro 3rd Gen',
    variants: '2 Variants',
    category: 'Electronics',
    price: '$1699.00',
    status: 'Canceled',
    statusType: 'error',
    image: 'https://api.builder.io/api/v1/image/assets/TEMP/2458be0330d53a236ea03f5aaa91c383a660f14f?width=100'
  },
  {
    product: 'Airpods Pro 2nd Gen',
    variants: '1 Variants',
    category: 'Accessories',
    price: '$240.00',
    status: 'Delivered',
    statusType: 'success',
    image: 'https://api.builder.io/api/v1/image/assets/TEMP/181b2a25f4bf075185fdca692354c03a0d378614?width=100'
  }
]
</script>

<template>
  <AppLayout>
    <main class="flex-1 overflow-auto p-6">
      <div class="max-w-[1150px] mx-auto space-y-6">
        <!-- Top Section -->
        <div class="flex gap-6 flex-col xl:flex-row">
          <!-- Left Column -->
          <div class="flex-1 space-y-6">
            <!-- Metric Cards -->
            <div class="grid md:grid-cols-2 gap-6">
              <div v-for="card in metricCards" :key="card.title"
                class="bg-white rounded-2xl border border-gray-200 p-6 space-y-5">
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                  <svg v-if="card.icon === 'users'" class="w-6 h-6 text-gray-700" fill="currentColor"
                    viewBox="0 0 20 16">
                    <path
                      d="M14 8C15.1 8 16 7.1 16 6C16 4.9 15.1 4 14 4C12.9 4 12 4.9 12 6C12 7.1 12.9 8 14 8ZM6 8C7.1 8 8 7.1 8 6C8 4.9 7.1 4 6 4C4.9 4 4 4.9 4 6C4 7.1 4.9 8 6 8ZM6 10C4.33 10 1 10.835 1 12.5V14C1 14.55 1.45 15 2 15H10C10.55 15 11 14.55 11 14V12.5C11 10.835 7.67 10 6 10ZM14 10C13.71 10 13.38 10.02 13.03 10.05C13.05 10.06 13.06 10.08 13.07 10.09C14.21 10.92 15 12.03 15 12.5V14C15 14.35 14.93 14.69 14.82 15H18C18.55 15 19 14.55 19 14V12.5C19 10.835 15.67 10 14 10Z" />
                  </svg>
                  <svg v-else class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 19 20">
                    <path
                      d="M8.201.238C8.835-.079 9.58-.079 10.214.238L17.171 3.716C17.933 4.097 18.415 4.877 18.415 5.729V13.918C18.415 14.77 17.933 15.549 17.171 15.93L10.214 19.409C9.58 19.726 8.835 19.726 8.201 19.409L1.244 15.93C.482 15.549 0 14.77 0 13.918V5.729C0 4.877.482 4.097 1.244 3.716L8.201.238ZM10.214 9.366C10.13 9.408 10.044 9.443 9.957 9.474V17.861L16.5 14.589C16.754 14.462 16.915 14.202 16.915 13.918V6.015L10.214 9.366ZM1.5 13.918C1.5 14.202 1.661 14.462 1.915 14.589L8.457 17.86V9.474C8.37 9.443 8.285 9.408 8.201 9.366L1.5 6.015V13.918ZM9.543 1.579C9.332 1.474 9.083 1.474 8.872 1.579L2.427 4.802L8.872 8.025C9.083 8.13 9.332 8.13 9.543 8.025L15.987 4.801L9.543 1.579Z" />
                  </svg>
                </div>
                <div class="flex items-end justify-between">
                  <div class="space-y-2">
                    <div class="text-sm text-gray-500">{{ card.title }}</div>
                    <div class="text-3xl font-bold text-gray-700">{{ card.value }}</div>
                  </div>
                  <div :class="[
                    'flex items-center gap-1 px-2.5 py-0.5 rounded-full text-sm',
                    card.isIncrease ? 'bg-success-light text-success' : 'bg-error-light text-error'
                  ]">
                    <svg v-if="card.isIncrease" class="w-3 h-3" fill="currentColor" viewBox="0 0 8 10">
                      <path
                        d="M3.748 0C3.792 0 3.835.004 3.877.012C4.024.037 4.166.106 4.28.22L7.28 3.218C7.573 3.511 7.573 3.985 7.28 4.278C6.987 4.571 6.512 4.571 6.219 4.278L4.498 2.557V8.751C4.498 9.165 4.162 9.501 3.748 9.501C3.334 9.501 2.998 9.165 2.998 8.751V2.561L1.28 4.278C.987 4.571.512 4.571.22 4.278C-.073 3.985-.073 3.511.22 3.218L3.207.236C3.216.221 3.226.208 3.237.194C3.26.176 3.286.159 3.311.144C3.359.108 3.41.077 3.466.055C3.477.05 3.489.048 3.501.044C3.534.032 3.567.021 3.602.014C3.606.013 3.61.013 3.613.013C3.657.005 3.702 0 3.748 0Z" />
                    </svg>
                    <svg v-else class="w-3 h-3" fill="currentColor" viewBox="0 0 8 10">
                      <path
                        d="M3.748 0C4.162 0 4.498.336 4.498.75V6.94L6.219 5.223C6.512 4.93 6.987 4.93 7.28 5.223C7.572 5.516 7.573 5.991 7.28 6.283L4.28 9.281C4.186 9.375 4.073 9.434 3.954 9.468C3.888 9.487 3.82 9.501 3.748 9.501C3.654 9.501 3.564 9.481 3.481 9.449C3.476 9.447 3.471 9.446 3.466 9.444C3.405 9.42 3.35 9.387 3.299 9.349C3.28 9.335 3.261 9.32 3.244 9.304C3.232 9.293 3.219 9.282 3.208 9.27L.22 6.283C-.073 5.99-.073 5.516.22 5.223C.512 4.93.987 4.93 1.28 5.223L2.998 6.939V.75C2.998.336 3.334 0 3.748 0Z" />
                    </svg>
                    {{ card.change }}
                  </div>
                </div>
              </div>
            </div>

            <!-- Monthly Sales Chart -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 h-[288px] flex flex-col">
              <div class="flex items-start justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-700">Monthly Sales</h3>
                <button class="text-gray-400 hover:text-gray-600">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 4 16">
                    <path
                      d="M1.938 12.009C2.821 12.098 3.51 12.844 3.51 13.75C3.51 14.656 2.821 15.402 1.938 15.491L1.76 15.5H1.75C.784 15.5 0 14.717 0 13.75C0 12.784.784 12 1.75 12H1.76L1.938 12.009ZM1.938 6.009C2.821 6.098 3.51 6.844 3.51 7.75C3.51 8.656 2.821 9.402 1.938 9.491L1.76 9.5H1.75C.784 9.5 0 8.717 0 7.75C0 6.784.784 6 1.75 6H1.76L1.938 6.009ZM1.938.009C2.821.098 3.51.844 3.51 1.75C3.51 2.656 2.821 3.402 1.938 3.491L1.76 3.5H1.75C.784 3.5 0 2.717 0 1.75C0 .784.784 0 1.75 0H1.76L1.938.009Z" />
                  </svg>
                </button>
              </div>
              <div class="flex-1 min-h-0">
                <MonthlySalesChart />
              </div>
            </div>
          </div>

          <!-- Monthly Target Card -->
          <div class="w-full xl:w-[450px] bg-gray-100 rounded-2xl overflow-hidden">
            <div class="bg-white rounded-2xl p-6 space-y-11">
              <div class="flex items-start justify-between">
                <div class="space-y-1">
                  <h3 class="text-lg font-semibold text-gray-700">Monthly Target</h3>
                  <p class="text-sm text-gray-500">Target you've set for each month</p>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 4 16">
                    <path
                      d="M1.938 12.009C2.821 12.098 3.51 12.844 3.51 13.75C3.51 14.656 2.821 15.402 1.938 15.491L1.76 15.5H1.75C.784 15.5 0 14.717 0 13.75C0 12.784.784 12 1.75 12H1.76L1.938 12.009ZM1.938 6.009C2.821 6.098 3.51 6.844 3.51 7.75C3.51 8.656 2.821 9.402 1.938 9.491L1.76 9.5H1.75C.784 9.5 0 8.717 0 7.75C0 6.784.784 6 1.75 6H1.76L1.938 6.009ZM1.938.009C2.821.098 3.51.844 3.51 1.75C3.51 2.656 2.821 3.402 1.938 3.491L1.76 3.5H1.75C.784 3.5 0 2.717 0 1.75C0 .784.784 0 1.75 0H1.76L1.938.009Z" />
                  </svg>
                </button>
              </div>

              <div class="space-y-6">
                <!-- Circular progress -->
                <div class="relative w-[328px] h-[164px] mx-auto">
                  <svg viewBox="0 0 328 164" class="w-full h-full">
                    <path
                      d="M321.44 164C325.063 164 328.014 161.061 327.869 157.441C326.225 116.329 309.172 77.241 279.966 48.0346C249.21 17.2786 207.496 0 164 0C120.505 0 78.7905 17.2786 48.0345 48.0345C18.8281 77.2409 1.77529 116.329 0.131095 157.441C-0.0136858 161.061 2.93701 164 6.56 164C10.183 164 13.1051 161.061 13.2625 157.441C14.8985 119.811 30.566 84.0575 57.3117 57.3118C85.6072 29.0163 123.984 13.1201 164 13.1201C204.016 13.1201 242.393 29.0163 270.688 57.3118C297.434 84.0575 313.102 119.811 314.738 157.441C314.895 161.061 317.817 164 321.44 164Z"
                      fill="#E4E7EC" />
                    <path
                      d="M275.327 52.6732C277.889 50.1113 277.897 45.947 275.235 43.4897C253.072 23.032 225.66 9.05202 195.995 3.15129C164.182 -3.17669 131.207 0.0710659 101.24 12.4838C71.2728 24.8966 45.6595 45.9169 27.639 72.8866C10.8351 98.0354 1.33707 127.304 0.131155 157.442C-0.0136987 161.062 2.93701 164 6.56 164C10.183 164 13.1051 161.061 13.2626 157.442C14.4606 129.9 23.1858 103.167 38.5478 80.1757C55.1268 55.3636 78.691 36.0249 106.261 24.6051C133.83 13.1854 164.167 10.1974 193.435 16.0192C220.555 21.4136 245.628 34.1475 265.95 52.7751C268.621 55.2232 272.765 55.235 275.327 52.6732Z"
                      fill="#465FFF" />
                  </svg>
                  <div class="absolute inset-0 flex flex-col items-center justify-center mt-16">
                    <div class="text-4xl font-semibold text-gray-700">75.55%</div>
                    <div class="mt-2 px-3 py-1 bg-success-light text-success rounded-full text-sm">+10%</div>
                  </div>
                </div>

                <p class="text-center text-gray-500">
                  You earn $3287 today, its higher than last month.<br />
                  Keep up your good work!
                </p>
              </div>
            </div>

            <div class="flex items-center justify-center gap-8 p-5">
              <div class="text-center space-y-1">
                <div class="text-sm text-gray-500">Target</div>
                <div class="flex items-center gap-1">
                  <span class="text-lg font-semibold text-gray-700">$20K</span>
                  <svg class="w-4 h-4 text-error" fill="currentColor" viewBox="0 0 10 13">
                    <path
                      d="M4.748 0C5.162 0 5.498.336 5.498.75V9.61L8.219 6.89C8.512 6.597 8.987 6.598 9.28 6.891C9.573 7.184 9.573 7.658 9.28 7.951L5.28 11.948C5.179 12.049 5.055 12.112 4.926 12.144C4.915 12.146 4.905 12.15 4.894 12.152C4.843 12.162 4.796 12.168 4.748 12.168C4.654 12.168 4.564 12.148 4.481 12.116C4.476 12.114 4.471 12.113 4.466 12.111C4.408 12.088 4.355 12.057 4.305 12.021C4.286 12.006 4.267 11.991 4.249 11.975C4.233 11.961 4.217 11.947 4.203 11.932L.22 7.951C-.073 7.658-.073 7.184.22 6.891C.512 6.598.987 6.598 1.28 6.891L3.998 9.606V.75C3.998.336 4.334 0 4.748 0Z" />
                  </svg>
                </div>
              </div>
              <div class="w-px h-7 bg-gray-200"></div>
              <div class="text-center space-y-1">
                <div class="text-sm text-gray-500">Revenue</div>
                <div class="flex items-center gap-1">
                  <span class="text-lg font-semibold text-gray-700">$16K</span>
                  <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 10 13">
                    <path
                      d="M4.747 0C4.813 0 4.877.01 4.938.026C5.063.059 5.182.122 5.28.22L9.28 4.217C9.573 4.51 9.573 4.984 9.28 5.277C8.988 5.57 8.513 5.571 8.22 5.278L5.497 2.556V11.418C5.497 11.832 5.161 12.168 4.747 12.168C4.333 12.168 3.997 11.832 3.997 11.418V2.562L1.28 5.277C.987 5.57.513 5.57.22 5.277C-.073 4.984-.073 4.51.22 4.217L4.202.236C4.216.222 4.231.208 4.246.194C4.266.176 4.286.159 4.308.144C4.431.054 4.583 0 4.747 0Z" />
                  </svg>
                </div>
              </div>
              <div class="w-px h-7 bg-gray-200"></div>
              <div class="text-center space-y-1">
                <div class="text-sm text-gray-500">Today</div>
                <div class="flex items-center gap-1">
                  <span class="text-lg font-semibold text-gray-700">$1.5K</span>
                  <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 10 13">
                    <path
                      d="M4.747 0C4.813 0 4.877.01 4.938.026C5.063.059 5.182.122 5.28.22L9.28 4.217C9.573 4.51 9.573 4.984 9.28 5.277C8.988 5.57 8.513 5.571 8.22 5.278L5.497 2.556V11.418C5.497 11.832 5.161 12.168 4.747 12.168C4.333 12.168 3.997 11.832 3.997 11.418V2.562L1.28 5.277C.987 5.57.513 5.57.22 5.277C-.073 4.984-.073 4.51.22 4.217L4.202.236C4.216.222 4.231.208 4.246.194C4.266.176 4.286.159 4.308.144C4.431.054 4.583 0 4.747 0Z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Statistics Chart -->
        <div class="bg-white rounded-2xl border border-gray-200 p-6 h-[400px] flex flex-col">
          <div class="flex items-start justify-between mb-6 flex-wrap gap-3">
            <div class="space-y-1">
              <h3 class="text-lg font-semibold text-gray-700">Statistics</h3>
              <p class="text-sm text-gray-500">Target you've set for each month</p>
            </div>

            <div class="flex items-center gap-3 flex-wrap">
              <div class="inline-flex p-0.5 bg-gray-100 rounded-lg">
                <button class="px-3 py-2.5 text-sm bg-white rounded-md shadow-sm text-gray-800">Overview</button>
                <button class="px-3 py-2.5 text-sm text-gray-500 hover:text-gray-700">Sales</button>
                <button class="px-3 py-2.5 text-sm text-gray-500 hover:text-gray-700">Revenue</button>
              </div>
              <button
                class="flex items-center gap-2 px-4 py-3 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 15 17">
                  <path
                    d="M10.75 0C11.164 0 11.5.336 11.5.75V1.458H12.833C13.938 1.458 14.833 2.354 14.833 3.458V14.292C14.833 15.396 13.938 16.292 12.833 16.292H2C.896 16.292 0 15.396 0 14.292V3.458C0 2.354.896 1.458 2 1.458H3.333V.75C3.333.336 3.669 0 4.083 0C4.497 0 4.833.336 4.833.75V1.458H10V.75C10 .336 10.336 0 10.75 0ZM1.5 14.292C1.5 14.568 1.724 14.792 2 14.792H12.833C13.109 14.792 13.333 14.568 13.333 14.292V6.708H1.5V14.292ZM2 2.958C1.724 2.958 1.5 3.182 1.5 3.458V5.208H13.333V3.458C13.333 3.182 13.109 2.958 12.833 2.958H2Z" />
                </svg>
                05 Feb - 06 March
              </button>
            </div>
          </div>

          <div class="flex-1 min-h-0">
            <StatisticsChart />
          </div>
        </div>

        <!-- Bottom Section -->
        <div class="flex gap-6 flex-col lg:flex-row">
          <!-- Customer Demographics -->
          <div class="bg-white rounded-2xl border border-gray-200 p-6 lg:w-[413px] space-y-6">
            <div class="flex items-start justify-between">
              <div class="space-y-1">
                <h3 class="text-lg font-semibold text-gray-700">Customers Demographic</h3>
                <p class="text-sm text-gray-500">Number of customer based on country</p>
              </div>
              <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 4 16">
                  <path
                    d="M1.938 12.009C2.821 12.098 3.51 12.844 3.51 13.75C3.51 14.656 2.821 15.402 1.938 15.491L1.76 15.5H1.75C.784 15.5 0 14.717 0 13.75C0 12.784.784 12 1.75 12H1.76L1.938 12.009ZM1.938 6.009C2.821 6.098 3.51 6.844 3.51 7.75C3.51 8.656 2.821 9.402 1.938 9.491L1.76 9.5H1.75C.784 9.5 0 8.717 0 7.75C0 6.784.784 6 1.75 6H1.76L1.938 6.009ZM1.938.009C2.821.098 3.51.844 3.51 1.75C3.51 2.656 2.821 3.402 1.938 3.491L1.76 3.5H1.75C.784 3.5 0 2.717 0 1.75C0 .784.784 0 1.75 0H1.76L1.938.009Z" />
                </svg>
              </button>
            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 relative h-[206px]">
              <img
                src="https://api.builder.io/api/v1/image/assets/TEMP/57b25d993d44a418bce0bd3b4328c1f05dd833a6?width=637"
                alt="World Map" class="w-full h-full object-contain opacity-30" />
              <div class="absolute top-16 left-10 w-4 h-4 bg-primary border-2 border-gray-200 rounded-full shadow-md">
              </div>
              <div class="absolute top-20 left-20 w-4 h-4 bg-primary border-2 border-gray-200 rounded-full shadow-md">
              </div>
              <div class="absolute top-28 right-24 w-4 h-4 bg-primary border-2 border-gray-200 rounded-full shadow-md">
              </div>
              <div
                class="absolute bottom-10 right-12 w-4 h-4 bg-primary border-2 border-gray-200 rounded-full shadow-md">
              </div>
            </div>

            <div class="space-y-5">
              <div v-for="country in countries" :key="country.name" class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3 flex-1 min-w-0">
                  <img :src="country.flag" :alt="country.name"
                    class="w-8 h-8 rounded-full flex-shrink-0 object-cover" />
                  <div class="min-w-0">
                    <div class="font-semibold text-sm text-gray-700">{{ country.name }}</div>
                    <div class="text-xs text-gray-500">{{ country.customers }}</div>
                  </div>
                </div>
                <div class="flex items-center gap-3 flex-shrink-0">
                  <div class="w-[100px] h-2 bg-gray-200 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full" :style="{ width: country.progress + '%' }"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-600 w-9 text-right">{{ country.progress }}%</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Recent Orders Table -->
          <div class="flex-1 bg-white rounded-2xl border border-gray-200 overflow-hidden">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between flex-wrap gap-3">
              <h3 class="text-lg font-semibold text-gray-700">Recent Orders</h3>
              <div class="flex items-center gap-3">
                <button
                  class="flex items-center gap-2 px-4 py-3 border border-gray-300 rounded-lg text-sm hover:bg-gray-50">
                  <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 17 15">
                    <path
                      d="M7.5 0C7.776 0 8 .224 8 .5V6.5H14.5C14.776 6.5 15 6.724 15 7C15 7.276 14.776 7.5 14.5 7.5H8V13.5C8 13.776 7.776 14 7.5 14C7.224 14 7 13.776 7 13.5V7.5H.5C.224 7.5 0 7.276 0 7C0 6.724.224 6.5.5 6.5H7V.5C7 .224 7.224 0 7.5 0Z" />
                  </svg>
                  Filter
                </button>
                <button class="px-4 py-3 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">
                  See all
                </button>
              </div>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="border-t border-b border-gray-100">
                  <tr class="text-left">
                    <th class="px-6 py-3 text-xs font-medium text-gray-500">Products</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500">Category</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500">Price</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500">Status</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                  <tr v-for="order in recentOrders" :key="order.product" class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-3">
                        <img :src="order.image" :alt="order.product"
                          class="w-12 h-12 rounded-lg object-cover flex-shrink-0" />
                        <div>
                          <div class="text-sm font-medium text-gray-700">{{ order.product }}</div>
                          <div class="text-xs text-gray-500">{{ order.variants }}</div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.category }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.price }}</td>
                    <td class="px-6 py-4">
                      <span :class="[
                        'inline-flex px-2 py-1 text-xs font-medium rounded-full',
                        order.statusType === 'success' ? 'bg-success-light text-success' :
                          order.statusType === 'warning' ? 'bg-warning-light text-warning' :
                            'bg-error-light text-error'
                      ]">
                        {{ order.status }}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </AppLayout>
</template>
