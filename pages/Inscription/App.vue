
<script>
//import HelloWorld from './components/formWizard.vue'

//var Vue = require('vue');
//import * as Vue from 'vue';

export default {
  name: 'App',

  components: {
    //HelloWorld
  },

}
</script>


<template>

  <div id="app">

    <div class="content">
      <router-view style=" position:absolute ; left: 10% ; z-index: 1 "></router-view>

      <notifications position="top right" width="400px" classes="alert alert-danger "/>

      <vue-particles
          color="#dedede"
          :particleOpacity="0.7"
          :particlesNumber="80"
          shapeType="circle"
          :particleSize="4"
          linesColor="#dedede"
          :linesWidth="1"
          :lineLinked="true"
          :lineOpacity="0.4"
          :linesDistance="150"
          :moveSpeed="3"
          :hoverEffect="true"
          hoverMode="grab"
          :clickEffect="true"
          clickMode="push"
      >
      </vue-particles>
    </div>
  </div>

</template>

