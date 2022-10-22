<template>
  <ul>
    <li v-for="subcategory in subcategories" class="nav-dropdown-item">{{ subcategory.name }}</li>
  </ul>
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