<script setup>
import { ref } from 'vue'
import PrimaryButton from "@/Components/PrimaryButton.vue";

const counter = ref(0)
</script>

<template>
<div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
	<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
		<div class="p-6 bg-white border-b border-gray-200">	
			<PrimaryButton @click="counter++">Add 1</PrimaryButton>
			<br><br>
			<p>The button above has been clicked {{ counter }} times.</p>
		</div>
	</div>
</div>  	
</template>