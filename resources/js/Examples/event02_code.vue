<script setup>
import { ref } from 'vue'
</script>

<style>
pre {
    background-color: #222222;
    color: #ffffff;
    padding:15px;
}
</style>

<template>

<div class="py-5">
    <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <p><h2 class="text-xl font-semibold leading-tight text-gray-800">Method Handlers</h2></p><br>
              <div>
                <pre>&lt;script setup&gt;
import { ref } from &#39;vue&#39;

const name = ref(&#39;Vue.js&#39;)

function greet(event) {
  alert(`Hello ${name.value}!`)
  // `event` is the native DOM event
  if (event) {
    alert(event.target.tagName)
  }
}
&lt;/script&gt;

&lt;template&gt;
	&lt;button @click=&quot;greet&quot;&gt;Greet&lt;/button&gt;
&lt;/template&gt;</pre>                               
              </div>
            </div>
        </div>
    </div>
</div>
</template>
