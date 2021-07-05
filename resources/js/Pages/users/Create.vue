<template>
    <layout title="Detail Contact">
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="create">
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

                    <div class="form-group mb-3">
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
                        Add Data
                    </button>
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
                name: "",
                email: "",
                nohp: ""
            }
        };
    },
    props: {
        title: String,
        errors: Object
    },
    methods: {
        create() {
            this.$inertia.post("/contacts", this.form);
        }
    }
};
</script>

<style scoped>
small {
    color: red;
}
</style>
