<template>
    <li
        class="flex flex-row divide devide-y bg-white mb-2 rounded-md hover:bg-gray-100"
    >
        <div class="select-none cursor-pointer flex flex-1 items-center p-4">
            <div
                class="flex flex-col w-10 h-10 justify-center items-center mr-4"
            >
                <div class="relative inline-block">
                    <img
                        class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile image"
                    />
                    <span
                        class="absolute bottom-0 right-0 inline-block w-3 h-3 bg-green-600 border-2 border-white rounded-full"
                    ></span>
                </div>
            </div>
            <div class="flex-1 pl-1">
                <div class="flex">
                    <div class="flex flex-1 text-sm font-semibold">
                        {{ member.name }}
                    </div>
                    <div class="text-gray-600 dark:text-gray-800 text-xs">
                        6:00 AM
                    </div>
                </div>
                <div class="text-gray-600 dark:text-gray-800 text-sm">
                    Developer
                </div>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        chat: {
            required: true,
            type: Object,
        },
    },

    computed: {
        user() {
            return this.$page.props.auth.user;
        },

        member() {
            return this.chat.users.filter(
                (member) => member.id !== this.user.id
            )[0];
        },
    },
};
</script>
