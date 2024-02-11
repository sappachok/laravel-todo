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

<div class="py-12">
    <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <p><h2 class="text-xl font-semibold leading-tight text-gray-800">Inline Handlers</h2></p><br>
              <div>
                <pre>&lt;script setup&gt;
import { ref } from &#39;vue&#39;

const counter = ref(0)
&lt;/script&gt;

&lt;template&gt;
&lt;button @click=&quot;counter++&quot;&gt;Add 1&lt;/button&gt;
&lt;p&gt;The button above has been clicked {{ counter }} times.&lt;/p&gt;
&lt;/template&gt;</pre>                               
              </div>
            </div>
        </div>
    </div>
</div>
</template>
