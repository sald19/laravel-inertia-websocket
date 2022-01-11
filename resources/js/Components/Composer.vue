<template>
    <form class="bg-white p-4 flex items-center" @submit.prevent="handleSubmit">
        <input
            class="flex items-center focus:ring-0 outline-none border-none h-10 w-full rounded px-3 text-sm"
            type="text"
            v-model="message"
            placeholder="Type your message…"
        />
        <button type="submit">
            <svg
                class="h-6 w-6 rotate-90 stroke-green-800 stroke-1"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>
    </form>
</template>

<script>
export default {
    props: [],

    data() {
        return {
            message: null,
        };
    },

    methods: {
        handleSubmit() {
            console.log("submit", this.message);

            // this.$inertia.post(route("chats.store"), { message: this.message });

            axios.post(route("chats.store")).then((response) => {
                console.log(response.data);
            });
        },
    },
};
</script>
