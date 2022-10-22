<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div v-for="category in categories" class="nav-categories">
          <div :id="category.name">
            <div class="nav-link-element">{{ category.name }}</div>
          </div>
          <div class="nav-dropdown hide">
<!--            <drop-down></drop-down>-->
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

export default {
  props: ['categories'],
  component: {

  },
  data () {
    return {
    }
  },
  created() {

  },
  methods: {

  }
}
</script>

<style src="./css/navbar-component.css" ref="stylesheet"></style>