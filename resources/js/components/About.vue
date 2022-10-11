<template>
  <div>
    {{ zalupa }}
  </div>
</template>

<script>
import axios from "axios";

export default {
  data(){
    return {
      zalupa: null,
    }
  },
  methods: {
    getData(){
      axios.get('http://pet.local/api/about')
          .then(function (response) {
            // handle success
            console.log(response.data)
          });

      return "PIZDA"
    }

  },
  created() {
    this.zalupa = this.getData();
  }
}
</script>