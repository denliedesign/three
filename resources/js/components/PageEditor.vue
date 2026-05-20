<template>
    <form class="page-editor" @submit.prevent="save">
        <div v-if="message" class="alert alert-success" role="alert">{{ message }}</div>
        <div v-if="error" class="alert alert-danger" role="alert">{{ error }}</div>

        <section class="editor-section">
            <h2 class="h4">Page Details</h2>

            <div class="mb-3">
                <label class="form-label" for="page-title">Browser Title</label>
                <input id="page-title" v-model="form.title" type="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="page-description">Meta Description</label>
                <textarea id="page-description" v-model="form.meta_description" class="form-control" rows="3"></textarea>
            </div>
        </section>

        <section class="editor-section">
            <h2 class="h4">Banner</h2>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="banner-heading">Heading</label>
                    <input id="banner-heading" v-model="form.content.banner.heading" type="text" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <ImageUpload label="Banner Image" v-model="form.content.banner.image" :upload-url="uploadUrl" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="banner-position">Image Position</label>
                    <input id="banner-position" v-model="form.content.banner.position" type="text" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="banner-alt">Alt Text</label>
                    <input id="banner-alt" v-model="form.content.banner.alt" type="text" class="form-control">
                </div>
            </div>
        </section>

        <section class="editor-section">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h4 mb-0">Sections</h2>

                <select v-model="sectionToAdd" class="form-select section-picker" @change="addSelectedSection">
                    <option value="">Add Section</option>
                    <option v-for="option in sectionTypes" :key="option.type" :value="option.type">
                        {{ option.label }}
                    </option>
                </select>
            </div>

            <div v-for="(section, index) in form.content.sections" :key="section.id" class="section-panel">
                <div class="d-flex justify-content-between gap-3 mb-3">
                    <div>
                        <div class="fw-bold">{{ sectionLabel(section.type) }}</div>
                        <small class="text-muted">Section {{ index + 1 }}</small>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-outline-secondary btn-sm" :disabled="index === 0" @click="moveSection(index, -1)">Up</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" :disabled="index === form.content.sections.length - 1" @click="moveSection(index, 1)">Down</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="removeSection(index)">Remove</button>
                    </div>
                </div>

                <template v-if="section.type === 'rich_text'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Text" v-model="section.body" :rows="6" />
                </template>

                <template v-if="section.type === 'button_group'">
                    <div v-for="(button, buttonIndex) in section.buttons" :key="buttonIndex" class="nested-row">
                        <TextInput label="Button Label" v-model="button.label" />
                        <TextInput label="Button Link" v-model="button.url" type="url" />
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="section.buttons.splice(buttonIndex, 1)">Remove Button</button>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" @click="section.buttons.push({ label: '', url: '' })">Add Button</button>
                </template>

                <template v-if="section.type === 'image_grid'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Columns" v-model.number="section.columns" type="number" />

                    <div v-for="(image, imageIndex) in section.images" :key="imageIndex" class="nested-row">
                        <ImageUpload label="Image" v-model="image.src" :upload-url="uploadUrl" />
                        <TextInput label="Alt Text" v-model="image.alt" />
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="section.images.splice(imageIndex, 1)">Remove Image</button>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" @click="section.images.push({ src: '', alt: '' })">Add Image</button>
                </template>

                <template v-if="section.type === 'text_image'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Text" v-model="section.body" :rows="5" />

                    <div class="mb-3">
                        <label class="form-label">Layout</label>
                        <select v-model="section.layout" class="form-select">
                            <option value="text_left">Text Left, Image Right</option>
                            <option value="image_left">Image Left, Text Right</option>
                        </select>
                    </div>

                    <ImageUpload label="Image" v-model="section.image.src" :upload-url="uploadUrl" />
                    <TextInput label="Image Alt Text" v-model="section.image.alt" />
                </template>

                <template v-if="section.type === 'card_grid'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Columns" v-model.number="section.columns" type="number" />

                    <div v-for="(card, cardIndex) in section.cards" :key="cardIndex" class="nested-row">
                        <ImageUpload label="Image" v-model="card.image" :upload-url="uploadUrl" />
                        <TextInput label="Title" v-model="card.title" />
                        <TextInput label="Subtitle" v-model="card.subtitle" />
                        <TextInput label="Text" v-model="card.body" :rows="4" />
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="section.cards.splice(cardIndex, 1)">Remove Card</button>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" @click="section.cards.push({ image: '', title: '', subtitle: '', body: '' })">Add Card</button>
                </template>

                <template v-if="section.type === 'media_grid'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Columns" v-model.number="section.columns" type="number" />

                    <div v-for="(media, mediaIndex) in section.media" :key="mediaIndex" class="nested-row">
                        <div class="mb-3">
                            <label class="form-label">Media Type</label>
                            <select v-model="media.type" class="form-select">
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <ImageUpload
                            v-if="media.type === 'image'"
                            label="Image"
                            v-model="media.src"
                            :upload-url="uploadUrl"
                        />
                        <TextInput v-else label="Video Path" v-model="media.src" />
                        <TextInput label="Alt Text" v-model="media.alt" />
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="section.media.splice(mediaIndex, 1)">Remove Media</button>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" @click="section.media.push({ type: 'image', src: '', alt: '' })">Add Media</button>
                </template>

                <template v-if="section.type === 'callout'">
                    <TextInput label="Heading" v-model="section.heading" />
                    <TextInput label="Subheading" v-model="section.subheading" />
                    <TextInput label="Text" v-model="section.body" :rows="5" />
                </template>

                <template v-if="section.type === 'link_list'">
                    <div v-for="(link, linkIndex) in section.links" :key="linkIndex" class="nested-row">
                        <TextInput label="Link Label" v-model="link.label" />
                        <TextInput label="Link URL" v-model="link.url" />
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="section.links.splice(linkIndex, 1)">Remove Link</button>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" @click="section.links.push({ label: '', url: '' })">Add Link</button>
                </template>
            </div>
        </section>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary" :disabled="saving">
                {{ saving ? 'Saving...' : 'Save Page' }}
            </button>
            <span v-if="saving" class="text-muted">Saving your changes</span>
        </div>
    </form>
</template>

<script setup>
import { reactive, ref } from 'vue';
import ImageUpload from './ImageUpload.vue';
import TextInput from './TextInput.vue';

const props = defineProps({
    initialPage: {
        type: Object,
        required: true,
    },
    updateUrl: {
        type: String,
        required: true,
    },
    uploadUrl: {
        type: String,
        required: true,
    },
});

const sectionTypes = [
    { type: 'rich_text', label: 'Text' },
    { type: 'button_group', label: 'Button Group' },
    { type: 'image_grid', label: 'Image Grid' },
    { type: 'text_image', label: 'Text + Image' },
    { type: 'card_grid', label: 'Card Grid' },
    { type: 'media_grid', label: 'Media Grid' },
    { type: 'callout', label: 'Callout' },
    { type: 'link_list', label: 'Link List' },
];

const form = reactive({
    title: props.initialPage.title ?? '',
    meta_description: props.initialPage.meta_description ?? '',
    content: {
        banner: {
            image: props.initialPage.content?.banner?.image ?? '',
            alt: props.initialPage.content?.banner?.alt ?? '',
            position: props.initialPage.content?.banner?.position ?? '',
            heading: props.initialPage.content?.banner?.heading ?? '',
        },
        sections: normalizeSections(props.initialPage.content),
    },
});

const saving = ref(false);
const message = ref('');
const error = ref('');
const sectionToAdd = ref('');

function normalizeSections(content) {
    if (content?.sections?.length) {
        return content.sections.map((section) => ({
            id: crypto.randomUUID(),
            ...section,
        }));
    }

    return [
        createSection('rich_text', { body: content?.intro ?? '' }),
        createSection('button_group', {
            buttons: [
                content?.button ?? {
                    label: 'Register Now',
                    url: 'https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login',
                },
            ],
        }),
        createSection('image_grid', {
            columns: 1,
            images: content?.images ?? [],
        }),
    ];
}

function createSection(type, overrides = {}) {
    const base = {
        rich_text: { type, heading: '', body: '' },
        button_group: { type, buttons: [{ label: 'Register Now', url: '' }] },
        image_grid: { type, heading: '', columns: 1, images: [{ src: '', alt: '' }] },
        text_image: { type, heading: '', body: '', layout: 'text_left', image: { src: '', alt: '' } },
        card_grid: { type, heading: '', columns: 3, cards: [{ image: '', title: '', subtitle: '', body: '' }] },
        media_grid: { type, heading: '', columns: 3, media: [{ type: 'image', src: '', alt: '' }] },
        callout: { type, heading: '', subheading: '', body: '' },
        link_list: { type, links: [{ label: '', url: '' }] },
    }[type];

    return {
        id: crypto.randomUUID(),
        ...base,
        ...overrides,
    };
}

function addSelectedSection() {
    if (! sectionToAdd.value) {
        return;
    }

    form.content.sections.push(createSection(sectionToAdd.value));
    sectionToAdd.value = '';
}

function sectionLabel(type) {
    return sectionTypes.find((option) => option.type === type)?.label ?? type;
}

function moveSection(index, direction) {
    const newIndex = index + direction;
    const section = form.content.sections.splice(index, 1)[0];
    form.content.sections.splice(newIndex, 0, section);
}

function removeSection(index) {
    form.content.sections.splice(index, 1);
}

function payload() {
    return {
        title: form.title,
        meta_description: form.meta_description,
        content: {
            banner: form.content.banner,
            sections: form.content.sections.map(({ id, ...section }) => section),
        },
    };
}

async function save() {
    saving.value = true;
    message.value = '';
    error.value = '';

    try {
        const response = await window.axios.patch(props.updateUrl, payload());
        message.value = response.data.message ?? 'Page saved.';
    } catch (saveError) {
        error.value = saveError.response?.data?.message ?? 'The page could not be saved.';
    } finally {
        saving.value = false;
    }
}
</script>

<style scoped>
.page-editor {
    max-width: 980px;
}

.editor-section {
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
}

.section-picker {
    max-width: 220px;
}

.section-panel {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    margin-bottom: 1rem;
    padding: 1rem;
}

.nested-row {
    border-top: 1px solid #eef0f2;
    margin-top: 1rem;
    padding-top: 1rem;
}
</style>
