<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { ref } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const props = defineProps({
    blogs: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route("blogs.destroy", id));
    }
}

const showConfirmDeleteModal = ref(false)

const confirmDelete = () => {
    showConfirmDeleteModal.value = true;
}

const closeModal = () => {
    showConfirmDeleteModal.value = false;
}

const deleteUser = (id) => {
    form.delete(route('blogs.destroy', id), {
        onSuccess: () => closeModal()
    });
}

</script>

<template>        
    <Head title="Blogs" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Blogs Index
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div
                            v-if="$page.props.flash.message"
                            class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert"
                        >
                            <span class="font-medium">
                                {{ $page.props.flash.message }}
                            </span>
                        </div>
                        <div class="mb-2">
                            <Link :href="route('blogs.create')">
                            <PrimaryButton>Add Blog</PrimaryButton>
                            </Link>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Edit
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Delete
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Delete Modal Confirm
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="blog in blogs" :key="blog.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ blog.id }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ blog.title }}
                                        </th>

                                        <td class="px-6 py-4">
                                            <Link :href="route('blogs.edit', blog.id)
                                                " class="px-4 py-2 text-white bg-blue-600 rounded-lg">Edit</Link>
                                        </td>
                                        <td class="px-6 py-4">
                                            <PrimaryButton class="bg-red-700" @click="destroy(blog.id)">
                                                Delete
                                            </PrimaryButton>
                                        </td>
                                        <td class="px-6 py-4">
                                            <PrimaryButton class="bg-red-700" @click="confirmDelete">
                                                Delete
                                            </PrimaryButton>
                                            <Modal :show="showConfirmDeleteModal" @close="closeModal">
                                                <div class="p-6">
                                                    <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this item ?</h2>
                                                    <div class="mt-6 flex space-x-4">
                                                        <DangerButton @click="$event => deleteUser(blog.id)">Delete</DangerButton>
                                                        <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                                                    </div>
                                                </div>
                                                
                                            </Modal>
                                        </td>
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