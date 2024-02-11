<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
);
</script>

<template>
    <div class="py-12">
        <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-4 py-3">
                                <Link :href="route('tutors.index')">Quick Start</Link>
                            </td>      
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-4 py-3">
                                <Link :href="route('tutors.emit')">Emit</Link>
                            </td>
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-4 py-3">
                                <Link :href="route('tutors.event')">Events</Link>
                            </td>
                        </tr>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>