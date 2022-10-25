<template>
  <div class="col-4">
    <div class="row col-12">
      <div class="col-10">
        <div v-for="image in images" class="col-12">
          <img :src="image.link" class="image-preview-item hover-shadow">
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

    }
  },
  mounted() {
    $(document).on("click", ".image-preview-item", function () {
      let link = $(this).attr("src");
      alert(link);
    });
  }
}
</script>