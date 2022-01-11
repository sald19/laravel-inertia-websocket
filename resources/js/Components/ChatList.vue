<template>
    <ul class="container flex flex-col mx-auto w-full justify-center p-1">
        <chatItem
            :chat="chat"
            @click="selectChat({ id: chat.id })"
            v-for="chat in chats"
        />
    </ul>
</template>

<script>
import ChatItem from "@/Components/ChatItem.vue";

export default {
    props: {
        chats: {
            required: true,
            type: Array,
        },
    },

    components: {
        ChatItem,
    },

    methods: {
        selectChat({ id }) {
            this.$emit("onSelectChat", id);
        },
    },
};
</script>
