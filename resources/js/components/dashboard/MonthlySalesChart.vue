<script setup lang="ts">
import { ref } from 'vue'
import { Chart as ChartJS, CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend } from 'chart.js'
import { Bar } from 'vue-chartjs'

ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend)

const chartRef = ref()

const chartData = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  datasets: [
    {
      label: 'Sales',
      data: [200, 300, 250, 350, 200, 400, 250, 420, 350, 380, 300, 340],
      backgroundColor: '#465FFF',
      borderRadius: 8,
      borderSkipped: false,
      barPercentage: 0.7,
      categoryPercentage: 0.7,
    }
  ]
}

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
      displayColors: false,
      callbacks: {
        label: function (context: any) {
          return '$' + context.parsed.y
        }
      }
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
      max: 450,
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
        stepSize: 100,
        padding: 12
      }
    }
  }
} as any
</script>

<template>
  <Bar :data="chartData" :options="chartOptions" ref="chartRef" />
</template>
