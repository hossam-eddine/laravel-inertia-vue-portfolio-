<script setup>
import AuthenticatedLayout  from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import FlashMessageVue from '@/Components/FlashMessage.vue';
import { Inertia } from '@inertiajs/inertia';
const props = defineProps({
    projects:{type: Object },

})

const deleteproject = (id) => {

if (confirm('Are you sure you want to delete this organization?')){

    Inertia.delete(`projects/${id}`)
}
}





</script>

<template>

    <Head title="Projects" />

    <FlashMessageVue v-if="$page.props.flash.message"   :message=" $page.props.flash.message " />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>


        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <div class="flex justify-end  ">
                        <Link
                          :href="route('projects.create')"
                          class=" text-white bg-black hover:bg-gray-700 px-4 py-2 rounded-md">Add
                        Project</Link>

                    </div>

                    <div class="mt-4 overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Image
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>

                <th scope="col" class="py-3 px-6">
                    URL
                </th>
                <th scope="col" class="py-3 px-6">
                    Skill

                </th>
                <th scope="col" class="py-3 px-6">
                    Edit
                </th>
                <th scope="col" class="py-3 px-6">
                    Remove
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="project in projects.data" :key="project.id"  class="bg-white border-b border-gray-700">

                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                    {{ project.ID }}
                </th>
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap  ">
                    <img class="w-12 h-12 rounded-full" :src="project.IMAGE" alt="{{ project.NAME }}" srcset="">
                </th>
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap  text-center ">
                    {{ project.NAME }}
                </th>



                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                 <Link v-if="project.URL" :href="project.URL" class="text-blue-400 underline" >
                    {{ project.URL}}
                </Link>
                  <span v-else >Not found </span>
                </th>
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap  text-center ">
                    {{ project.Skill.NAME }}
                </th>
                <th class="py-4 px-6">
                    <Link  :href="route('projects.edit',project.ID)" class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit</Link>
                </th>
                <th class="py-4 px-6">
                    <button   @click="deleteproject(project.ID)" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                </th>

            </tr>



        </tbody>
    </table>
</div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
