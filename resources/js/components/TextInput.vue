<template>
    <div class="mb-3">
        <label class="form-label">{{ label }}</label>

        <textarea
            v-if="rows"
            class="form-control"
            :rows="rows"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        ></textarea>

        <input
            v-else
            class="form-control"
            :type="type"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        >
    </div>
</template>

<script setup>
defineProps({
    label: {
        type: String,
        required: true,
    },
    modelValue: {
        type: [String, Number],
        default: '',
    },
    type: {
        type: String,
        default: 'text',
    },
    rows: {
        type: Number,
        default: null,
    },
});

defineEmits(['update:modelValue']);
</script>
