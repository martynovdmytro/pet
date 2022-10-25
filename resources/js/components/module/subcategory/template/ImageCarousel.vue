<template>
  <div class="image-carousel col-4">
    <h5>BIOS</h5>
    <div class="row col-12">
      <div class="col-10">
        TODO: CAROUSEL
        <div v-for="image in images" class="col-12 image-carousel-item">
          <img :src="image.link">
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
}
</script>