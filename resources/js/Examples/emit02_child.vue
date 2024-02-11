<script>
  export default {
      methods: {
          handleChangeChild (event) {
              this.$emit("customChangeParent", event.target.value.toUpperCase())
          }
      }
  }
</script>

<template>
  <div>
    <label>My Custom Input</label><br>
    <input type="text" placeholder="Custom input!" @input="handleChangeChild" />
  </div>
</template>