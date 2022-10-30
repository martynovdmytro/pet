<template>
  <div class="col-2 admin-left-panel">
    <div class="col-12 menu-title">
      <h3>MAIN MENU</h3>
    </div>
    <div class="menu-button-block">
      <div class="menu-button">button</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "LeftPanel"
}
</script>

<style>

.menu-button-block{
  display: block;
  min-height: 30px;
}

.menu-button{
  border-style: groove;
  border-color: black;
  height: 30px;
  background-color: aqua;
}

.admin-left-panel{
  background-color: #00CED1;
  height: 490px;
  margin-top: 50px;
  margin-bottom: 5px;
  border-style: groove;
  border-color: black;
}

.menu-title{
  min-height: 50px;
}
</style>