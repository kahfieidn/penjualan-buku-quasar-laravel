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
                      @reset="onReset"
                      class="q-gutter-md"
                    >
                      <q-input
                        filled
                        v-model="username"
                        label="Username"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />

                      <q-input
                        filled
                        v-model="email"
                        label="Email"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />

                      <q-input
                        filled
                        v-model="no_handphone"
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
                        v-model="password"
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

import { useQuasar } from "quasar";
import { ref } from "vue";

export default {
  setup() {
    const $q = useQuasar();

    const username = ref(null);
    const email = ref(null);
    const no_handphone = ref(null);
    const password = ref(null);

    return {
      username,
      email,
      no_handphone,
      password,

      onSubmit() {
          $q.notify({
            color: "green-4",
            textColor: "white",
            icon: "cloud_done",
            message: "Submitted",
          });
      },

      onReset() {
        username.value = null;
        email.value = null;
        no_handphone.value = null;
        password.value = null;
      },
    };
  },
};


</script>
<style lang="">
    
</style>