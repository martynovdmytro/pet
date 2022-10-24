<template>
  <div v-if="response">
    {{ response }}
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