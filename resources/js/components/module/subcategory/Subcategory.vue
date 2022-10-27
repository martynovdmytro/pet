<template>
  <div v-if="response" class="container-fluid subcategory-container">
    <div class="row">
      <div class="col-3">
        <h1>{{ response.data.subcategory.name }}</h1>
      </div>
      <div class="col-9">
        <h1>BIOS</h1>
      </div>
    </div>
    <div class="row image-container">
      <image-carousel :images="response.data.images" @image-link="setImageLink"></image-carousel>
      <image-display :link="imgLink"></image-display>
    </div>
  </div>
</template>

<script>
import ImageCarousel from "./template/ImageCarousel";
import ImageDisplay from "./template/ImageDisplay";
export default {
  components: {
    ImageDisplay,
    ImageCarousel

  },
  props: [

  ],
  data () {
    return {
      response: null,
      imgLink: null
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
    },
    setImageLink(link){
      this.imgLink = link;
    }
  },
  created() {
    this.getData();
  }
}
</script>

<style src="./css/subcategory.css" ref="stylesheet"></style>