<template>
    <div class="atom-spinner bg-gray-900 " >
  <div class="spinner-inner  ">
    <div class="spinner-line  "></div>
    <div class="spinner-line"></div>
    <div class="spinner-line"></div>


    <div class="spinner-circle text-blue-600">
      &#9679;
    </div>
  </div>
</div>
</template>

<script setup>








</script>



<style scoped>


.atom-spinner, .atom-spinner * {
      box-sizing: border-box;

    }

    .atom-spinner {

      display: flex;
      height: 100vh;
      width: 100%;
      z-index: -10

    }

    .atom-spinner .spinner-inner {
      position: relative;
      display: block;
      margin:  auto;

      height: 200px;
      width: 200px;
    }

    .atom-spinner .spinner-circle {
      display: block;
      position: absolute;

      font-size: calc(200px * 0.24);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .atom-spinner .spinner-line {
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      animation-duration: 1s;
      border-left-width: calc(200px / 25);
      border-top-width: calc(200px / 25);
      border-left-color: rgb(29, 70, 255);
      border-left-style: solid;
      border-top-style: solid;
      border-top-color: transparent;
    }

    .atom-spinner .spinner-line:nth-child(1) {
      animation: atom-spinner-animation-1 1s linear infinite;
      transform: rotateZ(120deg) rotateX(66deg) rotateZ(0deg);
    }

    .atom-spinner .spinner-line:nth-child(2) {
      animation: atom-spinner-animation-2 1s linear infinite;
      transform: rotateZ(240deg) rotateX(66deg) rotateZ(0deg);
    }

    .atom-spinner .spinner-line:nth-child(3) {
      animation: atom-spinner-animation-3 1s linear infinite;
      transform: rotateZ(360deg) rotateX(66deg) rotateZ(0deg);
    }

    @keyframes atom-spinner-animation-1 {
      100% {
        transform: rotateZ(120deg) rotateX(66deg) rotateZ(360deg);
      }
    }

    @keyframes atom-spinner-animation-2 {
      100% {
        transform: rotateZ(240deg) rotateX(66deg) rotateZ(360deg);
      }
    }

    @keyframes atom-spinner-animation-3 {
      100% {
        transform: rotateZ(360deg) rotateX(66deg) rotateZ(360deg);
      }
    }
</style>
