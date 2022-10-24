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
      <div class="image-carousel col-4">
        <h5>BIOS</h5>
        <div class="row col-12">
          <div class="col-10">
            TODO: CAROUSEL
            <div v-for="image in response.data.images" class="col-12 image-carousel-item">
              <img :src="image.link">
            </div>
          </div>
          <div class="col-2">
            TODO: SLIDER
          </div>
        </div>
      </div>
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
export default {
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

<style>

.subcategory-container{
  min-height: 500px;
}

.image-header{

}

.subcategory-name{

}

.image-attributes{

}

.image-container{
  min-height: 450px;
}

.image-carousel{

}

.image-display{

}

.image-carousel-item{
  height: 100px;
}

.image-hashtags{
  /*border-style: solid;*/
  /*border-color: #1a1e21;*/
  min-height: 30px;
}

</style>