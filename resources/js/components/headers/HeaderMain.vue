<template>
    <header>
        <div class="bg-white py-4 relative shadow-md w-full z-10">
            <div class="
                    container flex flex-row justify-center mx-auto relative px-4
                    md:items-baseline md:justify-between
                "
            >

                <!-- Logo / Home Link -->
                <a
                    class="
                        text-xl
                        md:mr-16
                    "
                    :href="route('home', '')"
                >
                    {{ laravel('appName', 'LaravelBaseApp') }}
                </a>

                <!-- Desktop Navigation -->
                <nav
                    class="
                        absolute flex flex-1 flex-col right-0 mr-6
                        md:flex-row md:mr-0 md:relative
                    "
                >

                    <hamburger-button
                        class="md:hidden"
                        :show_close_icon="is_mobile_nav_visible"
                        @button-toggled="setMobileNavVisible"
                    />

                    <header-navigation-desktop
                        :navigation_links="navigation_links"
                    />

                </nav>

            </div>
        </div>

        <!-- Mobile Navigation -->
        <header-navigation-mobile
            :is_visible="is_mobile_nav_visible"
            :navigation_links="navigation_links"
            @link-selected="setMobileNavVisible(false)"
        />
    </header>
</template>


<script>
    import HeaderNavigationDesktop from './HeaderNavigationDesktop';
    import HeaderNavigationMobile from './HeaderNavigationMobile';

    export default {
        name: "HeaderMain",
        components: {
            HeaderNavigationDesktop,
            HeaderNavigationMobile
        },
        data() {
            return {
                is_mobile_nav_visible: false,
                mobile_nav_scroll_class: 'mobile-nav-scroll-lock',
                navigation_links: {}
            }
        },
        created() {
            this.buildNavigation();
        },
        methods: {
            buildNavigation() {
                // This could be via api call / props etc.
                this.navigation_links = {
                    dashboard: {
                        label: "Dashboard",
                        url: route('admin'),
                        require_auth: true
                    },
                    about: {
                        label: "About",
                        url: route('admin.about'),
                        require_auth: true
                    },
                };
            },
            setMobileNavVisible(is_visible) {
                this.is_mobile_nav_visible = is_visible;

                if (is_visible) {
                    document.body.classList.add(this.mobile_nav_scroll_class);
                } else {
                    document.body.classList.remove(this.mobile_nav_scroll_class);
                }
            },
        }
    }
</script>