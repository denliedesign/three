import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import PageEditor from './components/PageEditor.vue';

window.Alpine = Alpine;

Alpine.start();

const pageEditor = document.getElementById('page-editor');

if (pageEditor) {
    createApp(PageEditor, {
        initialPage: JSON.parse(atob(pageEditor.dataset.page)),
        updateUrl: pageEditor.dataset.updateUrl,
        uploadUrl: pageEditor.dataset.uploadUrl,
    }).mount(pageEditor);
}
