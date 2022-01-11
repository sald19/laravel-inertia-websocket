<template>
    <li class="flex flex-row divide devide-y bg-white mb-2 rounded-md">
        <div class="select-none cursor-pointer flex flex-1 items-center p-4">
            <div
                class="flex flex-col w-10 h-10 justify-center items-center mr-4"
            >
                <a href="#" class="block relative">
                    <img
                        class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt=""
                    />
                </a>
            </div>
            <div class="flex-1 pl-1 mr-16">
                <div class="font-medium">{{ member.name }}</div>
                <div class="text-gray-600 dark:text-gray-800 text-sm">
                    Developer
                </div>
            </div>
            <div class="text-gray-600 dark:text-gray-800 text-xs">6:00 AM</div>
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
