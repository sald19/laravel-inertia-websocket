<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <ul
                    class="ext-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200"
                >
                    <div
                        v-for="(user, index) in localUsers"
                        class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="flex justify-end px-4 pt-4">
                            <button
                                id="dropdownButton"
                                data-dropdown-toggle="dropdown"
                                class="hidden sm:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                                type="button"
                            >
                                <svg
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img
                                class="mb-3 w-24 h-24 rounded-full shadow-lg"
                                src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                alt="Bonnie image"
                            />
                            <h3
                                class="mb-1 text-xl font-medium text-gray-900 dark:text-white"
                            >
                                {{ user.name }} - {{ user.id }}
                            </h3>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400"
                                >Visual Designer</span
                            >
                            <div class="flex mt-4 space-x-3 lg:mt-6">
                                <a
                                    href="#"
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >Add friend</a
                                >
                                <a
                                    href="#"
                                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"
                                    >Message</a
                                >
                            </div>
                        </div>
                    </div>
                </ul>

                <button @click="loadMore" :disabled="loadingMore">
                    Load More
                </button>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },

    props: ["users"],

    data() {
        return {
            loadingMore: false,
            localUsers: this.users.data,
            pagination: this.users,
        };
    },

    methods: {
        handleClick() {
            console.log("test");
        },

        loadMore() {
            if (this.loadingMore) return;

            this.loadingMore = true;

            this.$inertia.visit(
                `/users/?page=${this.pagination.current_page + 1}`,
                {
                    preserveState: true,
                    preserveScroll: true,

                    onSuccess: (page) => {
                        console.log({ page });
                        this.localUsers = [
                            ...this.localUsers,
                            ...page.props.users.data,
                        ];

                        console.log({ localUsers: this.localUsers });

                        this.pagination = page.props.users;
                    },
                    onFinish: (visit) => {
                        this.loadingMore = false;
                    },
                }
            );
        },
    },
};
</script>
