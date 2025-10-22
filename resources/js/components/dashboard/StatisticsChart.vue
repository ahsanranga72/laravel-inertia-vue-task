<script setup lang="ts">
import { ref } from 'vue'
import { Chart as ChartJS, CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend, Filler } from 'chart.js'
import { Line } from 'vue-chartjs'

ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Title, Tooltip, Legend, Filler)

const chartRef = ref()

const chartData = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  datasets: [
    {
      label: 'Primary Line',
      data: [500, 450, 400, 550, 500, 600, 550, 700, 650, 700, 600, 650],
      borderColor: '#465FFF',
      backgroundColor: 'rgba(70, 95, 255, 0.1)',
      fill: true,
      borderWidth: 2,
      tension: 0.4,
      pointRadius: 0,
      pointHoverRadius: 6,
      pointBackgroundColor: '#465FFF',
      pointBorderColor: '#FFF',
      pointBorderWidth: 2,
    },
    {
      label: 'Secondary Line',
      data: [350, 320, 280, 350, 320, 400, 320, 450, 380, 420, 350, 380],
      borderColor: '#9CB9FF',
      backgroundColor: 'rgba(156, 185, 255, 0.05)',
      fill: true,
      borderWidth: 2,
      tension: 0.4,
      pointRadius: 0,
      pointHoverRadius: 6,
      pointBackgroundColor: '#9CB9FF',
      pointBorderColor: '#FFF',
      pointBorderWidth: 2,
    }
  ]
} as any

const chartOptions = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: false
    },
    tooltip: {
      backgroundColor: 'rgba(16, 24, 40, 0.8)',
      padding: 12,
      cornerRadius: 8,
      titleFont: {
        family: "'Outfit', sans-serif",
        size: 14,
        weight: 'bold' as any
      },
      bodyFont: {
        family: "'Outfit', sans-serif",
        size: 14
      },
      borderColor: '#E4E7EC',
      borderWidth: 1,
      mode: 'index' as any,
      intersect: false
    }
  },
  scales: {
    x: {
      grid: {
        display: false,
        drawBorder: false
      },
      ticks: {
        font: {
          family: "'Outfit', sans-serif",
          size: 12
        },
        color: '#667085',
        padding: 8
      }
    },
    y: {
      beginAtZero: true,
      max: 1000,
      grid: {
        color: '#F2F4F7',
        drawBorder: false,
        lineWidth: 1
      },
      ticks: {
        font: {
          family: "'Outfit', sans-serif",
          size: 12
        },
        color: '#667085',
        stepSize: 200,
        padding: 12,
        callback: function (value: any) {
          return value.toLocaleString()
        }
      }
    }
  }
} as any
</script>

<template>
  <Line :data="chartData" :options="chartOptions" ref="chartRef" />
</template>
