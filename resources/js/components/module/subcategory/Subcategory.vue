<template>
  <div>
    {{ response }}
  </div>
</template>

<script>
export default {
  props: [

  ],
  data () {
    return {
      response: null
    }
  },
  methods: {
    getData(){
      axios({
        url: 'http://pet.local/api/subcategory/' + this.$route.params.slug,
        method: 'get',
      }).then(response => {
        this.response = response.data
      });
    }
  },
  created() {
    this.getData();
  },
  mounted() {
    console.log(this.response);
  }
}
</script>