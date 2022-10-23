<template>
  <div class="container-fluid">
    <div class="row col-12 nav-base">
      <div class="row col-5 nav-container">
        <div v-for="category in categories.categories" class="nav-category" :category-id="category.id">
          <div class="nav-link-element">{{ category.name }}</div>
          <div class="nav-dropdown hide" :id="'dropdown-' + category.id">
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
    $(document).on("mouseover", ".nav-category", function () {

      let id = $(this).attr("category-id");
      $("#dropdown-" + id).removeClass("hide");

      $(document).on("mouseout", ".nav-category", function () {
        $("#dropdown-" + id).addClass("hide");
      });
    });
  }
}
</script>

<style src="./css/navbar-component.css" ref="stylesheet"></style>