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
              <p><b>Parent.vue</b></p>
              <div>
                <pre>&lt;script setup&gt;
import { ref } from &#39;vue&#39;
import ChildComponent from &quot;@/Examples/emit01_child.vue&quot;;

const count = ref(0)

// can also call a function from our template `&lt;ChildComponent @add=&quot;add&quot; /&gt;`
// const add = (i) =&gt; count.value += i

&lt;/script&gt;

&lt;template&gt;
  &lt;ChildComponent @add=&quot;(i) =&gt; count += i&quot; /&gt; 
  &lt;p&gt;Count: {{ count }}&lt;/p&gt;
&lt;/template&gt;</pre>                               
              </div>
              <br>
              <p><b>Child.vue</b></p>
              <div>
                <pre>&lt;template&gt;
  &lt;button @click=&quot;$emit(&#39;add&#39;, Math.random())&quot;&gt;
    Add Math.random()
  &lt;/button&gt;
&lt;/template&gt;</pre>                               
              </div>              
            </div>
        </div>
    </div>
</div>
</template>
