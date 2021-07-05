<template>
    <layout title="List Contact">
        <div class="row">
            <div class="col-md-10">
                <inertia-link
                    href="/contacts/create"
                    class="btn btn-success mb-2"
                    >Add Contact</inertia-link
                >
                <div
                    v-if="$page.props.flash.message"
                    class="alert alert-success"
                    role="alert"
                >
                    {{ $page.props.flash.message }}
                </div>
                <h3>List Contact</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="contact in contacts">
                            <td>{{ contact.name }}</td>
                            <td>{{ contact.email }}</td>
                            <td>{{ contact.nohp }}</td>
                            <td>
                                <inertia-link
                                    :href="`/contacts/${contact.id}/edit`"
                                    >&raquo;</inertia-link
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from "../../layout/Layout.vue";
export default {
    components: {
        Layout
    },
    props: {
        title: String,
        contacts: Array
    }
};
</script>

<style scoped></style>
