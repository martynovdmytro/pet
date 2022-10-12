<template>
  <div>
    {{ foo }}
  </div>
</template>

<script>
import axios from "axios";

export default {
  data(){
    return {
      foo: null
    }
  },
  created() {
    this.getData();
  },
  methods: {
    getData(){
      axios({
        url: 'http://pet.local/api/about',
        method: 'get',
      }).then(response => {
        this.foo = response.data
      });
    }
  }
}
</script>