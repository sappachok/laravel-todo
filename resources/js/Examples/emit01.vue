<script setup>
import { ref } from 'vue'
import ChildComponent from "@/Examples/emit01_child.vue";
const count = ref(0)

// can also call a function from our template `<ChildComponent @add="add" />`
// const add = (i) => count.value += i

</script>

<template>
<div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
	<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
		<div class="p-6 bg-white border-b border-gray-200">		
			<ChildComponent @add="(i) => count += i" /> 
			<p>Count: {{ count }}</p>
		</div>
	</div>
</div>			
</template>