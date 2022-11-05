<template>
   <Link
   :href="project.URL" class="group flex flex-col items-center text-center  cursor-pointer"
   v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :visible="{
      opacity: 1,
      y: 0,
    }"

   >
    <div class="mb-6">
        <img class="rounded-2xl h-56" :src="project.IMAGE" :alt="project.NAME"/>

    </div>
    <span class="dark:group-hover:text-blue-700  capitalize text-blue-800 dark:text-white text-sm mb-3">
    {{ project.Skill.NAME }}
    </span>

    <h3 class="group-hover:text-blue-700 font-semibold capitalize mb-3 dark:text-white" >{{ project.NAME }}</h3>
   </Link>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
defineProps({
    project:{type: Object}
})
</script>
