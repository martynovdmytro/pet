<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div class="nav-categories">
          <div id="graffiti">
            <router-link to="/graffiti">
              <div class="nav-link-element">Graffiti</div>
            </router-link>
          </div>
          <div class="nav-dropdown hide">
            <drop-down></drop-down>
          </div>
        </div>
        <div class="nav-categories">
          <div>
            <router-link to="/art">
              <div class="nav-link-element">Art</div>
            </router-link>
          </div>
          <div class="nav-dropdown hide">
            <drop-down></drop-down>
          </div>
        </div>
        <div class="nav-categories">
          <router-link to="/street-art">
            <div class="nav-link-element">Street Art</div>
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
import DropDown from "./template/DropDown";

export default {
  components: {
    DropDown
  },
  data() {
    return {
      categories: null
    }
  },
  created() {

  },
  mounted() {
    // TODO: jQuery events
  },
  methods: {

  }
}
</script>

<style src="./css/navbar-component.css" ref="stylesheet"></style>