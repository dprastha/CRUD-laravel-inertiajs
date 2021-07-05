<template>
    <layout title="Detail Contact">
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateContact">
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            id="name"
                            class="form-control"
                            v-model="form.name"
                        />
                        <small v-if="errors.name">{{ errors.name }}</small>
                    </div>

                    <div class="form-group mb-3" mb-3>
                        <label for="email">Email</label>
                        <input
                            type="text"
                            id="email"
                            class="form-control"
                            v-model="form.email"
                        />
                        <small v-if="errors.email">{{ errors.email }}</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp">No HP</label>
                        <input
                            type="number"
                            id="nohp"
                            class="form-control"
                            v-model="form.nohp"
                        />
                        <small v-if="errors.nohp">{{ errors.nohp }}</small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Edit Data
                    </button>
                    <inertia-link
                        href=""
                        @click.prevent="deleteContact"
                        class="btn btn-outline-danger"
                        >Delete</inertia-link
                    >
                </form>
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
    data() {
        return {
            form: {
                name: this.contact.name,
                email: this.contact.email,
                nohp: this.contact.nohp
            }
        };
    },
    props: {
        title: String,
        errors: Object,
        contact: Object
    },
    methods: {
        updateContact() {
            this.$inertia.put("/contacts/" + this.contact.id, this.form);
        },
        deleteContact() {
            if (confirm(`Data contact ingin dihapus?`)) {
                this.$inertia.delete("/contacts/" + this.contact.id);
            } else {
                return false;
            }
        }
    }
};
</script>

<style scoped>
small {
    color: red;
}
</style>
