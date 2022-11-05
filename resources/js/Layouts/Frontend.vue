<template>




<div class="bg-white dark:bg-gray-900">
    <!--Header-->
  <HeaderVue/>
  <div class="min-h-screen">
    <slot/>
  </div>

  <FooterVue/>
</div>
</template>
<script setup>

import HeaderVue from '@/Components/Front/Header.vue';
import FooterVue from '@/Components/Front/Footer.vue';
</script>

<style>

</style>
