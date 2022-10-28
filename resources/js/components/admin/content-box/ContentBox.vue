<template>
  <div class="admin-content-box">
    <div class="info-panel">
      <h1>TODO: INFO PANEL</h1>
    </div>
    <div class="col-12 content-display">
      <router-view :key="$route.fullPath"></router-view>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContentBox"
}
</script>

<style>
.admin-content-box{
  min-height: 580px;
  width: 79%;
  margin-bottom: 5px;

}

.info-panel{
  min-height: 50px;
}

.content-display{
  min-height: 490px;
}
</style>