<template>
  <div id="app">
    <div class="wrapper">
      <div class="left-wrapper">
        <profile/>
        <div style="clear:both"></div>
        <navigation/>
      </div>
      <div class="right-wrapper"><router-view/></div>
    </div>
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&subset=latin-ext');

*{
  box-sizing: border-box;
}
body{
  padding: 0;
  margin: 0;
}
#app {
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #141F35;
  background: url('./assets/tester.png') no-repeat center center fixed;
  background-size: cover;
  height: 100vh;
  overflow: hidden;
}
.wrapper{
  max-width: 1180px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 70px;
}
.left-wrapper{
  width: 26%;
  float: left;
  background:rgba(255,255,255, 0.85);
  height: 620px;
  border-radius: 6px 0 0 6px;
  padding: 4%;
  position: relative;
}
.right-wrapper{
  float: left;
  background: white;
  width:74%;
  border-radius: 0 6px 6px 0;
  height: 620px;
  padding: 3% 4%;
}
.orange{
  color:#F4894C;
}
.paginate-links{
  list-style: none;
  margin: 0;
  padding: 0;
}
.paginate-links > li{
  display: inline;
  padding: 10px;
  cursor: pointer;
}
.poster-h1 {
  text-transform: uppercase;
  font-size: 24px;
  font-weight: 900;
}
</style>

<script>
import profile from '@/components/profile.vue';
import navigation from '@/components/navigation.vue';
export default {
  components:{
    profile,
    navigation,
  }
}
</script>
