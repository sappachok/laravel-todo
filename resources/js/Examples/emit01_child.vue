<script setup>
import { ref } from 'vue'
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
    <PrimaryButton @click="$emit('add', Math.random())">
      Add Math.random()
    </PrimaryButton>
</template>