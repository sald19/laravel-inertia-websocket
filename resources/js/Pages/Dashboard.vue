<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Chat class="h-96" />
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

import Chat from "@/Components/Chat.vue";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Chat,
    },

    props: ["foo"],

    methods: {
        handleClick() {
            console.log("test");
        },
    },
};
</script>
