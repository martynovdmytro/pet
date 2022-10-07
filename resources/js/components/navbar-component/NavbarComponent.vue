<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div class="nav-button">
          <button class="button-53">
            <h4>Graffiti</h4>
          </button>
        </div>
        <div class="nav-button">
          <button class="button-53">
            <h4>Street Art</h4>
          </button>
        </div>
        <div class="nav-button">
          <button class="button-53">
            <h4>Calligraphy</h4>
          </button>
        </div>
        <div class="nav-button">
          <button class="button-53">
            <h4>Sketch</h4>
          </button>
        </div>
        <div class="nav-button">
          <button class="button-53">
            <h4>Videos</h4>
          </button>
        </div>
      </div>
      <div class="col-3 nav-search">
        Search Bar
      </div>
      <div class="col-3 nav-userbar">
        Username
      </div>
    </div>
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
    <router-link to="/valera">Valera</router-link>
  </div>
</template>

<style src="./css/navbar-component.css" ref="stylesheet"></style>