<template>
  <div class="col-10 content-box-left">
    <breadcrumbs></breadcrumbs>
    <div class="col-12 router-view-cointer">
      <router-view :key="$route.fullPath"></router-view>
    </div>
  </div>
</template>

<script>
import Breadcrumbs from "./template/Breadcrumbs";
export default {
  components: {
    Breadcrumbs
  }
}
</script>

<style src="./css/content-box-left.css" ref="stylesheet"></style>