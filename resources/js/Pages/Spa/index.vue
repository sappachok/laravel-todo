<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { ref } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";

import VueSidebarMenu from 'vue-sidebar-menu'
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css';

import LeftMenu from "@/Layouts/MyLeftMenu.vue";

//https://yaminncco.github.io/vue-sidebar-menu/#/


</script>
<style>
.completed {
    text-decoration: line-through;
    color: rgb(195, 193, 193);
}
</style>

<template>        
    <Head title="todos" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                SPA 1
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>