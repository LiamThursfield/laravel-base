<template>
    <transition name="slide-left">
        <nav
            v-show="is_visible"
            class="
                absolute bg-gray-200 inset-0 mt-16 z-30 w-full
                md:hidden
            "
        >
            <div class="flex flex-col h-full overflow-auto">

                <!-- Navigation Links -->
                <ul class="flex-1">
                    <li
                        v-for="(navigation_link, key) in navigation_links"
                        v-if="showLink(navigation_link)"
                        :key="'header-link-mobile-' + key"
                        @click="linkSelected"
                    >
                        <a
                            class="
                                block p-4 text-l text-center
                                hover:bg-gray-900 hover:text-white
                            "
                            :href="navigation_link.url"
                        >
                            {{ navigation_link.label }}
                        </a>
                    </li>
                </ul>

                <!-- User Navigation -->
                <div class="bg-gray-900 text-white text-sm">
                    <div
                        v-if="user.isGuest()"
                        class="flex"
                    >
                        <a
                            v-if="route('login')"
                            class="flex-1 p-2 text-center hover:bg-gray-800"
                            :class="{'border-r border-gray-900': route('register')}"
                            :href="route('login')"
                        >
                            Login
                        </a>

                        <a
                            v-if="route('register')"
                            class="flex-1 p-2 text-center hover:bg-gray-800"
                            :href="route('register')"
                        >
                            Register
                        </a>
                    </div>

                    <div
                        v-else
                        class="flex flex-col"
                    >
                        <p class="p-4 text-base text-center">
                            {{ user.name }}
                        </p>

                        <form
                            class="w-full"
                            :action="route('logout')"
                            method="POST"
                        >
                            <csrf-input />

                            <button
                                class="w-full p-4 text-center hover:bg-gray-800"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </transition>
</template>

<script>
    export default {
        name: "HeaderNavigationMobile",
        props: {
            is_visible: {
                required: true,
                type: Boolean
            },
            navigation_links: {
                required: true,
                type: Object
            },
        },
        methods: {
            linkSelected() {
                this.$emit('link-selected', true);
            },
            showLink(navigation_link) {
                if (!navigation_link.url) {
                    return false;
                }

                if (!navigation_link.require_auth) {
                    return true;
                }

                // Only show the link if the user is authenticated
                return user.isAuthenticated();
            }
        }
    }
</script>