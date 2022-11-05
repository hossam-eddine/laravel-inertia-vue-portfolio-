<template>
   <div class="container mx-auto p-5 ">
    <nav class="mb-4 border-b-2 border-blue-700 dark:border-gray-700">
        <ul class="flex flex-col lg:flex-row   flex-wrap  justify-evenly items-center dark:text-gray-400" >

            <li class="cursor-pointer capitalize m-3">
                <button
                :class="[
                    selectedskill =='all' ? 'bg-blue-600 text-white': ''
            ]"
                @click="filterProjects('all')"
                class="inline-block p-3 rounded-md  font-bold  dark:font-extralight " >
                   All
                </button>

            </li>
            <li v-for="skill in skills.data" :key="skill.ID" class="cursor-pointer capitalize m-3 ">
                <button
                :class="[
                    selectedskill ==skill.ID ? 'bg-blue-600 text-white' : ''
                ]"
                @click="filterProjects(skill.ID)"
                class="inline-block p-3  rounded-md font-bold " >
                    {{ skill.NAME }}
                </button>

            </li>
            </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3  lg:gap-8">
        <ProjectVue v-for="project in filteredProjects" :key="project.ID" :project="project" />

    </section>
   </div>
</template>

<script setup>
import ProjectVue from '@/Components/Front/Project.vue'
import { ref } from 'vue';
const props  = defineProps({
    skills: {type:Object },
    projects:{ type: Object }
})

const filteredProjects = ref(props.projects.data)

const selectedskill = ref('all')

const filterProjects = (id) =>
{

        if (id=='all') {

           filteredProjects.value=props.projects.data;
           selectedskill.value = 'all'
        }
        else
        {

            filteredProjects.value = props.projects.data.filter(project=> project.Skill.ID===id);
        }

        selectedskill.value = id;

}
</script>
