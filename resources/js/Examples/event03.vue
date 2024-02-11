<script setup>
import { ref } from 'vue'
import PrimaryButton from "@/Components/PrimaryButton.vue";

function say(message) {
  alert(message)
}

function greet(event) {
  alert(`Hello ${name.value}!`)
  // `event` is the native DOM event
  if (event) {
    alert(event.target.tagName)
  }
}
</script>

<template>
<div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
	<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
		<div class="p-6 bg-white border-b border-gray-200">
      <PrimaryButton @click="say('hello')">Say hello</PrimaryButton><br><br>
	    <PrimaryButton @click="say('bye')">Say bye</PrimaryButton>
		</div>
	</div>
</div>
</template>