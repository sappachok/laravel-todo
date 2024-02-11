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
              <p><h2 class="text-xl font-semibold leading-tight text-gray-800">Usage in &lt;script setup&gt;</h2></p><br>              
              <p><b>Parent.vue</b></p>
              <div>
                <pre>&lt;script&gt;
  export default {
    data() {
      return {
        uppercase: &#39;&#39;
      }
    },
    methods: {
        handleCustomChange (s) {
          this.uppercase = s
        }
    }
  }

&lt;/script&gt;

&lt;template&gt;
  &lt;my-text-input @custom-change=&quot;handleCustomChange&quot; /&gt; 
  &lt;p&gt;Uppercase: {{ uppercase }}&lt;/p&gt;
&lt;/template&gt;</pre>                               
              </div>
              <br>
              <p><b>MyTextInput.vue</b></p>
              <div>
                <pre>&lt;script setup&gt;
const emit = defineEmits([&#39;customChange&#39;])

const handleChange = (event) =&gt; {
  emit(&#39;customChange&#39;, event.target.value.toUpperCase())
}
&lt;/script&gt;</pre>                               
              </div>
            </div>
        </div>
    </div>
</div>
</template>
