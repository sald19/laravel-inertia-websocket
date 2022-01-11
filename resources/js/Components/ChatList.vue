<template>
    <div
        class="container flex flex-col mx-auto w-full items-center justify-center"
    >
        <ul class="flex flex-col divide divide-y">
            <chatItem v-for="n in 4" />
        </ul>
    </div>
</template>

<script>
import ChatItem from "@/Components/ChatItem.vue";

export default {
    props: [],

    components: {
        ChatItem,
    },
};
</script>
