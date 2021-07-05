<template>
    <layout title="About">
        <h3>This Page Using Inertia JS</h3>
    </layout>
</template>

<script>
import Layout from "../layout/Layout.vue";
export default {
    components: {
        Layout
    },
    props: {
        title: String
    }
};
</script>

<style scoped></style>
