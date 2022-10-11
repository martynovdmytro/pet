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

      axios({
        url: 'http://pet.local/api/about',
        method: 'get',
      }).then(function (response) {
        console.log(response);
      });
    }

  },
  created() {
    this.getData();
  }
}
</script>