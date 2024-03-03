<template lang="">
  <q-layout view="hHr LpR lFf" class="bg-blue-grey-1">
    <q-page-container>
      <q-page class="row items-center justify-center" padding>
        <div class="row full-width">
          <div class="col-md-8 offset-md-2 col-xs-12 q-pl-md q-pr-md q-pt-sm">
            <q-card flat class="bg-white text-black">
              <div class="row">

            <q-card-section class="text-blue-grey-14">
                <div class="text-h5">Registrasi</div>
            </q-card-section>
                <div class="col-md-12 col-xs-12">
                  <div class="q-pa-md">
                    <q-form
                      @submit="onSubmit"
                      class="q-gutter-md"
                    >
                      <q-input
                        filled
                        v-model="form.username"
                        label="Username"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />
                      <q-input
                        filled
                        v-model="form.nama_lengkap"
                        label="Nama Lengkap"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />

                      <q-input
                        filled
                        v-model="form.email"
                        label="Email"
                        lazy-rules
                        :rules="[ (val, rules) => rules.email(val) || 'Please enter a valid email address' ]"
                      />

                      <q-input
                        filled
                        v-model="form.no_handphone"
                        label="No. Handphone"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />

                      <q-input
                        filled
                        type="password"
                        v-model="form.password"
                        label="Password"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />


                      <div>
                        <q-btn label="Registrasi" type="submit" color="primary" />
                        <q-btn
                          label="Sudah Punya Akun"
                          to="/auth/login"
                          color="primary"
                          flat
                          class="q-ml-sm"
                        />
                      </div>
                    </q-form>
                  </div>
                </div>

              </div>
            </q-card>
          </div>
        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { api } from "boot/axios";
import { useQuasar } from "quasar";

export default {
  name: "RegisterPage",
  data() {
    return {
      form: {
        nama_lengkap: null,
        username: null,
        email: null,
        no_handphone: null,
        password: null,
      },
    };
  },
  methods: {
    onSubmit() {
      api
        .post("/api/admin/register", {
          nama_lengkap: this.form.nama_lengkap,
          username: this.form.username,
          email: this.form.email,
          no_handphone: this.form.no_handphone,
          password: this.form.password,
        })
        .then((res) => {
          console.log(res);
          if (res.data.success != true && res.data.data.username) {
            this.$q.notify({
              color: "negative",
              message: res.data.data.username,
            });
          }else if (res.data.success != true && res.data.data.email) {
            this.$q.notify({
              color: "negative",
              message: res.data.data.email,
            });
          }else {
            this.$q.notify({
              color: "positive",
              message: res.data.message,
            });
            this.$router.push("login");
          }
        });
    },
  },
};
</script>

<style lang="">
</style>