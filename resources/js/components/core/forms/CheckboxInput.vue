<template>
    <div class="flex items-center">
        <input
            :id="input_id"
            class="cursor-pointer"
            :class="input_class"
            :checked="input_checked"
            :name="input_name"
            :ref="input_id"
            :required="input_required"
            type="checkbox"
        >

        <label
            class="ml-2 cursor-pointer"
            :class="label_class"
            :for="input_id"
        >
            {{ label_text }}
        </label>
    </div>
</template>

<script>
    export default {
        name: "CheckboxInput",
        props: {
            label_class: {
                default: '',
                type: String
            },
            label_text: {
                required: true,
                type: String
            },
            input_autofocus: {
                default: false,
                type: Boolean
            },
            input_checked: {
                default: false,
                type: Boolean
            },
            input_class: {
                default: '',
                type: String
            },
            input_id: {
                required: true,
                type: String
            },
            input_name: {
                required: true,
                type: String
            },
            input_required: {
                default: false,
                type: Boolean
            },
        },
        mounted() {
            this.autofocus();
        },
        methods: {
            autofocus() {
                if (this.input_autofocus && this.$refs[this.input_id]) {
                    this.$nextTick(() => {
                        this.$refs[this.input_id].focus();
                    });
                }
            },
        }
    }
</script>