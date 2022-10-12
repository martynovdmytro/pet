<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div class="nav-categories">
          <router-link to="/">
            <div class="nav-link-element">Graffiti</div>
          </router-link>
        </div>
        <div class="nav-dropdown">
          <ul>
            <li class="nav-dropdown-item">zalupa</li>
            <li class="nav-dropdown-item">pizda</li>
            <li class="nav-dropdown-item">gavno</li>
          </ul>
        </div>

        <div class="nav-categories">
          <router-link to="/about">
            <div class="nav-link-element">About</div>
          </router-link>
        </div>
        <div class="nav-categories">
          <router-link to="/valera">
            <div class="nav-link-element">Valera</div>
          </router-link>
        </div>
      </div>
      <div class="col-3 nav-search">
        Search Bar
      </div>
      <div class="col-3 nav-userbar">
        Username
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: 'foo'
    }
  },
  mounted() {

  },
  methods: {

  },
}
</script>

<style src="./css/navbar-component.css" ref="stylesheet"></style>