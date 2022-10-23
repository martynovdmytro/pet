<template>
  <div class="nav-dropdown-list">
    <router-link v-for="subcategory in subcategories" :to="'/api/subcategory/' + subcategory.id" class="nav-dropdown-item">{{ subcategory.name }}</router-link>
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