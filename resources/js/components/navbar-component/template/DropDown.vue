<template>
<!--  <ul class="nav-dropdown-list">-->
  <div class="nav-dropdown-list">
    <router-link v-for="subcategory in subcategories" to="#" class="nav-dropdown-item">{{ subcategory.name }}</router-link>
  </div>
<!--    <li v-for="subcategory in subcategories" class="nav-dropdown-item">{{ subcategory.name }}</li>-->
<!--  </ul>-->
</template>

<script>
export default {
  props: [
      'subcategories'
  ],
  data(){
    return {

    }
  },
  methods: {

  },
  mounted() {

  }
}
</script>