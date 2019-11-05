<template>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="/svg/fridge.svg" width="32" height="32">
                    Cloud Fridge
                </a>
                <a role="button" class="navbar-burger burger" v-on:click="toggle()" v-bind:class="{ 'is-active': isActive }"><span></span><span></span><span></span></a>
            </div>
            <div class="navbar-menu" v-bind:class="{ 'is-active': isActive }">
                <div class="navbar-start">
                    <a class="navbar-item" href="/home">Home</a>
                    <a class="navbar-item" href="/ocr">OCR</a>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary is-inverted" href="/register">Sign up</a>
                            <a class="button is-primary is-inverted" href="/login">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
  data: function () {
    return {
      isActive: false
    }
  },
  methods: {
      toggle: function() {
        this.isActive = !this.isActive
      }
  }
}
</script>
