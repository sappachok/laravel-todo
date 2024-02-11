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
              <p><h2 class="text-xl font-semibold leading-tight text-gray-800">Calling Methods in Inline Handlers</h2></p><br>
              <div>
                <pre>&lt;script setup&gt;
function say(message) {
  alert(message)
}
&lt;/script&gt;

&lt;template&gt;
	&lt;button @click=&quot;say(&#39;hello&#39;)&quot;&gt;Say hello&lt;/button&gt;
	&lt;button @click=&quot;say(&#39;bye&#39;)&quot;&gt;Say bye&lt;/button&gt;
&lt;/template&gt;</pre>                               
              </div>
            </div>
        </div>
    </div>
</div>
</template>
