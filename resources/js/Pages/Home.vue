<template>
    <layout title="Home">
        <h1>Hello World</h1>
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
