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

import Event01_Code from "@/Examples/event01_code.vue";
import Event01 from "@/Examples/event01.vue";

import Event02_Code from "@/Examples/event02_code.vue";
import Event02 from "@/Examples/event02.vue";

import Event03_Code from "@/Examples/event03_code.vue";
import Event03 from "@/Examples/event03.vue";

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
                Tutorial / Events
            </h2>
        </template>

        <div class="grid grid-cols-5 gap-4">
            <div>
                <LeftMenu :active="route().current('tutors.events')"></LeftMenu>
            </div>

            <div class="col-span-4">

              <Event01_Code></Event01_Code>
              <Event01></Event01>

              <Event02_Code></Event02_Code>
              <Event02></Event02>

              <Event03_Code></Event03_Code>
              <Event03></Event03>
            </div>
        </div>  

    </AuthenticatedLayout>
</template>

<script>
  export default {
    data() {
      return {
        menu: [
          {
            header: 'Main Navigation',
            hiddenOnCollapse: true
          },
          {
            href: '/',
            title: 'Dashboard',
            icon: 'fa fa-user'
          },
          {
            href: '/charts',
            title: 'Charts',
            icon: 'fa fa-chart-area',
            child: [
              {
                href: '/charts/sublink',
                title: 'Sub Link'
              }
            ]
          }
        ]
      }
    }
  }
</script>

