<template>
    <FormSection @submitted="$emit('submit')">
        <!-- Template titulo -->
        <template #title>
            <!-- Evaluamos mediante una ternaria si estamos creando una categoria o actualizando
            Evaluamos la ternaria contra el props "updating" Si updating es true: update category, caso contrario: create category -->
            {{ updating ? 'Update Category' : 'Create Category' }}
        </template>
        <!-- Template description -->
        <template #description>
            {{ updating ? 'Update The Selected Category' : 'Create New Category from Scratch' }}
        </template>
        <!-- Template form -->
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="name" value="Name" />
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full" />
                <!-- Particularidad de Inertia, pasar un mensaje de error -->
                <InputError :message="$page.props.errors.name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Update' : 'Create' }}
            </PrimaryButton>
        </template>

    </FormSection>
</template>

<script>
export default {
    name: 'CategoriesForm'
}
</script>

<script setup>
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'


defineProps({
    form: {
        type: Object,
        required: true
    },
    // esta es una segunda props para actualizar un elemento ó para crear un elemento
    updating: {
        type: Boolean,
        required: false,
        default: false
    }
})
//definir emits. Comunicacion vertical ascendente: emits
defineEmits(['submit'])

</script>


<style lang="scss" scoped></style>
