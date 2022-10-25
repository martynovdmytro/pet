<template>
  <div v-if="response" class="container-fluid subcategory-container">
    <div class="row image-header">
      <div class="subcategory-name col-4">
        <h1>{{ response.data.subcategory.name }}</h1>
      </div>
      <div class="image-attributes col-8">
        <h1>2022</h1>
      </div>
    </div>
    <div class="row image-container">
      <image-carousel :images="response.data.images"></image-carousel>
      <div class="image-display col-8">
        TODO: DISPLAY IMAGE
        <div class="image-hashtags col-12">
          TODO: HASHTAGS
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ImageCarousel from "./template/ImageCarousel";
export default {
  components: {
    ImageCarousel

  },
  props: [

  ],
  data () {
    return {
      response: null,
    }
  },
  methods: {
    getData(){
      axios({
        url: 'http://pet.local/api/subcategory/' + this.$route.params.slug,
        method: 'get',
      }).then(
          response => {
            if (response.status == 200) {
              this.response = response.data;
            } else {
              alert("Oops, something wrong");
            }
      });
    }
  },
  created() {
    this.getData();
  }
}
</script>

<style src="./css/subcategory.css" ref="stylesheet"></style>