<script setup>
import { Head} from '@inertiajs/inertia-vue3';
import Front from '@/Layouts/Frontend.vue';
import HeroVue from '@/Components/Front/Hero.vue';
import AboutVue from '@/Components/Front/About.vue';
import SkillsVue from '@/Components/Front/Skills.vue';
import PortfolioVue from '@/Components/Front/Portfolio.vue';
import ServicesVue from '@/Components/Front/Services.vue';
import ContactVue from '@/Components/Front/Contact.vue';
import LoaderVue from '@/Components/Loader.vue';


import {onMounted,ref, onBeforeMount} from 'vue'

const props = defineProps({
  skills: {type: Object},
  projects: {type: Object}

})
const loaded= ref(false)


window.addEventListener('load',function (){

   
    loaded.value = true
  
})
onMounted(() =>{

  setTimeout(()=>loaded.value = true,3000 )
    
}
 )
   





</script>

<template>
    <Head title="Welcome" />
  <LoaderVue  v-if="!loaded"  />

    <Front v-if="loaded">
      <!--Hero section -->
      <HeroVue />


        <!--About-->
        <AboutVue/>
        <!--Skills-->
       <SkillsVue :skills="props.skills" />
        <!--Portfolio-->
      <PortfolioVue :skills="props.skills" :projects="props.projects"/>
        <!--Services-->
        <ServicesVue/>
        <!--Contact-->
        <ContactVue/>
    </Front>
</template>
