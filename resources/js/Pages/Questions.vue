<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Form from "./Tasks/Form"
import PrimaryButton from "../Jetstream/PrimaryButton";
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
        Some Title
      </h2>
      <PrimaryButton class="float-right">
        Nächste Frage
      </PrimaryButton>
    </template>

    <div class="py-8">
      <div class="pb-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex" style="align-items: center">
          <div class="w-9 bg-orange-400 text-white font-bold text-2xl text-center rounded-lg">i</div>
          <div class="ml-4">Lorem ipsum dolor sit amet. Dolore eveniet ipsum natus pariatur quisquam voluptatem voluptatum. Aliquam eligendi error incidunt ipsum iste nulla numquam ullam voluptatibus?</div>
        </div>
      </div>

      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <Form />
        </div>
      </div>
    </div>

  </AppLayout>
</template>
