<template>
    <input
        v-if="laravel('csrfToken')"
        name="_token"
        type="hidden"
        :value="laravel('csrfToken')"
    >
</template>

<script>
    export default {
        name: "CsrfInput"
    }
</script>