<template>
  <div class="col-3">
    <div class="row col-12">
      <div class="col-10">
        <div v-for="image in images" class="col-12">
          <img :src="image.link" @click="getImageLink" class="image-preview-item hover-shadow">
        </div>
      </div>
      <div class="col-2">
        TODO: SLIDER
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
      'images'
  ],
  data () {
    return {
      link: null,
    }
  },
  methods: {
    getImageLink(event){
      this.link = event.target.getAttribute('src');
      this.$emit('image-link', this.link);
    }
  },
  mounted() {

  }
}
</script>