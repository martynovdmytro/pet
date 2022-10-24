<template>
  <div class="col-10 content-box-left">
    <div class="col-12 breadcrumbs-container">Breadcrumbs</div>
    <div class="col-12 router-view-cointer">
      <router-view :key="$route.fullPath"></router-view>
    </div>
  </div>
</template>

<script>
export default {

}

</script>

<style src="./css/content-box-left.css" ref="stylesheet"></style>