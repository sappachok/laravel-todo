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

import Emit01_Code from "@/Examples/emit01_code.vue";
import Emit01 from "@/Examples/emit01.vue";

import Emit02_Code from "@/Examples/emit02_code.vue";
import Emit02 from "@/Examples/emit02.vue";

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
                Tutorial / Emit
            </h2>
        </template>

        <div class="grid grid-cols-5 gap-4">
            <div>
                <LeftMenu></LeftMenu>
            </div>
            <div class="col-span-4">
              <Emit01_Code></Emit01_Code>
              <Emit01></Emit01>

              <Emit02_Code></Emit02_Code>
              <Emit02></Emit02>
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

