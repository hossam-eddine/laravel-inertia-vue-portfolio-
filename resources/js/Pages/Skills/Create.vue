<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({

    name: null,
    image: null
})
function submit() {
    form.post(route('skills.store'))
}


</script>


<template>

    <Head title="Create New Skill" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Skill
            </h2>
        </template>

        <div class="py-12">
            <div class=" bg-white  max-w-2xl mx-auto rounded-md  sm:px-6 lg:px-8">


                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" placeholder="skill name"
                            v-model="form.name" autofocus autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="image" value="Image" />
                        <div class="flex">


                            <TextInput id="image" type="file" @input="form.image = $event.target.files[0]"
                                class=" w-full px-8 py-12 border-2 border-dashed rounded-md  " />
                        </div>
                        <InputError class="mt-2" :message="form.errors.image" />
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>
                    </div>
                    <div class="flex items-center justify-center mt-4">


                        <PrimaryButton class="ml-4 " :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Add Skill
                        </PrimaryButton>
                    </div>






                </form>


            </div>
        </div>
    </AuthenticatedLayout>


</template>
