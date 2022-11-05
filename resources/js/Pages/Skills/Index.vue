<script setup>
import AuthenticatedLayout  from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
import FlashMessageVue from '@/Components/FlashMessage.vue';
import { Inertia } from '@inertiajs/inertia';




const props = defineProps({
    skills:{ type: Object},



})



const deleteskill = (id) => {

    if (confirm('Are you sure you want to delete this organization?')){

        Inertia.delete(`skills/${id}`)
    }
}






</script>

<template>
        <FlashMessageVue v-if="$page.props.flash.message"   :message=" $page.props.flash.message " />

    <Head title="Skills"/>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-end  ">
                         <Link :href="route('skills.create')" class=" text-white bg-black hover:bg-gray-700 px-4 py-2 rounded-md">Add Skill</Link>
                        </div>

<div class="mt-4 overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Image
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
            <tr v-for="skill in skills.data" :key="skill.id"  class="bg-white border-b border-gray-700">
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                    {{ skill.ID }}
                </th>
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap  text-center ">
                    {{ skill.NAME }}
                </th>
                <th
                scope="row"
                 class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap  ">
                    <img class="w-12 h-12 rounded-full" :src="skill.IMAGE" alt="{{ skill.NAME }}" srcset="">
                </th>
                <th class="py-4 px-6">
                    <Link :href="route('skills.edit',skill.ID)" class="font-bold     text-green-600  hover:underline">Edit</Link>
                </th>
                <th class="py-4 px-6">
                 <button

                  @click="deleteskill(skill.ID)"

                  class="font-bold text-red-600  hover:underline cursor-pointer">Remove</button>                </th>

            </tr>



        </tbody>
    </table>
</div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>




























<style>

</style>
