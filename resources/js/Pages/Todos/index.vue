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

const props = defineProps({
    todos: {
        type: Object,
        default: () => ({}),
    },
});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route("todos.destroy", id));
    }
}

/*
function createTodo() {
    alert("xxxx");
}*/

const showConfirmDeleteModal = ref(false)

const confirmDelete = () => {
    showConfirmDeleteModal.value = true;
}

const closeModal = () => {
    showConfirmDeleteModal.value = false;
}

const deleteUser = (id) => {
    form.delete(route('todos.destroy', id), {
        onSuccess: () => closeModal()
    });
}


const form = useForm({
    name: "",
    completed: "",
});

const submit = () => {
    form.post(route("todos.store"), {
        onSuccess: () => {
            closeCreateModal();
            form.reset();
        }
    });
};

const showCreateModal = ref(false)

const showCreate = () => {    
    showCreateModal.value = true;
}

const closeCreateModal = () => {
    showCreateModal.value = false;
}

const updateCheck = (id, status) => {

    if(status) status = 0;
    else status = 1;

    const formUpdate = useForm({
        id: id,        
        completed: status
    });    

    formUpdate.put(route("todos.check_update", id), {
        onSuccess: () => {
            //alert("update success");
        }
    });
}

const completedOptions = ref([]);

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
                todos Index
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">
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
                            <PrimaryButton @click="showCreate">Add Todo List</PrimaryButton>                            
                        </div>
                        <Modal :show="showCreateModal" @close="closeCreateModal">
                            <div class="p-6">                  
                                <h2 class="text-lg font-semibold text-slate-800">Add Todo List</h2>  
                                <form @submit.prevent="submit">
                                    <div class="py-6">
                                        <InputLabel for="name" value="Name" />

                                        <TextInput
                                            id="name"
                                            type="text"
                                            class="mt-1 block w-full"  
                                            v-model="form.name"                                          
                                            required
                                            autofocus                                            
                                        />

                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.name"
                                        />
                                    </div>
                                    <div class="mt-3 flex space-x-4">
                                        <PrimaryButton
                                            type="submit"
                                            :class="{ 'opacity-25': form.processing }"
                                            :disabled="form.processing"
                                        >
                                            Create
                                        </PrimaryButton>
                                        <SecondaryButton @click="closeCreateModal">Cancel</SecondaryButton>
                                    </div>
                                </form>                
                            </div>
                        </Modal>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr v-for="todo in todos" :key="todo.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 w-5">
                                            <Checkbox    
                                                name="checkStatus"
                                                @change="updateCheck(todo.id, todo.completed)"  
                                                v-model="completedOptions"     
                                                :value=1                                            
                                                :checked="[todo.completed ? 1 : 0]"                                             
                                            />
                                        </td>
                                        <td class="px-6 py-4" :class="[todo.completed ? 'completed' : '', '']">
                                            {{ todo.name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="float-end">
                                                <PrimaryButton class="bg-red-700 ml-3" @click="confirmDelete">
                                                    Delete
                                                </PrimaryButton>
                                            </span>
                                            <Modal :show="showConfirmDeleteModal" @close="closeModal">
                                                <div class="p-6">
                                                    <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this item ?</h2>
                                                    <div class="mt-6 flex space-x-4">
                                                        <DangerButton @click="$event => deleteUser(todo.id)">Delete</DangerButton>
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