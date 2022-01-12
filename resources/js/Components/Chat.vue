<template>
    <div class="bg-white overflow-hidden shadow-sm">
        <div
            class="flex flex-row h-full p-x-6 bg-white border-b border-gray-200"
        >
            <div class="basis-2/3">
                <div
                    class="flex flex-col flex-grow w-full h-full max-w-xl overflow-hidden"
                >
                    <div
                        class="flex flex-col flex-grow bg-gray-200 h-0 p-4 overflow-auto"
                    >
                        <Message />
                        <div class="flex w-full mt-2 space-x-3 max-w-xs">
                            <img
                                alt=""
                                class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            />
                            <div>
                                <div
                                    class="bg-green-200 p-3 rounded-r-lg rounded-bl-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                        </div>
                        <div class="flex w-full mt-2 space-x-3 max-w-xs">
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                            <div>
                                <div
                                    class="bg-green-200 p-3 rounded-r-lg rounded-bl-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <img
                                class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                        </div>
                        <div class="flex w-full mt-2 space-x-3 max-w-xs">
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                            <div>
                                <div
                                    class="bg-green-200 p-3 rounded-r-lg rounded-bl-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                        </div>
                        <div
                            class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end"
                        >
                            <div>
                                <div
                                    class="bg-white text-gray-800 p-3 rounded-l-lg rounded-br-lg"
                                >
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit.
                                    </p>
                                </div>
                                <span class="text-xs text-gray-500 leading-none"
                                    >2 min ago</span
                                >
                            </div>
                            <div
                                class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                            ></div>
                        </div>
                    </div>

                    <Composer />
                </div>
            </div>
            <div class="basis-1/3 bg-gray-200 border-l border-gray-300">
                <ChatList
                    @onSelectChat="handleSelectedChat"
                    :selected-chat-id="selectedChatId"
                    :chats="chats"
                />
            </div>
        </div>
    </div>
</template>

<script>
import ChatList from "@/Components/ChatList.vue";
import Composer from "@/Components/Composer.vue";
import Message from "@/Components/Message.vue";

export default {
    props: {
        chats: {
            type: Array,
            required: true,
        },
    },

    components: {
        ChatList,
        Composer,
        Message,
    },

    data() {
        return {
            selectedChatId: undefined,
        };
    },

    methods: {
        handleSelectedChat() {
            console.log("handleSelectedChat");
        },
    },

    created() {
        this.selectedChatId =
            this.chats.length > 0 ? this.chats[0].id : undefined;
    },
};
</script>
