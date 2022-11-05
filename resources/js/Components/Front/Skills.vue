<template>

        <section class="dark:bg-transparent   py-16  ">
            <div

            class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 ">
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

                class="flex items-center justify-center"
                v-for="skill in skills.data" :key="skill.ID"
                >
                <img

                :src="skill.IMAGE" :alt="skill.NAME" class="h-20 w-auto">

                </div>

            </div>

        </section>

</template>

<script setup>
defineProps({
    skills:{ type:Object}
})

</script>
