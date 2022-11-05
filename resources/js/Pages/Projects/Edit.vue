<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';


const props = defineProps({
    skills: { type: Array },
    project: { type: Object}
})

const form = useForm({
    name: props.project.name,
    skill_id: props.project.skill_id,
    image: null,
    project_url: props.project.data?.URL
})
function submit()
{
    Inertia.post(`/projects/${props.project.id}`,{

        _method: 'put',
         name: form.name,
        image:form.image,
        project_url:form.project_url,
        skill_id: form.skill_id
    }
);
}
</script>

<template>

    <Head title="Edit  Project" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Edit  Project
            </h2>
        </template>

        <div class="py-12">
            <div class=" bg-white  max-w-3xl mx-auto rounded-md  sm:px-6 lg:px-8">


                <form class="p-4" @submit.prevent="submit">
                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                        <div class="col-span-full sm:col-span-3">
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" placeholder="project name"
                            v-model="form.name" autofocus autocomplete="name" />
                        <InputError class="mt-2" :message="$page.props.errors.name" />
                    </div>
                    <div class=" col-span-full sm:col-span-3">
                        <InputLabel for="skill_id" value="Skill" />
                        <select name="skill_id" id="skill_id" v-model="form.skill_id" placeholder="Skill"
                            class="mt-1
                             block
                             pl-3
                             pr-10
                             py-2
                             text-base
                             w-full
                             border-gray-300
                              focus:border-indigo-300
                               focus:ring focus:ring-indigo-200
                                focus:ring-opacity-50
                                 rounded-md shadow-sm
                                 sm:text-sm
                                 "
                                 >

                            <option   v-for="skill in skills" :key="skill.id" :value="skill.id"      class="p-4">
                                {{ skill.name}}
                            </option>
                        </select>
                        <InputError class="mt-2" :message="$page.props.errors.skill_id" />

                    </div>
                    </div>


                    <div class="mt-4 ">
                        <InputLabel for="project_url" value="Project Url" />
                        <TextInput  id="project_url" type="text" class="mt-1 block w-full" placeholder="url of project"
                            v-model="form.project_url" autofocus autocomplete="project_url" />
                        <InputError class="mt-2" :message="$page.props.errors.project_url" />
                    </div>

                    <div class="mt-4">
                        <img class="h-20 w-auto" :src="`/storage/${props.project.image}`" :alt="$props.project.name" >
                    </div>

                    <div class="mt-4">
                        <InputLabel for="image" value="Image" />
                        <div class="flex">


                        <TextInput id="image" type="file" @input="form.image = $event.target.files[0]"
                            class=" w-full px-8 py-12 border-2 border-dashed rounded-md  " />
                        </div>
                        <InputError class="mt-2" :message="$page.props.errors.image" />
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>
                    </div>


                    <div class="flex items-center justify-center mt-4">



                        <PrimaryButton class="ml-4 " :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Update  Project
                        </PrimaryButton>
                    </div>






                </form>


            </div>
        </div>
    </AuthenticatedLayout>
</template>
