<template>
  <div>
    About
  </div>
</template>

<script>
import axios from "axios";

export default {
  created() {
    axios.get('http://pet.local/api/about')
        .then(function (response) {
          // handle success
          console.log(response.data);
        });
  }
}
</script>