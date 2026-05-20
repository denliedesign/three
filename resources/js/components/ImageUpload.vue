<template>
    <div class="mb-3">
        <label class="form-label">{{ label }}</label>

        <div v-if="modelValue" class="mb-2">
            <img :src="imagePreview" alt="" class="image-preview">
            <small class="text-muted d-block mt-1">{{ modelValue }}</small>
        </div>

        <input class="form-control" type="file" accept="image/*" @change="uploadImage">

        <div v-if="uploading" class="text-muted mt-1">Uploading image...</div>
        <div v-if="error" class="text-danger mt-1">{{ error }}</div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true,
    },
    modelValue: {
        type: String,
        default: '',
    },
    uploadUrl: {
        type: String,
        required: true,
    },
});

const emit = defineEmits(['update:modelValue']);

const uploading = ref(false);
const error = ref('');

const imagePreview = computed(() => {
    if (! props.modelValue) {
        return '';
    }

    if (props.modelValue.startsWith('/') || props.modelValue.startsWith('http')) {
        return props.modelValue;
    }

    return `/images/${props.modelValue}`;
});

async function uploadImage(event) {
    const file = event.target.files?.[0];

    if (! file) {
        return;
    }

    uploading.value = true;
    error.value = '';

    const formData = new FormData();
    formData.append('image', file);

    try {
        const response = await window.axios.post(props.uploadUrl, formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        });

        emit('update:modelValue', response.data.path);
        event.target.value = '';
    } catch (uploadError) {
        error.value = uploadError.response?.data?.message ?? 'The image could not be uploaded.';
    } finally {
        uploading.value = false;
    }
}
</script>

<style scoped>
.image-preview {
    border: 1px solid #dee2e6;
    border-radius: 6px;
    max-height: 120px;
    max-width: 220px;
    object-fit: cover;
}
</style>
