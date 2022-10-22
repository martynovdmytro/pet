<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div v-for="category in categories.categories" class="nav-categories">
          <div :id="category.name">
            <div class="nav-link-element">{{ category.name }}</div>
          </div>
          <div class="nav-dropdown">
            <drop-down :subcategories="category.subcategories"></drop-down>
          </div>
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
  props: [
      'categories'
  ],
  component: {

  },
  data () {
    return {
    }
  },
  created() {

  },
  methods: {

  },
  mounted() {

  }
}
</script>

<style src="./css/navbar-component.css" ref="stylesheet"></style>