<template>
    <nav class="navbar is-info is-fixed-top is-bold">
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
                    <!-- <div class="tabs is-left">
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/fridges"> Fridges</a></li>
                            <li><a href="/ocr">OCR</a></li>
                        </ul>
                    </div> -->

                    <a class="navbar-item" href="/home">Home</a>
                    <a class="navbar-item" href="/fridges">Fridges</a>
                    <a class="navbar-item" href="/ocr">OCR</a>


                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-white is-outlined" href="/register"><strong>Sign up</strong></a>
                            <a class="button is-white is-outlined" href="/login"><strong>Login</strong></a>
                            <form action="/logout" method="POST">
                                <button class="button" type="submit">Logout</button>
                            </form>
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
