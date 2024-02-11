<script setup>
import MyTextInput from "@/Examples/emit02_child.vue";
</script>

<script>
export default {
	data() {
		return {
			uppercase: ''
		}
	},
	methods: {
		handleCustomChange (s) {
			this.uppercase = s
		}
	}
}

</script>

<template>
<div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
	<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
		<div class="p-6 bg-white border-b border-gray-200">			
			<MyTextInput @custom-change-parent="handleCustomChange" /><br>
			<p><b>Uppercase:</b> {{ uppercase }}</p>
  		</div>
	</div>
</div>
</template>