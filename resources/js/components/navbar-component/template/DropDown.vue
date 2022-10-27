<template>
  <div class="nav-dropdown-list">
    <router-link v-for="subcategory in subcategories" :to="'/subcategory/' + subcategory.slug" class="nav-dropdown-item">{{ subcategory.name }}</router-link>
  </div>
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