<script>
export default {
name: 'LessonForm'
}
</script>
<script setup>
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Components/InputError.vue'
import InputLavel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

defineProps({
    form:{
        type: Object,
        required: true
    },
    updating: {
        type: Boolean,
        required: false,
        default: false
    }
})
defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Update Lesson' : 'Create New Lesson' }}
        </template>

        <template #description> 
            {{ updating ? 'Update the Selected Lesson' : 'Create a New Lesson From Scratch' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLavel for="name" value="Name"/>
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full"/>
                <InputError :message="$page.props.errors.name" class="mt-2"/>
                <TextInput id="description" v-model="form.description" type="text" autocomplete="description" class="mt-1 block w-full"/>
                <InputError :message="$page.props.errors.description" class="mt-2"/>
                <TextInput id="content_uri" v-model="form.content_uri" type="text" autocomplete="content_uri" class="mt-1 block w-full"/>
                <InputError :message="$page.props.errors.content_uri" class="mt-2"/>
                <SecondaryButton class="mt-2 mr-2" type="button">Upload PDF</SecondaryButton>
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Update' : 'Create' }}
            </PrimaryButton>
        </template>

    </FormSection>
</template>