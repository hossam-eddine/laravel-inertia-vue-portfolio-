<template>

    <!-- ====== Portfolio Section Start -->

<section id="portfolio"

  class="py-12 lg:py-32 min-h-[1400px]  bg-gray-100  dark:bg-gray-800 "
>


<div 
v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :visible="{
      opacity: 1,
      y: 0,
    }"
class="container mx-auto  ">
    <div class="flex flex-col items-center text-center">
        <h2 class="text-3xl  lg:text-4xl font-medium lg:font-extrabold mb-5 dark:text-gray-200">My Portfolio</h2>
    <p class="text-base text-gray-500 mb-16 lg:mb-24 max-w-[520px] dark:text-gray-400 dark:font-extrabold">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis asperiores provident illum harum reprehenderit molestiae eos suscipit quibusdam ab ratione!
    </p>
    </div>

    <Projects :projects="projects" :skills="skills" />


</div>

</section>
<!-- ====== Portfolio Section End -->

</template>

<script setup>
import Projects from '@/Components/Front/Projects.vue'
defineProps({
    skills:{ type: Object},
    projects: {type: Object}
})
</script>
